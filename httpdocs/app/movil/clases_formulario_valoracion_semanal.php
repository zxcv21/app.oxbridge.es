<!--
-ID Pag: p_01450
-NAME: clases_formulario_valoracion_semanal.php
-->
<?

?>

<script>
</script>

<style>
.overall
{
	position: absolute;
    height: 100%;
    width: 100%;
	background: rgba(0,0,0,0.75);
    z-index: 999;
	overflow:auto;
}
.p_01450_div_check_smile
{
    float: left;
    width: 10em;
    text-align: center;
}
.p_01450_label_smiles
{
	height:5em;
	width:5em;
	display:inline-block;
}

.p_01450_label_smiles img
{
	height:100%;
	width:100%;
}

.p_01450_div_estrellas
{
	float:left;
}
.p_01450_div_estrellas div
{
	float:left;
	background-size: contain;
    background-position: center;
    background-repeat: no-repeat;
	width: 68.25px;
	height: 68.25px; 
}
.p_01450_div_texto_nombre
{
	color: #fff;
    font-size: 3.5em;
    font-family: helveticaneueroman;
}
.p_01450_div_titulo_profesor_estrellas
{
	float:left;
    margin: 6em 0 0 0;
}

.p_01450_div_valoracion_profesor
{
	display:inline-block;
	width:100%;
}

.p_01450_div_imagen_profesor
{
	margin:2em;
	float:left;
	border-radius:100%;
	height:12em;
	width:12em;
	overflow:hidden;
}

.p_01450_div_imagen_profesor img
{
    display: inline;
    height: 100%;
    width: 100%;
}

.p_01450_div_inputs_valoracion
{
	float:left;
	margin:2em;
}
.p_01450_div_input_textarea
{
    clear: both;
    text-align: center;
    margin: 1em 0;
}
.p_01450_div_input_textarea textarea
{
    font-size: 50px;
	width:100%;
	height:5em;
    border-radius: 1em;
    padding: 0.1em 0.5em;
}

.p_01450_div_texto_fecha{
    float: left;
    color: #fff;
    font-size: 4em;
    min-height: 1px;
    width: 6em;
    text-align: center;
    font-family: helveticaneueroman;
    margin: 0.2em 0 0 0;
}
.p_01450_div_valoracion_titulos
{
	font:helveticaneueroman;
	color:#fff;
	min-height:1em;
    color: #fff;
    min-height: 1em;
    display: inline-block;
    margin: 0 0 1em 0;
}
.p_01450_div_formulario_titulos_check
{
	font-size: 2em;
    width: 5em;
    font-family: helveticaneueroman;
}
.p_01450_div_valoracion_dia
{
	clear:both;
    display: inline-block;
	margin-bottom:1em;
}
	
</style>

