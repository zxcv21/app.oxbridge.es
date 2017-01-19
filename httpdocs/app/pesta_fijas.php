<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>


<style type="text/css">

	#p_00958_horario_contenedor_horario {/*CONTENEDOR*/
		width: 300px;
		margin:0 0 0 0;
		overflow: scroll;
		height:300px;
		clear:both;
		background-color:#eee;
		}
	#p_00995_horario_contenedor_horario_nivel{/*ESQUINA*/
		text-align:center;
		vertical-align:middle;
		z-index:900;
		background-color:#fff;
		float:left;
		height:45px;
		width:70px;
		position:relative;
		font-size:12px;
		}
	#p_00958_horario_contenedor_horario_dias{/*CABECERO*/
		width:2000px;/*calcular segun contenido y definir*/
		position: relative;
		z-index: 99;
		height:45px;
		background-color:#f00;
		}
	#p_00958_horario_contenedor_horario_cuerpo_datos{
		height:1900px;/*calcular segun contenido y definir*/
		width:2000px;/*calcular segun contenido y definir*/
		background-color:#00f;
		}
	#p_00995_horario_contenedor_horario_horas{/*FILAS*/
		background-color:#0f0;
		position: relative;
		float: left;
		width:70px;
		height:1900px;/*calcular segun contenido y definir*/
		}
		
</style>

<script type="text/javascript">
	function anti_scroll_horario() {
		scroller=document.getElementById('p_00958_horario_contenedor_horario');
		scroller.onscroll = function() {
			document.getElementById('p_00958_horario_contenedor_horario_dias').style.top = scroller.scrollTop + 'px';
			document.getElementById('p_00995_horario_contenedor_horario_horas').style.left = scroller.scrollLeft + 'px';
			
			document.getElementById('p_00995_horario_contenedor_horario_nivel').style.left = scroller.scrollLeft + 'px';
			document.getElementById('p_00995_horario_contenedor_horario_nivel').style.top = scroller.scrollTop + 'px';
		};
	}
	window.onload = anti_scroll_horario;
</script>



</head>

<body>

   <div id="p_00958_horario_contenedor_horario">
      	<div id="p_00995_horario_contenedor_horario_nivel"><span>X</span></div>
      <div id="p_00958_horario_contenedor_horario_dias">
         <!--PINTAR cabeceras -->
      </div>
      
      <div id="p_00958_horario_contenedor_horario_cuerpo_datos">
      	<div id="p_00995_horario_contenedor_horario_horas"></div>
         <!--PINTAR filas-->
      </div>
   </div>


</body>
</html>