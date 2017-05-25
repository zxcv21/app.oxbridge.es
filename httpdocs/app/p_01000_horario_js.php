<!--
id: p_01000
-->
<script type="text/javascript">
	
	var scroller_top=0;
	var scroller_left=0;
/////////////////////////////////ANTI SCROLL ORARIO
	function anti_scroll_horario()	
	{
		e_scroller=document.getElementById('p_00958_horario_contenedor_horario');
		var e_scroller_top=e_scroller.scrollTop;
		var e_scroller_left=e_scroller.scrollLeft;
		if( scroller_top != e_scroller_top )
		{
			scroller_top=e_scroller_top;
			document.getElementById('p_00958_horario_contenedor_horario_dias').style.top = e_scroller_top + 'px';
		};
		if( scroller_left != e_scroller_left )
		{
			scroller_left=e_scroller_left;
			document.getElementById('p_00995_horario_contenedor_horario_horas').style.left = e_scroller_left + 'px';
		};
	}

//////////////////////////////PINTAR HORARIO
//DEFINICIONES
HORA_SERVER='';
POS_CAPSULA=[];
caja_left=[];
ocupacion_dia=[];
ajuste=[];
cuadricula_canvas={}//[fecha][hora][x_pos,y_pos,x_size,y_size]
HORARIO_CARGA=true;
horas_mostradas=[];

//para formulario
id_capsula_rl="";
horario_formulario_click=false;
horario_formulario_variable="";

//tamaño capsulas
capsula_alto=72;//62
capsula_ancho=84;//74 modificar con .p_00995_horario_contenido_clases (-4) y p_00995_horario_contenido_clases_fondo (=)
cuarto_hora_alto=36;// modificar con p_00995_horario_contenedor_horario_horas (-1)
cuarto_hora_ancho=31;// modificar con p_00995_horario_contenedor_horario_dia (-1)
cuarto_hora_separador_alto=20;

HORA="<? echo date("H:i");?>";
DIA="<? echo date("Y/m/d"); ?>";

