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

if(isset($_GET['p_01393_dia_lectivo'])){$_POST['p_01393_dia_lectivo']=$_GET['p_01393_dia_lectivo'];}
if(isset($_GET['p_01393_alumno_id'])){$_POST['p_01393_alumno_id']=$_GET['p_01393_alumno_id'];}
if(isset($_GET['p_01393_firma_profesor'])){$_POST['p_01393_firma_profesor']=$_GET['p_01393_firma_profesor'];}

if(isset($_GET['p_01393_firma_archivo'])){$_POST['p_01393_firma_archivo']=$_GET['p_01393_firma_archivo'];}
if(isset($_GET['p_01393_directirio_id'])){$_POST['p_01393_directirio_id']=$_GET['p_01393_directirio_id'];}
if(isset($_GET['p_01393_firma_id'])){$_POST['p_01393_firma_id']=$_GET['p_01393_firma_id'];}

if(isset($_GET['p_01393_finalizador'])){$_POST['p_01393_finalizador']=$_GET['p_01393_finalizador'];}

/*
echo $_POST['p_01393_dia_lectivo']."\n";
echo $_POST['p_01393_alumno_id']."\n";

echo $_POST['p_01393_firma_archivo']."\n";
echo $_POST['p_01393_directirio_id']."\n";
echo $_POST['p_01393_firma_id']."\n";

echo $_POST['p_01393_finalizador']."\n";
*/

if(isset($_POST['p_01393_firma_archivo']) && isset($_POST['p_01393_alumno_id']) && isset($_POST['p_01393_dia_lectivo']))
{
	//corregir separacion de espacios
	$firma = str_replace(" ","+",$_POST['p_01393_firma_archivo']);
	
	$tamano = $_FILES["p_01393_firma_archivo"]['size'];
	$tipo = $_FILES["p_01393_firma_archivo"]['type'];
	$archivo = $_FILES["p_01393_firma_archivo"]['name'];
	
	$ruta = "imagenes/".$_POST['p_01393_directirio_id'];
	
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
													
		$actualizar = file_get_contents("https://s.oxbridge.es/ox/estructura_web/codigo/alumno_v2/clases_03_firma_01_asp_01_modificar.asp".
													"?p_0001293_get_dia_lectivo_id=".$_POST['p_01393_dia_lectivo'].
													"&p_0001293_get_alumno_id=".$_POST['p_01393_alumno_id'].
													"&p_0001293_get_firma_profesor=".$_POST['p_01393_firma_profesor'].
													"&p_0001293_get_firmado=1".
													"&p_0001293_get_final_consulta=window.parent.ocultar_mostrar('signature-pad-cargando');".
																							"window.parent.ocultar_mostrar('p_00995_firma');".
																							"window.parent.ocultar_mostrar('p_00995_firma_botones');"
													);
													
		echo "///////\n".$actualizar."\n/////////\n";
		
		echo "window.parent.console.info('FIRMA DIA:".$_POST['p_01393_dia_lectivo']." FIRMADO');\n";//FIRMA
		
		if( $_POST['p_01393_volver_a_oxbridgetefl'] == 1 )
		{
			//$url = 'Location: https://oxbridgetefl.com/activities/activities_01_class_05_crear_08_firma.php?p_0001429_get_dia_lectivo_id='.$_POST['p_01393_dia_lectivo'];
			$url = 'Location: https://oxbridgetefl.com/activities/activities_01_class_05_crear_08_firma.php?p_0001429_get_dia_lectivo_id='.$_POST['p_01393_dia_lectivo'].'&p_0001429_get_alumno_id='.$_POST['p_01393_alumno_id'].'&p_0001429_get_firma_profesor='.$_POST['p_01393_firma_profesor'];
			?><script type="text/javascript">console.log("url: <? echo($url); ?>");</script><?
			header($url);
		}
		else
		{
			echo "<script>".$_POST['p_01393_finalizador']."</script>";
		};
		
	}else{
		echo "ERROR: ".$ok;
		$actualizar = file_get_contents("https://s.oxbridge.es/ox/estructura_web/codigo/alumno_v2/clases_03_firma_01_asp_01_modificar.asp".
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