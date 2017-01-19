<?
/*
Page ID: p_0010167
File: /front_end/personal_info/personal_info_07_account_info_01_html_01_template.php
*/
?>
<?
if(isset($_GET['p_0010167_carga_inicial']))$p_0010167_carga_inicial=$_GET['p_0010167_carga_inicial'];
 else if(isset($_POST['p_0010167_carga_inicial']))$p_0010167_carga_inicial=$_POST['p_0010167_carga_inicial'];
 else $p_0010167_carga_inicial=0;
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title> Account Info Template</title>
<?
	if($p_0010167_carga_inicial) include ( $_SERVER['DOCUMENT_ROOT']."/utilities/librerias_10_php_01_basicas.php");
	else if(!function_exists(p_0010015_ver_url) )include($_SERVER['DOCUMENT_ROOT']."/dev/admin/admin_01_version_control_10_php_01_file_link.php"); 
?>
	<!-- CODIGO DEL CSS -->
	<link href="<? echo p_0010015_ver_url("0010168","src"); /*personal_info_07_account_info_02_css_01_template.css*/?>" rel="stylesheet" type="text/css" >


	<script src="<? echo p_0010015_ver_url("0010169","src"); /*personal_info_07_account_info_03_js_01_template.js*/?>"></script>
	<script src="<? echo p_0010015_ver_url("0010196","src"); /*match_03_documento_identificacion_01_validar_03.js*/?>"></script>
	<script src="<? echo p_0010015_ver_url("p_0010201","src"); /*match_04_cuenta_bancaria_01_calculos.js*/?>"></script>
</head>
<body>

</body>
		<?php
if($p_0010167_carga_inicial) echo"<script>document.body.innerHTML=p_0010169_js_f_06_pintar_html();</script>";	
?>
</html>
