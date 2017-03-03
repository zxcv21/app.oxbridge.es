<!--
Pag. ID: p_00995
-->
<?
//definicion de tamaños
/*	$set_margen_extra_capsulas=3;
	$set_capsula_alto=250;//72
	$set_capsula_ancho=220;//84 modificar con .p_00995_horario_contenido_clases (-4) y p_00995_horario_contenido_clases_fondo (=)
	$set_cuarto_hora_alto=125+$set_margen_extra_capsulas;//36 modificar con p_00995_horario_contenedor_horario_horas (-1)
	$set_cuarto_hora_ancho=110+$set_margen_extra_capsulas*2;//31 modificar con p_00995_horario_contenedor_horario_dia (-1)
	$set_cuarto_hora_separador_alto=30;
	$set_ancho_horas_titulo=122;
	*/
	$set_margen_extra_capsulas=1;
	$set_capsula_alto=72;
	$set_capsula_ancho=84; //modificar con .p_00995_horario_contenido_clases (-4) y p_00995_horario_contenido_clases_fondo (=)
	$set_cuarto_hora_alto=36; //modificar con p_00995_horario_contenedor_horario_horas (-1)
	$set_cuarto_hora_ancho=100;// modificar con p_00995_horario_contenedor_horario_dia (-1)
	$set_cuarto_hora_separador_alto=32;
	$set_ancho_horas_titulo=84;

?>

