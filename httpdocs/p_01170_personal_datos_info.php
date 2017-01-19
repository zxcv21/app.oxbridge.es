<!--
-Pag. ID: p_01170
-->
<?
	include $_SERVER['DOCUMENT_ROOT']."/sesiones/sesion_02_comprobacion_04_php_02_select_01_sesion.php";
?>
<html>
<head>
<meta charset="utf-8">
</head>
<script>
<?
if( $p_0001326_php_sesion_correcta == "si" && $p_0001326_php_usuario_correcto == "si" && $p_0001326_php_usuario_y_sesion_relacioonados == "si" )
{
	switch($_GET['consulta']){

		case "imprimir":{
			$datos = file_get_contents("http://s.oxbridge.es/ox/estructura_web/codigo/alumno_v2/informacion%20personal%2001%20_datos_presonales_01_asp_02_select.asp?p_0001207_get_alumno_id=".$_GET['alumno_id']);
			$datos= utf8_encode($datos);
			echo "window.parent.personal_datos_info=".$datos."\n";
			echo "window.parent.p_01169_cargar_presonal_datos_info_load();\n";
		break;}

		default:{break;}
	}
};
?>
</script>
