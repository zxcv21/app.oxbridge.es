<!--
-Pag ID: p_01176
-->

<script>

personal_datos_info.ultimapregunta="";

//smile_datos FALSOS
smile_datos={
	"curso":{},
	"alumno":{},
	"vs":[
		/*{"id":31899,"nombre":"Miguel","smiles":250,"sxm":30},
		{"id":31892,"nombre":"Miguel","smiles":300,"sxm":60},
		{"id":31893,"nombre":"Miguel","smiles":440,"sxm":90},
		{"id":31894,"nombre":"Miguel","smiles":700,"sxm":120},
		{"id":31897,"nombre":"Miguel","smiles":60,"sxm":150}*/
	],
	"tipo_preguntas":["fotos","audio","drag","m_opftion","tf","escribir","option_escribir","ordenar_frase"],
	"preguntas_cargadas":[],
	"preguntas_contestadas":[],
	"preguntas_enviadas":[],
	"pregunta_vista":[],
	"pregunta_vista_subida":[],

	/*,
		//rigting
		//quess
	]*/
};

//pasar CONSULTA por jscript
function p_01176_funcion_consulta_smile_datos(){
	p_01447_oponentes_consulta();
	if(typeof personal_datos_info.nivel !="undefined")
	{
		if(personal_datos_info.nivel !="")
		{
			var p_01176_smile_datos_iframe = document.createElement("iframe");
			p_01176_smile_datos_iframe.src="<? echo ver_url("movil/smiles/p_01310_smile_datos_consulta.php","src"); ?>"+
				"?alumno_id="+alumno_id+
				"&bd="+personal_datos_info.bd+
				"&nivel="+personal_datos_info.nivel+
				"&trinity="+personal_datos_info.trinity;
			p_01176_smile_datos_iframe.id="p_01176_smile_datos_iframe";
			p_01176_smile_datos_iframe.style.display="none";
			if(!document.getElementById("p_01176_smile_datos_iframe"))
			{
				document.body.appendChild(p_01176_smile_datos_iframe);
			}
		}
		else
		{
			setTimeout(p_01176_funcion_consulta_smile_datos,1000);
		}
	}
	else
	{
		setTimeout(p_01176_funcion_consulta_smile_datos,1000);
	}
}

//contar smiles de un array
function p_1176_contar_array_smiles(vector)
{
	var cant=4;
	var correctos=0;
	var errores=0;
	var vacios=0;

	for(i=0;i<4;i++)
	{
		switch(vector[i])
		{
			case 1:{correctos++;break;}
			case 0:{errores++;break;}
			case 2:
			default:{vacios++;break;}
		}
	}

	return {"correctos":correctos,"errores":errores,"vacios":vacios,"totales":cant};
}


