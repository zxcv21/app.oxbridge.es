<?
/*
Pag ID:p_0010001
File:/back_en/sb.oxbridge.es/web_structure/insert/web_struct_01_insert_01_new_file.php
*/

if(!isset($_POST['p_0010001_dominio']))$_POST['p_0010001_dominio']=$_GET['p_0010001_dominio'];
if(!isset($_POST['p_0010001_ruta']))$_POST['p_0010001_ruta']=$_GET['p_0010001_ruta'];
if(!isset($_POST['p_0010001_nombre']))$_POST['p_0010001_nombre']=$_GET['p_0010001_nombre'];
if(!isset($_POST['p_0010001_version']))$_POST['p_0010001_version']=$_GET['p_0010001_version'];
if(!isset($_POST['p_0010001_subversion']))$_POST['p_0010001_subversion']=$_GET['p_0010001_subversion'];
if(!isset($_POST['p_0010001_snapshot']))$_POST['p_0010001_snapshot']=$_GET['p_0010001_snapshot'];

if(
	isset($_POST['p_0010001_ruta'])
	&&isset($_POST['p_0010001_dominio'])
	&&isset($_POST['p_0010001_nombre'])
	&&isset($_POST['p_0010001_version'])
	&&isset($_POST['p_0010001_subversion'])
	&&isset($_POST['p_0010001_snapshot'])
)
{
	include $_SERVER['DOCUMENT_ROOT']."/back_end/bbdd/bbdd_01_conexiones_10.php";
	
	$p_0010001_conect=p_0010202_php_f_01_conexion_base_datos("mysql","s.oxbridge.es","estructura_web","estructura_web","estructura_web");
	
	if($p_0010001_conect!=0)
	{
		$p_0010001_qr="INSERT INTO paginas_web_01_listado
						(`dominio`, `ruta_fisica`, `pagina`, `version`, `subversion`, `snapshot`)
						VALUES 
						(
							'".$_POST['p_0010001_dominio']."',
							'".$_POST['p_0010001_ruta']."',
							'".$_POST['p_0010001_nombre']."',
							'".$_POST['p_0010001_version']."',
							'".$_POST['p_0010001_subversion']."',
							'".$_POST['p_0010001_snapshot']."'
						);";
		
		if($p_0010001_result=mysqli_query($p_0010001_conect,$p_0010001_qr))
		{
			echo mysqli_insert_id($p_0010001_conect);
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
	mysqli_close($p_0010001_conect);
}
else
{
	echo (0);
}
?>