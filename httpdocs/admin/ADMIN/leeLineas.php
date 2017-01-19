<?php
/*
eje:
$listados_ficheros_ocupados=concat(obtener_array_fichero(DEV/FER/listado_version.php),obtener_array_fichero(DEV/DANI/listado_version.php),);


*/
function obtener_array_fichero($ruta)
{
	
	$js = file($ruta);
	$patron ='/(^\<\?array_push\(\$VERSION_LISTADO,\".*\"\);\?\>)/';
	$array = Array();
	
	foreach( $js as $indice=>$valor)
	{
		if(preg_match($patron,$js[$indice]))
		{
			$js[$indice]=str_replace('<?array_push($VERSION_LISTADO,"','',$js[$indice]);
			$js[$indice]=str_replace('");?>','',$js[$indice]);
			array_push($array,$js[$indice]);
			//echo $js[$indice] . "<br>";
		}
	}
	return $array;
}
$ruta=$_SERVER['DOCUMENT_ROOT']."/app/admin/ADMIN/version_listado.php";
foreach(obtener_array_fichero($ruta) as $valor )
echo $valor."<br/>";
//http://app.oxbridge.es/app/admin/ADMIN/version_listado.php
//obtener_array_fichero($ruta);
?>
