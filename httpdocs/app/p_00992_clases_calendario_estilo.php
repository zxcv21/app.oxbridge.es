<!--
Pag. ID: 00992
-->

<style>
/*+++++++ESTILOS CALENDARIO*/
			#p_00960_clases_head_calendario{
				display:inline;
				position:absolute;
				z-index:100;
				background-color:#fff;
				border:solid 2px #eee;
				width:142px;
				padding:5px;
				top:115px;
				margin-left:-157px;
				}
				#p_00960_clases_head_calendario_mes{
					margin-bottom:10px;
					font-family:HelveticaNeue, Helvetica, Arial, sans-serif;
						font-size: 14px; 
						color:#999;
						letter-spacing: 0px;
						font-weight:bold;
						text-align:center;
						text-transform:uppercase;
					}
				#p_00960_clases_head_calendario_mes_select_mes{
					float:left;
					border:0px;
					width:100px;
					height:20px;
					cursor:pointer;
					font-family:HelveticaNeue, Helvetica, Arial, sans-serif;
						font-size: 14px; 
						color:#999;
						letter-spacing: 0px;
						font-weight:bold;
						text-align:center;
						text-transform:uppercase;
						background-color:rgba(0,0,0,0);
					}
				#p_00960_clases_head_calendario_mes_select_mes_opciones{
					left:26px;
					top:20px;
					width:100px;
					position:absolute;
					background-color:#eee;
					display:none;
					margin:0;
					}
				#p_00960_clases_head_calendario_mes_select_mes_opciones_span:hover{
					background-color:#99f;
					width:100%;
					color:#fff;
					}
				#p_00960_clases_head_calendario_mes_span_ano{
					font-family:HelveticaNeue, Helvetica, Arial, sans-serif;
						font-size: 16px;
						letter-spacing: 0px;
					}
				#p_00960_clases_head_calendario_mes_botoni, #p_00960_clases_head_calendario_mes_botond{
					background-color:#fff;
					height:20px;
					width:20px;
					border-radius:0px;
					border:0px;
					font-family:HelveticaNeue, Helvetica, Arial, sans-serif;
						color:#8c6792;
						font-weight:bold;
						text-align:center;
					}
					#p_00960_clases_head_calendario_mes_botoni{
						float:left;
						}
					#p_00960_clases_head_calendario_mes_botond{
						float:right;
						}
				#p_00960_clases_head_calendario_contenedor_mes{
					display:inline-block;
					}
				#p_00960_clases_head_calendario_contenedor_boxsemana{
					height:20px;
					width:20px;
					float:left;
					font-family: HelveticaNeue, Helvetica, Arial, sans-serif;
						font-size: 14px;
						font-weight:bold;
						text-align:center;
						color:#999;
					text-transform:capitalize;
					letter-spacing:0;
					}
				.p_00960_clases_head_calendario_contenedor_box, .p_00960_clases_head_calendario_contenedor_box, .p_00960_clases_head_calendario_contenedor_dia, .p_00960_clases_head_calendario_contenedor_lectivo, .p_00960_clases_head_calendario_contenedor_fiesta, .p_00960_clases_head_calendario_contenedor_hoy, .p_00960_clases_head_calendario_contenedor_select, .p_00960_clases_head_calendario_contenedor_selecthoy{
					border:solid 1px #ccc;
					float:left;
					height:18px;
					width:18px;
					background-color:#fff;
					cursor:default;
					font-family: HelveticaNeue, Helvetica, Arial, sans-serif;
						font-size: 12px;
						text-align:center;
						vertical-align:middle;
						color:#999;
						letter-spacing:0px;
					}
				.p_00960_clases_head_calendario_contenedor_box{
					background-color:#fff;
					border-color:#fff;
					}
				.p_00960_clases_head_calendario_contenedor_lectivo{
					cursor:pointer;
					background-color:#99f;
					color:#fff;
					}
				.p_00960_clases_head_calendario_contenedor_fiesta{
					background-color:#edd;
					}
				.p_00960_clases_head_calendario_contenedor_select{
					border:solid 1px #bbb;
					background-color:#eee;
					}
				.p_00960_clases_head_calendario_contenedor_hoy{
					background-color:#fff;
					}	
				.p_00960_clases_head_calendario_contenedor_selecthoy{
					border:solid 1px #bbb;
					background-color:#fff;
					}
			#p_00960_clases_head_calendario_out{
				width:100%;
				height:100%;
				position:fixed;
				top:0px;
				left:0px;
				z-index:10;
				display:inline;
				}
