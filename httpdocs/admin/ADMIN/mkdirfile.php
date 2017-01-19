<?php

function crea_directorio_archivo_a_partir_de_url($nombre_carpeta_usuario){
if(!is_dir($_SERVER['DOCUMENT_ROOT']."/app/DEV/".$nombre_carpeta_usuario)){
$resultado=mkdir($_SERVER['DOCUMENT_ROOT']."/app/DEV/".$nombre_carpeta_usuario, 0750);
}
$contenido_fichero='<?
/*
Version_listado
DevVer:'.$nombre_carpeta_usuario.'
*/
echo "<script>console.info(\'Lista Dev '.$nombre_carpeta_usuario.' -OK-\');</script>";
$VERSION_LISTADO=array();
/*lista*/
?>';
$fichero_destino=fopen($_SERVER['DOCUMENT_ROOT']."/app/DEV/".$nombre_carpeta_usuario."/version_listado.php","w");
//fwrite($_SERVER['DOCUMENT_ROOT']."/app/DEV/".$nombre_carpeta_usuario."/version_listado.php", $contenido_fichero);
fwrite($fichero_destino, $contenido_fichero);
fclose($fichero_destino);
}
//crea_directorio_archivo_a_partir_de_url('DANIEL');
?>
