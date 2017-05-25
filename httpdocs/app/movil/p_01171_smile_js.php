<!--
-Pag. ID: p_01171
-->
<script>
p_01171_smile="";
function p_01171_ganar_smile_animacion(smile){

	var boton=document.getElementById("head_oxbridge_menu_apartados");
	if(p_01171_smile!=""){
		p_01171_smile.parentNode.removeChild(p_01171_smile);
	}

	p_01171_smile=document.createElement("img");
	p_01171_smile.style.display="none";
	p_01171_smile.style.height="100%";
	p_01171_smile.style.transition="1s";
	boton.appendChild(p_01171_smile);

	if(smile=="+"){
		smile_datos.alumno.smiles++;
		smile_datos.alumno.sxm++;
		p_01171_smile.setAttribute("src","../images/smile_green.png");
		p_01171_smile.style.mozTransform="scale(5) translate(-20%,100%)";
		p_01171_smile.style.webkitTransform="scale(5) translate(-20%,100%)";
		p_01171_smile.style.transform="scale(5) translate(-20%,100%)";
		p_01171_smile.style.display="inline";
		setTimeout(function(){p_01171_smile.style.mozTransform="scale(1) translate(190%,-100%)";},100);
		setTimeout(function(){p_01171_smile.style.webkitTransform="scale(1) translate(190%,-100%)";},100);
		setTimeout(function(){p_01171_smile.style.transform="scale(1) translate(190%,-100%)";},100);
		setTimeout(function(){if(p_01171_smile!="")p_01171_smile.parentNode.removeChild(p_01171_smile);p_01171_smile="";p_01174_loadpreguntas();},1500);
		p_01171_mover_yo(smile_datos.curso.smiles,smile_datos.alumno.smiles,smile_datos.alumno.distancia,smile_datos.alumno.poblacion);
	}else{
		smile_datos.alumno.smiles--;
		smile_datos.alumno.sxm--;
		p_01171_smile.setAttribute("src","../images/smile_red.png");
		p_01171_smile.style.mozTransform="scale(1) translate(190%,-100%)";
		p_01171_smile.style.webkitTransform="scale(1) translate(190%,-100%)";
		p_01171_smile.style.transform="scale(1) translate(190%,-100%)";
		p_01171_smile.style.display="inline";
		setTimeout(function(){p_01171_smile.style.mozTransform="scale(5) translate(-20%,100%)";},100);
		setTimeout(function(){p_01171_smile.style.webkitTransform="scale(5) translate(-20%,100%)";},100);
		setTimeout(function(){p_01171_smile.style.transform="scale(5) translate(-20%,100%)";},100);
		setTimeout(function(){p_01171_smile.style.opacity="0";},1100);
		setTimeout(function(){if(p_01171_smile!="")p_01171_smile.parentNode.removeChild(p_01171_smile);p_01171_smile="";p_01174_loadpreguntas();},2500);
		p_01171_mover_yo(smile_datos.curso.smiles,smile_datos.alumno.smiles,smile_datos.alumno.distancia,smile_datos.alumno.poblacion);
	}
	p_01171_comprobar_tras_delante();
}

function p_01171_mover_yo(smiles_total,smiles_mios,distancia,poblacion){
	var proporcion_smiles=(100/smiles_total)*smiles_mios;
	document.getElementById("p_00962_yo").style.left=(proporcion_smiles-12)+"%";

	//comprovar transporte
	document.getElementById("p_00962_yo_img").src=p_01171_switch_treansporte(smile_datos.curso.smiles,smile_datos.curso.duracion,smile_datos.alumno.sxm,"yo");

	if(typeof distancia=="undefined"||distancia==0){
		//resultado google API
		distancia={"destination_addresses" : [ "Londres, Reino Unido" ],
			"origin_addresses" : [ "Barcelona, Barcelona, España" ],
			"rows":[{"elements" :[{
					"distance":{"text" : "1.497 km","value" : 1497095},
					"duration":{"text" : "14h 25 min","value" : 51877},
					"status":"OK"} ]} ], "status" : "OK"};
		distancia=Math.round(distancia.rows[0].elements[0].distance.value/1000);
		smile_datos.alumno.distancia=distancia;
	}
	document.getElementById("p_00962_yo_kilometros_actual").innerHTML=Math.round(distancia*(proporcion_smiles/100))+"Km";
}
//convertir smiles en km
function p_01171_smile_kilometros(smiles){
	var km=Math.round((smile_datos.alumno.distancia/100)*((100/smile_datos.curso.smiles)*smiles));
	return km;
}

