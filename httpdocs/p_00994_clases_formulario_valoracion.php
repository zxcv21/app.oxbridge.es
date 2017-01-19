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
}
#p_00994_clases_head_valoracion_formulario_titulo{
	z-index:101;
	position:fixed;
	top:80px;
	left:333px;
	display:none;
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
		float:right;
		background-color: #fff;
		border: solid 1px #aaa;
		}
</style>

<div id="p_00994_clases_head_valoracion_formulario_titulo_out" onclick="formulario_valoracion(0);mostrar_valoracion(true);"></div>
<div id="p_00994_clases_head_valoracion_formulario_titulo">
   <input type="hidden" name="valoracion" id="p_00994_clases_head_valoracion_formulario_titulo_valoracion" >
   <textarea placeholder="Comment" id="p_00994_clases_head_valoracion_formulario_titulo_textarea"  rows="4" cols="30"></textarea><br>
   <input id="p_00994_clases_head_valoracion_formulario_titulo_submit" onclick="" type="submit" value="send">
</div>

<script>
	function formulario_valoracion(val){
		
		//comprovar si la clase a acavado
		dia_l_ano =	dia_lectivo[DIA_LEC].fecha.split("/")[0];
		dia_l_mes =	dia_lectivo[DIA_LEC].fecha.split("/")[1];
		dia_l_dia =	dia_lectivo[DIA_LEC].fecha.split("/")[2];
		dia_l_hora = dia_lectivo[DIA_LEC].horaFinal.split(":")[0];
		dia_l_min = dia_lectivo[DIA_LEC].horaFinal.split(":")[1];
		//SET DIA ACTUAL
		if(new Date(<? echo date('Y,m,d') ?>).getFullYear()<10){ye = "0"+new Date(<? echo date('Y,m,d') ?>).getFullYear();}else ye = new Date(<? echo date('Y,m,d') ?>).getFullYear();
		if(new Date(<? echo date('Y,m,d') ?>).getMonth()<10){mo = "0"+(new Date(<? echo date('Y,m,d') ?>).getMonth()*1+1);}else mo = (new Date(<? echo date('Y,m,d') ?>).getMonth()*1+1);
		if(new Date(<? echo date('Y,m,d') ?>).getDate()<10){da = "0"+new Date(<? echo date('Y,m,d') ?>).getDate();}else da = new Date(<? echo date('Y,m,d') ?>).getDate();
		if(new Date(<? echo date('Y,m,d') ?>).getHours()<10){ho = "0"+new Date(<? echo date('Y,m,d') ?>).getHours();}else ho = new Date(<? echo date('Y,m,d') ?>).getHours();
		if(new Date(<? echo date('Y,m,d') ?>).getMinutes()<10){mi = "0"+new Date(<? echo date('Y,m,d') ?>).getMinutes();}else mi = new Date(<? echo date('Y,m,d') ?>).getMinutes();
		
		if(dia_l_ano+dia_l_mes+dia_l_dia+dia_l_hora+dia_l_min>ye+mo+da+ho+mi){
			alert("Es muy pronto para valorar esta clase");
		}else{
		
			disp = ocultar_mostrar("p_00994_clases_head_valoracion_formulario_titulo_out");
			formulario = document.getElementById("p_00994_clases_head_valoracion_formulario_titulo");
			ocultar_mostrar("p_00994_clases_head_valoracion_formulario_titulo");
			
			if(val!=0)dia_lectivo[DIA_LEC].valoracion = val;
			
			if(disp=="none"){
				for(i=1;i<6;i++){
					document.getElementById("p_00960_clases_head_valoracion_s"+i).style.backgroundImage = "";
				}
			}
			else{
				for(i=1;i<6;i++){
					if(i<=val)
						document.getElementById("p_00960_clases_head_valoracion_s"+i).style.backgroundImage = "url(./images/estrella_FULL.png)";
				}
				document.getElementById("p_00994_clases_head_valoracion_formulario_titulo_valoracion").value = val;
			}
			
		}
	}
	
	//mostrar y ocultar la valoracion del profesor
	function mostrar_valoracion(mostrar){
		//reset estrellas
		for(k=1; k<=5;k++)
				document.getElementById("p_00960_clases_head_valoracion_s"+k).style.backgroundImage = "";
		if(mostrar){//pintar estrellas
			for(k=1; k<=dia_lectivo[DIA_LEC].valoracion;k++)
					document.getElementById("p_00960_clases_head_valoracion_s"+k).style.backgroundImage = "url(./images/estrella_FULL.png)";
		}else{//borrar estrellas
			for(k=1; k<=5;k++)
					document.getElementById("p_00960_clases_head_valoracion_s"+k).style.backgroundImage = "";
		}
	}
	
</script>
