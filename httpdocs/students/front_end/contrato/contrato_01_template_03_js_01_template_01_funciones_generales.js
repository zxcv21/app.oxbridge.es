/*
Page ID:  p_0010157
File: /front_end/contrato/contrato_01_template_03_js_01_template_01_funciones_generales.js
*//*
Page ID: 0
File: /front_end/contrato/
*/

function p_0010157_js_f_01_cargando(id,he){
	if(typeof he == "undefined")he="1em";
	
	document.getElementById(id).innerHTML=""+
		"<img style='"+
		"		height:"+he+";"+
		"		-moz-animation: p_00995_horario_loading infinite 1s linear;"+
		"		-webkit-animation: p_00995_horario_loading infinite 1s linear;"+
		"		animation:p_00995_horario_loading infinite 1s linear;"+
		"' src='http://sb.oxbridge.es/dev/migue/front_end/contrato/imagenes/loading.png'>";
}