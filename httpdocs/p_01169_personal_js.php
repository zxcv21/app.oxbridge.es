<!--
Pag. ID: p_01169
-->

<script>
P_01169_ORIENTACION="";
P_01169_primera_ves=1;


function p_01169_seleccionar_seccion(ele)
{
	info_menu = ele.parentNode;
	for(i in info_menu.childNodes)
	{
		hijo=info_menu.childNodes[i];
		if(hijo.nodeType=="1")
		{
			if(hijo.className=="p_00961_info_menu_seccion p_00961_info_menu_seccion_click"||P_01169_primera_ves){
				hijo.className="p_00961_info_menu_seccion";
				hijo.childNodes[3].style.display="none";
				hijo.childNodes[5].style.display="none";
				hijo.childNodes[1].src="<? echo ver_url("","src"); ?>images/"+hijo.childNodes[1].name+".png";
				hijo.setAttribute("onclick","p_01169_seleccionar_seccion(this);");
			}
		}
	}
	P_01169_primera_ves=0;
	ele.className="p_00961_info_menu_seccion p_00961_info_menu_seccion_click";
	ele.childNodes[3].style.display="inline";
	ele.childNodes[5].style.display="inline";
	ele.childNodes[1].src="<? echo ver_url("","src"); ?>images/"+ele.childNodes[1].name+"_sel.png";
	ele.setAttribute("onclick","");
}

function p_01169_personal_girar()
{
	if(window.orientation%180==0)
	{
		P_01169_ORIENTACION="vertical";
		document.getElementById("p_00961_info_menu_secciones").style.width="88%";
	}
	else
	{
		P_01169_ORIENTACION="orizontal";
		document.getElementById("p_00961_info_menu_secciones").style.width="80%";
	}
	info_menu=document.getElementById("p_00961_info_menu_secciones");
	for(i in info_menu.childNodes){
		if(info_menu.childNodes[i].nodeType==1){
			seccion=info_menu.childNodes[i];
			titulo=seccion.childNodes[5];
			titulo.childNodes[1].className="p_00961_contenedor_seccion p_00961_contenedor_seccion_"+P_01169_ORIENTACION;
		}
	}
}

