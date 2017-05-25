<!--
Pag. ID: p_01177
-->
<?
include $_SERVER['DOCUMENT_ROOT']."/sesiones/sesion_02_comprobacion_04_php_02_select_01_sesion.php";
?>
<html>
<head>
	<meta https-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<script>

	<?
	function p_01177_nombrar_archivo(){
		$p_01177_folder=str_pad($_GET['alumno_id'], 11, "0", STR_PAD_LEFT)."/";
		$p_01177_fecha= $_GET['p_0001326_fecha_clase'];
		$p_01177_hora= time();
		$p_01177_dia_lectivo= str_pad($_GET['dia_lectivo'], 11, "0", STR_PAD_LEFT);
		$p_01177_nombre_fich= $p_01177_folder.$p_01177_fecha."_".$p_01177_dia_lectivo."_".$p_01177_hora;
		return $p_01177_nombre_fich;
	}

	if( $p_0001326_php_sesion_correcta == "si" && $p_0001326_php_usuario_correcto == "si" && $p_0001326_php_usuario_y_sesion_relacioonados == "si" )
	{

		switch($_GET["consulta"])
		{
			case "actividades":
			{
				$actualizar = file_get_contents("https://s.oxbridge.es/ox/estructura_web/codigo/alumno_v2/clases_01_material_01_asp_02_select_02_actividades_de_la_clase.asp?p_0001271_get_curso_clase_ids=".$_GET["curso_clase_ids"]."&p_0001270_get_alumno_id=".$_GET["alumno_id"]);
				echo "window.parent.dia_lectivo[".$_GET["id_dia"]."].actividad=".$actualizar.";";
				echo "console.info('LOAD DAY ".$_GET["id_dia"].".');";
				echo "window.parent.cargar_clase_cargada(".$_GET["id_dia"].");";
				break;
			}

			case "subActividades":
			{
				$actualizar = file_get_contents("https://app.oxbridge.es/actividades/clases_01_material_01_php_02_select_03_contenido_de_las_actividades.php?p_0001272_get_dia_lectivo_id=".$_GET["id_dia"]."&p_0001272_get_alumno_id=".$_GET["alumno_id"]."&p_0001272_get_msaccess_actividades_id=".$_GET["actividades"]);
				echo $actualizar;
				echo "window.parent.cargar_subClase_cargada(".$_GET["id_dia"].");";
				break;
			}

			case "firma":
			{

				//corregir separacion de espacios
				$firma = str_replace(" ","+",$_POST['firma_archivo']);

				$tamano = $_FILES["firma_archivo"]['size'];
				$tipo = $_FILES["firma_archivo"]['type'];
				$archivo = $_FILES["firma_archivo"]['name'];

				$ruta = "FIRMAS/imagenes/".$_POST['directirio_id'];

				$destino = $ruta."/".$_POST['firma_id'].".png";
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
				$fic_name = $_POST['firma_id'].'.png';
				$fp = fopen($destino, 'wb');

				//guardar firma;
				$ok = fwrite( $fp, $decodedData);
				fclose( $fp );

/*AMAZON*/
///////////////////////////////////////////////////////

				$gertrudis_times = substr_count($_SERVER['PHP_SELF'],"/");
				$gertrudis_root_access = "";
				$gertrudis_i = 0;

				while ($gertrudis_i < $gertrudis_times)
				{
					$gertrudis_root_access .= "../";
					$gertrudis_i++;
				}

				include($gertrudis_root_access.'gertrudis/aws_function.php');
				getAWSconfig();
				//AWS access FIN
				require_once($_SERVER['DOCUMENT_ROOT']."/app/aws-s3/s3_config.php");
				//include('s3_config.php');

				$bucket='ox-firmas';//'ox-media-server';
				$folder="firmas/";
				$tmp= $destino;
				$name= $folder.p_01177_nombrar_archivo().".png";//$_POST['firma_id'].".png";
				$filetype= 'image/png';

				if($s3->putObjectFile($tmp, $bucket , $name, S3::ACL_PUBLIC_READ ,$filetype) ){
					$ok=true;
				}
				else{
					$ok= false;
				}


				//unlink($destino);
/////////////////////////////////////////////////////////


				if($ok){

					$actualizar = file_get_contents("https://s.oxbridge.es/ox/estructura_web/codigo/alumno_v2/clases_03_firma_01_asp_01_modificar.asp".
					"?p_0001293_get_dia_lectivo_id=".$_GET['dia_lectivo'].
					"&p_0001293_get_alumno_id=".$_GET['alumno_id'].
					"&p_0001293_get_firmado=1".
					"&p_0001293_get_final_consulta=window.parent.ocultar_mostrar('signature-pad-cargando');".
					"window.parent.ocultar_mostrar('p_00995_firma');".
					//	"window.parent.ocultar_mostrar('p_00995_firma_botones');"
					"window.parent.p_00989_comprobar_firmas_pendientes();"
					);

				echo "///////\n".$actualizar."\n/////////\n";

				echo "window.parent.dia_lectivo[".$_GET['dia_lectivo']."].firmado='1';\n";
				echo "window.parent.console.info('FIRMA DIA:".$_GET['dia_lectivo']." FIRMADO');\n";//FIRMA
				echo "window.parent.p_01169_imprimir_asistencia()\n;";

				echo "if(window.parent.document.getElementById('p_00987_boton_firma')){\n";
				//boton firma
				echo "	window.parent.document.getElementById('p_00987_boton_firma_pendiente').style.display='none';\n";
				//echo "	window.parent.document.getElementById('p_00987_boton_firma').style.display='inline';\n";
				echo "	window.parent.document.getElementById('p_00987_boton_firma').style.display='none';\n";
				echo "}\n";

				}else{
					echo "ERROR: ".$ok;
					$actualizar = file_get_contents("https://s.oxbridge.es/ox/estructura_web/codigo/alumno_v2/clases_03_firma_01_asp_01_modificar.asp".
					"?p_0001293_get_dia_lectivo_id=".$_GET['dia_lectivo'].
					"&p_0001293_get_alumno_id=".$_GET['alumno_id'].
					"&p_0001293_get_firmado=0"
					);

					echo 'window.parent.dia_lectivo['.$_GET['dia_lectivo'].'].firmado="0";\n';
					echo 'window.parent.console.info("FIRMA DIA:'.$_GET['dia_lectivo'].' ¡ERROR!");\n';//FIRMA
					//boton firma
					//echo 'window.parent.document.getElementById("p_00987_boton_firma_pendiente").style.display="inline";\n';
					//echo 'window.parent.document.getElementById("p_00987_boton_firma").style.display="none";\n';

				}

				if (file_exists($destino)) 
        	unlink($destino);

				break;

			}

			default:{break;}

		}

	};//fin if sesion

	?>
</script>
</body>
</html>
