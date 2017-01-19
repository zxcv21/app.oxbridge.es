<!--
-Pag ID: 01391
-->
<html>
<meta charset="utf-8">

<script>
//p_00989_cargando("cargando_imagen");
<?
	function p_01310_consulta_smile_datos(){
		
		/*if( $_POST['alumno_id'] == 22618 )
		{
			$p_01391_php_url='http://app.oxbridge.es/estructura_web/codigo/alumno/smiles_01_preguntas_04_php_02_select_01_preguntas_por_hacer_trinity.php';
		}
		else
		{*/
			$p_01391_php_url='http://app.oxbridge.es/estructura_web/codigo/alumno/smiles_01_preguntas_04_php_02_select_01_preguntas_por_hacer.php';
		/*};*/
		$p_01391_php_url.='?p_0001401_get_alumno_id='.$_POST['alumno_id'];
		/*if( $_POST['alumno_id'] == 22618 )
		{
			$p_01391_php_url.='&p_0001401_get_prueba=prueba';
		};*/
		$p_01391_php_url.='&p_0001401_get_bd='.$_POST['bd'];
		$p_01391_php_url.='&p_0001401_get_nivel='.$_POST['nivel'];
		$p_01391_php_url.='&p_0001401_get_filtro='.$_POST['filtro'];
		$p_01391_php_url.='&p_0001401_get_cantidad='.$_POST['cantidad'];
		$p_01391_php_url.='&p_0001401_get_consulta='.$_POST['consulta'];
		$p_01391_php_url.='&p_0001401_get_ids_ocupados='.$_POST['ids'];
		$p_01391_php_url.='&p_0001401_get_trinity='.$_POST['trinity'];
		$p_01391_php_url.='&p_0001401_get_finalizador_js=window.parent.p_001174_final_consulta_preguntas();';
		if($datos = file_get_contents($p_01391_php_url)){
			echo $datos;
			//document.getElementById("cargando_imagen").style.display="";
		}else{
			echo "console.error('ERROR consulta: ".$p_01391_php_url."');";
			p_0988_consula_datos_clases();
		}
	}
	p_01310_consulta_smile_datos();
?>
</script>
</html>