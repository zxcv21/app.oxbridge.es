var wrapper = document.getElementById("signature-pad"),
    clearButton = wrapper.querySelector("[data-action=clear]"),
    saveButton = wrapper.querySelector("[data-action=save]"),
    canvas = wrapper.querySelector("canvas"),
    signaturePad;

// Adjust canvas coordinate space taking into account pixel ratio,
// to make it look crisp on mobile devices.
// This also causes canvas to be cleared.
function resizeCanvas() {
    // When zoomed out to less than 100%, for some very strange reason,
    // some browsers report devicePixelRatio as less than 1
    // and only part of the canvas is cleared then.
    var ratio =  Math.max(window.devicePixelRatio || 1, 1);
    canvas.width = canvas.offsetWidth * ratio;
    canvas.height = canvas.offsetHeight * ratio;
    canvas.getContext("2d").scale(ratio, ratio);
}

window.onresize = resizeCanvas;
resizeCanvas();

signaturePad = new SignaturePad(canvas);

clearButton.addEventListener("click", function (event) {
    signaturePad.clear();
});

/*saveButton.addEventListener("click", function (event) {
    if (signaturePad.isEmpty()) {
        alert("Please provide signature first.");
    } else {
        window.open(signaturePad.toDataURL());
    }
});*/


function signaturePadSave(event){
    if (signaturePad.isEmpty()) {
		alert("Please provide signature first.");
    } else {
		document.getElementById("firma_archivo").value = signaturePad.toDataURL('image/png');
		
		document.getElementById("signature-pad-cargando").style.display="";
		
		/*var nodo = document.createElement("div");*/
		var nodo = document.createElement("iframe");
		nodo.setAttribute("id","firma_res");
		nodo.setAttribute("name","firma_res");
		nodo.style.display="none";
		if(!document.getElementById("firma_res"))document.body.appendChild(nodo);
		 
		/*if(enviarFormularioAJAX("<? echo ver_url("p_01177_calse_iframe_datos.php?","src"); ?>consulta=firma&alumno_id="+alumno_id+"&dia_lectivo="+DIA_LEC, "firma", "firma_res").match(/ERROR/g)){
			dia_lectivo[DIA_LEC].firmado="0";
			console.info("FIRMA DIA:"+DIA_LEC+" ¡ERROR!");//FIRMA
			
			//boton firma
			document.getElementById("p_00987_boton_firma_pendiente").style.display="inline";
			document.getElementById("p_00987_boton_firma").style.display="none";
		}else{
			dia_lectivo[DIA_LEC].firmado="1";
			console.info("FIRMA DIA:"+DIA_LEC+" FIRMADO");//FIRMA
			
			//boton firma
			document.getElementById("p_00987_boton_firma_pendiente").style.display="none";
			document.getElementById("p_00987_boton_firma").style.display="inline";
		}*/
		
		document.getElementById("firma").setAttribute("target","firma_res");
		document.getElementById("firma_id").setAttribute("value",dia_lectivo[DIA_LEC].fecha.split("/")[0]+"_"+dia_lectivo[DIA_LEC].fecha.split("/")[1]+"_"+dia_lectivo[DIA_LEC].fecha.split("/")[2]+"_"+rellenarcon0(DIA_LEC)+"_"+rellenarcon0(alumno_id));
		document.getElementById("directirio_id").setAttribute("value",dia_lectivo[DIA_LEC].fecha.split("/")[0]+"_"+dia_lectivo[DIA_LEC].fecha.split("/")[1]);
		var js_url=version_pagina+"p_01177_calse_iframe_datos.php?consulta=firma&alumno_id="+alumno_id+"&dia_lectivo="+DIA_LEC;
		js_url=js_url + "&p_0001326_get_sesion_id="+document.getElementById('p_0001317_input_sesion_id').value;
		js_url=js_url + "&p_0001326_get_sesion_uid="+document.getElementById('p_0001317_input_usuario_id').value;
		js_url=js_url + "&p_0001326_get_area_id="+document.getElementById('p_0001317_input_area_id').value;
		js_url=js_url + "&p_0001326_get_disparador_js=window.parent.signaturePadSave()";
		document.getElementById("firma").setAttribute("action",js_url);
		//document.getElementById("firma").setAttribute("action","<? echo ver_url("p_01177_calse_iframe_datos.php","src"); ?>?consulta=firma&alumno_id="+alumno_id+"&dia_lectivo="+DIA_LEC);
		
		 document.getElementById("firma").insertAdjacentHTML("afterBegin",'<input type="hidden" name="p_0001296_input_finalizador_js" value="'+
		 		'window.parent.ocultar_mostrar("p_00995_firma");\n"'+
				'window.parent.ocultar_mostrar("p_00995_firma_botones");\n'+
				'\n'+
				'\n'+
				''
		 );
		
		p_00989_agregar_comprobacion_ses('firma','document.getElementById("firma").submit();','firma_res');
		
		document.getElementById("firma").submit();
    }
}