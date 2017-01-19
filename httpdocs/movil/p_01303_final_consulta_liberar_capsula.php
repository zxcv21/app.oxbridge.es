<!--
Pag. id: 01303 final consulta liberar capsula
-->
<html>
<script>
	window.parent.console.info("capsula--");
	window.parent.cerrar_over_all();
	window.parent.horario_load(0);
	window.parent.set_horario();
	
	<?
	if(isset($_GET['p_01303_liberar_ids'])){
		foreach(split(",",$_GET['p_01303_liberar_ids']) as $p_01303_liberar_ids){
			echo "if(typeof window.parent.dia_lectivo['".$p_01303_liberar_ids."'] != 'undefined')delete window.parent.dia_lectivo['".$p_01303_liberar_ids."'];";
		}
	}
	?>
	window.parent.set_siguiente_clase(true);
</script>
</html>