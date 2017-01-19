<!--
-Pag. ID:p_01175
-->
<!-- PREGUNTA TRUE-FALSE -->
<div id="p_01175_smile_estructura_tf" style='display:none;'>
	<div id="pregun1" class="preguntas"><br>
		<div id="Titulo" class="text"></div>
		<div id="Texto" class="text2"></div>
		<!-- <form name=formPregun align='center' method='post' name='cookie' action='#'> -->
		<!-- </form> -->
		<div id="p_01175_respuesta_true_false" class="resp">
			<table>
			</table><br><br>
		</div>
			<div id="myDialogPasarPregTF" title="Are you sure that you doesn't answer"></div>
			<div id="err_radio" class="missatges"></div>
			<div id="botonPasarTF" align="right" class="estiloBoton"><input type="image" src="<? echo ver_url("images/skip.png","src"); ?>" width="15%" title="continue without answer" onclick="p_01174_skip_pregunta()"></div>
			<div id="botonTF" align="right" class="estiloBoton" style='display:none;'><input id="compruebaTF" type="image" src="<? echo ver_url("images/next.png","src"); ?>" width="15%" title="go next question" onclick="obtenerValor(this.id)"></div>
	</div>
</div>

<!-- PREGUNTA FILL-GAPS -->
<div id="p_01175_smile_estructura_drag" style='display:none;'>
	<div id="pregun2" class="preguntas"><br>
		<div id="Titulo2" class="text" style='margin-bottom: 15px;'></div>
		<div id="contenedorDragDrop" class="text2Especial" onclick="p_01174_dragdrop(this.id)"></div>
			
			<div id="p_01175_respuesta_drag_drop" class="dragdrop">
			</div>
			
		<!-- <div id="myDialogPasarPregFillGaps" title="Are you sure that you doesn't answer"></div> -->
		<div id="botonPasarFILGAPS" align="right" class="estiloBoton"><input type="image" src="<? echo ver_url("images/skip.png","src"); ?>" width="15%" title="continue without answer" onclick="p_01174_skip_pregunta()" style="padding-top: 15px;"></div>
		<div id="botonFG" align="right" class="estiloBoton" style='display:none;'><input type="image" src="<? echo ver_url("images/next.png","src"); ?>" width="15%" title="go next question" onclick="p_01174_loadpreguntas()"></div>
	</div>
</div>
<!-- PREGUNTA MULTIOPTION -->
<div id="p_01175_smile_estructura_m_option" style='display:none;'>
	<div id="pregun3" class="preguntas"><br>
		<div id="Titulo3" class="text"></div>
		<div id="Texto3" class="text2"></div>
		<!-- <form name=formPregun align='center' method='post' name='cookie' action='#'> -->
		<div id="p_01175_respuesta_m_option" class="resp">
			<table>
		<!-- </form> -->
			</table><br><br>
		</div>
			<div id="myDialogPasarPregMOPTION" title="Are you sure that you donesn't answer"></div>
			<div id="err_checkbox" class="missatges"></div>
			<div id="botonPasarMO" align="right" class="estiloBoton" ><input type="image" src="<? echo ver_url("images/skip.png","src"); ?>" width="15%" title="continue without answer" onclick="p_01174_skip_pregunta()"></div>
		<div id="botonMO" align="right" class="estiloBoton" style='display:none;'><input id="compruebaM0" type="image" src="<? echo ver_url("images/next.png","src"); ?>" width="15%" title="go next question" onclick="obtenerValorMultirespuesta(this.id)"></div>
	</div>
</div>

