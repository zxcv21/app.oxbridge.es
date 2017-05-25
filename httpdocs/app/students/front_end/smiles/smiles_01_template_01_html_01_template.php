<?
/*
Pag ID:p_0010027
file:/smiles/smiles_01_template_01_html_01_template.php
*/

/* original
Pag ID:p_0010243
file:/smiles/smiles_01_template_01_html_01_template.php
*/
if(isset($_POST['p_0010243_carga_inicial']))$p_0010243_carga_inicial=$_POST['p_0010243_carga_inicial'];
else if(isset($_GET['p_0010243_carga_inicial']))$p_0010243_carga_inicial=$_GET['p_0010243_carga_inicial'];
else $p_0010243_carga_inicial=0;

if($p_0010243_carga_inicial!=0) include($_SERVER['DOCUMENT_ROOT']."/utilities/librerias_10_php_01_basicas.php");
?>
<meta charset="utf-8"></meta>
<meta name="viewport" content="user-scalable=1, initial-scale=1, minimum-scale=1">
<link rel="stylesheet" type="text/css" href="<? //echo p_0010015_ver_url('0010244','src');?>"/>
<script type="text/javascript" src="<? //echo p_0010015_ver_url('0010245','src'); ?>"></script>


<link rel="stylesheet" type="text/css" href="https://sb.oxbridge.es/dev/migue/front_end/smiles/smiles_01_template_02_css_01_template.css"/>
<script type="text/javascript" src="https://sb.oxbridge.es/dev/migue/front_end/smiles/smiles_01_template_03_js_01_template.js"></script>


<div id="p_0010243_div_carrera">
<img src="https://app.oxbridge.es/app/images/bandera_start.png"/>
<div id="carrera_pista" style="position: relative;border-bottom: solid #2DCEE4;z-index: 2;margin:0 10 0 10;"></div>
<img style="height:60;float: right;"src="https://app.oxbridge.es/app/images/bandera_end.png" />
</div>