<!--
Pag. ID: 00961
-->

<div id="personal">

   <div id="p_00961_info_menu_secciones">

      <div class="p_00961_info_menu_seccion p_00961_info_menu_seccion_click" id="p_00961_menu_info_primero" onclick="p_01169_seleccionar_seccion(this);">
      	<img class="p_00961_info_menu_logo" name="boton_info" src="<? echo ver_url("images/boton_info_sel.png","src"); ?>"></img>
         <div class="p_00961_info_menu_espacio_blanco" style="width: 1em;"></div>
         <div class="p_00961_menu_texto">
            <div id="p_00961_menu_contenedor_1" class="p_00961_contenedor_seccion">
					<div class="p_00961_menu_seccion_titulo"><? echo $TEXTOS[39][2]; ?></div>
               <center><div id="p_00961_formulario_personal_info_cargando" style="position:absolute; width:100%;"></div></center>
					<form
               	id="p_00961_formulario_personal_info"
               	method="post"
               	class="p_00961_formulario_personal_info"
                  action="http://s.oxbridge.es/ox/estructura_web/codigo/alumno_v2/informacion personal 01 _datos_presonales_01_asp_01_modificar.asp"
                  target="p_00961_guardar_personal_info"
                  onsubmit="p_00989_cargando('p_00961_personal_info_respuesta');"
                  style="display:none;"
					>

               	<script> p_00989_agregar_comprobacion_ses("p_00961_formulario_personal_info","window.parent.document.getElementById('p_00961_formulario_personal_info').submit();","p_00961_guardar_personal_info");</script>

						<input id="p_00961_formulario_info_nombre" class="p_00961_formulario_personal_info_input" value="" name="NOMBRE" type="text">
                  <div class="p_00961_formulario_personal_info_nombre_input"><? echo $TEXTOS[25][2];?></div><br>

                  <input id="p_00961_formulario_info_apellido_1" class="p_00961_formulario_personal_info_input" value="" name="APELLIDO 1" type="text">
						<div class="p_00961_formulario_personal_info_nombre_input"> <? echo $TEXTOS[44][2];?></div><br>

                  <input id="p_00961_formulario_info_apellido_2" class="p_00961_formulario_personal_info_input" value="" name="APELLIDO 2" type="text">
                  <div class="p_00961_formulario_personal_info_nombre_input"><? echo $TEXTOS[45][2];?></div><br>

                  <input id="p_00961_formulario_info_email" class="p_00961_formulario_personal_info_input" value="" name="EMAIL" type="text" onchange="document.getElementById('p_00961_input_aviso_email').style.display='inline';">
                  <div class="p_00961_formulario_personal_info_nombre_input">eMail</div><br>

                  <input id="p_00961_formulario_info_telefono" class="p_00961_formulario_personal_info_input" value="" name="TELEFONO" type="text">
                  <div class="p_00961_formulario_personal_info_nombre_input"><? echo $TEXTOS[27][2];?></div><br>

                  <input id="p_00961_formulario_info_movil" class="p_00961_formulario_personal_info_input" value="" name="MOVIL" type="text">
                  <div class="p_00961_formulario_personal_info_nombre_input"><? echo $TEXTOS[46][2];?></div><br>

                  <input id="p_00961_formulario_info_direccion" class="p_00961_formulario_personal_info_input" value="" name="DIRECCION" type="text">
                  <div class="p_00961_formulario_personal_info_nombre_input"><? echo $TEXTOS[14][2];?></div><br>

                  <input id="p_00961_formulario_info_numero" class="p_00961_formulario_personal_info_input" value="" name="NUMERO" type="text">
                  <div class="p_00961_formulario_personal_info_nombre_input"><? echo $TEXTOS[47][2];?></div><br>

                  <input id="p_00961_formulario_info_codigo_postal" class="p_00961_formulario_personal_info_input" value="" name="CODIGO POSTAL" type="text">
                  <div class="p_00961_formulario_personal_info_nombre_input"><? echo $TEXTOS[48][2];?></div><br>

                  <input id="p_00961_formulario_info_poblacion" class="p_00961_formulario_personal_info_input" value="" name="POBLACION" type="text">
                  <div class="p_00961_formulario_personal_info_nombre_input"><? echo $TEXTOS[49][2];?></div><br>

                  <input id="p_00961_formulario_info_nif" class="p_00961_formulario_personal_info_input" value="" name="NIF" type="text">
                  <div class="p_00961_formulario_personal_info_nombre_input"><? echo $TEXTOS[50][2];?></div><br>

                  <input id="p_00961_formulario_info_fecha_nacimiento" class="p_00961_formulario_personal_info_input" value="" name="FECHA NACIMIENTO" type="text" placeholder="DD/MM/YYYY">
                  <div class="p_00961_formulario_personal_info_nombre_input"><? echo $TEXTOS[51][2];?></div><br>

                  <select id="p_00961_formulario_info_sexo" class="p_00961_formulario_personal_info_input"  value="" name="SEXO">
                     <option value="M">Male</option>
                     <option value="F">Female</option>
                  </select>
						<div class="p_00961_formulario_personal_info_nombre_input"><? echo $TEXTOS[52][2];?></div><br>

						<div id="p_00961_input_aviso_email" style="color:#FA40B7;font-family: helveticaneueroman;width:100%;float:right;text-align:center;margin:0.5em 0;display:none;"><? echo $TEXTOS[54][2];?></div><br>
                  <input class="p_00961_formulario_personal_info_input" type="submit" name="GUARDAR" value=" <? echo $TEXTOS[55][2];?>"><br>
                  <input type="hidden" name="alumno_id" value=" <? echo $alumno_id; ?> ">
                  <input type="hidden" name="p_0001294_input_dominio" value="app.oxbridge.es">
                  <input type="hidden" name="p_0001294_input_finalizador_js" value="window.parent.document.getElementById('p_00961_personal_info_respuesta').innerHTML=window.parent.p_00989_corrige_general(window.parent.TEXTOS[63].text);">
                  <div id="p_00961_personal_info_respuesta" class="p_00961_formulario_personal_info_input"></div>
               </form>
               <iframe id="p_00961_guardar_personal_info" name="p_00961_guardar_personal_info" style="display: none"></iframe>
            </div>
         </div>
      </div>

      <div class="p_00961_info_menu_seccion p_00961_info_menu_seccion_click" onclick="p_01169_seleccionar_seccion(this);">
      	<img class="p_00961_info_menu_logo" name="boton_key" src="<? echo ver_url("images/boton_key.png","src"); ?>"></img>
         <div class="p_00961_info_menu_espacio_blanco"></div>
         <div class="p_00961_menu_texto" style="display:none;">
            <div id="p_00961_menu_contenedor_2" class="p_00961_contenedor_seccion">
					<div class="p_00961_menu_seccion_titulo"><? echo $TEXTOS[40][2]; ?></div>
            	<form
               	method="post"
               	class="p_00961_formulario_personal_info"
                  action="http://s.oxbridge.es/ox/estructura_web/codigo/alumno_v2/informacion personal 02 _contrasenya_01_asp_01_modificar.asp"
                  target="p_00961_guardar_personal_pass"
                  onsubmit="p_00989_cargando('p_00961_personal_pass_respuesta');"
                  id="p_00961_formulario_personal_pass"
               >

               	<script> p_00989_agregar_comprobacion_ses("p_00961_formulario_personal_pass","window.parent.document.getElementById('p_00961_formulario_personal_pass').submit();","p_00961_guardar_personal_pass");</script>

						<input class="p_00961_formulario_personal_info_input" name="CONTRASENYA ACTUAL" type="password" maxlength="50">
                  <div class="p_00961_formulario_personal_info_nombre_input"><? echo $TEXTOS[56][2]; ?></div>
                  <br>
						<input class="p_00961_formulario_personal_info_input" name="CONTRASENYA NUEVA" type="password" maxlength="50">
                  <div class="p_00961_formulario_personal_info_nombre_input"><? echo $TEXTOS[57][2]; ?></div>
                  <br>
						<input class="p_00961_formulario_personal_info_input" name="REPETIR CONTRASENYA NUEVA" type="password"  maxlength="50">
                  <div class="p_00961_formulario_personal_info_nombre_input"> <? echo $TEXTOS[58][2]; ?></div>
                  <br>
                  <input class="p_00961_formulario_personal_info_input" name="GUARDAR CONTRASENYA" type="submit"  value="<? echo $TEXTOS[55][2]; ?>"><br>
                  <input type="hidden" name="alumno_id" value=" <? echo $alumno_id; ?> ">
                  <input type="hidden" name="p_0001295_input_dominio" value="app.oxbridge.es">
                  <input type="hidden" name="p_0001295_input_finalizador_js"
                  	value="
                     	window.parent.document.getElementById('p_00961_personal_pass_respuesta').innerHTML=window.parent.p_00989_corrige_general(window.parent.TEXTOS[63].text);
                    		setTimeout(function(){window.parent.document.getElementById('p_00961_personal_pass_respuesta').innerHTML='';},5000);
                     "
						>
                  <div id="p_00961_personal_pass_respuesta" class="p_00961_formulario_personal_info_input"></div>
               </form>
               <iframe id="p_00961_guardar_personal_pass" name="p_00961_guardar_personal_pass" style="display:none"></iframe>
               <div
               	id="p_00961_recover_pass"
                  class="p_00961_formulario_personal_info_input"
                  style="
                  	font-size:1em;
                     clear:both;
                     text-decoration:underline;
                     color:#888;
                     cursor:pointer;
                  "
                  onclick="
                  	document.getElementById('p_00961_recover_pass_email').value=personal_datos_info.email;
                  	document.getElementById('p_00961_recover_pass_form').submit();
                     document.getElementById('p_00961_recover_pass').onclick='';
                     document.getElementById('p_00961_recover_pass').style.textDecoration='';
                     document.getElementById('p_00961_recover_pass').style.color='#888';
                     document.getElementById('p_00961_recover_pass').innerHTML=TEXTOS[102].text+' '+personal_datos_info.email;
                  "

               ><? echo $TEXTOS[70][2];?></div>
               <form id="p_00961_recover_pass_form" target="p_00961_recover_pass_iframe" method="post" action="http://s.oxbridge.es/ox/principal/inc_verificar_usuario_envio_contrasenya_previo_TEFL.asp?">
               	<input type="hidden" id="p_00961_recover_pass_email" name="email" value="">
               </form>
               <iframe name="p_00961_recover_pass_iframe" id="p_00961_recover_pass_iframe" style="display:none;"></iframe>

            </div>
         </div>
      </div>


      <div class="p_00961_info_menu_seccion p_00961_info_menu_seccion_click" id="p_00961_info_menu_asistencia" onclick="p_01169_seleccionar_seccion(this)">
      	<img class="p_00961_info_menu_logo" name="boton_asistencia" src="<? echo ver_url("images/boton_asistencia.png","src"); ?>"></img>
         <div class="p_00961_info_menu_espacio_blanco"></div>
         <div class="p_00961_menu_texto" style="display:none;">
            <div id="p_00961_menu_contenedor_3" class="p_00961_contenedor_seccion">
				<div class="p_00961_menu_seccion_titulo"><? echo $TEXTOS[41][2]; ?></div>

            <div class="p_00961_personal_asistencia_contenedor" id="p_00961_personal_asistencia_contenedor">
           		<!--IMPRIMIR ASISTENCIA AQUI-->
            </div>

            </div>
         </div>
      </div>

      <div class="p_00961_info_menu_seccion p_00961_info_menu_seccion_click" onclick="p_01169_seleccionar_seccion(this);">
      	<img class="p_00961_info_menu_logo" name="boton_gear" src="<? echo ver_url("images/boton_gear.png","src"); ?>"></img>
         <div class="p_00961_info_menu_espacio_blanco"></div>
         <div class="p_00961_menu_texto" style="display:none;">
            <div id="p_00961_menu_contenedor_5" class="p_00961_contenedor_seccion">
				<div class="p_00961_menu_seccion_titulo"><? echo $TEXTOS[43][2]; ?></div>

               <iframe id="p_00961_guardar_personal_setting" name="p_00961_guardar_personal_setting" style="display:none"></iframe>

					<form
               	method="post"
               	class="p_00961_formulario_personal_info"
                  action="http://s.oxbridge.es/ox/estructura_web/codigo/alumno_v2/informacion personal 03 _settigs_01_asp_01_modificar.asp"
                  target="p_00961_guardar_personal_setting"
                  onsubmit="p_00989_cargando('p_00961_personal_info_seting');"
                  id="p_00961_formulario_personal_seting"
					>

						<input type="hidden" name="alumno_id" value="<? echo($alumno_id); ?>">
                  <input type="hidden" name="p_0001296_input_dominio" value="app.oxbridge.es">
                  <input type="hidden" name="p_0001296_input_finalizador_js" value="window.parent.document.getElementById('p_00961_personal_info_seting').innerHTML=window.parent.p_00989_corrige_general(window.parent.TEXTOS[63].text);window.parent.p_01169_if_cambio_de_idioma('personal');">

               <script> p_00989_agregar_comprobacion_ses("p_00961_formulario_personal_seting","window.parent.document.getElementById('p_00961_formulario_personal_seting').submit();","p_00961_guardar_personal_setting");</script>

                  <select id="p_00961_formulario_personal_seting_idioma" class="p_00961_formulario_personal_info_input" value="" name="IDIOMA">
                     <option value="CASTELLANO">Castellano</option>
                     <option value="CATALA">Catal&agrave;</option>
                     <option value="ENGLISH">English</option>
                  </select>
                  <div class="p_00961_formulario_personal_info_nombre_input"><? echo $TEXTOS[53][2];?></div><br>

                  <div  style="display:none">
                  <select id="p_00961_formulario_personal_seting_zona_horaria" class="p_00961_formulario_personal_info_input" name="zona_horaria" >
                     <option value="-11:00">Midway Island</option>
                     <option value="-11:00">Samoa</option>
                     <option value="-10:00">Hawaii</option>
                     <option value="-09:00">Alaska</option>
                     <option value="-08:00">Pacific Time (US &amp; Canada)</option>
                     <option value="-08:00">Tijuana</option>
                     <option value="-07:00">Arizona</option>
                     <option value="-07:00">Mountain Time (US &amp; Canada)</option>
                     <option value="-07:00">Chihuahua</option>
                     <option value="-07:00">Mazatlan</option>
                     <option value="-06:00">Mexico City</option>
                     <option value="-06:00">Monterrey</option>
                     <option value="-06:00">Saskatchewan</option>
                     <option value="-06:00">Central Time (US &amp; Canada)</option>
                     <option value="-05:00">Eastern Time (US &amp; Canada)</option>
                     <option value="-05:00">Indiana (East)</option>
                     <option value="-05:00">Bogota</option>
                     <option value="-05:00">Lima</option>
                     <option value="-04:30">Caracas</option>
                     <option value="-04:00">Atlantic Time (Canada)</option>
                     <option value="-04:00">La Paz</option>
                     <option value="-04:00">Santiago</option>
                     <option value="-03:30">Newfoundland</option>
                     <option value="-03:00">Buenos Aires</option>
                     <option value="-03:00">Greenland</option>
                     <option value="-02:00">Stanley</option>
                     <option value="-01:00">Azores</option>
                     <option value="-01:00">Cape Verde Is.</option>
                     <option value="00:00">Casablanca</option>
                     <option value="00:00">Dublin</option>
                     <option value="00:00">Lisbon</option>
                     <option value="00:00">London</option>
                     <option value="00:00">Monrovia</option>
                     <option value="+01:00">Amsterdam</option>
                     <option value="+01:00">Belgrade</option>
                     <option value="+01:00">Berlin</option>
                     <option value="+01:00">Bratislava</option>
                     <option value="+01:00">Brussels</option>
                     <option value="+01:00">Budapest</option>
                     <option value="+01:00">Copenhagen</option>
                     <option value="+01:00">Ljubljana</option>
                     <option value="+01:00" selected="selected">Madrid</option>
                     <option value="+01:00">Paris</option>
                     <option value="+01:00">Prague</option>
                     <option value="+01:00">Rome</option>
                     <option value="+01:00">Sarajevo</option>
                     <option value="+01:00">Skopje</option>
                     <option value="+01:00">Stockholm</option>
                     <option value="+01:00">Vienna</option>
                     <option value="+01:00">Warsaw</option>
                     <option value="+01:00">Zagreb</option>
                     <option value="+02:00">Athens</option>
                     <option value="+02:00">Bucharest</option>
                     <option value="+02:00">Cairo</option>
                     <option value="+02:00">Harare</option>
                     <option value="+02:00">Helsinki</option>
                     <option value="+02:00">Istanbul</option>
                     <option value="+02:00">Jerusalem</option>
                     <option value="+02:00">Kyiv</option>
                     <option value="+02:00">Minsk</option>
                     <option value="+02:00">Riga</option>
                     <option value="+02:00">Sofia</option>
                     <option value="+02:00">Tallinn</option>
                     <option value="+02:00">Vilnius</option>
                     <option value="+03:00">Baghdad</option>
                     <option value="+03:00">Kuwait</option>
                     <option value="+03:00">Nairobi</option>
                     <option value="+03:00">Riyadh</option>
                     <option value="+03:00">Moscow</option>
                     <option value="+03:30">Tehran</option>
                     <option value="+04:00">Baku</option>
                     <option value="+04:00">Volgograd</option>
                     <option value="+04:00">Muscat</option>
                     <option value="+04:00">Tbilisi</option>
                     <option value="+04:00">Yerevan</option>
                     <option value="+04:30">Kabul</option>
                     <option value="+05:00">Karachi</option>
                     <option value="+05:00">Tashkent</option>
                     <option value="+05:30">Kolkata</option>
                     <option value="+05:45">Kathmandu</option>
                     <option value="+06:00">Ekaterinburg</option>
                     <option value="+06:00">Almaty</option>
                     <option value="+06:00">Dhaka</option>
                     <option value="+07:00">Novosibirsk</option>
                     <option value="+07:00">Bangkok</option>
                     <option value="+07:00">Jakarta</option>
                     <option value="+08:00">Krasnoyarsk</option>
                     <option value="+08:00">Chongqing</option>
                     <option value="+08:00">Hong Kong</option>
                     <option value="+08:00">Kuala Lumpur</option>
                     <option value="+08:00">Perth</option>
                     <option value="+08:00">Singapore</option>
                     <option value="+08:00">Taipei</option>
                     <option value="+08:00">Ulaan Bataar</option>
                     <option value="+08:00">Urumqi</option>
                     <option value="+09:00">Irkutsk</option>
                     <option value="+09:00">Seoul</option>
                     <option value="+09:00">Tokyo</option>
                     <option value="+09:30">Adelaide</option>
                     <option value="+09:30">Darwin</option>
                     <option value="+10:00">Yakutsk</option>
                     <option value="+10:00">Brisbane</option>
                     <option value="+10:00">Canberra</option>
                     <option value="+10:00">Guam</option>
                     <option value="+10:00">Hobart</option>
                     <option value="+10:00">Melbourne</option>
                     <option value="+10:00">Port Moresby</option>
                     <option value="+10:00">Sydney</option>
                     <option value="+11:00">Vladivostok</option>
                     <option value="+12:00">Magadan</option>
                     <option value="+12:00">Auckland</option>
                     <option value="+12:00">Fiji</option>
                  </select>
                  <div class="p_00961_formulario_personal_info_nombre_input"> <? echo $TEXTOS[60][2];?></div><br>
                  </div>

                  <div  style="display:none">
                  <input id="p_00961_formulario_personal_seting_google" class="p_00961_formulario_personal_info_input" value="" name="google">
                  <div class="p_00961_formulario_personal_info_nombre_input"> G+</div><br>
                  <input id="p_00961_formulario_personal_seting_facebook" class="p_00961_formulario_personal_info_input" value="" name="facebook">
                  <div class="p_00961_formulario_personal_info_nombre_input"> [ f]</div><br>
                  </div>

						<div id="p_00961_input_aviso_email" style="color:#FA40B7;font-family: helveticaneueroman;width:100%;float:right;text-align:center;margin:0.5em 0;display:none;"><? echo $TEXTOS[54][2];?></div><br>
                  <input class="p_00961_formulario_personal_info_input" type="submit" name="GUARDAR" value=" <? echo $TEXTOS[55][2];?>" ><br>

                  <div id="p_00961_personal_info_seting" class="p_00961_formulario_personal_info_input" style="height:2em"></div>

               </form>

              	<div
               	id=""
               	class="p_00961_formulario_personal_info"
               >
					</div>

            </div>
         </div>
      </div>

      <div id="p_00961_info_menu_banco" class="p_00961_info_menu_seccion p_00961_info_menu_seccion_click" onclick="p_01169_seleccionar_seccion(this);" style="display:none;">
         <img class="p_00961_info_menu_logo" name="boton_banco" src="<? echo ver_url("images/boton_banco.png","src"); ?>"></img>
         <div class="p_00961_info_menu_espacio_blanco"></div>
         <div class="p_00961_menu_texto" style="display:none;">
            <div id="p_00961_menu_contenedor_6" class="p_00961_contenedor_seccion">
               <div class="p_00961_menu_seccion_titulo"><? echo $TEXTOS[69][2]; ?></div>
               <form
                  id="p_00961_formulario_personal_banco"
                  method="post"
                  action="http://s.oxbridge.es/ox/estructura_web/codigo/alumno_v2/informacion personal 04_datos_bancarios_01_asp_01_modificar.asp"
                  target="p_00961_formulario_personal_banco_iframe"
                  style="font-size: 16px;"
               >
                  <input class="p_00961_formulario_personal_info_input" type="hidden" name="p_0001315_input_empresa_id" id="p_00961_input_empresa_id" value="0">
                  <input type="hidden" name="p_0001315_input_mensualidad_importe" id="p_00961_input_mensualidad_importe" value="0">
                  <script> p_00989_agregar_comprobacion_ses("p_00961_formulario_personal_banco","window.parent.document.getElementById('p_00961_formulario_personal_banco').submit();","p_00961_formulario_personal_banco_iframe");</script>
                  <input type="hidden" name="p_0001315_input_finalizador_js" id="p_0001315_input_finalizador_js_config" value="window.parent.document.getElementById('p_00961_personal_banco_respuesta').innerHTML=window.parent.p_00989_corrige_general(window.parent.TEXTOS[63].text);">

                  <div style="width:100%;font-family: helvetiacaneueroman;" align="left">IBAN*</div>
                  <div style="width:100%;font-family: helvetiacaneueroman;" align="left">
