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
/*	background-color: #fff;
	border: solid 3px #2dcee4;
	border-radius: 10px;*/
	top: 50px;
	left: 0;
	right: 0;
	margin: auto;
	padding:5px;
	position: absolute;
	z-index: 9001;
	display: none;
	/*height:223px;
	width:250px;*/
	overflow-y:auto;
	box-sizing: border-box;

	/*position: relative;*/
	/*padding-bottom: 56.25%;
	padding-top: 25px;
	height: 0;*/
	width: 80%;
	max-width: 1000px;
	padding-top: 12px;
	padding-right: 15px;

	}

#p_01003_contenedor_video{
	overflow-y: auto;
    box-sizing: border-box;
    position: relative;
    padding-bottom: 56.25%;
    height: 0;
    overflow: hidden;
		background-color: #fff;
    border: solid 3px #2dcee4;
    border-radius: 10px;
}

#p_00990_over_all_contenedor iframe{
	position: absolute;
	top: 0;
	left: 0;
	/*width: 560px;
	height: 349px;*/
}
#p_00990_over_all_cerrar, #p_00990_over_all_cerrar_mail,.p_00990_over_all_cerrar_video,#p_00990_over_all_cerrar_reservas{
	display:none;
	position:fixed;
	height: 30px;
	width: 30px;
	/*top: 50px;*/
	top: 10px;
	/* Firefox */
	/*left: -moz-calc(50% + 125px);*/
	/* WebKit */
	/*left: -webkit-calc(50% + 125px);*/
	/* Opera */
	/*left: -o-calc(50% + 125px);*/
	/* Standard */
	/*left: calc(50% + 125px);*/
	right: 10px;

	background-image:url(<? echo ver_url("images/close.png","src"); ?>);
	background-repeat:no-repeat;
	background-size:100%;
	z-index:9002;
	cursor: pointer;
	}
	#p_00990_over_all_cerrar_mail{
		display:block;
		right: 10px;
		top: 10px;
		left: inherit;
		}
	.p_00990_over_all_cerrar_video{
		position: absolute;
    right: 0;
    top: 0;
	}
	#p_00990_over_all_cerrar_reservas{
		display: block;
		position: absolute;
		top: -13px;
		right: -13px;
	}
	@media screen and (max-width: 767px) and (orientation:landscape){
		#p_01003_contenedor_video{
			padding-bottom: 55%;
		}
	}
</style>

<div id="p_00990_over_all" onClick=""></div>
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
		p_00989_BLOQUEAR_ORIENTACION=true;
		orientacion_cambiada();

		//document.getElementById('p_00990_over_all_contenedor').style.backgroundColor = "#fff" ;
		//document.getElementById('p_00990_over_all_contenedor').style.border = "solid 3px #2dcee4" ;

		document.getElementById("p_00990_over_all").style.display = "none";
		document.getElementById("p_00990_over_all_contenedor").style.display = "none";
		document.getElementById("p_00990_over_all_contenedor").innerHTML="";
		boton = document.getElementById("p_00990_over_all_cerrar").style.display = "none";
		//set escala de att
		if(typeof p_01003_escala_att!="undefined")p_01003_escala_att=1;
	}
</script>
