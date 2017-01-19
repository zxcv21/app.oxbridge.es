<!--
-Pag. ID: p_01174;
-->
<link href="jquery-ui-1.11.4/jquery-ui.css" rel="stylesheet" type="text/css" />
<script src="jquery-ui-1.11.4/jquery-1.11.2.js"></script>
<script src="jquery-ui-1.11.4/jquery-ui.js"></script>
<script  type = "text/javascript"  src = "//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js" ></script> 
<script  type = "text/javascript"  src = "//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js" ></script> 
<script  type = "text/javascript"  src = "//cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js" ></script>
<script language="javascript">
function p_01174_loadpreguntas(){ //funcion que permite ejecutar las siguiente funciones con solo cargar la página.
//barraProgreso();
document.getElementById("p_01175_smile_estructura_"+smile_datos.preguntas[0].tipo).style.display="inline";
if(smile_datos.preguntas[0].tipo=="fotos"){
	mostrarImagenes();
}
isMobile(); // me detecta si la página se ejecuta desde un movil, o un tablet, o un PC.
setInterval(function(){ comprobarMarcaOpcionTF(); });
setInterval(function(){ comprobarMarcaOpcionM0(); });
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

 loadCss = function(src) {
     $("#estilos").attr("href",src); 
 };
 /*
 function cambioResolucionPantalla(){
	if(window.screen.availWidth == 1280)window.parent.document.body.style.zoom="120%" 
	if(window.screen.availWidth == 1152)window.parent.document.body.style.zoom="108%" 
	if(window.screen.availWidth == 1024)window.parent.document.body.style.zoom="96%" 
	if(window.screen.availWidth == 800)window.parent.document.body.style.zoom="75%"; 
	if(window.screen.availWidth == 640)window.parent.document.body.style.zoom="60%" 
 }
 */

//variable global
var IDPREGUN;
var valorBotnPresionadoTF;
var valorBotnPresionadoMOPTION;
var valorBotnPresionadoWRITING;
var valorBotnPresionadoFillGaps;
var valorBotnPresionadoRIW;

function cambioPregunta(valor){

	switch (valor){
		
		case "pregun1": $("#pregun1").hide();
						$("#pregun2").show();
						break;
		case "pregun2": $("#pregun2").hide();
						$("#pregun3").show();
						break;
		case "pregun3": $("#pregun3").hide();
						$("#pregun4").show();
						break;
		case "pregun4": $("#pregun4").hide();
						$("#pregun5").show();
						break;
		case "pregun5": $("#pregun5").hide();
						$("#pregun6").show();
						break;
	}
}
function comprobarMarcaOpcionTF(){ //Función que comprueba si se ha elegido una opción para después cambiar el icono del botón
	grupoPreguntas = document.getElementsByName("gruupPreguntas");
	for (i=0;i<grupoPreguntas.length;i++){ 
      	 if (grupoPreguntas[i].checked){
			 $("#botonPasarTF").hide();
			 $("#botonTF").show();
			 }
	}
	if (document.getElementById("acepto1").checked == true){
		$('#acepto2').attr('checked', false);
		$('#acepto3').attr('checked', false);
	}else if(document.getElementById("acepto2").checked == true){
		$('#acepto1').attr('checked', false);
		$('#acepto3').attr('checked', false);
	}else if(document.getElementById("acepto3").checked == true){
		$('#acepto1').attr('checked', false);
		$('#acepto2').attr('checked', false);
	}
	
	if(document.getElementById("acepto1").checked == false && document.getElementById("acepto2").checked == false && document.getElementById("acepto3").checked == false){
		$("#botonTF").hide();
		$("#botonPasarTF").show();
	}
}
function comprobarMarcaOpcionM0(){
	grupPreguntas = document.getElementsByName("gruupPreguntasMulti");
	for (i=0;i<grupPreguntas.length;i++){ 
      	 if (grupPreguntas[i].checked==true){
			$("#botonPasarMO").hide();
			$("#botonMO").show();
		}
	}
	/* Comprobamos que si no hay marcados ponemos el botón de pasar pregunta sin responder*/
	if(document.getElementById("checkbox1").checked == false && document.getElementById("checkbox2").checked == false && document.getElementById("checkbox3").checked == false){
		$("#botonMO").hide();
		$("#botonPasarMO").show();
	}
}

function obtenerValor(){
	grupoPreguntas = document.getElementsByName("gruupPreguntas");
		for (i=0;i<grupoPreguntas.length;i++){ 
			 if (grupoPreguntas[i].checked){
				 break; 
		}
	}
	valorBotonPresionado = grupoPreguntas[i].value;
	alert(valorBotonPresionado);
	//myStopIntervalo(limpiadorSInterval);
	//barraProgreso();

}

function obtenerValorMultirespuesta(){

	valorBotnPresionado = new Array;
	
	grupPreguntas = document.getElementsByName("gruupPreguntasMulti");
	
	for (i=0;i<grupPreguntas.length;i++){ 
      	 if (grupPreguntas[i].checked){
			valorBotnPresionado.push(grupPreguntas[i].value); //añadimos los valores que se hayan chekeado a la ultima posicion del array.
		 }
   	}
		
	for (s=0;s<valorBotnPresionado.length;s++){
		alert(valorBotnPresionado[s]); //mostramos los valores que hay en el array recogido el array.
	}
}

function contarPalabras(idpregun){ //funcion que cuenta las palabras de la pergunta WRITING
	
	 textoAreaDividido  = new Array;
	
	 textoArea = document.getElementById("area").value;
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
			setError("err_faltaTexto","<font color='black'>" + "minium is 150 words <br>" + "you have: " +"</font>" + "<font color='red'>" + numeroPalabras + "</font>");
			setError("err_faltaTexto","Words: " + "<font color='black'>" + numeroPalabras + "</font>");
			$("#botonWTING").hide();
			$("#botonPasarWRTING").show();
		}else if(numeroPalabras>=150){
			setError("err_faltaTexto","Words: " + "<font color='black'>" + numeroPalabras + "</font>");
			$("#botonPasarWRTING").hide();
			$("#botonWTING").css('display', 'inline-block');
		}
		if(numeroPalabras>=180){
			//alert("Maximo son 180 palabras. " + " tienes " + numeroPalabras);
			longpalabras.className="error"
			setError("err_faltaTexto","<font color='black'>" + "maximun is 180 words <br>" + "you have: " +"</font>" + "<font color='red'>" + numeroPalabras + "</font>");
			$("#botonWTING").hide();
			$("#botonPasarWRTING").show();			
		}
}

