<?/*
Page ID:  p_0010155
File: /front_end/contrato/contrato_01_template_01_html_01_template.php
*/?>

<html>
 <head>
 <meta charset="UTF-8">
	<script>
		var contratos={
			"pagos":{"cargado":false,"cargando":false},
			"observaciones":{"cargado":false,"cargando":false},
			"recibos":{"cargado":false,"cargando":false},
			"alertas":{"cargado":false,"cargando":false},
			"pagadores":{"cargado":false,"cargando":false},
			"alumnos":{"cargado":false,"cargando":false},
			"grupos":{"cargado":false,"cargando":false},
			"datos":{"cargado":false,"cargando":false},
			"frecuencia":["Pago Unico","Mensual","Bimensual","Trimestral","Semestral"],
			"cae":["YYY","XXX","PPP","SSS","WWW"],
			"empresa":["Microfost","Google","BMW","Mercedes","Gucci"]
		};
	
	</script>
	<script type="text/javascript" src="http://sb.oxbridge.es/dev/migue/front_end/contrato/contrato_01_template_03_js_01_template_01_funciones_generales.js"></script>
	<link rel="stylesheet" type="text/css" href="http://sb.oxbridge.es/dev/migue/front_end/contrato/contrato_01_template_02_css_01_template_01_template.css"/>
 </head>
 <body>
	
	<!-- Include Título -->
	<div id='p_0010155_div_contenedor_titulo' class='p_0010159_css_contenedor_titulo'>
		<?  include($_SERVER['DOCUMENT_ROOT']."/dev/migue/front_end/contrato/contrato_01_template_01_html_03_titulo.php"); ?>
	</div> 
	
	<!-- Include listas -->
	<div id='p_0010155_div_contenedor_listas'>
		<? include($_SERVER['DOCUMENT_ROOT']."/dev/migue/front_end/contrato/contrato_01_template_01_html_05_menu.php");?>
	</div> 
	
	<!-- DIV mensaje_sin_internet -->
	<div id='p_0010155_div_mensaje_no_hay_internet' class='p_0010159_css_mensaje_no_hay_internet' style='display:none;'></div>
	
	<!-- Include del contenido de las listas -->
	<div id='p_0010155_div_contenedor_listas_contenido' class='p_0010159_css_contenedor_listas_contenido'>
		<div id='p_0010155_div_datos' class='p_0010159_css_contenido_pestanas' style='display:none;'></div>
		<div id='p_0010155_div_observaciones' class='p_0010159_css_contenido_pestanas' style='display:none;'></div>
		<div id='p_0010155_div_recibos' class='p_0010159_css_contenido_pestanas' style='display:none;'></div>
		<div id='p_0010155_div_alertas' class='p_0010159_css_contenido_pestanas' style='display:none;'></div>
		<div id='p_0010155_div_pagadores' class='p_0010159_css_contenido_pestanas' style='display:none;'></div>
		<div id='p_0010155_div_alumnos' class='p_0010159_css_contenido_pestanas' style='display:none;'></div>
		<div id='p_0010155_div_grupos' class='p_0010159_css_contenido_pestanas' style='display:none;'></div>
	</div> 
 </body>
<html>