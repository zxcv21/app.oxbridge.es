<?
/*
Page ID: p_0010216
File: /front_end/students/students_02_template_01_html_03_menu.php
*/
if(isset($_POST['p_0010216_carga_inicial']))$p_0010216_carga_inicial=$_POST['p_0010216_carga_inicial'];
else if(isset($_GET['p_0010216_carga_inicial']))$p_0010216_carga_inicial=$_GET['p_0010216_carga_inicial'];
else $p_0010216_carga_inicial=0;

if($p_0010216_carga_inicial!=0) include($_SERVER['DOCUMENT_ROOT']."/utilities/librerias_10_php_01_basicas.php");
?>
<div id="p_0010216_contenedor_pagina_menu"></div>
<div id="p_0010216_contenedor_pagina_menu_mobil"></div>
<link rel="stylesheet" type="text/css" href="<? echo p_0010015_ver_url('0010220','src');?>"/>
<script type="text/javascript" src="<? echo p_0010015_ver_url('0010224','src');?>"></script>
<!-- <link rel="stylesheet" type="text/css" href="https://sb.oxbridge.es/dev/migue/front_end/students/students_02_template_02_css_03_menu.css"/> -->
<!-- <script type="text/javascript" src="https://sb.oxbridge.es/dev/migue/front_end/students/students_02_template_03_js_03_menu.js"></script> -->