<!--
-Pag. ID: p_01171
-->
<script>
//no superar los limites
function p_01171_sumar_con_limite(variable,suma){
	variable+=suma;
	if(variable<0)variable=0;
	if(variable>8)variable=8;
	return variable;
}


//ganar perder smile
function p_01171_ganar_smile(numero_pregunta)
{
	var cant=8;
	//var respuesta=preguntas_enviadas[preguntas_enviadas.length-1];
	var respuesta = smile_datos.preguntas[numero_pregunta];
	//console.log(respuesta.resultado );
	var suma=-1;
	if(respuesta.resultado)suma=1;

	if(!smile_datos.smiles[respuesta.categoria].temas[respuesta.tema_id].subtemas[respuesta.subtema_id])
		smile_datos.smiles[respuesta.categoria].temas[respuesta.tema_id].subtemas[respuesta.subtema_id]={};
	var aux=smile_datos.smiles[respuesta.categoria].temas[respuesta.tema_id].subtemas[respuesta.subtema_id].smiles_preguntas_correctos;
	smile_datos.smiles[respuesta.categoria].temas[respuesta.tema_id].subtemas[respuesta.subtema_id].smiles_preguntas_correctos=p_01171_sumar_con_limite(aux,suma);

	aux=smile_datos.smiles[respuesta.categoria].temas[respuesta.tema_id].subtemas[respuesta.subtema_id].smiles_totales_correctos;
	smile_datos.smiles[respuesta.categoria].temas[respuesta.tema_id].subtemas[respuesta.subtema_id].smiles_totales_correctos=p_01171_sumar_con_limite(aux,suma);

	aux=smile_datos.smiles[respuesta.categoria].temas[respuesta.tema_id].subtemas[respuesta.subtema_id].smiles_preguntas_hechos;
	smile_datos.smiles[respuesta.categoria].temas[respuesta.tema_id].subtemas[respuesta.subtema_id].smiles_preguntas_hechos=p_01171_sumar_con_limite(aux,1);

	aux=smile_datos.smiles[respuesta.categoria].temas[respuesta.tema_id].subtemas[respuesta.subtema_id].smiles_totales_hechos;
	smile_datos.smiles[respuesta.categoria].temas[respuesta.tema_id].subtemas[respuesta.subtema_id].smiles_totales_hechos=p_01171_sumar_con_limite(aux,1);


	aux=smile_datos.smiles_totales[respuesta.categoria].correctos;
	smile_datos.smiles_totales[respuesta.categoria].correctos=p_01171_sumar_con_limite(aux,suma);

	aux=smile_datos.smiles_totales[respuesta.categoria].totales;
	smile_datos.smiles_totales[respuesta.categoria].totales=p_01171_sumar_con_limite(aux,1);

	smile_datos.smiles_totales[respuesta.categoria].errores=smile_datos.smiles_totales[respuesta.categoria].totales-smile_datos.smiles_totales[respuesta.categoria].correctos;

	smile_datos.smiles_totales[respuesta.categoria].vacios=cant-smile_datos.smiles_totales[respuesta.categoria].totales;

	if(respuesta.resultado)
	{
		document.getElementById("p_01175_preguntas_media_ganar_smile").play();
		smile_datos.smiles_totales.general.correctos++;
	}
	else
	{
		document.getElementById("p_01175_preguntas_media_perder_smile").play();
		smile_datos.smiles_totales.general.errores++;
	}

	if(smile_datos.preguntas[numero_pregunta].categoria=="trinity"){
		smile_datos.trinity_ultimas_respuestas.shift();
		smile_datos.trinity_ultimas_respuestas.push(respuesta.resultado);
	}

	smile_datos.smiles_totales.general.vacios--;
	smile_datos.smiles_totales.general.totales++;

	smile_datos.smiles_totales.preguntas.correctos+=respuesta.resultado;
	smile_datos.smiles_totales.preguntas.totales++;
}

p_01171_smile="";
function p_01171_ganar_smile_animacion(smile,numero_pregunta){
	//console.info(numero_pregunta);
	var boton=document.getElementById("head_oxbridge_menu_apartados2");
	if(p_01171_smile!=""){
		p_01171_smile.parentNode.removeChild(p_01171_smile);
	}
	var boton=document.getElementById("p_01171_siguiente_transporte_smile_div");
	p_01171_smile=document.createElement("img");
	//p_01171_smile.style.display="none";
	p_01171_smile.style.transition="1s";
	p_01171_smile.style.position="absolute";
	p_01171_smile.style.top="0";
	p_01171_smile.style.left="0";
	p_01171_smile.style.right="0";
	p_01171_smile.style.margin="auto";
	p_01171_smile.style.height="100%";
	p_01171_smile.style.zIndex="999";

	document.getElementById("p_01171_siguiente_transporte_smile_div").appendChild(p_01171_smile);

	if(smile=="+"){

		p_01171_smile.setAttribute("src","<? echo ver_url("images/smile_green.png","src"); ?>");
		p_01171_smile.style.mozTransform="scale(4) translate(0%,50px)";
		p_01171_smile.style.webkitTransform="scale(4) translate(0%,50px)";
		p_01171_smile.style.transform="scale(4) translate(0%,50px)";
		p_01171_smile.style.display="inline";
		setTimeout(function(){p_01171_smile.style.mozTransform="scale(1) translate(0)";},100);
		setTimeout(function(){p_01171_smile.style.webkitTransform="scale(1) translate(0)";},100);
		setTimeout(function(){p_01171_smile.style.transform="scale(1) translate(0)";},100);
		setTimeout(function(){p_01171_smile.style.opacity="0";},1100);
		setTimeout(function()
		{
			if(p_01171_smile!="")p_01171_smile.parentNode.removeChild(p_01171_smile);
			p_01171_smile="";
			if(smile_datos.preguntas[numero_pregunta].tipo!="tf" || smile_datos.preguntas[numero_pregunta].tipo!="ordenar_frase" || smile_datos.preguntas[numero_pregunta]!="m_option" || smile_datos.preguntas[numero_pregunta].tipo!="drag"){
				p_01174_carga_pregunta();
			}
		},2500);

	}else{
		p_01171_smile.setAttribute("src","<? echo ver_url("images/smile_red.png","src"); ?>");
		p_01171_smile.style.mozTransform="scale(1) translate(0)";
		p_01171_smile.style.webkitTransform="scale(1) translate(0)";
		p_01171_smile.style.transform="scale(1) translate(0)";
		p_01171_smile.style.display="inline";
		setTimeout(function(){p_01171_smile.style.mozTransform="scale(4) translate(0%,50px)";},100);
		setTimeout(function(){p_01171_smile.style.webkitTransform="scale(4) translate(0%,50%)";},100);
		setTimeout(function(){p_01171_smile.style.transform="scale(4) translate(0%,50%)";},100);
		//setTimeout(function(){p_01171_smile.style.opacity="0";},1100);
		setTimeout(function()
		{
			if(p_01171_smile!="")p_01171_smile.parentNode.removeChild(p_01171_smile);
			p_01171_smile="";
			if(smile_datos.preguntas[numero_pregunta].tipo!="tf" || smile_datos.preguntas[numero_pregunta].tipo!="ordenar_frase" || smile_datos.preguntas[numero_pregunta].tipo!="m_option" || smile_datos.preguntas[numero_pregunta].tipo!="drag"){
				p_01174_carga_pregunta();
			}
		},2500);


	}
	// ganar/perder smile
	p_01171_ganar_smile(numero_pregunta);
	p_01171_mover_yo();
	p_01171_comprobar_tras_delante();
}

