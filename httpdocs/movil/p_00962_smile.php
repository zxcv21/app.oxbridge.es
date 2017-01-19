<!--
-Pag. ID: p_00962
-->

<div
	id="smile"
>
	<!---------------------------------*--CARRERA------------------------------------------------------>
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

   <div class="p_00962_separador">
      <div id="p_00962_start" class="p_00962_start" onclick="p_01171_boton_start();">
			<? echo $TEXTOS[59][2];?>
         <img src="../images/play.png" style="height:1em;position:absolute;right:0.2em;top:0.2em;">
      </div>
      <img id="p_00962_start_config" class="p_00962_start_config" src="../images/boton_gear2.png">
      <div id="p_00962_preguntas_contenedor" style="display:none;">
      	<? include('./smiles/p_01175_preguntas.php');?>
      </div>
	</div>

</div>
</script>
