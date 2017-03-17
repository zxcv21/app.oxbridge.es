
<style>
/*fuentes--------------------------*/
@font-face {
	font-family: HelveticaNeue;
	letter-spacing:0.05em;
	src: url("<? echo ver_url("fonts/HelveticaNeue.woff","src"); ?>");
}
@font-face {
	font-family: HelveticaNeueRoman;
	letter-spacing:0.05em;
	src: url("<? echo ver_url("fonts/HelveticaNeueRoman.woff","src"); ?>");
}

html, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	letter-spacing:0.05em;
	font-family: HelveticaNeue, Helvetica, Arial, sans-serif;
	vertical-align: baseline;
	}

#contenedor{
	position:fixed;
	width:100%;
	height:100%;
	z-index: -1;
	background-color: white;
	}
#contenedor_menu{
	position:relative;
	/*left: 10px;*/
	display: inline-block;
	z-index:999;
	-moz-transition:0.5s;
	-webkit-transition:0.5s;
	transition:0.5s;
	float: left;
	height: inherit;
	}

#horario, #claseweb, #clases, #personal, #smile{
	top:0;
	left:0;
	height:100%;
	width:100%;
	z-index:-1;
	display:none;
	position:absolute;
	box-sizing: border-box;
	/*margin-top: 80px;*/
	padding-top: 120px;
	overflow: auto;
	}
	#personal{
		/*top: -36px;*/
		padding-top: 86px;
	}
	#horario{
		margin-top: 40px;
		padding-top: 60px;
	}
	#clases{
		/*position: static;
		width: 500px;
		margin: auto;
		padding-top: 50px;*/
		padding-top: 139px;
	}
	#smile{
		padding-top: 86px;
	}
.manito{
	cursor:pointer;
	}
.boton_azul{
    padding: 0em 1em 0.1em 1em;
    background: #0087ae;
    color: #fff;
    border: solid 0.1em;
    border-radius: 0.3em;
    box-shadow: 0.1em 0.1em 0;
    font-family: HelveticaNeueRoman;
}


.img_cargando{
  -webkit-animation-name:cargando;
  -webkit-animation-duration: 2s;
  -webkit-animation-timing-function: linear;
  -webkit-animation-iteration-count: infinite;

  animation-name: cargando;
  animation-duration: 1s;
  animation-timing-function: linear;
  animation-iteration-count: infinite;

	}

.parpadea{
  -webkit-animation-name:parpadeo;
  -webkit-animation-duration: 2s;
  -webkit-animation-timing-function: linear;
  -webkit-animation-iteration-count: infinite;

  animation-name: parpadeo;
  animation-duration: 1s;
  animation-timing-function: linear;
  animation-iteration-count: infinite;

	}
@-moz-keyframes parpadeo{
	0% { opacity: 1.0; }
	49% { opacity: 1.0; }
	50% { opacity: 0.0; }
	99% { opacity: 0.0; }
	100% { opacity: 1.0; }
	}
@-webkit-keyframes parpadeo {
	0% { opacity: 1.0; }
	49% { opacity: 1.0; }
	50% { opacity: 0.0; }
	99% { opacity: 0.0; }
	100% { opacity: 1.0; }
	}
@keyframes parpadeo {
	0% { opacity: 1.0; }
	49% { opacity: 1.0; }
	50% { opacity: 0.0; }
	99% { opacity: 0.0; }
	100% { opacity: 1.0; }
	}

@-moz-keyframes cargando{
	0% { -moz-transform: rotate(0deg); }
	100% { -moz-transform: rotate(360deg); }
	}
@-webkit-keyframes cargando {
	0% { -webkit-transform: rotate(0deg); }
	100% { -webkit-transform: rotate(360deg); }
	}
@keyframes cargando{
	0% { transform: rotate(0deg); }
	100% { transform: rotate(360deg); }
	}

.contenedores_formularios{
	display:none;
	/*position:absolute;*/
	height: 100%;
	width: 800px;
	/*background-color: rgba(0,0,0,0.7);*/
	color: #fff;
	padding: 50px;
	/*z-index: 9999;*/
	box-sizing: border-box;
	margin: auto;
	}


#head_oxbridge{
	position:relative;
	height: 75px;
	padding:5px;
	width: 100%;
	box-sizing: border-box;
	/*max-height:10%;*/
	z-index:999;
	background-color: white;
	}
	#head_oxbridge_img{
		/*height:65px;*/
		height: 100%;
		width:auto;
		float:right;
		margin-left: 10px;
		}
		.logo_empresa{
			<?if($_SESSION["version__p_php_session"]!=""){?>
			background-color: #21aed7;
			<?}?>
		}
		#p_00995_formulario_mail_iframe{
			position: absolute;
	    background: whitesmoke;
			-webkit-transform: scale(1.5,1.5);
      -ms-transform: scale(1.5,1.5);
	    transform: scale(1.5,1.5);
	    transition: 1s;
	    top: 164px;
	    left: 0;
	    right: 0;
	    margin: auto;
	    box-shadow: 5px 5px 20px gray;
			border: 3px solid #21aed7;
			}
			#p_00995_formulario_mail_iframe *{
				margin: 0;
				padding: 0;
			}
		#p_00995_formulario_mail, #p_00995_formulario_valoracion{
			font-size:1em;
			}
			.p_00995_formulario_mail_div{
				float:left;
				margin: 0 0.5em 0.5em 0;
				}
			.p_00995_formulario_mail_input{
				font-size:14px;
				width:100%;
				border-radius:1em;
				background-color:#fff;
				}
	#head_oxbridge_menu_apartados{
		height:100%;
		/*float:right;*/
		float: left;
		margin-left: 129px;
		}
	#head_send_email_img{
		float: right;
		height: 35%;
		padding: 2em 1.3em;
		margin-right: 10px;
		-moz-transition:1s;
		-webkit-transition:1s;
		transition:1s;
	}

	#p_00955_head_oxbridge_idioma{
		float: right;
		height:100%;
		}

		#p_00955_head_oxbridge_idioma img{
			height: 100%;
			z-index:101;
			}
		#p_00955_head_oxbridge_idiomas{
			position:absolute;
			display:none;
			top: 6em;
			right:0;
			margin-left: 2px;
			background-color:#fff;
			padding:2%;
			width:5em;
			}
			#p_00955_head_oxbridge_idiomas img{
				width:100%;
				border:solid #fff;
				height:auto;
				}

