<!--
-ID Pag: p_01450
-NAME: clases_formulario_valoracion_semanal.php
-->
<?

?>

<script>
</script>

<style>
.overall
{
	position: absolute;
	height: 100%;
	width: 100%;
	background: rgba(0,0,0,0.75);
	z-index: 999;
	overflow:auto;
}
#p_01450_overall_valoracion_inputs{
	display:none;
	background-color: white;
	left: 0;
  right: 0;
  margin: auto;
	top: 160px;

}
#p_01450_overall_valoracion_semanal h1{
	position: absolute;
	right: 20px;
	color: #21aed7;
	font-size: 24px;
	top: 20px;
}
#p_0001851_form_valoracion{
	width: 800px;
	height: 200px;/*636px;*/
	margin: auto;
	top: 60px;
	position: absolute;
	left: 0;
	right: 0;
	background: white;
	border-radius: 10px;
}
#p_01450_overall_valoracion_semanal #p_00960_clases_head_profe{
	margin: 20px;
}
#p_01450_overall_valoracion_semanal #p_00960_clases_head_fecha{
	pointer-events: none;
}
.p_01450_div_check_smile
{
	text-align: center;
	font:helveticaneueroman;
	color:#555;
	/*min-height:1em;
	min-height: 1em;*/
	/*margin: 0 0 1em 0;*/
}
.p_01450_label_smiles
{
	height:40px;
	width:40px;
	display:inline-block;
	background: url(<? echo ver_url("images/check_.png","src");?>) no-repeat center right;
	background-size: 82px 40px;
	cursor: pointer;
	border: 2px solid darkgray;
  background-color: #eee;
}
.p_01450_div_check_smile input[type='checkbox']:checked + label{
	background-position: center left;
}
.p_01450_label_smiles:hover{
	transform: scale(1.2);
}
.p_01450_label_smiles img
{
	height:100%;
	width:100%;
}

.p_01450_div_estrellas
{
	float:left;
}
.p_01450_div_estrellas div
{
	float:left;
	background-size: contain;
	background-position: center;
	background-repeat: no-repeat;
	width: 68.25px;
	height: 68.25px;
}
.p_01450_div_texto_nombre
{
	color: #fff;
	font-size: 3.5em;
	font-family: helveticaneueroman;
}
.p_01450_div_titulo_profesor_estrellas
{
	float:left;
	margin: 6em 0 0 0;
}

.p_01450_div_valoracion_profesor
{
	display:inline-block;
	width:100%;
}

.p_01450_div_imagen_profesor
{
	margin:2em;
	float:left;
	border-radius:100%;
	height:12em;
	width:12em;
	overflow:hidden;
}

.p_01450_div_imagen_profesor img
{
	display: inline;
	height: 100%;
	width: 100%;
}

.p_01450_div_inputs_valoracion
{
	float:left;
	width: 100%;
}
.p_01450_div_input_textarea
{
	clear: both;
	text-align: center;
	margin: 1em 0;
}
.p_01450_div_input_textarea textarea
{
	font-size: 16px;
	width:75%;
	height:150px;
	border-radius: 1em;
	padding: 0.1em 0.5em;
}

