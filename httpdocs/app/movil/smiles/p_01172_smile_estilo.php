<!--
-Pag. ID: p_01172
-->

<style>
#p_00962_contenedor_smile{
	width: 600px;
  box-sizing: border-box;
  margin: auto;
	/*max-height: 100%;*/
	height: 100%;
}

#p_01171_siguiente_transporte_div{
	z-index:2;
	/*float:right;
	height:100%;*/
	}
	#p_01171_siguiente_transporte_smile_div{
		font-family:HelveticaNeueRoman;
		position:absolute;
		text-align:center;
		left: 0;
		top: 115px;
		width: 596px;
		height: 38px;
		z-index: 2;
		background-color: lightgray;
		border-radius: 10px 10px 0 0;
		padding: 3px 0 5px;
		box-sizing: border-box;

		}
	#p_01171_siguiente_transporte_texto{
		font-family:HelveticaNeueRoman;
		font-size: 26px;
    color: #888;
		text-align:center;
		position: absolute;
		left: 315px;
		top: 117px;
		z-index: 2;
		}
	#p_01171_siguiente_transporte{
		float:left;
		max-height:100%;
		}

.p_01171_menu_botones_smile{
	height:30px;
	position: absolute;
	/*margin-right: 10px;*/
	left: 3px;
	top: 118px;
	z-index:2;
	cursor: pointer;
	}
#p_00987_boton_stop{
	left: 562px;
}
#p_00962_carrera{
	height: 50px;
	width:100%;
	position:relative;
	margin-bottom: -50px;
	}
	#p_00962_carrera_pista {
		height: 100%;
		position: relative;
		width: 77%;
		left: 7em;
		border-bottom: 1px solid #2DCEE4;
		z-index:2;
		}
	.p_00962_bandera_start{
		position:absolute;
		left:6em;
		top:46%;
		height:52%;
		z-index:3;
		margin-left:1em;
		}
	.p_00962_bandera_end{
		position:absolute;
		right:-4px;
		top:41%;
		height:56%;
		z-index:3;
		}
	.p_00962_carrera_corredores{
		z-index:2
		}
	.p_00962_carrera_yo{
		z-index:3
		}
  .p_00962_separador{
		text-align: center;
		width: 100%;
		position: relative;
		overflow: hidden;
		padding-top: 107px;
		height: 100%;
		box-sizing: border-box;
		}
		#p_01175_preguntas{
			/*contiene imágenes float*/
			overflow: hidden;
			margin: auto;
			border-radius: 10px;
			padding-bottom: 20px;
			width: 596px;
			background-color: white;
			position: absolute;
	    top: 115px;
	    left: 0;
	    right: 0;
		}
		.p_01175_pregunta_trinity{
			overflow: auto;
		}
.p_00962_start{
	font-size: 1.2em;
	/*padding: 1em 1em 0.7em 1em;*/
	margin-top: 0.5em;
	background-color: #fff;
	color: #0087ae;
	border: solid 0.1em;
	border-radius: 0.3em;
	box-shadow: 0.1em 0.1em 0;
	display: inline-block;
	font-family: HelveticaNeueRoman;
	cursor: pointer;
	position: absolute;
	top: 1px;
	left: 2px;
	padding: 6px;
	z-index: 4;
	}
.p_00962_start_config{
	height: 6em;
	opacity: 0.3;
	margin-top: 0.5em;
	}
.p_01171_carrera_vs{
	position: absolute;
	height: 100%;
	/*margin-left: -15%;
	width: 12em;*/
	text-align: center;
	}
	.p_01171_carrera_vs img{
		height:100%;
		opacity:0.6;
		}