.boton_normal{
	border: solid 0.1em #fff;
	background-color: #555;
	color: #fff;
	font-size: 16px;
	padding: 5px 10px;
	background-image: linear-gradient(to bottom, #bbb, #555);
	border-radius:1em;
	cursor:pointer;
}
.boton_normal:active {
	background-image: linear-gradient(to bottom, #222, #555);
    border: solid 0.1em #eee;
}

/*h1{
	font-family:Helvetica, Arial, sans-serif;
	font-size: 14px/22px;
	font-size:24px;
	color:#999;
	letter-spacing: 6px;
	}
h2{
	}
h3{
	}
h4{
	}*/


#p_00955_click_out_idioma{
	position:fixed;
	height:100%;
	width:100%;
	zindex:100;
	top:0;
	left:0;
}

#p_00995_preguntas_insidencias_div{
    background-color: rgba(0,0,0,0.8);
    position: absolute;
    height: 90%;
    width: 90%;
    z-index: 999;
    color: #fff;
    font-size: 3em;
    padding: 5%;
    font-family: helveticaneueroman;
}
#p_00995_preguntas_insidencias_div input{
	height:3em;
	width:3em;
    vertical-align: middle;
}
#p_00995_preguntas_insidencias_div textarea{
    font-size: 1em;
    width: 100%;
    height: 6em;
}
#p_00955_div_img_cargando{
	height: 100%;
  width: 100%;
  background: transparent;
  position: absolute;
  z-index: 10;
}
#p_00955_img_cargando{
	position: fixed;
  margin: auto;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  /*z-index: 10;*/
	display:block;
}
#p_00955_overall_seleccion_nivel{
		z-index: 3;
}
.p_00986_div_nivel
{
	position: absolute;
  max-width: 718px;
  background: #F6F6F6;
  text-align: center;
  font-size: 14px;
  overflow: hidden;
  padding-bottom: 11px;
  margin: auto;
  left: 0;
  right: 0;
  top: 50%;
	margin-top: -200px;
	border: 4px solid #1ABC9C;
  padding-top: 25px;
	border-radius: 16px;
}
#p_00986_div_nivel_seleccion
{
	opacity: 1;
}
.p_00986_div_nivel_seleccion_nivel
{
    width: 120px;
    float: left;
    padding: 10px;
}
.p_00986_div_nivel_seleccion_nivel p{
	cursor: default;
}
.p_00986_div_nivel_seleccion_nivel_redondo
{
	height: 80px;
  width: 80px;
  border: solid 3px #1ABC9C;
  border-radius: 100%;
  margin: 0 auto 11px;
  font-size: 39px;
  color: #1ABC9C;
  cursor: pointer;
	font-weight: 600;
	box-sizing: border-box;
	padding-top: 19px;
	padding-left: 4px;
	background-color: white;
}
.p_00986_div_nivel_seleccion_nivel_redondo:hover{
	color: white;
	background-color: #1ABC9C;
}
.p_00986_div_nivel_seleccion_nivel_redondo_select
{
	height: 200px;
  width: 200px;
  border: solid 3px #1ABC9C;
	background:#1ABC9C;
  border-radius: 100%;
  margin: 0 auto 30px auto;
  font-size: 100px;
  color: #F6F6F6;
}
#p_00955_cargando_seleccion_nivel{
	position: absolute;
  height: 135px;
  display: none;
  left: 0;
  right: 0;
  margin: auto;
  margin-top: 54px;
}
@media screen and (max-width: 767px) {
	#contenedor_menu{
	position:fixed;
	bottom:0;
	width:100%;
	height:8%;
	float: none;
	}
	#head_oxbridge{
		/*height: 60px;*/
		height: 8vh;
		padding: 0;
	}
	#horario, #claseweb, #clases, #personal, #smile{
		padding-top: 0;
		margin-top: 0;
		padding-bottom: 8%;
		position: relative;
	}
	#head_oxbridge_menu_apartados{
		margin-left: 3px;
	}
	.contenedores_formularios{
		width: 100%;
	}
}

@media screen and (max-width: 767px) and (orientation:landscape){
	#contenedor_menu{
		position:relative;
		-moz-transition:0.5s;
		-webkit-transition:0.5s;
		transition:0.5s;
		float: left;
		height: initial;
		width: initial;
		}
		#head_oxbridge{
			/*height: 60px;*/
			height: 8vw;
		}
		#horario, #claseweb, #clases, #personal, #smile{
			padding-bottom: 0;
		}
}
</style>

<link rel="stylesheet" href='<? ver_url("firma/pad/css/signature-pad.css","");?>'>

<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-39365077-1']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>
