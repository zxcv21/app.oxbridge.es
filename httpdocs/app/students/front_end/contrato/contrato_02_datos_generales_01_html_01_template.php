<?
/*
Page ID: p_0010170
File: /front_end/contrato/contrato_02_datos_generales_01_html_01_template.php
*/
?>
<div id='p_0010170_div_respuuesta_ajax' style='display:none;'></div>
<link rel="stylesheet" type="text/css" href="http://sb.oxbridge.es/dev/migue/front_end/contrato/contrato_02_datos_generales_02_css_01_template.css"/>

<!------------------------ TITULO SECCION ------------------------>
<div id='p_0010170_div_titulo_seccion' class='p_0010171_css_titulo_de_seccion'>Pagos</div>
<img id='p_0010170_img_imagen_guardado' class='p_0010171_css_imagen_guardar' src='http://sb.oxbridge.es/dev/migue/front_end/contrato/imagenes/guardar_desactivado.png'/><br>

<div class='p_0010171_css_separacion'>DATOS CUENTA</div>

<!------------------------ SECCION FECHA ------------------------>
<div class='p_0010171_css_contenedor_secciones'>
<div class='p_0010171_css_texto_input'> Alta: </div>
	<div class='p_0010171_css_div_input'><input type='text' id='p_0010170_input_fecha_inicio' class="p_0010171_css_input" required maxlength="10" onkeyUp="p_0010172_js_f_01_anadir_barra_automaticamente(this.id,event),p_0010172_js_f_06_comprueba_estado_inputs_fechas(),p_0010172_js_f_10_mostrar_boton_guardar_deshabilitado(this.value)" placeholder="DD/MM/AAAA" pattern="(^((0[1-9])|([1-2][0-9])|(3[0-1]))\/((0[1-9])|(1[0-2]))\/([0-9]{4})$)|(^$)" /></div>
<div class='p_0010171_css_texto_input'> Baja: </div>
	<div class='p_0010171_css_div_input'><input type='text' id='p_0010170_input_fecha_fin' class="p_0010171_css_input" maxlength="10" onkeyUp="p_0010172_js_f_01_anadir_barra_automaticamente(this.id,event),p_0010172_js_f_06_comprueba_estado_inputs_fechas(),p_0010172_js_f_10_mostrar_boton_guardar_deshabilitado(this.value)" placeholder="DD/MM/AAAA" pattern="(^((0[1-9])|([1-2][0-9])|(3[0-1]))\/((0[1-9])|(1[0-2]))\/([0-9]{4})$)|(^$)"/></div>
</div>
	
<!------------------------ SECCION FRECUENCIA ------------------------>
<div class='p_0010171_css_contenedor_secciones'>
	<div id='p_0010170_div_titulo_frecuencia' class='p_0010171_css_text_div'>Frecuencia</div>
	<div id="p_0010170_div_contenedor_select_frecuencia"></div>
</div>

<!------------------------ SECCION TITULAR ------------------------>
<div class='p_0010171_css_contenedor_secciones'>
	<div id='p_0010170_div_titulo_titular' class='p_0010171_css_text_div'>Titular </div>
</div>

<!------------------------ SECCION CAE ------------------------>
<div class='p_0010171_css_contenedor_secciones'>
	<div id='p_0010170_div_titulo_cae' class='p_0010171_css_text_div'>CAE </div>
	<div id="p_0010170_div_contenedor_select_cae"></div>
</div>

<!------------------------ SECCION EMPRESA FACTURA ------------------------>
<div class='p_0010171_css_contenedor_secciones'>
	<div id='p_0010170_div_titulo_empresa_factura' class='p_0010171_css_text_div'>Empresa Factura </div>
	<div id="p_0010170_div_contenedor_select_factura"></div>
</div>

<!------------------------ SECCION MATRICULA ------------------------>

<div class='p_0010171_css_contenedor_secciones'>
	<div class='p_0010171_css_texto_input'> Matricula </div>
	<div class='p_0010171_css_div_input'>
		<input type="text" size='15' id="p_0010170_input_matricula" class="p_0010171_css_input" pattern="^(\d{1}\.)?(\d+\.?)+(,\d{2})?$" onblur="p_0010172_js_f_05_anadir_zero_decimal(this.id,event);" />
	</div>
</div>


<div class='p_0010171_css_separacion'>DATOS BANCARIOS</div>


<!------------------------ SECCION PRIMER RECIBO ------------------------>
<div class='p_0010171_css_contenedor_secciones'>
<div class='p_0010171_css_text_div'>Primer Recibo</div>
<div class='p_0010171_css_texto_input'> Fecha: </div>
	<div class='p_0010171_css_div_input'><input type='text' id='p_0010170_input_fecha_primer_recibo' maxlength="10" class="p_0010171_css_input" onkeyUp="p_0010172_js_f_01_anadir_barra_automaticamente(this.id,event),p_0010172_js_f_06_comprueba_estado_inputs_fechas(),p_0010172_js_f_10_mostrar_boton_guardar_deshabilitado(this.value)" placeholder="DD/MM/AAAA" pattern="(^((0[1-9])|([1-2][0-9])|(3[0-1]))\/((0[1-9])|(1[0-2]))\/([0-9]{4})$)|(^$)" /></div>
<div class='p_0010171_css_texto_input'> Importe: </div>
	<div class='p_0010171_css_div_input'><input type='text' id='p_0010170_input_importe_primer_recibo' class="p_0010171_css_input" pattern="^(\d{1}\.)?(\d+\.?)+(,\d{2})?$" onblur="p_0010172_js_f_05_anadir_zero_decimal(this.id,event);"/></div>
</div>


<!------------------------ SECCION CUOTAS ------------------------>
<div class='p_0010171_css_contenedor_secciones'>
<div class='p_0010171_css_text_div'>Cuotas</div>
<div class='p_0010171_css_texto_input'> Fecha: </div>
	<div class='p_0010171_css_div_input'><input type='text' id='p_0010170_input_fecha_cuota' maxlength="8" class="p_0010171_css_input" onkeyUp="p_0010172_js_f_01_anadir_barra_automaticamente(this.id,event),p_0010172_js_f_06_comprueba_estado_inputs_fechas(),p_0010172_js_f_10_mostrar_boton_guardar_deshabilitado(this.value,this.id)" placeholder="MM/AAAA"  pattern="(^((0[1-9])|(1[0-2]))\/([0-9]{4})$)|(^$)" /></div>
<div class='p_0010171_css_texto_input'> Importe: </div>
	<div class='p_0010171_css_div_input'><input type='text' id='p_0010170_input_importe_cuota' class="p_0010171_css_input" pattern="^(\d{1}\.)?(\d+\.?)+(,\d{2})?$" onblur="p_0010172_js_f_05_anadir_zero_decimal(this.id,event);"/></div>
</div>


<script type="text/javascript" src="http://sb.oxbridge.es/dev/migue/front_end/contrato/contrato_02_datos_generales_03_js_01_template.js"></script>