<!--
-Pag. ID: p_01173
-->
<style>
.pestanas {
    font-size: 2em;
}

.pestanas ul{
    margin-left: -40px;
}

.pestanas li{
    list-style-type: none;
    float: left;
    text-align: center;
    margin: 0px 5px -5px 1px;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    border: 5px solid #aaa;
    border-bottom: #fff;
    padding: 0.2em 0.5em;
    background: #ccc;
    font-size: 1.5em;
}

.pestanas a:link{
    text-decoration: none;
	color: #666;
}

.contenedor_pestanas{
    clear: both;
    padding: 20px;
    border-radius: 5px;
    border-top-left-radius: 0px;
    border: 5px solid #aaa;
    margin-bottom: 25em;
    width: inherit !important;
}

.preguntas{
    /* border-top-width: 10%; */
    border-right-width: 1em;
    border-bottom-width: thick;
    border-left-width: thin;
    text-align: center;
    padding-right: 1.2em;
}
.text{
	padding-top: 30px;
	padding-right: 3px;
	font-size: 16px;
	color: #676C71;
	margin-left: 5%;
	margin-right: 5%;
	text-align: left;
	font-family: HelveticaNeueRoman;
  margin-top: 20px;
}
.text2{
    font-size: 16px;
    margin-left: 5%;
    margin-right: 5%;
    margin-bottom: 1em;
    padding-left: 1%;
    padding-top: 1%;
    padding-right: 1%;
    text-align: left;
    word-wrap: break-word;
    max-height: 10.4em;
    overflow: auto;
}
.text2Especial{
	font-size: 2em;
	border: 2px solid;
	border-color: black;
	margin-left: 10%;
	margin-right: 10%;
	padding-left: 1%;
	padding-top: 1%;
	padding-right: 1%;
	padding-bottom: 1%;
	text-align: left;
}
.resp{
	display: inline-block;
	cursor: pointer;
	font-size: 2.5em;
	text-align: left;
	margin-left: 10%;
	word-wrap: break-word;
}
.checkboxMultioption{
	width: 18px; /*Desired width*/
	height: 18px; /*Desired height*/
	margin-left: 0px;
	margin-bottom: -2px;
	margin-top: -1px;
	/*box-shadow: 10px 10px 20px #B7B327;*/
	margin-bottom: 5em;

}
/*
.style_checkbox_redondo{
	border-radius: 100%;
    overflow: hidden;
    float: left;
    /* background-color: #E80726; */
    border: 7px solid rgb(24, 197, 206);
    margin-bottom: 6%;
    width: 9%;
    /* top: 17%; */
    /* margin-top: -2%; */
    /* padding-top: 0%; */
    /* padding-right: 0%; */
    padding: 0% 0% 0% 0%;
    margin-top: -2%;
}
*/
.drag {
	width:40%;
	color: blue;
	font-weight: bold;
}
.activated {
	border:3px solid #339900;
	background-color: yellow;
}
.dragdrop{
	font-size: 3.5em;
	margin-left: 10%;
	margin-right: 10%;
	margin-top: 1%;
	text-align: justify;
}
#tabla{
	margin-left: 32%;
}
#contenedorDragDrop{
	position:relative;
}
.error {
	border: 1px solid red;
}
.missatges{
	color: red;
	font-weight: bold;
	margin-left: -50%;
	margin-top:3%;
	font-size: 2em;
	font-family: HelveticaNeueRoman;
}
.estiloBoton{
	margin-right: 10%;
	margin-bottom: 3%;
}
.subtopics{
	font-size: 2.5em;
	border: 2px solid;
	border-color: black;
	margin-left: 5%;
	margin-right: 5%;
	padding-left: 1%;
	padding-top: 1%;
	padding-right: 1%;
	padding-bottom: 1%;
	text-align: left;
	margin-bottom: 3px;
}

#objArrastrable{
	border: #000 solid 2px;
	position: absolute;
	width:100px;
	height: 100px;
	top: 450px;
	left: 100px;
}

