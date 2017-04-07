<div id="mail" class="contenedores_formularios" style="display:none;">
 <!--<div id="p_00990_over_all_cerrar_mail" onclick="ocultar_mostrar('p_00995_formulario_mail_contenedor');"></div>-->
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

   <div class=p_00995_formulario_mail_div >
     <? echo $TEXTOS[28][2];?>:<br>

     <select class=p_00995_formulario_mail_input name="departamento" id="departamento">
       <option value="1" selected><? echo $TEXTOS[31][2];?></option>
       <option value="2"><? echo $TEXTOS[32][2];?></option>
       <option value="3"><? echo $TEXTOS[33][2];?></option>
       <option value="4"><? echo $TEXTOS[34][2];?></option>
     </select>
   </div>

   <div class=p_00995_formulario_mail_div style="width:95%">
     <? echo $TEXTOS[29][2];?>:<br>
     <textarea id="p_00995_formulario_mail_text" style="padding:0.5em;" class=p_00995_formulario_mail_input name=comentarios cols=40 rows=10></textarea>
   </div>

   <div class="p_00995_formulario_mail_div" style="float:right;clear:both;">
     <img id="p_00995_formulario_mail_img_cargando" class="img_cargando" src="<? echo ver_url("images/loading.png","src"); ?>" style=" height:2em;display:none">
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
   <input name="p_0_post_finalizador" type="hidden" value=
   "
     window.parent.document.getElementById('p_00995_formulario_mail_img_cargando').display='none';
     window.parent.ocultar_mostrar('p_00995_formulario_mail_contenedor');
   "
   >


 </form>
</div>
<script>
document.getElementById("p_00995_formulario_mail_iframe").addEventListener('load',function(){
  document.getElementById("p_00995_formulario_mail_iframe").style.display='block';
  document.getElementById('p_00995_formulario_mail_img_cargando').style.display='none';
  setTimeout(function(){
    document.getElementById("p_00995_formulario_mail_iframe").style.display='none'; }, 4000);
});
</script>