<!--                  <input placeholder="0000" class="p_00961_formulario_personal_info_iban" name="p_0001315_input_cc_iban_6" id="p_00961_input_cc_iban_6" maxlength="4" type="text" onkeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" value="">
                  <input placeholder="0000" class="p_00961_formulario_personal_info_iban" name="p_0001315_input_cc_iban_5" id="p_00961_input_cc_iban_5" maxlength="4" type="text" onkeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" value="">
                  <input placeholder="0000" class="p_00961_formulario_personal_info_iban" name="p_0001315_input_cc_iban_4" id="p_00961_input_cc_iban_4" maxlength="4" type="text" onkeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" value="">
                  <input placeholder="0000" class="p_00961_formulario_personal_info_iban" name="p_0001315_input_cc_iban_3" id="p_00961_input_cc_iban_3" maxlength="4" type="text" onkeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" value="">
                  <input placeholder="0000" class="p_00961_formulario_personal_info_iban" name="p_0001315_input_cc_iban_2" id="p_00961_input_cc_iban_2" maxlength="4" type="text" onkeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" value="">
                  <input placeholder="XX00" class="p_00961_formulario_personal_info_iban" name="p_0001315_input_cc_iban_1" id="p_00961_input_cc_iban_1" maxlength="4" onkeypress="if (event.keyCode < 48 || (event.keyCode > 57 &amp;&amp; event.keyCode < 65) || (event.keyCode > 90 &amp;&amp; event.keyCode < 97) || (event.keyCode > 90 &amp;&amp; event.keyCode < 95) || (event.keyCode > 95 &amp;&amp; event.keyCode < 97) || event.keyCode > 122) event.returnValue = false;" value="">

          -->
                    <input placeholder="XX00" class="p_00961_formulario_personal_info_iban" name="p_0001315_input_cc_iban_1" id="p_00961_input_cc_iban_1" maxlength="4" onkeypress="if (event.keyCode < 48 || (event.keyCode > 57 &amp;&amp; event.keyCode < 65) || (event.keyCode > 90 &amp;&amp; event.keyCode < 97) || (event.keyCode > 90 &amp;&amp; event.keyCode < 95) || (event.keyCode > 95 &amp;&amp; event.keyCode < 97) || event.keyCode > 122) event.returnValue = false;" value="">
                    <input placeholder="0000" class="p_00961_formulario_personal_info_iban" name="p_0001315_input_cc_iban_2" id="p_00961_input_cc_iban_2" maxlength="4" type="text" onkeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" value="">
                    <input placeholder="0000" class="p_00961_formulario_personal_info_iban" name="p_0001315_input_cc_iban_3" id="p_00961_input_cc_iban_3" maxlength="4" type="text" onkeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" value="">
                    <input placeholder="0000" class="p_00961_formulario_personal_info_iban" name="p_0001315_input_cc_iban_4" id="p_00961_input_cc_iban_4" maxlength="4" type="text" onkeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" value="">
                    <input placeholder="0000" class="p_00961_formulario_personal_info_iban" name="p_0001315_input_cc_iban_5" id="p_00961_input_cc_iban_5" maxlength="4" type="text" onkeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" value="">
                    <input placeholder="0000" class="p_00961_formulario_personal_info_iban" name="p_0001315_input_cc_iban_6" id="p_00961_input_cc_iban_6" maxlength="4" type="text" onkeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;" value="">
                  </div>

                  <div style="width:100%; text-align:left;clear:both; font-size:16px; padding-top:1em; ">
                     <? echo $TEXTOS[73][2]; ?>:
                  </div>

                  <div>
                    <div class="p_00961_formulario_personal_info_nombre_input"><? echo $TEXTOS[25][2]; ?>*</div>
                    <input class="p_00961_formulario_personal_info_input" name="p_0001315_input_cc_titular_nombre" id="p_00961_input_cc_titular_nombre" maxlength="50" type="text" value="">
                  </div>

                  <div>
                    <div class="p_00961_formulario_personal_info_nombre_input"><? echo $TEXTOS[44][2]; ?>*</div>
                    <input class="p_00961_formulario_personal_info_input" name="p_0001315_input_cc_titular_apellido_1" id="p_00961_input_cc_titular_apellido_1" maxlength="50" type="text" value="">
                  </div>
                  <div>
                    <div class="p_00961_formulario_personal_info_nombre_input"><? echo $TEXTOS[45][2]; ?>*</div>
                    <input class="p_00961_formulario_personal_info_input" name="p_0001315_input_cc_titular_apellido_2" id="p_00961_input_cc_titular_apellido_2" maxlength="50" type="text" value="">
                  </div>
                  <div>
                    <div class="p_00961_formulario_personal_info_nombre_input"><? echo $TEXTOS[50][2]; ?>*</div>
                    <input class="p_00961_formulario_personal_info_input" name="p_0001315_input_cc_titular_nif" id="p_00961_input_cc_titular_nif" maxlength="9" type="text" value="">
                  </div>

                  <div style="width:100%; text-align:center;clear:both; font-size:0.75em; padding-top:1em; ">
                     <input style="font-size:1.5em; height:1em; width:1em; float:left;" type="checkbox" id="p_00982_checkbox_aviso_de_baja_aceptado_id" >
                     <? echo $TEXTOS[97][2];?> <a style="text-decoration:underline; color:#000;" onclick="over_all('');document.getElementById('p_00990_over_all_contenedor').innerHTML=document.getElementById( TEXTOS[95].text.replace(/http.*:\/\/.*\.{0,1}oxbridge.es\/app\//g,'') ).innerHTML;"><? echo $TEXTOS[98][2];?></a> <? echo $TEXTOS[99][2];?>
                  </div>
                  <br>
                  <div style="width:100%; text-align:center;clear: both;">
                     <input style="font-size:1em" id="p_00982_boton_guardar_matricula_2" value="GUARDAR" type="submit">
                  </div>
                  <div id="p_00961_personal_banco_respuesta" class="p_00961_formulario_personal_info_input" style="height:2em"></div>
                  <br>
                  <div style="width:100%; text-align:center;clear: both;">Para poder guardar debes rellenar todos los datos obligatorios *. Gracias.</div>

				  <input name="p_0001315_input_alumno_id" type="hidden" value="<? echo $alumno_id;?>">
          <!--monica--><input name="p_0001315_input_dominio" type="hidden" value="app.oxbridge.es">

          <!--input name="p_0001315_input_alumno_nuevo" type="hidden" value="<? echo $alumno_id_nuevo;?>"-->
               </form>
               <iframe id="p_00961_formulario_personal_banco_iframe" name="p_00961_formulario_personal_banco_iframe" style="display:none;"></iframe>
            </div>
         </div>
      </div>

      <div id="p_00961_info_menu_logout" class="p_00961_info_menu_seccion p_00961_info_menu_seccion_click" onclick="p_01169_seleccionar_seccion(this)">
      	<img class="p_00961_info_menu_logo" name="boton_logout" src="<? echo ver_url("images/boton_logout.png","src"); ?>"></img>
         <div class="p_00961_info_menu_espacio_blanco"></div>
         <div class="p_00961_menu_texto" style="display:none;">
            <div id="p_00961_menu_contenedor_3" class="p_00961_contenedor_seccion">
				<span style="font-size: 1em; font-family:HelveticaNeueRoman;"><? echo $TEXTOS[75][2]?></span><br><br>
				<button class="p_00995_formulario_mail_input boton_normal" style="width:5em;font-size: 1em;" onclick="window.location='http://app.oxbridge.es/sesiones/sesion_04_comprobacion_04_php_06_otros_04_cerrar_sesion.php?p_0001327_get_sesion_id=<? echo $sesion_id;?>';">
					<? echo $TEXTOS[198][2];?>
				</button><br><br>
            	<span style="font-size: 0.9em; "><? echo $TEXTOS[76][2]?></span>
            </div>
         </div>
      </div>
   </div>
</div>
