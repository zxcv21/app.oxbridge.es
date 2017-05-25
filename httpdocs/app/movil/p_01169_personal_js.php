<!--
Pag. ID: p_01169
-->

<script>
P_01169_ORIENTACION="";
P_01169_primera_ves=1;


function p_01169_seleccionar_seccion(ele){
	info_menu = ele.parentNode;
	for(i in info_menu.childNodes){
		hijo=info_menu.childNodes[i];
		if(hijo.nodeType=="1"){
			if(hijo.className=="p_00961_info_menu_seccion p_00961_info_menu_seccion_click"||P_01169_primera_ves){
				hijo.className="p_00961_info_menu_seccion";
				hijo.childNodes[3].style.display="none";
				hijo.childNodes[5].style.display="none";
				hijo.childNodes[1].src="<? echo ver_url("images/","src"); ?>"+hijo.childNodes[1].name+".png";
				hijo.setAttribute("onclick","p_01169_seleccionar_seccion(this);");
			}
		}
	}
	P_01169_primera_ves=0;
	ele.className="p_00961_info_menu_seccion p_00961_info_menu_seccion_click";
	ele.childNodes[3].style.display="inline";
	ele.childNodes[5].style.display="inline";
	ele.childNodes[1].src="<? echo ver_url("images/","src"); ?>"+ele.childNodes[1].name+"_sel.png";
	ele.setAttribute("onclick","");
}

function p_01169_personal_girar(){
	info_menu=document.getElementById("p_00961_info_menu_secciones");
	for(i in info_menu.childNodes){
		if(info_menu.childNodes[i].nodeType==1){
			seccion=info_menu.childNodes[i];
			titulo=seccion.childNodes[5];
			if(titulo.nodeType=="1")titulo.childNodes[1].className="p_00961_contenedor_seccion p_00961_contenedor_seccion_"+P_01169_ORIENTACION;
		}
	}
}

//datos de informacion personal
function p_01169_cargar_presonal_datos_info(){
	if( document.getElementById('p_0001317_input_sesion_id') )
	{
		p_00989_cargando("p_00961_formulario_personal_info_cargando");
		p_00989_cargando("p_00961_personal_asistencia_contenedor");

		personal_datos=document.createElement("iframe");
		personal_datos.style.display="none";
		personal_datos.setAttribute("id","p_01169_personal_datos_info");

		if( typeof alumno_id != "undefined" )
		{
			var js_url="<? echo ver_url("p_01170_personal_datos_info.php","src"); ?>?alumno_id="+alumno_id+"&consulta=imprimir";
			js_url=js_url + "&p_0001326_get_sesion_id="+document.getElementById('p_0001317_input_sesion_id').value;
			js_url=js_url + "&p_0001326_get_sesion_uid="+document.getElementById('p_0001317_input_usuario_id').value;
			js_url=js_url + "&p_0001326_get_area_id="+document.getElementById('p_0001317_input_area_id').value;
			js_url=js_url + "&p_0001326_get_disparador_js=window.parent.p_01169_cargar_presonal_datos_info()";
			js_url=js_url + "&p_0001326_get_finalizador_js=window.parent.p_01169_cargar_presonal_datos_info()";
			personal_datos.setAttribute("src",js_url);
			//personal_datos.setAttribute("src","<? //echo ver_url("p_01170_personal_datos_info.php","src"); ?>?alumno_id="+alumno_id+"&consulta=imprimir");
			document.body.appendChild(personal_datos);
		};
	}
	else
	{
		setTimeout(
		function()
		{
			p_01169_cargar_presonal_datos_info();
		}
		, 500);
	};
	mostrar_datos_pendientes();
}