</style>



<script>
//
// CALENDARIO + HORARIO
//


	//SET DIA ACTUAL
	ye = new Date(<? echo date('Y,m,d') ?>).getFullYear();
	if(new Date(<? echo date('Y,m,d') ?>).getMonth()<10){mo = "0"+(new Date(<? echo date('Y,m,d') ?>).getMonth()*1+1);}else mo = new Date(<? echo date('Y,m,d') ?>).getMonth()*1+1;
	if(new Date(<? echo date('Y,m,d') ?>).getDate()<10){da = "0"+new Date(<? echo date('Y,m,d') ?>).getDate();}else da = new Date(<? echo date('Y,m,d') ?>).getDate();
	if(new Date(<? echo date('Y,m,d') ?>).getHours()<10){ho = "0"+new Date(<? echo date('Y,m,d') ?>).getHours();}else ho = new Date(<? echo date('Y,m,d') ?>).getHours();
	if(new Date(<? echo date('Y,m,d') ?>).getMinutes()<10){mi = "0"+new Date(<? echo date('Y,m,d') ?>).getMinutes();}else mi = new Date(<? echo date('Y,m,d') ?>).getMinutes();

	//SET VARIABLES DEL CALENDARIO
	mes_tot = mo;
	ano_tot = ye;
	
	siguiente_clase="";

/////////////////////////////////IMPRIME CALENDARIO/////////////
	function set_calendario(mes,ano,option)
	{
		ano=ano||0;
		ano_tot=parseInt(ano_tot+ano);
		
		if(option=="0"){
			mes_tot=mes_tot*1+mes*1;
			if(mes_tot<10)mes_tot="0"+mes_tot;
		}
		else{
			mes_tot=option;
			if(mes_tot<10)mes_tot="0"+mes_tot;
		}
		
		
		//SI ESTA A FINAL DE AÑO CAMBIA DE AÑO
		if(mes_tot=="00"){
			mes_tot="12";
			ano_tot--;
		}
		if(mes_tot=="13"){
			mes_tot="01";
			ano_tot++;
		}
		
		//DIAS QUE TIENE EL MES Y EN QUE DIA EMPIEZA EL MES
		dias = new Date(ano_tot,mes_tot*1,0).getDate();
		dia_semana = new Date(ano_tot,mes_tot*1-1,1).getDay();
		
		//CONVERTIR LUNES EN 1º DIA DE LA SEMANA
		if(dia_semana==0)dia_semana=7;
		
		for(i=1; i<39; i++){
			elem = document.getElementById("p_00960_clases_head_calendario_contenedor_box_"+i);
			
			//SI NO ES UN DIA DEL MES CREA UN BOX QUE DEJA UN ESPACIO
			if(i<dia_semana || i> parseInt(dias+dia_semana-1)){
				elem.className = "p_00960_clases_head_calendario_contenedor_box";
				elem.innerHTML = "";
			}else{
				elem.innerHTML = i-dia_semana+1;
				elem.className = "p_00960_clases_head_calendario_contenedor_dia";
				//PINTA COMO FIESTA SAVADOS Y DOMINGOS
				if(new Date(ano_tot,mes_tot*1-1,i-dia_semana+1).getDay()==0||new Date(ano_tot,mes_tot*1-1,i-dia_semana+1).getDay()==6)
					elem.className = "p_00960_clases_head_calendario_contenedor_fiesta";
			}
			//PINTA EL DIA DE HOY
			if(parseInt(i-dia_semana+1)== new Date(<? echo date('Y,m,d') ?>).getDate() && mes_tot*1 == new Date(<? echo date('Y,m,d') ?>).getMonth() && ano_tot == new Date(<? echo date('Y,m,d') ?>).getFullYear())
				elem.className = "p_00960_clases_head_calendario_contenedor_hoy";
			//PINTA LOS DIAS LECTIVOS INCLUIDA HOY
			for(j in dia_lectivo){
				if(parseInt(i-dia_semana+1)<10){dia_compara = "0"+parseInt(i-dia_semana+1);}else dia_compara = parseInt(i-dia_semana+1);
				if(dia_lectivo[j].fecha==ano_tot+"/"+mes_tot+"/"+dia_compara){
					elem.className = "p_00960_clases_head_calendario_contenedor_lectivo";
					elem.setAttribute("onClick",'clases_fecha('+dia_compara+","+mes_tot+","+ano_tot+")");
				}
			}
		}
		//IMPRIME EL AÑO Y EL MES POR SI A CAMBIADO
		document.getElementById("p_00960_clases_head_calendario_mes_select_mes").innerHTML = month[mes_tot*1];
		document.getElementById("p_00960_clases_head_calendario_mes_span_ano").innerHTML = ano_tot;
	}


