<!--
-ID Pag: p_1392
	$to= $_GET['to'];
	$from=$_GET['from'];
	$cc=$_GET['cc'];
	$subject=$_GET['subject'];
	$txt=$_GET['txt'];
-->
<?
header("Content-Type: text/html; charset=iso-8859-1");
include ('..\inc\functions.php');

function filtro_direccion($direccion)
{
	switch($direccion)
	{
		case 1:
		{
			$direccion="tomas@oxbridge.es";
			break;
		}
		case 2:
		{
			$direccion="jonatan_seguimineto@oxbridge.es";
			break;
		}
		case 3:
		{
			$direccion="radmila@oxbridge.es";
			break;
		}
		case 4:
		{
			$direccion="tomas@oxbridge.es";
			//$direccion="fmoya@oxbridge.es";
			break;
		}
		case 5:
		{
			$direccion="tomas@oxbridge.es";
			//$direccion="alumnos@oxbridge.es";
			break;
		}
		case "alumno":
		{
			//aqui podria ir la consulta a la id de un alumno para devolver el email y asegurarnos de no hacer spam
			//o la comprobacion de la secion del profesor
			break;
		}
		default:
		{
			$direccion="jonatan@oxbridge.es";
			break;
		}
	}
	return $direccion;
}

$error="";
$departamento=0;
if(isset($_GET['to'])){
	$to= $_GET['to'];
	$from=$_GET['from'];
	$cc=$_GET['cc'];
	$subject=$_GET['subject'];
	$txt=$_GET['txt'];
	$departamento= $to;
}else if(isset($_POST['to'])){
	$to= $_POST['to'];
	$from=$_POST['from'];
	$cc=$_POST['cc'];
	$subject=$_POST['subject'];
	$txt=$_POST['txt'];
	$departamento= $to;
}


if(isset ($to))
{

	switch ($to)
	{
		case '1':
		$titulo_departamento='Atenci&oacute;n al cliente';
		break;

		case '2':
		$titulo_departamento='Administraci&oacute;n';
		break;

		case '3':
		$titulo_departamento='Docencia';
		break;

		case '4':
		$titulo_departamento='Soporte inform&aacute;tico';
		break;

		default:
		$titulo_departamento='Atenci&oacute;n al cliente';
		break;

		case '5':
		$titulo_departamento='Docencia';
		break;


	} ;

	$to = filtro_direccion($to);

}
else
{
	$error="No se puede enviar el e-mail (e-1)";
} ;

/*
	$body_mensaje="<html><body>";
	$body_mensaje= $body_mensaje."<table width='550' border='0' cellspacing='0' cellpadding='0'>
  <tr>
    <td>Email alumno:
     <strong>".$from."</strong>
	 </td>
  </tr>
  <tr>
    <td>AREA:
    <strong> ".$titulo_departamento."</strong></td>
  </tr>
  <tr>
    <td>Valoracion:<br />
     <strong>".$txt."</strong></td>
  </tr>
  <tr>
    <td>
    Mail enviado desde la IP:".$_SERVER['REMOTE_ADDR']." en fecha ".$fecha_actual." a las ".$hora_actual.".</td>
  </tr>

</table>";
$body_mensaje=$body_mensaje.'</body></html>';
*/
echo("<p>".$txt."</p>") ;
$body_mensaje=$txt;
$body_sin_mensaje= strip_tags($body_mensaje);

require("..\inc\class.phpmailer.php");

$mail = new PHPMailer();

//$mail->IsSMTP();                                // send via SMTP
//$mail->Host     = "smtp.oxsite.com"; // SMTP servers
//$mail->SMTPAuth = true;     // turn on SMTP authentication
//$mail->Username = "oxmail@oxsite.com";   // SMTP username
//$mail->Password = "oxox"; // SMTP password
//$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)

$mail->IsSMTP();                                // send via SMTP


//$mail->Host     = "smtp.oxbridge.es"; // SMTP servers
//$mail->Username = "len323c";   // SMTP username
//$mail->Password = "Oxbridg3"; // SMTP password
//$mail->From     = "mail@oxbridge.es";
include $_SERVER['DOCUMENT_ROOT']."..\includes\conn_mail\mail.php";

$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)

$mail->From     = "clientes@oxico.es";
$mail->FromName = "Oxbridge English";