// CARGAR OPONENTES
function p_01171_cargar_oponentes(){
	var pista=document.getElementById("p_00962_carrera_pista");
	for(i in smile_datos.vs){
		var vs=smile_datos.vs[i];
		var oponente=document.createElement("div");
		oponente.id="p_01171_vs_"+vs.id;
		oponente.className="p_01171_carrera_vs";
		oponente.style.left=Math.round((100/smile_datos.curso.smiles)*vs.smiles)+"%";
		oponente.innerHTML="<img src='"+p_01171_switch_treansporte(smile_datos.curso.smiles,smile_datos.curso.duracion,vs.sxm,"otro")+"'></img>";
		pista.appendChild(oponente);
	}
}
//COMPROBAR POCICION ATRAS Y DELANTE
function p_01171_comprobar_tras_delante(){
	var proporcion_smiles=(100/smile_datos.curso.smiles)*smile_datos.alumno.smiles;
	var distancia=smile_datos.alumno.distancia;
	//set_default
	document.getElementById("p_00962_tras_kilometros").innerHTML="< "+Math.round(distancia*(proporcion_smiles/100));
	document.getElementById("p_00962_delante_kilometros").innerHTML=distancia-Math.round(distancia*(proporcion_smiles/100))+" >";

	//comprobar
	for(i in smile_datos.vs){
		var vs=smile_datos.vs[i];
		//comprobar pocicion
		if(vs.smiles<=smile_datos.alumno.smiles && p_01171_smile_kilometros(smile_datos.alumno.smiles-vs.smiles)<document.getElementById("p_00962_tras_kilometros").innerHTML.slice(5)*1)
			document.getElementById("p_00962_tras_kilometros").innerHTML="< "+p_01171_smile_kilometros(smile_datos.alumno.smiles-vs.smiles);
		if(vs.smiles>smile_datos.alumno.smiles && p_01171_smile_kilometros(vs.smiles-smile_datos.alumno.smiles)<document.getElementById("p_00962_delante_kilometros").innerHTML.slice(0,-5)*1)
			document.getElementById("p_00962_delante_kilometros").innerHTML=p_01171_smile_kilometros(vs.smiles-smile_datos.alumno.smiles)+" >";
	}
}

//ELEGIR TRANSPORTE
function p_01171_switch_treansporte(smiles,duracion,smiles_mes,yo){
	if(yo!="yo"&&yo!="otro")yo="otro";
	var relacion=smiles/duracion;
	var transporte="../images/"+yo+".png";
	if(relacion*0.33<=smiles_mes) transporte="../images/"+yo+"_sk8.png";
	if(relacion*0.66<=smiles_mes) transporte="../images/"+yo+"_bici.png";
	if(relacion<=smiles_mes) transporte="../images/"+yo+"_scooter.png";
	if(relacion*1.33<=smiles_mes) transporte="../images/"+yo+"_coche.png";
	if(relacion*1.66<=smiles_mes) transporte="../images/"+yo+"_avion.png";

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

	var siguiente_transporte="../images/sk8.png";
	document.getElementById("p_01171_siguiente_transporte_texto").innerHTML=p_01171_distancia_transportes.sk8;

	if(rel*0.33<=sml){
		siguiente_transporte="../images/bici.png";
		document.getElementById("p_01171_siguiente_transporte_texto").innerHTML=p_01171_distancia_transportes.bici;
	}
	if(rel*0.66<=sml){
		siguiente_transporte="../images/scooter.png";
		document.getElementById("p_01171_siguiente_transporte_texto").innerHTML=p_01171_distancia_transportes.scooter;
	}
	if(rel<=sml){
		siguiente_transporte="../images/coche.png";
		document.getElementById("p_01171_siguiente_transporte_texto").innerHTML=p_01171_distancia_transportes.coche;
	}
	if(rel*1.33<=sml){
		siguiente_transporte="../images/avion.png";
		document.getElementById("p_01171_siguiente_transporte_texto").innerHTML=p_01171_distancia_transportes.avion;
	}
	if(rel*1.66<=sml){
		siguiente_transporte="";
	}
	document.getElementById("p_01171_siguiente_transporte").src=siguiente_transporte;

}


//STAR/STOP PREGUNTAS
function p_01171_boton_start(){
	p_01174_loadpreguntas();
	ocultar_mostrar('p_00962_start');
	ocultar_mostrar('p_00962_preguntas_contenedor');
	ocultar_mostrar('p_00962_start_config');
	document.getElementById('p_00987_boton_amigo').style.display="none";
	document.getElementById('p_00987_boton_stop').style.display="inline";
	document.getElementById('p_01171_siguiente_transporte_div').style.display="inline";
	document.getElementById("contenedor_menu").style.display="none";
}
function p_01171_boton_stop(){
	ocultar_mostrar('p_00962_start');
	ocultar_mostrar('p_00962_preguntas_contenedor');
	ocultar_mostrar('p_00962_start_config');
	document.getElementById('p_00987_boton_amigo').style.display="inline";
	document.getElementById('p_00987_boton_stop').style.display="none";
	document.getElementById('p_01171_siguiente_transporte_div').style.display="none";
	document.getElementById("contenedor_menu").style.display="inline";
}


//set INICIO
function p_01171_seccion_smile(){

	document.getElementById("head_oxbridge_menu_apartados").innerHTML=""+
		"<img"+
		"	id='p_00987_boton_progreso'"+
		"	src='../images/boton_progreso.png'"+
		"	class='p_01171_menu_botones_smile'"+
		"	onclick=''"+
		">"+
		"<img"+
		"	id='p_00987_boton_amigo'"+
		"	src='../images/boton_mas_amigo.png'"+
		"	class='p_01171_menu_botones_smile'"+
		"	onclick=''"+
		">"+
		"<img"+
		"	id='p_00987_boton_stop'"+
		"	src='../images/boton_stop.png'"+
		"	class='p_01171_menu_botones_smile'"+
		"	style='display:none;'"+
		"	onclick='p_01171_boton_stop();'"+
		">"+
		"<div id='p_01171_siguiente_transporte_div'>"+
		"	<div id='p_01171_siguiente_transporte_smile_div'>"+
		"		<img src='../images/smile_green.png'>X"+
		"	</div>"+
		"	<div id='p_01171_siguiente_transporte_texto'></div>"+
		"	<img id='p_01171_siguiente_transporte'>"+
		"</div>";
	p_01171_mover_yo(smile_datos.curso.smiles,smile_datos.alumno.smiles,smile_datos.alumno.distancia,smile_datos.alumno.poblacion);
	p_01171_cargar_oponentes();
	p_01171_comprobar_tras_delante();
}
</script>
