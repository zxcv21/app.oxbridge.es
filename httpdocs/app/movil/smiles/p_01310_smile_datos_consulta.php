<!--
-Pag. ID:01310
-->
<html>
<meta charset="utf-8">
<script>
//p_00989_cargando("cargando_imagen");
<?
	function p_01310_consulta_smile_datos(){
		
		if($datos = file_get_contents("http://s.oxbridge.es/ox/estructura_web/codigo/alumno_v2/smiles_02_temario_03_asp_02_select_01_smiles_conseguidos_trinity.asp"
												."?p_0001368_get_alumno_id=".$_GET['alumno_id']
												."&p_0001368_get_bd=".$_GET['bd']
												."&p_0001368_get_nivel=".$_GET['nivel']
												."&p_0001368_get_trinity=".$_GET['trinity']
												."&p_0001368_get_finalizador_js=window.parent.p_01171_final_consulta_smiles();"
												)){
			echo $datos;
		}else{
			p_0988_consula_datos_clases();
		}

	}
	p_01310_consulta_smile_datos();
?>
</script>
</html>