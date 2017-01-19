<!--
-ID Pag: p_01396
-NAME: firmar_dia_lectivo_escaneo.php
-->
<?

function p_01394_rellenar_con_0($numero,$largo)
{
	$numero+="";
	while(strlen($numero)<$largo)
	{
		$numero="0"."".$numero;
	}
	return $numero;
}

$archivo="";
$directorio="";
$ruta=$_SERVER['DOCUMENT_ROOT']."/app/FIRMAS/imagenes/";
$fichero_subido="";

foreach($_FILES as $clave=>$p_01396_dia_firmado)
{
	$id=substr($clave,16);
	
	if($_FILES[$clave]['name'] != "")
	{
		$tipo=strtolower(substr($_FILES[$clave]['name'],-3));
		$tamanyo=strtolower($_FILES[$clave]['size']);
		
		if($tipo=="jpg"||$tipo=="jpeg"||$tipo=="png"||$tipo=="bmp"||$tipo=="tif"&& $tamanyo<1200000 && $tamanyo>0)
		{
			$directorio=substr($_POST['p_01396_fecha_'.$id], 0, -3)."/";
			$archivo=$_POST['p_01396_fecha_'.$id]."_".p_01394_rellenar_con_0($_POST['p_01396_dia_lectivo_id_'.$id],9)."_".p_01394_rellenar_con_0($_POST['p_01396_alumno_id_'.$id],9)."_foto.".$tipo;
			
			$fichero_subido=$ruta.$directorio.$archivo;
			
			if(!file_exists($ruta.$directorio)){
				mkdir ($ruta.$directorio);
				//echo "Se ha creado el directorio: " . $ruta."<br>";
			}
			
			if (move_uploaded_file($_FILES[$clave]['tmp_name'], $fichero_subido))
			{
				echo "El fichero de:".$_POST['p_01396_fecha_'.$id]." ".$clave." es válido y se subió con éxito.\n";

				$p_01396_php_url="http://s.oxbridge.es/ox/estructura_web/codigo/alumno_v2/clases_03_firma_02_asp_02_modificar_firma_alumno_foto_del_profesor.asp";
				$p_01396_php_url.="?p_0001436_get_dia_lectivo_id=".$_POST['p_01396_dia_lectivo_id_'.$id];
				$p_01396_php_url.="&p_0001436_get_alumno_id=".$_POST['p_01396_alumno_id_'.$id];
				file_get_contents($p_01396_php_url);
				?><script type="text/javascript">
					var p_01396_js_id="p_01395_div_dia_lectivo_id_<? echo($_POST['p_01396_dia_lectivo_id_'.$id]); ?>_alumno_id_<? echo($_POST['p_01396_alumno_id_'.$id]); ?>";
					if( window.parent.document.getElementById(p_01396_js_id) )
					{
						var p_01396_js_elemento_a_eliminar=window.parent.document.getElementById(p_01396_js_id);
					}
					else
					{
						if( document.getElementById(p_01396_js_id) )
						{
							var p_01396_js_elemento_a_eliminar=document.getElementById(p_01396_js_id);
						};
					};
					var p_01396_js_elemento_padre=p_01396_js_elemento_a_eliminar.parentNode;
					p_01396_js_elemento_padre.removeChild(p_01396_js_elemento_a_eliminar);

					/*
					var p_01396_js_id="p_01395_div_dia_lectivo_id_<? echo($_POST['p_01396_dia_lectivo_id_'.$id]); ?>_alumnos";
					if( window.parent.document.getElementById(p_01396_js_id) )
					{
						var p_01396_js_innerHTML=window.parent.document.getElementById(p_01396_js_id).innerHTML;
					}
					else
					{
						if( document.getElementById(p_01396_js_id) )
						{
							var p_01396_js_innerHTML=document.getElementById(p_01396_js_id).innerHTML;
						};
					};
					if( p_01396_js_innerHTML.length == parseInt(0) || p_01396_js_innerHTML == null )
					{
						var p_01396_js_id="p_01395_div_dia_lectivo_id_<? echo($_POST['p_01396_dia_lectivo_id_'.$id]); ?>";
						if( window.parent.document.getElementById(p_01396_js_id) )
						{
							var p_01396_js_elemento_a_eliminar=window.parent.document.getElementById(p_01396_js_id);
						}
						else
						{
							if( document.getElementById(p_01396_js_id) )
							{
								var p_01396_js_elemento_a_eliminar=document.getElementById(p_01396_js_id);
							};
						};
						var p_01396_js_elemento_padre=p_01396_js_elemento_a_eliminar.parentNode;
						p_01396_js_elemento_padre.removeChild(p_01396_js_elemento_a_eliminar);
					};
					*/

				</script><?

			}
			else
			{
				echo "¡Error! en:".$_POST['p_01396_fecha_'.$id]." ".$clave."\n";
			}
		}
	}
}

?>
<script type="text/javascript">
	
</script>