<!--
ID: p_00998
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml">
<head>
<meta https-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nuevo Elemento</title>
</head>
<style>
td{
	word-wrap: break-word;
	}
body{
	font-family:Tahoma, Geneva, sans-serif;
	}
</style>
<script>
	resultado_busqueda=[];
	creado="";
	
	//FUNCIONES AUXILIARES
	function if_checked(check){ 
		if(check=="1" ||check=="ejemplo") return("checked"); else return("");
	}

<?
function p_00998_corrige($texto){
	$texto=str_replace("\r","",$texto);
	$texto=str_replace("\\","&#92;",$texto);
	$texto=str_replace("'","\'",$texto);
	$texto=str_replace("<","&lt;",$texto);
	$texto=str_replace(">","&gt;",$texto);
	$texto=str_replace("\n","&#10",$texto);
	$texto=str_replace("\"","&#34",$texto);
	$texto=str_replace("'","&#39",$texto);
	return $texto;
}

//coneccion SQL
include("conn_idiomas_webs.php");

if(isset($_GET['ACCION'])){
	echo "accion='".$_GET['ACCION']."';\n";
}else{
	echo "accion='';\n";
}

switch($_GET['accion']){
	case "buscar":{//buscar un texto
			if($_POST['buscar']!=''){
				$consulta="SELECT referencia_texto.texto_id , referencia_texto.pagina_id , idioma_001_espanyol.traduccion";
				$consulta=$consulta." FROM";
				$consulta=$consulta." referencia_texto  inner join  idioma_001_espanyol";
				$consulta=$consulta." on";
				$consulta=$consulta." referencia_texto.texto_id=idioma_001_espanyol.texto_id";
				$consulta=$consulta." WHERE";
				$consulta=$consulta." idioma_001_espanyol.traduccion LIKE '%".p_00998_corrige($_POST['buscar'])."%'";
				$consulta=$consulta." OR referencia_texto.texto_id LIKE '".p_00998_corrige($_POST['buscar'])."'";
				$resultado = mysql_query($consulta);
				if(!$resultado){
					echo "alert(\"error:".mysql_error()."\")";
				}else{
					while ($fila = mysql_fetch_array($resultado)){

						echo "resultado_busqueda.push(['".$fila[0]."','".$fila[1]."','".p_00998_corrige($fila[2])."','<button onclick=\"consulta_actualizar_texto(".$fila[0].")\">-></button>']);";
					}
				}
			}
			break;
		};
	case "crear":{//crear un texto nuevo
			//remplazar verificados
			if($_POST['ingles_v'])$_POST['ingles_v']=1;else$_POST['ingles_v']=0;
			if($_POST['espanyol_v'])$_POST['espanyol_v']=1;else$_POST['espanyol_v']=0;
			if($_POST['catala_v'])$_POST['catala_v']=1;else$_POST['catala_v']=0;
	
			$error=mysql_query("INSERT INTO `referencia_texto` (`pagina_id`) VALUES (".$_POST['pagina'].");");
			if(!$error)
				 echo "creado=creado+'Error 1: ".str_replace("'","`",mysql_error())."<br>';";
			$id=mysql_insert_id();
			
			$error=mysql_query("INSERT INTO `idioma_001_espanyol` (`texto_id`, `traduccion`, `verificado`) VALUES (".$id.",'".p_00998_corrige($_POST['espanyol'])."', ".$_POST['espanyol_v'].");");
			if(!$error)
				 echo "creado=creado+'Error 2: ".str_replace("'","`",mysql_error())."<br>';";
							
			$error=mysql_query("INSERT INTO `idioma_002_english` (`texto_id`, `traduccion`, `verificado`) VALUES (".$id.",'".p_00998_corrige($_POST['ingles'])."', ".$_POST['ingles_v'].");",$conexion_idiomas_webs);
			if(!$error)
				 echo "creado=creado+'Error 3: ".str_replace("'","`",mysql_error())."<br>';";
				 
			$error=mysql_query("INSERT INTO `idioma_003_catala` (`texto_id`, `traduccion`, `verificado`) VALUES (".$id.",'".p_00998_corrige($_POST['catala'])."', ".$_POST['catala_v'].");",$conexion_idiomas_webs);
			if(!$error)
				 echo "creado=creado+'Error 3: ".str_replace("'","`",mysql_error())."<br>';";
			
			echo "creado=creado+'<h2>CREADO</h2><table border=\"solid 1px\" cellpading=\"2px\">';";
			echo "creado=creado+'<tr><td><b>id</b></td><td><b>pag</b></td><td><b>esp</b></td><td><b>ing</b></td><td><b>cat</b></td></tr>';";
			echo "creado=creado+'<tr><td>".$id."</td><td>".$_POST['pagina']."</td><td>".p_00998_corrige($_POST['espanyol'])."</td><td>".p_00998_corrige($_POST['ingles'])."</td><td>".p_00998_corrige($_POST['catala'])."</td></tr></table>';";
				 
			break;
		};
		
	//MOSTRAR DIFERENTES FILTROS
	case "mostrar":{
			
			$consulta="SELECT referencia_texto.texto_id, referencia_texto.pagina_id, idioma_001_espanyol.traduccion, idioma_001_espanyol.verificado, idioma_002_english.traduccion, idioma_002_english.verificado, idioma_003_catala.traduccion, idioma_003_catala.verificado";
			$consulta=$consulta." FROM idioma_001_espanyol, idioma_002_english, idioma_003_catala, referencia_texto";
			$consulta=$consulta." WHERE idioma_001_espanyol.texto_id=referencia_texto.texto_id";
			$consulta=$consulta." AND idioma_002_english.texto_id=referencia_texto.texto_id";
			$consulta=$consulta." AND idioma_003_catala.texto_id=referencia_texto.texto_id";
			
			//añadir ANDs
			switch($_POST['mostrar']){
				case "pendientes":{
					$consulta=$consulta." AND (idioma_002_english.verificado=0";
					$consulta=$consulta." OR idioma_001_espanyol.verificado=0";
					$consulta=$consulta." OR idioma_003_catala.verificado=0)";
					break;
				}
				case "todo":
				default:{break;}
			}
			
			$resultado=mysql_query($consulta);
			if(!$resultado){
				echo "creado=creado+'Error 3: ".str_replace("'","`",mysql_error())."<br>\n';";
			}else{
				
				echo "creado=creado+\"<h2>".$_POST['mostrar'].":</h2><table width='950px' border='solid 1px' cellpadding='2px' style='table-layout:fixed'>\"\n";
				echo "creado=creado+\"<thead><tr><td width='15px'><b>ID</b></td><td width='19px'><b>PAG</b></td><td width='150px'><b>ESPAÑOL</b></td><td width='5px'><b>V</b></td><td width='150px'><b>INGLES</b></td><td width='5px'><b>V</b></td><td width='150px'><b>CATALÀ</b></td><td width='5px'><b>V</b></td><td width='15px'><b>M</b></td></tr></thead>\"\n";
				while ($fila = mysql_fetch_array($resultado)){	
					echo "creado=creado+\"<tr>";
					
					for($j=0;$j<8; $j++){
							
						echo "<td>".p_00998_corrige($fila[$j])."</td>";
					}
					echo "<td><button onclick='consulta_actualizar_texto(".$fila[0].")'>></button></td></tr>\";\n";
				}
				echo "creado=creado+\"</table>\";\n";
			}
			break;
		};
		
	//CONSULTA PARA ACTUALIZAR UN TEXTO
	case "consulta_actualizar":{
			$consulta="SELECT referencia_texto.texto_id, referencia_texto.pagina_id, idioma_001_espanyol.traduccion, idioma_001_espanyol.verificado, idioma_002_english.traduccion, idioma_002_english.verificado, idioma_003_catala.traduccion, idioma_003_catala.verificado";
			$consulta=$consulta." FROM referencia_texto, idioma_001_espanyol, idioma_002_english, idioma_003_catala";
			$consulta=$consulta." WHERE `referencia_texto`.texto_id='".$_POST['texto_id']."'";
			$consulta=$consulta." AND `idioma_001_espanyol`.texto_id='".$_POST['texto_id']."'";
			$consulta=$consulta." AND `idioma_002_english`.texto_id='".$_POST['texto_id']."'";
			$consulta=$consulta." AND `idioma_003_catala`.texto_id='".$_POST['texto_id']."'";
			$resultado = mysql_query($consulta);
			if(!$resultado){
				echo "alert(\"error:".mysql_error()."\")";
			}else{
					echo "creado=creado+\"<h2>MODIFICAR:</h2><h4><form action='./p_00998_traducir.php?accion=actualizar' method='post'>\";\n";
				while ($fila = mysql_fetch_array($resultado)){
					
					echo "creado=creado+\"<input style='display:none' name='id' value='".$fila[0]."'>\";\n";
					echo "creado=creado+'id: <span>".$fila[0]."</span><br>';\n";
					echo "creado=creado+'PAG:<input name=\"pag\" type=\"text\" value=\"".$fila[1]."\"><br>';\n";
					echo "creado=creado+'<br>ESP:<br><textarea rows=\"10\" cols=\"100\" name=\"espanyol\" type=\"text\" >".p_00998_corrige($fila[2])."</textarea>';\n";
					echo "creado=creado+'<input name=\"c_espanyol\" type=\"checkbox\" '+if_checked(".$fila[3].")+'><br>';\n";
					echo "creado=creado+'<br>ING:<br><textarea rows=\"10\" cols=\"100\" name=\"ingles\" type=\"text\" >".p_00998_corrige($fila[4])."</textarea>';\n";
					echo "creado=creado+'<input name=\"c_ingles\" type=\"checkbox\" '+if_checked(".$fila[5].")+'><br>';\n";
					
					echo "creado=creado+'<br>CAT:<br><textarea rows=\"10\" cols=\"100\" name=\"catala\" type=\"text\" >".p_00998_corrige($fila[6])."</textarea>';\n";
					echo "creado=creado+'<input name=\"c_catala\" type=\"checkbox\" '+if_checked(".$fila[7].")+'><br>';\n";
				}
				echo "creado=creado+\"<input type='submit' value='Actualizar'></form></h4>\";\n";
			}
			break;
		};
	case "actualizar":{
				//remplazar verificados
				if($_POST['c_ingles'])$_POST['c_ingles']=1;else$_POST['c_ingles']=0;
				if($_POST['c_espanyol'])$_POST['c_espanyol']=1;else$_POST['c_espanyol']=0;
				if($_POST['c_catala'])$_POST['c_catala']=1;else$_POST['c_catala']=0;
				
				echo "creado=creado+'<h2>ACTUALIZADO:</h2><h4>';\n";
				//consulta id texto
				$consulta="UPDATE `referencia_texto` SET `pagina_id`=".$_POST['pag'];
				$consulta=$consulta." WHERE  `texto_id`=".$_POST['id'].";";
				$resultado = mysql_query($consulta);
				if(!$resultado) echo "creado=creado+'Error 5.1: ".str_replace("'","`",mysql_error())."<br>';\n";
				else echo "creado=creado+'id: ".$_POST['id']."<br>pag: ".$_POST['pag']."<br>';\n";
				
				//consulta español
				$consulta="UPDATE `idioma_001_espanyol` SET `traduccion`='".p_00998_corrige($_POST['espanyol'])."', `verificado`=".$_POST['c_espanyol'];
				$consulta=$consulta." WHERE `texto_id`=".$_POST['id'];
				$resultado = mysql_query($consulta);
				if(!$resultado) echo "creado=creado+'Error 5.3: ".str_replace("'","`",mysql_error())."<br>';\n";
				else echo "creado=creado+'español: ".p_00998_corrige($_POST['espanyol'])."<br>';\n";
				
				//consulta ingles
				$consulta="UPDATE `idioma_002_english` SET `traduccion`='".p_00998_corrige($_POST['ingles'])."', `verificado`=".$_POST['c_ingles'];
				$consulta=$consulta." WHERE `texto_id`=".$_POST['id'];
				$resultado = mysql_query($consulta);
				if(!$resultado) echo "creado=creado+'Error 5.2: ".str_replace("'","`",mysql_error())."<br>';\n";
				else echo "creado=creado+'ingles: ".p_00998_corrige($_POST['ingles'])."<br>';\n";
				
				//consulta catala
				$consulta="UPDATE `idioma_003_catala` SET `traduccion`='".p_00998_corrige($_POST['catala'])."', `verificado`=".$_POST['c_catala'];
				$consulta=$consulta." WHERE `texto_id`=".$_POST['id'];
				$resultado = mysql_query($consulta);
				if(!$resultado) echo "creado=creado+'Error 5.2: ".str_replace("'","`",mysql_error())."<br>';\n";
				else echo "creado=creado+'catala: ".p_00998_corrige($_POST['catala'])."<br></h4>';\n";
				
				echo "creado=creado+'<button onclick=\"consulta_actualizar_texto(".$_POST['id'].")\">Modificar</button>';\n";
				
			break;
		};
	case "otro":{
			break;
		};
	default:{
			break;
		};
}

