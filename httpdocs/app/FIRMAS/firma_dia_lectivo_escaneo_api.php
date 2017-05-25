<!--
-ID Pag: p_01395
-NAME: firma_dia_lectivo_escaneo_api.php
-https://app.oxbridge.es/app/FIRMAS/firma_dia_lectivo_escaneo_api.php
-->
<?
	

if ( isset($_POST["p_01395_get_profesor_id"]) )
{
	$p_01395_php_profesor_id = $_POST["p_01395_get_profesor_id"];
}
if ( isset($_GET["p_01395_get_profesor_id"]) )
{
	$p_01395_php_profesor_id = $_GET["p_01395_get_profesor_id"];$p_01395_php_url="https://s.oxbridge.es/ox/estructura_web/codigo/profesores/asistencias/firmas_01_control_03_asp_02_select_01_crear_objeto.asp";
	$p_01395_php_url.="?p_0001434_get_profesor_id=".$p_01395_php_profesor_id;
	
	
	$actualizar = file_get_contents($p_01395_php_url);
	$_POST['p_01395_objeto_firmar_dias']=$actualizar;
////////...solo ejecutar en true....////////?>


<style>
.p_01395_div_dia
{
	margin:2em 0 1em 0;
}

.p_01395_input_file {
	display:none;
}

.p_01395_span_alumno_nombre
{
	margin: 0 0.5em;
}

.p_01395_img_alumno_firma
{
    height: 1em;
    vertical-align: middle;
	cursor:pointer;
}

</style>

	<iframe id="p_01395_resultado_envio" name="p_01395_resultado_envio" style="display:none;"></iframe>
	<form
		action='https://app.oxbridge.es/app/FIRMAS/firmar_dia_lectivo_escaneo.php'
		target='p_01395_resultado_envio'
        method="post"
        enctype="multipart/form-data"
	>
    
    	<div id="p_01395_lista_dias"></div>
        
        <input type="hidden" name="p_01396_objeto_dias" value='<? echo $_POST['p_01395_objeto_firmar_dias'];?>'>
        <br>
        <input type='submit'>
    
    </form>

<script>
	p_01395_objeto_firmar_dias=JSON.parse('<? echo $_POST['p_01395_objeto_firmar_dias'];?>');

	var p_01395_html="";
	
	for(i in p_01395_objeto_firmar_dias)
	{
		var p_01395_dia=p_01395_objeto_firmar_dias[i];
		
		p_01395_html+=''+
		'<div id=\"p_01395_div_dia_lectivo_id_'+p_01395_dia.dia_lectivo_id+'\" class="p_01395_div_dia">'+
		'	'+p_01395_dia.fecha+' '+p_01395_dia.localizador+'<br> '+
		'	<div id=\"p_01395_div_dia_lectivo_id_'+p_01395_dia.dia_lectivo_id+'_alumnos\">';
		for(j in p_01395_dia.firmas){
			var p_01395_firma=p_01395_dia.firmas[j];
			p_01395_html+=''+
			'		<div id=\"p_01395_div_dia_lectivo_id_'+p_01395_dia.dia_lectivo_id+'_alumno_id_'+p_01395_firma.alumno_id+'\">'+
			'			<img class="p_01395_img_alumno_firma" src="https://app.oxbridge.es/app/images/camara.png" onclick="document.getElementById(\'p_01395_input_file_'+p_01395_dia.dia_lectivo_id+'_'+p_01395_firma.alumno_id+'\').click();">'+
			'			<span class="p_01395_span_alumno_nombre">'+p_01395_firma.alumno_nombre+'</span>'+	
			
			'			<input type="file" onchange="if(this.value!=\'\')this.insertAdjacentHTML(\'afterEnd\',this.value);" id="p_01395_input_file_'+p_01395_dia.dia_lectivo_id+'_'+p_01395_firma.alumno_id+'" class="p_01395_input_file" name="p_01396_escaneo_'+p_01395_dia.dia_lectivo_id+'_'+p_01395_firma.alumno_id+'" id="p_01396_escaneo_'+p_01395_dia.dia_lectivo_id+'_'+p_01395_firma.alumno_id+'" /><br>'+
			'			<input type="hidden" name="p_01396_dia_lectivo_id_'+p_01395_dia.dia_lectivo_id+'_'+p_01395_firma.alumno_id+'" value="'+p_01395_dia.dia_lectivo_id+'">'+
			'			<input type="hidden" name="p_01396_fecha_'+p_01395_dia.dia_lectivo_id+'_'+p_01395_firma.alumno_id+'" value="'+p_01395_dia.fecha+'">'+
			'			<input type="hidden" name="p_01396_localizador_'+p_01395_dia.dia_lectivo_id+'_'+p_01395_firma.alumno_id+'" value="'+p_01395_dia.localizador+'">'+
			'			<input type="hidden" name="p_01396_alumno_id_'+p_01395_dia.dia_lectivo_id+'_'+p_01395_firma.alumno_id+'" value="'+p_01395_firma.alumno_id+'">'+
			'			<input type="hidden" name="p_01396_alumno_nombre_'+p_01395_dia.dia_lectivo_id+'_'+p_01395_firma.alumno_id+'" value="'+p_01395_firma.alumno_nombre+'">'+
			'		</div>'+
			'';
		}
		p_01395_html+='	</div>'+
		'</div>';
	}
	
	document.getElementById("p_01395_lista_dias").innerHTML=p_01395_html;
	
</script>

<? ////////...solo ejecutar en true....////////
}
?>