function guardarPalabrasEnviar(idpregun){ //boton verde WRITING
	 cambioPregunta(idpregun);
		ArrayPalabrasEnviar  = new Array;
	 textoArea = document.getElementById("area").value;
	  numeroCaracteres = textoArea.length;
	  ArrayPalabrasEnviar = textoArea.split(" ");
	  alert(ArrayPalabrasEnviar);
}

function guardarPalabrasEnviarRIW(idpregun){ //boton verde READING INTO WRITING
	 cambioPregunta(idpregun);
	ArrayPalabrasEnviarRIW  = new Array;
	 textoArea = document.getElementById("areaRIW").value;
	  numeroCaracteres = textoArea.length;
	  ArrayPalabrasEnviarRIW = textoArea.split(" ");
	  alert(ArrayPalabrasEnviarRIW);
}

function contarPalabrasRIW(idpregun){ //funcion que cuenta las palabras de la pergunta READING INTO WRITING
	
	 textoAreaDivididoRIW  = new Array;
	
	 textoArea = document.getElementById("areaRIW").value;
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
			setError("err_faltaTextoRIW","<font color='black'>" + "minium is 150 words <br>" + "you have: " +"</font>" + "<font color='red'>" + numeroPalabras + "</font>");
			setError("err_faltaTextoRIW","Words: " + "<font color='black'>" + numeroPalabras + "</font>");
			$("#botonRIW").hide();
			$("#botonPasarRIW").show();
		}else if(numeroPalabras>=150){
			setError("err_faltaTextoRIW","Words: " + "<font color='black'>" + numeroPalabras + "</font>");
			$("#botonPasarRIW").hide();
			$("#botonRIW").css('display', 'inline-block');
		}
		if(numeroPalabras>=180){
			//alert("Maximo son 180 palabras. " + " tienes " + numeroPalabras);
			longpalabras.className="error"
			setError("err_faltaTextoRIW","<font color='black'>" + "maximun is 180 words <br>" + "you have: " +"</font>" + "<font color='red'>" + numeroPalabras + "</font>");
			$("#botonRIW").hide();
			$("#botonPasarRIW").show();			
		}
}

