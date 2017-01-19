<!--
-ID Pag: p_01394
-NAME: firma_dia_lectivo_api.php
-url: http://app.oxbridge.es/app/firmas/firma_dia_lectivo_api.php
-->
<?
/*

get/post:

p_01393_alumno_id
p_01393_objeto_firmar_dias
	[{"dia_lectivo_id","fecha:AAAA_MM_DD","localizador"}]

*/

$_POST['p_01393_dia_lectivo_id']="x";
$_POST['p_01393_objeto_firmar_dias']='[{"alumno_id":1,"fecha":"2015_05_31","localizador":"Japon"},{"alumno_id":1,"fecha":"2015_05_31","localizador":"Japon"},{"alumno_id":1,"fecha":"2015_05_31","localizador":"Japon"}]';

?>
<style>
#p_01394_firma {
	height: 24.5%;
    width: 24.5%;
    position: fixed;
    -moz-transform: scale(4) translate( 37.5%,37.5% );
    -webkit-transform: scale(4) translate( 37.5%,37.5% );
    transform: scale(4) translate( 37.5%,37.5% );
    z-index: 9999;
	top: 0px;
}
#p_01394_firma_botones{
	position: fixed;
	z-index: 10000;
	font-size: 1em;
	width:100%;
	text-align:center;
	bottom:5%;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}

#p_01394_div_firma_nombre{
	position: fixed;
	z-index: 10000;
	font-size: 0.5em;
	width:80%;
	text-align:center;
	top:0;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}

.p_01394_boton_pad_firma{
	border:solid 1px #888;
	font-size:1em;
	display:inline-block;
	margin: 0 1em;
	padding: 0.1em 0.5em 0.2em 0.5em;
	height:1.5em;
	box-shadow: 0.2em 0.2em #ccc;
}
.p_01394_boton_cerrar{
	position: absolute;
    top: 0;
    right: 0;
    height: 1.2em;
    margin: 0.3em;
}

.p_01394_lista_firma
{
}

@-moz-keyframes p_00995_horario_loading{
	0% { -moz-transform: rotate(0deg); } 
	100% { -moz-transform: rotate(360deg); }
	}
@-webkit-keyframes p_00995_horario_loading {
	0% { -webkit-transform: rotate(0deg); } 
	100% { -webkit-transform: rotate(360deg); }
	}
@keyframes p_00995_horario_loading{
	0% { transform: rotate(0deg); } 
	100% { transform: rotate(360deg); }
	}

</style>

<div id="p_01394_lista_firmas">
</div>
<script>

