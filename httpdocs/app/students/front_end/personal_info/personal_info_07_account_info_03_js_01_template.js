/*
Page ID: p_0010169
File: /front_end/personal_info/personal_info_07_account_info_03_js_01_template.js
*/
/*url(text),id_elemento(text),post(text),run_js(bolean),end_function(function)[,json(boleano)]*/

function p_0010169_js_f_01_cambia_input(elemento)
{
	var p_0010169_id = parseInt(elemento.id.slice(-1))+1;
	
	
	var elemento_str=elemento.value;
	
	if (elemento.value.length>=4)
	{
		if(document.getElementById(elemento.id.slice(0,-1)+p_0010169_id))
		{
			document.getElementById(elemento.id.slice(0,-1)+p_0010169_id).focus();
		}
	}
}

function p_0010169_js_f_02_rellena_input(elemento)
{
	
	var iban_cajas=elemento.value;
	if (elemento.value.length>4)	
	{
		var x=1;
		while( x < 7)
		{
			var input_fin=document.getElementById("p_0010167_input_cc_iban_"+x);
			var operando=(x-1)*4;
			var iban_cajas_resultado="";
			
			
			iban_cajas_resultado=iban_cajas.slice(operando,operando+4);
			
			x++;
			input_fin.value=iban_cajas_resultado;
		}
	}
}
/*function p_0010169_js_f_03_funcion_puente(elemento)
{
	
	if (elemento.value=="PAS")
	{
		
		console.info("Por validar");
		
	}else{
		
		check_nif_cif_nie(elemento);
		
	}

}*/
function p_0010169_js_f_04_submit_obj_iban(p_0010169_checkbox_cuenta_internacional,
p_0010169_input_cc_iban_ext_1,p_0010169_div_cc_iban_mensaje_error,p_0010169_div_account_info_global,p_0010169_input_cc_iban_1,p_0010169_input_tipo_documento,p_0010169_div_doc_iden_mensaje_error,p_0010169_select_tipo_documento)
{
	
	
	p_0010169_checkbox_iban=document.getElementById(p_0010169_checkbox_cuenta_internacional);
	
	if (p_0010169_checkbox_iban.checked){
		
				var p_0010169_cuenta_extranjera="";
				p_0010169_cuenta_extranjera=document.getElementById(p_0010169_input_cc_iban_ext_1).value;
				
				
				
				if (p_0010201_js_f_01_validar_iban(p_0010169_cuenta_extranjera))
				{
						
						document.getElementById(p_0010169_div_cc_iban_mensaje_error).style.display="none";
					
				}else{
						
						document.getElementById(p_0010169_div_cc_iban_mensaje_error).innerHTML="IBAN inválido";
						document.getElementById(p_0010169_div_cc_iban_mensaje_error).style.display="inline-block";
					
				}
					
	
	}else{

					p_0010169_elementos_iban=document.getElementById(p_0010169_div_account_info_global).getElementsByTagName("input");
					
						
					var p_0010169_id_iban="";
					for(i=1; i<p_0010169_elementos_iban.length;i++ )
					{
					p_0010169_id_iban+=""+p_0010169_elementos_iban[i].value;
					}
				
					var p_0010169_valor_iban=p_0010169_elementos_iban[0].value;
					
						
						
						
						
						if(p_0010201_js_f_06_validaCCC(p_0010169_id_iban))
						{
							if(p_0010169_valor_iban=="")
								{
									var p_0010169_numero_iban=p_0010201_calcularIBAN(p_0010169_id_iban,"ES");
									
									document.getElementById(p_0010169_input_cc_iban_1).value=p_0010169_numero_iban;
									
									
								
								}else{
								
									document.getElementById(p_0010169_div_cc_iban_mensaje_error).style.display="none";
									
									
									if(!p_0010201_js_f_01_validar_iban(p_0010169_valor_iban+p_0010169_id_iban))
									{
										document.getElementById(p_0010169_div_cc_iban_mensaje_error).style.display="inline-block";
										
									}
								}
								
								
								
						}else{
								document.getElementById(p_0010169_div_cc_iban_mensaje_error).innerHTML="Número de cuenta inválido";
								document.getElementById(p_0010169_div_cc_iban_mensaje_error).style.display="inline-block";
								
						}
		}
		
		/* ZONA DOCUMENTO IDENTIDAD*/
		
		
		

		document.getElementById(p_0010169_div_doc_iden_mensaje_error).style.display="none";
		if(p_0010169_input_tipo_documento!=""){
	
			p_0010196_resultado_formato_doc_iden=p_0010196_check_nif_cif_nie(p_0010169_input_tipo_documento);
			
				console.log(p_0010169_select_tipo_documento);
				if (p_0010196_resultado_formato_doc_iden[0])
				{
			
					if (p_0010169_select_tipo_documento!=p_0010196_resultado_formato_doc_iden[1])
					{
						document.getElementById(p_0010169_div_doc_iden_mensaje_error).innerHTML="Tipo de documento incorrecto, elija una opción válida";
						
						document.getElementById(p_0010169_div_doc_iden_mensaje_error).style.display="inline-block";
					}
				}else{
						document.getElementById(p_0010169_div_doc_iden_mensaje_error).style.display="inline-block";
						if (p_0010196_resultado_formato_doc_iden[1]=="FORMATO"){
							document.getElementById(p_0010169_div_doc_iden_mensaje_error).innerHTML="Formato incorrecto";
						}else{						
						document.getElementById(p_0010169_div_doc_iden_mensaje_error).innerHTML="Formato de "+p_0010196_resultado_formato_doc_iden[1]+" incorrecto";
					
						}

				}
			
		}else{
					console.log(p_0010169_select_tipo_documento);
				document.getElementById(p_0010169_div_doc_iden_mensaje_error).innerHTML="Este campo es obligatorio";
				document.getElementById(p_0010169_div_doc_iden_mensaje_error).style.display="inline-block";
		}
		
}