//cerrar coneccion SQL
include("conn_fin_idiomas_webs.php");

?>

function p_00998_corrige(texto){
	texto=texto.replace("\r","");
	texto=texto.replace("\\","&#92;");
	texto=texto.replace("'","\'");
	texto=texto.replace("<","&lt;");
	texto=texto.replace(">","&gt;");
	texto=texto.replace("\n","&#10");
	return texto;
}

</script>	




<body>

<a href="/app/admin">< VOLVER</a>
<div style="
	border:solid 2px #333;
	padding:5px;
   height:100%;
   width:300px;
   ">
   <form action="./p_00998_traducir.php?accion=mostrar" method="POST" >
   	<button type="submit" name="mostrar" value="pendientes">pendientes</button>
      <button type="submit" name="mostrar" value="todo">Todos</button>
   </form>
   <br>
   <form action="./p_00998_traducir.php?accion=buscar" method="POST" >
      <input name="buscar" type="text" placeholder="ESPAÑOL / ID" autofocus>
      <input type="submit" value="buscar">
   </form>
</div>

<div id="resultado_titulos" style="
	border:solid 2px #fff;
	padding:5px;
   width:300px;
 ">id | pag | texto</div>

<div id="resultado_exacto" style="
	border:solid 2px #0a0;
	padding:5px;
   width:300px;