#p_00962_yo{
	height: 150%;
	z-index: 3;
	position: absolute;
	/*text-align: center;*/
	/*width: 12em;*/
	}
	#p_00962_yo_posicion{
		}
	#p_00962_yo_img{
		height:67%;
		}
	.p_00962_yo_puntero{
		/*height:20px;*/
		display: none;
		}
	#p_00962_yo_kilometros{
		color: #2DCEE4;
		}
		#p_00962_yo_kilometros_actual{
			font-size: 1.2em;
			font-family: helveticaneueroman;
			/*width:100%;*/
			/*border-bottom:solid #2DCEE4;*/
			text-decoration:underline;
			height:1em;
			background-color: transparent;
			margin-top: 9px;
			}
		.p_00962_kilometros_cercanos{
			width:45%;
			padding:2%;
			font-size:1.5em;
			float:left;
			color:#888;
			font-family: helveticaneueroman;
			height:0.8em;
			}
		#p_00962_tras_kilometros{
			text-align:right;
			border-right:solid #2DCEE4;
			}
		#p_00962_delante_kilometros{
			text-align:left;
			}

#p_00962_preguntas_contenedor{
	overflow-y:auto;
	width: 100%;
  height: 100%;
  position: fixed;
  left: 0;
  top: 0;
  z-index: 9;
  background-color: rgba(0,0,0,0.8);
/*	-webkit-transform:translateZ(10px);
	-moz-transform:translateZ(10px);
	-o-transform:translateZ(10px);
	transform:translateZ(10px);
	position: absolute;
	z-index: 1;
	transform:translateY(-20px);*/
}
#p_00962_preguntas_y_botones_contenedor{
	position: relative;
	width: 595px;
  margin: auto;
  height: 50px;
}

#p_00962_grafico_progreso{
	height:200px;
	width:200px;
	position:relative;
	display:inline-block;
	cursor: pointer;
	border-radius: 50%;
	}
	#p_00962_grafico_progreso_vocabulario{
		position:absolute;
		height:100%;
		width:100%;
		z-index:2;
		}
	#p_00962_grafico_progreso_estructura{
		position:absolute;
		height:86%;
		width:86%;
		top:7%;
		left:7%;
		z-index:4;
		}
	#p_00962_grafico_progreso_tnt{
		position:absolute;
		height:72%;
		width:72%;
		top:14%;
		left:14%;
		z-index:6;
		}
	#p_00962_grafico_progreso_centro{
		font-size: 28px;
		font-family: helveticaNeueRoman;
		position: absolute;
		top: 42px;
		left: 42px;
		background: #fff;
		z-index: 8;
		height: 58%;
		width: 58%;
		border-radius: 100%;
		color:#666;
		cursor: pointer;
		}
	#p_00962_grafico_leyenda{
		text-align:left;
		font-size:1.2em;
		display: inline-block;
		position:absolute;
		}
	.p_01171_cuadrado_leyenda{
		height:1em;
		width:1em;
		margin-right:0.5em;
		display: inline-block;
		cursor: pointer;
		}
		.p_01171_cursor{
			cursor: pointer;
		}
	#p_00962_grafico_progreso_detalle{
		max-width: 434px;
		margin: auto;
		/*max-height: 400px;
		margin-top: -7em;*/
		border-radius: 2em;
		/*position: relative;*/
		padding: 120px 20px 0;
		/*height: 45%;*/
   	overflow: auto;
		box-sizing: border-box;
		position: absolute;
		top: 200px;
		bottom: 11px;
		left: 0;
		right: 0;
	}

	#p_00962_grafico_progreso_detalle_close{
		position: absolute;
		right: 50px;
		height: 25px;
		margin-top: 70px;
		z-index: 9;
		cursor: pointer;
	}

	.p_01172_progreso_detalle_tema{
		font-size:1em;
	}
	.p_01172_progreso_detalle_tema_titulo{
		font-size: 1.3em;
		font-family: helveticaneueroman;
		text-align: left;
		margin: 5px 0;
	}
	.p_01172_progreso_detalle_subtema_titulo{
		font-size: 16px;
		display: inline-block;
		width: 70%;
		margin: 0 0.5em 0.5em 0;
		text-align: left;
	}
	.p_01172_progreso_detalle_subtema{
		font-size: 2.5em;
		text-align: right;
	}
	.p_01172_progreso_detalle_smile{
		/*font-size: 1em;*/
		vertical-align: top;
		width: 23px;
    margin-left: 2px;
	}
	.p_01172_detalle_seccion_titulo{
		width: 100%;
		font-size: 2.5em;
		color: #fff;
		font-family: helveticaneueroman;
		position: absolute;
		left: 0;
		top: 0;
		padding-top: 40px;
		z-index:-1;
		border-radius: 20px 20px 0 0;
	}
	.p_01172_torta_titulo{
		text-transform: uppercase;
		position: absolute;
		z-index: 1;
		font-size: 1.1em;
		top: 62%;
		width: 100%;
		text-align: center;
	}

	#p_00962_preguntas_insidencia_boton{
		height: 6em;
		position: absolute;
		right: 1em;
	}
	#p_01171_carrera_reducida{
		display:none;
	}

