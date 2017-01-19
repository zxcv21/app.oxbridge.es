/*
Page ID: p_0010224
File: /front_end/students/students_02_template_03_js_03_menu.js
*/

var p_0010224_js_global_evento_esperando_online=false;
var p_0010224_js_global_separacion=100;
var p_0010224_js_global_cseparacion=10;

function p_0010224_js_f_01_cargar_contenido_pagina(p_0010224_js_id,p_0010224_js_className,p_0010224_js_url)
{
	/**Esta seccion es para llamar a la funcion set clicado cuando es PC y sino solo hacer el efecto del Top.**/
	var p_0010224_js_auxiliar_texto_menu=p_0010224_js_id.slice(14,p_0010224_js_id.length);
	if(p_0010224_js_className=='p_0010220_css_img_menus')
		p_0010224_js_f_08_set_clicado(window['posicion_menu']['posicion_'+p_0010224_js_auxiliar_texto_menu]);
	else
		p_0010224_js_f_09_set_clicado_mobil(p_0010224_js_id);
	p_0010224_js_f_07_mover_menu_onmouseout();
	/********************************************************************************************************************/
	
	p_0010224_js_f_10_ocultar_todos_divs_donde_carga_contenido_seccion(); //llamamos a la funcion que nos oculta el resto de divs de p_0010214_divs_donde_carga_contenido_cada_seccion
	p_0010224_js_seccion=p_0010224_js_id.slice(14,p_0010224_js_id.length);
	secciones[p_0010224_js_seccion].cargado=false;
	
	/*******Creamos el div cargando cada vez que llamamos a una seccion para que lo muestre mientras carga la página*****/
	var p_0010224_js_div_cargando=document.createElement("div");
	p_0010224_js_div_cargando.id='p_0010214_div_cargando_'+p_0010224_js_seccion;
	//p_0010224_js_div_cargando.innerHTML="ESTA CARGANDO LOS DATOS";
	p_0010224_js_div_cargando.display='';
	document.getElementById('p_0010214_div_contenido_pagina_'+p_0010224_js_seccion).appendChild(p_0010224_js_div_cargando);
	p_0010222_js_f_01_cargando(p_0010224_js_div_cargando.id,"10%");
	document.getElementById('p_0010214_div_contenido_pagina_'+p_0010224_js_seccion).style.display='';
	/********************************************************************************************************************/
	
	switch(p_0010224_js_seccion)
	{
		case 'menu_horario' :
			p_0010224_js_f_04_paso_intermedio_consulta_ajax(p_0010224_js_id,'p_0010214_div_contenido_pagina_menu_horario',p_0010224_js_url);	
			break;
		case 'menu_clases' : 
			//p_0010224_js_f_04_paso_intermedio_consulta_ajax(p_0010224_js_id,'p_0010214_div_contenido_pagina_menu_clases',p_0010224_js_url);	
			break;
		case 'menu_clase_web' : 
			//p_0010224_js_f_04_paso_intermedio_consulta_ajax(p_0010224_js_id,'p_0010214_div_contenido_pagina_menu_clase_web',p_0010224_js_url);	
			break;
		case 'menu_personal' : 
			p_0010224_js_f_04_paso_intermedio_consulta_ajax(p_0010224_js_id,'p_0010214_div_contenido_pagina_menu_personal_libreria',p_0010224_js_url);
			break;
		case 'menu_smile' : 
			p_0010224_js_f_04_paso_intermedio_consulta_ajax(p_0010224_js_id,'p_0010214_div_contenido_pagina_menu_smile',p_0010224_js_url);	
			break;
	}
}

function p_0010224_js_f_02_consulta_ajax(p_0010224_js_seccion,p_0010224_js_elemento,p_0010224_js_url)
{
	console.info(secciones[p_0010224_js_seccion]);
	document.getElementById(p_0010224_js_elemento).innerHTML='';
	ajax_load_page(
		p_0010224_js_url,
		p_0010224_js_elemento,
		"",
		true,
		function(){p_0010224_js_f_03_finalizador_consulta(p_0010224_js_seccion);}
	);
}

function p_0010224_js_f_03_finalizador_consulta(p_0010224_js_seccion)
{
	secciones[p_0010224_js_seccion].cargado=true;
	secciones[p_0010224_js_seccion].cargando=false;
	secciones[p_0010224_js_seccion].finalizador.function();
}

