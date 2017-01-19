/*
Pag ID:p_0010013
File:/front_end/contenedor/contenedor_01_template_03_js_01_template.js
*/

function p_0010013_js_set_object()
{
	if(typeof p_0010235_js_objeto_personal_info[alumno_id])
	{
		ajax_load_page(
			"https://s.oxbridge.es/ox/estructura_web/codigo/alumno_v2/informacion%20personal%2001%20_datos_presonales_01_asp_02_select.asp?p_0001207_get_alumno_id"
		   ,""
		   ,"alumno_id="+alumno_id
		   ,0
		   ,p_0010013_js_full_form()
		   ,1
		)
	}
}

function p_0010013_js_full_form()
{
	
}

function p_0010013_js_f_03_pintar_html
(
	p_0010013_ruta_personal_info 
	,p_0010013_ruta_password
	,p_0010013_ruta_assistence
	,p_0010013_ruta_marks
	,p_0010013_ruta_config
	,p_0010013_ruta_account_info
	,p_0010013_ruta_log_out
)
{
	
	var p_0010013_html="";	

	p_0010013_html+="<div id=\"p_0010009_div_personal_info_01_template_01\" class=\"p_0010011_personal_info_01_template_01\"> <!-- PADRE-->";
	p_0010013_html+="	<div class=\"p_0010011_personal_info_01_div_invisible\">";

	p_0010013_html+="		<!-- ZONA PERSONAL INFO -->";
	p_0010013_html+="		<div id=\"p_0010009_div_personal_info_01\" class=\"p_0010011_personal_info_01_img p_0010011_personal_info_01_img_seleccionada\" >";
	p_0010013_html+="			<img id=\"p_0010009_img_personal_info_01_boton_info_sel\" class=\"p_0010011_botongris\" name=\"boton_info_sel\"  src=\"https://app.oxbridge.es/app/images/boton_info_sel.png\">";
	p_0010013_html+="			<img id=\"p_0010009_img_personal_info_01_boton_info\" class=\"p_0010011_botonazul\" name=\"boton_info\"  src=\"https://app.oxbridge.es/app/images/boton_info.png\" onClick=\"p_0010013_js_f_01_seleccionar_seccion(this,'p_0010009_div_contenedor_01_personal_info_01_libreria','"+p_0010013_ruta_personal_info+"','',function(){return p_0010145_js_f_01_pintar_html();});\" onLoad=\"this.click();\" style=\"display:none\">";
	p_0010013_html+="			<div class=\"p_0010011_efecto_espacio_en_blanco\"></div>";
	p_0010013_html+="		</div>";

	p_0010013_html+="		<!-- ZONA PASSWORD-->";
	p_0010013_html+="		<div id=\"p_001009_div_password_01\" class=\"p_0010011_personal_info_01_img\">";
	p_0010013_html+="			<img id=\"p_0010009_img_personal_info_01_boton_key_sel\" class=\"p_0010011_botongris\"  src=\"https://app.oxbridge.es/app/images/boton_key_sel.png\"  style=\"display:none\">";
	p_0010013_html+="			<img id=\"p_0010009_img_personal_info_01_boton_key\" class=\"p_0010011_botonazul\" name=\"boton_key\" src=\"https://app.oxbridge.es/app/images/boton_key.png\" onClick=\"p_0010013_js_f_01_seleccionar_seccion(this,'p_0010009_div_contenedor_01_password_01_libreria','"+p_0010013_ruta_password+"','',function(){return p_0010148_js_f_01_pintar_html();})\" >";
	p_0010013_html+="			<div class=\"p_0010011_efecto_espacio_en_blanco\"></div>";
	p_0010013_html+="		</div>";

	p_0010013_html+="		<!-- ZONA ASSISTENCE-->";
	p_0010013_html+="		<div id=\"p_0010009_div_personal_info_01_assistence_01\" class=\"p_0010011_personal_info_01_img\">";
	p_0010013_html+="			<img id=\"p_0010009_img_personal_info_01_boton_assist_sel\" class=\"p_0010011_botongris\"  name=\"boton_assist_sel\"  src=\"https://app.oxbridge.es/app/images/boton_asistencia_sel.png\"  style=\"display:none\" >";
	p_0010013_html+="			<img id=\"p_0010009_img_personal_info_01_boton_assist\" class=\"p_0010011_botonazul\" name=\"boton_assist\" src=\"https://app.oxbridge.es/app/images/boton_asistencia.png\" onClick=\"p_0010013_js_f_01_seleccionar_seccion(this,'p_0010009_div_contenedor_01_assistence_01_libreria','"+p_0010013_ruta_assistence+"','',function(){ return p_0010151_js_f_02_llamada_datos_objeto_asistencia('p_0010149_div_personal_info_div_consulta_prueba');});\" >"
	p_0010013_html+="			<div class=\"p_0010011_efecto_espacio_en_blanco\" ></div>";
	p_0010013_html+="		</div>";

	p_0010013_html+="		<!-- ZONA MARKS-->";
	p_0010013_html+="		<div id=\"p_0010009_div_personal_info_01_marks_01\" class=\"p_0010011_personal_info_01_img\">";
	p_0010013_html+="				<img id=\"p_0010009_img_personal_info_01_boton_a_sel\"  class=\"p_0010011_botongris\"  name=\"boton_mark_sel\" src=\"https://app.oxbridge.es/app/images/boton_a_sel.png\"  style=\"display:none\" >";
	p_0010013_html+="				<img id=\"p_0010009_img_personal_info_01_boton_a\" class=\"p_0010011_botonazul\"  name=\"boton_mark\"  src=\"https://app.oxbridge.es/app/images/boton_a.png\" onClick=\"p_0010013_js_f_01_seleccionar_seccion(this,'p_0010009_div_contenedor_01_marks_01_libreria','"+p_0010013_ruta_marks+"','',function(){});\"  style=\"display:none\" >";
	p_0010013_html+="			<div class=\"p_0010011_efecto_espacio_en_blanco\" ></div>";
	p_0010013_html+="		</div>";

	p_0010013_html+="		<!-- ZONA CONFIG-->";
	p_0010013_html+="		<div id=\"p_0010009_div_personal_info_01_config_01\"  class=\"p_0010011_personal_info_01_img\"  >";
	p_0010013_html+="			<img id=\"p_0010009_img_personal_info_01_boton_gear_sel\" class=\"p_0010011_botongris\"  name=\"boton_config_sel\" src=\"https://app.oxbridge.es/app/images/boton_gear_sel.png\"  style=\"display:none\" >";
	p_0010013_html+="			<img id=\"p_0010009_img_personal_info_01_boton_gear\" class=\"p_0010011_botonazul\"  name=\"boton_config\" src=\"https://app.oxbridge.es/app/images/boton_gear.png\" onClick=\"p_0010013_js_f_01_seleccionar_seccion(this,'p_0010009_div_contenedor_01_config_01_libreria','"+p_0010013_ruta_config+"','',function(){return p_0010154_f_02_js_pintar_html();});\" >";
	p_0010013_html+="			<div class=\"p_0010011_efecto_espacio_en_blanco\" ></div>";
	p_0010013_html+="		</div>";

	p_0010013_html+="		<!-- ZONA ACCOUNT INFO-->";

	p_0010013_html+="			<div id=\"p_0010009_div_personal_info_01_account_info_01\"  class=\"p_0010011_personal_info_01_img\" >";
	p_0010013_html+="			<img id=\"p_0010009_img_personal_info_01_boton_account_sel\" class=\"p_0010011_botongris\"  name=\"boton_account_sel\" src=\"https://app.oxbridge.es/app/images/boton_banco_sel.png\"  style=\"display:none\" >";
	p_0010013_html+="			<img id=\"p_0010009_img_personal_info_01_boton_account\" class=\"p_0010011_botonazul\"  name=\"boton_account\" src=\"https://app.oxbridge.es/app/images/boton_banco.png\"  onclick=\"p_0010013_js_f_01_seleccionar_seccion(this,'p_0010009_div_contenedor_01_account_info_01_libreria','"+p_0010013_ruta_account_info+"','',function(){return p_0010169_js_f_06_pintar_html();});\" >";
	p_0010013_html+="			<div class=\"p_0010011_efecto_espacio_en_blanco\" ></div>";
	p_0010013_html+="		</div>";

	p_0010013_html+="		<!-- ZONA LOG OUT-->";
	p_0010013_html+="		<div id=\"p_0010009_div_personal_info_01_logout_01\" class=\"p_0010011_personal_info_01_img\" >";
	p_0010013_html+="			<img id=\"p_0010009_img_personal_info_01_boton_logout_sel\" class=\"p_0010011_botongris\"  name=\"boton_logout_sel\" src=\"https://app.oxbridge.es/app/images/boton_logout_sel.png\" style=\"display:none\"  >";
	p_0010013_html+="			<img id=\"p_0010009_img_personal_info_01_boton_logout\" class=\"p_0010011_botonazul\"  name=\"boton_logout\" src=\"https://app.oxbridge.es/app/images/boton_logout.png\" onClick=\"p_0010013_js_f_01_seleccionar_seccion(this,'p_0010009_div_contenedor_01_logout_01_libreria','"+p_0010013_ruta_log_out+"','',function(){return p_0010166_js_f_01_pintar_html();});\" >";
	p_0010013_html+="			<div class=\"p_0010011_efecto_espacio_en_blanco\" ></div>";
	p_0010013_html+="		</div>";

	p_0010013_html+="	</div>";
	
	p_0010013_html+="	<!-- ZONA CONTENEDORES-->";
	p_0010013_html+="	<div id=\"p_010009_div_personal_info_01_contenedor_01\" class=\"p_0010011_personal_info_01_contenedor_01 p_0010011_div_personal_info_01_contenedor_inicial_01\" align=\"center\">";

	p_0010013_html+="		<div id=\"p_0010009_div_contenedor_01_personal_info_01\" class=\"p_0010011_contenedor\"></div>";
	p_0010013_html+="		<div id=\"p_0010009_div_contenedor_01_personal_info_01_libreria\" style=\"display:none;\"></div>";

	p_0010013_html+="		<div id=\"p_0010009_div_contenedor_01_password_01\" style=\"display:none;\" class=\"p_0010011_contenedor\" ></div>";
	p_0010013_html+="		<div id=\"p_0010009_div_contenedor_01_password_01_libreria\" style=\"display:none;\" ></div>";

	p_0010013_html+="		<div id=\"p_0010009_div_contenedor_01_assistence_01\" style=\"display:none;\" class=\"p_0010011_contenedor\" ></div>";
	p_0010013_html+="		<div id=\"p_0010009_div_contenedor_01_assistence_01_libreria\" style=\"display:none;\" ></div>";

	p_0010013_html+="		<div id=\"p_0010009_div_contenedor_01_marks_01\" style=\"display:none;\" class=\"p_0010011_contenedor\"></div>";
	p_0010013_html+="		<div id=\"p_0010009_div_contenedor_01_marks_01_libreria\" style=\"display:none;\" ></div>";

	p_0010013_html+="		<div id=\"p_0010009_div_contenedor_01_config_01\" style=\"display:none; max-width\" class=\"p_0010011_contenedor\" ></div>";
	p_0010013_html+="		<div id=\"p_0010009_div_contenedor_01_config_01_libreria\" style=\"display:none; max-width\" ></div>";

	p_0010013_html+="		<div id=\"p_0010009_div_contenedor_01_account_info_01\" style=\"display:none;\" class=\"p_0010011_contenedor\"></div>";
	p_0010013_html+="		<div id=\"p_0010009_div_contenedor_01_account_info_01_libreria\" style=\"display:none;\" ></div>";
																													
	p_0010013_html+="		<div id=\"p_0010009_div_contenedor_01_logout_01\" style=\"display:none;\" class=\"p_0010011_contenedor\"></div></div>";
	p_0010013_html+="		<div id=\"p_0010009_div_contenedor_01_logout_01_libreria\" style=\"display:none;\" ></div></div>";

	p_0010013_html+="	</div>";

	p_0010013_html+="<div id=\"p_0010009_prueba_json\"></div> ";

	/*          OBJETO 1        */
	/*******************************************************************************************************************/
	window['p_0010013_obj_objeto_padre']={};
	window['p_0010013_obj_objeto_padre']["p_0010009_div_contenedor_01_personal_info_01_libreria"]=	{"cargando": false,"cargado": false};
	window['p_0010013_obj_objeto_padre']["p_0010009_div_contenedor_01_password_01_libreria"]=		{"cargando": false,"cargado": false};
	window['p_0010013_obj_objeto_padre']["p_0010009_div_contenedor_01_assistence_01_libreria"]=		{"cargando": false,"cargado": false};
	window['p_0010013_obj_objeto_padre']["p_0010009_div_contenedor_01_marks_01_libreria"]=			{"cargando": false,"cargado": false};
	window['p_0010013_obj_objeto_padre']["p_0010009_div_contenedor_01_config_01_libreria"]=			{"cargando": false,"cargado": false};
	window['p_0010013_obj_objeto_padre']["p_0010009_div_contenedor_01_logout_01_libreria"]=			{"cargando": false,"cargado": false};
	window['p_0010013_obj_objeto_padre']["p_0010009_div_contenedor_01_account_info_01_libreria"]=	{"cargando": false,"cargado": false};
	/*******************************************************************************************************************/
	
	return p_0010013_html;
}

