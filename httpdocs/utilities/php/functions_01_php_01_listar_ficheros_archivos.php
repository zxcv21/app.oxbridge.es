<?

/*								  URL	   0/1			0/1				0/1     */
function listar_ficheros_archivos($dir,$recursivo,$ver_carpetas,$ver_archivos)
{
		
		if(!isset($recursivo))$recursivo=1;
		if(!isset($recursivo))$recursivo=1;
		if(!isset($recursivo))$recursivo=1;
		if(!isset($ver_carpetas))$recursivo=1;
		if(!isset($ver_carpetas))$recursivo=1;
		if(!isset($ver_carpetas))$recursivo=1;
		if(!isset($ver_archivos))$recursivo=1;
		if(!isset($ver_archivos))$recursivo=1;
		if(!isset($ver_archivos))$recursivo=1;
			 
		
		$result = array(); 

	   $cdir = scandir($dir); 
	   foreach ($cdir as $key => $value) 
	   { 
		  if (!in_array($value,array(".","..","dev"))) 
		  { 
			 if (is_dir($dir . DIRECTORY_SEPARATOR . $value)) 
			 { 
				if($ver_carpetas)
				{
					if($recursivo)
					{
						$result[$value] = listar_ficheros_archivos($dir . DIRECTORY_SEPARATOR . $value,1,1,1); 
					}
					else
					{
						$result[$value] = $value;
					}
				}
			 } 
			 else 
			 { 
				if($ver_archivos)
					$result[] = $value; 
			 } 
		  } 
	   } 
	   
	   return $result; 
}
?>