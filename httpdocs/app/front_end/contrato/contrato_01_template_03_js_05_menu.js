/*
Page ID:  p_0010163
File: /front_end/contrato/contrato_01_template_03_js_05_menu.js
*/
var p_0010163_js_global_evento_esperando_online=false; //variable para controlar el navigator offline/online
var p_0010163_js_global_evento_pestana_ultima=document.getElementById("p_0010161_div_pagos"); //variable para controlar el navigator offline/online

function p_0010163_js_f_01_cambia_pestana(p_0010163_js_id,p_0010163_js_s,p_0010163_js_url) //funcion que me permite cambiar de pestaña
{
	p_0010163_js_global_evento_pestana_ultima=document.getElementById(p_0010163_js_id);
	if(document.getElementById('p_0010161_img_pestana_unica').style.opacity==''){p_0010163_js_f_03_pestana_unica(0)}
	
	if(typeof(p_0010163_js_s)=='undefined'){p_0010163_js_s=0;}
	//console.info(id);
	var p_0010163_js_id_sin_modificar_contenido=p_0010163_js_id;
	var p_0010163_js_ocultar=false;
	if(document.getElementById(p_0010163_js_id_sin_modificar_contenido).className!="p_0010162_css_estilo_pestanas p_0010162_css_estilo_pestanas_seleccionada")
	{
		document.getElementById(p_0010163_js_id_sin_modificar_contenido).className="p_0010162_css_estilo_pestanas p_0010162_css_estilo_pestanas_seleccionada";
	}
	else
	{
		if(window.navigator.onLine && p_0010163_js_s!=1)
		{
			document.getElementById(p_0010163_js_id_sin_modificar_contenido).className="p_0010162_css_estilo_pestanas";
			p_0010163_js_ocultar=true;
		}
		
	}
	
	
	p_0010163_js_id=p_0010163_js_id.slice(14,p_0010163_js_id.length);
	
	
	if(contratos[p_0010163_js_id].cargado && !p_0010163_js_ocultar)
	{
		if(document.getElementById('p_0010161_img_pestana_recarga').style.opacity=='')
		{
			//p_0010157_js_f_01_cargando("p_0010155_div_gif_cargando_datos","5%");
			//document.getElementById("p_0010155_div_gif_cargando_datos").style.display='';
			p_0010163_js_f_04_consulta_ajax('p_0010155_div_'+p_0010163_js_id,p_0010163_js_id,p_0010163_js_url);
		}
		else
		{
			document.getElementById('p_0010155_div_'+p_0010163_js_id).style.display='';
		}
	}
	else
	{
		if(!contratos[p_0010163_js_id].cargando && p_0010163_js_ocultar)
		{
			document.getElementById('p_0010155_div_'+p_0010163_js_id).style.display='none';
		}
		else
		{
			contratos[p_0010163_js_id].cargando=true;
			if(!window.navigator.onLine && !p_0010163_js_ocultar)
			{
				if(!p_0010163_js_global_evento_esperando_online)
				{
					//console.info("no hay conexion a internet");
					document.getElementById('p_0010155_div_mensaje_no_hay_internet').innerHTML='Compruebe que tiene acceso a Internet';
					document.getElementById('p_0010155_div_mensaje_no_hay_internet').style.display='';
					p_0010163_js_global_evento_esperando_online=window.addEventListener('online',function()
					{
						window.removeEventListener(p_0010163_js_global_evento_esperando_online);
						p_0010163_js_global_evento_esperando_online=false;
						document.getElementById('p_0010155_div_mensaje_no_hay_internet').innerHTML='';
						document.getElementById('p_0010155_div_mensaje_no_hay_internet').style.display='none';
						p_0010163_js_f_01_cambia_pestana(p_0010163_js_id_sin_modificar_contenido,1);
					})
				}
			}
			else
			{
				//p_0010157_js_f_01_cargando("p_0010155_div_gif_cargando_datos","5%");
				//document.getElementById("p_0010155_div_gif_cargando_datos").style.display='';
				p_0010163_js_f_04_consulta_ajax('p_0010155_div_'+p_0010163_js_id,p_0010163_js_id,p_0010163_js_url);
			}
			
		}
		
	}
}