<style type="text/css">
	/*#p_00995_horario_reloj{
		position:absolute;
		background-color:#0f0;
		font-size:20px;
		width:100px;
		height:40px;
		top:115px;
		z-index:901;
		}-----------------------------------SUPLANTER POR LIENEA TEMPORAL*/
	#p_00995_horario_reloj_linea{
		position: relative;
		z-index: 97;
		border: solid 1px rgba(0,255,0,0.7);
		height: 3px;
		margin-left: <? echo $set_ancho_horas_titulo;?>px;
		}
	#p_00958_horario_cargando{
		position:absolute;
		height:100px;
		width:100px;
		top:30%;
		left:50%;
		margin:0 0 0 -50px;
		-moz-animation:p_00995_horario_loading infinite 1s linear;
		-webkit-animation:p_00995_horario_loading infinite 1s linear;
		animation:p_00995_horario_loading infinite 1s linear;
		z-index:9999;
		}
	#p_00958_horario_header{
		position: absolute;
		left: 0;
		margin: 2% 0 0 2%;
		height: 76px;
		max-width:64%;
		max-height: 10%;
		z-index:1000;
		}
	.p_00958_horario_menu_boton{
		height:58px;
		float:right;
		margin:0 10px 0 0;
		cursor: pointer;
		margin-top: 8px;
		}


	#p_00958_horario_header_filtros{
		display: none;
		width: 100%;
		/*height: 100%;*/
		height: 148px;
		top: 0;
		position: fixed;
		z-index: 9001;
		font-size: 25px;
		/*padding: 15% 5%;*/
		overflow-y: auto;
		background-color: rgba(0,0,0,0.7);
		text-align: center;
		padding: 5px 5px 5px 86px;
		text-align: left;
		}
		#p_00958_horario_header_filtros>p{
			color: white;
			font-weight: bold;
			margin: 10px 0;
		}
		#p_00958_horario_header_hora{
			font-size: 47px;
			float: left;
			margin: 0 20px 0 0;
			color:#777;
			letter-spacing:-0.01em;
			}
			#p_00958_horario_header_hora_m{
				font-size:25px;
				}
		#p_00958_horario_header_filtros_telefonos{
			float:left;
			margin-bottom:7px;
			}
			#p_00958_horario_header_fijo,
			#p_00958_horario_header_movil{
				height:14px;
				}
		#p_00958_horario_filtros_click_out{
		/*	width: 100%;
			clear: both;
			height: 50%;
			margin-top: 1em;
			margin-left: -5%;*/
			}
		#p_00958_horario_filtros_tipo{
			display:inline-block;
			float: left;
			margin-bottom: 10px;
			}
			.p_00958_horario_filtros_tipo_contenedor{
				height: 30px;
				width: 30px;
				float: left;
				margin: 0 5px 0 0;
				background-color:#fff;
				padding: 0.2em;
				border-radius: 0.5em;
				box-shadow: 0.1em 0.1em #888;
				cursor: pointer;
				}
			.p_00958_horario_filtros_tipo_div{
				height: 100%;
				width: 100%;
				}
			.p_00958_horario_filtros_tipo_img{
				margin:10%;
				width:80%;
				vertical-align:middle;
				background-color:#2DCEE4;
				}
		#p_00958_horario_filtros_temario{
			float: left;
			/*width: 80%;*/
			height: 1em;
			/*margin: 0 0 1em 0;*/
			margin-right: 20px;
			font-size: 16px;
			padding: 0.5em;
			border-radius: 0.3em;
			box-shadow: 0.1em 0.1em #888;
			display: none;
			clear: both;
			background-color: #fff;
			width: 500px;
			}
			#p_00958_horario_filtros_temario_out{
				display:none;
				position:fixed;
				z-index:1000;
				height:100%;
				width:100%;
				top:0px;
				left:0px;
				}
			#p_00958_horario_filtros_temario_span{
				float: left;
				white-space:nowrap;
				}
			#p_00958_horario_filtros_temario_select{
				float: right;
				background-color: #029EE1;
				margin: -0.34em -0.5em 0 0;
				border: solid 0px;
				border-radius: 0 0.3em 0.3em 0;
				color: white;
				vertical-align: middle;
				padding: 3px;
				width: 1.5em;
				height: 1.34em;
				outline: none;
				cursor: pointer;
				font-size: 1.5em;ç
				}
				#p_00958_horario_filtros_temario_select_options{
					display: none;
					background-color: #fff;
			    position: absolute;
			    margin: -2px 0 0 -510px;
			    z-index: 1001;
			    width: 464px;
			    padding: 1px 10px 3px;
			    font-size: 16px;
			    border-radius: 10px;
					}
					.p_00958_horario_filtros_temario_select_options_op{
						margin:3px 0 0 0;
						cursor:pointer;
						color:#000;
						text-align:left;
						}
						.p_00958_horario_filtros_temario_select_options_op_span{
							}
		#p_00958_filtros_echo{

			height: 30px;
			width: 30px;
			margin: 10px;
	    background-image: url(http://app.oxbridge.es/app/images/close.png);
	    background-repeat: no-repeat;
	    background-size: 100%;
	    /*z-index: 9002;*/
	    cursor: pointer;
			top: -5px;
    	position: absolute;
    	right: 86px;
			}


		#p_00958_horario_header_punteros{
			display: none;
			width: 100%;
			}
			.p_00958_horario_header_punteros_contenedor{
				background-color:#fff;
				/*margin-top: 5px;*/
				border-radius: 0.3em;
				width:175px;
				box-shadow: 0.1em 0.1em #888;
				display: inline-block;
				margin: 2px;
				float: left;
				text-align: left;
				padding-left: 7px;
				padding-top: 1px;
				}
			.p_00958_horario_header_punteros_div{
				font-size: 16px;
				display: inline-block;
				/*padding: 0.2em 0.2em 0 0.2em;*/
				padding: 2px;
				width:100%;
				box-sizing: border-box;
				cursor: pointer;
				}
				.p_00958_horario_header_punteros_div_img{
					height: 1em;
					float: left;
					margin: 0 0.3em 0 0;
					}
				.p_00958_horario_header_punteros_div_hover{
					position:absolute;
					right: 2em;
					margin-top: -1.2em;
					}
					.p_00958_horario_header_punteros_div_hover img{
						height:1em;
						width:1em;
						}
				#p_01000_horario_aula_iframe{
					height:500px;
					width:700px;
					max-height:100%;
					max-width:100%;
					}

		#p_00958_horario_header_botones{
			clear:both;
			height: 30px;
			float: left;
			margin: -30px 10px 0px 0px;
			}
		#p_00958_horario_header img{
			float:left;
			margin-right: 15px;
			}
			#p_00958_horario_header_punteros_mas{
				height:100%;
				}

	#p_00958_horario_contenedor {
		/*width: 1156px;*/
		overflow: auto;
		/*clear:both;*/
		background-color:#fff;
		margin: 0 auto;
		display: inline-block;
		white-space: initial;
		position: relative;
		width: 100%;
		box-sizing: border-box;
		}
		#p_00958_horario_contenedor::-webkit-scrollbar {
			width: 10px;
			height: 10px;
			}
		#p_00958_horario_contenedor::-webkit-scrollbar-button {
			height: 15px;
			width:0px;
			}
		#p_00958_horario_contenedor::-webkit-scrollbar-thumb {
			background: #ccc;
			}
		#p_00958_horario_contenedor::-webkit-scrollbar-track {
			background: #eee;
			}
