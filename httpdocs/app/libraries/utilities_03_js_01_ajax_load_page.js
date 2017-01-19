function ajax_load_page(url,id_lugar,post,op_run_js,op_end_function)
{	
	var run_js=op_run_js||1;
	var end_function=op_end_function||function(){};
	var contenedor_de_peticion=document.getElementById(id_lugar);
	
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
			end_function();
		}
	}
}
/*
SINTAX: url(text),id_elemento(text),post(text),run_js(bolean)[,end_function(function)]
EJEMPLO:
function consulta_ajax()
{
	document.getElementById("mi_div").innerHTML="";
	ajax_load_page(
		"http://sb.oxbridge.es/ejemplo.php",
		"mi_div",
		"?nombre=juan&apellido=cortez",
		true,
		mi_funcion
	);
}
*/