function p_0010163_js_f_02_cambiar_tamano_div_en_funcion_pestanas_abiertas() //horizontal
{
		var p_0010163_contador=0;
		var p_0010163_ids_display_inline=[];
		
		for(i in document.getElementById('p_0010155_div_contenedor_listas_contenido').childNodes)
		{
			var hijos=document.getElementById('p_0010155_div_contenedor_listas_contenido').childNodes[i];
			if(hijos.nodeType=="1")
			{
				if(document.getElementById(hijos.id).style.display=='')
				{
					p_0010163_contador++;
					p_0010163_ids_display_inline.push(hijos.id);
				}
			}
		}
		
		if(p_0010163_contador>=2)
		{
			var p_0010163_valor_ancho=100/parseInt(p_0010163_contador);
			for(i in p_0010163_ids_display_inline)
			{
				document.getElementById(p_0010163_ids_display_inline[i]).style.width=p_0010163_valor_ancho+"%";
				document.getElementById(p_0010163_ids_display_inline[i]).style.height="";
			}
		}
		else if(p_0010163_contador==1)
		{
				document.getElementById(p_0010163_ids_display_inline[0]).style.width="100%";
				document.getElementById(p_0010163_ids_display_inline[0]).style.height="";
		}
}

function p_0010163_js_f_03_pestana_unica(p_0010163_js_evento)
{
	//OCULTAMOS LOS BACKGROUND DE LAS LISTAS DE LAS PESTAÑAS
	for(i in document.getElementsByClassName('p_0010162_css_estilo_pestanas'))
	{
		document.getElementsByClassName('p_0010162_css_estilo_pestanas')[i].className="p_0010162_css_estilo_pestanas";
	}
	
	//OCULTAMOS EL CONTENIDO DE TODOS LOS DIVS MENOS EL QUE QUEREMOS VER CUANDO ESTA MARCADA LA OPCION PESTAÑA UNICA
	for(i in document.getElementById('p_0010155_div_contenedor_listas_contenido').childNodes)
	{
		var hijos=document.getElementById('p_0010155_div_contenedor_listas_contenido').childNodes[i];
		if(hijos.nodeType=="1" && hijos.id!=p_0010163_js_global_evento_pestana_ultima.id)
		{
			document.getElementById(hijos.id).style.display='none';
		}
	}
	
	if(p_0010163_js_evento)
	{
		p_0010163_js_global_evento_pestana_ultima.className="p_0010162_css_estilo_pestanas p_0010162_css_estilo_pestanas_seleccionada";
	}
}

function p_0010163_js_f_04_consulta_ajax(p_0010163_js_elemento,p_0010163_js_id,p_0010163_js_url)
{
	if(document.getElementById('p_0010161_img_pestana_recarga').style.opacity=='')document.getElementById(p_0010163_js_elemento).innerHTML='';
	ajax_load_page(
		p_0010163_js_url,
		p_0010163_js_elemento,
		"",
		true,
		function(){p_0010163_js_f_07_finalizador_consulta(p_0010163_js_id);}
	);
}

function p_0010163_js_f_05_mostrar_ocultar_lista_pestanas_pantalla_pequena()
{
	if(document.getElementById('p_0010161_div_contenedor_pestanas').style.display=='block')
	{
		document.getElementById('p_0010161_div_contenedor_pestanas').style.display='none';
	}
	else
	{
		document.getElementById('p_0010161_div_contenedor_pestanas').style.display='block';
	}
}

