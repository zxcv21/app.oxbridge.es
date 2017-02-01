<style>
#p_0001854_pag_bienvenida_div{
  position: fixed;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: white;
  opacity: 1;
  display: none;
  z-index: 999;
  -webkit-transition: 2s;
  transition: 2s;
  overflow:auto;
}
#p_0001854_pag_bienvenida_div>div>img{
  width: 100%;
}
#p_0001854_logo{
  position: absolute;
  right: 0;
  top: 0;
  height: 65px;
  margin: 5px;
}
#p_0001854_pag_bienvenida_div>div{
  height: 71px;
  width: 71px;
  cursor: pointer;
  opacity: 1;
  -webkit-transition: 2s;
  transition: 2s;
  position: absolute;
  border-radius: 10px;
  text-align: center;
}
#p_0001854_pag_bienvenida_div>div:hover{
  opacity: 0.6;
}

#p_0001854_clases{
  top: 6px;
  left: 5px;
}
#p_0001854_claseweb{
  top:6px;
  left: 11px;
  z-index: 2;
}
#p_0001854_smile{
  top: 6px;
  left: 17px;
  z-index: 3;
}
#p_0001854_horario{
  top: 6px;
  left: 23px;
  z-index: 4;
}
#p_0001854_personal{
  top: 6px;
  left: 29px;
  z-index: 5;
}
#p_0001854_mail{
  top: 6px;
  left: 35px;
  z-index: 6;
}

#p_0001854_pag_bienvenida_div p{
  text-transform: capitalize;
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    margin-bottom: 11%;
    color: white;
    font-size: 20px;
    padding-right: 10px;
}
@keyframes animacion_icono_menu {
  0%{
    transform: rotate(0deg);
  }
  100%{
    transform: rotate(720deg);
  }
}
</style>


<div id="p_0001854_pag_bienvenida_div">
    <img id="p_0001854_logo" class= "logo_empresa" <img id="head_oxbridge_img" src="<? echo ver_url("images/OXBRIDGE-logo_4_bis.png","src"); ?>">
    <div id="p_0001854_clases" onclick="p_0001854_animar_icono_menu(this);" class="p_0001854_animar_icono">
      <img src="<? echo ver_url("images/material.png","src");?>">
      <p>material</p>
    </div>
    <div id="p_0001854_claseweb"onclick="p_0001854_animar_icono_menu(this);" class="p_0001854_animar_icono">
      <img src="<? echo ver_url("images/claseweb.png","src");?>">
      <p>web class</p>
    </div>
    <div id="p_0001854_smile" onclick="p_0001854_animar_icono_menu(this);" class="p_0001854_animar_icono">
      <img src="<? echo ver_url("images/game.png","src");?>">
      <p>game</p>
    </div>
    <div id="p_0001854_horario" onclick="p_0001854_animar_icono_menu(this);" class="p_0001854_animar_icono">
      <img src="<? echo ver_url("images/schedule.png","src");?>">
      <p>schedule</p>
    </div>
    <div id="p_0001854_personal" onclick="p_0001854_animar_icono_menu(this);" class="p_0001854_animar_icono">
      <img src="<? echo ver_url("images/personal_info.png","src");?>">
      <p>personal info</p>
    </div>
    <div id="p_0001854_mail" onclick="p_0001854_animar_icono_menu(this);" class="p_0001854_animar_icono">
      <img src="<? echo ver_url("images/contact.png","src");?>">
      <p>contact</p>
    </div>
</div>

<script>

function p_0001854_mostrar_pagina_bienvenida(){
  document.getElementById("p_0001854_pag_bienvenida_div").style.display="block";
}

