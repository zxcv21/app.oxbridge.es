<style>
#p_0001854_pag_bienvenida_div{
  position: absolute;
  width: 100%;
  height: 100%;
  background-color: white;
  display: none;
  z-index: 2;
}
#p_0001854_pag_bienvenida_div img{
  height: 100%;
}
#p_0001854_pag_bienvenida_div>div{
  margin: auto;
  vertical-align: middle;
  width: 822px;
}
#p_0001854_pag_bienvenida_div>div>div{
  height: 250px;
  width: 250px;
  margin: 10px;
  display: inline-block;

}

#p_0001854_material{
  height: 250px;
  width: 250px;
}
#p_0001854_claseweb{
}
#p_0001854_game{
}
#p_0001854_schedule{
}
#p_0001854_personal_info{
}
#p_0001854_contact{
}

</style>
<script>
function p_0001854_mostrar_pagina_bienvenida(){
  document.getElementById("p_0001854_pag_bienvenida_div").style.display="block";
}
</script>


<div id="p_0001854_pag_bienvenida_div">
  <div>
    <div id="p_0001854_material">
      <img src="<? echo ver_url("images/material.png","src");?>">
    </div>
    <div id="p_0001854_claseweb">
      <img src="<? echo ver_url("images/claseweb.png","src");?>">
    </div>
    <div id="p_0001854_game">
      <img src="<? echo ver_url("images/game.png","src");?>">
    </div>
    <div id="p_0001854_schedule">
      <img src="<? echo ver_url("images/schedule.png","src");?>">
    </div>
    <div id="p_0001854_personal_info">
      <img src="<? echo ver_url("images/personal_info.png","src");?>">
    </div>
    <div id="p_0001854_contact">
      <img src="<? echo ver_url("images/contact.png","src");?>">
    </div>
  </div>
</div>
