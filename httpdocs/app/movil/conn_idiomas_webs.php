<?
$host="oxsite.com";
$user="idiomas_webs";
$pswd="w&19l7aW";
$bd="idiomas_webs";

$conexion_idiomas_webs = mysql_connect($host, $user, $pswd);
mysql_select_db($bd, $conexion_idiomas_webs);

mysql_query("SET NAMES 'iso-8859-1'");
mysql_query("SET CHARACTER SET iso-8859-1");
?>