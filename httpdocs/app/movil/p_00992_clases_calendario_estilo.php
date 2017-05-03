<!--
Pag. ID: 00992
-->

<style>
/*+++++++ESTILOS CALENDARIO*/
			#p_00960_clases_head_calendario{
				display: none;
				position: fixed;
				z-index: 1000;
				width: 75%;
				max-width: 800px;
				height: 75%;
				padding: 0.2em;
				top: 6%;
				/*left: 27%;*/
				/*margin-left: -157px;*/
				font-size: 2em;
				left: 0;
				right: 0;
				margin: auto;

				}
				#p_00960_clases_head_calendario_mes{
					margin-bottom: 10px;
					font-family: HelveticaNeue, Helvetica, Arial, sans-serif;
					font-size: 1em;
					color: #fff;
					letter-spacing: 0px;
					/*font-weight: bold;*/
					text-align: center;
					height: 15%;
					text-transform: uppercase;
					}
				#p_00960_clases_head_calendario_mes_select_mes{
					float: left;
					border: 0px;
					width: 60%;
					height: 50%;
					cursor: pointer;
					font-family: HelveticaNeue, Helvetica, Arial, sans-serif;
					color: #fff;
					letter-spacing: 0px;
					/*font-weight: bold;*/
					text-align: center;
					text-transform: uppercase;
					background-color: rgba(0,0,0,0);
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
					}
				#p_00960_clases_head_calendario_mes_botoni, #p_00960_clases_head_calendario_mes_botond{
					background-color: rgba(0,0,0,0);
					height: 50%;
					width: 20%;
					border-radius: 0px;
					border: 0px;
					font-family: HelveticaNeue, Helvetica, Arial, sans-serif;
					color: #fff;
					/*font-weight: bold;*/
					text-align: center;
					font-size:1em;
					cursor: pointer;
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
					#p_00960_clases_head_calendario_ir_ultima{
						height: 39px;
				    width: 155px;
				    font-size: 16px;
				    margin-bottom: 0;
				    cursor: pointer;
				    text-align: center;
				    color: #98d7f7;
				    padding: 20px 20px 5px;
					}
				#p_00960_clases_head_calendario_contenedor_boxsemana{
					height:10%;
					width:14%;
					float:left;
					font-family: HelveticaNeue, Helvetica, Arial, sans-serif;
						font-size: 14px;
						/*font-weight:bold;*/
						text-align:center;
						color:#fff;
					text-transform:capitalize;
					letter-spacing:0;
					font-size: 1em;
					}
				.p_00960_clases_head_calendario_contenedor_box, .p_00960_clases_head_calendario_contenedor_box, .p_00960_clases_head_calendario_contenedor_dia, .p_00960_clases_head_calendario_contenedor_lectivo, .p_00960_clases_head_calendario_contenedor_fiesta, .p_00960_clases_head_calendario_contenedor_hoy, .p_00960_clases_head_calendario_contenedor_select, .p_00960_clases_head_calendario_contenedor_selecthoy{
					border: solid 2px #ccc;
					float: left;
					height: 10.5%;
					width: 13.5%;
					padding-top: 1%;
					background-color: #fff;
					cursor: default;
					font-family: HelveticaNeue, Helvetica, Arial, sans-serif;
					font-size: 12px;
					text-align: center;
					vertical-align: middle;
					color: #999;
					letter-spacing: 0px;
					font-size: 1em;
					}
				.p_00960_clases_head_calendario_contenedor_box{
					background-color:#fff;
					border-color:#fff;
					opacity:0;
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
			#p_00960_clases_head_calendario_contenedor{
				height:85%;
				width:100%;
				}
			#p_00960_clases_head_calendario_out{
				display:none;
				width:100%;
				height:100%;
				position:fixed;
				top:0px;
				left:0px;
				z-index:1000;
				display:inline;
				background-color: rgba(0,0,0,0.7);
				}
				#p_00960_clases_head_calendario_out_cerrar{
					position:absolute;
					height: 30px;
					width: 30px;
					top: 10px;
					right: 10px;
					background-image:url(<? echo ver_url("images/close.png","src"); ?>);
					background-repeat:no-repeat;
					background-size:100%;
					z-index:9002;
					cursor: pointer;
					}
				#p_00992_cerrar_actividad{
					display: none;
				}
	@media screen and (max-width: 767px) {
		.p_00960_clases_head_calendario_contenedor_dia,.p_00960_clases_head_calendario_contenedor_fiesta,
		.p_00960_clases_head_calendario_contenedor_box,.p_00960_clases_head_calendario_contenedor_hoy,
		.p_00960_clases_head_calendario_contenedor_lectivo{
			font-size: 20px;
			width: 12.6%;
		}
		#p_00960_clases_head_calendario{
			width: 100%;
		}
		#p_00992_cerrar_actividad{
			display: block;
			position:absolute;
			height: 30px;
			width: 30px;
			top: 2px;
			right: 0px;
			background-image:url(<? echo ver_url("images/close.png","src"); ?>);
			background-repeat:no-repeat;
			background-size:100%;
		}
	}
