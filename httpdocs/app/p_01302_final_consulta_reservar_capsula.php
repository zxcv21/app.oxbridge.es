<!--
Pag. id: 01302 final consulta reservar capsula
-->
<html>

<head>
	<meta charset="utf-8">
</head>

<?
if( isset($_POST["input_json"]) )
{
	$p_0001302_php_json=$_POST["input_json"];
}
else
{
	if( isset($_GET["get_json"]) )
	{
		$p_0001302_php_json=$_GET["get_json"];
	}
	else
	{
		$p_0001302_php_json=0;
	};
};

if( strlen($p_0001302_php_json) > 0 )
{
	$p_0001302_php_json=str_replace('@@','"',$p_0001302_php_json);
	echo "<script>".$p_0001302_php_json." window.parent.p_01003_SIGUIENTE_CLASE_SET=false;</script>";
};
?>

<body>

<script>
	window.parent.console.info("capsula++");
	window.parent.cerrar_over_all();
	window.parent.horario_load(0);
	window.parent.set_horario();
</script>

</body>

</html>