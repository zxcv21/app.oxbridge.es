<!--
-ID Pag: p_00989
-NAME: p_00989_jscript.php
-->

<script>
//p_00989_minimo_firmas= 3;
//funciones php
<?
	function p_00989_file_get_contents($url){

		if($datos = file_get_contents($url)){
			echo $datos;
		}else{
			echo "<script>console.error('ERROR consulta:".$url."');</script>";
			p_00989_file_get_contents($url);
		}
	}
?>

///////////////////////////////////////SELECTOR DE DISPOSITIVO/////////////////////////////////////////
	var dispositivo = navigator.userAgent.toLowerCase();
	if((navigator.userAgent.toLowerCase()+" "+navigator.platform.toLowerCase()).search(/mobi|mobile|mini|iphone|ipod|ipad|android|blackberry/) > -1){
		NAV = 'movil';
		if(navigator.platform.toLowerCase().search(/window/) > -1){
			window.location='http://s.oxbridge.es/ox/alumno/menu 01.asp?SESIONID=<? echo $sesion_id_vieja.'&UID='.$alumno_id; ?>';
		}
	}else{
		if(navigator.userAgent.search("OPR") != -1) NAV = "Opera";
		else if(navigator.userAgent.search("Firefox") != -1) NAV = "FireFox";
		else if(navigator.userAgent.search("Chrome") != -1) NAV = "Chrome";
		else if(navigator.userAgent.search("Safari") != -1) NAV = "Safari";
		else NAV = "Ie";
	}
	//console.info("NAV: "+navigator.userAgent.toLowerCase());

	//REDIRECCION SEGUN DISPOSITIVO
	/*if(NAV!="movil"){
		document.location = 'http://app.oxbridge.es/';
	}*/

//FORMULARIO CON COMPRABACION DE SES
function p_00989_agregar_comprobacion_ses(formulario,funcion,iframe,id_pag){

	if(typeof id_pag=="undefined")id_pag="p_0001299_";

	if(typeof sesion_id!="undefined"){
		var formu=document.getElementById(formulario);
		formu.setAttribute("target",iframe);
		formu.insertAdjacentHTML("beforeEnd",""+
			"<input type='hidden' name='"+id_pag+"input_sesion_id' value='"+sesion_id+"'>"+
			"<input type='hidden' name='"+id_pag+"input_sesion_uid'  value='"+alumno_id_nuevo+"'>"+
			"<input type='hidden' name='"+id_pag+"input_area_id'  value='3'>"+
			"<input type='hidden' name='"+id_pag+"input_disparador_js'  value=\""+funcion+"\">"
		);
	}
}


<?
////////////////////////////////////////////////////----COMPROBACION DE SESION----///////////////////////////////////////////////////

//alumnoID
if ( isset($_POST["p_0000989_input_alumno_id"]) ){
	$alumno_id = $_POST["p_0000989_input_alumno_id"];
	echo "var alumno_id=".$alumno_id.";";
}else{
	if ( isset($_GET["p_0000989_get_alumno_id"]) ){
		$alumno_id = $_GET["p_0000989_get_alumno_id"];
		echo "var alumno_id=".$alumno_id.";";
	}else{
		echo "var alumno_id=0;";
		$alumno_id = 0;
	}
}
//echo "var alumno_id=40830;";
//$alumno_id = 40830;

//alumno id nuevo
if ( isset($_POST["p_0000989_input_alumno_id_nuevo"]) ){
	$alumno_id_nuevo = $_POST["p_0000989_input_alumno_id_nuevo"];
	echo "var alumno_id_nuevo=".$alumno_id_nuevo.";";
}else{
	if ( isset($_GET["p_0000989_get_alumno_id_nuevo"]) ){
		$alumno_id_nuevo = $_GET["p_0000989_get_alumno_id_nuevo"];
		echo "var alumno_id_nuevo=".$alumno_id_nuevo.";";
	}else{
		$alumno_id_nuevo = 0;
		echo "var alumno_id_nuevo=0;";
	}
}
//$alumno_id_nuevo = 2273;
//echo "var alumno_id_nuevo=2273;";