function mostrar_datos_pendientes(){
	if(typeof personal_datos_info.mostrar_firmas_pendientes == "undefined" && typeof personal_datos_info.solicitar_datos_bancarios == "undefined"){
		setTimeout(mostrar_datos_pendientes,100);
	}else
	{
		personal_datos_info.mostrar_firmas_pendientes="0";
		for(i in dia_lectivo){
			if( dia_lectivo[i].asistencia=="1" && dia_lectivo[i].firmado=="0" && parseInt(dia_lectivo[i].fecha.replace(/\//g,""))>20151218 )
			{
				personal_datos_info.mostrar_firmas_pendientes="1";
			}
		}

		if(personal_datos_info.mostrar_firmas_pendientes == "1")
		{
			document.getElementById("p_00961_info_menu_asistencia").getElementsByClassName("p_00961_menu_seccion_titulo")[0].innerHTML="<b style='color: #FF42C0;font-size: 0.8em;'>"+TEXTOS[142].text+"</b>";
		}

		//mostrar firmas pendientes
		if(personal_datos_info.mostrar_firmas_pendientes == "1" && personal_datos_info.solicitar_datos_bancarios == "0"){
			mover_menu(true,"p_00987_menu_personal");
			document.getElementById("p_00961_info_menu_asistencia").style.display="";
			document.getElementById("p_00961_info_menu_asistencia").click();
		}
		//mostrar datos bancarios
		else if(personal_datos_info.solicitar_datos_bancarios=="1"){
			mover_menu(true,"p_00987_menu_personal");
			document.getElementById("p_00961_info_menu_banco").style.display="";
			document.getElementById("p_00961_info_menu_banco").click();
		}
	}
}

//datos de informacion personal cargados
function p_01169_cargar_presonal_datos_info_load()
{
	p_1003_guardar_horas_inicio_fin_clases();
	p_01169_pintar_personal_info();
	document.getElementById("p_00955_form_seleccion_nivel_nombre").addEventListener("input", p_01169_comprobar_nombre_seleccion_nivel);
	if((personal_datos_info.nivel=="")||(!personal_datos_info.nivel))
	{
		if(personal_datos_info.nombre){
			document.getElementById("p_00955_div_nombre_seleccion_nivel").style.display="none";
		}
		else {
			document.getElementById("p_00955_div_seleccion_nivel").style.height= "82px";
		}
		document.getElementById("p_00955_overall_seleccion_nivel").style.display="";
		document.getElementById("p_00955_form_seleccion_nivel_nombre").value=personal_datos_info.nombre;
		document.getElementById("p_00955_div_img_cargando").style.display="none";
	}
	else
	{
		if(p_01171_SMILE_CARGAR_DATOS)
		{
			p_01176_funcion_consulta_smile_datos();
		}
	}
/*	if(personal_datos_info.alumno_id=="40830")
		personal_datos_info.tripartita="1";*/
	if(personal_datos_info.tripartita=="1")
	{
		if(!document.getElementById("p_00987_boton_tripartita"))
		{
			document.getElementById("head_oxbridge_menu_apartados").insertAdjacentHTML("afterBegin","<img"+
				"	id='p_00987_boton_tripartita'"+
				"	src='<? echo ver_url("images/boton_FT.png","src"); ?>'"+
				"	style='height:100%;float: right;margin-right: 10px;cursor:pointer;'"+
				'	onclick="document.getElementById(\'p_01451_tripartita\').style.display=\'\';p_00987_esconder_menu_inferior();p_01451_restaurar_circulos_progreso_tripartita_despues_eliminar_duplicados();"'+
				">");
		}
	}
}

function p_01169_pintar_personal_info(){
	//rellenar informacion y setings
	for(i in personal_datos_info){
		if(document.getElementById("p_00961_formulario_info_"+i))document.getElementById("p_00961_formulario_info_"+i).value=personal_datos_info[i];
		if(document.getElementById("p_00961_formulario_personal_seting_"+i))document.getElementById("p_00961_formulario_personal_seting_"+i).value=personal_datos_info[i];
	}
	//if(personal_datos_info.solicitar_datos_bancarios=="1")document.getElementById("p_00961_info_menu_banco").style.display="";
	//rellenar asistencia
	var c=0;
	var a=0;
	var f=0;
	for(i in dia_lectivo){
		c++;
		if(dia_lectivo[i].lectivo=="0")a++;
		else if(dia_lectivo[i].asistencia=="0")f++;
	}

	p_01169_imprimir_asistencia();
	document.getElementById("p_00961_formulario_personal_info_cargando").style.display="none";
	document.getElementById("p_00961_formulario_personal_info").style.display="";

	/*BLOQUEAR TRINITI MENORES DE P3*/
	var p_01169_expreg_nivel=new RegExp('^[P,p][3,4,5]');
	if(!personal_datos_info.nivel.match(p_01169_expreg_nivel))
	{
		document.getElementById("p_00962_detalle_trinity_no_disponible").style.display="";
		document.getElementById("p_00962_detalle_trinity_solisitud_texto").style.display="none";
		document.getElementById("solisitud_trinity_boton").style.display="none";
		document.getElementById("p_00962_detalle_trinity_solisitud_precio").style.display="none";
	}
}




function p_01169_comprobar_nombre_seleccion_nivel(){
	if(document.getElementById("p_00955_form_seleccion_nivel_nombre").value!="")
		document.getElementById("p_00955_div_seleccion_nivel").style.height= "";
	else
		document.getElementById("p_00955_div_seleccion_nivel").style.height= "82px";
}


//IMPRIMIR INFORMACION DE ASISTENCIA
function p_01169_imprimir_asistencia(a){
	var asistencia=document.getElementById("p_00961_personal_asistencia_contenedor");

	asistencia.innerHTML="";
	var contador_asistensias=0;
	for(i in dia_lectivo_orden){
		contador_asistensias++;
		var imp_dia=dia_lectivo[dia_lectivo_orden[i]];
		if(typeof imp_dia!="undefined"){
			if(imp_dia.historica=="1"){
				var icono_clase='<img class="p_00961_personal_asistencia_boton" onclick="'+
											'	mover_menu(true,\'p_00987_menu_clases\');'+
											'	p_01169_cargar_clase();'+
											'	clases_fecha('+imp_dia.date_inicio.getDate()+','+
												(imp_dia.date_inicio.getMonth()+1)+','+
												imp_dia.date_inicio.getFullYear()+');'+
											//'	clases_fecha(\''+imp_dia.fecha_europa.replace(/\//g,'\',\'')+'\');'+
											/*'	actividades(\''+imp_dia.fecha_europa.replace(/\//g,'\',\'')+'\',\''+imp_dia.horaInicio.replace(':','\',\'')+'\');'+*/
											'"src="<? echo ver_url("images/boton_asistencia_sel.png","src"); ?>">';

				if(imp_dia.firmado=="0"&& parseInt(imp_dia.fecha.replace(/\//g,""))>20151218)
				{
					icono_clase='<img class="manito p_00961_personal_asistencia_boton" onclick="'+
						'DIA_LEC='+dia_lectivo_orden[i]+';'+
						//'ocultar_mostrar(\'p_00995_firma\');ocultar_mostrar(\'p_00995_firma_botones\');'+
						'ocultar_mostrar(\'p_00995_firma\');'+
						'resizeCanvas();'+
						'"src="<? echo ver_url("images/boton_firma_pendiente.png","src"); ?>">';
				}

				if(imp_dia.incidencia==1) icono_clase='<img class="p_00961_personal_asistencia_boton" src="<? echo ver_url("images/boton_asistencia_falta.png","src"); ?>">';
				if(imp_dia.asistencia=="0") icono_clase='<img class="p_00961_personal_asistencia_boton" src="<? echo ver_url("images/boton_asistencia_falta.png","src"); ?>">';
				if(imp_dia.lectivo=="0") icono_clase='<img class="p_00961_personal_asistencia_boton" src="<? echo ver_url("images/boton_asistencia_anulada.png","src"); ?>">';

				asistencia.insertAdjacentHTML("afterBegin",""+
					'<div class="p_00961_personal_asistencia_clase">'+
					'	<div class="p_00961_personal_asistencia_40 p_00961_personal_asistencia_dia_lectivo">'+
						("0" + imp_dia.date_inicio.getDate()).slice(-2)+"/"+
						("0" + (imp_dia.date_inicio.getMonth()+1)).slice(-2)+"/"+
						imp_dia.date_inicio.getFullYear()+
					//imp_dia.fecha_europa+
					'<br><span style="font-size: 0.85em;">'+
					("0" + imp_dia.date_inicio.getHours()).slice(-2)+":"+
					("0" + imp_dia.date_inicio.getMinutes()).slice(-2)+
					//imp_dia.horaInicio+
					' - '+
					("0" + imp_dia.date_final.getHours()).slice(-2)+":"+
					("0" + imp_dia.date_final.getMinutes()).slice(-2)+
					//imp_dia.horaFinal+
					'</span></div>'+
					'<img class="p_00961_personal_asistencia_ir_clase" src="<? echo ver_url("images/ir_a.png","src"); ?>"'+
					' onclick="'+
												'	mover_menu(true,\'p_00987_menu_clases\');'+
												'	p_01169_cargar_clase();'+
												//'	clases_fecha(\''+imp_dia.fecha_europa.replace(/\//g,'\',\'')+'\');"'+'>'+
												'	clases_fecha('+imp_dia.date_inicio.getDate()+','+
													(imp_dia.date_inicio.getMonth()+1)+','+
													imp_dia.date_inicio.getFullYear()+');">'+
					'	<div class="p_00961_personal_asistencia_40 p_00961_personal_asistencia_dia_lectivo ">'+imp_dia.profesor+'</div>'+
						icono_clase+
					'</div>'
				);
			}
		}
	}
	if(contador_asistensias==0){
		asistencia.insertAdjacentHTML("afterBegin","<div style='font-size:1em;'><? echo $TEXTOS[92][3]?></div>");
	}else{
		asistencia.insertAdjacentHTML("afterBegin","<div class='p_00961_personal_asistencia_40' style='font-size:1em;'><? echo $TEXTOS[64][3]?></div>");
	}
}

//si cambia de idioma en la configuracion
function p_01169_if_cambio_de_idioma(ir_a){
	if(document.getElementById("p_00961_formulario_personal_seting_idioma").value!=personal_datos_info.idioma){
		window.location='<? echo ver_url("","src"); ?>movil'+
			'?GO_TO='+ir_a+
			'&p_0000989_get_alumno_id_nuevo='+alumno_id_nuevo+
			'&p_0000989_get_alumno_id='+alumno_id+
			'&p_0000989_get_sesion_id='+sesion_id;
	}
}

function p_00961_conforme_pago_realizado(){
	var p_00961_http = new XMLHttpRequest();
	var p_00961_url = "<? echo ver_url("movil/p_0001856_usuario_informado_pago.php","src"); ?>";
	var p_00961_params = "confirmado=true";
	p_00961_http.open("POST", p_00961_url, true);

	//Send the proper header information along with the request
	p_00961_http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

	p_00961_http.onreadystatechange = function() {//Call a function when the state changes.
	    if(p_00961_http.readyState == 4 && p_00961_http.status == 200) {
	        document.getElementById("p_00961_pago_realizado").style.display="none";
	    }
	}
	p_00961_http.send(p_00961_params);
}


window.addEventListener("resize", function(){
	if(document.getElementById("personal").style.display!=="none"){
		p_01169_resize_contenedor_personal_data();
	}
});

//en IOS vh es demasiado alto, asi que se calcula la altura del contenedor con javascript
function p_01169_resize_contenedor_personal_data(){
	var p_01169_contenedores= document.querySelectorAll(".p_00961_contenedor_seccion");
	for(var p_01169_conten of p_01169_contenedores){
		p_01169_conten.style.maxHeight= (window.innerHeight-document.getElementById("head_oxbridge").offsetHeight-document.getElementById("contenedor_menu").offsetHeight)+"px";
	}
}
</script>
