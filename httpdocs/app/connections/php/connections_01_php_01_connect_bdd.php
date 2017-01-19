<?
/**
*Pag ID:p_0010002
*NAME:connections_01_php_01_connect_bdd.php
**/
/*function p_0010202_php_f_01_conexion_base_datos($p_0010002_dominio,$p_0010002_bdd,$p_0010002_usuario)
{
	switch($p_0010002_dominio)
	{
		case "s.oxbridge.es":
		{
			switch($p_0010002_bdd)
			{
				case "estructura_web":
				{
					if(isset($p_0010002_usuario))$p_0010002_mysqli=	mysqli_connect("s.oxbridge.es", $p_0010002_usuario, "estructura_web", "estructura_web");
					else $p_0010002_mysqli= 						mysqli_connect("s.oxbridge.es", "estructura_web", "estructura_web", "estructura_web");
					break;
				}
				default:{break;}
			}
			break;
		}
		default:{break;}
	}
	
	if (mysqli_connect_errno($p_0010002_mysqli))
	{
    	return 0;
	}
	else
	{
		mysqli_set_charset($p_0010002_mysqli,"utf8");
		return $p_0010002_mysqli;
	}
}*/
?>