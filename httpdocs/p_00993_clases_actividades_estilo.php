<!--
Pag. ID: p_00993
-->

<style>

/*///////////////////////////////////////////ACTIVIDADES*/
	#p_00960_clases_actividades{
		margin-left:6px;
		height:100%;
		width:240px;
		top:130px;
		float:left;
		}
		#p_00960_clases_actividades_titulo{
  			margin:0 0 20px 0px;
			width:100%;
			float:left;
			font-family: HelveticaNeue, Helvetica, Arial, sans-serif;
				font-size:12px;
				color:#8c6792;
				letter-spacing: 10px;
				font-weight:800;
			}
		#p_00960_clases_actividades_box{
			//border-top:10px #fff solid;
			padding-left:6px;
			}
			#p_00960_clases_actividades_sinactividad{
				float:left;
				font-family:HelveticaNeue, Helvetica, Arial, sans-serif;
				font-size:14px;
					color:#ddd;
					letter-spacing: 0px;
					font-weight:900;
					text-align:center;
				}
			.p_00992_clases_actividades_actividad{
				float:left;
				margin:0 0 5px -10px;
				padding:5px 0 5px 5px;
				border:solid 2px #fff;
				border-radius:17px;
				cursor:pointer;
				}
				.p_00992_clases_actividades_actividad:hover{
					border:solid 2px #eee !important;
					}
				#p_00992_clases_actividades_actividad_globo{
					border-radius: 10px;
					width: 20px;
					height: 20px;
					float: left;
					}
				#p_00992_clases_actividades_actividad_bloque{
					float:left;
					width:150px;
					margin: 1px 0 0 10px;
					}
				#p_00992_clases_actividades_actividad_titulo{
					font-family: HelveticaNeue, Helvetica, Arial, sans-serif;
						font-size:16px;
						text-transform:uppercase;
						color:#aaa;
						letter-spacing:0px;
					width:200px;
					margin-bottom:10px;
					text-align:left;
					cursor:pointer;
					}
				#p_00992_clases_actividades_actividad_target, #p_00992_clases_actividades_actividad_attachment, #p_00992_clases_actividades_actividad_enlace{
					height:25px;
					width:25px;
					background-size:contain;
						background-position:center;
						background-repeat:no-repeat;
					margin-right:3px;
					margin-top:3px;
					float:left;
					cursor:pointer;
					}
					#p_00992_clases_actividades_actividad_target{
						background-image:url(./images/target_language.png);
						}
					#p_00992_clases_actividades_actividad_attachment{
						background-image:url(./images/attachment.png);
						}
					#p_00992_clases_actividades_actividad_enlace{
						background-image:url(./images/hyperlink.png);
						}
					
