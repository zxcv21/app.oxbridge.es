<script type="text/javascript" language="javascript">

/*ANOTACIONSES
-recoger los dias lectivos ordenados por fecha de menor a mayor
-formato .fecha 			AAAA/MM/DD
-formato .horaInicio 	HH:MM
*/

		var text_dias_lectivos = '{'+
			'"fecha":"fecha 1",'+
			'"horaInicio":"hoaraio inicio 1",'+
			'"horaFinal":"horario final 1",'+
			'"profesor":"profesor 1",'+
			'"foto":"foto",'+
			'"nivel":"nivel 1",'+
			'"valoracion":"valoracion 1",'+
			'"actividad":[]'+
		'}';

		var text_actividad = '{'+
				'"titulo":"actividad 1.1",'+
				'"tema":"tema 1.1",'+
				'"tema_cod":"tema_cod 1.1",'+
				'"sub_tema":"sub_tema 1.1",'+
				'"sub_tema_cod":"sub_tema_cod 1.1",'+
				'"type":"tipo 1",'+
				'"attachment":[],'+
				'"enlace":[],'+
				'"target_language":[]'+
		'}';


		var text_attachment = '{'+
							'"titulo":"atta 1.1.1",'+
							'"html":"html 1.1.1",'+
							'"fichero":""'+
						'}';
		var text_enlace = '{'+
							'"titulo":"enlace 1.1.1",'+
							'"tipo":"",'+
							'"ruta":"",'+
							'"fichero":""'+
						'}';
		var text_target_language = '{'+
							'"titulo":"target 1.1.1",'+
							'"definiciones":[],'+
							'"ejemplos":[],'+
							'"imagenes":[],'+
							'"sonido":[]'+
						'}';

		var text_imagenes= '{'+
								'"tipo":"tipo 1.1.1.1.1",'+
								'"ruta":"tipo 1.1.1.1.1",'+
								'"fichero":"fichero 1.1.1.1.1"'+
							'}';
		var	text_sonido = '{'+
								'"tipo":"tipo 1.1.1.1.1",'+
								'"ruta":"ruta 1.1.1.1.1",'+
								'"fichero":"fichero 1.1.1.1.1"'+
							'}';

		var dia_lectivo = new Array();

		for(i=0;i<3;i++)
		{
			dia_lectivo[i] = JSON.parse(text_dias_lectivos);
			for( var a=0 ; a<4; a++)
			{
				dia_lectivo[i].actividad[a] = JSON.parse(text_actividad);
				for( var b=0 ; b<7; b++)
				{
					dia_lectivo[i].actividad[a].attachment[b] = JSON.parse(text_attachment);
					dia_lectivo[i].actividad[a].enlace[b] = JSON.parse(text_enlace);
				};
				for( var c=0 ; c<30; c++)
				{
					dia_lectivo[i].actividad[a].target_language[c] = JSON.parse(text_target_language);
					for( var d=0 ; d<1; d++)
					{
						dia_lectivo[i].actividad[a].target_language[c].imagenes[d] = JSON.parse(text_imagenes);
						dia_lectivo[i].actividad[a].target_language[c].sonido[d] = JSON.parse(text_sonido);
					};
					for( var e=0 ; e<2; e++)
					{
						dia_lectivo[i].actividad[a].target_language[c].definiciones.push("definicion "+i+" "+a+" "+c+" "+e);
						dia_lectivo[i].actividad[a].target_language[c].ejemplos.push("ejemplo "+i+" "+a+" "+c+" "+e);
					};
				};
			};
		};

    	var fecha_set = [new Date(<? echo date('Y,m,d') ?>).getFullYear(),new Date(<? echo date('Y,m,d') ?>).getMonth()+1,new Date(<? echo date('Y,m,d') ?>).getDate()];
		for(bucle01 in fecha_set)
			if(fecha_set[bucle01]<10)fecha_set[bucle01]="0"+fecha_set[bucle01];

		for(var bucle01=0;bucle01<3;bucle01++)
		{
			//tres dias consecutivos del mismo dia del mes siguiente
			//dia_lectivo[bucle01].fecha = fecha_set[0]+"/"+fecha_set[1]+"/"+fecha_set[2];
			dia_lectivo[bucle01].fecha = "2015/05/20";
			dia_lectivo[bucle01].horaInicio = (1+bucle01)+":00";
			dia_lectivo[bucle01].horaFinal = parseInt(bucle01+1)+":30";
			dia_lectivo[bucle01].profesor = "profesor " + bucle01;
			dia_lectivo[bucle01].nivel = "nivel " + bucle01;
			dia_lectivo[bucle01].valoracion = bucle01;
			for(var bucle02=0;bucle02<4;bucle02++)
			{
				dia_lectivo[bucle01].actividad[bucle02].titulo = "actividad "+ bucle01+"."+ bucle02;
				dia_lectivo[bucle01].actividad[bucle02].tema = "tema "+ bucle01+"."+ bucle02;
				dia_lectivo[bucle01].actividad[bucle02].tema_cod = "tema_cod "+ bucle01+"."+ bucle02;
				dia_lectivo[bucle01].actividad[bucle02].sub_tema = "sub_tema "+ bucle01+"."+ bucle02;
				dia_lectivo[bucle01].actividad[bucle02].sub_tema_cod = "sub_tema_cod "+ bucle01+"."+ bucle02;
				dia_lectivo[bucle01].actividad[bucle02].type = "tipo "+ bucle01+"."+ bucle02;
				for(var bucle03=0;bucle03<7;bucle03++)
				{
					dia_lectivo[bucle01].actividad[bucle02].attachment[bucle03].id = "id_"+ bucle01+"."+ bucle02+"."+ bucle03;
					dia_lectivo[bucle01].actividad[bucle02].attachment[bucle03].titulo = "atta "+ bucle01+"."+ bucle02+"."+ bucle03;
					dia_lectivo[bucle01].actividad[bucle02].attachment[bucle03].html = "html "+ bucle01+"."+ bucle02+"."+ bucle03;
					dia_lectivo[bucle01].actividad[bucle02].enlace[bucle03].titulo = "enlace "+ bucle01+"."+ bucle02+"."+ bucle03;
					dia_lectivo[bucle01].actividad[bucle02].enlace[bucle03].tipo = "tipo "+ bucle01+"."+ bucle02+"."+ bucle03;
					dia_lectivo[bucle01].actividad[bucle02].enlace[bucle03].ruta = "https://www.youtube.com/embed/"+ bucle01+"."+ bucle02+"."+ bucle03;
					dia_lectivo[bucle01].actividad[bucle02].enlace[bucle03].fichero = "fichero "+ bucle01+"."+ bucle02+"."+ bucle03;
				}
				for(var bucle05=0;bucle05<30;bucle05++)
				{
					dia_lectivo[bucle01].actividad[bucle02].target_language[bucle05].titulo = "titulo "+ bucle01+"."+ bucle02+"."+ bucle05;
					//dia_lectivo[bucle01].actividad[bucle02].target_language[bucle05].definiciones = "definiciones "+ bucle01+"."+ bucle02+"."+ bucle05;
					//dia_lectivo[bucle01].actividad[bucle02].target_language[bucle05].ejemplo = "ejemplo "+ bucle01+"."+ bucle02+"."+ bucle05;
					for(var bucle04=0;bucle04<1;bucle04++)
					{
						dia_lectivo[bucle01].actividad[bucle02].target_language[bucle05].imagenes[bucle04].tipo = "tipo "+ bucle01+"."+ bucle02+"."+ bucle05 +"."+ bucle04;
						dia_lectivo[bucle01].actividad[bucle02].target_language[bucle05].imagenes[bucle04].ruta = "ruta "+ bucle01+"."+ bucle02+"."+ bucle05 +"."+ bucle04;
						dia_lectivo[bucle01].actividad[bucle02].target_language[bucle05].imagenes[bucle04].fichero = "fichero "+ bucle01+"."+ bucle02+"."+ bucle05 +"."+ bucle04;
						dia_lectivo[bucle01].actividad[bucle02].target_language[bucle05].sonido[bucle04].tipo = "tipo "+ bucle01+"."+ bucle02+"."+ bucle05 +"."+ bucle04;
						dia_lectivo[bucle01].actividad[bucle02].target_language[bucle05].sonido[bucle04].ruta = "http://www.w3schools.com/tags/horse.mp3"/*"ruta "+ bucle01+"."+ bucle02+"."+ bucle05 +"."+ bucle04;*/
						dia_lectivo[bucle01].actividad[bucle02].target_language[bucle05].sonido[bucle04].fichero = "fichero "+ bucle01+"."+ bucle02+"."+ bucle05 +"."+ bucle04;
					};
				};
			};
		};


