<!--
Pag. ID: p_01003
-->
<script>
//DEFINICIONES
var p_01003_SIGUIENTE_CLASE_SET=false;
var escalar_atachment

//////////////////////PINTAR EL MENU DE CLASES
function p_00960_clases_resize(){
	for(i in document.getElementById("p_00960_clases_head_valoracion").childNodes){
		e=document.getElementById("p_00960_clases_head_valoracion").childNodes[i];
		if(e.nodeType==1){
			e.style.width="25px";
			e.style.height="25px";
		}
	}
}

function p_01003_clases_girar(girado){
	if(girado){
		document.getElementById("p_00960_clases_head").style.width="85%";
		document.getElementById("p_00960_clases_head_profe").style.fontSize="3em";
		document.getElementById("p_00960_clases_head_calendario").style.fontSize="2em";
		document.getElementById("p_00960_clases_head_calendario_out_cerrar").style.fontSize="2.4em";
		document.getElementById("p_00960_clases_head_calendario_out_cerrar").style.left="0.4em";
		document.getElementById("p_00960_clases_head_calendario_out_cerrar").style.right="";
		document.getElementById("p_00960_clases_head_calendario_mes").style.height="23%"
		document.getElementById("p_00960_clases_head_profe").style.marginTop="1%";
		/*document.getElementById("p_00960_clases_actividades").style.marginTop="1%";*/
		document.getElementById("p_00960_clases_actividades").style.height="30%";
		document.getElementById("p_00960_clases_head_foto").style.marginTop=0;

		ele=document.getElementById("p_00960_clases_actividades_box");i=0;
		while(ele.childNodes[i]){ if(ele.childNodes[i].nodeType==1) ele.childNodes[i].style.fontSize="0.6em";i++;}

	}else{
		document.getElementById("p_00960_clases_head").style.width="96%";
		document.getElementById("p_00960_clases_head_profe").style.fontSize="4.5em";
		document.getElementById("p_00960_clases_head_calendario").style.fontSize="4em";
		document.getElementById("p_00960_clases_head_calendario_out_cerrar").style.fontSize="4.5em";
		document.getElementById("p_00960_clases_head_calendario_out_cerrar").style.left="";
		document.getElementById("p_00960_clases_head_calendario_out_cerrar").style.right="0.4em";
		document.getElementById("p_00960_clases_head_calendario_mes").style.height="15%"
		document.getElementById("p_00960_clases_head_profe").style.marginTop="1%";
		/*document.getElementById("p_00960_clases_actividades").style.marginTop="8%";*/
		document.getElementById("p_00960_clases_actividades").style.height="30%";
		document.getElementById("p_00960_clases_head_foto").style.marginTop="4%";

		ele=document.getElementById("p_00960_clases_actividades_box");i=0;
		while(ele.childNodes[i]){ if(ele.childNodes[i].nodeType==1) ele.childNodes[i].style.fontSize="1em";i++;}
	}
}

//AVISO DE RESERVA DE CLASES
function p_00989_aviso_reservar(clases_anteriores){
	if(clases_anteriores)
		set_calendario(-1,0,0);

	if(typeof clases_anteriores=="undefined")clases_anteriores=true;

	/*if(document.getElementById("p_00960_clases_head"))	document.getElementById("p_00960_clases_head").style.display="none";*/
	if(document.getElementById("p_00960_clases_head_info"))	document.getElementById("p_00960_clases_head_info").style.display="none";
	if(document.getElementById("p_00960_clases_head_foto"))	document.getElementById("p_00960_clases_head_foto").style.display="none";
	if(document.getElementById("p_00960_clases_actividades_titulo"))	document.getElementById("p_00960_clases_actividades_titulo").style.display="none";
	if(document.getElementById("p_00960_clases_head_foto_lupa"))	document.getElementById("p_00960_clases_head_foto_lupa").style.display="none";

	/*var p_1003_texto_clases_reservadas;
	if(document.getElementById("p_00958_horario_clases_reservadas_capsulas").innerHTML=="")
		p_1003_texto_clases_reservadas= "No tienes clases reservadas";
	else
		p_1003_texto_clases_reservadas= "Clases reservadas";
		*/



	document.getElementById("p_00960_clases_actividades_box").innerHTML=""+
		"<div align='center'>"+
		"	<span style='font-size:1.5em;color:#8C6792;font-family: helveticaneueroman;"+
		"display: block;'>"+TEXTOS[77].text+"</span><br>"+
		"	<div"+
		"		style='"+
		"	height: 65px;"+
		"	width: 65px;"+
		"	background-repeat: no-repeat;"+
		"	background-position: center;"+
		"	background-size: 50%;"+
		"	border-radius: 10px;"+
		" background-color: #768D78;"+
		"background-image: url(<? echo ver_url("images/icono-horario.png","src"); ?>);"+
		"cursor:pointer'"+
		"		onclick='mover_menu(true,\"p_00987_menu_horario\");'"+
		"	></div>"+
		"	<span style='border-bottom:solid #888;color:#888; font-size:18px;cursor:pointer;' onclick='mover_menu(true,\"p_00987_menu_horario\");'>"+TEXTOS[87].text+"</span>"+
		"</div>";

	if(clases_anteriores){
		if(document.getElementById("p_00992_clases_head_horario_clase")){
			document.getElementById("p_00992_clases_head_horario_clase").innerHTML=""+
				"<span style='font-size:1em;' onclick='p_00989_quitar_aviso_reservar(\"mostrar_ultima\");'>"+TEXTOS[80].text+"</span><br><br>";
		}else{
			document.getElementById("p_00960_clases_head_horario").innerHTML=""+
				"<div id='p_00992_clases_head_horario_clase' class='x'>"+
				"	<span onclick='p_00989_quitar_aviso_reservar(\"mostrar_ultima\");document.getElementById(\"p_00960_clases_head\").style.cssFloat=\"left\";'>"+TEXTOS[80].text+"</span>"+
				"</div>";
		}
	}else{
		if(document.getElementById("p_00960_clases_head_fecha"))	document.getElementById("p_00960_clases_head_fecha").style.display="none";
	}
}
function p_00989_quitar_aviso_reservar(set){
	if(typeof set=="undefined")set=true;
	/*if(document.getElementById("p_00960_clases_head")) document.getElementById("p_00960_clases_head").style.display="";*/
	if(document.getElementById("p_00960_clases_head_fecha")) document.getElementById("p_00960_clases_head_fecha").style.display="";
	if(document.getElementById("p_00960_clases_head_info"))	document.getElementById("p_00960_clases_head_info").style.display="";
	if(document.getElementById("p_00960_clases_head_foto"))	document.getElementById("p_00960_clases_head_foto").style.display="";
	if(document.getElementById("p_00960_clases_head_foto_lupa"))	document.getElementById("p_00960_clases_head_foto_lupa").style.display="";
	document.getElementById("p_00960_clases_actividades").style.right="inherit";//initial
	document.getElementById("p_00960_clases_head").style.cssFloat="left";

	quitar_aviso_reservar_calse_futura=true;
	if(set== "mostrar_ultima"){
		set_siguiente_clase();
	}
}


