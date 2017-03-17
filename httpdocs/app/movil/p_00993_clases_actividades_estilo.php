<!--
Pag. ID: p_00993
-->

<style>

/*///////////////////////////////////////////ACTIVIDADES*/
#p_00960_clases_actividades{
	position: absolute;
	width: 405px;
	top: 309px;
	bottom: 20px;
	left: 0;
	margin: auto;
	right: 0;
	overflow: auto;
}
#p_00960_clases_actividades_sinactividad{
	float:left;
	font-family:HelveticaNeue, Helvetica, Arial, sans-serif;
	font-size:14px;
	color:#ddd;
	letter-spacing: 0px;
	font-weight:900;
	text-align:center;
}
.p_00992_clases_actividades_actividad{
	float: left;
	margin:0 0 8px 8%;
	width: 330px;
	padding: 1em 1em 0.5em;
	border: solid 2px #888;
	border-radius: 3em;
	cursor: pointer;
	position:relative;
}
#p_00992_clases_actividades_actividad_globo{
	border-radius: 3em;
	width: 18px;
	height: 18px;
	margin-right:0;
	float: left;
}
#p_00992_clases_actividades_actividad_bloque{
	float:left;
	width:80%;
}
#p_00992_clases_actividades_actividad_titulo{
	font-family: HelveticaNeue, Helvetica, Arial, sans-serif;
	font-size:18px;
	text-transform:uppercase;
	color:#555;
	letter-spacing:0px;
	/*width:200px;*/
	margin-bottom:10px;
	text-align:left;
	cursor:pointer;
	display: block;
	box-sizing: border-box;
	padding-left: 20px;
}
#p_00992_clases_actividades_actividad_target, #p_00992_clases_actividades_actividad_attachment, #p_00992_clases_actividades_actividad_enlace{
	height:25px;
	width:25px;
	background-size:contain;
	background-position:center;
	background-repeat:no-repeat;
	margin-right:3px;
	margin-top:3px;
	float:left;
	cursor:pointer;
}
#p_00992_clases_actividades_actividad_target{
	background-image:url(./images/target_language.png);
}
#p_00992_clases_actividades_actividad_attachment{
	background-image:url(./images/attachment.png);
}
#p_00992_clases_actividades_actividad_enlace{
	background-image:url(./images/hyperlink.png);
}

/*//////////////////////////////////////////////CONTENEDOR ACTIVIDADES*/
#p_00960_clases_contenedor_actividad{
	position: absolute;
	top: 140px;
	left: 425px;
	bottom: 20px;
	overflow: auto;
	display: none;
	/*max-width: 975px;*/
	margin-top: 52px;
}
#p_00960_clases_contenedor_actividad_cabecera{
	background: rgb(230, 230, 230); /* For browsers that do not support gradients */
	background: -webkit-linear-gradient(to right, rgb(230, 230, 230) , white); /* For Safari 5.1 to 6.0 */
	background: -o-linear-gradient(to right, rgba(230, 230, 230) , white); /* For Opera 11.1 to 12.0 */
	background: -moz-linear-gradient(to right, rgb(230, 230, 230) , white);/* For Firefox 3.6 to 15 */
	background: linear-gradient(to right, rgb(230, 230, 230) , white); /* Standard syntax */

	/*margin-bottom: 10px;*/
	position: fixed;
	top: 133px;
	left: 428px;
	right: 0;
	/*max-width: 975px;*/
	padding-right: 76px;
	box-sizing: border-box;

}
#p_01003_contenedor_actividad img{
	max-width: 100%;
	height: auto;
}
#p_01003_contenedor_actividad div{
	width: 100% !important;
}
#p_01003_contenedor_actividad table{
	width: 100% !important;
}
/*#p_00993_clases_contenedor_actividad_titulo{/*_--------------------------------------------------------------------borrar---------*/
/*margin:6px 0 10px 20px;
font-family:HelveticaNeue, Helvetica, Arial, sans-serif;
	font-size:24px;
	color:#fff;
	letter-spacing:6px;
	text-transform:uppercase;
}*/


