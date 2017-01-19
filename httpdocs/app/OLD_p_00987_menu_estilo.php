<!--
Pag. ID: p_00987
-->

<?
	$MENU=array("p_00987_menu_horario","p_00987_menu_claseweb","p_00987_menu_clases","p_00987_menu_personal","p_00987_menu_smile");
	$ALTO = 100;
	$ANCHO = 100;
	$SEPARACION = 10;
?>

<script>
//set orden menu
MENU_SET=["p_00987_menu_clases","p_00987_menu_clase_web","p_00987_menu_smile","p_00987_menu_horario","p_00987_menu_personal"];

//set medidas
ALTO = 100;
ANCHO = 100;
SEPARACION = 10;

//set MENU[][0:pos_cerrado;1:pos_abierto;2:id;3:z-index;4:top]
function set_menu(){
	menu=new Array();
	for(bms in MENU_SET)
	menu[bms]=[bms*SEPARACION,bms*ANCHO-1*bms,MENU_SET[bms],5+10*bms,0];
}
set_menu();
clicado=0;

//document.getElementById(menu[i]).style.height=
</script>
<style type="text/css">
<?
for( $php_bucle_01=0 ; $php_bucle_01 < count($MENU) ; $php_bucle_01++ )
{
	echo("@-webkit-keyframes animacion_".$MENU[$php_bucle_01]."{" );?> 0% {left:0px;top:0px;} 100% {left:0px; top:0px;} }
<? echo("@keyframes animacion_".$MENU[$php_bucle_01]."{" );?> 0% {left:0px;top:0px;} 100% {left:0px;top:0px;} }

<? }; ?>
@-webkit-keyframes animacion_over_box  { 0% {transform: scaleX(3);left:200px;} 100% {transform: scaleX(1);left:0px;} }
@keyframes animacion_over_box { 0% {transform: scaleX(3);left:200px;} 100% {transform: scaleX(1);left:0px;} }

#p_00987_menu_over, #p_00987_menu_out{
	display:none;
	top:0;
	left:0;
	z-index:1;
}
#p_00987_menu_over{
	position: absolute;
	z-index:1000;
	margin:10px 0 0 10px;
	height:<? echo($ALTO)-5 ?>px;
	width:<? echo(-5+$ANCHO+(count($MENU)-1)*$SEPARACION) ?>px;
   -webkit-animation: 1.2s lineal forwards;/* Chrome, Safari, Opera */
   animation: 1.2s  lineal  forwards;/*FireFox IE*/
	}
#p_00987_menu_out{
	position: fixed;
	z-index:1;
	height:100%;
	width:100%;
	}
<?	
foreach ($MENU as $i){
	if( $i == $MENU[count($MENU)-1]){
		echo("#".$i);
	}else{
		echo("#".$i.", ");
	}
}
?>{
	height: <? echo($ANCHO); ?>px;
	width: <? echo($ALTO); ?>px;
   border-radius: 10px;
   border: 3px solid #fff;
	background-repeat:no-repeat;
	background-position: center;
	z-index:10;
	position: absolute;
   -webkit-animation-duration: 1s;/* Chrome, Safari, Opera */
	-webkit-animation-timing-function: ease;/* Chrome, Safari, Opera */
	-webkit-animation-fill-mode: forwards;/* Chrome, Safari, Opera */
   animation-duration: 1s;
	animation-timing-function: ease;
	animation-fill-mode: forwards;
}
<?	
foreach ($MENU as $i){
	if( $i == $MENU[count($MENU)-1]){
		echo("#".$i.":hover");
	}else{
		echo("#".$i.":hover, ");
	}
}
?>{
	//hover menu
	}

	#p_00987_menu_horario{
		background:url(./images/calendar_100_web.png);
	}
	#p_00987_menu_clase_web{
		background:url(./images/clasesweb_100_web.png);
	}
	#p_00987_menu_clases{
		background:url(./images/classes_100_web.png);
	}
	#p_00987_menu_personal{
		background:url(./images/personal_100_web.png);
	}
	#p_00987_menu_smile{
		background:url(./images/smile_100_web.png);
	}
</style>