////////////////////////////CARGAR HORARIO
	function carga_horario(){
		POS_CAPSULA=[];
		caja_left=[];
		ocupacion_dia=[];
		ajuste=[];
		cuadricula_canvas={}//[fecha][hora][x_pos,y_pos,x_size,y_size]
		horas_mostradas=[];//para buscar una hora entre medio
		
		y_pos_anterior=null;
		y_size_anterior=null;
		x_pos_anterior=null;
		x_size_anterior=null;
			
		//DEFINICIONES
		dias_horario = document.getElementById("p_00958_horario_contenedor_horario_dias");
		cuerpo_horario = document.getElementById("p_00958_horario_contenedor_horario_cuerpo_datos");
		html_dias = "";
		html_horas = "<div id='p_00995_horario_contenedor_horario_horas'>";
		html_cajas = "";	
		dl_fecha = horario_datos[0].fecha_aaaa_mm_dd.split("/");
		dl_fecha = new Date(dl_fecha[0],dl_fecha[1]-1,dl_fecha[2]);//--------------------------------------------------------------------con ayer
		//dl_fecha = new Date(DATE_CLI.getFullYear(),DATE_CLI.getMonth(),DATE_CLI.getDate());//--------------------------------------------sin ayer
		
		//rango de dias
		fin_fecha = horario_datos[horario_datos.length-1].fecha_aaaa_mm_dd.split("/");
		fin_fecha = new Date(fin_fecha[0],fin_fecha[1]-1,fin_fecha[2]);
		RANGO_DIAS = dias_entre(dl_fecha,fin_fecha)+1;
		
		//TITULOS DIAS
		linea_mes=0;
		for(i=0;i<RANGO_DIAS;i++){
			//ASIGNAR ID A DIAS
			id_fecha=dl_fecha.getFullYear()+"_"+numToDate(dl_fecha.getMonth()+1)+"_"+numToDate(dl_fecha.getDate());
			
			//Si es el primer dia del mes imprime la linea del mes *o el el 1º dia
			html_linea_mes="";
			if(numToDate(dl_fecha.getDate())==01||i==0){
				//color para la linea de mes
				color_linea="#2DCEE4";
				color_s_1="#2DCEE4";
				color_s_2="#FF3799";
				if(dl_fecha.getMonth()%2==0){
					color_linea="#FF3799";
					color_s_1="#FF3799";
					color_s_2="#2DCEE4";
				}
				//IMPRIMIR LINEA MES
				html_linea_mes="<div ID='p_00995_horario_contenedor_horario_linea'>"+
					"<div class='p_00995_horario_contenedor_horario_linea_div' id='p_00995_horario_contenedor_horario_linea_"+i+"' style='background-color:"+color_linea+";'></div>"+
					"<span id='p_00995_horario_contenedor_horario_linea_span_i' style='color:"+color_s_2+";'>"+month[dl_fecha.getMonth()]+"</span>"+
					"<span id='p_00995_horario_contenedor_horario_linea_span_d' style='color:"+color_s_1+";'>"+month[dl_fecha.getMonth()+1]+"</span>"+
				"</div>"
			}
			//CANVAS
			cuadricula_canvas[id_fecha]=[];
			
			//IMPRIMIR DIA
			html_dias=html_dias+"<div id='p_00995_horario_contenedor_horario_dia_D"+id_fecha+
			"' class='p_00995_horario_contenedor_horario_dia'>"+html_linea_mes+"<span>"+
			week[dl_fecha.getDay()+1].substr(0,3)+"</span> "+dl_fecha.getDate()+
			"</div>";
			dl_fecha = new Date(dl_fecha.getFullYear(),dl_fecha.getMonth(),dl_fecha.getDate()+1);
		}
		
		//RANGO HORAS
		RANGO_HORAS={};
		temprano=2345;
		tarde=0;
		for(i in horario_datos){//calcular rango de horas
			capsula=horario_datos[i];
			hora_i=new Date(capsula.fecha_anyo,capsula.fecha_mes,capsula.fecha_dia,parseInt(capsula.hora_inicio.split(":")[0]),capsula.hora_inicio.split(":")[1]);
			hora_f=new Date(capsula.fecha_anyo,capsula.fecha_mes,capsula.fecha_dia,parseInt(capsula.hora_fin.split(":")[0]),capsula.hora_fin.split(":")[1]);
			hora_f=hora_f.getHours()+""+numToDate(hora_f.getMinutes());
			hora_i=hora_i.getHours()+""+numToDate(hora_i.getMinutes());
			
			//remplazar finales de hora en cambio de dia
			if(hora_f<99&&hora_i>99)
				hora_f=hora_f*1+2400;
			
			//marcar nuevo rango
			if(temprano >= hora_i*1)
				temprano = hora_i*1;
			if(tarde <= hora_f*1)
				tarde = hora_f*1;
		}
		
		//RANGO_HORAS
		filas=0;
		separadores=0;
		for(i=temprano;i<=tarde;i=i+15){
			i_str=i+"";//cadenas para hora
			if(i_str.slice(-2)*1>59){//si la hora es mas de 59 suma 40 para convertir decimal en formato horario
				i=i+40;
				i_str=i+"";
			}
			if(i<tarde)//quitar la hora final
				RANGO_HORAS[i_str.replace(/\:/g,"")]=0;
		}
		
		//marcar horas para no recortar
		for(i in horario_datos){
			for(j in RANGO_HORAS){
				//fin para horas con cambio de dias
				if(horario_datos[i].hora_fin.replace(/\:/g,"")*1<99 && horario_datos[i].hora_inicio.replace(/\:/g,"")*1>99)
					fin_falso=horario_datos[i].hora_fin.replace(/\:/g,"")*1+2400;
				else fin_falso=horario_datos[i].hora_fin.replace(/\:/g,"")*1;
				
				if(j>=(horario_datos[i].hora_inicio.replace(/\:/g,"")*1)&&j<fin_falso){
					RANGO_HORAS[j]++;
				}
			}
		}
		
		//TITULOS HORAS
		html_horas="<div id='p_00995_horario_contenedor_horario_horas'>";
		entrar=false;
		
		for(i in RANGO_HORAS){
			
			imprime_hora=i;
			i_str=String(i);
			i_hora=i_str.slice(-4,-2);
			if(i_hora.length<1)
				i_hora=0;
			imprime_hora=i_hora+":"+numToDate(i_str.slice(-2));//formato horario para imprecion
			top_text="";
			
			if(RANGO_HORAS[i]>0){
				
				filas++;//contador de filas para CANVAS
				
				//set alturas CANVAS
				for(j in cuadricula_canvas){
					cuadricula_canvas[j][i_str]=[];
					cuadricula_canvas[j][i_str][3]=cuarto_hora_alto;
					if(typeof y_pos_anterior =="undefined")
						cuadricula_canvas[j][i_str][2]=0;
					else
						cuadricula_canvas[j][i_str][2]=y_pos_anterior+y_size_anterior;
				}
				y_pos_anterior=cuadricula_canvas[j][i_str][2];
				y_size_anterior=cuadricula_canvas[j][i_str][3];
				
				//imprime hora
				horas_mostradas.push(i);
				if(i == temprano)top_text="style='top:1px; background:none;'";
				html_horas=html_horas+"<div id='p_00995_horario_contenedor_horario_horas_"+i+"' class='p_00995_horario_contenedor_horario_horas'>"+
					"<span "+top_text+">"+imprime_hora+"</span>"+
				"</div>";
				entrar=true;
				
			}else{
				if(entrar){
					//set alturas CANVAS
					for(j in cuadricula_canvas){
						cuadricula_canvas[j][i_str]=[];
						cuadricula_canvas[j][i_str][3]=cuarto_hora_separador_alto;
						if(typeof y_pos_anterior =="undefined")
							cuadricula_canvas[j][i_str][2]=0;
						else
							cuadricula_canvas[j][i_str][2]=y_pos_anterior+y_size_anterior;
					}
					y_pos_anterior=cuadricula_canvas[j][i_str][2];
					y_size_anterior=cuadricula_canvas[j][i_str][3];
					
					separadores++;
					
					horas_mostradas.push(i);
					html_horas=html_horas+"<div id='p_00995_horario_contenedor_horario_horas_"+i+"' class='p_00995_horario_contenedor_horario_horas_separador'>"+
						"<span "+top_text+">"+imprime_hora+"</span>"+
					"</div>";
					entrar=false;
				}
			}
		}
		html_horas=html_horas+"</div>";		
		
		//AJUSTES DE TAMAÑO
		ajuste_fecha = horario_datos[0].fecha_aaaa_mm_dd.split("/");
		ajuste_fecha = new Date(ajuste_fecha[0],ajuste_fecha[1]-1,ajuste_fecha[2]);
		ajuste=[];
		
		//IDS DE LOS DIAS POR AJUSTAR
		for(i=0;i<RANGO_DIAS;i++){
			ajuste_fecha_id=new Date(ajuste_fecha.getFullYear(),ajuste_fecha.getMonth(),ajuste_fecha.getDate()+i);
			ajuste[ajuste_fecha_id.getFullYear()+"_"+numToDate(ajuste_fecha_id.getMonth()+1)+"_"+numToDate(ajuste_fecha_id.getDate())]=0;
		}
		
		//Crear rango de horas para el dia con array de posicion
		for(i in horario_datos){
			capsula=horario_datos[i];
			id_dia=capsula.fecha_aaaa_mm_dd.replace(/\//g,"_");
			if(typeof ocupacion_dia[id_dia]=="undefined"){
				ocupacion_dia[id_dia]=[];
				for(j in RANGO_HORAS)
					ocupacion_dia[id_dia][j]=[];//crear la ocupacion de el dia
			}
			
			//margar dia como contenedor de dias lectivos
			if(ajuste[id_dia]==0)
				ajuste[id_dia]=1;
			
			//marcar ocupacion
			salir=0;
			j=0;
			while(salir==0){
				capsula_hora_i=capsula.hora_inicio.replace(/\:/g, "")*1;
				if(typeof ocupacion_dia[id_dia][capsula_hora_i][j]=="undefined"){
					//marcar inicio como ocupado
					ocupacion_dia[id_dia][capsula_hora_i][j]=1;
					caja_left[capsula.dia_lectivo_id]=j*capsula_ancho;
					
					//marcar ancho de dia
					if(ajuste[id_dia]<(j+1)){
						ajuste[id_dia]=(j+1);
					}
					
					if(capsula.hora_fin.replace(/\:/g,"")*1<99 && capsula.hora_inicio.replace(/\:/g,"")*1>99)
						fin_falso=capsula.hora_fin.replace(/\:/g,"")*1+2400;
					else
						fin_falso=capsula.hora_fin.replace(/\:/g,"")*1;
						
					//marcar el resto de cuartos como ocupados
					for(k=capsula.hora_inicio.replace(/\:/g,"")*1;k<fin_falso;k=k+15){
						ocupacion_dia[id_dia][k][j]=1;
						//para recorrer solo los horarios reales
						if(String(k+15).slice(-2,4)=="60"){k=k*1+40;}
					}
					salir=1;
				}
				j++;
			}
		}
		
		//CALCULAR TAMAÑO
		cambio=0;
		for(i in ajuste){
			if(ajuste[i]!=0)
					cambio=cambio+(ajuste[i]*capsula_ancho-cuarto_hora_ancho);
		}
		cuadricula_alto=filas*cuarto_hora_alto+separadores*cuarto_hora_separador_alto;
		
			
		//CUADRICULA
		html_cajas="<canvas id='p_00995_horario_contenido_cuadricula' height='"+cuadricula_alto+"px' width='"+(RANGO_DIAS*cuarto_hora_ancho+cambio)+"px'></canvas>";
		
		//INSERTAR HORARIO
		html_cajas_clases="<div id='p_00995_horario_contenedor_clases'></div>";
		dias_horario.innerHTML=html_dias;
		cuerpo_horario.innerHTML=html_horas+html_cajas+html_cajas_clases;
	
		
		//AJUSTES DE TAMAÑO
		for(bucle03 in ajuste){
			e=document.getElementById("p_00995_horario_contenedor_horario_dia_D"+bucle03);
			if(ajuste[bucle03]!=0){
				e.style.width=ajuste[bucle03]*capsula_ancho-1+"px";
			}else{
				e.innerHTML=e.innerHTML.substr(0, 16);
			}
			
			//set anchos CANVAS
			for(j in cuadricula_canvas[bucle03]){
				if(ajuste[bucle03]!=0)
					cuadricula_canvas[bucle03][j][1]=ajuste[bucle03]*capsula_ancho;
				else
					cuadricula_canvas[bucle03][j][1]=cuarto_hora_ancho;
					
				if(typeof x_pos_anterior =="undefined")
					cuadricula_canvas[bucle03][j][0]=0;
				else
					cuadricula_canvas[bucle03][j][0]=x_pos_anterior+x_size_anterior;
			}
			x_pos_anterior=cuadricula_canvas[bucle03][j][0];
			x_size_anterior=cuadricula_canvas[bucle03][j][1];
		}
		
		//CAMBIAR TAMAÑO SEGUN HORARIO
		document.getElementById("p_00958_horario_contenedor_horario_dias").style.width = (RANGO_DIAS*cuarto_hora_ancho+cambio)+"px";
		document.getElementById("p_00958_horario_contenedor_horario_cuerpo_datos").style.width = (RANGO_DIAS*cuarto_hora_ancho+70+cambio)+"px";
		document.getElementById("p_00995_horario_contenedor_clases").style.marginTop="-"+cuadricula_alto-1+"px";
				
		//PINTAR CUADRICULA
		var c = document.getElementById("p_00995_horario_contenido_cuadricula");
		var ctx = c.getContext("2d");
		
		for(i in cuadricula_canvas){
			cont_i=0;
			for(j in cuadricula_canvas[i]){
				cuadro=cuadricula_canvas[i][j];
				if(cont_i%2==0||cuadro[3]==cuarto_hora_separador_alto){	
					ctx.beginPath(cuadro[0],1+cuadro[2],cuadro[1],cuadro[3]);
					if(cuadro[3]==cuarto_hora_separador_alto)
						ctx.fillStyle = "#ddd";
					else
					ctx.fillStyle = "#f4f4f4";
					ctx.fillRect(cuadro[0],1+cuadro[2],cuadro[1],cuadro[3]);
					ctx.stroke();
				}
				ctx.beginPath();
				if(cuadro[3]==cuarto_hora_separador_alto){
					ctx.strokeStyle = "#eee";
					cont_i--;
				}else
					ctx.strokeStyle = "#ddd";
				ctx.rect(cuadro[0],1+cuadro[2],0,cuadro[3]);
				ctx.stroke();
				cont_i++;
			}
		}
	}
	
////////////////////////////PRIMERA LLAMADA A HORARIO
	function set_horario(){
		document.getElementById("contenedor").style.height=window.innerHeight+"px";
		document.getElementById("horario").style.cursor="progress";
		horario_pintar();
		////////DBB
		horario_datos="";
		alumno_id="24002";//reservadas no liberables (peke)
		alumno_id="28285";//
		alumno_id="31537";//tocho (tomas)
		iframe_datos=document.createElement("iframe");
		iframe_datos.style.display="none";
		
		//CONSULTA CROS DOMINE
		iframe_datos.setAttribute("src","https://app.oxbridge.es/app/p_00996_horario_datos.php");
		//--------------/
		
		document.body.appendChild(iframe_datos);
		//document.getElementById("p_00958_horario_header_act").setAttribute("onclick","");
	}		
	
/////////////////////////////////////////////////RESERVAR/LIBERAR CAPSULA
	function horario_capsula(id_capsula,accion,variable){
		id_capsula_rl=id_capsula;
		horario_formulario_variable=variable;
		//imprimir pregunta
		if(accion.slice(0,1)=="Q"){
			e_capsula=document.getElementById("p_00995_horario_contenido_clases_"+id_capsula_rl);
			capsula=horario_datos[id_capsula_rl];
			
			//html_infotmacion
			html_infotmacion="<br>"+week[capsula.dia_semana+1]+" "+capsula.fecha+" "+capsula.hora_inicio+
								"<br>"+TEXTOS[11].text+" "+capsula.minutos+"'";
								if(capsula.especializacion!="General"){
									html_infotmacion=html_infotmacion+"<br>"+TEXTOS[12].text+" "+capsula.especializacion;
								}
								html_infotmacion=html_infotmacion+"<br>"+TEXTOS[13].text+" "+capsula.tipo_clase;
								if(capsula.tipo_clase=="presencial"){
									html_infotmacion=html_infotmacion+"<br>"+TEXTOS[14].TEXT+" "+capsula.localizacion	+
									"<br>"+capsula.direccion+" "+capsula.numero+
									"<br>"+capsula.poblacion;
								}
			
			//html_botones
			html_botones="<button onClick=\"horario_capsula('"+id_capsula_rl+"','"+accion.slice(-1)+"','variable');\">"+TEXTOS[6].text+"</button>";
			if(capsula.condiciones_alumno_en_parrilla_seleccionar=="1")
				html_botones=html_botones+"<button onClick=\"horario_capsula('"+id_capsula_rl+"','"+accion.slice(-1)+"','fija');\">"+TEXTOS[7].text+"</button>";
			html_botones=html_botones+"<button onClick='cerrar_over_all();'>"+TEXTOS[8].text+"</button>";
			
			//html_liberar/reservar
			html_reservar="<h2>"+TEXTOS[5].text+"</h2>"+html_infotmacion+"<br><br>"+html_botones;
			html_liberar="<h2>"+TEXTOS[9].text+"</h2>"+html_infotmacion+"<br><br>"+html_botones;
		}else{
			html_iframe="<iframe style='display:none;height:0px;width:0px;position:fixed;' src="+
			"'./p_00997_horario_reservar_liberar.php'>";
		}
		
		switch(accion){
			case "QR":{
					over_all("<div id='p_00995_horario_contenido_clases_qwest'>"+html_reservar+"</div>");
					break;}		
			case "QL":{
					over_all("<div id='p_00995_horario_contenido_clases_qwest'>"+html_liberar+"</div>");
					break;}
			case "L":{
					horario_formulario_click=true;
					document.body.insertAdjacentHTML("beforeEnd",html_iframe);
					cerrar_over_all();
					break;}
			case "R":{
					horario_formulario_click=true;
					document.body.insertAdjacentHTML("beforeEnd",html_iframe);
					cerrar_over_all();
					break;}
			default:break;
		}
	}
	
/////////////////////////////CREAR CAJAS DE CLASES
	//filtros
	PUNTERO=new Object();
	puntero_nombre=[];
	TIPO=new Object();//{"presencial":[],"web":[],"skype":[],"telefono":[],"cafe":[]};
	TEMARIO=new Object();
	puntero_color=[];
	
	function crear_cajas(){
		var cajas_clases=document.getElementById("p_00995_horario_contenedor_clases");
		var clases=[];
		puntero_color=[];
		puntero_color_contador=0;
		
		for(i in horario_datos){
			capsula=horario_datos[i];
			
		//////DEFINICION DE FILTROS
			//PUNTEROS
			if(capsula.tipo_clase=="presencial"){
				if(typeof PUNTERO[capsula.empresa_id] == 'undefined')
					PUNTERO[capsula.empresa_id]=[];
					puntero_nombre[capsula.empresa_id]=capsula.localizacion;
				PUNTERO[capsula.empresa_id].push(capsula.dia_lectivo_id);
				if(typeof puntero_color[capsula.empresa_id] == 'undefined'){
					puntero_color[capsula.empresa_id]=COLOR[puntero_color_contador];
					puntero_color_contador++;
				}
			}
			
			//TIPO
			//eliminar tipos tefl
			if(capsula.tipo_clase.slice(0,4)!="tefl"){
				if(capsula.tipo_clase=="presencial"){//si es precencial-bar agragar a filtro cafe
					if(capsula.parrilla_tipo=="bar"){
						if(typeof TIPO["cafe"]=='undefined')
							TIPO["cafe"]=[];
						TIPO["cafe"].push(capsula.dia_lectivo_id);
					}else{
						if(typeof TIPO["presencial"]=='undefined')
							TIPO["presencial"]=[];
						TIPO["presencial"].push(capsula.dia_lectivo_id);
					}
				}else{
					if(typeof TIPO[capsula.tipo_clase]=='undefined')
						TIPO[capsula.tipo_clase]=[];
					TIPO[capsula.tipo_clase].push(capsula.dia_lectivo_id);
				}
			}
			
			//TEMARIO
			if(typeof TEMARIO[capsula.especializacion] == 'undefined')
				TEMARIO[capsula.especializacion]=[];
			TEMARIO[capsula.especializacion].push(capsula.dia_lectivo_id);
			
			html="";
			//tamaño	alto caja
			caja_tamano = (capsula.cuartos_de_hora/2)*capsula_alto-4;
			caja_margin= (caja_tamano/capsula_alto)*6;
			if(capsula.cuartos_de_hora<3)
				caja_margin=3;
			if(capsula.cuartos_de_hora>3)
				caja_margin=24;
			
			//ajuste posicion vertical
			capsula_hora_i=(capsula.hora_inicio.split(":")[0]*1)+capsula.hora_inicio.split(":")[1];
			capsula_hora_f=(capsula.hora_fin.split(":")[0]*1)+capsula.hora_fin.split(":")[1];
			caja_top=document.getElementById("p_00995_horario_contenedor_horario_horas_"+capsula_hora_i*1).offsetTop;
			
			//posision de fecha
			fecha_s=capsula.fecha_aaaa_mm_dd.split("/");
			id_dia=fecha_s[0]+"_"+numToDate(fecha_s[1])+"_"+numToDate(fecha_s[2]);
			
			///////////////////////////////////////////////////////////////////////////////array ocupacion + cajaleft
			caja_left[capsula.dia_lectivo_id]=caja_left[capsula.dia_lectivo_id]+document.getElementById("p_00995_horario_contenedor_horario_dia_D"+id_dia).offsetLeft*1+22;
			
			//si la capsula esta reservada
			reservada="";
			if(capsula.alumno_tiene_la_capsula=="si")
				reservada="_reservada";
				
			//CAPSULA HISTORICA
			if((
					capsula.alumno_tiene_la_capsula=="si" &&(  
						(""+capsula.hora_inicio.split(":")[0]+capsula.hora_inicio.split(":")[1])*1 <= 
						(""+HORA.split(":")[0]+HORA.split(":")[1])*1 && 
						capsula.fecha==DIA
					)
				) ||
				(
					capsula.alumno_tiene_la_capsula=="no" &&(
						(""+capsula.hora_fin.split(":")[0]+capsula.hora_fin.split(":")[1])*1 <=
						(""+HORA.split(":")[0]+HORA.split(":")[1])*1 && 
						capsula.fecha==DIA
					)
				)
			){
				capsula_historica=true;
			}else{
				capsula_historica=false;
			}
				
			
			//LA CAPSULA ES RESERVALBE?
			if(capsula.repite_temario=="no" &&
				capsula.horario_solapado=="no" &&
				capsula.excede_limite_semanal_o_mensual=="no" &&
				capsula.capsula_completa=="no" &&
				capsula.tipo_dia=="LECTIVO" &&
				capsula.alumno_tiene_la_capsula=="no" &&
				!capsula_historica
				){
				reservable=true;
			}else{
				reservable=false;
			}
			
			//CAPSULA LIVERABLE?
			if(capsula.alumno_tiene_la_capsula=="si" &&
				capsula.alumno_tiene_la_capsula_permitir_liberar=="si" &&
				!capsula_historica
				){
				liberable=true;
			}else{
				liberable=false;
			}
			
			
			html=html+
			
			//FONDO
			"<div class='p_00995_horario_contenido_clases_fondo' "+
				"style='height:"+(caja_tamano*1+4)+"px; "+
				"top:"+caja_top+"px; "+
				"left:"+(caja_left[capsula.dia_lectivo_id])+"px; "+
				"margin-left:-92px;'>"+
			
			//ESTILO DE CAJA
			"<div id='p_00995_horario_contenido_clases_"+capsula.dia_lectivo_id+"' class='p_00995_horario_contenido_clases"+reservada+"'"+
				"style='height:"+caja_tamano+"px;";
			
			//TRANSPARENCIA
			if(!reservable&&capsula.alumno_tiene_la_capsula=="no"||
				(""+HORA.split(":")[0]+HORA.split(":")[1])*1 >=
				(""+capsula.hora_fin.split(":")[0]+capsula.hora_fin.split(":")[1])*1 &&
				DIA==capsula.fecha_aaaa_mm_dd)
				html=html+"opacity:0.25 !important;";
				
			html=html+"' ";
			
			if(reservable||liberable){
				html=html+
				"onMouseOut='horario_animacion_boton(0,"+capsula.dia_lectivo_id+");' "+
				"onMouseOver='horario_animacion_boton(1,"+capsula.dia_lectivo_id+");' ";
				if(reservable){
					html=html+"onclick='horario_capsula("+i+",\"QR\");' ";
				}
				if(liberable){
					html=html+"onclick='horario_capsula("+i+",\"QL\");' ";
				}
			}
			
			html=html+">"+
			
			//TITULO
			"<div class='p_00995_horario_contenido_clases_titulo"+reservada+"'"+
				"style='margin-bottom:"+caja_margin+"px;'><div class='p_00995_horario_contenido_clases_titulo_ticker'>"+
				"<div class='p_00995_horario_contenido_clases_titulo_ticker_hora'>"+capsula.hora_inicio+" - "+capsula.hora_fin+"</div>"+
				"<div class='p_00995_horario_contenido_clases_titulo_ticker_text'>"+TEXTOS[18].text+"</div>"+
				"<div class='p_00995_horario_contenido_clases_titulo_ticker_hora'>"+capsula.hora_inicio+" - "+capsula.hora_fin+"</div>"+
			"</div></div>";
			capsula_icono_tamaño="";
			
			//ICONOS
			if(capsula.tipo_clase=="presencial"){
				if(capsula.parrilla_tipo=="bar"){
					capsula_icono="cafe";
				}else{
					capsula_icono="presencial";
				}
				capsula_icono_color=puntero_color[capsula.empresa_id];
			}else{
				capsula_icono=capsula.tipo_clase;
				if(capsula.alumno_tiene_la_capsula=="si") capsula_icono_color="#FF3799";
				else capsula_icono_color="#2DCEE4";
			}
			
			
			html=html+"<div class='p_00995_horario_contenido_clases_tipo' style='margin-bottom:"+caja_margin+"px;'>"+
				"<img style='"+capsula_icono_tamaño+" background-color:"+capsula_icono_color+";' src='./images/tipo_"+capsula_icono+"3.png'> "+
			"</div>";
			
			//PINTAR BOTON?
			if(reservable){
				//BOTON
				html=html+
				"<div class='p_00995_horario_contenido_clases_boton' style='margin-bottom:"+caja_margin+"px;'>"+
					"<button onclick=''>"+TEXTOS['3'].text+"</button>"+
				"</div>";
			}
			if(liberable){
				//BOTON
				html=html+
				"<div class='p_00995_horario_contenido_clases_boton_reservada' style='margin-bottom:"+caja_margin+"px;'>"+
					"<button onclick=''>"+TEXTOS['4'].text+"</button>"+
				"</div>";
			}
			
			//TEMARIO
			color_texto=""
			if(capsula.alumno_tiene_la_capsula=="si") color_texto="style='color:#FF3799;'";
			
			html=html+
			"<div class='p_00995_horario_contenido_clases_loca' "+color_texto+">"+ 
				capsula.especializacion+
			"</div>";
			
			//FIN DE CAPSULA
			html=html+"</div></div>";
			
			//PINTAR CAJAS
			cajas_clases.insertAdjacentHTML("beforeend",html);
			
		}//fin for horario_datos
		
		////fin definicion de filtros
		HORARIO_FILTROS={"TEMARIO":TEMARIO,"PUNTERO":PUNTERO,"TIPO":TIPO};
		
		//PINTAR FILTROS
		//TIPOS
		aux=0;
		for(i in TIPO)
			aux++;
		//PINTAR SOLO SI HAY MAS DE 1	
		if(aux>1){
			for(i in TIPO){
					
				e_tipo=document.getElementById("p_00958_horario_filtros_tipo");
				e_tipo.insertAdjacentHTML("beforeEnd","<div class=\"p_00958_horario_filtros_tipo_div\""+
					"id=\"p_00958_horario_filtros_tipo_"+i+"\""+
					"onclick=\"horario_filtrar(\'TIPO\',\'"+i.toLowerCase()+"\');\">"+
					"<img src=\"./images/tipo_"+i.toLowerCase()+".png\""+
					"class=\"p_00958_horario_filtros_tipo_img\">"+
				"</div>"
				);
			}
		}
		
		//PUNTEROS
		aux=0;
		for(i in PUNTERO)
			aux++;
		//PINTAR SOLO SI HAY MAS DE 1
		if(aux>0){
			contador_color=0;
			for(i in PUNTERO){
				filtro_puntero_icono="presencial";
				for(j in TIPO["cafe"]){
					for(k in PUNTERO[i]){
						if(TIPO["cafe"][j]==PUNTERO[i][k])
							filtro_puntero_icono="cafe";
					}
				}
				heigt_iframe="document.getElementById('p_01000_horario_aula_iframe').style.maxHeight="+
								"document.getElementById('p_00990_over_all_contenedor').offsetHeight-30+'px';";
								
				aula="pb=!1m18!1m12!1m3!1d2993.5677061916035!2d2.1386629999999998!3d41."+
						"383475999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4987db6e9b2"+
						"c3%3A0x961727b52ed37841!2sOxbridge!5e0!3m2!1ses!2ses!4v1434367430493";
						
				aula="'<iframe id=p_01000_horario_aula_iframe src=https://www.google.com/maps/embed?"+aula+"></iframe>'";
				
				document.getElementById("p_00958_horario_header_punteros").style.display="inline-block";
				document.getElementById("p_00958_horario_header_punteros").insertAdjacentHTML("beforeend",
				"<div class='p_00958_horario_header_punteros_div' id='p_00958_horario_filtros_puntero_"+i+
					"' onclick=\"horario_filtrar('puntero','"+i+"');\">"+
					"<img class='p_00958_horario_header_punteros_div_img' style='background-color:"+puntero_color[i]+";' src='./images/tipo_"+filtro_puntero_icono+".png'>"+
					"<span>"+puntero_nombre[i]+"</span>"+
					"<div class='p_00958_horario_header_punteros_div_hover'>"+
						"<span>"+TEXTOS[21].text+"</span><br>"+
						"<a href='#'"+
						"onclick=\"horario_filtrar('puntero','"+i+"');"+
						"over_all("+aula+");"+
						heigt_iframe+"\""+
						"><img src='./images/ver_mapa.png'></a>"+
					"</div>"+
				"</div>");
			}
		}
		
		//TEMARIO
		aux=0;
		for(i in TEMARIO)
			aux++;
		//PINTAR SOLO SI HAY MAS DE 1
		if(aux>1){
			e_temario=document.getElementById("p_00958_horario_filtros_temario");
			e_temario.style.display="inline";
			html_select="<div id='p_00958_horario_filtros_temario_span'>"+TEXTOS[19].text+"</div>"+
				"<button id='p_00958_horario_filtros_temario_select'"+
				"onclick=\"ocultar_mostrar('p_00958_horario_filtros_temario_select_options');"+
				"ocultar_mostrar('p_00958_horario_filtros_temario_out');\">V"+
				"<div id='p_00958_horario_filtros_temario_select_options'>";
				
				html_select=html_select+
					"<div class='p_00958_horario_filtros_temario_select_options_op' id='p_00958_horario_filtros_temario_todos'"+
					"onclick=\"horario_filtrar('TEMARIO','todos');\">"+
					"<span class='p_00958_horario_filtros_temario_select_options_op_span'>"+TEXTOS[19].text+"</span></div>";
				
			for(i in TEMARIO){
				html_select=html_select+
					"<div class='p_00958_horario_filtros_temario_select_options_op' id='p_00958_horario_filtros_temario_"+i.toLowerCase()+"'"+
					"onclick=\"horario_filtrar('TEMARIO','"+i+"');\">"+
					"<span class='p_00958_horario_filtros_temario_select_options_op_span'>"+i+"</span></div>";
			}
			
			html_select=html_select+"</button></div>"+
			//div clickout
			"<div id='p_00958_horario_filtros_temario_out'"+
			"onclick=\"ocultar_mostrar('p_00958_horario_filtros_temario_out');"+
			"ocultar_mostrar('p_00958_horario_filtros_temario_select_options')\"></div>"

			e_temario.innerHTML=html_select;
			
		}
	}
	
////////////////////////////GIF CARGANDO/CARGADO
	function horario_load(estado){
		if(typeof estado=="undefined")
			estado=1;
		
		if(estado==1){//estado CARGADO
			//
			//document.getElementById("p_00958_horario_header_act_div").style.backgroundImage="url(images/recarga.png)";
			//document.getElementById("p_00958_horario_header_act").style.display="inline";
			//document.getElementById("p_00958_horario_header_act").setAttribute("onclick","set_horario();");
			document.getElementById("horario").style.cursor="inherit";
			document.getElementById("p_00958_horario_cargando").style.display="none";
			
			e_nivel=document.getElementById("p_00995_horario_contenedor_horario_nivel");
			e_nivel.innerHTML = TEXTOS['2'].text+" <span>"+horario_datos[0].abreviatura_nivel+"</span>";
			
			//ajusta rel tamaño del horario al alto de la pantalla
			contenedor_alto_max=document.getElementById("p_00995_horario_contenido_cuadricula").offsetHeight+82;
			contenedor_alto_min=349;
			contenedor_alto_pagina=window.innerHeight-145;
			if(contenedor_alto_pagina>contenedor_alto_min)
				contenedor_alto=contenedor_alto_pagina;
			else
				contenedor_alto=contenedor_alto_min;
			
			document.getElementById('p_00958_horario_contenedor_horario').style.height=contenedor_alto+"px";
			
			//alto para lineas de mes
			for(i=0;i<RANGO_DIAS;i++){
				if(document.getElementById("p_00995_horario_contenedor_horario_linea_"+i)){
					document.getElementById("p_00995_horario_contenedor_horario_linea_"+i).style.height=""+
						(document.getElementById("p_00958_horario_contenedor_horario").offsetHeight-20)+"px";
					document.getElementById("p_00995_horario_contenedor_horario_linea_"+i).style.maxHeight=""+
						(document.getElementById("p_00995_horario_contenido_cuadricula").offsetHeight+20)+"px";
				}
			}
			
		}else{//estado CARGANDO...
			borrar=document.getElementById("p_00958_horario_contenedor_horario");
			borrar.parentNode.removeChild(borrar);
			document.getElementById("horario").style.cursor="progress";
			//document.getElementById("p_00958_horario_header_act").style.display="none";
			//document.getElementById("p_00958_horario_header_act_div").style.backgroundImage="url(images/recarga2.gif)";
			//document.getElementById("p_00958_horario_header_act").setAttribute("onclick","");
			document.getElementById("p_00958_horario_cargando").style.display="inline";
		}
	}
	
//////////////////////////////////////////FILTRAR CAPSULAS
	function horario_filtrar(tipo,filtro){
		e_filtro=document.getElementById("p_00958_horario_filtros_"+tipo.toLowerCase()+"_"+filtro.toLowerCase())
		
		if(e_filtro.style.opacity!=0.25&&tipo!="TEMARIO"){
			e_filtro.style.opacity=0.25;
			if(tipo=="TIPO") e_filtro.childNodes[0].style.backgroundColor="#000";
		}else{
			e_filtro.style.opacity=1;
			if(tipo=="TIPO") e_filtro.childNodes[0].style.backgroundColor="#2DCEE4";
		}
		
		//mostrar todos
		for(i in horario_datos){
			document.getElementById("p_00995_horario_contenido_clases_"+horario_datos[i].dia_lectivo_id).style.opacity=1;
		}
		
		//mostrar todos lostemarios
		if(tipo=="TEMARIO"){
			ocultar_mostrar("p_00958_horario_filtros_temario_out");
			ocultar_mostrar("p_00958_horario_filtros_temario_select_options");
			document.getElementById("p_00958_horario_filtros_temario_span").innerHTML=filtro
			if(filtro=="todos"){
				document.getElementById("p_00958_horario_filtros_temario_span").innerHTML="Todos los temarios"
				for(i in HORARIO_FILTROS["TEMARIO"])
					document.getElementById("p_00958_horario_filtros_temario_"+i.toLowerCase()).style.opacity=1;
			}else{
				document.getElementById("p_00958_horario_filtros_temario_todos").style.opacity=1;
				for(i in HORARIO_FILTROS["TEMARIO"]){
					if(i!=filtro){
						document.getElementById("p_00958_horario_filtros_temario_"+i.toLowerCase()).style.opacity=0.25;
					}
				}
			}
		}
		
		//ocultar filtros activados
		for(j in HORARIO_FILTROS){
			for(k in HORARIO_FILTROS[j]){
				//si el filtro esta seleccionado
				if(document.getElementById("p_00958_horario_filtros_"+j.toLowerCase()+"_"+k.toLowerCase())){
					if(document.getElementById("p_00958_horario_filtros_"+j.toLowerCase()+"_"+k.toLowerCase()).style.opacity==0.25){
						for(l in HORARIO_FILTROS[j][k]){
							//ocultar capsula
							document.getElementById("p_00995_horario_contenido_clases_"+HORARIO_FILTROS[j][k][l]).style.opacity=0.25;
						}
					}
				}
			}
		}
	}
	
	//formulario de pedir mas horarios
	function html_boton_mas_horario(){
		over_all(''+
			'<form method="POST" action="#">'+
				p_01001_html_input_rango_doble+
			'	<input type="text"><br>'+
			'	<input type="text"><br>'+
			'	<textarea rows="4" cols="50">'+
			'		'+
			'	</textarea><br>'+
			'	<input type="submit">'+
			'</form>'
		);
	
	}
	
	function horario_pintar(){
		
			
		
		
			document.getElementById("horario").innerHTML=""+
				'<img id="p_00958_horario_cargando" src="https://app.oxbridge.es/app/images/loading.png">'+
				
				'<div id="p_00958_horario_header_filtros">'+
				
				'	<!--HORA-->'+
				'	<div id="p_00958_horario_header_hora">'+
				'	</div><div id="p_00958_horario_header_hora_separador" style="height:30px;"></div>'+
				
				'	<!--TELEFONOS DE CONTACTO-->'+
				'	<div id="p_00958_horario_header_filtros_telefonos">'+
				'		<img  id="p_00958_horario_header_fijo" src="./images/Schedule/imagenes/telefono.png"><span> 999 999 999 </span>'+
				'		<img  id="p_00958_horario_header_movil" src="./images/Schedule/imagenes/movil.png"><span> 666 666 666 </span>'+
				'	</div>'+
					
				'	<!--FILTROS-->'+
				'	<div id="p_00958_horario_filtros_tipo">'+
				'		<!--PINTAR TIPOS-->'+
				'	</div>'+
				'		<div id="p_00958_horario_filtros_temario">'+
				'		<!--PINTAR FILTROS TEMARIO-->'+
				'	</div>'+
				'		<div id="p_00958_horario_header_punteros">'+
				'		<!--PINTAR PUNTEROS-->'+
				'	</div>'+
						
				'</div>'+
				
				'<div id="p_00958_horario_header_botones">'+
				'	<div>'+
				//'		<button id="p_00958_horario_header_act" onclick="set_horario();"><div id="p_00958_horario_header_act_div"></div></button>'+
				'		<button id="p_00958_horario_header_punteros_mas" onclick="html_boton_mas_horario();">'+TEXTOS['1'].text+'</button>'+
				'	</div>'+
				'</div>'+
				
				'<div id="p_00958_horario_contenedor_horario" onscroll="anti_scroll_horario()">'+
				'<div id="p_00995_horario_contenedor_horario_nivel"><!--IMRPIMIR NIVEL/LOAD--></div>'+
				'<div id="p_00958_horario_contenedor_horario_dias"><!--PINTAR DIAS--></div>'+
				'<div id="p_00958_horario_contenedor_horario_cuerpo_datos"><!--PINTAR CAJAS--></div>';

	}
	//ajustar tamaños filtros
	function horario_filtro_width(){
		if(document.getElementById("p_00958_horario_header_filtros")){
			w=document.getElementById("contenedor").offsetWidth;
			document.getElementById("p_00958_horario_header_filtros").style.width=(w-457)+"px";
		}
	}
	//horario_filtro_width();
	
	//LINEA QUE MARCA LA HORA Y EL DIA
	function linea_reloj(set_intervalo){
	
		if(set_intervalo){
			setTimeout(function(){
				linea_reloj(0);
				setInterval(function(){linea_reloj(0);},60000);
			},1000*(60-new Date().getSeconds()));
		}else{
			DATE_CLI=new Date(DATE_CLI.getFullYear(),DATE_CLI.getMonth(),DATE_CLI.getDate(),DATE_CLI.getHours(),DATE_CLI.getMinutes()*1+1);
		}
		
		//ACTUALIZAR RELOJ
		meridiano="AM";
		hora_imprimir_m=DATE_CLI.getHours();
		if(DATE_CLI.getHours()>=12){
			meridiano="PM";
		}
		document.getElementById("p_00958_horario_header_hora").innerHTML=hora_imprimir_m+"<span class='parpadea'>:</span>"+
		numToDate(DATE_CLI.getMinutes())+"<span id='p_00958_horario_header_hora_m'> "+meridiano+"</span>";
		
		
		if(document.getElementById("p_00995_horario_contenedor_horario_dia_D"+
		DATE_CLI.getFullYear()+"_"+numToDate(DATE_CLI.getMonth()+1)+"_"+numToDate(DATE_CLI.getDate()))){
			
			e_hoy=document.getElementById("p_00995_horario_contenedor_horario_dia_D"+
			DATE_CLI.getFullYear()+"_"+numToDate(DATE_CLI.getMonth()+1)+"_"+numToDate(DATE_CLI.getDate()));
			
			if(!document.getElementById("p_00995_horario_reloj_linea")){
					document.getElementById("p_00995_horario_contenedor_clases").insertAdjacentHTML("beforeend","<div id='p_00995_horario_reloj_linea'></div>");
			}
			e_linea=document.getElementById("p_00995_horario_reloj_linea");
			
			minuto_para_buscar=numToDate(parseInt(DATE_CLI.getMinutes()/15)*15);
			minuto_para_buscar=DATE_CLI.getHours()+""+minuto_para_buscar;
			minutos_reales=DATE_CLI.getHours()+""+numToDate(DATE_CLI.getMinutes());
			
			
			if(document.getElementById("p_00995_horario_contenedor_horario_horas_"+minuto_para_buscar)){
				e_hora=document.getElementById("p_00995_horario_contenedor_horario_horas_"+minuto_para_buscar);
				posicion_hora=minuto_para_buscar;
			}else{
				if(minuto_para_buscar*1<horas_mostradas[0]*1){
					posicion_hora=-1;
					e_hora=document.getElementById("p_00995_horario_contenedor_horario_horas_"+horas_mostradas[0]);
				}else if(minuto_para_buscar*1>horas_mostradas[(horas_mostradas.length*1-1)]*1){
					posicion_hora=-2;
					e_hora=document.getElementById("p_00995_horario_contenedor_horario_horas_"+horas_mostradas[(horas_mostradas.length*1-1)]);
				}else{
					for(i in horas_mostradas){
						if(horas_mostradas[i]!=horas_mostradas[horas_mostradas.length-1]){
							if(minuto_para_buscar>horas_mostradas[i]&&minuto_para_buscar<horas_mostradas[(i*1+1)]){
								e_hora=document.getElementById("p_00995_horario_contenedor_horario_horas_"+horas_mostradas[i]);
								posicion_hora=horas_mostradas[i];
							}
						}
					}
				}
			}
			if(posicion_hora==-1){
					posicion_hora=0;
			}else if(posicion_hora==-2){
					posicion_hora=e_hora.offsetHeight;
			}else{
				for(i in horas_mostradas){
					if(horas_mostradas[i]==posicion_hora){
						minutos_reales=minutos_reales-posicion_hora;
						posicion_hora=horas_mostradas[(i*1+1)]-posicion_hora;
						posicion_hora=((e_hora.offsetHeight/posicion_hora)*minutos_reales)-1;
					}
				}
			}
			e_linea.style.width=e_hoy.offsetWidth+"px";
			e_linea.style.marginLeft=e_hoy.offsetLeft+"px";
			e_linea.style.top=(e_hora.offsetTop-2)+posicion_hora+"px";
		}
	}
	
	//ORDENES DESPUES DE LA CONSULTA
	DIBUJAR_HORARIO=false;
	function dibujar_horario(){
		if(DIBUJAR_HORARIO&&'none'!=document.getElementById("horario").style.display){
			horario_filtro_width();
			carga_horario();
			parent.crear_cajas();
			parent.horario_load();
			linea_reloj(1);
			DIBUJAR_HORARIO=false;
		}
	}
	
	//animacion para mostrar botones
	function horario_animacion_boton(estado,id){
		if(estado){
			e=document.getElementById("p_00995_horario_contenido_clases_"+id);
			e.childNodes[1].style.transform="scaleX(0)";
			e.childNodes[1].style.mozTransform="scaleX(0)";
			e.childNodes[1].style.webkitTransform="scaleX(0)";
			e.childNodes[1].style.left=((capsula_ancho-4)/2)+"px";
			
			e.childNodes[2].style.transform="scaleX(1)";
			e.childNodes[2].style.mozTransform="scaleX(1)";
			e.childNodes[2].style.webkitTransform="scaleX(1)";
			e.childNodes[2].style.left="0px";
		}else{
			e=document.getElementById("p_00995_horario_contenido_clases_"+id);
			e.childNodes[1].style.transform="scaleX(1)";
			e.childNodes[1].style.mozTransform="scaleX(1)";
			e.childNodes[1].style.webkitTransform="scaleX(1)";
			e.childNodes[1].style.left="0px";
			
			e.childNodes[2].style.transform="scaleX(0)";
			e.childNodes[2].style.mozTransform="scaleX(0)";
			e.childNodes[2].style.webkitTransform="scaleX(0)";
			e.childNodes[2].style.left=((capsula_ancho-4)/2)*-1+"px";
		}
	}
</script>