<?
/*
Page ID: p_0010202
File: https://sb.oxbridge.es/back_end/bbdd/bbdd_01_conecciones_10.php
*/
?>

<?
//$p_0010202_php_f_01_tipo_bd "msaccess" o "mysql"

function p_0010202_php_f_01_conexion_base_datos( $p_0010202_php_f_01_tipo_bd, $p_0010202_php_f_01_host, $p_0010202_php_f_01_user, $p_0010202_php_f_01_pswd, $p_0010202_php_f_01_db )
{

	if( $p_0010202_php_f_01_tipo_bd == "msaccess" )
	{
	
		$p_0010202_php_f_01_db_fichero = $_SERVER['DOCUMENT_ROOT'].'/back_end/bbs/'.$p_0010202_php_f_01_db.'.mdb';

		if( file_exists($p_0010202_php_f_01_db_fichero) )
		{
			$p_0010202_php_f_01_nombre_conexion = odbc_connect("Driver={Microsoft Access Driver (*.mdb)};Dbq=".$p_0010202_php_f_01_db_fichero, $p_0010202_php_f_01_user, $p_0010202_php_f_01_pswd);
			if( !$p_0010202_php_f_01_nombre_conexion )
			{
				echo "Error en la coneccion";
			};
		}
		else
		{
			echo "La DBB no se encuentra";
		};

	};

	if( $p_0010202_php_f_01_tipo_bd == "mysql" )
	{
		if( $p_0010202_php_f_01_db == "estructura_web" )
		{
			$p_0010202_php_f_01_host="s.oxbridge.es";
			$p_0010202_php_f_01_user="estructura_web";
			$p_0010202_php_f_01_pswd="estructura_web";
		};
		
		$p_0010202_php_f_01_nombre_conexion = mysqli_connect($p_0010202_php_f_01_host, $p_0010202_php_f_01_user, $p_0010202_php_f_01_pswd, $p_0010202_php_f_01_db);
		mysqli_set_charset($p_0010202_php_f_01_nombre_conexion,"utf8");

	};

	return $p_0010202_php_f_01_nombre_conexion;
}

/**
 * sintax: p_0010202_php_f_01_conexion_base_datos(tipo_bdd (msaccess/mysql),host (string)[, usuario (string), pass (string),] bdd (string))
 * $conn=p_0010202_php_f_01_conexion_base_datos("msaccess","google.com","","","usuarios")
**/


?>