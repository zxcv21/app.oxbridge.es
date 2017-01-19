/*
Page ID: p_0010151
File: /front_end/personal_info/personal_info_04_attendance_03_js_01_template.js
*/


function p_0010151_js_f_02_llamada_datos_objeto_asistencia (p_0010151_id_destino)
{
if(!p_0010235_js_objeto_personal_info.cargado)
	{
	/* CASO OBJETO NUEVO*/
		console.info(p_0010235_js_objeto_personal_info);
		
p_0010235_js_objeto_personal_info.cargando=true;
		ajax_load_page("https://sb.oxbridge.es/dev/dani/front_end/personal_info/recurso.php",p_0010151_id_destino,'',1,p_0010151_js_f_01_imprimir_asistencia);
	}
	else
	{
	console.info(p_0010235_js_objeto_personal_info);
		
		
	}
	
	
}

function p_0010151_js_f_01_imprimir_asistencia()
{
	p_0010151_dia_lectivo_orden=JSON.parse(document.getElementById("p_0010149_div_personal_info_div_consulta_prueba").innerHTML);
	//console.info(document.getElementById("p_0010149_div_personal_info_div_consulta_prueba").innerHTML)
	var p_0010151_asistencia=document.getElementById("p_0010149_div_personal_info_global");
	p_0010151_asistencia.innerHTML="";
	var p_0010151_contador_asistencias=0;
	for(i in p_0010151_dia_lectivo_orden){
		p_0010151_contador_asistencias++;
		var p_0010151_imp_dia=p_0010151_dia_lectivo_orden[i];
		if(typeof p_0010151_imp_dia!="undefined"){
			if(p_0010151_imp_dia.historica=="1"){
				var p_0010151_icono_clase='<img class="p_0010150_personal_asistencia_boton" onclick="'+
											'	p_0010151_js_f_04_mover_menu(true,\'p_00987_menu_clases\');'+
											'   p_0010151_js_f_02_cargar_clase();'+
											'	clases_fecha(\''+p_0010151_imp_dia.fecha_europa.replace(/\//g,'\',\'')+'\');'+
											'"src="https://sb.oxbridge.es/images/boton_asistencia_sel.png">';
											
				
				if(p_0010151_imp_dia.firmado=="0") p_0010151_icono_clase='<img class="manito p_0010150_personal_asistencia_boton" onclick="'+
																	'DIA_LEC=p_0010151_dia_lectivo_orden['+i+'];'+
																	'p_0010151_js_f_03_ocultar_mostrar(\'p_00995_firma\');p_0010151_js_f_03_ocultar_mostrar(\'p_00995_firma_botones\');'+
																	'"src="https://sb.oxbridge.es/images/boton_firma_pendiente.png">';
			if(p_0010151_imp_dia.asistencia=="0") p_0010151_icono_clase='<img class="p_0010150_personal_asistencia_boton" src="https://sb.oxbridge.es/images/boton_asistencia_falta.png">';
				if(p_0010151_imp_dia.lectivo=="0") p_0010151_icono_clase='<img class="p_0010150_personal_asistencia_boton" src="https://sb.oxbridge.es/images/boton_asistencia_anulada.png">';
				
				p_0010151_asistencia.insertAdjacentHTML("afterBegin",""+
					'<div class="p_0010150_personal_asistencia_clase">'+
					'	<div class=" p_0010150_personal_info_titulo_div_fecha ">'+p_0010151_imp_dia.fecha_europa+'<br><span style="font-size: 0.85em;">'+p_0010151_imp_dia.horaInicio+' - '+p_0010151_imp_dia.horaFinal+'</span></div>'+
					'	<div class=" p_0010150_personal_attendance">'+p_0010151_imp_dia.profesor+'</div>'+
						p_0010151_icono_clase+
					'</div>'
				);
		
				
			}
		}
	}

}


function p_0010151_js_f_02_cargar_clase()
{
	console.log(" p_0010151_js_f_02_cargar_clase");
	
}

function p_0010151_js_f_03_ocultar_mostrar(firma)
{
	
	console.log("firma");
	
}

function p_0010151_js_f_04_mover_menu()
{
	
	
	console.log("mover menu");
	
}

function clases_fecha (fecha)
{
	console.log(fecha);
	
	 
}