if($departamento=='1'){
	$mail->AddAddress("clientes@oxbridge.es","Oxmail");
	//$mail->AddAddress("mila@oxbridge.es","Mila");
	//$mail->AddAddress("mangeles@oxbridge.es","M_Angeles");
	//$mail->AddAddress("jonatan@oxbridge.es","Jonatan");
	$mail->AddAddress("tomas@oxbridge.es","Tomas");
	//$mail->AddAddress("radmila@oxbridge.es","Jonatan");
}
if($departamento=='2'){
	$mail->AddAddress("clientes@oxbridge.es","Oxmail");
	//$mail->AddAddress("mila@oxbridge.es","Mila");
	$mail->AddAddress("tatiana@oxbridge.es","Tatiana");
	//$mail->AddAddress("jonatan@oxbridge.es","Jonatan");
	$mail->AddAddress("tomas@oxbridge.es","Tomas");
}
if($departamento=='3'){
	$mail->AddAddress("clientes@oxbridge.es","Oxmail");
	//$mail->AddAddress("radmila@oxbridge.es","Radmila");
	//$mail->AddAddress("jonatan@oxbridge.es","Jonatan");
	$mail->AddAddress("tomas@oxbridge.es","Tomas");
}
if($departamento=='4'){
	$mail->AddAddress("clientes@oxbridge.es","Oxmail");
	$mail->AddAddress("tomas@oxbridge.es","Tomas");
	//$mail->AddAddress("jonatan@oxbridge.es","Jonatan");
}
if($departamento=='5'){
	$mail->AddAddress("alumnos@oxbridge.es","Alumnos");
	$mail->AddAddress("tomas@oxbridge.es","Tomas");
	//$mail->AddAddress("jonatan@oxbridge.es","Jonatan");
}

$mail->IsHTML(true);                               // send as HTML
$mail->CharSet = "iso-8859-1";
//$mail->Subject  =  "Valoracion profesor";
if(isset($subject) && ($subject!=""))
	$mail->Subject= $subject;
else
	$mail->Subject=  "Valoracion profesor";

$mail->Body     =  $body_mensaje;

$mail->AltBody  =  $body_sin_mensaje;
@$mail->Send();



if (isset($SQLinsertcomentario_2) and strlen($SQLinsertcomentario_2)>0) {
/*
	//conexion
	include $_SERVER['DOCUMENT_ROOT']."\includes\conn_bd\conn_ox_gral_observaciones.php";
	$conexion_gral_observaciones = mysql_connect($host, $user, $pass);
	mysql_select_db($db, $conexion_gral_observaciones);
	mysql_query("SET NAMES 'utf8'");
	date_default_timezone_set("Europe/Madrid");
	mysql_query($SQLinsertcomentario_2,$conexion_gral_observaciones);
	//fin conexion
	mysql_close($conexion_gral_observaciones);
*/
}



/*
if(validEmilio($email_form)){

	 $error_mail=0;
	 ?><script type="text/javascript">
		if( window.parent.document.getElementById('form_contacta'))
		{
		 	window.parent.document.getElementById('form_contacta').style.display='none';
		};
		if( window.parent.document.getElementById('p_pruebalo_div_ocultar_boton'))
		{
			window.parent.document.getElementById('p_pruebalo_div_ocultar_boton').style.display='none';
		};
		if( window.parent.document.getElementById('mensaje_enviado'))
		{
			window.parent.document.getElementById('mensaje_enviado').style.display='';
		};
	</script><?
 }else{

	 $error_mail=1;

	 ?><script type="text/javascript">
		if( window.parent.document.getElementById('p_pruebalo_div_ocultar_boton'))
		{
			window.parent.document.getElementById('p_pruebalo_div_ocultar_boton').style.display='none';
		};
		if( window.parent.document.getElementById('button'))
		{
			window.parent.document.getElementById('button').style.display='';
		};
		if( window.parent.document.getElementById('mensaje_mail_error'))
		{
			window.parent.document.getElementById('mensaje_mail_error').style.display='';
		};
	</script><?


 };
*/

/*
if(isset($_POST['p_0_post_finalizador']))
{
    echo "<script>".$_POST['p_0_post_finalizador']."</script>";
}
*/

?>
