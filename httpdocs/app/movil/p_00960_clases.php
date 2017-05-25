<!--
Pag. ID: p_00960
-->

<script>
//VARIABLES GLOBALES
var DIA_LEC="";
</script>
<div id="clases">
<!--////////////////////////////////////-H-E-A-D-///////////////////////////////////////////////////////-->
   <div id="p_00960_clases_head">
   	<div id="p_00960_clases_head_profe">
            <?
            $w=date(j);
            $dias_mes = date('t');
            $select=date(N, strtotime('-'.$hoy.'1 day'));
            $dia1=date(N, strtotime('-'.$hoy.'1 day'));
            $num_dia="";
            $meses= array("January","February","March","April","May","June","July","August","September","October","November","December");
            ?>
            <div id="p_00960_clases_head_fecha">
					<img src="<? echo ver_url("images/desplegable.png","src"); ?>" id="p_00960_clases_head_fecha_desplegable" onclick="calendario_imprime();cargar_tutorial(6);" title="ver m&aacute;s clases" style="height:13px">
               <span id="p_00960_clases_head_fecha_imprimir" onclick="calendario_imprime();cargar_tutorial(6);" content="telephone=no" title="<? echo $TEXTOS[189][2]; ?>">
                 <script>
                  var p_00960_fecha_actual= new Date();
                  document.getElementById('p_00960_clases_head_fecha_imprimir').innerHTML= ("0" + p_00960_fecha_actual.getDate()).slice(-2)+"/"+("0" + (p_00960_fecha_actual.getMonth()+1)).slice(-2)+"/"+p_00960_fecha_actual.getFullYear();
                </script>
                <!--  <?
                     //echo(date(d)); ?>/<?
                     //echo(date(m)); ?>/<?
                     //echo(date(Y));
                  ?>-->
               </span>
               <!--span id="p_00960_clases_head_horario_imprimir" onclick="ocultar_mostrar('p_00960_clases_head_horario')">
                  <?
                     //echo(date(h)); ?>:<?
                     //echo(date(i));
                  ?>
               </span-->

         <!--//////////////////////////////////IMPRECION DE HORARIO//////////////////////////////////-->
         <div id="p_00960_clases_head_horario"></div>
            </div>
         <div id="p_00960_clases_head_info">
         	<div id="p_00960_clases_head_info_titulo"><? echo $TEXTOS[100][2]; ?>:</div>
            <div id="p_00960_clases_head_nombre"></div>
            <div class="p_00960_clases_head_valoracion" id="p_00960_clases_head_valoracion" >

            <!--   <div onClick="formulario_valoracion(1);" id="p_00960_clases_head_valoracion_s1"></div>
               <div onClick="formulario_valoracion(2);" id="p_00960_clases_head_valoracion_s2"></div>
               <div onClick="formulario_valoracion(3);" id="p_00960_clases_head_valoracion_s3"></div>
               <div onClick="formulario_valoracion(4);" id="p_00960_clases_head_valoracion_s4"></div>
               <div onClick="formulario_valoracion(5);" id="p_00960_clases_head_valoracion_s5"></div> -->
               <div onClick="p_00994_valorar_desde_menu_clase(1);" id="p_00960_clases_head_valoracion_s1"></div>
                <div onClick="p_00994_valorar_desde_menu_clase(2);" id="p_00960_clases_head_valoracion_s2"></div>
                <div onClick="p_00994_valorar_desde_menu_clase(3);" id="p_00960_clases_head_valoracion_s3"></div>
                <div onClick="p_00994_valorar_desde_menu_clase(4);" id="p_00960_clases_head_valoracion_s4"></div>
                <div onClick="p_00994_valorar_desde_menu_clase(5);" id="p_00960_clases_head_valoracion_s5"></div>
               <img id="p_00960_imagen_comentario" class="p_00960_imagen_comentario" src="<? echo ver_url("images/comentario_110.png","src"); ?>"
               	onclick="ocultar_mostrar('p_00995_formulario_valoracion_contenedor');"
					>
            </div>
			</div>
         <img id="p_00960_clases_head_foto" onclick="p_01003_zoom_profesor();" src="<? echo ver_url("images/perfil.png","src"); ?>">
         <div id="p_00960_clases_head_id_profesor"></div>
         <img id="p_00960_clases_head_foto_lupa" onclick="p_01003_zoom_profesor();" src="<? echo ver_url("images/lupa.png","src"); ?>">
      </div>
   </div>

