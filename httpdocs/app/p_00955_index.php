<!--
-ID Pag: p_00955
-->
<?
	if(!isset($_GET["tipo"]))$_GET["tipo"]="none";
?>
<!DOCTYPE html>

<head>
	<!-- no aplicar meta a navegador: vanilla android,. -->
	<?
		$buscar="/iphone|ipod|ipad|windows/";
		$navegador=strtolower($_SERVER['HTTP_USER_AGENT']);

   	if( preg_match($buscar,$navegador)!=0){
			?><meta id="viewport" name="viewport" content="width=device-width, initial-scale=0.37, maximum-scale=0.37, user-scalable=no"><?
		}
	?>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>app</title>
	<link rel="shortcut icon" href="../images/favicon.ico">

	<? include($_SERVER['DOCUMENT_ROOT']."/app/p_00956_head.php");?>

</head>

<body id="p_00955_body"
	style="
        margin:0;"
        onload="";
        onresize="reSize();
    "
>
	<style>
		#bloquear_giro{
			position:fixed;
			height:100%;
			width:100%;
			z-index:10005;
			background:#000;
			color:#fff;
			text-align: center;
			font-size: 2.5em;
			font-weight: 800;
		}
	</style>
	<div id="bloquear_giro" style="display:none;">
   	<br>
   	<span><? echo $TEXTOS[94][2];?></span><br><br>
      <img style="height: 40%;" src="http://app.oxbridge.es/app/images/orientacion4.png">
   </div>
	<?
		/*include("./p_01300_formulario_login.php");*///formulario loguin local
		include ($_SERVER['DOCUMENT_ROOT']."/app/p_00957_menu.php");
	?>
	<div id="p_00995_reloguin" class="p_01300_contenedor" style="display:none;">
	</div>

  	<div id="p_00995_smiles_mensage_proximamente" style="display:none;">
  	</div>

	<iframe id="p_00995_preguntas_insidencias_iframe" name="p_00995_preguntas_insidencias_iframe" style="display:none"; ></iframe>
	 <div id="p_00995_preguntas_insidencias_div" style="display:none;">
    	<form
        	method="post"
        	id="p_00995_preguntas_insidencias_formulario"
            target="p_00995_preguntas_insidencias_iframe"
        	action="http://app.oxbridge.es/estructura_web/codigo/alumno/smiles_01_preguntas_04_php_04_update_02_pregunta_incidentada.php"
        >
        	/!\ insidencia en la pregunta:<br><br>
        	<input id="p_00995_preguntas_insidencias_formulario_esta" type="radio" name="p_0001405_input_pregunta_id"> Esta pregunta<br>
        	<input id="p_00995_preguntas_insidencias_formulario_anteriro" type="radio" name="p_0001405_input_pregunta_id"> Pregunta anterior<br><br>
            <input type="hidden" name="p_0001405_input_alumno_id" value="<? echo $alumno_id;?>">
            comentario:<br><textarea name="p_0001405_input_comentario"></textarea>
            <input type="submit" value="Enviar" onClick="document.getElementById('p_00995_preguntas_insidencias_div').style.display='none';"
            	style="
                    height: auto;
                    width: auto;
                    font-size: 1em;
            	"
            >
            <button onClick="document.getElementById('p_00995_preguntas_insidencias_div').style.display='none';"
            	style="
                    height: auto;
                    width: auto;
                    font-size: 1em;
            	"
            >Cancelar</button>
        </form>
	</div>

