<!--
Pag. ID: p_00987
-->

<?
	$MENU=array("p_00987_menu_clases","p_00987_menu_claseweb","p_00987_menu_smile","p_00987_menu_horario","p_00987_menu_personal","p_00987_menu_mail");
	$ALTO = 65;
	$ANCHO = 65;
	$SEPARACION = 8;
	$TOTAL=count($MENU);
?>

<script>
//set orden menu
MENU_SET=["p_00987_menu_clases","p_00987_menu_claseweb","p_00987_menu_smile","p_00987_menu_horario","p_00987_menu_personal","p_00987_menu_mail"];

//set medidas
ALTO = 65;
ANCHO = 65;
SEPARACION = 8;
TOTAL=MENU_SET.length;

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

<?/*
foreach ($MENU as $i){
	if( $i == $MENU[count($MENU)-1]){
		echo("#".$i);
	}else{
		echo("#".$i.", ");
	}
}*/
?>
.p_00957_elemento_del_menu{
	float:left;
	/*height:<?// echo($ALTO); ?>px;
	width: <? //echo($ANCHO); ?>px;*/
	height: 65px;
	background-repeat:no-repeat;
	background-position: center;
	background-size:50%;
	z-index:1000;
	border-right:solid 1px #fff;
	border-radius: 10px;
	border: 3px solid #fff;
	position: absolute;
	-webkit-transition: 0.3s left,  0.3s top;/* Chrome, Safari, Opera */
	-webkit-transition-timing-function: cubic-bezier(0.11, 0.89, 0.32, 1);
	transition: 0.3s left,  0.3s top;
	transition-timing-function: cubic-bezier(0.11, 0.89, 0.32, 1);
	cursor:pointer;
}


<?/*
foreach ($MENU as $i){
	if( $i == $MENU[count($MENU)-1]){
		echo("#".$i.":hover");
	}else{
		echo("#".$i.":hover, ");
	}
}*/
?>
.p_00957_elemento_del_menu:hover{
	opacity: 0.9;
}

#p_00987_menu_out{
	display:none;
	top:0;
	left:0;
	z-index:1;
	position: fixed;
	z-index:1;
	height:100%;
	width:100%;
}

	#p_00987_menu_horario,
	#lateral_p_00987_menu_horario{
		background-color:#768D78;
		background-image:url(<? echo ver_url("images/icono-horario.png","src"); ?>);
		}
	#p_00987_menu_claseweb,
	#lateral_p_00987_menu_claseweb{
		background-color:#4A4D6C;
		background-image:url(<? echo ver_url("images/icono-clase_web.png","src"); ?>);
		}
	#p_00987_menu_clases,
	#lateral_p_00987_menu_clases{
		background-color:#8C6792;
		background-image:url(<? echo ver_url("images/icono-clases.png","src"); ?>);
		background-size:64%
		}
	#p_00987_menu_personal,
	#lateral_p_00987_menu_personal{
		background-color:#494747;
		background-image:url(<? echo ver_url("images/icono-personal.png","src"); ?>);
		}
		#p_00987_menu_smile,
		#lateral_p_00987_menu_smile{
			background-color:#9A8662;
			background-image:url(<? echo ver_url("images/icono-smile.png","src"); ?>)
			;
			}
		#p_00987_menu_mail,
		#lateral_p_00987_menu_mail{
			background-color:#649aa2;
			background-image:url(<? echo ver_url("images/icono-mail.png","src"); ?>)
			;
			}
			#p_00987_boton_firma_pendiente{
				height:58px;
				float: left;
				margin: 8px 10px 0 0;
				/*display:none;*/
				cursor:pointer;
			}

