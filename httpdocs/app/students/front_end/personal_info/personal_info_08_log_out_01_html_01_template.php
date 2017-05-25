<?
/*
Page ID: p_0010164
File: /front_end/personal_info/personal_info_08_log_out_01_html_01_template.php
*/
?>
<?
if(isset($_GET['p_0010164_carga_inicial'])){$p_0010164_carga_inicial=$_GET['p_0010164_carga_inicial'];}
 else if(isset($_POST['p_0010164_carga_inicial'])){$p_0010164_carga_inicial=$_POST['p_0010164_carga_inicial'];}
 else { $p_0010164_carga_inicial=0; }
?>

?>
<html>
<head>
<meta https-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title> Log Out Template</title>
		<?
	if($p_0010167_carga_inicial) include ( $_SERVER['DOCUMENT_ROOT']."/utilities/librerias_10_php_01_basicas.php");
	else if(!function_exists(p_0010015_ver_url) )include($_SERVER['DOCUMENT_ROOT']."/dev/admin/admin_01_version_control_10_php_01_file_link.php"); 
  ?>
	
 <link href="<? echo p_0010015_ver_url("0010165","src"); /*personal_info/personal_info_08_log_out_02_css_01_template.css*/?>" rel="stylesheet" type="text/css" > 

<script src="<? echo p_0010015_ver_url("0010166","src"); /*personal_info_08_log_out_03_js_01_template.js*/?>"></script>


</head>
<body>

</body>
		<?php
	echo $p_0010164_carga_inicial; 
	if($p_0010164_carga_inicial) echo"<script>document.body.innerHTML=p_0010166_js_f_01_pintar_html();</script>";?>
	
	
</html>