/*//////////////////////////////////////////////CONTENEDOR ACTIVIDADES*/				
	#p_00960_clases_contenedor_actividad{
		margin:0 20px 20px -3px;
   	border-radius:6px 6px 0 0;
		display:none;
		position:absolute;
  		max-width: 950px;
		float:left;
		}
		/*#p_00993_clases_contenedor_actividad_titulo{/*_--------------------------------------------------------------------borrar---------*/
			/*margin:6px 0 10px 20px;
			font-family:HelveticaNeue, Helvetica, Arial, sans-serif;
				font-size:24px;
				color:#fff;
				letter-spacing:6px;
				text-transform:uppercase;
			}*/
		
		
		/***********PRESTAÑAS*/
		#p_00993_clases_contenedor_actividad_pestanas{
			float:none;
			}
			#p_00993_clases_contenedor_actividad_contenedor_reproductor{
				margin:15px 0 15px 0;
				width:200px;
				}
			#p_00993_clases_contenedor_actividad_reproductor{
				width:100%;
				}
			.p_00993_clases_contenedor_actividad_pestanas_target_language, .p_00993_clases_contenedor_actividad_pestanas_attachment, .p_00993_clases_contenedor_actividad_pestanas_enlace{
				height:20px;
				width:40px;
				background-position:center;
				background-repeat:no-repeat;
				border-radius:5px 15px 0 0;
				border:solid 2px #8C6792;
				float:left;
				cursor:pointer;
				background-color:#fff;
				}
			.p_00993_clases_contenedor_actividad_pestanas_select{
				border-bottom:#fff;
				}
			.p_00993_clases_contenedor_actividad_pestanas_target_language{
				background-size:auto 18px;
				background-image:url(./images/target_language.png);
				}
			.p_00993_clases_contenedor_actividad_pestanas_attachment{
				background-size:16px auto;
				background-image:url(./images/attachment.png);
				}
			.p_00993_clases_contenedor_actividad_pestanas_enlace{
				background-size:28px auto;
				background-image:url(./images/hyperlink.png);
				}
		#p_00993_clases_contenedor_actividad_pestanas_linea{
			height:2px;
			background-color:#8C6792;
			margin-top:22px;
			min-width:545px;
			}
		.p_00993_clases_contenedor_actividad_pestanas_over{
			display:none;
			position:absolute;
			font-family:HelveticaNeue, Helvetica, Arial, sans-serif;;
			font-size:12px; 
				color:#999;
				text-transform:uppercase;
				letter-spacing:0px;
				font-weight:bold;
			height:20px;
			width:auto;
			margin:40px 0px 0px -40px;
			vertical-align:central;
			z-index:100;
			}
		.p_00993_clases_contenedor_actividad_pestanas_over span{
			background-color:#fff;
			padding:3px;
			border:solid 1px #999;
			border-bottom:3px solid #999;
			border-right:3px solid #999;
			border-radius:3px;
			}
				
/*********************************************CONTENIDO*/
		.p_00993_clases_contenedor_actividad_contenido_x{
			clear:both;
			height:auto;
			border:solid 2px 0 0 0 #8C6792;
			border-top:0px;
			background-color:#fff;
			display:none;
			min-width: 540px;
			width:100%;
			}
		
		/***************TARGET*/
		#p_00993_clases_contenedor_actividad_target_sonido{
			height:25px;
			float:left;
			margin:6px 0 6px 0;
			background-size:100%;
			background-position:center;
			background-repeat:no-repeat;
			cursor:pointer;
			}
		#p_00993_clases_contenedor_actividad_target{
			width: 225px;
			float: left;
			display: inline-block;
			margin: 5px 5px;
			padding: 8px 10px;
			border: solid 5px #E9E9E9;
			border-radius: 8px;
			font-family: HelveticaNeue, Helvetica, Arial, sans-serif;
				font-size: 14px;
				color: #666;
				line-height: 1.6;
			}
			#p_00993_clases_contenedor_actividad_target_titulo span{
				text-decoration:underline;
				}
			#p_00993_clases_contenedor_actividad_target_son{
				height:20px;
				float:right;
				margin: -24px 2px -20px 0px;
				}
			#p_00993_clases_contenedor_actividad_target_img{
				width:100%;
				display:inline-block;
				}
			#p_00993_clases_contenedor_actividad_target_text{
				width:100%;
				display:inline-block;			
				}
				#p_00993_clases_contenedor_actividad_target_text span{
					text-decoration:underline;
					}
				
		/*******************ATTACHMET*/
		
				
		/*******************ENLACE*/
		.p_00993_clases_contenedor_actividad_enlace{
			height:100%;
			width:100%;
			}
		.p_00993_clases_contenedor_actividad_enlace_iframe{
			height:100%;
			width:100%;
			}
		
</style>



<script>