.p_01450_div_texto_fecha{
	float: left;
	color: #fff;
	font-size: 4em;
	min-height: 1px;
	width: 6em;
	text-align: center;
	font-family: helveticaneueroman;
	margin: 0.2em 0 0 0;
}
.p_01450_div_valoracion_titulos
{
	/*		font:helveticaneueroman;
	color:#555;
	min-height:1em;
	min-height: 1em;
	display: inline-block;
	margin: 0 0 1em 0;
	*/
}
.p_01450_div_formulario_titulos_check
{
	font-size: 20px;
	width: 400px;
	font-family: helveticaneueroman;
	text-align: left;
	padding-left: 20px;
	display: inline-block;
}
.p_01450_div_valoracion_dia
{
	clear:both;
	display: inline-block;
	margin-bottom:1em;
	margin-left: 170px;
}
/*************************/
#p_01450_overall_valoracion_semanal_profesor{
	float:left;
	font-family: HelveticaNeue, Helvetica, Arial, sans-serif;
	color:#999;
	letter-spacing:3px;
	text-transform:capitalize;
	font-size:16px;
	width:395px;
	position:relative;
	margin: 20px;
}
#p_00960_clases_head_foto_valorar{
	height:150px;
	width:150px;
	float:left;
	border-radius:100%;
	-moz-transition:0.5s;
	-webkit-transition:0.5s;
	transition:0.5s;
	cursor: pointer;
}
#p_00960_clases_head_info_valorar{
	float:left;
	position:absolute;
	bottom:42px;
	padding-left:10%;
	margin-left:123px;
	font-size: 16px;
}
#p_00960_clases_head_nombre_valorar{
	float:left;
	max-height:2.3em;
}
#p_00960_clases_head_fecha_valorar{
	/*float:right;*/
	font-family: HelveticaNeue, Helvetica, Arial, sans-serif;
	color:#21aed7;
	font-size:16px;
	letter-spacing:0px;
	display:inline-block;
	text-align:right;
	margin:0.3em 0;
	z-index:1;
	margin-left: 7px;
	position: absolute;
  right: 22px;
  top: 53px;
}
#p_00960_clases_head_fecha_imprimir_valorar{
	float:right;
	letter-spacing:0;
	color: #21aed7;
	font-size:1.1em;
	font-family:HelveticaNeueRoman;
	text-decoration: none;
}
#p_00960_clases_head_horario_valorar{
	color: #21aed7;
	/*float:right;
	clear:both;*/
}
#p_01450_from_valoracion_semanal{

}
#p_0001851_enviar, #p_0001851_anular{
	width: 150px;
	display: inline-block;
	margin: auto;
	padding: 6px;
	background: #21aed7;
	color: white;
	font-size: 18px;
	cursor: pointer;
}
#p_0001851_anular{
	background: white;
	color: green;
	width: 237px;
}
#p_0001851_botones{
	text-align: center;
}
#p_00995_formulario_valoracion_enviar{
	display: none;
}
#p_0001851_valoracion_recibida{
	width: 400px;
  height: 208px;
  border: 2px solid #21aed7;
  position: absolute;
  background: whitesmoke;
  left: 0;
  right: 0;
  margin: auto;
  border-radius: 10px;
  box-shadow: 5px 5px 20px grey;
	display: none;
}
#p_0001851_valoracion_recibida p{
	font-size: 28px;
  text-align: center;
  margin: auto;
  margin-top: 33px;
}
#p_0001851_boton_incidencia{
	height: 25px;
  width: 217px;
  position: absolute;
  right: 23px;
  top: 157px;
  border-radius: 10px;
  border: 2px solid #f25b07;
  cursor: pointer;
}
.p_0001851_imagen_boton_incidencia{
	height: 26px;
  width: 14px;
  margin-left: 2px;
}
#p_0001851_boton_incidencia span{/*, #p_0001851_boton_he_asistido span{*/
	display: block;
  position: absolute;
  left: 20px;
  top: 4px;
  font-size: 14px;
}
/*#p_0001851_boton_he_asistido{
	height: 25px;
  width: 217px;
  position: absolute;
  bottom: 89px;
  border-radius: 10px;
  border: 2px solid rgba(0, 128, 0, 0.83);
  cursor: pointer;
  display: none;
  right: 0;
  left: 0;
  margin: auto;
  background-color: rgba(0, 128, 0, 0.2);
}*/
#p_01450_div_incidencia{
	display:none;
}
#p_01450_div_incidencia p:last-of-type{
	font-size: 16px;
  margin-top: 20px;
}
#p_01450_div_incidencia p{
	margin-left: 74px;
  font-size: 22px;
}
#p_00960_clases_head_flecha_valorar{
	position: absolute;
  right: 36px;
  top: 78px;
  height: 37px;
	-webkit-animation:mover_flecha 0.3s ease-in alternate infinite;
	animation: mover_flecha 0.3s ease-in alternate infinite;
}
@-webkit-keyframes mover_flecha {
	0%{right: 36px;}
	100%{right: 41px;}
}
@keyframes mover_flecha {
	0%{right: 36px;}
	100%{right: 41px;}
}

}

</style>

