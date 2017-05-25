<?
require("..\inc\class.phpmailer.php");

$mail = new PHPMailer();

$mail->IsSMTP();                                // send via SMTP


//include $_SERVER['DOCUMENT_ROOT']."..\includes\conn_mail\mail.php";
require_once( $_SERVER['SERVER_ROOT']."\includes\conn_mail\oxmail.php" ) ;


$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)

$mail->From     = "clientes@oxico.es";
$mail->FromName = "Oxbridge English";
$mail->AddAddress("monica@oxbridge.es","");

$mail->IsHTML(true);                               // send as HTML
$mail->CharSet = "iso-8859-1";
//$mail->Subject  =  "Valoracion profesor";
$mail->Subject=  "Valoracion profesor";

$mail->Body     =  $body_mensaje;

$mail->AltBody  =  $body_sin_mensaje;
$mail->Send();
echo ("<br><br><br><br>".var_dump($mail));
?>
