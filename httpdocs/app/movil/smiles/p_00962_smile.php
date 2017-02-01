<!--
-Pag. ID: p_00962
-->
<div id="p_01175_mensaje_no_hay_preguntas_disponibles" style="display:none;background-color: rgba(0, 0, 0, 0.8);">
<div id="p_01175_boton_cerrar_no_hay_mas_preguntas" onclick="document.getElementById('p_01175_mensaje_no_hay_preguntas_disponibles').style.display='none';p_01171_boton_stop();"></div>
<div id="p_01175_texto_a_mostrar" style="font-size: 7em;margin-top: 2em;"></div>
</div>
<div id="p_01171_mostrar_ventana_option" style="display:none; background-color: rgba(0, 0, 0, 0.8);">
<div id="p_00990_over_all_cerrar_filtro" onclick="document.getElementById('p_01171_mostrar_ventana_option').style.display='none';document.getElementById('contenedor_menu').style.display='';"></div>
	<form action="formulario_option_type_ask" id="style_letra_ventana_grande" style="text-align: justify;" >
		  <input onclick="p_01174_comprueba_chechekd_marcado(this.id);" type="checkbox" id="option_all" name="type_ask" checked value="all" style="width: 8em;height: 4em;">All<br>
		  <input onclick="p_01174_comprueba_chechekd_marcado(this.id);" type="checkbox" id="option_vocabulary" name="type_ask" checked value="vocabulary" style="width: 8em;height: 4em;"><? echo $TEXTOS[96][2];?><br>
		  <input onclick="p_01174_comprueba_chechekd_marcado(this.id);" type="checkbox" id="option_structure" name="type_ask" checked value="structure" style="width: 8em;height: 4em;">Structure<br>
		  <input onclick="p_01174_comprueba_chechekd_marcado(this.id);" type="checkbox" id="option_trinity" name="type_ask" checked value="trinity" style="width: 8em;height: 4em;">Trinity<br>
	</form>
</div>