//DESABILITAR EL BLOQUIEO DE GIRO EN ATT

//funcion para mostrar actividad
function p_01003_mostrar_actividad(tipo,d,a,m){
	document.getElementById('p_00960_clases_contenedor_actividad_overall').style.display="block";
	document.getElementById('p_00960_clases_contenedor_actividad_cabecera').style.display = "block" ;
	document.getElementById('p_00960_clases_contenedor_actividad_contenido').style.display = "block" ;
	if(window.innerWidth<p_00956_ancho_movil){
		document.getElementById('clases').style.height = "100%" ;
	}

	if(window.innerWidth<p_00956_ancho_movil){
		document.getElementById('head_oxbridge').style.display="none";
		document.getElementById('contenedor_menu').style.display="none";
		document.getElementById('p_00960_clases_contenedor_actividad_overall').style.height="100vmax";
	}
	var actividades=dia_lectivo[d].actividad[a];
	p_01003_dia_imprimir= d;
	p_01003_actividad_imprimir= a;

	/*cambiar color borde del botón*/
	if(typeof m=='undefined'){
		if((this.p_01003_last_actividad!=undefined)&&(document.getElementById(this.p_01003_last_actividad))){
		//if(this.p_01003_last_actividad){
			document.getElementById(this.p_01003_last_actividad).style.borderColor="#979797";
			document.getElementById(this.p_01003_last_actividad).style.borderWidth="2px";
		}
		this.p_01003_last_actividad= "p_00992_clases_actividades_actividad_"+d+"-"+a;
		document.getElementById(this.p_01003_last_actividad).style.borderColor="#fb57bf";
		document.getElementById(this.p_01003_last_actividad).style.borderWidth="3px";
	}


	/*en el caso de no querer solamente string con vocabulario para imprimir*/
	if(!(tipo=='tar'&& m!=undefined)){
		p_00989_BLOQUEAR_ORIENTACION=false;

		var zoom="<div id='p_01003_zoom_att' style='"+
														"	text-align: right;"+
														"	height: 5em;"+
														"	position: fixed;"+
														"	z-index: 1;"+
														"'>"+
					'	<img style="height:100%;" id="p_01003_zoom_lupa_mas_img" src="<? echo ver_url("images/lupa_mas.png","src"); ?>" onclick="p_01003_escalar_att(\'+\',document.getElementById(\'p_01003_contenedor_actividad\'))">'+
					'	<img style="display:none;height:100%;" id="p_01003_zoom_lupa_menos_img" src="<? echo ver_url("images/lupa_menos.png","src"); ?>" onclick="p_01003_escalar_att(\'-\',document.getElementById(\'p_01003_contenedor_actividad\'))">'+
					"</div>";
	}
	switch(tipo){
		case 'att':{
			if(actividades.attachment[m].html==""){
				document.getElementById("p_00960_clases_contenedor_actividad_contenido").innerHTML=
					'<iframe class="p_01003_enlace_actividad" src="'+actividades.attachment[m].ruta+'"></iframe>';
			}else{
				document.getElementById("p_00960_clases_contenedor_actividad_contenido").innerHTML=
					"<div id='p_01003_contenedor_actividad'>"+actividades.attachment[m].html;
			}
		break;}
		case 'enl':{
			var estilo_youtube="";
			if(actividades.enlace[m].ruta.match(/youtube/g)){
				//estilo_youtube= "style='heigth:auto;width:500px'";
			}
			over_all('<div class="p_00990_over_all_cerrar_video" onclick="p_01003_cerrar_video();document.getElementById(\'p_00990_over_all_cerrar\').style.display=\'\';" style="display: inline;"></div><div id="p_01003_contenedor_video"><iframe class="p_01003_enlace_actividad" src="'+p_01003_corregir_enlace(actividades.enlace[m].ruta)+'"></iframe></div>','rgba(0,0,0,0.7)');
			document.getElementById("p_00990_over_all_cerrar").style.display="none" ;
			document.getElementById('p_00990_over_all_contenedor').style.backgroundColor = "transparent" ;
			document.getElementById('p_00990_over_all_contenedor').style.border = "0px" ;
			if((window.innerWidth<p_00956_ancho_movil)&&(window.innerWidth>window.innerHeight)){
				document.getElementById('p_00990_over_all_contenedor').style.top= "0";
				document.getElementById('p_00990_over_all_contenedor').style.padding="0";
			}

		break;}
		case 'tar':{
			target=actividades.target_language;
			html_target="";
			var max_height= 0;
			for(c in target){
				html_target+=''+
					'<div class="p_00993_clases_contenedor_actividad_target">'+
					'<div id="p_00993_clases_contenedor_actividad_target_titulo"><span style="font-family:HelveticaNeueRoman;font-size:1.5em;text-decoration:none;">'+target[c].titulo+'</span></div>';
				for(d in target[c].sonido)
					html_target+=''+
						'<img class="p_00993_clases_contenedor_actividad_target_son"'+
						'style="display:inline"'+
						'id="p_00993_clases_contenedor_actividad_target_son_'+c+'_'+d+'"'+
						'src="<? echo ver_url("images/audio.png","src"); ?>"'+
						'onclick="'+
						'	ocultar_mostrar(\'p_01003_actividad_reproductor_'+c+'_'+d+'\');'+
						'	ocultar_mostrar(\'p_00993_clases_contenedor_actividad_target_son_'+c+'_'+d+'\');'+
						'	document.getElementById(\'p_01003_actividad_reproductor_'+c+'_'+d+'\').play();'+
						'">'+
						'<audio controls class="p_01003_actividad_reproductor" style="display:none"'+
						'	id="p_01003_actividad_reproductor_'+c+'_'+d+'"'+
						'	src="'+target[c].sonido[d].ruta+'"'+
						'	onended="'+
						'		ocultar_mostrar(\'p_01003_actividad_reproductor_'+c+'_'+d+'\');'+
						'		ocultar_mostrar(\'p_00993_clases_contenedor_actividad_target_son_'+c+'_'+d+'\');'+
						'	"'+
						'></audio>';
				for(d in target[c].imagenes){
					html_target+='<div class="p_00993_clases_contenedor_actividad_target_img"><img src="'+target[c].imagenes[d].ruta+'"></img></div>';
					//si lo vamos a imprimir, precargar primero im�genes
					if(m!=undefined){
						p_01003_contador_imagenes_imprimir++;
						p_01003_array_imagenes_imprimir[c+d]= new Image();
						p_01003_array_imagenes_imprimir[c+d].src = target[c].imagenes[d].ruta;
						p_01003_array_imagenes_imprimir[c+d].onload= function(){
							p_01003_contador_imagenes_imprimir--;
						}
					}
				}
				for(d in target[c].definiciones)
					html_target+='<div id="p_00993_clases_contenedor_actividad_target_text"><span>Definition:</span> '+target[c].definiciones[d]+'</div>';
				for(d in target[c].ejemplos)
					html_target+='<div id="p_00993_clases_contenedor_actividad_target_text"><span>Example:</span> '+target[c].ejemplos[d]+'</div>';
				html_target+='</div>';
			}

			/*solo devuelve string con html de vocabulario del día para imprimir*/
			if(m!=undefined){
				return html_target;
			}

			document.getElementById("p_00960_clases_contenedor_actividad_contenido").innerHTML=html_target;

			if(window.innerWidth>=p_00956_ancho_movil){
				setTimeout(function(){
					p_01003_igualar_altura_contenedores_hijos(document.getElementById("p_00960_clases_contenedor_actividad_contenido"))
				},100);
			}
		break;}
		default:{break;}
	}
	p_01003_calcular_posicion_actividades();
	document.getElementById("p_00960_clases_contenedor_actividad_contenido").scrollTop = 0;
}

