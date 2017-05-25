<!--
-Pag. ID: p_01174;
-->
<!--
<link href="jquery-ui-1.11.4/jquery-ui.css" rel="stylesheet" type="text/css" />
<script src="jquery-ui-1.11.4/jquery-1.11.2.js"></script>
<script src="jquery-ui-1.11.4/jquery-ui.js"></script>
-->
<link href='<? ver_url("jquery-ui-1.11.4/jquery-ui.css","");?>' rel="stylesheet" type="text/css" />
<script src='<? ver_url("jquery-ui-1.11.4/jquery-1.11.2.js","");?>'></script>
<script src='<? ver_url("jquery-ui-1.11.4/jquery-ui.js","");?>'></script>

<script  type = "text/javascript"  src = "//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js" ></script>
<script  type = "text/javascript"  src = "//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js" ></script>
<script  type = "text/javascript"  src = "//cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js" ></script>
<script>
//screen.orientation.lock("portrait"); //me permite bloquear la pantalla en modo horizontal.

/*********variables global*********/
var p_01174_nid=0; //variable que me permite ir incrementado el numero de la pregunta
var p_01174_contador_palabras_entrando=0; //variable que me permite ir contando las palabras que va añadiendo el usuario a el ejercicio de ordenar las frases
var p_01174_valor_type_ask_checked = new Array(); //array para el tipo de preguntas que elige el usuaio.
var preguntaCargada=[];
var p_01174_js_cantidad_preguntas_smiles=80;
var evento_esperando_online=false;
var evento_esperando_online_p_vista=false;
indidce_preguntas_mismo_tipo=new Array();
var llamar_solo_una_vez_funcion_mostrar_pregunta=false;
/********************************/