function p_01171_mover_yo(json){
	console.log(json);

/*	if(ESTOY=="smile"){*/
		if(typeof json !="undefined")
		{
			/*//resultado google API
			distancia={"destination_addresses" : [ "Londres, Reino Unido" ],
				"origin_addresses" : [ "Barcelona, Barcelona, España" ],
				"rows":[{"elements" :[{
						"distance":{"text" : "1.497 km","value" : 1497095},
						"duration":{"text" : "14h 25 min","value" : 51877},
						"status":"OK"} ]} ], "status" : "OK"};*/
			if((json.rows[0].elements[0].status=="ZERO_RESULTS")||(!json.rows[0].elements[0].distance))
			{
				smile_datos.alumno.distancia="";
				personal_datos_info.poblacion="";
			}
			else
			{
				smile_datos.alumno.distancia=Math.round(json.rows[0].elements[0].distance.value/1000);
			}
		}

		var smiles_total = smile_datos.smiles_totales.general.totales;
		var smiles_mios = smile_datos.smiles_totales.general.correctos;
		if(smiles_total!=0)
			var proporcion_smiles = smiles_mios/smiles_total*100;
		else
			var proporcion_smiles = 0;

		if(typeof smile_datos.alumno.distancia == "undefined")smile_datos.alumno.distancia = "";
		var distancia = smile_datos.alumno.distancia;

		if(typeof personal_datos_info.poblacion == "undefined")personal_datos_info.poblacion = "";
		var poblacion = smile_datos.alumno.poblacion = personal_datos_info.poblacion;

		if(distancia=="")
			var distancia = smile_datos.alumno.distancia= 1496;
/*
		if(distancia=="")
		{

			if(poblacion!="")
			{
				var service = new google.maps.DistanceMatrixService();
				service.getDistanceMatrix(
				  {
					origins: [poblacion],
					destinations: ["London"],
					travelMode: google.maps.TravelMode.DRIVING
				  },
				  p_01171_mover_yo);
			}
			else
			{
				var service = new google.maps.DistanceMatrixService();
				service.getDistanceMatrix(
					{
						origins: ["barcelona"],
						destinations: ["London"],
						travelMode: google.maps.TravelMode.DRIVING
					},
					p_01171_mover_yo
				);
			}

		}

		else
		{
*/
			var redondear=smile_datos.alumno.distancia*(proporcion_smiles/100);

			if(smile_datos.smiles_totales.preguntas.totales>0){
				if(document.getElementById("p_01171_siguiente_transporte_texto"))
					document.getElementById("p_01171_siguiente_transporte_texto").innerHTML=Math.floor((smile_datos.smiles_totales.preguntas.correctos/smile_datos.smiles_totales.preguntas.totales)*100)+"%";
			}
			else if(document.getElementById("p_01171_siguiente_transporte_texto"))
				document.getElementById("p_01171_siguiente_transporte_texto").innerHTML="0%";

			var proporcion_smiles=(100/smile_datos.smiles_totales.general.totales)*smile_datos.smiles_totales.general.correctos;
			document.getElementById("p_00962_yo").style.left=(proporcion_smiles*0.98)+"%";


			//comprovar transporte
				//document.getElementById("p_00962_yo_img").src=p_01171_switch_treansporte(smile_datos.curso.smiles_total,smile_datos.curso.duracion,smile_datos.alumno.sxm,"yo");

			document.getElementById("p_00962_yo_kilometros_actual").innerHTML=Math.floor(redondear)+"Km<span id='p_00962_yo_kilometros_actual_de' style='display:none;'>/"+distancia+"Km</span>";
			if(document.getElementById("p_01171_carrera_reducida_km"))
				document.getElementById("p_01171_carrera_reducida_km").innerHTML=Math.floor(redondear)+"Km<span id='p_00962_yo_kilometros_actual_de_reducido' style='display:none;'>/"+distancia+"<br>/"+smile_datos.alumno.distancia+"Km</span>";
			document.getElementById("p_00962_carrera_km_fin").innerHTML="<span>London </span><span>"+smile_datos.alumno.distancia+" KM</span>";
			document.getElementById("p_00962_yo_kilometros_actual").style.marginLeft= (-document.getElementById("p_00962_yo_kilometros_actual").clientWidth/2+12)+"px";


//		}
		document.getElementById("p_00955_div_img_cargando").style.display="none";
/*	}
	else
	{
		document.getElementById("p_00987_menu_smile").addEventListener("click",function(){p_01171_mover_yo();});
	}*/

}
//convertir smiles en km
function p_01171_smile_kilometros(smiles){
	var km=Math.round((smile_datos.alumno.distancia/100)*((100/smile_datos.curso.smiles)*smiles));
	return km;
}
function limpiar_oponentes(){
	var pista=document.getElementById("p_00962_carrera_pista");
	//limpiar oponentes de pista
	for(p=1;p<pista.childNodes.length;p++){
		pista.removeChild(pista.childNodes[p]);
	  }
}
// CARGAR OPONENTES
function p_01171_cargar_oponentes(){
	var pista=document.getElementById("p_00962_carrera_pista");

	for(i in smile_datos.vs){
		var vs=smile_datos.vs[i];
		var oponente=document.createElement("div");
		oponente.id="p_01171_vs_"+vs.alumno_id;
		oponente.className="p_01171_carrera_vs";
		oponente.style.left=Math.round(vs.smiles_conseguidos_en_porcentaje*0.98)+"%";
		if(vs.es_competidor!="1")
			oponente.style.display="none";
		oponente.innerHTML="<img src='"+p_01171_switch_treansporte(smile_datos.curso.smiles_total,smile_datos.curso.duracion,vs.sxm,"otro")+"'></img>";
		pista.appendChild(oponente);
	}
}
//COMPROBAR POCICION ATRAS Y DELANTE