function p_01394_rellenar_con_0(numero,largo)
{
	numero+="";
	while(numero.length<largo)
	{
		numero=0+""+numero;
	}
	return numero;
}


	p_01393_dia_lectivo_id='<? echo $_POST['p_01393_dia_lectivo_id']; ?>';
	p_01393_objeto_firmar_dias=JSON.parse('<? echo $_POST['p_01393_objeto_firmar_dias'];?>');

	p_01393_html_firmas="";
	for(i in p_01393_objeto_firmar_dias){
		firma=p_01393_objeto_firmar_dias[i];
		p_01393_html_firmas+=""+
		'	<div id="p_01394_firma_'+i+'" class="p_01394_lista_firma"'+
		'		onclick="'+
		'			p_01394_mostrar_firma('+i+');'+
		'		"'+
		'	>'+
		'	<span>'+firma.fecha+"</span> <span>"+firma.dia_lectivo_id+"</span> <span>"+firma.localizador+'</span>'+
		'	<img src="http://app.oxbridge.es/app/images/boton_firma_pendiente.png"/>'+
		'	</div>'+
		'';
	}
	document.getElementById("p_01394_lista_firmas").innerHTML=p_01393_html_firmas;
	
	function p_01394_rellenar_numero(n,c)
	{
		while(n.length<c)
			n="0"+n;
		return n;
	}
	
	function p_01394_mostrar_firma(indice)
	{
		p_01394_firma=p_01393_objeto_firmar_dias[indice];
		var p_01394_fecha=p_01394_firma.fecha.split("_");
		
		document.getElementById("p_01393_dia_lectivo").value=p_01393_dia_lectivo_id;
		document.getElementById("p_01393_directirio_id").value=p_01394_rellenar_numero(p_01394_fecha[0],4)+"_"+p_01394_rellenar_numero(p_01394_fecha[1],2);
		document.getElementById("p_01393_firma_id").value=p_01394_firma.fecha+"_"+p_01394_rellenar_con_0(firma.dia_lectivo_id,9)+"_"+p_01394_rellenar_con_0(firma.alumno_id,9);
		document.getElementById("p_01393_finalizador").value=''+
			'window.parent.document.getElementById("p_01394_firma_'+indice+'").style.display="none";'+
			'window.parent.document.getElementById("p_01394_lista_firmas").style.display="";'+
			'window.parent.document.getElementById("p_01394_firma").style.display="none";'+
			'window.parent.signaturePad.clear();'+
			'window.parent.document.getElementById("signature-pad-cargando").style.display="none";'+
		'';
		
		document.getElementById("p_01394_lista_firmas").style.display="none";
		document.getElementById("p_01394_firma").style.display="";
		document.getElementById("p_01394_firma").style.visibility="visible";

	}
	

	function p_01394_js_f_01_firmar_asistencia( p_01394_js_f_01_dia_lectivo_id, p_01394_js_f_01_fecha, p_01394_js_f_01_anyo, p_01394_js_f_01_mes, p_01394_js_f_01_alumno_id )
	{
		
		window.parent.signaturePad.clear();
		document.getElementById('signature-pad-cargando').style.display="none";
		document.getElementById("p_01393_volver_a_oxbridgetefl").value=1;
		document.getElementById("p_01393_firma_profesor").value=0;
		document.getElementById("p_01393_firma_cancelacion").value=0;
		document.getElementById("p_01393_alumno_id").value=0;
		if( p_01394_js_f_01_alumno_id == "_profesor" )
		{
			document.getElementById("p_01393_firma_profesor").value=1;
			document.getElementById("p_01393_firma_id").value=p_01394_js_f_01_fecha+"_"+p_01394_rellenar_con_0(p_01394_js_f_01_dia_lectivo_id,9)+"_"+p_01394_js_f_01_alumno_id;
		}
		else
		{
			if( p_01394_js_f_01_alumno_id == "cancelado" )
			{
				document.getElementById("p_01393_firma_cancelacion").value=1;
				document.getElementById("p_01393_firma_id").value=p_01394_js_f_01_fecha+"_"+p_01394_rellenar_con_0(p_01394_js_f_01_dia_lectivo_id,9)+"_"+p_01394_js_f_01_alumno_id;
			}
			else
			{
				document.getElementById("p_01393_alumno_id").value=p_01394_js_f_01_alumno_id;
				document.getElementById("p_01393_firma_id").value=p_01394_js_f_01_fecha+"_"+p_01394_rellenar_con_0(p_01394_js_f_01_dia_lectivo_id,9)+"_"+p_01394_rellenar_con_0(p_01394_js_f_01_alumno_id,9);
			};
		};
		document.getElementById("p_01393_dia_lectivo").value=p_01394_js_f_01_dia_lectivo_id;
		document.getElementById("p_01393_directirio_id").value=p_01394_js_f_01_anyo+"_"+p_01394_js_f_01_mes;
		document.getElementById("p_01393_finalizador").value=''+
			'window.parent.document.getElementById("p_01394_lista_firmas").style.display="";'+
			'window.parent.document.getElementById("p_01394_firma").style.display="none";'+
			'window.parent.signaturePad.clear();'+
			'window.parent.document.getElementById("signature-pad-cargando").style.display="none";'+
		'';
		
		document.getElementById("p_01394_firma").style.display="";
		document.getElementById("p_01394_firma").style.visibility="visible";

	}