<script>
	//buscar la animacion para cambiar
	function busca_animacion(animacion)
   {
		var estilos = document.styleSheets;
		key=[];
		for (var i = 0; i < estilos.length; ++i) {
           // loop through all the rules
           for (j in estilos[i].cssRules) {
               if (estilos[i].cssRules[j].name == animacion)
						key.push(estilos[i].cssRules[j]);
           }
       }
		 return (key);
	}

///////////////////////////////////MOVIMIENTO DEL MENU//////////////////////
	function mover(al_reves,clicked)
	{		
	
		//si selecciona clases y no hay dia lectivo te lleva a calendario
		if(clicked=="p_00987_menu_clases"&&dia_lectivo.length==0)
		{
			clicked="p_00987_menu_horario​";
			alert('You have no class yet!\nProgram class in "Schedule"');
		}
		
		//oculta y muestra los BOX de over y out
		if(al_reves)
		{
			time=50;
			if(clicked!=0){
				document.getElementById("p_00987_menu_out").style.display="none";
				setTimeout(function time(){
					document.getElementById("p_00987_menu_over").style.display="inline";
				},1000);
			}
			else{
				document.getElementById("p_00987_menu_out").style.display="none";
				setTimeout(function time(){
					document.getElementById("p_00987_menu_over").style.display="inline";
				},100);
			}
		}
		else
		{	
			setTimeout(function time(){
				document.getElementById("p_00987_menu_over").style.display="none";
				document.getElementById("p_00987_menu_out").style.display="inline";
			},1000);//retardo en el out
		}
		
		//restablecer menu si se clica
		if(clicked!=0)set_menu();
		
		//////////////animacion de over BOX 
		if(al_reves&&clicked==0){
			document.getElementById("p_00987_menu_over").style.webkitAnimationName = "animacion_over_box";
			document.getElementById("p_00987_menu_over").style.AnimationName = "animacion_over_box";
		}else{
			document.getElementById("p_00987_menu_over").style.webkitAnimationName = "none";
			document.getElementById("p_00987_menu_over").style.AnimationName = "none";
		}
		
		////INCERTAR ANIMACION
		for(i in menu)
		{
			moviendo = document.getElementById(menu[i][2]);
			moviendo.style.webkitAnimationName = "none";
			moviendo.style.AnimationName = "none";
			
			//encontrar styleSheets.cssRule con animacion==name "animacion_menu_xxx" = push keyframe
			var keyframes = busca_animacion("animacion_"+menu[i][2]);
			//borrar todos las animacionses// NO ES NESESARIO AHORA
			/*for(k in keyframes){
				for(j in keyframes[k].cssRules){
					if(keyframes[k].cssRules[j].keyText == "0%" || keyframes[k].cssRules[j].keyText == "100%")
						keyframes[k].deleteRule(j);
				}
			}*/
			
			if(menu[i][2]==String(clicked))
			{
				///contenedor elemento en el que estoy
				if(typeof estoy != 'undefined')
					document.getElementById(estoy).style.display="none";
				
				estoy=menu[i][2].substr(13,menu[i][2].length);
				document.getElementById(estoy).style.display="inline";
				
				menu[i][0]=menu[menu.length-1][0];
				menu[i][3]=200;
				menu[i][4]=10;
				
				for(j=parseInt(i)+parseInt(1);j<menu.length;j++){
					menu[j][0]=(j-1)*SEPARACION;
				}
			}
			
			for(k in keyframes){
				if(al_reves)
				{
					if(NAV=="Safari"){
						keyframes[k].insertRule("0% {  z-index:"+menu[i][3]+";-webkit-transform: translate("+menu[i][1]+"px,"+menu[i][4]+"px);}");
						keyframes[k].insertRule("100% { z-index:"+menu[i][3]+";-webkit-transform: translate("+menu[i][0]+"px,0px);}");
					}else{
						keyframes[k].appendRule("0% {  z-index:"+menu[i][3]+";transform: translate("+menu[i][1]+"px,"+menu[i][4]+"px);}");
						keyframes[k].appendRule("100% { z-index:"+menu[i][3]+";transform: translate("+menu[i][0]+"px,0px);}");
					}
				}
				else
				{
					if(NAV=="Safari"){
						keyframes[k].insertRule("0% {  z-index:"+menu[i][3]+";-webkit-transform: translate("+menu[i][0]+"px,0px);}");
						keyframes[k].insertRule("100% {  z-index:"+menu[i][3]+";-webkit-transform: translate("+menu[i][1]+"px,"+menu[i][4]+"px);}");
					}else{
						keyframes[k].appendRule("0% {  z-index:"+menu[i][3]+";transform: translate("+menu[i][0]+"px,0px);}");
						keyframes[k].appendRule("100% {  z-index:"+menu[i][3]+";transform: translate("+menu[i][1]+"px,"+menu[i][4]+"px);}");
					}
				}
			}
			moviendo.style.webkitAnimationName = "animacion_"+menu[i][2];
			moviendo.style.animationName = "animacion_"+menu[i][2];
		}
	}

