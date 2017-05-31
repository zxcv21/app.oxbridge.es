<!--
Pag. ID: 00994
-->

<style>
#p_00994_clases_head_valoracion_formulario_titulo_out{
	height:100%;
	width:100%;
	z-index:100;
	position:absolute;
	display:none;
	background-color:#000;
	opacity:0.7;
	}

#p_00994_clases_head_valoracion_formulario_titulo{
  z-index: 101;
  position: fixed;
  top: 35%;
  left: 10%;
  width: 80%;
  display: none;
	}
	#p_00994_clases_head_valoracion_formulario_titulo textarea{
		font-size: 4em;
		width: 100%;
		}
	#p_00994_clases_head_valoracion_formulario_titulo_titulo{
		padding:6px;
		margin-bottom:-6px;
		background-color:#fff;
		font-family:HelveticaNeue, Helvetica, Arial, sans-serif;
			font-size: 18px;
			color:#999;
			letter-spacing: 6px;
		}
	#p_00994_clases_head_valoracion_formulario_titulo_submit{
		float: right;
		background-color: #fff;
		font-size: 4em;
		font-family: HelveticaNeue, Helvetica, Arial, sans-serif;
		color:#aaa;
		}
</style>

<div id="p_00994_clases_head_valoracion_formulario_titulo_out" onclick="formulario_valoracion(0);mostrar_valoracion(true);"></div>
<div id="p_00994_clases_head_valoracion_formulario_titulo">
   <input type="hidden" name="valoracion" id="p_00994_clases_head_valoracion_formulario_titulo_valoracion" >
   <textarea placeholder="Comment" id="p_00994_clases_head_valoracion_formulario_titulo_textarea"  rows="3" cols="30"></textarea><br>
   <input id="p_00994_clases_head_valoracion_formulario_titulo_submit" onclick="" type="submit" value="Send">
</div>