function p_0010224_js_f_04_paso_intermedio_consulta_ajax(p_0010224_js_id,p_0010224_js_div_donde_cargara_la_pagina,p_0010224_js_url)
{
	p_0010224_js_seccion=p_0010224_js_id.slice(14,p_0010224_js_id.length);
	
	if(window.navigator.onLine && !secciones[p_0010224_js_seccion].cargado)
	{
		secciones[p_0010224_js_seccion].cargando=true;
		p_0010224_js_f_02_consulta_ajax(p_0010224_js_seccion,p_0010224_js_div_donde_cargara_la_pagina,p_0010224_js_url);	
	}
	else
	{
		if(!p_0010224_js_global_evento_esperando_online)
		{
			console.info("no hay conexion a internet");
			p_0010224_js_global_evento_esperando_online=window.addEventListener('online',function()
			{
				window.removeEventListener('online',p_0010224_js_global_evento_esperando_online);
				p_0010224_js_global_evento_esperando_online=false;
				p_0010224_js_f_04_paso_intermedio_consulta_ajax(p_0010224_js_id,p_0010224_js_div_donde_cargara_la_pagina,p_0010224_js_url);
			})
		}
	}
}

function p_0010224_js_f_05_pintar_pagina_students_02_template_01_html_03_menu()
{
	var p_0010216_js_contenedor_pagina="";
	p_0010216_js_contenedor_pagina+="<div id=\"p_0010216_div_contenedor_menu\" class=\"p_0010220_css_contenedor_menus\">";
	p_0010216_js_contenedor_pagina+="<div id=\"p_0010216_div_menu_horario\" onmouseout=\"p_0010224_js_f_07_mover_menu_onmouseout()\" onmouseover=\"p_0010224_js_f_06_mover_menu_onmouseover()\" style=\"left:0\" class=\"p_0010220_css_img_menus\">";
	p_0010216_js_contenedor_pagina+="<img src=\"https://sb.oxbridge.es/front_end/students/images/calendar_100_web.png\" onclick=\"p_0010224_js_f_01_cargar_contenido_pagina(this.parentNode.id,this.parentNode.className,'https://sb.oxbridge.es/front_end/students/horario.php')\"/>";
	p_0010216_js_contenedor_pagina+="</div>";
	p_0010216_js_contenedor_pagina+="<div id=\"p_0010216_div_menu_clase_web\" onmouseout=\"p_0010224_js_f_07_mover_menu_onmouseout()\" onmouseover=\"p_0010224_js_f_06_mover_menu_onmouseover()\" style=\"left:10\" class=\"p_0010220_css_img_menus\">";
	p_0010216_js_contenedor_pagina+="<img src=\"https://sb.oxbridge.es/front_end/students/images/clasesweb_100_web.png\" onclick=\"p_0010224_js_f_01_cargar_contenido_pagina(this.parentNode.id,this.parentNode.className)\"/>";
	p_0010216_js_contenedor_pagina+="</div>";
	p_0010216_js_contenedor_pagina+="<div id=\"p_0010216_div_menu_clases\" onmouseout=\"p_0010224_js_f_07_mover_menu_onmouseout()\" onmouseover=\"p_0010224_js_f_06_mover_menu_onmouseover()\" style=\"left:20\" class=\"p_0010220_css_img_menus\">";
	p_0010216_js_contenedor_pagina+="<img src=\"https://sb.oxbridge.es/front_end/students/images/classes_100_web.png\" onclick=\"p_0010224_js_f_01_cargar_contenido_pagina(this.parentNode.id,this.parentNode.className)\"/>";
	p_0010216_js_contenedor_pagina+="</div>";
	p_0010216_js_contenedor_pagina+="<div id=\"p_0010216_div_menu_personal\" onmouseout=\"p_0010224_js_f_07_mover_menu_onmouseout()\" onmouseover=\"p_0010224_js_f_06_mover_menu_onmouseover()\" style=\"left:30\" class=\"p_0010220_css_img_menus\">";
	p_0010216_js_contenedor_pagina+="<img src=\"https://sb.oxbridge.es/front_end/students/images/personal_100_web.png\" onclick=\"p_0010224_js_f_01_cargar_contenido_pagina(this.parentNode.id,this.parentNode.className,'https://sb.oxbridge.es/front_end/personal_info/personal_info_01_template_01_html_01_template.php')\"/>";
	p_0010216_js_contenedor_pagina+="</div>";
	p_0010216_js_contenedor_pagina+="<div id=\"p_0010216_div_menu_smile\" onmouseout=\"p_0010224_js_f_07_mover_menu_onmouseout()\" onmouseover=\"p_0010224_js_f_06_mover_menu_onmouseover()\" style=\"left:40\" class=\"p_0010220_css_img_menus\">";
	p_0010216_js_contenedor_pagina+="<img src=\"https://sb.oxbridge.es/front_end/students/images/smile_100_web.png\" onclick=\"p_0010224_js_f_01_cargar_contenido_pagina(this.parentNode.id,this.parentNode.className,'https://sb.oxbridge.es/front_end/students/smile.php')\"/>";
	p_0010216_js_contenedor_pagina+="</div>";
	p_0010216_js_contenedor_pagina+="</div>";
	
	document.getElementById('p_0010216_contenedor_pagina_menu').innerHTML=p_0010216_js_contenedor_pagina;
}