<div id="p_01450_overall_valoracion_semanal" class="overall" style="display:none;">
	<div id="p_0001851_form_valoracion">
		<h1><? echo $TEXTOS[200][2];?></h1>
		<div id="p_00960_clases_head_fecha_valorar">
			<span id="p_00960_clases_head_fecha_imprimir_valorar" content="telephone=no" >
			</span>
			<div id="p_00960_clases_head_horario_valorar"></div>
		</div>
		<div id="p_0001851_boton_incidencia" onclick='p_00994_envio_incidencia();'>
				<img class="p_0001851_imagen_boton_incidencia" src="<? echo ver_url("images/incidencia.png","src"); ?>">
				<span><? echo $TEXTOS[201][2];?></span>
		</div>
	<!--	<div id="p_0001851_boton_he_asistido" onclick='p_00994_envio_he_asistido();'>
				<img class="p_0001851_imagen_boton_incidencia" src="<? echo ver_url("images/incidencia.png","src"); ?>">
				<span>Sí he asistido a esta clase</span>
		</div>
-->
		<div id="p_0001851_cargando" style="display:none;">
			 <img style="
			width: 33%;
			margin: 34%;
					-moz-animation:p_00995_horario_loading infinite 1s linear;
					-webkit-animation: p_00995_horario_loading infinite 1s linear;
					animation:p_00995_horario_loading infinite 1s linear;
					"
			 src="<? echo ver_url("images/loading.png","src"); ?>">
	</div>
		<div id="p_01450_overall_valoracion_semanal_profesor" class="p_01450_div_valoracion_profesor">