<div id="p_01450_overall_valoracion_semanal" class="overall" style="display:none;">
	<div id="p_01450_overall_valoracion_semanal_profesor" class="p_01450_div_valoracion_profesor">
    	<div id="p_01450_overall_valoracion_foto" class="p_01450_div_imagen_profesor">
        	<img src="" style="margin-top: 0px; display: inline;">
        </div>
        <div class="p_01450_div_titulo_profesor_estrellas">
            <div id="p_01450_overall_valoracion_nombre" class="p_01450_div_texto_nombre">
                Nombre del profesor
            </div>
            <div id="p_01450_overall_valoracion_estrellas">
            </div>
            <div class="p_01450_div_estrellas" id="" style="visibility: visible;">
               <div onclick="" id="" style="background-image: url(<? echo ver_url("images/estrella_FULL.png","src");?>);"></div>
               <div onclick="" id="" style="background-image: url(<? echo ver_url("images/estrella_FULL.png","src");?>);"></div>
               <div onclick="" id="" style="background-image: url(<? echo ver_url("images/estrella_FULL.png","src");?>);"></div>
               <div onclick="" id="" style="background-image: url(<? echo ver_url("images/estrella_FULL.png","src");?>);"></div>
               <div onclick="" id="" style="background-image: url(<? echo ver_url("images/estrella_FULL.png","src");?>);"></div>
            </div>
		</div>
    </div>
    <div id="p_01450_overall_valoracion_inputs" class="p_01450_div_inputs_valoracion">
    
        <form id="p_01450_from_valoracion_semanal">
        	<div class="p_01450_div_valoracion_titulos">
                <div class="p_01450_div_texto_fecha"></div>
                <div class="p_01450_div_check_smile p_01450_div_formulario_titulos_check"><? echo $TEXTOS[157][2];?></div>
                <div class="p_01450_div_check_smile p_01450_div_formulario_titulos_check"><? echo $TEXTOS[158][2];?></div>
                <div class="p_01450_div_check_smile p_01450_div_formulario_titulos_check"><? echo $TEXTOS[159][2];?></div>
			</div>
            
            <!--/**********************************************************************************/-->
            <div class="p_01450_div_valoracion_dia">
                <div id="p_01450_overall_valoracion_inputs_fecha" class="p_01450_div_texto_fecha">
                   15/01/2016
                </div>
                <div id="p_01450_overall_valoracion_inputs_puntual" class="p_01450_div_check_smile">
                    <label class="p_01450_label_smiles" for="p_01450_input_valoracion_semanal_puntual">
                        <img src="<? echo ver_url("images/smile_green.png","src");?>" class="p_01450_label_smiles"/>
                    </label>
                    <input type="checkbox" class="p_01450_checkbox_carita" id="p_01450_input_valoracion_semanal_puntual" name="" value="" style="display:none;">
                </div>
                <div id="p_01450_overall_valoracion_inputs_preparado" class="p_01450_div_check_smile">
                    <label class="p_01450_label_smiles" for="p_01450_input_valoracion_semanal_preparado">
                        <img src="<? echo ver_url("images/smile_green.png","src");?>" class="p_01450_label_smiles"/>
                    </label>
                    <input type="checkbox" class="p_01450_checkbox_carita" id="p_01450_input_valoracion_semanal_preparado" name="" value="" style="display:none;">
                </div>
                <div id="p_01450_overall_valoracion_inputs_sistema" class="p_01450_div_check_smile">
                    <label class="p_01450_label_smiles" for="p_01450_input_valoracion_semanal_sistema">
                        <img src="<? echo ver_url("images/smile_green.png","src");?>" class="p_01450_label_smiles"/>
                    </label>
                    <input type="checkbox" class="p_01450_checkbox_carita" id="p_01450_input_valoracion_semanal_sistema" name="" value="" style="display:none;">
                </div>
            </div>
            <!--/**********************************************************************************/-->
            
            <!--/**********************************************************************************/-->
            <div class="p_01450_div_valoracion_dia">
                <div id="p_01450_overall_valoracion_inputs_fecha" class="p_01450_div_texto_fecha">
                   15/01/2016
                </div>
                <div id="p_01450_overall_valoracion_inputs_puntual" class="p_01450_div_check_smile">
                    <label class="p_01450_checkbox_carita" for="p_01450_input_valoracion_semanal_puntual">
                        <img src="<? echo ver_url("images/smile_green.png","src");?>" class="p_01450_label_smiles"/>
                    </label>
                    <input type="checkbox" class="p_01450_checkbox_carita" id="p_01450_input_valoracion_semanal_puntual" name="" value="" style="display:none;">
                </div>
                <div id="p_01450_overall_valoracion_inputs_preparado" class="p_01450_div_check_smile">
                    <label class="p_01450_checkbox_carita" for="p_01450_input_valoracion_semanal_preparado">
                        <img src="<? echo ver_url("images/smile_green.png","src");?>" class="p_01450_label_smiles"/>
                    </label>
                    <input type="checkbox" class="p_01450_checkbox_carita" id="p_01450_input_valoracion_semanal_preparado" name="" value="" style="display:none;">
                </div>
                <div id="p_01450_overall_valoracion_inputs_sistema" class="p_01450_div_check_smile">
                    <label class="p_01450_checkbox_carita" for="p_01450_input_valoracion_semanal_sistema">
                        <img src="<? echo ver_url("images/smile_green.png","src");?>" class="p_01450_label_smiles"/>
                    </label>
                    <input type="checkbox" class="p_01450_checkbox_carita" id="p_01450_input_valoracion_semanal_sistema" name="" value="" style="display:none;">
                </div>
            </div>
            <!--/**********************************************************************************/-->
            
            <div id="p_01450_overall_valoracion_inputs_comentario" class="p_01450_div_input_textarea">
            	<textarea placeholder="<? echo $TEXTOS[29][2];?>" id="p_01450_input_valoracion_semanal_comentario"></textarea>
            </div>
            <input type="hidden" id="p_01450_input_valoracion_semanal_" name="" value="">
            <input type="hidden" id="p_01450_input_valoracion_semanal_" name="" value="">
            <input type="hidden" id="p_01450_input_valoracion_semanal_" name="" value="">
            <input type="hidden" id="p_01450_input_valoracion_semanal_" name="" value="">
        </form>
	</div>
</div>