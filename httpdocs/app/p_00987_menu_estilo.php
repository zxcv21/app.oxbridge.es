<!--
Pag. ID: p_00987
-->

<?
	$MENU=array("p_00987_menu_horario","p_00987_menu_clase_web","p_00987_menu_clases","p_00987_menu_personal","p_00987_menu_smile");
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
   -webkit-transition: 1.2s width;/* Chrome, Safari, Opera */
	transition: 1.2s width;/*FireFox IE*/
	background-color:#f00;
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
   -webkit-transition: 0.3s left,  0.3s top;/* Chrome, Safari, Opera */
	-webkit-transition-timing-function: cubic-bezier(0.11, 0.89, 0.32, 1);
   transition: 0.3s left,  0.3s top;
	transition-timing-function: cubic-bezier(0.11, 0.89, 0.32, 1);
	cursor:pointer;
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
MEVIENDO_MENU=0;
////LLAMADA AL MOVIMIENTO
set_menu();
	function mover_menu(reves,clic)
	{
		if(clic!=0)MOVIENDO_MENU=1;
		
		//si selecciona clases y no hay dia lectivo te lleva a calendario
		if(clic=="p_00987_menu_clases"&&dia_lectivo.length==0)
		{
			clic="p_00987_menu_horario​";
			alert('You have no class yet!\nProgram class in "Schedule"');
		}
		
		//restablecer menu si se clica
		if(clic!=0)set_menu();
		
		//
		for(i in menu){
			if(menu[i][2]==String(clic)){
				//contenedor elemento en el que estoy
				if(typeof estoy != 'undefined')
					document.getElementById(estoy).style.display="none";
				
				//cambiar posiciones del menu	
				menu[i][0]=menu[menu.length-1][0];
				menu[i][3]=200;
				menu[i][4]=10;
				
				for(j=parseInt(i)+parseInt(1);j<menu.length;j++){
					menu[j][0]=(j-1)*SEPARACION;
				}	
					
				
				estoy=menu[i][2].substr(13,menu[i][2].length);
				document.getElementById(estoy).style.display="block";
			}
			//set MENU[][0:pos_cerrado;1:pos_abierto;2:id;3:z-index;4:top]
			if(reves){
				document.getElementById("p_00987_menu_out").style.display = "none";
				document.getElementById(menu[i][2]).style.left=menu[i][0]+"px";
				document.getElementById(menu[i][2]).style.zIndex=menu[i][3];
				document.getElementById(menu[i][2]).style.top="0px";
			}else{
				document.getElementById("p_00987_menu_out").style.display = "inline";
				document.getElementById(menu[i][2]).style.left=menu[i][1]+"px";
				document.getElementById(menu[i][2]).style.zIndex=menu[i][3];
				document.getElementById(menu[i][2]).style.top=menu[i][4]+"px";
			}
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
							if(HORARIO_CARGA){
								set_horario();
								HORARIO_CARGA=false;
							}
							dibujar_horario();
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
