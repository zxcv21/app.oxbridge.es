/*
Page ID: p_0010222
File: /front_end/students/students_02_template_03_js_01_template.js
*/

/*function ajax_load_page(url,id_lugar,post,op_run_js,op_end_function,json)
{	
	json=json||0;
	var run_js=op_run_js||1;
	var end_function=op_end_function||function(){};
	if(document.getElementById(id_lugar))var contenedor_de_peticion=document.getElementById(id_lugar);
	
	console.info("ajax post: "+post)
	
	if (window.XMLhttpsRequest) var conexion_interaccion=new XMLhttpsRequest(); 
	else var conexion_interaccion=new ActiveXObject("Microsoft.XMLhttps");
	
	conexion_interaccion.open("POST",url,true);
	conexion_interaccion.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	conexion_interaccion.send(post); 
	conexion_interaccion.onreadystatechange=function()
	{
		if(conexion_interaccion.readyState===4 && conexion_interaccion.status===200)
		{
			array_scripts=conexion_interaccion.responseText;
			
			if(json)
			{
				return conexion_interaccion.responseText;
			}
			else
			{
				contenedor_de_peticion.insertAdjacentHTML("beforeEnd",conexion_interaccion.responseText);
				
				if(run_js)
				{
					var array_scripts=contenedor_de_peticion.getElementsByTagName('script');
					for(i in array_scripts)
					{
						if(array_scripts[i].nodeType==1)
						{
							var text_script = array_scripts[i];
							var script = document.createElement("script");
							
							if(text_script.innerHTML!=="")script.innerHTML=text_script.innerHTML;
							if(text_script.src)script.src=text_script.src;
							
							contenedor_de_peticion.appendChild(script);
						}
					}
				}
			}
			end_function();
		}
	}
}*/

function p_0010222_js_f_01_cargando(id,he){
	if(typeof he == "undefined")he="1em";
	
	document.getElementById(id).innerHTML=""+
		"<img style='"+
		"		height:"+he+";"+
		"		-moz-animation: p_00995_horario_loading infinite 1s linear;"+
		"		-webkit-animation: p_00995_horario_loading infinite 1s linear;"+
		"		animation:p_00995_horario_loading infinite 1s linear;"+
		"' src='https://app.oxbridge.es/app/front_end/students/images/loading.png'>";
}

function p_0010222_js_f_02_pintar_students_02_template_01_html_01_template()
{
	var p_0010222_js_contenido_pagina="";
	p_0010222_js_contenido_pagina+="<div id=\"p_0010214_div_contenido_pagina_menu_horario\"><\/div>";
	p_0010222_js_contenido_pagina+="<div id=\"p_0010214_div_contenido_pagina_menu_clase_web\"><\/div>";
	p_0010222_js_contenido_pagina+="<div id=\"p_0010214_div_contenido_pagina_menu_clases\"><\/div>";
	p_0010222_js_contenido_pagina+="<div id=\"p_0010214_div_contenido_pagina_menu_personal\"><\/div>";
	p_0010222_js_contenido_pagina+="<div id=\"p_0010214_div_contenido_pagina_menu_smile\"><\/div>";
	/*carga de librerias*/
	p_0010222_js_contenido_pagina+="<div id=\"p_0010214_div_contenido_pagina_menu_horario_libreria\"><\/div>";
	p_0010222_js_contenido_pagina+="<div id=\"p_0010214_div_contenido_pagina_menu_clase_web_libreria\"><\/div>";
	p_0010222_js_contenido_pagina+="<div id=\"p_0010214_div_contenido_pagina_menu_clases_libreria\"><\/div>";
	p_0010222_js_contenido_pagina+="<div id=\"p_0010214_div_contenido_pagina_menu_personal_libreria\"><\/div>";
	p_0010222_js_contenido_pagina+="<div id=\"p_0010214_div_contenido_pagina_menu_smile_libreria\"><\/div>";
	
	document.getElementById('p_0010214_divs_donde_carga_contenido_cada_seccion').innerHTML=p_0010222_js_contenido_pagina;
}
setTimeout(function(){p_0010222_js_f_02_pintar_students_02_template_01_html_01_template();},2000);