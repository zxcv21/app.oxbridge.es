<!--
-Pag. ID:p_01175
-->
<div id="p_01175_cargando_imagen_espera_pregunta" style="margin-top: 40%;"></div>
<div id="p_01175_formulario_pregunta_vista" style='display:none;'></div>
<div id="p_01175_formulario_pregunta_contestada" style='display:none;'></div>

<!-- PREGUNTA TRUE-FALSE -->
<div id="p_01175_smile_estructura_tf" style='display:none;'>
	<div id="tf" class="preguntas" style="display:none;"><br>
		<div id="Titulo" class="text"></div>
		<div id="Texto" class="text2"></div>
		<!-- <form name=formPregun align='center' method='post' name='cookie' action='#'> -->
		<!-- </form> -->
		<div id="p_01175_respuesta_true_false" class="resp">
			<table>
			</table><br><br>
		</div>

			<!-- <div id="myDialogPasarPregTF" title="Are you sure that you doesn't answer"></div> -->
			<!-- <div id="err_radio" class="missatges"></div> -->
			<div id="botonPasarTF" align="right" class="estiloBoton"><input id="boton_pasar_tf" style="margin-right:-20px;height: 50px;" type="image" src='<? echo ver_url("movil/smiles/images/play_grey_70.png","src"); ?>' title="continue without answer" onclick="p_01174_skip_pregunta(this.id)"></div>
			<div id="botonTF" align="right" class="estiloBoton" style='display:none;'><input id="compruebaTF" style="margin-right:-20px;height: 50px" type="image" src="<? echo ver_url("movil/smiles/images/play_green_70.png","src"); ?>" title="go next question" onclick="p_01174_comprueba_pregunta_correcta_tf(this.id)"></div>
			<div id="boton_pasar_respuesta_contestada_TF" align="right" class="estiloBoton" style='display:none;'><input id="nextquestionTF" type="image" src="<? echo ver_url("movil/smiles/images/next_green_70.png","src"); ?>"  title="go next question" style="margin-right:-20px;height: 50px;" onclick="p_01174_mostrar_siguiente_pregunta(this.id)"></div>
	</div>
</div>
 <!--style="right: 10%;bottom: 4em;"-->

<!-- PREGUNTA FILL-GAPS -->
<div id="p_01175_smile_estructura_drag" style='display:none;'>
	<div id="dragdrop" class="preguntas" style="display:none;"><br>
		<div id="Titulo2" class="text" style='margin-bottom: 15px;'></div>
		<div id="Titulo_pregunta" class="text2"></div>
		<div id="Titulo__inicio_respuesta" class="text" style='margin-bottom: 15px;'></div>
		<!-- <div id="contenedorDragDrop" class="text2Especial" onclick="p_01174_dragdrop(this.id)"></div> -->
		<div id="palabras_arrastables"></div>
		<div id="p_01175_respuesta_drag_drop" class="dragdrop"></div>
		<!-- <div id="myDialogPasarPregFillGaps" title="Are you sure that you doesn't answer"></div> -->
		<div id="botonPasarFILGAPS" align="right" class="estiloBoton"><input id="boton_pasar_FILGAPS" type="image" src="<? echo ver_url("movil/smiles/images/play_grey_70.png","src"); ?>" title="continue without answer" style="margin-right:-20px;height: 50px;" onclick="p_01174_skip_pregunta(this.id)"></div>
		<div id="botonFG" align="right" class="estiloBoton" style='display:none;'><input id="boton_verde_comprobar_fill_gaps" type="image" src="<? echo ver_url("movil/smiles/images/play_green_70.png","src"); ?>" style="height: 50px;margin-right:-20px;" title="go next question" onclick="comprobar(this.id)"></div>
		<div id="botonFG_pasar_respuesta_contestada" align="right" class="estiloBoton" style='display:none;'><input id="boton_pasar_respuesta_contestada_fill_gaps" type="image" src="<? echo ver_url("movil/smiles/images/next_green_70.png","src"); ?>"  style="margin-right:-20px;height: 50px;" title="go next question" onclick="p_01174_mostrar_siguiente_pregunta(this.id)"></div>
	</div>
