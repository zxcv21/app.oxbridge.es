<? header("Content-Type: text/html; charset=ISO-8859-1"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?
 	$firma="Emi Gates";
	$emailtext="Hola estoy probando";
	$body_mensaje="<html><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=ISO-8859-1\" /></head><body>";
	$body_mensaje= $body_mensaje."<table width='550' border='0' cellspacing='0' cellpadding='0'>
  <tr>
    <td>
    ".$emailtext."
	</td>
  </tr>
  <tr>
    <td>
	<br>
	<font face='Arial, Helvetica, sans-serif' size='3' color='#999999'>
    ".$firma."</font>
	<br>
	<font face='Arial, Helvetica, sans-serif' size='6' color='#003399'><strong><em>Oxbridge</em></strong></font>
	<font face='Arial, Helvetica, sans-serif' size='3' color='#999999'>
	<br>
	Madrid:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;91 523 42 43
	<br>
	Barcelona:&nbsp;93 532 75 65
	<br>
	Espa�a:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;902 500 100
	<br>
	UK: (+44) 20 8133 0043
	</font>
	</td>
  </tr>
	</table>
	"
	;
$body_mensaje=$body_mensaje.'</body></html>';

$body_sin_mensaje= strip_tags($body_mensaje);
require("class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsSMTP();                                // send via SMTP
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)

include('oxico.php');
$mail->FromName = "Oxbridge English";
$mail->AddAddress("ztoepvig@tafmail.com","Jonatan");
//$mail->AddBCC("jonatan_seguimiento@oxbridge.es","Jonatan")	;
$mail->CharSet = 'ISO-8859-1';
$mail->Subject  =  "Prueba mail";
$mail->Body     =  $body_mensaje;
$mail->AltBody  =  $body_sin_mensaje;
$error= $mail->Send();
echo($error);
?>
</body>
</html>
