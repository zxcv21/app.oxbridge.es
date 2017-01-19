<?
/*
*ID Pag:p_01448
*NAME:p_01448_carrera_actualizar_posicion.php

*POST/GET p_01448_alumno_id, p_01448_smiles_conseguidos, p_01448_smiles_para_pasar_nivel,  p_01448_finalizador
*/

if(isset($_GET['p_01448_alumno_id']))$_POST['p_01448_alumno_id']=$_GET['p_01448_alumno_id'];
if(isset($_GET['p_01448_smiles_conseguidos']))$_POST['p_01448_smiles_conseguidos']=$_GET['p_01448_smiles_conseguidos'];
if(isset($_GET['p_01448_smiles_para_pasar_nivel']))$_POST['p_01448_smiles_para_pasar_nivel']=$_GET['p_01448_smiles_para_pasar_nivel'];
if(isset($_GET['p_01448_finalizador']))$_POST['p_01448_finalizador']=$_GET['p_01448_finalizador'];

$p_01448_php_url = "http://s.oxbridge.es/ox/estructura_web/codigo/alumno_v2/smiles_01_preguntas_03_asp_04_update_01_totales.asp";
$p_01448_php_url.= "?p_0001467_get_alumno_id=".$_POST['p_01448_alumno_id'];
$p_01448_php_url.= "&p_0001467_get_smiles_conseguidos=".$_POST['p_01448_smiles_conseguidos'];
$p_01448_php_url.= "&p_0001467_get_smiles_para_pasar_nivel=".$_POST['p_01448_smiles_para_pasar_nivel'];
$p_01448_php_ejecutar_pagina = curl_init();
curl_setopt($p_01448_php_ejecutar_pagina, CURLOPT_URL, $p_01448_php_url);
curl_setopt($p_01448_php_ejecutar_pagina, CURLOPT_HEADER, 0);
curl_exec($p_01448_php_ejecutar_pagina);
curl_close($p_01448_php_ejecutar_pagina);

if(isset($_POST['p_01448_finalizador']))
{
	echo $_POST['p_01448_finalizador'];
}
?>