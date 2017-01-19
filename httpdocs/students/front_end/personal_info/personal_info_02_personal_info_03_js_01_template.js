/*
Page ID:"; p_0010145
File:"; /front_end/personal_info/personal_info_02_personal_info_03_js_01_template.js
*/

function p_0010145_js_f_01_pintar_html()
{
	
p_0010145_id_heredado_html="";	
p_0010145_html="";
/**********************************************************************/
/**********************************************************************/
/**********************************************************************/
/**********************************************************************/

p_0010145_html+="<div class=\"p_0010011_menu_seccion_titulo\">Información Personal </div>";



p_0010145_html+="<form>";
	
	p_0010145_html+="<div class=\"p_0010011_personal_info_global\">";
	p_0010145_html+="<div class=\"p_0010011_personal_info_campo_01\">Nombre:";
	p_0010145_html+="</div>";
	p_0010145_html+="<div class=\"p_0010011_personal_info_div_input_01\">";
	p_0010145_html+="<input class=\"p_0010011_personal_info_input_01\" value=\"\" name=\"nombre\" type=\"text\" placeholder=\"Nombre\" required>";
	p_0010145_html+="</div>";
	p_0010145_html+="</div>";
	
	p_0010145_html+="<div class=\"p_0010011_personal_info_global\">";
	p_0010145_html+="<div class=\"p_0010011_personal_info_campo_01\">Primer Apellido:";
	p_0010145_html+="</div>";
	p_0010145_html+="<div class=\"p_0010011_personal_info_div_input_01\">";
	p_0010145_html+="<input class=\"p_0010011_personal_info_input_01\" value=\"\" name=\"Apellido1\" type=\"text\" placeholder=\"Primer Apellido\" required>";
	p_0010145_html+="</div>";
	p_0010145_html+="</div>";

	p_0010145_html+="<div class=\"p_0010011_personal_info_global\">";
	p_0010145_html+="<div class=\"p_0010011_personal_info_campo_01\">Segundo Apellido:";
	p_0010145_html+="</div>";
	p_0010145_html+="<div class=\"p_0010011_personal_info_div_input_01\">";
	p_0010145_html+="<input class=\"p_0010011_personal_info_input_01\" value=\"\" name=\"Apellido2\" type=\"text\" placeholder=\"Segundo Apellido\">";
	p_0010145_html+="</div>";
	p_0010145_html+="</div>";
	
	p_0010145_html+="<div class=\"p_0010011_personal_info_global\">";
	p_0010145_html+="<div class=\"p_0010011_personal_info_campo_01\">Email:";
	p_0010145_html+="</div>";
	p_0010145_html+="<div class=\"p_0010011_personal_info_div_input_01\">";
	p_0010145_html+="<input class=\"p_0010011_personal_info_input_01\" value=\"\" name=\"Email\" type=\"text\" placeholder=\"Email\" pattern=\"[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,5}$\" required>";
	p_0010145_html+="</div>";
	p_0010145_html+="</div>";
	
	p_0010145_html+="<div class=\"p_0010011_personal_info_global\">";
	p_0010145_html+="<div class=\"p_0010011_personal_info_campo_01\">Teléfono:";
	p_0010145_html+="</div>";
	p_0010145_html+="<div class=\"p_0010011_personal_info_div_input_01\">";
	p_0010145_html+="<input class=\"p_0010011_personal_info_input_01\" value=\"\" name=\"Telefono\" type=\"text\" placeholder=\"Teléfono\">";
	p_0010145_html+="</div>";
	p_0010145_html+="</div>";
	
	p_0010145_html+="<div class=\"p_0010011_personal_info_global\">";
	p_0010145_html+="<div class=\"p_0010011_personal_info_campo_01\">Móvil:";
	p_0010145_html+="</div>";
	p_0010145_html+="<div class=\"p_0010011_personal_info_div_input_01\">";
	p_0010145_html+="<input class=\"p_0010011_personal_info_input_01\" value=\"\" name=\"Movil\" type=\"text\" placeholder=\"Móvil\">";
	p_0010145_html+="</div>";
	p_0010145_html+="</div>";

	p_0010145_html+="<div class=\"p_0010011_personal_info_global\">";
	p_0010145_html+="<div class=\"p_0010011_personal_info_campo_01\">Dirección:";
	p_0010145_html+="</div>";
	p_0010145_html+="<div class=\"p_0010011_personal_info_div_input_01\">";
	p_0010145_html+="<input class=\"p_0010011_personal_info_input_01\" value=\"\" name=\"Direccion\" type=\"text\" placeholder=\"Dirección\">";
	p_0010145_html+="</div>";
	p_0010145_html+="</div>";
	
	p_0010145_html+="<div class=\"p_0010011_personal_info_global\">";
	p_0010145_html+="<div class=\"p_0010011_personal_info_campo_01\">Número:";
	p_0010145_html+="</div>";
	p_0010145_html+="<div class=\"p_0010011_personal_info_div_input_01\">";
	p_0010145_html+="<input class=\"p_0010011_personal_info_input_01\" value=\"\" name=\"Numero\" type=\"text\" placeholder=\"Número\">";
	p_0010145_html+="</div>";
	p_0010145_html+="</div>";
	
	p_0010145_html+="<div class=\"p_0010011_personal_info_global\">";
	p_0010145_html+="<div class=\"p_0010011_personal_info_campo_01\">Código Postal:";
	p_0010145_html+="</div>";
	p_0010145_html+="<div class=\"p_0010011_personal_info_div_input_01\">";
	p_0010145_html+="<input class=\"p_0010011_personal_info_input_01\" value=\"\" name=\"CP\" type=\"text\" placeholder=\"Código Postal\">";
	p_0010145_html+="</div>";
	p_0010145_html+="</div>";
	
	p_0010145_html+="<div class=\"p_0010011_personal_info_global\">";
		p_0010145_html+="<div class=\"p_0010011_personal_info_campo_01\">Ciudad:";
		p_0010145_html+="</div>";
		
		p_0010145_html+="<div class=\"p_0010011_personal_info_div_input_01\">";
			p_0010145_html+="<input class=\"p_0010011_personal_info_input_01\" value=\"\" name=\"Ciudad\" type=\"text\" placeholder=\"Ciudad\">";
		p_0010145_html+="</div>";
	p_0010145_html+="</div>";

	p_0010145_html+="<div class=\"p_0010011_personal_info_global\">";
		p_0010145_html+="<div class=\"p_0010011_personal_info_global p_0010011_personal_info_campo_01\">";
			p_0010145_html+="<select id=\p_0010128_select_tipo_documento\" class=\"p_0010011_alineacion\" value=\"\" name=\"DI\" onChange=\"p_0010196_js_f_01_puente_a_validacion_despues_de_seleccion(this)\">";
							p_0010145_html+=" <option value=\"NIF\">NIF</option>";
							p_0010145_html+=" <option value=\"NIE\">NIE</option>";
							p_0010145_html+=" <option value=\"CIF\">CIF</option>";
							p_0010145_html+=" <option value=\"PAS\">Pasaporte</option>";
			p_0010145_html+="</select>";
		p_0010145_html+="</div>";
		p_0010145_html+="<div class=\"p_0010011_personal_info_div_input_01\">";
			p_0010145_html+="<input class=\"p_0010011_personal_info_input_01\" value=\"\" name=\"DI\" type=\"text\" placeholder=\"NIF/CIF/NIE/Pasaporte\" pattern=\"^(X(-|\.)?0?\d{7}(-|\.)?[A-Z]|[A-Z](-|\.)?\d{7}(-|\.)?[0-9A-Z]|\d{8}(-|\.)?[A-Z])$\" required>";
		p_0010145_html+="</div>";
	p_0010145_html+="</div>";
	
	

	p_0010145_html+="<div class=\"p_0010011_personal_info_global\">";
	p_0010145_html+="<div class=\"p_0010011_personal_info_campo_01\">Fecha de Nacimiento:";
	p_0010145_html+="</div>";
	p_0010145_html+="<div class=\"p_0010011_personal_info_div_input_01\">";
	p_0010145_html+="<input class=\"p_0010011_personal_info_input_01\" value=\"\" name=\"FechaNac\" type=\"text\" placeholder=\"DD/MM/YYYY\">";
	p_0010145_html+="</div>";
	p_0010145_html+="</div>";
	
	
	p_0010145_html+="<div class=\"p_0010011_personal_info_input_submit_01\">";
	p_0010145_html+="<input  type=\"submit\" name=\"GUARDAR\" value=\"GUARDAR\">";
	p_0010145_html+="</div>";
    p_0010145_html+="</form>";


/**********************************************************************/
/**********************************************************************/
/**********************************************************************/
/**********************************************************************/

return p_0010145_html;

}

