<?
session_start();
?>
<div id="signature-pad" class="m-signature-pad">
    <div class="m-signature-pad--body">
      <canvas id="mi_firma"></canvas>
      <div id="signature-pad-cargando" style="display:none;">
         <img style="
            width: 100px;
            margin: auto;
            -moz-animation:p_00995_horario_loading infinite 1s linear;
            -webkit-animation: p_00995_horario_loading infinite 1s linear;
            animation:p_00995_horario_loading infinite 1s linear;
            "
         src="<? echo ver_url("images/loading.png","src"); ?>">
        </div>
    </div>
    <div class="m-signature-pad--footer">
    </div>
</div>

<script type="text/javascript">
	//console.log("tomas 0001: <? echo ver_url("movil/firma/pad/js/app.js","src"); ?>") ;
	var version_pagina = "<? echo($_SESSION["version__p_php_session"]) ; ?>" ;
	//console.log("tomas 0002: "+version_pagina) ;
</script>

<script src="<? echo ver_url("movil/firma/pad/js/signature_pad.js","src"); ?>"></script>
<script src="<? echo ver_url("movil/firma/pad/js/app.js","src"); ?>"></script>