//a contar caritas!!
function p_1176_contar_smiles()
{
	document.getElementById("p_00962_grafico_progreso_detalle_vocabulario").innerHTML="";
	document.getElementById("p_00962_grafico_progreso_detalle_estructura").innerHTML="";

	if(personal_datos_info.trinity==1)
	{
		var e_tnt=document.getElementById("p_00962_grafico_progreso_detalle_trinity");
		e_tnt.innerHTML='<div class="p_01172_detalle_seccion_titulo" style="background:#cfc !important">TRINITY</div>';
		e_tnt.style.fontSize="1em";
	}

	//cantidad de smiles por tema-subtema
	var cant=8;

	//definicion contadores
	smile_datos.smiles_totales={}
	smile_datos.smiles_totales.general={
		"errores":0,
		"correctos":0,
		"vacios":0,
		"totales":0
	}
	smile_datos.smiles_totales.preguntas={
		"correctos":0,
		"totales":0
	}
	//bucle para contar
	for(bucle_1 in smile_datos.smiles)
	{
		smile_datos.smiles_totales[bucle_1]={
			"errores":0,
			"correctos":0,
			"vacios":0,
			"totales":0
		}
		var tema=smile_datos.smiles[bucle_1].temas;

		///////////////////////
		var seccion= bucle_1;
		switch(seccion){
			case "vocabulario":{var titulo=TEXTOS[130].text.toUpperCase();var color="#ccf";break;}
			case "estructura":{var titulo=TEXTOS[131].text.toUpperCase();var color="#fcc";break;}
			case "tnt":{var titulo=TEXTOS[132].text.toUpperCase();var color="#cfc";break;}
			default:{var titulo='';var color="";break;}
		}

		document.getElementById("p_00962_grafico_progreso_detalle_"+seccion).insertAdjacentHTML("beforeEnd",""+
			"<div class='p_01172_detalle_seccion_titulo' style='background:"+color+"'>"+titulo+"</div>"+
			"<div id='p_01172_contenido_seccion_"+seccion+"' class='p_01172_contenido_seccion'></div>"+
		"");
		////////////////////////////

		for(k in tema)
		{
			var subtema=tema[k].subtemas;
			for(l in subtema)
			{
				smile_datos.smiles_totales.preguntas.correctos+=subtema[l].smiles_preguntas_correctos;
				smile_datos.smiles_totales.preguntas.totales+=subtema[l].smiles_preguntas_hechos;

				smile_datos.smiles_totales[bucle_1].errores+=subtema[l].smiles_totales_hechos-subtema[l].smiles_totales_correctos;
				smile_datos.smiles_totales.general.errores+=subtema[l].smiles_totales_hechos-subtema[l].smiles_totales_correctos;

				smile_datos.smiles_totales[bucle_1].correctos+=subtema[l].smiles_totales_correctos;
				smile_datos.smiles_totales.general.correctos+=subtema[l].smiles_totales_correctos;

				smile_datos.smiles_totales[bucle_1].vacios+=cant-subtema[l].smiles_totales_hechos;
				smile_datos.smiles_totales.general.vacios+=cant-subtema[l].smiles_totales_hechos;

				smile_datos.smiles_totales[bucle_1].totales+=cant;
				smile_datos.smiles_totales.general.totales+=cant;

				var smiles_correctos=subtema[l].smiles_totales_correctos;
				var smiles_errores=subtema[l].smiles_totales_hechos-subtema[l].smiles_totales_correctos;
				var smiles_vacios=cant-subtema[l].smiles_totales_hechos;

				if(subtema[l].smiles_totales_hechos<=cant){
					smiles_errores=subtema[l].smiles_totales_hechos-subtema[l].smiles_preguntas_correctos-subtema[l].smiles_asistencia_correctos;
					if(smiles_errores<0)smiles_errores=0;
					smiles_vacios=cant-smiles_errores-subtema[l].smiles_totales_correctos;
				}

				p_01176_seccion_tema(k,bucle_1,smiles_correctos,smiles_errores,smiles_vacios,tema[k].titulo,subtema[l].subtema);
			}
		}
	}

}

//lista por temario
function p_01176_seccion_tema(tema_id,seccion,smiles_correctos,smiles_incorrectos,smiles_vacios,tema,subtema){
	//smiles x tema
	var cant=4;

	//titulo
	switch(seccion){
		case "vocabulario":{var titulo=TEXTOS[130].text.toUpperCase();var color="#ccf";break;}
		case "estructura":{var titulo=TEXTOS[131].text.toUpperCase();var color="#fcc";break;}
		case "tnt":{var titulo=TEXTOS[132].text.toUpperCase();var color="#cfc";break;}
		default:{var titulo='';var color="";break;}
	}


	if(!document.getElementById("p_00962_detalle_"+seccion+"_"+tema_id)){
		document.getElementById("p_01172_contenido_seccion_"+seccion).insertAdjacentHTML("beforeEnd",""+
			"<div class='p_01172_progreso_detalle_tema' id='p_00962_detalle_"+seccion+"_"+tema_id+"'>"+
			"<div class='p_01172_progreso_detalle_tema_titulo'>"+tema+"</div>"+
			"</div>"+
		"");
	}

////////////////////////////////////////////////
/*	if(!document.getElementById("p_00962_detalle_"+seccion+"_"+tema_id)){
		document.getElementById("p_00962_grafico_progreso_detalle_"+seccion).insertAdjacentHTML("beforeEnd",""+
			"<div class='p_01172_detalle_seccion_titulo' style='background:"+color+"'>"+titulo+"</div><div class='p_01172_progreso_detalle_tema' id='p_00962_detalle_"+seccion+"_"+tema_id+"'>"+
			"<div class='p_01172_progreso_detalle_tema_titulo'>"+tema+"</div>"+
			"</div>"+
		"");
	}*/

	var restar=0;
	var html_smiles="<div class='p_01172_progreso_detalle_subtema_titulo'>"+subtema+"</div>";

	for(i=smiles_correctos;i>0;i--){
		if(i>=2)
		{
			html_smiles+="<img class='p_01172_progreso_detalle_smile' src='https://app.oxbridge.es/app/images/smile_green.png'>";
			i--;
		}
		else
		{
			restar+=1;
			if(smiles_incorrectos>0)
			{
				html_smiles+="<img class='p_01172_progreso_detalle_smile' src='https://app.oxbridge.es/app/images/smile_green_red.png'>";
			}
			else
			{
				html_smiles+="<img class='p_01172_progreso_detalle_smile' src='https://app.oxbridge.es/app/images/smile_green_gery.png'>";
			}
		}

	}

	for(i=smiles_incorrectos-restar;i>0;i--){
		if(i>=2)
		{
			html_smiles+="<img class='p_01172_progreso_detalle_smile' src='https://app.oxbridge.es/app/images/smile_red.png'>";
			i--;
		}
		else
		{
			html_smiles+="<img class='p_01172_progreso_detalle_smile' src='https://app.oxbridge.es/app/images/smile_red_grey.png'>";
			restar+=1;
		}
	}

	for(i=smiles_vacios-restar;i>0;i--)
	{
		html_smiles+="<img class='p_01172_progreso_detalle_smile' src='https://app.oxbridge.es/app/images/smile_grey.png'>";
		i--;
	}

	document.getElementById("p_00962_detalle_"+seccion+"_"+tema_id).insertAdjacentHTML("beforeEnd","<div class='p_01172_progreso_detalle_subtema'>"+html_smiles+"</div>");
}

