<!--
-Pag. ID: p_01174;
-->
<!--
<link href="jquery-ui-1.11.4/jquery-ui.css" rel="stylesheet" type="text/css" />
<script src="jquery-ui-1.11.4/jquery-1.11.2.js"></script>
<script src="jquery-ui-1.11.4/jquery-ui.js"></script>
-->
<link href='<? ver_url("jquery-ui-1.11.4/jquery-ui.css","");?>' rel="stylesheet" type="text/css" />
<script src='<? ver_url("jquery-ui-1.11.4/jquery-1.11.2.js","");?>'></script>
<script src='<? ver_url("jquery-ui-1.11.4/jquery-ui.js","");?>'></script>

<script  type = "text/javascript"  src = "//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js" ></script> 
<script  type = "text/javascript"  src = "//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js" ></script>
<script  type = "text/javascript"  src = "//cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js" ></script>
<script>

/*window.addEventListener("orientationchange", function() { //función que me permite saber cuando el dispositivo esta girado y bloqueamos el giro de pantalla
	// Announce the new orientation number
	if(window.orientation == -90){
		//alert("pantalla girada a la derecha");
		screen.orientation.lock("portrait");
	}else if(window.orientation == 90){
		//alert("pantalla girada a la izquierda");
		screen.orientation.lock("portrait");
	}

}, false);*/