////PRIMERA LLAMADA AL MOVIMIENTO (parar movimientos y llamar al movimiento)
	function mover_menu(reves,clic)
	{
		
		document.getElementById("p_00987_menu_out").style.display="none";
		document.getElementById("p_00987_menu_over").style.display="none";
		
		//parar todas las animaciones y mover hasta la posicion inicial
	   for(menu_bucle_00 in MENU_SET){
			document.getElementById(menu[menu_bucle_00][2]).style.zIndex = menu[menu_bucle_00][3];
			if(reves){
				document.getElementById(menu[menu_bucle_00][2]).style.left = menu[menu_bucle_00][1]+"px";
				document.getElementById(menu[menu_bucle_00][2]).style.top= menu[menu_bucle_00][4]+"px";
			}else{
				document.getElementById(menu[menu_bucle_00][2]).style.left = menu[menu_bucle_00][0]+"px";
				document.getElementById(menu[menu_bucle_00][2]).style.top= "0px";
			}
			if(NAV=="Chrome" || NAV=="Opera" || NAV=="Safari"){
				document.getElementById(menu[menu_bucle_00][2]).style.webkitAnimationName = "none";
			}else if(NAV=="FireFox" || NAV=="Ie"){
				document.getElementById(menu[menu_bucle_00][2]).style.animationName = "none";
			}
		}
		//mover a la posicion inicial de la animacion
		 if(reves)
		{
			//mover hasta la posicion inicial
			for(menu_bucle_00 in MENU_SET)
				if(NAV=="Safari")
					document.getElementById(menu[menu_bucle_00][2]).style.transform = "-webkit-translate("+menu[menu_bucle_00][1]+"px,"+menu[menu_bucle_00][4]-6+"px)";
				else
					document.getElementById(menu[menu_bucle_00][2]).style.transform = "translate("+menu[menu_bucle_00][1]+"px,"+menu[menu_bucle_00][4]-6+"px)";
		}
      else
		{
			//mover hasta la posicion inicial
			for(menu_bucle_00 in MENU_SET)
				if(NAV=="Safari")
					document.getElementById(menu[menu_bucle_00][2]).style.transform = "-webkit-translate("+menu[menu_bucle_00][0]+"px,"+menu[menu_bucle_00][4]-6+"px)";
				else
					document.getElementById(menu[menu_bucle_00][2]).style.transform = "translate("+menu[menu_bucle_00][0]+"px,"+menu[menu_bucle_00][4]-6+"px)";
		}
			
		//llamar a la animacion
      if(reves)
		{
			setTimeout(function mover01(){mover(reves,clic);},50);
		}
      else
		{
			setTimeout(function mover01(){mover(reves,clic);},50);
		}
		
		//funciones de inicio de seccion
		if(clic!=0){
			switch(clic) {
				 case "p_00987_menu_clases":{
					 		set_siguiente_clase();
							imprime_actividad(DIA_LEC,0);
					 		break;
						}
				 case "p_00987_menu_clase_web":{
					 		break;
						}
				 case "p_00987_menu_smile":{
					 		break;
						}
				 case "p_00987_menu_horario":{
							set_horario();
					 		break;
						}
				 case "p_00987_menu_personal":{
					 		break;
						}
				 default: break;
			}
		}
	}

</script>