function p_0001854_printar_cuadrados() {

  var p_0001854_cuadrado= p_0001854_calcular_lado_cuadrado();//250;
  var p_0001854_cuadrado_mitad= p_0001854_cuadrado/2;

  var p_0001854_iconos= document.querySelectorAll(".p_0001854_animar_icono");
  for (i = 0; i < p_0001854_iconos.length; i++) {
    p_0001854_iconos[i].style.width= p_0001854_cuadrado+"px";
    p_0001854_iconos[i].style.height= p_0001854_cuadrado+"px";
  }

  var p_0001854_margen= p_0001854_cuadrado/10;
  var p_0001854_margen_mitad= p_0001854_margen/2;
  var p_0001854_margen_logo= 75;
  var p_0001854_inicio_vertical;

  if(window.innerWidth>window.innerHeight){
    p_0001854_margen= p_0001854_cuadrado/8;//30;
    p_0001854_margen_mitad= p_0001854_margen/2;
    p_0001854_inicio_vertical= (window.innerHeight/2)-(p_0001854_cuadrado+p_0001854_margen_mitad);

    if(p_0001854_inicio_vertical<p_0001854_margen_logo)
      p_0001854_inicio_vertical= p_0001854_margen_logo;

    document.getElementById("p_0001854_clases").style.left= ((window.innerWidth/2)-(p_0001854_cuadrado+p_0001854_cuadrado_mitad+p_0001854_margen))+"px";
    document.getElementById("p_0001854_clases").style.top= p_0001854_inicio_vertical+"px";

    document.getElementById("p_0001854_claseweb").style.left= ((window.innerWidth/2)-(p_0001854_cuadrado_mitad))+"px";
    document.getElementById("p_0001854_claseweb").style.top= p_0001854_inicio_vertical+"px";

    document.getElementById("p_0001854_smile").style.left= ((window.innerWidth/2)+(p_0001854_cuadrado_mitad+p_0001854_margen))+"px";
    document.getElementById("p_0001854_smile").style.top= p_0001854_inicio_vertical+"px";

    document.getElementById("p_0001854_horario").style.left= ((window.innerWidth/2)-(p_0001854_cuadrado+p_0001854_cuadrado_mitad+p_0001854_margen))+"px";
    document.getElementById("p_0001854_horario").style.top= (p_0001854_inicio_vertical+p_0001854_cuadrado+p_0001854_margen)+"px";

    document.getElementById("p_0001854_personal").style.left= ((window.innerWidth/2)-(p_0001854_cuadrado_mitad))+"px";
    document.getElementById("p_0001854_personal").style.top= (p_0001854_inicio_vertical+p_0001854_cuadrado+p_0001854_margen)+"px";

    document.getElementById("p_0001854_mail").style.left= ((window.innerWidth/2)+(p_0001854_cuadrado_mitad+p_0001854_margen))+"px";
    document.getElementById("p_0001854_mail").style.top= (p_0001854_inicio_vertical+p_0001854_cuadrado+p_0001854_margen)+"px";

  }
  else{
    p_0001854_margen= p_0001854_cuadrado/10;
    p_0001854_margen_mitad= p_0001854_margen/2;
    p_0001854_inicio_vertical= (window.innerHeight/2)-(p_0001854_cuadrado+p_0001854_cuadrado_mitad+p_0001854_margen);

    if(p_0001854_inicio_vertical<p_0001854_margen_logo)
      p_0001854_inicio_vertical= p_0001854_margen_logo;

    document.getElementById("p_0001854_clases").style.left= ((window.innerWidth/2)-(p_0001854_cuadrado+p_0001854_margen_mitad))+"px";
    document.getElementById("p_0001854_clases").style.top= p_0001854_inicio_vertical+"px";

    document.getElementById("p_0001854_claseweb").style.left= ((window.innerWidth/2)+(p_0001854_margen_mitad))+"px";
    document.getElementById("p_0001854_claseweb").style.top= p_0001854_inicio_vertical+"px";

    document.getElementById("p_0001854_smile").style.left= ((window.innerWidth/2)+-(p_0001854_cuadrado+p_0001854_margen_mitad))+"px";
    document.getElementById("p_0001854_smile").style.top= (p_0001854_inicio_vertical+p_0001854_cuadrado+p_0001854_margen)+"px";

    document.getElementById("p_0001854_horario").style.left= ((window.innerWidth/2)+(p_0001854_margen_mitad))+"px";
    document.getElementById("p_0001854_horario").style.top= (p_0001854_inicio_vertical+p_0001854_cuadrado+p_0001854_margen)+"px";

    document.getElementById("p_0001854_personal").style.left= ((window.innerWidth/2)-(p_0001854_cuadrado+p_0001854_margen_mitad))+"px";
    document.getElementById("p_0001854_personal").style.top= (p_0001854_inicio_vertical+2*p_0001854_cuadrado+2*p_0001854_margen)+"px";

    document.getElementById("p_0001854_mail").style.left= ((window.innerWidth/2)+(p_0001854_margen_mitad))+"px";
    document.getElementById("p_0001854_mail").style.top= (p_0001854_inicio_vertical+2*p_0001854_cuadrado+2*p_0001854_margen)+"px";

  }

  var p_0001854_texto= document.querySelectorAll("#p_0001854_pag_bienvenida_div p");
  for (i = 0; i < p_0001854_texto.length; i++) {
    p_0001854_texto[i].style.fontSize= (p_0001854_cuadrado/8)+"px";
  }
}

p_0001854_printar_cuadrados();

window.addEventListener('resize', function() {
        if(document.getElementById("p_0001854_pag_bienvenida_div").style.display!="none")
          p_0001854_printar_cuadrados();
    }, true);


function p_0001854_animar_icono_menu(p_0001854_icono_pulsado){
  var p_0001854_iconos= document.querySelectorAll(".p_0001854_animar_icono");
  for (i = 0; i < p_0001854_iconos.length; i++) {
      p_0001854_iconos[i].style.width= "";
      p_0001854_iconos[i].style.height= "";
      p_0001854_iconos[i].style.left= "";
      p_0001854_iconos[i].style.top= "";
      p_0001854_iconos[i].style.animation = "animacion_icono_menu 2s ease-in-out forwards";
  }
  var p_0001854_texto= document.querySelectorAll("#p_0001854_pag_bienvenida_div p");
  for (i = 0; i < p_0001854_texto.length; i++) {
    p_0001854_texto[i].style.display= "none";
  }

  //setTimeout(function(){
    document.getElementById("p_0001854_pag_bienvenida_div").style.opacity="0";
  //}, 500);

  setTimeout(function(){
    document.getElementById("p_0001854_pag_bienvenida_div").style.display="none";
  }, 3500);
  p_0001854_ir_menu(p_0001854_icono_pulsado);
}

function p_0001854_ir_menu(p_0001854_icono_pulsado){
  var p_0001854_nombre_destino= p_0001854_icono_pulsado.id.substr(9);
  p_0001854_nombre_destino= "p_00987_menu"+p_0001854_nombre_destino;
  mover_menu(true,p_0001854_nombre_destino);
}

function p_0001854_calcular_lado_cuadrado(){
  var p_0001854_lado;
  if(window.innerWidth>window.innerHeight){
    if(window.innerWidth>1250)
      p_0001854_lado= 250;
    else {
      p_0001854_lado= (window.innerWidth/5);
    }
  }
  else{
    if(window.innerWidth>625)
      p_0001854_lado= 250;
    else {
      p_0001854_lado= (window.innerWidth*2/5);
    }
  }
  return p_0001854_lado;
}
</script>
