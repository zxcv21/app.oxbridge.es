/*
Page ID: p_0010172
File: /front_end/contrato/contrato_02_datos_generales_03_js_01_template.js
*/
var p_0010172_global_evento_esperando_online=false;


function p_0010172_js_f_01_anadir_barra_automaticamente(p_0010172_js_id,event) //funcion añade barra al escribir p_0010172_js_fecha
{
	if(event.keyCode!=8)
	if(p_0010172_js_id=='p_0010170_input_fecha_cuota')
	{
		if(document.getElementById(p_0010172_js_id).value.length==2)
		{
			document.getElementById(p_0010172_js_id).value+="/";
		}
	}
	else
	{
		if(document.getElementById(p_0010172_js_id).value.length==2)
		{
			document.getElementById(p_0010172_js_id).value+="/";
		}
		else if(document.getElementById(p_0010172_js_id).value.length==5)
		{
			document.getElementById(p_0010172_js_id).value+="/";
		}
	}
}

function p_0010172_js_f_02_rellenar_option_frecuencia() //funcion rellena select frecuencia
{
	var p_0010172_js_select;
	p_0010172_js_select="<select name='p_0010170_select_frecuencia' id='p_0010170_select_id_frecuencia'>";
	for(i in contratos.frecuencia)
	{
		p_0010172_js_select+="<option>"+contratos.frecuencia[i]+"</option>";
	}
	p_0010172_js_select+="</select>";
	document.getElementById('p_0010170_div_contenedor_select_frecuencia').innerHTML=p_0010172_js_select;
}

function p_0010172_js_f_03_rellenar_option_CAE() //funcion rellena select CAE
{
	var p_0010172_js_select;
	p_0010172_js_select="<select name='p_0010170_select_cae' id='p_0010170_select_id_cae'>";
	for(i in contratos.frecuencia)
	{
		p_0010172_js_select+="<option>"+contratos.cae[i]+"</option>";
	}
	p_0010172_js_select+="</select>";
	document.getElementById('p_0010170_div_contenedor_select_cae').innerHTML=p_0010172_js_select;
}

function p_0010172_js_f_04_rellenar_option_empresa_factura() //funcion rellena select empresa_factura
{
	var p_0010172_js_select;
	p_0010172_js_select="<select name='p_0010170_select_empresa' id='p_0010170_select_id_empresa_factura'>";
	for(i in contratos.frecuencia)
	{
		p_0010172_js_select+="<option>"+contratos.empresa[i]+"</option>";
	}
	p_0010172_js_select+="</select>";
	document.getElementById('p_0010170_div_contenedor_select_factura').innerHTML=p_0010172_js_select;
}

function p_0010172_js_f_05_anadir_zero_decimal(p_0010172_js_id,event) //funcion añade barra al escribir p_0010172_js_fecha
{
	if(event.keyCode!=8)
	p_0010172_js_posicion_coma=document.getElementById(p_0010172_js_id).value.lastIndexOf(',');
	if(p_0010172_js_posicion_coma+2==document.getElementById(p_0010172_js_id).value.length)
	{
		document.getElementById(p_0010172_js_id).value+="0";
	}
}

function p_0010172_js_f_06_comprueba_estado_inputs_fechas()
{
	var a=document.getElementById("p_0010170_input_fecha_inicio");
	var b=document.getElementById("p_0010170_input_fecha_fin");
	var c=document.getElementById("p_0010170_input_fecha_primer_recibo");
	var d=document.getElementById("p_0010170_input_fecha_cuota");

    for(i in document.getElementsByClassName("p_0010171_css_input_invalid"))
       document.getElementsByClassName("p_0010171_css_input_invalid")[i].className="p_0010171_css_input";
	
	if( a.value==""&&(b.value!=""||c.value!=""||c.value=="") )
    {
		p_0010172_js_f_07_error(a.id);
    }
	else if(c.value!=""&&b.value!=""&&(p_0010172_js_f_09_return_fecha(c.value,c.id)<p_0010172_js_f_09_return_fecha(a.value,a.id)||p_0010172_js_f_09_return_fecha(c.value,c.id)>p_0010172_js_f_09_return_fecha(b.value,b.id)) )
	{
		p_0010172_js_f_07_error(c.id);
	}
	else if(b.value!=""&&(p_0010172_js_f_09_return_fecha(a.value,a.id)>p_0010172_js_f_09_return_fecha(b.value,b.id)) )
	{
		p_0010172_js_f_07_error(b.id);
	}
	else if(c.value!=""&&(p_0010172_js_f_09_return_fecha(a.value,a.id)>p_0010172_js_f_09_return_fecha(c.value,c.id)) )
	{
		p_0010172_js_f_07_error(c.id);
	}
    else if(d.value!=""&&c.value=="")
	{
		p_0010172_js_f_07_error(c.id);
	}
	else if( (d.value!=""&&c.value!="") && (p_0010172_js_f_09_return_fecha(c.value,c.id)>p_0010172_js_f_09_return_fecha(d.value,d.id)) )
	{
		p_0010172_js_f_07_error(d.id);
	}
	else if((a.value.length==10)&&(p_0010172_js_f_10_comprueba_fecha_inicio_mayor_o_igual_fecha_actual(a.value,a.id)))
	{
		if(!p_0010172_js_f_08_comprueba_existe_fecha(a.value,a.id))
		p_0010172_js_f_07_error(a.id);
	}
	
}

