<!--
-ID Pag: p_01399 para email_invitar_amigo
-NAME: p_01399_email_invitar_amigo.php
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Invitar Amigo</title>
</head>
 
<?
if(isset($_POST['to'])){
	$to=$_POST['to'];
	$from=$_POST['from'];
	$enlace=$_POST['enlace'];
	$invitador=$_POST['invitador'];
}
else if(isset($_GET['to'])){
	$to= $_GET['to'];
	$from=$_GET['from'];
	$enlace=$_GET['enlace'];
	$invitador=$_GET['invitador'];
}

$subject="";

$invitador=str_replace(" ","%20",$invitador);
$enlace=str_replace(" ","%20",$enlace);

$txt=file_get_contents("http://app.oxbridge.es/app/p_01400_email_invitar_amigo_html2.php?invitador=".$invitador."&enlace=".$enlace);

$error="";

if(isset ($to))
{
	$headers = "From: ".$from;
}
else
{
	$error="No se puede enviar el e-mail (e-2)";
	echo $error;
}

if($error==""){
	$headers = "\r\nMIME-Version: 1.0" . "\r\n".$headers;
	$headers = "Content-type:text/html;charset=UTF-8" . "\r\n".$headers;
	$subject =  $_GET['invitador']." te invita a OxApp";

	mail($to,$subject,$txt,$headers);
	
	echo "email enviado:\n".
	$to."\n".
	$subject."\n".
	$headers."\n".
	$txt;
	
	print_r(error_get_last());
}
	
?>

<body>
</body>
</html>