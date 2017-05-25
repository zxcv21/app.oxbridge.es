<!--
-ID Pag: p_01399 para email_invitar_amigo
-NAME: p_01399_email_invitar_amigo.php
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml">
<head>
<meta https-equiv="Content-Type" content="text/html; charset=UTF-8" />
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

$enlace=str_replace(" ","%20",$enlace);
$invitador= trim($invitador);
$invitador= utf8_encode($invitador);
$p_01399_invitador_codif_url= urlencode($invitador);
$txt=file_get_contents("https://app.oxbridge.es/app/p_01400_email_invitar_amigo_html2.php?invitador=".$p_01399_invitador_codif_url."&enlace=".$enlace);

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
//$subject =  $_GET['invitador']." te invita a OxApp";

$subject =$invitador." te invita a OxApp";

/*
if($error==""){
//	$headers = "\r\nMIME-Version: 1.0" . "\r\n".$headers;
//	$headers = "Content-type:text/html;charset=UTF-8" . "\r\n".$headers;
//	$subject =  $_GET['invitador']." te invita a OxApp";

  $headers .= "\r\nMIME-Version: 1.0";
  $headers .= "\r\nContent-type:text/html;charset=UTF-8\r\n";//charset=UTF-8";
  $subject =  $_GET['invitador']." te invita a OxApp";

	mail($to,$subject,$txt,$headers);

	echo "email enviado:\n".
	$to."\n".
	$subject."\n".
	$headers."\n".
	$txt;

	print_r(error_get_last());
}
*/
/*****************************************************************************************************************/
//require("..\inc\class.phpmailer.php");
require("enviomail\class.phpmailer.php");

$mail = new PHPMailer();
$mail->IsSMTP();                                // send via SMTP

//include('enviomail\oxico.php');
require_once( $_SERVER['DOCUMENT_ROOT']."/navegacion_dominio_01_conseguir_ruta_carpetas.php" ) ;
$var__ruta_protegida_dominio__p_0001958 = f_01__conseguir_ruta_carpetas__p_0001958_php() ;
$var__url__p_0001958_php = $var__ruta_protegida_dominio__p_0001958."gertrudis/mail/oxmail.php" ;
include( $var__url__p_0001958_php );

$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)

//$mail->From     = $from;
$mail->FromName = $invitador;
$mail->AddAddress($to,"");


$mail->IsHTML(true);                               // send as HTML
$mail->CharSet = "UTF-8";
$mail->Subject= $subject;

$mail->Body     =  $txt;

$mail->Send();

/****************************************************************************************************/

?>

<body>
</body>
</html>
