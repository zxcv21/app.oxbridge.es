<?
/*
Page ID: p_0010214
File: /front_end/students/students_02_template_01_html_01_template.php
*/
if(isset($_POST['p_0010214_carga_inicial']))$p_0010214_carga_inicial=$_POST['p_0010214_carga_inicial'];
else if(isset($_GET['p_0010214_carga_inicial']))$p_0010214_carga_inicial=$_GET['p_0010214_carga_inicial'];
else $p_0010214_carga_inicial=0;

if($p_0010214_carga_inicial!=0) include($_SERVER['DOCUMENT_ROOT']."/app/utilities/librerias_10_php_01_basicas.php");


if(isset($_POST['p_0000955_input_dev']))
{
	$_GET['VER']=$_POST['p_0000955_input_dev'];
}
if(isset($_GET['VER']))
{
	if($_GET['VER']!="")
	{
		if(substr(strtolower($_GET['VER']),0,1)!="#")
		{
			$version_pagina=$_SERVER['DOCUMENT_ROOT']."/app/DEV/".$_GET['VER']."/";
			$version_pagina_src="https://app.oxbridge.es/app/DEV/".$_GET['VER']."/";
			echo "<script>var version_pagina='https://app.oxbridge.es/app/DEV/".$_GET['VER']."/';</script>";
		}
		else
		{
			$version_pagina=$_SERVER['DOCUMENT_ROOT']."/app/VERSIONS/".substr(strtolower($_GET['VER']),1)."/";
			$version_pagina_src="https://app.oxbridge.es/app/VERSIONS/".substr(strtolower($_GET['VER']),1)."/";
			echo "<script>var version_pagina='https://app.oxbridge.es/app/VERSIONS/".substr(strtolower($_GET['VER']),1)."/'</script>";
		}
	}
	else
	{
		$_GET['VER']="";
		$version_pagina=$_SERVER['DOCUMENT_ROOT']."/app/";
		$version_pagina_src="https://app.oxbridge.es/app/";	
		echo "<script>var version_pagina='https://app.oxbridge.es/app/';</script>";
	}
}
else
{
	$_GET['VER']="";
	$version_pagina=$_SERVER['DOCUMENT_ROOT']."/app/";	
	$version_pagina_src="https://app.oxbridge.es/app/";	
	echo "<script>var version_pagina='https://app.oxbridge.es/app/';</script>";
}
$VERSION_LISTADO = array();
include $version_pagina."version_listado.php";

function ver_url($url,$tipo)
{
	global $VERSION_LISTADO, $version_pagina, $version_pagina_src;
	
	if($_GET['VER']!="")
	{
		$version=false;
		foreach($VERSION_LISTADO as $i)
		{
			if($i==$url)
			{
				$version=true;
			}
		}
		if($version)
		{
			$r=$version_pagina.$url;
			if($tipo=="src")
			{
				$r=$version_pagina_src.$url;
			}
		}
		else
		{
			$r=$_SERVER['DOCUMENT_ROOT']."/app/".$url;
			if($tipo=="src")
			{
				$r="https://app.oxbridge.es/app/".$url;
			}
		}
	}
	else
	{
		$r=$_SERVER['DOCUMENT_ROOT']."/app/".$url;
		if($tipo=="src")
		{
			$r="https://app.oxbridge.es/app/".$url;
		}
	}
	return $r;
}



?>
<meta charset="utf-8"></meta>
<meta name="viewport" content="user-scalable=1, initial-scale=1, minimum-scale=1">
<script type="text/javascript" src="<? echo p_0010015_ver_url('0010226','src'); ?>"></script>
<script>
	secciones['menu_personal'].finalizador={
		
		function()
		{
			document.getElementById('p_0010214_div_contenido_pagina_menu_personal').innerHTML=p_0010013_js_f_03_pintar_html(
				<? echo "'".p_0010015_ver_url("0010128","src")."'";?>
				,<? echo "'".p_0010015_ver_url("0010149","src")."'";?>
				,<? echo "''";?>
				,<? echo "'".p_0010015_ver_url("0010152","src")."'";?>
				,<? echo "'".p_0010015_ver_url("0010167","src")."'";?>
				,<? echo "'".p_0010015_ver_url("0010164","src")."'";?>
				,<? echo "'p_0010009_div_oculto_librerias'";?>
				/*
				,'".p_0010015_ver_url("0010146","src")."'
				,'".p_0010015_ver_url("0010149","src")."'
				,''
				,'".p_0010015_ver_url("0010152","src")."'
				,'".p_0010015_ver_url("0010167","src")."'
				,'".p_0010015_ver_url("0010164","src")."'
				,\"p_0010009_div_oculto_librerias\")";	
				*/
			);
		}
	}
</script>
<script type="text/javascript" src="<? echo p_0010015_ver_url('0010222','src'); ?>"></script>
<link rel="stylesheet" type="text/css" href="<? echo p_0010015_ver_url('0010218','src');?>"/>