</div>

<!-- PREGUNTA MULTIOPTION -->
<div id="p_01175_smile_estructura_m_option" style='display:none;'>
	<div id="mo" class="preguntas" style="display:none;"><br>
		<div id="Titulo3" class="text4"></div>
		<div id="Texto3" class="text2"></div>
		<!-- <form name=formPregun align='center' method='post' name='cookie' action='#'> -->
		<div id="p_01175_respuesta_m_option" class="resp">
			<table>
		<!-- </form> -->
			</table><br><br>
		</div>
			<!-- <div id="myDialogPasarPregMOPTION" title="Are you sure that you donesn't answer"></div> -->
			<!-- <div id="err_checkbox" class="missatges"></div> -->
			<div id="botonPasarMO" align="right" class="estiloBoton" ><input id="boton_pasar_MO" type="image" src="<? echo ver_url("movil/smiles/images/play_grey_70.png","src"); ?>" style="margin-right:-20px;height: 50px;" title="continue without answer" onclick="p_01174_skip_pregunta(this.id)"></div>
		<div id="botonMO" align="right" class="estiloBoton" style='display:none;'><input id="compruebaM0" type="image" src="<? echo ver_url("movil/smiles/images/play_green_70.png","src"); ?>" style="margin-right:-20px;height: 50px;"title="go next question" onclick="obtenerValorMultirespuesta(this.id)"></div>
		<div id="boton_pasar_respuesta_contestada_M0" align="right" class="estiloBoton" style='display:none;'><input id="nextquestionM0" type="image" src="<? echo ver_url("movil/smiles/images/next_green_70.png","src"); ?>"  title="go next question" style="margin-right:-20px;height: 50px;" onclick="p_01174_mostrar_siguiente_pregunta(this.id)"></div>
	</div>
</div>

<!-- PREGUNTA WRITING -->
<div id="p_01175_smile_estructura_escribir" style="display:none;">
	<div id="writing" class="preguntas">
	<div id="Titulo4" class="text"></div>
	<div id="LongPalabrasWriting" class="LongPalabras"></div>
	<div id="areaTexto"><textarea id="area" rows="20%" cols="110%" style='resize:none;' onkeypress="javascript: contarPalabras(this.id);"></textarea></div>
	<!-- <div id="myDialogGuardar" title="Are you sure that you want to save"></div> -->
	<!-- <div id="err_faltaTexto" class="missatges"></div> -->
	<!-- <div id="myDialogPasarPregWRITING" title="Are you sure that you donesn't answer"></div> -->
	<div id="botonguardar" align="right" class="estiloBoton" style="display: inline;padding-left: 80px;"><input id="title_botonguardar" type="image" src="<? echo ver_url("movil/imagenes/descarga.jpg","src"); ?>" title="save without send" onclick="save(this.id)" style="margin-left: 5%; float: left;"></div>
	<div id="botonPasarWRTING" align="right" class="estiloBoton" style="display: inline;"><input id="boton_pasar_WRTING" type="image" src="<? echo ver_url("movil/smiles/images/play_grey_70.png","src"); ?>" title="continue without answer" onclick="p_01174_skip_pregunta(this.id)" style="margin-left: 45%"></div>
	<div id="botonWTING" align="right" class="estiloBoton" style="display:none;"><input id="title_botonWTING" type="image" src="<? echo ver_url("movil/smiles/images/play_green_70.png","src"); ?>" title="send to evaluate" onclick="guardarPalabrasEnviar(this.id)" style="padding-bottom: 15px;"></div>
	</div>
</div>