function p_0010224_js_f_05_pintar_pagina_students_02_template_01_html_03_menu_mobil()
{
	var p_0010216_js_contenedor_pagina="";
	p_0010216_js_contenedor_pagina+="<div id=\"p_0010216_div_contenedor_menu_mobil\" class=\"p_0010220_css_contenedor_menus_mobil\">";
	p_0010216_js_contenedor_pagina+="	<div id=\"p_0010216_div_menu_horario_mobil\" class=\"p_0010220_css_img_menus_mobil\">";
	p_0010216_js_contenedor_pagina+="		<img src=\"https://sb.oxbridge.es/front_end/students/images/calendar_100_web.png\" onclick=\"p_0010224_js_f_01_cargar_contenido_pagina(document.getElementById('p_0010216_div_menu_horario').id,this.parentNode.className,'https://sb.oxbridge.es/front_end/students/horario.php')\"/>";
	p_0010216_js_contenedor_pagina+="	</div>";
	p_0010216_js_contenedor_pagina+="	<div id=\"p_0010216_div_menu_clase_web_mobil\" class=\"p_0010220_css_img_menus_mobil\">";
	p_0010216_js_contenedor_pagina+="		<img src=\"https://sb.oxbridge.es/front_end/students/images/clasesweb_100_web.png\" onclick=\"p_0010224_js_f_01_cargar_contenido_pagina(document.getElementById('p_0010216_div_menu_clase_web').id,this.parentNode.className)\"/>";
	p_0010216_js_contenedor_pagina+="	</div>";
	p_0010216_js_contenedor_pagina+="	<div id=\"p_0010216_div_menu_clases_mobil\" class=\"p_0010220_css_img_menus_mobil\">";
	p_0010216_js_contenedor_pagina+="		<img src=\"https://sb.oxbridge.es/front_end/students/images/classes_100_web.png\" onclick=\"p_0010224_js_f_01_cargar_contenido_pagina(document.getElementById('p_0010216_div_menu_clases').id,this.parentNode.className)\"/>";
	p_0010216_js_contenedor_pagina+="	</div>";
	p_0010216_js_contenedor_pagina+="	<div id=\"p_0010216_div_menu_personal_mobil\" class=\"p_0010220_css_img_menus_mobil\">";
	p_0010216_js_contenedor_pagina+="		<img src=\"https://sb.oxbridge.es/front_end/students/images/personal_100_web.png\" onclick=\"p_0010224_js_f_01_cargar_contenido_pagina(document.getElementById('p_0010216_div_menu_personal').id,this.parentNode.className,'https://sb.oxbridge.es/front_end/personal_info/personal_info_01_template_01_html_01_template.php')\"/>";
	p_0010216_js_contenedor_pagina+="	</div>";
	p_0010216_js_contenedor_pagina+="	<div id=\"p_0010216_div_menu_smile_mobil\" class=\"p_0010220_css_img_menus_mobil\">";
	p_0010216_js_contenedor_pagina+="		<img src=\"https://sb.oxbridge.es/front_end/students/images/smile_100_web.png\" onclick=\"p_0010224_js_f_01_cargar_contenido_pagina(document.getElementById('p_0010216_div_menu_smile').id,this.parentNode.className,'https://sb.oxbridge.es/front_end/students/smile.php')\"/>";
	p_0010216_js_contenedor_pagina+="	</div>";
	p_0010216_js_contenedor_pagina+="</div>";
	
	document.getElementById('p_0010216_contenedor_pagina_menu_mobil').innerHTML=p_0010216_js_contenedor_pagina;
}

