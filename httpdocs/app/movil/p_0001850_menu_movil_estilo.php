<!--
Pag. ID: p_0001850
-->

<?
	$p_0001850_PHP_MENU_MOVIL=array("p_0001850_menu_movil_clases","p_0001850_menu_movil_claseweb","p_0001850_menu_movil_smile","p_0001850_menu_movil_horario","p_0001850_menu_movil_personal");
	$ALTO = 100;
	$ANCHO = 100;
	$SEPARACION = 10;
	$TOTAL=count($p_0001850_PHP_MENU_MOVIL);
?>

<script>
//set orden menu
p_0001850_PHP_MENU_MOVIL_SET=["p_0001850_menu_movil_clases","p_0001850_menu_movil_claseweb","p_0001850_menu_movil_smile","p_0001850_menu_movil_horario","p_0001850_menu_movil_personal"];

//set medidas
ALTO = 100;
ANCHO = 100;
SEPARACION = 10;
TOTAL=p_0001850_PHP_MENU_MOVIL_SET.length;

//set MENU[][0:pos_cerrado;1:pos_abierto;2:id;3:z-index;4:top]
function p_0001850_php_f_01_set_menu_movil(){
	p_0001850_php_menu_movil=new Array();
	for(bms in p_0001850_PHP_MENU_MOVIL_SET)
	p_0001850_php_menu_movil[bms]=[bms*SEPARACION,bms*ANCHO-1*bms,p_0001850_PHP_MENU_MOVIL_SET[bms],5+10*bms,0];
}
p_0001850_php_f_01_set_menu_movil();
clicado=0;

//document.getElementById(menu[i]).style.height=
</script>
<style type="text/css">

<?
foreach ($p_0001850_PHP_MENU_MOVIL as $i){
	if( $i == $p_0001850_PHP_MENU_MOVIL[count($p_0001850_PHP_MENU_MOVIL)-1]){
		echo("#".$i);
	}else{
		echo("#".$i.", ");
	}
}
?>{
	float:left;
	height:100%;
	width: <? echo (100-($TOTAL*0.15))/$TOTAL; ?>%;
   border-radius: 19% 19% 0 0;
	background-repeat:no-repeat;
	background-position: center;
	background-size:50%;
	z-index:1000;
	border-right:solid 1px #fff;
}

	#p_0001850_menu_movil_horario{
		background-color:#768D78;
		background-image:url(<? echo ver_url("images/icono-horario.png","src"); ?>);
		}
	#p_0001850_menu_movil_claseweb{
		background-color:#4A4D6C;
		background-image:url(<? echo ver_url("images/icono-clase_web.png","src"); ?>);
		}
	#p_0001850_menu_movil_clases{
		background-color:#8C6792;
		background-image:url(<? echo ver_url("images/icono-clases.png","src"); ?>);
		background-size:64%
		}
	#p_0001850_menu_movil_personal{
		background-color:#494747;
		background-image:url(<? echo ver_url("images/icono-personal.png","src"); ?>);
		}
	#p_0001850_menu_movil_smile{
		background-color:#9A8662;
		background-image:url(<? echo ver_url("images/icono-smile.png","src"); ?>)
		;
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


////LLAMADA AL MOVIMIENTO
p_0001850_php_f_01_set_menu_movil();

function p_0001850_php_f_02_mover_menu(p_0001850_php_f_02_reves_variable,p_0001850_php_f_02_clic_variable){
		for(i in p_0001850_php_menu_movil){
			document.getElementById(p_0001850_php_menu_movil[i][2]).style.height="100%";
			document.getElementById(p_0001850_php_menu_movil[i][2]).style.margin="0 0 0 0";
			//document.getElementById("lateral_"+menu[i][2]).style.width="100%";
			//document.getElementById("lateral_"+menu[i][2]).style.margin="0 0 0 0";
			document.getElementById(p_0001850_php_menu_movil[i][2].slice(21)).style.display="none";
		}
		document.getElementById(p_0001850_php_f_02_clic_variable.slice(21)).style.display="inline";
		document.getElementById(p_0001850_php_f_02_clic_variable).style.height="130%";
		document.getElementById(p_0001850_php_f_02_clic_variable).style.margin="-3% 0 0 0";
		//document.getElementById("lateral_"+clic).style.width="130%";
		//document.getElementById("lateral_"+clic).style.margin="0 0 0 -15%";

		//funciones de inicio de seccion
		if(p_0001850_php_f_02_clic_variable!=0){
			ESTOY=p_0001850_php_f_02_clic_variable;
			ESTOY=ESTOY.split("_").splice(4,1)[0];
			switch(p_0001850_php_f_02_clic_variable) {
				 case "p_0001850_menu_movil_clases":{
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
								"	style='height:100%;float: right;margin-right: 10px;display:none;'"+
								"	onclick='ocultar_mostrar(\"p_00995_firma\");resizeCanvas();signaturePad.clear();'"+
								">"+
								"<img"+
								"	id='p_00987_boton_firma_pendiente'"+
								"	src='<? echo ver_url("images/boton_firma_pendiente.png","src"); ?>'"+
								"	style='height:100%;float: right;margin-right: 10px;display:none;'"+
								"	onclick='ocultar_mostrar(\"p_00995_firma\");resizeCanvas();signaturePad.clear();'"+
								">";

								if(personal_datos_info.tripartita=="1")
								{
									html+="<img"+
									"	id='p_00987_boton_tripartita'"+
									"	src='<? echo ver_url("images/boton_FT.png","src"); ?>'"+
									"	style='height:100%;float: right;margin-right: 10px;'"+
									'	onclick="document.getElementById(\'p_01451_tripartita\').style.display=\'\';"'+
									">";
								}

								document.getElementById("head_oxbridge_menu_apartados").innerHTML=html;

								P_00992_mostrar_firma();
					 		break;
						}
				 case "p_0001850_menu_movil_claseweb":{
					 		document.getElementById("head_oxbridge_menu_apartados").innerHTML="";

							if(personal_datos_info.tripartita=="1")
							{
								document.getElementById("head_oxbridge_menu_apartados").innerHTML="<img"+
								"	id='p_00987_boton_tripartita'"+
								"	src='<? echo ver_url("images/boton_FT.png","src"); ?>'"+
								"	style='height:100%;float: right;margin-right: 10px;'"+
								'	onclick="document.getElementById(\'p_01451_tripartita\').style.display=\'\';"'+
								">";
							}

							p_0100_contenedor_resize();
					 		break;
						}
				 case "p_0001850_menu_movil_smile":{
					 		document.getElementById("head_oxbridge_menu_apartados").innerHTML="";

					 		p_01171_seccion_smile();
					 		break;
						}
				 case "p_0001850_menu_movil_horario":{
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
				case "p_0001850_menu_movil_personal":{
							cargar_tutorial(7);

							document.getElementById("head_oxbridge_menu_apartados").innerHTML="";

							if(personal_datos_info.tripartita=="1")
							{
								document.getElementById("head_oxbridge_menu_apartados").innerHTML=""+
									"<img"+
									"	id='p_00987_boton_tripartita_2'"+
									"	src='<? echo ver_url("images/boton_FT.png","src"); ?>'"+
									"	style='height:58px;float: right;margin: 8px 10px 0 0;cursor:pointer'"+
									'	onclick="document.getElementById(\'p_01451_tripartita\').style.display=\'\';"'+
									">";
							}

							p_0100_contenedor_resize();
							p_01169_seleccionar_seccion(document.getElementById("p_00961_menu_info_primero"));
							/*p_01169_cargar_presonal_datos_info();*/
				break;}
				default: break;
			}
		}
	}
</script>
