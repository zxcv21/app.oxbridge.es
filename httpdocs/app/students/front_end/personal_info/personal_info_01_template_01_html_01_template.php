<?php
/*
Pag ID:p_0010009
File:/front_end/personal_info/personal_info_01_template_01_html_01_template.php
*/
?>
<?
if(isset($_GET['p_0010009_carga_inicial']))$p_0010009_carga_inicial=$_GET['p_0010009_carga_inicial'];
 else if(isset($_POST['p_0010009_carga_inicial']))$p_0010009_carga_inicial=$_POST['p_0010009_carga_inicial'];
 else $p_0010009_carga_inicial=0;


?>
<html>
	<head>
		<?
if(isset($_GET['VER'])) echo "<script> VER = '".$_GET['VER']."';</script>"; 
		else if(isset($_POST['VER'])) echo "<script> VER = '".$_POST['VER']."';</script>"; 
		else echo "<script>  VER = '';</script>"; 
	
?>
			<meta https-equiv="Content-Type" content="text/html; charset=utf-8"/>
   <meta name="viewport" content="user-scalable=1, initial-scale=1, minimum-scale=1">
				<title>Personal Info Template</title>
		<?
   if($p_0010009_carga_inicial) include $_SERVER['DOCUMENT_ROOT']."/utilities/librerias_10_php_01_basicas.php";
   else include($_SERVER['DOCUMENT_ROOT']."/dev/admin/admin_01_version_control_10_php_01_file_link.php");
  ?>
					<!-- CODIGO DEL CSS -->
		  <link href="<? echo p_0010015_ver_url("0010011","src"); /*personal_info_01_template_02_css_01_template.css*/ ?>" rel="stylesheet" type="text/css" >
				<!--  CODIGO DEL SCRIPT -->
			<script src="<? echo p_0010015_ver_url("0010013","src"); /*personal_info_01_template_03_js_01_template.js*/?>"></script>
	</head>
							<script>
							<?php
								/*ID ALUMNO INICIO*/	
							if(isset($_GET['id_alumno'])) $id_alumno=$_GET['id_alumno'];
							else if(isset($_POST['id_alumno'])) $id_alumno=$_GET['id_alumno'];    
							else $id_alumno=0;
							echo "var id_alumno=".$id_alumno.";";   
							/*ID ALUMNO FIN*/
							?>
							</script>
 <body>
 
	</body>
<?php

if($p_0010009_carga_inicial) echo "<script>document.body.innerHTML = p_0010013_js_f_03_pintar_html(
'".p_0010015_ver_url("0010128","src")."'
,'".p_0010015_ver_url("0010146","src")."'
,'".p_0010015_ver_url("0010149","src")."'
,''
,'".p_0010015_ver_url("0010152","src")."'
,'".p_0010015_ver_url("0010167","src")."'
,'".p_0010015_ver_url("0010164","src")."'
,\"p_0010009_div_oculto_librerias\");</script>";	
?>
	

</html>	



