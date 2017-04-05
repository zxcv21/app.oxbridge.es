<!--
Pag. ID: p_00991
-->

<style>
/*///////////////////////////////////////////////////////////HEAD*/
	#p_00960_clases_head{
		width:477px;
		/*margin-left:20px;*/
		display:block;
		/*float:left;*/
		margin: auto;
		padding-left: 20px;
		}
		#p_00960_clases_head_profe{
			float:left;
			font-family: HelveticaNeue, Helvetica, Arial, sans-serif;
			color:#999;
			letter-spacing:3px;
			text-transform:capitalize;
			font-size:16px;
			margin-bottom:1%;
			width:395px;
			position:relative;
			z-index:1;
			}
			#p_00960_clases_head_foto{
				height:150px;
				width:150px;
				float:left;
				border-radius:100%;
				-moz-transition:0.5s;
				-webkit-transition:0.5s;
				transition:0.5s;
				cursor: pointer;
				}
			#p_00960_clases_head_foto_lupa{
				position: absolute;
				left: 146px;
				top: 0;
				height: 38px;
				opacity: 0.4;
				cursor: pointer;
				}
				#p_00960_clases_head_id_profesor{
					background-color: whitesmoke;
			    text-align: center;
			    font-size: 20px;
			    color: black;

			    height: 30px;
			    position: absolute;
			    z-index: 2;
					top: 42px;
					left: -5px;
					border-radius: 20px 0px 0px 0px;
					box-sizing: border-box;
					display: none;
				}
				#p_00960_clases_head_id_profesor>span{
					padding: 4px;
					display: block;
				}
			#p_00960_clases_head_info{
				float:left;
				position:absolute;
				bottom:0;
				padding-left:9%;
				margin-left:123px;
				font-size: 16px;
				}
				#p_00960_clases_head_nombre{
					float:left;
					max-height:2.3em;
					/*font-size:0.9em;*/
					}
				.p_00960_clases_head_valoracion {
					display: inline-block;
					float:left;
					clear:both;
				}
				.p_00960_clases_head_valoracion div {
					width:25px;
					height:25px;
					float:left;
					padding-left:6px;
					background-image:url(<? echo ver_url("images/estrella.png","src"); ?>);
					background-size:contain;
					background-position:center;
					background-repeat:no-repeat;
					cursor: pointer;
				}
				.p_00960_clases_head_valoracion div:hover{
					transform: scale(1.2, 1.2);
				}
				#p_00960_clases_head_info_titulo{
					/*font-size:0.5em;*/
					/*font-style:italic;*/
				}

				/*.p_00960_clases_head_valoracion:hover div {
					background-image:url(./images/estrella_FULL.png);
				}
				.p_00960_clases_head_valoracion > div:hover ~ div {
					background-image:url(./images/estrella.png);
				}*/

			#p_00960_clases_head_fecha{
				float:right;
				font-family: HelveticaNeue, Helvetica, Arial, sans-serif;
					color:#8c6792;
					font-size:16px;
				letter-spacing:0px;
				display:inline-block;
				text-align:center;
				margin:0.3em 0;
				position:inherit;
				z-index:1;
				margin-left: 7px;
				}
				#p_00960_clases_head_fecha_desplegable{
					height:0.3em;
					margin: 0.17em;
					float:right;
					cursor: pointer;
					}
			#p_00960_clases_head_fecha_imprimir{
				float:right;
				letter-spacing:0;
				color:#888;
				font-size:1.1em;
				font-family:HelveticaNeueRoman;
				text-decoration: none;
				cursor: pointer;
				}
			#p_00960_clases_head_fecha_boton, #p_00960_clases_head_horario_boton{
				height: 9px;
				width: 16px;
				vertical-align: middle;
				cursor: pointer;
				margin: 0px 4px 0 -4px;
				}
			#p_00960_clases_head_horario{
				float:right;
				clear:both;
				margin-right:0.9em;
				cursor: pointer;
				}
			.p_00992_clases_head_horario_clase{
				color:#689ABE;
				/*font-weight:bold;*/
				margin:0 0 0 0.4em;
				float:left;
				height:1em;
				cursor: pointer;
				}
			.p_00992_clases_head_horario_clase_hora_actual{
				border-bottom: 0.1em solid #FD409D;
				}

			#p_00960_clases_head_horario_imprimir{
				}

		.p_01003_enlace_actividad{
			height:99%;
			width:100%;
			}


			.p_00992_clases_actividades_pestanas{
				/*width: 100%;
				clear: both;*/
				overflow: hidden;
				display: none;
				}
				.p_00992_clases_actividades_pestanas img{
					float: left;
					/*height: 40px;*/
					margin: 1em;
					cursor: pointer;
					}
		.p_00992_clases_actividades_pestanas_box{
			float: left;
			display: inline-block;
			}
			.p_00992_clases_actividades_box_span{
					height: 0.9em;
					float: left;
					font-size: 16px;
					margin: 2em 0 0 -0.5em;
					border-radius:25%;
				}
		.p_00992_clases_actividades_pestanas_box_click{
			float: left;
			display: inline-block;
			background-color: #ddd;
			border-radius: 25%;
			}
			#p_00992_imprimir{
				display: none;
				position: absolute;
				top: 0;
				right: 0;
				z-index: 0;
			}
			#p_00992_imprimir ul{
				position: absolute;
				width: 215px;
				top:45px;
				/*top: -200px;*/
				display: none;
				right: 0;
			}
			#p_00992_imprimir li{
				display: block;
		    height: 20px;
		    padding: 5px;
		    background: linear-gradient(to top, rgb(211, 211, 211) , rgb(511, 511, 511));
		    border-radius: 5px;
		    color: rgb(100, 100, 100);
		    margin-bottom: 2px;
		    box-shadow: 3px 3px 10px rgb(150,150,150);
				cursor: pointer;
			}
			#p_00992_imprimir li:hover{
				box-shadow: 3px 3px 10px rgb(50,50,50);
    		opacity: 0.9;
			}
			#p_00992_print_icon{
				width: 48px;
				height: 48px;
				background-image: url(<? echo ver_url("images/print.png","src"); ?>);
				background-position:center;
				background-repeat:no-repeat;
				background-size: cover;
				cursor: pointer;
				margin-right: 30px;
			}
			#p_00992_imprimir:hover ul{
				/*top: 49px;*/
				display: block;
			}
			.p_00992_clases_actividades_box_span_click{
				height: 0.9em;
				float: left;
				font-size: 1.8em;
				margin: 2em 0 0 -0.9em;
				background-color:#ddd;
				border-radius:25%;
				}

			.p_00960_imagen_comentario{
				float:left;
				margin-left:0.3em;
				display:none;
				}
	#p_01003_contenedor_actividad{
		font-size:16px;
		}
	#p_00960_clases_actividades_box>div[align="center"]>span{
		margin-bottom: 20px;
	}
	#p_00992_clases_head_horario_clase span{
		font-size: 12px;
	}

@media screen and (max-width: 767px) {
	#p_00960_clases_head{
		margin-top: 20px;
	}

	#p_00960_clases_head{
		width: 100%;
		padding: 3px;
		box-sizing: border-box;
	}
	#p_00960_clases_head_profe{
		width: 100%;
	}
	#p_00960_clases_head_fecha{
		margin-top: 0;
	}
	#p_00960_clases_head_foto{
		height: 120px;
		width: 120px;
	}
	#p_00960_clases_head_foto_lupa{
		left: 120px;
	}
	#p_00992_imprimir{
		display: none !important;
	}
	#p_01003_contenedor_actividad{
		padding: 2px;
	}
	#p_00960_clases_actividades_box>div[align="center"]{
		position: fixed;
    top: 40%;
    /* bottom: 0; */
    left: 0;
    right: 0;
	}
	#p_00960_clases_actividades_box>div[align="center"]>span{
		margin-bottom: 0;
	}
	#p_00992_clases_head_horario_clase span{
		font-size: 14px;
	}
	.p_00992_clases_head_horario_clase span{
		font-size: 14px;
	}
	#p_00960_clases_actividades_box>div:last-child{
		margin-bottom: 100px;
		/*margin-bottom: 16vh;*/
	}
}

</style>
