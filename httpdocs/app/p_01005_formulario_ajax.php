<script>
function nuevoAjax(){
    var xmlhttps=false;
    try {
    xmlhttps = new ActiveXObject("Msxml2.XMLhttps");
    } catch (e) {
    try {
    xmlhttps = new ActiveXObject("Microsoft.XMLhttps");
    } catch (E) {
    xmlhttps = false;
    }
    }

    if (!xmlhttps && typeof XMLhttpsRequest!='undefined') {
    xmlhttps = new XMLhttpsRequest();
    }
    return xmlhttps;
}

function enviarFormularioAJAX(url, formid, divrespuesta){
	var Formulario = document.getElementById(formid);
	var longitudFormulario = Formulario.elements.length;
	var cadenaFormulario = "";
	var sepCampos;
	sepCampos = "";
	
	for (var i=0; i <= Formulario.elements.length-1;i++) {
		cadenaFormulario += sepCampos+Formulario.elements[i].name+'='+encodeURI(Formulario.elements[i].value);
		sepCampos="&";
	}
	peticion=nuevoAjax();
	peticion.open("POST", url, true);
	peticion.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
	peticion.send(cadenaFormulario);
	peticion.onreadystatechange = function() {
		if (peticion.readyState == 4 && (peticion.status == 200 || window.location.href.indexOf ("https") == - 1)){
			document.getElementById(divrespuesta).innerHTML = peticion.responseText;
		}
	}
	return peticion.responseText;
}
</script>  