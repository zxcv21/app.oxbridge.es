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
	margin-left: -15%;
	width: 12em;s
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
	text-align: center;
	width: 12em;
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
			width:100%;
			/*border-bottom:solid #2DCEE4;*/
			text-decoration:underline;
			height:1em;
			background-color: transparent;
			margin-top: 8px;
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
  z-index: 999;
  background-color: rgba(0,0,0,0.8);
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
		width: 434px;
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

/*
@media (max-height: 80em){
 	#p_00962_carrera{
		display:none;
	}
	#p_01171_carrera_reducida{
		display:inherit;
	}
	.p_00962_separador{
		margin-top:1em;
	}
}
*/

</style>
