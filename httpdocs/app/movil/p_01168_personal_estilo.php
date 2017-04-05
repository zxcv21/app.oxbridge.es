<!--
Pag. ID: p_01168
-->

<style>
	#p_00961_pago_realizado{
		border:3px solid #2dcee4;
		width: 400px;
    height: 130px;
    position: fixed;
    z-index: 3;
    background-color: white;
    margin: auto;
    left: 0;
    right: 0;
    margin-top: 66px;
    box-shadow: 5px 5px 20px grey;
		text-align: center;
    padding-top: 40px;
    box-sizing: border-box;
    font-size: 18px;
    font-weight: 600;
		display: none;
	}
	#p_00961_pago_realizado p{
		text-shadow: 1px 1px 2px grey;
	}
	#p_00961_pago_realizado input{
		margin-top: 15px;
    padding: 3px 12px;
    border-radius: 5px;
    cursor: pointer;
    border: none;
    box-shadow: 2px 2px 4px grey;
	}
	#p_00961_info_menu_secciones{
		margin: auto;
		width:400px;
		position:relative;
		}
		.p_00961_info_menu_seccion{
			float: left;
			clear: both;
			border: solid 0.05em;
			margin: 0 0 0.5em 0;
			color: #888;
			border-radius: 1em 1em 0 1em;
			height: 2em;
			width: 2em;
			padding: 0.1em;
			overflow:hidden;
			}
		.p_00961_info_menu_seccion_click{
			border: solid 0.05em;
			/*position:absolute;*/
			width:30%;
			}
		.p_00961_info_menu_espacio_blanco{
			height: 2.2em;
			float: left;
			width: 0.5em;
			z-index: 2;
			position: absolute;
			left: 2.2em;
			margin-top: -0.1em;
			background-color: #fff;
			}
		.p_00961_info_menu_seccion_fantasma{
			visibility:hidden;
			}
		.p_00961_info_menu_logo{
			height:1.9em;
			width: 1.9em;
			float: left;
			cursor: pointer;
			}
		.p_00961_menu_texto{
			font-size:1em;
			float: left;
			/*width: 85%;*/
			text-align: center;
			position:absolute;
			top:0;
			left:1.5em;
			}
	.p_00961_contenedor_seccion{
		padding: 71px 50px 50px;
		border: solid 0.06em #888;
		background-color: #fff;
		border-radius:0.7em;
		min-height:300px;
		display:inline-block;
		box-sizing: border-box;
    width: 500px;
		position: relative;
    left: 15px;
		overflow: auto;
		max-height: calc(100vh - 90px);
		}
		.p_00961_contenedor_seccion_orizontal{
			width: 400px;
			}
		.p_00961_contenedor_seccion_vertical{
			width:95.3%;
			}

	.p_00961_formulario_personal_info{
		font-size:1em;
		font-family:HelveticaNeueRoman;
		text-align:right;
		padding-right: 50px;
		line-height: 17px;
		}
	.p_00961_formulario_personal_info_input{
		font-size: 1em;
		font-family: HelveticaNeueRoman;
		margin: 1% 1%;
		width: 170px;
		float: right;
		clear: both;
		}
	#p_00961_formulario_personal_banco .p_00961_formulario_personal_info_input{
		float:none;
	}
	.p_00961_formulario_personal_info_iban{
		font-size:0.75em;
		font-family:HelveticaNeueRoman;
		margin:1% 0.5% 1% 0;
		width: 13%;
		height: 2em;
		/*float:right;*/
		text-align:center;
		}
	.p_00961_menu_seccion_titulo{
		width:300px;
		text-align:center;
		margin-bottom:0.5em;
		font-size: 1.5em;
		margin-left: 40px;
    margin-bottom: 20px;
		position: absolute;
		left: -15px;
		top: 7px;
		}
	.p_00961_formulario_personal_info_nombre_input{
		/*float: right;*/
		width: 45%;
		/*margin-top: 0.3em;*/
		margin-right: 2%;
		/*margin-bottom:4%;*/
		font-family: HelveticaNeueRoman;
		text-align: right;
		color:#888;
		}
		#p_00961_formulario_personal_banco .p_00961_formulario_personal_info_nombre_input{
			display: inline-block;
		}

	input[type="submit"]{
		cursor: pointer;
	}

	.p_00961_formulario_personal_info_nombre_val{
		margin-top:0.3em;
		font-family:HelveticaNeueRoman;
		float:right;
		clear:both;
		}
	.p_00961_formulario_personal_info_val{
		font-size:0.6em;
		font-family:HelveticaNeueRoman;
		margin:0.2em 1em;
		width: 43%;
		float:left;
		}

	.p_00961_personal_asistencia_contenedor{
		/*font-size: 0.8em;*/
		font-family: helveticaneueroman;
		margin-left:0.2em;
		margin-right:0.2em;
		}
		.p_00961_personal_asistencia_boton{
			height:1.1em;
			margin-top:0.1em;
			cursor: pointer;
			}
		.p_00961_personal_asistencia_40{
			width:40%;
			float: left;
			text-align:left;

			}
			.p_00961_personal_asistencia_ir_clase{
				height: 16px;
		    position: absolute;
		    left: 120px;
		    top: 5px;
			}
		.p_00961_personal_asistencia_20{
			width:20%;
			float: left;
			}
		.p_00961_personal_asistencia_clase{
			display: inline-block;
			width: 100%;
			padding: 0.2em;
			border-top: solid rgba(45,206,228,1);
			color: #333;
			position: relative;
			cursor: pointer;
			box-sizing: border-box;
			}
		.p_00961_personal_asistencia_dia_lectivo{
			font-size:16px;
			}
			@media screen and (max-width: 767px) {
				.p_00961_formulario_personal_info{
					/*min-width: 274px;*/
					padding-right: initial;
					margin: auto;
    			width: 100%;
    			max-width: 334px;
				}
				.p_00961_contenedor_seccion{
					padding-left: 0;
					padding-right: 0;
					padding-bottom: 20px;
					width: calc(100vw - 46px);
					min-width: 274px;
					/*max-height: 83vh;*/ /*no funciona en IOS*/
					min-height: 266px;
				}
				.p_00961_menu_seccion_titulo{
					margin: auto;
					left: 0;
			    right: 0;
			    width: initial;
				}
				.p_00961_formulario_personal_info_nombre_input {
					margin-top: 4px;
				}
				#p_00961_info_menu_secciones{
					margin: 5px;
					width: initial;
				}
				input[type="submit"]{
					float: none;
    			margin-right: calc(50% - 85px);
				}
				#p_00961_personal_info_respuesta{
					float: none;
				}
				.p_00961_personal_asistencia_boton{
					position: absolute;
    			right: 12px;
				}
				.p_00961_personal_asistencia_ir_clase{
					right: 41px;
					left: initial;
					height: 1.1em;
				}
				#p_00961_formulario_personal_banco{
					box-sizing: border-box;
					padding-left: 5px;
				}
				#p_00982_boton_guardar_matricula_2{
					margin-right: initial;
				}
				#p_00961_formulario_personal_banco>div{
					/*float: left;*/
					margin: auto;
				}
				.p_00961_titular_datos_bancarios{
					display:inline-block;
					width:49%;
					min-width:200px;
					text-align:center;
				}
				.p_00961_titular_datos_bancarios .p_00961_formulario_personal_info_nombre_input{
					display: block !important;
					width: initial;
					text-align: center;
				}
				.p_00961_titular_datos_bancarios .p_00961_titular_datos_bancarios {
					display:block;
				}

				.p_00961_formulario_personal_info_input{
					width: 158px;
				}
			}
			@media screen and (max-width: 767px) and (orientation:landscape){
				#p_00961_menu_contenedor_1{
					max-height: calc(100vh - 9vw);
				}
			}

</style>