//sesion id
if ( isset($_POST["p_0000989_input_sesion_id"]) ){
	$sesion_id = $_POST["p_0000989_input_sesion_id"];
	echo "var sesion_id=".$sesion_id.";";
}else{
	if ( isset($_GET["p_0000989_get_sesion_id"]) ){
		$sesion_id = $_GET["p_0000989_get_sesion_id"];
		echo "var sesion_id=".$sesion_id.";";
	}else{
		$sesion_id = 0;
	}
}
//$sesion_id = 22302;
//echo "var sesion_id=20604;";


//sesion id vieja
if ( isset($_POST["p_0000989_input_sesion_msaccess_id"]) ){
	$sesion_id_vieja = $_POST["p_0000989_input_sesion_msaccess_id"];
	echo "var sesion_id_vieja=".$sesion_id_vieja.";";
}else{
	if ( isset($_GET["p_0000989_get_sesion_msaccess_id"]) ){
		$sesion_id_vieja = $_GET["p_0000989_get_sesion_msaccess_id"];
		echo "var sesion_id_vieja=".$sesion_id_vieja.";";
	}else{
		$sesion_id_vieja = 0;
	}
}
//$sesion_id_vieja = 286202;
//echo "var sesion_id_vieja=278448;";

echo "console.info('LOGIN:');".
	//	"console.log('-new_alumno: ".$alumno_id_nuevo."');".
		"console.log('-----alumno: ".$alumno_id."');";
	//	"console.log('--------ses: ".$sesion_id."');".
	// 	"console.log('----old_ses: ".$sesion_id_vieja."');";

//////////////////////////////////////////////////-----------/////////////////////////////////////////////////////////////////////



//////////////////////////DEFINICIONES

//VIP

	function VIP($id){
		$vip="";
		$r=false;
		foreach (array(31899,32032,23019,22618,20670,31951,26635) as $vip){if($id==$vip){$r=true;}}
		return $r;
	}
?>
	function VIP(){
		var p_00989_vip=[31899,32032,23019,22618,20670,31951,26635];
		var r=false;
		for(i in p_00989_vip)if(alumno_id==p_00989_vip[i])r=true;
		return r;
	}




ZHORARIA=2;

//array coloers
COLOR=["#E7112D","#00997A","#CCE227","#F993C3","#AB711F","#3044B5","#57AA1C","#7F263C","#266658","#F8E817","#96938E","#FF5001","#002653","#B5E8BF","#F59A27","#F3C9CA","#5F605A","#EDC788","#F5ADC1","#F4DA5F","#DC682D","#F7E7A9","#894FBF","#52BEE2","#D60270","#9CC3E2"];

//NOMBRE DE BANDERA REDUCIDO
function p_00989_reducir_bandera(nombre){
	switch(nombre.toLowerCase()){
		case "español":
		case "castellano":
		case "esp":{return "esp";	break;}

		case "catalan":
		case "català":
		case "catala":
		case "cat":{return "cat";	break;}

		case "ingles":
		case "english":
		case "ing":{return "ing";	break;}

		default:{return "ing";	break;}
	}
}

//array banderas
p_00989_banderas=[version_pagina+"images/esp.png",version_pagina+"images/cat.png",version_pagina+"images/ing.png"/*,version_pagina+"images/fra.png",version_pagina+"images/ale.png"*/];

//mostrar idioma
function imprimir_banderas(e_idioma,e,menos){

	document.getElementById(e).innerHTML="";
	document.getElementById(e_idioma).innerHTML=''+
		'<img src="<? echo ver_url("images/","src"); ?>boton_'+menos+'.png" onclick="ocultar_mostrar(\'p_00955_head_oxbridge_idiomas\');ocultar_mostrar(\'p_00955_click_out_idioma\')" style="width: auto;">'+
		'<div id="p_00955_click_out_idioma" style="display:none;"></div><div id="p_00955_head_oxbridge_idiomas" style="display:none;"></div>';

	if(typeof menos=="undefined")menos=0;
	for(i in p_00989_banderas){
		if(menos!=p_00989_banderas[i].slice(-7,-4))
			document.getElementById(e).insertAdjacentHTML("beforeEnd","<a href='.?idioma="+p_00989_banderas[i].slice(-7,-4)+"'>"+
			"<img src='"+p_00989_banderas[i]+"'></a>");
	}
}
//menu