function p_01171_comprobar_tras_delante(){
	var proporcion_smiles=(100/smile_datos.curso.smiles_total)*smile_datos.curso.smiles;
	var distancia=smile_datos.alumno.distancia;
	//set_default
	/*document.getElementById("p_00962_tras_kilometros").innerHTML="< "+Math.round(distancia*(proporcion_smiles/100));
	document.getElementById("p_00962_delante_kilometros").innerHTML=distancia-Math.round(distancia*(proporcion_smiles/100))+" >";*/

	/*//comprobar
	for(i in smile_datos.vs){
		var vs=smile_datos.vs[i];
		//comprobar pocicion
		if(vs.smiles<=smile_datos.curso.smiles && p_01171_smile_kilometros(smile_datos.curso.smiles-vs.smiles)<document.getElementById("p_00962_tras_kilometros").innerHTML.slice(5)*1)
			document.getElementById("p_00962_tras_kilometros").innerHTML="< "+p_01171_smile_kilometros(smile_datos.curso.smiles-vs.smiles);
		if(vs.smiles>smile_datos.curso.smiles && p_01171_smile_kilometros(vs.smiles-smile_datos.curso.smiles)<document.getElementById("p_00962_delante_kilometros").innerHTML.slice(0,-5)*1)
			document.getElementById("p_00962_delante_kilometros").innerHTML=p_01171_smile_kilometros(vs.smiles-smile_datos.curso.smiles)+" >";
	}*/
}


//ELEGIR TRANSPORTE
function p_01171_switch_treansporte(smiles,duracion,smiles_mes,yo){
	if(yo!="yo"&&yo!="otro")yo="otro";
	var relacion=smiles/duracion;
	var transporte="<? echo ver_url("images/","src"); ?>"+yo+".png";
	if(relacion*0.33<=smiles_mes) transporte="<? echo ver_url("images/","src"); ?>"+yo+"_sk8.png";
	if(relacion*0.66<=smiles_mes) transporte="<? echo ver_url("images/","src"); ?>"+yo+"_bici.png";
	if(relacion<=smiles_mes) transporte="<? echo ver_url("images/","src"); ?>"+yo+"_scooter.png";
	if(relacion*1.33<=smiles_mes) transporte="<? echo ver_url("images/","src"); ?>"+yo+"_coche.png";
	if(relacion*1.66<=smiles_mes) transporte="<? echo ver_url("images/","src"); ?>"+yo+"_avion.png";

	if(yo=="yo") p_01171_siguiente_transporte(relacion,smiles_mes);

	return transporte;
}

p_01171_distancia_transportes={};
//SIGUIENTE TRANSPORTE
function p_01171_siguiente_transporte(rel,sml){

	p_01171_distancia_transportes.sk8= Math.ceil(rel*0.33-sml);
	p_01171_distancia_transportes.bici= Math.ceil(rel*0.66-sml);
	p_01171_distancia_transportes.scooter= Math.ceil(rel-sml);
	p_01171_distancia_transportes.coche= Math.ceil(rel*1.33-sml);
	p_01171_distancia_transportes.avion= Math.ceil(rel*1.66-sml);

	var siguiente_transporte="<? echo ver_url("images/sk8.png","src"); ?>";
	document.getElementById("p_01171_siguiente_transporte_texto").innerHTML=p_01171_distancia_transportes.sk8*1;

	if(rel*0.33<=sml){
		siguiente_transporte="<? echo ver_url("images/bici.png","src"); ?>";
		document.getElementById("p_01171_siguiente_transporte_texto").innerHTML=p_01171_distancia_transportes.bici*1;
	}
	if(rel*0.66<=sml){
		siguiente_transporte="<? echo ver_url("images/scooter.png","src"); ?>";
		document.getElementById("p_01171_siguiente_transporte_texto").innerHTML=p_01171_distancia_transportes.scooter*1;
	}
	if(rel<=sml){
		siguiente_transporte="<? echo ver_url("images/coche.png","src"); ?>";
		document.getElementById("p_01171_siguiente_transporte_texto").innerHTML=p_01171_distancia_transportes.coche*1;
	}
	if(rel*1.33<=sml){
		siguiente_transporte="<? echo ver_url("images/avion.png","src"); ?>";
		document.getElementById("p_01171_siguiente_transporte_texto").innerHTML=p_01171_distancia_transportes.avion*1;
	}
	if(rel*1.66<=sml){
		siguiente_transporte="";
	}
	document.getElementById("p_01171_siguiente_transporte").src=siguiente_transporte;

}


 function p_01171_conexion_perdida_evento()
 {
	//document.getElementById('p_01174_imagen_sin_conexion').style.display="";
	$('#p_01174_imagen_sin_conexion').show();
 }
  function p_01171_conexion_recuperada_evento()
 {
	//document.getElementById('p_01174_imagen_sin_conexion').style.display="none";
	$('#p_01174_imagen_sin_conexion').hide();
 }

//STAR/STOP PREGUNTAS

function p_01171_boton_start(){
	document.getElementById('head_oxbridge').style.zIndex="-1";
	document.getElementById('p_00962_carrera').style.display="none";
	if(VIP())document.getElementById("head_oxbridge_img").setAttribute("onclick","p_01175_preguntas.style.display='none';p_01175_pregunta_write.style.display='';");

		window.addEventListener('online',p_01171_conexion_recuperada_evento);
		if(!window.navigator.onLine)
		{
			$('#p_01174_imagen_sin_conexion').show();
		}
		window.addEventListener('offline',p_01171_conexion_perdida_evento);

		if(!smile_datos.preguntas)
		{
			p_00989_cargando("p_01175_cargando_imagen_espera_pregunta","50px");
			p_01174_filtro_pregunta_smile();
			p_01174_consulta_smile_preguntas(p_01174_js_cantidad_preguntas_smiles, 'inicial');
		}
		document.getElementById('p_00962_start').style.display="none";
		//document.getElementById('p_00962_preguntas_contenedor').style.display="inline";
		document.getElementById('p_00962_preguntas_contenedor').style.display="block";
		p_01171_espera_preguntas_para_mostrarlas();

		p_00987_esconder_menu_inferior();

		document.getElementById("contenedor").style.height="100%";//"100%";
}

function p_01171_espera_preguntas_para_mostrarlas(){
		if(!smile_datos.preguntas){
			setTimeout(p_01171_espera_preguntas_para_mostrarlas, 500);
		}
		else{
			document.getElementById('p_00987_boton_stop').style.display="";
			document.getElementById('p_00987_boton_volume').style.display="";
			document.getElementById('p_01171_siguiente_transporte_div').style.display="";
			document.getElementById('p_00962_grafico_progreso').style.display="none";
			document.getElementById('p_00962_grafico_leyenda').style.display="none";

			document.getElementById('p_01171_carrera_reducida').style.display="";
			document.getElementById('p_00962_contenedor_smile').style.WebkitOverflowScrolling="auto";
		//	document.getElementById('p_00962_contenedor_smile').style.overflow= "initial";
			document.getElementById('p_00962_contenedor_smile').style.overflow= "";

			if(document.getElementById("p_00962_preguntas_insidencia_boton"))document.getElementById("p_00962_preguntas_insidencia_boton").style.display="";
		}
}