<? if($_GET["tipo"]!="no-login"){?>
   <script>
		$("#p_00995_reloguin").load("http://app.oxbridge.es/sesiones/sesion_04_comprobacion_01_html_01_estructura.php"+
			"?p_0001319_get_sesion_id=<? echo $sesion_id;?>"+
			"&p_0001319_get_usuario_id=<? echo $alumno_id_nuevo;?>"+
			"&p_0001319_get_alumno_id=<? echo $alumno_id;?>"+
			"&p_0001319_get_usuario_email="+
			"&p_0001319_get_usuario_abreviado="+
			"&p_0001319_get_idioma_id="+
			"&p_0001319_get_idioma_abreviatura=<? echo $IDIOMA;?>"+
			"&p_0001319_get_area_id=3"+
			"&p_0001319_get_dispositivo_movil="+p_00989_DISPOSITIVO_MOVIL+
			"&p_0001319_get_contenedor_id=p_00995_reloguin"
		);
   </script>
<? }?>
   <div id="p_00995_formulario_mail_contenedor" class="contenedores_formularios" style="display:none;">
   	<div id="p_00990_over_all_cerrar_mail" onclick="ocultar_mostrar('p_00995_formulario_mail_contenedor');"></div>
		<iframe id="p_00995_formulario_mail_iframe" name="p_00995_formulario_mail_iframe" style="display:none;"></iframe>
		<form
			id="p_00995_formulario_mail"
			method="POST"
			action='http://app.oxbridge.es/inc/valida_form_contacta.php'
			target="p_00995_formulario_mail_iframe"
		>
         	<input id="p_00955_formulario_mail_input_nombre" class="p_00995_formulario_mail_input" name="nombre" type=hidden value="">
         	<input id="p_00955_formulario_mail_input_apellidos" class="p_00995_formulario_mail_input" name="apellidos" type=hidden value="">
         	<input id="p_00955_formulario_mail_input_email" class="p_00995_formulario_mail_input" name="form_email" type=hidden value="">
         	<input id="p_00955_formulario_mail_input_telefono" class="p_00995_formulario_mail_input" name="form_telefono" type=hidden value="">
         	<input id="p_00955_formulario_mail_input_empresa" class="p_00995_formulario_mail_input" name="nombre_empresa" type=hidden value="">

			<div class=p_00995_formulario_mail_div style="width:45%">
				<? echo $TEXTOS[28][2];?>:<br>

				<select class=p_00995_formulario_mail_input name="departamento" id="departamento">
				  <option value="1" selected><? echo $TEXTOS[31][2];?></option>
				  <option value="2"><? echo $TEXTOS[32][2];?></option>
				  <option value="3"><? echo $TEXTOS[33][2];?></option>
				  <option value="4"><? echo $TEXTOS[34][2];?></option>
				</select>
			</div>

			<div class=p_00995_formulario_mail_div>
				<? echo $TEXTOS[29][2];?>:<br>
				<textarea id="p_00995_formulario_mail_text" style="padding:0.5em;" class=p_00995_formulario_mail_input name=comentarios cols=40 rows=10></textarea>
			</div>

			<div class="p_00995_formulario_mail_div" style="float:right;clear:both;">
				<img id="p_00995_formulario_mail_img_cargando" class="img_cargando" src="http://app.oxbridge.es/app/images/loading.png" style=" height:2em;display:none">
            <input
					class="p_00995_formulario_mail_input boton_normal"
					name=button
					type=submit
					value="<? echo $TEXTOS[22][2];?>"
					onclick="
               	event.preventDefault();
						document.getElementById('p_00955_formulario_mail_input_nombre').value=personal_datos_info.nombre;
						document.getElementById('p_00955_formulario_mail_input_apellidos').value=personal_datos_info.apellido_1+' '+personal_datos_info.apellido_2;
						document.getElementById('p_00955_formulario_mail_input_email').value=personal_datos_info.email;
						document.getElementById('p_00955_formulario_mail_input_telefono').value=personal_datos_info.movil;
						document.getElementById('p_00955_formulario_mail_input_empresa').value='';
                  document.getElementById('p_00995_formulario_mail').submit();
						document.getElementById('p_00995_formulario_mail_text').value='';
                  document.getElementById('p_00995_formulario_mail_img_cargando').style.display='';

					"
				>
			</div>
		</form>
	</div>

   <div id="p_00995_formulario_logout_contenedor" align="center" class="contenedores_formularios" style="display:none;background-color: rgba(0,0,0,0.8);">
   	<div id="p_00990_over_all_cerrar_mail" onclick="ocultar_mostrar('p_00995_formulario_logout_contenedor');"></div>
      <span style="font-size:5em; font-family:HelveticaNeueRoman;"><? echo $TEXTOS[75][2];?></span><br><br><br>
     	<button class="p_00995_formulario_mail_input boton_normal" style="width:auto;font-size:5em" onClick="window.location='http://app.oxbridge.es/sesiones/sesion_04_comprobacion_04_php_06_otros_04_cerrar_sesion.php?p_0001327_get_sesion_id=<? echo $sesion_id;?>';">
			<? echo $TEXTOS[74][2];?>
      </button><br><br><br>
      <span style="font-size:4em; "><? echo $TEXTOS[76][2];?></span>
	</div>

   <div id="p_00995_formulario_valoracion_contenedor" class="contenedores_formularios" style="display:none;">
   	<div id="p_00990_over_all_cerrar_mail" onclick="ocultar_mostrar('p_00995_formulario_valoracion_contenedor');"></div>
      <iframe name="p_00995_formulario_valoracion_enviar" id="p_00995_formulario_valoracion_enviar" style="display:none;"></iframe>
      <iframe name="p_00995_formulario_envio_email" id="p_00995_formulario_envio_email" style="display:none;"></iframe>
      <form
      	id="p_00995_formulario_valoracion"
      	method="POST" target="p_00995_formulario_valoracion_enviar"
         action="http://app.oxbridge.es/actividades/clases_02_valoracion_01_php_01_modificar.php"
      >
         <div class="p_00995_formulario_mail_div">
				<? echo $TEXTOS[29][2];?>:<br>
         	<textarea id="p_0001292_input_comentario"  style="padding:0.5em;" class="p_00995_formulario_mail_input" name="p_0001292_input_comentario" cols="40" rows="10"></textarea>
         </div>
         <div class="p_00995_formulario_mail_div" style="float:right;clear:both;">

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

         	<input class="p_00995_formulario_mail_input" type="button" value="<? echo $TEXTOS[22][2];?>"
            	onclick="
               	ocultar_mostrar('p_00995_formulario_valoracion_contenedor');
                  p_01003_enviar_comentario();
                  p_01003_email_envio_comentario_profesor();
               "
            	style="
                  border: solid 0.1em #fff;
                  background-color: #555;
                  color: #fff;
                  font-size: 1.4em;
                  padding: 0 0.5em;
                  background-image: linear-gradient(to bottom, #bbb, #555);
				">
         </div>
		</form>
	</div>

   <div id="p_00995_tutorial" style="display:none;">
   </div>

	<div id="contenedor" >
    	<!--//////////////////////////////////logotipo y email//////////////////////////////////-->
      <div id="head_oxbridge">
		<img id="head_oxbridge_img" src="http://app.oxbridge.es/app/images/OXBRIDGE-logo_2.png" onClick="">
         <img id="head_oxbridge_beta_img" style="height:50%;position: absolute; z-index:-1;" src="http://app.oxbridge.es/app/images/beta2.png">
         <div id="p_00955_click_logout_idioma" style="display:none" onClick="ocultar_mostrar('p_00955_head_oxbridge_idiomas');ocultar_mostrar('p_00955_click_out_idioma');">
         </div>
         <div id="p_00955_head_oxbridge_idioma">
            <img id="p_00955_head_oxbridge_logout" src="../images/logout.png" onclick="ocultar_mostrar('p_00995_formulario_logout_contenedor');">
            <div id="p_00955_head_oxbridge_idiomas" style="display:none;">

            </div>
         </div>
         <div style="height:100%; display:inline-block; float:right;">
            <img id="head_send_email_img" src="http://app.oxbridge.es/app/images/send_email.png" style="display:none;position:absolute;">
            <img id="head_oxbridge_mail" src="http://app.oxbridge.es/app/images/boton_mail.png"
               onClick="ocultar_mostrar('p_00995_formulario_mail_contenedor');">
         </div>
			<div id="head_oxbridge_menu_apartados"></div>
      </div>
		<?
			include ver_url("p_00959_clase_web.php","");
			include ver_url("p_00960_clases.php","");
			include ver_url("p_00958_horario.php","");
			include ver_url("p_00961_personal.php","");
			include ver_url("movil/smiles/p_00962_smile.php","");
		?>
   </div>

<style>
   #p_00995_firma{
			height:25%;
			width:25%;
			position:absolute;
			-moz-transform:scale(4) translate( 37.5%,37.5% );
			-webkit-transform:scale(4) translate( 37.5%,37.5% );
			transform:scale(4) translate( 37.5%,37.5% );
			z-index:9999;
		}
	.p_00995_boton_pad_firma{
		border:solid 1px #888;
		font-size:1em;
		display:inline-block;
		margin: 0 1em;
		padding: 0.1em 0.5em 0.2em 0.5em;
		height:1.5em;
		box-shadow: 0.2em 0.2em #ccc;
		}
   </style>

   <div id="p_00995_firma_botones"
   	style="
      	display:none;
			position: fixed;
			z-index: 10000;
			font-size: 4em;
         width:100%;
         text-align:center;
         bottom:5%;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
  		"
   >
      <img src="http://app.oxbridge.es/app/images/firma_borrar.png" class="p_00995_boton_pad_firma" style=" margin-right:20%;" onclick="signaturePad.clear();" data-action="clear">
      <img src="http://app.oxbridge.es/app/images/firma_ok.png" class="p_00995_boton_pad_firma" onclick="signaturePadSave(event);" data-action="save">
   </div>

   <div id="p_00995_firma" style="display:none;">
   	<div id="p_00990_over_all_cerrar_mail" style="height:1.5em; width:1.5em;" onclick="ocultar_mostrar('p_00995_firma');ocultar_mostrar('p_00995_firma_botones')"></div>
   	<? include $_SERVER['DOCUMENT_ROOT']."/app/movil/firma/pad/firma.html";?>
      <form enctype="multipart/form-data" id="firma" action="<? echo ver_url("p_01177_calse_iframe_datos.php","src");?>?consulta=firma&alumno_id=&dia_lectivo=" method="post">
			<input type="hidden" id="firma_archivo" name="firma_archivo" />
			<input type="hidden" id="firma_id" name="firma_id" value="AAAA_MM_DD_id_dia_lectivo_id_alumno" />
			<input type="hidden" id="directirio_id" name="directirio_id" value="AAAA_MM" />

			<input type="hidden" name="p_finalizador_js" value="">
			<script>p_00989_agregar_comprobacion_ses("firma","window.parent.document.getElementById('firma').submit();","p_00995_firma_respuesta","p_0001326_");</script>
      </form>
      <iframe id="p_00995_firma_respuesta" style="display:none;"></iframe>
	</div>

   <button
   	id="boton_test"
   	style="
      	display:none;
         zindex:1000;
         position:absolute;
         font-size:5em;
      "
      onClick="alert(DIA_LEC);"
   >TEST</button>

   <div id="p_01304_condiciones_esp.php"  style='tab-interval:35.4pt;display:none;'>
   	<? include $_SERVER['DOCUMENT_ROOT']."/app/p_01304_condiciones_esp.php";?>
   </div>
   <div id="p_01305_condiciones_cat.php"  style='tab-interval:35.4pt;display:none;'>
   	<? include $_SERVER['DOCUMENT_ROOT']."/app/p_01305_condiciones_cat.php";?>
   </div>
   <div id="p_01306_condiciones_eng.php"  style='tab-interval:35.4pt;display:none;'>
   	<? include $_SERVER['DOCUMENT_ROOT']."/app/p_01306_condiciones_eng.php";?>
   </div>

   </body>
	<? include($_SERVER['DOCUMENT_ROOT']."/app/movil/p_00963_foot.php");?>

</html>
