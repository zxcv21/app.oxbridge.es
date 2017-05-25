<!--
-Pag. ID: p_01307
-->

<script>
SECCION_TUTORIAL='';
///////////////0/1/2/3/4/5/6/7/8/9/10
SECCION_VISTA=[0,0,0,0,0,0,0,0,0,0,0];
personal_datos_info.mostrar_tutorial=1;
function cargar_tutorial(seccion){
	
	var tutorial=document.getElementById('p_00995_tutorial');
	var nex='onClick="cargar_tutorial(\'nex\');"';
	
	//ocultar tutorial
	if(personal_datos_info.mostrar_tutorial=="0"){
	
		if(!document.getElementById('p_01307_tutorial_s1')){
			tutorial.innerHTML=''+
				
				//1
				'<div id="p_01307_tutorial_s1" class="p_01308_tutorial_seccion" style="display:none;">'+
				'	<img '+nex+' class="p_01308_tutorial_imagen" src="https://app.oxbridge.es/app/movil/tutorial/tuto_1.png">'+
				' 	<div '+nex+' class="p_01308_tutorial_textos" style="padding:10%;">'+TEXTOS[105].text+'</div>'+
				'</div>'+
				
				//2
				'<div id="p_01307_tutorial_s2" class="p_01308_tutorial_seccion" style="display:none;">'+
				'	<img '+nex+' class="p_01308_tutorial_imagen" src="https://app.oxbridge.es/app/movil/tutorial/tuto_2.png">'+
				' 	<div '+nex+' class="p_01308_tutorial_textos" style="padding:10%;" '+nex+'>'+TEXTOS[107].text+'</div>'+
				'</div>'+
				
				//3
				'<div id="p_01307_tutorial_s3" class="p_01308_tutorial_seccion" style="display:none;">'+
				'	<img '+nex+' class="p_01308_tutorial_imagen" src="https://app.oxbridge.es/app/movil/tutorial/tuto_5.png">'+
				'	<div '+nex+' class="p_01308_tutorial_textos" style="position: absolute;top: 44%;padding: 5%;width: 40%;font-size: 3em;">'+TEXTOS[112].text+'</div>'+
				'	<div '+nex+' class="p_01308_tutorial_textos" style="position: absolute;top: 0;padding: 5%;width: 35%;font-size: 3em;right: 0;">'+TEXTOS[113].text+'</div>'+
				'	<div '+nex+' class="p_01308_tutorial_textos" style="position: absolute;top: 45%;padding: 5%;width: 40%;font-size: 3em;right: 0;">'+TEXTOS[114].text+'</div>'+
				'</div>'+
				
				//4
				'<div id="p_01307_tutorial_s4" class="p_01308_tutorial_seccion" style="display:none;">'+
				'	<img '+nex+' class="p_01308_tutorial_imagen" src="https://app.oxbridge.es/app/movil/tutorial/tuto_3.png">'+
				'	<div '+nex+' class="p_01308_tutorial_textos" style="position: absolute;padding: 5%;width: 40%;font-size: 3em;">'+TEXTOS[108].text+'</div>'+
				'	<div '+nex+' class="p_01308_tutorial_textos" style="font-size: 4em;width: 30%;bottom: 20%;position: absolute;padding: 5%;">'+TEXTOS[109].text+'</div>'+
				'	<div '+nex+' class="p_01308_tutorial_textos" style="position: absolute;padding: 5%;width: 55%;font-size: 3em;bottom: 0;right: 0;">'+TEXTOS[110].text+'</div>'+
				'</div>'+
				
				//5
				'<div id="p_01307_tutorial_s5" class="p_01308_tutorial_seccion" style="display:none;">'+
				'	<img '+nex+' class="p_01308_tutorial_imagen" src="https://app.oxbridge.es/app/movil/tutorial/tuto_6.png">'+
				'	<div '+nex+' class="p_01308_tutorial_textos" style="position: absolute;top: 0;padding: 5%;width: 30%;font-size: 3em;">'+TEXTOS[115].text+'</div>'+
				'	<div '+nex+' class="p_01308_tutorial_textos" style="position: absolute;top: 22%;padding: 5%;width: 30%;font-size: 3em;left: 35%;">'+TEXTOS[116].text+'</div>'+
				'	<div '+nex+' class="p_01308_tutorial_textos" style="position: absolute;top: 32%;padding: 5%;width: 24%;font-size: 3em;right: 0;">'+TEXTOS[117].text+'</div>'+
				'</div>'+
				
				//6
				'<div id="p_01307_tutorial_s6" class="p_01308_tutorial_seccion" style="display:none;">'+
				'	<img '+nex+' class="p_01308_tutorial_imagen" src="https://app.oxbridge.es/app/movil/tutorial/tuto_4.png">'+
				'	<div '+nex+' class="p_01308_tutorial_textos" style="position: absolute;top:60%;padding: 5%;width: 90%;font-size: 3em;">'+TEXTOS[111].text+'</div>'+
				'</div>'+
				
				//7
				'<div id="p_01307_tutorial_s7" class="p_01308_tutorial_seccion" style="display:none;">'+
				'	<img '+nex+' class="p_01308_tutorial_imagen" src="https://app.oxbridge.es/app/movil/tutorial/tuto_7.png">'+
				'	<div '+nex+' class="p_01308_tutorial_textos" style=" position: absolute;top: 8%;padding: 5%;width: 76%;font-size: 3em;left: 13%;">- '+TEXTOS[118].text+'</div>'+
				'	<div '+nex+' class="p_01308_tutorial_textos" style=" position: absolute;top: 19%;padding: 5%;width: 76%;font-size: 3em;left: 13%;">- '+TEXTOS[119].text+'</div>'+
				'	<div '+nex+' class="p_01308_tutorial_textos" style=" position: absolute;top: 30%;padding: 5%;width: 76%;font-size: 3em;left: 13%;">- '+TEXTOS[120].text+'</div>'+
				'	<div '+nex+' class="p_01308_tutorial_textos" style=" position: absolute;top: 41%;padding: 5%;width: 76%;font-size: 3em;left: 13%;">- '+TEXTOS[121].text+'</div>'+
				'	<div '+nex+' class="p_01308_tutorial_textos" style=" position: absolute;bottom: 12%;padding: 3%;width: 76%;font-size: 4em;right: 0; text-align: right;">'+TEXTOS[122].text+'</div>'+
				'</div>'+
				
				//8
				'<div id="p_01307_tutorial_s8" class="p_01308_tutorial_seccion" style="display:none;">'+
				'	<img '+nex+' class="p_01308_tutorial_imagen" src="https://app.oxbridge.es/app/movil/tutorial/tuto_8.png">'+
				'	<div '+nex+' class="p_01308_tutorial_textos" style=" position: absolute;top: 36%;padding: 5%;width: 30%;font-size: 3em;left: 0;">'+TEXTOS[123].text+'</div>'+
				'	<div '+nex+' class="p_01308_tutorial_textos" style=" position: absolute;top: 30%;padding: 5%;width: 30%;font-size: 3em;right: 0;direction: rtl;;">'+TEXTOS[124].text+'</div>'+
				'	<div '+nex+' class="p_01308_tutorial_textos" style=" position: absolute;bottom: 12%;padding: 3%;width: 62%;font-size: 4em;right: 0; text-align: right;">'+TEXTOS[125].text+'</div>'+
				'</div>'+
				
				//9
				'<div id="p_01307_tutorial_s9" class="p_01308_tutorial_seccion" style="display:none;">'+
				'	<img '+nex+' class="p_01308_tutorial_imagen" src="https://app.oxbridge.es/app/movil/tutorial/tuto_9.png">'+
				'	<div '+nex+' class="p_01308_tutorial_textos" style="position: absolute;top: 0;padding: 5%;width: 67%;font-size: 3em;left: 0;direction: rtl;">'+TEXTOS[126].text+'</div>'+
				'	<div '+nex+' class="p_01308_tutorial_textos" style=" position: absolute;top: 30%;padding: 5%;width: 30%;font-size: 3em;right: 0;">'+TEXTOS[127].text+'</div>'+
				'</div>'+
				
				//10
				'<div id="p_01307_tutorial_s10" class="p_01308_tutorial_seccion" style="display:none;">'+
				'	<img '+nex+' class="p_01308_tutorial_imagen" src="https://app.oxbridge.es/app/movil/tutorial/tuto_10.png">'+
				'	<div '+nex+' class="p_01308_tutorial_textos" style="position: absolute;top: 14%;padding: 5%;width: 40%;font-size: 3em;left: 0;direction: rtl;">'+TEXTOS[128].text+'</div>'+
				'	<div '+nex+' class="p_01308_tutorial_textos" style="position: absolute;top: 19%;padding: 5%;width: 40%;font-size: 3em;right: 0;">'+TEXTOS[129].text+'</div>'+
				'</div>'+
			'';
		}
		
		if(typeof seccion == 'undefined')
			seccion=1;
		
		if(seccion!="nex"){
			SECCION_TUTORIAL=seccion;
		}
		
		tutorial.style.display='';
		
		//ACCION
		switch(seccion){
			case "nex":{
				if(SECCION_TUTORIAL==5) tutorial.style.display='none';
				if(SECCION_TUTORIAL==6) tutorial.style.display='none';
				if(SECCION_TUTORIAL==7) tutorial.style.display='none';
				else SECCION_TUTORIAL++;
			break;}
			
			case 1:{
				SECCION_TUTORIAL=1;
			break;}
				
			default:{
			break;}
		}
		
		//OCULTAR TODAS LAS SECIONES
		for(i in tutorial.childNodes){
			if(tutorial.childNodes[i].nodeType=='1')
				tutorial.childNodes[i].style.display='none'
		}
		
		//MOSTRAR UNA SECCION
		if(SECCION_TUTORIAL > 0 && SECCION_TUTORIAL < 11){
			
			if(SECCION_VISTA[SECCION_TUTORIAL]==0){
				if(SECCION_TUTORIAL == 1)mover_menu(true,'p_00987_menu_clases');
				
				document.getElementById('p_01307_tutorial_s'+SECCION_TUTORIAL).style.display='';
				if(seccion!="nex")SECCION_VISTA[SECCION_TUTORIAL]=1;
			}else{
				tutorial.style.display='none';
			}
			
		}else tutorial.style.display='none';
	
	}	
}


</script>