function p_01171_boton_stop(){
	document.getElementById('head_oxbridge').style.zIndex="999";
	document.getElementById('p_00962_carrera').style.display="block";
	document.getElementById('p_00962_start').style.display="inline-block";
	ocultar_mostrar('p_00962_preguntas_contenedor',"block");
	//ocultar_mostrar('p_00962_start_config');
	//document.getElementById('p_00987_boton_amigo').style.display="";
	document.getElementById('p_00962_start').style.display="";
	document.getElementById('p_00962_grafico_progreso').style.display="";
	document.getElementById('p_00987_boton_stop').style.display="none";
	document.getElementById('p_00987_boton_volume').style.display="none";
	document.getElementById('head_oxbridge').style.display="";
	document.getElementById('p_00962_grafico_leyenda').style.display="";
	document.getElementById('p_00962_carrera').style.display="";
	document.getElementById('p_01171_siguiente_transporte_div').style.display="none";
	document.getElementById("contenedor_menu").style.display="inline";
	//document.getElementById('head_oxbridge_mail').style.display="";
	document.getElementById('p_01171_carrera_reducida').style.display="none";
	document.getElementById('p_00962_carrera').style.display="inline-block";


	window.removeEventListener('online',p_01171_conexion_recuperada_evento);
	window.removeEventListener('offline',p_01171_conexion_perdida_evento);
	//document.getElementById('p_01174_imagen_sin_conexion').style.display="none";
	$('#p_01174_imagen_sin_conexion').hide();

	if(document.getElementById("p_00962_preguntas_insidencia_boton"))document.getElementById("p_00962_preguntas_insidencia_boton").style.display="none";
	document.getElementById('p_00962_contenedor_smile').style.WebkitOverflowScrolling="touch";
	//personal_datos_info.ultimapregunta = smile_datos.preguntas[p_01174_pregunta_actual];
//document.getElementById('p_00962_contenedor_smile').style.overflow= "auto";
	document.getElementById('p_00962_contenedor_smile').style.overflow= "";
	//smile_datos.preguntas.unshift(personal_datos_info.ultimapregunta);
	p_1176_contar_smiles();
	p_01171_actualizar_progreso();

	p_00987_mostrar_menu_inferior();
	if(window.innerWidth<p_00956_ancho_movil){
		p_01000_animacion_porcentages_detalles(0);
		document.getElementById('p_00962_grafico_progreso_detalle_close').style.display="none";
	}
	document.getElementById("contenedor").style.height="101vh";
}



//set INICIO
function p_01171_seccion_smile(){

		var html="";

		document.getElementById('p_00962_carrera').style.display="block";
		if(personal_datos_info.tripartita=="1")
		{
/*			if(window.innerWidth>=p_00956_ancho_movil){
				html="<img"+
				"	id='p_00987_boton_tripartita'"+
				"	src='<?// echo ver_url("images/boton_FT.png","src"); ?>'"+
				//"	style='height:100%;float: right;margin-right: 10px;cursor:pointer'"+
				"	style='height:58px;position:relative;left:264px;cursor:pointer;top:11px;'"+
				'	onclick="document.getElementById(\'p_01451_tripartita\').style.display=\'\';p_01451_restaurar_circulos_progreso_tripartita_despues_eliminar_duplicados()"'+
				">";
			}
			else{*/
				html="<img"+
				"	id='p_00987_boton_tripartita_smiles'"+
				" class= 'p_01171_menu_botones_smile'"+
				"	src='<? echo ver_url("images/boton_FT.png","src"); ?>'"+
				//"	style='height:100%;float: right;margin-right: 10px;cursor:pointer'"+
				"	style='height:30px;left:40px;cursor:pointer;z-index:3;padding:0;'"+
				'	onclick="document.getElementById(\'p_01451_tripartita\').style.display=\'\';p_01451_restaurar_circulos_progreso_tripartita_despues_eliminar_duplicados();"'+
				">";
			//}
		}

		html+="<div id='p_01171_carrera_reducida' style='display:none;float:right;text-align:center'>"+
		"	<img id='p_01171_carrera_reducida_yo' src='<? echo ver_url("images/yo.png","src"); ?>'>"+
		"	<div id='p_01171_carrera_reducida_km' style='"+
		"		font-size: 2em;"+
		"		font-family: helveticaneueroman;"+
		"		width: 100%;"+
		"		color: #2DCEE4;"+
		"	'>341Km</div>"+
		"</div>"+
		"<div id='p_01171_siguiente_transporte_div' style='display:none; margin-top: -41px;'>"+
		"	<div id='p_01171_siguiente_transporte_smile_div'>"+
		"		<img src='<? echo ver_url("images/smile_green.png","src"); ?>' style='height: 100%'> "+
		"	</div>"+
		"	<div id='p_01171_siguiente_transporte_texto' style=''></div>"+
		"	<img id='p_01171_siguiente_transporte'>"+
		"</div>"+
		/*"<img"+
		"	id='p_00962_start_config'"+
		"	src='<? //echo ver_url("images/boton_gear2.png","src"); ?>'"+
		"	class='p_01171_menu_botones_smile'"+
		"	onclick=document.getElementById('p_01171_mostrar_ventana_option').style.display='';document.getElementById('contenedor_menu').style.display='none';"+
		">"+*/
		"<img"+
		"	id='p_00987_boton_stop' style='display:none;';"+
		//"	src='<? //echo ver_url("movil/smiles/images/Pause_70_text.png","src"); ?>'"+
		"	src='<? echo ver_url("images/close.png","src"); ?>'"+
		//" src='../images/close.png'"+
		"	class='p_01171_menu_botones_smile'"+
		"	onclick=p_01171_boton_stop();"+
		">"+
		"<div id='p_00987_boton_volume' style='display:none;float: right;'>"+
			"<img"+
			"	id='p_00987_boton_sound'"+
			"	src='<? echo ver_url("images/silent.png","src"); ?>'"+
			//"	src='../images/silent.png'"+
			"	class='p_01171_menu_botones_smile'"+
			"	style='display:none;'"+
			"	onclick='p_01171_sound();'"+
			">"+
			"<img"+
			"	id='p_00987_boton_silent'"+
			"	src='<? echo ver_url("images/sound.png","src"); ?>'"+
			//"	src='../images/sound.png'"+
			"	class='p_01171_menu_botones_smile'"+
			"	onclick='p_01171_mute();'"+
			">"+
		"</div>"+
		"<img"+
		"	id='p_01174_imagen_sin_conexion' style='display:none;';"+
		"	src='<? echo ver_url("movil/smiles/images/no_acces_internet.jpg","src"); ?>'"+
		"	class='p_01171_menu_botones_smile'"+
		">";
		/*"<img"+
		"	id='p_00987_boton_amigo'"+
		"	src='<? //echo ver_url("images/boton_mas_amigo.png","src"); ?>'"+
		"	class='p_01171_menu_botones_smile'"+
		"	onclick=''"+
		">"+*/

		document.getElementById("head_oxbridge_menu_apartados2").innerHTML=html;

	if(typeof smile_datos.cargados == "undefined")smile_datos.cargados=0;
	if(!smile_datos.cargados){
		smile_datos.cargados=1;
		p_00989_cargando("p_00962_grafico_progreso_centro","100%");
		if(typeof personal_datos_info.nivel!="undefined")
		{
			if(personal_datos_info.nivel!=""&&p_01171_SMILE_CARGAR_DATOS)
			{
				p_01171_SMILE_CARGAR_DATOS=false;
				p_01176_funcion_consulta_smile_datos();
			}
		}
	}
}
p_01171_SMILE_CARGAR_DATOS=true;

