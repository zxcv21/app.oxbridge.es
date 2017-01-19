<?
/*
Page ID:p_0010132
File:/back_end/sb.oxbridge.es/web_structure/select/estructura_web_02_select_01_verison_list.php
*/

if(!isset($_POST['p_0010132_dev']))$_POST['p_0010132_dev']=$_GET['p_0010132_dev'];

if(
	isset($_POST['p_0010132_dev'])
)
{
	include $_SERVER['DOCUMENT_ROOT']."/connections/php/connections_01_php_01_connect_bdd.php";
	
	$p_0010132_conect=p_0010002_conecciones_php("s.oxbridge.es","estructura_web","estructura_web");
	
	if($p_0010132_conect!=0)
	{
		$p_0010132_qr="SELECT * FROM paginas_web_02_versiones WHERE version LIKE '".$_POST['p_0010132_dev']."';";
		
		if($p_0010132_result=mysqli_query($p_0010132_conect,$p_0010001_qr))
		{
			echo json_encode($p_0010132_result);
		}
		else
		{
			echo (0);
		}
	}
	else
	{
		echo (0);
	}
	mysqli_close($p_0010132_conect);
}
else
{
	echo (0);
}

?>