function p_0010172_js_f_07_error(id)
{
	document.getElementById('p_0010170_img_imagen_guardado').src='https://app.oxbridge.es/app/dev/migue/front_end/contrato/imagenes/guardar_desactivado.png';
	document.getElementById(id).className="p_0010171_css_input p_0010171_css_input_invalid";
}

/* function p_0010172_js_hay_numeros(string) //funcion me permite saber si dentro de una cadena hay numeros
{
	var p_0010172_js_solo_numeros=true;
	for(i in string)
	{
		if(string.charCodeAt(i)<48 || string.charCodeAt(i)>57)
		{
			p_0010172_js_solo_numeros=false;
		}
	}
	return p_0010172_js_solo_numeros;
}
 */
function p_0010172_js_f_08_comprueba_existe_fecha(p_0010172_js_valor_value,p_0010172_js_valor_id) //comprueba una fecha
{
	var p_0010172_js_existe_fecha=false;

	var p_0010172_js_fecha_sin_barra=p_0010172_js_valor_value.split("/"); //dividimos DD-MM-YYYY que nos llega de  la fecha introducida por el usuario.
	
	p_0010172_js_fecha_para_contstuir_new_date_parse=p_0010172_js_fecha_sin_barra[2]+","+p_0010172_js_fecha_sin_barra[1]*1+","+p_0010172_js_fecha_sin_barra[0]*1; //esta es la fecha del usuario que la construimos con el new Date().parse
	
	p_0010172_js_fecha_new_date=new Date(Date.parse(p_0010172_js_fecha_para_contstuir_new_date_parse));
	
	var p_0010172_js_anio=p_0010172_js_fecha_new_date.getFullYear();
	if(p_0010172_js_anio.toString().length==4)
	if(p_0010172_js_fecha_para_contstuir_new_date_parse==p_0010172_js_fecha_new_date.getFullYear()+","+(p_0010172_js_fecha_new_date.getMonth()+1)+","+p_0010172_js_fecha_new_date.getDate())
	{
		p_0010172_js_existe_fecha=true;
	}
	
	if(!p_0010172_js_existe_fecha)
	{
		document.getElementById(p_0010172_js_valor_id).className="p_0010171_css_input p_0010171_css_input_invalid";
	}
	else
	{
		document.getElementById('p_0010170_img_imagen_guardado').src='https://app.oxbridge.es/app/dev/migue/front_end/contrato/imagenes/guardar.png';
		document.getElementById('p_0010170_img_imagen_guardado').setAttribute('onclick','p_0010172_js_f_11_enviar_formulario_pagadores()');
		document.getElementById(p_0010172_js_valor_id).className="p_0010171_css_input";
	}

	return p_0010172_js_existe_fecha;
}

function p_0010172_js_f_09_return_fecha(p_0010172_js_fecha,p_0010172_js_id)
{
	var p_0010172_js_fecha_c=true;
	if(p_0010172_js_fecha!='')
	
	if(p_0010172_js_id!="p_0010170_input_fecha_cuota")
		p_0010172_js_fecha_c=p_0010172_js_f_08_comprueba_existe_fecha(p_0010172_js_fecha,p_0010172_js_id);
	
	if(p_0010172_js_fecha_c)
	{
		p_0010172_js_fecha=p_0010172_js_fecha.split("/");
		if(p_0010172_js_fecha.length<3)p_0010172_js_fecha.unshift("31");
		p_0010172_js_fecha=p_0010172_js_fecha[2]+p_0010172_js_fecha[1]+p_0010172_js_fecha[0];
		return parseInt(p_0010172_js_fecha);
	}
	else
	{
		return NaN;
	}
}