//final de consulta
function p_01171_final_consulta_smiles(){
	p_1176_contar_smiles();
	p_01171_mover_yo();
	//limpiar_oponentes();
	p_01171_cargar_oponentes();
	p_01171_comprobar_tras_delante();
	p_01171_actualizar_progreso();
	p_01447_carrera_actualizar_posicion();
}

function p_01171_actualizar_progreso(){

	if((typeof smile_datos.smiles_totales.vocabulario !="undefined")&&(typeof smile_datos.smiles_totales.vocabulario.totales !="undefined"))/**************monica**********/
	{
		if(smile_datos.smiles_totales.vocabulario.totales!=0)
			var x_vocabulario=(100/smile_datos.smiles_totales.vocabulario.totales)*smile_datos.smiles_totales.vocabulario.correctos;
		else var x_vocabulario=0;
	}
	else  													/**************monica**********/
		x_vocabulario=0;							/**************monica**********/

	if((typeof smile_datos.smiles_totales.estructura !="undefined")&&(typeof smile_datos.smiles_totales.estructura.totales !="undefined"))/**************monica**********/
	{
		if(smile_datos.smiles_totales.estructura.totales!=0)var x_estructura=(100/smile_datos.smiles_totales.estructura.totales)*smile_datos.smiles_totales.estructura.correctos;
		else var x_estructura=0;
	}
	else        									/**************monica**********/
		var x_estructura=0;					/**************monica**********/


	if(typeof smile_datos.trinity_ultimas_respuestas !="undefined"){
		var x_tnt=0;
		for(j in smile_datos.trinity_ultimas_respuestas)
		{
			x_tnt+=smile_datos.trinity_ultimas_respuestas[j];
		}
		if(smile_datos.trinity_ultimas_respuestas.length)								/**************monica**********/
			x_tnt=100/smile_datos.trinity_ultimas_respuestas.length*x_tnt;/**************monica**********/
		else {																													/**************monica**********/
			x_tnt=0;																											/**************monica**********/
		}																																/**************monica**********/
	}else
		var x_tnt=0;
	//x_tnt=100/smile_datos.trinity_ultimas_respuestas.length*x_tnt;/*************monica**************/

	if(typeof smile_datos.smiles_totales.general.totales !="undefined")
	{
		if(smile_datos.smiles_totales.general.totales!=0)var promedio=(100/smile_datos.smiles_totales.general.totales)*smile_datos.smiles_totales.general.correctos;
		else var promedio=0;
	}

	promedio=Math.round(promedio);

	x_vocabulario=x_vocabulario.toFixed();
	x_estructura=x_estructura.toFixed();
	x_tnt=x_tnt.toFixed();

	if(isNaN(x_vocabulario))x_vocabulario=0;
	if(isNaN(x_estructura))x_estructura=0;
	if(isNaN(x_tnt))x_tnt=0;

	p_01309_crear_torta(x_tnt,"#0b0","#bfb","p_00962_grafico_progreso_tnt",true);
	document.getElementById("p_00962_grafico_progreso_tnt").insertAdjacentHTML("beforeEnd","<div class='p_01172_torta_titulo'>"+TEXTOS[221].text+"</div>");

	p_01309_crear_torta(x_vocabulario,"#00f","#bbf","p_00962_grafico_progreso_vocabulario",true);
	document.getElementById("p_00962_grafico_progreso_vocabulario").insertAdjacentHTML("beforeEnd","<div class='p_01172_torta_titulo'>"+TEXTOS[136].text+"</div>");

	p_01309_crear_torta(x_estructura,"#f00","#fbb","p_00962_grafico_progreso_estructura",true);
	document.getElementById("p_00962_grafico_progreso_estructura").insertAdjacentHTML("beforeEnd","<div class='p_01172_torta_titulo'>"+TEXTOS[137].text+"</div>");
/*
	document.getElementById("p_00962_grafico_progreso_centro").innerHTML=""+
		"<img style='height:100%;vertical-align: middle;display:none;'>"+promedio+"%"+
		"<div style='position: absolute; bottom: 15px; width: 100%;vertical-align:  -webkit-baseline-middle;'>"+
		"	<img id='p_00962_grafico_progreso_i' style='height: 0.7em;' src='https://app.oxbridge.es/app/images/boton_info.png'>"+
		"</div>";
*/
	document.getElementById("p_00962_grafico_progreso_centro").innerHTML=""+
		"<img style='height:100%;vertical-align: middle;display:none;'>"+promedio+"%"+
		"<div style='position: absolute; bottom: 15px; width: 100%;vertical-align:  -webkit-baseline-middle;'>"+
		"	<img id='p_00962_grafico_progreso_i' style='height: 0.7em;' src='https://app.oxbridge.es/app/images/boton_info.png'>"+
		"</div>";

	document.getElementById("p_00962_grafico_leyenda").innerHTML="<div class='p_01171_cuadrado_leyenda' style='background:#00f;'></div><span class='p_01171_cursor'><? echo $TEXTOS[130][2];?></span><br>"+
														"<div class='p_01171_cuadrado_leyenda' style='background:#f00;'></div><span class='p_01171_cursor'><? echo $TEXTOS[131][2];?></span><br>"+
														"<div class='p_01171_cuadrado_leyenda' style='background:#0b0;'></div><span class='p_01171_cursor'><? echo $TEXTOS[132][2];?></span>";
	if(window.innerWidth>=p_00956_ancho_movil)
		p_01171_mostrar_detalle_progreso('vocabulario');
}

//estilos para tortas independientes
</script><style>
#p_00962_grafico_progreso_centro{
	padding-top: 36px;
	box-sizing: border-box;
}

.p_01309_centro{
	font-size:30px;
	font-family:HelveticaNeueRoman;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
	cursor:pointer;
	padding-top: 24px;
	box-sizing: border-box;
}
.p_01309_centro>img{
	display: none;
}
</style><script>

p_01171_desplaegado=false;

