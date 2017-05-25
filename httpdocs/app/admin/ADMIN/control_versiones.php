<html>
<head><title>Control Versiones</title></head>
<style>
.directorios
{
	cursor:pointer;
	color:blue;
	font-weight: bold;
}
.atras
{
	cursor:pointer;
	color:black;
	font-weight: bold;
}
</style>
<body>
	<div id="titulo_directorios" style='margin-top: 30px;font-size: 30px;margin-bottom: 1%;'>Directorios y ficheros</div>
	<div id="contenido" style="overflow: auto;height: 300px;"></div>

	<h2>Rutas: </h2>
	<form enctype="multipart/form-data" action="https://app.oxbridge.es/app/admin/ADMIN/control_versiones.php" method="post">
	<input type="hidden" name="MAX_FILE_SIZE" value="99999999" />
	<div>Ruta Origen: <input id="ruta_origen" name="ruta_origen" type="text" size="50" onFocus="this.blur();" style="border:0";/></div><br>
	<div>Ruta Destino: <div style="display:inline-block;" id="directorio_trabajo">/DEV/DANI</div><input style="border:0" onFocus="this.blur();" id="ruta_destino" name="ruta_destino" type="text" size="50"/></div><br>
	<h2>Elige Usuario: </h2>
	<div id="selector_usuario_ftp"></div>
	<!-- <select name="usuarios" id="usuarios_ftp" onChange="ruta_cada_usuario();" style="margin-bottom:10px;"> -->
	   <!-- <option value="fernando" selected="selected">Fernando</option> -->
	   <!-- <option value="miguel">Miguel</option> -->
	   <!-- <option value="daniel">Daniel</option> -->
	<!-- </select> -->
	<div><input type="submit" name="subir_archivo" value="Subir" /></div>
	</form>
	<div id="mensaje_error"></div>
	<div id="mensaje_error2"></div>

<script type="text/javascript">

<?php
//if(isset($_GET['usuario']))$_POST['usuarios']=$_GET['usuario'];
//echo "usuario='".$_POST['usuarios']."'";

function listar_directorios_ruta($dir)
{ 
   
	$result = array(); 

	   $cdir = scandir($dir); 
	   foreach ($cdir as $key => $value) 
	   { 
		  if (!in_array($value,array(".","..","DEV","VERSIONS"))) 
		  { 
			 if (is_dir($dir . DIRECTORY_SEPARATOR . $value)) 
			 { 
				$result[$value] = listar_directorios_ruta($dir . DIRECTORY_SEPARATOR . $value); 
			 } 
			 else 
			 { 
				$result[] = $value; 
			 } 
		  } 
	   } 
	   
	   return $result; 
} 
echo "\narbol=".json_encode(listar_directorios_ruta($_SERVER['DOCUMENT_ROOT'].'/app/')).";";
echo "\nusuarios_ftp_server=".json_encode(listar_directorios_ruta($_SERVER['DOCUMENT_ROOT'].'/app/DEV/')).";";
$array_usuarios_ftp = listar_directorios_ruta($_SERVER['DOCUMENT_ROOT'].'/app/DEV/');

//$_SERVER['DOCUMENT_ROOT'].'/app/'

if  ( isset ( $_POST [ 'subir_archivo' ])) 
{ 
	if($_POST['ruta_origen']!="" && $_POST['ruta_destino']!="")
	{
		$valor_usuario=$_POST['usuarios'];
		$listados_ficheros_ocupados=Array();
		/*
		foreach($array_usuarios_ftp as $key => $valor)
		{
			$listados_ficheros_ocupados=array_merge($listados_ficheros_ocupados,obtener_array_fichero($_SERVER['DOCUMENT_ROOT']."/app/DEV/".$key."/version_listado.php"));
		}
		*/
		$fichero_ocupado=false;
		foreach($listados_ficheros_ocupados as $valor)
		{
			//echo "\n" . substr($valor,0,-2);
			//echo "\n" . trim($valor);
			if(trim($valor)==substr($_POST['ruta_origen'],1))
			{
					$fichero_ocupado=true;
			}
		}
	
		if($fichero_ocupado)
		{
			echo "document.getElementById('mensaje_error').innerHTML='El fichero esta ocupado o ya lo tienes.';";
		}
		else
		{
			$_POST['ruta_origen'] = $_SERVER['DOCUMENT_ROOT']."/app".$_POST['ruta_origen'];
			subir_fichero($_POST['ruta_origen'],$_POST['ruta_destino'],basename($_POST['ruta_origen']),$valor_usuario);
		}
	}
}