<div id="smile" style="margin-top:14%;">
	<!-----------------------------------CARRERA------------------------------------------------------>
	<div
    	id="p_00962_carrera"
        style="display:inline-block;"
        onclick="
            document.getElementById('p_00962_carrera_add_amigo').style.display='';
            p_01447_oponentes_listar();
        "
    >
        <div id="p_00962_carrera_km_fin" style="position: absolute;font-size: 2em;text-align: center;right: 1em;top: 108%;"></div>

		<img src="<? echo ver_url("images/boton_mas_amigo.png","src");?>"
        	style="
                position: absolute;
                width: 5em;
                left: 5px;
                top: 3em;
                color: black;
                z-index: 100;
        	"
        >
        <iframe id="p_00962_carrera_add_amigo_iframe" name="p_00962_carrera_add_amigo_iframe" style="display:none;"></iframe>
        <script>

		document.body.insertAdjacentHTML("afterBegin",''+
			'<div id="p_00962_carrera_add_amigo" style="display:none;">'+
			'<div id="p_00990_over_all_cerrar_mail" onclick="document.getElementById(\'p_00962_carrera_add_amigo\').style.display=\'none\';" style="font-size: 0.25em;"></div>'+
			'	<div'+
			'		style="'+
			'			width: 85%;'+
			'			margin: -1em auto 0.5em auto;'+
			'			font-family:helveticaneueroman;'+
			'			vertical-align: middle;'+
			'			font-size: 0.7em;'+
			'		"'+
			'	>'+TEXTOS[152].text+'</div>'+
			'	<form'+
			'		id="p_00962_carrera_add_amigo_form"'+
			'		method="post"'+
			'		action="http://s.oxbridge.es/ox/estructura_web/codigo/alumno_v2/smiles_03_invitar_competidor_03_asp_50_otros_01_email_alumno.asp"'+
			'		target="p_00962_carrera_add_amigo_iframe"'+
			'		onsubmit="'+
			'				document.getElementById(\'p_00962_carrera_add_amigo_submit\').style.display=\'none\';'+
			'				document.getElementById(\'p_00962_carrera_add_amigo_cargando\').style.display=\'\';'+
			'		"'+
			'	>'+
			'		<input'+
			'			type="email"'+
			'			pattern="^[A-Za-z0-9](?:\.?[A-Za-z0-9\!\#\$\%\&\'\*\+\-\/\=\?\@\^\_\`\{\|\}\~]){0,63}\@[A-Za-z0-9](?:\.?[A-Za-z0-9\!\#\$\%\&\'\*\+\-\/\=\?\@\^\_\`\{\|\}\~]){0,63}\.[A-Za-z0-9]{2,6}" '+
			'			id="p_00962_carrera_add_amigo_email" '+
			'			name="p_0001438_post_email" '+
			'			placeholder="E-M@il" '+
			'			required '+
			'			style="width:87%; vertical-align:middle;"'+
			'		>'+
			'		<input name="p_0001438_post_alumno_id" type="hidden" value="'+alumno_id+'">'+
			'		<input name="p_0001438_post_usuario_id" type="hidden" value="'+alumno_id_nuevo+'">'+
			'		<input id="p_00962_carrera_add_amigo_finalizador_js" name="p_0001438_post_finalizador_js" type="hidden" value="">'+
			'		<img'+
			'			id="p_00962_carrera_add_amigo_submit"'+
			'			onclick="'+
			'				document.getElementById(\'p_00962_carrera_add_amigo_submit\').style.display=\'none\';'+
			'				document.getElementById(\'p_00962_carrera_add_amigo_cargando\').style.display=\'\';'+
			'				document.getElementById(\'p_00962_carrera_add_amigo_form\').submit();'+
			'			"'+
			'			style="width:10%; vertical-align:middle;"'+
			'			src="http://oxbridge.es/app/images/invitar_mas.png"'+
			'		>'+
			'		<img'+
			'			id="p_00962_carrera_add_amigo_cargando"'+
			'			class="img_cargando"'+
			'			src="http://oxbridge.es/app/images/loading.png"'+
			'			style="height:2em;display:none"'+
			'		>'+
			'	</form>'+
			'	<div id="p_00962_lista_vs"></div>'+
			'</div>'+
		'');
		document.getElementById("p_00962_carrera_add_amigo_email").addEventListener("change",function()
		{
			p_00962_personal_datos_info_nombre= escape(personal_datos_info.nombre+' '+personal_datos_info.apellido_1+' '+personal_datos_info.apellido_2);
			document.getElementById("p_00962_carrera_add_amigo_finalizador_js").value=''+
			'	window.parent.ocultar_mostrar(\'p_00962_carrera_add_amigo\');\n'+
			'	window.parent.document.getElementById(\'p_00962_carrera_add_amigo_submit\').style.display=\'\';\n'+
			'	window.parent.document.getElementById(\'p_00962_carrera_add_amigo_cargando\').style.display=\'none\';\n'+
			'	window.parent.p_00989_animacion_envio_mail();\n'+
			'	window.parent.document.getElementById(\'p_00962_carrera_add_amigo_email\').value=\'\';\n'+
			'	if(p_0001312_js_enlace!=\'\'){\n\t'+
			'		window.location.href=\'<? echo ver_url("p_01399_email_invitar_amigo.php","src"); ?>'+
					'?enlace=\'+p_0001312_js_enlace+\''+
					'&to='+document.getElementById('p_00962_carrera_add_amigo_email').value+
					'&from='+personal_datos_info.email+
					//'&invitador='+personal_datos_info.nombre+' '+personal_datos_info.apellido_1+' '+personal_datos_info.apellido_2+
					'&invitador='+p_00962_personal_datos_info_nombre+
					'\';\n'+
			'}\n';
		});

        </script>

        <img class="p_00962_bandera_start" src="<? echo ver_url("images/bandera_start.png","src"); ?>"/>
        <img class="p_00962_bandera_end" src="<? echo ver_url("images/bandera_end.png","src"); ?>"/>
        <div id="p_00962_carrera_pista">
            <div id="p_00962_yo" style="left:-12%">
                <div id="p_00962_yo_posicion"></div>
                    <img id="p_00962_yo_img" src="<? echo ver_url("images/yo.png","src"); ?>"/><br>
                    <img class="p_00962_yo_puntero" src="<? echo ver_url("images/yo_puntero.png","src"); ?>"/>
                    <div id="p_00962_yo_kilometros">
                    <div id="p_00962_yo_kilometros_actual"></div>
                    <?
                    	/*div id="p_00962_tras_kilometros" class="p_00962_kilometros_cercanos">9999</div>
                    	<div id="p_00962_delante_kilometros" class="p_00962_kilometros_cercanos">9999</div> */
					?>
                </div>
            </div>
        </div>
	</div>

	<div class="p_00962_separador">
    	<? if(VIP($alumno_id)){ ?>
            <img
            	id="p_00962_preguntas_insidencia_boton"
                src="<? echo ver_url("images/error.png","src"); ?>"
                onclick="
                	document.getElementById('p_00995_preguntas_insidencias_div').style.display='';
                    document.getElementById('p_00995_preguntas_insidencias_formulario_esta').value=preguntaCargada[0].id_preguinta;
                    document.getElementById('p_00995_preguntas_insidencias_formulario_anteriro').value=preguntas_enviadas[preguntas_enviadas.length-1].id_preguinta;
                "
				style="display:none;"
            >
        <? } ?>
        <img
            id="p_00962_grafico_progreso_detalle_close"
            src="<? echo ver_url("images/close.png","src"); ?>"
            onclick="
                p_01000_animacion_porcentages_detalles(0);
                document.getElementById('p_00962_grafico_progreso_detalle_close').style.display='none';
            "
            style="display:none;"
        >

        <div id="p_00962_grafico_progreso" onclick="p_01000_animacion_porcentages_detalles(1);">
			<!-- 'i' fuera <img id="p_00962_grafico_progreso_i" style="height: 3em;position: absolute;bottom: 0;right: 0;" src="http://www.oxbridge.es/app/images/boton_info.png">-->
            <div id="p_00962_grafico_progreso_centro"></div>
            <div id="p_00962_grafico_progreso_tnt" onclick="p_01171_mostrar_detalle_progreso('tnt');"></div>
            <div id="p_00962_grafico_progreso_estructura" onclick="p_01171_mostrar_detalle_progreso('estructura');"></div>
            <div id="p_00962_grafico_progreso_vocabulario" onclick="p_01171_mostrar_detalle_progreso('vocabulario');"></div>
          </div>
          <div id="p_00962_grafico_progreso_detalle" style="display:none;">
             <div id="p_00962_grafico_progreso_detalle_trinity" class="p_01172_grafico_progreso_detalle_seccion" style="display:none;font-size: 3em;">
             	<img id="p_00962_detalle_trinity_logo" style="height:2em;" src="http://www.trinitycollege.com/images/logo_trinity_college_london.png">
				<div id="p_00962_detalle_trinity_solisitud_texto" style="margin:1em 0;"><? echo $TEXTOS[138][2]; ?></div>
				<button id="solisitud_trinity_boton" class="boton_normal" onclick="p_01171_enviar_solisitud_trinity();"><? echo $TEXTOS[160][2]; ?></button>
				<div id="p_00962_detalle_trinity_solisitud_precio" style="font-size: 0.7em;font-family: helveticaneueroman;"><? echo $TEXTOS[165][2]; ?></div>
				<br><span id="solisitud_trinity_proseso" style="display:none;font-family: helveticaneueroman;"><? echo $TEXTOS[161][2]; ?></span>
				<div id="p_00962_detalle_trinity_no_disponible" style="display:none;">
					<? echo  $TEXTOS[166][2]; ?>
				</div>
             </div>
             <div id="p_00962_grafico_progreso_detalle_vocabulario" class="p_01172_grafico_progreso_detalle_seccion" style="display:none;"></div>
             <div id="p_00962_grafico_progreso_detalle_estructura" class="p_01172_grafico_progreso_detalle_seccion" style="display:none;"></div>
          </div>

		  <div id="p_00962_grafico_leyenda" onclick="p_01000_animacion_porcentages_detalles(1);"></div>

          <br>
          <div id="p_00962_start" class="p_00962_start" onclick="p_01171_boton_start();"><? echo $TEXTOS[59][2];?>
             <img src="<? echo ver_url("images/play.png","src"); ?>" style="height:1em;" />
          </div>
          <div id="p_00962_preguntas_contenedor" style="display:none;">
            <? include ver_url('movil/smiles/p_01175_preguntas.php',"");?>
          </div>
	</div>
</div>