/*
		var text = '{'+
			'"fecha":"fecha 1",'+
			'"horaInicio":"hoaraio inicio 1",'+
			'"horaFinal":"horario final 1",'+
			'"profesor":"profesor 1",'+
			'"nivel":"nivel 1",'+
			'"valoracion":"valoracion 1",'+
			'"actividad":[{'+
				'"titulo":"actividad 1.1",'+
				'"tema":"tema 1.1",'+
				'"tema_cod":"tema_cod 1.1",'+
				'"sub_tema":"sub_tema 1.1",'+
				'"sub_tema_cod":"sub_tema_cod 1.1",'+
				'"type":"tipo 1",'+
				'"attachment":[{'+
							'"titulo":"atta 1.1.1",'+
							'"tipo":"tipo 1.1.1",'+
							'"ruta":"ruta 1.1.1",'+
							'"fichero":""'+
						'}],'+
				'"enlace":[{'+
							'"titulo":"enlace 1.1.1",'+
							'"tipo":"",'+
							'"ruta":"",'+
							'"fichero":""'+
						'}],'+
				'"target_language":[{'+
							'"titulo":"target 1.1.1",'+
							'"definiciones":["definicion 1.1.1.1"],'+
							'"ejemplos":["ejemplo 1.1.1.1"],'+
							'"imagenes":[{'+
								'"tipo":"tipo 1.1.1.1.1",'+
								'"ruta":"tipo 1.1.1.1.1",'+
								'"fichero":"fichero 1.1.1.1.1"'+
							'}],'+
							'"sonido":[{'+
								'"tipo":"tipo 1.1.1.1.1",'+
								'"ruta":"ruta 1.1.1.1.1",'+
								'"fichero":"fichero 1.1.1.1.1"'+
							'}]'+
						'}]'+
				'}]'+
		'}';
*/
alumno = {"dia_lectivo":dia_lectivo};
</script>