</style>



<script>
//
// CALENDARIO + HORARIO
//


	//SET DIA ACTUAL
	/*ye = new Date(<? echo date('Y,m,d') ?>).getFullYear();
	if(new Date(<? echo date('Y,m,d') ?>).getMonth()<10){mo = "0"+(new Date(<? echo date('Y,m,d') ?>).getMonth()*1+1);}else mo = new Date(<? echo date('Y,m,d') ?>).getMonth()*1+1;
	if(new Date(<? echo date('Y,m,d') ?>).getDate()<10){da = "0"+new Date(<? echo date('Y,m,d') ?>).getDate();}else da = new Date(<? echo date('Y,m,d') ?>).getDate();
	if(new Date(<? echo date('Y,m,d') ?>).getHours()<10){ho = "0"+new Date(<? echo date('Y,m,d') ?>).getHours();}else ho = new Date(<? echo date('Y,m,d') ?>).getHours();
	if(new Date(<? echo date('Y,m,d') ?>).getMinutes()<10){mi = "0"+new Date(<? echo date('Y,m,d') ?>).getMinutes();}else mi = new Date(<? echo date('Y,m,d') ?>).getMinutes();
*/
	ye= new Date().getFullYear();
	mo= ("0" + (new Date().getMonth()+2)).slice(-2);
	//SET VARIABLES DEL CALENDARIO
	mes_tot = mo;
	ano_tot = ye;

	siguiente_clase="";

	//buffer de clases a cargar
	var CLASES_PARA_CARGAR=[];

