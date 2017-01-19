<!--
-ID Pag: p_01397
-NAME:	firmar_escaneo_separacion_app.php
-->

<div id="p_01397_imagen_seleccion" style="display:none;"></div>
<img id="p_01397_imagen" src="plantilla_firmas_profesores.png" class="p_01397_cursor_cruz" ontouchstart="event.preventDefault();" onMouseMove="event.preventDefault();"/><br>

SELECCIONA LA FIRMA A SUBIR<br>SUBIR ARRASTRANDO EL CURSOR<br>

<canvas id="p_01397_canvas_seleccion"   style="border:solid #C00 3px">
	/!\ Este dispositivo no soporta la aplicacion /!\ 
</canvas>

<style>
	body
	{
		margin:0;
	}
	
	.p_01397_cursor_cruz
	{
		cursor: crosshair;
	}
	#p_01397_canvas_seleccion
	{
		margin: 1em;
	}
	#p_01397_imagen_seleccion
	{
		position:absolute;
		background:rgba(0,100,255,0.3);
	}
	
</style>

<script>

<?
	if(isset($_GET['p_01397_imagen']))$_POST['p_01397_imagen']=$_GET['p_01397_imagen'];
	if(isset($_POST['p_01397_imagen']))
	{
		echo "p_01397_imagen='".$_POST['p_01397_imagen']."';";
	}
?>

p_01397_escala=5;

img=document.getElementById("p_01397_imagen");
img.onload=function()
{
	img.style.height=img.offsetHeight/p_01397_escala;
}

function cargaContextoCanvas(idCanvas){
	var elemento = document.getElementById(idCanvas);
	if(elemento && elemento.getContext){
		var contexto = elemento.getContext('2d');
		if(contexto){
			return contexto;
		}
	}
	return FALSE;
}

document.getElementById("p_01397_imagen").addEventListener("mousedown",p_01397_inicio_seleccion);
document.getElementById("p_01397_imagen").addEventListener("touchstart",p_01397_inicio_seleccion);

recorte=[];

function p_01397_inicio_seleccion(event)
{
	recorte=[];
	recorte[0]=event.clientX+document.body.scrollLeft;
	recorte[1]=event.clientY+document.body.scrollTop;
	
	document.getElementById("p_01397_imagen_seleccion").style.display="";
	
	document.getElementById("p_01397_imagen").addEventListener("mouseup",p_01397_fin_seleccion);
	document.getElementById("p_01397_imagen").addEventListener("touchend",p_01397_fin_seleccion);
	document.getElementById("p_01397_imagen").addEventListener("mousemove",p_01397_mientras_seleccion);
	document.getElementById("p_01397_imagen").addEventListener("touchmove",p_01397_mientras_seleccion);
	document.getElementById("p_01397_imagen").addEventListener("mouseleave",p_01397_fin_seleccion_roto);
}

function p_01397_mientras_seleccion(event)
{
	var w=event.clientX+document.body.scrollLeft-recorte[0];
	var h=event.clientY+document.body.scrollTop-recorte[1];
	if(h<0)h=0;
	if(w<0)w=0;
	
	document.getElementById("p_01397_imagen_seleccion").style.top=recorte[1]+"px";
	document.getElementById("p_01397_imagen_seleccion").style.left=recorte[0]+"px";
	document.getElementById("p_01397_imagen_seleccion").style.height=h+"px";
	document.getElementById("p_01397_imagen_seleccion").style.width=w+"px";
}

function p_01397_fin_seleccion(event)
{
	recorte[2]=event.clientX+document.body.scrollLeft;
	recorte[3]=event.clientY+document.body.scrollTop;
	
	document.getElementById("p_01397_imagen_seleccion").style.display="none";
	document.getElementById("p_01397_imagen_seleccion").style.top=0;
	document.getElementById("p_01397_imagen_seleccion").style.left=0;
	document.getElementById("p_01397_imagen_seleccion").style.height=0;
	document.getElementById("p_01397_imagen_seleccion").style.width=0;
	
	document.getElementById("p_01397_imagen").removeEventListener("mousedown",p_01397_fin_seleccion);
	document.getElementById("p_01397_imagen").removeEventListener("touchend",p_01397_fin_seleccion);
	document.getElementById("p_01397_imagen").removeEventListener("mousemove",p_01397_mientras_seleccion);
	document.getElementById("p_01397_imagen").removeEventListener("touchmove",p_01397_mientras_seleccion);
	document.getElementById("p_01397_imagen").removeEventListener("mouseleave",p_01397_fin_seleccion_roto);
	
	p_01397_pintar_recorte(recorte);
}

function p_01397_fin_seleccion_roto()
{	
	document.getElementById("p_01397_imagen_seleccion").style.display="none";
	document.getElementById("p_01397_imagen_seleccion").style.top=0;
	document.getElementById("p_01397_imagen_seleccion").style.left=0;
	document.getElementById("p_01397_imagen_seleccion").style.height=0;
	document.getElementById("p_01397_imagen_seleccion").style.width=0;
	
	document.getElementById("p_01397_imagen").removeEventListener("mouseup",p_01397_fin_seleccion);
	document.getElementById("p_01397_imagen").removeEventListener("touchend",p_01397_fin_seleccion);
	document.getElementById("p_01397_imagen").removeEventListener("mousemove",p_01397_mientras_seleccion);
	document.getElementById("p_01397_imagen").removeEventListener("touchmove",p_01397_mientras_seleccion);
	document.getElementById("p_01397_imagen").removeEventListener("mouseleave",p_01397_fin_seleccion_roto);
}

function p_01397_pintar_recorte(recortado)
{
	var sx = recorte[0];
	var sy = recorte[1];
	var width = recorte[2]-recorte[0];
	var height = recorte[3]-recorte[1];
	
	document.getElementById("p_01397_canvas_seleccion").setAttribute("width",width);
	document.getElementById("p_01397_canvas_seleccion").setAttribute("height",height);
	
	var ctx = cargaContextoCanvas('p_01397_canvas_seleccion');
	if(ctx){
		var img = document.getElementById("p_01397_imagen");;		
		ctx.drawImage(img, sx*p_01397_escala, sy*p_01397_escala, width*p_01397_escala, height*p_01397_escala,0,0,width,height);
	}
}

</script>