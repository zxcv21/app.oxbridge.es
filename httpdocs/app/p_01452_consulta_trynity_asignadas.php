<?
/*
Pag ID: p_01452
File: /p_01452_consulta_trynity_asignadas.php
*/
?>

<?

if($_GET['p_01452_alumno_id'])$p_01452_alumno_id=$_GET['p_01452_alumno_id'];
else $p_01452_alumno_id=$_POST['p_01452_alumno_id'];

if(isset($p_01452_alumno_id))
{
	$p_01452_host="oxsite.com";
	$p_01452_user="smiles";
	$p_01452_pswd="gv5V1x!2";
	$p_01452_db="smiles";
	
	$p_01452_conn_servidor_oxsite_bbs_smiles = mysqli_connect($p_01452_host, $p_01452_user, $p_01452_pswd, $p_01452_db);
	
	mysqli_set_charset($p_01452_conn_servidor_oxsite_bbs_smiles,"utf8");
	
	$p_01452_consulta="SELECT * FROM trinity_06_redacciones_01_guiada_01_asignadas WHERE alumno_id=".$p_01452_alumno_id." AND ejecucion=1";
	
	if($p_01452_result=mysqli_query($p_01452_conn_servidor_oxsite_bbs_smiles,$p_01452_consulta))
	{
		$p_01452_res= "[";
		while($p_01452_a=mysqli_fetch_array($p_01452_result,MYSQLI_ASSOC))
		{
			$p_01452_res.= json_encode($p_01452_a).",\n";
		}
		if(strlen($p_01452_res)>1) $p_01452_res = substr($p_01452_res,0,-2);
		$p_01452_res.= "]";
	}
	else
	{
		$p_01452_res="[]e1";
	}
}
else
{
	$p_01452_res="[]e2";
}		
		
echo $p_01452_res;
?>