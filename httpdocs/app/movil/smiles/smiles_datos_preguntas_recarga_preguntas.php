<html>
<meta charset="utf-8">
<body>
<script>
function recargar_preguntas_smiles()
{
	window.parent.smile_datos={
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
			"smiles":["estructura"],
	//window.parent.smile_datos.estructura:["activity_category":"activity_category"];
			
			/*,
				//rigting
				//quess
			]*/
		};
	 window.parent.smile_datos.preguntas=[
		//ordenar_frase
		{
			"area_id": "1",
			"categoria": "trinity",
			"correcta": [1,0,0,0],
			"drag": "",
			"id_preguinta": "726",
			"idioma_id": "1",
			"nivel_id": "1",
			"pregunta": "A gap year is a year students take between high school and college to travel, explore interests, and build an education outside of the classroom. It is quite common in Europe and Australia. The gap year provides an opportunity for students who are  tired with the traditional education process after high school and would like time to relax and have fun. Gap years are used to figure out what they might like to do, and learn new things. It doesn&rsquo;t have to be a whole year. A gap experience might be as short as three months, or even a semester. For students starting college in January, a gap semester is a normal plan. Others who want to wait a year or more before starting college, the gap year could be an entire academic year out in the world beyond the classroom.",
			"respuestas": ["A gap year is used to learn new things","Gap years are always so expensive","A gap year is 12 months","Gap years are common in Asia"],
			"resultado": "",
			"subtema_id": "421",
			"tema_id": "14",
			"tipo": "m_option",
			"tipo_para_bd": "2",
			"titulo": "Choose the RIGHT answers"
		},
		{
			"area_id": "1",
			"categoria": "trinity",
			"correcta": [],
			"drag": "Taking a gap year is considered_!_common_!!_in Europe and Australia. <br />It is believed that a gap year_!_provides_!!_an opportunity for students<br />A gap year can be _!_short_!!_like 3 months or an entire year<br />Gap years may help _!_build_!!_an education outside the classroom",
			"id_preguinta": "727",
			"idioma_id": "1",
			"nivel_id": "1",
			"pregunta": "A gap year is a year students take between high school and college to travel, explore interests, and build an education outside of the classroom. It is quite common in Europe and Australia. The gap year provides an opportunity for students who are  tired with the traditional education process after high school and would like time to relax and have fun. Gap years are used to figure out what they might like to do, and learn new things. It doesn&rsquo;t have to be a whole year. A gap experience might be as short as three months, or even a semester. For students starting college in January, a gap semester is a normal plan. Others who want to wait a year or more before starting college, the gap year could be an entire academic year out in the world beyond the classroom.",
			"respuestas": ["build","academic","common","used","provides","short"],
			"resultado": "",
			"subtema_id": "421",
			"tema_id": "14",
			"tipo": "drag",
			"tipo_para_bd": "3",
			"titulo": "Fill the gaps"
		},
		{
			"area_id": "1",
			"categoria": "trinity",
			"correcta": [1,0,0,0],
			"drag": "",
			"id_preguinta": "737",
			"idioma_id": "1",
			"nivel_id": "1",
			"pregunta": "Google has invented app for people to give $1 to charities. Its 'One Today' app shows many charities every day. When you open the app, you will see several projects to which you can donate $1 with one click. Google believe that most people can afford the occasional $1 donation. It is only in the USA but Google hopes it will be worldwide. They look forward to continuing to improve and to grow their dynamic community. The One Today website said Google has always supported non-profits and that One Today makes fundraising easy for them. It also makes giving simple and fun. People can learn more about non-profits, and share their favorite projects. Google asked people to &quot;do good daily&quot; and help hundreds of charities be successful. Google is amazed by the great work non-profits do every day to make the world better. It is happy the app can help people give to charity.",
			"respuestas": ["Google's donation app","Google has always supported non-profits","It makes giving simple and fun","Only in the USA"],
			"resultado": "",
			"subtema_id": "425",
			"tema_id": "35",
			"tipo": "tf",
			"tipo_para_bd": "1",
			"titulo": "Choose the RIGHT answer"
		},
			{
			"area_id": "1",
			"categoria": "trinity",
			"correcta": [1,0,0,0],
			"drag": "",
			"id_preguinta": "726",
			"idioma_id": "1",
			"nivel_id": "1",
			"pregunta": "A gap year is a year students take between high school and college to travel, explore interests, and build an education outside of the classroom. It is quite common in Europe and Australia. The gap year provides an opportunity for students who are  tired with the traditional education process after high school and would like time to relax and have fun. Gap years are used to figure out what they might like to do, and learn new things. It doesn&rsquo;t have to be a whole year. A gap experience might be as short as three months, or even a semester. For students starting college in January, a gap semester is a normal plan. Others who want to wait a year or more before starting college, the gap year could be an entire academic year out in the world beyond the classroom.",
			"respuestas": ["A gap year is used to learn new things","Gap years are always so expensive","A gap year is 12 months","Gap years are common in Asia"],
			"resultado": "",
			"subtema_id": "421",
			"tema_id": "14",
			"tipo": "m_option",
			"tipo_para_bd": "2",
			"titulo": "Choose the RIGHT answers"
		},
		{
			"area_id": "1",
			"categoria": "trinity",
			"correcta": [],
			"drag": "Taking a gap year is considered_!_common_!!_in Europe and Australia. <br />It is believed that a gap year_!_provides_!!_an opportunity for students<br />A gap year can be _!_short_!!_like 3 months or an entire year<br />Gap years may help _!_build_!!_an education outside the classroom",
			"id_preguinta": "727",
			"idioma_id": "1",
			"nivel_id": "1",
			"pregunta": "A gap year is a year students take between high school and college to travel, explore interests, and build an education outside of the classroom. It is quite common in Europe and Australia. The gap year provides an opportunity for students who are  tired with the traditional education process after high school and would like time to relax and have fun. Gap years are used to figure out what they might like to do, and learn new things. It doesn&rsquo;t have to be a whole year. A gap experience might be as short as three months, or even a semester. For students starting college in January, a gap semester is a normal plan. Others who want to wait a year or more before starting college, the gap year could be an entire academic year out in the world beyond the classroom.",
			"respuestas": ["build","academic","common","used","provides","short"],
			"resultado": "",
			"subtema_id": "421",
			"tema_id": "14",
			"tipo": "drag",
			"tipo_para_bd": "3",
			"titulo": "Fill the gaps"
		},
		{
			"area_id": "1",
			"categoria": "trinity",
			"correcta": [1,0,0,0],
			"drag": "",
			"id_preguinta": "737",
			"idioma_id": "1",
			"nivel_id": "1",
			"pregunta": "Google has invented app for people to give $1 to charities. Its 'One Today' app shows many charities every day. When you open the app, you will see several projects to which you can donate $1 with one click. Google believe that most people can afford the occasional $1 donation. It is only in the USA but Google hopes it will be worldwide. They look forward to continuing to improve and to grow their dynamic community. The One Today website said Google has always supported non-profits and that One Today makes fundraising easy for them. It also makes giving simple and fun. People can learn more about non-profits, and share their favorite projects. Google asked people to &quot;do good daily&quot; and help hundreds of charities be successful. Google is amazed by the great work non-profits do every day to make the world better. It is happy the app can help people give to charity.",
			"respuestas": ["Google's donation app","Google has always supported non-profits","It makes giving simple and fun","Only in the USA"],
			"resultado": "",
			"subtema_id": "425",
			"tema_id": "35",
			"tipo": "tf",
			"tipo_para_bd": "1",
			"titulo": "Choose the RIGHT answer"
		},
			{
			"area_id": "1",
			"categoria": "trinity",
			"correcta": [1,0,0,0],
			"drag": "",
			"id_preguinta": "726",
			"idioma_id": "1",
			"nivel_id": "1",
			"pregunta": "A gap year is a year students take between high school and college to travel, explore interests, and build an education outside of the classroom. It is quite common in Europe and Australia. The gap year provides an opportunity for students who are  tired with the traditional education process after high school and would like time to relax and have fun. Gap years are used to figure out what they might like to do, and learn new things. It doesn&rsquo;t have to be a whole year. A gap experience might be as short as three months, or even a semester. For students starting college in January, a gap semester is a normal plan. Others who want to wait a year or more before starting college, the gap year could be an entire academic year out in the world beyond the classroom.",
			"respuestas": ["A gap year is used to learn new things","Gap years are always so expensive","A gap year is 12 months","Gap years are common in Asia"],
			"resultado": "",
			"subtema_id": "421",
			"tema_id": "14",
			"tipo": "m_option",
			"tipo_para_bd": "2",
			"titulo": "Choose the RIGHT answers"
		},
		{
			"area_id": "1",
			"categoria": "trinity",
			"correcta": [],
			"drag": "Taking a gap year is considered_!_common_!!_in Europe and Australia. <br />It is believed that a gap year_!_provides_!!_an opportunity for students<br />A gap year can be _!_short_!!_like 3 months or an entire year<br />Gap years may help _!_build_!!_an education outside the classroom",
			"id_preguinta": "727",
			"idioma_id": "1",
			"nivel_id": "1",
			"pregunta": "A gap year is a year students take between high school and college to travel, explore interests, and build an education outside of the classroom. It is quite common in Europe and Australia. The gap year provides an opportunity for students who are  tired with the traditional education process after high school and would like time to relax and have fun. Gap years are used to figure out what they might like to do, and learn new things. It doesn&rsquo;t have to be a whole year. A gap experience might be as short as three months, or even a semester. For students starting college in January, a gap semester is a normal plan. Others who want to wait a year or more before starting college, the gap year could be an entire academic year out in the world beyond the classroom.",
			"respuestas": ["build","academic","common","used","provides","short"],
			"resultado": "",
			"subtema_id": "421",
			"tema_id": "14",
			"tipo": "drag",
			"tipo_para_bd": "3",
			"titulo": "Fill the gaps"
		},
		{
			"area_id": "1",
			"categoria": "trinity",
			"correcta": [1,0,0,0],
			"drag": "",
			"id_preguinta": "737",
			"idioma_id": "1",
			"nivel_id": "1",
			"pregunta": "Google has invented app for people to give $1 to charities. Its 'One Today' app shows many charities every day. When you open the app, you will see several projects to which you can donate $1 with one click. Google believe that most people can afford the occasional $1 donation. It is only in the USA but Google hopes it will be worldwide. They look forward to continuing to improve and to grow their dynamic community. The One Today website said Google has always supported non-profits and that One Today makes fundraising easy for them. It also makes giving simple and fun. People can learn more about non-profits, and share their favorite projects. Google asked people to &quot;do good daily&quot; and help hundreds of charities be successful. Google is amazed by the great work non-profits do every day to make the world better. It is happy the app can help people give to charity.",
			"respuestas": ["Google's donation app","Google has always supported non-profits","It makes giving simple and fun","Only in the USA"],
			"resultado": "",
			"subtema_id": "425",
			"tema_id": "35",
			"tipo": "tf",
			"tipo_para_bd": "1",
			"titulo": "Choose the RIGHT answer"
		},
			{
			"area_id": "1",
			"categoria": "trinity",
			"correcta": [1,0,0,0],
			"drag": "",
			"id_preguinta": "726",
			"idioma_id": "1",
			"nivel_id": "1",
			"pregunta": "A gap year is a year students take between high school and college to travel, explore interests, and build an education outside of the classroom. It is quite common in Europe and Australia. The gap year provides an opportunity for students who are  tired with the traditional education process after high school and would like time to relax and have fun. Gap years are used to figure out what they might like to do, and learn new things. It doesn&rsquo;t have to be a whole year. A gap experience might be as short as three months, or even a semester. For students starting college in January, a gap semester is a normal plan. Others who want to wait a year or more before starting college, the gap year could be an entire academic year out in the world beyond the classroom.",
			"respuestas": ["A gap year is used to learn new things","Gap years are always so expensive","A gap year is 12 months","Gap years are common in Asia"],
			"resultado": "",
			"subtema_id": "421",
			"tema_id": "14",
			"tipo": "m_option",
			"tipo_para_bd": "2",
			"titulo": "Choose the RIGHT answers"
		},
		{
			"area_id": "1",
			"categoria": "trinity",
			"correcta": [],
			"drag": "Taking a gap year is considered_!_common_!!_in Europe and Australia. <br />It is believed that a gap year_!_provides_!!_an opportunity for students<br />A gap year can be _!_short_!!_like 3 months or an entire year<br />Gap years may help _!_build_!!_an education outside the classroom",
			"id_preguinta": "727",
			"idioma_id": "1",
			"nivel_id": "1",
			"pregunta": "A gap year is a year students take between high school and college to travel, explore interests, and build an education outside of the classroom. It is quite common in Europe and Australia. The gap year provides an opportunity for students who are  tired with the traditional education process after high school and would like time to relax and have fun. Gap years are used to figure out what they might like to do, and learn new things. It doesn&rsquo;t have to be a whole year. A gap experience might be as short as three months, or even a semester. For students starting college in January, a gap semester is a normal plan. Others who want to wait a year or more before starting college, the gap year could be an entire academic year out in the world beyond the classroom.",
			"respuestas": ["build","academic","common","used","provides","short"],
			"resultado": "",
			"subtema_id": "421",
			"tema_id": "14",
			"tipo": "drag",
			"tipo_para_bd": "3",
			"titulo": "Fill the gaps"
		},
		{
			"area_id": "1",
			"categoria": "trinity",
			"correcta": [1,0,0,0],
			"drag": "",
			"id_preguinta": "737",
			"idioma_id": "1",
			"nivel_id": "1",
			"pregunta": "Google has invented app for people to give $1 to charities. Its 'One Today' app shows many charities every day. When you open the app, you will see several projects to which you can donate $1 with one click. Google believe that most people can afford the occasional $1 donation. It is only in the USA but Google hopes it will be worldwide. They look forward to continuing to improve and to grow their dynamic community. The One Today website said Google has always supported non-profits and that One Today makes fundraising easy for them. It also makes giving simple and fun. People can learn more about non-profits, and share their favorite projects. Google asked people to &quot;do good daily&quot; and help hundreds of charities be successful. Google is amazed by the great work non-profits do every day to make the world better. It is happy the app can help people give to charity.",
			"respuestas": ["Google's donation app","Google has always supported non-profits","It makes giving simple and fun","Only in the USA"],
			"resultado": "",
			"subtema_id": "425",
			"tema_id": "35",
			"tipo": "tf",
			"tipo_para_bd": "1",
			"titulo": "Choose the RIGHT answer"
		},
			{
			"area_id": "1",
			"categoria": "trinity",
			"correcta": [1,0,0,0],
			"drag": "",
			"id_preguinta": "726",
			"idioma_id": "1",
			"nivel_id": "1",
			"pregunta": "A gap year is a year students take between high school and college to travel, explore interests, and build an education outside of the classroom. It is quite common in Europe and Australia. The gap year provides an opportunity for students who are  tired with the traditional education process after high school and would like time to relax and have fun. Gap years are used to figure out what they might like to do, and learn new things. It doesn&rsquo;t have to be a whole year. A gap experience might be as short as three months, or even a semester. For students starting college in January, a gap semester is a normal plan. Others who want to wait a year or more before starting college, the gap year could be an entire academic year out in the world beyond the classroom.",
			"respuestas": ["A gap year is used to learn new things","Gap years are always so expensive","A gap year is 12 months","Gap years are common in Asia"],
			"resultado": "",
			"subtema_id": "421",
			"tema_id": "14",
			"tipo": "m_option",
			"tipo_para_bd": "2",
			"titulo": "Choose the RIGHT answers"
		},
		{
			"area_id": "1",
			"categoria": "trinity",
			"correcta": [],
			"drag": "Taking a gap year is considered_!_common_!!_in Europe and Australia. <br />It is believed that a gap year_!_provides_!!_an opportunity for students<br />A gap year can be _!_short_!!_like 3 months or an entire year<br />Gap years may help _!_build_!!_an education outside the classroom",
			"id_preguinta": "727",
			"idioma_id": "1",
			"nivel_id": "1",
			"pregunta": "A gap year is a year students take between high school and college to travel, explore interests, and build an education outside of the classroom. It is quite common in Europe and Australia. The gap year provides an opportunity for students who are  tired with the traditional education process after high school and would like time to relax and have fun. Gap years are used to figure out what they might like to do, and learn new things. It doesn&rsquo;t have to be a whole year. A gap experience might be as short as three months, or even a semester. For students starting college in January, a gap semester is a normal plan. Others who want to wait a year or more before starting college, the gap year could be an entire academic year out in the world beyond the classroom.",
			"respuestas": ["build","academic","common","used","provides","short"],
			"resultado": "",
			"subtema_id": "421",
			"tema_id": "14",
			"tipo": "drag",
			"tipo_para_bd": "3",
			"titulo": "Fill the gaps"
		},
		{
			"area_id": "1",
			"categoria": "trinity",
			"correcta": [1,0,0,0],
			"drag": "",
			"id_preguinta": "737",
			"idioma_id": "1",
			"nivel_id": "1",
			"pregunta": "Google has invented app for people to give $1 to charities. Its 'One Today' app shows many charities every day. When you open the app, you will see several projects to which you can donate $1 with one click. Google believe that most people can afford the occasional $1 donation. It is only in the USA but Google hopes it will be worldwide. They look forward to continuing to improve and to grow their dynamic community. The One Today website said Google has always supported non-profits and that One Today makes fundraising easy for them. It also makes giving simple and fun. People can learn more about non-profits, and share their favorite projects. Google asked people to &quot;do good daily&quot; and help hundreds of charities be successful. Google is amazed by the great work non-profits do every day to make the world better. It is happy the app can help people give to charity.",
			"respuestas": ["Google's donation app","Google has always supported non-profits","It makes giving simple and fun","Only in the USA"],
			"resultado": "",
			"subtema_id": "425",
			"tema_id": "35",
			"tipo": "tf",
			"tipo_para_bd": "1",
			"titulo": "Choose the RIGHT answer"
		},
			{
			"area_id": "1",
			"categoria": "trinity",
			"correcta": [1,0,0,0],
			"drag": "",
			"id_preguinta": "726",
			"idioma_id": "1",
			"nivel_id": "1",
			"pregunta": "A gap year is a year students take between high school and college to travel, explore interests, and build an education outside of the classroom. It is quite common in Europe and Australia. The gap year provides an opportunity for students who are  tired with the traditional education process after high school and would like time to relax and have fun. Gap years are used to figure out what they might like to do, and learn new things. It doesn&rsquo;t have to be a whole year. A gap experience might be as short as three months, or even a semester. For students starting college in January, a gap semester is a normal plan. Others who want to wait a year or more before starting college, the gap year could be an entire academic year out in the world beyond the classroom.",
			"respuestas": ["A gap year is used to learn new things","Gap years are always so expensive","A gap year is 12 months","Gap years are common in Asia"],
			"resultado": "",
			"subtema_id": "421",
			"tema_id": "14",
			"tipo": "m_option",
			"tipo_para_bd": "2",
			"titulo": "Choose the RIGHT answers"
		},
		{
			"area_id": "1",
			"categoria": "trinity",
			"correcta": [],
			"drag": "Taking a gap year is considered_!_common_!!_in Europe and Australia. <br />It is believed that a gap year_!_provides_!!_an opportunity for students<br />A gap year can be _!_short_!!_like 3 months or an entire year<br />Gap years may help _!_build_!!_an education outside the classroom",
			"id_preguinta": "727",
			"idioma_id": "1",
			"nivel_id": "1",
			"pregunta": "A gap year is a year students take between high school and college to travel, explore interests, and build an education outside of the classroom. It is quite common in Europe and Australia. The gap year provides an opportunity for students who are  tired with the traditional education process after high school and would like time to relax and have fun. Gap years are used to figure out what they might like to do, and learn new things. It doesn&rsquo;t have to be a whole year. A gap experience might be as short as three months, or even a semester. For students starting college in January, a gap semester is a normal plan. Others who want to wait a year or more before starting college, the gap year could be an entire academic year out in the world beyond the classroom.",
			"respuestas": ["build","academic","common","used","provides","short"],
			"resultado": "",
			"subtema_id": "421",
			"tema_id": "14",
			"tipo": "drag",
			"tipo_para_bd": "3",
			"titulo": "Fill the gaps"
		},
		{
			"area_id": "1",
			"categoria": "trinity",
			"correcta": [1,0,0,0],
			"drag": "",
			"id_preguinta": "737",
			"idioma_id": "1",
			"nivel_id": "1",
			"pregunta": "Google has invented app for people to give $1 to charities. Its 'One Today' app shows many charities every day. When you open the app, you will see several projects to which you can donate $1 with one click. Google believe that most people can afford the occasional $1 donation. It is only in the USA but Google hopes it will be worldwide. They look forward to continuing to improve and to grow their dynamic community. The One Today website said Google has always supported non-profits and that One Today makes fundraising easy for them. It also makes giving simple and fun. People can learn more about non-profits, and share their favorite projects. Google asked people to &quot;do good daily&quot; and help hundreds of charities be successful. Google is amazed by the great work non-profits do every day to make the world better. It is happy the app can help people give to charity.",
			"respuestas": ["Google's donation app","Google has always supported non-profits","It makes giving simple and fun","Only in the USA"],
			"resultado": "",
			"subtema_id": "425",
			"tema_id": "35",
			"tipo": "tf",
			"tipo_para_bd": "1",
			"titulo": "Choose the RIGHT answer"
		},
			{
			"area_id": "1",
			"categoria": "trinity",
			"correcta": [1,0,0,0],
			"drag": "",
			"id_preguinta": "726",
			"idioma_id": "1",
			"nivel_id": "1",
			"pregunta": "A gap year is a year students take between high school and college to travel, explore interests, and build an education outside of the classroom. It is quite common in Europe and Australia. The gap year provides an opportunity for students who are  tired with the traditional education process after high school and would like time to relax and have fun. Gap years are used to figure out what they might like to do, and learn new things. It doesn&rsquo;t have to be a whole year. A gap experience might be as short as three months, or even a semester. For students starting college in January, a gap semester is a normal plan. Others who want to wait a year or more before starting college, the gap year could be an entire academic year out in the world beyond the classroom.",
			"respuestas": ["A gap year is used to learn new things","Gap years are always so expensive","A gap year is 12 months","Gap years are common in Asia"],
			"resultado": "",
			"subtema_id": "421",
			"tema_id": "14",
			"tipo": "m_option",
			"tipo_para_bd": "2",
			"titulo": "Choose the RIGHT answers"
		},
		{
			"area_id": "1",
			"categoria": "trinity",
			"correcta": [],
			"drag": "Taking a gap year is considered_!_common_!!_in Europe and Australia. <br />It is believed that a gap year_!_provides_!!_an opportunity for students<br />A gap year can be _!_short_!!_like 3 months or an entire year<br />Gap years may help _!_build_!!_an education outside the classroom",
			"id_preguinta": "727",
			"idioma_id": "1",
			"nivel_id": "1",
			"pregunta": "A gap year is a year students take between high school and college to travel, explore interests, and build an education outside of the classroom. It is quite common in Europe and Australia. The gap year provides an opportunity for students who are  tired with the traditional education process after high school and would like time to relax and have fun. Gap years are used to figure out what they might like to do, and learn new things. It doesn&rsquo;t have to be a whole year. A gap experience might be as short as three months, or even a semester. For students starting college in January, a gap semester is a normal plan. Others who want to wait a year or more before starting college, the gap year could be an entire academic year out in the world beyond the classroom.",
			"respuestas": ["build","academic","common","used","provides","short"],
			"resultado": "",
			"subtema_id": "421",
			"tema_id": "14",
			"tipo": "drag",
			"tipo_para_bd": "3",
			"titulo": "Fill the gaps"
		},
		{
			"area_id": "1",
			"categoria": "trinity",
			"correcta": [1,0,0,0],
			"drag": "",
			"id_preguinta": "737",
			"idioma_id": "1",
			"nivel_id": "1",
			"pregunta": "Google has invented app for people to give $1 to charities. Its 'One Today' app shows many charities every day. When you open the app, you will see several projects to which you can donate $1 with one click. Google believe that most people can afford the occasional $1 donation. It is only in the USA but Google hopes it will be worldwide. They look forward to continuing to improve and to grow their dynamic community. The One Today website said Google has always supported non-profits and that One Today makes fundraising easy for them. It also makes giving simple and fun. People can learn more about non-profits, and share their favorite projects. Google asked people to &quot;do good daily&quot; and help hundreds of charities be successful. Google is amazed by the great work non-profits do every day to make the world better. It is happy the app can help people give to charity.",
			"respuestas": ["Google's donation app","Google has always supported non-profits","It makes giving simple and fun","Only in the USA"],
			"resultado": "",
			"subtema_id": "425",
			"tema_id": "35",
			"tipo": "tf",
			"tipo_para_bd": "1",
			"titulo": "Choose the RIGHT answer"
		},
			{
			"area_id": "1",
			"categoria": "trinity",
			"correcta": [1,0,0,0],
			"drag": "",
			"id_preguinta": "726",
			"idioma_id": "1",
			"nivel_id": "1",
			"pregunta": "A gap year is a year students take between high school and college to travel, explore interests, and build an education outside of the classroom. It is quite common in Europe and Australia. The gap year provides an opportunity for students who are  tired with the traditional education process after high school and would like time to relax and have fun. Gap years are used to figure out what they might like to do, and learn new things. It doesn&rsquo;t have to be a whole year. A gap experience might be as short as three months, or even a semester. For students starting college in January, a gap semester is a normal plan. Others who want to wait a year or more before starting college, the gap year could be an entire academic year out in the world beyond the classroom.",
			"respuestas": ["A gap year is used to learn new things","Gap years are always so expensive","A gap year is 12 months","Gap years are common in Asia"],
			"resultado": "",
			"subtema_id": "421",
			"tema_id": "14",
			"tipo": "m_option",
			"tipo_para_bd": "2",
			"titulo": "Choose the RIGHT answers"
		},
		{
			"area_id": "1",
			"categoria": "trinity",
			"correcta": [],
			"drag": "Taking a gap year is considered_!_common_!!_in Europe and Australia. <br />It is believed that a gap year_!_provides_!!_an opportunity for students<br />A gap year can be _!_short_!!_like 3 months or an entire year<br />Gap years may help _!_build_!!_an education outside the classroom",
			"id_preguinta": "727",
			"idioma_id": "1",
			"nivel_id": "1",
			"pregunta": "A gap year is a year students take between high school and college to travel, explore interests, and build an education outside of the classroom. It is quite common in Europe and Australia. The gap year provides an opportunity for students who are  tired with the traditional education process after high school and would like time to relax and have fun. Gap years are used to figure out what they might like to do, and learn new things. It doesn&rsquo;t have to be a whole year. A gap experience might be as short as three months, or even a semester. For students starting college in January, a gap semester is a normal plan. Others who want to wait a year or more before starting college, the gap year could be an entire academic year out in the world beyond the classroom.",
			"respuestas": ["build","academic","common","used","provides","short"],
			"resultado": "",
			"subtema_id": "421",
			"tema_id": "14",
			"tipo": "drag",
			"tipo_para_bd": "3",
			"titulo": "Fill the gaps"
		},
		{
			"area_id": "1",
			"categoria": "trinity",
			"correcta": [1,0,0,0],
			"drag": "",
			"id_preguinta": "737",
			"idioma_id": "1",
			"nivel_id": "1",
			"pregunta": "Google has invented app for people to give $1 to charities. Its 'One Today' app shows many charities every day. When you open the app, you will see several projects to which you can donate $1 with one click. Google believe that most people can afford the occasional $1 donation. It is only in the USA but Google hopes it will be worldwide. They look forward to continuing to improve and to grow their dynamic community. The One Today website said Google has always supported non-profits and that One Today makes fundraising easy for them. It also makes giving simple and fun. People can learn more about non-profits, and share their favorite projects. Google asked people to &quot;do good daily&quot; and help hundreds of charities be successful. Google is amazed by the great work non-profits do every day to make the world better. It is happy the app can help people give to charity.",
			"respuestas": ["Google's donation app","Google has always supported non-profits","It makes giving simple and fun","Only in the USA"],
			"resultado": "",
			"subtema_id": "425",
			"tema_id": "35",
			"tipo": "tf",
			"tipo_para_bd": "1",
			"titulo": "Choose the RIGHT answer"
		},
			{
			"area_id": "1",
			"categoria": "trinity",
			"correcta": [1,0,0,0],
			"drag": "",
			"id_preguinta": "726",
			"idioma_id": "1",
			"nivel_id": "1",
			"pregunta": "A gap year is a year students take between high school and college to travel, explore interests, and build an education outside of the classroom. It is quite common in Europe and Australia. The gap year provides an opportunity for students who are  tired with the traditional education process after high school and would like time to relax and have fun. Gap years are used to figure out what they might like to do, and learn new things. It doesn&rsquo;t have to be a whole year. A gap experience might be as short as three months, or even a semester. For students starting college in January, a gap semester is a normal plan. Others who want to wait a year or more before starting college, the gap year could be an entire academic year out in the world beyond the classroom.",
			"respuestas": ["A gap year is used to learn new things","Gap years are always so expensive","A gap year is 12 months","Gap years are common in Asia"],
			"resultado": "",
			"subtema_id": "421",
			"tema_id": "14",
			"tipo": "m_option",
			"tipo_para_bd": "2",
			"titulo": "Choose the RIGHT answers"
		},
		{
			"area_id": "1",
			"categoria": "trinity",
			"correcta": [],
			"drag": "Taking a gap year is considered_!_common_!!_in Europe and Australia. <br />It is believed that a gap year_!_provides_!!_an opportunity for students<br />A gap year can be _!_short_!!_like 3 months or an entire year<br />Gap years may help _!_build_!!_an education outside the classroom",
			"id_preguinta": "727",
			"idioma_id": "1",
			"nivel_id": "1",
			"pregunta": "A gap year is a year students take between high school and college to travel, explore interests, and build an education outside of the classroom. It is quite common in Europe and Australia. The gap year provides an opportunity for students who are  tired with the traditional education process after high school and would like time to relax and have fun. Gap years are used to figure out what they might like to do, and learn new things. It doesn&rsquo;t have to be a whole year. A gap experience might be as short as three months, or even a semester. For students starting college in January, a gap semester is a normal plan. Others who want to wait a year or more before starting college, the gap year could be an entire academic year out in the world beyond the classroom.",
			"respuestas": ["build","academic","common","used","provides","short"],
			"resultado": "",
			"subtema_id": "421",
			"tema_id": "14",
			"tipo": "drag",
			"tipo_para_bd": "3",
			"titulo": "Fill the gaps"
		},
		{
			"area_id": "1",
			"categoria": "trinity",
			"correcta": [1,0,0,0],
			"drag": "",
			"id_preguinta": "737",
			"idioma_id": "1",
			"nivel_id": "1",
			"pregunta": "Google has invented app for people to give $1 to charities. Its 'One Today' app shows many charities every day. When you open the app, you will see several projects to which you can donate $1 with one click. Google believe that most people can afford the occasional $1 donation. It is only in the USA but Google hopes it will be worldwide. They look forward to continuing to improve and to grow their dynamic community. The One Today website said Google has always supported non-profits and that One Today makes fundraising easy for them. It also makes giving simple and fun. People can learn more about non-profits, and share their favorite projects. Google asked people to &quot;do good daily&quot; and help hundreds of charities be successful. Google is amazed by the great work non-profits do every day to make the world better. It is happy the app can help people give to charity.",
			"respuestas": ["Google's donation app","Google has always supported non-profits","It makes giving simple and fun","Only in the USA"],
			"resultado": "",
			"subtema_id": "425",
			"tema_id": "35",
			"tipo": "tf",
			"tipo_para_bd": "1",
			"titulo": "Choose the RIGHT answer"
		},
			{
			"area_id": "1",
			"categoria": "trinity",
			"correcta": [1,0,0,0],
			"drag": "",
			"id_preguinta": "726",
			"idioma_id": "1",
			"nivel_id": "1",
			"pregunta": "A gap year is a year students take between high school and college to travel, explore interests, and build an education outside of the classroom. It is quite common in Europe and Australia. The gap year provides an opportunity for students who are  tired with the traditional education process after high school and would like time to relax and have fun. Gap years are used to figure out what they might like to do, and learn new things. It doesn&rsquo;t have to be a whole year. A gap experience might be as short as three months, or even a semester. For students starting college in January, a gap semester is a normal plan. Others who want to wait a year or more before starting college, the gap year could be an entire academic year out in the world beyond the classroom.",
			"respuestas": ["A gap year is used to learn new things","Gap years are always so expensive","A gap year is 12 months","Gap years are common in Asia"],
			"resultado": "",
			"subtema_id": "421",
			"tema_id": "14",
			"tipo": "m_option",
			"tipo_para_bd": "2",
			"titulo": "Choose the RIGHT answers"
		},
		{
			"area_id": "1",
			"categoria": "trinity",
			"correcta": [],
			"drag": "Taking a gap year is considered_!_common_!!_in Europe and Australia. <br />It is believed that a gap year_!_provides_!!_an opportunity for students<br />A gap year can be _!_short_!!_like 3 months or an entire year<br />Gap years may help _!_build_!!_an education outside the classroom",
			"id_preguinta": "727",
			"idioma_id": "1",
			"nivel_id": "1",
			"pregunta": "A gap year is a year students take between high school and college to travel, explore interests, and build an education outside of the classroom. It is quite common in Europe and Australia. The gap year provides an opportunity for students who are  tired with the traditional education process after high school and would like time to relax and have fun. Gap years are used to figure out what they might like to do, and learn new things. It doesn&rsquo;t have to be a whole year. A gap experience might be as short as three months, or even a semester. For students starting college in January, a gap semester is a normal plan. Others who want to wait a year or more before starting college, the gap year could be an entire academic year out in the world beyond the classroom.",
			"respuestas": ["build","academic","common","used","provides","short"],
			"resultado": "",
			"subtema_id": "421",
			"tema_id": "14",
			"tipo": "drag",
			"tipo_para_bd": "3",
			"titulo": "Fill the gaps"
		},
		{
			"area_id": "1",
			"categoria": "trinity",
			"correcta": [1,0,0,0],
			"drag": "",
			"id_preguinta": "737",
			"idioma_id": "1",
			"nivel_id": "1",
			"pregunta": "Google has invented app for people to give $1 to charities. Its 'One Today' app shows many charities every day. When you open the app, you will see several projects to which you can donate $1 with one click. Google believe that most people can afford the occasional $1 donation. It is only in the USA but Google hopes it will be worldwide. They look forward to continuing to improve and to grow their dynamic community. The One Today website said Google has always supported non-profits and that One Today makes fundraising easy for them. It also makes giving simple and fun. People can learn more about non-profits, and share their favorite projects. Google asked people to &quot;do good daily&quot; and help hundreds of charities be successful. Google is amazed by the great work non-profits do every day to make the world better. It is happy the app can help people give to charity.",
			"respuestas": ["Google's donation app","Google has always supported non-profits","It makes giving simple and fun","Only in the USA"],
			"resultado": "",
			"subtema_id": "425",
			"tema_id": "35",
			"tipo": "tf",
			"tipo_para_bd": "1",
			"titulo": "Choose the RIGHT answer"
		},
			{
			"area_id": "1",
			"categoria": "trinity",
			"correcta": [1,0,0,0],
			"drag": "",
			"id_preguinta": "726",
			"idioma_id": "1",
			"nivel_id": "1",
			"pregunta": "A gap year is a year students take between high school and college to travel, explore interests, and build an education outside of the classroom. It is quite common in Europe and Australia. The gap year provides an opportunity for students who are  tired with the traditional education process after high school and would like time to relax and have fun. Gap years are used to figure out what they might like to do, and learn new things. It doesn&rsquo;t have to be a whole year. A gap experience might be as short as three months, or even a semester. For students starting college in January, a gap semester is a normal plan. Others who want to wait a year or more before starting college, the gap year could be an entire academic year out in the world beyond the classroom.",
			"respuestas": ["A gap year is used to learn new things","Gap years are always so expensive","A gap year is 12 months","Gap years are common in Asia"],
			"resultado": "",
			"subtema_id": "421",
			"tema_id": "14",
			"tipo": "m_option",
			"tipo_para_bd": "2",
			"titulo": "Choose the RIGHT answers"
		},
		{
			"area_id": "1",
			"categoria": "trinity",
			"correcta": [],
			"drag": "Taking a gap year is considered_!_common_!!_in Europe and Australia. <br />It is believed that a gap year_!_provides_!!_an opportunity for students<br />A gap year can be _!_short_!!_like 3 months or an entire year<br />Gap years may help _!_build_!!_an education outside the classroom",
			"id_preguinta": "727",
			"idioma_id": "1",
			"nivel_id": "1",
			"pregunta": "A gap year is a year students take between high school and college to travel, explore interests, and build an education outside of the classroom. It is quite common in Europe and Australia. The gap year provides an opportunity for students who are  tired with the traditional education process after high school and would like time to relax and have fun. Gap years are used to figure out what they might like to do, and learn new things. It doesn&rsquo;t have to be a whole year. A gap experience might be as short as three months, or even a semester. For students starting college in January, a gap semester is a normal plan. Others who want to wait a year or more before starting college, the gap year could be an entire academic year out in the world beyond the classroom.",
			"respuestas": ["build","academic","common","used","provides","short"],
			"resultado": "",
			"subtema_id": "421",
			"tema_id": "14",
			"tipo": "drag",
			"tipo_para_bd": "3",
			"titulo": "Fill the gaps"
		},
		{
			"area_id": "1",
			"categoria": "trinity",
			"correcta": [1,0,0,0],
			"drag": "",
			"id_preguinta": "737",
			"idioma_id": "1",
			"nivel_id": "1",
			"pregunta": "Google has invented app for people to give $1 to charities. Its 'One Today' app shows many charities every day. When you open the app, you will see several projects to which you can donate $1 with one click. Google believe that most people can afford the occasional $1 donation. It is only in the USA but Google hopes it will be worldwide. They look forward to continuing to improve and to grow their dynamic community. The One Today website said Google has always supported non-profits and that One Today makes fundraising easy for them. It also makes giving simple and fun. People can learn more about non-profits, and share their favorite projects. Google asked people to &quot;do good daily&quot; and help hundreds of charities be successful. Google is amazed by the great work non-profits do every day to make the world better. It is happy the app can help people give to charity.",
			"respuestas": ["Google's donation app","Google has always supported non-profits","It makes giving simple and fun","Only in the USA"],
			"resultado": "",
			"subtema_id": "425",
			"tema_id": "35",
			"tipo": "tf",
			"tipo_para_bd": "1",
			"titulo": "Choose the RIGHT answer"
		}];
}
function recargar_preguntas_smiles_2()
{
window.parent.smile_datos.preguntas=[];  
window.parent.smile_datos.preguntas.push({"id_preguinta": "726", "area_id": "1", "idioma_id": "1", "nivel_id": "1", "tema_id": "14", "subtema_id": "421", "categoria": "trinity", "tipo_para_bd": "2", "tipo": "m_option", "titulo": "Choose the RIGHT answers", "pregunta": "A gap year is a year students take between high school and college to travel, explore interests, and build an education outside of the classroom. It is quite common in Europe and Australia. The gap year provides an opportunity for students who are tired with the traditional education process after high school and would like time to relax and have fun. Gap years are used to figure out what they might like to do, and learn new things. It doesn’t have to be a whole year. A gap experience might be as short as three months, or even a semester. For students starting college in January, a gap semester is a normal plan. Others who want to wait a year or more before starting college, the gap year could be an entire academic year out in the world beyond the classroom.", "respuestas": ["A gap year is used to learn new things","Gap years are always so expensive","A gap year is 12 months","Gap years are common in Asia"], "correcta": [1,0,0,0], "drag": "", "resultado": ""});  
window.parent.smile_datos.preguntas.push({"id_preguinta": "727", "area_id": "1", "idioma_id": "1", "nivel_id": "1", "tema_id": "14", "subtema_id": "421", "categoria": "trinity", "tipo_para_bd": "3", "tipo": "drag", "titulo": "Fill the gaps", "pregunta": "A gap year is a year students take between high school and college to travel, explore interests, and build an education outside of the classroom. It is quite common in Europe and Australia. The gap year provides an opportunity for students who are tired with the traditional education process after high school and would like time to relax and have fun. Gap years are used to figure out what they might like to do, and learn new things. It doesn’t have to be a whole year. A gap experience might be as short as three months, or even a semester. For students starting college in January, a gap semester is a normal plan. Others who want to wait a year or more before starting college, the gap year could be an entire academic year out in the world beyond the classroom.", "respuestas": ["build","academic","common","used","provides","short"], "correcta": [], "drag": "Taking a gap year is considered_!_common_!!_in Europe and Australia. It is believed that a gap year_!_provides_!!_an opportunity for students A gap year can be _!_short_!!_like 3 months or an entire yearGap years may help _!_build_!!_an education outside the classroom", "resultado": ""}); 
window.parent.smile_datos.preguntas.push({"id_preguinta": "737", "area_id": "1", "idioma_id": "1", "nivel_id": "1", "tema_id": "35", "subtema_id": "425", "categoria": "trinity", "tipo_para_bd": "1", "tipo": "tf", "titulo": "Choose the RIGHT answer", "pregunta": "Google has invented app for people to give $1 to charities. Its \'One Today\' app shows many charities every day. When you open the app, you will see several projects to which you can donate $1 with one click. Google believe that most people can afford the occasional $1 donation. It is only in the USA but Google hopes it will be worldwide. They look forward to continuing to improve and to grow their dynamic community. The One Today website said Google has always supported non-profits and that One Today makes fundraising easy for them. It also makes giving simple and fun. People can learn more about non-profits, and share their favorite projects. Google asked people to do good daily and help hundreds of charities be successful. Google is amazed by the great work non-profits do every day to make the world better. It is happy the app can help people give to charity.", "respuestas": ["Google\'s donation app","Google has always supported non-profits","It makes giving simple and fun","Only in the USA"], "correcta": [1,0,0,0], "drag": "", "resultado": ""}); 
window.parent.smile_datos.preguntas.push({"id_preguinta": "738", "area_id": "1", "idioma_id": "1", "nivel_id": "1", "tema_id": "35", "subtema_id": "425", "categoria": "trinity", "tipo_para_bd": "2", "tipo": "m_option", "titulo": "Choose the RIGHT answers", "pregunta": "Google has invented app for people to give $1 to charities. Its \'One Today\' app shows many charities every day. When you open the app, you will see several projects to which you can donate $1 with one click. Google believe that most people can afford the occasional $1 donation. It is only in the USA but Google hopes it will be worldwide. They look forward to continuing to improve and to grow their dynamic community. The One Today website said Google has always supported non-profits and that One Today makes fundraising easy for them. It also makes giving simple and fun. People can learn more about non-profits, and share their favorite projects. Google asked people to do good daily and help hundreds of charities be successful. Google is amazed by the great work non-profits do every day to make the world better. It is happy the app can help people give to charity.", "respuestas": ["The app was invented by Apple","The app is for people to donate $1 to charity ","The app only shows one charity ","It is currently available all over the world"], "correcta": [0,1,0,0], "drag": "", "resultado": ""}); 
window.parent.smile_datos.preguntas.push({"id_preguinta": "739", "area_id": "1", "idioma_id": "1", "nivel_id": "1", "tema_id": "35", "subtema_id": "425", "categoria": "trinity", "tipo_para_bd": "3", "tipo": "drag", "titulo": "Fill the gaps", "pregunta": "Google has invented app for people to give $1 to charities. Its \'One Today\' app shows many charities every day. When you open the app, you will see several projects to which you can donate $1 with one click. Google believe that most people can afford the occasional $1 donation. It is only in the USA but Google hopes it will be worldwide. They look forward to continuing to improve and to grow their dynamic community. The One Today website said Google has always supported non-profits and that One Today makes fundraising easy for them. It also makes giving simple and fun. People can learn more about non-profits, and share their favorite projects. Google asked people to do good daily and help hundreds of charities be successful. Google is amazed by the great work non-profits do every day to make the world better. It is happy the app can help people give to charity.", "respuestas": ["grow","improve","amazed","donate","afford","learn"], "correcta": [], "drag": "You will be able to _!_donate_!!_$1 with a click of a button People can_!_learn_!!_more about non-profits and projects. Google is _!_amazed_!!_by the hard work done by charities. Google thinks many people can _!_afford_!!_to donate money. ", "resultado": ""}); 
window.parent.smile_datos.preguntas.push({"id_preguinta": "766", "area_id": "1", "idioma_id": "1", "nivel_id": "1", "tema_id": "32", "subtema_id": "430", "categoria": "trinity", "tipo_para_bd": "1", "tipo": "tf", "titulo": "Choose the RIGHT answer", "pregunta": "Not that long ago, air pollution from burning coal made the “Windy City” (Chicago) very dirty. If you look at old photographs of Chicago, many buildings were black from the soot from coal furnaces and factories all over the city. Today however, Chicago’s skyline is clean and clear. Only old photographs show how it used to be before. During the Industrial Age, a lot of smoke pollution was considered as a good thing because it meant that the city was working. It reflected the cities industrial success. Eventually, the people realized that it was just too much. Some days, pollution turned the sky so dark that it seemed as if day was night. The smoke was ruining clothing, blackening buildings, and making the people of Chicago sick. Some days were so bad that airplanes couldn’t take off. Today, we can see a similar situation in countries India and China where coal is still used a lot. ", "respuestas": ["Chicago\'s pollution fight","Old photographs of Chicago","Smoke pollution ","During the industrial age"], "correcta": [1,0,0,0], "drag": "", "resultado": ""});  
window.parent.smile_datos.preguntas.push({"id_preguinta": "767", "area_id": "1", "idioma_id": "1", "nivel_id": "1", "tema_id": "32", "subtema_id": "430", "categoria": "trinity", "tipo_para_bd": "2", "tipo": "m_option", "titulo": "Choose the RIGHT answers", "pregunta": "Not that long ago, air pollution from burning coal made the “Windy City” (Chicago) very dirty. If you look at old photographs of Chicago, many buildings were black from the soot from coal furnaces and factories all over the city. Today however, Chicago’s skyline is clean and clear. Only old photographs show how it used to be before. During the Industrial Age, a lot of smoke pollution was considered as a good thing because it meant that the city was working. It reflected the cities industrial success. Eventually, the people realized that it was just too much. Some days, pollution turned the sky so dark that it seemed as if day was night. The smoke was ruining clothing, blackening buildings, and making the people of Chicago sick. Some days were so bad that airplanes couldn’t take off. Today, we can see a similar situation in countries India and China where coal is still used a lot. ", "respuestas": ["Today Chicago\'s buildings are black from soot","Smoke pollution is considered a good thing","Today there is a similar situation in China","Air pollution is clean "], "correcta": [0,0,1,0], "drag": "", "resultado": ""});  
window.parent.smile_datos.preguntas.push({"id_preguinta": "768", "area_id": "1", "idioma_id": "1", "nivel_id": "1", "tema_id": "32", "subtema_id": "430", "categoria": "trinity", "tipo_para_bd": "3", "tipo": "drag", "titulo": "Fill the gaps", "pregunta": "Not that long ago, air pollution from burning coal made the “Windy City” (Chicago) very dirty. If you look at old photographs of Chicago, many buildings were black from the soot from coal furnaces and factories all over the city. Today however, Chicago’s skyline is clean and clear. Only old photographs show how it used to be before. During the Industrial Age, a lot of smoke pollution was considered as a good thing because it meant that the city was working. It reflected the cities industrial success. Eventually, the people realized that it was just too much. Some days, pollution turned the sky so dark that it seemed as if day was night. The smoke was ruining clothing, blackening buildings, and making the people of Chicago sick. Some days were so bad that airplanes couldn’t take off. Today, we can see a similar situation in countries India and China where coal is still used a lot. ", "respuestas": ["black","considered ","clean","seemed","turned ","show","smoke "], "correcta": [], "drag": "Chicago\'s sky today is_!_clean_!!_and clear. Old pictures still _!_show_!!_how dirty is was before Smoke used to be_!_considered _!!_good in olden days The sky_!_turned _!!_the sky dark", "resultado": ""});  
window.parent.smile_datos.preguntas.push({"id_preguinta": "802", "area_id": "1", "idioma_id": "1", "nivel_id": "1", "tema_id": "36", "subtema_id": "442", "categoria": "trinity", "tipo_para_bd": "1", "tipo": "tf", "titulo": "Choose the RIGHT answer", "pregunta": "More than 40 years ago, two Americans landed on the moon and walked on its surface. Now, NASA is trying to do it again with Constellation, a new project to return humans to the moon by 2020. Some wonder why it is taking so long and why it is so difficult to go back. By 2020, 16 years will have passed since NASA launched its new moon-bound vision in 2004. The goal this time is significantly larger from last time. The goal last time was just to arrive safely, put the American flag down and leave safely. This time they want to spend a longer time in space and not just visit the moon for hours or days at most. Astronauts will embark on missions that could last months. They will need new tools and technologies for living on the moon, and must construct habitats on the moon. Besides the challenge of designing these systems, NASA must build a spaceship than can transport all the extra supplies.", "respuestas": ["NASA trying to go to the moon again","Astronauts will go on a mission","NASA must build a spaceship","Spending a longer time in space"], "correcta": [1,0,0,0], "drag": "", "resultado": ""});  
window.parent.smile_datos.preguntas.push({"id_preguinta": "803", "area_id": "1", "idioma_id": "1", "nivel_id": "1", "tema_id": "36", "subtema_id": "442", "categoria": "trinity", "tipo_para_bd": "2", "tipo": "m_option", "titulo": "Choose the RIGHT answers", "pregunta": "More than 40 years ago, two Americans landed on the moon and walked on its surface. Now, NASA is trying to do it again with Constellation, a new project to return humans to the moon by 2020. Some wonder why it is taking so long and why it is so difficult to go back. By 2020, 16 years will have passed since NASA launched its new moon-bound vision in 2004. The goal this time is significantly larger from last time. The goal last time was just to arrive safely, put the American flag down and leave safely. This time they want to spend a longer time in space and not just visit the moon for hours or days at most. Astronauts will embark on missions that could last months. They will need new tools and technologies for living on the moon, and must construct habitats on the moon. Besides the challenge of designing these systems, NASA must build a spaceship than can transport all the extra supplies.", "respuestas": ["Astronauts will go to the moon for one day","NASA went to the moon in 2004","It has been 4 years since the moon landing","The goal is larger than last time"], "correcta": [0,0,0,1], "drag": "", "resultado": ""});  
window.parent.smile_datos.preguntas.push({"id_preguinta": "804", "area_id": "1", "idioma_id": "1", "nivel_id": "1", "tema_id": "36", "subtema_id": "442", "categoria": "trinity", "tipo_para_bd": "3", "tipo": "drag", "titulo": "Fill the gaps", "pregunta": "More than 40 years ago, two Americans landed on the moon and walked on its surface. Now, NASA is trying to do it again with Constellation, a new project to return humans to the moon by 2020. Some wonder why it is taking so long and why it is so difficult to go back. By 2020, 16 years will have passed since NASA launched its new moon-bound vision in 2004. The goal this time is significantly larger from last time. The goal last time was just to arrive safely, put the American flag down and leave safely. This time they want to spend a longer time in space and not just visit the moon for hours or days at most. Astronauts will embark on missions that could last months. They will need new tools and technologies for living on the moon, and must construct habitats on the moon. Besides the challenge of designing these systems, NASA must build a spaceship than can transport all the extra supplies.", "respuestas": ["landed","living","transport ","trying","return ","larger"], "correcta": [], "drag": "The goal this time is significantly_!_larger_!!_from last time. Two Americans_!_landed_!!_and walked on the moon in 1969 A spaceship will need to be built to _!_transport _!!_extra supplies NASA wants to _!_return _!!_humans to the moon", "resultado": ""});  
window.parent.smile_datos.preguntas.push({"id_preguinta": "590", "area_id": "1", "idioma_id": "1", "nivel_id": "1", "tema_id": "24", "subtema_id": "362", "categoria": "trinity", "tipo_para_bd": "1", "tipo": "tf", "titulo": "Choose the RIGHT answer", "pregunta": "Last month 14 year old Miguel Diaz got the chance to take part in an underwater research project in an area of the Gulf of Mexico called the Flower Gardens. A team of professional researchers, led by the scientist Dr. Matt Phillips, was trying to learn more about the fish and various creatures that live in this part of the sea. The Flower Gardens are a long way from the shore and they spent three days on a boat. The team used a piece of underwater equipment called a Remotely Operated Vehicle (ROV) to collect information. The ROV could measure water depth and temperature and it also had a camera that sent live film back to the boat. The ROV was great fun. It was controlled by a computer on the boat, and Miguel was allowed to operate it a few times. However, the thing Miguel enjoyed most was diving into the water. At first, he was quite frightened mainly because he couldn’t see land in any direction. But as soon as he jumped into the water, he wasn’t afraid anymore. It was amazing to see the colourful fish swimming around and he could see all the way to the Flower Gardens, which are almost 30 metres down. Miguel will never forget the Flower Gardens. The trip was like a holiday but he also learnt new things about science and research projects. The team was very friendly and everyone was happy to explain what they knew about the sea. It was a great opportunity and it has made Miguel think about his goals in life. The experience will definitely help him work harder to become a scientist.", "respuestas": ["What does Miguel say about the ROV?","Happening underwater ","Becoming a scientist","It could only go so far","An expensive piece of equipment "], "correcta": [0,0,1,0,0], "drag": "", "resultado": ""});  
window.parent.smile_datos.preguntas.push({"id_preguinta": "591", "area_id": "1", "idioma_id": "1", "nivel_id": "1", "tema_id": "24", "subtema_id": "362", "categoria": "trinity", "tipo_para_bd": "2", "tipo": "m_option", "titulo": "Choose the RIGHT answers", "pregunta": "Last month 14 year old Miguel Diaz got the chance to take part in an underwater research project in an area of the Gulf of Mexico called the Flower Gardens. A team of professional researchers, led by the scientist Dr. Matt Phillips, was trying to learn more about the fish and various creatures that live in this part of the sea. The Flower Gardens are a long way from the shore and they spent three days on a boat. The team used a piece of underwater equipment called a Remotely Operated Vehicle (ROV) to collect information. The ROV could measure water depth and temperature and it also had a camera that sent live film back to the boat. The ROV was great fun. It was controlled by a computer on the boat, and Miguel was allowed to operate it a few times. However, the thing Miguel enjoyed most was diving into the water. At first, he was quite frightened mainly because he couldn’t see land in any direction. But as soon as he jumped into the water, he wasn’t afraid anymore. It was amazing to see the colourful fish swimming around and he could see all the way to the Flower Gardens, which are almost 30 metres down. Miguel will never forget the Flower Gardens. The trip was like a holiday but he also learnt new things about science and research projects. The team was very friendly and everyone was happy to explain what they knew about the sea. It was a great opportunity and it has made Miguel think about his goals in life. The experience will definitely help him work harder to become a scientist.", "respuestas": ["Miguel enjoyed diving less than other parts of the trip ","Miguel\'s feelings towards diving changed once he was in the water ","The trip was a waste of time and Miguel didn\'t have fun","They spent 3 months on the boat"], "correcta": [0,1,0,0], "drag": "", "resultado": ""});  
window.parent.smile_datos.preguntas.push({"id_preguinta": "592", "area_id": "1", "idioma_id": "1", "nivel_id": "1", "tema_id": "24", "subtema_id": "362", "categoria": "trinity", "tipo_para_bd": "3", "tipo": "drag", "titulo": "Fill the gaps", "pregunta": "Last month 14 year old Miguel Diaz got the chance to take part in an underwater research project in an area of the Gulf of Mexico called the Flower Gardens. A team of professional researchers, led by the scientist Dr. Matt Phillips, was trying to learn more about the fish and various creatures that live in this part of the sea. The Flower Gardens are a long way from the shore and they spent three days on a boat. The team used a piece of underwater equipment called a Remotely Operated Vehicle (ROV) to collect information. The ROV could measure water depth and temperature and it also had a camera that sent live film back to the boat. The ROV was great fun. It was controlled by a computer on the boat, and Miguel was allowed to operate it a few times. However, the thing Miguel enjoyed most was diving into the water. At first, he was quite frightened mainly because he couldn’t see land in any direction. But as soon as he jumped into the water, he wasn’t afraid anymore. It was amazing to see the colourful fish swimming around and he could see all the way to the Flower Gardens, which are almost 30 metres down. Miguel will never forget the Flower Gardens. The trip was like a holiday but he also learnt new things about science and research projects. The team was very friendly and everyone was happy to explain what they knew about the sea. It was a great opportunity and it has made Miguel think about his goals in life. The experience will definitely help him work harder to become a scientist.", "respuestas": ["friendly ","trying","frightened","measure","shore","diving"], "correcta": [], "drag": "The research area was far from the_!_shore_!!_. The other people were_!_friendly _!!_and happy. The ROV was able to _!_measure_!!_temperature and water depth Miguel enjoyed _!_diving_!!_the most. ", "resultado": ""});  
window.parent.smile_datos.preguntas.push({"id_preguinta": "616", "area_id": "1", "idioma_id": "1", "nivel_id": "1", "tema_id": "8", "subtema_id": "370", "categoria": "trinity", "tipo_para_bd": "1", "tipo": "tf", "titulo": "Choose the RIGHT answer", "pregunta": "Around 100 participants stripped to their underwear and ran 100 meters to win free clothes in Paris. After the race in cold weather, the shoppers were given one hour to browse the shop and choose two items. People seemed to enjoy themselves and they were happy to get some clothes for free. The event was organized by a Spanish clothing brand. Events like this have taken place in other big cities as well. In France, winter sales are controlled by the government. There are official start dates and end dates.", "respuestas": ["100 people in underwear","Naked shoppers in France ","A Spanish clothing brand","Winter sales in France"], "correcta": [0,0,0,0], "drag": "", "resultado": ""});  
window.parent.smile_datos.preguntas.push({"id_preguinta": "617", "area_id": "1", "idioma_id": "1", "nivel_id": "1", "tema_id": "8", "subtema_id": "370", "categoria": "trinity", "tipo_para_bd": "2", "tipo": "m_option", "titulo": "Choose the RIGHT answers", "pregunta": "Around 100 participants stripped to their underwear and ran 100 meters to win free clothes in Paris. After the race in cold weather, the shoppers were given one hour to browse the shop and choose two items. People seemed to enjoy themselves and they were happy to get some clothes for free. The event was organized by a Spanish clothing brand. Events like this have taken place in other big cities as well. In France, winter sales are controlled by the government. There are official start dates and end dates.", "respuestas": ["Participants ran to win free clothes in Spain ","Sales in France occur all winter ","People stripped completely naked","Shoppers were given one hour to choose their clothes"], "correcta": [0,0,0,1], "drag": "", "resultado": ""}); 
window.parent.smile_datos.preguntas.push({"id_preguinta": "618", "area_id": "1", "idioma_id": "1", "nivel_id": "1", "tema_id": "8", "subtema_id": "370", "categoria": "trinity", "tipo_para_bd": "3", "tipo": "drag", "titulo": "Fill the gaps", "pregunta": "Around 100 participants stripped to their underwear and ran 100 meters to win free clothes in Paris. After the race in cold weather, the shoppers were given one hour to browse the shop and choose two items. People seemed to enjoy themselves and they were happy to get some clothes for free. The event was organized by a Spanish clothing brand. Events like this have taken place in other big cities as well. In France, winter sales are controlled by the government. There are official start dates and end dates. ", "respuestas": ["Spanish ","enjoy","France","controlled","hour","choose"], "correcta": [], "drag": "People seemed to_!_enjoy_!!_themselves and they were happy to get some clothes for free. Shoppers had one _!_hour_!!_to choose items from the shop. It was organized by a _!_Spanish _!!_fashion brand. The sales in France are _!_controlled_!!_by the government. ", "resultado": ""});  
window.parent.smile_datos.preguntas.push({"id_preguinta": "693", "area_id": "1", "idioma_id": "1", "nivel_id": "1", "tema_id": "16", "subtema_id": "409", "categoria": "trinity", "tipo_para_bd": "1", "tipo": "tf", "titulo": "Choose the RIGHT answer", "pregunta": "American singer Beyoncé had suprised her fans. She released her new album without advertising it or telling anyone. It is one of the biggest secrets in music history. She wanted to tell her fans herself. She did not want her record company to tell them. It was also a surprise for other singers. She said she didn\'t want anybody to talk about her new record before she did. Beyoncé’s new album was only on iTunes. People could only download it from that site. It has 14 new songs and 17 videos. She wanted to do something that people would remember. She said was very excited when she first saw Michael Jackson\'s Thriller video. She wanted to do something similar. Her album sold 80,000 copies in the first three hours. Millions of people tweeted about it. There were more than 1.2 million tweets in the first 12 hours.", "respuestas": ["She wanted to tell her fans herself","Beyonce releases a secret album","Millions of people tweeting","Michael Jackson\'s Thriller video"], "correcta": [0,1,0,0], "drag": "", "resultado": ""});  
window.parent.smile_datos.preguntas.push({"id_preguinta": "694", "area_id": "1", "idioma_id": "1", "nivel_id": "1", "tema_id": "16", "subtema_id": "409", "categoria": "trinity", "tipo_para_bd": "2", "tipo": "m_option", "titulo": "Choose the RIGHT answers", "pregunta": "American singer Beyoncé had suprised her fans. She released her new album without advertising it or telling anyone. It is one of the biggest secrets in music history. She wanted to tell her fans herself. She did not want her record company to tell them. It was also a surprise for other singers. She said she didn\'t want anybody to talk about her new record before she did. Beyoncé’s new album was only on iTunes. People could only download it from that site. It has 14 new songs and 17 videos. She wanted to do something that people would remember. She said was very excited when she first saw Michael Jackson\'s Thriller video. She wanted to do something similar. Her album sold 80,000 copies in the first three hours. Millions of people tweeted about it. There were more than 1.2 million tweets in the first 12 hours.", "respuestas": ["Other singers congratulated Beyonce","Beyonce did not want her record company to release her new album","People could only download the album on Itunes","Beyonces fans were not surprised"], "correcta": [0,0,1,0], "drag": "", "resultado": ""});  
window.parent.smile_datos.preguntas.push({"id_preguinta": "695", "area_id": "1", "idioma_id": "1", "nivel_id": "1", "tema_id": "16", "subtema_id": "409", "categoria": "trinity", "tipo_para_bd": "3", "tipo": "drag", "titulo": "Fill the gaps", "pregunta": "American singer Beyoncé had suprised her fans. She released her new album without advertising it or telling anyone. It is one of the biggest secrets in music history. She wanted to tell her fans herself. She did not want her record company to tell them. It was also a surprise for other singers. She said she didn\'t want anybody to talk about her new record before she did. Beyoncé’s new album was only on iTunes. People could only download it from that site. It has 14 new songs and 17 videos. She wanted to do something that people would remember. She said was very excited when she first saw Michael Jackson\'s Thriller video. She wanted to do something similar. Her album sold 80,000 copies in the first three hours. Millions of people tweeted about it. There were more than 1.2 million tweets in the first 12 hours.", "respuestas": ["record","tell ","suprised ","download","talk ","released"], "correcta": [], "drag": "She wanted to_!_tell _!!_her fans herself. Fans could only _!_download_!!_the album from iTunes Other singers were also_!_suprised _!!_by the album release Beyonce did not want people to _!_talk _!!_about her album before she did", "resultado": ""});  
window.parent.smile_datos.preguntas.push({"id_preguinta": "715", "area_id": "1", "idioma_id": "1", "nivel_id": "1", "tema_id": "11", "subtema_id": "418", "categoria": "trinity", "tipo_para_bd": "1", "tipo": "tf", "titulo": "Choose the RIGHT answer", "pregunta": "According to a new report from the Council for Textile Recycling, the average person throws away 70 pounds (lbs.) of clothing every year, which for example equals to 191 T-shirts per person. For the United States as a whole, that’s approximately 3.8 billion pounds (lbs.) of waste in clothes. The Village of Mamaroneck has launched its new Textiles Recycling Program and is looking for old, shabby, stained clothes, linens, blankets, rags, towels, curtains and even socks with holes in them, as well as shoes, handbags, belts, and gloves. They are accepting everything that is usually too used to donate to a charity. The clothes can be dropped off at the Village of Mamaroneck Textiles Recycling Station located in the carpark on Boston Post Road. The donated material will be recycled into useful products and will also decrease our waste-disposal costs.", "respuestas": ["The Textiles Recycling Program ","Carpark on Boston Road","Socks with holes in them ","The village of Mamaroneck"], "correcta": [0,0,0,0], "drag": "", "resultado": ""});  
window.parent.smile_datos.preguntas.push({"id_preguinta": "716", "area_id": "1", "idioma_id": "1", "nivel_id": "1", "tema_id": "11", "subtema_id": "418", "categoria": "trinity", "tipo_para_bd": "2", "tipo": "m_option", "titulo": "Choose the RIGHT answers", "pregunta": "According to a new report from the Council for Textile Recycling, the average person throws away 70 pounds (lbs.) of clothing every year, which for example equals to 191 T-shirts per person. For the United States as a whole, that’s approximately 3.8 billion pounds (lbs.) of waste in clothes. The Village of Mamaroneck has launched its new Textiles Recycling Program and is looking for old, shabby, stained clothes, linens, blankets, rags, towels, curtains and even socks with holes in them, as well as shoes, handbags, belts, and gloves. They are accepting everything that is usually too used to donate to a charity. The clothes can be dropped off at the Village of Mamaroneck Textiles Recycling Station located in the carpark on Boston Post Road. The donated material will be recycled into useful products and will also decrease our waste-disposal costs.", "respuestas": ["The clothes can be dropped off anywhere","The material will be recycled into curtains ","The program accepts used underwear","The average person throws away 191 t-shirts every year"], "correcta": [0,0,0,1], "drag": "", "resultado": ""});  
window.parent.smile_datos.preguntas.push({"id_preguinta": "718", "area_id": "1", "idioma_id": "1", "nivel_id": "1", "tema_id": "11", "subtema_id": "418", "categoria": "trinity", "tipo_para_bd": "3", "tipo": "drag", "titulo": "Fill the gaps", "pregunta": "According to a new report from the Council for Textile Recycling, the average person throws away 70 pounds (lbs.) of clothing every year, which for example equals to 191 T-shirts per person. For the United States as a whole, that’s approximately 3.8 billion pounds (lbs.) of waste in clothes. The Village of Mamaroneck has launched its new Textiles Recycling Program and is looking for old, shabby, stained clothes, linens, blankets, rags, towels, curtains and even socks with holes in them, as well as shoes, handbags, belts, and gloves. They are accepting everything that is usually too used to donate to a charity. The clothes can be dropped off at the Village of Mamaroneck Textiles Recycling Station located in the carpark on Boston Post Road. The donated material will be recycled into useful products and will also decrease our waste-disposal costs.", "respuestas": ["accepting","looking","dropped","recycled","clothing ","located"], "correcta": [], "drag": "The program is _!_accepting_!!_everything The donated clothes will be _!_recycled_!!_into other useful things Clothes can be _!_dropped_!!_off at the recycling station On average, 70 pounds of _!_clothing _!!_per person is thrown away every year ", "resultado": ""});  
window.parent.smile_datos.preguntas.push({"id_preguinta": "728", "area_id": "1", "idioma_id": "1", "nivel_id": "1", "tema_id": "10", "subtema_id": "422", "categoria": "trinity", "tipo_para_bd": "1", "tipo": "tf", "titulo": "Choose the RIGHT answer", "pregunta": "Free shopping bags at Sacramento grocery stores officially became a thing of the past on New Year’s Day 2016. The ban, like many others across the state, is meant to stop plastic bags ending up in landfills, streets and waterways and increased littering. Starting Friday, Sacramento shoppers can bring their own bags or containers, including backpacks, boxes and suitcases. They can also buy paper bags or reusable plastic bags for 10 cents each. The changes took some shoppers by surprise Friday. Patty Welch of Granite Bay and her husband refused to pay 10 cents for a bag at a supermarket and instead carried their groceries (a vegetable-and-dip platter, ice cream and bakery boxes) to their car in their arms. Overall, however, people didn’t care much about the ban and either paid for one or brought their own bags.", "respuestas": ["Plastic bag ban in Sacramento","Carry your groceries to your car","Patty Welch and her husband","Bring your own bags"], "correcta": [1,0,0,0], "drag": "", "resultado": ""});  
window.parent.smile_datos.preguntas.push({"id_preguinta": "729", "area_id": "1", "idioma_id": "1", "nivel_id": "1", "tema_id": "10", "subtema_id": "422", "categoria": "trinity", "tipo_para_bd": "2", "tipo": "m_option", "titulo": "Choose the RIGHT answers", "pregunta": "Free shopping bags at Sacramento grocery stores officially became a thing of the past on New Year’s Day 2016. The ban, like many others across the state, is meant to stop plastic bags ending up in landfills, streets and waterways and increased littering. Starting Friday, Sacramento shoppers can bring their own bags or containers, including backpacks, boxes and suitcases. They can also buy paper bags or reusable plastic bags for 10 cents each. The changes took some shoppers by surprise Friday. Patty Welch of Granite Bay and her husband refused to pay 10 cents for a bag at a supermarket and instead carried their groceries (a vegetable-and-dip platter, ice cream and bakery boxes) to their car in their arms. Overall, however, people didn’t care much about the ban and either paid for one or brought their own bags.", "respuestas": ["Most people were not affected by the ban","No body was surprised ","You can buy plastic bags for 20 cents each","Sacramento shoppers are not allowed to bring their own bags"], "correcta": [1,0,0,0], "drag": "", "resultado": ""});  
window.parent.smile_datos.preguntas.push({"id_preguinta": "730", "area_id": "1", "idioma_id": "1", "nivel_id": "1", "tema_id": "10", "subtema_id": "422", "categoria": "trinity", "tipo_para_bd": "3", "tipo": "drag", "titulo": "Fill the gaps", "pregunta": "Free shopping bags at Sacramento grocery stores officially became a thing of the past on New Year’s Day 2016. The ban, like many others across the state, is meant to stop plastic bags ending up in landfills, streets and waterways and increased littering. Starting Friday, Sacramento shoppers can bring their own bags or containers, including backpacks, boxes and suitcases. They can also buy paper bags or reusable plastic bags for 10 cents each. The changes took some shoppers by surprise Friday. Patty Welch of Granite Bay and her husband refused to pay 10 cents for a bag at a supermarket and instead carried their groceries (a vegetable-and-dip platter, ice cream and bakery boxes) to their car in their arms. Overall, however, people didn’t care much about the ban and either paid for one or brought their own bags.", "respuestas": ["care","took","increased","buy","pay","stop"], "correcta": [], "drag": "People are able to _!_buy_!!_paper bags or reusable plastic bags. Most people didn\'t_!_care_!!_about the plastic bag ban The ban on plastic bags should _!_stop_!!_plastic pollution and littering The ban _!_took_!!_people by surprise", "resultado": ""});  
window.parent.smile_datos.preguntas.push({"id_preguinta": "769", "area_id": "1", "idioma_id": "1", "nivel_id": "1", "tema_id": "32", "subtema_id": "431", "categoria": "trinity", "tipo_para_bd": "1", "tipo": "tf", "titulo": "Choose the RIGHT answer", "pregunta": "Beijing say air quality improved in 2015, a year in which they had the city\'s first two red alerts for bad air quality and showed and finally showed that they wanted to make changes to get cleaner air China has been setting targets to reduce its air pollution as citizens have become increasingly aware of the dangers to their health. Beijing\'s government has been changing coal for natural gas-powered facilities, and removing more polluting vehicles from the road. They have also closed factories that are big polluters. The city\'s average air quality concentration of PM2.5 was decreased 6 percent from 2014 to 2015, and 10 percent lower than 2013. It was, however, still seven times higher than 10 which is considered “safe air” by the World Health Organization. Beijing\'s air gets especially very bad in the winter, when they burn coal for heat in northern China and weather patterns add to the smog. More than 50 per cent of the worst days in Beijing occur in November and December.", "respuestas": ["Changing coal for natural gas","Beijing improving air quality","Closing factories ","China has been setting targets"], "correcta": [0,1,0,0], "drag": "", "resultado": ""});  
window.parent.smile_datos.preguntas.push({"id_preguinta": "770", "area_id": "1", "idioma_id": "1", "nivel_id": "1", "tema_id": "32", "subtema_id": "431", "categoria": "trinity", "tipo_para_bd": "2", "tipo": "m_option", "titulo": "Choose the RIGHT answers", "pregunta": "Beijing say air quality improved in 2015, a year in which they had the city\'s first two red alerts for bad air quality and showed and finally showed that they wanted to make changes to get cleaner air China has been setting targets to reduce its air pollution as citizens have become increasingly aware of the dangers to their health. Beijing\'s government has been changing coal for natural gas-powered facilities, and removing more polluting vehicles from the road. They have also closed factories that are big polluters. The city\'s average air quality concentration of PM2.5 was decreased 6 percent from 2014 to 2015, and 10 percent lower than 2013. It was, however, still seven times higher than 10 which is considered “safe air” by the World Health Organization. Beijing\'s air gets especially very bad in the winter, when they burn coal for heat in northern China and weather patterns add to the smog. More than 50 per cent of the worst days in Beijing occur in November and December.", "respuestas": ["Worst days in Beijing occur in March and April ","The city\'s air quality decreased 60% from 2014 to 2015","Beijing has opened more factories","China has been setting targets to reduce its air pollution "], "correcta": [0,0,0,1], "drag": "", "resultado": ""});  
window.parent.smile_datos.preguntas.push({"id_preguinta": "771", "area_id": "1", "idioma_id": "1", "nivel_id": "1", "tema_id": "32", "subtema_id": "431", "categoria": "trinity", "tipo_para_bd": "3", "tipo": "drag", "titulo": "Fill the gaps", "pregunta": "Beijing say air quality improved in 2015, a year in which they had the city\'s first two red alerts for bad air quality and showed and finally showed that they wanted to make changes to get cleaner air China has been setting targets to reduce its air pollution as citizens have become increasingly aware of the dangers to their health. Beijing\'s government has been changing coal for natural gas-powered facilities, and removing more polluting vehicles from the road. They have also closed factories that are big polluters. The city\'s average air quality concentration of PM2.5 was decreased 6 percent from 2014 to 2015, and 10 percent lower than 2013. It was, however, still seven times higher than 10 which is considered “safe air” by the World Health Organization. Beijing\'s air gets especially very bad in the winter, when they burn coal for heat in northern China and weather patterns add to the smog. More than 50 per cent of the worst days in Beijing occur in November and December.", "respuestas": ["changes","reduce ","setting ","changing","improved ","closed","worst "], "correcta": [], "drag": "China has been _!_setting _!!_targets to fight air pollution China has _!_closed_!!_ many factories The air quality in Beijing _!_improved _!!_in 2015 November and December are the _!_worst _!!_months for smog", "resultado": ""});  
window.parent.smile_datos.preguntas.push({"id_preguinta": "633", "area_id": "1", "idioma_id": "1", "nivel_id": "1", "tema_id": "31", "subtema_id": "375", "categoria": "trinity", "tipo_para_bd": "1", "tipo": "tf", "titulo": "Choose the RIGHT answer", "pregunta": "Seattle is fining people who waste food. The city will start warning people in January and then start fining people in July. People will get a $1 fine if over 10 per cent of their garbage is food. Businesses will get a $50 fine. The city wants to reduce the amount of food waste. Americans waste around 40 per cent of the food they buy. Seattle aims to recycle 60 per cent of its waste. Seattle\'s wants to raise awareness that recycling is important. A city official told the \'Seattle Times\' newspaper that the program would not make money. He said that they care more about reminding people to recycle and that the fines system would be successful. Garbage collectors will look inside garbage to see how much food waste there is. They can then add a fine to the next garbage bill.", "respuestas": ["Looking inside garbage","Warning people","Reminding people to recyle","Fines for wasting food"], "correcta": [0,0,0,0], "drag": "", "resultado": ""});  
window.parent.smile_datos.preguntas.push({"id_preguinta": "634", "area_id": "1", "idioma_id": "1", "nivel_id": "1", "tema_id": "31", "subtema_id": "375", "categoria": "trinity", "tipo_para_bd": "2", "tipo": "m_option", "titulo": "Choose the RIGHT answers", "pregunta": "Seattle is fining people who waste food. The city will start warning people in January and then start fining people in July. People will get a $1 fine if over 10 per cent of their garbage is food. Businesses will get a $50 fine. The city wants to reduce the amount of food waste. Americans waste around 40 per cent of the food they buy. Seattle aims to recycle 60 per cent of its waste. Seattle\'s wants to raise awareness that recycling is important. A city official told the \'Seattle Times\' newspaper that the program would not make money. He said that they care more about reminding people to recycle and that the fines system would be successful. Garbage collectors will look inside garbage to see how much food waste there is. They can then add a fine to the next garbage bill.", "respuestas": ["Americans waste more than half of their food","Seattle aims to recycle all of its waste","Businesses will be fined more than people","Garbage collectors will take your garbage to the police"], "correcta": [0,0,1,0], "drag": "", "resultado": ""});  
window.parent.smile_datos.preguntas.push({"id_preguinta": "635", "area_id": "1", "idioma_id": "1", "nivel_id": "1", "tema_id": "31", "subtema_id": "375", "categoria": "trinity", "tipo_para_bd": "3", "tipo": "drag", "titulo": "Fill the gaps", "pregunta": "Seattle is fining people who waste food. The city will start warning people in January and then start fining people in July. People will get a $1 fine if over 10 per cent of their garbage is food. Businesses will get a $50 fine. The city wants to reduce the amount of food waste. Americans waste around 40 per cent of the food they buy. Seattle aims to recycle 60 per cent of its waste. Seattle\'s wants to raise awareness that recycling is important. A city official told the \'Seattle Times\' newspaper that the program would not make money. He said that they care more about reminding people to recycle and that the fines system would be successful. Garbage collectors will look inside garbage to see how much food waste there is. They can then add a fine to the next garbage bill.", "respuestas": ["waste","warning ","add","raise","fine","look"], "correcta": [], "drag": "Seattle\'s would like to_!_raise_!!_awareness to the importance of recycling. People will get a _!_fine_!!_if some of their garbage is food. Americans _!_waste_!!_a lot of food Seattle will start_!_warning _!!_people in January.", "resultado": ""});  
window.parent.smile_datos.preguntas.push({"id_preguinta": "696", "area_id": "1", "idioma_id": "1", "nivel_id": "1", "tema_id": "16", "subtema_id": "410", "categoria": "trinity", "tipo_para_bd": "1", "tipo": "tf", "titulo": "Choose the RIGHT answer", "pregunta": "Singer Ed Sheeran is taking a break from social media. He is tired with looking at his phone. The international superstar has over 20 million followers on Twitter and Instagram. He often tells his fans about his personal life, but now he wants to have a break. He wrote: Hello all. I\'m taking a break from my phone, e-mails and all social media for a while. He added: I find myself seeing the world through a screen and not my eyes. Sheeran has been touring the world giving concerts since August 2014. He wrote: I\'m taking this opportunity of me not having to be anywhere or do anything to travel the world. He will also have an operation for a burst eardrum. He has good news for his millions of fans. He announced his third album. He said it was the best thing he has made so far. He thanked his fans and said he would be back next autumn", "respuestas": ["Ed Sheeran\'s personal life","He will have an operation for a burst eardrum","Ed Sheeran announced his third album","Ed Sheeran taking a break from social media"], "correcta": [0,0,0,1], "drag": "", "resultado": ""});  
window.parent.smile_datos.preguntas.push({"id_preguinta": "697", "area_id": "1", "idioma_id": "1", "nivel_id": "1", "tema_id": "16", "subtema_id": "410", "categoria": "trinity", "tipo_para_bd": "2", "tipo": "m_option", "titulo": "Choose the RIGHT answers", "pregunta": "Singer Ed Sheeran is taking a break from social media. He is tired with looking at his phone. The international superstar has over 20 million followers on Twitter and Instagram. He often tells his fans about his personal life, but now he wants to have a break. He wrote: Hello all. I\'m taking a break from my phone, e-mails and all social media for a while. He added: I find myself seeing the world through a screen and not my eyes. Sheeran has been touring the world giving concerts since August 2014. He wrote: I\'m taking this opportunity of me not having to be anywhere or do anything to travel the world. He will also have an operation for a burst eardrum. He has good news for his millions of fans. He announced his third album. He said it was the best thing he has made so far. He thanked his fans and said he would be back next autumn", "respuestas": ["Ed Sheeran enjoys looking at his phone","Ed Sheeran has sold over 20 million albums","He will have an operation for his leg","He often tells his fans about his personal life"], "correcta": [0,0,0,1], "drag": "", "resultado": ""});  
window.parent.smile_datos.preguntas.push({"id_preguinta": "698", "area_id": "1", "idioma_id": "1", "nivel_id": "1", "tema_id": "16", "subtema_id": "410", "categoria": "trinity", "tipo_para_bd": "3", "tipo": "drag", "titulo": "Fill the gaps", "pregunta": "Singer Ed Sheeran is taking a break from social media. He is tired with looking at his phone. The international superstar has over 20 million followers on Twitter and Instagram. He often tells his fans about his personal life, but now he wants to have a break. He wrote: Hello all. I\'m taking a break from my phone, e-mails and all social media for a while. He added: I find myself seeing the world through a screen and not my eyes. Sheeran has been touring the world giving concerts since August 2014. He wrote: I\'m taking this opportunity of me not having to be anywhere or do anything to travel the world. He will also have an operation for a burst eardrum. He has good news for his millions of fans. He announced his third album. He said it was the best thing he has made so far. He thanked his fans and said he would be back next autumn", "respuestas": ["taking","album","over","about","touring","news"], "correcta": [], "drag": "Ed sometimes talks_!_about_!!_his personal life He has been _!_touring_!!_the world since 2014. Ed had good_!_news_!!_for his fans His third_!_album_!!_was announced", "resultado": ""});  
window.parent.smile_datos.preguntas.push({"id_preguinta": "719", "area_id": "1", "idioma_id": "1", "nivel_id": "1", "tema_id": "11", "subtema_id": "419", "categoria": "trinity", "tipo_para_bd": "1", "tipo": "tf", "titulo": "Choose the RIGHT answer", "pregunta": "Farmington is a community in the United States that is participating in a roadside program to recycle unwanted clothing and other items. After a vote where everyone voted in favor of the program on December 21st, the Simple Recycling will bring the program to Farmington. It was first started in the communities of South Lyon and Wixom a couple years ago and is now expanding into other cities. Farmington residents can expect to see large green bags tied on the handle of their garbage bins which they can fill with recyclable clothes and leave on the side of the road for pick-up on trash day. For every pound (lb.) of clothes collected, Simple Recycling pays one cent to the city’s recycling authority. However there is no cost for people to participate in the program. ", "respuestas": ["Recycling clothes in Farmington","Everyone voted in favor of the program ","Farmington is a community in the United States","There is no cost to participate"], "correcta": [1,0,0,0], "drag": "", "resultado": ""});  
window.parent.smile_datos.preguntas.push({"id_preguinta": "720", "area_id": "1", "idioma_id": "1", "nivel_id": "1", "tema_id": "11", "subtema_id": "419", "categoria": "trinity", "tipo_para_bd": "2", "tipo": "m_option", "titulo": "Choose the RIGHT answers", "pregunta": "Farmington is a community in the United States that is participating in a roadside program to recycle unwanted clothing and other items. After a vote where everyone voted in favor of the program on December 21st, the Simple Recycling will bring the program to Farmington. It was first started in the communities of South Lyon and Wixom a couple years ago and is now expanding into other cities. Farmington residents can expect to see large green bags tied on the handle of their garbage bins which they can fill with recyclable clothes and leave on the side of the road for pick-up on trash day. For every pound (lb.) of clothes collected, Simple Recycling pays one cent to the city’s recycling authority. However there is no cost for people to participate in the program. ", "respuestas": ["It costs $5 to participate in the program ","There is no cost to participate in the program ","Farmington residents can throw their clothes in the bin","Half of the community voted in favor of the program "], "correcta": [0,1,0,0], "drag": "", "resultado": ""});  
window.parent.smile_datos.preguntas.push({"id_preguinta": "721", "area_id": "1", "idioma_id": "1", "nivel_id": "1", "tema_id": "11", "subtema_id": "419", "categoria": "trinity", "tipo_para_bd": "3", "tipo": "drag", "titulo": "Fill the gaps", "pregunta": "Farmington is a community in the United States that is participating in a roadside program to recycle unwanted clothing and other items. After a vote where everyone voted in favor of the program on December 21st, the Simple Recycling will bring the program to Farmington. It was first started in the communities of South Lyon and Wixom a couple years ago and is now expanding into other cities. Farmington residents can expect to see large green bags tied on the handle of their garbage bins which they can fill with recyclable clothes and leave on the side of the road for pick-up on trash day. For every pound (lb.) of clothes collected, Simple Recycling pays one cent to the city’s recycling authority. However there is no cost for people to participate in the program. ", "respuestas": ["large","cost ","vote","expanding ","recycle","unwanted "], "correcta": [], "drag": "There is no _!_cost _!!_for people to participate There was a _!_vote_!!_for which everyone was in favor The program is _!_expanding _!!_to other cities They are recycling _!_unwanted _!!_items", "resultado": ""});  
window.parent.smile_datos.preguntas.push({"id_preguinta": "731", "area_id": "1", "idioma_id": "1", "nivel_id": "1", "tema_id": "10", "subtema_id": "423", "categoria": "trinity", "tipo_para_bd": "1", "tipo": "tf", "titulo": "Choose the RIGHT answer", "pregunta": "English non-profit group Keep Britain Tidy has revealed that plastic bag litter in England increased in the last year. Overall, littering has improved, with 90 percent of the sites it monitors listed as having an acceptable standard for litter. However, there has been increases in some types of litter, which includes plastic bags and snack wrappers. Plastic bag waste contributed to 12 percent of those sites which were below the standard, compared to 10 percent in 2013-2014. All plastic bag litter, which includes both single use and multi-use bags, had been decreasing for a short period. The newest survey was taken before the U.K. launched a 5 cent fee for single-use plastic bags. However plastic bag litter was only the 10th worst contributing factor to litter. The worst was smokers’ materials, found at 72.8 percent of all sites, while chewing gum showed up at 64 percent of sites. Other plastic litter items in the top 10 were candy packs, soft drink bottles and cans and alcoholic drink packaging.", "respuestas": ["Plastic bag litter in England","Littering has improved","Other plastic litter items","Plastic bag waste"], "correcta": [1,0,0,0], "drag": "", "resultado": ""});  
window.parent.smile_datos.preguntas.push({"id_preguinta": "732", "area_id": "1", "idioma_id": "1", "nivel_id": "1", "tema_id": "10", "subtema_id": "423", "categoria": "trinity", "tipo_para_bd": "2", "tipo": "m_option", "titulo": "Choose the RIGHT answers", "pregunta": "English non-profit group Keep Britain Tidy has revealed that plastic bag litter in England increased in the last year. Overall, littering has improved, with 90 percent of the sites it monitors listed as having an acceptable standard for litter. However, there has been increases in some types of litter, which includes plastic bags and snack wrappers. Plastic bag waste contributed to 12 percent of those sites which were below the standard, compared to 10 percent in 2013-2014. All plastic bag litter, which includes both single use and multi-use bags, had been decreasing for a short period. The newest survey was taken before the U.K. launched a 5 cent fee for single-use plastic bags. However plastic bag litter was only the 10th worst contributing factor to litter. The worst was smokers’ materials, found at 72.8 percent of all sites, while chewing gum showed up at 64 percent of sites. Other plastic litter items in the top 10 were candy packs, soft drink bottles and cans and alcoholic drink packaging.", "respuestas": ["Plastic was the 1st worst contributor to litter","Littering is accepted in England","Overall, littering has improved ","Plastic bag litter in England has decreased in the last year"], "correcta": [0,0,1,0], "drag": "", "resultado": ""});  
window.parent.smile_datos.preguntas.push({"id_preguinta": "733", "area_id": "1", "idioma_id": "1", "nivel_id": "1", "tema_id": "10", "subtema_id": "423", "categoria": "trinity", "tipo_para_bd": "3", "tipo": "drag", "titulo": "Fill the gaps", "pregunta": "English non-profit group Keep Britain Tidy has revealed that plastic bag litter in England increased in the last year. Overall, littering has improved, with 90 percent of the sites it monitors listed as having an acceptable standard for litter. However, there has been increases in some types of litter, which includes plastic bags and snack wrappers. Plastic bag waste contributed to 12 percent of those sites which were below the standard, compared to 10 percent in 2013-2014. All plastic bag litter, which includes both single use and multi-use bags, had been decreasing for a short period. The newest survey was taken before the U.K. launched a 5 cent fee for single-use plastic bags. However plastic bag litter was only the 10th worst contributing factor to litter. The worst was smokers’ materials, found at 72.8 percent of all sites, while chewing gum showed up at 64 percent of sites. Other plastic litter items in the top 10 were candy packs, soft drink bottles and cans and alcoholic drink packaging.", "respuestas": ["increases","littering","contributed","contributing","bottles","smokers"], "correcta": [], "drag": "There have been _!_increases_!!_in certain types of litter. Plastic bags_!_contributed_!!_to a lot of the litter. Soft drink _!_bottles_!!_were also in the top 10 of litter items The worst litter was _!_smokers_!!_material like cigarettes", "resultado": ""});  
window.parent.smile_datos.preguntas.push({"id_preguinta": "772", "area_id": "1", "idioma_id": "1", "nivel_id": "1", "tema_id": "9", "subtema_id": "432", "categoria": "trinity", "tipo_para_bd": "1", "tipo": "tf", "titulo": "Choose the RIGHT answer", "pregunta": "Many people would agree that it would be great if we could buy local food all year round, especially when you live in countries with very long, cold winters. There are many new innovative solutions for year-round sustainable agriculture that have featured on ECOWATCH. For example, there are 2 young business people who are transforming old shipping containers into high-tech indoor farms. Another business person shares how to build a solar powered greenhouse from recycled material. A Swedish couple even built their own greenhouse around their home to grow food and keep warm during the winter. In colder countries like Canada and Scandinavia, greenhouses are necessary to provide year-round local food. If this was not possible, they would need to import food from warmer countries which would be very expensive for the local people.", "respuestas": ["Growing locally all year round","A Swedish couple","How to build a greenhouse","Countries with long, cold winters"], "correcta": [1,0,0,0], "drag": "", "resultado": ""});  
window.parent.smile_datos.preguntas.push({"id_preguinta": "773", "area_id": "1", "idioma_id": "1", "nivel_id": "1", "tema_id": "9", "subtema_id": "432", "categoria": "trinity", "tipo_para_bd": "2", "tipo": "m_option", "titulo": "Choose the RIGHT answers", "pregunta": "Many people would agree that it would be great if we could buy local food all year round, especially when you live in countries with very long, cold winters. There are many new innovative solutions for year-round sustainable agriculture that have featured on ECOWATCH. For example, there are 2 young business people who are transforming old shipping containers into high-tech indoor farms. Another business person shares how to build a solar powered greenhouse from recycled material. A Swedish couple even built their own greenhouse around their home to grow food and keep warm during the winter. In colder countries like Canada and Scandinavia, greenhouses are necessary to provide year-round local food. If this was not possible, they would need to import food from warmer countries which would be very expensive for the local people.", "respuestas": ["Greenhouses are only necessary in warm countreis","Importing food would be cheaper","Most people agree it would be great to buy local food in winter","Building your own greenhouse is impossible"], "correcta": [0,0,1,0], "drag": "", "resultado": ""});  
window.parent.smile_datos.preguntas.push({"id_preguinta": "774", "area_id": "1", "idioma_id": "1", "nivel_id": "1", "tema_id": "9", "subtema_id": "432", "categoria": "trinity", "tipo_para_bd": "3", "tipo": "drag", "titulo": "Fill the gaps", "pregunta": "Many people would agree that it would be great if we could buy local food all year round, especially when you live in countries with very long, cold winters. There are many new innovative solutions for year-round sustainable agriculture that have featured on ECOWATCH. For example, there are 2 young business people who are transforming old shipping containers into high-tech indoor farms. Another business person shares how to build a solar powered greenhouse from recycled material. A Swedish couple even built their own greenhouse around their home to grow food and keep warm during the winter. In colder countries like Canada and Scandinavia, greenhouses are necessary to provide year-round local food. If this was not possible, they would need to import food from warmer countries which would be very expensive for the local people.", "respuestas": ["provide","recycled ","build","expensive ","import ","built ","shares "], "correcta": [], "drag": "A Swedish couple even_!_built _!!_their own greenhouse Greenhouses are needed to _!_provide_!!_fresh food all year A solar powered greenhouse was made by _!_recycled _!!_materials Importing food from other countries is_!_expensive _!!_for people", "resultado": ""});  
window.parent.smile_datos.preguntas.push({"id_preguinta": "610", "area_id": "1", "idioma_id": "1", "nivel_id": "1", "tema_id": "22", "subtema_id": "368", "categoria": "trinity", "tipo_para_bd": "1", "tipo": "tf", "titulo": "Choose the RIGHT answer", "pregunta": "A beauty contest took place in China. Only it wasn’t actually about beautiful people, but it was about beautiful goldfish. Around 10,000 goldfish competed for the title of Miss Goldfish. There were 16 different categories, and the judges graded the fish in five aspects – features, color, figure, swimming and general impression. People often export goldfish from this region of China to Japan, Singapore and other countries around the world.", "respuestas": ["Goldfish beauty contest ","The five aspects of China ","The 16 categories","Beauty is just for people "], "correcta": [1,0,0,0], "drag": "", "resultado": ""});  
window.parent.smile_datos.preguntas.push({"id_preguinta": "611", "area_id": "1", "idioma_id": "1", "nivel_id": "1", "tema_id": "22", "subtema_id": "368", "categoria": "trinity", "tipo_para_bd": "2", "tipo": "m_option", "titulo": "Choose the RIGHT answers", "pregunta": "A beauty contest took place in China. Only it wasn’t actually about beautiful people, but it was about beautiful goldfish. Around 10,000 goldfish competed for the title of Miss Goldfish. There were 16 different categories, and the judges graded the fish in five aspects – features, color, figure, swimming and general impression. People often export goldfish from this region of China to Japan, Singapore and other countries around the world.", "respuestas": ["The beauty contest took place in Japan.","10,000 goldfish participated in the contest.","The fish were graded in 5 characteristics. ","The fish from the contest were exported to Japan, Singapore and other countries."], "correcta": [0,1,1,0], "drag": "", "resultado": ""});  
window.parent.smile_datos.preguntas.push({"id_preguinta": "612", "area_id": "1", "idioma_id": "1", "nivel_id": "1", "tema_id": "22", "subtema_id": "368", "categoria": "trinity", "tipo_para_bd": "3", "tipo": "drag", "titulo": "Fill the gaps", "pregunta": "A beauty contest took place in China. Only it wasn’t actually about beautiful people, but it was about beautiful goldfish. Around 10,000 goldfish competed for the title of Miss Goldfish. There were 16 different categories, and the judges graded the fish in five aspects – features, color, figure, swimming and general impression. People often export goldfish from this region of China to Japan, Singapore and other countries around the world.", "respuestas": ["contest","categories","place","competed","export ","graded"], "correcta": [], "drag": "It is common for people to_!_export _!!_goldfish from China. The beauty _!_contest_!!_takes place in China. There are 16 differet_!_categories_!!_which are rated. 10,000 goldfish_!_competed_!!_to be Miss Goldfish. ", "resultado": ""});  
window.parent.smile_datos.preguntas.push({"id_preguinta": "625", "area_id": "1", "idioma_id": "1", "nivel_id": "1", "tema_id": "17", "subtema_id": "372", "categoria": "trinity", "tipo_para_bd": "1", "tipo": "tf", "titulo": "Choose the RIGHT answer", "pregunta": "25 per cent of British people had problems with their neighbors in the past year. An organization that helps people carried out a survey. It asked 2,062 adults about their neighbors. They found that 27% had problems. The organization said half the people felt angry and 42% felt stressed. Around 10% said they felt afraid of their neighbors. Most people didn\'t know where to get help and advice. The biggest problems were loud voices and arguing, and loud music and TVs. People also said drugs were a problem. One-third of people talked to their neighbor about a problem. The problem got worse if the neighbor did not apologize or change their bad behavior. Around 86% of young people did not tell anyone about their problem. The researchers said: Young people especially are suffering in silence.", "respuestas": ["Where to get help and advice","British people","Problems with your neighbors","Suffering in silence"], "correcta": [0,0,1,0], "drag": "", "resultado": ""});  
window.parent.smile_datos.preguntas.push({"id_preguinta": "626", "area_id": "1", "idioma_id": "1", "nivel_id": "1", "tema_id": "17", "subtema_id": "372", "categoria": "trinity", "tipo_para_bd": "2", "tipo": "m_option", "titulo": "Choose the RIGHT answers", "pregunta": "25 per cent of British people had problems with their neighbors in the past year. An organization that helps people carried out a survey. It asked 2,062 adults about their neighbors. They found that 27% had problems. The organization said half the people felt angry and 42% felt stressed. Around 10% said they felt afraid of their neighbors. Most people didn\'t know where to get help and advice.The biggest problems were loud voices and arguing, and loud music and TVs. People also said drugs were a problem. One-third of people talked to their neighbor about a problem. The problem got worse if the neighbor did not apologize or change their bad behavior. Around 86% of young people did not tell anyone about their problem. The researchers said: Young people especially are suffering in silence.", "respuestas": ["The neighbor always apologized ","50% of people felt angry","The biggest problem was with cars","Young people complained the most"], "correcta": [0,1,0,0], "drag": "", "resultado": ""});  
window.parent.smile_datos.preguntas.push({"id_preguinta": "627", "area_id": "1", "idioma_id": "1", "nivel_id": "1", "tema_id": "17", "subtema_id": "372", "categoria": "trinity", "tipo_para_bd": "3", "tipo": "drag", "titulo": "Fill the gaps", "pregunta": "25 per cent of British people had problems with their neighbors in the past year. An organization that helps people carried out a survey. It asked 2,062 adults about their neighbors. They found that 27% had problems. The organization said half the people felt angry and 42% felt stressed. Around 10% said they felt afraid of their neighbors. Most people didn\'t know where to get help and advice. The biggest problems were loud voices and arguing, and loud music and TVs. People also said drugs were a problem. One-third of people talked to their neighbor about a problem. The problem got worse if the neighbor did not apologize or change their bad behavior. Around 86% of young people did not tell anyone about their problem. The researchers said: Young people especially are suffering in silence. ", "respuestas": ["people","angry","carried","afraid","silence","worse"], "correcta": [], "drag": "The issue became_!_worse_!!_if the neighbor did not apologize. An organization that helps people_!_carried_!!_out a survey. 86% of young_!_people_!!_did not complain. 10% of people felt _!_afraid_!!_of their neighbors. ", "resultado": ""});
}
</script>
<?

	echo "<script>recargar_preguntas_smiles_2();</script>";
?>
<script>
window.parent.p_01174_carga_pregunta();
</script>
</body>
</html>
