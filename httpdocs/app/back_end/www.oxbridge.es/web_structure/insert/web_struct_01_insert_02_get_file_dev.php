<?
/*
Page ID: p_0010134
File: /back_end/sb.oxbridge.es/web_structure/insert/web_struct_02_select_01_verison_list.php
*/

if(!isset($_POST['p_0010134_dev']))$_POST['p_0010134_dev']=$_GET['p_0010134_dev'];
if(!isset($_POST['p_0010134_pag_id']))$_POST['p_0010134_pag_id']=$_GET['p_0010134_pag_id'];

if(
	isset($_POST['p_0010134_dev'])
	&&isset($_POST['p_0010134_pag_id'])
)
{
	include $_SERVER['DOCUMENT_ROOT']."/connections/php/connections_01_php_01_connect_bdd.php";
	
	$p_0010134_conect=p_0010002_conecciones_php("s.oxbridge.es","estructura_web","estructura_web");
	
	if($p_0010134_conect!=0)
	{
		echo "INSERT INTO paginas_web_03_en_desarrollo(`pagina_id`, `rama_id`, `fecha`, `hora`)VALUES('".$_POST['p_0010134_pag_id']."','".$_POST['p_0010134_dev']."','".date("Ymd")."','".date("Hi")."');";
		$p_0010134_qr="INSERT INTO paginas_web_03_en_desarrollo(`pagina_id`, `rama_id`, `fecha`, `hora`)VALUES('".$_POST['p_0010134_pag_id']."','".$_POST['p_0010134_dev']."','".date("Ymd")."','".date("Hi")."');";
		
		if(!$p_0010134_result=mysqli_query($p_0010134_conect,$p_0010134_qr))
		{
			echo (0.3);
		}
	}
	else
	{
		echo (0.2);
	}
	mysqli_close($p_0010134_conect);
}
else
{
	echo (0.1);
}

?>