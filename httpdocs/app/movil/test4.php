<?
	//corregir separacion de espacios
	$firma = str_replace(" ","+",$_POST['firma_archivo']);

	$tamano = $_FILES["firma_archivo"]['size'];
	$tipo = $_FILES["firma_archivo"]['type'];
	$archivo = $_FILES["firma_archivo"]['name'];
	
	$ruta = "firmas_alumnos/".$_POST['directirio_id'];
	
	$destino = $ruta."/".$_POST['firma_id'].".png";
	$data = file_get_contents($firma);
    
	echo "<img src='".$firma."'>";
	 
	//quitar "DATA:," del contenido del archivo
	$filteredData=substr($firma, strpos($firma, ",")+1);
	// decodificar base 64 para guardar en png
	$decodedData=base64_decode($filteredData);
	
	//crear carpeta de mes si no existe
	if(!file_exists($ruta)){
		mkdir ($ruta);
		//echo "Se ha creado el directorio: " . $ruta."<br>";
	}
	
	//abrir carpeta
	$fic_name = $_POST['firma_id'].'.png';
	$fp = fopen($destino, 'wb');

	
	
	$ok = fwrite( $fp, $decodedData);
	fclose( $fp );
	if(!$ok)
		echo "ERROR ".$ok;

?>

