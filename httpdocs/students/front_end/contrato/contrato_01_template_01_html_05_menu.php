<?/*
Page ID:  p_0010161
File: /front_end/contrato/contrato_01_template_01_html_05_menu.php
*/?>

<link rel="stylesheet" type="text/css" href="http://sb.oxbridge.es/dev/migue/front_end/contrato/contrato_01_template_02_css_05_menu.css"/>

<!--
<span id='p_0010161_span_pestana_unica' class='p_0010162_css_estilo_inputs'>Pestaña unica</span><input type='checkbox' id='p_0010161_input_pestana_unica'/>
<span id='p_0010161_span_pestana_recarga' class='p_0010162_css_estilo_inputs'>Pestaña recarga</span><input type='checkbox' id='p_0010161_input_pestana_recarga'/>
<span id='p_0010161_span_mostrar_pestanas_vertial' class='p_0010162_css_estilo_inputs'>Posicion Vertical</span><input  type='checkbox' class='p_0010162_css_estilo_margen_separacion_lista_pestanas' id='p_0010161_input_mostrar_pestanas_vertial'/> 
-->

<div id='p_0010161_div_opciones_de_pestanas' class='p_0010162_css_opcion_de_pestanyas_div'>
	<img id='p_0010161_img_pestana_unica' style='opacity:0.4;' src='http://sb.oxbridge.es/images/pestanya_unica.png'></img>
	<img id='p_0010161_img_pestana_recarga' style='opacity:0.4;' src='http://sb.oxbridge.es/images/pestanya_recarga.png'></img>
	<img id='p_0010161_img_posicion_pestana' style='opacity:0.4;' src='http://sb.oxbridge.es/images/pestanya_horizontal.png'></img>
</div>

<div id='p_0010161_div_oculta_muestra_pestanas_pantalla_pequena' class='p_0010162_css_oculta_muestra_pestanas_pantalla_pequena' onclick='p_0010163_js_f_05_mostrar_ocultar_lista_pestanas_pantalla_pequena();'><img src='imagenes/menu_icono.png' style='height: 100%;'/></div>
<div id='p_0010161_div_contenedor_pestanas' class='p_0010159_css_contenedor_pestanas'>
<div id='p_0010161_div_datos' class="p_0010162_css_estilo_pestanas" onclick='p_0010163_js_f_08_obtener_pagina_a_llamar(this.id);'>Datos</div>
<div id='p_0010161_div_observaciones' class="p_0010162_css_estilo_pestanas" onclick='p_0010163_js_f_08_obtener_pagina_a_llamar(this.id);'>Observaciones</div>
<div id='p_0010161_div_pagadores'  class="p_0010162_css_estilo_pestanas" onclick='p_0010163_js_f_08_obtener_pagina_a_llamar(this.id);'>Pagadores</div>
<div id='p_0010161_div_alumnos'  class="p_0010162_css_estilo_pestanas" onclick='p_0010163_js_f_08_obtener_pagina_a_llamar(this.id);'>Alumnos</div>
<div id='p_0010161_div_grupos' class="p_0010162_css_estilo_pestanas" onclick='p_0010163_js_f_08_obtener_pagina_a_llamar(this.id);'>Grupos</div>
<div id='p_0010161_div_recibos' class="p_0010162_css_estilo_pestanas" onclick='p_0010163_js_f_08_obtener_pagina_a_llamar(this.id);'>Recibos/facturas</div>
<div id='p_0010161_div_alertas' class="p_0010162_css_estilo_pestanas" onclick='p_0010163_js_f_08_obtener_pagina_a_llamar(this.id);'>Alertas</div>
</div>

<script type="text/javascript" src="http://sb.oxbridge.es/dev/migue/front_end/contrato/contrato_01_template_03_js_05_menu.js"></script>
<script type="text/javascript" src="http://sb.oxbridge.es/utilities/js/utilities_03_js_01_ajax_load_page.js"></script>


<img style='display:none;' src='http://sb.oxbridge.es/dev/migue/front_end/contrato/imagenes/loading.png'><!--SIMPLEMENTE PONGO LA IMAGEN PARA QUE LA CARGE -->
<!-- 
http://sb.oxbridge.es/images/pestanya_vertical.png
http://sb.oxbridge.es/images/pestanya_horizontal.png
http://sb.oxbridge.es/images/pestanya_unica.png
http://sb.oxbridge.es/images/pestanya_recarga.png

-->