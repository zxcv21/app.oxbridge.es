<!--
-Pag. ID: p_00962
-->
<div id="p_01171_mostrar_ventana_option" style="display:none; background-color: rgba(0, 0, 0, 0.8);">
<div id="p_00990_over_all_cerrar_mail" onclick="document.getElementById('p_01171_mostrar_ventana_option').style.display='none';"></div>
	<form action="formulario_option_type_ask" id="style_letra_ventana_grande" style="text-align: justify;">
		  <input onclick="comprueba_chechekd_marcado(this.id);" type="checkbox" id="option_all" name="type_ask" checked value="all" style="width: 8em;height: 4em;">All<br>
		  <input onclick="comprueba_chechekd_marcado(this.id);" type="checkbox" id="option_vocabulary" name="type_ask" checked value="vocabulary" style="width: 8em;height: 4em;"><? echo $TEXTOS[96][2];?><br>
		  <input onclick="comprueba_chechekd_marcado(this.id);" type="checkbox" id="option_structure" name="type_ask" checked value="structure" style="width: 8em;height: 4em;">Structure<br>
		  <input onclick="comprueba_chechekd_marcado(this.id);" type="checkbox" id="option_trinity" name="type_ask" checked value="trinity" style="width: 8em;height: 4em;">Trinity<br>
	</form>
</div>
<div
	id="smile"
   style="margin-top:14%;"
>
	<!-----------------------------------CARRERA------------------------------------------------------>
   <div id="p_00962_carrera">
   	<img class="p_00962_bandera_start" src="../images/bandera_start.png">
   	<img class="p_00962_bandera_end" src="../images/bandera_end.png">
      <div id="p_00962_carrera_pista">
      	<div id="p_00962_yo">
         	<div id="p_00962_yo_posicion"></div>
         	<img id="p_00962_yo_img" src="../images/yo.png"><br>
            <img class="p_00962_yo_puntero" src="../images/yo_puntero.png">
            <div id="p_00962_yo_kilometros">
            	<div id="p_00962_yo_kilometros_actual">9999Km</div>
            	<div id="p_00962_tras_kilometros" class="p_00962_kilometros_cercanos">9999</div>
               <div id="p_00962_delante_kilometros" class="p_00962_kilometros_cercanos">9999</div>
            </div>
         </div>
      </div>
   </div>
   
   <div class="p_00962_separador" align="center">
   	<div id="p_00962_grafico_progreso">
      	<div id="p_00962_grafico_progreso_tnt"></div>
      	<div id="p_00962_grafico_progreso_estructura"></div>
      	<div id="p_00962_grafico_progreso_bocabulario"></div>
      </div>
      <div id="p_00962_start" class="p_00962_start" onclick="p_01171_boton_start();">
			<? echo $TEXTOS[59][2];?>
         <img src="../images/play.png" style="height:1em; vertical-align:top;right:0.2em;top:0.2em;">
      </div>
     <br> <img id="p_00962_start_config" class="p_00962_start_config" src="../images/boton_gear2.png" onclick="document.getElementById('p_01171_mostrar_ventana_option').style.display='inline';">
      <div id="p_00962_preguntas_contenedor" style="display:none;">
      	<? include('./smiles/p_01175_preguntas.php');?>
      </div>
	</div>
   
</div>
</script>