function p_0010169_js_f_05_despliega_cuenta_extranjera(elemento,id_desplegar,id_ocultar)
{
	if(elemento.checked)
	{
		
		document.getElementById(id_desplegar).style.display="";
		document.getElementById(id_ocultar).style.display="none";
	}
	else
	{
		document.getElementById(id_ocultar).style.display="";
		document.getElementById(id_desplegar).style.display="none";
	}
	
	
}

function p_0010169_js_f_06_pintar_html()
{
	var p_0010169_html="";

	p_0010169_html+="<div class=\"p_0010011_menu_seccion_titulo\">Datos Bancarios</div>";
	p_0010169_html+="<form class=\"p_0010168_formulario_datos_bancarios\" name=\"p_0010168_formulario_account_info\" method=\"post\" onsubmit=\"event.preventDefault(); p_0010169_js_f_04_submit_obj_iban('p_0010167_checkbox_cuenta_internacional','p_0010167_input_cc_iban_ext_1','p_0010167_div_cc_iban_mensaje_error','p_0010167_div_account_info_global','p_0010167_input_cc_iban_1',document.getElementById('p_0010167_input_tipo_documento').value,'p_0010167_div_doc_iden_mensaje_error',document.getElementById('p_0010167_select_tipo_documento').value);\" novalidate>";
	p_0010169_html+="<div class=\" p_0010168_personal_info_div_iban\" align=\"left\">IBAN*</div>";
	p_0010169_html+="<hr/>";
	p_0010169_html+="<div  id=\"p_0010167_div_account_info_global\" class=\"p_0010168_div_margin_top\">";
	p_0010169_html+="<input placeholder=\"XX00\" type=\"text\" onKeyUp=\"p_0010169_js_f_01_cambia_input(this)\"; onChange=\"p_0010169_js_f_02_rellena_input(this)\" class=\"p_0010168_formulario_personal_info_iban p_0010168_formulario_personal_info_iban_letras\"  name=\"p_0001315_input_cc_iban_1\" id=\"p_0010167_input_cc_iban_1\" value=\"\" pattern=\"^[a-zA-Z]{2}\d{2}\">";
	p_0010169_html+="<input placeholder=\"0000\" type=\"text\" onKeyUp=\"p_0010169_js_f_01_cambia_input(this)\"; class=\"p_0010168_formulario_personal_info_iban\" name=\"p_0001315_input_cc_iban_2\" id=\"p_0010167_input_cc_iban_2\" maxlength=\"4\" value=\"\" pattern=\"[0-9]\d{3}\">";
	p_0010169_html+="<input placeholder=\"0000\" type=\"text\" onKeyUp=\"p_0010169_js_f_01_cambia_input(this)\"; class=\"p_0010168_formulario_personal_info_iban\" name=\"p_0001315_input_cc_iban_3\" id=\"p_0010167_input_cc_iban_3\" maxlength=\"4\" value=\"\" pattern=\"[0-9]\d{3}\">";
	p_0010169_html+="<input placeholder=\"0000\" type=\"text\" onKeyUp=\"p_0010169_js_f_01_cambia_input(this)\"; class=\"p_0010168_formulario_personal_info_iban\" name=\"p_0001315_input_cc_iban_4\" id=\"p_0010167_input_cc_iban_4\" maxlength=\"4\" value=\"\" pattern=\"[0-9]\d{3}\">";
	p_0010169_html+="<input placeholder=\"0000\" type=\"text\" onKeyUp=\"p_0010169_js_f_01_cambia_input(this)\"; class=\"p_0010168_formulario_personal_info_iban\" name=\"p_0001315_input_cc_iban_5\" id=\"p_0010167_input_cc_iban_5\" maxlength=\"4\" value=\"\" pattern=\"[0-9]\d{3}\">";
	p_0010169_html+="<input placeholder=\"0000\" type=\"text\" onKeyUp=\"p_0010169_js_f_01_cambia_input(this)\"; class=\"p_0010168_formulario_personal_info_iban\" name=\"p_0001315_input_cc_iban_6\" id=\"p_0010167_input_cc_iban_6\" maxlength=\"4\" value=\"\" pattern=\"[0-9]\d{3}\">";
	
	p_0010169_html+="</div>";
	p_0010169_html+="<div id=\"p_0010167_div_cc_iban_ext_1\"  class=\"p_0010168_div_margin_top\"  style=\"display:none;\">";
	p_0010169_html+="<input id=\"p_0010167_input_cc_iban_ext_1\" id=\"p_0010167_input_cc_iban_ext_1\" placeholder=\"Introduce tu cuenta extranjera\" type=\"text\" class=\"p_0010168_formulario_personal_info_iban p_0010168_formulario_personal_info_iban_ext\"  name=\"p_0001315_input_cc_iban_ext\" value=\"\"  required >";
	p_0010169_html+="</div>";
	p_0010169_html+="	<div id=\"p_0010167_div_cc_iban_mensaje_error\" style=\"display:none; height: 10px; border-radius: 0px 10px 10px; border: 1px solid red; font-size: 0.8em; padding: 5px 10px 10px; margin-top: 5px;\"></div>";

	p_0010169_html+="<div>";
	p_0010169_html+="<div class=\"p_0010168_div_textos_check_box\"> Cuenta Extranjera";
	p_0010169_html+="<input style=\"font-size:1.5em; height:10px; width:10px; border-top=1px;\" type=\"checkbox\" id=\"p_0010167_checkbox_cuenta_internacional\" onclick=\"p_0010169_js_f_05_despliega_cuenta_extranjera(this,'p_0010167_div_cc_iban_ext_1','p_0010167_div_account_info_global')\">";	

	p_0010169_html+="		</div>";
	p_0010169_html+="		</div>";
	p_0010169_html+="	<hr/>";

	p_0010169_html+=" <div class=\"p_0010168_personal_info_datos_titular\">Datos del titular:</div>";
	p_0010169_html+="<hr/>";
	p_0010169_html+="<!-- -->";
	p_0010169_html+="<div class=\"p_0010168_campos_datos_titular\">";
	p_0010169_html+="<div class=\"p_0010011_personal_info_global\">";
	p_0010169_html+="		<div class=\"p_0010011_personal_info_campo_01\">";
	p_0010169_html+="	Nombre*";
	p_0010169_html+="</div>";
	p_0010169_html+="<div class=\"p_0010011_personal_info_div_input_01\">";

	p_0010169_html+="<input class=\"p_0010011_personal_info_input_01\" value=\"\" name=\"nombre\" type=\"text\" placeholder=\"Nombre\" required>";
	p_0010169_html+="</div>";
	p_0010169_html+="</div>";
	p_0010169_html+="<!-- -->";
	p_0010169_html+="<div class=\"p_0010011_personal_info_global\">";
	p_0010169_html+="<div class=\"p_0010011_personal_info_campo_01\">";
	p_0010169_html+="	Apellido*";
	p_0010169_html+=" </div>";
	p_0010169_html+=" <div class=\"p_0010011_personal_info_div_input_01\">";
	p_0010169_html+="<input class=\"p_0010011_personal_info_input_01\" value=\"\" name=\"apellido1\" type=\"text\" placeholder=\"Primer Apellido\" required>";
	p_0010169_html+="</div>";
	p_0010169_html+=" </div>";
	p_0010169_html+=" <!-- -->";
	p_0010169_html+="<div class=\"p_0010011_personal_info_global\">";
	p_0010169_html+="<div class=\"p_0010011_personal_info_campo_01\">";
	p_0010169_html+="			Seg. Apellido*";
	p_0010169_html+="</div>";
	p_0010169_html+="<div class=\"p_0010011_personal_info_div_input_01\">";
	p_0010169_html+="<input class=\"p_0010011_personal_info_input_01\" value=\"\" name=\"apellido2\" type=\"text\" placeholder=\"Seg. Apellido\" required>";
	p_0010169_html+="</div>";
	p_0010169_html+=" </div>";
	p_0010169_html+=" <!-- -->";
	p_0010169_html+="<div class=\"p_0010011_personal_info_global\">";
	p_0010169_html+="		<div class=\"p_0010011_personal_info_global p_0010011_personal_info_campo_01\" >";
	p_0010169_html+="<select id=\"p_0010167_select_tipo_documento\" class=\"p_0010011_alineacion\" name=\"DI\">";
	p_0010169_html+="<option value=\"NIF\">NIF</option>";
	p_0010169_html+="<option value=\"NIE\">NIE</option>";
	p_0010169_html+="<option value=\"CIF\">CIF</option>";
	p_0010169_html+="<option value=\"Pasaporte\">Pasaporte</option>";
	p_0010169_html+="</select>";
	p_0010169_html+="</div>";
		p_0010169_html+="<div class=\"p_0010011_personal_info_div_input_01\">";
	p_0010169_html+="<input id=\"p_0010167_input_tipo_documento\" class=\"p_0010011_personal_info_input_01\" value=\"\" name=\"DI\" type=\"text\" placeholder=\"NIF/CIF/NIE/Pasaporte\" pattern=\"^(X(-|\.)?0?\d{7}(-|\.)?[A-Z]|[A-Z](-|\.)?\d{7}(-|\.)?[0-9A-Z]|\d{8}(-|\.)?[A-Z])$\" required>";
	p_0010169_html+="</div>";
	p_0010169_html+="</div>";
	p_0010169_html+="<div id=\"p_0010167_div_doc_iden_mensaje_error\" style=\"display:none; height: 20px; border-radius: 0px 10px 10px; border: 1px solid red; font-size: 0.8em; padding: 5px 10px 10px; margin-top: -7px; margin-left: 128px;\"></div>";
	p_0010169_html+="</div>";
	p_0010169_html+="	<!--  PIE DE PAGINA -->";
	p_0010169_html+="<div class=\"p_0010168_div_textos_check_box\">";
	p_0010169_html+="<input style=\"font-size:1.5em; height:1em; width:1em; float:left;\" type=\"checkbox\" id=\"p_0010167_checkbox_aviso_de_baja_aceptado_id\">";
	p_0010169_html+="Acepto las condiciones <a style=\"text-decoration:underline; color:#000;\" onclick=\"over_all('');document.getElementById('p_00990_over_all_contenedor').innerHTML=document.getElementById( TEXTOS[95].text.replace(\'https://app.oxbridge.es/app/\','') ).innerHTML;\">AQUÍ</a> descritas y la posibilidad de darme de baja en cualquier momento con un pre aviso de 4 semanas.";
	p_0010169_html+="</div>";
	p_0010169_html+="	<!--boton -->";
	p_0010169_html+="	<div class=\"p_0010011_personal_info_input_submit_01\">";
	p_0010169_html+="<input style=\"font-size:1em font-size: 1em; margin-top: 20px; margin-bottom: 20px;\" id=\"p_00982_boton_guardar_matricula_2\" value=\"GUARDAR\" type=\"submit\">";
	p_0010169_html+="</div>";
	
	
	p_0010169_html+="<div class=\"p_0010168_campos_datos_titular\">";
	p_0010169_html+="Para poder guardar debes rellenar todos los datos obligatorios *. Gracias.";
		p_0010169_html+="</div>";
		p_0010169_html+="</form>";
	


	return p_0010169_html;
	
	
}