.p_01172_grafico_progreso_detalle_seccion
{
	/*margin-bottom:10em;*/
}

#p_00962_carrera_add_amigo
{
	position:fixed;
	height:90%;
	width:96%;
	padding:10% 2%;
	background:rgba(0,0,0,0.8);
	text-align:center;
	font-size:5em;
	color:#fff;
    z-index: 9999;
	font-family:HelveticaNeueRoman;
}
#p_00962_carrera_add_amigo_email
{
	border:solid 7px #fff;
}

#p_00962_carrera_add_amigo form input
{
	font-size:16px;
	text-align:center;
}

#p_00962_lista_vs
{
    text-align: left;
    margin: 1em auto;
    max-height: 60%;
    overflow: auto;
		font-size: 16px;
		width: 326px;
}

.p_01172_oponente_en_lista
{
	margin: 0.2em 1em;
    padding: 0.1em 0.5em 0.1em 0.1em;
    border-radius: 0.2em;
	position:relative;
}
.p_01172_oponente_select
{
	background: rgba(45,206,228,0.5);
}
.p_01172_oponente_yo
{
	background:	rgba(255,55,153,0.7);
}
.p_01172_oponente_quitar_img
{
    position: absolute;
    height: 0.8em;
    right: -0.4em;
    top: 0.35em;
		z-index:1;
		cursor: pointer;
}
.p_01172_oponente_quitar_confirmacion
{
    width: 0%;
    height: 100%;
    position: absolute;
    background: #000;
    top: 0;
    right: 0;
    border-radius: 0.2em;
    transition: 0.5s;
    overflow: hidden;
    font-family: helveticaneueroman;
    text-align: center;
    color: #FF3799;
	text-transform: uppercase;
}
#p_00962_detalle_trinity_solisitud_texto{
	font-size: 16px;
}
.p_01171_condiciones_trinity
{
	font-size:2em;
}
.p_01171_condiciones_trinity p
{
	margin: 0.5em;
}
.p_01171_condiciones_trinity input
{
	font-size:1em;
}

