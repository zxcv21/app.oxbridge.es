<!--
Pag. ID: p_01003
-->
<script>
//DEFINICIONES
var p_01003_SIGUIENTE_CLASE_SET=false;
var RESET_CLASES="false"

//////////////////////PINTAR EL MENU DE CLASES
function p_00960_clases_resize(){
	document.getElementById("p_00960_clases_head_foto").style.width=document.getElementById("head_oxbridge_img").offsetWidth*0.70+"px";
	document.getElementById("p_00960_clases_head_foto").style.height=document.getElementById("head_oxbridge_img").offsetWidth*0.70+"px";
	document.getElementById("p_00960_clases_head_foto").style.display="inline";
	for(i in document.getElementById("p_00960_clases_head_valoracion").childNodes){
		e=document.getElementById("p_00960_clases_head_valoracion").childNodes[i];
		if(e.nodeType==1){
			e.style.width=document.getElementById("p_00955_head_oxbridge_idioma").offsetHeight*0.75+"px";
			e.style.height=document.getElementById("p_00955_head_oxbridge_idioma").offsetHeight*0.75+"px";
		}
	}
}

function p_01003_clases_girar(girado){
	if(girado){
		document.getElementById("p_00960_clases_head").style.width="85%";
		document.getElementById("p_00960_clases_head_profe").style.fontSize="3em";
		document.getElementById("p_00960_clases_head_fecha").style.marginTop="4%";
		document.getElementById("p_00960_clases_head_calendario").style.fontSize="2em";
		document.getElementById("p_00960_clases_head_calendario_out_cerrar").style.fontSize="2.4em";
		document.getElementById("p_00960_clases_head_calendario_out_cerrar").style.left="0.4em";
		document.getElementById("p_00960_clases_head_calendario_out_cerrar").style.right="";
		document.getElementById("p_00960_clases_head_calendario_mes").style.height="23%"
		document.getElementById("p_00960_clases_head_profe").style.marginTop="1%";
		document.getElementById("p_00960_clases_actividades").style.marginTop="1%";
		document.getElementById("p_00960_clases_actividades").style.height="45%";
		
		ele=document.getElementById("p_00960_clases_actividades_box");i=0;
		while(ele.childNodes[i]){ if(ele.childNodes[i].nodeType==1) ele.childNodes[i].style.fontSize="0.6em";i++;}
		
	}else{
		document.getElementById("p_00960_clases_head").style.width="96%";
		document.getElementById("p_00960_clases_head_profe").style.fontSize="5.4em";
		document.getElementById("p_00960_clases_head_fecha").style.marginTop="6%"
		document.getElementById("p_00960_clases_head_calendario").style.fontSize="4em";
		document.getElementById("p_00960_clases_head_calendario_out_cerrar").style.fontSize="4.5em";
		document.getElementById("p_00960_clases_head_calendario_out_cerrar").style.left="";
		document.getElementById("p_00960_clases_head_calendario_out_cerrar").style.right="0.4em";
		document.getElementById("p_00960_clases_head_calendario_mes").style.height="15%"
		document.getElementById("p_00960_clases_head_profe").style.marginTop="5%";
		document.getElementById("p_00960_clases_actividades").style.marginTop="8%";
		document.getElementById("p_00960_clases_actividades").style.height="47%";
		
		ele=document.getElementById("p_00960_clases_actividades_box");i=0;
		while(ele.childNodes[i]){ if(ele.childNodes[i].nodeType==1) ele.childNodes[i].style.fontSize="1em";i++;}
	}
}

function p_01003_mostrar_actividad(tipo,d,a,m){
	var actividades=dia_lectivo[d].actividad[a];
	switch(tipo){
		case 'att':{
			over_all(actividades.attachment[m],'rgba(0,0,0,0.7)');
		break;}
		case 'enl':{
			over_all('<iframe class="p_01003_enlace_actividad" src="'+actividades.enlace[m]+'"></iframe>','rgba(0,0,0,0.7)');
		break;}
		case 'tar':{
			target=actividades.target_language;
			html_target="";
			for(c in target){
				html_target+=''+
					'<div id="p_00993_clases_contenedor_actividad_target">'+
					'<div id="p_00993_clases_contenedor_actividad_target_titulo"><span>Title:</span> '+target[c].titulo+'</div>';
				for(d in target[c].sonido)
					html_target+=''+
						'<img id="p_00993_clases_contenedor_actividad_target_son"'+
						'src="./images/audio.png"'+
						'onclick="document.getElementById(\'p_00993_clases_contenedor_actividad_reproductor\').setAttribute(\'src\',\''+target[c].sonido[d].ruta+'\')">';
				for(d in target[c].imagenes)
					html_target+='<div id="p_00993_clases_contenedor_actividad_target_img">IMG'+target[c].imagenes[d].ruta+'</div>';
				for(d in target[c].definiciones)
					html_target+='<div id="p_00993_clases_contenedor_actividad_target_text"><span>Definition:</span> DEF'+target[c].definiciones[d]+'</div>';
				for(d in target[c].ejemplos)
					html_target+='<div id="p_00993_clases_contenedor_actividad_target_text"><span>Example:</span> EJE'+target[c].ejemplos[d]+'</div>';
				html_target+='</div>';
			}
			over_all(html_target,'rgba(0,0,0,0.7)');
		break;}
		default:{break;}
	}
}

//ocultar_mostrar_actividades
function p_01003_ocultar_mostrar_actividad(ele){
	
	if(document.getElementById(ele).style.display=="inline-block"){
		document.getElementById(ele).style.display="none";
		document.getElementById("p_00960_clases_actividades_box").style.display="none";
		setTimeout(function(){document.getElementById("p_00960_clases_actividades_box").style.display="inline";},1);	
	}else{
		for(i in document.getElementById("p_00960_clases_actividades_box").childNodes){
			var hijo = document.getElementById("p_00960_clases_actividades_box").childNodes[i];
			if(hijo.nodeType==1)
				hijo.childNodes[5].style.display="none";
		}
		document.getElementById(ele).style.display="inline-block";
	}
}

//zoom foto profesor
function p_01003_zoom_profesor(){
	var foto = document.getElementById("p_00960_clases_head_foto");
	if(!foto.getAttribute("zoom"))
		foto.setAttribute("zoom","0")
	
	if(foto.getAttribute("zoom")=="1"){
		foto.style.transform="";
		foto.style.borderRadius="";
		foto.setAttribute("zoom","0")
	}else{
		foto.style.transform="scale(3) translate(36%,30%)";
		foto.style.borderRadius="0";
		foto.setAttribute("zoom","1")
	}
}

</script>