ESTOY="";

//orientacion no definida
if(typeof screen.orientation =="undefined")
{
	if((screen.width/screen.height)<1)
	{
		screen.orientation={
				"angle":0,
				"onchange":"",
				"type":"portrait-primary"
			}
	}
	else
	{
		screen.orientation={
				"angle":90,
				"onchange":"",
				"type":"landscape-primary"
			}
	}
}
if(typeof window.orientation)
{
	/*setInterval(function()
	{
		if(window.orientation=="0"&&(screen.width/screen.height)>1)
		{
			window.orientation=90;
			orientacion_cambiada();
		}
		if(window.orientation=="90"&&(screen.width/screen.height)<1)
		{
			window.orientation=0;
			orientacion_cambiada();
		}
	},250);

	if((screen.width/screen.height)<1)
	{
		window.orientation=0;
	}
	else
	{
		window.orientation=90;
	}*/
}




//conseguir zona horaria cliente
	Z_HORARIA = new Date().getTimezoneOffset()/60;

//selector actividad//////////////////////
function ocultar_mostrar(elemento,disp){
		disp = disp || "inline";
		if(disp == 0)disp="";
		if(document.getElementById(elemento).style.display==disp||document.getElementById(elemento).style.display=="")
			document.getElementById(elemento).style.display="none";
		else document.getElementById(elemento).style.display=disp;
		return(document.getElementById(elemento).style.display);
	}


function ocultar_mostrar_filtros(){
	if(document.getElementById('p_00958_horario_header_filtros').style.display=="none")
		document.getElementById("horario").style.paddingTop= "120px";
	else
		document.getElementById("horario").style.paddingTop= "60px";

	ocultar_mostrar('p_00958_horario_header_filtros');
}

	function getPosi(elemento)
	{
	elemento = document.getElementById(elemento);

    var xPosi = 0;
    var yPosi = 0;

    while(elemento) {
        xPosi += (elemento.offsetLeft - elemento.scrollLeft + elemento.clientLeft);
        yPosi += (elemento.offsetTop - elemento.scrollTop + elemento.clientTop);
        elemento = elemento.offsetParent;
    }
    return { x: xPosi, y: yPosi };
}

//contar los dias entre fechas *1º la pequeña (formato Date)
function dias_entre(fecha1,fecha2){
	return Math.round((fecha2-fecha1)/1000/60/60/24);

}

function p_00989_mostrar_reservas(){
	if(document.getElementById("p_00958_horario_clases_reservadas").style.display=="none"){
		document.getElementById('p_00958_filtros_y_horario').style.display='none';
		document.getElementById('p_00958_horario_menu_filtros').style.display='none';
		ocultar_mostrar('p_00958_horario_clases_reservadas','inline-block')
	}
	else{
		mover_menu(true,'p_00987_menu_horario');
		document.getElementById('p_00958_horario_menu_filtros').style.display='';
	}
}
//convertir numero en dias/mes
function numToDate(dia){
	if(String(dia).length==1)
		return "0"+dia;
	else
		return dia;
}

//funciones para llamar en cambio de tamaño
function reSize(){
	var w = window.outerWidth;
	var h = window.outerHeight;

	//tamaño menu apartados
	setTimeout(p_00989_resize_menu_apartados,50);
}

//ajustar menu apartados
function p_00989_resize_menu_apartados(){
}


//window.addEventListener("resize",p_0100_contenedor_resize,false);