<script>

	function p_00994_valorar_desde_menu_clase(val){
		var p_00994_ahora= new Date(Date.now());
		var p_00994_fecha_capsula= dia_lectivo[DIA_LEC].date_final;

		if(p_00994_ahora.getTime()>=p_00994_fecha_capsula.getTime()){
			if(((dia_lectivo[DIA_LEC].valoracion=="")||(parseInt(dia_lectivo[DIA_LEC].valoracion)<1))&&(parseInt(dia_lectivo[DIA_LEC].incidencia)!=1)){
				p_1003_clase_formulario_valorar= DIA_LEC;
				p_1003_crear_formulario_valoracion(DIA_LEC);
				formulario_valoracion(val);
				p_00994_valoracion_voluntaria=true;
			}
		}
	}

	function p_00994_valorar_final_clase(p_00994_dia){
		if(((dia_lectivo[p_00994_dia].valoracion=="")||(parseInt(dia_lectivo[p_00994_dia].valoracion)<1))&&(parseInt(dia_lectivo[p_00994_dia].incidencia)!=1)){
			p_1003_clase_formulario_valorar= p_00994_dia;
			p_1003_crear_formulario_valoracion(p_00994_dia);
			p_00994_valoracion_voluntaria=true;
		}
	}

	function formulario_valoracion(val){
			document.getElementById("p_0001292_input_incidencia").value="0";
			dia_lectivo[p_1003_clase_formulario_valorar].incidencia=0;
			document.getElementById("p_01450_overall_valoracion_inputs").style.display = "none";
			document.querySelector(".p_01450_div_valoracion_dia").style.display = "block";
			document.getElementById("p_01450_div_incidencia").style.display = "none";
			//document.getElementById("p_0001851_boton_incidencia").style.display = "block";

			if(window.innerWidth>=p_00956_ancho_movil)
				document.getElementById("p_0001851_form_valoracion").style.height = "610px";
			document.getElementById("p_01450_overall_valoracion_inputs").style.display = "block";
			//if(window.innerWidth<p_00956_ancho_movil)
			//	document.getElementById("p_01450_overall_valoracion_inputs").style.position="absolute";
			document.getElementById("p_01450_overall_valoracion_semanal_profesor").style.display = "block";

			document.getElementById("p_0001851_anular").style.display = "none";


	//	if(document.getElementById("p_00960_clases_head_valoracion_s"+val+'_valorar').style.backgroundImage!="")
	//		val=0;

		if(val>-1)dia_lectivo[p_1003_clase_formulario_valorar].valoracion = val;

		//document.getElementById("p_0001292_input_finalizador").value="";
		document.getElementById("p_00960_clases_head_flecha_valorar").style.display = "none";
		if(	document.getElementById("p_00960_clases_head_info_valorar").getBoundingClientRect().top>document.getElementById("p_00960_clases_head_foto_valorar").getBoundingClientRect().bottom){
		//if(	document.getElementById("p_0001851_boton_incidencia").getBoundingClientRect().top>=document.getElementById("p_00960_clases_head_info_valorar").getBoundingClientRect().bottom){
			document.getElementById("p_0001851_boton_incidencia").style.width="150px";
			document.getElementById("p_0001851_boton_incidencia").style.top="120px";
		}
		mostrar_valoracion(true, "formulario_valoracion");
		//document.getElementById('p_01450_overall_valoracion_semanal').style.display='block';
		document.getElementById("p_0001851_form_valoracion").style.border="none";
}

	//mostrar y ocultar la valoracion del profesor
	function mostrar_valoracion(mostrar, formulario){
		var p_00994_estrellas=0;
		//reset estrellas
		for(k=1; k<=5;k++){
				if(formulario===undefined)
					document.getElementById("p_00960_clases_head_valoracion_s"+k).style.backgroundImage = "";
				else{
					document.getElementById("p_00960_clases_head_valoracion_s"+k+"_valorar").style.backgroundImage = "";
					document.getElementById("p_00960_clases_head_valoracion_s"+k).style.backgroundImage = "";
				}
		}
		if(mostrar){//pintar estrellas
			if(formulario!==undefined){
				for(k=1; k<=dia_lectivo[p_1003_clase_formulario_valorar].valoracion;k++){
					document.getElementById("p_00960_clases_head_valoracion_s"+k+"_valorar").style.backgroundImage = "url(<? echo ver_url("images/estrella_FULL.png","src"); ?>)";
					document.getElementById("p_00960_clases_head_valoracion_s"+k).style.backgroundImage = "url(<? echo ver_url("images/estrella_FULL.png","src"); ?>)";
				}
			}
			else{
				if(dia_lectivo[DIA_LEC])//estar� abierta la p�gina de actividades
					p_00994_estrellas= dia_lectivo[DIA_LEC].valoracion;
				//else
					//p_00994_estrellas= dia_lectivo[p_1003_clase_formulario_valorar].valoracion;
				//for(k=1; k<=dia_lectivo[DIA_LEC].valoracion;k++){
				for(k=1; k<=p_00994_estrellas;k++){
					document.getElementById("p_00960_clases_head_valoracion_s"+k).style.backgroundImage = "url(<? echo ver_url("images/estrella_FULL.png","src"); ?>)";
				}
			}
		}else{//borrar estrellas
			for(k=1; k<=5;k++){
				if(formulario===undefined)
					document.getElementById("p_00960_clases_head_valoracion_s"+k).style.backgroundImage = "";
				else{
					document.getElementById("p_00960_clases_head_valoracion_s"+k+"_valorar").style.backgroundImage = "";
					document.getElementById("p_00960_clases_head_valoracion_s"+k).style.backgroundImage = "";
					document.getElementById("p_00960_clases_head_flecha_valorar").style.display = "block";
				}
			}
		}
	}

	//cancelar valoracion
	function p_00994_cancelar_valoracion(){
		for(k=1; k<=dia_lectivo[DIA_LEC].valoracion;k++)
					document.getElementById("p_00960_clases_head_valoracion_s"+k).style.backgroundImage = "url(<? echo ver_url("images/estrella.png","src"); ?>)";
	}


	function p_00994_envio_incidencia(){
		document.getElementById("p_0001292_input_incidencia").value="1";
		dia_lectivo[p_1003_clase_formulario_valorar].incidencia=1;
		//document.getElementById("p_0001851_form_valoracion").style.height = "610px";
		document.getElementById("p_01450_overall_valoracion_inputs").style.display = "block";
		document.querySelector(".p_01450_div_valoracion_dia").style.display = "none";
		document.getElementById("p_01450_div_incidencia").style.display = "block";

		if(window.innerWidth<p_00956_ancho_movil){
			document.getElementById("p_0001851_form_valoracion").style.height="";
			document.getElementById("p_01450_overall_valoracion_inputs").style.width="100%";
		}
		else{
			document.getElementById("p_0001851_form_valoracion").style.height="200px";
			//document.getElementById("p_01450_overall_valoracion_inputs").style.width="604px";
		}
		document.getElementById("p_01450_overall_valoracion_inputs").style.border="2px solid #21aed7";
		document.getElementById("p_01450_overall_valoracion_inputs").style.borderRadius="10px";
		document.getElementById("p_01450_overall_valoracion_inputs").style.padding="20px 20px 35px 20px";
		document.getElementById("p_01450_overall_valoracion_inputs").style.position="fixed";
		//document.getElementById("p_01450_overall_valoracion_inputs").style.width="604px";
		document.getElementById("p_01450_overall_valoracion_inputs").style.boxShadow="5px 5px 20px grey";

		document.getElementById("p_0001851_anular").style.display="inline-block";

		//cambiar estilo bot�n enviar
		document.getElementById("p_0001851_enviar").style.backgroundColor="white";//#21aed7
		document.getElementById("p_0001851_enviar").style.color="red";//white
		document.getElementById("p_0001851_enviar").value="<? echo $TEXTOS[203][3];?>";//Enviar
		document.getElementById("p_0001851_enviar").style.width= "237px";//150

		document.getElementById("p_0001851_boton_incidencia").style.width="";
		document.getElementById("p_0001851_boton_incidencia").style.top="";

		mostrar_valoracion(false, "formulario_valoracion");
		dia_lectivo[p_1003_clase_formulario_valorar].valoracion="";

		document.getElementById("p_0001851_form_valoracion").style.border= "none";
	}

