/*
Page ID: p_0010234
File: /utilities/js/libreria_03_js_02_ajax_load_page.js
*/

/*GLOBALES*/
if(typeof p_0010234_cargas_javascript=="undefined")var p_0010234_cargas_javascript=[];
if(typeof p_0010234_ajax_load_page_end_function=="undefined")var p_0010234_ajax_load_page_end_function=[];
if(typeof p_0010234_conexion_interaccion=="undefined")var p_0010234_conexion_interaccion=[];


function p_0010234_ajax_load_page_comprobar_carga(id_carga)
{
	var r=true;
	for(i in p_0010234_cargas_javascript[id_carga])
		if(!p_0010234_cargas_javascript[id_carga][i].load)
			r=false;
	if(r)
	{
		p_0010234_ajax_load_page_end_function[id_carga]();
		console.info("AJAX: End load");
	}
	return r;
}

function ajax_load_page(url,id_lugar,post,op_run_js,op_end_function,json)
{	
	p_0010234_id_carga=p_0010234_cargas_javascript.push([])-1;
	p_0010234_ajax_load_page_end_function[p_0010234_id_carga]=op_end_function;
	json=json||0;
	var run_js=op_run_js||1;
	
	if(typeof op_end_function != "function") end_function=function(){};
	else end_function = op_end_function;
	
	if(!json)
	{
		if(typeof id_lugar == "string")
		{
				if(document.getElementById(id_lugar))
					p_0010234_contenedor_de_peticion=document.getElementById(id_lugar);
		}
		else p_0010234_contenedor_de_peticion=id_lugar;
	}
	
	if (window.XMLHttpRequest) p_0010234_conexion_interaccion=new XMLHttpRequest(); 
	else p_0010234_conexion_interaccion=new ActiveXObject("Microsoft.XMLHttp");
	p_0010234_conexion_interaccion.url=url;
	if(!json)p_0010234_conexion_interaccion.contenedor=p_0010234_contenedor_de_peticion;
	p_0010234_conexion_interaccion.id_lugar=id_lugar;
	p_0010234_conexion_interaccion.post=post;
	p_0010234_conexion_interaccion.op_run_js=op_run_js;
	p_0010234_conexion_interaccion.op_end_function=op_end_function;
	p_0010234_conexion_interaccion.json=json;
	p_0010234_conexion_interaccion.open("POST",url,true);
	p_0010234_conexion_interaccion.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	//console.info({"url":url,"id_lugar":id_lugar,"post":post,"op_run_js":op_run_js,"op_end_function":op_end_function,"json":json});
	p_0010234_conexion_interaccion.send(post); 
	p_0010234_conexion_interaccion.id=p_0010234_id_carga; 
	p_0010234_conexion_interaccion.onreadystatechange=p_0010234_cambio_estado;
	
}

function p_0010234_cambio_estado()
{
	p_0010234_cambio_estado_src=false;
	if(this.readyState===4 && this.status===200)
	{
		array_scripts=this.responseText;

		if(this.json)
		{
			this.op_end_function(this.responseText); 	
		}
		else
		{
			this.contenedor.insertAdjacentHTML("beforeEnd",this.responseText);

			if(this.op_run_js)
			{
				var array_scripts=document.getElementById(this.id_lugar).getElementsByTagName('script');
				for(i in array_scripts)
				{
					if(array_scripts[i].nodeType==1)
					{
						var text_script = array_scripts[i];
						var script = document.createElement("script");

						if(text_script.innerHTML!=="")script.innerHTML=text_script.innerHTML;
						if(text_script.src)
						{
							script.src=text_script.src;
							var aux = p_0010234_cargas_javascript[this.id].push({"load":0})-1;

							script.setAttribute("onload","p_0010234_cargas_javascript['"+this.id+"']['"+aux+"'].load=1;p_0010234_ajax_load_page_comprobar_carga('"+this.id+"');");
							
							p_0010234_cambio_estado_src=true;
						}

						document.getElementById(this.id_lugar).appendChild(script);
					}
				}
			}
		}
		if(!p_0010234_cambio_estado_src)
		{
			if(this.json)this.op_end_function(this.responseText);
			else this.op_end_function();
		}
	}
}

/*

SINTAX: url(text),[id_]elemento(text/node),post(text),run_js(bolean),end_function(function)[,json(boleano)]

EJEMPLO:
function consulta_ajax()
{
	document.getElementById("mi_div").innerHTML="";
	ajax_load_page(
		"https://sb.oxbridge.es/ejemplo.php",
		document.getElementById("mi_div"),
		"nombre=juan&apellido=cortez",
		true,
		mi_funcion
	);
}

EJEMPLO JSON: (EN CONSTRUCCION)
ajax_load_page("https://sb.oxbridge.es/ejemplo.php","","nombre=juan&apellido=cortez",false,mi_funcion,true);
objeto = mifuncion(string){return JSON.parse(string);};
	
*/