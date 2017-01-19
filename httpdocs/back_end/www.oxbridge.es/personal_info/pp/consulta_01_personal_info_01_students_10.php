<?
/*
Page ID: p_0010239
File: /back_end/sb.oxbridge.es/personal_info/pp/consulta_01_personal_info_01_students_10.php
*/
?>

<?php

$regex="/;$/";

$result=file_get_contents("http://s.oxbridge.es/ox/estructura_web/codigo/alumno_v2/informacion%20personal%2001%20_datos_presonales_01_asp_02_select.asp?p_0001207_get_alumno_id=".$_POST['id_alumno']);
echo preg_replace($regex,"",$result);
?>
