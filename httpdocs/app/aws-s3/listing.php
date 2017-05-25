<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>

LISTING YOUR S3 BUCKETS
<br />

<?
$S3bucket='ox-firmas';
$folder='firmas';
$imagesizeh='1024';
$imagesizev='1024';
$tipofichero='image';
?>

<?

//AWS access INICIO
	$gertrudis_times = substr_count($_SERVER['PHP_SELF'],"/");
	$gertrudis_root_access = "";
	$gertrudis_i = 0;

	while ($gertrudis_i < $gertrudis_times)
	{
		$gertrudis_root_access .= "../";
		$gertrudis_i++;
	};
	include($gertrudis_root_access.'gertrudis/aws_function.php');
	getAWSconfig();
//AWS access FIN

include ('S3_config.php');


// Listamos el contenido del Bucket de Amazon S3
try{
	$contents = $s3->getBucket($S3bucket);
}catch(Exception $e){
	echo "error ".$e;
	die();
}
	$contador_ficheros=0;
	foreach ($contents as $file){

		$fname = $file['name'];
		//$furl = "https://".$S3bucket.".s3.amazonaws.com/".$fname;
		$furl = "https://s3-eu-west-1.amazonaws.com/ox-firmas/".$fname;
		$contador_ficheros++;
		// Imprimo el archivo que voy encontrando
		echo $contador_ficheros." <a href=\"$furl\">$fname</a><br />";
	}
		echo "<br>contenido:$contents<br>";

?>
</body>
</html>
