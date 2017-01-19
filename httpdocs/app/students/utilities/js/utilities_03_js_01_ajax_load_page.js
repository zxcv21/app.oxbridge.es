/*function p_0010234_ajax_load_page_comprobar_carga(id_lugar)
{
	var r=true;
	for(i in cargas_javascript[id_lugar])
		if(!cargas_javascript[id_lugar][i].load)
			r=false;
	if(r)
	{
		p_0010234_ajax_load_page_end_function[id_lugar]();
		console.info("AJAX: End load");
	}
	return r;
}

var cargas_javascript=[];
var p_0010234_ajax_load_page_end_function=[];

function ajax_load_page(url,id_lugar,post,op_run_js,op_end_function,json)
{	
	cargas_javascript[id_lugar]=[];
	p_0010234_ajax_load_page_end_function[id_lugar]=op_end_function;
	json=json||0;
	var run_js=op_run_js||1;
	var end_function=op_end_function||function(){};
	if(document.getElementById(id_lugar))var contenedor_de_peticion=document.getElementById(id_lugar);
	
	console.info("ajax post: "+post)
	
	if (window.XMLHttpRequest) var conexion_interaccion=new XMLHttpRequest(); 
	else var conexion_interaccion=new ActiveXObject("Microsoft.XMLHttp");
	
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
							if(text_script.src)
							{
								script.src=text_script.src;
								var aux = cargas_javascript[id_lugar].push({});
								cargas_javascript[id_lugar][aux-1].load=0;
								script.setAttribute("onload","cargas_javascript['"+id_lugar+"']['"+(aux-1)+"'].load=1;p_0010234_ajax_load_page_comprobar_carga('"+id_lugar+"');");
								
							}
							
							contenedor_de_peticion.appendChild(script);
						}
					}
				}
			}
			if(p_0010234_ajax_load_page_comprobar_carga(id_lugar))
				end_function();
			else p_0010234_ajax_load_page_end_function[id_lugar]=end_function;
		}
	}
}
/*
SINTAX: url(text),id_elemento(text),post(text),run_js(bolean),end_function(function)[,json(boleano)]
EJEMPLO:
function consulta_ajax()
{
	document.getElementById("mi_div").innerHTML="";
	ajax_load_page(
		"http://sb.oxbridge.es/ejemplo.php",
		"mi_div",
		"nombre=juan&apellido=cortez",
		true,
		mi_funcion
	);
}
EJEMPLO JSON:
objeto=JSON.parse(ajax_load_page("http://sb.oxbridge.es/ejemplo.php","","nombre=juan&apellido=cortez",false,mi_funcion,true));
	);
*/