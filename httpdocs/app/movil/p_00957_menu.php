<!--
Pag. ID: p_00947
-->
<div id="contenedor_menu" style="display:none">
  <!--<div id="p_00987_menu_out" onMouseOver="mover_menu(true,0);"></div>-->
  <div id="p_00987_menu_out"></div>
   <?
      foreach($MENU as $i)
      {
         //echo('<div id="'.$i.'" onMouseOver="mover_menu(false,0);" onclick="mover_menu(true,\''.$i.'\',true)"></div>');
        echo('<div id="'.$i.'" class="p_00957_elemento_del_menu" onclick="mover_menu(true,\''.$i.'\',true)"></div>');
      }
   ?>
</div>