#p_00958_filtros_y_horario{
	white-space: nowrap;
	display: inline-block;
	width: 100%;
	height: 100%;

}
	#p_00958_seleccion_horario{
		/*width: 80px;*/
    margin-top: 50px;
    /*padding: 0 30px;*/
    display: inline-block;
    white-space: pre-wrap;
    text-align: center;
    vertical-align: top;
}

	#p_00995_horario_contenedor_horario_nivel{
		vertical-align:middle;
		z-index:900;
		/*float:left;*/
		height:47px;
		width:<? echo $set_ancho_horas_titulo;?>px;
		/*position:absolute;*/
		position:fixed;
		font-size:18px;
		padding-bottom: 16px;
		background-color:#fff;
		color:#ddd;
		text-align:center;
		}
		#p_00995_horario_contenedor_horario_nivel span{
			font-size:40px;
			color:#555;
			}

	#p_00958_horario_contenedor_horario_dias{
		background-color:#fff;
		position: absolute;
		z-index: 98;
		height:65px;
		padding-left:<? echo $set_ancho_horas_titulo;?>px;
		}

	#p_00995_horario_contenedor_horario_horas{
		background-color:#fff;
		position: relative;
		z-index: 99;
		float: left;
		/*width:<?// echo $set_ancho_horas_titulo;?>px;*/
		width: 61px;
		text-align:center;
		font-size:16px;
		color:#FFF;
		margin-top:63px;
		padding-top: 10px;
		padding-left: 22px;
		}
		#p_00995_horario_contenedor_horario_horas span{
			background-color: #fff;
			top: -16px;
			position: relative;
			padding: 0 5px;
			/*font-size: 33px;*/
			color:#555;
			}

	#p_00995_horario_contenedor_horario_linea{
		}
		.p_00995_horario_contenedor_horario_linea_div{
			width: 2px;
			position: absolute;
			margin-left: -1px;
			z-index: 10;
			}
		#p_00995_horario_contenedor_horario_linea_span_i,
		#p_00995_horario_contenedor_horario_linea_span_d{
			width: 8em;
			margin: 0 0 0 -6.2em;
			/*text-align:right;
			float:left;
			background:#ddd;*/
			}
			#p_00995_horario_contenedor_horario_linea_span_d{
				text-align:left;
				margin: 0 0 0 0.2em;
				position: absolute;
    		top: -14px;
    		left: 0;
			}

	#p_00958_horario_contenedor_horario_cuerpo_datos {
		}
		.p_00995_horario_contenedor_horario_horas,
		.p_00995_horario_contenedor_horario_horas_separador{
			height: <? echo $set_cuarto_hora_alto-1;?>px;
			width: 100%;
			background-color: #fff;
			border: solid #fff;
			border-width: 0px 0px 1px 0px;
			text-align: right;
			}
			.p_00995_horario_contenedor_horario_horas_separador{
				height:<? echo $set_cuarto_hora_separador_alto-1;?>px;
				}

	.p_00995_horario_contenedor_horario_dia{
		height:50px;
		width:<? echo $set_cuarto_hora_ancho-1;?>px;
		margin:15px 1px 0px 0px;
		border-width:1px 1px 0px 0px;
		background-color:#ddd;
		float:left;
		text-align:center;
		font-size:16px;
		color:#555;
		box-sizing: border-box;
		padding-top: 5px;
		position: relative;
		}
		.p_00995_horario_contenedor_horario_dia span{
			/*font-size:40px;*/
			}

	#p_00995_horario_contenedor_horario_dia_mes{
		position:absolute;
		margin-left:-45px;
		}

	.p_00995_horario_contenedor_horario_contenido{
		height:45px;
		width:45px;
		margin:1px 1px 0px 0px;
		border-width:1px 1px 0px 0px;
		float:left;
		}

	#p_00995_horario_contenido_cuadricula{
		position:relative;
		top: 10px;
		margin-top: 61px;
		}

	#p_00995_horario_contenedor_clases{
		}
		.p_00995_horario_contenido_clases,
		.p_00995_horario_contenido_clases_reservada{
			position:relative;
			float:left;
			width:<? echo $set_capsula_ancho-4?>px;
			background-color:#fff;
			border:2px solid  #689ABE;
			border-radius:7px;
			overflow:hidden;
			cursor:pointer;
			height:100%;
			text-align: center;
				}
		.p_00995_horario_contenido_clases_reservada{border:2px solid #FF3799;}
			.p_00995_horario_contenido_clases_titulo,
			.p_00995_horario_contenido_clases_titulo_reservada{
				width:67px;
				text-align:center;
				color:#689ABE;
				font-size:14px;
				overflow:hidden;
				height:32px;
				margin: auto;
				display: inline-block;
				}
			.p_00995_horario_contenido_clases_titulo_ticker{
				height:100%;
				/*width:<? //echo $set_capsula_ancho*6-8;?>px;*/
				width: 100%;
				position: relative;
				z-index: 1;
				}
				.p_00995_horario_contenido_clases_titulo_ticker_hora{
					height:100%;
					width:<? echo $set_capsula_ancho-4;?>px;
					/*float:left;*/
					text-align:left;
					margin-top:1px;
					font-family:HelveticaNeueRoman;
					letter-spacing: normal;
					font-size: 12px;
					}
				/*.p_00995_horario_contenido_clases_titulo_ticker_text{
					height:100%;
					width:<? echo $set_capsula_ancho*4;?>px;
					float:left;
					text-align:center;
					}*/
				.p_00995_horario_contenido_clases_titulo_reservada{
					color:#FF3799;
					}
					.p_00995_horario_contenido_clases_titulo_reservada .p_00995_horario_contenido_clases_titulo_ticker{
						/*-moz-animation: p_00995_horario_ticker 20s infinite;
						-moz-animation-timing-function:linear;
						-webkit-animation: p_00995_horario_ticker 20s infinite;
						-webkit-animation-timing-function:linear;
						animation: p_00995_horario_ticker 20s infinite;
						animation-timing-function:linear;*/
						}

			.p_00995_horario_contenido_clases_tipo{
				position:absolute;
				top:54%;
				margin:-50px 0 0 0;
				left:0px;
				width:100%;
				text-align:center;
				font-size:11px;
				/*margin:3px 0;*/
				transition:0.5s;
				-webkit-transition:0.5s;
				-moz-transition:0.5s;
				height:100px;
				}
				.p_00995_horario_contenido_clases_tipo_localizacion{
					height:20px;
					margin-left:4px;
					vertical-align:middle;
					cursor:pointer;

					}
					.p_00995_horario_contenido_clases_tipo_localizacion{
						opacity:0.85;
						}
				.p_00995_horario_contenido_clases_tipo img{
					height:31%;
					margin:30px 0 0 0;
					vertical-align:middle;
					}
			.p_00995_horario_contenido_clases_boton,
			.p_00995_horario_contenido_clases_boton_reservada{
					position:absolute;
					padding: 0 5%;
					text-align: center;
					margin: -7px 0 0 0;
					top:43%;
					transition:0.5s;
					-webkit-transition:0.5s;
					-moz-transition:0.5s;
					-webkit-transform:scaleX(0);
					-moz-transform:scaleX(0);
					transform:scaleX(0);
					left:-43px;
					width:90%;
					}
				.p_00995_horario_contenido_clases_boton button,
				.p_00995_horario_contenido_clases_boton_reservada button{  border-radius: 4px;
					cursor: pointer;
					padding: 1px 1px;
					width: 100%;
					text-transform: uppercase;
					background-color: #2DCEE4;
					border: solid 1px #2DCEE4;
					color: #fff;
					height: 50px;
					margin: -25px 0 0 0;
					top: 50%;
					font-size: 30px;
					}

				.p_00995_horario_contenido_clases_boton_reservada button{
					border:solid 1px #fff;
					background-color:#FF3799;
					color:#fff;
					}
					/*.p_00995_horario_contenido_clases_boton button:hover{
						background-color:#2DCEE4;
						border:solid 1px #fff;
						color:#fff;
						}
					.p_00995_horario_contenido_clases_boton_reservada button:hover{
						background-color:#fff;
						border:solid 1px #FF3799;
						color:#FF3799;
						}*/

			.p_00995_horario_contenido_clases_loca{
				width:100%;
				text-align:center;
				font-size:14px;
				position: absolute;
				color:#689ABE;
				font-family:HelveticaNeueRoman;
				/*bottom: 27px;*/
				}
			#p_00995_horario_contenido_clases_qwest{
				color: #666;
		    text-align: center;
		    height: 100%;
		    background: white;
		    width: 424px;
		    border-radius: 10px;
		    padding: 20px;
		    margin: auto;
				position: relative;
				}
			#p_00995_horario_contenido_clases_qwest button {
				color: #689ABE;
				background-color: #fff;
				border: solid 0.1em #689ABE;
				padding: 3px 13px;
				border-radius: 0.5em;
				cursor: pointer;
				font-size: 22px;
				text-transform: uppercase;
				padding: 5px;
				box-shadow: 0.3em 0.3em 0em #ddd;
				width: 10em;
				margin: 1em;
				}
				#p_00995_horario_contenido_clases_qwest button:hover{
					background-color: #999;
					color:#fff;

					}
				#p_00995_horario_contenido_clases_qwest h2{
					color: #5DC1F2;
					font-size: 35px;
					font-weight:normal;
					font-family:HelveticaNeueRoman;
					}

			.p_00995_horario_contenido_clases_fondo{
				position:relative;
				float:left;
				width:<? echo $set_capsula_ancho+$set_margen_extra_capsulas*2;?>px;
				background-color:transparent;
				/*margin-top:-2px;*/
				border-radius:30px;
				}

				.p_00995_horario_contenido_clases_fondo:hover{
					-moz-transform: scale(1.1);
					-webkit-transform: scale(1.1);
					transform: scale(1.1);
				}

		.p_01003_actividad_reproductor{
			display:none;
			width: 50%;
			-moz-transform: scale(2) translateX(25%);
			-webkit-transform: scale(2) translateX(25%);
			transform: scale(2) translateX(25%);
			font-size: 6em;
			}

		.p_01000_botones_qw{
			/*position:absolute;*/
			bottom:1em;
			width: 96%;
			text-align: center;
			}
		.p_01000_reserva_tipo_imagen{
			background-color:#00AEEF;
			height:60px;
			margin-bottom:-0.44em;
			}

	#p_00958_formulario_mas_horario_contenedor{
		position: absolute;
		height: 100%;
		width: 100%;
		background-color: rgba(0,0,0,0.75);
		z-index: 9003;
		padding:50px;
		color:#fff;
		font-size:16px;
		box-sizing: border-box;
		}
		.p_01000_formilario_mas_horario{
			font-size:3em;
			}
			.p_01000_formilario_mas_horario textarea{
				height:8em;
				width:90%;
				clear:both;
				}
			.p_01000_formilario_mas_horario button{
				font-size:1em;
				}

	.p_01000_reserva_tipo_texto{
		font-size: 25px;
		text-transform: capitalize;
		}
	.p_01000_reserva_duracion{
		font-size: 25px;
		padding-left: 8px;
		}
	.p_01000_reserva_fecha{
		font-size:22px;
		font-family: helveticaneueroman;
		}
	.p_01000_reserva_direccion{
		padding:1em;
		word-break:break-word;
		}

	.p_01000_horario_capsula_cancel{
		font-size: 12px;
		/*border: solid 0.15em;*/
		text-transform: uppercase;
		padding: 1px;
		background-color: #689ABE;
    color: white;
		display:none;
		}

