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
	border-radius: 13px;
	top: 50%;
	left: 50%;
	position: fixed;
	padding: 10px;
	z-index: 90010;
	display: none;
	max-height:90%;
	max-width:90%;
	}
#p_00990_over_all_cerrar{
	height:20px;
	width:20px;
	border:0px;
	background-color:#900;
	position:absolute;
	top:-26px;
	right:-26px;
	z-index:900001;
	text-align:center;
	vertical-align:central;
	}
</style>

<div id="p_00990_over_all" onClick="cerrar_over_all();"></div>
<div id="p_00990_over_all_contenedor"></div>

<script>
	function over_all(html_over_all){
		elemento = document.getElementById("p_00990_over_all");
		contenedor = document.getElementById("p_00990_over_all_contenedor");
		contenedor.innerHTML = /*'<button id="p_00990_over_all_cerrar" onClick="cerrar_over_all();">X</button>'+*/html_over_all;
		elemento.style.display = "inline";
		contenedor.style.display = "inline";
		contenedor.style.marginLeft = "-"+ parseInt(contenedor.offsetWidth)/2 +"px";
		contenedor.style.marginTop = "-"+ parseInt(contenedor.offsetHeight)/2 +"px";
		window.addEventListener("resize", function(){
			contenedor.style.marginLeft = "-"+ parseInt(contenedor.offsetWidth)/2 +"px";
			contenedor.style.marginTop = "-"+ parseInt(contenedor.offsetHeight)/2 +"px";
			});
	}
	function cerrar_over_all(){
		document.getElementById("p_00990_over_all").style.display = "none";
		document.getElementById("p_00990_over_all_contenedor").style.display = "none";
	}
</script>