<!--			<div id="p_00960_clases_head_fecha_valorar">
				<span id="p_00960_clases_head_fecha_imprimir_valorar" content="telephone=no" >
				</span>
				<div id="p_00960_clases_head_horario_valorar"></div>
			</div>
	-->
			<div id="p_00960_clases_head_info_valorar">
				<div id="p_00960_clases_head_info_titulo_valorar"><? echo $TEXTOS[100][2]; ?>:</div>
				<div id="p_00960_clases_head_nombre_valorar"></div>
				<div class="p_00960_clases_head_valoracion" id="p_00960_clases_head_valoracion_valorar">
					<div onClick="formulario_valoracion(1);" id="p_00960_clases_head_valoracion_s1_valorar"></div>
					<div onClick="formulario_valoracion(2);" id="p_00960_clases_head_valoracion_s2_valorar"></div>
					<div onClick="formulario_valoracion(3);" id="p_00960_clases_head_valoracion_s3_valorar"></div>
					<div onClick="formulario_valoracion(4);" id="p_00960_clases_head_valoracion_s4_valorar"></div>
					<div onClick="formulario_valoracion(5);" id="p_00960_clases_head_valoracion_s5_valorar"></div>
				</div>
			</div>
			<img id="p_00960_clases_head_foto_valorar" src="<? echo ver_url("images/perfil.png","src"); ?>">
			<img id="p_00960_clases_head_flecha_valorar" src="<? echo ver_url("images/arrow_left.png","src"); ?>">
		</div>

		<div id="p_01450_overall_valoracion_inputs" class="p_01450_div_inputs_valoracion">
			<div id="p_0001851_valoracion_recibida">
				<p>Valoraci&oacute;n recibida.</p>
				<p>Gracias</p>
			</div>

			<iframe name="p_00995_formulario_valoracion_enviar" id="p_00995_formulario_valoracion_enviar"></iframe>
		<!--<iframe name="p_00995_formulario_valoracion_enviar" id="p_00995_formulario_valoracion_enviar" onload="
				document.getElementById('p_0001851_valoracion_recibida').style.display='block';
				setTimeout(function(){
					document.getElementById('p_0001851_valoracion_recibida').style.display='none';
					document.getElementById('p_01450_overall_valoracion_semanal').style.display='none';
					p_1003_comprobar_valoraciones_pendientes();
				}, 2000);
			"></iframe>-->
			<!--/**********************************************************************************/-->
			<div class="p_01450_div_valoracion_dia">

				<div id="p_01450_overall_valoracion_inputs_puntual" class="p_01450_div_check_smile">
					<input type="checkbox" class="p_01450_checkbox_carita" id="p_01450_input_valoracion_semanal_puntual" name="p_0001292_input_puntual" style="display:none;" checked>
					<label class="p_01450_label_smiles" for="p_01450_input_valoracion_semanal_puntual">
					</label>
					<div class="p_01450_div_check_smile p_01450_div_formulario_titulos_check"><? echo $TEXTOS[157][2];?></div>
				</div>
				<div id="p_01450_overall_valoracion_inputs_preparado" class="p_01450_div_check_smile">
					<input type="checkbox" class="p_01450_checkbox_carita" id="p_01450_input_valoracion_semanal_preparado" name="p_0001292_input_preparado" value="" style="display:none;" checked>
					<label class="p_01450_label_smiles" for="p_01450_input_valoracion_semanal_preparado">
					</label>
					<div class="p_01450_div_check_smile p_01450_div_formulario_titulos_check"><? echo $TEXTOS[158][2];?></div>
				</div>
				<div id="p_01450_overall_valoracion_inputs_sistema" class="p_01450_div_check_smile">
					<input type="checkbox" class="p_01450_checkbox_carita" id="p_01450_input_valoracion_semanal_sistema" name="p_0001292_input_sistema" style="display:none;" checked>
					<label class="p_01450_label_smiles" for="p_01450_input_valoracion_semanal_sistema">
					</label>
					<div class="p_01450_div_check_smile p_01450_div_formulario_titulos_check"><? echo $TEXTOS[159][2];?></div>
				</div>
			</div>

			<div id="p_01450_div_incidencia">
				<p><? echo $TEXTOS[202][2];?></p>
			</div>

			<form id="p_01450_from_valoracion_semanal"
			method="POST" target="p_00995_formulario_valoracion_enviar"
			action="http://app.oxbridge.es/actividades/clases_02_valoracion_01_php_01_modificar.php"
			>
				<div id="p_01450_overall_valoracion_inputs_comentario" class="p_01450_div_input_textarea">
					<textarea id="p_0001292_input_comentario" placeholder="<? echo $TEXTOS[29][2];?>"  class="p_00995_formulario_mail_input" name="p_0001292_input_comentario" cols="40" rows="10"></textarea>
				</div>

				<input type="hidden" id="p_0001292_input_puntual" name="p_0001292_input_puntual" value="" >
				<input type="hidden" id="p_0001292_input_preparado" name="p_0001292_input_preparado" value="" >
				<input type="hidden" id="p_0001292_input_sistema" name="p_0001292_input_sistema" value="" >
				<input type="hidden" id="p_0001292_input_incidencia" name="p_0001292_input_incidencia" value="0" >

				<input type="hidden" id="p_0001292_input_dia_lectivo_id" name="p_0001292_input_dia_lectivo_id" value="">
				<input type="hidden" id="p_0001292_input_alumno_id" name="p_0001292_input_alumno_id" value="">
				<input type="hidden" id="p_0001292_input_profesor_id" name="p_0001292_input_profesor_id" value="">
				<input type="hidden" id="p_0001292_input_dia_lectivo_fecha_dia" name="p_0001292_input_dia_lectivo_fecha_dia" value="">
				<input type="hidden" id="p_0001292_input_dia_lectivo_fecha_mes" name="p_0001292_input_dia_lectivo_fecha_mes" value="">
				<input type="hidden" id="p_0001292_input_dia_lectivo_fecha_anyo" name="p_0001292_input_dia_lectivo_fecha_anyo" value="">
				<input type="hidden" id="p_0001292_input_valoracion" name="p_0001292_input_valoracion" value="">
				<input type="hidden" id="p_0001292_input_finalizador" name="p_0001292_input_finalizador" value="">

				<input type="hidden" id="p_00995_input_form_valoracion_sesion_id" name="p_0001326_input_sesion_id" value="786">
				<input type="hidden" id="p_00995_input_form_valoracion_sesion_uid" name="p_0001326_input_sesion_uid" value="12">
				<input type="hidden" id="p_00995_input_form_valoracion_area_id" name="p_0001326_input_area_id" value="3">
				<input type="hidden" id="p_00995_input_form_valoracion_disparador_js" name="p_0001326_input_disparador_js" value="">

				<div id="p_0001851_botones">
					<input id="p_0001851_enviar" type="button" value="<? echo $TEXTOS[22][2];?>"
					onclick="
					ocultar_mostrar('p_01450_overall_valoracion_semanal');
					p_01003_enviar_valoracion();
					//p_01003_enviar_comentario();
					p_01003_email_envio_comentario_profesor();
					p_01169_imprimir_asistencia();
					">
					<input id="p_0001851_anular"type="button" value="<? echo $TEXTOS[204][2];?>"
					onclick="
					p_01003_deshacer_estilos_no_asistencia();
					">
				</div>
		</form>

	</div>
</div>
</div>
</div>