function p_0010163_js_f_06_cambiar_tamano_div_en_funcion_pestanas_abiertas_vertical() //vertical
{
	var p_0010163_array_display_vertical=[];
	var p_0010163_contador_pestanas_display_inline=0;
	
	for(i in document.getElementById('p_0010155_div_contenedor_listas_contenido').childNodes)
	{
		var hijos = document.getElementById('p_0010155_div_contenedor_listas_contenido').childNodes[i];
		if(hijos.nodeType=="1")
		{
			if(document.getElementById(hijos.id).style.display=="")
			{
				p_0010163_array_display_vertical.push(hijos.id);
				p_0010163_contador_pestanas_display_inline++;
			}
		}
	}
	if(p_0010163_contador_pestanas_display_inline>=2)
	{
		var p_0010163_resultado_porcentaje_height=100/parseInt(p_0010163_contador_pestanas_display_inline);
		for(s in p_0010163_array_display_vertical)
		{
			document.getElementById(p_0010163_array_display_vertical[s]).style.width=100+"%";
			document.getElementById(p_0010163_array_display_vertical[s]).style.height=p_0010163_resultado_porcentaje_height+"%";
		}
		
	}
	else if(p_0010163_contador_pestanas_display_inline==1)
	{
		document.getElementById(p_0010163_array_display_vertical[0]).style.width=100+"%";
		document.getElementById(p_0010163_array_display_vertical[0]).style.height=100+"%";
	}
}

/* function test(event){
	var ocultar=true;
	if(typeof event!='undefined'){
		for(i in event.path)
		{
			if(typeof event.path[i].id != "undefined")
				if(event.path[i].id=="p_0010161_contenedor_pestanas"||event.path[i].id=='p_0010161_oculta_muestra_pestanas_pantalla_pequena')
					ocultar=false;
		}
		if(ocultar)
			document.getElementById("p_0010161_contenedor_pestanas").style.display="none";
	}
} */

function p_0010163_js_f_07_finalizador_consulta(p_0010163_js_id)
{
	contratos[p_0010163_js_id].cargado=true;
	contratos[p_0010163_js_id].cargando=false;
	if(document.getElementById('p_0010161_img_pestana_recarga').style.opacity!='')
		document.getElementById('p_0010170_div_cargando_'+p_0010163_js_id).style.display='none';
	
	document.getElementById('p_0010155_div_'+p_0010163_js_id).style.display='';
}

function p_0010163_js_f_08_cambiar_onclick_touch_start() //funcion que detecta si es un mobil y cambia el Onclick por el tocuhstart y viceversa
{ 
	var device = navigator.userAgent

	if (device.match(/Iphone/i)|| device.match(/Ipod/i)|| device.match(/Android/i)|| device.match(/J2ME/i)|| device.match(/BlackBerry/i)|| device.match(/iPhone|iPad|iPod/i)|| device.match(/Opera Mini/i)|| device.match(/IEMobile/i)|| device.match(/Mobile/i)|| device.match(/Windows Phone/i)|| device.match(/windows mobile/i)|| device.match(/windows ce/i)|| device.match(/webOS/i)|| device.match(/palm/i)|| device.match(/bada/i)|| device.match(/series60/i)|| device.match(/nokia/i)|| device.match(/symbian/i)|| device.match(/HTC/i))
	{ 
		if(document.getElementById('p_0010161_div_oculta_muestra_pestanas_pantalla_pequena').getAttribute('onclick'))
		{
			document.getElementById('p_0010161_div_oculta_muestra_pestanas_pantalla_pequena').removeAttribute('onclick');
		}
		document.getElementById('p_0010161_div_oculta_muestra_pestanas_pantalla_pequena').setAttribute('ontouchstart',"p_0010163_js_f_05_mostrar_ocultar_lista_pestanas_pantalla_pequena();");
	}
	else
	{
		//alert("pc");
		if(document.getElementById('p_0010161_div_oculta_muestra_pestanas_pantalla_pequena').getAttribute('ontouchstart'))
		{
			document.getElementById('p_0010161_div_oculta_muestra_pestanas_pantalla_pequena').removeAttribute('ontouchstart');
		}
		document.getElementById('p_0010161_div_oculta_muestra_pestanas_pantalla_pequena').setAttribute('onclick',"p_0010163_js_f_05_mostrar_ocultar_lista_pestanas_pantalla_pequena();");
	}
}