/***********PRESTAÑAS*/
#p_00993_clases_contenedor_actividad_pestanas{
	float:none;
}
#p_00993_clases_contenedor_actividad_contenedor_reproductor{
	margin:15px 0 15px 0;
	width:200px;
}
#p_00993_clases_contenedor_actividad_reproductor{
	width:100%;
}
.p_00993_clases_contenedor_actividad_pestanas_target_language, .p_00993_clases_contenedor_actividad_pestanas_attachment, .p_00993_clases_contenedor_actividad_pestanas_enlace{
	height:20px;
	width:40px;
	background-position:center;
	background-repeat:no-repeat;
	border-radius:5px 15px 0 0;
	border:solid 2px #8C6792;
	float:left;
	cursor:pointer;
	background-color:#fff;
}
.p_00993_clases_contenedor_actividad_pestanas_select{
	border-bottom:#fff;
}
.p_00993_clases_contenedor_actividad_pestanas_target_language{
	background-size:auto 18px;
	background-image:url(./images/target_language.png);
}
.p_00993_clases_contenedor_actividad_pestanas_attachment{
	background-size:16px auto;
	background-image:url(./images/attachment.png);
}
.p_00993_clases_contenedor_actividad_pestanas_enlace{
	background-size:28px auto;
	background-image:url(./images/hyperlink.png);
}
#p_00993_clases_contenedor_actividad_pestanas_linea{
	height:2px;
	background-color:#8C6792;
	margin-top:22px;
	min-width:545px;
}
.p_00993_clases_contenedor_actividad_pestanas_over{
	display:none;
	position:absolute;
	font-family:HelveticaNeue, Helvetica, Arial, sans-serif;;
	font-size:12px;
	color:#999;
	text-transform:uppercase;
	letter-spacing:0px;
	/*font-weight:bold;*/
	height:20px;
	width:auto;
	margin:40px 0px 0px -40px;
	vertical-align:central;
	z-index:100;
}
.p_00993_clases_contenedor_actividad_pestanas_over span{
	background-color:#fff;
	padding:3px;
	border:solid 1px #999;
	border-bottom:3px solid #999;
	border-right:3px solid #999;
	border-radius:3px;
}

/*********************************************CONTENIDO*/
.p_00993_clases_contenedor_actividad_contenido_x{
	clear:both;
	height:auto;
	border:solid 2px 0 0 0 #8C6792;
	border-top:0px;
	background-color:#fff;
	display:none;
	min-width: 540px;
	width:100%;
}

/***************TARGET*/
#p_00993_clases_contenedor_actividad_target_sonido{
	height:25px;
	float:left;
	margin:6px 0 6px 0;
	background-size:100%;
	background-position:center;
	background-repeat:no-repeat;
	cursor:pointer;
}
.p_00993_clases_contenedor_actividad_target{
	width: 200px;
	float: left;
	display: inline-block;
	margin: 5px;
	padding: 0 10px;
	border: solid 5px #E9E9E9;
	border-radius: 1em;
	font-family: HelveticaNeue, Helvetica, Arial, sans-serif;
	font-size: 16px;
	color: #666;
	line-height: 1.6;
	word-wrap: break-word;
}
#p_00993_clases_contenedor_actividad_target_titulo span{
	text-decoration:underline;
	text-transform:uppercase;
}
.p_00993_clases_contenedor_actividad_target_son{
	height:25px;
	cursor: pointer;
	/*float:right;
	margin: -24px 2px -20px 0px;*/
}
.p_00993_clases_contenedor_actividad_target_img{
	width:100%;
	display:inline-block;
}
.p_00993_clases_contenedor_actividad_target_img img{
	width: 200px;
	height: 200px;
}
#p_00993_clases_contenedor_actividad_target_text{
width:100%;
display:inline-block;
}
#p_00993_clases_contenedor_actividad_target_text span{
	text-decoration:underline;
}

/*******************ATTACHMET*/


/*******************ENLACE*/
.p_00993_clases_contenedor_actividad_enlace{
	height:100%;
	width:100%;
}
.p_00993_clases_contenedor_actividad_enlace_iframe{
	height:100%;
	width:100%;
}

/**************estilos impresi�n*/
.p_01003_print_layout{
	float: none;
	/*no tocar!! se utiliza para calculo saltos linea*/
	width: 315mm;
	height: 400mm;/*445mm;*/
	margin: 0;
}
.p_01003_print_layout *{
	float: none;
}
.p_01003_print_layout .p_00993_clases_contenedor_actividad_target{
	display: inline-block;
	vertical-align: top;
}
.p_01003_print_layout .salto_linea_antes{
	page-break-before: always;
}
.p_01003_print_layout h2{
	border-bottom: 2px solid gray;
	display: block;
	clear: both;
	font-family: sans-serif;
	font-weight: lighter;
	font-size: 28px;
	color: #444;
	padding-bottom: 5px;
	padding-top: 10px;
	padding: 10px 0 5px;
/*	page-break-before: always;*/
}

