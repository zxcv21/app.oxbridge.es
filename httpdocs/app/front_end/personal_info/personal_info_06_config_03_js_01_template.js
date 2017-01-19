/*
Page ID: p_0010154
File: /front_end/personal_info/personal_info_06_config_03_js_01_template.js
*/

function p_0010154_f_01_js_selecciona_idioma (elemento,valor)
{
	
	
	p_0010154_banderas_deseleccionadas=document.getElementsByClassName("p_0010153_bandera_deseleccionada");
	
	
		for (i in p_0010154_banderas_deseleccionadas)
		 {
			if (p_0010154_banderas_deseleccionadas[i].nodeType=="1")
			{
			p_0010154_banderas_deseleccionadas[i].className="p_0010153_bandera_deseleccionada";
			
			}
		 }	
		 
		 elemento.className="p_0010153_bandera_seleccionada p_0010153_bandera_deseleccionada";
	

			document.getElementById("p_0010152_bandera_seleccionada").value=valor;
	
	
}

function p_0010154_f_02_js_pintar_html()
{
	var p_0010154_html="";
	
	/***********************************************/
	
	
	p_0010154_html+="<div class=\"p_0010011_menu_seccion_titulo\">Configuración</div>";
	p_0010154_html+="<div class=\"p_0010153_personal_info_06_config\">";
	p_0010154_html+="	<div class=\"p_0010011_personal_info_global\">";
	p_0010154_html+="<div class=\"p_0010011_personal_info_campo_01\" >Idioma:</div>";
	p_0010154_html+="			<div class=\"p_0010011_personal_info_div_input_01\">";
	p_0010154_html+="	<img id=\"p_0010152_bandera_cat\" class=\"p_0010153_bandera_deseleccionada\"  name=\"idioma\" src=\"https://app.oxbridge.es/app/images/cat.png\" onclick=\"p_0010154_f_01_js_selecciona_idioma(this,'cat')\">";
	p_0010154_html+="					<img id=\"p_0010152_bandera_esp\" class=\"p_0010153_bandera_deseleccionada\"  name=\"idioma\" src=\"https://app.oxbridge.es/app/images/esp.png\" onclick=\"p_0010154_f_01_js_selecciona_idioma(this,'esp')\">";
	p_0010154_html+="		<img id=\"p_0010152_bandera_ing\" class=\"p_0010153_bandera_deseleccionada p_0010153_bandera_seleccionada\"  name=\"idioma\" src=\"https://app.oxbridge.es/app/images/ing.png\" onclick=\"p_0010154_f_01_js_selecciona_idioma(this,'ing')\">";
	p_0010154_html+="<input id=\"p_0010152_bandera_seleccionada\" type=\"hidden\" name=\"\" value=\"ing\">";
	p_0010154_html+="	</div>";
	p_0010154_html+="	</div>";
	p_0010154_html+="		<div class=\"p_0010011_personal_info_input_submit_01\">";
	p_0010154_html+="<input  type=\"submit\" name=\"GUARDAR\" value=\"GUARDAR\">";
	p_0010154_html+="	</div>";
	p_0010154_html+="<div class=\"p_0010153_titulo_version\">Versión Escritorio:";
	p_0010154_html+="	</div>";
	p_0010154_html+="	<div class=\"p_0010011_personal_info_input_submit_01\">";
	p_0010154_html+="<input type=\"submit\" name=\"ir\" value=\"ir\">";
	p_0010154_html+="	</div>";
	p_0010154_html+="	</div>";
	
	return p_0010154_html;
	
	
	
}	