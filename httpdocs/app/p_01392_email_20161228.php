<!--
-ID Pag: p_1392
	$to= $_GET['to'];
	$from=$_GET['from'];
	$cc=$_GET['cc'];
	$subject=$_GET['subject'];
	$txt=$_GET['txt'];
-->

<?php
/*
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
			$direccion="jonatan@oxbridge.es";
			break;
		}
		case 3:
		{
			$direccion="radmila@oxbridge.es";
			break;
		}
		case 4:
		{
			$direccion="fmoya@oxbridge.es";
			break;
		}
		case 5:
		{
			$direccion="jonatan@oxbridge.es";
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
if(isset($_GET['to'])){
	$to= $_GET['to'];
	$from=$_GET['from'];
	$cc=$_GET['cc'];
	$subject=$_GET['subject'];
	$txt=$_GET['txt'];
}else if(isset($_POST['to'])){
	$to= $_POST['to'];
	$from=$_POST['from'];
	$cc=$_POST['cc'];
	$subject=$_POST['subject'];
	$txt=$_POST['txt'];	
}

if(isset ($to))
{
	$to = filtro_direccion($to);
	
	$headers = "From: ".$from."\r\nCC: ";
	
	foreach(split(',',$cc) as $i)
	{
		$headers +=filtro_direccion($i).',';
	}
	$headers=substr($headers, 0, -1);
	
	$subject = $subject;
	$txt = $txt;
}
else
{
	$error="No se puede enviar el e-mail (e-1)";
}

if($error==""){
	$headers = "\r\nMIME-Version: 1.0" . "\r\n".$headers;
	$headers = "Content-type:text/html;charset=UTF-8" . "\r\n".$headers;

	//mail($to,$subject,$txt,$headers);
	mail($to,$subject,$txt);
}
*/
$to = "jonatan@oxbridge.es, tomas@oxbridge.es";
$subject = "HTML email";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td>John</td>
<td>Doe</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: prueba' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);
?>
?>