/*
if(alumno_id=="32032" || alumno_id=="31899"){
smile_datos.preguntas=[
		//ordenar_frase
		{
			"id_preguinta":"987654335",
			"temario":"vocabulary",
			"tipo":"ordenar_frase",
			"titulo":"orders the phrase",
			"pregunta":"My name is Miguel",
			"resultado":""
		},
		//foto
		{
			"id_preguinta":"123456789",
			"temario":"vocabulary",
			"tipo":"fotos",
			"titulo":"titulo",
			"pregunta":"HOUSE",
			"respuestas":["smiles/images/car.jpg","smiles/images/house.gif","smiles/images/tree.jpg","smiles/images/jacket.jpg"],
			"correcta":[0,1,0,0],
			"resultado":""
		},
			//foto
		{
			"id_preguinta":"123456789",
			"temario":"vocabulary",
			"tipo":"fotos",
			"titulo":"titulo",
			"pregunta":"HOUSE",
			"respuestas":["smiles/images/car.jpg","smiles/images/house.gif","smiles/images/tree.jpg","smiles/images/jacket.jpg"],
			"correcta":[0,1,0,0],
			"resultado":""
		},
		//multiple opcion
		{
			"id_preguinta":"987654321",
			"temario":"vocabulary",
			"tipo":"m_option",
			"titulo":"Choose the TRUE answer",
			"pregunta":"que numoeros son impares?",
			"respuestas":["0","-1","3","mañana",],
			"correcta":[0,1,1,0],
			"resultado":""
		},
		//audio
		{
			"id_preguinta":"987654321",
			"temario":"vocabulary",
			"tipo":"audio",
			"titulo":"titulo",
			"pregunta":"smiles/media/dont_need_roads.mp3",
			"respuestas":["smiles/images/tree.jpg","smiles/images/jacket.jpg","smiles/images/car.jpg","smiles/images/house.gif"],
			"correcta":[0,0,1,0],
			"resultado":""
		},
		//tf
		{
			"id_preguinta":"000000001",
			"temario":"vocabulary",
			"tipo":"tf",
			"titulo":"titulo1",
			"pregunta":"cuando se estrena S.W. episodio VII?",
			"respuestas":["mpregunta1","nunca","el año pasado","a fin de año"],
			"correcta":1,
			"resultado":""
		},
		//tf
		{
			"id_preguinta":"987654321",
			"temario":"vocabulary",
			"tipo":"tf",
			"titulo":"titulo",
			"pregunta":"cuando se estrena S.W. episodio VII?",
			"respuestas":["mañana","nunca","el año pasado","a fin de año"],
			"correcta":1,
			"resultado":""
		},
		//drag & drop
		{
			"id_preguinta":"987654321",
			"temario":"structure",
			"tipo":"drag",
			"titulo":"Complete the sentence with the right choice",
			"pregunta":"El estilo de los bordes sólo se puede _Work indicar mediante _Basket alguna de las palabras reservadas definidas por CSS. Como el valor _Really por defecto de esta _Surprise propiedad es none, los elementos _Understand no muestran ningún borde visible a menos que se _Bye establezca explícitamente un estilo de borde.",
			"respuestas":"Some countries responded directly to excessive oil use and rubbish cause by plastic bags _ on them.<br>The lightness and durability of plastic bags meant that their use was _ twenty years after their invention.<br>The researchers questioned the idea that bio-degradable bags take less than three years to _ .",
			"correcta":["Basket","Bye","Surprise"],
			"resultado":""
		},
		//tf
		{
			"id_preguinta":"000000002",
			"temario":"vocabulary",
			"tipo":"tf",
			"titulo":"titulo2",
			"pregunta":"cuando se estrena S.W. episodio VII?",
			"respuestas":["mpregunta2","nunca","el año pasado","a fin de año"],
			"correcta":2,
			"resultado":""
		},
		//tf
		{
			"id_preguinta":"000000003",
			"temario":"vocabulary",
			"tipo":"tf",
			"titulo":"titulo3",
			"pregunta":"cuando se estrena S.W. episodio VII?",
			"respuestas":["mpregunta3","nunca","el año pasado","a fin de año"],
			"correcta":3,
			"resultado":""
		},
		//tf
		{
			"id_preguinta":"000000004",
			"temario":"vocabulary",
			"tipo":"tf",
			"titulo":"titulo",
			"pregunta":"cuando se estrena S.W. episodio VII?",
			"respuestas":["mpregunta4","nunca","el año pasado","a fin de año"],
			"correcta":4,
			"resultado":""
		},
		//tf
		{
			"id_preguinta":"987654321",
			"temario":"vocabulary",
			"tipo":"tf",
			"titulo":"titulo",
			"pregunta":"cuando se estrena S.W. episodio VII?",
			"respuestas":["mañana","nunca","el año pasado","a fin de año"],
			"correcta":1,
			"resultado":""
		},
		//escribir
		{
			"id_preguinta":"987654321",
			"temario":"vocabulary",
			"tipo":"escribir",
			"titulo":"titulo",
			"longitud_min_max": "Maximun 180 words!",
			"pregunta":"Findings from UCH go against one of the most influential scientific ideas of beauty – that the combination of the features of several ordinary faces can result in one beautiful face. The theory is the work of Sir Francis Galton, who in 1878 discovered that if photographs of a number of faces were put on top of each other, most people considered the resulting face to be more beautiful than the faces which made them. This theory has taken a knock in a report from the science magazine Nature. Dr David Perret combined some photographs of both European and Japanese faces and asked people to judge them. ‘We found that not only were individual attractive faces preferred to the combined ones, but that when we used the computer to emphasise the combined features away from the average, that too was preferred,’ he said. This would account for the popularity of actresses such as Brigitte Nielsen and Daryl Hannah, who have features that are far from average.<br>"+

"A beauty researcher, Dr Michael Cunningham of Elmhurst College, Illinois, has been looking at the effect of individual features in a beautiful face and has discovered that some features may or may not be desirable, depending on what the judge is looking for. When male interviewers are selecting a woman for a job, for instance, arched expressive eyebrows and dilated pupils are seen as desirable. On the other hand, men looking for a partner with a view to settling down and starting a family, found a wide smile more important than aggressive eyes and eyebrows.<br>"+

"Cunningham also found that attractive women with mature features, such as small eyes and a large nose, received more respect. ‘It could be that societies where women have more power and independence idealise women with more mature features,’ he says, ‘while those which value dependent, weak females may prefer baby faces.’",
			"guardar":"",
			"enviar":"",
			"resultado":""
		},
		//option_escribir
		{
			"id_preguinta":"987654321",
			"temario":"vocabulary",
			"tipo":"option_escribir",
			"titulo":"Presen the advantatges ans disadvantages of local food",
			"longitud_min_max_op": "Maximun 180 Words!",
			"subtopic_area_1": "Text subtòpic 1",
			"pregunta":["1","2","3","4"],
			"guardar":"",
			"enviar":"",
			"resultado":""
		}];
}
*/
</script>