///////////////////////////////////////////////////IMPRECION DE ACTIVIDADES SEGUN EL DIA SELECCIONADO y la hora
				//sintax		(DD,MM,AAAA,HH,MM)
	function actividades(ac_dia, ac_mes, ac_ano, ac_hor, ac_min){
		
		document.getElementById("p_00960_clases_head_horario_imprimir").innerHTML = ac_hor+" : "+ac_min;
		document.getElementById("p_00960_clases_contenedor_actividad").style.display = "none";
		html_actividades = "";
		html_attachmen = "";
		
		for(i in dia_lectivo){
			if(dia_lectivo[i].fecha==ac_ano+"/"+ac_mes+"/"+ac_dia&&dia_lectivo[i].horaInicio==ac_hor+":"+ac_min){
				DIA_LEC=i;
				//MUESTRA EL DIV CONTENEDOR
				document.getElementById("p_00960_clases_contenedor_actividad").innerHTML = "";
				//REPASO E IMPRECION DE TODAS LAS ACTIVIDADES DE ESE DIA
				for(j in dia_lectivo[i].actividad){
					acti=dia_lectivo[i].actividad[j];
					switch(acti.type){
						case "Topic":color="#FDFA01";break;
						case "Structure":color="#4CF103";break;
						case "Vocabulary":color="#04F7EF";break;
						default: color="#ccc";break;
					}
					
					//ROFESOR
					document.getElementById("p_00960_clases_head_foto").src = "http://s.oxbridge.es/ox/Oxteacher/informacion%20personal/ficheros/Raj%20Singh_20140501image.jpg"/*dia_lectivo[i].foto*/;
					document.getElementById("p_00960_clases_head_nombre").innerHTML = dia_lectivo[i].profesor;
					mostrar_valoracion(true);
					val=document.getElementById("p_00960_clases_head_valoracion");
					val.setAttribute("onmouseover","mostrar_valoracion(false)");
					val.setAttribute("onmouseout","mostrar_valoracion(true)");
					
					//ACTIVIDAD
					html_actividades=html_actividades+
					'<div class="p_00992_clases_actividades_actividad" id="p_00992_clases_actividades_actividad_'+i+'-'+j+'"'+
					' onclick="imprime_actividad('+i+','+j+');">'+
					'	<div id="p_00992_clases_actividades_actividad_globo" style="background-color:'+color+';"></div>'+
					'	<div id="p_00992_clases_actividades_actividad_bloque">'+
					'		<span id="p_00992_clases_actividades_actividad_titulo">'+acti.titulo+'</span>'+
					'	</div>'+
					'</div>';
				}
			}
		}
		if (html_actividades == "")
			html_actividades = '<div id="p_00992_clases_actividades_sinactividad">No tienes ninguna actividad para este d&iacute;a</div>';
		document.getElementById("p_00960_clases_actividades_box").style.height = parseInt(document.getElementById('clases').offsetHeight - 165)+"px";
		document.getElementById("p_00960_clases_actividades_box").innerHTML= html_actividades;
		//MOSTRAR LA #1 ACTIVIDAD DEL DIA_LEC
		imprime_actividad(DIA_LEC,0);
	}
	
	
