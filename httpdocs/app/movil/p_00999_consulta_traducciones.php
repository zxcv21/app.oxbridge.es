<!--
id: p_00999
-->

<script>
alert();
p_01169_cargar_presonal_datos_info();

<?

function p_00999_corrige($texto){
	$texto=str_replace("\r","",$texto);
	$texto=str_replace("\\","&#92;",$texto);
	$texto=str_replace("'","&#39;",$texto);
	$texto=str_replace("<","&lt;",$texto);
	$texto=str_replace(">","&gt;",$texto);
	$texto=str_replace("&lt;p&gt;","<p>",$texto);
	$texto=str_replace("&lt;/p&gt;","</p>",$texto);
	$texto=str_replace("&lt;br&gt;","<br>",$texto);
	$texto=str_replace("&lt;","<",$texto);
	$texto=str_replace("&gt;",">",$texto);
	return $texto;
}

$TEXTOS=array();
//coneccion bdd idiomas
include("conn_idiomas_webs.php");
$_POST['idioma']="cat";

if(isset($_POST['idioma'])){
	switch($_POST['idioma']){
		case "esp":{
			$IDIOMA="`idioma_001_espanyol`";
			break;}
		case "ing":{
			$IDIOMA="`idioma_002_ingles`";
			break;}
		case "cat":{
			$IDIOMA="`idioma_003_catala`";
			break;}
		default:{
			$IDIOMA="`idioma_001_espanyol`";
			break;}
	}
}else{
	$IDIOMA="`idioma_001_espanyol`";
}

$consulta="SELECT `referencia_texto`.texto_id , `referencia_texto`.pagina_id , ".$IDIOMA.".traduccion";
$consulta=$consulta." FROM referencia_texto, ".$IDIOMA."";
$consulta=$consulta." WHERE `referencia_texto`.texto_id LIKE ".$IDIOMA.".texto_id";
$consulta=$consulta." AND ".$IDIOMA.".traduccion LIKE '%".$_POST['buscar']."%'";

$resultado=mysql_query($consulta);
if(!$resultado){
	echo "alert(\"error:".mysql_error()."\")";
}else{
	echo "TEXTOS=[];\n";
	while ($fila = mysql_fetch_array($resultado)){
		$TEXTOS[$fila[0]]=array($fila[0],$fila[1],p_00999_corrige($fila[2]));
		echo "TEXTOS['".$fila[0]."']={'id':'".$fila[0]."','pag':'".$fila[1]."','text':'".p_00999_corrige($fila[2])."'};\n";  
	}
}

//fin de la coneccion
include("conn_fin_idiomas_webs.php");

?>
</script>