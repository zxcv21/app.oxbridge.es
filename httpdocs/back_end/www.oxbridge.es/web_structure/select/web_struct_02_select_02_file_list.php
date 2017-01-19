<?
/*
Page ID:p_0010138
File: /back_end/sb.oxbridge.es/web_structure/select/web_struct_02_select_02_file_list.php
*/

include $_SERVER['DOCUMENT_ROOT']."/back_end/bbdd/bbdd_01_conexiones_10.php";

$p_0010138_conect=p_0010202_php_f_01_conexion_base_datos("mysql","s.oxbridge.es","estructura_web","estructura_web","estructura_web");

if($p_0010138_conect!=0)
{
	$p_0010138_qr="SELECT * FROM paginas_web_01_listado;";
	
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