function p_0100_contenedor_resize(){
	//acomodar tamaño contenedor horario y posicion

	e_horario_contenedor=document.getElementById(ESTOY);
	//e_horario_contenedor.style.height=document.getElementById("contenedor").offsetHeight+"px";
	e_head_ox=document.getElementById("head_oxbridge");
	//e_horario_contenedor.style.marginTop=e_head_ox.offsetHeight+e_head_ox.offsetTop*1.5+"px";

	//tamaño no deformado de los botones
	document.getElementById("head_oxbridge_img").style.width="1px";
	setTimeout(function(){document.getElementById("head_oxbridge_img").style.width="auto";},1);
	document.getElementById("p_00955_head_oxbridge_idioma").childNodes[1].style.width="1px";
	setTimeout(function(){document.getElementById("p_00955_head_oxbridge_idioma").childNodes[1].style.width="auto";},1);
	//document.getElementById("head_oxbridge_mail").style.width="1px";
	//setTimeout(function(){document.getElementById("head_oxbridge_mail").style.width="auto";},1);
	// redimencionar lineas horario
	i=0;
	while(document.getElementById("p_00995_horario_contenedor_horario_linea_"+i)){
		document.getElementById("p_00995_horario_contenedor_horario_linea_"+i).style.height=e_horario_contenedor.style.height-10+"px";
		i++;
	}
	switch(ESTOY){
		case "clases":{
				setTimeout(function(){p_00960_clases_resize();},2);
		break;}
		default:{break;}
	}

}

//variable anti bloqueo de orientacion
p_00989_BLOQUEAR_ORIENTACION=true;

//corregir orientacion
function orientacion_cambiada(){
	//if(!navigator.userAgent.toLowerCase().search("windows phone")){
/*		if(window.orientation%180==0){
			document.getElementById("bloquear_giro").style.display="none";

			document.getElementById("contenedor").style.width="100%";
			document.getElementById("contenedor").style.height="100%";

			//document.getElementById("contenedor_menu").style.display="inline";
			//document.getElementById("contenedor_menu_lateral").style.display="none";

			document.getElementById("head_oxbridge").style.width= "96%";

			p_01003_clases_girar(false);
		}else{
			if(NAV=="movil"&&p_00989_BLOQUEAR_ORIENTACION)document.getElementById("bloquear_giro").style.display="";

			document.getElementById("contenedor").style.height="100%";
			document.getElementById("contenedor").style.width="100%";

			//document.getElementById("contenedor_menu").style.display="none";
			//document.getElementById("contenedor_menu_lateral").style.display="inline"

			document.getElementById("head_oxbridge").style.width= "85%";
			p_01003_clases_girar(true);
	}

	p_01169_personal_girar();
*/
}
//window.addEventListener("orientationchange", orientacion_cambiada, false);


function p_00989_escuchar_texto(txt) {
	if(txt=="") {
		txt = "ERROR"; // si no hay nada pongo uno por defecto
	}

	// reemplazo los espacios con caracteres +
	reg = /\s+/;
	txt  = txt.replace(reg,'+');

	//creo la url
	var url = "http://translate.google.com/translate_tts?tl=en&q=" + txt;
	if(document.getElementById("iframe_escuchar_palabra")){
		document.getElementById("iframe_escuchar_palabra").src=url;
	}else{
		var salida = "<iframe id='iframe_escuchar_palabra' rel='noreferrer' style='display:none' src='" + url + "'></iframe>";
		document.body.insertAdjacentHTML("beforeEnd",salida);
	}
}

// cargar nueva clase
function p_01169_cargar_clase(){
	document.getElementById("p_00960_clases_head_foto").style.display="none";
	document.getElementById("p_00960_clases_head_foto_lupa").style.display="none";
	document.getElementById("p_00960_clases_head_valoracion").style.visibility="hidden";
	document.getElementById("p_00960_clases_head_info_titulo").style.visibility="hidden";
	document.getElementById("p_00960_clases_actividades_titulo").style.visibility="hidden";
	document.getElementById("p_00960_clases_head_nombre").innerHTML="";
	document.getElementById("p_00960_clases_actividades_box").innerHTML=""+
		"<center>"+
			"<img style='"+
			"		height:100px;"+
			"		-moz-animation: p_00995_horario_loading infinite 1s linear;"+
			"		-webkit-animation: p_00995_horario_loading infinite 1s linear;"+
			"		animation:p_00995_horario_loading infinite 1s linear;"+
			"' src='<? echo ver_url("images/loading.png","src"); ?>'>"+
		"</center>";

}

