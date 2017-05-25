<div
    id="p_00962_carrera"
      style="display:inline-block;"
      onclick="
          document.getElementById('p_00962_carrera_add_amigo').style.display='';
          p_01447_oponentes_listar();
      "
  >
      <div id="p_00962_carrera_km_fin" style="position: absolute;font-size: 10px;text-align: center;right: 1em;top: 108%;"></div>

  <img src="<? echo ver_url("images/boton_mas_amigo.png","src");?>"
        style="
              position: absolute;
              width: 50px;
              left: 20px;
              top: 3em;
              color: black;
              z-index: 100;
              cursor: pointer;
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
    '		action="https://s.oxbridge.es/ox/estructura_web/codigo/alumno_v2/smiles_03_invitar_competidor_03_asp_50_otros_01_email_alumno.asp"'+
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
    '		<input name="p_0001438_post_dominio" type="hidden" value="app.oxbridge.es">'+
    '		<input id="p_00962_carrera_add_amigo_finalizador_js" name="p_0001438_post_finalizador_js" type="hidden" value="">'+
    '		<img'+
    '			id="p_00962_carrera_add_amigo_submit"'+
    '			onclick="'+
    '				document.getElementById(\'p_00962_carrera_add_amigo_submit\').style.display=\'none\';'+
    '				document.getElementById(\'p_00962_carrera_add_amigo_cargando\').style.display=\'\';'+
    '				document.getElementById(\'p_00962_carrera_add_amigo_form\').submit();'+
    '			"'+
    '			style="width:10%; vertical-align:middle;"'+
    '			src="https://app.oxbridge.es/app/images/invitar_mas.png"'+
    '		>'+
    '		<img'+
    '			id="p_00962_carrera_add_amigo_cargando"'+
    '			class="img_cargando"'+
    '			src="https://app.oxbridge.es/app/images/loading.png"'+
    '			style="height:2em;display:none"'+
    '		>'+
    '	</form>'+
    '	<div id="p_00962_lista_vs"></div>'+
    '</div>'+
  '');

  document.getElementById("p_00962_carrera_add_amigo_email").addEventListener("change",function()
  {
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
        '&invitador='+personal_datos_info.nombre+' '+personal_datos_info.apellido_1+' '+personal_datos_info.apellido_2+
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
              <!--<img class="p_00962_yo_puntero" src="<? //echo ver_url("images/yo_puntero.png","src"); ?>"/>-->
              <div id="p_00962_yo_kilometros">
                <div id="p_00962_yo_kilometros_actual">
                </div>
                  <?
                    /*div id="p_00962_tras_kilometros" class="p_00962_kilometros_cercanos">9999</div>
                    <div id="p_00962_delante_kilometros" class="p_00962_kilometros_cercanos">9999</div> */
                  ?>
              </div>
          </div>
      </div>
</div>