#p_00958_horario_clases_reservadas{
	/*display:none;*/
	height:80%;
	width:100%;
	padding-bottom:10%;
	overflow-y:auto;
	}
	#p_00958_horario_reserva_nueva{
		font-size: 17px;
		padding: 17px;
		margin: 2em 5em;
		background-color: #fff;
		color: #0087ae;
		border: solid 0.1em;
		border-radius: 0.3em;
		box-shadow: 0.1em 0.1em 0;
		display:inline-block;
		font-family:HelveticaNeueRoman;
		cursor: pointer;
		}

.p_01000_capsula_reservada_nuevo{
	top:0 !important;
	left:0 !important;
	margin:0 1em 1em !important;
	float:left !important;
	}
.p_00958_horario_clases_reservadas_fecha{
	display: inline-block;
	border: solid #888;
	margin: 1.5em 0 0 1em;
	}
	.p_00958_horario_clases_reservadas_fecha_tutulo{
		font-size: 18px;
		text-align: center;
		}
		.p_00958_horario_clases_reservadas_fecha_tutulo span{
			background-color:#fff;
			padding:0 0.1em;
			font-family:HelveticaNeueRoman;
			color:#888;
			}

.p_01000_boton_capsula{
	width: 100%;
	text-align: center;
	font-size: 35px;
	font-family: HelveticaNeueRoman;
	bottom: 8px;
	position: absolute;
	color:#689ABE;
	bottom: 2px;
	}

