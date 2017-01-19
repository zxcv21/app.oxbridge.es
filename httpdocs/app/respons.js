var dispositivo = navigator.userAgent.toLowerCase();
if( dispositivo.search(/iphone|ipod|ipad|android/) > -1){
	document.location = '/movil';
	document.write("WebMovil en: "+dispositivo); 
}
document.write("WebPC en: "+dispositivo);