$(function(){ //función de PREGUNTA WRITING GUARDAR

var save = function() {
	 //alert("ok");
	 cambioPregunta(IDPREGUN);
	ArrayPalabras  = new Array;
	 textoArea = document.getElementById("area").value;
	  numeroCaracteres = textoArea.length;
	  ArrayPalabras = textoArea.split(" ");
	  alert(ArrayPalabras);
	 $("#myDialogGuardar").toggle("explode").dialog("close"); 
}; 

//funcion cierra el dialogo
  var cancel = function() {
		$("#myDialogGuardar").toggle( "explode").dialog("close"); 
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
$("#myDialogGuardar").dialog(dialogOp);});
/***************************************************/

$(function(){ //función de PREGUNTA READING INTO WRITING GUARDAR

var saved = function() {
	 //alert("ok");
	 cambioPregunta(IDPREGUN);
	ArrayPalabrasRIW  = new Array;
	 textoArea = document.getElementById("areaRIW").value;
	  numeroCaracteres = textoArea.length;
	  ArrayPalabrasRIW = textoArea.split(" ");
	  alert(ArrayPalabrasRIW);
	 $("#myDialogGuardarRIW").toggle("explode").dialog("close"); 
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

$(function(){ //Función de PREGUNTA TRUE-FALSE

var aceptar = function() {
	 //alert("ok");
	 cambioPregunta(IDPREGUN);
	valorBotnPresionadoTF=0;
	//alert(valorBotnPresionadoTF);
	 $("#myDialogPasarPregTF").dialog("close"); 
	 myStopIntervalo(limpiadorSInterval);
	 barraProgreso();
}; 

//funcion cierra el dialogo
  var cancelar = function() {
		$("#myDialogPasarPregTF").dialog("close"); 
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
$("#myDialogPasarPregTF").dialog(dialogOp);});
/***************************************************/

$(function(){ //Función de PREGUNTA MULTIOPTION

var aceptar = function() {
	 //alert("ok");
	 cambioPregunta(IDPREGUN);
	valorBotnPresionadoMOPTION=0;
	//alert(valorBotnPresionadoMOPTION);
	 $("#myDialogPasarPregMOPTION").toggle("explode").dialog("close"); 
}; 

//funcion cierra el dialogo
  var cancelar = function() {
		$("#myDialogPasarPregMOPTION").toggle( "explode").dialog("close"); 
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
$("#myDialogPasarPregMOPTION").dialog(dialogOp);});
/***************************************************/

$(function(){ //Función de PREGUNTA FILL-GAPS

var aceptar = function() {
	 //alert("ok");
	 cambioPregunta(IDPREGUN);
	valorBotnPresionadoFillGaps=0;
	//alert(valorBotnPresionadoFillGaps);
	 $("#myDialogPasarPregFillGaps").toggle("explode").dialog("close"); 
}; 

//funcion cierra el dialogo
  var cancelar = function() {
		$("#myDialogPasarPregFillGaps").toggle( "explode").dialog("close"); 
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
$("#myDialogPasarPregFillGaps").dialog(dialogOp);});
/***************************************************/
//valoresDragDrop  = new Array;

$(function() {
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
					//alert (id);
	document.getElementById(id).innerHTML="<b><font color='red'>"+valor+"<b>";
	valorDivDrop = document.getElementById(id).value=valor;
	pintar_verde=true;
	for(i=1;i<4;i++){
		if(!document.getElementById("palabra_"+i).value){
			pintar_verde=false;
		}
	}
}

if(pintar_verde==true){
	$("#botonPasarFILGAPS").hide();
	$("#botonFG").show();
}
valor1P = $("#palabra_1").val();
valor2P = $("#palabra_2").val();
valor3P = $("#palabra_3").val();

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
$("#palabra_1").droppable(dropOpts);
$("#palabra_2").droppable(dropOpts);
$("#palabra_3").droppable(dropOpts);}); 

$(function(){ //Función de PREGUNTA WRITING

var aceptar = function() {
	 //alert("ok");
	 cambioPregunta(IDPREGUN);
	valorBotnPresionadoWRITING=0;
	//alert(valorBotnPresionadoWRITING);
	 $("#myDialogPasarPregWRITING").toggle("explode").dialog("close"); 
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

$(function(){ //Función de PREGUNTA READING INTO WRITING

var aceptar = function() {
	 cambioPregunta(IDPREGUN);
	valorBotnPresionadoRIW=0;
	//alert(valorBotnPresionadoRIW);
	 $("#myDialogPasarPregRIW").toggle("explode").dialog("close"); 
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
function muestraGuardar(Idpregunta){ //Muestra dialogo WRITING por si queremos guardar el texto o no.
	if(!$("#myDialogGuardar").dialog("isOpen")){
		$("#myDialogGuardar").dialog("open");
	}
	IDPREGUN = Idpregunta;
}
function muestraGuardarRIW(Idpregunta){ //Muestra dialogo READING INTO WRITING por si queremos guardar el texto o no.
	if(!$("#myDialogGuardarRIW").dialog("isOpen")){
		$("#myDialogGuardarRIW").dialog("open");
	}
	IDPREGUN = Idpregunta;
}
function muestraPasarSguardar(Idpregunta){ //Muestra dialogo TRUE-FALSE
	if(!$("#myDialogPasarPregTF").dialog("isOpen")){
		$("#myDialogPasarPregTF").dialog("open");
	}
	IDPREGUN = Idpregunta;
}

function muestraPasarSguardarMoption(Idpregunta){ //Muestra dialogo MULTIOPTION
	if(!$("#myDialogPasarPregMOPTION").dialog("isOpen")){
		$("#myDialogPasarPregMOPTION").dialog("open");
	}
	IDPREGUN = Idpregunta;
}

function muestraPasarSguardarWRITING(Idpregunta){ //Muestra dialogo WRITING
	if(!$("#myDialogPasarPregWRITING").dialog("isOpen")){
		$("#myDialogPasarPregWRITING").dialog("open");
	}
	IDPREGUN = Idpregunta;
}

function muestraPasarSguardarFILLGAPS(Idpregunta){ //Muestra dialogo WRITING
	if(!$("#myDialogPasarPregFillGaps").dialog("isOpen")){
		$("#myDialogPasarPregFillGaps").dialog("open");
	}
	IDPREGUN = Idpregunta;
}
function muestraPasarSguardarRIW(Idpregunta){ //Muestra dialogo READING INTO WRITING
	if(!$("#myDialogPasarPregRIW").dialog("isOpen")){
		$("#myDialogPasarPregRIW").dialog("open");
	}
	IDPREGUN = Idpregunta;
}

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

function mostrarImagenes(){
	document.getElementById("word").innerHTML=smile_datos.preguntas[0].pregunta; 
		txt="";
	for (x=0;x<4;x++){
		txt+="<div id="+x+" class='estiloFotos'><img id=p_00001_img_respuesta_"+x+" src=" + smile_datos.preguntas[0].respuestas[x] + " onclick='comprobarRespCorrecta(this.id);'></img></div>";
	}
		$("#imagenes").html(txt);
}

function comprobarRespCorrecta(id){
	respuestaCorrecta = smile_datos.preguntas[0].correcta;
	
	valorImagenPresionada = id.substring(22);
	//alert(valorImagenPresionada);
				if(valorImagenPresionada==respuestaCorrecta){
					//Marcamos en verde la respuesta correcta
					$("#"+id).css("border", "3px solid");
					$("#"+id).css("border-color", "#01DF01");
						var etiquetaIMG = document.getElementsByTagName('img');
							for (var i=0; i < etiquetaIMG.length; i++){
							   etiquetaIMG[i].onclick = false;
							}
				}else{
					
					//Marcamos en rojo la respuesta Incorrecta
					$("#"+id).css("border", "3px solid");
					$("#"+id).css("border-color", "#ff0000");
					//Marcamos en verde la respuesta correcta
					$("#p_00001_img_respuesta_"+respuestaCorrecta).css("border", "3px solid");
					$("#p_00001_img_respuesta_"+respuestaCorrecta).css("border-color", "#01DF01");
					var etiquetaIMG = document.getElementsByTagName('img');
							for (var i=0; i < etiquetaIMG.length; i++){
							   etiquetaIMG[i].onclick = false;
							}
				}
}
	
</script>