/////////////////////////////////IMPRIME CALENDARIO/////////////
	function set_calendario(mes,ano,option){
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
			elem.setAttribute("content","telephone=no");

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
			//if(parseInt(i-dia_semana+1)== new Date(<? echo date('Y,m,d') ?>).getDate() && mes_tot*1 == new Date(<? echo date('Y,m,d') ?>).getMonth() && ano_tot == new Date(<? echo date('Y,m,d') ?>).getFullYear())
			if(parseInt(i-dia_semana+1)== new Date().getDate() && mes_tot*1 == new Date().getMonth() && ano_tot == new Date().getFullYear())
				elem.className = "p_00960_clases_head_calendario_contenedor_hoy";
			//PINTA LOS DIAS LECTIVOS INCLUIDA HOY
			for(j in dia_lectivo){
				if(parseInt(i-dia_semana+1)<10){dia_compara = "0"+parseInt(i-dia_semana+1);}else dia_compara = parseInt(i-dia_semana+1);
				//if(dia_lectivo[j].fecha==ano_tot+"/"+mes_tot+"/"+dia_compara){
				if((dia_lectivo[j].date_inicio.getFullYear()==ano_tot)&&(("0" + (dia_lectivo[j].date_inicio.getMonth()+1)).slice(-2)==mes_tot)&&(("0" + dia_lectivo[j].date_inicio.getDate()).slice(-2)==dia_compara)){
					//filtros de dias clicables
					if(dia_lectivo[j].lectivo=="1"){
					if(dia_lectivo[j].historica=="0"||dia_lectivo[j].asistencia=="1"&&dia_lectivo[j].historica=="1"){
						elem.className = "p_00960_clases_head_calendario_contenedor_lectivo";
						elem.setAttribute("onClick",'clases_fecha('+dia_compara+","+mes_tot+","+ano_tot+")");
					}}
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

		//document.getElementById("p_00960_clases_head_horario_imprimir").innerHTML = ac_hor+":"+ac_min;
		document.getElementById("p_00960_clases_contenedor_actividad").style.display = "inline";
		html_actividades = "";
		html_actividades_cabeceras="";
		html_attachmen = "";

		for(i in dia_lectivo){
			if(dia_lectivo[i].fecha==ac_ano+"/"+ac_mes+"/"+ac_dia&&dia_lectivo[i].horaInicio==ac_hor+":"+ac_min){
				DIA_LEC=i;
				p_00992_clase_cargada= i;
				if(document.getElementById("p_00992_clases_head_horario_clase_"+i)){
					actual=document.getElementById("p_00992_clases_head_horario_clase_"+i);
					var padre=actual.parentNode;
					for(j in padre.childNodes){
						if(padre.childNodes[j].nodeType=="1"){
							padre.childNodes[j].className="p_00992_clases_head_horario_clase";
						}
					}
					actual.className="p_00992_clases_head_horario_clase p_00992_clases_head_horario_clase_hora_actual";
				}


				//ROFESOR
				var foto_profe_temp = dia_lectivo[i].foto.replace(/ /g,"%20");
				if (foto_profe_temp==""){
					foto_profe_temp ="<? echo ver_url("images/perfil.png","src"); ?>";
					if( dia_lectivo[i].profesor_sexo=="F")
						foto_profe_temp ="<? echo ver_url("images/perfil_m.png","src"); ?>";
					if( dia_lectivo[i].profesor_sexo=="M")
						foto_profe_temp ="<? echo ver_url("images/perfil_h.png","src"); ?>";
				}
				document.getElementById("p_00960_clases_head_foto").src=foto_profe_temp;
				document.getElementById("p_00960_clases_head_nombre").innerHTML=dia_lectivo[i].profesor.split(" ")[0]+" "+dia_lectivo[i].profesor.split(" ")[1];
				document.getElementById("p_00960_clases_head_id_profesor").innerHTML="<span>C&oacute;digo: "+p_00992_codificar_id_profesor(i)+"</span>";

				mostrar_valoracion(true);

				//FIRMA
				P_00992_mostrar_firma();


				//REPASO E IMPRECION DE TODAS LAS ACTIVIDADES DE ESE DIA
				for(j in dia_lectivo[i].actividad){
					acti=dia_lectivo[i].actividad[j];
					switch(acti.type){
						case "TOPIC":color="#FDFA01";break;
						case "STRUCTURE":color="#4CF103";break;
						case "VOCABULARY":color="#04F7EF";break;
						default: color="#ccc";break;
					}
					var p_00992_titulo_actividad= acti.titulo;
					if(!acti.titulo)
						p_00992_titulo_actividad= acti.type.toUpperCase();

					//ACTIVIDAD
					html_actividades=html_actividades+
					'<div class="p_00992_clases_actividades_actividad" id="p_00992_clases_actividades_actividad_'+i+'-'+j+'"'+
					'	onclick="'+
					'		p_01003_ocultar_mostrar_actividad(\'p_00992_clases_actividades_pestanas_'+i+'_'+j+'\',\'inline-block\');'+
					'		p_01003_mostrar_actividad(\'tar\','+i+','+j+');'+
					'		document.getElementById(\'p_00960_clases_actividades\').style.display=\'none\';'+
					'		document.getElementById(\'p_00992_imprimir\').style.display=\'inline-block\';'+
					'		setTimeout(function(){document.getElementById(\'p_00960_clases_actividades\').style.display=\'inline\';},0);'+
					'		;'+
					'	">'+
					'	<div id="p_00992_clases_actividades_actividad_globo" style="background-color:'+color+';"></div>'+
					'	<div id="p_00992_clases_actividades_actividad_bloque">'+
					'		<span id="p_00992_clases_actividades_actividad_titulo">'+p_00992_titulo_actividad+'</span>'+
					'	</div>'+
					'</div>'+
					'</div>';


					html_actividades_cabeceras=html_actividades_cabeceras+
					'	<div id="p_00992_clases_actividades_pestanas_'+i+'_'+j+'" class="p_00992_clases_actividades_pestanas">'+
					'		<div class="p_00992_clases_actividades_pestanas_box"'+
					'			onclick="'+
					'				p_01003_marcar_enlace_actividad(this);'+
					'				p_01003_mostrar_actividad(\'tar\','+DIA_LEC+','+j+');'+
					'			">'+
					'			<image src="<? echo ver_url("images/target_language.png","src"); ?>"></div>';
					var actividad_contador=0;
					for(k in dia_lectivo[i].actividad[j].attachment){
						actividad_contador++;
						html_actividades_cabeceras=html_actividades_cabeceras+'<div class="p_00992_clases_actividades_pestanas_box"'+
																	'onclick="'+
																	'	p_01003_marcar_enlace_actividad(this);'+
																	'	p_01003_mostrar_actividad(\'att\','+DIA_LEC+','+j+','+k+');'+
																	'">'+
																	'<image src="<? echo ver_url("images/attachment.png","src"); ?>"></div>'+
																	'<span class="p_00992_clases_actividades_box_span">'+actividad_contador+'</span>';
					}
					var enlace_contador=0;
					for(k in dia_lectivo[i].actividad[j].enlace){
						enlace_contador++;
						html_actividades_cabeceras=html_actividades_cabeceras+'<div class="p_00992_clases_actividades_pestanas_box"'+
																	'onclick="'+
																	'	p_01003_marcar_enlace_actividad(this);'+
																	'	p_01003_mostrar_actividad(\'enl\','+DIA_LEC+','+j+','+k+');'+
																	'">'+
																	'<image src="<? echo ver_url("images/enlace.png","src"); ?>"></div>'+
																	'<span class="p_00992_clases_actividades_box_span">'+enlace_contador+'</span>';
					}

					html_actividades_cabeceras=html_actividades_cabeceras+'</div>';
				}
				html_actividades_cabeceras=html_actividades_cabeceras+
				'<div id="p_00992_cerrar_actividad" onClick="p_00992_cerrar_ventana_actividades();"></div>'+
				'<div id="p_00992_imprimir">'+
				'	<div id="p_00992_print_icon" onclick="p_01003_click_impresora();" >'+
				'	</div>'+
				'	<ul id="p_00992_print_icon_ul">'+
				'		<li onclick="p_01003_imprimir_clase();">'+TEXTOS[190].text+'</li>'+
				'		<li onclick="p_01003_imprimir_vocabulario_dia();">'+TEXTOS[191].text+'</li>'+
				' </ul>'
				'</div>';
			}
		}

		if (html_actividades == "")
			html_actividades = '<div id="p_00992_clases_actividades_sinactividad" style="margin-left: 32px;">A&uacute;n no se han asignado actividades</div>';
		document.getElementById("p_00960_clases_actividades_box").innerHTML= html_actividades;
		document.getElementById('p_00960_clases_contenedor_actividad_cabecera').innerHTML= html_actividades_cabeceras;
		document.getElementById('p_00960_clases_contenedor_actividad_contenido').innerHTML="";
		document.getElementById('p_00960_clases_contenedor_actividad_contenido').style.display="none";
		document.getElementById('p_00960_clases_contenedor_actividad_cabecera').style.display="none";


		//MOSTRAR LA #1 ACTIVIDAD DEL DIA_LEC
		imprime_actividad(DIA_LEC,0);
	}



//codificar identificador de profesor
	function p_00992_codificar_id_profesor(p_00992_dia_lectivo){
		var p_00992_id_profesor= parseInt(dia_lectivo[p_00992_dia_lectivo].profesor_id);
		var p_00992_llave = dia_lectivo[p_00992_dia_lectivo].fecha_europa.slice(0,5);
		p_00992_llave= (parseInt(p_00992_llave[0])+parseInt(p_00992_llave[1])+parseInt(p_00992_llave[3])+parseInt(p_00992_llave[4])).toString().slice(-1);

		return (p_00992_id_profesor+(1111*p_00992_llave))*10+parseInt(p_00992_llave);

	}


// fucntion comprobar si hay que mostrar firma
	function P_00992_mostrar_firma(){
		if(document.getElementById("p_00987_boton_firma_pendiente")||document.getElementById("p_00987_boton_firma")){
			document.getElementById("p_00987_boton_firma_pendiente").style.display="none";
			document.getElementById("p_00987_boton_firma").style.display="none";

			if(typeof dia_lectivo[DIA_LEC]!="undefined"){
				if(
					dia_lectivo[DIA_LEC].historica=="0"
					&& DIA!=dia_lectivo[DIA_LEC].fecha
				){
					document.getElementById("p_00987_boton_firma_pendiente").style.display="none";
					document.getElementById("p_00987_boton_firma").style.display="none";
				}else{
					if(dia_lectivo[DIA_LEC].firmado=="1"){
						document.getElementById("p_00987_boton_firma_pendiente").style.display="none";
						//document.getElementById("p_00987_boton_firma").style.display="";
					}else{
						if(parseInt(dia_lectivo[DIA_LEC].incidencia)!=1)
							document.getElementById("p_00987_boton_firma_pendiente").style.display="";
						else
							document.getElementById("p_00987_boton_firma_pendiente").style.display="none";

						document.getElementById("p_00987_boton_firma").style.display="none";
					}
				}
			}
		}
	}


//////IMPRECION DE LA FECHA SELECCIONADA + HORARIO
	function clases_fecha(dia, mes, ano)
	{

		document.getElementById('p_00960_clases_contenedor_actividad_cabecera').style.display = "none" ;
		document.getElementById('p_00960_clases_contenedor_actividad_contenido').style.display = "none" ;
		document.getElementById("p_00960_clases_head").style.cssFloat="left";

		var primera_clase="";

		p_01169_cargar_clase();
		if(!quitar_aviso_reservar_calse_futura){
			quitar_aviso_reservar_calse_futura=true;
			p_00989_quitar_aviso_reservar();
		}

		dia=String(dia);
		mes=String(mes);
		ano=String(ano);
		if(dia.length==1) dia="0"+dia;
		if(mes.length==1){
			mes = "0"+parseInt(mes*1);
		}

		//cargar clases segun la fecha
		for(i in dia_lectivo){
			//if(dia_lectivo[i].fecha==ano+"/"+mes+"/"+dia){
			if((dia_lectivo[i].date_inicio.getFullYear()==parseInt(ano))&&(dia_lectivo[i].date_inicio.getMonth()+1==parseInt(mes))&&(dia_lectivo[i].date_inicio.getDate()==parseInt(dia))){
				if(primera_clase==""){
					cargar_clase(i);
					primera_clase=i;
				}
			}
		}

		fecha = dia+"/"+mes+"/"+ano;

		imprime_horario(dia,mes,ano);

		document.getElementById("p_00960_clases_head_calendario_out").style.display="none";
 		document.getElementById("p_00960_clases_head_calendario").style.display="none";
		document.getElementById("p_00960_clases_head_fecha_imprimir").innerHTML = fecha;
		p_00992_clase_cargada= primera_clase;
	}

//////ANTES DE IMPRIMIR CALENDARIO
	function calendario_imprime()
	{
		calendario = document.getElementById("p_00960_clases_head_calendario");
		ocultar_mostrar("p_00960_clases_head_calendario_out");
 		ocultar_mostrar("p_00960_clases_head_calendario");
	}

/////SET SIGUIENTE CLASE + llamada horario + imprimir calendario
	aviso_reservar_calse_futura=false;
	quitar_aviso_reservar_calse_futura=false;

	function set_siguiente_clase(actualizar){

		if(typeof actualizar == "undefined")actualizar=true;

		var clase_anteriror;
		var siguiente_clase="";
		var aviso_reservar_calse_futura =false;

		//BUSCAR UNA CLACE MARCADA COMO LA SIGUIENTE
		/*for(i in dia_lectivo){
			if(dia_lectivo[i].actividades_solicitadas=="1"){
				siguiente_clase=i;
			}
		}*/

		if(siguiente_clase==""){//BUSCAR LA PRIMERA CLASE FUTURA /*SI NO HAY NUNGUNA MARCADA COMO SIGUIENTE*/
			if(actualizar){
				var clases_futuras=[];
				for(i in dia_lectivo){
					if(dia_lectivo[i].historica=="0"){

						if(siguiente_clase==""){
							siguiente_clase=i;
						}else{
							var nuevo = dia_lectivo[i].fecha.split("/");
							var actual = dia_lectivo[siguiente_clase].fecha.split("/");
							nuevo = ""+nuevo[0]+""+nuevo[1]+""+nuevo[2];
							actual = ""+actual[0]+""+actual[1]+""+actual[2];
							if(nuevo<actual){
								siguiente_clase=i;
							}
						}

					}
				}
				if(siguiente_clase==""){
					aviso_reservar_calse_futura =true;
					//BUSCAR LA ULTIMA CLACE HISTORICA SI NO HAY NINGUNA CLACE FUTURA
					for(i in dia_lectivo){
						if(siguiente_clase==""){
							siguiente_clase=i;
						}else{
							var nuevo = dia_lectivo[i].fecha.split("/");
							var actual = dia_lectivo[siguiente_clase].fecha.split("/");
							nuevo = ""+nuevo[0]+""+nuevo[1]+""+nuevo[2];
							actual = ""+actual[0]+""+actual[1]+""+actual[2];
							if(nuevo>actual){
								siguiente_clase=i;
							}
						}
					}
				}else{
					//siguiente=dia_lectivo[siguiente_clase].fecha.split("/");
					//clases_fecha(siguiente[2],siguiente[1],siguiente[0]);
					clases_fecha(dia_lectivo[siguiente_clase].date_inicio.getDate(),dia_lectivo[siguiente_clase].date_inicio.getMonth()+1,dia_lectivo[siguiente_clase].date_inicio.getFullYear());
					//mes_tot = siguiente[1]*1;
					//ano_tot = siguiente[0]*1;
					mes_tot = dia_lectivo[siguiente_clase].date_inicio.getMonth()+1;
					ano_tot = dia_lectivo[siguiente_clase].date_inicio.getFullYear();
					set_calendario(0,0,0);
				}

				if(siguiente_clase!=""){
					if(quitar_aviso_reservar_calse_futura){
						//siguiente=dia_lectivo[siguiente_clase].fecha.split("/");
						//clases_fecha(siguiente[2],siguiente[1],siguiente[0]);
						clases_fecha(dia_lectivo[siguiente_clase].date_inicio.getDate(),dia_lectivo[siguiente_clase].date_inicio.getMonth()+1,dia_lectivo[siguiente_clase].date_inicio.getFullYear());
						//mes_tot = siguiente[1]*1;
						//ano_tot = siguiente[0]*1;
						mes_tot = dia_lectivo[siguiente_clase].date_inicio.getMonth()+1;
						ano_tot = dia_lectivo[siguiente_clase].date_inicio.getFullYear();
						set_calendario(0,0,0);
					}
				}

			}else{
				mover_menu(true,"p_00987_menu_horario");
			}
		}else{
			//siguiente=dia_lectivo[siguiente_clase].fecha.split("/");
			//clases_fecha(siguiente[2],siguiente[1],siguiente[0]);
			clases_fecha(dia_lectivo[siguiente_clase].date_inicio.getDate(),dia_lectivo[siguiente_clase].date_inicio.getMonth()+1,dia_lectivo[siguiente_clase].date_inicio.getFullYear());
			//mes_tot = siguiente[1]*1;
			//ano_tot = siguiente[0]*1;
			mes_tot = dia_lectivo[siguiente_clase].date_inicio.getMonth()+1;
			ano_tot = dia_lectivo[siguiente_clase].date_inicio.getFullYear();
			set_calendario(0,0,0);
		}

		if(siguiente_clase==""){
			console.log("p_01169_cargar_clase");
			p_01169_cargar_clase();
			p_00989_aviso_reservar(false);
		}else if(aviso_reservar_calse_futura&&!quitar_aviso_reservar_calse_futura){
			p_00989_aviso_reservar(true);
		}else{
			if(document.getElementById("p_00960_clases_head_fecha")) document.getElementById("p_00960_clases_head_fecha").style.display="";
			if(document.getElementById("p_00960_clases_head_info"))	document.getElementById("p_00960_clases_head_info").style.display="";
			if(document.getElementById("p_00960_clases_head_foto"))	document.getElementById("p_00960_clases_head_foto").style.display="";
			if(document.getElementById("p_00960_clases_head_foto_lupa"))	document.getElementById("p_00960_clases_head_foto_lupa").style.display="";
			if(document.getElementById("p_00960_clases_head_info_titulo")) document.getElementById("p_00960_clases_head_info_titulo").style.visibility="";
			if(document.getElementById("p_00960_clases_actividades_titulo")) document.getElementById("p_00960_clases_actividades_titulo").style.visibility="";
			/*if(document.getElementById("p_00987_boton_firma_pendiente")) document.getElementById("p_00987_boton_firma_pendiente").style.display="";*/
			/*if(document.getElementById("p_00987_boton_firma")) document.getElementById("p_00987_boton_firma").style.display="";*/
		}
		//p_00992_clase_cargada= siguiente_clase;
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
			//if(dia_lectivo[i].fecha==ano+"/"+mes+"/"+dia)
			if((dia_lectivo[i].date_inicio.getFullYear()==parseInt(ano))&&(dia_lectivo[i].date_inicio.getMonth()+1==parseInt(mes))&&(dia_lectivo[i].date_inicio.getDate()==parseInt(dia)))
				//horarios.push([dia_lectivo[i].horaInicio,i]);
				horarios.push([("0" + dia_lectivo[i].date_inicio.getHours()).slice(-2)+":"+("0" + dia_lectivo[i].date_inicio.getMinutes()).slice(-2),i]);
		}

		horarios_html="";
		primera_class="p_00992_clases_head_horario_clase_hora_actual";

		for(i in horarios){
			hora= horarios[i][0].split(":")[0];
			minuto= horarios[i][0].split(":")[1];

			horarios_html+="<div id='p_00992_clases_head_horario_clase_"+horarios[i][1]+"' class='p_00992_clases_head_horario_clase "+primera_class+"'"+
				"onclick='"+
				"	cargar_clase("+horarios[i][1]+");'"+
				"	p_01003_marcar_hora(this);"+
				"'>"+
				horarios[i][0]+"</div>";
			primera_class="";
		}
		//imprimir
		div_horas.innerHTML = horarios_html;
		/*actividades(dia,mes,ano,horarios[0].split(":")[0],horarios[0].split(":")[1]);*/
	}

var ESTADO_CARGA_ACTIVIDAD="libre";
var BUFER_CARGA_ACTIVIDADES=[];

////FUNCION DE CARGA CLASES
	function cargar_clase(id_dia){
		if(window.innerWidth<p_00956_ancho_movil)
			p_00992_cerrar_ventana_actividades();
		if(dia_lectivo[id_dia].actividades_cargadas=="1"){
			actividades(
				dia_lectivo[id_dia].fecha.split("/")[2],
				dia_lectivo[id_dia].fecha.split("/")[1],
				dia_lectivo[id_dia].fecha.split("/")[0],
				dia_lectivo[id_dia].horaInicio.split(":")[0],
				dia_lectivo[id_dia].horaInicio.split(":")[1]
			);
			if(1/*dia_lectivo[id_dia].historica=="1"*/)
				document.getElementById("p_00960_clases_head_valoracion").style.visibility="visible";
		}else if(dia_lectivo[id_dia].actividades_solicitadas!="1"){
			dia_lectivo[id_dia].actividades_solicitadas= "1";
			if(ESTADO_CARGA_ACTIVIDAD=="libre"){
				carga_clases_consulta(id_dia);
			}else{
				BUFER_CARGA_ACTIVIDADES.push(id_dia);
			}
		}
	}

////FUNCION DE CONSULTA DE CLASES BDD
	function carga_clases_consulta(id_dia){
		if(dia_lectivo[id_dia].actividades_solicitadas!="1")
		 		dia_lectivo[id_dia].actividades_solicitadas=1;

		if( document.getElementById('p_0001317_input_sesion_id') ){
			var actualizar_clase = document.createElement("iframe");
			actualizar_clase.style.display="none";
			actualizar_clase.setAttribute("id","actualizar_clase");
			var js_url="<? echo ver_url("p_01177_calse_iframe_datos.php","src"); ?>?id_dia="+id_dia+"&curso_clase_ids="+dia_lectivo[id_dia].curso_clase_ids+"&consulta=actividades&alumno_id="+alumno_id;
			js_url=js_url + "&p_0001326_get_sesion_id="+document.getElementById('p_0001317_input_sesion_id').value;
			js_url=js_url + "&p_0001326_get_sesion_uid="+document.getElementById('p_0001317_input_usuario_id').value;
			js_url=js_url + "&p_0001326_get_area_id="+document.getElementById('p_0001317_input_area_id').value;
			js_url=js_url + "&p_0001326_get_disparador_js=window.parent.carga_clases_consulta("+id_dia+")";
			actualizar_clase.src=js_url;
			document.body.appendChild(actualizar_clase);
			ESTADO_CARGA_ACTIVIDAD="ocupado";
		}else{
			setTimeout(
			function()
			{
		        carga_clases_consulta(id_dia);
		    }
			,1000);
		};
	}

////FUNCION DE CONSULTA DE CLASES BDD CARGADA
	function cargar_clase_cargada(id_dia){
		dia_lectivo[id_dia].actividades_cargadas="1";
		var siguiente_clase;
		cargar_subClase_consulta(id_dia);
		borrar = document.getElementById("actualizar_clase");
		borrar.parentNode.removeChild(borrar);
		siguiente_clase = BUFER_CARGA_ACTIVIDADES.pop();
		if(siguiente_clase){
			carga_clases_consulta(siguiente_clase);
		}else{
			ESTADO_CARGA_ACTIVIDAD="libre";
			actividades(
				dia_lectivo[id_dia].fecha.split("/")[2],
				dia_lectivo[id_dia].fecha.split("/")[1],
				dia_lectivo[id_dia].fecha.split("/")[0],
				dia_lectivo[id_dia].horaInicio.split(":")[0],
				dia_lectivo[id_dia].horaInicio.split(":")[1]
			);
		}
	}

////FUNCTION DE CONSULTA DE SUB OBJETOS DE ACTIVIDADES
	function cargar_subClase_consulta(id_dia){
		if( document.getElementById('p_0001317_input_sesion_id') ){
			var actividades_list="";
			for(i in dia_lectivo[id_dia].actividad)actividades_list+=i+"_";
			actividades_list=actividades_list.slice(0, -1);

			var actualizar_clase = document.createElement("iframe");
			actualizar_clase.style.display="none";
			actualizar_clase.setAttribute("id","actualizar_subclase");
			var js_url="<? echo ver_url("p_01177_calse_iframe_datos.php","src"); ?>?id_dia="+id_dia+"&actividades="+actividades_list+"&consulta=subActividades&alumno_id="+alumno_id;
			js_url=js_url + "&p_0001326_get_sesion_id="+document.getElementById('p_0001317_input_sesion_id').value;
			js_url=js_url + "&p_0001326_get_sesion_uid="+document.getElementById('p_0001317_input_usuario_id').value;
			js_url=js_url + "&p_0001326_get_area_id="+document.getElementById('p_0001317_input_area_id').value;
			js_url=js_url + "&p_0001326_get_disparador_js=window.parent.cargar_subClase_consulta("+id_dia+")";
			actualizar_clase.src=js_url

			document.body.appendChild(actualizar_clase);
		}else{
			setTimeout(
			function()
			{
		        cargar_subClase_consulta(id_dia);
		    }
			, 500);
		};
	}

////FUNCTION DE SUB OBJETOS DE ACTIVIDADES CARGADO
	function cargar_subClase_cargada(id_dia){
		borrar = document.getElementById("actualizar_subclase");
		borrar.parentNode.removeChild(borrar);

		actividades(
			dia_lectivo[id_dia].fecha.split("/")[2],
			dia_lectivo[id_dia].fecha.split("/")[1],
			dia_lectivo[id_dia].fecha.split("/")[0],
			dia_lectivo[id_dia].horaInicio.split(":")[0],
			dia_lectivo[id_dia].horaInicio.split(":")[1]
		);
		if(1/*dia_lectivo[id_dia].historica=="1"*/)
			document.getElementById("p_00960_clases_head_valoracion").style.visibility="visible";

		if(aviso_reservar_calse_futura&&!quitar_aviso_reservar_calse_futura)
			p_00989_aviso_reservar();
	}

function p_00992_cerrar_ventana_actividades(){
	document.getElementById('p_00960_clases_contenedor_actividad_contenido').innerHTML="";
	document.getElementById('p_00960_clases_contenedor_actividad').style.display="none";
}

</script>
