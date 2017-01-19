<!--
Pag ID: p_01300
-->
<style>
	.p_01300_contenedor{
		position:absolute;
		height: 100%;
		width: 100%;
		z-index: 9999;
	}
	
	.p_01300_logo{
		height: 22%;
		background-color: #9B1B76;
		text-align: center;
	}
	.p_01300_logo_imagen{
		height: 100%;
	}
	.p_01300_logo_adorno{
		position: absolute;
		top: 21.5%;
		left: 5%;
		height: 3.5%;
	}

	.p_01300_login{
		height: 53%;
		background-color: #fff;
	}
		.p_01300_login input{
		}

	.p_01300_login_social{
		height: 25%;
		background-color: #666;
		font-size: 2em;
		
	}
	.p_01300_login_social_or{
		position: absolute;
		left: 45%;
		bottom: 21%;
		height: 3%;
		width: 5%;
		background-image:url(<? echo ver_url("images/or_medialuna.png","src"); ?>);
		background-size:100%;
		background-repeat:no-repeat;
		padding: 1em;
		border-radius: 100%;
		text-align: center;
	}
	
	.p_01300_login_formulario{
		font-size:3em;
		height:100%;
		text-align:center;
	}
		.p_01300_login_formulario input{
			font-size: 1em;
			text-align: center;
			border: solid 0.05em #ccc;
			border-radius: 0.6em;
			padding-bottom: 0.3em;
			max-width: 95%;
			height:1.9em;
			margin-bottom: 0.7em;
			
		}
		.p_01300_login_formulario input:focus{
			outline:0px;
			border-color:#9B1B76;
		}
	.p_01300_login_boton{
		color: #fff;
		padding: 0.3em 1em 0.1em 1em;
		font-size: 1.3em;
		box-shadow: 0.2em 0.2em 0.5em 0.01em #888;
		border-radius: 0.3em !important;
		border:0 !important;
		font-family:HelveticaNeueRoman;
	}
	
	.p_01300_login_input_img{
		position: absolute;
		height: 1em;
		padding: 0.6em 0 0 0.6em;
		opacity:0.5;
	}
	
</style>

