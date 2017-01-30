<!--
-ID Pag:p_01400
-NAME:p_01400_email_invitar_amigo_html.php
-->

<?
	/*$a=explode($_GET['invitador'],'8888');
	$_GET['invitador']=$a[0];
	$_GET['enlace']=$a[1];*/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Oxbridge</title>
<style>
body{
	font-family:'proxima-nova', helvetica neue, arial, sans-serif;
	text-align:center;
	padding:5%;
	font-size:1.2em;
	max-width:500px;
	margin:auto;
}

.boton_azul{
    padding: 0.1em 1em 0.1em 1em;
    background: #ccc;
    color: #0087ae;
    border: solid 0.1em;
    border-radius: 0.3em;
    box-shadow: 0.1em 0.1em 0;
	cursor:pointer;
	font-size:1.5em;
	text-decoration:none;
}
.avion{
	height:6em;
}
.alingl{
	text-align:left
}
.pequenyo{
	font-size:0.7em;
}
.firma{
	font-size:0.85em;
}

</style>
</head>

<body>
	<p><b><? echo $_GET['invitador'];?></b> te invita a jugar y aprender inglés con Oxbridge.</p>
    <br>
	<button class="boton_azul" onclick="window.location.href='<? echo $_GET['enlace'];?>';">ACCEDER A LA APLICACIÓN.</button>

	<p class="pequenyo">* Para jugar a esta aplicación debes entrar desde el móvil.</p>
    <br>
	<p>Esperamos que te guste y aprendas jugando!</p>

	<div class="alingl">
    	Equipo de Oxbridge<br>
    	<img class="avion alingl" src="http://app.oxbridge.es/app/images/OXBRIDGE-logo_avio.png">
     </div>

    <br>
	<p class="alingl pequenyo">Gracias a esta invitación no te cobraremos nada para que puedas juga con la aplicación móvil. Las clases por videoconferencia, en bares, o en empresas se deben contratar a parte y tienen coste.</p>
    <br>
	<p class="alingl firma">
        Oxbridge English Teaching System, SL<br>
        <img src="http://app.oxbridge.es/images/firma-oxbridge-oscura.png"><br>
        B66446741 Avda. Diagonal 534 2º2ª<br>
        08006 Barcelona<br>
        Telf. 935327565 / 915234243 /+44 20 8133 0043
	</p>

</body>
</html>