//funciones cargando datos
function p_00989_cargando(id,he){
	if(typeof he == "undefined")he="1em";

	document.getElementById(id).innerHTML=""+
		"<img style='"+
		"		height:"+he+";"+
		"		-moz-animation: p_00995_horario_loading infinite 1s linear;"+
		"		-webkit-animation: p_00995_horario_loading infinite 1s linear;"+
		"		animation:p_00995_horario_loading infinite 1s linear;"+
		"' src='<? echo ver_url("images/loading.png","src"); ?>'>";
}


//correccion de textos general
function p_00989_corrige_general(texto){
	texto=texto.replace("\r","");
	texto=texto.replace("\\","&#92;");
	texto=texto.replace("'","&#39;");
	texto=texto.replace("<","&lt;");
	texto=texto.replace(">","&gt;");
	texto=texto.replace("\n","&#10");
	return texto;
}

//confirmacion envio de mail
function p_00989_email_enviado(enviado){
	if(enviado){
		p_00989_animacion_envio_mail();
		document.getElementById('p_00995_formulario_mail_contenedor').style.display='none';
		document.getElementById('p_00995_formulario_mail_img_cargando').style.display="none";
	}else{

	}
}

//confirmacion envio de mail + horario
function p_00989_email_mas_enviado(enviado){
	if(enviado){
		//p_00989_animacion_envio_mail();
		document.getElementById('p_00958_formulario_mas_horario_contenedor').style.display='none';
		document.getElementById('p_00995_formulario_mail_mas_img_cargando').style.display='none';
	}else{

	}
}

//animacion mail enviado
function p_00989_animacion_envio_mail(){
	var img = document.getElementById("head_send_email_img");

	img.style.opacity="1";
	img.style.mozTransform="scale(8) translate(-35%,70%) rotate(360deg)";
	img.style.webkitTransform="scale(8) translate(-35%,70%) rotate(360deg)";
	img.style.transform="scale(8) translate(-35%,70%) rotate(360deg)";
		img.style.display="";
	setTimeout(function(){
		img.style.mozTransform="";
		img.style.webkitTransform="";
		img.style.transform=")";
	},100);
	setTimeout(function(){
		img.style.opacity="0";
		img.style.display="none";
	},1100);
}

//errores de img
function p_00989_error_img(url)
{
	document.getElementById('p_00995_formulario_envio_email').src='<? echo ver_url("p_01392_email.php","src"); ?>p_01392_email.php'+
	'?to=1'+
	'&from=OxApp'+
	'&cc=4'+
	'&subject=Error IMG'+
	'&txt=<html>Visto por: '+personal_datos_info.nombre+' '+personal_datos_info.apellido_1+
	'<br>Mail: '+personal_datos_info.email+
	'<br>ID: '+alumno_id+
	'<br><br>URL:<br><a href="'+url+'">'+url+'</a>'+
	'</html>';
}

//llamada a JSON JScript
window.initMap=function(){}
function p_00989_get_json(url,funcion)
{
	var xmlhttp = new XMLHttpRequest();

	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			var json = JSON.parse(xmlhttp.responseText);
			funcion(json);
		}
	};
	xmlhttp.open("GET", url, true);
	xmlhttp.send();
}