<div id="p_00995_reloguin" class="p_01300_contenedor" style="display:none;" >

	<div class="p_01300_logo">
   	<div style="height: 30%;"></div>
   	<div style="height: 40%;"><img class="p_01300_logo_imagen" src="<? echo ver_url("images/OXBRIDGE-logo_3.png","src"); ?>"> </div>
      <img class="p_01300_logo_adorno" src="<? echo ver_url("images/login_adorno_1.png","src"); ?>">
   </div>
   
   <div id="p_01300_login" aling="center" class="p_01300_login" >
   	<form
			action="http://s.oxbridge.es/ox/estructura_web/codigo/sesiones/sesion_03_pedir_contrasenya_01_asp_01_select_01_comprobar.asp"
			target="p_00995_iframe_reloguin"
			method="post"
         class="p_01300_login_formulario"
         id="p_01300_login_form"
		>
      	<br>
			<img class="p_01300_login_input_img" src="<? echo ver_url("images/login_email.png","src"); ?>"><input id="p_00995_reloguin_usuario" type="text" name="p_0001299_input_usuario" value=""  style="width: 13em;" placeholder="<? echo $TEXTOS[68][2];?>" onkeydown="p_01300_ancho_input(this,13);" onchange="p_01300_ancho_input(this,13);"><br>
			<img class="p_01300_login_input_img" src="<? echo ver_url("images/login_pass.png","src"); ?>" style="padding: 0.5em 0 0 0.6em;height: 1.3em;margin-left: 0.2em;"><input id="p_00995_reloguin_pass" type="password" name="p_0001299_input_contrasenya" value="" style="margin-bottom: 1.5em;width: 13em;" placeholder="<? echo $TEXTOS[40][2];?>" ><br>
			<span style="background: #9B1B76;" class="p_01300_login_boton" name="" onclick="ocultar_mostrar('p_00995_reloguin');"><? echo $TEXTOS[61][2];?></span><br>
         
         <div style="margin:1em 0 1.8em 0;display: inline-block;border-bottom: solid #bbb;font-size: 0.85em;" onclick="ocultar_mostrar('p_01300_login_recover','0');ocultar_mostrar('p_01300_login','0');"><? echo $TEXTOS[65][2];?></div><br>
         
         <span class="p_01300_login_boton" style="font-size: 1em;padding:0.3em 1em 0.1em 1em; border-radius: 1em !important; background:#92A19B;" onclick="this.event.preventDefault();" ><? echo $TEXTOS[66][2];?></span>
         
         <input type="hidden" id="p_00995_reloguin_funcion" name="" value="">
			<input type="hidden" id="p_00995_input_form_reloguin_sesion_id" name="p_0001299_input_sesion_id" value="">
			<input type="hidden" id="p_00995_input_form_reloguin_sesion_uid" name="p_0001299_input_sesion_uid" value="">
			<input type="hidden" id="p_00995_input_form_reloguin_area_id" name="p_0001299_input_area_id" value="3">
			<input type="hidden" id="p_00995_input_form_reloguin_sentencia_js" name="p_0001299_input_disparador_js" value="">
			<input type="hidden" id="p_00995_input_form_reloguin_comprobar_contrasenya" name="p_0001299_input_comprobar_contrasenya" value="si">
         <input type="hidden" id="p_00995_input_form_reloguin_id_div_verificar_sesion" name="p_0001299_input_id_div_verificar_sesion" value="p_00995_reloguin">
         <input type="hidden" id="p_00995_input_form_reloguin_id_input_relogin_funcion" name="p_0001299_input_id_input_relogin_funcion" value="p_00995_reloguin_funcion">
         <input type="hidden" id="p_00995_input_form_reloguin_id_input_relogin_usuario" name="p_0001299_input_id_input_relogin_usuario" value="p_00995_reloguin_usuario">
         <input type="hidden" id="p_00995_input_form_reloguin_id_input_relogin_contrasenya" name="p_0001299_input_id_input_relogin_contrasenya" value="p_00995_reloguin_pass">
		</form>
		<iframe id="p_00995_iframe_reloguin" name="p_00995_iframe_reloguin" style="display: none"></iframe>
   
   </div>
   
   <div id="p_01300_login_recover" class="p_01300_login" style="display:none">
   	<form
			action="http://s.oxbridge.es/ox/principal/inc_verificar_usuario_envio_contrasenya_previo_TEFL.asp"
			target="p_00995_iframe_reloguin_recover"
			method="post"
         class="p_01300_login_formulario"
         id="p_01300_login_recover"
		>
      	<br>
			<img class="p_01300_login_input_img" style="margin-top: 18%;" src="<? echo ver_url("images/login_email.png","src"); ?>">
         <input id="p_00995_reloguin_usuario" style="margin-top: 18%;width: 13em;" type="text" name="email" value="" placeholder="<? echo $TEXTOS[68][2];?>" onkeydown="p_01300_ancho_input(this,13);" onchange="p_01300_ancho_input(this,13);"><br><br>
         
         <input type="submit" class="p_01300_login_boton" style="background-color:#92A19B;" value="<? echo $TEXTOS[70][2];?>">
         
         <br><br><a onclick="ocultar_mostrar('p_01300_login_recover','0');ocultar_mostrar('p_01300_login','0');"><? echo $TEXTOS[71][2];?></a>
         
         <input type="hidden" id="p_00995_reloguin_funcion" name="" value="">
			<input type="hidden" id="p_00995_input_form_reloguin_sesion_id" name="p_0001299_input_sesion_id" value="">
			<input type="hidden" id="p_00995_input_form_reloguin_sesion_uid" name="p_0001299_input_sesion_uid" value="">
			<input type="hidden" id="p_00995_input_form_reloguin_area_id" name="p_0001299_input_area_id" value="3">
			<input type="hidden" id="p_00995_input_form_reloguin_sentencia_js" name="p_0001299_input_disparador_js" value="">
			<input type="hidden" id="p_00995_input_form_reloguin_comprobar_contrasenya" name="p_0001299_input_comprobar_contrasenya" value="si">
         <input type="hidden" id="p_00995_input_form_reloguin_id_div_verificar_sesion" name="p_0001299_input_id_div_verificar_sesion" value="p_00995_reloguin">
         <input type="hidden" id="p_00995_input_form_reloguin_id_input_relogin_funcion" name="p_0001299_input_id_input_relogin_funcion" value="p_00995_reloguin_funcion">
         <input type="hidden" id="p_00995_input_form_reloguin_id_input_relogin_usuario" name="p_0001299_input_id_input_relogin_usuario" value="p_00995_reloguin_usuario">
         <input type="hidden" id="p_00995_input_form_reloguin_id_input_relogin_contrasenya" name="p_0001299_input_id_input_relogin_contrasenya" value="p_00995_reloguin_pass">
		</form>
		<iframe id="p_00995_iframe_reloguin_recover" name="p_00995_iframe_reloguin_recover" style="display: none"></iframe>
   
   </div>
   
   <div class="p_01300_login_social">
   	<div class="p_01300_login_social_or"><? /* echo $TEXTOS[67][2]*/ ?></div>
      
      
  
   </div>
</div>

<script>
function p_01300_ancho_input(ele,minimo){
	if(typeof minimo=="undefined") minimo=13;
	
	if(ele.value.length>minimo){
		ele.style.width=(Math.round((ele.value.length-minimo)/2)+minimo)+"em";
	}else{
		ele.style.width=minimo+"em";
	}
}
</script>

</body>
</html>