function p_0010013_js_f_01_seleccionar_seccion(elemento,p_0010013_id_div,url,p_0010013_id_herencia,p_0010013_funcion_finalizadora)
{ 
	p_0010013_funcion_finalizadora=p_0010013_funcion_finalizadora || function(){};

	var clases_grises=document.getElementById("p_0010009_div_personal_info_01_template_01").getElementsByClassName("p_0010011_botongris");
	var clases_azules=document.getElementById("p_0010009_div_personal_info_01_template_01").getElementsByClassName("p_0010011_botonazul");
	var p_0010013_seleccionados=document.getElementById("p_0010009_div_personal_info_01_template_01").getElementsByClassName("p_0010011_personal_info_01_img_seleccionada");
	var div_ocultar=document.getElementById("p_0010009_div_personal_info_01_template_01").getElementsByClassName("p_0010011_contenedor");
    
	for(i in clases_grises)
		if (clases_grises[i].nodeType=="1")
        	clases_grises[i].style.display="none";
	
	for(i in clases_azules)
		if (clases_azules[i].nodeType=="1")
			clases_azules[i].style.display="";
		
	for (i in p_0010013_seleccionados)
		if (p_0010013_seleccionados[i].nodeType=="1")
			p_0010013_seleccionados[i].className="p_0010011_personal_info_01_img";
	
	elemento.parentNode.className="p_0010011_personal_info_01_img p_0010011_personal_info_01_img_seleccionada";
	
	document.getElementById(elemento.id+"_sel").style.display="";
	elemento.style.display="none";

	for(i in div_ocultar)
		if (div_ocultar[i].nodeType=="1")
			div_ocultar[i].style.display="none";

	window['p_0010013_obj_objeto_padre'][p_0010013_id_div].cargando=true;
	
	if(!window['p_0010013_obj_objeto_padre'][p_0010013_id_div].cargado)
	{
		document.getElementById(p_0010013_id_div.replace("_libreria","")).innerHTML="";
		
		ajax_load_page(
			url
			,p_0010013_id_div
			,'VER='+VER
			,1
			,function(){p_0010013_js_f_02_padre_ajax(p_0010013_id_div,p_0010013_funcion_finalizadora); }
		);
	}
	else
		document.getElementById(p_0010013_id_div.replace("_libreria","")).style.display="";
	
	if(elemento.id=="p_0010009_img_personal_info_01_boton_info")
		document.getElementById("p_010009_div_personal_info_01_contenedor_01").className="p_0010011_personal_info_01_contenedor_01 p_0010011_div_personal_info_01_contenedor_inicial_01";
	else
		document.getElementById("p_010009_div_personal_info_01_contenedor_01").className="p_0010011_personal_info_01_contenedor_01";
}


