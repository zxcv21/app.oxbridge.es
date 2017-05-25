<!--
id: p_00996
-->
çlkdajfhlkasjdf

<?

$p_00996_json=""; 
if ( isset($_POST["p_0001030_input_json"]) ) 
{ 
	$p_00996_json = $_POST["p_0001030_input_json"]; 
};


?><p>
p_00996_json: <? echo($p_00996_json); ?>
</p><?

?>

<script type="text/javascript">
	window.parent.test_json=JSON.parse(<? echo("'".$p_00996_json."'"); ?>);
/*llamada 
https:s.oxbridge.es/ox/estructura_web/codigo/alumno/horarios/horarios_03_alumno_07_asp_02_select_01_obtener_horarios.asp?p_0001029_get_alumno_id=31537
https:s.oxbridge.es/ox/estructura_web/codigo/alumno/horarios/horarios_03_alumno_07_asp_02_select_01_obtener_horarios.asp?p_0001029_get_alumno_id=24002


*/
</script>