function p_0010172_js_f_10_mostrar_boton_guardar_deshabilitado(p_0010172_js_valor_value,p_0010172_js_valor_id)
{
	if(p_0010172_js_valor_id=='p_0010170_input_fecha_cuota')
	{
		if(p_0010172_js_valor_value.length==0)
			p_0010172_js_f_06_comprueba_estado_inputs_fechas();	
		else if(p_0010172_js_valor_value.length<7)
			document.getElementById('p_0010170_img_imagen_guardado').src='https://app.oxbridge.es/app/dev/migue/front_end/contrato/imagenes/guardar_desactivado.png';
		
	}
	else
	
	if(p_0010172_js_valor_value.length==0)
		p_0010172_js_f_06_comprueba_estado_inputs_fechas();
	else if(p_0010172_js_valor_value.length<10)
		document.getElementById('p_0010170_img_imagen_guardado').src='https://app.oxbridge.es/app/dev/migue/front_end/contrato/imagenes/guardar_desactivado.png';
}

function p_0010172_js_f_10_comprueba_fecha_inicio_mayor_o_igual_fecha_actual(p_0010172_js_valor_value,p_0010172_js_id)
{
	var p_0010172_js_return=false;
	var p_0010172_js_fecha_actual = new Date(); //obtenemos la fecha actual del sistema para despues comprobar que la fecha de inicio de contrato no sea tan antigua.
	
	p_0010172_js_mes_actual=(p_0010172_js_fecha_actual.getMonth()+1) //cogemos el mes actual
	p_0010172_js_un_mes_anterior=p_0010172_js_mes_actual-1; //Le restamos un mes para formar una fecha de un mes anterior a la actual.
	
	if(p_0010172_js_un_mes_anterior>=1 || p_0010172_js_un_mes_anterior<=9){p_0010172_js_un_mes_anterior="0"+p_0010172_js_un_mes_anterior;} //comprobamos si el mes es 1 0 9 le añadimos un 0 para despues poder comparar

	p_0010172_js_fecha_un_mes_anterior=p_0010172_js_fecha_actual.getFullYear()+""+p_0010172_js_un_mes_anterior+""+p_0010172_js_fecha_actual.getDate() //contruimos la fecha "String" con el mes anterior al actual
	
	var p_0010172_js_fecha_usuario = p_0010172_js_valor_value.split("/");
	var p_0010172_js_fecha_construida=p_0010172_js_fecha_usuario[2]+""+p_0010172_js_fecha_usuario[1]+""+p_0010172_js_fecha_usuario[0];
	
	if(parseInt(p_0010172_js_fecha_construida)>=parseInt(p_0010172_js_fecha_un_mes_anterior))
	{
		p_0010172_js_return=true;
	}
	else
	{
		p_0010172_js_f_07_error(p_0010172_js_id);
	}
	return p_0010172_js_return;
}


function p_0010172_js_f_11_enviar_formulario_pagadores()
{
	if(navigator.onLine)
	{
		document.getElementById('p_0010170_div_respuuesta_ajax').innerHTML='';
		ajax_load_page
		(
			"https://app.oxbridge.es/app/dev/migue/front_end/contrato/update_contrato_02_datos_generales.php",
			"p_0010170_div_respuuesta_ajax",
			"p_0010172_f_alta="+document.getElementById('p_0010170_input_fecha_inicio').value+"&"+
			"p_0010172_f_baja="+document.getElementById('p_0010170_input_fecha_fin').value+"&"+
			"p_0010172_frecuencia="+document.getElementById('p_0010170_select_id_frecuencia').value+"&"+
			//"p_0010172_titular="+,
			"p_0010172_cae="+document.getElementById('p_0010170_select_id_cae').value+"&"+
			"p_0010172_empresa_factura="+document.getElementById('p_0010170_select_id_empresa_factura').value+"&"+
			"p_0010172_matricula="+document.getElementById('p_0010170_input_matricula').value+"&"+
			"p_0010172_f_primer_recibo="+document.getElementById('p_0010170_input_fecha_primer_recibo').value+"&"+
			"p_0010172_importe_primer_recibo="+document.getElementById('p_0010170_input_importe_primer_recibo').value+"&"+
			"p_0010172_f_cuota="+document.getElementById('p_0010170_input_fecha_cuota').value+"&"+
			"p_0010172_importe_cuota="+document.getElementById('p_0010170_input_importe_cuota').value,
			true,
			p_0010172_js_f_12_finalizador_ajax
		)
	}
	else
	{
		if(!p_0010172_global_evento_esperando_online)
		{
				p_0010172_global_evento_esperando_online=window.addEventListener('online',function()
				{
					window.removeEventListener(p_0010172_global_evento_esperando_online);
					p_0010172_global_evento_esperando_online=false;
					p_0010172_js_f_11_enviar_formulario_pagadores();
				});
		}
	}
}

function p_0010172_js_f_12_finalizador_ajax()
{
	console.info("Enviado");
}

p_0010172_js_f_02_rellenar_option_frecuencia();
p_0010172_js_f_03_rellenar_option_CAE();
p_0010172_js_f_04_rellenar_option_empresa_factura();
