<!--doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black"-->
  
  <link rel="stylesheet" href="http://app.oxbridge.es/app/firmas/pad/css/signature-pad.css">

  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-39365077-1']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>
  
  <style>
 	.p_00995_boton_pad_firma{
		height:30px;
		padding: 5px;
		border: solid 1px #888;
		box-shadow: 0.2em 0.2em #ccc;
		border-radius: 5px;
	}
  </style>
  
<!--/head>
<body onselectstart="return false"-->

<div id="signature-pad" class="m-signature-pad">
    <div class="m-signature-pad--body">
        <canvas id="mi_firma"></canvas>
        <div id="signature-pad-cargando" style="display:none;">
            <img
            	style="
                    width: 10%;
                    margin: 45%;
                    -moz-animation:p_00995_horario_loading infinite 1s linear;
                    -webkit-animation: p_00995_horario_loading infinite 1s linear;
                    animation:p_00995_horario_loading infinite 1s linear;
                "
                src="<? echo ver_url("images/loading.png","src"); ?>"
            >
        </div>
    </div>
    <div class="m-signature-pad--footer">
        <img src="http://app.oxbridge.es/app/DEV/images/firma_borrar.png" class="p_00995_boton_pad_firma" style="float:left;" onclick="signaturePad.clear();" data-action="clear">
        <img src="http://app.oxbridge.es/app/DEV/images/firma_ok.png" class="p_00995_boton_pad_firma" style=" float:right;" onclick="signaturePadSave(event);" data-action="save">
    </div>
</div>

  <script src="http://app.oxbridge.es/app/firmas/pad/js/signature_pad.js"></script>
  <script src="http://app.oxbridge.es/app/firmas/pad/js/app.js"></script>
  
<!--/body>
</html-->