"></div>

<div id="resultados" style="
	border:solid 2px #888;
	padding:5px;
   width:300px;
   overflow-x:scroll;
"></div>

<div id="crear_texto" style="
	padding:15px;
   position:absolute;
   top: 0;
   margin:0 0 0 330px;
"></div>


</body>

<script>
	var TEXTO_PARA_CREAR="<? echo p_00998_corrige($_POST['buscar']);?>";
	//MOSTRAR CREACION SI LA HAY
	if(creado!="")
		document.getElementById("crear_texto").innerHTML=creado;

	//MOSTRAR OPCION PARA CREAR
	if('<? echo  p_00998_corrige($_POST['buscar']);?>'!=''){
		texto=
		document.getElementById("resultado_exacto").innerHTML="<center><b>\" <? echo p_00998_corrige($_POST['buscar']);?> \"</b></center>"+
			"<button style='float:right;' onclick='crear_texto(TEXTO_PARA_CREAR)'>+</button><br>";
	}

	//MOSTRAR RESULTADOS
	html_exactos="<table border='solid 1px' cellpadding='1px'><tr><td><b>id</td><td><b>pag</td><td><b>texto</td><td><b>mod</td></tr>";
	html_resultados=html_exactos;
	for(i in resultado_busqueda){
		if(resultado_busqueda[i][2]=='<? echo p_00998_corrige($_POST['buscar']);?>'){
			html_exactos=html_exactos+"<tr>";
			for(j in resultado_busqueda[i]){
				html_exactos=html_exactos+"<td>"+resultado_busqueda[i][j]+"</td>";
			}
			html_exactos=html_exactos+"</tr>";
		}else
			html_resultados=html_resultados+"<tr>";
			for(j in resultado_busqueda[i]){
				html_resultados=html_resultados+"<td>"+resultado_busqueda[i][j]+"</td>";
			}
			html_resultados=html_resultados+"</tr>";
	}
	document.getElementById("resultado_exacto").insertAdjacentHTML("beforeEnd",html_exactos+"</table>");
	document.getElementById("resultados").insertAdjacentHTML("beforeEnd",html_resultados+"</table>");
	
	//formulario para nuevo texto
	function crear_texto(texto){
		document.getElementById("crear_texto").innerHTML=""+
			'<form action="./p_00998_traducir.php?accion=crear" method="post" >'+
			'	<h2>CREAR: \"'+p_00998_corrige(texto)+'\"</span></h2>'+
			'	pag:<input name="pagina" type="text"><br><br>'+
			'	español: <input name="espanyol" type="text" value="'+texto+'"> '+
			'	<input type="checkbox" name="espanyol_v" checked> <br><br>'+
			'	ingles: <input name="ingles" type="text" value=""> '+
			'	<input type="checkbox" name="ingles_v"> <br><br>'+
			'	català: <input name="catala" type="text" value=""> '+
			'	<input type="checkbox" name="catala_v"> <br><br>'+
			'	<input type="submit" value="CREAR">'+
			'</form>';
		}	
	
	//formulario para consulta_actualizar texto
	function consulta_actualizar_texto(texto){
		document.getElementById("crear_texto").innerHTML=""+
			'<form style="display:none;" id="consulta_actualizar_texto" action="./p_00998_traducir.php?accion=consulta_actualizar" method="post" >'+
			'	español: <input name="texto_id" value="'+texto+'">'+
			'</form>';
		document.getElementById("consulta_actualizar_texto").submit();
	}
	
</script>
   
</html>