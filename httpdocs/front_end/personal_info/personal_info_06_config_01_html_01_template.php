<?
/*
Page ID: p_0010152
File: /front_end/personal_info/personal_info_06_config_01_html_01_template.php
*/
?>
<?
if(isset($_GET['p_0010152_carga_inicial']))$p_0010152_carga_inicial=$_GET['p_0010152_carga_inicial'];
 else if(isset($_POST['p_0010152_carga_inicial']))$p_0010152_carga_inicial=$_POST['p_0010152_carga_inicial'];
 else $p_0010152_carga_inicial=0;
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Config Template</title>
	<?
   if($p_0010152_carga_inicial) include $_SERVER['DOCUMENT_ROOT']."/app/utilities/librerias_10_php_01_basicas.php";
   else include($_SERVER['DOCUMENT_ROOT']."/app/dev/admin/admin_01_version_control_10_php_01_file_link.php");
  ?>
		<!-- CODIGO DEL CSS -->
		  <link href="<? echo p_0010015_ver_url("0010153","src"); /*/personal_info_06_config_02_css_01_template.css*/ ?>" rel="stylesheet" type="text/css" >
	<!--  CODIGO SCRIPT -->
	<script src="<? echo p_0010015_ver_url("0010154","src"); /*personal_info_06_config_03_js_01_template.js*/?>"></script>
</head>
<body>

</body>
<?php
	if ($p_0010152_carga_inicial)
	{
	echo "<script>document.body.innerHTML=p_0010154_f_02_js_pintar_html();</script>";
	}
	?>
</html>
		