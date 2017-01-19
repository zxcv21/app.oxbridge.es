<!--
-ID Pag: p_00955
-->
<?
//echo "<script>console.info('VER: ".$_GET['VER']."');console.log('LOC: ".$version_pagina."');</script>";
session_start();

if(!isset($_GET['idioma'])){
	$_GET['idioma']="ing";
}
?>
<!DOCTYPE html>
<head>
<!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-21037199-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- Google Analytics -->

	<!-- no aplicar meta a navegador: vanilla android,. -->
	<?
		$version="/iphone|ipod|ipad|windows/";
		$navegador=strtolower($_SERVER['HTTP_USER_AGENT']);

   	if( preg_match($version,$navegador)!=0){
			//?><meta id="viewport" name="viewport" content="width=device-width, initial-scale=0.37, maximum-scale=0.37, user-scalable=no"><?
		}
	?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>


	<title>app <? echo $_GET['VER'];?></title>
	<link rel="shortcut icon" type="image/x-icon" href="<? echo ver_url("images/favicon.ico","src"); ?>">
    <link rel="apple-touch-icon" href="<? echo ver_url("images/favicon.ico","src"); ?>">
	<? include ver_url("movil/p_00956_head.php","");?>
</head>

<body id="p_00955_body" style="
	margin:0;"
	onload="";
	onresize="reSize();"
>
<script>
	window.onload=function(){
		p_1003_guardar_horas_inicio_fin_clases();
		p_1003_comprobar_valoraciones_pendientes();
	}
</script>

<!--********************************************************************************-->

<style>
<? include ver_url("movil/p_0001853_estilos_firmas.php","");?>
</style>

<!--<div id="p_00995_firma_botones">
	 <img src="<? //echo ver_url("images/firma_borrar.png","src"); ?>" class="p_00995_boton_pad_firma" style=" margin-right:20%;" onclick="signaturePad.clear();" data-action="clear">
	 <img src="<? //echo ver_url("images/firma_ok.png","src"); ?>" class="p_00995_boton_pad_firma" onclick="signaturePadSave(event);" data-action="save">
</div>-->

<div id="p_00995_firma" style="display:none;">

 <div id="p_00995_alerta_firma_vacia">
	 <span>Debes firmar primero</span>
 </div>
 <div id="p_00995_ventana_alerta">
	 <span id="p_00995_alerta_firmas_pendientes_mensaje"></span>
	 <div id="p_00995_alerta_firmas_pendientes">
	 </div>
 </div>
 <div id="p_00995_firma_contenedor">
	 <!--<div id= "p_00955_loading_firmas">
		 <img class="img_cargando" src="<? //echo ver_url("images/loading.png","src"); ?>">
	 </div>-->

		 <!--<div id="p_00990_over_all_cerrar_mail" style="width:10px;" onclick="ocultar_mostrar('p_00995_firma');//ocultar_mostrar('p_00995_firma_botones')"></div>-->
		 <? include ver_url("movil/firma/pad/firma.php","");?>
		 <? //include ver_url("movil/firma/prueba/index.php","");?>
		 <div id="p_00995_fecha_firma">
			 <span>Firma del d&iacute;a: </span>
			 <span id="p_00995_fecha_firma_dia_hora"></span>
			 <span id="p_00995_firmas_restantes"></span>
			 <div id="p_00995_cerrar_firma" onClick="p_00989_comprobar_cerrar_firmas();"></div>
		 </div>
		 <div id="p_00995_firma_botones">
				<img src="<? echo ver_url("images/firma_borrar.png","src"); ?>" class="p_00995_boton_pad_firma" style=" margin-right:20%;" onclick="signaturePad.clear();" data-action="clear">
				<img src="<? echo ver_url("images/firma_ok.png","src"); ?>" class="p_00995_boton_pad_firma" onclick="signaturePadSave(event);" data-action="save">
				<div id="p_00989_salir_firmas_div" onclick="document.getElementById('p_00995_firma').style.display='none';p_00989_permitir_cerrar=true;">Salir de firmas</div>
		 </div>

			 <form enctype="multipart/form-data" id="firma" action="<? echo ver_url("p_01177_calse_iframe_datos.php","src");?>?consulta=firma&alumno_id=&dia_lectivo=" method="post">
			 <input type="hidden" id="firma_archivo" name="firma_archivo" />
			 <input type="hidden" id="firma_id" name="firma_id" value="AAAA_MM_DD_id_dia_lectivo_id_alumno" />
			 <input type="hidden" id="directirio_id" name="directirio_id" value="AAAA_MM" />

			 <input type="hidden" name="p_finalizador_js" value="">
			 <script>p_00989_agregar_comprobacion_ses("firma","window.parent.document.getElementById('firma').submit();","p_00995_firma_respuesta","p_0001326_");</script>
			 </form>
			 <iframe id="p_00995_firma_respuesta" style="display:none;"></iframe>
 </div>