function p_0010163_js_f_08_obtener_pagina_a_llamar(p_0010163_js_id)
{
	p_0010163_js_case=p_0010163_js_id.slice(14,p_0010163_js_id.length);
	
	if(document.getElementById('p_0010161_img_pestana_recarga').style.opacity=='')
	{
		contratos[p_0010163_js_case].cargado=false;
	}
	
	if(!contratos[p_0010163_js_case].cargado)
	{
		var p_0010163_js_div_cargando=document.createElement("div");
		p_0010163_js_div_cargando.id='p_0010170_div_cargando_'+p_0010163_js_case;
		//p_0010163_js_div_cargando.innerHTML="ESTA CARGANDO LOS DATOS";
		p_0010163_js_div_cargando.display='';
		document.getElementById('p_0010155_div_'+p_0010163_js_case).appendChild(p_0010163_js_div_cargando);
		p_0010157_js_f_01_cargando(p_0010163_js_div_cargando.id,"10%");
		document.getElementById('p_0010155_div_'+p_0010163_js_case).style.display='';
	}
	
	switch(p_0010163_js_case)
	{
		case 'datos': console.info("En desarrollo datos!! :)");
			break;
		case 'observaciones':
			var p_0010163_js_url="http://app.oxbridge.es/app/dev/migue/front_end/contrato/contrato_08_observaciones_01_html_01_template.php";
			p_0010163_js_f_01_cambia_pestana(p_0010163_js_id,0,p_0010163_js_url);
			break;
		case 'pagadores': 
			var p_0010163_js_url="http://app.oxbridge.es/app/dev/migue/front_end/contrato/contrato_02_datos_generales_01_html_01_template.php";
			p_0010163_js_f_01_cambia_pestana(p_0010163_js_id,0,p_0010163_js_url);
			break;
		case 'alumnos':  console.info("En desarrollo alumnos!! :)");
			break;
		case 'grupos':  console.info("En desarrollo grupos!! :)");
			break;
		case 'recibos':  console.info("En desarrollo recibos/facturas!! :)");
			break;
		case 'alertas':  console.info("En desarrollo alertas!! :)");
			break;
	}
	if(document.getElementById('p_0010161_img_posicion_pestana').style.opacity=='')
	{
		p_0010163_js_f_06_cambiar_tamano_div_en_funcion_pestanas_abiertas_vertical();
	}
	else
	{
		p_0010163_js_f_02_cambiar_tamano_div_en_funcion_pestanas_abiertas();
	}
	
}


/* document.getElementById('p_0010161_input_pestana_unica').addEventListener("change",function(){p_0010163_js_f_03_pestana_unica(1);});
document.getElementById('p_0010161_input_mostrar_pestanas_vertial').addEventListener("change",function(){p_0010163_js_f_06_cambiar_tamano_div_en_funcion_pestanas_abiertas_vertical();}); */
document.getElementById('p_0010161_img_pestana_unica').addEventListener("click",
function(){
	if(document.getElementById(this.id).style.opacity)
	{
		p_0010163_js_f_03_pestana_unica(1);
		document.getElementById(this.id).style.opacity='';
	}
	else
	{
		document.getElementById(this.id).style.opacity=0.4;
	}
});

document.getElementById('p_0010161_img_posicion_pestana').addEventListener("click",function()
{
	if(document.getElementById(this.id).style.opacity)
	{
		document.getElementById(this.id).style.opacity='';
		p_0010163_js_f_06_cambiar_tamano_div_en_funcion_pestanas_abiertas_vertical();
	}
	else
	{
		p_0010163_js_f_02_cambiar_tamano_div_en_funcion_pestanas_abiertas();
		document.getElementById(this.id).style.opacity=0.4;
	}
	
});

document.getElementById('p_0010161_img_pestana_recarga').addEventListener("click",function()
{
	if(document.getElementById(this.id).style.opacity)
	{
		document.getElementById(this.id).style.opacity='';
	}
	else
	{
		document.getElementById(this.id).style.opacity=0.4;
	}
	
});


window.addEventListener('resize',function(){p_0010163_js_f_08_cambiar_onclick_touch_start();});