@font-face {
	font-family: HelveticaNeue;
	letter-spacing:0.05em;
	src: url("<? echo ver_url("fonts/HelveticaNeue.woff","src"); ?>");
}

html, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-family: HelveticaNeue, Helvetica, Arial, sans-serif;
	vertical-align: baseline;
}

.estiloFotos{
}
.estiloFotoDiv{
  display: inline-block;
  width: 160px;
  margin: 10px;
  height: 200px;
	box-shadow: 0.8em 0.8em 1em #888;
	border: 0.8em solid #ccc;
	border-radius: 1em;
  cursor: pointer;
}
.estilo_palabra{
	padding-top: 0.3em;
	padding-top: 0,2em;
	font-size: 32px;
	border-color: #2DCEE4;
	background-color: #2DCEE4;
	color: #fff;
	font-family: HelveticaNeueRoman;
  width: 390px;
  margin: auto;
  margin-top: 50px;
}
#reproduccionWord{
    transform: scale(2);
	margin-bottom: 1em;
	margin-top: 3em;
}

.LongPalabras{
	margin-left: 59%;
	font-size: 2em;
	font-family: HelveticaNeueRoman;
	color: red;
}

.estilo_frase_usuario{
    font-size: 18px;
    font-family: HelveticaNeue, Helvetica, Arial, sans-serif;
}
.estilo_frase_usuario_correcta{
	font-size: 18px;
    font-family: HelveticaNeue, Helvetica, Arial, sans-serif;
	color: green;
	margin-bottom: 20%;
}
#p_01171_mostrar_ventana_option{
    position: fixed;
    height: 170%;
    width: 90%;
    background-color: rgba(0,0,0,0.7);
    color: #fff;
    padding: 15% 5% 5% 5%;
    z-index: 9999;
}

#style_letra_ventana_grande{
	font-size:5em;
	font-family:HelveticaNeueRoman;
	text-align: center;
    margin-top: 35%;
}
.style_divs_respuestas{
	float: left;
	width: 100%;
	min-height: 3.5em;
	position: relative;
  font-size: 16px;
}

.p_01172_contenedor_preguntas_write
{
	width:100%;
    font-size: 50px;
}

.p_01172_contenedor_preguntas_texto
{
    max-height: 60%;
    overflow: auto;
    padding: 50px 50px 100px 50px;
    text-align: justify;
    background: #f5f5Df;
}
.p_01172_fade_out
{
    background: rgba(0,0,0,0);
    background: -webkit-linear-gradient(rgba(0,0,0,0), #fff);
    background: -o-linear-gradient(rgba(0,0,0,0), #fff);
    background: -moz-linear-gradient(rgba(0,0,0,0), #fff);
    background: linear-gradient(rgba(0,0,0,0), #fff);
    width: 100%;
    height: 100px;
    z-index: 60;
    position: relative;
    bottom: 0;
    margin-top: -99px;
}
.p_01173_preguntas_orientacion{
	font-family:helveticaneueroman;
	font-size:1.2em;
    padding: 0.5em;
}

#p_00990_over_all_cerrar_filtro{
	position: fixed;
    height: 4em;
    width: 4em;
    right: 0.5em;
    top: 0.5em;
    background-image: url(<? echo ver_url("images/close.png","src"); ?>);
    background-repeat: no-repeat;
    background-size: 100%;
    z-index: 9002;
}
#p_01175_boton_cerrar_no_hay_mas_preguntas{
	position: fixed;
    height: 25px;
    width: 25px;
    right: 0.5em;
    top: 100px;
    background-image: url(<? echo ver_url("images/close.png","src"); ?>);
    background-repeat: no-repeat;
    background-size: 100%;
    z-index: 9002;
}

#p_01175_mensaje_no_hay_preguntas_disponibles{
	position: fixed;
    height: 170%;
    width: 90%;
    background-color: rgba(0,0,0,0.7);
    color: #fff;
    padding: 15% 5% 5% 5%;
    z-index: 9999;
}
</style>
