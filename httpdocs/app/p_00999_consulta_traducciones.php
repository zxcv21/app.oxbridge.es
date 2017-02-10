<!--
id: p_00999
-->

<script>
<?
function p_00999_corrige_texto_literal($texto){
	$texto=str_replace("&lt;","<",$texto);
	$texto=str_replace("&gt;",">",$texto);
	$texto=str_replace("&#39;","\'",$texto);
	$texto=str_replace("&#34;","\"",$texto);

	return $texto;
}
function p_00999_corrige_escape_comillas($texto){
	$texto=str_replace("\r","",$texto);
	$texto=str_replace("'","\'",$texto);
	$texto=str_replace('"','\"',$texto);

	$texto=str_replace("&lt;","<",$texto);
	$texto=str_replace("&gt;",">",$texto);
	$texto=str_replace("&#39;","\'",$texto);
	$texto=str_replace("&#34;","\"",$texto);

	return $texto;
}

function p_00999_corrige($texto){
/*	$texto=str_replace("\r","",$texto);
	$texto=str_replace("\\","&#92;",$texto);
	$texto=str_replace("'","&#39;",$texto);
	$texto=str_replace("\"","&#49;",$texto);
	$texto=str_replace("<","&lt;",$texto);
	$texto=str_replace(">","&gt;",$texto);
	$texto=str_replace("&lt;p&gt;","<p>",$texto);
	$texto=str_replace("&lt;/p&gt;","</p>",$texto);
	$texto=str_replace("&lt;br/&gt;","<br/>",$texto);
	$texto=str_replace("&lt;br&gt;","<br/>",$texto);
	$texto=str_replace("&lt;","<",$texto);
	$texto=str_replace("&gt;",">",$texto);
	$texto=str_replace("&#39;","\'",$texto);
	$texto=str_replace("&#34;","\"",$texto);
*/
	$texto=str_replace("\r","",$texto);
	$texto=str_replace("'","\'",$texto);
	$texto=str_replace('"','\"',$texto);

	$texto=str_replace("&lt;","<",$texto);
	$texto=str_replace("&gt;",">",$texto);
	$texto=str_replace("&#39;","\'",$texto);
	$texto=str_replace("&#34;","\"",$texto);

	return $texto;
}

function p_00999_corrige_js($texto)
{
	$texto=str_replace("\r","",$texto);
	$texto=str_replace("\\","&#92;",$texto);
	$texto=str_replace("'","&#39;",$texto);
	$texto=str_replace("\"","&#49;",$texto);
	$texto=str_replace("<","&lt;",$texto);
	$texto=str_replace(">","&gt;",$texto);
	$texto=str_replace("&lt;p&gt;","<p>",$texto);
	$texto=str_replace("&lt;/p&gt;","</p>",$texto);
	$texto=str_replace("&lt;br/&gt;","<br/>",$texto);
	$texto=str_replace("&lt;br&gt;","<br/>",$texto);
	$texto=str_replace("&lt;","<",$texto);
	$texto=str_replace("&gt;",">",$texto);
	/*$texto=str_replace("&#39;","\\'",$texto);
	$texto=str_replace("&#34;","\\"",$texto);*/
	return $texto;
}

$TEXTOS=array();
//coneccion bdd idiomas
include("conn_idiomas_webs.php");

/*$IDIOMA="esp";*/

switch($IDIOMA){
	case "esp":{
		$idioma_sql="`idioma_001_espanyol`";
	break;}

	case "eng":{
		$idioma_sql="`idioma_002_english`";
	break;}

	case "cat":{
		$idioma_sql="`idioma_003_catala`";
	break;}

	default:{
		$idioma_sql="`idioma_001_espanyol`";
	break;}
}
echo "console.info('idioma: ".$idioma_sql."');";


$consulta="SELECT `referencia_texto`.texto_id , `referencia_texto`.pagina_id , ".$idioma_sql.".traduccion";
$consulta=$consulta." FROM referencia_texto, ".$idioma_sql."";
$consulta=$consulta." WHERE `referencia_texto`.texto_id LIKE ".$idioma_sql.".texto_id";
$consulta=$consulta." AND ".$idioma_sql.".traduccion LIKE '%".$_POST['buscar']."%'";

$resultado=mysql_query($consulta);
if(!$resultado){
	echo "alert(\"error:".mysql_error()."\")";
}else{
	echo "TEXTOS=[];\n";
	while ($fila = mysql_fetch_array($resultado)){
		//$TEXTOS[][2]->texto directamente, $TEXTOS[][3]->texto que pasa por javascript (escape de comillas)
		//$TEXTOS[$fila[0]]=array($fila[0],$fila[1],p_00999_corrige($fila[2]));
		$TEXTOS[$fila[0]]=array($fila[0],$fila[1],p_00999_corrige_texto_literal($fila[2]),p_00999_corrige_escape_comillas($fila[2]));

		//TEXTOS[].text->texto que pasa por javascript (escape de comillas)
		//echo "TEXTOS['".$fila[0]."']={'id':'".$fila[0]."','pag':'".$fila[1]."','text':'".p_00999_corrige_js($fila[2])."'};\n";
		echo "TEXTOS['".$fila[0]."']={'id':'".$fila[0]."','pag':'".$fila[1]."','text':'".p_00999_corrige_escape_comillas($fila[2])."'};\n";
	}
}

//fin de la coneccion
include("conn_fin_idiomas_webs.php");

?>
//array fechas
month = TEXTOS[16].text.split(",");
week = TEXTOS[17].text.split(",");

</script>
