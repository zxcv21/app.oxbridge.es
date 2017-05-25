<!--
id: p_00997
-->
<html>
<body>
	<form id="p_00997_horario_reservar_liberar_formulario" method="post"
   action="https://s.oxbridge.es/Ox/estructura_web/codigo/alumno/horarios/horarios_01_menu_04_01_reservar_capsula_2.asp">
	</form>

	<script>

	if(window.parent.horario_formulario_click){
		//borrar el horario
		window.parent.horario_load(0);

		var p_00997_capsula=window.parent.horario_datos[window.parent.id_capsula_rl];
		var p_00997_variable=window.parent.horario_formulario_variable;
		p="0000324";

		if(p_00997_capsula.alumno_tiene_la_capsula=="si"){
			document.getElementById("p_00997_horario_reservar_liberar_formulario").setAttribute("action",""+
			"https://s.oxbridge.es/Ox/estructura_web/codigo/alumno/horarios/horarios_01_menu_04_02_liberar_capsula_2.asp");
			p="0000330";
		}

		window.parent.horario_formulario_click=false;
		p_00997_alumno=window.parent.alumno_id;

		if(p_00997_variable=="variable")
			p_00997_tipo="capsula";
		else p_00997_tipo="horario";

		html_input='<input name="p_0000324_input_sesion_id" value="0">'+
			'<input name="p_'+p+'_input_alumno_id" value="'+p_00997_alumno+'">'+
			'<input name="p_'+p+'_input_dia_lectivo_id" value="'+p_00997_capsula.dia_lectivo_id+'">'+
			'<input name="p_'+p+'_input_fija_o_variable" value="'+p_00997_variable+'">'+
			'<input name="p_'+p+'_input_portal_nuevo" value="1">'+
			'<input name="p_'+p+'_input_tipo_reserva" value="'+p_00997_capsula.tipo_reserva+'">'+
			'<input name="p_'+p+'_input_capsula_u_horario" value="'+p_00997_tipo+'">'+
			/*monica*/
			'<input name="p_'+p+'_input_dominio" value="app.oxbridge.es">';

		document.getElementById("p_00997_horario_reservar_liberar_formulario").insertAdjacentHTML("beforeEnd",html_input);
		document.forms["p_00997_horario_reservar_liberar_formulario"].submit();

	}else{
		window.parent.set_horario();
	}
   </script>

</body>
</html>