#p_00958_horario_clases_reservadas_capsulas{
	display: inline-block;
	padding-bottom: 10%;
	clear:both;
	}
.p_00958_seleccion_horario_img{
	cursor: pointer;
	width: 40px;
}
.p_00995_x_anular{
	display: none;
}
.p_00995_x_anular_visible{
	height: 12px;
  width: 12px;
  /*float: right;*/
	background-image:url(<? echo ver_url("images/close.png","src"); ?>);
	background-repeat:no-repeat;
	background-size:100%;
	display: inline-block;
  vertical-align: top;
	display: inline-block;
}

@keyframes mensaje_huso{
    0%{
        transform: scale(0,0);
    }
    13%{
        transform: scale(1,1);
    }
    99%{
        transform: scale(1,1);
    }
    100%{
        transform: scale(0,0);
    }
}
/*animacion loading*/
@-moz-keyframes p_00995_horario_loading{
	100%{-moz-transform:rotate(360deg)}
}
@-webkit-keyframes p_00995_horario_loading{
	100%{-webkit-transform:rotate(360deg)}
}
@keyframes p_00995_horario_loading{
	100%{transform:rotate(360deg)}
}
@media screen and (max-width: 767px) {
	#p_00995_horario_contenedor_horario_horas{
		/*padding-left: 0;*/
	}
}

}

</style>