@media screen and (max-width: 767px) {
	#p_00960_clases_actividades{
		top: 160px;
		width: initial;
		bottom: 0;
		overflow: visible;
	}
	.p_00992_clases_actividades_actividad{
		width: 100%;
		padding: 9px 3px 0;
		margin: 0 0 2px 2px;
		box-sizing: border-box;
		position: relative;
	}
	#p_00992_clases_actividades_actividad_titulo{
		padding-left: 24px;
	}
	#p_00960_clases_contenedor_actividad_cabecera{
		left: 0;
		top: 0;
		background: #f3f3f3;
		z-index: 1;
		position: absolute;
	}
	#p_00960_clases_contenedor_actividad_contenido{
		position: absolute;
		left: 0;
		top: 54px;
		background-color: white;
		z-index: 1;
		width: 100%;
		overflow: auto;
		bottom: 0;
		padding-bottom: 16vh;
	}
	#p_00960_clases_contenedor_actividad{
		/*top: 0;
		left:780px;*/
		position: initial;
	}
	#p_01003_contenedor_actividad img{
		width: 100%;
	}
	.p_00993_clases_contenedor_actividad_target{
		width: 99%;
		box-sizing: border-box;
		margin: auto;
		margin-bottom: 2px;
	}
	.p_00993_clases_contenedor_actividad_target_img{
		text-align: center;
	}
	#p_00992_clases_actividades_actividad_globo{
		position: absolute;
		float: none;
		top: calc(50% - 9px);
	}
}
@media screen and (max-width: 767px) and (orientation:landscape){
}
</style>



<script>

////////////////////////////////IMPRECION DENTRO DEL CONTENEDOR DE ACTIVIDADES (solo targets arreglar)

	function imprime_actividad(a,b){
		document.getElementById("p_00960_clases_head_foto").style.display="inline";
		document.getElementById("p_00960_clases_head_foto_lupa").style.display="inline";
		/*document.getElementById("p_00960_clases_head_valoracion").style.display="inline";*/
	}

////////SELECION DE UNA PESTAÑA
	function selec_pestana(pesta,dia_l,acti,enlace,id_enlace){
		total= dia_lectivo[dia_l].actividad[acti].attachment.length+dia_lectivo[dia_l].actividad[acti].enlace.length+1;

		//parar todos los iframes menos el seleccionado (por si es el mismo)
		contador_enlaces=0;
		for(i=0;i<total;i++){
			tipo_pestana = document.getElementById("p_00993_clases_contenedor_actividad_pestanas_"+i).className;
			if (tipo_pestana == "p_00993_clases_contenedor_actividad_pestanas_enlace"){
				document.getElementById("p_00993_clases_contenedor_actividad_enlace_iframe_"+contador_enlaces).src = "";
				contador_enlaces++;
			}
		}

		//ocultar todos y mostrar contenido de pestaña selecionada
		for(i=0;i<total;i++){
			cambiar=document.getElementById("p_00993_clases_contenedor_actividad_contenido_"+i)
			pestana=document.getElementById("p_00993_clases_contenedor_actividad_pestanas_"+i)
			if (i==pesta){
				cambiar.style.display ="inline-block";
				pestana.style.borderBottomColor ="#fff";
			}else{
				cambiar.style.display ="none";
				pestana.style.borderBottomColor ="#8C6792";
			}
		}
		//si la pestaña es un enlace acomodar el ancho a la pantalla y el alto en 9/16; + set enlace
		if(enlace=="enlace"){
			pest_ancho= document.getElementById("clases").offsetWidth - 296;
			document.getElementById("p_00993_clases_contenedor_actividad_contenido_"+pesta).style.width = pest_ancho+"px";
			document.getElementById("p_00993_clases_contenedor_actividad_contenido_"+pesta).style.height = (pest_ancho/16)*9+"px";
			document.getElementById("p_00993_clases_contenedor_actividad_enlace_iframe_"+id_enlace).src = dia_lectivo[dia_l].actividad[acti].enlace[id_enlace].ruta;
		}

	}

</script>