if(window.innerWidth<p_00956_ancho_movil)
	window.addEventListener("orientationchange", p_01174_resize_video);

function p_01174_resize_video(){
	if((window.innerWidth<p_00956_ancho_movil)&&(window.innerWidth>window.innerHeight)){
		document.getElementById('p_00990_over_all_contenedor').style.top= "0";
		document.getElementById('p_00990_over_all_contenedor').style.padding="0";
	}
	else{
		document.getElementById('p_00990_over_all_contenedor').style.top= "";
		document.getElementById('p_00990_over_all_contenedor').style.padding="";
	}
}

function p_01003_cerrar_video(){
	if((window.innerWidth<p_00956_ancho_movil)&&(window.innerWidth>window.innerHeight)){
		document.getElementById('p_00990_over_all_contenedor').style.top= "";
		document.getElementById('p_00990_over_all_contenedor').style.padding="";
	}
	cerrar_over_all();
}
window.addEventListener('resize', p_01003_calcular_posicion_actividades);

function p_01003_calcular_posicion_actividades(){
	if(document.getElementById("p_00960_clases_contenedor_actividad_overall")){
		document.getElementById("p_00960_clases_contenedor_actividad_overall").style.marginTop =
		document.getElementById("p_00960_clases_contenedor_actividad_cabecera").offsetHeight+"px";
	}
}

function p_01003_igualar_altura_contenedores_hijos(p_01003_contenedor){

	var p_01003_max_height= 0;
	var p_01003_hijo;
	var p_01003_hijos = p_01003_contenedor.children;
	var p_01003_hijos_cantidad = p_01003_hijos.length;

	for(var i=0; i<p_01003_hijos_cantidad; i++){
		p_01003_hijo = p_01003_hijos[i];
		if(p_01003_hijo.tagName=="DIV"){
			if(p_01003_hijo.offsetHeight>p_01003_max_height){
				p_01003_max_height= p_01003_hijo.offsetHeight;
			}
		}
	}
	for(var i=0; i<p_01003_hijos_cantidad; i++){
		p_01003_hijo = p_01003_hijos[i];
		if(p_01003_hijo.tagName=="DIV")
		{
			p_01003_hijo.style.height=p_01003_max_height+"px";
		} ;
	}
}



function p_01003_click_impresora(){
	if(document.getElementById("p_00992_print_icon_ul").style.display=="block")
		document.getElementById("p_00992_print_icon_ul").style.display="none";
	else
		document.getElementById("p_00992_print_icon_ul").style.display="block";
}



var p_01003_array_imagenes_imprimir=[];
var p_01003_contador_imagenes_imprimir= 0;
var p_01003_maximo_espera_bajada_imagenes= 20;//segundos

function p_01003_imprimir_clase(p_01003_contenido_imprimir){
	var divContents;
	if(p_01003_contenido_imprimir!=undefined)
		divContents= p_01003_contenido_imprimir;
	else{
		divContents= '<div>';
		divContents+='<h2>'+ dia_lectivo[p_01003_dia_imprimir].actividad[p_01003_actividad_imprimir].titulo+'</h2>';
		divContents += document.getElementById("p_00960_clases_contenedor_actividad_contenido").innerHTML;
		divContents+= '</div>';
	}

	var printWindow = window.open('', '', 'height=600,width=800');
	printWindow.document.write('<html><head><title></title>');
	//printWindow.document.write('</head><body  class="p_01003_print_layout">');
	<?
		//extraer estilos
	$p_01003_estilos = file_get_contents(ver_url("movil/p_00993_clases_actividades_estilo.php","src"));
  $p_01003_ini = strpos($p_01003_estilos, '<style>');
  $p_01003_ini += strlen('<style>');
  $p_01003_len = strpos($p_01003_estilos, '</style>', $p_01003_ini) - $p_01003_ini;
  $p_01003_estilos= substr($p_01003_estilos, $p_01003_ini, $p_01003_len);
	$p_01003_estilos= str_replace("\r\n","",$p_01003_estilos);
	$p_01003_estilos= str_replace("\r","",$p_01003_estilos);
	$p_01003_estilos= str_replace("\n","",$p_01003_estilos);
	?>
	var p_01003_estilos= "<style><? echo($p_01003_estilos); ?></style\>";
	printWindow.document.write(p_01003_estilos);
	printWindow.document.write('</head><body  class="p_01003_print_layout">');
	printWindow.document.write(divContents);
	printWindow.document.write('</body></html>');
//	if(typeof p_01003_contenido_imprimir!='undefined'){
		var p_01003_hijo;
		var p_01003_hijos = printWindow.document.body.children;
		var p_01003_hijos_cantidad = p_01003_hijos.length;
	//	for(var i=0; i<p_01003_hijos_cantidad; i++){
			//p_01003_igualar_altura_contenedores_hijos(printWindow.document.body);
		setTimeout(function(){
				for(var i=0; i<p_01003_hijos_cantidad; i++){
					p_01003_igualar_altura_contenedores_hijos(p_01003_hijos[i]);
				}
				p_01003_poner_saltos_pagina(printWindow.document.body);
				printWindow.document.close();
				if(!p_01003_contador_imagenes_imprimir)
					printWindow.print();
				else {
					//p_01003_esperar_bajada_imagenes();
					setTimeout(function(){
						p_01003_esperar_bajada_imagenes(printWindow);
					}	, 1000);
				}

		},100);
	//}

	//printWindow.document.close();

/*	if(!p_01003_contador_imagenes_imprimir){
		printWindow.print();
		//printWindow.close();
	}
	else {
		//p_01003_esperar_bajada_imagenes();
		setTimeout(function(){
			p_01003_esperar_bajada_imagenes(printWindow);
		}	, 1000);
	}
*/
	document.getElementById("p_00992_print_icon_ul").style.display="none";
}


function p_01003_esperar_bajada_imagenes(printWindow){
	//si me pasan una ventana a imprimir, la guardo
	if(typeof printWindow!='undefined')
		this.printWind= printWindow;
	if(typeof this.maximo_espera_bajada_imagenes== 'undefined')
		this.maximo_espera_bajada_imagenes= p_01003_maximo_espera_bajada_imagenes;

	this.maximo_espera_bajada_imagenes--;
	if((this.maximo_espera_bajada_imagenes<=0)||(p_01003_contador_imagenes_imprimir<=0)){
			p_01003_contador_imagenes_imprimir= 0;
			this.maximo_espera_bajada_imagenes= p_01003_maximo_espera_bajada_imagenes;
			this.printWind.print();
			//printWindow.close();
	}
	else{
		setTimeout(function(){
			p_01003_esperar_bajada_imagenes();
		}	, 1000);

	}
}