/*******************************************************************************/
@media screen and (max-width: 767px) {
	<?/*
	foreach ($MENU as $i){
		if( $i == $MENU[count($MENU)-1]){
			echo("#".$i);
		}else{
			echo("#".$i.", ");
		}
	}*/
	?>
	.p_00957_elemento_del_menu{
		height:100%;
		/*width: <?// echo (100-($TOTAL*0.14))/$TOTAL; ?>%;*/
   	border-radius: 19% 19% 0 0;
		background-repeat:no-repeat;
		background-position: center;
		background-size:50%;
		z-index:1000;
		border: none;
		border-right:solid 1px #fff;
		position: relative;
		-webkit-transition: none;
		transition: none;
		box-sizing: border-box;
	}
	#p_00987_boton_firma_pendiente{
		height: 100%;
		margin: 0;
	}
}
@media screen and (max-width: 767px) and (orientation:landscape){
	<?/*
	foreach ($MENU as $i){
		if( $i == $MENU[count($MENU)-1]){
			echo("#".$i);
		}else{
			echo("#".$i.", ");
		}
	}*/
	?>
	.p_00957_elemento_del_menu{
		float:left;
		height:8vw;
		/*width: 60px;*/
		background-repeat:no-repeat;
		background-position: center;
		background-size:50%;
		z-index:1000;
		border-right:solid 1px #fff;
		border-radius: 10px;
		border: 3px solid #fff;
		position: absolute;
		-webkit-transition: 0.3s left,  0.3s top;/* Chrome, Safari, Opera */
		-webkit-transition-timing-function: cubic-bezier(0.11, 0.89, 0.32, 1);
		transition: 0.3s left,  0.3s top;
		transition-timing-function: cubic-bezier(0.11, 0.89, 0.32, 1);
		cursor:pointer;
	}
}
</style>



<script>
//ocultar addres bar
window.addEventListener("load",function() {
  setTimeout(function(){
    window.scrollTo(0, 10);
  }, 1);
  setTimeout(function(){
    window.scrollTo(0, 10);
  }, 0
 );
});

//poner menú adecuado
window.addEventListener("resize", p_00987_adaptar_menu_al_ancho);
//p_00987_adaptar_menu_al_ancho();
if((window.innerWidth<p_00956_ancho_movil)&&(window.innerHeight>window.innerWidth)){
	p_00987_menu_movil= true;
}
else{
	p_00987_menu_movil= false;
}
//window.addEventListener("load", p_00987_adaptar_menu_al_ancho);
//p_00987_adaptar_menu_al_ancho();

var p_00987_mouseover_on= false;

function p_00987_adaptar_menu_al_ancho(){

	if((window.innerWidth<p_00956_ancho_movil)&&(window.innerHeight>window.innerWidth)){
		p_00987_menu_movil= true;
		ALTO = "100%";
		ANCHO = window.innerWidth/6.05;//(100-(TOTAL*0.14))/TOTAL+"%";
		SEPARACION = 10;
	}
	else{
		p_00987_menu_movil= false;
		if(window.innerWidth<p_00956_ancho_movil){
			//ALTO = 60;
			ALTO = "8vw";
			ANCHO = 60;
			//SEPARACION = 4;
		}
		else{
			ALTO = "65px";
			ANCHO = 65;
		}
		SEPARACION = 8;
	}
	var p_00987_elementos_del_menu= document.querySelectorAll(".p_00957_elemento_del_menu");

	if(window.innerWidth>=p_00956_ancho_movil){
		if((p_00987_elementos_del_menu.length)&&(!p_00987_mouseover_on)){
			for(var i=0; i<p_00987_elementos_del_menu.length; i++)
				p_00987_elementos_del_menu[i].addEventListener("mouseover", p_00987_funcion_mouseover_elemento_menu);
			document.getElementById("p_00987_menu_out").addEventListener("mouseover", p_00987_funcion_mouseover_menu_out_menu);
			p_00987_mouseover_on= true;
		}
	}
	else{
		if((p_00987_elementos_del_menu.length)&&(p_00987_mouseover_on)){
			for(var i=0; i<p_00987_elementos_del_menu.length; i++)
				p_00987_elementos_del_menu[i].removeEventListener("mouseover", p_00987_funcion_mouseover_elemento_menu);
			document.getElementById("p_00987_menu_out").removeEventListener("mouseover", p_00987_funcion_mouseover_menu_out_menu);
			p_00987_mouseover_on= false;
		}
	}
	for(var i=0; i<p_00987_elementos_del_menu.length; i++){
		p_00987_elementos_del_menu[i].style.height= ALTO;
		p_00987_elementos_del_menu[i].style.width= ANCHO+"px";
	}

	if(document.getElementById(menu[0][2])){
		for(i in menu){
			document.getElementById(menu[i][2]).style.height="";
		}
	}
//}
	set_menu();
	mover_menu(true,0);
}

function p_00987_funcion_mouseover_elemento_menu(){
	mover_menu(false,0);
}

function p_00987_funcion_mouseover_menu_out_menu(){
	mover_menu(true,0);
}

