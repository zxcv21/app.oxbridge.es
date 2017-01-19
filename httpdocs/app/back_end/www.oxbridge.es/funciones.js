/*
Page ID: p_0010236
File: /back_end/sb.oxbridge.es/funciones.js
*/

/*GLOBALES*/
if(typeof p_0010013_librerias_cargando == "undefined" )p_0010013_librerias_cargando2=[];

function p_0010236_js_f_01_cargar_libreria(p_0010236_nombre,p_0010236_id_pag,p_0010236_arguments)
{
	ajax_load_page(
		"https://app.oxbridge.es/app/dev/admin/admin_01_version_control_10_php_01_file_link.php"
		,""
		,"p_0010015_id_pagina="+p_0010236_id_pag+"&p_0010015_tipo=src"
		,false
		,p_0010236_js_f_03_cargar_libreria_final
		,true
	);
}

function p_0010236_js_f_03_cargar_libreria_final(url)
{	
	p_0010236_scripts_js=document.createElement("script");
	p_0010236_scripts_js.src=url;
	document.head.appendChild(p_0010236_scripts_js);
}

function p_0010236_js_f_02_imprimir_argumentos(p_0010236_nombre_argumentos)
{
	var p_0010236_txt="";
	for (i in window[p_0010236_nombre_argumentos])
		p_0010236_txt+="window[p_0010236_nombre_argumentos]["+i+"],";
	return p_0010236_txt.slice(0,-1);
}


////FUNCIONES ESPERA////
p_0010236_js_f_01_cargar_libreria("file_link","0010231");//FILE_LINK
p_0010236_js_f_01_cargar_libreria("gebi","0010231");//GEBI