function p_01003_poner_saltos_pagina(p_01003_printWindowBody){
	var p_01003_altura_pagina= 1800/1.5;//p_01003_printWindowBody.style.height;
	var p_01003_altura_contenido= 0;
	var p_01003_contador_divs= 0;
	var p_01003_hijo;
	var p_01003_hijos;//= p_01003_printWindowBody.children;
	var p_01003_hijos_cantidad;//= p_01003_hijos.length;
	var p_01003_salto_pagina;

	p_01003_altura_pagina= p_01003_printWindowBody.ownerDocument.querySelector(".p_01003_print_layout").offsetHeight;

	for(var j=0; j<p_01003_printWindowBody.children.length; j++){
		p_01003_hijos= p_01003_printWindowBody.children[j].children;
		p_01003_hijos_cantidad= p_01003_hijos.length;
		p_01003_altura_contenido= 0;

		for(var i=0; i<p_01003_hijos_cantidad; i++){
			p_01003_hijo = p_01003_hijos[i];
			if(p_01003_hijo.tagName=="H2"){
				if(j){
					p_01003_salto_pagina= document.createElement("DIV");
					p_01003_salto_pagina.className= "salto_linea_antes";
					p_01003_printWindowBody.children[j].insertBefore(p_01003_salto_pagina, p_01003_printWindowBody.children[j].childNodes[i]);

					//compensar que pusimos un elemento antes
					i++;
					p_01003_hijos_cantidad++;
				}
				p_01003_altura_contenido+= p_01003_hijo.offsetHeight;
				p_01003_contador_divs= 0;
			}
			else{
				/*4 divs por fila*/
				if(p_01003_contador_divs%4==0){
					p_01003_altura_contenido+= p_01003_hijo.offsetHeight;
					if(p_01003_altura_contenido>p_01003_altura_pagina){
							p_01003_salto_pagina= document.createElement("DIV");
							p_01003_salto_pagina.className= "salto_linea_antes";

							p_01003_printWindowBody.children[j].insertBefore(p_01003_salto_pagina, p_01003_printWindowBody.children[j].childNodes[i]);
							p_01003_altura_contenido= 0;
						//compensar que pusimos un elemento antes
						i++;
						p_01003_hijos_cantidad++;
						p_01003_contador_divs= 0;
						p_01003_altura_contenido+=p_01003_hijo.offsetHeight;
					}
				}
				p_01003_contador_divs++;
			}//else
		}
	}
}



function p_01003_imprimir_vocabulario_dia(){
	var p_01003_hijo_id;
	var p_01003_pos_separador;
	var p_01003_dia;
	var p_01003_actividad;
	var p_01003_vocabulario="";
	var p_01003_vocabulario_dia;

	var p_01003_contenedor_cabecera= document.getElementById("p_00960_clases_contenedor_actividad_cabecera");
	var p_1003_long_string_inicio= "p_00992_clases_actividades_pestanas_".length;

	for(var i=0; i<p_01003_contenedor_cabecera.children.length; i++){
		p_01003_hijo_id = p_01003_contenedor_cabecera.children[i].id;
		if(p_01003_hijo_id.indexOf("p_00992_clases_actividades_pestanas_")==0){
			p_01003_pos_separador= parseInt(p_01003_hijo_id.indexOf("_",p_1003_long_string_inicio));
			p_01003_dia= p_01003_hijo_id.substr(p_1003_long_string_inicio, p_01003_pos_separador-p_1003_long_string_inicio);
			p_01003_actividad= p_01003_hijo_id.substr(p_01003_pos_separador+1);

			p_01003_vocabulario_dia= '<div>';
			p_01003_vocabulario_dia+='<h2>'+ dia_lectivo[p_01003_dia].actividad[p_01003_actividad].titulo+'</h2>';
			p_01003_vocabulario_dia+= p_01003_mostrar_actividad('tar',p_01003_dia,p_01003_actividad,'true');
			p_01003_vocabulario_dia+= '</div>';

			p_01003_vocabulario+= p_01003_vocabulario_dia;
		}
	}
	p_01003_imprimir_clase(p_01003_vocabulario);
}

//ocultar_mostrar_actividades
function p_01003_ocultar_mostrar_actividad(ele){
	console.log("p_01003_ocultar_mostrar_actividad");
	for(var i=0; i<document.getElementById("p_00960_clases_contenedor_actividad_cabecera").children.length; i++){
		var hijo = document.getElementById("p_00960_clases_contenedor_actividad_cabecera").children[i];
			if(hijo.style.display!="none")
				hijo.style.display="none";
	}
	document.getElementById('p_00992_cerrar_actividad').style.display="block";
	document.getElementById('p_00960_clases_contenedor_actividad_contenido').style.display="block";
	document.getElementById('p_00960_clases_contenedor_actividad_cabecera').style.display="block";
	document.getElementById(ele).style.display="inline-block";
	p_01003_marcar_enlace_actividad(document.getElementById(ele).children[0]);
}

//zoom foto profesor
function p_01003_zoom_profesor(){
	var foto = document.getElementById("p_00960_clases_head_foto");
	if(!foto.getAttribute("zoom"))
		foto.setAttribute("zoom","0")

	if(foto.getAttribute("zoom")=="1"){
		foto.style.MozTransform="";
		foto.style.WebkitTransform="";
		foto.style.transform="";
		foto.style.borderRadius="100%";
		foto.setAttribute("zoom","0");
		document.getElementById("p_00960_clases_head_foto_lupa").style.display="inline";
		document.getElementById("p_00960_clases_head_id_profesor").style.display="none";
	}else{
		foto.style.MozTransform="scale(3) translate(32%, 45%)";
		foto.style.WebkitTransform="scale(3) translate(32%, 45%)";
		foto.style.transform="scale(3) translate(32%, 45%)";
		foto.style.borderRadius="6%";
		foto.setAttribute("zoom","1");
		document.getElementById("p_00960_clases_head_foto_lupa").style.display="none";
		document.getElementById("p_00960_clases_head_id_profesor").style.display="block";
	}
}


//marcar enlace de actividad recien abierto
function p_01003_marcar_enlace_actividad(ele){
	var padre=ele.parentNode;
	//for(i in padre.childNodes){
	for(var i=0; i<padre.children.length; i++){
		if(padre.children[i].nodeType==1)
		if(typeof padre.children[i].className!='undefined')
		if(padre.children[i].className=='p_00992_clases_actividades_pestanas_box_click'){
			padre.children[i].className="p_00992_clases_actividades_pestanas_box";
			span=padre.children[i];
			span.children[i];
		}
	}
	ele.className='p_00992_clases_actividades_pestanas_box_click';
}

//marcar hora de dia lectivo
function p_01003_marcar_hora(ele){
	var padre=ele.parentNode;
	for(i in padre.childNodes){
		if(padre.childNodes[i].nodeType==1)
		if(typeof padre.childNodes[i].className!='undefined')
		if(padre.childNodes[i].className=='p_00992_clases_head_horario_clase_hora_actual'){
			padre.childNodes[i].className="";
		}
	}
	ele.className='p_00992_clases_head_horario_clase_hora_actual';
}

