<!--
Pag. ID: p_00990
-->

<style>
#p_00990_over_all{
	z-index:9000;
	background-color:rgba(0,0,0,0.3);
	height:100%;
	width:100%;
	position:fixed;
	display:none;
	}
#p_00990_over_all_contenedor{
	background-color: #fff;
	border: solid 3px #2dcee4;
	border-radius: 3em;
	top: 2%;
	left: 2%;
	padding:2%;
	position:fixed;
	z-index: 9001;
	display: none;
	height:92%;
	width:91%;
	overflow-y:auto;
}
#p_00990_over_all_cerrar, #p_00990_over_all_cerrar_mail{
	display:none;
	position:fixed;
	height: 4em;
	width: 4em;
	right: 0.5em;
	top: 1em;
	background-image:url(<? echo ver_url("images/close.png","src"); ?>);
	background-repeat:no-repeat;
	background-size:100%;
	z-index:9002;
	}
	#p_00990_over_all_cerrar_mail{
		display:block;
		position: absolute;
		top: -13px;
		right: -13px;
		display: block;
		}
</style>

<div id="p_00990_over_all" onClick="cerrar_over_all();"></div>
<div id="p_00990_over_all_cerrar" onClick="cerrar_over_all();"></div>
<div id="p_00990_over_all_contenedor"></div>

<script>
	function over_all(html_over_all,color){
		elemento = document.getElementById("p_00990_over_all");
		contenedor = document.getElementById("p_00990_over_all_contenedor");
		boton = document.getElementById("p_00990_over_all_cerrar");

		if(typeof color=="undefined")color="rgba(0,0,0,0.3)";
		elemento.style.backgroundColor=color;

		contenedor.innerHTML = /*'<button id="p_00990_over_all_cerrar" onClick="cerrar_over_all();">X</button>'+*/html_over_all;
		elemento.style.display = "inline";
		contenedor.style.display = "inline";
		boton.style.display = "inline";
		//contenedor.style.marginLeft = "-"+ parseInt(contenedor.offsetWidth)/2 +"px";
		//contenedor.style.marginTop = "-"+ parseInt(contenedor.offsetHeight)/2 +"px";

		//window.addEventListener("resize", function(){
			//contenedor.style.marginLeft = "-"+ parseInt(contenedor.offsetWidth)/2 +"px";
			//contenedor.style.marginTop = "-"+ parseInt(contenedor.offsetHeight)/2 +"px";
		//	});
	}
	function cerrar_over_all(){
		document.getElementById("p_00990_over_all").style.display = "none";
		document.getElementById("p_00990_over_all_contenedor").style.display = "none";
		boton = document.getElementById("p_00990_over_all_cerrar").style.display = "none";
	}
</script>