function p_0010224_js_f_06_mover_menu_onmouseover()
{
	for(i in posicion_menu)
		posicion_menu[i].elemento.style.left=posicion_menu[i].posicion_abierto.left;
		posicion_menu[i].elemento.style.top=posicion_menu[i].posicion_abierto.top;
		posicion_menu[i].elemento.style.zIndex=posicion_menu[i].posicion_abierto.zindex;
}

function p_0010224_js_f_07_mover_menu_onmouseout()
{
	contador=0;
	for(i in posicion_menu)
	{
		if(!posicion_menu[i].clicado)
		{
			posicion_menu[i].posicion_cerrado.left=p_0010224_js_global_cseparacion*contador;
			posicion_menu[i].elemento.style.top=0;
			contador++;
		}
	}
	
	for(i in posicion_menu)
		posicion_menu[i].elemento.style.left=posicion_menu[i].posicion_cerrado.left;
		posicion_menu[i].elemento.style.zIndex=posicion_menu[i].posicion_cerrado.zindex;
		posicion_menu[i].elemento.style.top=posicion_menu[i].posicion_cerrado.top;
}



function p_0010224_js_f_07_set_objeto_menu(id,orden)
{
	ob=
	{
		"posicion_abierto":
		{
			"top":0,
			"left":orden*p_0010224_js_global_separacion,
			"zindex":0
		},
		"posicion_cerrado":
		{
			"left":0,
			"zindex":0,
			"top":0
		},
		"elemento":document.getElementById(id),
		"clicado":0
	};
	return ob;
}

function p_0010224_js_f_08_set_clicado(ob)
{
	for(i in posicion_menu)
	{
		posicion_menu[i].clicado=0;
		posicion_menu[i].posicion_cerrado.zindex=0;
		posicion_menu[i].posicion_abierto.zindex=0;
		posicion_menu[i].elemento.style.zIndex=0;
		posicion_menu[i].elemento.style.top=0;
	}
	
	ob.elemento.style.top=ob.posicion_abierto.top=10;
	ob.elemento.style.zIndex=ob.posicion_abierto.zindex=10;
	ob.posicion_cerrado.left=p_0010224_js_global_cseparacion*4;
	ob.elemento.style.zIndex=ob.posicion_cerrado.zindex=5;
	ob.clicado=1;
}

function p_0010224_js_f_09_set_clicado_mobil(p_0010224_js_id)
{
	for(i in document.getElementById('p_0010216_div_contenedor_menu_mobil').childNodes)
	{
		var hijos = document.getElementById('p_0010216_div_contenedor_menu_mobil').childNodes[i];
		if(hijos.nodeType==1)
			hijos.style.bottom=0;
	}
	document.getElementById(p_0010224_js_id+'_mobil').style.bottom=10;
}

function p_0010224_js_f_10_ocultar_todos_divs_donde_carga_contenido_seccion()
{
	for(i in document.getElementById('p_0010214_divs_donde_carga_contenido_cada_seccion').childNodes)
	{
		var hijos = document.getElementById('p_0010214_divs_donde_carga_contenido_cada_seccion').childNodes[i];
		if(hijos.nodeType==1)
			hijos.style.display='none';
	}
}

//p_0010214_divs_donde_carga_contenido_cada_seccion

/***************************/
p_0010224_js_f_05_pintar_pagina_students_02_template_01_html_03_menu();
p_0010224_js_f_05_pintar_pagina_students_02_template_01_html_03_menu_mobil();
/***************************/

//Definición de Objeto para los Menus y sus estilos
var posicion_menu={
	"posicion_menu_horario":p_0010224_js_f_07_set_objeto_menu('p_0010216_div_menu_horario',0),
	"posicion_menu_clase_web":p_0010224_js_f_07_set_objeto_menu('p_0010216_div_menu_clase_web',1),
	"posicion_menu_clases":p_0010224_js_f_07_set_objeto_menu('p_0010216_div_menu_clases',2),
	"posicion_menu_personal":p_0010224_js_f_07_set_objeto_menu('p_0010216_div_menu_personal',3),
	"posicion_menu_smile":p_0010224_js_f_07_set_objeto_menu('p_0010216_div_menu_smile',4)
};

setTimeout(function(){p_0010224_js_f_01_cargar_contenido_pagina('p_0010216_div_menu_personal','p_0010220_css_img_menus','https://sb.oxbridge.es/front_end/personal_info/personal_info_01_template_01_html_01_template.php');},1000);