preguntaActual="";
bufferSubirPreguntas=[];
function p_01174_loadpreguntas(){ //funcion que permite ejecutar las siguiente funciones con solo cargar la página.
/*
for(i in smile_datos.tipo_preguntas){
	document.getElementById("p_01175_smile_estructura_"+smile_datos.tipo_preguntas[i]).style.display="none";
}
*/

	if(preguntaActual!=""){
		bufferSubirPreguntas.push(preguntaActual); //añadimos al bufferSubirPreguntas las preguntas que van saliendo
	}

 preguntaActual = smile_datos.preguntas.shift();
 smile_datos.preguntas.push(preguntaActual); //añadimos a smile_datos.preguntas la pregunta acutal de manera que siempre van añadiendoce preguntas por el final del objeto (podemos añadirlo tambén de forma aleatoria).
	switch(preguntaActual.tipo){

		case "fotos" :
			document.getElementById("word").innerHTML=preguntaActual.pregunta;
			document.getElementById("imagenes").innerHTML="";
			for (x in preguntaActual.respuestas){
				document.getElementById("imagenes").insertAdjacentHTML('beforeEnd',"<div id=p_01174_"+x+" class='estiloFotoDiv'><img class='estiloFotos' id=p_00001_img_respuesta_"+x+" src=" + preguntaActual.respuestas[x] + " onclick='comprobarRespCorrecta(this.id);'></img></div>");
			}
			break;

		case "audio" :
			document.getElementById("reproduccionWord").src=preguntaActual.pregunta;
			document.getElementById("sound_imagenes").innerHTML="";
			for (x in preguntaActual.respuestas){
				document.getElementById("sound_imagenes").insertAdjacentHTML('beforeEnd',"<div id=p_01174_"+x+" class='estiloFotoDiv'><img class='estiloFotos' id=p_00001_img_respuesta_sound"+x+" src=" + preguntaActual.respuestas[x] + " onclick='playImagenSonido()'></img></div>");
			}
			break;

		case "drag" :

			document.getElementById("Titulo2").innerHTML=preguntaActual.titulo;
			var contenidoDrag = preguntaActual.pregunta.split(" ");
			document.getElementById("contenedorDragDrop").innerHTML="";
			for(i in contenidoDrag){
				if(contenidoDrag[i].slice(0,1)=="_"){
					contenidoDrag[i]="<div id='drag"+i+"' class='drag' value='"+contenidoDrag[i].slice(1)+"' style=display:inline;>"+contenidoDrag[i].slice(1)+"</div>";
				}
				document.getElementById("contenedorDragDrop").insertAdjacentHTML('beforeEnd',contenidoDrag[i]+" ");
			}

			document.getElementById("p_01175_respuesta_drag_drop").innerHTML="";
			var contenidoRespuestas= preguntaActual.respuestas.split(" ");
			for(i in contenidoRespuestas){
				if(contenidoRespuestas[i]=="_"){
					contenidoRespuestas[i]="<div id='palabra"+i+"' style='display: inline' >...............</div>";
				}
				document.getElementById("p_01175_respuesta_drag_drop").insertAdjacentHTML('beforeEnd',contenidoRespuestas[i]+" ");
			}

			//p_01174_dragdrop();
			break;

		case "m_option" :
			document.getElementById("p_01175_respuesta_m_option").innerHTML="";
			document.getElementById("Titulo3").innerHTML=preguntaActual.titulo;
			document.getElementById("Texto3").innerHTML=preguntaActual.pregunta;

				for(i in preguntaActual.respuestas){
					document.getElementById("p_01175_respuesta_m_option").insertAdjacentHTML('beforeEnd',"<div style='float: left; width:100%;'><label style='font-size: 1.5em'><div class='style_checkbox_redondo'><input onclick='comprobarMarcaOpcionM0(this);' type='checkbox' class='checkboxMultioption' style='float: left' id=checkbox"+i+" name='gruupPreguntasMulti' value="+i+"></div><span style='margin-left: 3%;'>"+preguntaActual.respuestas[i]+"</span></label><br></div>");
				}
			break;

		case "tf" :
			document.getElementById("Titulo").innerHTML=preguntaActual.titulo;
			document.getElementById("Texto").innerHTML=preguntaActual.pregunta;
			document.getElementById("p_01175_respuesta_true_false").innerHTML="";
			for(i in preguntaActual.respuestas){
					document.getElementById("p_01175_respuesta_true_false").insertAdjacentHTML('beforeEnd',"<div style='float: left; width: 100%'><label style='font-size: 1.5em'><div class='style_checkbox_redondo'><input onclick='comprobarMarcaOpcionTF(this);' type='checkbox' class='checkboxMultioption' style='float: left' id=acepto"+i+" name='gruupPreguntas' value="+i+"></div><span style='margin-left: 3%;'>"+preguntaActual.respuestas[i]+"</span></label><br></div>");
				}
			break;

		case "escribir" :
			document.getElementById("Titulo4").innerHTML=preguntaActual.pregunta;
			break;

		case "option_escribir" :
			document.getElementById("Titulo6").innerHTML=preguntaActual.titulo;
			break;
		case "ordenar_frase" :
			document.getElementById("titulo_ordenar_frase").innerHTML=preguntaActual.titulo;
			document.getElementById("texto_ordenar_frase").innerHTML="";
			for(i in preguntaActual.pregunta){
					document.getElementById("texto_ordenar_frase").insertAdjacentHTML('beforeEnd',"<div onclick='formar_frase_usuario(this.id);' id=palabra_bbdd"+i+"><span>"+preguntaActual.pregunta[i]+"</span></div>");
				}
			break;

		default: alert("Error");
			break;
	}

	//isMobile(); // me detecta si la página se ejecuta desde un movil, o un tablet, o un PC.
	//document.getElementById("p_01175_smile_estructura_"+preguntaActual.tipo).style.display="inline";
	//document.getElementById("p_01175_copia_plantilla").innerHTML=document.getElementById("p_01175_smile_estructura_"+preguntaActual.tipo).innerHTML;
	cambiaID_copia_plantilla_final('p_01175_smile_estructura_'+preguntaActual.tipo);



//barraProgreso();
//random = Math.floor((Math.random() * 8) + 1);
/*
	switch(random){
		case 1: document.getElementById("p_01175_smile_estructura_"+smile_datos.preguntas[0].tipo).style.display="inline"; //pregunta palabra-imagenes
				mostrarImagenes();
			break;
		case 2: document.getElementById("p_01175_smile_estructura_"+smile_datos.preguntas[1].tipo).style.display="inline"; //pregunta palabra-imagenes
				mostrarImagenes();
			break;
		case 3: document.getElementById("p_01175_smile_estructura_"+smile_datos.preguntas[2].tipo).style.display="inline"; //pregunta drag-drop
			break;
		case 4: document.getElementById("p_01175_smile_estructura_"+smile_datos.preguntas[3].tipo).style.display="inline"; //pregunta sonido-imagenes
				mostrarImagenesSound();
			break;
		case 5: document.getElementById("p_01175_smile_estructura_"+smile_datos.preguntas[4].tipo).style.display="inline"; //pregunta True-false
				setInterval(function(){ comprobarMarcaOpcionTF(); });
			break;
		case 6: document.getElementById("p_01175_smile_estructura_"+smile_datos.preguntas[5].tipo).style.display="inline"; //pregunta MultiOptiom
				setInterval(function(){ comprobarMarcaOpcionM0(); });
			break;
		case 7: document.getElementById("p_01175_smile_estructura_"+smile_datos.preguntas[6].tipo).style.display="inline"; //pregunta Writing
			break;
		case 8: document.getElementById("p_01175_smile_estructura_"+smile_datos.preguntas[7].tipo).style.display="inline"; //pregunta READING INTO WRITING
			break;
	}
*/
//document.getElementById("p_01175_smile_estructura_"+smile_datos.preguntas[0].tipo).style.display="inline";
//if(smile_datos.preguntas[0].tipo=="fotos"){
	//mostrarImagenes();
//}
//document.getElementById("p_01175_smile_estructura_"+smile_datos.preguntas[3].tipo).style.display="inline";
//if(smile_datos.preguntas[3].tipo=="audio"){
	//mostrarImagenesSound();
//}
//setInterval(function(){ comprobarMarcaOpcionTF(); });
//setInterval(function(){ comprobarMarcaOpcionM0(); });
}
</script>
<script>
function isMobile(){ //función que me permite saber en que dispositivo se está ejecutando la página.
	 //Mobile Detection and Redirecting
		var device = navigator.userAgent

		if (device.match(/Iphone/i)|| device.match(/Ipod/i)|| device.match(/Android/i)|| device.match(/J2ME/i)|| device.match(/HTC/i)) {
		//window.location = "AQUI DIRECCION WEB MOVIL";
			//alert('Navegador movil');
			//cambioResolucionPantalla(); //cambia la resolucion de la pantalla segun el tamaño de la pantalla
			document.getElementById('areaTexto').innerHTML=""; //pregunta writing
			$("#areaTexto").append( $( "#confTextAreaWriting" ) );
			$("#confTextAreaWriting").show();
			document.getElementById('areaTextoRIW').innerHTML=""; //pregunta RIW
			$("#areaTextoRIW").append( $( "#confTextAreaRIW" ) );
			$("#confTextAreaRIW").show();
			//linkMovil="css/cssMovil.css"; //ruta del archivo css para movil
			//loadCss(linkMovil);
		}
		else if (device.match(/Ipad/i))
		{
			//alert('iPad');
		}else{
			//alert('PC/Laptop/Mac');
			//linkPC="css/cssPC.css";  //ruta del archivo css el PC
			//loadCss(linkPC);
		}
}