//evitar que logiin se encoja con el teclado de movil
function p_00989_escuchar_login_input_focus()
{
	document.getElementById("p_0001317_input_form_relogin_usuario").addEventListener("focus",function(){p_00989_evitar_enoger(1);});
	document.getElementById("p_0001317_input_from_relogin_password").addEventListener("focus",function(){p_00989_evitar_enoger(1);});
	document.getElementById("p_0001318_form_login_recover_usuario").addEventListener("focus",function(){p_00989_evitar_enoger(1);});

	document.getElementById("p_0001317_input_form_relogin_usuario").addEventListener("blur",function(){p_00989_evitar_enoger(0);});
	document.getElementById("p_0001317_input_from_relogin_password").addEventListener("blur",function(){p_00989_evitar_enoger(0);});
	document.getElementById("p_0001318_form_login_recover_usuario").addEventListener("blur",function(){p_00989_evitar_enoger(0);});
}

function p_00989_evitar_enoger(estado)
{
	if(estado)
	{
		document.getElementById("p_0001317_div_login").style.height=document.getElementById("p_0001317_div_login").offsetHeight+"px";
	}
	else
	{
		setTimeout(function()
		{
			if(
				document.activeElement.id!="p_0001317_input_form_relogin_usuario"
				&& document.activeElement.id!="p_0001317_input_from_relogin_password"
				&& document.activeElement.id!="p_0001318_form_login_recover_usuario"
			)
			{
				document.getElementById("p_0001317_div_login").style.height="";
			}
		},1);
	}
}


//funcion final de garga login
function p_00989_final_carga_login()
{
	p_00989_escuchar_login_input_focus();
}

//rellenar con 0 delante
function p_00989_rellenar_con_0(numero,largo)
{
	numero +="";
	while( numero.length < largo )
	{
		numero = 0+""+numero;
	};
	if(numero.length==9)
	{
		return numero;
	}
	else
	{
		return null;
	};
}

function p_00989_separar_date_YY_MM_DD(p_00989_date){
	p_00989_separar_date_YY_MM_DD_return= [p_00989_date.split("/")[0],p_00989_date.split("/")[1],p_00989_date.split("/")[2]];
	return p_00989_separar_date_YY_MM_DD_return;
}
function p_00989_separar_hora_HH_MM(p_00989_hora){
	p_00989_separar_hora_HH_MM_return= [p_00989_hora.split(":")[0],p_00989_hora.split(":")[1]];
	return p_00989_separar_hora_HH_MM_return;
}

function p_00989_contar_firmas_pendientes(){
//monica
	//for(i in dia_lectivo)
	//	dia_lectivo[i].firmado="0";

	p_00989_firmas_enviadas= 0;
	p_00989_firmas_pendientes= 0;
	for(i in dia_lectivo){
		if((dia_lectivo[i].firmado=="0")&&(dia_lectivo[i].historica=="1")&&(parseInt(dia_lectivo[i].incidencia)==0)&&((parseInt(dia_lectivo[i].asistencia)!=0)||(parseInt(dia_lectivo[i].valoracion)>0))){
			p_00989_firmas_pendientes++;
		}
	}
	p_00989_comprobar_firmas_pendientes();
}


