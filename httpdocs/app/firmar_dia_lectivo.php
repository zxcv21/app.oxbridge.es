<!--
-ID Pag: p_01393
-NAME: firmar_dia_lectivo.php
-->

<?
/*

get/post:

p_01393_dia_lectivo
p_01393_alumno_id
p_01393_firma_archivo
p_01393_directirio_id
p_01393_firma_id
p_01393_finalizador

*/

if(isset($_GET['p_01393_alumno_id'])){$_POST['p_01393_alumno_id']=$_GET['p_01393_alumno_id'];}


if(isset($_GET['p_01393_objeto_firmar_dias'])){$_POST['p_01393_objeto_firmar_dias']=$_GET['p_01393_objeto_firmar_dias'];}
/*
	p_01393_objeto_firmar_dias[].dia_lectivo_id
	p_01393_objeto_firmar_dias[].fecha_dia_lectivo(AAAA_MM_DD)
	p_01393_objeto_firmar_dias[].firma_id
	p_01393_alumno_id
	p_01393_firma_archivo
	p_01393_directirio_id
	p_01393_firma_id
	
	if(isset($_GET['p_01393_alumno_id'])){$_POST['p_01393_alumno_id']=$_GET['p_01393_alumno_id'];}
	if(isset($_GET['p_01393_firma_archivo'])){$_POST['p_01393_firma_archivo']=$_GET['p_01393_firma_archivo'];}
	if(isset($_GET['p_01393_directirio_id'])){$_POST['p_01393_directirio_id']=$_GET['p_01393_directirio_id'];}
	if(isset($_GET['p_01393_firma_id'])){$_POST['p_01393_firma_id']=$_GET['p_01393_firma_id'];}
*/
if(isset($_GET['p_01393_finalizador'])){$_POST['p_01393_finalizador']=$_GET['p_01393_finalizador'];}

function p_01393_corregir_directorio($dir)
{
	$dir=explode("_",$dir);
	while(strlen($dir[0])<4)
		$dir[0]="0"+$dir[0];
		
	while(strlen($dir[1])<2)
		$dir[1]="0"+$dir[1];
	$dir=implode("_",$dir);
	
	return $dir;
}

if(isset($_POST['p_01393_objeto_firmar_dias']))
{
	//corregir separacion de espacios
	$firma = str_replace(" ","+",$_POST['p_01393_firma_archivo']);
	
	$tamano = $_FILES["p_01393_firma_archivo"]['size'];
	$tipo = $_FILES["p_01393_firma_archivo"]['type'];
	$archivo = $_FILES["p_01393_firma_archivo"]['name'];
	
	$ruta = "http://app.oxbridge.es/app/movil/firmas_alumnos/".p_01393_corregir_directorio($_POST['p_01393_directirio_id']);
	
	$destino = $ruta."/".$_POST['p_01393_firma_id'].".png";
	$data = file_get_contents($firma);
	 
	//quitar "DATA:," del contenido del archivo
	$filteredData=substr($firma, strpos($firma, ",")+1);
	// decodificar base 64 para guardar en png
	$decodedData=base64_decode($filteredData);
	
	//crear carpeta de mes si no existe
	if(!file_exists($ruta)){
		mkdir ($ruta);
		//echo "Se ha creado el directorio: " . $ruta."<br>";
	}
	
	//abrir carpeta
	$fic_name = $_POST['p_01393_firma_id'].'.png';
	$fp = fopen($destino, 'wb');
	
	
	//guardar firma;
	$ok = fwrite( $fp, $decodedData);
	fclose( $fp );
	
	if($ok){
													
		$actualizar = file_get_contents("http://s.oxbridge.es/ox/estructura_web/codigo/alumno_v2/clases_03_firma_01_asp_01_modificar.asp".
													"?p_0001293_get_dia_lectivo_id=".$_POST['p_01393_dia_lectivo'].
													"&p_0001293_get_alumno_id=".$_POST['p_01393_alumno_id'].
													"&p_0001293_get_firmado=1".
													"&p_0001293_get_final_consulta=window.parent.ocultar_mostrar('signature-pad-cargando');".
																							"window.parent.ocultar_mostrar('p_00995_firma');".
																							"window.parent.ocultar_mostrar('p_00995_firma_botones');"
													);
													
		echo "///////\n".$actualizar."\n/////////\n";
		
		echo "window.parent.console.info('FIRMA DIA:".$_POST['p_01393_dia_lectivo']." FIRMADO');\n";//FIRMA
		
		echo "if(window.parent.document.getElementById('p_00987_boton_firma')){\n";
		//boton firma
		echo "	window.parent.document.getElementById('p_00987_boton_firma_pendiente').style.display='none';\n";
		echo "	window.parent.document.getElementById('p_00987_boton_firma').style.display='inline';\n";
		echo "}\n";
		
	}else{
		echo "ERROR: ".$ok;
		$actualizar = file_get_contents("http://s.oxbridge.es/ox/estructura_web/codigo/alumno_v2/clases_03_firma_01_asp_01_modificar.asp".
													"?p_0001293_get_dia_lectivo_id=".$_POST['p_01393_dia_lectivo'].
													"&p_0001293_get_alumno_id=".$_POST['p_01393_alumno_id'].
													"&p_0001293_get_firmado=0"
													);
		
		echo 'window.parent.dia_lectivo['.$_POST['p_01393_dia_lectivo'].'].firmado="0";\n';
		echo 'window.parent.console.info("FIRMA DIA:'.$_POST['p_01393_dia_lectivo'].' ¡ERROR!");\n';//FIRMA
		//boton firma
		/*echo 'window.parent.document.getElementById("p_00987_boton_firma_pendiente").style.display="inline";\n';
		echo 'window.parent.document.getElementById("p_00987_boton_firma").style.display="none";\n';*/
	}
}
?>