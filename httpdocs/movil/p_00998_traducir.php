<!--
ID: p_00998
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nuevo Elemento</title>
</head>

<script>
	resultado_busqueda=[];
	creado="";
	
	//FUNCIONES AUXILIARES
	function if_checked(check){ 
		if(check=="1" ||check=="ejemplo") return("checked"); else return("");
	}

<?
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
				$consulta="SELECT `referencia_texto`.texto_id , `referencia_texto`.pagina_id , `idioma_001_espanyol`.traduccion";
				$consulta=$consulta." FROM referencia_texto, idioma_001_espanyol";
				$consulta=$consulta." WHERE `referencia_texto`.texto_id LIKE `idioma_001_espanyol`.texto_id";
				$consulta=$consulta." AND `idioma_001_espanyol`.traduccion LIKE '%".$_POST['buscar']."%'";
				$resultado = mysql_query($consulta);
				if(!$resultado){
					echo "alert(\"error:".mysql_error()."\")";
				}else{
					while ($fila = mysql_fetch_array($resultado)){	
						echo "resultado_busqueda.push(['".$fila[0]."','".$fila[1]."','".$fila[2]."','<button onclick=\"consulta_actualizar_texto(".$fila[0].")\">-></button>']);"; 
					}
				}
			}
			break;
		};
	case "crear":{//crear un texto nuevo
			//remplazar verificados
			if($_POST['ingles_v'])$_POST['ingles_v']=1;else$_POST['ingles_v']=0;
			if($_POST['espanyol_v'])$_POST['espanyol_v']=1;else$_POST['espanyol_v']=0;
	
			$error=mysql_query("INSERT INTO `referencia_texto` (`pagina_id`) VALUES (".$_POST['pagina'].");");
			if(!$error)
				 echo "creado=creado+'Error 1: ".str_replace("'","`",mysql_error())."<br>';";
			$id=mysql_insert_id();
			
			$error=mysql_query("INSERT INTO `idioma_001_espanyol` (`texto_id`, `traduccion`, `verificado`) VALUES (".$id.",'".$_POST['espanyol']."', ".$_POST['espanyol_v'].");");
			if(!$error)
				 echo "creado=creado+'Error 2: ".str_replace("'","`",mysql_error())."<br>';";
							
			$error=mysql_query("INSERT INTO `idioma_002_english` (`texto_id`, `traduccion`, `verificado`) VALUES (".$id.",'".$_POST['ingles']."', ".$_POST['ingles_v'].");",$conexion_idiomas_webs);
			if(!$error)
				 echo "creado=creado+'Error 3: ".str_replace("'","`",mysql_error())."<br>';";
			
			echo "creado=creado+'<h2>CREADO</h2><table border=\"solid 1px\" cellpading=\"2px\">';";
			echo "creado=creado+'<tr><td>id</td><td>pag</td><td>esp</td><td>ing</td></tr>';";
			echo "creado=creado+'<tr><td>".$id."</td><td>".$_POST['pagina']."</td><td>".$_POST['espanyol']."</td><td>".$_POST['ingles']."</td></tr></table>';";
				 
			break;
		};
		
	//MOSTRAR DIFERENTES FILTROS
	case "mostrar":{
			
			$consulta="SELECT referencia_texto.texto_id, referencia_texto.pagina_id, idioma_001_espanyol.traduccion, idioma_001_espanyol.verificado, idioma_002_english.traduccion, idioma_002_english.verificado, idioma_003_catala.traduccion, idioma_003_catala.verificado";
			$consulta=$consulta." FROM referencia_texto, idioma_001_espanyol, idioma_002_english, idioma_003_catala";
			$consulta=$consulta." WHERE idioma_001_espanyol.texto_id=referencia_texto.texto_id";
			$consulta=$consulta." AND idioma_002_english.texto_id=referencia_texto.texto_id";
			$consulta=$consulta." AND `idioma_003_catala`.texto_id='".$_POST['texto_id']."'";
			
			//añadir ANDs
			switch($_POST['mostrar']){
				case "pendientes":{
					$consulta=$consulta." AND (idioma_002_english.verificado=0";
					$consulta=$consulta." OR idioma_001_espanyol.verificado=0)";
					break;
				}
				case "todo":
				default:{break;}
			}
			
			$resultado=mysql_query($consulta);
			if(!$resultado){
				echo "creado=creado+'Error 3: ".str_replace("'","`",mysql_error())."<br>\n';";
			}else{
				echo "creado=creado+\"<h2>".$_POST['mostrar'].":</h2><table border='solid 1px' cellpadding='2px'>\"\n";
				echo "creado=creado+\"<tr><td>ID</td><td>PAG</td><td>ESPAÑOL</td><td>Ver</td><td>INGLES</td><td>Ver</td><td>Corregir</td></tr>\"\n";
				while ($fila = mysql_fetch_array($resultado)){	
					echo "creado=creado+\"<tr>";
					for($j=0;$j<6; $j++){
						echo "<td>".$fila[$j]."</td>";
					}
					echo "<td><button onclick='consulta_actualizar_texto(".$fila[0].")'>-></button></td></tr>\";\n";
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
					echo "creado=creado+'ESP:<input name=\"espanyol\" type=\"text\" value=\"".$fila[2]."\">';\n";
					echo "creado=creado+'<input name=\"c_espanyol\" type=\"checkbox\" '+if_checked(".$fila[3].")+'><br>';\n";
					echo "creado=creado+'ING:<input name=\"ingles\" type=\"text\" value=\"".$fila[4]."\">';\n";
					echo "creado=creado+'<input name=\"c_ingles\" type=\"checkbox\" '+if_checked(".$fila[5].")+'><br>';\n";
				}
				echo "creado=creado+\"<input type='submit' value='Actualizar'></form></h4>\";\n";
			}
			break;
		};
	case "actualizar":{
				//remplazar verificados
				if($_POST['c_ingles'])$_POST['c_ingles']=1;else$_POST['c_ingles']=0;
				if($_POST['c_espanyol'])$_POST['c_espanyol']=1;else$_POST['c_espanyol']=0;
		
				echo "creado=creado+'<h2>ACTUALIZADO:</h2><h4>';\n";
				//consulta id texto
				$consulta="UPDATE `referencia_texto` SET `pagina_id`=".$_POST['pag'];
				$consulta=$consulta." WHERE  `texto_id`=".$_POST['id'].";";
				$resultado = mysql_query($consulta);
				if(!$resultado) echo "creado=creado+'Error 5.1: ".str_replace("'","`",mysql_error())."<br>';\n";
				else echo "creado=creado+'id: ".$_POST['id']."<br>pag: ".$_POST['pag']."<br>';\n";
				
				//consulta español
				$consulta="UPDATE `idioma_001_espanyol` SET `traduccion`='".$_POST['espanyol']."', `verificado`=".$_POST['c_espanyol'];
				$consulta=$consulta." WHERE `texto_id`=".$_POST['id'];
				$resultado = mysql_query($consulta);
				if(!$resultado) echo "creado=creado+'Error 5.3: ".str_replace("'","`",mysql_error())."<br>';\n";
				else echo "creado=creado+'español: ".$_POST['espanyol']."<br>';\n";
				
				//consulta ingles
				$consulta="UPDATE `idioma_002_english` SET `traduccion`='".$_POST['ingles']."', `verificado`=".$_POST['c_ingles'];
				$consulta=$consulta." WHERE `texto_id`=".$_POST['id'];
				$resultado = mysql_query($consulta);
				if(!$resultado) echo "creado=creado+'Error 5.2: ".str_replace("'","`",mysql_error())."<br>';\n";
				else echo "creado=creado+'ingles: ".$_POST['ingles']."<br></h4>';\n";
				echo "creado=creado+'<button onclick=\"consulta_actualizar_texto(".$_POST['id'].")\">Modificar</button>';\n";
				
				//consulta catala
				$consulta="UPDATE `idioma_003_catala` SET `traduccion`='".$_POST['ingles']."', `verificado`=".$_POST['c_ingles'];
				$consulta=$consulta." WHERE `texto_id`=".$_POST['id'];
				$resultado = mysql_query($consulta);
				if(!$resultado) echo "creado=creado+'Error 5.2: ".str_replace("'","`",mysql_error())."<br>';\n";
				else echo "creado=creado+'Català: ".$_POST['ingles']."<br></h4>';\n";
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
</script>

<body>

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
      <input name="buscar" type="text" autofocus>
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
"></div>

<div id="crear_texto" style="
	padding:15px;
   position:absolute;
   top: 0;
   margin:0 0 0 330px;
"></div>


</body>

<script>

	//MOSTRAR CREACION SI LA HAY
	if(creado!="")
		document.getElementById("crear_texto").innerHTML=creado;

	//MOSTRAR OPCION PARA CREAR
	if('<? echo $_POST['buscar']?>'!=''){
		document.getElementById("resultado_exacto").innerHTML="<center><b>\" <? echo $_POST['buscar']?> \"</b></center>"+
			"<button style='float:right;' onclick='crear_texto(\"<? echo $_POST['buscar']?>\")'>+</button><br>";
	}

	//MOSTRAR RESULTADOS
	html_exactos="<table border='solid 1px' cellpadding='1px'><tr><td><b>id</td><td><b>pag</td><td><b>texto</td><td><b>mod</td></tr>";
	html_resultados=html_exactos;
	for(i in resultado_busqueda){
		if(resultado_busqueda[i][2]=='<? echo $_POST['buscar']?>'){
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
			'	<h2>CREAR: \"'+texto+'\"</span></h2>'+
			'	pag:<input name="pagina" type="text"><br><br>'+
			'	español: <input name="espanyol" type="text" value="'+texto+'"> '+
			'	<input type="checkbox" name="espanyol_v" checked> <br><br>'+
			'	ingles: <input name="ingles" type="text" value=""> '+
			'	<input type="checkbox" name="ingles_v"> <br><br>'+
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