////////////////////////////////IMPRECION DENTRO DEL CONTENEDOR DE ACTIVIDADES (solo targets arreglar)

	function imprime_actividad(a,b){
		//pintar actividad seleccionada
		for(buc03 in dia_lectivo[a].actividad){
			document.getElementById("p_00992_clases_actividades_actividad_"+a+"-"+buc03).style.borderColor ="#fff";
			//document.getElementById("p_00992_clases_actividades_actividad_"+a+"-"+buc03).style.borderRightColor ="#8C6792";
			document.getElementById("p_00992_clases_actividades_actividad_"+a+"-"+buc03).style.boxShadow ="";
		}
		document.getElementById("p_00992_clases_actividades_actividad_"+a+"-"+b).style.borderColor ="#8C6792";
		//document.getElementById("p_00992_clases_actividades_actividad_"+a+"-"+b).style.borderRightColor ="#fff";
		document.getElementById("p_00992_clases_actividades_actividad_"+a+"-"+b).style.boxShadow ="-3px 3px 3px #ccc";
		
		//////set pestanas [pestaña][titulo,tipo]
		pestanas=[];
		html_contenido=[];
		html_contenedor="";		
		
		///////////////targets
		pestanas.push(["Target Language","target_language"]);
		html_target="";
		target=dia_lectivo[a].actividad[b].target_language;
		
		for(c in target){
		html_target=html_target+
			'<div id="p_00993_clases_contenedor_actividad_target">';
			html_target=html_target+'<div id="p_00993_clases_contenedor_actividad_target_titulo"><span>Title:</span> '+target[c].titulo+'</div>';
			for(d in target[c].sonido)
				html_target=html_target+'<img id="p_00993_clases_contenedor_actividad_target_son" src="./images/audio.png" onclick="document.getElementById(\'p_00993_clases_contenedor_actividad_reproductor\').setAttribute(\'src\',\''+target[c].sonido[d].ruta+'\')">';
			for(d in target[c].imagenes)
				html_target=html_target+'<div id="p_00993_clases_contenedor_actividad_target_img">IMG'+target[c].imagenes[d].ruta+'</div>';
			for(d in target[c].definiciones)
				html_target=html_target+'<div id="p_00993_clases_contenedor_actividad_target_text"><span>Definition:</span> DEF'+target[c].definiciones[d]+'</div>';
			for(d in target[c].ejemplos)
				html_target=html_target+'<div id="p_00993_clases_contenedor_actividad_target_text"><span>Example:</span> EJE'+target[c].ejemplos[d]+'</div>';
			html_target=html_target+
			'</div>';
		}
		html_contenido.push("<div id='p_00993_clases_contenedor_actividad_contenido_0' class='p_00993_clases_contenedor_actividad_contenido_x'>"+
		"<div id='p_00993_clases_contenedor_actividad_contenedor_reproductor'><audio autoplay id='p_00993_clases_contenedor_actividad_reproductor' controls></audio></div>"+html_target+"</div>");
		
		///////////////attachment
		html_attachment=[];
		attachment=dia_lectivo[a].actividad[b].attachment;
		for(c in attachment){
			pestanas.push([attachment[c].titulo,"attachment"]);
			html_attachment.push('<div id="p_00993_clases_contenedor_actividad_attachment">'+
											attachment[c].html+
										'</div>');
			html_contenido.push("<div style='padding:6px;' id='p_00993_clases_contenedor_actividad_contenido_"+html_contenido.length+"' class='p_00993_clases_contenedor_actividad_contenido_x'>"+attachment[c].html+"</div>");
		}
		
		///////////////enlacess
		html_enlace=[];
		enlace=dia_lectivo[a].actividad[b].enlace;
		for(c in enlace){
			pestanas.push([enlace[c].titulo,"enlace"]);
			html_enlace = '<div class="p_00993_clases_contenedor_actividad_enlace">'+
										'<iframe class="p_00993_clases_contenedor_actividad_enlace_iframe" id="p_00993_clases_contenedor_actividad_enlace_iframe_'+c+'"'+
										'src=""></iframe>'+
									'</div>';
			html_contenido.push("<div id='p_00993_clases_contenedor_actividad_contenido_"+html_contenido.length+
			"' class='p_00993_clases_contenedor_actividad_contenido_x'>"+	html_enlace+"</div>");
		}
		
		//////////////pestañas
		html_contenedor=html_contenedor+"<div id='p_00993_clases_contenedor_actividad_pestanas'>";
		enlace=-1;
		for(i in pestanas){
			if(pestanas[i][1]=="enlace") enlace++;
			else enlace=-1;
			html_contenedor=html_contenedor+
			"<div id='p_00993_clases_contenedor_actividad_pestanas_"+i+"' class='p_00993_clases_contenedor_actividad_pestanas_"+pestanas[i][1]+"'"+
			" onclick='selec_pestana("+i+","+a+","+b+",\""+pestanas[i][1]+"\","+enlace+")'"+
			" onmouseover='ocultar_mostrar(\"p_00993_clases_contenedor_actividad_pestanas_over"+i+"\")'"+
			" onmouseout='ocultar_mostrar(\"p_00993_clases_contenedor_actividad_pestanas_over"+i+"\")'"+
			"></div>"+
			"<div id='p_00993_clases_contenedor_actividad_pestanas_over"+i+"'"+
			"class='p_00993_clases_contenedor_actividad_pestanas_over'><span>"+pestanas[i][0]+"</span></div>";
		}
		html_contenedor=html_contenedor+"</div></div>";//<div id='p_00993_clases_contenedor_actividad_pestanas_linea'>
		
		for(i in html_contenido)
			html_contenedor=html_contenedor+html_contenido[i];
		//acomodar ancho a la pantalla + escrive el contenedor + muestra el contenedor
		
		document.getElementById("p_00960_clases_contenedor_actividad").style.height = parseInt(document.getElementById('clases').offsetHeight - 165)+"px";
		document.getElementById("p_00960_clases_contenedor_actividad").innerHTML = html_contenedor;	
		document.getElementById("p_00960_clases_contenedor_actividad").style.display = "inline-block";
		//document.getElementById("p_00993_clases_contenedor_actividad_pestanas_linea").style.width=window.innerWidth-411+"px";
			
		selec_pestana(0,a,b);
		
		//acomodar el ancho de las pestañas para el espacio
		/*for(i in pestanas){
			//pest_ancho = document.getElementById("p_00993_clases_contenedor_actividad_pestanas_linea").offsetWidth;
			pest_ancho =((pest_ancho-80)/pestanas.length);
			if(pest_ancho>40)pest_ancho=40;
			document.getElementById("p_00993_clases_contenedor_actividad_pestanas_"+i).style.width = pest_ancho+"px";
		}*/
	}

