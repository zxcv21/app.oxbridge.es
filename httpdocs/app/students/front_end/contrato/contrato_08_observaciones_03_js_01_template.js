/*
Page ID: p_0010190
File: /front_end/contrato/contrato_08_observaciones_03_js_01_template.js
*/

function p_0010190_js_01_anadir_comentario_escrito_usuario()
{
	
	var p_0010190_js_fecha_actual=new Date();
	p_0010190_js_fecha_actual_construida=p_0010190_js_fecha_actual.getDate()+"/"+(p_0010190_js_fecha_actual.getMonth()+1)+"/"+p_0010190_js_fecha_actual.getFullYear() //obtenemos la fecha actual
	p_0010190_js_hora_actual=p_0010190_js_fecha_actual.getHours()+":"+p_0010190_js_fecha_actual.getMinutes()+":"+p_0010190_js_fecha_actual.getSeconds() //obtenemos la hora actual del sistema.

	/*******CREACION DIV PARA LA FEHCA Y HORA DEL SISTEMA******/
	var  p_0010190_js_div_fecha_hora_usuario=document.createElement('span');
	p_0010190_js_div_fecha_hora_usuario.innerHTML=p_0010190_js_fecha_actual_construida + " " + p_0010190_js_hora_actual;
	
	/*******CREACION DIV PARA CONTENIDO DEL TEXTAREA******/
	var p_0010190_js_valor_text_area=document.getElementById('p_0010188_observaciones').value; //obtenemos el valor del usuario
	var  p_0010190_js_div_contenido_textarea=document.createElement('span');
	p_0010190_js_div_contenido_textarea.innerHTML="<br>" + p_0010190_js_valor_text_area + "<hr class='p_0010189_css_hr'>";
	
	
	document.getElementById('p_0010188_contenedor_observaciones').appendChild(p_0010190_js_div_fecha_hora_usuario);
	p_0010190_js_div_fecha_hora_usuario.appendChild(p_0010190_js_div_contenido_textarea);
}

