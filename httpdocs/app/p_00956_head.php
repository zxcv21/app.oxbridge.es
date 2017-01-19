<!--
Pag. ID: 00956
include: 00986-01005
+ pagin: 01168-01177
+ pagin: 01300-01310
+ pagin: 01391-01400
+ pagin: 01447-01465

//id 00996 para horarios datos
//id 00997 para horarios reservar liberar
//id 00998 para traducir
//id 01001 para input doble rango
//id 01002 para input rango horarios
//id 01003 para clases js movil
//id 01004 para mail interno
//id 01170 para personal datos
//id 01175 para preguntas
//id 01301 para login
//id 01302 para final consulta reservar capsula
//id 01303 para final consulta liberar capsula
//id 01304 para condiciones esp
//id 01305 para condiciones cat
//id 01306 para condiciones eng
//id 01310 para pagina puente smile datos consulta
//id 01392 para e-mail
//id 01393 para firmar_dia_lectivo
//id 01394 para firma_dia_lectivo_api
//id 01395 para firma_dia_lectivo_escaneo_api
//id 01396 para firmar_dia_lectivo_escaneo
//id 01397 para firmar_escaneo_separacion_app
//id 01398 para ap_registro
//id 01399 para email_invitar_amigo
//id 01400 para email_invitar_amigo_html
//id 01447 para smiles_update_nivel.php
//id 01448 para carrera_actualizar_posicion.php

//siguiente 01449/01465
<?
	/*NO-CACHE
	header("Expires: Tue, 03 Jul 2001 06:00:00 GMT");///////////////
	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");//
	header("Cache-Control: no-store, no-cache, must-revalidate");///
	header("Cache-Control: post-check=0, pre-check=0", false);//////
	header("Pragma: no-cache");///////////////////////////////////*/
	
	//general
	include("./p_00989_jscript.php");
	include("./p_00986_estilos.php");
	include("./p_00987_menu_estilo.php");
	include("./p_00988_datos.php");
	include("./p_00999_consulta_traducciones.php");
	include("./p_00990_over_all.php");
	include("./p_01001_input_doble_rango.php");
	include("./p_01004_mail.php");
	include("./p_01005_formulario_ajax.php");
	include $_SERVER['DOCUMENT_ROOT']."\app\p_01309_crear_grafico_torta.php";
	
	//clases
	include("./p_00991_clases_estilo.php");
	include("./p_00992_clases_calendario_estilo.php");
	include("./p_00993_clases_actividades_estilo.php");
	include("./p_00994_clases_formulario_valoracion.php");
	include("./p_01177_calse_iframe_datos.php");
	
	//horario
	include("./p_00995_horario_estilo.php");
	include("./p_01000_horario_js.php");
	
	//personal info
	include("./p_01170_personal_datos_info.php");
	
	//smile
	include("./p_01173_preguntas_estilo.php");
	include("./p_01174_preguntas_js.php");
	include( $_SERVER['DOCUMENT_ROOT']."/app/movil/smiles/p_01176_smile_datos.php");
	
?>