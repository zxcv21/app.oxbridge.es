<?
/*
Page ID: p_0010214
File: /front_end/students/students_02_template_01_html_01_template.php
*/
if(isset($_POST['p_0010214_carga_inicial']))$p_0010214_carga_inicial=$_POST['p_0010214_carga_inicial'];
else if(isset($_GET['p_0010214_carga_inicial']))$p_0010214_carga_inicial=$_GET['p_0010214_carga_inicial'];
else $p_0010214_carga_inicial=0;

if($p_0010214_carga_inicial!=0) include($_SERVER['DOCUMENT_ROOT']."/utilities/librerias_10_php_01_basicas.php");
?>
<meta charset="utf-8"></meta>
<meta name="viewport" content="user-scalable=1, initial-scale=1, minimum-scale=1">
<script type="text/javascript" src="<? echo p_0010015_ver_url('0010226','src'); ?>"></script>
<script>
	secciones['menu_personal'].finalizador={
		
		function()
		{
			document.getElementById('p_0010214_div_contenido_pagina_menu_personal').innerHTML=p_0010013_js_f_03_pintar_html(
				<? echo "'".p_0010015_ver_url("0010128","src")."'";?>
				,<? echo "'".p_0010015_ver_url("0010149","src")."'";?>
				,<? echo "''";?>
				,<? echo "'".p_0010015_ver_url("0010152","src")."'";?>
				,<? echo "'".p_0010015_ver_url("0010167","src")."'";?>
				,<? echo "'".p_0010015_ver_url("0010164","src")."'";?>
				,<? echo "'p_0010009_div_oculto_librerias'";?>
				/*
				,'".p_0010015_ver_url("0010146","src")."'
				,'".p_0010015_ver_url("0010149","src")."'
				,''
				,'".p_0010015_ver_url("0010152","src")."'
				,'".p_0010015_ver_url("0010167","src")."'
				,'".p_0010015_ver_url("0010164","src")."'
				,\"p_0010009_div_oculto_librerias\")";	
				*/
			);
		}
	}
</script>
<script type="text/javascript" src="<? echo p_0010015_ver_url('0010222','src'); ?>"></script>
<link rel="stylesheet" type="text/css" href="<? echo p_0010015_ver_url('0010218','src');?>"/>


<!-- general -->
<!-- EXPORTADO--> <script src="https://sb.oxbridge.es/exportado/libraries/jquey_load_page_into_div.js"></script>
<!-- EXPORTADO<script src="https://sb.oxbridge.es/exportado/libraries/utilities_03_js_01_ajax_load_page.js"></script>--> 
<!-- EXPORTADO--> <script src="https://sb.oxbridge.es/utilities/js/cookies_01_set_get.js"></script>
<!-- EXPORTADO--> <? include $_SERVER['DOCUMENT_ROOT']."/exportado/movil/p_00986_estilos.php"; ?>
<!-- EXPORTADO--> <? include $_SERVER['DOCUMENT_ROOT']."/exportado/movil/p_00987_menu_estilo.php"; ?>
<!-- EXPORTADO--> <? include $_SERVER['DOCUMENT_ROOT']."/exportado/movil/p_00990_over_all.php"; ?>
<!-- EXPORTADO--> <? include $_SERVER['DOCUMENT_ROOT']."/exportado/movil/p_01001_input_doble_rango.php"; ?>
<!-- EXPORTADO--> <? include $_SERVER['DOCUMENT_ROOT']."/exportado/p_01004_mail.php"; ?>
<!-- EXPORTADO--> <? include $_SERVER['DOCUMENT_ROOT']."/exportado/p_01005_formulario_ajax.php"; ?>
<!-- EXPORTADO--> <? include $_SERVER['DOCUMENT_ROOT']."/exportado/movil/p_00989_jscript.php"; ?>

<!-- guarda el acceso del alumno a la app -inicio - no quitar -->
<!-- EXPORTADO--> <? $p_0001475_php_usuario_id=$alumno_id_nuevo; ?>
<!-- EXPORTADO--> <? //include $_SERVER['DOCUMENT_ROOT']."/exportado\sesiones\sesion_05_conexiones_04_php_03_insert_01_conexion.php";//guardar fecha conexion ?>

<!-- guarda el acceso del alumno a la app -fin -->
<!-- EXPORTADO--> <? $p_0001316_php_usuario_id=$alumno_id_nuevo; ?>
<!-- EXPORTADO--> <? /*include $_SERVER['DOCUMENT_ROOT']."/exportado\sesiones\sesion_03_idioma_01_select.php";*/ $IDIOMA="esp"; ?> <!-- consulta del idioma del usuario -->
<!-- EXPORTADO--> <? include $_SERVER['DOCUMENT_ROOT']."/exportado/p_00999_consulta_traducciones.php" ?>
<!-- EXPORTADO--> <? if($_GET['TIPO']!='no-logon')include $_SERVER['DOCUMENT_ROOT']."/exportado/p_00988_datos.php";?>
<!-- EXPORTADO--> <? include $_SERVER['DOCUMENT_ROOT']."/exportado/p_01005_formulario_ajax.php"; ?>
<!-- EXPORTADO--> <? include $_SERVER['DOCUMENT_ROOT']."/exportado/p_01309_crear_grafico_torta.php";?>
	
	
<!-- <script type="text/javascript" src="https://sb.oxbridge.es/front_end/students/students_02_template_03_js_01_template.js"></script> -->
<!-- <link rel="stylesheet" type="text/css" href="https://sb.oxbridge.es/front_end/students/students_02_template_02_css_01_template.css"/> -->
<!-- <link rel="stylesheet" type="text/css" href="https://sb.oxbridge.es/dev/dani/front_end/personal_info/personal_info_01_template_02_css_01_template.css"/> -->

<?  include(p_0010015_ver_url('0010215',''));?>
<?  include(p_0010015_ver_url('0010216',''));?>
<?  //include($_SERVER['DOCUMENT_ROOT']."/front_end/students/students_02_template_01_html_03_menu.php"); ?>

<div id="p_0010214_divs_donde_carga_contenido_cada_seccion"></div>