function p_00989_comprobar_firmas_pendientes(){
	if((typeof p_00989_una_vez!='undefined')&&(p_00989_una_vez))
		return
	/*crear mensaje pop-up*/
	if(p_00989_firmas_enviadas>=p_00989_minimo_firmas){
		//document.getElementById("p_00995_cerrar_firma").style.backgroundImage = "url('<? //echo ver_url("images/close.png","src"); ?>')";
		document.getElementById("p_00995_alerta_firmas_pendientes").style.backgroundColor="transparent";
		document.getElementById("p_00995_alerta_firmas_pendientes_mensaje").innerHTML=TEXTOS[205].text;
		document.getElementById("p_00995_alerta_firmas_pendientes_mensaje").style.padding = "11px 0px 0px 0px";
		document.getElementById("p_00995_alerta_firmas_pendientes").innerHTML="<img src='<? echo ver_url("images/deshacer.png","src");?>' style='height:54px;cursor:pointer;border-radius: 50%; box-shadow: 4px 4px 10px;background-color: white;'"+
			" onclick='p_00989_cerrar_firmas();'>";
		document.getElementById("p_00995_ventana_alerta").style.display="block";
		document.getElementById("p_00989_salir_firmas_div").style.display="block";

	}
	else{
		var p_00989_mensaje_numero_firmas;
		var p_00989_numero_firmas_minimo;
		p_00989_numero_firmas_minimo= ((p_00989_firmas_pendientes-p_00989_firmas_enviadas)<(p_00989_minimo_firmas-p_00989_firmas_enviadas))?(p_00989_firmas_pendientes-p_00989_firmas_enviadas):(p_00989_minimo_firmas-p_00989_firmas_enviadas);
		if(p_00989_numero_firmas_minimo>1)
		 p_00989_mensaje_numero_firmas= p_00989_numero_firmas_minimo+ " "+ TEXTOS[208].text;
		else
		 	p_00989_mensaje_numero_firmas= TEXTOS[209].text;

		document.getElementById("p_00995_alerta_firmas_pendientes_mensaje").innerHTML= TEXTOS[210].text+" "+
			p_00989_mensaje_numero_firmas+" "+TEXTOS[211].text;
		document.getElementById("p_00995_alerta_firmas_pendientes").innerHTML=	p_00989_numero_firmas_minimo;
	}
	/*mensaje junto a la fecha*/
	var p_00989_numero_a_mostrar= p_00989_firmas_pendientes-p_00989_firmas_enviadas;
	if(parseInt(p_00989_numero_a_mostrar)>1){

		document.getElementById("p_00995_firmas_restantes").innerHTML=TEXTOS[214].text.replace("[firmas]",p_00989_numero_a_mostrar);
	}
	else
		document.getElementById("p_00995_firmas_restantes").innerHTML=TEXTOS[207].text;


	var p_00989_hora_ultimo_dia= 0;
	var p_00989_ultimo_dia= 0;

	for(i in dia_lectivo){
		if((dia_lectivo[i].firmado=="0")&&(dia_lectivo[i].historica=="1")&&(parseInt(dia_lectivo[i].incidencia)==0)&&((parseInt(dia_lectivo[i].asistencia)!=0)||(parseInt(dia_lectivo[i].valoracion)>0))){
			if(dia_lectivo[i].date_final.getTime()>p_00989_hora_ultimo_dia){
				p_00989_ultimo_dia= i;
				p_00989_hora_ultimo_dia= dia_lectivo[i].date_final.getTime();
			}
		}
	}

	if(p_00989_ultimo_dia){
		p_00989_clase_para_firma= p_00989_ultimo_dia;
		p_00989_crear_formulario_firma(p_00989_ultimo_dia);
		return;
	}
	if(p_0001854_mostrar_pagina_bienvenida_bool)
		p_0001854_mostrar_pagina_bienvenida();

	p_01003_comprobar_alarma();

}

function p_00989_comprobar_cerrar_firmas(){
	var p_00989_mensaje_alert;

	if(((typeof p_00989_firmas_enviadas!='undefined')&&(p_00989_firmas_enviadas>=p_00989_minimo_firmas))||((typeof p_00989_permitir_cerrar!='undefined')&&(p_00989_permitir_cerrar==true))){
		p_00989_cerrar_firmas();
		//document.getElementById("p_00995_firma").style.display="none";
	}

	else{
		document.getElementById("p_00995_ventana_alerta").style.display="block";
	}

	p_00989_permitir_cerrar= false;
}

function p_00989_cerrar_firmas(){
		document.getElementById("p_00995_firma").style.display="none";
		document.getElementById("p_00995_ventana_alerta").style.display="none";
		document.getElementById("p_00989_salir_firmas_div").style.display="none";
		document.getElementById("p_00995_firmas_restantes").innerHTML="";
}