//funcion animacion para ver detalle de progreso
function p_01000_animacion_porcentages_detalles(sentido){

	if(typeof sentido == "undefined")sentido=1;

		var tnt=document.getElementById("p_00962_grafico_progreso_tnt");
		var estructura=document.getElementById("p_00962_grafico_progreso_estructura");
		var vocabulario=document.getElementById("p_00962_grafico_progreso_vocabulario");

	if(sentido){

		document.getElementById("p_00962_grafico_progreso_centro").style.display="none";
		document.getElementById("p_00962_grafico_leyenda").style.display="none";
		//document.getElementById("p_00962_start").style.display="none";
		document.getElementById("p_00962_grafico_progreso_detalle_close").style.display="";
		document.getElementById("p_00962_grafico_progreso_i").style.display="none";

		document.getElementById("p_00962_grafico_progreso").setAttribute("onclick","");

		tnt.setAttribute("onclick","p_01171_mostrar_detalle_progreso('tnt',event);");
		estructura.setAttribute("onclick","p_01171_mostrar_detalle_progreso('estructura',event);");
		vocabulario.setAttribute("onclick","p_01171_mostrar_detalle_progreso('vocabulario',event);");

		tnt.style.transition="0.5s";
		estructura.style.transition="0.5s";
		vocabulario.style.transition="0.5s";

		tnt.style.height="60%";
		estructura.style.height="60%";
		vocabulario.style.height="60%";

		tnt.style.width="60%";
		estructura.style.width="60%";
		vocabulario.style.width="60%";

		tnt.style.top="0";
		estructura.style.top="0";
		vocabulario.style.top="0";

		tnt.style.left="100%";
		estructura.style.left="20%";
		vocabulario.style.left="-60%";

		if(!p_01171_desplaegado)
		{
			setTimeout(function(){
				document.getElementById("p_00962_grafico_progreso_detalle").style.border="solid 3px #ccf";
				document.getElementById("p_00962_grafico_progreso_detalle").style.display='';
				document.getElementById("p_00962_grafico_progreso_tnt").style.top="0";
				document.getElementById("p_00962_grafico_progreso_estructura").style.top="0";
				document.getElementById("p_00962_grafico_progreso_vocabulario").style.top="15px";
				document.getElementById('p_00962_grafico_progreso_detalle_trinity').style.display='none';
				document.getElementById('p_00962_grafico_progreso_detalle_estructura').style.display='none';
				document.getElementById('p_00962_grafico_progreso_detalle_vocabulario').style.display='';
			},500);
		}
		p_01171_desplaegado=true;

	}else{
		p_01171_desplaegado=false;
		document.getElementById("p_00962_grafico_progreso_centro").style.display="";
		document.getElementById("p_00962_grafico_leyenda").style.display="inline-block";
		//document.getElementById("p_00962_start").style.display="inline-block";
		document.getElementById("p_00962_grafico_progreso_detalle").style.display="none";
		document.getElementById("p_00962_grafico_progreso_i").style.display="";


		var tnt=document.getElementById("p_00962_grafico_progreso_tnt");
		var estructura=document.getElementById("p_00962_grafico_progreso_estructura");
		var vocabulario=document.getElementById("p_00962_grafico_progreso_vocabulario");

		document.getElementById("p_00962_grafico_progreso").setAttribute("onclick","p_01000_animacion_porcentages_detalles(1);");

		tnt.setAttribute("onclick","");
		estructura.setAttribute("onclick","");
		vocabulario.setAttribute("onclick","");

		tnt.style.height="72%";
		estructura.style.height="86%";
		vocabulario.style.height="100%";

		tnt.style.width="72%";
		estructura.style.width="86%";
		vocabulario.style.width="100%";

		tnt.style.top="14%";
		estructura.style.top="7%";
		vocabulario.style.top="0";

		tnt.style.left="14%";
		estructura.style.left="7%";
		vocabulario.style.left="0";
	}
}

//funcion para mostrar el detalle de una seccion
function p_01171_mostrar_detalle_progreso(seccion){

	var detalle=document.getElementById("p_00962_grafico_progreso_detalle");
	var tnt=document.getElementById("p_00962_grafico_progreso_tnt");
	var estruc=document.getElementById("p_00962_grafico_progreso_estructura");
	var boca=document.getElementById("p_00962_grafico_progreso_vocabulario");
	var detalle_tnt=document.getElementById('p_00962_grafico_progreso_detalle_trinity');
	var detalle_estruc=document.getElementById('p_00962_grafico_progreso_detalle_estructura');
	var detalle_boca=document.getElementById('p_00962_grafico_progreso_detalle_vocabulario');

	p_01000_animacion_porcentages_detalles();

	detalle.style.display="";
	detalle.scrollTop=0;

	switch(seccion){
		case 'tnt':{
			detalle.style.border="solid 0.5em #cfc";
			tnt.style.top="15px";
			estruc.style.top="0";
			boca.style.top="0";
			detalle_tnt.style.display='';
			detalle_estruc.style.display='none';
			detalle_boca.style.display='none';
		break;}

		case 'estructura':{
			detalle.style.border="solid 0.5em #fcc";
			tnt.style.top="0";
			estruc.style.top="15px";
			boca.style.top="0";
			detalle_tnt.style.display='none';
			detalle_estruc.style.display='';
			detalle_boca.style.display='none';
		break;}

		case 'vocabulario':{
			detalle.style.border="solid 0.5em #ccf";
			tnt.style.top="0";
			estruc.style.top="0";
			boca.style.top="15px";
			detalle_tnt.style.display='none';
			detalle_estruc.style.display='none';
			detalle_boca.style.display='';
		break;}

		default:{break;}
	}
}

//comprobar repetidas
function p_01171_comprobar_preguntas_repetidas()
{
	for(i in preguntaCargada)
		for(j in preguntaCargada)
			if(preguntaCargada[i].id_preguinta==preguntaCargada[j].id_preguinta&&i!=j)
				console.error("repetida: "+preguntaCargada[i].id_preguinta+" indice_preguntas: "+i+" en: cargada=cargada");

	for(i in smile_datos.preguntas)
		for(j in smile_datos.preguntas)
			if(smile_datos.preguntas[i].id_preguinta==smile_datos.preguntas[j].id_preguinta&&i!=j)
				console.error("repetida: "+smile_datos.preguntas[i].id_preguinta+" indice_preguntas: "+i+" en: preguntas=cargada");

	for(i in smile_datos.preguntas)
		for(j in preguntaCargada)
			if(smile_datos.preguntas[i].id_preguinta==preguntaCargada[j].id_preguinta)
				console.error("repetida: "+smile_datos.preguntas[i].id_preguinta+" indice_preguntas: "+i+" en: preguntas=preguntas");

	for(i in preguntas_enviadas)
		for(j in smile_datos.preguntas)
			if(smile_datos.preguntas[j].id_preguinta==preguntas_enviadas[i].id_preguinta)
				console.error("repetida: "+smile_datos.preguntas[j].id_preguinta+" indice_preguntas: "+j+" en: preguntas=enviadas");

	for(i in preguntas_enviadas)
		for(j in preguntaCargada)
			if(preguntaCargada[j].id_preguinta==preguntas_enviadas[i].id_preguinta)
				console.error("repetida: "+preguntaCargada[j].id_preguinta+" indice_cargadas: "+j+" en: cargada=enviadas");
}

