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
//id 01449 para oponente_actualizar_seleccion.php
//id 01450 para clases_formulario_valoracion_semanal.php
//id 01451 para informacion_tripartita.php

//siguiente 01452/01465
-->
<?







	/*NO-CACHE
	header("Expires: Tue, 03 Jul 2001 06:00:00 GMT");///////////////
	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");//
	header("Cache-Control: no-store, no-cache, must-revalidate");///
	header("Cache-Control: post-check=0, pre-check=0", false);//////
	header("Pragma: no-cache");*///////////////////////////////////


?>
	<script>
	/*mínimo de firmas obligatorias antes de poder dejar ventana de firmas*/
	p_00989_minimo_firmas= 5;
	/*máximo de dias desde la clase para que aparezca ventana valoración*/
	p_1003_maximo_dias_valorar= 14;
	p_0001854_mostrar_pagina_bienvenida_bool= true;

	function borrar(){
		document.getElementById("p_00995_firma").style.display="none";
		document.getElementById("p_01450_overall_valoracion_semanal").style.display="none";
	}
	<?
	echo "</script>";


	//general
	echo "<script src='".ver_url("libraries/jquey_load_page_into_div.js","src")."'></script>";
	echo "<script src='".ver_url("libraries/utilities_03_js_01_ajax_load_page.js","src")."'></script>";
	echo "<script src='https://app.oxbridge.es/app/utilities/js/cookies_01_set_get.js'></script>";
	include ver_url("movil/p_00986_estilos.php","");
	include ver_url("movil/p_00987_menu_estilo.php","");
	include ver_url("movil/p_00990_over_all.php","");
	include ver_url("movil/p_01001_input_doble_rango.php","");
	include ver_url("p_01004_mail.php","");
	include ver_url("p_01005_formulario_ajax.php","");
	include ver_url("movil/p_00989_jscript.php","");
	//guarda el acceso del alumno a la app -inicio - no quitar
	$p_0001475_php_usuario_id=$alumno_id_nuevo;
	include $_SERVER['DOCUMENT_ROOT']."\sesiones\sesion_05_conexiones_04_php_03_insert_01_conexion.php";//guardar fecha conexion
	//guarda el acceso del alumno a la app -fin
	$p_0001316_php_usuario_id=$alumno_id_nuevo;
	include $_SERVER['DOCUMENT_ROOT']."\sesiones\sesion_03_idioma_01_select.php";//consulta del idioma del usuario
	include ver_url("p_00999_consulta_traducciones.php","");
	if($_GET['TIPO']!='no-logon')include ver_url("p_00988_datos.php","");
	//include ver_url("p_01005_formulario_ajax.php","");
	include ver_url("p_01309_crear_grafico_torta.php","");

	//clases
	include ver_url("movil/p_00991_clases_estilo.php","");
	include ver_url("movil/p_00992_clases_calendario_estilo.php","");
	include ver_url("movil/p_00993_clases_actividades_estilo.php","");
	include ver_url("movil/p_00994_clases_formulario_valoracion.php","");
	include ver_url("movil/p_01003_clases_js.php","");

	//horario
	include ver_url("movil/p_00995_horario_estilo.php","");
	include ver_url("movil/p_01000_horario_js.php","");

	//personal info
	include ver_url("movil/p_01168_personal_estilo.php","");
	include ver_url("movil/p_01169_personal_js.php","");

	//smiles
	include ver_url("movil/smiles/p_01171_smile_js.php","");
	include ver_url("movil/smiles/p_01172_smile_estilo.php","");
	include ver_url("movil/smiles/p_01173_preguntas_estilo.php","");
	include ver_url("movil/smiles/p_01174_preguntas_js.php","");
	include ver_url("movil/smiles/p_01176_smile_datos.php","");

	//tutorial
	include ver_url("movil/tutorial/p_01307_tutorial_js.php","");
	include ver_url("movil/tutorial/p_01308_tutorial_css.php","");




?>