//////IMPRECION DE LA FECHA SELECCIONADA + HORARIO
	function clases_fecha(dia, mes, ano)
	{
		dia=String(dia);
		mes=String(mes);
		ano=String(ano);
		if(dia.length==1) dia="0"+dia;
		if(mes.length==1){
			mes = "0"+parseInt(mes*1);
		}
			
		fecha = dia+" / "+mes+" / "+ano;
		
		imprime_horario(dia,mes,ano);
		
		document.getElementById("p_00960_clases_head_calendario_out").style.display="none";
 		document.getElementById("p_00960_clases_head_calendario").style.display="none";
		document.getElementById("p_00960_clases_head_fecha_imprimir").innerHTML = fecha;
	}

//////ANTES DE IMPRIMIR CALENDARIO
	function calendario_imprime()
	{
		calendario = document.getElementById("p_00960_clases_head_calendario");
		ocultar_mostrar("p_00960_clases_head_calendario_out");
 		ocultar_mostrar("p_00960_clases_head_calendario");
	}

/////SET SIGUIENTE CLASE + llamada horario + imprimir calendario
	function set_siguiente_clase(){
		for(i=0;i<dia_lectivo.length;i++)
		{
			dia_comp=dia_lectivo[i].fecha.split("/");
			hora_comp=dia_lectivo[i].horaInicio.split(":");
			if(ye+mo+da+ho+mi < dia_comp[0]+dia_comp[1]+dia_comp[2]+hora_comp[0]+hora_comp[1]){
				if(siguiente_clase==""){
					siguiente_clase=i;
				}
			}else{
					siguiente_clase=dia_lectivo.length-1;
			}
			
		}
		
		siguiente=dia_lectivo[siguiente_clase].fecha.split("/");
		clases_fecha(siguiente[2],siguiente[1],siguiente[0]);
		mes_tot = siguiente[1]*1;
		ano_tot = siguiente[0]*1;
		set_calendario(0,0,0);
	}
	
/// IMPRIMIR HORARIO + llamar actividades
	function imprime_horario(dia,mes,ano)
	{
		//set elemento a modificar
		boton = document.getElementById("p_00960_clases_head_horario_boton");
		div_horas = document.getElementById("p_00960_clases_head_horario");
		
		//conseguir horarios de la fecha lectiva elegida
		horarios=[];
		for(i in dia_lectivo){
			if(dia_lectivo[i].fecha==ano+"/"+mes+"/"+dia)
				horarios.push(dia_lectivo[i].horaInicio);
		}
		
		//imprimir segun resultados
		horarios_html="";
		if(horarios.length<2){

			boton.style.display="none";
		}else{
			boton.style.display="inline";
		}
		
		for(i in horarios){
			hora= horarios[i].split(":")[0];
			minuto= horarios[i].split(":")[1];
				
			horarios_html=horarios_html+"<div id='p_00992_clases_head_horario_clase' onclick='ocultar_mostrar(\"p_00960_clases_head_horario\");actividades(\""+dia+"\",\""+mes+"\",\""+ano+"\",\""+hora+"\",\""+minuto+"\");'>"+horarios[i]+"</div>";
		}
		//imprimir
		div_horas.innerHTML = horarios_html;
		actividades(dia,mes,ano,horarios[0].split(":")[0],horarios[0].split(":")[1]);
	}
</script>