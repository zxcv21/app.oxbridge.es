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
		$navegador=strtolower($_SERVER['https_USER_AGENT']);

   	if( preg_match($version,$navegador)!=0){
			//?><meta id="viewport" name="viewport" content="width=device-width, initial-scale=0.37, maximum-scale=0.37, user-scalable=no"><?
		}
	?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta https-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>


	<title>app <? echo $_GET['VER'];?></title>
		<link rel="shortcut icon" type="image/x-icon" href="<? echo ver_url("images/favicon.ico","src"); ?>">
	  <link rel="apple-touch-icon" href="<? echo ver_url("images/favicon.ico","src"); ?>">


	<? include ver_url("movil/p_00956_head.php","");?>
</head>

<body id="p_00955_body" style="
	margin:0;"
	onresize="reSize();"
>
<script>
	window.onload= p_00955_antes_inicio;

	function p_00955_antes_inicio(){
		if(!dia_lectivo)
			setTimeout(p_00955_antes_inicio, 1000);
		else{
			//if(!dia_lectivo[Object.keys(dia_lectivo)[0]].date_inicio)
				p_1003_guardar_horas_inicio_fin_clases();
			p_1003_comprobar_valoraciones_pendientes();
		}
	}
</script>
<div id="p_00955_div_img_cargando">
	<img id="p_00955_img_cargando" class="img_cargando" src="<? echo ver_url("images/loading.png","src"); ?>" >