function playImagenSonido(){
	func();
}
 loadCss = function(src) {
     $("#estilos").attr("href",src);
 };

//variable global
var valorBotnPresionadoTF;
var valorBotnPresionadoMOPTION;
var valorBotnPresionadoWRITING;
var valorBotnPresionadoFillGaps;
var valorBotnPresionadoRIW;
var nid=0;
var Npregunta;
/*
function cambiaID_copia_plantilla(valor){ //funcion que me permite cambiar el ID de cuando cogo la estructura de otra pregunta

	var nombreName = document.getElementById(valor).getAttribute("name"); //conseguimos saber el nombre del name que tiene esa estructura
	var total_id_estructura = document.getElementsByName(nombreName);
	//alert(totalName.length); //longitud total de todos los name, que es lo mismo que el de los ID
	//document.getElementById("p_01175_copia_plantilla").innerHTML=document.getElementById(valor).innerHTML.replace("id","id=n"+nid+"_"+valor);
	for (x=0;x<total_id_estructura.length;x++){
		var nomid = total_id_estructura[x].id;
		//alert(nomid);
		if(nomid!=""){
			nuevoid = "n"+nid+"_"+nomid;
			document.getElementById(nomid).id=nuevoid;
			//alert(struct_contenido);
		}
	}
	document.getElementById("p_01175_copia_plantilla").style.display="inline";
	nid++;
}
*/
function cambiaID_copia_plantilla_final(valor){ //Función que me permite añadir al DIV de copia_plantilla la estructura de cada pregunta
	expresion = new RegExp(/id="/g);
	expresionName = new RegExp(/name="/g);
	document.getElementById("p_01175_copia_plantilla").innerHTML=document.getElementById(valor).innerHTML.replace(expresion,"id=\"n"+nid+"_");
	document.getElementById("p_01175_copia_plantilla").innerHTML=document.getElementById("p_01175_copia_plantilla").innerHTML.replace(expresionName,"name=\"n"+nid+"_");
	document.getElementById("p_01175_copia_plantilla").style.display="inline";
	nid++;
}

function p_01174_skip_pregunta(valor){ //Función que me permite pasar de pregunta cuando un alumno no sabe que responder "Botón gris de las preguntas"
	document.getElementById(valor).onclick="";
	preguntaActual.resultado=0;
	setTimeout(p_01171_ganar_smile_animacion("-"),1);

}

function comprobarMarcaOpcionTF(Marcado){ //Función que comprueba si se ha elegido una opción para después cambiar el icono del botón TF
	var npregunta = Marcado.id;
	npregunta = obtener_numero_pregunta(npregunta);

	$("#n"+npregunta+"_botonPasarTF").hide();
	$("#n"+npregunta+"_botonTF").show();
	grupPreguntas = document.getElementsByName("n"+npregunta+"_"+"gruupPreguntas");
	if(!Marcado.checked){
		$("#n"+npregunta+"_botonPasarTF").show();
		$("#n"+npregunta+"_botonTF").hide();
	}else{
		for(x=0;x<grupPreguntas.length;x++){
			$('#n'+npregunta+'_acepto'+x).attr('checked', false);
		}

		Marcado.checked=true;
	}
}

function formar_frase_usuario(valor){ //funcion que me permite añadir palabras a un div para formar una frase a un div

npregunta_frase = obtener_numero_pregunta(valor);

 document.getElementById(valor).style.color="red";

 document.getElementById(valor).onclick=false;

 contenido=document.getElementById(valor).innerHTML;


document.getElementById("n"+npregunta_frase+"_"+"frase_formada_usuario").innerHTML+=contenido + " ";

}

function comprueba_frase_formada_usuario(){ //acabar de hacer la función que sirve para comprobar si la frase que ha formado el usuario ha sido correcta.
	alert("ok");
}

function comprobarMarcaOpcionM0(marcado){ //funcion que me permite comprobar cambiar el botón de gris a verde y viceversa en MultiOpion
		var npreguntaM0 = marcado.id;
		npreguntaM0 = obtener_numero_pregunta(npreguntaM0);

		$("#n"+npreguntaM0+"_botonPasarMO").show();
		$("#n"+npreguntaM0+"_botonMO").hide();
	/* Comprobamos que si no hay marcados ponemos el botón de pasar pregunta sin responder*/

	for(i in preguntaActual.respuestas){
		if(document.getElementById("n"+npreguntaM0+"_"+"checkbox"+i).checked==true){
			$("#n"+npreguntaM0+"_botonMO").show();
			$("#n"+npreguntaM0+"_botonPasarMO").hide();
		}
	}
}

function obtenerValor(valor){ //funcion que me permite comprobar si la respuesta es correcta o no en TF
	npreguntavalorTF = obtener_numero_pregunta(valor);
	grupoPreguntas = document.getElementsByName("n"+npreguntavalorTF+"_"+"gruupPreguntas");
		for (i=0;i<grupoPreguntas.length;i++){
			 if (grupoPreguntas[i].checked){
				 break;
		}
	}

	valorBotonPresionado = grupoPreguntas[i].value;
	if(valorBotonPresionado==preguntaActual.correcta){
		preguntaActual.resultado=1; //1 respuesta correcta
		setTimeout(p_01171_ganar_smile_animacion("+"),1);
	}else{
		preguntaActual.resultado=0; //0 respuesta incorrecta
		setTimeout(p_01171_ganar_smile_animacion("-"),1);
	}

	//Si la preguntaActual.resultado es igual a "" quiere decir que no esta contestada.

	//myStopIntervalo(limpiadorSInterval);
	//barraProgreso();
}

function obtenerValorMultirespuesta(valor){ //funcion que me permite comprobar si la respuesta es correcta o no en MultiOption
	npreguntavalorMo = obtener_numero_pregunta(valor);
	grupPreguntas = document.getElementsByName("n"+npreguntavalorMo+"_"+"gruupPreguntasMulti");
	var correct=true;

	for (i=0;i<grupPreguntas.length;i++){
      	 if (grupPreguntas[i].checked && preguntaActual.correcta[i]==0 || !grupPreguntas[i].checked && preguntaActual.correcta[i]){
			 correct=false;
		 }
   	}
	if(correct){
		preguntaActual.resultado=1;
		setTimeout(p_01171_ganar_smile_animacion("+"),1);
	}else{
		preguntaActual.resultado=0;
		setTimeout(p_01171_ganar_smile_animacion("-"),1);
	}
}


function contarPalabras(valor){ //funcion que cuenta las palabras de la pergunta WRITING
	Npregunta = obtener_numero_pregunta(valor);

	 textoAreaDividido  = new Array;
	 textoArea = document.getElementById("n"+Npregunta+"_"+"area").value;
	  numeroCaracteres = textoArea.length;
	  textoAreaDividido = textoArea.split(" ");
	  //textoAreaDividido = textoArea.replace(" ","");
	  for(p=0;p<textoAreaDividido.length;p++){
		  if(textoAreaDividido[p]==""){
			  textoAreaDividido.splice(p,1);
			  p--;
		  }
	  }
	  //alert(textoAreaDividido);

		numeroPalabras = textoAreaDividido.length;
		//alert(numeroPalabras);
		var longpalabras="";
		if(numeroPalabras<150){
			//alert("debes introducir mínimo 150 palabras!");
			longpalabras.className="error"
			setError("n"+Npregunta+"_"+"err_faltaTexto","<font color='black'>" + "minium is 150 words <br>" + "you have: " +"</font>" + "<font color='red'>" + numeroPalabras + "</font>");
			setError("n"+Npregunta+"_"+"err_faltaTexto","Words: " + "<font color='black'>" + numeroPalabras + "</font>");
			$("#n"+Npregunta+"_"+"botonWTING").hide();
			$("#n"+Npregunta+"_"+"botonPasarWRTING").show();
		}else if(numeroPalabras>=150){
			setError("n"+Npregunta+"_"+"err_faltaTexto","Words: " + "<font color='black'>" + numeroPalabras + "</font>");
			$("#n"+Npregunta+"_"+"botonPasarWRTING").hide();
			$("#n"+Npregunta+"_"+"botonWTING").show();
		}
		if(numeroPalabras>=180){
			//alert("Maximo son 180 palabras. " + " tienes " + numeroPalabras);
			longpalabras.className="error"
			setError("n"+Npregunta+"_"+"err_faltaTexto","<font color='black'>" + "maximun is 180 words <br>" + "you have: " +"</font>" + "<font color='red'>" + numeroPalabras + "</font>");
			$("#n"+Npregunta+"_"+"botonWTING").hide();
			$("#n"+Npregunta+"_"+"botonPasarWRTING").show();
		}
}

function guardarPalabrasEnviar(valor){ //boton verde WRITING
	Npregunta = obtener_numero_pregunta(valor);
	//ArrayPalabrasEnviar  = new Array;
	 textoArea = document.getElementById("n"+Npregunta+"_"+"area").value;
	preguntaActual.enviar = textoArea; //guardamos en
	  /*
	  numeroCaracteres = textoArea.length;
	  ArrayPalabrasEnviar = textoArea.split(" ");
	  alert(ArrayPalabrasEnviar);
	*/
	  p_01174_loadpreguntas();
}

function guardarPalabrasEnviarRIW(valor){ //boton verde READING INTO WRITING
	Npregunta = obtener_numero_pregunta(valor);
	//ArrayPalabrasEnviarRIW  = new Array;
	 textoArea = document.getElementById("n"+Npregunta+"_"+"areaRIW").value;
	 preguntaActual.enviar = textoArea; //guardamos en
	 /*
	  numeroCaracteres = textoArea.length;
	  ArrayPalabrasEnviarRIW = textoArea.split(" ");
	  alert(ArrayPalabrasEnviarRIW);
	  */
	  p_01174_loadpreguntas();

}

function obtener_numero_pregunta(x){ //función que me permite obtener el Numero de cada pregunta
	var expresionR = /[0-9]\d*/m;
	x = x.match(expresionR);
	return x;
}

function contarPalabrasRIW(valor){ //funcion que cuenta las palabras de la pergunta READING INTO WRITING
	Npregunta = obtener_numero_pregunta(valor);
	//alert(Npregunta);

	 textoAreaDivididoRIW  = new Array;

	 textoArea = document.getElementById("n"+Npregunta+"_"+"areaRIW").value;
	  numeroCaracteres = textoArea.length;
	  textoAreaDivididoRIW = textoArea.split(" ");
	  //textoAreaDivididoRIW = textoArea.replace(" ","");
	  for(p=0;p<textoAreaDivididoRIW.length;p++){
		  if(textoAreaDivididoRIW[p]==""){
			  textoAreaDivididoRIW.splice(p,1);
			  p--;
		  }
	  }
	  //alert(textoAreaDivididoRIW);

		numeroPalabras = textoAreaDivididoRIW.length;
		//alert(numeroPalabras);
		var longpalabras="";
		if(numeroPalabras<150){
			//alert("debes introducir mínimo 150 palabras!");
			longpalabras.className="error"
			setError("n"+Npregunta+"_"+"err_faltaTextoRIW","<font color='black'>" + "minium is 150 words <br>" + "you have: " +"</font>" + "<font color='red'>" + numeroPalabras + "</font>");
			setError("n"+Npregunta+"_"+"err_faltaTextoRIW","Words: " + "<font color='black'>" + numeroPalabras + "</font>");
			$("#n"+Npregunta+"_"+"botonRIW").hide();
			$("#n"+Npregunta+"_"+"#botonPasarRIW").show();
		}else if(numeroPalabras>=150){
			setError("n"+Npregunta+"_"+"err_faltaTextoRIW","Words: " + "<font color='black'>" + numeroPalabras + "</font>");
			$("#n"+Npregunta+"_"+"botonPasarRIW").hide();
			$("#n"+Npregunta+"_"+"botonRIW").show();
			//css('display', 'inline-block');
		}
		if(numeroPalabras>=180){
			//alert("Maximo son 180 palabras. " + " tienes " + numeroPalabras);
			longpalabras.className="error"
			setError("n"+Npregunta+"_"+"err_faltaTextoRIW","<font color='black'>" + "maximun is 180 words <br>" + "you have: " +"</font>" + "<font color='red'>" + numeroPalabras + "</font>");
			$("#n"+Npregunta+"_"+"botonRIW").hide();
			$("#n"+Npregunta+"_"+"botonPasarRIW").show();
		}
}

function comprueba_correcta(valor){ //función que me permite comprobar si es correcta o no Drag_and_Drop
	var npregunta_actual = obtener_numero_pregunta(valor);
	respuestas_correctas_bdd = preguntaActual.correcta;
	var respuestas_usuario = new Array();
	correcta_drag_drop=0;

	for(i in document.getElementById("n"+npregunta_actual+"_"+"p_01175_respuesta_drag_drop").childNodes){
		var hijo=document.getElementById("n"+npregunta_actual+"_"+"p_01175_respuesta_drag_drop").childNodes[i];
			if(hijo.nodeType==1 && hijo.tagName=="DIV"){
				if(hijo.value){
						respuestas_usuario.push(hijo.value);
					}
				}
	}

	for (x=0;x<respuestas_usuario.length;x++){
		for(p=0;p<respuestas_correctas_bdd.length;p++){
			if(respuestas_usuario[x]==respuestas_correctas_bdd[p]){
				correcta_drag_drop++;
			}
		}
	}

	if(correcta_drag_drop==respuestas_correctas_bdd.length){
		preguntaActual.resultado=1; //1 respuesta correcta
		setTimeout(p_01171_ganar_smile_animacion("+"),1);
	}else{
		preguntaActual.resultado=0; //1 respuesta correcta
		setTimeout(p_01171_ganar_smile_animacion("-"),1);
	}

}

function save(valor){ //función WRITING GUARDAR
	Npregunta = obtener_numero_pregunta(valor);
	//ArrayPalabras  = new Array;
	 textoArea = document.getElementById("n"+Npregunta+"_"+"area").value;
	 preguntaActual.guardar = textoArea;
		/*
	 numeroCaracteres = textoArea.length;
	  ArrayPalabras = textoArea.split(" ");
	  alert(ArrayPalabras);
	  */
	 p_01174_loadpreguntas();

}

function saveWriting(valor){ //función  READING INTO WRITING GUARDAR
	Npregunta = obtener_numero_pregunta(valor);
	//ArrayPalabrasRIW  = new Array;
	 textoArea = document.getElementById("n"+Npregunta+"_"+"areaRIW").value;
	 preguntaActual.guardar = textoArea;
	 /*
	  numeroCaracteres = textoArea.length;
	  ArrayPalabrasRIW = textoArea.split(" ");
	  alert(ArrayPalabrasRIW);
	  */
	 p_01174_loadpreguntas();
}
/*
$(function(){ //función de PREGUNTA WRITING GUARDAR

var save = function() {
	 //alert("ok");
	ArrayPalabras  = new Array;
	 textoArea = document.getElementById("n"+Npregunta+"_"+"area").value;
	  numeroCaracteres = textoArea.length;
	  ArrayPalabras = textoArea.split(" ");
	  alert(ArrayPalabras);
	 $("#n"+Npregunta+"_"+"myDialogGuardar").toggle("explode").dialog("close");
	 p_01174_loadpreguntas();

};

//funcion cierra el dialogo
  var cancel = function() {
		$("#n"+Npregunta+"_"+"myDialogGuardar").toggle( "explode").dialog("close");
	};

//funcion que genera los botones
	var dialogOp = {
	autoOpen: false,
	width: 415,
	modal: true,
	draggable: false,
    resizable: false,
	hide: {
        effect: "explode"
      },
	 show:{
		 effect: "blind",
        duration: 1000
	 },
	buttons: {
	"Save": save,
	"Cancel": cancel
	}
	};
$("#n"+Npregunta+"_"+"myDialogGuardar").dialog(dialogOp);});
/***************************************************/

/*
$(function(){ //función de PREGUNTA READING INTO WRITING GUARDAR

var saved = function() {
	 //alert("ok");
	ArrayPalabrasRIW  = new Array;
	 textoArea = document.getElementById("areaRIW").value;
	  numeroCaracteres = textoArea.length;
	  ArrayPalabrasRIW = textoArea.split(" ");
	  alert(ArrayPalabrasRIW);
	 $("#myDialogGuardarRIW").toggle("explode").dialog("close");
	 p_01174_loadpreguntas();
};

//funcion cierra el dialogo
  var cancel = function() {
		$("#myDialogGuardarRIW").toggle( "explode").dialog("close");
	};

//funcion que genera los botones
	var dialogOp = {
	autoOpen: false,
	width: 415,
	modal: true,
	draggable: false,
    resizable: false,
	hide: {
        effect: "explode"
      },
	 show:{
		 effect: "blind",
        duration: 1000
	 },
	buttons: {
	"Save": saved,
	"Cancel": cancel
	}
	};
$("#myDialogGuardarRIW").dialog(dialogOp);});
/***************************************************/


function p_01174_dragdrop(valor){
	var npregunta_dragdrop = obtener_numero_pregunta(valor);
	//alert(npregunta_dragdrop);
$(".drag").draggable({
revert: true,
revertDuration: 200,
opacity: 0.80
});
var dropOpts = {
drop: function( event, ui ) {
valor =($(ui.draggable).attr('value'));
if(valor!=""){
	//valoresDragDrop.push(valor); //guardamos todos los valores del drag and drop en un array.

	id = $(this).attr("id");
	//alert(id);
	document.getElementById(id).innerHTML="<b><font color='red'>"+valor+"<b>";
	valorDivDrop = document.getElementById(id).value=valor;
	pintar_verde=true;
		for(i in document.getElementById("n"+npregunta_dragdrop+"_"+"p_01175_respuesta_drag_drop").childNodes){
			var hijo=document.getElementById("n"+npregunta_dragdrop+"_"+"p_01175_respuesta_drag_drop").childNodes[i];
			if(hijo.nodeType==1 && hijo.tagName=="DIV"){
				if(!hijo.value){
					pintar_verde=false;
				}
			}
		}
}

if(pintar_verde==true){
	$("#n"+npregunta_dragdrop+"_"+"botonPasarFILGAPS").hide();
	$("#n"+npregunta_dragdrop+"_"+"botonFG").show();
}
/*
valor1P = $("#n"+npregunta_dragdrop+"_"+"palabra_1").val();
valor2P = $("#n"+npregunta_dragdrop+"_"+"palabra_2").val();
valor3P = $("#n"+npregunta_dragdrop+"_"+"palabra_3").val();
*/
/*
id =($(ui.draggable).attr('id'));
	if(id=="drag1" || id=="drag2"){
		document.getElementById("palabra_1").innerHTML="<b><font color='red'>"+valor+"<b>";
		cont++;
		}else if(id=="drag3" || id=="drag4"){
				document.getElementById("palabra_2").innerHTML="<b><font color='red'>"+valor+"<b>";
				cont++;
			}else{
				document.getElementById("palabra_3").innerHTML="<b><font color='red'>"+valor+"<b>";
				cont++;
			}
*/
//alert(valor);
},
activeClass: "activated"
};
var contenidoRespuestas= preguntaActual.respuestas.split(" ");
	for(i in contenidoRespuestas){
		if(contenidoRespuestas[i]=="_"){
			$("#n"+npregunta_dragdrop+"_"+"palabra"+i).droppable(dropOpts);
		}
	}
}
/*
$(function(){ //Función de PREGUNTA WRITING

var aceptar = function() {
	 //alert("ok");
	valorBotnPresionadoWRITING=0;
	//alert(valorBotnPresionadoWRITING);
	 $("#myDialogPasarPregWRITING").toggle("explode").dialog("close");
	 p_01174_loadpreguntas();
};

//funcion cierra el dialogo
  var cancelar = function() {
		$("#myDialogPasarPregWRITING").toggle( "explode").dialog("close");
	};

//funcion que genera los botones
	var dialogOp = {
	autoOpen: false,
	width: 415,
	modal: true,
	draggable: false,
    resizable: false,
	hide: {
        effect: "explode"
      },
	 show:{
		 effect: "blind",
        duration: 1000
	 },
	buttons: {
	"Accept": aceptar,
	"Cancel": cancelar
	}
	};
$("#myDialogPasarPregWRITING").dialog(dialogOp);});
/***************************************************/
/*
$(function(){ //Función de PREGUNTA READING INTO WRITING

var aceptar = function() {
	valorBotnPresionadoRIW=0;
	//alert(valorBotnPresionadoRIW);
	 $("#myDialogPasarPregRIW").toggle("explode").dialog("close");
	 p_01174_loadpreguntas();
};

//funcion cierra el dialogo
  var cancelar = function() {
		$("#myDialogPasarPregRIW").toggle( "explode").dialog("close");
	};

//funcion que genera los botones
	var dialogOp = {
	autoOpen: false,
	width: 415,
	modal: true,
	draggable: false,
    resizable: false,
	hide: {
        effect: "explode"
      },
	 show:{
		 effect: "blind",
        duration: 1000
	 },
	buttons: {
	"Accept": aceptar,
	"Cancel": cancelar
	}
	};
$("#myDialogPasarPregRIW").dialog(dialogOp);});
/***************************************************/

function setError(element,texto){
		document.getElementById(element).innerHTML=texto;

}
function clearError(element){
		document.getElementById(element).innerHTML="";
}
/*
function muestraGuardar(valor){ //Muestra dialogo WRITING por si queremos guardar el texto o no.
	Npregunta=valor;
	//alert(Npregunta);
	Npregunta = Npregunta.substr(1,1); //obtengo el numero de la pregunta para saber que dialogo se tiene que mostrar y sobre que ID.
	//alert(Npregunta);
	if(!$("#n"+Npregunta+"_"+"myDialogGuardar").dialog("isOpen")){
		$("#n"+Npregunta+"_"+"myDialogGuardar").dialog("open");
	}
}
function muestraGuardarRIW(){ //Muestra dialogo READING INTO WRITING por si queremos guardar el texto o no.
	if(!$("#myDialogGuardarRIW").dialog("isOpen")){
		$("#myDialogGuardarRIW").dialog("open");
	}
}
function muestraPasarSguardar(){ //Muestra dialogo TRUE-FALSE
	if(!$("#myDialogPasarPregTF").dialog("isOpen")){
		$("#myDialogPasarPregTF").dialog("open");
	}
}


function muestraPasarSguardarWRITING(){ //Muestra dialogo WRITING
	if(!$("#myDialogPasarPregWRITING").dialog("isOpen")){
		$("#myDialogPasarPregWRITING").dialog("open");
	}
}


function muestraPasarSguardarFILLGAPS(){ //Muestra dialogo WRITING
	if(!$("#myDialogPasarPregFillGaps").dialog("isOpen")){
		$("#myDialogPasarPregFillGaps").dialog("open");
	}
}
function muestraPasarSguardarRIW(){ //Muestra dialogo READING INTO WRITING
	if(!$("#myDialogPasarPregRIW").dialog("isOpen")){
		$("#myDialogPasarPregRIW").dialog("open");
	}
}
*/

//funcion que sirve para limpiar el intervalo
function myStopIntervalo(myVar) {
    clearInterval(myVar);
}

var limpiadorSInterval;

function SETTIMEOUT(){
	var x = $("#progressbar").progressbar("option","value");
	if (x<100){
		$("#progressbar").progressbar("option","value",x+2);
	limpiadorSInterval = setTimeout(SETTIMEOUT, 1000);
	}else if(x==100){
		$("#progressbar").progressbar({value: 0});
		limpiadorSInterval = setTimeout(SETTIMEOUT, 1000);
		//Noaciertos++;
	}
}

function barraProgreso() {
		$("#progressbar").progressbar({
		  value: 0
		});
		setTimeout(SETTIMEOUT, 1000);
	}

function focusFunction(){
	document.getElementById('contenedor_menu').style.display="none";
}

function blurFunction(){
	document.getElementById('contenedor_menu').style.display="inline";
}
/*
function mostrarImagenes(){
	document.getElementById("word").innerHTML=smile_datos.preguntas[0].pregunta;
		txt="";
	for (x=0;x<4;x++){
		txt+="<div id=p_01174_"+x+" class='estiloFotoDiv'><img class='estiloFotos' id=p_00001_img_respuesta_"+x+" src=" + smile_datos.preguntas[0].respuestas[x] + " onclick='comprobarRespCorrecta(this.id);'></img></div>";
	}
		$("#imagenes").html(txt);
}
*/
/*
function mostrarImagenesSound(){
		txt="";
	for (x=0;x<4;x++){
		txt+="<div id=p_01174_sound"+x+" class='estiloFotoDiv'><img class='estiloFotos' id=p_00001_img_respuesta_sound"+x+" src=" + smile_datos.preguntas[3].respuestas[x] + "></img></div>";
	}
		$("#sound_imagenes").html(txt);

	var etiquetaIMG = document.getElementsByClassName('estiloFotos');
							for (var i=0; i < etiquetaIMG.length; i++){
							   etiquetaIMG[i].onclick = false;
							}
}
*/

function func(valor){ //función que se ejecuta cuando le damos a el icono para que se reproduzca la musica
	npregunta_sonido = obtener_numero_pregunta(valor);

	var etiquetaIMG = document.getElementsByClassName('estiloFotos');
							for (var i=0; i < etiquetaIMG.length; i++){
							   etiquetaIMG[i].setAttribute("onclick", "comprobarRespCorrectaSound(this.id);");
							}

	/**comprobar con api de google**/
	//valorPalabrapronunciar = smile_datos.preguntas[3].pregunta;
	//value = "http://translate.google.com/translate_tts?tl=en&q="+valorPalabrapronunciar;
	//document.getElementById("sound_word").style.display="none";
	//document.getElementById("reproduccionWord").style.display="inline";
	//$("#reproduccionWord").attr("src",value);
	/*************************************************/
	document.getElementById("n"+npregunta_sonido+"_"+"sound_word").style.transform="";
	document.getElementById("n"+npregunta_sonido+"_"+"reproduccionWord").style.display="none";
	value="../media/dont_need_roads.mp3";
	$("#n"+npregunta_sonido+"_"+"reproduccionWord").attr("src",value);
	document.getElementById("n"+npregunta_sonido+"_"+"reproduccionWord").play();
}
/*
function cambiarIcono(){
	$("#sound_word").show();
	$("#reproduccionWord").hide();
}
*/

function comprobarRespCorrecta(id){ //funcion que comprueba las respuesta de las imagenes.
	respuestaCorrecta = preguntaActual.correcta;
	valorImagenPresionada = id.substring(25);
	//alert(valorImagenPresionada);
				if(valorImagenPresionada==respuestaCorrecta){
					//Marcamos en verde la respuesta correcta
					//$("#"+id).css("border", "0.8em solid");
					//$("#"+id).css("border-color", "#01DF01");
					document.getElementById(id).parentNode.style.border="0.8em solid #01DF01";
						var etiquetaIMG = document.getElementsByClassName('estiloFotos');
							for (var i=0; i < etiquetaIMG.length; i++){
							   etiquetaIMG[i].onclick = false;
							}
					preguntaActual.resultado=1; //1 respuesta correcta
					setTimeout(p_01171_ganar_smile_animacion("+"),1);
				}else{
					preguntaActual.resultado=0; //0 respuesta correcta
					setTimeout(p_01171_ganar_smile_animacion("-"),1);
					//Marcamos en rojo la respuesta Incorrecta
					//$("#"+id).css("border", "0.8em solid");
					//$("#"+id).css("border-color", "#ff0000");
					document.getElementById(id).parentNode.style.border="0.8em solid #ff0000";
					//Marcamos en verde la respuesta correcta
					//$("#p_00001_img_respuesta_"+respuestaCorrecta).css("border", "0.8em solid");
					//$("#p_00001_img_respuesta_"+respuestaCorrecta).css("border-color", "#01DF01");
					document.getElementById("p_00001_img_respuesta_"+respuestaCorrecta).parentNode.style.border="0.8em solid #01DF01";
					var etiquetaIMG = document.getElementsByTagName('img');
							for (var i=0; i < etiquetaIMG.length; i++){
							   etiquetaIMG[i].onclick = false;
							}
				}
}

function comprobarRespCorrectaSound(id){
	respuestaCorrecta = preguntaActual.correcta;
	valorImagenPresionada = id.substring(30);
	//alert(valorImagenPresionada);
				if(valorImagenPresionada==respuestaCorrecta){
					//Marcamos en verde la respuesta correcta
					//$("#"+id).css("border", "0.8em solid");
					//$("#"+id).css("border-color", "#01DF01");
					document.getElementById(id).parentNode.style.border="0.8em solid #01DF01";
						var etiquetaIMG = document.getElementsByClassName('estiloFotos');
							for (var i=0; i < etiquetaIMG.length; i++){
							   etiquetaIMG[i].onclick = false;
							}
					document.getElementById("reproduccionWord").pause();
					preguntaActual.resultado=1; //1 respuesta correcta
					setTimeout(p_01171_ganar_smile_animacion("+"),1);
				}else{
					preguntaActual.resultado=0; //1 respuesta incorrecta
					document.getElementById("reproduccionWord").pause();
					setTimeout(p_01171_ganar_smile_animacion("-"),1);
					//Marcamos en rojo la respuesta Incorrecta
					//$("#"+id).css("border", "0.8em solid");
					//$("#"+id).css("border-color", "#ff0000");
					document.getElementById(id).parentNode.style.border="0.8em solid #ff0000";
					//Marcamos en verde la respuesta correcta
					//$("#p_00001_img_respuesta_"+respuestaCorrecta).css("border", "0.8em solid");
					//$("#p_00001_img_respuesta_"+respuestaCorrecta).css("border-color", "#01DF01");
					document.getElementById("p_00001_img_respuesta_sound"+respuestaCorrecta).parentNode.style.border="0.8em solid #01DF01";
					var etiquetaIMG = document.getElementsByTagName('img');
							for (var i=0; i < etiquetaIMG.length; i++){
							   etiquetaIMG[i].onclick = false;
							}
				}
}

</script>