function p_1003_crear_formulario_valoracion(p_01003_clase){
	var foto_profe_temp = dia_lectivo[p_01003_clase].foto.replace(/ /g,"%20");
	if (foto_profe_temp==""){
		foto_profe_temp ="<? echo ver_url("images/perfil.png","src"); ?>";
		if( dia_lectivo[p_01003_clase].profesor_sexo=="F")
			foto_profe_temp ="<? echo ver_url("images/perfil_m.png","src"); ?>";
		if( dia_lectivo[p_01003_clase].profesor_sexo=="M")
			foto_profe_temp ="<? echo ver_url("images/perfil_h.png","src"); ?>";
	}
	document.getElementById("p_00960_clases_head_foto_valorar").src=foto_profe_temp;
	document.getElementById("p_00960_clases_head_nombre_valorar").innerHTML=dia_lectivo[p_01003_clase].profesor.split(" ")[0]+" "+dia_lectivo[p_01003_clase].profesor.split(" ")[1];
	//	document.getElementById("p_00960_clases_head_fecha_imprimir_valorar").innerHTML= dia_lectivo[p_01003_clase].fecha_europa;
	//	document.getElementById("p_00960_clases_head_horario_valorar").innerHTML=dia_lectivo[p_01003_clase].horaInicio;
	document.getElementById("p_00960_clases_head_fecha_imprimir_valorar").innerHTML= ("0" + dia_lectivo[p_01003_clase].date_inicio.getDate()).slice(-2)+"/"+
									("0" + (dia_lectivo[p_01003_clase].date_inicio.getMonth()+1)).slice(-2)+"/"+
									dia_lectivo[p_01003_clase].date_inicio.getFullYear();
	document.getElementById("p_00960_clases_head_horario_valorar").innerHTML=("0" + dia_lectivo[p_01003_clase].date_inicio.getHours()).slice(-2)+":"+
									("0" + dia_lectivo[p_01003_clase].date_inicio.getMinutes()).slice(-2);



	document.getElementById("p_0001292_input_dia_lectivo_id").value=p_01003_clase;
	document.getElementById("p_0001292_input_alumno_id").value=alumno_id;
	document.getElementById("p_0001292_input_profesor_id").value=dia_lectivo[p_01003_clase].profesor_id;
	document.getElementById("p_0001292_input_dia_lectivo_fecha_dia").value=dia_lectivo[p_01003_clase].fecha.split("/")[2];
	document.getElementById("p_0001292_input_dia_lectivo_fecha_mes").value=dia_lectivo[p_01003_clase].fecha.split("/")[1];
	document.getElementById("p_0001292_input_dia_lectivo_fecha_anyo").value=dia_lectivo[p_01003_clase].fecha.split("/")[0];

	document.getElementById("p_00995_input_form_valoracion_sesion_id").value=document.getElementById('p_0001317_input_sesion_id').value;
	document.getElementById("p_00995_input_form_valoracion_sesion_uid").value=document.getElementById('p_0001317_input_usuario_id').value;
	document.getElementById("p_00995_input_form_valoracion_area_id").value=document.getElementById('p_0001317_input_area_id').value;
	document.getElementById("p_00995_input_form_valoracion_disparador_js").value="window.parent.ocultar_mostrar('p_00995_formulario_valoracion_contenedor');"+
		"window.parent.p_01003_enviar_comentario();";

	if(window.innerWidth<p_00956_ancho_movil){
		document.getElementById("p_0001851_form_valoracion").style.height = "";
		p_00987_esconder_menu_inferior();
	}
	else
		document.getElementById("p_0001851_form_valoracion").style.height = "200px";
	document.getElementById("p_01450_overall_valoracion_inputs").style.display = "none";
	document.querySelector(".p_01450_div_valoracion_dia").style.display = "block";
	document.getElementById("p_01450_div_incidencia").style.display = "none";
	document.getElementById("p_01450_overall_valoracion_semanal_profesor").style.display = "block";
//	document.getElementById("p_0001851_boton_he_asistido").style.display = "none";

	document.getElementById("p_01450_overall_valoracion_semanal").style.display="block";
	p_00994_resize_valoracion();


}

/*guarda en cada clase las horas de inicio y fin en formato Date*/
function p_1003_guardar_horas_inicio_fin_clases(){
	<?
		date_default_timezone_set('Europe/Madrid');
		$p_01003_server_time_zone= round(date(Z)/3600);
	?>

	var p_1003_server_time_zone= "<?echo $p_01003_server_time_zone; ?>";
//	console.log("server time zone: "+p_1003_server_time_zone);
	var p_1003_local_time_zone= new Date().getTimezoneOffset()/60;
//	console.log("local time zone: "+p_1003_local_time_zone);
	var p_1003_diferencia_horaria= -p_1003_server_time_zone-p_1003_local_time_zone;
//	console.log("diferencia horaria: "+p_1003_diferencia_horaria);

	for(i in dia_lectivo){
		p_1003_hora_inicio= new Date(dia_lectivo[i].fecha.split("/")[0],
				dia_lectivo[i].fecha.split("/")[1]-1,
				dia_lectivo[i].fecha.split("/")[2],
				dia_lectivo[i].horaInicio.split(":")[0],
				dia_lectivo[i].horaInicio.split(":")[1]);
		p_1003_hora_inicio.setTime(p_1003_hora_inicio.getTime()+p_1003_diferencia_horaria*3600000);

		p_1003_hora_final= new Date(dia_lectivo[i].fecha.split("/")[0],
				dia_lectivo[i].fecha.split("/")[1]-1,
				dia_lectivo[i].fecha.split("/")[2],
				dia_lectivo[i].horaFinal.split(":")[0],
				dia_lectivo[i].horaFinal.split(":")[1]);
		p_1003_hora_final.setTime(p_1003_hora_final.getTime()+p_1003_diferencia_horaria*3600000);

		dia_lectivo[i].date_inicio= p_1003_hora_inicio;
		dia_lectivo[i].date_final= p_1003_hora_final;


		//testeo monica
	/*	if(i==="369577"){
		//if(i==="372591"){
			dia_lectivo[i].historica= "0";
			dia_lectivo[i].valoracion= "";
			dia_lectivo[i].incidencia= "0";
			dia_lectivo[i].firmado= "0";
			console.log("********");
			//console.log("hora real clase: "+dia_lectivo[i].fecha+" // "+dia_lectivo[i].horaInicio);
			//console.log("hora local clase: "+dia_lectivo[i].date_inicio);
			dia_lectivo[i].date_inicio= new Date (Date.now()+(1.5*60000));
			dia_lectivo[i].date_final= new Date (Date.now()-4*60000);
			//dia_lectivo[i].date_inicio= new Date (Date.now()-22*3600000);
			//dia_lectivo[i].date_final= new Date (Date.now()-22*3600000);
			//dia_lectivo[i].date_final= new Date (Date.now()-2*60000);
			console.log("hora inicio clase: "+dia_lectivo[i].date_inicio);
			console.log("hora final clase: "+dia_lectivo[i].date_final);
			console.log("ahora: "+new Date (Date.now()));
		}*/

		/////////////////////

		p_1003_poner_alarmas_firma_y_valoracion(i);
	}
}

