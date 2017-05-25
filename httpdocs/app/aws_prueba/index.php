<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml">
<head>
<meta https-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>

<?
$S3bucket='ox-firmas-app-2';
$folder='firmas';
$imagesizeh='1024';
$imagesizev='1024';
$tipofichero='image';
?>

<form action="https://https://app.oxbridge.es/app_version_desarrollo/aws_prueba/upload.php" method='post' enctype="multipart/form-data">
<h3>Upload image file here</h3><br/>
<div style='margin:10px'><input type='file' name='file'/> <input type='submit' value='Upload Image'/></div>
<input type="hidden" value="<? echo($tipofichero)?>" name="tipo_fichero" />
<input type="hidden" value="<? echo($imagesizeh)?>" name="imagesizeh" />
<input type="hidden" value="<? echo($imagesizev)?>" name="imagesizev" />
<input type="hidden" value="<? echo($S3bucket)?>" name="bucket" />
<input type="hidden" value="<? echo($folder)?>" name="folder" />
</form>
<?php
echo $msg.'<br/>';
?>

</body>
</html>
