<style>
#p_00959_espera_clase{
	display: none;
}
#p_00959_sin_clase div:first-of-type{
	font-size: 18px;
    font-weight: bold;
    font-family: HelveticaNeueRoman;
    color: #444;
    position: absolute;
    top: 438px;
    margin: auto;
    left: 0;
    right: 0;
}

#p_00959_sin_clase div:last-of-type{
	position: absolute;
	width: 100%;
	top: 140px;
}


#p_00959_espera_clase{

}
#p_00959_falta_inicio{
	color: hsla(306, 94%, 60%, 1);
	font-size: 36px;
}
#p_00959_espera_clase div:first-of-type{
	font-size: 18px;
    font-weight: bold;
    font-family: HelveticaNeueRoman;
    color: #444;
    position: absolute;
    top: 438px;
    margin: auto;
    left: 0;
    right: 0;
		text-align: center;
}
#p_00959_espera_clase div:last-of-type{
	position: absolute;
	width: 100%;
	top: 140px;
	text-align: center;
}
#p_00959_espera_clase img{
	height: 266px;
}
#p_00959_div_clases_a_distancia{
	padding: 0em 1em 1em 1em;
}
#p_00959_img_nube{
	height: 266px;
	margin-left: -43px;
	cursor: pointer;
}
@media screen and (max-width: 767px){
	#p_00959_div_clases_a_distancia{
		padding: 0;
		padding-bottom: 16vh;
	}
	#p_00959_img_nube{
		height: initial;
		margin-left: 0;
		width: 200px;
		max-width: 353px;
	}
}
</style>

<div id="claseweb">
	<div id="p_00959_div_clases_a_distancia" align="center" style="font-size: 3em;font-family: HelveticaNeueRoman;color: #888; margin-top: 50px">
</div>
	<div id="p_00959_espera_clase">
		<div>
				<p id="p_00959_falta_inicio">00:00:00</p>
				<p>Tiempo restante para que comience la clase</p>
		 </div>
		 <div>
			 <img style="height: 266px;" src="<? echo ver_url("images/cronometro.png","src"); ?>">
		 </div>
	</div>
</div>


<script>
function p_00959_mostrar_enlace_clase(p_00959_hora_clase){
	console.info("hora clase: "+p_00959_hora_clase.getHours()+":"+p_00959_hora_clase.getMinutes());
}
</script>


<script type="text/javascript">