.p_01171_condiciones_trinity input[type="checkbox"]
{
	height:1em;
	width:1em;
}
#p_00962_img_mas{
	position: absolute;
	width: 28px;
	left: 69px;
	top: 57px;
	z-index: 100;
	cursor: pointer;
}
#p_00962_carrera_km_fin{
	position: absolute;
	font-size: 14px;
	text-align: center;
	right: -61px;
	top: 49%;
}
#p_00962_carrera_km_fin span{
	display: block;
}
#p_00962_carrera_add_amigo_email{
	width:25em;
	vertical-align:middle;
}
.p_01175_pregunta_trinity{
	margin-left:1.2em;
}
@media screen and (max-width: 767px) {
	.p_00962_separador{
		padding-top: 133px;
		overflow: visible;
	}
	#p_00962_contenedor_smile{
		width: 100%;
	/*	overflow: auto;
		-webkit-overflow-scrolling: touch;*/
	}
	.p_00962_start{
		font-size: 16px;
		top: 76px;
		left: 70px;
		width: calc(100% - 140px);
	}
	#p_00962_img_mas{
		top: 84px;
		left: 3px;
		width: 34px;
	}
	#p_00962_carrera_km_fin{
		text-align: right;
		right: 2px;
		top: 58px;
	}
	#p_00962_carrera_km_fin span{
		display: inline;
	}
	#p_00962_carrera_pista {
		left: 5%;
		width: calc(95% - 28px);
	}
	.p_00962_bandera_start{
		left: 5%;
		margin: 0;
	}
	#p_00962_yo_kilometros{
		position: absolute;
		left: 7px;
	}
	#p_00962_yo_kilometros_actual{
		margin-top: 5px;
		margin-left: 0 !important;
	}
	#p_00962_grafico_progreso_detalle{
		width: 100%;
		padding: 83px 3px 0;
		bottom: initial;
		bottom: initial;
	}
	#p_00962_grafico_progreso{
		transform: scale(0.8);
		z-index: 1;
	}
	#p_00962_grafico_leyenda{
		position: relative;
		vertical-align: super;
	}
	.p_00962_bandera_end{
		right: 0;
	}
	#p_00962_grafico_progreso_detalle_close{
		right: calc(50% - 202px);
		margin-top: 0;
	}
	#p_00962_carrera_add_amigo_email{
		width: 99%;
		box-sizing: border-box;
		margin-bottom: 5px;
	}
	.p_01172_oponente_quitar_img{
		right: 1px;
    height: 100%;
    top: 0;
	}
	#p_01171_siguiente_transporte_smile_div{
		width: 100%;
		max-width: 596px;
		top: calc(8vh + 42px);
	}
	#p_00962_preguntas_y_botones_contenedor{
		max-width: 595px;
		width: initial;

	}
	#p_01175_preguntas{
		width: 100%;
		max-width: 596px;
		top: calc(8vh + 42px);
	}
	#p_01171_siguiente_transporte_texto{
		left: calc(50% + 17px);
		top: calc(8vh + 47px);
	}
	#p_00987_boton_stop{
		left: initial;
		right: 3px;
	}
	.p_01171_menu_botones_smile{
		top: calc(8vh + 45px);
	}
	.p_01172_makeScrollable{
		-webkit-overflow-scrolling: touch;
	}
	#p_00962_preguntas_contenedor{
		/*-webkit-overflow-scrolling: touch;*/
		height: 100%;
		overflow-y: scroll;
		/*height: initial;*/
		/*barras navegador IOS*/
	/*	margin-bottom: 5px;*/
	}
	.p_01172_detalle_seccion_titulo{
		padding-top: 36px;
	}
	*{
		/* To smooth any scrolling behavior (IOS)*/
		/*-webkit-overflow-scrolling: touch;*/
	}
}
@media screen and (max-width: 767px) and (orientation: landscape){
	#p_01175_preguntas{
		top: calc(8vw + 42px);
	}
	#p_01171_siguiente_transporte_smile_div{
		top: calc(8vw + 42px);
	}
	.p_01171_menu_botones_smile{
		top: calc(8vw + 45px);
	}
	#p_01171_siguiente_transporte_texto{
		top: calc(8vw + 47px);
	}
	#p_00962_contenedor_smile{
		width: 100%;
		overflow: auto;
		-webkit-overflow-scrolling: touch;
		height: 85%;
	}

}
@media screen and (max-width: 767px) and (orientation: portrait){
/*	#p_00962_grafico_progreso_detalle{
		overflow: auto;
		height: calc(100% - 200px);
	}*/
	.p_01172_grafico_progreso_detalle_seccion{
		/*overflow: auto;*/
		height: calc(110vh - 283px - 16vh);
		/*-webkit-overflow-scrolling: touch;*/
	}
	/*.p_01172_detalle_seccion_titulo{
		-webkit-transform: translate3d(0,0,0);
		position: absolute !important;
		overflow: hidden;
    -webkit-overflow-scrolling: auto;
	}*/
	.p_01172_contenido_seccion{
		overflow: auto;
		height: 100%;
		-webkit-overflow-scrolling: touch;
	}
}
@media screen and (max-width: 400px) {
	#p_00962_grafico_progreso {
    transform: scale(0.7);
	}
	#p_00962_grafico_progreso_detalle_close{
		right: 0;
	}

	.text3{
		margin-left: 5px !important;
		margin-right: 5px !important;
	}
	.p_01175_pregunta_trinity .contenedor_pestanas{
		margin-left: 5px;
		margin-right: 5px;
	}
	.estiloBoton input{
		margin-right: 0 !important;
	}
	.pestanas{
		margin-left: 5px !important;
	}
	.estilo_palabra{
		width: 100% !important;
	}
}

</style>