////////SELECION DE UNA PESTAÑA
	function selec_pestana(pesta,dia_l,acti,enlace,id_enlace){
		total= dia_lectivo[dia_l].actividad[acti].attachment.length+dia_lectivo[dia_l].actividad[acti].enlace.length+1;
		
		//parar todos los iframes menos el seleccionado (por si es el mismo)
		contador_enlaces=0;
		for(i=0;i<total;i++){
			tipo_pestana = document.getElementById("p_00993_clases_contenedor_actividad_pestanas_"+i).className;
			if (tipo_pestana == "p_00993_clases_contenedor_actividad_pestanas_enlace"){
				document.getElementById("p_00993_clases_contenedor_actividad_enlace_iframe_"+contador_enlaces).src = "";
				contador_enlaces++;
			}
		}
		
		//ocultar todos y mostrar contenido de pestaña selecionada
		for(i=0;i<total;i++){
			cambiar=document.getElementById("p_00993_clases_contenedor_actividad_contenido_"+i)
			pestana=document.getElementById("p_00993_clases_contenedor_actividad_pestanas_"+i)
			if (i==pesta){
				cambiar.style.display ="inline-block";
				pestana.style.borderBottomColor ="#fff";
			}else{
				cambiar.style.display ="none";
				pestana.style.borderBottomColor ="#8C6792";
			}
		}
		//si la pestaña es un enlace acomodar el ancho a la pantalla y el alto en 9/16; + set enlace
		if(enlace=="enlace"){
			pest_ancho= document.getElementById("clases").offsetWidth - 296;
			document.getElementById("p_00993_clases_contenedor_actividad_contenido_"+pesta).style.width = pest_ancho+"px";
			document.getElementById("p_00993_clases_contenedor_actividad_contenido_"+pesta).style.height = (pest_ancho/16)*9+"px";
			document.getElementById("p_00993_clases_contenedor_actividad_enlace_iframe_"+id_enlace).src = dia_lectivo[dia_l].actividad[acti].enlace[id_enlace].ruta;
		}
		
	}

</script>