function p_1003_poner_alarmas_firma_y_valoracion(p_1003_dia){

	if(parseInt(dia_lectivo[p_1003_dia].historica)!==1){
		var p_1003_now=new Date ();
		if(p_1003_now<dia_lectivo[p_1003_dia].date_final){
			//pedira firma un minuto antes de clase
			var p_1003_fecha_alarma= new Date (dia_lectivo[p_1003_dia].date_inicio.getTime()-1*60000);
			p_01003_comprobar_alarma(p_1003_fecha_alarma,"p_00989_firmar_antes_clase",p_1003_dia);

			//pedira valoracion 5 min despues clase
			p_1003_fecha_alarma= new Date (dia_lectivo[p_1003_dia].date_final.getTime()+5*60000);
			p_01003_comprobar_alarma(p_1003_fecha_alarma,"p_00994_valorar_final_clase",p_1003_dia);
		}
	}
}

p_00994_valoracion_voluntaria= false;

function p_1003_comprobar_valoraciones_pendientes(){
//testeo
/*	if(typeof this.primera_vez== "undefined"){
		p_1003_maximo_dias_valorar= 1000;
		if(typeof this.primera_vez== "undefined"){
			for(i in dia_lectivo){
					dia_lectivo[i].valoracion="";
					dia_lectivo[i].incidencia=0;
					dia_lectivo[i].asistencia="1";
					this.primera_vez= false;
					break;
			}
		}
		this.primera_vez= false;
	}*/

	if(!p_00994_valoracion_voluntaria){
			//p_1003_maximo_dias_valorar= 28;
			var p_1003_hora_ultimo_dia= 0;
			var p_1003_ultimo_dia= 0;
			var p_1003_dia_clase_variable;
			var p_1003_maximo_dias_valorar_miliseg= p_1003_maximo_dias_valorar*24*3600000;
			var p_1003_ayer= new Date(Date.now()-24*3600*1000);
			p_1003_ayer.setHours(0);
			p_1003_ayer.setMinutes(0);
			p_1003_ayer.setSeconds(0);

			for(i in dia_lectivo){
				if(dia_lectivo[i].date_final.getTime()>p_1003_ayer.getTime()){
					if((dia_lectivo[i].historica=="0")||(parseInt(dia_lectivo[i].incidencia)==1)||(parseInt(dia_lectivo[i].valoracion)>0)){
						continue;
					}
				}
				else {
					if((dia_lectivo[i].historica=="0")||(parseInt(dia_lectivo[i].incidencia)==1)||(parseInt(dia_lectivo[i].valoracion)>0)||(parseInt(dia_lectivo[i].asistencia)==0)){
						continue;
					}
				}

				if(dia_lectivo[i].date_final.getTime()>p_1003_hora_ultimo_dia){
					p_1003_ultimo_dia= i;
					p_1003_hora_ultimo_dia= dia_lectivo[i].date_final.getTime();
				}
			}
			if(p_1003_ultimo_dia){
				if(p_1003_hora_ultimo_dia+p_1003_maximo_dias_valorar_miliseg>Date.now()){
						p_1003_clase_formulario_valorar= p_1003_ultimo_dia;
						document.getElementById("p_01450_overall_valoracion_semanal_profesor").style.display = "block";
						document.getElementById("p_00960_clases_head_flecha_valorar").style.display = "block";
						p_1003_crear_formulario_valoracion(p_1003_ultimo_dia);
						return;
				}
			}

			p_00989_contar_firmas_pendientes();
	}
}

//RELLENAR COMENTARIO
function p_01003_enviar_comentario(){
		//document.getElementById("p_0001292_input_finalizador").value="window.parent.document.getElementById('p_00995_formulario_valoracion_contenedor').style.display='none';";
		//dia_lectivo[DIA_LEC].valoracion_comentario=document.getElementById("p_0001292_input_comentario").value;
		p_01003_enviar_valoracion();
}


//ENVIAR VALORACION PROFESOR
function p_01003_enviar_valoracion(){

	dia_lectivo[p_1003_clase_formulario_valorar].valoracion_comentario = document.getElementById('p_0001292_input_comentario').value ;

	if(document.getElementById("p_01450_input_valoracion_semanal_puntual").checked)
	{
		dia_lectivo[p_1003_clase_formulario_valorar].puntual = "1" ;
	}
	else
	{
		dia_lectivo[p_1003_clase_formulario_valorar].puntual = "0" ;
	} ;

	if(document.getElementById("p_01450_input_valoracion_semanal_preparado").checked)
	{
		dia_lectivo[p_1003_clase_formulario_valorar].preparado = "1" ;
	}
	else
	{
		dia_lectivo[p_1003_clase_formulario_valorar].preparado = "0" ;
	} ;

	if(document.getElementById("p_01450_input_valoracion_semanal_sistema").checked)
	{
		dia_lectivo[p_1003_clase_formulario_valorar].sistema = "1" ;
	}
	else
	{
		dia_lectivo[p_1003_clase_formulario_valorar].sistema = "0" ;
	} ;


	if( document.getElementById('p_0001317_input_sesion_id') )
	{

		document.getElementById("p_0001292_input_finalizador").value= ""+
				"window.parent.document.getElementById(\"p_01450_overall_valoracion_semanal\").style.display=\"none\";"+
				"window.parent.p_1003_comprobar_valoraciones_pendientes();"+
				"window.parent.document.getElementById(\"p_0001851_cargando\").style.display = \"none\";";



		document.getElementById("p_0001292_input_valoracion").value=dia_lectivo[p_1003_clase_formulario_valorar].valoracion;

		if(document.getElementById("p_01450_input_valoracion_semanal_puntual").checked)
		{
			document.getElementById("p_0001292_input_puntual").value= "1" ;
		}
		else
		{
			document.getElementById("p_0001292_input_puntual").value= "0" ;
		} ;

		if(document.getElementById("p_01450_input_valoracion_semanal_preparado").checked)
		{
			document.getElementById("p_0001292_input_preparado").value= "1" ;
		}
		else
		{
			document.getElementById("p_0001292_input_preparado").value= "0" ;
		} ;

		if(document.getElementById("p_01450_input_valoracion_semanal_sistema").checked)
		{
			document.getElementById("p_0001292_input_sistema").value= "1" ;
		}
		else
		{
			document.getElementById("p_0001292_input_sistema").value= "0" ;
		} ;


		var nodo = document.createElement("div");
		nodo.setAttribute("id","p_00995_formulario_mail_res");
		nodo.style.display="none";
		if(!document.getElementById("p_00995_formulario_mail_res"))document.body.appendChild(nodo);

		document.getElementById("p_01450_from_valoracion_semanal").submit();
		document.getElementById("p_01450_input_valoracion_semanal_puntual").checked= true;
		document.getElementById("p_01450_input_valoracion_semanal_preparado").checked= true;
		document.getElementById("p_01450_input_valoracion_semanal_sistema").checked= true;
		document.getElementById("p_0001851_cargando").style.display = "block";
		p_01003_deshacer_estilos_no_asistencia();
		mostrar_valoracion(false,"formulario_valoracion");
		mostrar_valoracion(true);

	}
	else
	{
		setTimeout(
		function()
		{
			p_01003_enviar_valoracion();
		}
		, 500);
	};
	if(window.innerWidth<p_00956_ancho_movil)
		document.getElementById("p_0001851_form_valoracion").style.height = "";
	else
		document.getElementById("p_0001851_form_valoracion").style.height = "200px";
	document.getElementById("p_01450_overall_valoracion_inputs").style.display = "none";
	document.querySelector(".p_01450_div_valoracion_dia").style.display = "block";
	document.getElementById("p_01450_div_incidencia").style.display = "none";
	document.getElementById("p_01450_overall_valoracion_semanal_profesor").style.display = "none";

	if(parseInt(dia_lectivo[p_1003_clase_formulario_valorar].incidencia)!=1){
		if(document.getElementById("p_00987_boton_firma_pendiente"))
			document.getElementById("p_00987_boton_firma_pendiente").style.display = "block";
	}
	else{
		if(document.getElementById("p_00987_boton_firma_pendiente"))
			document.getElementById("p_00987_boton_firma_pendiente").style.display = "none";
	}
	document.getElementById("p_0001851_boton_incidencia").style.width="";
	document.getElementById("p_0001851_boton_incidencia").style.top="";
	if(window.innerWidth<p_00956_ancho_movil)
		setTimeout(p_00987_mostrar_menu_inferior, 800);

}

