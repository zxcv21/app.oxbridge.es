<!--
id: p_00996
-->
<script type="text/javascript">
<?
$p_00996_json="";
if ( isset($_POST["p_00996_input_json"]) )
	$p_00996_json = $_POST["p_00996_input_json"];

if ( isset($_POST["p_00996_input_horario_servidor"]) )
	$p_00996_horario = $_POST["p_00996_input_horario_servidor"];

if ( isset($_POST["p_00996_input_fecha_servidor"]) )
	$p_00996_fecha = $_POST["p_00996_input_fecha_servidor"];
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
	hora_server = "<? echo $p_00996_horario;?>";
	hora_server = hora_server.split(":");
	fecha_server = "<? echo $p_00996_fecha;?>";
	fecha_server = fecha_server.split("/");
	horario_datos_corregir = JSON.parse(<? echo("'".$p_00996_json."'"); ?>);

	//HORA UTC
	hora_utc = new Date(<?  echo date("Y,").(date("m")-1).date(",d,H,i");?>);
	//HORA SERVER
	hora_server=new Date(fecha_server[0],fecha_server[1]-1,fecha_server[2],hora_server[0],hora_server[1]);
//	console.info(hora_server);
	//FRANJA HORA SERVER
	var fh_server = parseInt(hora_utc/1000/60/60) - parseInt(hora_server/1000/60/60);
	//FRANJA HORA CLIENTE
	var fh_cliente = new Date().getTimezoneOffset()/60;

	//coregir franja horaria
	corregir=fh_server - fh_cliente;

	/*console.info("HORAS:  UTC_"+hora_utc.getHours()+":"+numToDate(hora_utc.getMinutes())+
					"   SER_"+hora_server.getHours()+":"+numToDate(hora_server.getMinutes())+
					"   CLI_"+new Date().getHours()+":"+numToDate(new Date().getMinutes())+
					"   CRH:"+corregir);
*/
	window.parent.DATE_UTC=hora_utc;
	window.parent.DATE_SER=hora_server;
	window.parent.DATE_CLI=new Date(hora_server.getFullYear(),hora_server.getMonth(),hora_server.getDate(),hora_server.getHours()+corregir,hora_server.getMinutes());

	for(i in horario_datos_corregir){
			console.info(i);
			capsula=horario_datos_corregir[i];

			//correccion de horarios
			if(corregir!=0){
				corregida= new Date(capsula.fecha_anyo,capsula.fecha_mes,capsula.fecha_dia,(capsula.hora_inicio.split(":")[0]*1+corregir),capsula.hora_inicio.split(":")[1]);
				corregida_fin= new Date(capsula.fecha_anyo,capsula.fecha_mes,capsula.fecha_dia,(capsula.hora_fin.split(":")[0]*1+corregir),capsula.hora_fin.split(":")[1]);
				corregida=[corregida.getFullYear(),corregida.getMonth(),corregida.getDate(),corregida.getHours(),corregida.getMinutes()];
				corregida_fin=[corregida_fin.getFullYear(),corregida_fin.getMonth(),corregida_fin.getDate(),corregida_fin.getHours(),corregida_fin.getMinutes()];
				capsula.fecha= numToDate(corregida[2])+"/"+numToDate(corregida[1])+"/"+corregida[0];
				capsula.fecha_aaaa_mm_dd= corregida[0]+"/"+numToDate(corregida[1])+"/"+numToDate(corregida[2]);
				capsula.fecha_anyo= corregida[0];
				capsula.fecha_dia= corregida[2]*1;
				capsula.fecha_mes= corregida[1]*1;
				capsula.hora_fin= numToDate(corregida_fin[3])+":"+numToDate(corregida_fin[4]);
				capsula.hora_inicio= numToDate(corregida[3])+":"+numToDate(corregida[4]);
			}

			//correccion dia semana
			capsula.dia_semana=new Date(capsula.fecha_aaaa_mm_dd.replace("/",",")).getDay();
	}

	window.parent.horario_datos=horario_datos_corregir;
	//console.info("HORARIO:");
	//console.info(window.parent.horario_datos);
	window.parent.DIBUJAR_HORARIO=true;
	window.parent.dibujar_horario();

/*llamada
https:s.oxbridge.es/ox/estructura_web/codigo/alumno/horarios/horarios_03_alumno_07_asp_02_select_01_obtener_horarios.asp?p_0001029_get_alumno_id=31537
https:s.oxbridge.es/ox/estructura_web/codigo/alumno/horarios/horarios_03_alumno_07_asp_02_select_01_obtener_horarios.asp?p_0001029_get_alumno_id=24002
*/

</script>