<!-- PREGUNTA READING INTO WRITING -->
<div id="p_01175_smile_estructura_option_escribir" style='display:none;'>
	<div id="riw" class="preguntas">
	<div id="Titulo6" class="text"></div>
	<div id="subtopicArea1" class="subtopics"></div><br>
	<div id="LongPalabrasRIW" class="LongPalabras"></div>
	<div id="areaTextoRIW"><textarea id="areaRIW" rows="16%" cols="110%" style='resize:none;' onfocus="p_01174_cambio_style_text_area();" onkeypress="javascript: contarPalabrasRIW(this.id); "></textarea></div><br>
	<div id="botonguardarRIW" align="right" class="estiloBoton" style="display: inline;padding-left: 80px;"><input id="title_botonguardarRIW" type="image" src="<? echo ver_url("movil/imagenes/descarga.jpg","src"); ?>"  title="this boton allow save without send" onclick="saveWriting(this.id)" style="margin-left: 5%; float: left;"></div>
	<div id="botonPasarRIW" align="right" class="estiloBoton" style="display: inline;"><input id="boton_pasar_RIW" type="image" src="<? echo ver_url("movil/smiles/images/play_grey_70.png","src"); ?>"  title="continue without answer" onclick="p_01174_skip_pregunta(this.id)" style="margin-left: 45%;"></div>
	<div id="botonRIW" align="right" class="estiloBoton" style="display:none;"><input id="title_botonRIW" type="image" src="<? echo ver_url("movil/smiles/images/play_green_70.png","src"); ?>" title="send to evaluate" onclick="guardarPalabrasEnviarRIW(this.id)" style="padding-bottom: 15px;"></div>
	</div>
</div>

<div id="p_01175_smile_estructura_fotos" style='display:none;'>
	<div id="fotos" class="preguntas" style="display:none;">
		<div id="word" class="estilo_palabra"></div>
		<div id="imagenes"></div>
	</div>
</div>

<div id="p_01175_smile_estructura_audio" style='display:none;'>
	<div id="audio" class="preguntas" style="display:none;">
		<input id="sound_word" type='image' width='20%' onclick="func(this.id)" style="-webkit-transition:1.2s; -webkit-transform: scale(3) translate(0,65%) rotate(360deg); -moz-transition: 1.2s; -moz-transform: scale(3) translate(0,65%) rotate(360deg); transition: 1.2s; transform: scale(3) translate(0,65%) rotate(360deg);" src='<? echo ver_url("images/audio2.png","src"); ?>'/>
		<!-- <iframe id="reproduccionWord" src="" style='display:none;'></iframe> -->
		<audio onended="cambiarIcono();" id="reproduccionWord" style="display:none;">
		</audio>
			<div id="sound_imagenes" style="display:none; margin-bottom: -3.4em;"></div>
	</div>
</div>

<!-- PREGUNTA ORDENAR-FRASE -->
<div id="p_01175_smile_estructura_ordenar_frase" style='display:none;'>
	<div id="ordenar_frase" class="preguntas" style="display:none;"><br>
		<div id="titulo_ordenar_frase" class="text"></div>
		<div id="texto_ordenar_frase" class="text2" ondrop='p_01174_drop(event)' ondragover='p_01174_allowDrop(event);'></div>
		<div class="p_01175_zona_crear_frase">
			<div id="frase_formada_usuario" class="estilo_frase_usuario"></div>
			<div id="frase_correcta" class="estilo_frase_usuario_correcta"></div>
		</div>
		<div id="boton_deshacer" align="right" class="estiloBoton"><input id="boton_deshacer_of" type="image" src="<? echo ver_url("images/deshacer.png","src"); ?>" title="continue without answer" style="display:none;position: absolute;right: 77px;bottom: 10px;height: 50px;" onclick="p_01174_borrar_palabra_boton_deshacer(this.id)"></div>
		<div id="botonPasarOF" align="right" class="estiloBoton"><input id="boton_pasar_of" type="image" src="<? echo ver_url("movil/smiles/images/play_grey_70.png","src"); ?>" title="continue without answer" style="position: absolute;right: 10px;bottom: 10px;height: 50px;" onclick="p_01174_skip_pregunta(this.id)"></div>
		<div id="botonOF" align="right" class="estiloBoton" style='display:none;'><input id="compruebaOF" type="image" src="<? echo ver_url("movil/smiles/images/play_green_70.png","src"); ?>" title="go next question" style="position: absolute;right: 10px;bottom: 10px;height: 50px;" onclick="p_01174_comprueba_frase_formada_usuario(this.id)"></div>
		<div id="boton_pasar_respuesta_contestada_OF" align="right" class="estiloBoton" style='display:none;'><input id="nextquestionOF" type="image" src="<? echo ver_url("movil/smiles/images/next_green_70.png","src"); ?>" title="go next question" style="position: absolute;right: 10px;bottom: 10px;height: 50px;" onclick="p_01174_mostrar_siguiente_pregunta(this.id)"></div>
	</div>
