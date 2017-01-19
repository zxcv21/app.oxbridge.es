<?
	include $_SERVER['DOCUMENT_ROOT']."/sesiones/sesion_02_comprobacion_04_php_02_select_01_sesion.php";
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<!--
id: p_00996
-->

<script type="text/javascript">
<?
if( $p_0001326_php_sesion_correcta == "si" && $p_0001326_php_usuario_correcto == "si" && $p_0001326_php_usuario_y_sesion_relacioonados == "si" )
{

	$alumno_id=$_GET['alumno_id'];
	/*$alumno_id=31537; //tomas
	$alumno_id=31899; //fer*/
	$datos = file_get_contents(
	"http://s.oxbridge.es/ox/estructura_web/codigo/alumno/horarios/horarios_03_alumno_07_asp_02_select_01_obtener_horarios.asp?".
	"p_0001029_get_alumno_id=".$alumno_id);
	echo $datos;
	?>

	//console.info('<? echo $p_00996_json; ?>');
	//convertir numero en dias/mes
	function numToDate(dia){
		if(String(dia).length==1)
			return "0"+dia;
		else
			return dia;
	}

	//llamada a los datos
		<? date_default_timezone_set('UTC');?>
		hora_server = p_0001029_hora_actual;
		hora_server = hora_server.split(":");
		fecha_server = p_0001029_fecha_americana;
		fecha_server = fecha_server.split("/");
		horario_datos_corregir = p_0001029_asp_json;

		//HORA UTC
		hora_utc = new Date(<? echo date("Y,").(date("m")-1).date(",d,H,i"); ?>);
		//HORA SERVER
		hora_server=new Date(fecha_server[0],fecha_server[1]-1,fecha_server[2],hora_server[0],hora_server[1]);
	//	console.info(hora_server);
		//FRANJA HORA SERVER
		var fh_server = parseInt(hora_utc/1000/60/60) - parseInt(hora_server/1000/60/60);
		//FRANJA HORA CLIENTE
		var fh_cliente = new Date().getTimezoneOffset()/60;

		//coregir franja horaria
		p_00996_corregir_hora=fh_server - fh_cliente;
//p_00996_corregir_hora= 4;

	/*	console.info("HORAS:  UTC_"+hora_utc.getHours()+":"+numToDate(hora_utc.getMinutes())+
						"   SER_"+hora_server.getHours()+":"+numToDate(hora_server.getMinutes())+
						"   CLI_"+new Date().getHours()+":"+numToDate(new Date().getMinutes())+
						"   CRH:"+p_00996_corregir_hora);
*/
		window.parent.DATE_UTC=hora_utc;
		window.parent.DATE_SER=hora_server;
		window.parent.DATE_CLI=new Date(hora_server.getFullYear(),hora_server.getMonth(),hora_server.getDate(),hora_server.getHours()+p_00996_corregir_hora,hora_server.getMinutes());

		for(i in horario_datos_corregir){
				capsula=horario_datos_corregir[i];

				//correccion de horarios
				if(p_00996_corregir_hora!=0){
					corregida= new Date(capsula.fecha_anyo,capsula.fecha_mes-1,capsula.fecha_dia,(capsula.hora_inicio.split(":")[0]),capsula.hora_inicio.split(":")[1]);
					corregida_fin= new Date(capsula.fecha_anyo,capsula.fecha_mes-1,capsula.fecha_dia,(capsula.hora_fin.split(":")[0]),capsula.hora_fin.split(":")[1]);
					corregida= new Date(corregida.getTime()+3600000*p_00996_corregir_hora);
					corregida_fin= new Date(corregida_fin.getTime()+3600000*p_00996_corregir_hora);
					capsula.fecha= corregida.getDate()+"/"+(corregida.getMonth()+1)+"/"+corregida.getFullYear();
					capsula.fecha_aaaa_mm_dd= corregida.getFullYear()+"/"+(corregida.getMonth()+1)+"/"+corregida.getDate();
					capsula.fecha_anyo= corregida.getFullYear().toString();
					capsula.fecha_dia= corregida.getDate().toString();
					capsula.fecha_mes= (corregida.getMonth()+1).toString();
					capsula.hora_inicio= ("0"+corregida.getHours()).slice(-2) + ":" + ("0"+corregida.getMinutes()).slice(-2);
					capsula.hora_fin= ("0"+corregida_fin.getHours()).slice(-2) + ":" + ("0"+corregida_fin.getMinutes()).slice(-2);
				}

				//correccion dia semana
				capsula.dia_semana=new Date(capsula.fecha_aaaa_mm_dd.replace("/",",")).getDay();
		}

		window.parent.horario_datos=horario_datos_corregir;

		/*mostrar mensaje horario en hora local*/
/*		if(p_00996_corregir_hora){
			document.getElementById("p_00958_horario_contenedor").innerHTML= ""+
			'<div id="p_00996_mensaje_huso_horario">'+
			'<p>Los horarios se muestran en su hora local</p>'+
			'</div>'+
			document.getElementById("p_00958_horario_contenedor").innerHTML;
		}
		*/
		//console.info("HORARIO:");
		//console.info(window.parent.horario_datos);
		window.parent.DIBUJAR_HORARIO=true;
		window.parent.dibujar_horario();

	/*llamada
	http:s.oxbridge.es/ox/estructura_web/codigo/alumno/horarios/horarios_03_alumno_07_asp_02_select_01_obtener_horarios.asp?p_0001029_get_alumno_id=31537
	http:s.oxbridge.es/ox/estructura_web/codigo/alumno/horarios/horarios_03_alumno_07_asp_02_select_01_obtener_horarios.asp?p_0001029_get_alumno_id=24002
	*/
<?
};
?>
</script>
</html>
