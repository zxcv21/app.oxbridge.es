<?
/*
Page ID: p_0010215
File: /front_end/students/students_02_template_01_html_02_header.php
*/
if(isset($_POST['p_0010215_carga_inicial']))$p_0010215_carga_inicial=$_POST['p_0010215_carga_inicial'];
else if(isset($_GET['p_0010215_carga_inicial']))$p_0010215_carga_inicial=$_GET['p_0010215_carga_inicial'];
else $p_0010215_carga_inicial=0;

if($p_0010215_carga_inicial!=0) include($_SERVER['DOCUMENT_ROOT']."/utilities/librerias_10_php_01_basicas.php")
?>
<div id="p_0010215_contenedor_pagina_header"></div>
<link rel="stylesheet" type="text/css" href="<? echo p_0010015_ver_url('0010227','src');?>"/>
<script type="text/javascript" src="<? echo p_0010015_ver_url('0010223','src');?>"></script>
<!-- <link rel="stylesheet" type="text/css" href="https://sb.oxbridge.es/dev/migue/front_end/students/students_02_template_02_css_02_header.css"/> -->
<!-- <script type="text/javascript" src="https://sb.oxbridge.es/dev/migue/front_end/students/students_02_template_03_js_02_header.js"></script> -->