<!-- general -->
<!-- EXPORTADO--> <script src="https://app.oxbridge.es/app/exportado/libraries/jquey_load_page_into_div.js"></script>
<!-- EXPORTADO--> <script src="https://app.oxbridge.es/app/utilities/js/cookies_01_set_get.js"></script>
<!-- EXPORTADO--> <? include $_SERVER['DOCUMENT_ROOT']."/app/exportado/movil/p_00986_estilos.php"; ?>
<!-- EXPORTADO--> <? include $_SERVER['DOCUMENT_ROOT']."/app/exportado/movil/p_00987_menu_estilo.php"; ?>
<!-- EXPORTADO--> <? include $_SERVER['DOCUMENT_ROOT']."/app/exportado/movil/p_00990_over_all.php"; ?>
<!-- EXPORTADO--> <? include $_SERVER['DOCUMENT_ROOT']."/app/exportado/movil/p_01001_input_doble_rango.php"; ?>
<!-- EXPORTADO--> <? include $_SERVER['DOCUMENT_ROOT']."/app/exportado/p_01004_mail.php"; ?>
<!-- EXPORTADO--> <? include $_SERVER['DOCUMENT_ROOT']."/app/exportado/p_01005_formulario_ajax.php"; ?>
<!-- EXPORTADO--> <? include $_SERVER['DOCUMENT_ROOT']."/app/exportado/movil/p_00989_jscript.php"; ?>

<!-- guarda el acceso del alumno a la app -inicio - no quitar -->
<!-- EXPORTADO--> <? $p_0001475_php_usuario_id=$alumno_id_nuevo; ?>
<!-- EXPORTADO--> <? //include $_SERVER['DOCUMENT_ROOT']."/exportado\sesiones\sesion_05_conexiones_04_php_03_insert_01_conexion.php";//guardar fecha conexion ?>

<!-- guarda el acceso del alumno a la app -fin -->
<!-- EXPORTADO--> <? $p_0001316_php_usuario_id=$alumno_id_nuevo; ?>
<!-- EXPORTADO--> <? /*include $_SERVER['DOCUMENT_ROOT']."/exportado\sesiones\sesion_03_idioma_01_select.php";*/ $IDIOMA="esp"; ?> <!-- consulta del idioma del usuario -->
<!-- EXPORTADO--> <? include $_SERVER['DOCUMENT_ROOT']."/app/exportado/p_00999_consulta_traducciones.php" ?>
<!-- EXPORTADO--> <? if($_GET['TIPO']!='no-logon')include $_SERVER['DOCUMENT_ROOT']."/app/exportado/p_00988_datos.php";?>
<!-- EXPORTADO--> <? include $_SERVER['DOCUMENT_ROOT']."/app/exportado/p_01005_formulario_ajax.php"; ?>
<!-- EXPORTADO--> <? include $_SERVER['DOCUMENT_ROOT']."/app/exportado/p_01309_crear_grafico_torta.php";?>

<!-- clases-->
<!-- EXPORTADO--> <? include $_SERVER['DOCUMENT_ROOT']."/app/exportado/movil/p_00991_clases_estilo.php";?>
<!-- EXPORTADO--> <? include $_SERVER['DOCUMENT_ROOT']."/app/exportado/movil/p_00992_clases_calendario_estilo.php";?>
<!-- EXPORTADO--> <? include $_SERVER['DOCUMENT_ROOT']."/app/exportado/movil/p_00993_clases_actividades_estilo.php";?>
<!-- EXPORTADO--> <? include $_SERVER['DOCUMENT_ROOT']."/app/exportado/movil/p_00994_clases_formulario_valoracion.php";?>
<!-- EXPORTADO--> <? include $_SERVER['DOCUMENT_ROOT']."/app/exportado/movil/p_01003_clases_js.php";?>

<!-- horario-->
<!-- EXPORTADO--> <? include $_SERVER['DOCUMENT_ROOT']."/app/exportado/movil/p_00995_horario_estilo.php";?>
<!-- EXPORTADO--> <? include $_SERVER['DOCUMENT_ROOT']."/app/exportado/movil/p_01000_horario_js.php";?>

<!-- personal info
<!-- EXPORTADO--> <? include $_SERVER['DOCUMENT_ROOT']."/app/exportado/movil/p_01168_personal_estilo.php";?>
<!-- EXPORTADO--> <? include $_SERVER['DOCUMENT_ROOT']."/app/exportado/movil/p_01169_personal_js.php";?>

<!-- smiles-->
<!-- EXPORTADO--> <? include $_SERVER['DOCUMENT_ROOT']."/app/exportado/movil/smiles/p_01171_smile_js.php";?>
<!-- EXPORTADO--> <? include $_SERVER['DOCUMENT_ROOT']."/app/exportado/movil/smiles/p_01172_smile_estilo.php";?>
<!-- EXPORTADO--> <? include $_SERVER['DOCUMENT_ROOT']."/app/exportado/movil/smiles/p_01173_preguntas_estilo.php";?>
<!-- EXPORTADO--> <? include $_SERVER['DOCUMENT_ROOT']."/app/exportado/movil/smiles/p_01174_preguntas_js.php";?>
<!-- EXPORTADO--> <? include $_SERVER['DOCUMENT_ROOT']."/app/exportado/movil/smiles/p_01176_smile_datos.php";?>

<!-- tutorial-->
<!-- EXPORTADO--> <? include $_SERVER['DOCUMENT_ROOT']."/app/exportado/movil/tutorial/p_01307_tutorial_js.php";?>
<!-- EXPORTADO--> <? include $_SERVER['DOCUMENT_ROOT']."/app/exportado/movil/tutorial/p_01308_tutorial_css.php";?>


<?  include(p_0010015_ver_url('0010215',''));?>
<?  include(p_0010015_ver_url('0010216',''));?>
<?  //include($_SERVER['DOCUMENT_ROOT']."/front_end/students/students_02_template_01_html_03_menu.php"); ?>

<div id="p_0010214_divs_donde_carga_contenido_cada_seccion"></div>