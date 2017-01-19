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
         <img id="p_00960_clases_head_foto">
         <div id="p_00960_clases_head_nombre">Raj Singh</div>
         <div class="p_00960_clases_head_valoracion" id="p_00960_clases_head_valoracion">
            <div onClick="formulario_valoracion(1);" id="p_00960_clases_head_valoracion_s1"></div>
            <div onClick="formulario_valoracion(2);" id="p_00960_clases_head_valoracion_s2"></div>
            <div onClick="formulario_valoracion(3);" id="p_00960_clases_head_valoracion_s3"></div>
            <div onClick="formulario_valoracion(4);" id="p_00960_clases_head_valoracion_s4"></div>
            <div onClick="formulario_valoracion(5);" id="p_00960_clases_head_valoracion_s5"></div>
         </div>
         <?
         $hoy=date(j);
			$dias_mes = date('t');
			$select=date(N, strtotime('-'.$hoy.'1 day'));
			$dia1=date(N, strtotime('-'.$hoy.'1 day'));
			$num_dia="";
			$meses= array("January","February","March","April","May","June","July","August","September","October","November","December");
			?>
         <div id="p_00960_clases_head_fecha" >
            <span id="p_00960_clases_head_fecha_imprimir" onclick="calendario_imprime();">
               <? 
                  echo(date(d)); ?> / <?
                  echo(date(m)); ?> / <?
                  echo(date(Y));
               ?>
         	</span> <img id="p_00960_clases_head_fecha_boton" src="./images/desplegable_30.png" onclick="calendario_imprime();">
            <span id="p_00960_clases_head_horario_imprimir" onclick="ocultar_mostrar('p_00960_clases_head_horario')">
            	<? 
                  echo(date(h)); ?> : <?
                  echo(date(i));
               ?>
            </span>
            <img id="p_00960_clases_head_horario_boton" src="./images/desplegable_30.png" onclick="ocultar_mostrar('p_00960_clases_head_horario')">
         </div>
         
      	<!--//////////////////////////IMPRECION DE CALENDARIO///////////////////////////-->
         <div id="p_00960_clases_head_calendario_out" onclick="ocultar_mostrar('p_00960_clases_head_calendario_out');ocultar_mostrar('p_00960_clases_head_calendario');"></div>
         <div id="p_00960_clases_head_calendario">
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
                     echo('<div id="p_00960_clases_head_calendario_contenedor_box_'.$i.'" ></div>');
                  ?>
            </div>
           
         </div>
         <!--//////////////////////////////////IMPRECION DE HORARIO//////////////////////////////////-->
         <div id="p_00960_clases_head_horario"></div>
         
      </div>
   </div>
   
<!--//////////////////////////////////fin-HEAD////////////////////////////////////////////////////////////////////--> 
<div style="width:100%;height: 136px;"></div>
<!--///////////////////////////////////////////////ACTIVIDADES///////////////////////////////////////////////-->

   <div id="p_00960_clases_actividades">
  		<div id="p_00960_clases_actividades_titulo"></div>
		<div id="p_00960_clases_actividades_box"></div>
	</div>
   
<!--//////////////////////////////////fin-ACTIVIDADES////////////////////////////////////////////////////////////////////-->
<!--///////////////////////////////////////////CONTENEDOR/////////////////////////////////////////////////////-->

   <div id="p_00960_clases_contenedor_actividad"></div>
</div>
<script>
	//document.getElementById("p_00960_clases_actividades_titulo").innerHTML=TEXTOS[10].text;
</script>