function p_00959_js_f_01_pintar_botones_clases_a_distancia()
	{
		var p_00959_js_f_01_contador = 0;
		var p_00959_js_f_01_bucle_01 = 0;
		var p_00959_js_f_01_html = "";
		var p_00959_js_f_01_url = "";

		var hoy = new Date();
		var dd = hoy.getDate();
		var mm = hoy.getMonth()+1; //hoy es 0!
		var yyyy = hoy.getFullYear();
		if(dd<10) {
			dd='0'+dd
		}
		if(mm<10) {
			mm='0'+mm
		}
		hoy = dd+'/'+mm+'/'+yyyy;

		for( p_00959_js_f_01_bucle_01 in dia_lectivo )
		{
			if( ( dia_lectivo[p_00959_js_f_01_bucle_01].tipo_clase == "telefono" || dia_lectivo[p_00959_js_f_01_bucle_01].tipo_clase == "skype" ) && dia_lectivo[p_00959_js_f_01_bucle_01].fecha_europa == hoy )
			{
				p_00959_js_f_01_html+= "<div style=\"display: inline-block; cursor: pointer; margin-left: 20px\" align=\"center\" onclick='javascript: p_00959_js_f_02_abrir_clase_por_telefono( "+p_00959_js_f_01_bucle_01+" );'>" ;
				p_00959_js_f_01_html+= 	"<div>" ;
				p_00959_js_f_01_html+= 		"<img src=\"https://app.oxbridge.es/app/images/cw_telefono.png\" width=\"150px\">" ;
				p_00959_js_f_01_html+= 	"</div>" ;
				p_00959_js_f_01_html+= 	"<div>" ;
				p_00959_js_f_01_html+= 		"<span style=\"font-size: 14px; color: #01B0F2\">" ;
				p_00959_js_f_01_html+= 			dia_lectivo[p_00959_js_f_01_bucle_01].horaInicio ;
				p_00959_js_f_01_html+= 		"</span>" ;
				p_00959_js_f_01_html+= 	"</div>" ;
				p_00959_js_f_01_html+= "</div>" ;
				p_00959_js_f_01_contador++ ;
			};
			if( dia_lectivo[p_00959_js_f_01_bucle_01].tipo_clase == "web" && dia_lectivo[p_00959_js_f_01_bucle_01].fecha_europa == hoy )
			{
				p_00959_js_f_01_html+= "<div style=\"display: inline-block; cursor: pointer; margin-left: 20px\" align=\"center\" onclick='javascript: p_00959_js_f_03_abrir_clase_por_videoconferencia( "+p_00959_js_f_01_bucle_01+" );'>" ;
				p_00959_js_f_01_html+= 	"<div>" ;
				p_00959_js_f_01_html+= 		"<img src=\"https://app.oxbridge.es/app/images/cw.png\" width=\"150px\">" ;
				p_00959_js_f_01_html+= 	"</div>" ;
				p_00959_js_f_01_html+= 	"<div>" ;
				p_00959_js_f_01_html+= 		"<span style=\"font-size: 14px; color: #01B0F2\">" ;
				p_00959_js_f_01_html+= 			dia_lectivo[p_00959_js_f_01_bucle_01].horaInicio ;
				p_00959_js_f_01_html+= 		"</span>" ;
				p_00959_js_f_01_html+= 	"</div>" ;
				p_00959_js_f_01_html+= "</div>" ;
				p_00959_js_f_01_contador++ ;
			};
		};

		if( parseInt(p_00959_js_f_01_contador) == parseInt(0) )
		{
			p_00959_js_f_01_html+= "	<div align=\"center\">";
			p_00959_js_f_01_html+= "		<img id='p_00959_img_nube' src=\"<? echo ver_url("images/nube_cw.png","src"); ?>\" onclick='javascript: p_00959_js_f_04_abrir_ejemplo();'>";
			p_00959_js_f_01_html+= "	</div>";
			p_00959_js_f_01_html+= "	<div align=\"center\">";
			p_00959_js_f_01_html+= "		<span style=\"font-size: 18px\">"+TEXTOS[192].text+"</span>";
			p_00959_js_f_01_html+= "	</div>";
		} ;

		document.getElementById("p_00959_div_clases_a_distancia").insertAdjacentHTML( "afterBegin" ,p_00959_js_f_01_html );
	}

	function p_00959_js_f_02_abrir_clase_por_telefono( p_00959_js_f_02_dia_lectivo_id )
	{

		var p_00959_js_f_02_url = "https://s.oxbridge.es/ox/estructura_web/codigo/capsulas/clase_sin_videconferencia/videoconf_5_sin_video/pag_alumno__p_0001841_php.php?p_0000100_dia_lectivo_id="+p_00959_js_f_02_dia_lectivo_id+"&p_0000100_alumno_id="+alumno_id+"&get__parametro_videoconferencia_id__p_0000100=produccion";
		//window.open( p_00959_js_f_02_url, "_blank" );
		document.getElementById("p_00955_div_iframe_videoconf").style.display="block";
		document.getElementById("p_00955_iframe_videoconf").src=p_00959_js_f_02_url;


	}

	function p_00959_js_f_03_abrir_clase_por_videoconferencia( p_00959_js_f_03_dia_lectivo_id )
	{

		var p_00959_js_f_02_url = "https://s.oxbridge.es/ox/estructura_web/codigo/capsulas/clase_sin_videconferencia/videoconf_5_sin_video/pag_alumno__p_0001841_php.php?p_0000100_dia_lectivo_id="+p_00959_js_f_03_dia_lectivo_id+"&p_0000100_alumno_id="+alumno_id+"&get__parametro_videoconferencia_id__p_0000100=produccion";
		//window.open( p_00959_js_f_02_url, "_blank" );
		document.getElementById("p_00955_div_iframe_videoconf").style.display="block";
		document.getElementById("p_00955_iframe_videoconf").src=p_00959_js_f_02_url;


	}

	function p_00959_js_f_04_abrir_ejemplo()
	{

		var p_00959_js_f_02_url = "https://s.oxbridge.es/ox/estructura_web/codigo/capsulas/clase_sin_videconferencia/videoconf_5_sin_video/pag_alumno__p_0001841_php.php";
		//window.open( p_00959_js_f_02_url, "_blank" );
		document.getElementById("p_00955_div_iframe_videoconf").style.display="block";
		document.getElementById("p_00955_iframe_videoconf").src=p_00959_js_f_02_url;

	}

	p_00959_js_f_01_pintar_botones_clases_a_distancia();

</script>