function obtener_array_fichero($ruta)
{
	$js = file($ruta);
	$patron ='/(^\<\?array_push\(\$VERSION_LISTADO,\".*\"\);\?\>)/';
	$array = Array();
	
	foreach( $js as $indice=>$valor)
	{
		if(preg_match($patron,$js[$indice]))
		{
			$js[$indice]=str_replace('<?array_push($VERSION_LISTADO,"','',$js[$indice]);
			$js[$indice]=str_replace('");?>','',$js[$indice]);
			array_push($array,$js[$indice]);
		}
	}
	return $array;
}


function subir_fichero($ruta_origen,$destino,$nombre_fichero,$usuario) 
{
	$destino_principal_sin_cambiar = $destino;
	
	if(substr($destino,-1)!="/"){$destino.="/";}
	if(substr($ruta_origen,-1)=="/"){$ruta_origen=substr($ruta_origen,0,strlen($ruta_origen)-1);}
	if(substr($destino,0,1)=="/"){$destino=substr($destino,1);}
	if(substr($ruta_origen,0,1)=="/"){$ruta_origen=substr($ruta_origen,1);}

		if(!is_dir($_SERVER['DOCUMENT_ROOT']."/app/DEV/".$usuario."/".$destino))
		{
			if($destino_principal_sin_cambiar!="/")
			{
				$directorios_ruta = explode("/",$destino);
			}
			else
			{
				$directorios_ruta[0]="/";
			}
				/******CREACIÓN DE LA RUTA*****/
				if($directorios_ruta[0]=="/")
				{
					/******SUBIDA DEL FICHERO*****/
						$subido=copy($ruta_origen,$_SERVER['DOCUMENT_ROOT']."/app/DEV/".$usuario."/".$destino.$nombre_fichero);
						if($subido)
						{
							echo "document.getElementById('mensaje_error').innerHTML='Copiado correctamente';";
							$fichero_version_listado = fopen($_SERVER['DOCUMENT_ROOT']."/app/DEV/".$usuario.'/version_listado.php','a+'); 
							fwrite($fichero_version_listado,PHP_EOL .'<?array_push($VERSION_LISTADO,'.'"'.$destino.$nombre_fichero.'");?>');
							fclose($fichero_version_listado);  
								
						}
						else
						{
							echo "document.getElementById('mensaje_error').innerHTML='No se ha podido copiar';";
						}
				}
				else
				{
					$aux="";
					for($s=0;$s<=count($directorios_ruta);$s++)
					{
						$aux.=$directorios_ruta[$s]."/";
						if(!is_dir($_SERVER['DOCUMENT_ROOT']."/app/DEV/".$usuario."/".substr($aux,0,-1)))
						{
							mkdir($_SERVER['DOCUMENT_ROOT']."/app/DEV/".$usuario."/".substr($aux,0,-1));
						}
					}
					/******SUBIDA DEL FICHERO*****/
					$subido = copy($ruta_origen,$_SERVER['DOCUMENT_ROOT']."/app/DEV/".$usuario."/".$destino.$nombre_fichero);
					if($subido)
					{
						echo "document.getElementById('mensaje_error').innerHTML='Copiado correctamente';";
						$fichero_version_listado = fopen($_SERVER['DOCUMENT_ROOT']."/app/DEV/".$usuario.'/version_listado.php','a+'); 
						fwrite($fichero_version_listado,PHP_EOL .'<?array_push($VERSION_LISTADO,'.'"'.$destino.$nombre_fichero.'");?>');
						fclose($fichero_version_listado);  
					}
					else
					{
						echo "document.getElementById('mensaje_error').innerHTML='No se ha podido copiar';";
					}
				}
		}
		else
		{
			//EXISTE EL DIRECTORIO DONDE QUEREMOS COPIAR EL FICHERO
			/******SUBIDA DEL FICHERO*****/
				$subido = copy($ruta_origen,$_SERVER['DOCUMENT_ROOT']."/app/DEV/".$usuario."/".$destino.$nombre_fichero);
				if($subido)
				{
					echo "document.getElementById('mensaje_error').innerHTML='Copiado correctamente';";
					$fichero_version_listado = fopen($_SERVER['DOCUMENT_ROOT']."/app/DEV/".$usuario.'/version_listado.php','a+'); 
					fwrite($fichero_version_listado,PHP_EOL .'<?array_push($VERSION_LISTADO,'.'"'.$destino.$nombre_fichero.'");?>');
					fclose($fichero_version_listado);  
				}
				else
				{
					echo "document.getElementById('mensaje_error').innerHTML='No se ha podido copiar';";
				}
		}
}