function p_01174_carga_pregunta()
{
	var indice_preguntas=0;

			if(typeof smile_datos.preguntas_cargadas[indice_preguntas]!="undefined")
			{
				var auxiliar_valor=smile_datos.preguntas_cargadas.slice(-1);
				indice_preguntas=parseInt(auxiliar_valor)+1;
			}

	if(smile_datos.preguntas_cargadas.length<6)
	{
		if(!navigator.onLine)
		{
			while(smile_datos.preguntas[indice_preguntas].tipo=="fotos" || smile_datos.preguntas[indice_preguntas].tipo=="audio") //Solo muestra las 5 primeras preguntas cargadas ya sea con imagenes, a partir de ahi si no hay conexión carga todas tf, o orddenar frase. Esta comprobado. y no falla con las primeras 5 preguntas de imagenes ya que se cargan todas.
			{
				//indice_preguntas++;
				smile_datos.preguntas.splice(indice_preguntas,1);
			}

		}
		//smile_datos.preguntas_cargadas.push(indice_preguntas);

		 personal_datos_info.ultimapregunta = smile_datos.preguntas[indice_preguntas]; //vamos añadiendo la pregunta actual a personal_datos_info
		 //smile_datos.preguntas.push(preguntaActual); //añadimos a smile_datos.preguntas la pregunta acutal de manera que siempre van añadiendoce preguntas por el final del objeto (podemos añadirlo tambén de forma aleatoria).
		//console.info(indice_preguntas);

		//monica-testeo
/*		console.log("ENTRA: ind: "+indice_preguntas+ " cat: "+smile_datos.preguntas[indice_preguntas].categoria);
		while(smile_datos.preguntas[indice_preguntas].categoria=="trinity"){
			indice_preguntas++;
		}
		console.log("SALE: ind: "+indice_preguntas+ " cat: "+smile_datos.preguntas[indice_preguntas].categoria);
*/

		if(smile_datos.preguntas[indice_preguntas].categoria!="trinity")
		{
			smile_datos.preguntas_cargadas.push(indice_preguntas);

			switch(smile_datos.preguntas[indice_preguntas].tipo) //tipo de pregunta
			{

				case "fotos" :
					document.getElementById("word").innerHTML=smile_datos.preguntas[indice_preguntas].pregunta;
					document.getElementById("imagenes").innerHTML="";
					for (x in smile_datos.preguntas[indice_preguntas].respuestas)
					{
						document.getElementById("imagenes").insertAdjacentHTML('beforeEnd',""+
						"<div id=p_01174_"+x+" class='estiloFotoDiv'>"+
						"</div>");
						p_01174_creacion_imagen('p_01174_'+x,smile_datos.preguntas[indice_preguntas].respuestas[x].replace("://%20s.","://s."),x);
					}
					break;

				case "audio" :
					document.getElementById("reproduccionWord").src=smile_datos.preguntas[indice_preguntas].pregunta;
					document.getElementById("sound_imagenes").innerHTML="";
					for (x in smile_datos.preguntas[indice_preguntas].respuestas)
					{
						document.getElementById("sound_imagenes").insertAdjacentHTML('beforeEnd',""+
						"<div id=p_01174_"+x+" class='estiloFotoDiv'>"+
						"	<img"+
						"		class='estiloFotos'"+
						"		name='respuesta_sound'"+
						"		id=p_00001_img_respuesta_sound"+x+
						"		src=" + smile_datos.preguntas[indice_preguntas].respuestas[x]+
						"		onclick='playImagensonido()'"+
						'		onerror="p_00989_error_img(\''+ smile_datos.preguntas[indice_preguntas].respuestas[x] +'\');"'+
						"	></img>"+
						"</div>");
					}
					break;

				case "drag" :{
					document.getElementById("Titulo2").innerHTML=smile_datos.preguntas[indice_preguntas].titulo;
					var espacio_ele = smile_datos.preguntas[indice_preguntas].drag;

					document.getElementById('p_01175_respuesta_drag_drop').innerHTML=espacio_ele.replace(/_!_([^_]*[^!]*[^_]*)_!!_/g,""+
						"&nbsp;"+
						'<div name="espacios_en_blanco" class="p_01174_espacio" style="position:relative;display:inline;" onclick="p_01174_drag_option(this,\''+indice_preguntas+'\')">'+
							"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#9660;"+
						"</div>"+
						"&nbsp;"+
					"");

					for (i in document.getElementById('p_01175_respuesta_drag_drop').childNodes)
					{
					   var hijo=document.getElementById('p_01175_respuesta_drag_drop').childNodes[i];
					   if(hijo.nodeType=="1" && hijo.innerHTML)
					   {
							hijo.id='espacio_blanco_'+i;
					   }
					}
					break;
				}
				case "m_option" :
					document.getElementById("p_01175_respuesta_m_option").innerHTML="";
					document.getElementById("Titulo3").innerHTML=smile_datos.preguntas[indice_preguntas].titulo;
					document.getElementById("Texto3").innerHTML=smile_datos.preguntas[indice_preguntas].pregunta;

						for(i in smile_datos.preguntas[indice_preguntas].respuestas)
						{
							document.getElementById("p_01175_respuesta_m_option").insertAdjacentHTML('beforeEnd',""+
							"<div id=respuestas_m_option"+i+" class='style_divs_respuestas'>"+
								//"<label style='font-size: 16px'>"+
								"<label>"+
								"<div class='style_checkbox_redondo'>"+
								"<input onclick='p_01174_comprobarMarcaOpcionM0(this);' type='checkbox' class='checkboxMultioption' style='float: left' id=checkbox"+i+" name='gruupPreguntasMulti' value="+i+">"+
								"</div>"+
								"<span id=checkboxM0"+i+" style='margin-left: 3%;'>"+smile_datos.preguntas[indice_preguntas].respuestas[i]+"</span>"+
								"</label>"+
							"</div>");
							/*if(i==smile_datos.preguntas[indice_preguntas].respuestas.length-1)
							{
								document.getElementById('respuestas_m_option'+i).style.marginBottom="1em";
							}*/
						}
					break;

				case "tf" :
					document.getElementById("Titulo").innerHTML=smile_datos.preguntas[indice_preguntas].titulo;
					document.getElementById("Texto").innerHTML=smile_datos.preguntas[indice_preguntas].pregunta;
					document.getElementById("p_01175_respuesta_true_false").innerHTML="";
					for(i in smile_datos.preguntas[indice_preguntas].respuestas)
					{
							document.getElementById("p_01175_respuesta_true_false").insertAdjacentHTML('beforeEnd',""+
							"<div id=respuestas_tf"+i+" class='style_divs_respuestas'>"+
								//"<label style='font-size: 16px'>"+
								"<label>"+
								"<div class='style_checkbox_redondo'>"+
								"<input onclick='p_01174_comprobarMarcaOpcionTF(this);' type='checkbox' class='checkboxMultioption' style='float: left;' id=acepto"+i+" name='gruupPreguntas' value="+i+">"+
								"</div>"+
								"<span id=aceptospan"+i+" style='display:block;padding-left:25px;'>"+smile_datos.preguntas[indice_preguntas].respuestas[i]+"</span>"+
								"</label>"+
							"</div>");
							/*if(i==smile_datos.preguntas[indice_preguntas].respuestas.length-1)
							{
								document.getElementById('respuestas_tf'+i).style.marginBottom="1em";
							}*/
						}
					break;

				case "escribir" :
					document.getElementById("Titulo4").innerHTML=smile_datos.preguntas[indice_preguntas].pregunta;
					document.getElementById("LongPalabrasWriting").innerHTML=smile_datos.preguntas[indice_preguntas].longitud_min_max;
					break;

				case "option_escribir" :
					document.getElementById("Titulo6").innerHTML=smile_datos.preguntas[indice_preguntas].titulo;
					document.getElementById("LongPalabrasRIW").innerHTML=smile_datos.preguntas[indice_preguntas].longitud_min_max_op;
					document.getElementById("subtopicArea1").innerHTML=smile_datos.preguntas[indice_preguntas].subtopic_area_1;
					break;
				case "ordenar_frase" :
					//smile_datos.preguntas[indice_preguntas].pregunta = smile_datos.preguntas[indice_preguntas].pregunta.replace('&pound;','€'); //remplazamos aquellas palabras que contenga el &pound que es el signo de la moneda de londres.
					//smile_datos.preguntas[indice_preguntas].pregunta = smile_datos.preguntas[indice_preguntas].pregunta.replace('&euro;','€'); //remplazamos aquellas palabras que contenga el &pound que es el signo de la moneda de londres.
					var texto = smile_datos.preguntas[indice_preguntas].pregunta.trim();

					var array_nombres_agrupados_sin_espacios = new Array();

					if(texto.slice(-1)==".")
					{
						  var posicion_punto_final = texto.length;
						  //texto = texto.slice(0,posicion_punto_final-1);
							texto = texto.slice(0,posicion_punto_final);
						  smile_datos.preguntas[indice_preguntas].pregunta=texto; //cambiamos el valor en el objeto
					}
					var nombres = texto.replace("  "," ").trim();
					do
					{
						nombres = nombres.replace("  "," ");
						//nombres = nombres.replace('&pound;','€');

					}while(nombres.match(/  /g));

					nombres = nombres.split(" ");
					var nombres_agrupados=[];
					var text_aux="";

					switch (personal_datos_info.nivel)
					{
						case "S1" :{var grupos=3;break;}

						case "P2" :{var grupos=4;break;}

						case "P3" :{var grupos=6;break;}

						case "P4" :{var grupos=8;break;}

						case "P5":
						default:{var grupos=-1;break;}
					}

					var palabras = nombres.length/grupos;
					var palabras_dobles=Math.ceil((palabras-Math.floor(palabras))*grupos);

					if(grupos=="-1")
					{
						nombres_agrupados=nombres;
					}
					else
					{
						for(bucle_1=grupos;bucle_1>0;bucle_1--)
						{
							text_aux="";

							if(palabras_dobles>0)
							{
								palabras_dobles--;
								for(bucle_2=Math.ceil(palabras);bucle_2>0;bucle_2--)
								{
									palabra=nombres.shift();
									if(typeof palabra !="undefined")
										text_aux+=" "+palabra;
								}
							}
							else
							{
								for(bucle_2=Math.floor(palabras);bucle_2>0;bucle_2--)
								{
									palabra=nombres.shift();
									if(typeof palabra !="undefined")
										text_aux+=" "+palabra;
								}
							}
							//charAt(0).toUpperCase() + text_aux.slice(1);
							text_aux = text_aux.trim();
							text_aux = text_aux.charAt(0).toUpperCase() + text_aux.slice(1);

							nombres_agrupados.push(text_aux);

						}
					}
						for(s=0;s<nombres_agrupados.length;s++)
						{
						   if(nombres_agrupados[s]!="")
						   {
							array_nombres_agrupados_sin_espacios.push(nombres_agrupados[s]);
						   }
						}

					var array_preguntas_desordenadas  = new Array();
					var long_nombres = array_nombres_agrupados_sin_espacios.length;

					for(s=0;s<long_nombres;s++)
					{
						var aleatorio_nombres = array_nombres_agrupados_sin_espacios[Math.floor(Math.random()*array_nombres_agrupados_sin_espacios.length)];
						if(aleatorio_nombres!="undefined")
						{
						  var posicion_eliminar = array_nombres_agrupados_sin_espacios.indexOf(aleatorio_nombres);
						   array_nombres_agrupados_sin_espacios.splice(posicion_eliminar,1);
						   array_preguntas_desordenadas.push(aleatorio_nombres);
						}
					  }
					document.getElementById("titulo_ordenar_frase").innerHTML=smile_datos.preguntas[indice_preguntas].titulo+ " (drag and drop)";
					document.getElementById("texto_ordenar_frase").innerHTML="";
					for(i in array_preguntas_desordenadas)
					{
							//document.getElementById("texto_ordenar_frase").insertAdjacentHTML('beforeEnd',"<div id=div"+i+" class='p_01174_div_palabras_dragdrop' ondragstart='p_01174_drag(event)' ondrop='p_01174_drop(event)' ondragover='p_01174_allowDrop(event);'  ontouchstart='p_01174_drag_touch(event)' ontouchmove='p_01174_drag_move_touch(event)' ontouchend='p_01174_drag_drop_touch(event)' draggable='true'><div style='margin-bottom: 0.5em; padding: 5px 10px; font-size: 16px; margin-left: 12px; background-color: white; color: black; border: solid 0.1em;  border-radius: 0.3em; box-shadow: 2px 2px 0; display: inline-block;  font-family: HelveticaNeueRoman; margin-right:3px;' name='palabras_desordenadas' id="+i+">"+array_preguntas_desordenadas[i]+"</div></div>");
							document.getElementById("texto_ordenar_frase").insertAdjacentHTML('beforeEnd',"<div id=div"+i+" class='p_01174_div_palabras_dragdrop'  onmousedown='p_01174_drag_click(event)'  ontouchstart='p_01174_drag_touch(event)' ontouchmove='p_01174_drag_move_touch(event)' ontouchend='p_01174_drag_drop_touch(event)'><div style='margin: 3px 3px 5px 12px; padding: 5px 10px; font-size: 16px; background-color: white; color: black; border: solid 1px; outline: 3px solid transparent; border-radius: 0.3em; box-shadow: 2px 2px 0; display: inline-block;  font-family: HelveticaNeueRoman;' name='palabras_desordenadas' id="+i+">"+array_preguntas_desordenadas[i]+"</div></div>");
					}
					break;

				default: alert("Error al mostrar la pregunta");
					break;
			}

			if(smile_datos.preguntas_cargadas[indice_preguntas]==0)
			{
				p_01174_insertando_estructura_pregunta_en_div_p_01175_preguntas('p_01175_smile_estructura_'+smile_datos.preguntas[indice_preguntas].tipo,indice_preguntas);
			}else if(smile_datos.preguntas_cargadas.length<=6)
			{
				p_01174_almacenar_preguntas_en_div_p_01175_preguntas('p_01175_smile_estructura_'+smile_datos.preguntas[indice_preguntas].tipo,indice_preguntas);
			}
			if(!llamar_solo_una_vez_funcion_mostrar_pregunta){llamar_solo_una_vez_funcion_mostrar_pregunta=true;mostrar_pregunta_actual();}
			if( smile_datos.pregunta_vista_subida.length > parseInt(p_01174_js_cantidad_preguntas_smiles/2) )
			{
				p_01174_js_cantidad_preguntas_smiles=smile_datos.preguntas.length;
				p_01174_consulta_smile_preguntas( parseInt(p_01174_js_cantidad_preguntas_smiles/2 ), 'secundario');
			};
		}
		else/*TRINITY*/
		{
			var expresion = new RegExp(/id="/g);
			var expresionName = new RegExp(/name="/g);
			indidce_preguntas_mismo_tipo=[];
			for(i in smile_datos.preguntas)
			{

				if(smile_datos.preguntas[i].categoria=="trinity"
				&&smile_datos.preguntas[i].subtema_id==smile_datos.preguntas[indice_preguntas].subtema_id
				&&smile_datos.preguntas[i].tema_id==smile_datos.preguntas[indice_preguntas].tema_id
				&&i>=indice_preguntas)
				{
					indidce_preguntas_mismo_tipo.push(i);
				}
			}

			//lista=document.getElementById('n'+indice_preguntas+'_lista');
			for(p in indidce_preguntas_mismo_tipo)
			{
				document.getElementById('texto_trinity').innerHTML=smile_datos.preguntas[indidce_preguntas_mismo_tipo[p]].pregunta;
				//document.getElementById('lista').insertAdjacentHTML('beforeEnd',"<li id=pestana_"+smile_datos.preguntas[indidce_preguntas_mismo_tipo[p]].tipo+"><a id="+smile_datos.preguntas[indidce_preguntas_mismo_tipo[p]].tipo+"_"+p+">"+smile_datos.preguntas[indidce_preguntas_mismo_tipo[p]].tipo+"</a</li>");
				document.getElementById('lista').insertAdjacentHTML('beforeEnd',""+
					"<li id=pestana_"+smile_datos.preguntas[indidce_preguntas_mismo_tipo[p]].tipo+">"+"<a id="+smile_datos.preguntas[indidce_preguntas_mismo_tipo[p]].tipo+"_"+p+">"+smile_datos.preguntas[indidce_preguntas_mismo_tipo[p]].tipo.replace("drag","Fill in").replace("m_option","Multi Option").replace("tf","Entitle")+"</a</li>");
				switch(smile_datos.preguntas[indidce_preguntas_mismo_tipo[p]].tipo)
				{
					case "drag" :
					document.getElementById("Titulo2").innerHTML=smile_datos.preguntas[indidce_preguntas_mismo_tipo[p]].titulo;
					document.getElementById("Titulo_pregunta").style.display='none';
					document.getElementById("Titulo_pregunta").style.marginBottom="2em";
					var espacio_ele = smile_datos.preguntas[indidce_preguntas_mismo_tipo[p]].drag;

					document.getElementById('p_01175_respuesta_drag_drop').innerHTML=espacio_ele.replace(/_!_([^_]*[^!]*[^_]*)_!!_/g,""+
						"&nbsp;"+
						'<div name="espacios_en_blanco" class="p_01174_espacio" style="position:relative;display:inline;" onclick="p_01174_drag_option(this,\''+indidce_preguntas_mismo_tipo[p]+'\')">'+
							"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&#9660;"+
						"</div>"+
						"&nbsp;"+
					"");

					for (i in document.getElementById('p_01175_respuesta_drag_drop').childNodes)
					{
					   var hijo=document.getElementById('p_01175_respuesta_drag_drop').childNodes[i];
					   if(hijo.nodeType=="1" && hijo.innerHTML)
					   {
							hijo.id='espacio_blanco_'+i;
					   }
					}
						break;

					case "m_option" :
					document.getElementById("p_01175_respuesta_m_option").innerHTML="";
					document.getElementById("Titulo3").innerHTML=smile_datos.preguntas[indidce_preguntas_mismo_tipo[p]].titulo;
					document.getElementById("Titulo3").style.marginBottom="15px";
					//document.getElementById("Texto3").innerHTML=smile_datos.preguntas[indidce_preguntas_mismo_tipo[p]].pregunta;
					document.getElementById("Texto3").style.display='none';
						for(i in smile_datos.preguntas[indidce_preguntas_mismo_tipo[p]].respuestas)
						{
							document.getElementById("p_01175_respuesta_m_option").insertAdjacentHTML('beforeEnd',""+
							"<div id=respuestas_m_option"+i+" class='style_divs_respuestas'>"+
								//"<label style='font-size: 16px'>"+
								"<label>"+
								"<div class='style_checkbox_redondo'>"+
								"<input onclick='p_01174_comprobarMarcaOpcionM0(this);' type='checkbox' class='checkboxMultioption' style='float: left' id=checkbox"+i+" name='gruupPreguntasMulti' value="+i+">"+
								"</div>"+
								"<span id=checkboxM0"+i+" style='padding-left: 25px;display:block;'>"+smile_datos.preguntas[indidce_preguntas_mismo_tipo[p]].respuestas[i]+"</span>"+
								"</label>"+
							"</div>");
						}
						break;

					case "tf" :
						document.getElementById("Titulo").innerHTML=smile_datos.preguntas[indidce_preguntas_mismo_tipo[p]].titulo;
						document.getElementById("Titulo").style.marginBottom="15px";
						//document.getElementById("Texto").innerHTML=smile_datos.preguntas[indidce_preguntas_mismo_tipo[p]].pregunta;
						document.getElementById("Texto").style.display='none';
						document.getElementById("p_01175_respuesta_true_false").innerHTML="";
						for(i in smile_datos.preguntas[indidce_preguntas_mismo_tipo[p]].respuestas)
						{
								document.getElementById("p_01175_respuesta_true_false").insertAdjacentHTML('beforeEnd',""+
								"<div id=respuestas_tf"+i+" class='style_divs_respuestas'>"+
									//"<label style='font-size: 16px'>"+
									"<label>"+
									"<div class='style_checkbox_redondo'>"+
									"<input onclick='p_01174_comprobarMarcaOpcionTF(this);' type='checkbox' class='checkboxMultioption' style='float: left;' id=acepto"+i+" name='gruupPreguntas' value="+i+">"+
									"</div>"+
									"<span id=aceptospan"+i+" style='display:block; padding-left: 25px;'>"+smile_datos.preguntas[indidce_preguntas_mismo_tipo[p]].respuestas[i]+"</span>"+
									"</label>"+
								"</div>");
						}
						break;
					default: break;
				}
				if(typeof smile_datos.preguntas_cargadas[indidce_preguntas_mismo_tipo[p]] == "undefined")smile_datos.preguntas_cargadas.push(parseInt(indidce_preguntas_mismo_tipo[p]));

				//p_01174_nid++;

				x=document.getElementById('p_01175_smile_estructura_'+smile_datos.preguntas[indice_preguntas].tipo).innerHTML.replace(expresion,"id=\"n"+indice_preguntas+"_");
				x=x.replace(expresionName,"name=\"n"+indice_preguntas+"_");
				document.getElementById('contenidopestanas').innerHTML+=x;
				indice_preguntas++;
			}
			var expresion_quitar_id = new RegExp(/id="n[0-9]*_/g);
			//console.info(document.getElementById('p_01175_smile_estructura_trinity').innerHTML);
			cargando=document.getElementById('p_01175_smile_estructura_trinity').innerHTML.replace(expresion,"id=\"n"+p_01174_nid+"_");
			//cargando=cargando.replace(expresionName,"name=\"n"+p_01174_nid+"_");
			document.getElementById("p_01175_preguntas").innerHTML+=cargando;
			document.getElementById('n'+p_01174_nid+'_contenidopestanas').innerHTML=document.getElementById('n'+p_01174_nid+'_contenidopestanas').innerHTML.replace(expresion_quitar_id,"id=\"");
			document.getElementById('contenidopestanas').innerHTML="";
			document.getElementById('lista').innerHTML="";
			p_01174_nid++;
			if(smile_datos.preguntas_cargadas.length<=6)
			{
				p_01174_carga_pregunta();
			}
			if( smile_datos.pregunta_vista_subida.length > parseInt(p_01174_js_cantidad_preguntas_smiles/2) )
			{
				p_01174_js_cantidad_preguntas_smiles=smile_datos.preguntas.length;
				p_01174_consulta_smile_preguntas( parseInt(p_01174_js_cantidad_preguntas_smiles/2 ), 'secundario');
			};
			indidce_preguntas_mismo_tipo=[];
			if(!llamar_solo_una_vez_funcion_mostrar_pregunta){llamar_solo_una_vez_funcion_mostrar_pregunta=true;mostrar_pregunta_actual();}
		}
	}

}

function playImagensonido()
{
	func();
}

function  p_01174_filtro_pregunta_smile() //función que me permite hacer el filtro de las preguntas
{ //filtro de los smiles
	grupo_opciones_nivel_enviar = document.getElementsByName("type_ask");
		for(t=0;t<grupo_opciones_nivel_enviar.length;t++)
		{ //leemos los valores que ha marcado el usuario para enviarlos y hacer la query.
			if(grupo_opciones_nivel_enviar[t].value=="all")
			{
				if(grupo_opciones_nivel_enviar[t].checked)
				{
					p_01174_valor_type_ask_checked.push(grupo_opciones_nivel_enviar[t].value);
					break;
				}
			}else{
				if(grupo_opciones_nivel_enviar[t].checked)
				{
					p_01174_valor_type_ask_checked.push(grupo_opciones_nivel_enviar[t].value);
				}
			}

		}
}


function p_01174_drop(e, p_01174_drag_, p_01174_drop_id_, p_01174_posx_, p_01174_posy_) {
	var p_01174_receptor_drop;
	var p_01174_nodo_drag;
	var p_01174_padre_nodos;
	var p_01174_posx;
	var p_01174_posy;

	//raton
	if(typeof p_01174_drop_id_=='undefined'){
		p_01174_receptor_drop= e.target;
		p_01174_padre_nodos= e.dataTransfer.getData("text").slice(0,e.target.id.indexOf("_")+1)+"texto_ordenar_frase";
		p_01174_padre_nodos= document.getElementById(p_01174_padre_nodos);
		p_01174_nodo_drag= document.getElementById(e.dataTransfer.getData("text"));
		document.getElementById("p_01175_posicion_dedo").style.display="none";

		p_01174_posx= e.clientX;
		p_01174_posy= e.clientY;
	}
	//tactil
	else{
		p_01174_receptor_drop= p_01174_drop_id_;
		p_01174_nodo_drag= p_01174_drag_;
		p_01174_padre_nodos= p_01174_nodo_drag.id.slice(0,p_01174_nodo_drag.id.indexOf("_")+1)+"texto_ordenar_frase";
		p_01174_padre_nodos= document.getElementById(p_01174_padre_nodos);
		p_01174_posx= p_01174_posx_;
		p_01174_posy= p_01174_posy_;

		document.querySelector("#p_01175_preguntas .text").style.opacity="1";
		p_01174_drag_node.style.opacity="1";

	}
	document.getElementById("p_01175_preguntas").style.background="";
	document.getElementById("p_01175_flecha_posicion").style.display="none";
	p_01174_drag_node.style.pointerEvents = "auto";
	p_01174_drag_node.style.transform="";
	p_01174_drag_node.parentNode.style.width="";
	p_01174_drag_node.parentNode.style.height= "";

	if(!p_01174_receptor_drop || (p_01174_receptor_drop && (p_01174_receptor_drop.id!=p_01174_padre_nodos.id))){
		if (p_01174_receptor_drop && p_01174_receptor_drop.parentNode && (p_01174_receptor_drop.parentNode.className== "p_01174_div_palabras_dragdrop")) {
			p_01174_receptor_drop= p_01174_receptor_drop.parentNode;
		}
		else if (!p_01174_receptor_drop || (p_01174_receptor_drop.className!= "p_01174_div_palabras_dragdrop")){
			//se suelta fuera
			p_01174_drag_node.style.position="";
			p_01174_nodo_drag.children[0].style.color= p_01174_nodo_drag_color_inicial;

			//devolver estilo inicial al nodo que se arrastra
			p_01174_nodo_drag.children[0].style.zIndex="";
			p_01174_nodo_drag.children[0].style.top="";
			p_01174_nodo_drag.children[0].style.left="";

			return;
		}
		if(p_01174_receptor_drop.parentNode!= p_01174_padre_nodos){
			for (var i=0; i<p_01174_padre_nodos.children.length; i++){
				if(p_01174_padre_nodos.children[i].id== p_01174_receptor_drop.id){
					p_01174_receptor_drop= p_01174_padre_nodos.children[i];
				}
			}
		}

		p_01174_padre_nodos.insertBefore(p_01174_nodo_drag, p_01174_receptor_drop);

	}
	//se ha soltado en el contenedor, al final de una linea
	else{
		p_01174_nodo_drag.children[0].style.display="none";
		var p_01174_elemento_izq="";
		while(p_01174_posx){
			p_01174_elemento_izq= document.elementFromPoint(p_01174_posx--, p_01174_posy);
			if(p_01174_elemento_izq.id!=p_01174_padre_nodos.id)
				break;
		}
		if((p_01174_elemento_izq)&&(p_01174_elemento_izq.className=="p_01174_div_palabras_dragdrop")){
			//final de linea
			p_01174_padre_nodos.insertBefore(p_01174_nodo_drag, p_01174_elemento_izq.nextSibling);
		}
		//en la linea debajo de ultima caja
		else{
			p_01174_padre_nodos.insertBefore(p_01174_nodo_drag, p_01174_padre_nodos.children[p_01174_padre_nodos.children.length-1].nextSibling);
		}
	}
	p_01174_drag_node.style.position="";

	//devolver estilo inicial al nodo que se arrastra
	p_01174_nodo_drag.children[0].style.display="block";
	p_01174_nodo_drag.children[0].style.zIndex="";
	p_01174_nodo_drag.children[0].style.top="";
	p_01174_nodo_drag.children[0].style.left="";
	p_01174_nodo_drag.children[0].style.color= "#0087ae";

}

function p_01174_formar_frase_usuario_drag_drop(p_01174_padre_nodos){
	var npregunta_frase = parseInt(p_01174_obtener_numero_pregunta(p_01174_padre_nodos.children[0].children[0].id));
	document.getElementById("n"+npregunta_frase+"_botonPasarOF").style.display="none";
	document.getElementById("n"+npregunta_frase+"_botonOF").style.display="";
}

function recargar_preguntas()
{
	var p_01176_recarga_smile_preguntas_iframe = document.createElement("iframe");
	p_01176_recarga_smile_preguntas_iframe.id="p_01176_recarga_smile_preguntas_iframe";
	p_01176_recarga_smile_preguntas_iframe.name="p_01176_recarga_smile_preguntas_iframe";
	p_01176_recarga_smile_preguntas_iframe.src="http://app.oxbridge.es/app/DEV/MIGUE/movil/smiles/smiles_datos_preguntas_recarga_preguntas.php";
	p_01176_recarga_smile_preguntas_iframe.style.display="none";
	if(!document.getElementById("p_01176_recarga_smile_preguntas_iframe"))
	{
		document.body.appendChild(p_01176_recarga_smile_preguntas_iframe);
	}
}

function p_01174_consulta_smile_preguntas(p_01174_js_f_cantidad_preguntas_smiles, p_01174_js_f_consulta)
{
	var ids="";
	if(p_01174_js_f_consulta=="secundario"){
		for(s in smile_datos.preguntas)
		{
			ids+= smile_datos.preguntas[s].id_preguinta + ",";
		}
			for(s in preguntaCargada)
		{
				ids+= preguntaCargada[s].id_preguinta + ",";
		}
		ids=ids.slice(0,-1);
	}
	//alert(ids);
	//alert(p_01174_js_f_cantidad_preguntas_smiles+" "+p_01174_js_f_consulta);
	var p_01176_smile_preguntas_iframe = document.createElement("iframe");
	p_01176_smile_preguntas_iframe.id="p_01176_smile_preguntas_iframe";
	p_01176_smile_preguntas_iframe.name="p_01176_smile_preguntas_iframe";
	document.body.appendChild(p_01176_smile_preguntas_iframe);

	if(document.getElementById("p_01176_smile_preguntas_formulario"))
	{
		hijo=document.getElementById("p_01176_smile_preguntas_formulario");
		hijo.parentNode.removeChild(hijo);
	}

	var texto="<form style='display:none;' target=\"p_01176_smile_preguntas_iframe\"  id=\"p_01176_smile_preguntas_formulario\" action=\"<? echo ver_url("movil/smiles/p_01391_smile_preguntas_consulta.php","src"); ?>\" method=\"post\">";

	texto+="<input type=hidden name=alumno_id value=\""+alumno_id+"\">";
	texto+="<input type=hidden name=bd value=\""+personal_datos_info.bd+"\">";
	texto+="<input type=hidden name=nivel value=\""+personal_datos_info.nivel+"\">";
	texto+="<input type=hidden name=filtro value=\""+p_01174_valor_type_ask_checked+"\">";
	texto+="<input type=hidden name=cantidad value=\""+p_01174_js_f_cantidad_preguntas_smiles+"\">";
	texto+="<input type=hidden name=consulta value=\""+p_01174_js_f_consulta+"\">";
	texto+="<input type=hidden name=ids value=\""+ids+"\">";
	texto+="<input type=hidden name=trinity value=\""+personal_datos_info.trinity+"\">";
	texto+="</form>";
	document.body.insertAdjacentHTML("beforeEnd",texto);
	document.getElementById("p_01176_smile_preguntas_formulario").submit();


	p_01176_smile_preguntas_iframe.style.display="none";
	if(!document.getElementById("p_01176_smile_preguntas_iframe"))
	{
		document.body.appendChild(p_01176_smile_preguntas_iframe);
	}
	p_01174_valor_type_ask_checked.length=0; //limpiamos el array de los filtro una vez pulsa el boton start.
}

function p_01174_redimensionar_imagen_pregunta_IMG(id_imagen) //función que me permite redimensionar el alto o el ancho en función de su tamaño para meterlo en un DIV.
{
		var id_div = document.getElementById(id_imagen).parentNode;
		var ancho_div = document.getElementById(id_div.id).clientWidth; //ancho div
		var alto_div = document.getElementById(id_div.id).clientHeight; //ancho div
		var resultado_division_div =  ancho_div/alto_div;

		var ancho_imagen = document.getElementById(id_imagen).offsetWidth; //ancho de la imagen
		var alto_imagen = document.getElementById(id_imagen).offsetHeight; //alto de la imagen
		var resultado_division_imagen =  ancho_imagen/alto_imagen;
		if(resultado_division_imagen>resultado_division_div)
		{
			document.getElementById(id_imagen).style.width="100%";
			document.getElementById(id_imagen).style.height="100%";
		}
		else
		{
			document.getElementById(id_imagen).style.height="100%";
			document.getElementById(id_imagen).style.width="100%";
		}
}

function p_01174_creacion_imagen(id_div,url_imagen,x) //función que me permite crear las imagenes en la pregunta de tipo fotos
{
		var ancho_div = document.getElementById(id_div).offsetWidth; //ancho div
		var alto_div = document.getElementById(id_div).offsetHeight; //ancho div
		var resultado_division_div =  ancho_div/alto_div;

		imagen_creada = document.createElement("IMG");
		imagen_creada.id='p_00001_img_respuesta_'+x;
		imagen_creada.src=url_imagen;
		imagen_creada.name='respuesta_img';
		imagen_creada.style.verticalAlign='middle';
		imagen_creada.setAttribute("onclick", "p_01174_comprobarRespCorrecta(this.id);");
		//imagen_creada.setAttribute("onerror","p_01174_borrar_imagen_no_hay_internet(this.parentNode.parentNode.parentNode.id);"); //console.info('"+url_imagen+"') //p_01174_borrar_imagen_no_hay_internet(this.parentNode.parentNode.parentNode.id);
		//imagen_creada.setAttribute("onload","p_01174_redimensionar_imagen_pregunta_IMG(this.id);");
		//imagen_creada.onerror="p_00989_error_img(\''+ preguntaActual.respuestas[x] +'\');"
		document.getElementById(id_div).appendChild(imagen_creada);
		document.getElementById(id_div).insertAdjacentHTML("afterbegin","<img style='height: 100%;vertical-align: middle;'>");
		//p_01174_redimensionar_imagen_pregunta_IMG(imagen_creada.id);

}

function p_01174_borrar_imagen_no_hay_internet(id_imagen)
{

	//console.info("ID imagen: " + id_imagen);
	numero_id_pregunta = p_01174_obtener_numero_pregunta(id_imagen);
	console.info("obtener numero ID de pregunta: " + numero_id_pregunta);

	for(x=0;x<smile_datos.preguntas_cargadas.length;x++)
	{
		if(smile_datos.preguntas_cargadas[x]==numero_id_pregunta)
		{
			smile_datos.preguntas_cargadas.splice(x,1);
			smile_datos.preguntas_cargadas.push(smile_datos.preguntas_cargadas[smile_datos.preguntas_cargadas.length-1]+1);
		}
	}
	//smile_datos.preguntas.splice(numero_id_pregunta,1);
	document.getElementById(id_imagen).remove();
	//document.getElementById('n'+smile_datos.preguntas_cargadas[0]+'_'+smile_datos.preguntas[smile_datos.preguntas_cargadas[0]].tipo).style.display="";

}

function p_001174_final_consulta_preguntas() //funciones que se ejecutan una vez finalizada la consulta de las preguntas.
{
	document.getElementById("p_01175_cargando_imagen_espera_pregunta").style.display="none"; //ocultamos el circulo que aparece cuando pulsamos el start.
	if(smile_datos.preguntas.length>=6)
	{
		p_01174_carga_pregunta();
	}
	else
	{
		document.getElementById("p_01175_texto_a_mostrar").innerHTML=TEXTOS[151].text;
		document.getElementById("p_01175_mensaje_no_hay_preguntas_disponibles").style.display="";
	}
}

function p_01174_insertando_estructura_pregunta_en_div_p_01175_preguntas(valor,indice)  //Función que me permite añadir al DIV de copia_plantilla la estructura de cada pregunta por primera vez
{
	//remplace("<img ","<img onload='p_01174_redimensionar_imagen_pregunta_IMG(this.id);' ");
	var expresion = new RegExp(/id="/g);
	var expresionName = new RegExp(/name="/g);
	var html_pregunta = document.getElementById(valor).innerHTML.replace(expresion,"id=\"n"+indice+"_",expresionName,"name=\"n"+indice+"_");
	html_pregunta=html_pregunta.replace(expresionName,"name=\"n"+indice+"_");
	document.getElementById("p_01175_preguntas").innerHTML=html_pregunta;
	//document.getElementById("p_01175_preguntas").style.display="inline";
	document.getElementById("p_01175_preguntas").style.display="block";
	//p_01174_nid++;
	p_01174_carga_pregunta();

}

function p_01174_almacenar_preguntas_en_div_p_01175_preguntas(valor,indice) //funcion que va cargando las preguntas y las va guardando en el div p_01175_preguntas
{
	var expresion = new RegExp(/id="/g);
	var expresionName = new RegExp(/name="/g);
	var cargando=document.getElementById(valor).innerHTML.replace(expresion,"id=\"n"+indice+"_");
	cargando=cargando.replace(expresionName,"name=\"n"+indice+"_");
	document.getElementById("p_01175_preguntas").insertAdjacentHTML('beforeEnd',cargando);
	//p_01174_nid++;
	p_01174_carga_pregunta();
	//p_01174_ocultar_preguntas_almacenadas(); //función que va ocultando las preguntas  a medidas que las carga
}

function mostrar_pregunta_actual()
{
	var id_primer_div = document.getElementById("p_01175_preguntas").getElementsByTagName('div')[0].id;
	var typo_de_pregunta = id_primer_div.replace(/^n[0-9]*_/,"");
	if(typo_de_pregunta=="trinity")
	{
		p_01174_mostrar_preguntas_trinity();
	}
	else
	{
		p_01174_mostra_preguntas_normal();
	}
	if(typo_de_pregunta=="trinity"){
		p_01174_resize_preguntas_trinity();
	}
	else{
		p_01174_resize_preguntas();
	}
}

function p_01174_mostrar_preguntas_trinity()
{
	var numero_pregunta_actual;
	document.getElementById("p_01175_preguntas").style.display="";
	var id_primer_div = document.getElementById("p_01175_preguntas").getElementsByTagName('div')[0].id;
	document.getElementById(id_primer_div).style.display='';
	numero_pregunta_trinity=parseInt(p_01174_obtener_numero_pregunta(id_primer_div));

		var borrar_todo=true;
		for(i in document.getElementById('n'+numero_pregunta_trinity+'_contenidopestanas').childNodes)
		{
			if(document.getElementById('n'+numero_pregunta_trinity+'_contenidopestanas').childNodes[i].nodeType=="1")
			{
				borrar_todo=false;
			}
		}

		if(!borrar_todo){
			 var id_primer_div_contenido_pestanas=document.getElementById("n"+numero_pregunta_trinity+"_contenidopestanas").getElementsByTagName('div')[0].id;
			 numero_pregunta_actual=parseInt(p_01174_obtener_numero_pregunta(id_primer_div_contenido_pestanas));
			 document.getElementById('n'+numero_pregunta_trinity+'_lista').getElementsByTagName('li')[0].style.background='#fdf9f5';
			 document.getElementById(id_primer_div_contenido_pestanas).style.display="";


		 }
		 else
		 {
			 p_01174_carga_pregunta();
			 //var id_primer_div = document.getElementById("p_01175_preguntas").getElementsByTagName('div')[0].id;
			 //numero_pregunta_trinity=parseInt(p_01174_obtener_numero_pregunta(id_primer_div));
			 var id_primer_div_contenido_pestanas=document.getElementById("n"+numero_pregunta_trinity+"_contenidopestanas").getElementsByTagName('div')[0].id;
			 numero_pregunta_actual=parseInt(p_01174_obtener_numero_pregunta(id_primer_div_contenido_pestanas));
			 //document.getElementById(id_primer_div).style.display="";
			 document.getElementById(id_primer_div_contenido_pestanas).style.display="";
			 	for(i in document.getElementById('n'+numero_pregunta_trinity+'_lista').childNodes)
				{
				 var hijos = document.getElementById('n'+numero_pregunta_trinity+'_lista').childNodes[i];
				 if(hijos.nodeType=="1") document.getElementById(hijos.id).style.display='';
				}
				document.getElementById('n'+numero_pregunta_trinity+'_lista').getElementsByTagName('li')[0].style.background='#fff';
		 }
		 smile_datos.pregunta_vista.push(numero_pregunta_actual);
		 p_01174_pregunta_vista_usuario();
}

function p_01174_mostra_preguntas_normal()
{
		var id_primer_div = document.getElementById("p_01175_preguntas").getElementsByTagName('div')[0].id;
		document.getElementById(id_primer_div).style.display="";

		var auxiliar_id_primer_div = id_primer_div; //pasamos el tipo de pregunta a una variable auxiliar
		var posicion_de_la_barra_baja = id_primer_div.indexOf('_'); //obtenemos la posicion del _
		auxiliar_id_primer_div = auxiliar_id_primer_div.slice(posicion_de_la_barra_baja+1,auxiliar_id_primer_div.length); //recortamos el div y nos quedamos con el tipo de pregunta. Ejemplo: fotos
		if(auxiliar_id_primer_div=="dragdrop")
		{
			//e_start();
		}
		//console.log(auxiliar_id_primer_div);
		numero_pregunta = parseInt(p_01174_obtener_numero_pregunta(id_primer_div));
		//p_01174_pregunta_actual = parseInt(numero_pregunta); //pasamos el numero de pregunta a la variable p_01174_pregunta_actual
		divs_imagenes = document.getElementById('n'+numero_pregunta+'_imagenes');
		//console.info(id_primer_div);
		if(auxiliar_id_primer_div=="fotos")
		{
			for (i in divs_imagenes.childNodes)
			{
				var hijo=divs_imagenes.childNodes[i];
					if(hijo.nodeType=="1")
					{
						p_01174_comprobacion_tamanios_div_imagen(document.getElementById(hijo.id).childNodes[1].id);
					}
			}
		}

		smile_datos.pregunta_vista.push(numero_pregunta);
		p_01174_pregunta_vista_usuario(); //llamamos a el formulario que envia la pregunta vista por el usuario.
}


function p_01174_comprobacion_tamanios_div_imagen(id_imagen)
{
	var id_div = document.getElementById(id_imagen).parentNode;
	if(
		document.getElementById(id_imagen).offsetWidth!=0
		&& document.getElementById(id_imagen).offsetHeight!=0
		&& document.getElementById(id_div.id).offsetWidth!=0
		&& document.getElementById(id_div.id).offsetHeight!=0
	)
	{
		p_01174_redimensionar_imagen_pregunta_IMG(id_imagen);
	}
	else
	{
		setTimeout(function(){p_01174_comprobacion_tamanios_div_imagen(id_imagen);},250 );
	}
}

function p_01174_skip_pregunta(valor)  //Función que me permite pasar de pregunta cuando un alumno no sabe que responder "Botón gris de las preguntas"
{
	var numero_pregunta = parseInt(p_01174_obtener_numero_pregunta(valor));
	var id_estructura_pregunta = document.getElementById(valor).parentNode.parentNode.id;
	var posicion_del_guion_bajo = id_estructura_pregunta.indexOf('_');
	id_estructura_pregunta=id_estructura_pregunta.slice(posicion_del_guion_bajo+1,id_estructura_pregunta.length);


	if(document.getElementById('n'+numero_pregunta+'_boton_deshacer_of'))
	{
		//document.getElementById('n'+p_01174_pregunta_actual+'_boton_deshacer_of').disabled=true;
		document.getElementById('n'+numero_pregunta+'_boton_deshacer_of').style.display="none";
	}
	p_01174_contador_palabras_entrando=0;
	smile_datos.preguntas[numero_pregunta].resultado=0; //asignamos el resultado al objeto
	setTimeout(p_01171_ganar_smile_animacion("-",numero_pregunta),1); //1 llamamos para cargar una nueva pregunta
	smile_datos.preguntas_contestadas.push(numero_pregunta);// 2 añadimos el indice de la pregunta al array preguntas contestadas


	switch(id_estructura_pregunta)
	{
		case "tf":
			var grupoPreguntas_tf = document.getElementsByName("n"+numero_pregunta+"_gruupPreguntas");
			for (i=0;i<grupoPreguntas_tf.length;i++) //deshabilitamos que pueda marca opcion si la respuesta es correcta
			{
					grupoPreguntas_tf[i].disabled = true;
			}
			p_01174_mostrar_siguiente_pregunta(valor);

			break;
		case "ordenar_frase":
			var etiqueta_frase = document.getElementsByName("n"+numero_pregunta+'_palabras_desordenadas'); //deshabilitamos los onclick en las palabras desordenadas
			for (var i=0; i < etiqueta_frase.length; i++)
			{
			   etiqueta_frase[i].onclick = false;
			}

			if($('#n'+numero_pregunta+'_frase_formada_usuario' + '> *').length > 0)
			{
				var etiqueta_frase_formada = document.getElementsByName('frase_formada_por_usuario'); //deshabilitamos los onclick en las palabras formadas pero que ha pasado
				for (var i=0; i < etiqueta_frase_formada.length; i++)
				{
				   etiqueta_frase_formada[i].onclick = false;
				}
			}
			//document.getElementById('n'+numero_pregunta+'_botonPasarOF').style.display="none";
			document.getElementById('n'+numero_pregunta+'_botonOF').style.display="none";
			document.getElementById('n'+numero_pregunta+'_boton_pasar_respuesta_contestada_OF').style.display="";
			document.getElementById("n"+numero_pregunta+"_frase_correcta").innerHTML=smile_datos.preguntas[numero_pregunta].pregunta;
			document.getElementById("n"+numero_pregunta+"_frase_correcta").style.fontWeight = "900";
			document.getElementById("n"+numero_pregunta+"_frase_correcta").style.display="";
			break;
		case "dragdrop":
			var palabras_arrastables = document.getElementsByName("n"+numero_pregunta+"_palabras_arrastrables");
			for (var i=0; i < palabras_arrastables.length; i++)
			{
				   palabras_arrastables[i].removeAttribute("onclick");
			}
			p_01174_mostrar_siguiente_pregunta(valor);
			break;
		case "mo":
		 var inputs_multi_option = document.getElementsByName("n"+numero_pregunta+"_gruupPreguntasMulti");
		 for (var i=0; i < inputs_multi_option.length; i++)
			{
			   inputs_multi_option[i].onclick = false;
			}
			p_01174_mostrar_siguiente_pregunta(valor);
			break;
		default: alert("Error");
				break;
	}


}

function p_01174_to_string(a)
{
	my_div=document.createElement("div");my_div.innerHTML=a;return my_div.innerHTML;
}

function p_01174_comprobarMarcaOpcionTF(Marcado) //Función que comprueba si se ha elegido una opción para después cambiar el icono del botón TF
{
	var npregunta = Marcado.id;
	npregunta = p_01174_obtener_numero_pregunta(npregunta);

	$("#n"+npregunta+"_botonPasarTF").hide();
	$("#n"+npregunta+"_botonTF").show();
	grupPreguntas = document.getElementsByName("n"+npregunta+"_"+"gruupPreguntas");
	if(!Marcado.checked)
	{
		$("#n"+npregunta+"_botonPasarTF").show();
		$("#n"+npregunta+"_botonTF").hide();
	}
	else
	{
		for(x=0;x<grupPreguntas.length;x++)
		{
			$('#n'+npregunta+'_acepto'+x).attr('checked', false);
		}

		Marcado.checked=true;
	}
}

function p_01174_formar_frase_usuario(valor) //funcion que me permite añadir palabras a un div para formar una frase a un div
{
	npregunta_frase = parseInt(p_01174_obtener_numero_pregunta(valor));
	//numero_pregunta_global = npregunta_frase; //asignamos el numero de la pregunta para saber despues a la hora de eliminar una palabra el numero de la palabra.
	p_01174_contador_palabras_entrando+=document.getElementById(valor).innerHTML.split(" ").length;
	//alert(p_01174_contador_palabras_entrando);
	 document.getElementById(valor).style.color="rgb(209, 215, 232)";

	 //document.getElementById(valor).onclick=false;
	 document.getElementById(valor).setAttribute("onclick","p_01174_pulsar_sobre_misma_palabra_borrar(this.id)");

	 contenido=document.getElementById(valor).innerHTML;
	 var id_palabra_escogida_por_usuario=document.getElementById(valor).id;
	 //alert(id_palabra_escogida_por_usuario);
	 var expresionR = /[0-9]{1,2}$\d*/m;
	 var numero_identificativo_palabra = id_palabra_escogida_por_usuario.match(expresionR);
	 //alert(numero_identificativo_palabra);

	document.getElementById("n"+npregunta_frase+"_frase_formada_usuario").innerHTML+="<div style='display: inline-block;' name='frase_formada_por_usuario' id=palabra_frase_formada_usuario_"+numero_identificativo_palabra+ " onclick='p_01174_borrar_palabra(this.id);'>" +contenido+ "</div>"+" ";
	//p_01174_nid_frase_usuario++;
	document.getElementById('n'+npregunta_frase+'_boton_deshacer_of').disabled=false;
	document.getElementById('n'+npregunta_frase+'_boton_deshacer_of').style.display="";

	longitud_total_palabras_bbdd = smile_datos.preguntas[npregunta_frase].pregunta.trim().replace("  "," ").split(" ").length;

		if(longitud_total_palabras_bbdd==p_01174_contador_palabras_entrando)
		{
			document.getElementById("n"+npregunta_frase+"_botonPasarOF").style.display="none";
			document.getElementById("n"+npregunta_frase+"_botonOF").style.display="";
		}
}

function p_01174_pulsar_sobre_misma_palabra_borrar(valor)
{
	npregunta_frase = parseInt(p_01174_obtener_numero_pregunta(valor));
	var id_palabra_borrar_psmpb = document.getElementById(valor).id;
	var expresionR = /[0-9]{1,2}$\d*/m;
	var numero_identificativo_palabra_borrar_psmpb = id_palabra_borrar_psmpb.match(expresionR);
	//alert(numero_identificativo_palabra_borrar_psmpb);

	/*******Falta buscar la manera de borrar la palabra del contenido del div**************/
	p_01174_contador_palabras_entrando-=document.getElementById("palabra_frase_formada_usuario_"+numero_identificativo_palabra_borrar_psmpb).innerHTML.split(" ").length;

	div_eliminar_psmpb="palabra_frase_formada_usuario_"+numero_identificativo_palabra_borrar_psmpb;

	document.getElementById(div_eliminar_psmpb).parentNode.removeChild(document.getElementById(div_eliminar_psmpb)); //eliminamos el div


	/*************APLICAMOS LOS ESTILOS QUE TENIA EL BOTON***************/
	document.getElementById(valor).setAttribute('style', 'margin-bottom: 0.5em; padding: 10px 10px 10px 20px; font-size: 0.8em; margin-left: 5%; padding 1em 1em 0.7em 1em; background-color: #fff; color: #0087ae; border: solid 0.1em;  border-radius: 0.3em; box-shadow: 0.1em 0.1em 0; display: inline-block;  font-family: HelveticaNeueRoman;');
	//document.getElementById(valor).setAttribute("onclick", "p_01174_formar_frase_usuario(this.id);");
	document.getElementById("n"+npregunta_frase+"_botonPasarOF").style.display="";
	document.getElementById("n"+npregunta_frase+"_botonOF").style.display="none";
	if($('#n'+npregunta_frase+'_frase_formada_usuario' + '> *').length > 0)
	{
		document.getElementById('n'+npregunta_frase+'_boton_deshacer_of').style.display="";
	}
	else
	{
		document.getElementById('n'+npregunta_frase+'_boton_deshacer_of').style.display="none";
	}
}

function p_01174_comprueba_frase_formada_usuario(valor) //acabar de hacer la función que sirve para comprobar si la frase que ha formado el usuario ha sido correcta.
{

	var npregunta_frase_formada_usu=parseInt(p_01174_obtener_numero_pregunta(valor));
	respuestas_correctas_bdd_frase_usuario = smile_datos.preguntas[npregunta_frase_formada_usu].pregunta.trim();
				do
				{
					respuestas_correctas_bdd_frase_usuario = respuestas_correctas_bdd_frase_usuario.replace("  "," ");
				}while(respuestas_correctas_bdd_frase_usuario.match(/  /g));

	respuestas_correctas_bdd_frase_usuario=p_01174_to_string(respuestas_correctas_bdd_frase_usuario); //remplazamos todos los elementos especiales.

	//var cont_palabra_final=0;
	var valor_div="";
	for(var i=0;  i<document.getElementById("n"+npregunta_frase_formada_usu+"_"+"texto_ordenar_frase").children.length; i++)
	{
		var peque=document.getElementById("n"+npregunta_frase_formada_usu+"_"+"texto_ordenar_frase").children[i].children[0];
				valor_div+=peque.innerText+" ";
	}
	valor_div = valor_div.replace("undefined","");
	valor_div = valor_div.trim().replace("  "," ");
	//alert(valor_div);

	if(valor_div.toLowerCase()==respuestas_correctas_bdd_frase_usuario.toLowerCase())
	{
		document.getElementById("n"+npregunta_frase_formada_usu+"_compruebaOF").style.display="none";
		document.getElementById("n"+npregunta_frase_formada_usu+"_frase_formada_usuario").style.color="green";
		document.getElementById("n"+npregunta_frase_formada_usu+"_frase_formada_usuario").style.fontWeight = "900";
		document.getElementById("n"+npregunta_frase_formada_usu+"_boton_deshacer").style.display="none";
		smile_datos.preguntas[npregunta_frase_formada_usu].resultado=1; //1 respuesta correcta
		p_01174_contador_palabras_entrando=0;
		var etiqueta_frase = document.getElementsByName("n"+npregunta_frase_formada_usu+'_palabras_desordenadas'); //deshabilitamos los onclick en las palabras desordenadas
							for (var i=0; i < etiqueta_frase.length; i++)
							{
							   etiqueta_frase[i].onclick = false;
							}
		var etiqueta_frase_texto_borrar = document.getElementsByName("frase_formada_por_usuario"); //deshabilitamos los onclick en la frase formada por el usuario.
							for (var i=0; i < etiqueta_frase_texto_borrar.length; i++)
							{
							   etiqueta_frase_texto_borrar[i].onclick = false;
							}
		//setTimeout(function(){document.getElementById(valor).parentNode.parentNode.remove();p_01174_carga_pregunta();},2000);
		p_01174_borrar_div_preguntas(valor);

		setTimeout(p_01171_ganar_smile_animacion("+",npregunta_frase_formada_usu),1);
		smile_datos.preguntas_contestadas.push(npregunta_frase_formada_usu);
		smile_datos.preguntas_cargadas.shift();
		smile_datos.preguntas[npregunta_frase_formada_usu].respuesta_usuario=valor_div;
		p_01174_subir_pregunta(); //3 llamamos a la función de subir preguntas
	}
	else
	{
		var etiqueta_frase_incorrecta = document.getElementsByName("n"+npregunta_frase_formada_usu+'_palabras_desordenadas'); //deshabilitamos los onclick en las palabras desordenadas
							for (var i=0; i < etiqueta_frase_incorrecta.length; i++)
							{
							   etiqueta_frase_incorrecta[i].onclick = false;
							}
		var etiqueta_frase_texto_borrar = document.getElementsByName("frase_formada_por_usuario"); //deshabilitamos los onclick en la frase formada por el usuario.
							for (var i=0; i < etiqueta_frase_texto_borrar.length; i++)
							{
							   etiqueta_frase_texto_borrar[i].onclick = false;
							}
		document.getElementById("n"+npregunta_frase_formada_usu+"_compruebaOF").style.display="none";
		smile_datos.preguntas[npregunta_frase_formada_usu].resultado=0; //0 respuesta incorrecta
		p_01174_contador_palabras_entrando=0;
		document.getElementById("n"+npregunta_frase_formada_usu+"_frase_formada_usuario").style.color="red";
		document.getElementById("n"+npregunta_frase_formada_usu+"_frase_formada_usuario").style.fontWeight = "900";
		document.getElementById("n"+npregunta_frase_formada_usu+"_frase_correcta").innerHTML=smile_datos.preguntas[npregunta_frase_formada_usu].pregunta;
		document.getElementById("n"+npregunta_frase_formada_usu+"_frase_correcta").style.fontWeight = "900";
		document.getElementById("n"+npregunta_frase_formada_usu+"_frase_correcta").style.display="";
		document.getElementById("n"+npregunta_frase_formada_usu+"_boton_pasar_of").style.display="none";
		document.getElementById("n"+npregunta_frase_formada_usu+"_boton_pasar_respuesta_contestada_OF").style.display="";
		document.getElementById("n"+npregunta_frase_formada_usu+"_boton_deshacer_of").disabled = true;
		setTimeout(p_01171_ganar_smile_animacion("-",npregunta_frase_formada_usu),1);
		smile_datos.preguntas_contestadas.push(npregunta_frase_formada_usu);
		//smile_datos.preguntas_cargadas.shift();
		smile_datos.preguntas[npregunta_frase_formada_usu].respuesta_usuario=valor_div;
		//p_01174_subir_pregunta(); //3 llamamos a la función de subir preguntas
		document.getElementById('n'+npregunta_frase_formada_usu+'_boton_deshacer_of').style.display="none";
	}
}

function p_01174_borrar_palabra_boton_deshacer(valor)
{
		var npregunta=parseInt(p_01174_obtener_numero_pregunta(valor));
		document.getElementById('n'+npregunta+'_boton_deshacer_of').style.display="";
		var ultimo_hijo_id = document.getElementById('n'+npregunta+'_frase_formada_usuario').lastElementChild.id;

		var expresionR = /[0-9]{1,2}$\d*/m;
		var numero_identificativo_palabra_borrar = ultimo_hijo_id.match(expresionR);
		if(ultimo_hijo_id)
		{
		p_01174_contador_palabras_entrando-=document.getElementById(ultimo_hijo_id).innerHTML.split(" ").length;
		var div_eliminar = document.getElementById(ultimo_hijo_id);
		div_eliminar.parentNode.removeChild(div_eliminar); //eliminamos el div
		//document.getElementById("n"+npregunta+"_"+numero_identificativo_palabra_borrar).setAttribute("onclick", "p_01174_formar_frase_usuario(this.id);");
		document.getElementById("n"+npregunta+"_"+numero_identificativo_palabra_borrar).setAttribute('style', 'margin-bottom: 0.5em; padding: 5px 10px; font-size: 16px; margin-left: 12px; background-color: rgba(159, 210, 225,0.3);color: #0087ae; border: solid 0.1em;  border-radius: 0.3em; box-shadow: 2px 2px 0; display: inline-block;  font-family: HelveticaNeueRoman;margin-right:3px;');
		document.getElementById("n"+npregunta+"_"+"botonPasarOF").style.display="";
		document.getElementById("n"+npregunta+"_"+"botonOF").style.display="none";
		}
		if($('#n'+npregunta+'_frase_formada_usuario' + '> *').length == 0)
		{
			//console.info("deshabilitado botom");
			//document.getElementById('n'+p_01174_pregunta_actual+'_boton_deshacer_of').disabled = true;
			document.getElementById('n'+npregunta+'_boton_deshacer_of').style.display="none";
		}

}

function p_01174_borrar_palabra(valor) //función que me permite borrar el div de la palabra que queramos
{
	var npregunta=document.getElementById(valor).parentNode.id;
	npregunta=parseInt(p_01174_obtener_numero_pregunta(npregunta));

	p_01174_contador_palabras_entrando-=document.getElementById(valor).innerHTML.split(" ").length;
	var conteido_div_eliminar  = document.getElementById(valor).innerHTML;
	var id_palabra_borrar = document.getElementById(valor).id;
	var expresionR = /[0-9]{1,2}$\d*/m;
	var numero_identificativo_palabra_borrar = id_palabra_borrar.match(expresionR);
	//alert(conteido_div_eliminar + " " + numero_identificativo_palabra_borrar);
	var div_eliminar = document.getElementById(valor);
	div_eliminar.parentNode.removeChild(div_eliminar); //eliminamos el div

	//document.getElementById("n"+npregunta+"_"+numero_identificativo_palabra_borrar).setAttribute("onclick", "p_01174_formar_frase_usuario(this.id);");
	document.getElementById("n"+npregunta+"_"+numero_identificativo_palabra_borrar).setAttribute('style', 'margin-bottom: 0.5em; padding: 10px 10px 10px 20px; font-size: 0.8em; margin-left: 5%; padding 1em 1em 0.7em 1em; background-color: #fff; color: #0087ae; border: solid 0.1em;  border-radius: 0.3em; box-shadow: 0.1em 0.1em 0; display: inline-block;  font-family: HelveticaNeueRoman;');
	document.getElementById("n"+npregunta+"_"+"botonPasarOF").style.display="";
	document.getElementById("n"+npregunta+"_"+"botonOF").style.display="none";

	if($('#n'+npregunta+'_frase_formada_usuario' + '> *').length > 0)
	{
		document.getElementById('n'+npregunta+'_boton_deshacer_of').style.display="";
	}
	else
	{
		document.getElementById('n'+npregunta+'_boton_deshacer_of').style.display="none";
	}
}

function p_01174_comprobarMarcaOpcionM0(marcado) //funcion que me permite comprobar cambiar el botón de gris a verde y viceversa en MultiOpion
{
		var npreguntaM0 = marcado.id;
		npreguntaM0 = parseInt(p_01174_obtener_numero_pregunta(npreguntaM0));

		$("#n"+npreguntaM0+"_botonPasarMO").show();
		$("#n"+npreguntaM0+"_botonMO").hide();
	/* Comprobamos que si no hay marcados ponemos el botón de pasar pregunta sin responder*/

	for(i in smile_datos.preguntas[npreguntaM0].respuestas)
	{
		if(document.getElementById("n"+npreguntaM0+"_"+"checkbox"+i).checked==true)
		{
			$("#n"+npreguntaM0+"_botonMO").show();
			$("#n"+npreguntaM0+"_botonPasarMO").hide();
		}
	}
}

function p_01174_comprueba_pregunta_correcta_tf(valor) //funcion que me permite comprobar si la respuesta es correcta o no en TF
{
	tipo_pregunta=document.getElementById(valor).parentNode.parentNode.parentNode.parentNode.id;
	tipo_pregunta=tipo_pregunta.replace(/^n[0-9]*_/,"");
	var npreguntavalorTF = parseInt(p_01174_obtener_numero_pregunta(valor));
	var posicion_respuesta_correcta_tf=0;
	var array_respuesta_usuario_TF = new Array(); //array que enviaremos de lo que ha contestado el alumno.

	grupoPreguntas = document.getElementsByName("n"+npreguntavalorTF+"_"+"gruupPreguntas");
		for (i=0;i<grupoPreguntas.length;i++)
		{
			array_respuesta_usuario_TF[i]=0;
			if (grupoPreguntas[i].checked)
			{
				array_respuesta_usuario_TF[i]=1;
				 var posicion_valor_presionado = i;
			}
		}

	valorBotonPresionado = grupoPreguntas[posicion_valor_presionado].value; //guardamos en valor que ha presionado el usuario.

	for(s=0;s<smile_datos.preguntas[npreguntavalorTF].correcta.length;s++) // for que recorremos para saber el indice de la respuesta correcta
	{
		if(smile_datos.preguntas[npreguntavalorTF].correcta[s]==1)
		{
			posicion_respuesta_correcta_tf = s;
		}
	}

	if(valorBotonPresionado==posicion_respuesta_correcta_tf)
	{
		smile_datos.preguntas[npreguntavalorTF].resultado=1; //1 respuesta correcta
		var grupoPreguntas_tf = document.getElementsByName("n"+npreguntavalorTF+"_"+"gruupPreguntas");
		for (i=0;i<grupoPreguntas.length;i++) //deshabilitamos que pueda marca opcion si la respuesta es correcta
		{
				grupoPreguntas_tf[i].disabled = true;
		}
		document.getElementById('n'+npreguntavalorTF+'_compruebaTF').style.display="none";
		setTimeout(p_01171_ganar_smile_animacion("+",npreguntavalorTF),1);
		smile_datos.preguntas_contestadas.push(npreguntavalorTF);
		smile_datos.preguntas_cargadas.shift();
		smile_datos.preguntas[npreguntavalorTF].respuesta_usuario=array_respuesta_usuario_TF;
		p_01174_subir_pregunta();
		//setTimeout(function(){document.getElementById(valor).parentNode.parentNode.remove();},2000)
		p_01174_borrar_div_preguntas(valor);
	}
	else
	{
		var grupoPreguntas_tf = document.getElementsByName("n"+npreguntavalorTF+"_"+"gruupPreguntas");
		for (i=0;i<grupoPreguntas.length;i++)
		{
			grupoPreguntas_tf[i].disabled = true;
		}
		smile_datos.preguntas[npreguntavalorTF].resultado=0; //0 respuesta incorrecta
		/**********************Marco la respuesta correcta ****************/
		document.getElementById("n"+npreguntavalorTF+"_acepto"+posicion_respuesta_correcta_tf).insertAdjacentHTML("afterend","<img id=n"+npreguntavalorTF+"_acepto_correcta src='<? echo ver_url("movil/smiles/images/green-check.png","src"); ?>' style='display:none; width:9%; left: 0; position:absolute; margin-top:-2%; height:26px;width:25px;'></img>");
		document.getElementById("n"+npreguntavalorTF+"_acepto"+posicion_respuesta_correcta_tf).style.visibility="hidden"; //oculto el input
		document.getElementById("n"+npreguntavalorTF+"_acepto_correcta").style.display=""; //muestro la imagen correcta

		/**********************Marco la respuesta incorrecta ****************/

		document.getElementById("n"+npreguntavalorTF+"_acepto"+posicion_valor_presionado).insertAdjacentHTML("afterend","<img id=n"+npreguntavalorTF+"_acepto_incorrecta src='<? echo ver_url("movil/smiles/images/error-flat.png","src"); ?>' style='display:none; width:7%; left: 0; position:absolute; height:20px; width: 20px;'></img>");

		document.getElementById("n"+npreguntavalorTF+"_acepto"+posicion_valor_presionado).style.visibility="hidden"; //oculto el input
		document.getElementById("n"+npreguntavalorTF+"_acepto_incorrecta").style.display=""; //muestro la imagen correcta
		setTimeout(p_01171_ganar_smile_animacion("-",npreguntavalorTF),1);
		smile_datos.preguntas_contestadas.push(npreguntavalorTF);
		smile_datos.preguntas[npreguntavalorTF].respuesta_usuario=array_respuesta_usuario_TF;
		//p_01174_subir_pregunta(); //3 llamamos a la función de subir preguntas
		//smile_datos.preguntas_cargadas.shift();
		document.getElementById("n"+npreguntavalorTF+"_compruebaTF").style.display="none";
		document.getElementById("n"+npreguntavalorTF+"_boton_pasar_respuesta_contestada_TF").style.display="";
	}
}

function p_01174_mostrar_siguiente_pregunta(valor) //función que me muestra la siguiente pregunta cuando el usuario ya ha visto la correcta y decide pasar de pregunta (boton azul)
{
	//smile_datos.preguntas_cargadas.shift();
	//smile_datos.preguntas[p_01174_pregunta_actual].respuesta_usuario="undefined";
	p_01174_subir_pregunta(); //3 llamamos a la función de subir preguntas
	smile_datos.preguntas_cargadas.shift();
	p_01174_borrar_div_preguntas(valor);
	//document.getElementById(valor).parentNode.parentNode.remove();
	p_01174_carga_pregunta();
	p_01174_resize_preguntas();
}

function p_01174_borrar_div_preguntas(valor)
{
	x=document.getElementById(valor).parentNode.parentNode.parentNode.id;
	numero_pregunta=parseInt(p_01174_obtener_numero_pregunta(x));
	//console.info(numero_pregunta);
	var ID=document.getElementById(valor).parentNode.parentNode.parentNode.parentNode.id;
	ID=ID.replace(/^n[0-9]*_/,"");
	if(ID=="trinity")
	{
		var id_a_ocultar=String(document.getElementById(valor).parentNode.parentNode.id);
		//console.info(id_a_ocultar);
		tipo_pregunta=id_a_ocultar.replace(/^n[0-9]*_/,"");
		switch(tipo_pregunta)
		{
			case "mo":
			//document.getElementById('n'+numero_pregunta+'_pestana_m_option').style.display='none';
			if(document.getElementById('n'+numero_pregunta+'_pestana_m_option'))
				document.getElementById('n'+numero_pregunta+'_pestana_m_option').remove();
			document.getElementById(id_a_ocultar).remove();
			if(document.getElementById('n'+numero_pregunta+'_contenidopestanas').children.length==0)
			{
				var id_primer_div = document.getElementById("p_01175_preguntas").getElementsByTagName('div')[0].id;
				document.getElementById(id_primer_div).remove();
			}
			mostrar_pregunta_actual();
			break;
			case "dragdrop":
			//document.getElementById('n'+numero_pregunta+'_pestana_drag').style.display='none';
			if(document.getElementById('n'+numero_pregunta+'_pestana_drag'))
				document.getElementById('n'+numero_pregunta+'_pestana_drag').remove();
			document.getElementById(id_a_ocultar).remove();
			if(document.getElementById('n'+numero_pregunta+'_contenidopestanas').children.length==0)
			{
				var id_primer_div = document.getElementById("p_01175_preguntas").getElementsByTagName('div')[0].id;
				document.getElementById(id_primer_div).remove();
			}
			mostrar_pregunta_actual();
			break;
			case "tf":
			//document.getElementById('n'+numero_pregunta+'_pestana_tf').style.display='none';
			if(document.getElementById('n'+numero_pregunta+'_pestana_tf'))
				document.getElementById('n'+numero_pregunta+'_pestana_tf').remove();
			document.getElementById(id_a_ocultar).remove();
			if(document.getElementById('n'+numero_pregunta+'_contenidopestanas').children.length==0)
			{
				var id_primer_div = document.getElementById("p_01175_preguntas").getElementsByTagName('div')[0].id;
				document.getElementById(id_primer_div).remove();
			}
			mostrar_pregunta_actual();
		}
	}
	else
	{
		var tipo_pregunta=document.getElementById(valor).parentNode.parentNode.parentNode.id;
		tipo_pregunta=tipo_pregunta.replace(/^n[0-9]*_/,"");
		if(tipo_pregunta=="fotos")
		{
			valor=document.getElementById(valor).parentNode.parentNode.parentNode.id;
			setTimeout(function(){document.getElementById(valor).remove();mostrar_pregunta_actual();},2000);
			//document.getElementById(valor).remove();
		}
		else
		{
			valor=document.getElementById(valor).parentNode.parentNode.id;
			tipo_pregunta=valor.replace(/^n[0-9]*_/,"");
			document.getElementById(valor).remove();
			mostrar_pregunta_actual();
		}

	}

}

function p_01174_pregunta_vista_usuario() //formulario que se envia una vez la pregunta esta vista por el usuario
{
		if(smile_datos.pregunta_vista.length>0)
		{
			if(navigator.onLine)
			{

					var texto="<iframe name=\"pregunta_vista\" id=\"pregunta_vista\" style=\"display:none;\"></iframe>";
					texto+="<form target=\"pregunta_vista\"  id=formulario_pregunta_cargada action=http://app.oxbridge.es/estructura_web/codigo/alumno/smiles_01_preguntas_04_php_03_insert_01_pregunta_mostrada.php method=post>";
					texto+="<input type=\"hidden\" name=\"p_0001402_input_alumno_id\" value=\""+alumno_id+"\">";
					texto+="<input type=\"hidden\" name=\"p_0001402_input_bd\" value=\""+personal_datos_info.bd+"\">";
					texto+="<input type=\"hidden\" name=\"p_0001402_input_pregunta_id\" value=\""+smile_datos.preguntas[smile_datos.pregunta_vista[0]].id_preguinta+"\">";
					texto+="<input type=\"hidden\" name=\"p_0001402_input_area_id\" value=\""+smile_datos.preguntas[smile_datos.pregunta_vista[0]].area_id+"\">";
					texto+="<input type=\"hidden\" name=\"p_0001402_input_idioma_id\" value=\""+smile_datos.preguntas[smile_datos.pregunta_vista[0]].idioma_id+"\">";
					texto+="<input type=\"hidden\" name=\"p_0001402_input_nivel_id\" value=\""+smile_datos.preguntas[smile_datos.pregunta_vista[0]].nivel_id+"\">";
					texto+="<input type=\"hidden\" name=\"p_0001402_input_tema_id\" value=\""+smile_datos.preguntas[smile_datos.pregunta_vista[0]].tema_id+"\">";
					texto+="<input type=\"hidden\" name=\"p_0001402_input_subtema_id\" value=\""+smile_datos.preguntas[smile_datos.pregunta_vista[0]].subtema_id+"\">";
					texto+="<input type=\"hidden\" name=\"p_0001402_input_categoria\" value=\""+smile_datos.preguntas[smile_datos.pregunta_vista[0]].categoria+"\">";
					texto+="<input type=\"hidden\" name=\"p_0001402_input_tipo\" value=\""+smile_datos.preguntas[smile_datos.pregunta_vista[0]].tipo_para_bd+"\">";
					texto+="<input type=\"hidden\" name=\"p_0001402_input_finalizador_js\" value=\"window.parent.p_01174_pregunta_vista_subida();\">";
					texto+="</form>";
					document.getElementById("p_01175_formulario_pregunta_vista").innerHTML=texto;
					document.forms["formulario_pregunta_cargada"].submit();

			}
			else
			{
				if(!evento_esperando_online_p_vista)
				{
						evento_esperando_online_p_vista=window.addEventListener('online',function()
						{
								window.removeEventListener(evento_esperando_online_p_vista);
								evento_esperando_online_p_vista=false;
								p_01174_pregunta_vista_usuario();
						});
				}
			}
		}
}

function p_01174_pregunta_vista_subida()
{
	smile_datos.pregunta_vista_subida.push(smile_datos.pregunta_vista.shift());
	p_01174_pregunta_vista_usuario();
}

function p_01174_subir_pregunta() //función envia lo que ha contestado el usuario
{
		if(smile_datos.preguntas_contestadas.length>0)
		{

			if(navigator.onLine)
			{
					var texto="<iframe name=\"pregunta_contestada\" id=\"pregunta_contestada\" style=\"display:none;\"></iframe>";
					texto+="<form target=\"pregunta_contestada\"  id=\"formulario_pregunta_contestada\" action=\"http://app.oxbridge.es/estructura_web/codigo/alumno/smiles_01_preguntas_04_php_04_update_01_respuesta_alumno.php\" method=\"post\">";
					texto+="<input type=\"hidden\" name=\"p_0001403_input_alumno_id\" value=\""+alumno_id+"\">";
					texto+="<input type=\"hidden\" name=\"p_0001403_input_bd\" value=\""+personal_datos_info.bd+"\">";
					texto+="<input type=\"hidden\" name=\"p_0001403_input_pregunta_id\" value=\""+smile_datos.preguntas[smile_datos.preguntas_contestadas[0]].id_preguinta+"\">";
					texto+="<input type=\"hidden\" name=\"p_0001403_input_respuesta\" value=\""+smile_datos.preguntas[smile_datos.preguntas_contestadas[0]].respuesta_usuario+"\">";
					texto+="<input type=\"hidden\" name=\"p_0001403_input_correcta\" value=\""+smile_datos.preguntas[smile_datos.preguntas_contestadas[0]].resultado+"\">";
					texto+="<input type=\"hidden\" name=\"p_0001403_input_smiles_conseguidos\" value=\""+smile_datos.smiles_totales.general.correctos+"\">";
					texto+="<input type=\"hidden\" name=\"p_0001403_input_smiles_para_pasar_nivel\" value=\""+smile_datos.smiles_totales.general.totales+"\">";
					texto+="<input type=\"hidden\" name=\"p_0001403_input_finalizador_js\" value=\"window.parent.p_01174_pregunta_subida();\">";
					texto+="</form>";
					document.getElementById("p_01175_formulario_pregunta_contestada").innerHTML=texto;
					document.forms["formulario_pregunta_contestada"].submit();
					//p_01174_eliminar_posicion_vector(p_01174_pregunta_actual);
					//smile_datos.preguntas_enviadas.push(smile_datos.preguntas_contestadas.shift());
			}
			else
			{
				//document.getElementById('p_01174_imagen_sin_conexion').style.display="";
				if(!evento_esperando_online)
				{
						evento_esperando_online=window.addEventListener('online',function()
						{
							//alert("Preguntas por subir: " + smile_datos.preguntas_contestadas.length);
							window.removeEventListener(evento_esperando_online);
							evento_esperando_online=false;
							p_01174_subir_pregunta();
						//document.getElementById('p_01174_imagen_sin_conexion').style.display="none";
						});
				}
			}
		}
}

function p_01174_pregunta_subida() //pregunta subida finalizador
{
	smile_datos.preguntas_enviadas.push(smile_datos.preguntas_contestadas.shift());
	p_01174_subir_pregunta();
}

function obtenerValorMultirespuesta(valor) //funcion que me permite comprobar si la respuesta es correcta o no en MultiOption
{
	npreguntavalorMo = parseInt(p_01174_obtener_numero_pregunta(valor));
	var posicion_correcta_guardar = new Array();
	var posicion_marcada_usuario = new Array();
	grupPreguntas = document.getElementsByName("n"+npreguntavalorMo+"_"+"gruupPreguntasMulti");
	var correct=true;
	var array_respuesta_usuario_M0 = new Array(); //array que enviaremos de lo que ha contestado el alumno.

	for (i=0;i<grupPreguntas.length;i++)
	{
      	 if (grupPreguntas[i].checked && smile_datos.preguntas[npreguntavalorMo].correcta[i]==0 || !grupPreguntas[i].checked && smile_datos.preguntas[npreguntavalorMo].correcta[i])
		 {
			 correct=false;
		 }
   	}

	for(s=0;s<grupPreguntas.length;s++) //cogo todos los valores marcados por el usuario
	{
		array_respuesta_usuario_M0[s]=0;
		if (grupPreguntas[s].checked)
		{
			posicion_poner_valor_marcado_usuario = s;
			array_respuesta_usuario_M0[posicion_poner_valor_marcado_usuario]=1;
			//alert(s);
		}
	}

	if(correct)
	{
		for (i=0;i<grupPreguntas.length;i++) //deshabilitamos que pueda marca opcion si la respuesta es correcta
		{
				grupPreguntas[i].disabled = true;
		}
		document.getElementById('n'+npreguntavalorMo+'_compruebaM0').style.display="none";
		smile_datos.preguntas[npreguntavalorMo].resultado=1;
		setTimeout(p_01171_ganar_smile_animacion("+",npreguntavalorMo),1);
		//setTimeout(function(){document.getElementById(valor).parentNode.parentNode.remove();},2000)
        smile_datos.preguntas_contestadas.push(npreguntavalorMo);
		p_01174_borrar_div_preguntas(valor);
		smile_datos.preguntas_cargadas.shift();
		smile_datos.preguntas[npreguntavalorMo].respuesta_usuario=array_respuesta_usuario_M0;
		p_01174_subir_pregunta();
	}
	else
	{
		for (i=0;i<grupPreguntas.length;i++) //deshabilitamos que pueda marca opcion si la respuesta es correcta
		{
				grupPreguntas[i].disabled = true;
		}
		for(x=0;x<=smile_datos.preguntas[npreguntavalorMo].correcta.length;x++)
		{
			if(smile_datos.preguntas[npreguntavalorMo].correcta[x]==1)
			{
				posicion_correcta_guardar.push(x);
			}
		}

		for(s=0;s<posicion_correcta_guardar.length;s++) //for que me pinta las preguntas correctas con la flecha en verde
		{
			document.getElementById("n"+npreguntavalorMo+"_checkbox"+posicion_correcta_guardar[s]).insertAdjacentHTML("afterend","<img id=n"+npreguntavalorMo+"_acepto_correcta_Moption"+s +" "+  "src='<? echo ver_url("movil/smiles/images/green-check.png","src"); ?>' style='display:none; width:9%; left: 0; position:absolute; margin-top:-2%; height:28px; width:36px;'></img>");
			document.getElementById("n"+npreguntavalorMo+"_checkbox"+posicion_correcta_guardar[s]).style.visibility="hidden"; //oculto el input
			document.getElementById("n"+npreguntavalorMo+"_acepto_correcta_Moption"+s).style.display=""; //muestro la imagen correcta
			//document.getElementById("n"+npreguntavalorMo+"_checkboxM0"+posicion_correcta_guardar[s]).style.backgroundColor="#1ECC1E";
			//alert(posicion_correcta_guardar[s]);
		}
		smile_datos.preguntas[npreguntavalorMo].respuesta_usuario=array_respuesta_usuario_M0;
		document.getElementById("n"+npreguntavalorMo+"_compruebaM0").style.display="none";
		document.getElementById("n"+npreguntavalorMo+"_boton_pasar_respuesta_contestada_M0").style.display="";
		smile_datos.preguntas[npreguntavalorMo].resultado=0;
		setTimeout(p_01171_ganar_smile_animacion("-",npreguntavalorMo),1);
		smile_datos.preguntas_contestadas.push(npreguntavalorMo);
		//smile_datos.preguntas_cargadas.shift();
	}
}

function p_01174_cambio_style_text_area()
{
		alert("ok");
}

function contarPalabras(valor){ //funcion que cuenta las palabras de la pergunta WRITING
	Npregunta = p_01174_obtener_numero_pregunta(valor);

	 textoAreaDividido  = new Array;
	 textoArea = document.getElementById("n"+Npregunta+"_"+"area").value;
	  numeroCaracteres = textoArea.length;
	  textoAreaDividido = textoArea.split(" ");
	  //textoAreaDividido = textoArea.replace(" ","");
	  for(p=0;p<textoAreaDividido.length;p++){
		  if(textoAreaDividido[p]==""){
			  textoAreaDividido.splice(p,1);
			  p--;
		  }
	  }
	  //alert(textoAreaDividido);

		numeroPalabras = textoAreaDividido.length;
		//alert(numeroPalabras);
		var longpalabras="";
		if(numeroPalabras<150){
			//alert("debes introducir mínimo 150 palabras!");
			longpalabras.className="error"
			setError("n"+Npregunta+"_"+"err_faltaTexto","<font color='black'>" + "minium is 150 words <br>" + "you have: " +"</font>" + "<font color='red'>" + numeroPalabras + "</font>");
			setError("n"+Npregunta+"_"+"err_faltaTexto","Words: " + "<font color='black'>" + numeroPalabras + "</font>");
			$("#n"+Npregunta+"_"+"botonWTING").hide();
			$("#n"+Npregunta+"_"+"botonPasarWRTING").show();
		}else if(numeroPalabras>=150){
			setError("n"+Npregunta+"_"+"err_faltaTexto","Words: " + "<font color='black'>" + numeroPalabras + "</font>");
			$("#n"+Npregunta+"_"+"botonPasarWRTING").hide();
			$("#n"+Npregunta+"_"+"botonWTING").show();
		}
		if(numeroPalabras>=180){
			//alert("Maximo son 180 palabras. " + " tienes " + numeroPalabras);
			longpalabras.className="error"
			setError("n"+Npregunta+"_"+"err_faltaTexto","<font color='black'>" + "maximun is 180 words <br>" + "you have: " +"</font>" + "<font color='red'>" + numeroPalabras + "</font>");
			$("#n"+Npregunta+"_"+"botonWTING").hide();
			$("#n"+Npregunta+"_"+"botonPasarWRTING").show();
		}
}

function guardarPalabrasEnviar(valor){ //boton verde WRITING
	Npregunta = p_01174_obtener_numero_pregunta(valor);
	//ArrayPalabrasEnviar  = new Array;
	 textoArea = document.getElementById("n"+Npregunta+"_"+"area").value;
	preguntaActual.enviar = textoArea; //guardamos en
	  /*
	  numeroCaracteres = textoArea.length;
	  ArrayPalabrasEnviar = textoArea.split(" ");
	  alert(ArrayPalabrasEnviar);
	*/
	  p_01174_carga_pregunta();
}

function guardarPalabrasEnviarRIW(valor){ //boton verde READING INTO WRITING
	Npregunta = p_01174_obtener_numero_pregunta(valor);
	//ArrayPalabrasEnviarRIW  = new Array;
	 textoArea = document.getElementById("n"+Npregunta+"_"+"areaRIW").value;
	 preguntaActual.enviar = textoArea; //guardamos en
	 /*
	  numeroCaracteres = textoArea.length;
	  ArrayPalabrasEnviarRIW = textoArea.split(" ");
	  alert(ArrayPalabrasEnviarRIW);
	  */
	  p_01174_carga_pregunta();

}

function p_01174_obtener_numero_pregunta(x) //función que me permite obtener el Numero de cada pregunta
{
	var expresionR = /[0-9]\d*/m;
	x = x.match(expresionR);
	return x;
}

function contarPalabrasRIW(valor){ //funcion que cuenta las palabras de la pergunta READING INTO WRITING
	Npregunta = p_01174_obtener_numero_pregunta(valor);
	//alert(Npregunta);

	 textoAreaDivididoRIW  = new Array;

	 textoArea = document.getElementById("n"+Npregunta+"_"+"areaRIW").value;
	  numeroCaracteres = textoArea.length;
	  textoAreaDivididoRIW = textoArea.split(" ");
	  //textoAreaDivididoRIW = textoArea.replace(" ","");
	  for(p=0;p<textoAreaDivididoRIW.length;p++){
		  if(textoAreaDivididoRIW[p]==""){
			  textoAreaDivididoRIW.splice(p,1);
			  p--;
		  }
	  }
	  //alert(textoAreaDivididoRIW);

		numeroPalabras = textoAreaDivididoRIW.length;
		//alert(numeroPalabras);
		var longpalabras="";
		if(numeroPalabras<150){
			//alert("debes introducir mínimo 150 palabras!");
			longpalabras.className="error"
			setError("n"+Npregunta+"_"+"err_faltaTextoRIW","<font color='black'>" + "minium is 150 words <br>" + "you have: " +"</font>" + "<font color='red'>" + numeroPalabras + "</font>");
			setError("n"+Npregunta+"_"+"err_faltaTextoRIW","Words: " + "<font color='black'>" + numeroPalabras + "</font>");
			$("#n"+Npregunta+"_"+"botonRIW").hide();
			$("#n"+Npregunta+"_"+"#botonPasarRIW").show();
		}else if(numeroPalabras>=150){
			setError("n"+Npregunta+"_"+"err_faltaTextoRIW","Words: " + "<font color='black'>" + numeroPalabras + "</font>");
			$("#n"+Npregunta+"_"+"botonPasarRIW").hide();
			$("#n"+Npregunta+"_"+"botonRIW").show();
			//css('display', 'inline-block');
		}
		if(numeroPalabras>=180){
			//alert("Maximo son 180 palabras. " + " tienes " + numeroPalabras);
			longpalabras.className="error"
			setError("n"+Npregunta+"_"+"err_faltaTextoRIW","<font color='black'>" + "maximun is 180 words <br>" + "you have: " +"</font>" + "<font color='red'>" + numeroPalabras + "</font>");
			$("#n"+Npregunta+"_"+"botonRIW").hide();
			$("#n"+Npregunta+"_"+"botonPasarRIW").show();
		}
}

function comprueba_correcta(valor) //función que me permite comprobar si es correcta o no Drag_and_Drop
{
	var npregunta_actual = parseInt(p_01174_obtener_numero_pregunta(valor));
	respuestas_correctas_bdd = preguntaActual.correcta;
	var respuestas_usuario = new Array();
	correcta_drag_drop=0;

	for(i in document.getElementById("n"+npregunta_actual+"_"+"p_01175_respuesta_drag_drop").childNodes)
	{
		var hijo=document.getElementById("n"+npregunta_actual+"_"+"p_01175_respuesta_drag_drop").childNodes[i];
			if(hijo.nodeType==1 && hijo.tagName=="DIV")
			{
				if(hijo.value)
				{
					respuestas_usuario.push(hijo.value);
				}
			}
	}

	for (x=0;x<respuestas_usuario.length;x++)
	{
		for(p=0;p<respuestas_correctas_bdd.length;p++)
		{
			if(respuestas_usuario[x]==respuestas_correctas_bdd[p])
			{
				correcta_drag_drop++;
			}
		}
	}

	if(correcta_drag_drop==respuestas_correctas_bdd.length)
	{
		preguntaActual.resultado=1; //1 respuesta correcta
		setTimeout(p_01171_ganar_smile_animacion("+"),1);
	}
	else
	{
		preguntaActual.resultado=0; //1 respuesta correcta
		setTimeout(p_01171_ganar_smile_animacion("-"),1);
	}

}

function p_01174_comprueba_chechekd_marcado(valor) //funcion que comprueba las opciones marcadas filtro start
{
	grupo_opciones_nivel = document.getElementsByName("type_ask");
	if(valor=="option_all")
	{
		for(x=0;x<grupo_opciones_nivel.length;x++)
		{
			grupo_opciones_nivel[x].checked=true;
		}
	}
	contador=0;

	for(x=0;x<grupo_opciones_nivel.length;x++)
	{
		if(!grupo_opciones_nivel[x].checked)
		{
			contador++;
			//alert(contador);
			document.getElementById("option_all").checked=false;
		}
	}
	if(contador==4)
	{
		document.getElementById(valor).checked=true;
	}
	if(document.getElementById("option_vocabulary").checked && document.getElementById("option_structure").checked && document.getElementById("option_trinity").checked)
	{
		document.getElementById("option_all").checked=true;
	}
}

function save(valor){ //función WRITING GUARDAR
	Npregunta = p_01174_obtener_numero_pregunta(valor);
	//ArrayPalabras  = new Array;
	 textoArea = document.getElementById("n"+Npregunta+"_"+"area").value;
	 preguntaActual.guardar = textoArea;
		/*
	 numeroCaracteres = textoArea.length;
	  ArrayPalabras = textoArea.split(" ");
	  alert(ArrayPalabras);
	  */
	 p_01174_carga_pregunta();

}

function saveWriting(valor){ //función  READING INTO WRITING GUARDAR
	Npregunta = p_01174_obtener_numero_pregunta(valor);
	//ArrayPalabrasRIW  = new Array;
	 textoArea = document.getElementById("n"+Npregunta+"_"+"areaRIW").value;
	 preguntaActual.guardar = textoArea;
	 /*
	  numeroCaracteres = textoArea.length;
	  ArrayPalabrasRIW = textoArea.split(" ");
	  alert(ArrayPalabrasRIW);
	  */
	 p_01174_carga_pregunta();
}

function p_01174_dragdrop(valor)
{
	var npregunta_dragdrop = p_01174_obtener_numero_pregunta(valor);
	//alert(npregunta_dragdrop);
	$(".drag").draggable({
	revert: true,
	revertDuration: 200,
	opacity: 0.80
	});
	var dropOpts = {
	drop: function( event, ui ) {
	valor =($(ui.draggable).attr('value'));
	if(valor!=""){
	//valoresDragDrop.push(valor); //guardamos todos los valores del drag and drop en un array.

	id = $(this).attr("id");
	//alert(id);
	document.getElementById(id).innerHTML="<b><font color='red'>"+valor+"<b>";
	valorDivDrop = document.getElementById(id).value=valor;
	pintar_verde=true;
		for(i in document.getElementById("n"+npregunta_dragdrop+"_"+"p_01175_respuesta_drag_drop").childNodes)
		{
			var hijo=document.getElementById("n"+npregunta_dragdrop+"_"+"p_01175_respuesta_drag_drop").childNodes[i];
			if(hijo.nodeType==1 && hijo.tagName=="DIV")
			{
				if(!hijo.value)
				{
					pintar_verde=false;
				}
			}
		}
}

	if(pintar_verde==true)
	{
		$("#n"+npregunta_dragdrop+"_botonPasarFILGAPS").hide();
		$("#n"+npregunta_dragdrop+"_botonFG").show();
	}

},
	activeClass: "activated"
};
	var contenidoRespuestas= preguntaActual.respuestas.split(" ");
	for(i in contenidoRespuestas)
	{
		if(contenidoRespuestas[i]=="_")
		{
			$("#n"+npregunta_dragdrop+"_palabra"+i).droppable(dropOpts);
		}
	}
}
/*
function setError(element,texto){
		document.getElementById(element).innerHTML=texto;

}
function clearError(element){
		document.getElementById(element).innerHTML="";
}
*/

function focusFunction(){
	document.getElementById('contenedor_menu').style.display="none";
}

function blurFunction(){
	document.getElementById('contenedor_menu').style.display="inline";
}


function func(valor)  //función que se ejecuta cuando le damos a el icono para que se reproduzca la musica
{
	npregunta_sonido = p_01174_obtener_numero_pregunta(valor);
	document.getElementById("n"+npregunta_sonido+"_sound_imagenes").style.display="";
	var etiquetaIMG = document.getElementsByName("n"+npregunta_sonido+'_respuesta_sound');
	for (var i=0; i < etiquetaIMG.length; i++)
	{
		etiquetaIMG[i].setAttribute("onclick", "comprobarRespCorrectaSound(this.id);");
	}
	/*
	var etiquetaIMG = document.getElementsByClassName('estiloFotos');
							for (var i=0; i < etiquetaIMG.length; i++){
							   etiquetaIMG[i].setAttribute("onclick", "comprobarRespCorrectaSound(this.id);");
							}
	*/
	/**comprobar con api de google**/
	//valorPalabrapronunciar = smile_datos.preguntas[3].pregunta;
	//value = "http://translate.google.com/translate_tts?tl=en&q="+valorPalabrapronunciar;
	//document.getElementById("sound_word").style.display="none";
	//document.getElementById("reproduccionWord").style.display="inline";
	//$("#reproduccionWord").attr("src",value);
	/*************************************************/
	document.getElementById("n"+npregunta_sonido+"_"+"sound_word").style.transform="";
	document.getElementById("n"+npregunta_sonido+"_"+"reproduccionWord").style.display="none";
	value="<? echo ver_url("media/dont_need_roads.mp3","src"); ?>";
	$("#n"+npregunta_sonido+"_"+"reproduccionWord").attr("src",value);
	document.getElementById("n"+npregunta_sonido+"_"+"reproduccionWord").play();
}

function p_01174_comprobarRespCorrecta(id) //funcion que comprueba las respuesta de las imagenes.
{

	numero_pregunta_imagenes = parseInt(p_01174_obtener_numero_pregunta(id));
	var array_respuesta_usuario_img = new Array(3); //array que enviaremos de lo que ha contestado el alumno.
	array_respuesta_usuario_img[0] = 0;
	array_respuesta_usuario_img[1] = 0;
	array_respuesta_usuario_img[2] = 0;
	array_respuesta_usuario_img[3] = 0;

	for(s=0;s<smile_datos.preguntas[numero_pregunta_imagenes].correcta.length;s++)
	{
		if(smile_datos.preguntas[numero_pregunta_imagenes].correcta[s]==1)
		{
			respuestaCorrecta = s;
		}
	}
	valorImagenPresionada = id.slice(-1);
	//alert(valorImagenPresionada);
				if(valorImagenPresionada==respuestaCorrecta)
				{
					document.getElementById(id).parentNode.style.border="0.8em solid #01DF01";
					var etiquetaIMG = document.getElementsByName("n"+numero_pregunta_imagenes+'_respuesta_img');
					for (var i=0; i < etiquetaIMG.length; i++)
					{
						etiquetaIMG[i].onclick = false;
					}
					smile_datos.preguntas[numero_pregunta_imagenes].resultado=1; //1 respuesta correcta
					for (t=0;t<array_respuesta_usuario_img.length;t++)
					{
						if(valorImagenPresionada==t)
						{
							array_respuesta_usuario_img[t]=1;
						}
					}
					setTimeout(p_01171_ganar_smile_animacion("+",numero_pregunta_imagenes),1);
					smile_datos.preguntas_contestadas.push(numero_pregunta_imagenes);
					smile_datos.preguntas_cargadas.shift();
					smile_datos.preguntas[numero_pregunta_imagenes].respuesta_usuario=array_respuesta_usuario_img;
					//setTimeout(function(){document.getElementById(id).parentNode.parentNode.parentNode.remove();},2000)
					p_01174_subir_pregunta(); //3 llamamos a la función de subir preguntas
					p_01174_borrar_div_preguntas(id);
				}
				else
				{
					smile_datos.preguntas[numero_pregunta_imagenes].resultado=0; //0 respuesta correcta
					for (t=0;t<array_respuesta_usuario_img.length;t++)
					{
						if(valorImagenPresionada==t)
						{
							array_respuesta_usuario_img[t]=1;
						}
					}
					smile_datos.preguntas[numero_pregunta_imagenes].respuesta_usuario=array_respuesta_usuario_img;
					//Marcamos en rojo la respuesta Incorrecta
					document.getElementById(id).parentNode.style.border="0.8em solid #ff0000";
					//Marcamos en verde la respuesta correcta
					document.getElementById("n"+numero_pregunta_imagenes+"_p_00001_img_respuesta_"+respuestaCorrecta).parentNode.style.border="0.8em solid #01DF01";
					var etiquetaIMG = document.getElementsByName("n"+numero_pregunta_imagenes+'_respuesta_img');
					for (var i=0; i < etiquetaIMG.length; i++)
					{
						etiquetaIMG[i].onclick = false;
					}
					setTimeout(p_01171_ganar_smile_animacion("-",numero_pregunta_imagenes),1);
					smile_datos.preguntas_contestadas.push(numero_pregunta_imagenes);
					smile_datos.preguntas_cargadas.shift();
					p_01174_subir_pregunta(); //3 llamamos a la función de subir preguntas
					p_01174_borrar_div_preguntas(id);
					//setTimeout(function(){document.getElementById(id).parentNode.parentNode.parentNode.remove();},2000)
				}
}

function comprobarRespCorrectaSound(id) //funcion que comprueba las respuesta de las imagenes-sonido.
{

	preguntas_enviadas.push(preguntaCargada[0]);

	numero_pregunta_sonido = p_01174_obtener_numero_pregunta(id);
	var array_respuesta_usuario_sound = new Array(3); //array que enviaremos de lo que ha contestado el alumno.
	array_respuesta_usuario_sound[0] = 0;
	array_respuesta_usuario_sound[1] = 0;
	array_respuesta_usuario_sound[2] = 0;
	array_respuesta_usuario_sound[3] = 0;

	for(s=0;s<preguntaCargada[0].correcta.length;s++) //recorremos para saber el indice de la respuesta correcta.
	{
		if(preguntaCargada[0].correcta[s]==1)
		{
			var respuestaCorrecta = s;
		}
	}
	ultimo_valor_cadena_pasar_substring = id.length-1;
	valorImagenPresionada = id.substring(ultimo_valor_cadena_pasar_substring);
	//alert(valorImagenPresionada);
				if(valorImagenPresionada==respuestaCorrecta)
				{
					//Marcamos en verde la respuesta correcta
					document.getElementById(id).parentNode.style.border="0.8em solid #01DF01";
					var etiquetaIMG = document.getElementsByName("n"+numero_pregunta_sonido+'_respuesta_sound');
					for (var i=0; i < etiquetaIMG.length; i++)
					{
						etiquetaIMG[i].onclick = false;
					}
					document.getElementById("reproduccionWord").pause();
					preguntaCargada[0].resultado=1; //1 respuesta correcta
					for (t=0;t<array_respuesta_usuario_sound.length;t++)
					{
						if(valorImagenPresionada==t)
						{
							array_respuesta_usuario_sound[t]=1;
						}
					}
					setTimeout(function()
					{
						document.getElementById(id).parentNode.parentNode.parentNode.remove();
					},2000)
					setTimeout(p_01171_ganar_smile_animacion("+"),1);
					if(navigator.onLine)
					{
						p_01174_pregunta_contestada(array_respuesta_usuario_sound);
					}
					else
					{
						bufferSubirPreguntas.push(preguntaCargada[0]);
					}
					preguntaCargada.shift();

				}
				else
				{
					preguntaCargada[0].resultado=0; //0 respuesta incorrecta
					for (t=0;t<array_respuesta_usuario_sound.length;t++)
					{
						if(valorImagenPresionada==t)
						{
							array_respuesta_usuario_sound[t]=1;
						}
					}
					setTimeout(function()
					{
						document.getElementById(id).parentNode.parentNode.parentNode.remove();
					},2000)
					document.getElementById("reproduccionWord").pause();
					setTimeout(p_01171_ganar_smile_animacion("-"),1);
					//Marcamos en rojo la respuesta Incorrecta
					document.getElementById(id).parentNode.style.border="0.8em solid #ff0000";
					//Marcamos en verde la respuesta correcta
					document.getElementById("n"+numero_pregunta_sonido+"_p_00001_img_respuesta_sound"+respuestaCorrecta).parentNode.style.border="0.8em solid #01DF01";
					var etiquetaIMG = document.getElementsByName("n"+numero_pregunta_sonido+'_respuesta_sound');
					for (var i=0; i < etiquetaIMG.length; i++)
					{
						etiquetaIMG[i].onclick = false;
					}
					if(navigator.onLine)
					{
						p_01174_pregunta_contestada(array_respuesta_usuario_sound);
					}else
					{
						bufferSubirPreguntas.push(preguntaCargada[0]);
					}
					preguntaCargada.shift();
				}
}

/**************FERNANDO**************/
	eventos=[];
	mem="";
	function e_start()
	{
		//window.body.addEventListener("touchmove",prev);
		var arrastrable_ele=document.getElementsByClassName("arrastrable");
		var espacio_ele=document.getElementsByClassName("espacio");

		for(i in arrastrable_ele)
		{
			eventos.push([arrastrable_ele[i],asignar]);
			if(arrastrable_ele[i].nodeType=="1")
				arrastrable_ele[i].setAttribute("onclick","asignar(this.id);");
				//arrastrable_ele[i].addEventListener("click",function(){seleccion(this)});
		}

		for(i in espacio_ele)
		{
			eventos.push([arrastrable_ele[i],asignar]);
			if(espacio_ele[i].nodeType=="1")
				espacio_ele[i].setAttribute("onclick","seleccion(this.id);");
				//espacio_ele[i].addEventListener("click",function(){asignar(this)});
		}
	}

	function prev(){
		event.preventDefault();
	}

	function e_stop()
	{
		for(i in eventos)
			eventos[i][0].setAttribute("onclick",eventos[i][1]);
		//window.body.removeEventListener("touchmove",prev);
	}

	function seleccion(ele)
	{
		var espasios=document.getElementsByClassName("espacio");
		for(i in espasios)
		{
			if(espasios[i].nodeType=="1")
				espasios[i].style.background="";
		}
		document.getElementById(ele).style.background="#5BC8E7";
		mem=ele;
		pintar(1);

		if(ele.innerHTML!="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;")
		{
			document.getElementById(ele).innerHTML="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			document.getElementById('n'+p_01174_pregunta_actual+'_botonPasarFILGAPS').style.display="";
			document.getElementById('n'+p_01174_pregunta_actual+'_botonFG').style.display="none";
		}
	}

	function asignar(ele)
	{
		var aux=false;
		if(mem=="")
		{
			document.getElementById(ele).innerHTML=document.getElementById(ele).innerHTML;
		}
		else
		{
			desmarcar_seleccion();
			document.getElementById(mem).innerHTML=document.getElementById(ele).innerHTML+"<sup style='text-decoration: none;display: inline-block;font-size: 0.5em;vertical-align: super; color: #EA0909;font-weight: bold;'>x</sup>";
			mem="";
		}

		for (i in document.getElementById('n'+p_01174_pregunta_actual+'_p_01175_respuesta_drag_drop').childNodes)
		{
		   var hijo=document.getElementById('n'+p_01174_pregunta_actual+'_p_01175_respuesta_drag_drop').childNodes[i];
		   if(hijo.nodeType=="1" && hijo.innerHTML=="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;")
		   {
				aux=true;
		   }
		}
		if(!aux)
		{
			document.getElementById('n'+p_01174_pregunta_actual+'_botonPasarFILGAPS').style.display="none";
			document.getElementById('n'+p_01174_pregunta_actual+'_botonFG').style.display="";
		}
	}

	function desmarcar_seleccion()
	{
		var arrastrable_ele=document.getElementsByClassName("espacio");
		for(i in arrastrable_ele)
		{
			if(arrastrable_ele[i].nodeType=="1")
				arrastrable_ele[i].style.background="none";
		}
		pintar(0);
	}


	function comprobar(valor) //funcion comprueba si es correcta o no Drag
	{
		numero_pregunta_drag = parseInt(p_01174_obtener_numero_pregunta(valor));
		tipo_pregunta=document.getElementById(valor).parentNode.parentNode.parentNode.parentNode.id;
		tipo_pregunta=tipo_pregunta.replace(/^n[0-9]*_/,"");
		var respuestas_correctas_bbdd=new Array();
		var respuestas_usuario=new Array();
		respuestas_correctas_bbdd = smile_datos.preguntas[numero_pregunta_drag].drag.match(/_!_([^_]*[^!]*[^_]*)_!!_/g);
		for(i in respuestas_correctas_bbdd)
		{
			respuestas_correctas_bbdd[i]=respuestas_correctas_bbdd[i].replace("_!_","");
			respuestas_correctas_bbdd[i]=respuestas_correctas_bbdd[i].replace("_!!_","");
			//console.info("BBDD: "  + respuestas_correctas[i]);
		}

		var correcto=true;
		for (i in document.getElementById('n'+numero_pregunta_drag+'_p_01175_respuesta_drag_drop').childNodes)
		{
		   var hijo=document.getElementById('n'+numero_pregunta_drag+'_p_01175_respuesta_drag_drop').childNodes[i];
		   if(hijo.nodeType=="1" && hijo.innerHTML)
		   {
				//respuestas_usuario.push(hijo.innerHTML.replace(/<sup.*<\/sup>/,""));
				respuestas_usuario.push(hijo.innerHTML);
		   }
		}

		for(x=0;x<respuestas_correctas_bbdd.length;x++)
		{
			if(respuestas_correctas_bbdd[x]!=respuestas_usuario[x])
			{
				correcto=false;
			}
		}

		if(correcto)
		{
			//console.info("Has acertado");
			smile_datos.preguntas[numero_pregunta_drag].resultado=1; //1 respuesta correcta
			var dropable_fill_gaps = document.getElementsByName("n"+numero_pregunta_drag+"_espacios_en_blanco");
			for (i=0;i<dropable_fill_gaps.length;i++) //deshabilitamos que pueda marca opcion si la respuesta es correcta
			{
					dropable_fill_gaps[i].disabled = true;
			}
			document.getElementById('n'+numero_pregunta_drag+'_boton_pasar_FILGAPS').style.display="none";
			setTimeout(p_01171_ganar_smile_animacion("+",numero_pregunta_drag),1);
			smile_datos.preguntas_contestadas.push(numero_pregunta_drag);
			smile_datos.preguntas_cargadas.shift();
			smile_datos.preguntas[numero_pregunta_drag].respuesta_usuario=respuestas_usuario;
			p_01174_subir_pregunta();

			//setTimeout(function(){document.getElementById(valor).parentNode.parentNode.remove();},2000)
			p_01174_borrar_div_preguntas(valor);
		}
		else
		{
			//console.info("No has acertado");
			smile_datos.preguntas[numero_pregunta_drag].respuesta_usuario=respuestas_usuario;
			smile_datos.preguntas[numero_pregunta_drag].resultado=0; //1 respuesta correcta
			var dropable_fill_gaps = document.getElementsByName("n"+numero_pregunta_drag+"_espacios_en_blanco");
			for (i=0;i<dropable_fill_gaps.length;i++) //deshabilitamos que pueda marca opcion si la respuesta es correcta
			{
					dropable_fill_gaps[i].disabled = true;
					dropable_fill_gaps[i].style.color="#53E04B";
					dropable_fill_gaps[i].innerHTML=respuestas_correctas_bbdd[i];
			}
			document.getElementById('n'+numero_pregunta_drag+'_botonFG_pasar_respuesta_contestada').style.display="";
			document.getElementById('n'+numero_pregunta_drag+'_botonFG').style.display="none";
			setTimeout(p_01171_ganar_smile_animacion("-",numero_pregunta_drag),1);
			smile_datos.preguntas_contestadas.push(numero_pregunta_drag);
		}
	}

	function pintar(color)
	{
		var espacio_ele=document.getElementsByClassName("espacio");
		for(i in espacio_ele)
		{
			if(espacio_ele[i].nodeType=="1")
			{
				if(color)espacio_ele[i].style.color="#5BC8E7";
				else espacio_ele[i].style.color="";
			}
		}
	}

p_01174_drag_option_abierto="";
function p_01174_drag_option(ele,ind_drag)
{
	if(p_01174_drag_option_abierto!="")
	p_01174_drag_option_abierto.parentNode.removeChild(p_01174_drag_option_abierto);
	p_01174_drag_option_abierto="";

	document.body.removeEventListener("click",p_01174_drag_option_out);
	/*************PALABRAS OPTION**********/
	var opsiones_drag = smile_datos.preguntas[ind_drag].respuestas;

	p_01174_drag_option_abierto=document.createElement("div");
	p_01174_drag_option_abierto.innerHTML='';
	p_01174_drag_option_abierto.setAttribute("onclick","event.stopPropagation();");
	p_01174_drag_option_abierto.setAttribute("class","p_01174_espacio_option");
	for(i in opsiones_drag)
	{
		p_01174_drag_option_abierto.innerHTML+='<div '+
			'onclick="'+
			'	this.parentNode.removeChild(this);'+
			'	p_01174_drag_option_abierto=\'\';'+
			'	document.getElementById(\''+ele.id+'\').innerHTML=\''+opsiones_drag[i]+'\''+
			';">'+
			opsiones_drag[i]+
			'</div>';
	}
	ele.appendChild(p_01174_drag_option_abierto);
	ele.parentNode.parentNode.setAttribute("onclick","");
	setTimeout(function(){document.body.addEventListener("click",p_01174_drag_option_out);},10);
	p_01174_mostrar_ocultar_boton_drag_option(ind_drag);
}

function p_01174_drag_option_out()
{
	document.body.removeEventListener("click",p_01174_drag_option_out);
	if(p_01174_drag_option_abierto){
		p_01174_drag_option_abierto.parentNode.removeChild(p_01174_drag_option_abierto);
		p_01174_drag_option_abierto="";
	}
}

function p_01174_mostrar_ocultar_boton_drag_option(ind_drag)
{
	var aux=false;
	for (i in document.getElementById('n'+ind_drag+'_p_01175_respuesta_drag_drop').childNodes)
	{
	   var hijo=document.getElementById('n'+ind_drag+'_p_01175_respuesta_drag_drop').childNodes[i];
	   if(hijo.nodeType=="1" && hijo.innerHTML=="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;▽")
	   {
			aux=true;
	   }
	}
	if(!aux)
	{
		document.getElementById('n'+ind_drag+'_botonPasarFILGAPS').style.display="none";
		document.getElementById('n'+ind_drag+'_botonFG').style.display="";
	}
}

function p_01174_textarea_contar_caracteres(ele,ele_imprimir,maximo,minimo)
{
	minimo=minimo||0;
	var text=document.getElementById(ele).value;
	text=text.replace(/\n/g," ").replace(/\s+/g," ").trim().split(" ");
	text=text.replace(" ,",",").replace(" ;",";").replace("",".").split(" ");
	while(text.length>maximo)
	{
		text=document.getElementById(ele).value;
		text=text.replace(/\n/g," ").replace(/\s+/g," ").trim().split(" ");
		document.getElementById(ele).value=document.getElementById(ele).value.slice(0,-1);
	}
	document.getElementById(ele_imprimir).innerHTML=text.length+" / ("+minimo+"-"+maximo+")";
}


/********************************DRAG and DROP en smiles*******************/
function p_01174_drag_click(event){
	p_01174_drag_touch(event);
	document.addEventListener("mousemove", p_01174_mousemove);
	document.addEventListener("mouseup", p_01174_mouseup);
}

function p_01174_mouseup(event){
	document.removeEventListener("mousemove", p_01174_mousemove);
	p_01174_drag_drop_touch(event);
}
function p_01174_mousemove(event){
	p_01174_drag_move_touch(event);
}

/*
globales:
*/
var p_01174_drag_node;
var p_01174_padre_nodos;
var p_01174_haciendo_drag;
var p_01174_nodo_drag_color_inicial;
var p_01174_haciendo_drag= false;
var p_01174_acaba_entrar= false;
var p_01174_nodo_posterior;

function p_01174_drag_touch(e){
	p_01174_haciendo_drag= true;
	var p_01174_pos_X;
	var p_01174_pos_Y;
	//tactil
	if(e.changedTouches){
		var p_01174_touchobj = e.changedTouches[0];
		p_01174_pos_X= parseInt(p_01174_touchobj.clientX);
		p_01174_pos_Y= parseInt(p_01174_touchobj.clientY);
	}
	else{
		p_01174_pos_X= e.pageX;
		p_01174_pos_Y= e.pageY;
	}

	var p_01174_nodo= e.target;
	if(e.target.className=="p_01174_div_palabras_dragdrop"){
		p_01174_nodo= e.target.children[0];
	}
	var p_01174_div_drag= p_01174_nodo;
	p_01174_drag_node= p_01174_nodo;
	p_01174_nodo_drag_color_inicial= p_01174_drag_node.style.color;
	p_01174_drag_node.style.opacity= "0.5";
	p_01174_drag_node.style.pointerEvents = "none";
	p_01174_drag_node.style.transform="scale(1.3,1.3)";
	p_01174_drag_node.style.transformOrigin="100% 100%";

	p_01174_nodo_posterior= p_01174_drag_node.parentNode.nextSibling;

 	p_01174_padre_nodos= p_01174_nodo.id.slice(0,p_01174_nodo.id.indexOf("_")+1)+"texto_ordenar_frase";
	p_01174_padre_nodos= document.getElementById(p_01174_padre_nodos);
	p_01174_nodo.parentNode.style.width= p_01174_nodo.parentNode.offsetWidth+"px";
	p_01174_nodo.parentNode.style.height= p_01174_nodo.parentNode.offsetHeight+"px";
	p_01174_nodo.style.position= "fixed";
	p_01174_nodo.style.zIndex= "10";
	p_01174_nodo.style.top= (p_01174_pos_Y-parseInt(p_01174_nodo.clientHeight)-5)+"px";
	p_01174_nodo.style.left= (p_01174_pos_X-2)+"px";
	p_01174_nodo.style.color="#DC7633";
	//p_01174_nodo.parentNode.style.width="0";
	e.preventDefault();
	p_01174_pos_inicio_dragdrop=[];
	var p_01174_selectores_palabras= "#"+p_01174_padre_nodos.id+">div";
	p_01174_selectores_palabras= document.querySelectorAll(p_01174_selectores_palabras);
	var p_01174_distancia_top= 74;
	var p_01174_distancia_left= document.getElementById("p_01175_preguntas").offsetLeft;

	p_01174_acaba_entrar= true;
	setTimeout(function(){p_01174_drag_move_touch(e);},250);
	return false;
}

function p_01174_getOffsetTop (p_01174_elem){
  var p_01174_yPos = p_01174_elem.offsetTop;
  var p_01174_tempEl = p_01174_elem.offsetParent;

  while ( p_01174_tempEl != null )
  {
      p_01174_yPos += p_01174_tempEl.offsetTop;
      p_01174_tempEl = p_01174_tempEl.offsetParent;
  }
  return p_01174_yPos;
}

function p_01174_drag_move_touch(e){
	var p_01174_puntero_dedo= document.getElementById("p_01175_posicion_dedo");
	//guardo algunos valores que no cambian entre llamadas
	if(p_01174_acaba_entrar){
		this.p_01174_izq_contenedor=p_01174_padre_nodos.offsetLeft+document.getElementById("p_01175_preguntas").offsetLeft;
		this.p_01174_izq_contenedor=p_01174_padre_nodos.getBoundingClientRect().left;
		this.p_01174_last_element_over= "0";
		this.p_01174_altura_caja= parseInt(p_01174_drag_node.clientHeight);
		this.p_01174_mitad_ancho_caja= parseInt(p_01174_drag_node.clientWidth)/2;
		this.p_01174_mitad_alto_caja= parseInt(this.p_01174_altura_caja)/2;
		this.p_01174_centro_nodo_drag= (p_01174_drag_node.parentNode.getBoundingClientRect().left+p_01174_drag_node.parentNode.getBoundingClientRect().right)/2;
		this.p_01174_scroll= parseInt(document.querySelector("body").scrollTop);

		p_01174_acaba_entrar= false;
	}

	e.preventDefault();

	if(!p_01174_haciendo_drag)
		return;

	var p_01174_pos_X;
	var p_01174_pos_Y;
	//tactil
	if(e.changedTouches){
		var p_01174_touchobj = e.changedTouches[0];
		p_01174_pos_X= parseInt(p_01174_touchobj.clientX);
		p_01174_pos_Y= parseInt(p_01174_touchobj.clientY);

		//colocar caja palabra que se mueve
		//p_01174_drag_node.style.left= (p_01174_pos_X-this.p_01174_izq_contenedor-this.p_01174_mitad_ancho_caja-12)+"px";
		p_01174_drag_node.style.left= (p_01174_pos_X-this.p_01174_izq_contenedor)+"px";
		p_01174_drag_node.style.top= ( p_01174_pos_Y+this.p_01174_scroll-this.p_01174_mitad_alto_caja)+"px";

	}
	//raton
	else{
		p_01174_pos_X= e.pageX;
		p_01174_pos_Y= e.pageY;
		//colocar caja palabra que se mueve
		p_01174_drag_node.style.left= (p_01174_pos_X-this.p_01174_mitad_ancho_caja-12)+"px";
		p_01174_drag_node.style.top= ( p_01174_pos_Y+this.p_01174_scroll-this.p_01174_mitad_alto_caja)+"px";

	}

	var p_01174_element_over = document.elementFromPoint(p_01174_pos_X, p_01174_pos_Y);

	if(p_01174_element_over.parentNode.className.includes("p_01174_div_palabras_dragdrop")){
		p_01174_element_over=p_01174_element_over.parentNode;
	}
	if(p_01174_element_over.className.includes("p_01174_div_palabras_dragdrop")){
		if(!this.p_01174_last_element_over || this.p_01174_last_element_over!=p_01174_element_over){

			if(p_01174_element_over==p_01174_nodo_posterior)
				p_01174_element_over= p_01174_drag_node.parentNode;
			if(p_01174_element_over== p_01174_drag_node.parentNode)
					document.getElementById("p_01175_flecha_posicion").style.left=(this.p_01174_centro_nodo_drag-12)+"px";
			else
					document.getElementById("p_01175_flecha_posicion").style.left=(p_01174_element_over.getBoundingClientRect().left-30)+"px";
			document.getElementById("p_01175_preguntas").style.background="";
			document.getElementById("p_01175_forbidden").style.display="none";
			document.getElementById("p_01175_flecha_posicion").style.top=(p_01174_getOffsetTop(p_01174_element_over)-this.p_01174_mitad_alto_caja-31)+"px";
			//document.getElementById("p_01175_flecha_posicion").style.left=(p_01174_element_over.getBoundingClientRect().left-12)+"px";
			document.getElementById("p_01175_flecha_posicion").style.display="block";
			this.p_01174_last_element_over= p_01174_element_over;
		}
	}
	//al mover sobre contenedor se�ala final de linea
	else if (p_01174_element_over.className.includes("p_01175_contenedor_palabras")) {

		var p_01174_ultima_caja="";
		var p_01174_elemento_izq="";
		var p_01174_pos_ultimo_fila= p_01174_pos_X;
		while(p_01174_pos_ultimo_fila){
			p_01174_elemento_izq= document.elementFromPoint(p_01174_pos_ultimo_fila--, p_01174_pos_Y);
			if(p_01174_elemento_izq.id!=p_01174_padre_nodos.id)
				break;
		}
		if((p_01174_elemento_izq)&&(p_01174_elemento_izq.className=="p_01174_div_palabras_dragdrop")){
			document.getElementById("p_01175_preguntas").style.background="";
			document.getElementById("p_01175_forbidden").style.display="none";
			p_01174_ultima_caja= p_01174_elemento_izq.id;
			if(!this.p_01174_last_element_over || this.p_01174_last_element_over!="fin_"+p_01174_elemento_izq.id){
				if(p_01174_elemento_izq== p_01174_drag_node.parentNode)
					document.getElementById("p_01175_flecha_posicion").style.left=(this.p_01174_centro_nodo_drag-12)+"px";
				else
					document.getElementById("p_01175_flecha_posicion").style.left=(p_01174_elemento_izq.getBoundingClientRect().right-30)+"px";
				//document.getElementById("p_01175_flecha_posicion").style.top=(p_01174_getOffsetTop(p_01174_elemento_izq)-7)+"px";
				document.getElementById("p_01175_flecha_posicion").style.top=(p_01174_getOffsetTop(p_01174_elemento_izq)-this.p_01174_mitad_alto_caja-31)+"px";
				//document.getElementById("p_01175_flecha_posicion").style.left=(p_01174_elemento_izq.getBoundingClientRect().right)+"px";
				//document.getElementById("p_01175_flecha_posicion").style.left=(p_01174_elemento_izq.getBoundingClientRect().right-12)+"px";
				document.getElementById("p_01175_flecha_posicion").style.display="block";
				this.p_01174_last_element_over= "fin_"+p_01174_elemento_izq.id;

			}
		}
	}
	//fuera contenedor
	else{
		document.getElementById("p_01175_flecha_posicion").style.display="none";
		this.p_01174_last_element_over= "fuera";
		if(p_01174_element_over!=document.getElementById("p_01175_flecha_posicion")){
			document.getElementById("p_01175_preguntas").style.background="#F15C5C";

			document.getElementById("p_01175_forbidden").style.left= (p_01174_pos_X-this.p_01174_izq_contenedor+20)+"px";
			document.getElementById("p_01175_forbidden").style.top= ( p_01174_pos_Y+this.p_01174_scroll-60)+"px";
			document.getElementById("p_01175_forbidden").style.display="block";
		}
	}
	return false;
}


function p_01174_dentro_contenedor(p_01174_drag_move_x, p_01174_drag_move_y){
	if(
		(p_01174_drag_move_x>p_01174_padre_nodos.getBoundingClientRect().left)&&
		(p_01174_drag_move_x<p_01174_padre_nodos.getBoundingClientRect().right)&&
		(p_01174_drag_move_y>p_01174_padre_nodos.getBoundingClientRect().top)&&
		(p_01174_drag_move_y<p_01174_padre_nodos.getBoundingClientRect().bottom)
	)
		return true;
	else
		return false;
}


//detecta que intervalo de cajas se encontraban originalmente en esta fila
function p_01174_detectar_elementos_de_fila(p_01174_drag_move_y){
	var p_01174_elementos_en_la_fila=[];
	//guardo que elementos estan en mi fila
	for(var i=0; i<p_01174_pos_inicio_dragdrop.length; i++){
		if((p_01174_pos_inicio_dragdrop[i][1]<=p_01174_drag_move_y)&&(p_01174_pos_inicio_dragdrop[i][3]>=p_01174_drag_move_y)){
			if(!p_01174_elementos_en_la_fila.length)
				p_01174_elementos_en_la_fila[0]= i;
		}
		else if (p_01174_elementos_en_la_fila.length) {
			break;
		}
	}
	if(p_01174_elementos_en_la_fila.length===1){
		p_01174_elementos_en_la_fila[1]= i-1;
	}
	return p_01174_elementos_en_la_fila;
}

function p_01174_drag_drop_touch(e){
	e.preventDefault();
	e.stopPropagation();
	//sacar estilos de la caja que se desplaza
	var p_01174_selectores_palabras= "#"+p_01174_padre_nodos.id+">div";
	p_01174_selectores_palabras= document.querySelectorAll(p_01174_selectores_palabras);

	for(var i=0; i<p_01174_selectores_palabras.length; i++){
		p_01174_selectores_palabras[i].style.opacity="1";
	}

	if(!p_01174_haciendo_drag){
		return;
	}

	p_01174_haciendo_drag= false;
	e.preventDefault();
  e.stopPropagation();

	var p_01174_pos_X;
	var p_01174_pos_Y;
	if(e.changedTouches){
		var p_01174_touchobj = e.changedTouches[0];
		p_01174_pos_X= parseInt(p_01174_touchobj.clientX);
		p_01174_pos_Y= parseInt(p_01174_touchobj.clientY);
	}
	else{
		p_01174_pos_X= e.pageX;
		p_01174_pos_Y= e.pageY;
	}
	var p_01174_receptor_drop = document.elementFromPoint(p_01174_pos_X, p_01174_pos_Y);
	p_01174_drag_node.style.color="rgb(0, 135, 174)";
	p_01174_drop(null,p_01174_drag_node.parentNode,p_01174_receptor_drop, p_01174_pos_X, p_01174_pos_Y);

}


if(window.innerWidth<p_00956_ancho_movil)
	window.addEventListener("orientationchange", function(){setTimeout(p_01174_resize_preguntas, 400);});
else
	window.addEventListener("resize", function(){setTimeout(p_01174_resize_preguntas, 400);});


function p_01174_resize_preguntas() {
	if((document.getElementById("p_00962_preguntas_contenedor"))&&(document.getElementById("p_00962_preguntas_contenedor").style.display!="none")){
		var p_01174_tipo_pregunta= document.getElementById("p_01175_preguntas").getElementsByTagName('div')[0].id.replace(/^n[0-9]*_/,"");
		var p_01174_contenedor_pregunta= document.getElementById("p_01175_preguntas");
		var p_01174_espacio_disponible= [window.innerWidth, window.innerHeight-document.getElementById("head_oxbridge").offsetHeight];
		document.getElementById("p_00962_preguntas_y_botones_contenedor").style.transform=	"";
		document.getElementById("p_00962_preguntas_y_botones_contenedor").style.top="";

		if((p_01174_tipo_pregunta=="trinity"))
			p_01174_resize_preguntas_trinity();
		if(p_01174_tipo_pregunta!="trinity"){
			//subimos contenedor de preguntas si no cabe
			if(p_01174_contenedor_pregunta.offsetHeight>p_01174_espacio_disponible[1]){
				var p_01174_diferencia_alturas= p_01174_contenedor_pregunta.offsetHeight-p_01174_espacio_disponible[1];
				if(p_01174_diferencia_alturas>document.getElementById("head_oxbridge").offsetHeight)
					p_01174_diferencia_alturas=document.getElementById("head_oxbridge").offsetHeight;
				document.getElementById("p_00962_preguntas_y_botones_contenedor").style.top=-p_01174_diferencia_alturas+"px";
			}
		}
		document.getElementById("p_00955_body").scrollTop = 0;
	}
}

function p_01174_resize_preguntas_trinity() {
	var p_01174_contenedor= document.getElementById("p_01175_preguntas");
	//var p_01174_altura_disponible= window.innerHeight-80;
	var p_01174_altura_disponible= window.innerHeight-document.getElementById("head_oxbridge").offsetHeight;//document.getElementById("smile").offsetHeight-document.getElementById("head_oxbridge").offsetHeight;
	var p_01174_altura_pantalla= window.innerHeight;//document.getElementById("smile").offsetHeight;
	//resetear altura por si crece ventana
	var p_01174_texto= document.querySelectorAll(".text3");
	document.getElementById("p_00962_preguntas_y_botones_contenedor").style.transform=	"";
	for(var i=0; i<p_01174_texto.length; i++){
		if(p_01174_texto[i].offsetHeight){
			p_01174_texto[i].style.height= "";
			break;
		}
	}
	if(p_01174_contenedor.offsetHeight>p_01174_altura_disponible){

		document.getElementById("p_00962_preguntas_y_botones_contenedor").style.transform=	"translateY(-"+(p_01174_altura_pantalla-p_01174_altura_disponible)+"px)";
		var p_01174_altura_texto= p_01174_texto[i].offsetHeight- (p_01174_contenedor.offsetHeight-p_01174_altura_pantalla);
		p_01174_altura_texto= p_01174_altura_texto>120?p_01174_altura_texto:120;
		p_01174_texto[i].style.height= p_01174_altura_texto+"px";
	}
	document.getElementById("p_00962_preguntas_contenedor").scrollTop = 0;
}
</script>