//finalizador consulta vs
function p_01447_finalizador()
{
	if(p_01171_SMILE_CARGAR_DATOS)
	{
		p_01176_funcion_consulta_smile_datos();
	}
	personal_datos_info.nivel=document.getElementById("p_00955_form_input_seleccion_nivel").value;
	document.getElementById("p_00955_overall_seleccion_nivel").style.display="none";
	document.getElementById("p_00961_formulario_info_nombre").value=document.getElementById("p_00955_form_seleccion_nivel_nombre").value;
	document.getElementById("p_00961_formulario_personal_info").submit();
}


//consulta oponentes
function p_01447_oponentes_consulta()
{
	var script=document.createElement("script");
	script.src=""+
		"https://s.oxbridge.es/ox/estructura_web/codigo/alumno_v2/smiles_04_invitados_03_asp_02_select_01_listado.asp"+
		"?p_0001446_get_alumno_id="+alumno_id+
	"";
	script.id="p_01447_oponentes_consulta_iframe";
	document.body.appendChild(script);
}

//listar oponentes en add+
function p_01447_oponentes_listar()
{
	var pos=1;
	var estoy_yo=false;
	var lista= document.getElementById("p_00962_lista_vs");
	lista.innerHTML="";
	for(i in smile_datos.vs)
	{
		var oponente=smile_datos.vs[i];
		var clase="";
		var nombre = oponente.nombre;
		var clic = "p_01447_oponente_select(this,"+i+")";

		if(oponente.nivel=="")
			clic = "";

		if(nombre=="")
			nombre = oponente.email.split("@")[0];

		if(oponente.es_competidor=="1"&&oponente.nivel!="")
			clase="p_01172_oponente_select";

		if(oponente.smiles_conseguidos_en_porcentaje<100/smile_datos.smiles_totales.general.totales*smile_datos.smiles_totales.general.correctos && !estoy_yo){
			lista.insertAdjacentHTML("beforeEnd",""+
			"<div id='' class='p_01172_oponente_en_lista p_01172_oponente_yo' onclick=''>"+
				"#"+(i*1+pos)+" "+personal_datos_info.nombre+" "+personal_datos_info.apellido_1+
			"</div>"+
			"");
			pos++;
			estoy_yo=true;
		}

		if(typeof smile_datos.vs[i-1] !="undefined")
		if(smile_datos.vs[i-1].smiles_conseguidos_en_porcentaje==oponente.smiles_conseguidos_en_porcentaje)
		pos--;
		lista.insertAdjacentHTML("beforeEnd",""+
		"<div id='p_01171_oponente_"+i+"' class='p_01172_oponente_en_lista "+clase+"' onclick='"+clic+"'>"+
			"#"+(i*1+pos)+" "+nombre+
			"<img class='p_01172_oponente_quitar_img' src='https://app.oxbridge.es/app/images/invitar_menos.png' "+
				'onclick="event.stopPropagation();p_01171_oponente_confirmacion_mostrar_ocultar(\'p_01171_oponente_eliminar_'+i+'\');"'+
			">"+
			"<div id='p_01171_oponente_eliminar_"+i+"' onclick='event.stopPropagation();'"+
			"	class='p_01172_oponente_quitar_confirmacion'><div style='height: 0.1em;'>"+
			"</div>"+
			'<a onclick="event.stopPropagation();p_01171_oponente_eliminar('+i+')">'+
			TEXTOS[153].text+"</a></div>"+
		"</div>"+
		"");
	}
}
//////////
function p_01171_oponente_confirmacion_mostrar_ocultar(oponente)
{
	if(document.getElementById(oponente).style.width!="100%")
		document.getElementById(oponente).style.width="100%";
	else
		document.getElementById(oponente).style.width="0%";
}

//eliminar oponente
function p_01171_oponente_eliminar(indice)
{
	p_01447_oponente_actualizar_serleccion(indice,0,1);
	document.getElementById("p_01171_oponente_"+indice).parentNode.removeChild(document.getElementById("p_01171_oponente_"+indice));
	document.getElementById("p_01171_vs_"+parseInt(smile_datos.vs[indice].alumno_id)).parentNode.removeChild(document.getElementById("p_01171_vs_"+parseInt(smile_datos.vs[indice].alumno_id)));
	smile_datos.vs.splice(indice,1);
}

//select unselec oponente
function p_01447_oponente_select(ele,oponente_indice)
{
	if(smile_datos.vs[oponente_indice].es_competidor=="1")
	{
		smile_datos.vs[oponente_indice].es_competidor=0;
		ele.setAttribute("class","p_01172_oponente_en_lista");
		p_01447_oponente_actualizar_serleccion(oponente_indice,0);
		document.getElementById("p_01171_vs_"+parseInt(smile_datos.vs[oponente_indice].alumno_id)).style.display="none";
	}
	else
	{
		smile_datos.vs[oponente_indice].es_competidor=1;
		ele.setAttribute("class","p_01172_oponente_en_lista p_01172_oponente_select");
		p_01447_oponente_actualizar_serleccion(oponente_indice,1);
		document.getElementById("p_01171_vs_"+parseInt(smile_datos.vs[oponente_indice].alumno_id)).style.display="";
	}
}

//actualizar seleccion oponente
function p_01447_oponente_actualizar_serleccion(indice_oponente,seleccion,quitar)
{
	var opo=smile_datos.vs[indice_oponente];

	if(typeof quitar == "undefined")quitar=0;
	if(seleccion=="=")seleccion=opo.es_competidor;

	if(document.getElementById("p_01447_oponente_actualizar_serleccion_resultado"))
	{
		document.getElementById("p_01447_oponente_actualizar_serleccion_resultado").src="";
		setTimeout(function()
		{
			document.getElementById("p_01447_carrera_actualizar_posicion_resultado").src="https://app.oxbridge.es/estructura_web/codigo/alumno/smiles_04_invitados_04_php_04_update_01_seleccionar_competidor.php"+
				"?p_0001466_get_alumno_id="+opo.alumno_id+
				"&p_0001466_get_alumno_que_reta_id="+alumno_id+
				"&p_0001466_get_seleccion="+seleccion+
				"&p_0001466_get_borrar="+quitar+
				"&p_0001466_get_finalizador_js="+
			"";
		},1);
	}
	else
	{
		var script = document.createElement("script");
		script.src="https://app.oxbridge.es/estructura_web/codigo/alumno/smiles_04_invitados_04_php_04_update_01_seleccionar_competidor.php"+
			"?p_0001466_get_alumno_id="+opo.alumno_id+
			"&p_0001466_get_alumno_que_reta_id="+alumno_id+
			"&p_0001466_get_seleccion="+seleccion+
			"&p_0001466_get_borrar="+quitar+
			"&p_0001466_get_finalizador_js="+
		"";
		script.id="p_01447_carrera_actualizar_posicion_resultado";
		document.body.appendChild(script);
	}
}