<!-- PREGUNTA WRITING -->
<div id="p_01175_smile_estructura_escribir" style="display:none;">
	<div id="pregun4" class="preguntas">
	<div id="Titulo4" class="text"></div>
	<div id="LongPalabrasWriting" class="LongPalabras">maximun 180 words</div>
	<div id="areaTexto"><textarea id="area" rows="20%" cols="110%" style='resize:none;' onkeypress="javascript: contarPalabras(this.id);"></textarea></div>
	<div id="myDialogGuardar" title="Are you sure that you want to save"></div>
	<div id="err_faltaTexto" class="missatges"></div>
	<!-- <div id="myDialogPasarPregWRITING" title="Are you sure that you donesn't answer"></div> -->
	<div id="botonguardar" align="right" class="estiloBoton" style="display: inline;padding-left: 80px;"><input id="title_botonguardar" type="image" src="imagenes/descarga.jpg" width="10%" title="save without send" onclick="save(this.id)" style="padding-bottom: 15px;"></div>
	<div id="botonPasarWRTING" align="right" class="estiloBoton" style="display: inline;"><input type="image" src="<? echo ver_url("images/skip.png","src"); ?>" width="15%" title="continue without answer" onclick="p_01174_skip_pregunta()" style="margin-left: 45%"></div>
	<div id="botonWTING" align="right" class="estiloBoton" style="display:none;"><input id="title_botonWTING" type="image" src="<? echo ver_url("images/next.png","src"); ?>" width="15%" title="send to evaluate" onclick="guardarPalabrasEnviar(this.id)" style="padding-bottom: 15px;"></div>
	</div>
</div>

<!-- PREGUNTA READING INTO WRITING -->
<div id="p_01175_smile_estructura_option_escribir" style='display:none;'>
	<div id="pregun5" class="preguntas">
	<div id="Titulo6" class="text"></div>
	<div id="LongPalabrasRIW" class="LongPalabras">maximun 180 words</div>
	<div id="subtopicArea1" class="subtopics">Text subtòpic 1 </div><br>
	<div id="areaTextoRIW"><textarea id="areaRIW" rows="16%" cols="110%" style='resize:none;' onkeypress="javascript: contarPalabrasRIW(this.id); "></textarea></div><br>
	<div id="myDialogGuardarRIW" title="Are you sure that you want to save"></div>
	<div id="err_faltaTextoRIW" class="missatges"></div>
	<!-- <div id="myDialogPasarPregRIW" title="Are you sure that you donesn't answer"></div> -->
	<div id="botonguardarRIW" align="right" class="estiloBoton" style="display: inline;padding-left: 80px;"><input id="title_botonguardarRIW" type="image" src="imagenes/descarga.jpg" width="10%" title="this boton allow save without send" onclick="saveWriting(this.id)" style="padding-bottom: 15px;"></div>
	<div id="botonPasarRIW" align="right" class="estiloBoton" style="display: inline;"><input type="image" src="<? echo ver_url("images/skip.png","src"); ?>" width="15%" title="continue without answer" onclick="p_01174_skip_pregunta()" style="margin-left: 45%;"></div>
	<div id="botonRIW" align="right" class="estiloBoton" style="display:none;"><input id="title_botonRIW" type="image" src="<? echo ver_url("images/next.png","src"); ?>" width="15%" title="send to evaluate" onclick="guardarPalabrasEnviarRIW(this.id)" style="padding-bottom: 15px;"></div>
	</div>
</div>

<div id="p_01175_smile_estructura_fotos" style='display:none;'>
	<div id="word" class="estilo_palabra"></div>
	<div id="imagenes"></div>
</div>

<div id="p_01175_smile_estructura_audio" style='display:none;'>
<input id="sound_word" type='image' width='20%' onclick="func()" src='<? echo ver_url("images/audio2.png","src"); ?>'/>
<!-- <iframe id="reproduccionWord" src="" style='display:none;'></iframe> -->
<audio onended="cambiarIcono();" id="reproduccionWord" style="display:none;">
</audio>
	<div id="sound_imagenes"></div>
</div>

<!-- <div id="progressbar"></div> -->
<!-- Sirve para cargar el cuadro del textArea en los moviles -->
<!-- <div id="confTextAreaWriting" style='display:none;'><textarea id="area" rows="15" cols="95" onfocus="focusFunction()" onblur="blurFunction()" onkeypress="javascript: contarPalabras();"> </textarea></div> -->
<!-- <div id="confTextAreaRIW" style='display:none;'><textarea id="areaRIW" rows="15" cols="95" onfocus="focusFunction()" onblur="blurFunction()" onkeypress="javascript: contarPalabrasRIW('pregun5'); "> </textarea></div> -->
<!-- *********************** -->
<div id="p_01175_copia_plantilla" style='display:none;'></div>