function p_0010013_js_f_02_padre_ajax(id_div,p_0010013_funcion_finalizadora,p_0010013_div_oculto_librerias)
{
    window['p_0010013_obj_objeto_padre'][id_div].cargado=true;
	window['p_0010013_obj_objeto_padre'][id_div].cargando=false;
    
    document.getElementById(id_div.replace("_libreria","")).innerHTML=p_0010013_funcion_finalizadora();
    document.getElementById(id_div.replace("_libreria","")).style.display="";
}





/*****************************************************************/
/*********************POBLAR OBJETO******************************/
/****************************************************************
function cargar_alumno()
{
    //console.error(id_alumno);
     ajax_load_page
    (
    "https://app.oxbridge.es/app/dev/dani/back_end/app.oxbridge.es/app/personal_info/pp/consulta_01_personal_info_01_students_10.php"
        ,"p_0010009_prueba_json"
        ,"id_alumno="+id_alumno
        ,1
        ,function(){
            p_0010235_js_objeto_personal_info[id_alumno]=JSON.parse(document.getElementById("p_0010009_prueba_json").innerHTML);
            p_0010235_js_objeto_personal_info[id_alumno].cargando=0;
            p_0010235_js_objeto_personal_info[id_alumno].cargado=1;
        }
        ,0
    )
}

function p_0010013_poblar_objeto(){
    if(typeof p_0010235_js_objeto_personal_info[id_alumno] == "undefined")
    {
        cargar_alumno();
    }
    else if(p_0010235_js_objeto_personal_info[id_alumno].cargado == 0)
    {
       cargar_alumno();
    }
}

/*var p_0010013_obj_pi =
{
"cargado": false,
"cargando": false,
}
function p_0010013_js_f_03_cargar_librerias_js(p_0010013_js_f_03_ob)
{
    if(p_0010013_js_f_03_ob.cargado && !p_0010013_js_f_03_ob.cargado )
    {
     
    }
}*/
