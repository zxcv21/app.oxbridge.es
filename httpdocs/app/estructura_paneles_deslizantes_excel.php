<?
// 0001006
// https://app.oxbridge.es/app/estructura_paneles_deslizantes_excel.php
?>
<html>

<head>
	<meta charset="UTF-8">
</head>

<body style="margin: 0px 0px 0px 0px; padding: 0px 0px 0px 0px">

<div id="p_0001006_div_agenda" style="width: 800px; height: 600px; overflow: auto; margin: 20px 0px 0px 20px; border-width: 10px 10px 10px 10px; padding: 0px 0px 0px 0px; border-style: solid; border-color:#333;" onScroll="javascript: p_0001006_js_f_02_scroll();">
	
	<div id="p_0001006_div_esquina_superior" style="width: 100px; height: 80px; margin: 0px 0px 0px 0px; border-width: 10px 10px 10px 10px; padding: 0px 0px 0px 0px; border-style: solid; border-color: #F00; position: absolute; z-index: 100; background-color: #000"></div>	

	<div id="p_0001006_div_fila_alumnos" style="position: relative; width: 1000px; height: 80px; margin: 0px 0px 0px 0px; border-width: 10px 10px 10px 10px; padding: 0px 0px 0px 0px; border-style: solid; border-color: #0F0; float: left; z-index: 10; background-color: #FFF">
		<? for( $a=0 ; $a < 50 ; $a++)
        { ?>
            <? echo(" - ".$a); ?>
        <? }; ?>
    </div>

	<div id="p_0001006_div_agenda_contenidos_agenda" style="width: 3000px; height: 1000px; margin: 0px 0px 0px 0px; border-width: 10px 10px 10px 10px; padding: 0px 0px 0px 0px; border-style: solid; border-color: #990; clear:both ">

        <div id="p_0001006_div_agenda_conceptos" style="position: relative; width: 100px; height: 1000px; margin: 0px 0px 0px 0px; border-width: 10px 10px 10px 10px; padding: 0px 0px 0px 0px; border-style: solid; border-color: #FC0; float: left; z-index: 10; background-color: #FFF">
			<? for( $a=0 ; $a < 50 ; $a++)
            { ?>
            	<br><? echo($a); ?>
            <? }; ?>
        </div>
    
		<? for( $a=0 ; $a < 20 ; $a++)
		{ ?>
        
	        <div id="p_0001006_div_agenda_conceptos_alumn_<? echo($a); ?>" style="width: 50px; height: 1000px; margin: 0px 0px 0px 0px; border-width: 1px 1px 1px 1px; padding: 0px 0px 0px 0px; border-style: solid; border-color: #39C; float: left">
				<? for( $b=0 ; $b < 50 ; $b++ )
                { ?>
                    <br><? echo($a); ?>&nbsp;-&nbsp;<? echo($b); ?>
                <? }; ?>            
            </div>
        
        <? }; ?>

    </div>

</div>

<script type="text/javascript">

	var p_0001006_js_scroller=document.getElementById('p_0001006_div_agenda');
	var p_0001006_js_scroller_top=0;
	var p_0001006_js_scroller_left=0;

	function p_0001006_js_f_02_scroll()
	{
		var p_0001006_js_f_02_scroller_top=p_0001006_js_scroller.scrollTop;
		var p_0001006_js_f_02_scroller_left=p_0001006_js_scroller.scrollLeft;
		if( p_0001006_js_scroller_top != p_0001006_js_f_02_scroller_top )
		{
			p_0001006_js_scroller_top=p_0001006_js_f_02_scroller_top;
			document.getElementById('p_0001006_div_fila_alumnos').style.top = p_0001006_js_scroller_top + 'px';
		};
		if( p_0001006_js_scroller_left != p_0001006_js_f_02_scroller_left )
		{
			p_0001006_js_scroller_left=p_0001006_js_f_02_scroller_left;
			document.getElementById('p_0001006_div_agenda_conceptos').style.left = p_0001006_js_scroller_left + 'px';
		};
	}

</script>

</body>

</html>