?>

directorio_actual=[];
function mostrar_contenido(nombre,inicial){
	
	document.getElementById('contenido').innerHTML="";
	directorio_actual.push(nombre);
	
	ruta=arbol;
	
	for(i in directorio_actual)
	{
		if(directorio_actual[i]!="arbol")
			ruta=ruta[directorio_actual[i]];
	}
	
	if(nombre!="arbol")
	{
		document.getElementById('contenido').insertAdjacentHTML("beforeend","<a  class='atras' onclick=\"directorio_actual.pop();mostrar_contenido(directorio_actual.pop(),-1);\" id='atras' >..</a><br>");
	}
	
	if(inicial==1)
	{
		document.getElementById('ruta_origen').value="/";
		document.getElementById('ruta_destino').value="/";
	}else if(inicial==-1){
			document.getElementById('ruta_origen').value=""; //limpiamos el value origen
			document.getElementById('ruta_destino').value=""; //limpiamos el value destino
			if(nombre=="arbol")
			{
				document.getElementById('ruta_origen').value="/";
				document.getElementById('ruta_destino').value="/";
			}
			else
			{
				document.getElementById('ruta_origen').value=nombre+"/";
				document.getElementById('ruta_destino').value=nombre+"/";
			}
		}else{
			document.getElementById('ruta_origen').value+=nombre+"/";
			document.getElementById('ruta_destino').value+=nombre+"/";
		}
	
	for(i in ruta)
	{
		if(typeof ruta[i] === "object"){
			document.getElementById('contenido').insertAdjacentHTML("beforeend","<img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACIAAAAiCAMAAAANmfvwAAAAElBMVEX8/vy8vrz8/gQEAgR8fnx8fgSxuKVQAAAASUlEQVQ4jWNgoC9ggQHcKrCw0FUwMcIgdjXIKrCrYWFEBSwogBmf9RDAyoxhDzqEKsGjgmnUlFFTaGIKK14ATt/MeAHexE9vAADewgWx+0u3FgAAAABJRU5ErkJggg==' style='height: 1em;margin-right: 0.5%;' /><a class='directorios' onclick=\"mostrar_contenido('"+i+"');anadir_nombre_fichero('');\" id="+i+" >"+i+"</a><br>");
		}
		else
		{
			document.getElementById('contenido').insertAdjacentHTML("beforeend","<li style='cursor:pointer;' onclick=\"anadir_nombre_fichero('"+ruta[i]+"');\">"+ruta[i]+"</li>");
		}
	}
}

function anadir_nombre_fichero(valor)
{
	
	document.getElementById('ruta_origen').value="";
	var aux="";
	for(i=0;i<directorio_actual.length;i++)
	{
		aux+=directorio_actual[i]+"/";
	}
	aux+=valor;
	document.getElementById('ruta_origen').value=aux.replace("arbol","");
}

function ruta_cada_usuario()
{
	var e = document.getElementById('usuarios_ftp');
	var strUser = e.options[e.selectedIndex].value;
	document.getElementById('directorio_trabajo').innerHTML="/DEV/"+strUser;
}

/*
if(i=="..")
{
	document.getElementById('contenido').insertAdjacentHTML("beforeend","<a onclick='mostrar_contenido(this.id)' id="+ruta[i].substr(1)+" >"+i+"</a><br>");
}
else
{*/

mostrar_contenido("arbol",1);
function pintar_usuarios_ftp(){
	var html="<select name='usuarios' id='usuarios_ftp' onChange='ruta_cada_usuario();' style='margin-bottom:10px;'>";
	for (x in usuarios_ftp_server)
		{
			html+="<option value="+x+">"+x+"</option>";
		}
		html+="</select>";
		document.getElementById('selector_usuario_ftp').innerHTML=html;
}
pintar_usuarios_ftp();
ruta_cada_usuario();
</script>
</body>
</html>