</div>

<div id="p_01175_smile_estructura_trinity" style='display:none;'>
	<div id="trinity" class="preguntas p_01175_pregunta_trinity" style="margin-left:1.2em;display:none;">
	<div id="texto_trinity" class="text3"></div>
	  <div id="pestanas" class="pestanas" style="margin-left:7%;">
            <ul id="lista">
                <!-- <li id="pestana1"><a id="html" href="javascript:cambiarPestanna(pestanas,pestana1);"></a></li> -->
            </ul>
        </div>
	 <div id="contenidopestanas" class="contenedor_pestanas">
	 </div>
	</div>
</div>

<!-- <div id="progressbar"></div> -->
<!-- Sirve para cargar el cuadro del textArea en los moviles -->
<!-- <div id="confTextAreaWriting" style='display:none;'><textarea id="area" rows="15" cols="95" onfocus="focusFunction()" onblur="blurFunction()" onkeypress="javascript: contarPalabras();"> </textarea></div> -->
<!-- <div id="confTextAreaRIW" style='display:none;'><textarea id="areaRIW" rows="15" cols="95" onfocus="focusFunction()" onblur="blurFunction()" onkeypress="javascript: contarPalabrasRIW('pregun5'); "> </textarea></div> -->
<!-- *********************** -->

<div id="p_01175_preguntas" class="p_01172_contenedor_preguntas" style='display:none;'></div>
<div id="p_01175_pregunta_write"  class="p_01172_contenedor_preguntas_write" style='display:none;'>
	<div id="p_01175_preguntas_texto" class="p_01172_contenedor_preguntas_texto">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce lobortis tortor ut sem eleifend dapibus. Sed varius magna sed blandit fringilla. Maecenas suscipit venenatis dolor, quis varius dolor imperdiet et. Proin elit arcu, varius vitae elit non, commodo tincidunt sapien. Aliquam id ex ac arcu iaculis vulputate sit amet sed risus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam ut ligula et felis euismod gravida. Nullam est quam, facilisis non condimentum quis, lacinia et purus. Nullam vestibulum quam vel sem lacinia vulputate vestibulum quis libero. Curabitur rhoncus dapibus velit in efficitur. Aenean et leo id ex iaculis ornare. Donec efficitur diam dapibus eros tempor, et convallis ipsum bibendum. Etiam varius lectus urna, pharetra elementum tellus ultrices quis. Sed malesuada ut massa vitae sollicitudin. Morbi lacus nibh, consequat eget justo in, facilisis tristique odio. Proin ut elementum odio.</p>
        <p>Ut orci sapien, finibus et velit vehicula, elementum sollicitudin nunc. In a lacus vulputate, ultrices neque vel, fringilla tortor. Vivamus pretium quam sem, ac ultrices neque pellentesque sagittis. Sed at pulvinar erat. Morbi faucibus magna nisi, eu bibendum nunc eleifend non. Donec venenatis eros diam, in viverra erat volutpat in. Vivamus egestas imperdiet ante, et pharetra dui dictum vel. Pellentesque lacus ex, cursus rutrum vehicula eget, malesuada in nibh. Praesent rhoncus venenatis libero, ac euismod velit congue et. Sed venenatis semper scelerisque.</p>
        <p>Maecenas vestibulum ante sed tincidunt congue. Proin sed libero eget nunc tempus vestibulum vel sed ipsum. Maecenas a elementum elit. Nulla eget pharetra lectus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis pharetra nisi et nulla tempus suscipit. Mauris iaculis ultricies enim id rhoncus. Aenean viverra ornare arcu, nec tincidunt enim pharetra nec.</p>
        <p>Nulla vulputate tincidunt cursus. Nullam semper urna eu blandit sagittis. Sed nec mattis purus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla facilisi. In aliquam tortor ligula, volutpat bibendum tellus varius a. Pellentesque suscipit libero a massa bibendum, a faucibus velit tempor. Phasellus efficitur, libero accumsan rhoncus aliquam, massa tellus laoreet nisl, non rutrum magna dui nec leo. Integer vestibulum libero auctor magna congue maximus. Vivamus vehicula, leo id finibus luctus, ante quam molestie sem, id pellentesque lorem ex vel dolor. Pellentesque quis porttitor purus, eget porta lectus. Cras volutpat lacus non tincidunt lobortis. Praesent sit amet sodales quam.</p>
        <p>Donec hendrerit lacus nec elit iaculis, eleifend congue diam luctus. Fusce volutpat dolor leo, id scelerisque justo bibendum id. Maecenas venenatis erat aliquam, pretium erat efficitur, mollis augue. Nunc auctor sit amet turpis sed varius. Aenean tincidunt tempus turpis, et porttitor enim feugiat vel. Maecenas euismod ultrices egestas. Aliquam elementum in nisi consectetur dictum. Vivamus in nunc sit amet tortor condimentum laoreet nec sed dolor. Suspendisse blandit lorem ac venenatis pellentesque.</p>
    </div>
	<div id="p_01175_preguntas_texto_fade" class="p_01172_fade_out"></div>
    <div id="p_01175_preguntas_orientacion" class="p_01173_preguntas_orientacion">
    	Lorem ipsum dolor sit amet
    </div>
	<div id="p_01175_preguntas_formulario">
		<div id="p_01175_preguntas_formulario_textarea_caracteres"></div>
		<textarea id="p_01175_preguntas_formulario_textarea" class="p_01175_preguntas_formulario_estilos"
			onkeydown=	"p_01174_textarea_contar_caracteres('p_01175_preguntas_formulario_textarea','p_01175_preguntas_formulario_textarea_caracteres',120);"
			onkeyup=	"p_01174_textarea_contar_caracteres('p_01175_preguntas_formulario_textarea','p_01175_preguntas_formulario_textarea_caracteres',120);"
			onchange=	"p_01174_textarea_contar_caracteres('p_01175_preguntas_formulario_textarea','p_01175_preguntas_formulario_textarea_caracteres',120);"
			onkeypress=	"p_01174_textarea_contar_caracteres('p_01175_preguntas_formulario_textarea','p_01175_preguntas_formulario_textarea_caracteres',120);"
		></textarea><br>
		<button class="p_01175_preguntas_formulario_estilos"><? echo $TEXTOS[22][2];?></button>
	</div>
</div>
<div id="p_01175_preguntas_media" style='display:none;'>
	<audio id="p_01175_preguntas_media_ganar_smile" src="http://app.oxbridge.es/app/media/ganar_smile.mp3">
	<audio id="p_01175_preguntas_media_perder_smile" src="http://app.oxbridge.es/app/media/perder_smile.mp3">
</div>
<!--<div id="p_00987_boton_stop" style='display:none;'><input style="width:15%;position: fixed; bottom: 4em; left: 4em;" id="boton_stop" type="image" src="smiles/images/pause_blueapp_70.png" onclick="p_01171_boton_stop()"></div>-->
<!-- ESTILO BOTONES GRIS Y VERDE POSICION FIJA
style="position: fixed;bottom: 4em;right: 4em;"
-->