</div>
<div id="p_00955_mensaje_usuario">
</div>
	<? /* if($_GET['VER']=="dev"){?>
		<a style="z-index:9999999999; position:absolute; top:0; left:0;" href="https://app.oxbridge.es/app/movil/?TIPO=no-login&DEV=<? echo $_GET['VER'];?>">
        	entrar sin login
        </a>
	<? }*/?>
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
				document.getElementById("p_00955_form_input_seleccion_nivel").value=lvl;
				document.getElementById("p_00955_form_input_seleccion_id").value=personal_datos_info.alumno_id;
				document.getElementById('p_00955_form_seleccion_nivel').setAttribute('onSubmit','');
				document.getElementById('p_00955_form_seleccion_nivel').submit();
				document.getElementById('p_00955_cargando_seleccion_nivel').style.display="block";
				personal_datos_info.nombre= document.getElementById("p_00955_form_seleccion_nivel_nombre").value
		}

	</script>
    <iframe style="display:none;" id="p_00955_iframe_seleccion_nivel" name="p_00955_iframe_seleccion_nivel"></iframe>
		<div id="p_00955_overall_seleccion_nivel" class="overall"  style="display:none;">
	    <div id="p_00955_div_seleccion_nivel" class="p_00986_div_nivel">
				<img id="p_00955_cargando_seleccion_nivel" class="img_cargando" src="<? echo ver_url("images/loading.png","src"); ?>" >
        <div id="p_00955_div_nombre_seleccion_nivel" style="font-size:34px;text-align: left;margin: 0 42px 20px;color: #1ABC9C;">
            <? echo $TEXTOS[149][2];?>
            <br>
            <form method="post" action="<? echo ver_url("p_01447_smiles_update_nivel.php","src");?>" id="p_00955_form_seleccion_nivel" target="p_00955_iframe_seleccion_nivel" onSubmit="event.preventDefault();">
                <input id="p_00955_form_seleccion_nivel_nombre" name="" style="border: 1px solid #1ABC9C;font-size: 18px;">
                <input type="submit" style="display:none">
                <input type="hidden" name="p_01447_post_nivel" id="p_00955_form_input_seleccion_nivel">
                <input type="hidden" name="p_01447_post_alumno_id" id="p_00955_form_input_seleccion_id">
            </form>

        </div>
        <p style="font-size:34px;text-align: left;margin: 0 50px 8px 42px;color:#1ABC9C;"><? echo $TEXTOS[150][2];?></p>
        <div id="p_00986_div_nivel_seleccion">

        	<div class="p_00986_div_nivel_seleccion_nivel">
        		<div class="p_00986_div_nivel_seleccion_nivel_redondo" onClick="p_00955_cambiar_seleccion_nivel(this,'S1');">
                	S1
                </div>
                <p><? echo $TEXTOS[143][2];?></p>
            </div>

        	<div class="p_00986_div_nivel_seleccion_nivel">
        		<div class="p_00986_div_nivel_seleccion_nivel_redondo" onClick="p_00955_cambiar_seleccion_nivel(this,'P2');">
                	P2
                    </div>
                <p><? echo $TEXTOS[144][2];?></p>
            </div>

        	<div class="p_00986_div_nivel_seleccion_nivel">
        		<div class="p_00986_div_nivel_seleccion_nivel_redondo" onClick="p_00955_cambiar_seleccion_nivel(this,'P3');">
                	P3
                </div>
                <p><? echo $TEXTOS[145][2];?></p>
            </div>

        	<div class="p_00986_div_nivel_seleccion_nivel">
        		<div class="p_00986_div_nivel_seleccion_nivel_redondo" onClick="p_00955_cambiar_seleccion_nivel(this,'P4');">
                	P4
                </div>
                <p><? echo $TEXTOS[146][2];?></p>
            </div>

        	<div class="p_00986_div_nivel_seleccion_nivel">
        		<div class="p_00986_div_nivel_seleccion_nivel_redondo" onClick="p_00955_cambiar_seleccion_nivel(this,'P5');">
                	P5
                </div>
                <p><? echo $TEXTOS[147][2];?></p>
            </div>
      <!--      <br>
            <img
            	style=" height:150px;position: fixed;bottom: 50px;right: 50px;"
                src="https://app.oxbridge.es/app/images/ok_nivel.png"
                onClick="
                	document.getElementById('p_00955_form_seleccion_nivel').setAttribute('onSubmit','');
                    document.getElementById('p_00955_form_seleccion_nivel').submit();
                "
            >
				-->
        </div>
	    </div>
		</div>

	<? //include ver_url('movil/p_0001854_pagina_bienvenida.php','');?>

	<div id="bloquear_giro" style="display:none;">
   	<br>
   	<span><? echo $TEXTOS[94][2];?></span><br><br>
      <img style="height: 40%;" src="<? echo ver_url("images/orientacion4.png","src"); ?>">
   </div>

	<div id="p_00995_reloguin" class="p_01300_contenedor" style="display:none;width:100%;height:100%;position:absolute;z-index:10;background-color:white;">
	</div>

	<div id="p_00995_smiles_mensage_proximamente" style="display:none;">
	</div>

	<iframe id="p_00995_preguntas_insidencias_iframe" name="p_00995_preguntas_insidencias_iframe" style="display:none"; ></iframe>
	<div id="p_00995_preguntas_insidencias_div" style="display:none;">
		<form
        	method="post"
        	id="p_00995_preguntas_insidencias_formulario"
            target="p_00995_preguntas_insidencias_iframe"
        	action="https://app.oxbridge.es/estructura_web/codigo/alumno/smiles_01_preguntas_04_php_04_update_02_pregunta_incidentada.php"
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
		$("#p_00995_reloguin").load("https://app.oxbridge.es/sesiones/sesion_04_comprobacion_01_html_01_estructura.php"+
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

   <div id="p_00995_formulario_logout_contenedor" align="center" class="contenedores_formularios" style="display:none;background-color: rgba(0,0,0,0.8);">
   	<div id="p_00990_over_all_cerrar_mail" onclick="ocultar_mostrar('p_00995_formulario_logout_contenedor');"></div>
      <span style="font-size:5em; font-family:HelveticaNeueRoman;"><? echo $TEXTOS[75][2];?></span><br><br><br>
     	<button class="p_00995_formulario_mail_input boton_normal" style="width:auto;font-size:5em" onClick="window.location='https://app.oxbridge.es/sesiones/sesion_04_comprobacion_04_php_06_otros_04_cerrar_sesion.php?p_0001327_get_sesion_id=<? echo $sesion_id;?>';">
			<? echo $TEXTOS[74][2];?>
      </button><br><br><br>
      <span style="font-size:4em; "><? echo $TEXTOS[76][2];?></span>
	</div>

   <div id="p_00995_formulario_valoracion_contenedor" class="contenedores_formularios" style="display:none;">
   	<div id="p_00990_over_all_cerrar_mail" onclick="ocultar_mostrar('p_00995_formulario_valoracion_contenedor');"></div>
    <!--  <iframe name="p_00995_formulario_valoracion_enviar" id="p_00995_formulario_valoracion_enviar" style="display:none;"></iframe>-->
      <iframe name="p_00995_formulario_envio_email" id="p_00995_formulario_envio_email" style="display:none;"></iframe>

         </div>
		</form>
	</div>

   <div id="p_00995_tutorial" style="display:none;">
   </div>
	 <div id="p_00955_div_iframe_videoconf">
		 <div id="p_00955_falsa_barra_menu_iframe_videoconf">
			 <div id="p_00955_div_boton_salir_iframe_videoconf">
			 	<img id="p_00955_img_boton_salir_iframe_videoconf" src="<? echo ver_url("images/log_out.png","src"); ?>" onclick="document.getElementById('p_00955_div_iframe_videoconf').style.display='none';document.getElementById('p_00955_iframe_videoconf').src=''">
			 </div>
		 </div>
		 <iframe id="p_00955_iframe_videoconf">
		 </iframe>
	 </div>

	<div id="contenedor" style="display:none;">
			<div id="p_00955_testeo"></div>
			<!--//////////////////////////////////logotipo y email//////////////////////////////////-->
      <div id="head_oxbridge">
      	<img id="head_oxbridge_img"  class= "logo_empresa" src="<? echo ver_url("images/OXBRIDGE-logo_4_bis.png","src"); ?>" onClick="">
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
			include ver_url('movil/p_0001854_pagina_bienvenida.php','');
			include ver_url("movil/p_00959_claseweb.php","");
			include ver_url("movil/p_00960_clases.php","");
			include ver_url("movil/p_00958_horario.php","");
			include ver_url("movil/p_00961_personal.php","");
			include ver_url("movil/p_0001852_mail.php","");
			include ver_url("movil/smiles/p_00962_smile.php","");

		?>
   </div>


	 <style>
		<? include ver_url("movil/p_0001853_estilos_firmas.php","");?>
   </style>

   <div id="p_00995_firma" style="display:none;">

		<div id="p_00995_alerta_firma_vacia">
			<span><? echo $TEXTOS[212][2];?></span>
		</div>
		<div id="p_00995_ventana_alerta">
			<div id="p_00995_cerrar_aviso_minimo" onclick="p_00989_cerrar_firmas_minimas();"></div>
			<span id="p_00995_alerta_firmas_pendientes_mensaje"></span>
			<div id="p_00995_alerta_firmas_pendientes">
			</div>
		</div>
		<div id="p_00995_firma_contenedor">

		   	<? include ver_url("movil/firma/pad/firma.php","");?>
				<div id="p_00995_fecha_firma">
					<span><? echo $TEXTOS[206][2];?> </span>
					<span id="p_00995_fecha_firma_dia_hora"></span>
					<span id="p_00995_firmas_restantes"></span>
					<div id="p_00995_cerrar_firma" onClick="p_00989_comprobar_cerrar_firmas();"></div>
				</div>
				<div id="p_00995_firma_botones">
		       <img src="<? echo ver_url("images/firma_borrar.png","src"); ?>" class="p_00995_boton_pad_firma" style=" margin-right:20%;" onclick="signaturePad.clear();" data-action="clear">
		       <img src="<? echo ver_url("images/firma_ok.png","src"); ?>" class="p_00995_boton_pad_firma" onclick="signaturePadSave(event);" data-action="save">
					 <div id="p_00989_salir_firmas_div" onclick="p_00989_permitir_cerrar=true;p_00989_cerrar_firmas();"><? echo $TEXTOS[213][2];?></div>
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

   <button
   	id="boton_test"
   	style="
		display:none;
		zindex:99999999;
		position:absolute;
		font-size:5em;
        bottom:50%;z
	"
      onClick="var a=new Image(); a.src='https://app.oxbridge.es/app/DEV/images/boton_key.png';"
   >TEST</button>

	 <style>
		 .WordSection1 .MsoNormal{
		 	font-size: 14px !important;
		 }
		 .WordSection1 .MsoNormal span{
			font-size: 14px !important;
		 }
		 .WordSection1 .MsoTitle{
			font-size: 16px;
		 }
		 .WordSection1 .MsoTitleCxSpLast span{
		 	font-size: 20px;
		 }
	 </style>
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
