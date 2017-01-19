<!--
Pag. ID: p_00947
-->
<div id="contenedor_menu" style="display:none">
  <div id="p_00987_menu_out" onMouseOver="mover_menu(true,0);"></div>
   <?
      foreach($MENU as $i)
      {
         //echo('<div id="'.$i.'" onclick="mover_menu(true,\''.$i.'\')">'.'</div>');
         //monica
         echo('<div id="'.$i.'" onMouseOver="mover_menu(false,0);" onclick="mover_menu(true,\''.$i.'\',true)"></div>');
      }
   ?>
</div>
