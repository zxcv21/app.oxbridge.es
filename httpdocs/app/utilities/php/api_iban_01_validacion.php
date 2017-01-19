<?
/*
Page ID: p_0010191
File: /utilities/php/api_iban_01_validacion.php
*/

$_GET["p_0010191_get_iban"];

$p_0010191_pagina_resultado=file_get_contents("https://openiban.com/validate/".$_GET["p_0010191_get_iban"]);

 echo $p_0010191_pagina_resultado;

?>


