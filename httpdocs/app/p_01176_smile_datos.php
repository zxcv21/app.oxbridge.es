<!--
-Pag ID: p_01176
-->

<script>


//smile_datos FALSOS
smile_datos={
	"curso":{"duracion":9,"smiles":800},
	"alumno":{"id":31899,"smiles":300,"poblacion":"barcelona","distancia":1400,"sxm":30},
	"vs":[
		{"id":31899,"nombre":"Miguel","smiles":250,"sxm":30},
		{"id":31899,"nombre":"Miguel","smiles":300,"sxm":60},
		{"id":31899,"nombre":"Miguel","smiles":440,"sxm":90},
		{"id":31899,"nombre":"Miguel","smiles":700,"sxm":120},
		{"id":31899,"nombre":"Miguel","smiles":60,"sxm":150}
	],
	"tipo_preguntas":["fotos","audio","drag","m_option","tf","escribir","option_escribir","ordenar_frase"],
	"preguntas":[
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
		//ordenar_frase
		{
			"id_preguinta":"987654335",
			"temario":"vocabulary",
			"tipo":"ordenar_frase",
			"titulo":"orders the phrase",
			"pregunta":["name","Miguel","My","is"],
			"correcta": "My name is Miguel",
			"resultado":""
		},
		//foto
		{
			"id_preguinta":"123456789",
			"temario":"vocabulary",
			"tipo":"fotos",
			"titulo":"titulo",
			"pregunta":"HOUSE",
			"respuestas":["./imagenessmiles/house.gif","./imagenessmiles/car.jpg","./imagenessmiles/tree.jpg","./imagenessmiles/jacket.jpg"],
			"correcta":0,
			"resultado":""
		},
		//audio
		{
			"id_preguinta":"987654321",
			"temario":"vocabulary",
			"tipo":"audio",
			"titulo":"titulo",
			"pregunta":"../media/dont_need_roads.mp3",
			"respuestas":["./imagenessmiles/tree.jpg","./imagenessmiles/jacket.jpg","./imagenessmiles/car.jpg","./imagenessmiles/house.gif"],
			"correcta":2,
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
		//escribir
		{
			"id_preguinta":"987654321",
			"temario":"vocabulary",
			"tipo":"escribir",
			"titulo":"titulo",
			"pregunta":"Findings from UCH go against one of the most influential scientific ideas of beauty – that the combination of the features of several ordinary faces can result in one beautiful face. The theory is the work of Sir Francis Galton, who in 1878 discovered that if photographs of a number of faces were put on top of each other, most people considered the resulting face to be more beautiful than the faces which made them. This theory has taken a knock in a report from the science magazine Nature. Dr David Perret combined some photographs of both European and Japanese faces and asked people to judge them. ‘We found that not only were individual attractive faces preferred to the combined ones, but that when we used the computer to emphasise the combined features away from the average, that too was preferred,’ he said. This would account for the popularity of actresses such as Brigitte Nielsen and Daryl Hannah, who have features that are far from average.<br>"+

"A beauty researcher, Dr Michael Cunningham of Elmhurst College, Illinois, has been looking at the effect of individual features in a beautiful face and has discovered that some features may or may not be desirable, depending on what the judge is looking for. When male interviewers are selecting a woman for a job, for instance, arched expressive eyebrows and dilated pupils are seen as desirable. On the other hand, men looking for a partner with a view to settling down and starting a family, found a wide smile more important than aggressive eyes and eyebrows.<br>"+

"Cunningham also found that attractive women with mature features, such as small eyes and a large nose, received more respect. ‘It could be that societies where women have more power and independence idealise women with more mature features,’ he says, ‘while those which value dependent, weak females may prefer baby faces.’",
			"guardar":"",
			"enviar":"",
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
		//option_escribir
		{
			"id_preguinta":"987654321",
			"temario":"vocabulary",
			"tipo":"option_escribir",
			"titulo":"Presen the advantatges ans disadvantages of local food",
			"pregunta":["1","2","3","4"],
			"guardar":"",
			"enviar":"",
			"resultado":""
		}
		//rigting
		//quess
	]
};

</script>