function p_01003_deshacer_estilos_no_asistencia(){
	var p_01003_anular_no_asistencia_variable_local= document.getElementById("p_01450_overall_valoracion_inputs");
	p_01003_anular_no_asistencia_variable_local.style.border="none";
	p_01003_anular_no_asistencia_variable_local.style.borderRadius= "0";
	p_01003_anular_no_asistencia_variable_local.style.padding="0";
	if(window.innerWidth>=p_00956_ancho_movil)
		p_01003_anular_no_asistencia_variable_local.style.position="initial";
	p_01003_anular_no_asistencia_variable_local.style.width="100%";
	p_01003_anular_no_asistencia_variable_local.style.boxShadow= "none";
	p_01003_anular_no_asistencia_variable_local.style.display= "none";
	document.getElementById("p_01450_div_incidencia").style.display="none";
	document.getElementById("p_0001851_anular").style.display="none";

	//deshacer cambio estilo bot�n enviar
	document.getElementById("p_0001851_enviar").style.backgroundColor="#21aed7";
	document.getElementById("p_0001851_enviar").style.color="white";
	document.getElementById("p_0001851_enviar").value="<? echo $TEXTOS[22][3];?>";
	document.getElementById("p_0001851_enviar").style.width= "150px";

	document.getElementById("p_0001851_form_valoracion").style.border= "2px solid rgb(33, 174, 215)";

	p_00994_resize_valoracion();

}
////CORREGIR ENLACES
function p_01003_corregir_enlace(enlace){

	if(!enlace.match(/http:\/\//)&&!enlace.match(/https:\/\//))
		enlace="https://"+enlace;

	enlace=enlace.replace("watch?v=","embed/")

	return enlace;
}

//ESCALAR ATTACHMENT
var p_01003_escala_att=1;
function p_01003_escalar_att(x,elemento){
	var transform="";
	var trasladar="";

	switch(x){
		case "+":{
				p_01003_escala_att+=0.5;
		break;}
		case "-":{
				p_01003_escala_att-=0.5;
		break;}
		case "0":{
				p_01003_escala_att=0;
		break;}
		default:{
				p_01003_escala_att=0;
		break;}

	}
	if(p_01003_escala_att<1)p_01003_escala_att=1;

	if(p_01003_escala_att!=1){
		document.getElementById("p_01003_zoom_lupa_menos_img").style.display="";
		/*document.getElementById("p_01003_zoom_lupa_0_img").style.display="";*/
	}else{
		document.getElementById("p_01003_zoom_lupa_menos_img").style.display="none";
		/*document.getElementById("p_01003_zoom_lupa_0_img").style.display="none";*/
	}

	trasladar = ( ( (p_01003_escala_att-1) /2) / p_01003_escala_att ) * 100 ;
	transform = "scale("+p_01003_escala_att+") translate("+trasladar+"%,"+trasladar+"%)";

	elemento.style.msTransform=transform;
	elemento.style.mozTransform=transform;
	elemento.style.WebkitTransform=transform;
	elemento.style.transform=transform;
}

//girar imagen para abrir actividad
function p_01003_girar_imagen_abrir(dia_ac){
	if(document.getElementById("p_00992_ocultar_actividad_"+dia_ac)){
		var girar=document.getElementById("p_00992_ocultar_actividad_"+dia_ac);

		var padre=girar.parentNode;
		padre=padre.parentNode;

		for(i in padre.childNodes){
			var hijo=padre.childNodes[i];
			if(hijo.nodeType==1){
				hijo.childNodes[7].style.transform ="";
				hijo.childNodes[7].style.WebkitTransform ="";
				hijo.childNodes[7].style.msTransform ="";
				hijo.childNodes[7].style.mozTransform ="";
			}
		}

		if(typeof girar.style.girado=="undefined")girar.style.girado="";
		if(girar.style.girado==""){
			girar.style.girado=1;
			girar.style.transform ="scale(-1)";
			girar.style.WebkitTransform ="scale(-1)";
			girar.style.msTransform ="scale(-1)";
			girar.style.mozTransform ="scale(-1)";
		}else{
			girar.style.girado="";
			girar.style.transform ="";
			girar.style.WebkitTransform ="";
			girar.style.msTransform ="";
			girar.style.mozTransform ="";
		}
	}
}

//email envio de comentario a profesor
function p_01003_email_envio_comentario_profesor(){

	var p_01003_f_valoracion_comentario = dia_lectivo[p_1003_clase_formulario_valorar].valoracion_comentario
	if( p_01003_f_valoracion_comentario.length > 0)
	{
		p_01003_f_valoracion_comentario = p_01003_f_valoracion_comentario.replace(/\r?\n/g, "<br>");
	};

	if((p_01003_f_valoracion_comentario.length>0)||((parseInt(dia_lectivo[p_1003_clase_formulario_valorar].incidencia)!=1)&&(parseInt(dia_lectivo[p_1003_clase_formulario_valorar].valoracion)<4))){
		var p_01003_mensaje = "" ;
		p_01003_mensaje+= "<html>" ;
		p_01003_mensaje+= "<head>" ;
		p_01003_mensaje+= 	"<meta charset='iso-8859-1'>" ;
		p_01003_mensaje+= "</head>" ;
		p_01003_mensaje+= "<body>" ;
		p_01003_mensaje+= 	"<p>" ;
		if( parseInt(dia_lectivo[p_1003_clase_formulario_valorar].incidencia) == 1 )
			p_01003_mensaje+=	"<span style='font-weight: bold'>Alumno no ha asistido</span><br>" ;
		else{
			p_01003_mensaje+= 		"<span style='font-weight: bold'>" ;
			p_01003_mensaje+= 			"Valoracion: " ;
			if( parseInt(dia_lectivo[p_1003_clase_formulario_valorar].valoracion) < 3 )
			{
				p_01003_mensaje+=	 		"<span style='color: red'>" ;
			}
			else
			{
				p_01003_mensaje+= 			"<span style='color: green'>" ;
			} ;
			p_01003_mensaje+= 				dia_lectivo[p_1003_clase_formulario_valorar].valoracion ;
			p_01003_mensaje+= 			"</span>" ;
			p_01003_mensaje+= 		"</span>" ;
		}
		p_01003_mensaje+= 		"<span>" ;
		p_01003_mensaje+= 			"<br>" ;
		p_01003_mensaje+= 			dia_lectivo[p_1003_clase_formulario_valorar].profesor;
		p_01003_mensaje+= 			" ( "+ dia_lectivo[p_1003_clase_formulario_valorar].profesor_id + " )";
		if( parseInt(dia_lectivo[p_1003_clase_formulario_valorar].incidencia) != 1 ){
			p_01003_mensaje+= 			"<br>" ;
			p_01003_mensaje+= 			"Puntual: " ;
			if( dia_lectivo[p_1003_clase_formulario_valorar].puntual == "1" )
			{
				p_01003_mensaje+= 			"<span style='color: green'>" ;
				p_01003_mensaje+= 				"Si" ;
				p_01003_mensaje+= 			"</span>" ;
			}
			else
			{
				p_01003_mensaje+= 			"<span style='color: red'>" ;
				p_01003_mensaje+= 				"No" ;
				p_01003_mensaje+= 			"</span>" ;
			} ;
			p_01003_mensaje+= 			"<br>" ;
			p_01003_mensaje+= 			"Preparado: " ;
			if( dia_lectivo[p_1003_clase_formulario_valorar].preparado == "1" )
			{
				p_01003_mensaje+= 			"<span style='color: green'>" ;
				p_01003_mensaje+= 				"Si" ;
				p_01003_mensaje+= 			"</span>" ;
			}
			else
			{
				p_01003_mensaje+= 			"<span style='color: red'>" ;
				p_01003_mensaje+= 				"No" ;
				p_01003_mensaje+= 			"</span>" ;
			} ;
			p_01003_mensaje+= 			"<br>" ;
			p_01003_mensaje+= 			"Sistema: " ;
			if( dia_lectivo[p_1003_clase_formulario_valorar].sistema == "1" )
			{
				p_01003_mensaje+= 			"<span style='color: green'>" ;
				p_01003_mensaje+= 				"Si" ;
				p_01003_mensaje+= 			"</span>" ;
			}
			else
			{
				p_01003_mensaje+= 			"<span style='color: red'>" ;
				p_01003_mensaje+= 				"No" ;
				p_01003_mensaje+= 			"</span>" ;
			} ;
		}
		p_01003_mensaje+= 			"<br>" ;
		p_01003_mensaje+= 			"Comentario:" ;
		p_01003_mensaje+= 			"<br>" ;
		p_01003_mensaje+= 			p_01003_f_valoracion_comentario;
		p_01003_mensaje+= 		"</span>" ;
		p_01003_mensaje+= 	"</p>" ;
		p_01003_mensaje+= 	"<p>" ;
		p_01003_mensaje+= 		"<span>" ;
		p_01003_mensaje+= 			"<br>" ;
		p_01003_mensaje+= 			"____________________" ;
		p_01003_mensaje+= 			"<br>" ;
		p_01003_mensaje+= 			personal_datos_info.nombre+' '+personal_datos_info.apellido_1+' ( '+personal_datos_info.nivel+' ), '+personal_datos_info.email;
		p_01003_mensaje+= 			" ( "+ alumno_id + " )";
		p_01003_mensaje+= 			"<br>" ;
		p_01003_mensaje+= 			dia_lectivo[p_1003_clase_formulario_valorar].localizacion;
		p_01003_mensaje+= 			"<br>" ;
		p_01003_mensaje+= 			"CLASE " + p_1003_clase_formulario_valorar + ": "+dia_lectivo[p_1003_clase_formulario_valorar].fecha+' '+dia_lectivo[p_1003_clase_formulario_valorar].horaInicio;
		p_01003_mensaje+= 		"</span>" ;
		p_01003_mensaje+= 	"</p>" ;
		p_01003_mensaje+= "</body>" ;
		p_01003_mensaje+= "</html>" ;


		var p_01003_cabecera_mail= '<? echo ver_url("p_01392_email.php","src"); ?>'+
		'?to=5'+
		'&from='+personal_datos_info.email;
		if( parseInt(dia_lectivo[p_1003_clase_formulario_valorar].incidencia) != 1 )
			p_01003_cabecera_mail+= '&subject=Valoracion profesor';//Comentario de profesor';
		else
			p_01003_cabecera_mail+= '&subject=Incidencia con '+dia_lectivo[p_1003_clase_formulario_valorar].profesor;

		p_01003_cabecera_mail+='&txt='+p_01003_mensaje ;
		document.getElementById('p_00995_formulario_envio_email').src= p_01003_cabecera_mail;
	}
}

function p_01003_valoracion_cambiar_cara()
{
	var c=0;
	if(!document.getElementById("p_00995_input_valoracion_puntual").checked)c++;
	if(!document.getElementById("p_00995_input_valoracion_preparado").checked)c++;
	if(!document.getElementById("p_00995_input_valoracion_sistema").checked)c++;

	document.getElementById("p_00995_valoracion_cara_0").style.display="none";
	document.getElementById("p_00995_valoracion_cara_1").style.display="none";
	document.getElementById("p_00995_valoracion_cara_2").style.display="none";
	document.getElementById("p_00995_valoracion_cara_3").style.display="none";

	document.getElementById("p_00995_valoracion_cara_"+c).style.display="";
}


//comprueba cada x minutos todas las alarmas
//o pone nueva alarma

function p_01003_comprobar_alarma(p_01003_fecha, p_01003_funcion, p_01003_parametro){
	if(typeof p_01003_fecha== 'undefined'){
		if(typeof this.p_01003_array_funciones!='undefined'){
			var p_01003_ahora= Date.now();
			this.p_01003_array_funciones.forEach(function(item,index){
				if(p_01003_ahora>=item.fecha){
					window[item.funcion](item.parametro);
					this.p_01003_array_funciones.splice(index,1);
					//console.log("llamada "+item.funcion);
				}
			});
		}
		setTimeout(p_01003_comprobar_alarma, 1*60*1000);
	}
	else{
		if(typeof this.p_01003_array_funciones=='undefined'){
				this.p_01003_array_funciones=[];
		}
		this.p_01003_array_funciones.push({fecha:p_01003_fecha, funcion:p_01003_funcion, parametro:p_01003_parametro});
	}
/*
	for(var i of this.p_01003_array_funciones){
		console.log("date: "+i.fecha+"\nfuncion: "+i.funcion);
	}
	if(!this.p_01003_array_funciones.length)
		console.log("FIN**************")
	else {
		console.log("***************");
	}*/
}

</script>