window.addEventListener("resize", p_00994_resize_valoracion);

function p_00994_resize_valoracion(){
	if(document.getElementById("p_01450_overall_valoracion_semanal_profesor").style.display!=="none"){
		if(window.innerWidth<p_00956_ancho_movil){
			document.getElementById("p_0001851_form_valoracion").style.height="";
			document.getElementById("p_01450_overall_valoracion_inputs").style.width="100%";
				document.getElementById("p_01450_overall_valoracion_inputs").style.position="absolute";
			if(	document.getElementById("p_00960_clases_head_info_valorar").getBoundingClientRect().top>document.getElementById("p_00960_clases_head_foto_valorar").getBoundingClientRect().bottom){
			//if(	document.getElementById("p_0001851_boton_incidencia").getBoundingClientRect().top>=document.getElementById("p_00960_clases_head_info_valorar").getBoundingClientRect().bottom){
				document.getElementById("p_0001851_boton_incidencia").style.width="150px";
				document.getElementById("p_0001851_boton_incidencia").style.top="120px";
			}
			else{
				document.getElementById("p_0001851_boton_incidencia").style.width="";
				document.getElementById("p_0001851_boton_incidencia").style.top="";
			}

		}
		else{
			document.getElementById("p_0001851_form_valoracion").style.height="200px";
			//document.getElementById("p_01450_overall_valoracion_inputs").style.width="604px";
			document.getElementById("p_0001851_boton_incidencia").style.width="";
			document.getElementById("p_0001851_boton_incidencia").style.top="";
			document.getElementById("p_01450_overall_valoracion_inputs").style.width="";
			document.getElementById("p_01450_overall_valoracion_inputs").style.position="initial";
		}
	}
	setTimeout(function(){document.querySelector("body").scrollTop = 0;},100);
}


function p_0001851_volver_atras_valoracion(){
	mostrar_valoracion(false,"formulario_valoracion");
	p_01003_deshacer_estilos_no_asistencia();
	document.getElementById("p_01450_overall_valoracion_inputs").style.display="none";
	document.getElementById("p_01450_input_valoracion_semanal_puntual").checked= false;
	document.getElementById("p_01450_input_valoracion_semanal_preparado").checked= false;
	document.getElementById("p_01450_input_valoracion_semanal_sistema").checked= false;

}
</script>
