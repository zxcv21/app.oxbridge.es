<!--
-ID pag: p_01447
-NAME: p_01447_smiles_update_nivel.php
-->
<html>
<meta hcontent="charset=utf-8"/>
<?
echo file_get_contents
(
 	"http://s.oxbridge.es/ox/estructura_web/codigo/alumno_v2/informacion_personal_01_datos_presonales_01_asp_03_guardar_nivel.asp".
 	"?p_0001445_get_alumno_id=".$_POST['p_01447_post_alumno_id'].
	"&p_0001445_get_nivel=".$_POST['p_01447_post_nivel'].
	"&p_0001445_get_finalizador_js=window.parent.p_01447_finalizador();"
);
?>
</html>