<!--//////////////////////////////////fin-HEAD////////////////////////////////////////////////////////////////////-->
<div style="width:100%;height: 136px;"></div>
<!--///////////////////////////////////////////////ACTIVIDADES///////////////////////////////////////////////-->

	<div id="p_00960_clases_actividades_titulo"
   	style="
		margin: 0 0 0.2em 8%;
		padding-top: 1em;
		font-size: 2.3em;
		color: #888;
		clear: both;
      visibility:hidden;
      display:none;
		"
   ><? //echo $TEXTOS[101][2];?></div>

   <div id="p_00960_clases_actividades" style="padding-right: 12px">
		<div id="p_00960_clases_actividades_box"></div>
	</div>

<!--//////////////////////////////////fin-ACTIVIDADES////////////////////////////////////////////////////////////////////-->
<!--///////////////////////////////////////////CONTENEDOR/////////////////////////////////////////////////////-->

   <div id="p_00960_clases_contenedor_actividad_overall">
     <div id="p_00960_clases_contenedor_actividad">
       <div id="p_00960_clases_contenedor_actividad_cabecera">
       </div>
       <div id="p_00960_clases_contenedor_actividad_contenido" class="avoid_ios_rubber_band">
       </div>
     </div>
   </div>
</div>

 <!--//////////////////////////IMPRECION DE CALENDARIO///////////////////////////-->
         <div id="p_00960_clases_head_calendario_out" style="display:none" onclick="ocultar_mostrar('p_00960_clases_head_calendario_out');ocultar_mostrar('p_00960_clases_head_calendario');p_00987_mostrar_menu_inferior();">
	         <div id="p_00960_clases_head_calendario_out_cerrar"></div>
         </div>
         <div id="p_00960_clases_head_calendario" style="display:none;">
           <div id="p_00960_clases_head_calendario_ir_ultima" onclick="ocultar_mostrar('p_00960_clases_head_calendario_out');ocultar_mostrar('p_00960_clases_head_calendario');p_00989_quitar_aviso_reservar('mostrar_ultima');document.getElementById('p_00960_clases_head').style.cssFloat='left';p_00987_mostrar_menu_inferior();">
             <p><? echo $TEXTOS[188][2];?></p>
           </div>
            <div id="p_00960_clases_head_calendario_mes">
               <button id="p_00960_clases_head_calendario_mes_botoni" onclick="set_calendario(-1,0,0);">&#60;</button>
               <div id="p_00960_clases_head_calendario_mes_select_mes" onclick="ocultar_mostrar('p_00960_clases_head_calendario_mes_select_mes_opciones');"></div>
               <button id="p_00960_clases_head_calendario_mes_botond" onclick="set_calendario(1,0,0);">&#62;</button>
               <div id="p_00960_clases_head_calendario_mes_select_mes_opciones">
                  <?
                     for($i=0;$i<12;$i++){
                        $j=$i+1;
                        echo("<div id='p_00960_clases_head_calendario_mes_select_mes_opciones_span' onclick='set_calendario(0,0,".$j."); ocultar_mostrar(\"p_00960_clases_head_calendario_mes_select_mes_opciones\"); '>".$meses[$i]."</div>");
                     }
                  ?>
               </div>
               <button id="p_00960_clases_head_calendario_mes_botoni" onclick="set_calendario(0,-1,0);">&#60;</button>
               <span id="p_00960_clases_head_calendario_mes_span_ano"></span>
               <button id="p_00960_clases_head_calendario_mes_botond" onclick="set_calendario(0,1,0);">&#62;</button>
            </div>
            <div id="p_00960_clases_head_calendario_contenedor">
               <div id="p_00960_clases_head_calendario_contenedor_semana">
                  <?
                     $dia_semanal= explode(",",$TEXTOS[15][2]);
                     foreach($dia_semanal as $i){ ?> <div id="p_00960_clases_head_calendario_contenedor_boxsemana"> <? echo($i);?> </div> <? }
                  ?>
               </div>
                  <?
                  for($i=1;$i<39;$i++)
                     echo('<div id="p_00960_clases_head_calendario_contenedor_box_'.$i.'" onclick="null" ></div>');
                  ?>
            </div>

         </div>
<script>
	//document.getElementById("p_00960_clases_actividades_titulo").innerHTML=TEXTOS[10].text;
</script>