</script>

<div id="p_01394_firma" style="visibility: hidden" >
  	
	<div id="p_01394_div_firma_nombre">
    	<span id="p_01394_span_firma_nombre"></span>
    </div>

	<style type="text/css">
		.p_01394_boton_pad_firma{
			margin: 0 !important;
			padding: 0 !important;
			height: 0.5em !important;
			box-shadow: 0.1em 0.1em #CCC !important;
		}
		.m-signature-pad--body{
			top: 20px !important;
			bottom: 25px !important;
			left: 5px !important;
			right: 5px !important;
		}
		.m-signature-pad--footer{
			display: none !important;
		}
		#p_01394_firma_botones{
			bottom: 2% !important;	
		}
	</style>
    
    <? 
		$version_pagina_src="http://app.oxbridge.es/app/";
		include $_SERVER['DOCUMENT_ROOT']."/app/movil/firma/pad/firma.php";
	?>

    <iframe id="p_01394_firma_respuesta" name="p_01394_firma_respuesta" style="display:none;"></iframe>
	<form
        id="p_01394_firma_formulario"
    	enctype="multipart/form-data"
        action="http://app.oxbridge.es/app/FIRMAS/firmar_dia_lectivo.php"
        method="POST"
        target="p_01394_firma_respuesta"
        style="display:none;"
	>        
		<input type="hidden" id="p_01393_volver_a_oxbridgetefl" name="p_01393_volver_a_oxbridgetefl" value="0">
		<input type="hidden" id="p_01393_dia_lectivo" name="p_01393_dia_lectivo" value=""><!--rellenar al abrir-->
        <input type="hidden" id="p_01393_alumno_id" name="p_01393_alumno_id" value=""><!--rellenar al abrir-->
        <input type="hidden" id="p_01393_firma_profesor" name="p_01393_firma_profesor" value="0">
        <input type="hidden" id="p_01393_firma_cancelacion" name="p_01393_firma_cancelacion" value="0">
        
        <input type="hidden" id="p_01393_firma_archivo" name="p_01393_firma_archivo" value="">
        <input type="hidden" id="p_01393_directirio_id" name="p_01393_directirio_id" value=""><!--rellenar al abrir (AAAA_MM)-->
        <input type="hidden" id="p_01393_firma_id" name="p_01393_firma_id" value=""><!--rellenar al abrir (AAAA_MM_DD_DiaLectivoId_AlumnoId)-->
        
        <input type="hidden" id="p_01393_finalizador" name="p_01393_finalizador" value=""><!--rellenar al abrir-->
        
    </form>
    
	<div id="p_01394_firma_botones">
      <img src="http://app.oxbridge.es/app/images/firma_borrar.png" class="p_01394_boton_pad_firma" style="margin-right:20%;" onclick="signaturePad.clear();" data-action="clear" />
      <img src="http://app.oxbridge.es/app/images/firma_ok.png" class="p_01394_boton_pad_firma" onclick="signaturePadSave(event,'p_01394_firma_formulario');" data-action="save" />
	</div>
      <img id="p_01394_img_cerrar_firma" src="http://app.oxbridge.es/app/images/close.png" class="p_01394_boton_cerrar"
      	onclick="
      		document.getElementById('p_01394_lista_firmas').style.display='';
      		document.getElementById('p_01394_firma').style.display='none';
            signaturePad.clear();
        " 
      />
   
</div>

<script>
document.getElementById("p_01394_firma").style.display="none";

function signaturePadSave(event){
    if (signaturePad.isEmpty()) {
		alert("Please provide signature first.");
    } else {
        
        document.getElementById("p_01393_firma_archivo").value = signaturePad.toDataURL('image/png');
		
		document.getElementById("signature-pad-cargando").style.display="";

		document.getElementById("p_01394_firma_formulario").submit();
    }
}
</script>