function p_00989_crear_formulario_firma(p_00989_dia){
	ocultar_mostrar('p_00995_firma');
	if((typeof p_00989_una_vez!='undefined')&&(p_00989_una_vez)){
		document.getElementById("p_00995_ventana_alerta").style.display="none";
		document.getElementById("p_00989_salir_firmas_div").style.display="none";
		document.getElementById("p_00995_firmas_restantes").innerHTML="";
	}
	//app/p_01177.. devuelve script que hace display none de botones
	document.getElementById("p_00995_firma_botones").style.display="block";

	//var p_00989_fecha= dia_lectivo[p_00989_dia].fecha_europa+
	//" "+dia_lectivo[p_00989_dia].horaInicio;

	var p_00989_fecha= ("0" + dia_lectivo[p_00989_dia].date_inicio.getDate()).slice(-2)+"/"+
										("0" + (dia_lectivo[p_00989_dia].date_inicio.getMonth()+1)).slice(-2)+"/"+
										dia_lectivo[p_00989_dia].date_inicio.getFullYear()+"   "+
										("0" + dia_lectivo[p_00989_dia].date_inicio.getHours()).slice(-2)+":"+
										("0" + dia_lectivo[p_00989_dia].date_inicio.getMinutes()).slice(-2);

	document.getElementById("p_00995_fecha_firma_dia_hora").innerHTML=p_00989_fecha;
	resizeCanvas();
}

//iniciar aviso de firma
function p_00989_avisos_firmas_set()
{
/*	for(i in dia_lectivo)
	{
		if(dia_lectivo[i].fecha==datos_servidor.fecha)
		{
			if(
				dia_lectivo[i].horaInicio.split(":")[0]>datos_servidor.horario.split(":")[0]
				||(
					dia_lectivo[i].horaInicio.split(":")[0]==datos_servidor.horario.split(":")[0]
					&& dia_lectivo[i].horaInicio.split(":")[1]>datos_servidor.horario.split(":")[1]
				)
			)
			{
				var set_aviso=60*(dia_lectivo[i].horaInicio.split(":")[0]-datos_servidor.horario.split(":")[0]);
				set_aviso+=dia_lectivo[i].horaInicio.split(":")[1]-datos_servidor.horario.split(":")[1];
				p_00989_avisos_firmas_mostrar(i,set_aviso);
			}
		}
	}*/
}

//mostrar aviso firmar clase
function p_00989_avisos_firmas_mostrar(indice,time)
{
/*	console.info("Aviso de firma: "+indice+" en: "+time+"min.");
	setTimeout(function(){
		alert("$TEXTOS[141].text");
		console.info("Firma: "+indice);
		DIA_LEC=indice;

		p_00989_una_vez=true;
		p_00989_crear_formulario_firma(indice);
		p_00989_clase_para_firma= p_00992_clase_cargada;
		p_00989_permitir_cerrar=true;
		resizeCanvas();
		signaturePad.clear();

		//p_00989_crear_formulario_firma(indice);
		//resizeCanvas();
	},time*60*1000);*/
}

function p_00989_firmar_antes_clase(p_00989_dia){
	p_00989_una_vez=true;
	p_00989_crear_formulario_firma(p_00989_dia);
	p_00989_clase_para_firma= p_00989_dia;
	p_00989_permitir_cerrar=true;
	resizeCanvas();
	signaturePad.clear();
}

//entrar sin liogin
function p_00989_entrar_sin_login()
{
	document.getElementById("p_0001317_div_login").style.display="none";
	document.getElementById("contenedor_menu").style.display="";
	document.getElementById("contenedor").style.display="";
}

//comprobar e-mail
function validar_email( email ) {
	var r=true;
	expr = /\A(?=[a-z0-9@.!#$%&'*+/=?^_`{|}~-]{6,254}\z)(?=[a-z0-9!#$%&'*+/=?^_`{|}~-]{1,64}@)[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@ (?:(?=[a-z0-9-]{1,63}\.)[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+(?=[a-z0-9-]{1,63}\z)[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\z/;
	if ( !expr.test(email) ){
		r=false;
	}
	return r;
}

</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBR0VydWbzvb4GgecypsSlVm_cQVf-If3w&callback=initMap"></script>