//actualizar posicion en carrera
function p_01447_carrera_actualizar_posicion()
{
	if(document.getElementById("p_01447_carrera_actualizar_posicion_resultado"))
	{
		document.getElementById("p_01447_carrera_actualizar_posicion_resultado").src="";
		setTimeout(function()
		{
			document.getElementById("p_01447_carrera_actualizar_posicion_resultado").src="<? echo ver_url("p_01448_carrera_actualizar_posicion.php","src"); ?>"+
				"?p_01448_alumno_id="+alumno_id+
				"&p_01448_smiles_conseguidos="+smile_datos.smiles_totales.general.correctos+
				"&p_01448_smiles_para_pasar_nivel="+smile_datos.smiles_totales.general.totales+
				"&p_01448_finalizador="+
			"";
		},1);
	}
	else
	{
		var script = document.createElement("script");
		script.src ="<? echo ver_url("p_01448_carrera_actualizar_posicion.php","src"); ?>"+
			"?p_01448_alumno_id="+alumno_id+
			"&p_01448_smiles_conseguidos="+smile_datos.smiles_totales.general.correctos+
			"&p_01448_smiles_para_pasar_nivel="+smile_datos.smiles_totales.general.totales+
			"&p_01448_finalizador="+
		"";
		script.id="p_01447_carrera_actualizar_posicion_resultado";
		document.body.appendChild(script);
	}
}

p_01171_enviar_solisitud_trinity_div=document.createElement('div');
p_01171_enviar_solisitud_trinity_div=document.createElement('div').id="p_01171_enviar_solisitud_trinity_div";
function p_01171_enviar_solisitud_trinity(condiciones)
{
	condiciones=condiciones||0;
	if(condiciones)
	{
		//url(text),id_elemento(text),post(text),run_js(bolean)[,end_function(function)]
		ajax_load_page(
			'https://s.oxbridge.es/ox/estructura_web/codigo/alumno_v2/informacion%20personal%2001%20_datos_presonales_01_asp_04_guardar_trinity.asp',
			"p_01171_enviar_solisitud_trinity_div",
			'p_0001539_post_alumno_id='+alumno_id+
			'&p_0001539_post_trinity=1'+
			'&p_0001539_post_finalizador_js=',
			0,
			p_01171_enviar_solisitud_trinity_final
		);
		if(window.innerWidth<p_00956_ancho_movil){
			document.getElementById("p_00990_over_all_contenedor").style.paddingTop= "0";
			document.getElementById("p_00990_over_all_contenedor").style.top= "0";
		}
	}
	else
	{
/*		over_all(''
			+'<iframe style="display:none" id="p_01171_condiciones_trinity" name="p_01171_condiciones_trinity"></iframe>'
			+'<form target="p_01171_condiciones_trinity" class="p_01171_condiciones_trinity" onsubmit="document.getElementById(\'p_01171_condiciones_trinity_submit\').style.display=\'none\';p_00989_cargando(\'p_01171_condiciones_trinity_cargando\',\'60px\');p_01171_enviar_solisitud_trinity(1);">'
			+'<h1><img src="https://www.trinitycollege.com/images/logo_trinity_college_london.png"></h1>'
			+TEXTOS[162].text
			+'<p><input type="checkbox" onchange="document.getElementById(\'p_00990_over_all_contenedor\').scrollTop=999999;" required>'
			+TEXTOS[163].text+'</p>'
			+'<p><input id="p_01171_condiciones_trinity_submit" type="submit" style="float:left; display:inline-block;"><div id="p_01171_condiciones_trinity_cargando"></div></p>'
			+'</form>'
		+'');
*/
	over_all(''
		+'<div id="p_01171_div_condiciones_trinity">'
		+'<div id="p_01171_div_cerrar_condiciones_trinity" onclick=\'document.getElementById("p_00990_over_all_cerrar").style.display="none";cerrar_over_all();\'></div>'
		+'<iframe style="display:none" id="p_01171_condiciones_trinity" name="p_01171_condiciones_trinity"></iframe>'
		+'<form target="p_01171_condiciones_trinity" class="p_01171_condiciones_trinity" onsubmit="document.getElementById(\'p_01171_condiciones_trinity_submit\').style.display=\'none\';p_00989_cargando(\'p_01171_condiciones_trinity_cargando\',\'60px\');p_01171_enviar_solisitud_trinity(1);">'
		//+'<h1><img src="https://www.trinitycollege.com/images/logo_trinity_college_london.png"></h1>'
		+TEXTOS[162].text
		+'<p><input type="checkbox" onchange="document.getElementById(\'p_00990_over_all_contenedor\').scrollTop=999999;" required>'
		+TEXTOS[163].text
		+'<p><input id="p_01171_condiciones_trinity_submit" type="submit" style="float:left; display:inline-block;"></p><div id="p_01171_condiciones_trinity_cargando"></div>'
		+'</form>'
		+'</div>'
		+'');

		if(window.innerWidth<p_00956_ancho_movil){
			document.getElementById("p_00990_over_all_contenedor").style.paddingTop= "0";
			document.getElementById("p_00990_over_all_contenedor").style.top= "0";
		}

	}
}

function p_01171_enviar_solisitud_trinity_final()
{
	document.getElementById("solisitud_trinity_boton").style.display="none";
	document.getElementById("solisitud_trinity_proseso").style.display="";
}

function p_01171_sound()
{
	document.getElementById("p_00987_boton_silent").style.display="";
	document.getElementById("p_00987_boton_sound").style.display="none";

	document.getElementById("p_01175_preguntas_media_ganar_smile").volume=1;
	document.getElementById("p_01175_preguntas_media_perder_smile").volume=1;

	document.getElementById("p_01175_preguntas_media_ganar_smile").src="https://app.oxbridge.es/app/media/ganar_smile.mp3";
	document.getElementById("p_01175_preguntas_media_perder_smile").src="https://app.oxbridge.es/app/media/perder_smile.mp3";
}
function p_01171_mute()
{
	document.getElementById("p_00987_boton_silent").style.display="none";
	document.getElementById("p_00987_boton_sound").style.display="";

	document.getElementById("p_01175_preguntas_media_ganar_smile").volume=0;
	document.getElementById("p_01175_preguntas_media_perder_smile").volume=0;

	document.getElementById("p_01175_preguntas_media_ganar_smile").src="";
	document.getElementById("p_01175_preguntas_media_perder_smile").src="";
}

</script>
