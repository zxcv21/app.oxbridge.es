<?
/*
Pag ID: p_01453
File: /p_01453_update_trynity_asignadas.php?p_01453_redaccion_id=1&p_01453_pregunta_texto=test&p_01453_pregunta_finalizado=1
*/
?>

<?
if(isset($_GET['p_01453_redaccion_id']))$p_01453_redaccion_id=$_GET['p_01453_redaccion_id'];
else $p_01453_redaccion_id=$_POST['p_01453_redaccion_id'];

if(isset($_GET['p_01453_pregunta_texto']))$p_01453_pregunta_texto=$_GET['p_01453_pregunta_texto'];
else $p_01453_pregunta_texto=$_POST['p_01453_pregunta_texto'];

if(isset($_GET['p_01453_pregunta_finalizado']))$p_01453_pregunta_finalizado=$_GET['p_01453_pregunta_finalizado'];
else $p_01453_pregunta_finalizado=$_POST['p_01453_pregunta_finalizado'];

if(!isset($p_01453_pregunta_finalizado))$p_01453_pregunta_finalizado="false";

$p_01453_pregunta_texto=

$p_01453_remplazar = array
	(
		'Á','Ä','À','É','È','Ë','Í','Ì','Ï','Ó','Ö','Ò','Ú','Ù','Ü','´','`','¨','Ñ','Ç',
		'á','ä','à','è','é','ë','ì','í','ï','ò','ó','ö','ù','ú','ü','`','´','¨','ñ','ç',
		'&','"',"'",';','\\','*','#','+','.','-','<','>','?'
	);
$p_01453_remplazado = array	
	(
		'&#193;','&#196;','&#192;','&#201;','&#200;','&#203;','&#205;','&#204;','&#207;','&#211;','&#214;','&#210;','&#218;','&#217;','&#220;','&#180;','&#96;','&#168;','&#209;','&#199;',
		'&#225;','&#228;','&#224;','&#232;','&#233;','&#235;','&#236;','&#237;','&#239;','&#242;','&#243;','&#246;','&#249;','&#250;','&#252;','&#96;','&#180;','&#168;','&#241;','&#231;',
		'&#38;','&#34;','&#39;','&#59;','&#92;','&#42;','&#35;','&#43;','&#46;','&#45;','&#60;','&#62;','&#63;'
	);

$p_01453_pregunta_texto  = str_replace($p_01453_remplazar, $p_01453_remplazado, $p_01453_pregunta_texto);


if(isset($p_01453_redaccion_id)&&isset($p_01453_pregunta_texto))
{
	$p_01453_host="oxsite.com";
	$p_01453_user="smiles";
	$p_01453_pswd="gv5V1x!2";
	$p_01453_db="smiles";
	
	$p_01453_conn_servidor_oxsite_bbs_smiles = mysqli_connect($p_01453_host, $p_01453_user, $p_01453_pswd, $p_01453_db);
	
	mysqli_set_charset($p_01453_conn_servidor_oxsite_bbs_smiles,"utf8");
	
	$p_01453_fecha_insert=date("'Y','m','d','h','i','s'");
	$p_01453_fecha_update=
		"modificacion_fecha_anyo='".date('Y')."'
		,modificacion_fecha_mes='".date('m')."'
		,modificacion_fecha_dia='".date('d')."'
		,modificacion_horario_hora='".date('h')."'
		,modificacion_horario_minuto='".date('i')."'
		,modificacion_horario_segundo='".date('s')."'"
		;
	
	$p_01453_consulta="
		INSERT INTO
		trinity_06_redacciones_01_guiada_02_redaccion 
			(
				redaccion_guiada_id,
				redaccion,
				modificacion_fecha_anyo,
				modificacion_fecha_mes,
				modificacion_fecha_dia,
				modificacion_horario_hora,
				modificacion_horario_minuto,
				modificacion_horario_segundo
			)
		VALUES
			(
				'".$p_01453_redaccion_id."',
				'".$p_01453_pregunta_texto."',
				".$p_01453_fecha_insert."
			)
		ON DUPLICATE KEY
		UPDATE redaccion='".$p_01453_pregunta_texto."', ".$p_01453_fecha_update."
	";
	
	$p_01453_consulta_2="";
	echo "<br>$p_01453_pregunta_finalizado";
	if($p_01453_pregunta_finalizado!="false")
	{
		$p_01453_fecha_correccion="
		";
		$p_01453_consulta_2=";
			UPDATE trinity_06_redacciones_01_guiada_01_asignadas
			SET
				ejecucion='0',
				correccion='".$p_01453_pregunta_finalizado."',
				correccion_fecha_dia='".date('d')."',
				correccion_fecha_mes='".date('m')."',
				correccion_fecha_anyo='".date('Y')."'
			WHERE redaccion_guiada_id=".$p_01453_redaccion_id."
		";
	}
	
	echo "<br>$p_01453_consulta<br>$p_01453_consulta_2<br>";
	
	
	if($p_01453_result=mysqli_multi_query($p_01453_conn_servidor_oxsite_bbs_smiles,$p_01453_consulta.$p_01453_consulta_2))$p_01453_res=1;
	else $p_01453_res=0;
	
}
else
{
	$p_01453_res=0;
}		
		
echo $p_01453_res;
?>