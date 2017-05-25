<!--
-ID Pag: p_01394
-NAME: firma_dia_lectivo_api.php
-->
<?
/*

get/post:

p_01393_dia_lectivo
p_01393_alumno_id
p_01393_firma_archivo
p_01393_directirio_id
p_01393_firma_id
p_01393_finalizador

*/
?>
<style>
#p_01394_firma {
	height: 24.5%;
    width: 24.5%;
    position: absolute;
    -moz-transform: scale(4) translate( 37.5%,37.5% );
    -webkit-transform: scale(4) translate( 37.5%,37.5% );
    transform: scale(4) translate( 37.5%,37.5% );
    z-index: 9999;
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

.p_01394_boton_pad_firma{
	border:solid 1px #888;
	font-size:1em;
	display:inline-block;
	margin: 0 1em;
	padding: 0.1em 0.5em 0.2em 0.5em;
	height:1.5em;
	box-shadow: 0.2em 0.2em #ccc;
}
</style>

<div id="p_01394_firma">
  	
    <? 
		include ver_url("/movil/firma/pad/firma.php","");
	?>
    
    <iframe id="p_01394_firma_respuesta" name="p_01394_firma_respuesta" style="display:none;"></iframe>
	<form
    	enctype="multipart/form-data"
        id="p_01394_firma_formulario"
        action="https://app.oxbridge.es/app/DEV/firmar_dia_lectivo.php"
        method="post"
        target="p_01394_firma_respuesta"
        style="display:none;"
	>        
		<input type="hidden" id="p_01393_dia_lectivo" name="p_01393_dia_lectivo" value=""><!--rellenar al abrir-->
        <input type="hidden" id="p_01393_alumno_id" name="p_01393_alumno_id" value=""><!--rellenar al abrir-->
        
        <input type="hidden" id="p_01393_firma_archivo" name="p_01393_firma_archivo" value="">
        <input type="hidden" id="p_01393_directirio_id" name="p_01393_directirio_id" value=""><!--rellenar al abrir (AAAA_MM)-->
        <input type="hidden" id="p_01393_firma_id" name="p_01393_firma_id" value=""><!--rellenar al abrir (AAAA_MM_DD_DiaLectivoId_AlumnoId)-->
        
        <input type="hidden" id="p_01393_finalizador" name="p_01393_finalizador" value=""><!--rellenar al abrir-->
        
    </form>
    
     <div id="p_01394_firma_botones">
      <img src="https://app.oxbridge.es/app/images/firma_borrar.png" class="p_01394_boton_pad_firma" style="margin-right:20%;" onclick="signaturePad.clear();" data-action="clear">
      <img src="https://app.oxbridge.es/app/images/firma_ok.png" class="p_01394_boton_pad_firma" onclick="signaturePadSave(event);" data-action="save">
   </div>
   
</div>

<script>
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