</div>


	<!--********************************************************************************-->
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

    <script>
		function p_00955_cambiar_seleccion_nivel(ele,lvl)
		{
			for(i in document.getElementsByClassName("p_00986_div_nivel_seleccion_nivel_redondo_select"))
			{
				document.getElementsByClassName("p_00986_div_nivel_seleccion_nivel_redondo_select")[i].className="p_00986_div_nivel_seleccion_nivel_redondo";
			}
			ele.className="p_00986_div_nivel_seleccion_nivel_redondo_select";
			document.getElementById("p_00955_form_input_seleccion_nivel").value=lvl;
			document.getElementById("p_00955_form_input_seleccion_id").value=personal_datos_info.alumno_id;
		}

	</script>
    <iframe style="display:none;" id="p_00955_iframe_seleccion_nivel" name="p_00955_iframe_seleccion_nivel"></iframe>
    <div id="p_00955_div_seleccion_nivel" class="p_00986_div_nivel" style="display:none;">
        <div style="font-size:65px;text-align: left;margin: 50px;">
            <? echo $TEXTOS[149][2];?>
            <br>
            <form method="post" action="<? echo ver_url("p_01447_smiles_update_nivel.php","src");?>" id="p_00955_form_seleccion_nivel" target="p_00955_iframe_seleccion_nivel" onSubmit="event.preventDefault();">
                <input id="p_00955_form_seleccion_nivel_nombre" name="" style="border: 3px solid #1ABC9C;font-size: 65px;">
                <input type="submit" style="display:none">
                <input type="hidden" name="p_01447_post_nivel" id="p_00955_form_input_seleccion_nivel">
                <input type="hidden" name="p_01447_post_alumno_id" id="p_00955_form_input_seleccion_id">
            </form>

        </div>
        <p style="font-size:65px;text-align: left;margin: 90px 50px 30px 50px;"><? echo $TEXTOS[150][2];?></p>
        <div class="p_00986_div_nivel_seleccion">

        	<div class="p_00986_div_nivel_seleccion_nivel">
        		<div class="p_00986_div_nivel_seleccion_nivel_redondo" onClick="p_00955_cambiar_seleccion_nivel(this,'S1');">
                	<img style="height: 105%; width: 2px; vertical-align: middle;">S1
                </div>
                <p><? echo $TEXTOS[143][2];?></p>
            </div>

        	<div class="p_00986_div_nivel_seleccion_nivel">
        		<div class="p_00986_div_nivel_seleccion_nivel_redondo" onClick="p_00955_cambiar_seleccion_nivel(this,'P2');">
                	<img style="height: 105%; width: 2px; vertical-align: middle;">P2
                    </div>
                <p><? echo $TEXTOS[144][2];?></p>
            </div>

        	<div class="p_00986_div_nivel_seleccion_nivel">
        		<div class="p_00986_div_nivel_seleccion_nivel_redondo" onClick="p_00955_cambiar_seleccion_nivel(this,'P3');">
                	<img style="height: 105%; width: 2px; vertical-align: middle;">P3
                </div>
                <p><? echo $TEXTOS[145][2];?></p>
            </div>

        	<div class="p_00986_div_nivel_seleccion_nivel">
        		<div class="p_00986_div_nivel_seleccion_nivel_redondo" onClick="p_00955_cambiar_seleccion_nivel(this,'P4');">
                	<img style="height: 105%; width: 2px; vertical-align: middle;">P4
                </div>
                <p><? echo $TEXTOS[146][2];?></p>
            </div>

        	<div class="p_00986_div_nivel_seleccion_nivel">
        		<div class="p_00986_div_nivel_seleccion_nivel_redondo" onClick="p_00955_cambiar_seleccion_nivel(this,'P5');">
                	<img style="height: 105%; width: 2px; vertical-align: middle;">P5
                </div>
                <p><? echo $TEXTOS[147][2];?></p>
            </div>
            <br>
            <img
            	style=" height:150px;position: fixed;bottom: 50px;right: 50px;"
                src="http://app.oxbridge.es/app/images/ok_nivel.png"
                onClick="
                	document.getElementById('p_00955_form_seleccion_nivel').setAttribute('onSubmit','');
                    document.getElementById('p_00955_form_seleccion_nivel').submit();
                "
            >

        </div>
    </div>

	<div id="bloquear_giro" style="display:none;">
   	<br>
   	<span><? echo $TEXTOS[94][2];?></span><br><br>
      <img style="height: 40%;" src="<? echo ver_url("images/orientacion4.png","src"); ?>">
   </div>

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

    <? include ver_url('movil/p_0001851_clases_formulario_valoracion_semanal.php','');?>

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
			"&p_0001319_get_contenedor_id=p_00995_reloguin"
			<?
				if(isset($_GET['VER']))
				{
					echo '+"&p_0001319_get_dev='.$_GET['VER'].'"';
				}
			?>
		);
   </script>
