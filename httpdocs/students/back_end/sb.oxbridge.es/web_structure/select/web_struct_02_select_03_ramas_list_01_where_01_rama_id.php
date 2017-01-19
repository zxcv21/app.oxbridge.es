<?
/*
Page ID: p_0010233
File: /back_end/sb.oxbridge.es/web_structure/select/web_struct_02_select_03_ramas_list_01_where_01_rama_id.php
*/
?>

<?

include $_SERVER['DOCUMENT_ROOT']."/connections/php/connections_01_php_01_connect_bdd.php";

$p_0010138_conect=p_0010002_conecciones_php("s.oxbridge.es","estructura_web","estructura_web");

if($p_0010138_conect!=0)
{
	$p_0010138_qr="SELECT * FROM paginas_web_04_ramas;";
	
	if($p_0010138_result=mysqli_query($p_0010138_conect,$p_0010138_qr))
	{
		$res= "[";
		while($a=mysqli_fetch_array($p_0010138_result,MYSQLI_ASSOC))
		{
			$res.= json_encode($a).",\n";
		}
		$res = substr($res,0,-2);
		$res.= "]";
		echo $res;
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

mysqli_close($p_0010138_conect);

?>