////LLAMADA AL MOVIMIENTO
set_menu();

p_1003_mostrar_reservas= false;

function mover_menu(reves,clic,true_click){
			//comprueba si es click real y no llamada para cambiar pantalla
			if((typeof true_click!='undefined')&&(true_click)){
				//si hay click con el menú plegado, simula un hover
				if((document.getElementById("p_00987_menu_out").style.display=="none")&&(!p_00987_menu_movil)){
					reves= false;
					clic= 0;
				}
			}

			if(clic!=0)MOVIENDO_MENU=1;
			//restablecer menu si se clica
			if(clic!=0)
				set_menu();
			//

				for(i in menu){
					if(menu[i][2]==String(clic)){
						//contenedor elemento en el que estoy
						if(typeof estoy != 'undefined')
							document.getElementById(estoy).style.display="none";

						if(!p_00987_menu_movil){
						//cambiar posiciones del menu
							menu[i][0]=menu[menu.length-1][0];
							menu[i][3]=200;
							menu[i][4]=10;

							for(j=parseInt(i)+parseInt(1);j<menu.length;j++){
								menu[j][0]=(j-1)*SEPARACION;
							}
						}
						else{
							document.getElementById(menu[i][2]).style.height="125%";
							document.getElementById(menu[i][2]).style.margin="-2% 0 0 0";
						}
						estoy=menu[i][2].substr(13,menu[i][2].length);
						document.getElementById(estoy).style.display="block";
					}
					else{
							if(p_00987_menu_movil){
								document.getElementById(menu[i][2]).style.height="100%";
								document.getElementById(menu[i][2]).style.top="0";
								document.getElementById(menu[i][2]).style.margin="0 0 0 0";
								//document.getElementById(menu[i][2].slice(13)).style.display="none";
								document.getElementById(menu[i][2]).style.left=0+"px";
							}
					}
					if(!p_00987_menu_movil){
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
							//if(clic!= "p_00987_menu_mail")
								document.getElementById(menu[i][2]).style.top=menu[i][4]+"px";
						}
					}
/*					else{
						document.getElementById(menu[i][2]).style.height="100%";
						document.getElementById(menu[i][2]).style.margin="0 0 0 0";
						//document.getElementById(menu[i][2].slice(13)).style.display="none";
						document.getElementById(menu[i][2]).style.left=0+"px";
					}*/
				}

		//funciones de inicio de seccion
		if(clic!=0){
			ESTOY=clic;
			ESTOY=ESTOY.split("_").splice(3,1)[0];
			switch(clic) {
				 case "p_00987_menu_clases":{
					 		if(!p_01003_SIGUIENTE_CLASE_SET){
					 			set_siguiente_clase(true);
								p_01003_SIGUIENTE_CLASE_SET=true;
							}


							/*imprime_actividad(DIA_LEC,0);*/
							p_0100_contenedor_resize();
					 		var html=""+
								"<img"+
								"	id='p_00987_boton_firma'"+
								"	src='<? echo ver_url("images/boton_firma.png","src"); ?>'"+
								"	style='height:58px;float: left;margin: 8px 10px 0 0;display:none;cursor:pointer'"+
								"	onclick='ocultar_mostrar(\"p_00995_firma\");resizeCanvas();signaturePad.clear();'"+
								">"+
								"<img"+
								"	id='p_00987_boton_firma_pendiente'"+
								"	src='<? echo ver_url("images/boton_firma_pendiente.png","src"); ?>'"+
								//"	style='height:58px;float: left;margin: 8px 10px 0 0;display:none;cursor:pointer'"+
								"	style='display:none;'"+
								"	onclick='p_00989_una_vez=true;p_00989_crear_formulario_firma(p_00992_clase_cargada);p_00989_clase_para_firma= p_00992_clase_cargada;p_00989_permitir_cerrar=true;resizeCanvas();signaturePad.clear();'"+
								">";

								if(personal_datos_info.tripartita=="1" || personal_datos_info.email.toLowerCase().indexOf("fundacion.tripartita") >= 0)
								{
									html+="<img"+
									"	id='p_00987_boton_tripartita'"+
									"	src='<? echo ver_url("images/boton_FT.png","src"); ?>'"+
									"	style='height:58px;float: right;margin: 8px 10px 0 0;cursor:pointer;'"+
									'	onclick="document.getElementById(\'p_01451_tripartita\').style.display=\'\';p_01451_restaurar_circulos_progreso_tripartita_despues_eliminar_duplicados();"'+
									">";
								}

								document.getElementById("head_oxbridge_menu_apartados").innerHTML=html;

								P_00992_mostrar_firma();
								//document.getElementById("p_00960_clases_head").style.cssFloat="left";
					 		break;
						}
				 case "p_00987_menu_claseweb":{
					 		document.getElementById("head_oxbridge_menu_apartados").innerHTML="";

							if(personal_datos_info.tripartita=="1")
							{
								document.getElementById("head_oxbridge_menu_apartados").innerHTML="<img"+
								"	id='p_00987_boton_tripartita'"+
								"	src='<? echo ver_url("images/boton_FT.png","src"); ?>'"+
								"	style='height:58px;float: right;margin: 8px 10px 0 0;cursor:pointer;'"+
								'	onclick="document.getElementById(\'p_01451_tripartita\').style.display=\'\';p_01451_restaurar_circulos_progreso_tripartita_despues_eliminar_duplicados();"'+
								">";
							}

							p_0100_contenedor_resize();
					 		break;
						}
				 case "p_00987_menu_smile":{
							 if(personal_datos_info.tripartita=="1")
							 {
								 document.getElementById("head_oxbridge_menu_apartados").innerHTML="<img"+
								 "	id='p_00987_boton_tripartita'"+
								 "	src='<? echo ver_url("images/boton_FT.png","src"); ?>'"+
								 "	style='height:58px;float: right;margin: 8px 10px 0 0;cursor:pointer;'"+
								 '	onclick="document.getElementById(\'p_01451_tripartita\').style.display=\'\';p_01451_restaurar_circulos_progreso_tripartita_despues_eliminar_duplicados();"'+
								 ">";
							 }
							 else
					 			document.getElementById("head_oxbridge_menu_apartados").innerHTML="";

					 		p_01171_seccion_smile();
					 		break;
						}
				 case "p_00987_menu_horario":{
							cargar_tutorial(8);


							if( document.getElementById('p_0001317_input_sesion_id') )
							{
								if(HORARIO_CARGA){
									setTimeout(p_0100_contenedor_resize,100);
									set_horario();
									HORARIO_CARGA=false;
								}
								p_01000_menu_horario();
								dibujar_horario();
								document.getElementById('p_00958_horario_clases_reservadas').style.display="none";
								document.getElementById('p_00958_filtros_y_horario').style.display='block';
								break;
							}
							else
							{
								setTimeout(
									function()
									{
										mover_menu(true,'p_00987_menu_horario');
									}
									, 500
								);
							};

						}
				case "p_00987_menu_personal":{
							cargar_tutorial(7);

							document.getElementById("head_oxbridge_menu_apartados").innerHTML="";

							if(personal_datos_info.tripartita=="1")
							{
								document.getElementById("head_oxbridge_menu_apartados").innerHTML=""+
									"<img"+
									"	id='p_00987_boton_tripartita_2'"+
									"	src='<? echo ver_url("images/boton_FT.png","src"); ?>'"+
									"	style='height:58px;float: right;margin: 8px 10px 0 0;cursor:pointer;'"+
									'	onclick="document.getElementById(\'p_01451_tripartita\').style.display=\'\';p_01451_restaurar_circulos_progreso_tripartita_despues_eliminar_duplicados();"'+
									">";
							}

							p_0100_contenedor_resize();
							p_01169_seleccionar_seccion(document.getElementById("p_00961_menu_info_primero"));
				break;}
				case "p_00987_menu_mail":
					document.getElementById("head_oxbridge_menu_apartados").innerHTML="";

					if(personal_datos_info.tripartita=="1")
					{
						document.getElementById("head_oxbridge_menu_apartados").innerHTML="<img"+
						"	id='p_00987_boton_tripartita'"+
						"	src='<? echo ver_url("images/boton_FT.png","src"); ?>'"+
						"	style='height:58px;float: right;margin: 8px 10px 0 0;cursor:pointer;'"+
						'	onclick="document.getElementById(\'p_01451_tripartita\').style.display=\'\';p_01451_restaurar_circulos_progreso_tripartita_despues_eliminar_duplicados();"'+
						">";
					}

				break;
				//default: break;
			}
		}
	}

</script>