<!--   <div id="p_00995_formulario_mail_contenedor" class="contenedores_formularios" style="display:none;">
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
				<? //echo $TEXTOS[28][2];?>:<br>

				<select class=p_00995_formulario_mail_input name="departamento" id="departamento">
				  <option value="1" selected><? //echo $TEXTOS[31][2];?></option>
				  <option value="2"><? //echo $TEXTOS[32][2];?></option>
				  <option value="3"><? //echo $TEXTOS[33][2];?></option>
				  <option value="4"><? //echo $TEXTOS[34][2];?></option>
				</select>
			</div>

			<div class=p_00995_formulario_mail_div style="width:95%">
				<? //echo $TEXTOS[29][2];?>:<br>
				<textarea id="p_00995_formulario_mail_text" style="padding:0.5em;" class=p_00995_formulario_mail_input name=comentarios cols=40 rows=10></textarea>
			</div>

			<div class="p_00995_formulario_mail_div" style="float:right;clear:both;">
				<img id="p_00995_formulario_mail_img_cargando" class="img_cargando" src="<? //echo ver_url("images/loading.png","src"); ?>" style=" height:2em;display:none">
            <input
					class="p_00995_formulario_mail_input boton_normal"
					name=button
					type=submit
					value="<? //echo $TEXTOS[22][2];?>"
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
			<input name="p_0_post_finalizador" type="hidden" value=
			"
				window.parent.document.getElementById('p_00995_formulario_mail_img_cargando').display='none';
				window.parent.ocultar_mostrar('p_00995_formulario_mail_contenedor');
			"
			>


		</form>
	</div> -->

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
    <!--  <iframe name="p_00995_formulario_valoracion_enviar" id="p_00995_formulario_valoracion_enviar" style="display:none;"></iframe>-->
      <iframe name="p_00995_formulario_envio_email" id="p_00995_formulario_envio_email" style="display:none;"></iframe>
    <!--  <form
      	id="p_00995_formulario_valoracion"
      	method="POST" target="p_00995_formulario_valoracion_enviar"
         action="http://app.oxbridge.es/actividades/clases_02_valoracion_01_php_01_modificar.php"
      >
         <div class="p_00995_formulario_mail_div">

			<div style=" font-size:1.5em; font-family:helveticaneueroman; display:none;">
                <input id="p_00995_input_valoracion_puntual" type="checkbox" checked
                	style="height:6em; width:6em; vertical-align:baseline" onChange="p_01003_valoracion_cambiar_cara();">
                <? echo $TEXTOS[154][2];?><br>

                <input  id="p_00995_input_valoracion_preparado"type="checkbox" checked
                	style="height:6em; width:6em; vertical-align:baseline" onChange="p_01003_valoracion_cambiar_cara();">
                <? echo $TEXTOS[155][2];?><br>

                <input id="p_00995_input_valoracion_sistema" type="checkbox" checked
                	style="height:6em; width:6em; vertical-align:baseline" onChange="p_01003_valoracion_cambiar_cara();">

                <? echo $TEXTOS[156][2];?><br>

                <div
                	style="
                        width: 100%;
                        text-align: center;
					"
                >
                    <img id="p_00995_valoracion_cara_0" src="<? //echo ver_url("images/smile_estado_0.png","src"); ?>" style="height:2em;">
                    <img id="p_00995_valoracion_cara_1" src="<? //echo ver_url("images/smile_estado_1.png","src"); ?>" style="height:2em;display:none;">
                    <img id="p_00995_valoracion_cara_2" src="<? //echo ver_url("images/smile_estado_2.png","src"); ?>" style="height:2em;display:none;">
                    <img id="p_00995_valoracion_cara_3" src="<? //echo ver_url("images/smile_estado_3.png","src"); ?>" style="height:2em;display:none;">
                </div>
            </div>

			<? echo $TEXTOS[29][2];?>:<br>
         	<textarea id="p_0001292_input_comentario" style="padding:0.5em;" class="p_00995_formulario_mail_input" name="p_0001292_input_comentario" cols="40" rows="10">
            </textarea>
         </div>

         <div class="p_00995_formulario_mail_div" style="float:right;clear:both;">

         	<input type="hidden" id="p_00995_input_valoracion_puntual" name="p_0001292_input_puntual" value="">
         	<input type="hidden" id="p_00995_input_valoracion_preparado" name="p_0001292_input_preparado" value="">
         	<input type="hidden" id="p_00995_input_valoracion_sistema" name="p_0001292_input_sistema" value="">

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
	-->
         </div>
		</form>
	</div>

   <div id="p_00995_tutorial" style="display:none;">
   </div>

	<div id="contenedor" style="display:none;">
			<!--//////////////////////////////////logotipo y email//////////////////////////////////-->
      <div id="head_oxbridge">
      	<img id="head_oxbridge_img" src="<? echo ver_url("images/OXBRIDGE-logo_4_bis.png","src"); ?>" onClick="">
				<?
					include ver_url("movil/p_00957_menu.php","");
				?>

		     <img id="head_oxbridge_beta_img" style="display:none;height:50%;position: absolute; z-index:-1;" src="<? echo ver_url("images/beta2.png","src"); ?>">
         <? if(isset($_GET['VER'])){ ?>
         	<span style="position: absolute;z-index: -1;bottom: -36px;font-size: 2em;text-transform: uppercase;padding: 0 0.5em;font-family: 'Arial Black', 'Arial Bold', Gadget, sans-serif;"><? echo $_GET['VER'];?></span>
         <? }?>
         <div id="p_00955_click_logout_idioma" style="display:none" onClick="ocultar_mostrar('p_00955_head_oxbridge_idiomas');ocultar_mostrar('p_00955_click_out_idioma');">
         </div>
         <div id="p_00955_head_oxbridge_idioma">
            <img id="p_00955_head_oxbridge_logout" src="<? echo ver_url("images/logout.png","src"); ?>" onclick="ocultar_mostrar('p_00995_formulario_logout_contenedor');" style="display:none;">
            <div id="p_00955_head_oxbridge_idiomas" style="display:none;">

            </div>
         </div>
         <!--<div style="height:100%; display:inline-block; float:right;">
            <img id="head_send_email_img" src="<? //echo ver_url("images/send_email.png","src"); ?>" style="display:none;position:absolute;">
            <img id="head_oxbridge_mail" src="<? //echo ver_url("images/boton_mail.png","src"); ?>"
               onClick="ocultar_mostrar('p_00995_formulario_mail_contenedor');">
         </div>-->
				 <div id="head_oxbridge_menu_apartados"></div>
      </div>
		<?
			include ver_url("movil/p_00959_claseweb.php","");
			include ver_url("movil/p_00960_clases.php","");
			include ver_url("movil/p_00958_horario.php","");
			include ver_url("movil/p_00961_personal.php","");
			include ver_url("movil/p_0001852_mail.php","");
			include ver_url("movil/smiles/p_00962_smile.php","");

		?>
   </div>




   <button
   	id="boton_test"
   	style="
		display:none;
		zindex:99999999;
		position:absolute;
		font-size:5em;
        bottom:50%;z
	"
      onClick="var a=new Image(); a.src='http://app.oxbridge.es/app/DEV/images/boton_key.png';"
   >TEST</button>


   <div id="p_01304_condiciones_esp.php"  style='tab-interval:35.4pt;display:none;'>
   	<? include ver_url("p_01304_condiciones_esp.php","");?>
   </div>
   <div id="p_01305_condiciones_cat.php"  style='tab-interval:35.4pt;display:none;'>
   	<? include ver_url("p_01305_condiciones_cat.php","");?>
   </div>
   <div id="p_01306_condiciones_eng.php"  style='tab-interval:35.4pt;display:none;'>
   	<? include ver_url("p_01306_condiciones_eng.php","");?>
   </div>

	<?
	//tripartita
	include ver_url("movil/p_01451_informacion_tripartita.php","");
	?>

	<div style="position:fixed; margin-top:200px; width:100%; margin-left: 43%; display:none">
    <img style="width:130px;" src="<? echo ver_url("images/loading.gif","src")?>">
    </div>

	</body>
	<? include ver_url("movil/p_00963_foot.php","");?>

</html>