//datos de informacion personal
function p_01169_cargar_presonal_datos_info()
{
	if( document.getElementById('p_0001317_input_sesion_id') )
	{
		p_00989_cargando("p_00961_formulario_personal_info_cargando");
		p_00989_cargando("p_00961_personal_asistencia_contenedor");

		personal_datos=document.createElement("iframe");
		personal_datos.style.display="none";
		personal_datos.setAttribute("id","p_01169_personal_datos_info");

		if( typeof alumno_id != "undefined" )
		{
			var js_url="<? echo ver_url("p_01170_personal_datos_info.php?","src"); ?>alumno_id="+alumno_id+"&consulta=imprimir";
			js_url=js_url + "&p_0001326_get_sesion_id="+document.getElementById('p_0001317_input_sesion_id').value;
			js_url=js_url + "&p_0001326_get_sesion_uid="+document.getElementById('p_0001317_input_usuario_id').value;
			js_url=js_url + "&p_0001326_get_area_id="+document.getElementById('p_0001317_input_area_id').value;
			js_url=js_url + "&p_0001326_get_disparador_js=window.parent.p_01169_cargar_presonal_datos_info()";
			personal_datos.setAttribute("src",js_url);
			//personal_datos.setAttribute("src","<?// echo ver_url("p_01170_personal_datos_info.php","src"); ?>?alumno_id="+alumno_id+"&consulta=imprimir");
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
	mostrar_datos_bancarios();
}

//mostrar datos bancarios
function mostrar_datos_bancarios()Ç
{
	if(typeof personal_datos_info.solicitar_datos_bancarios =="undefined")
	{
		setTimeout(mostrar_datos_bancarios,5000);
	}
	else
	{
		if(personal_datos_info.solicitar_datos_bancarios=="1")
		{
			mover_menu(true,"p_00987_menu_personal");
			document.getElementById("p_00961_info_menu_banco").style.display="";
			document.getElementById("p_00961_info_menu_banco").click();
		}
	}
}

//datos de informacion personal cargados
function p_01169_cargar_presonal_datos_info_load()
{
	p_01169_pintar_personal_info();
	if(personal_datos_info.nivel=="")
	{
		document.getElementById("p_00955_div_seleccion_nivel").style.display="";
		document.getElementById("p_00955_form_seleccion_nivel_nombre").value=personal_datos_info.nombre;
	}
	else
	{
		if(p_01171_SMILE_CARGAR_DATOS)
		{
			p_01176_funcion_consulta_smile_datos();
		}
	}
}

function p_01169_pintar_personal_info()
{
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
}

//IMPRIMIR INFORMACION DE ASISTENCIA
function p_01169_imprimir_asistencia()
{
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
											'	clases_fecha(\''+imp_dia.fecha_europa.replace(/\//g,'\',\'')+'\');'+
											/*'	actividades(\''+imp_dia.fecha_europa.replace(/\//g,'\',\'')+'\',\''+imp_dia.horaInicio.replace(':','\',\'')+'\');'+*/
											'"src="<? echo ver_url("images/boton_asistencia_sel.png","src"); ?>">';

				if(imp_dia.firmado=="0") icono_clase='<img class="manito p_00961_personal_asistencia_boton" onclick="'+
																	'DIA_LEC='+dia_lectivo_orden[i]+';'+
																	'ocultar_mostrar(\'p_00995_firma\');ocultar_mostrar(\'p_00995_firma_botones\');'+
																	'resizeCanvas();'+
																	'"src="<? echo ver_url("images/boton_firma_pendiente.png","src"); ?>">';

				if(imp_dia.asistencia=="0") icono_clase='<img class="p_00961_personal_asistencia_boton" src="<? echo ver_url("images/boton_asistencia_falta.png","src"); ?>">';
				if(imp_dia.lectivo=="0") icono_clase='<img class="p_00961_personal_asistencia_boton" src="<? echo ver_url("images/boton_asistencia_anulada.png","src"); ?>">';

				asistencia.insertAdjacentHTML("afterBegin",""+
					'<div class="p_00961_personal_asistencia_clase">'+
					'	<div class="p_00961_personal_asistencia_40 p_00961_personal_asistencia_dia_lectivo">'+imp_dia.fecha_europa+'<br><span style="font-size: 0.85em;">'+imp_dia.horaInicio+' - '+imp_dia.horaFinal+'</span></div>'+
					'	<div class="p_00961_personal_asistencia_40 p_00961_personal_asistencia_dia_lectivo ">'+imp_dia.profesor+'</div>'+
						icono_clase+
					'</div>'
				);
			}
		}
	}
	if(contador_asistensias==0)
	{
		asistencia.insertAdjacentHTML("afterBegin","<div style='font-size:0.8em;'><? echo $TEXTOS[92][2]?></div>");
	}
	else
	{
		asistencia.insertAdjacentHTML("afterBegin","<div class='p_00961_personal_asistencia_40' style='font-size:0.8em;'><? echo $TEXTOS[64][2]?></div>");
	}
}

//si cambia de idioma en la configuracion
function p_01169_if_cambio_de_idioma(ir_a)
{
	if(document.getElementById("p_00961_formulario_personal_seting_idioma").value!=personal_datos_info.idioma){
		window.location='<? echo ver_url("","src"); ?>movil'+
			'?GO_TO='+ir_a+
			'&p_0000989_get_alumno_id_nuevo='+alumno_id_nuevo+
			'&p_0000989_get_alumno_id='+alumno_id+
			'&p_0000989_get_sesion_id='+sesion_id;
	}
}

</script>
