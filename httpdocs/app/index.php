<?
session_start();
?>
<!--
Pag. ID: 00955
include: 00956-00963

id reservado para paginas:
	00955-00964
   00-00
-->

//PONGO UN QUERYSTRING PARA QUE DELIMITAR LA ENTRADA HASTA QUE TENGAMOS ACTIVADO UN PASSWORD
if ($_GET['dev']=='monica'){

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
				$version_pagina=$_SERVER['DOCUMENT_ROOT']."/app/VERSIONS/".$_GET['VER']."/";
				$version_pagina_src="https://app.oxbridge.es/app/VERSIONS/".$_GET['VER']."/";
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
		global $VERSION_LISTADO, $version_pagina;

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

	include ver_url("movil/p_00955_index.php","");

}else{
	?>
		<script type="text/javascript">
			alert("querystring");
		</script>
    <?
}
?>
