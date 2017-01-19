<script>
//funciones php



///////////////////////////////////////SELECTOR DE DISPOSITIVO/////////////////////////////////////////
	var dispositivo = navigator.userAgent.toLowerCase();
	if((navigator.userAgent.toLowerCase()+" "+navigator.platform.toLowerCase()).search(/mobi|mobile|mini|iphone|ipod|ipad|android|blackberry/) > -1){
		NAV = 'movil';
	}else{
		if(navigator.userAgent.search("OPR") != -1) NAV = "Opera";
		else if(navigator.userAgent.search("Firefox") != -1) NAV = "FireFox";
		else if(navigator.userAgent.search("Chrome") != -1) NAV = "Chrome";
		else if(navigator.userAgent.search("Safari") != -1) NAV = "Safari";
		else NAV = "Ie";
	}
	
	//REDIRECCION SEGUN DISPOSITIVO
	if(NAV=="movil"){
		document.location = 'http://app.oxbridge.es/app/movil';
	}else{
		document.location = 'http://app.oxbridge.es/oxbridge-english-acceso/';
		//document.location = 'http://app.oxbridge.es/';
	}

//////////////////////////DEFINICIONES

//array coloers
COLOR=["#E7112D","#00997A","#CCE227","#F993C3","#AB711F","#3044B5","#57AA1C","#7F263C","#266658","#F8E817","#96938E","#FF5001","#002653","#B5E8BF","#F59A27","#F3C9CA","#5F605A","#EDC788","#F5ADC1","#F4DA5F","#DC682D","#F7E7A9","#894FBF","#52BEE2","#D60270","#9CC3E2"];

//array banderas
p_009889_banderas=["./images/esp.png","./images/cat.png","./images/ing.png","./images/fra.png","./images/ale.png"];
function imprimir_banderas(e,menos){
	if(typeof menos=="undefined")menos=0;
	for(i in p_009889_banderas){
		if(menos!=p_009889_banderas[i].slice(-7,-4)){
			document.getElementById(e).insertAdjacentHTML("beforeEnd","<a href='.?idioma="+p_009889_banderas[i].slice(-7,-4)+"'>"+
			"<img src='"+p_009889_banderas[i]+"'></a>");
		}
	}
}



//conseguir zona horaria cliente
	Z_HORARIA = new Date().getTimezoneOffset()/60;

//selector actividad//////////////////////
	function ocultar_mostrar(elemento,disp)
	{
		disp = disp || "inline";
		if(document.getElementById(elemento).style.display==disp)
			document.getElementById(elemento).style.display="none";
		else document.getElementById(elemento).style.display=disp;
		return(document.getElementById(elemento).style.display);
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
	return parseInt(((((fecha2-fecha1)/1000)/60)/60)/24);
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
	 
	 //funciones
	 horario_filtro_width();
}

</script>
