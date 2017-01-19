<!--
Pag. ID: p_00995
-->
<style type="text/css">
	/*#p_00995_horario_reloj{
		position:absolute;
		background-color:#0f0;
		font-size:20px;
		width:100px;
		height:40px;
		top:115px;
		z-index:901;
		}----------------------------------------------------------------------------------SUPLANTER POR LIENEA TEMPORAL*/
	#p_00995_horario_reloj_linea{
		position: relative;
		z-index: 97;
		border: solid 1px rgba(0,255,0,0.7);
		height: 3px;
		margin-left: 70px;
		}
	#p_00958_horario_cargando{
		position:absolute;
		height:100px;
		width:100px;
		top:50%;
		left:50%;
		margin:0 0 0 -50px;
		-moz-animation:p_00995_horario_loading infinite 1s linear;
		-webkit-animation:p_00995_horario_loading infinite 1s linear;
		animation:p_00995_horario_loading infinite 1s linear;
		z-index:9999;
		}
	
	#p_00958_horario_header_filtros{
		width:390px;
		min-height:100px;
		float:left;
		margin-left:167px;
		margin-top:10px;
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
		#p_00958_horario_filtros_tipo{
			height:20px;
			clear:both;
			float:left;
		}
		.p_00958_horario_filtros_tipo_div{
			height:20px;
			width:20px;
			float:left;
			margin:0 5px 0 0;
			padding:2px;
			border-radius:4px;
			box-shadow: 1px 1px 1px 1px #888;
			cursor:pointer;
			alignment-adjust:central;
			}
		.p_00958_horario_filtros_tipo_img{
			max-width:100%;
			max-height:100%;
			vertical-align:middle;
			background-color:#2DCEE4;
			}
		#p_00958_horario_filtros_temario{
			float:left;
			width:150px;
			height:20px;
			margin:0 5px 0 0;
			padding:2px;
			border-radius:4px;
			box-shadow: 1px 1px 1px 1px #888;
			display:none;
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
				margin: 0 0 0 5px;
				font-size: 15px;
				width: 132px;
				float: left;
				white-space:nowrap;
				}
			#p_00958_horario_filtros_temario_select{
				float: right;
				background-color: #029EE1;
				height: 20px;
				margin: -2px -4px 0 0;
				border: solid 0px;
				border-radius: 0 5px 5px 0;
				color: white;
				vertical-align: middle;
				padding: 3px;
				width: 17px;
				height: 24px;
				outline: none;
				cursor:pointer;
				}
				#p_00958_horario_filtros_temario_select_options{
					display:none;
					background-color: #fff;
					position: absolute;
					padding: 5px;
					border: solid 2px #eee;
					margin: 24px 0 0 -152px;
					z-index: 1001;
					width:125px;
					}
					.p_00958_horario_filtros_temario_select_options_op{
						margin:3px 0 0 0;
						cursor:pointer;
						color:#000;
						text-align:left;
						}
						.p_00958_horario_filtros_temario_select_options_op_span{
							font-size:12px;
							}
							
		#p_00958_horario_header_punteros{
			display: none;
			margin: 7px 0 0 -19px;
			/*max-height: 48px;
			overflow-x: hidden;
			overflow-y: auto;*/
			padding-left: 20px;
			direction: rtl;
			/*min-height:24px;*/
			width:100%;
			}
			.p_00958_horario_header_punteros_div{
				height:14px;
				margin:5px 10px 5px 0;
				font-size: 13px;
				float:left;
				cursor:pointer;
				}
				.p_00958_horario_header_punteros_div_img{
					height:20px;
					float:left;
					margin: -3px 5px 0 0;
					}
			.p_00958_horario_header_punteros_div:hover > div{
				display:inline;
				}
				.p_00958_horario_header_punteros_div_hover{
					display:none;
					position:absolute;
					height: 53px;
					width: 69px;
					z-index: 110;
					margin: 15px -70px 0 0;
					padding: 1px 0 3px 0;
					text-align: center;
					box-shadow: 0px 0px 3px;
					background-color:#fff;
					}
					.p_00958_horario_header_punteros_div_hover img{
						
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
			width: 200px;
			float: right;
			margin: -30px 10px 0px 0px;
			}
			#p_00958_horario_header_punteros_mas{
				float: right;
				height: 25px;
				border: 0px;
				border-radius: 4px;
				background-color: #768D78;
				cursor: pointer;
				color: #fff;
				width: 106px;
				font-size: 13px;
				font-family: HelveticaNeue, Helvetica;
				letter-spacing: 2px;
				margin: 0 -2px 0 0;
				}
			#p_00958_horario_header span{
				background-color: #eee;
				padding:2px;
				}
			#p_00958_horario_header_punteros_mas:hover{
				background-color:#7d9b80;
				}
			#p_00958_horario_header_act{
				display:none;
				position:absolute;
				float:right;
				height:25px;
				border:0px;
				padding:3px 4px;
				border-radius:4px;
				background-color:#2DCEE4;
				cursor:pointer;
				color:#fff;
				margin: 45px 0 0 183px;
				z-index: 200;
				}
				#p_00958_horario_header_act_div{
					height:19px;
					width:19px;
					background-image:url(images/recarga.png);
					background-repeat:no-repeat;
					background-size:100%;
					}
					
		#p_00958_horario_header_act span{
			background-color: #eee;
			padding:2px;
			}
		#p_00958_horario_header_act:hover{
			background-color:#44d7ea;
			}

	#p_00958_horario_contenedor_horario {
		width: 100%;/*para PC?*/
		margin:0 0 0 0;
		overflow: auto;
		clear:both;
		background-color:#fff;
		}
		#p_00958_horario_contenedor_horario::-webkit-scrollbar {
			width: 5px;
			height: 5px;
			}
		#p_00958_horario_contenedor_horario::-webkit-scrollbar-button {
			height: 15px;
			width:0px;
			}
		#p_00958_horario_contenedor_horario::-webkit-scrollbar-thumb {
			background: #ccc;
			}
		#p_00958_horario_contenedor_horario::-webkit-scrollbar-track {
			background: #eee;
			}
	
	#p_00995_horario_contenedor_horario_nivel{
		vertical-align:middle;
		z-index:900;
		float:left;
		height:20px;
		width:70px;
		position:absolute;
		font-size:12px;
		padding-top:15px;
		background-color:#fff;
		color:#ddd;
		}
		#p_00995_horario_contenedor_horario_nivel span{
			font-size:17px;
			color:#555;
			}
			
	#p_00958_horario_contenedor_horario_dias{
		background-color:#fff;
		position: relative;
		z-index: 98;
		height:35px;
		padding-left:70px;
		}
		
	#p_00995_horario_contenedor_horario_horas{
		background-color:#fff;
		position: relative;
		z-index: 99;
		float: left;
		width:70px;
		text-align:center;
		font-size:13px;
		color:#FFF;
		margin-top:1px;
		}
		#p_00995_horario_contenedor_horario_horas span{
			background-color: #ddd;
			top: -7px;
			position: relative;
			padding: 0 5px;
			font-size: 13px;
			color:#555;
			}
			
	#p_00995_horario_contenedor_horario_linea{
		}
		.p_00995_horario_contenedor_horario_linea_div{
			width: 2px;
			position: absolute;
			margin-left: -1px;
			}
		#p_00995_horario_contenedor_horario_linea_span_i,
		#p_00995_horario_contenedor_horario_linea_span_d{
			width: 100px;
			margin: -17px 0 0 -105px;
			text-align:right;
			float:left;
			}
			#p_00995_horario_contenedor_horario_linea_span_d{
				text-align:left;
				margin: -17px 0 0 5px;
				}
			
	#p_00958_horario_contenedor_horario_cuerpo_datos {
		}
		.p_00995_horario_contenedor_horario_horas,
		.p_00995_horario_contenedor_horario_horas_separador{
			height: 35px;
			width: 70px;
			background-color: #ddd;
			border: solid #777;
			border-width: 0px 0px 1px 0px;
			}
			.p_00995_horario_contenedor_horario_horas_separador{
				height:19px;
				}
			
	.p_00995_horario_contenedor_horario_dia{
		height:20px;
		width:30px;
		margin:15px 1px 0px 0px;
		border-width:1px 1px 0px 0px;
		background-color:#ddd;
		float:left;
		text-align:center;
		font-size:17px;
		color:#555;
		}
		.p_00995_horario_contenedor_horario_dia span{
			font-size:14px;
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
		}
		
	#p_00995_horario_contenedor_clases{
		}
		.p_00995_horario_contenido_clases,
		.p_00995_horario_contenido_clases_reservada{
			position:relative;
			float:left;
			width:80px;
			background-color:#fff;
			border:solid 2px #689ABE;
			border-radius:7px;
			overflow:hidden;
			cursor:pointer;
			}
		.p_00995_horario_contenido_clases_reservada{border:solid 2px #FF3799;}
			.p_00995_horario_contenido_clases_titulo,
			.p_00995_horario_contenido_clases_titulo_reservada{
				width:100%;
				text-align:center;
				background-color:#689ABE;
				color:#fff;
				font-size:11px;
				overflow:hidden;
				height:13px;
				}
			.p_00995_horario_contenido_clases_titulo_ticker{
				height: 12px;
				width:490px;
				position: relative;
				}
				.p_00995_horario_contenido_clases_titulo_ticker_hora{
					height:100%;
					width:80px;
					float:left;
					text-align:center;
					}
				.p_00995_horario_contenido_clases_titulo_ticker_text{
					height:100%;
					width:290px;
					float:left;
					text-align:center;
					}
				.p_00995_horario_contenido_clases_titulo_reservada{
					background-color:#FF3799;
					}
					.p_00995_horario_contenido_clases_titulo_reservada .p_00995_horario_contenido_clases_titulo_ticker{
						-moz-animation: p_00995_horario_ticker 10s infinite; /* Chrome, Safari, Opera */
						-moz-animation-timing-function:linear;
						-webkit-animation: p_00995_horario_ticker 10s infinite; /* Chrome, Safari, Opera */
						-webkit-animation-timing-function:linear;
						animation: p_00995_horario_ticker 10s infinite;
						animation-timing-function:linear;
						}
					
			.p_00995_horario_contenido_clases_tipo{
				position:absolute;
				top:43%;
				margin:-16px 0 0 0;
				left:0px;
				width:100%;
				text-align:center;
				font-size:11px;
				/*margin:3px 0;*/
				transition:0.5s;
				-webkit-transition:0.5s;
				-moz-transition:0.5s
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
					height:34px;
					margin:2px 0 0 0;
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
				.p_00995_horario_contenido_clases_boton_reservada button{
					border-radius:4px;
					cursor:pointer;
					padding:1px 1px;
					width:100%;
					text-transform:uppercase;
					background-color:#2DCEE4;
					border:solid 1px #2DCEE4;
					color:#fff;
					height:19px;
					top:22px;
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
				font-size:12px;
				position: absolute;
				bottom:8%;
				color:#689ABE;
				}
			#p_00995_horario_contenido_clases_qwest{
				color:#666;
				}
			#p_00995_horario_contenido_clases_qwest button {
				margin: 0 3px;
				color: #999;
				background-color: #fff;
				border: solid 1px #999;
				padding: 3px 13px;
				border-radius: 3px;
				cursor: pointer;
				}
				#p_00995_horario_contenido_clases_qwest button:hover{
					background-color: #999;
					color:#fff;
					
					}
				#p_00995_horario_contenido_clases_qwest h2{
					font-size: 17px;
					text-align: center;
					}
					
			.p_00995_horario_contenido_clases_fondo{
				position:relative;
				float:left;
				width:84px;
				background-color:#fff;
				margin-top:-2px;
				border-radius:7px;
				}

/*animacion ticker*/
@-moz-keyframes p_00995_horario_ticker{
    0%{left: 0px;}
    100%{left: -370px;}
}
@-webkit-keyframes p_00995_horario_ticker{
    0%{left: 0px;}
    100%{left: -370px;}
}
@keyframes p_00995_horario_ticker{
    0%{left: 0px;}
    100%{left: -370px;}
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


</style>