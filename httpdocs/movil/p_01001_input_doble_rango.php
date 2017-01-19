<!--
id: p_01001
-->
<? 
	//definicion de varibles
	$p_01001_de_hora= "8:00";
	$p_01001_a_hora= "21:30";
	
	$p_01001_de_minutos=explode(":",$p_01001_de_hora);
	$p_01001_de_hora=$p_01001_de_minutos[0];
	$p_01001_de_minutos=($p_01001_de_minutos[0]*60)+($p_01001_de_minutos[1]*1);
	$p_01001_de_minutos=intval($p_01001_de_minutos/15);
	
	$p_01001_a_minutos=explode(":",$p_01001_a_hora);
	$p_01001_a_hora=$p_01001_a_minutos[0];
	$p_01001_a_minutos=($p_01001_a_minutos[0]*60)+($p_01001_a_minutos[1]*1);
	$p_01001_a_minutos=intval($p_01001_a_minutos/15);

	//definicion de input rango
	$p_01001_mini=$p_01001_de_minutos;
	$p_01001_maxi=$p_01001_a_minutos;
	$p_01001_w=300;
	$relacion = ($p_01001_maxi-$p_01001_mini)/($p_01001_w-20);
?>

<style>
	#p_01001_rango_doble_div{
		width:<? echo $p_01001_w ?>px;
		height:50px;
		margin: 0 auto;
	}
	#p_01001_rango1, #p_01001_rango2{
		position:absolute;
		background-color:#999;
		height:20px;
		width:10px;
		float:left;
		cursor:pointer;
		margin-top: 24px !important;
	}
	#p_01001_linea{
		position:absolute;
		width:<? echo $p_01001_w; ?>px;
		height:4px;
		background-color:#ccc;
		margin:32px 0 0 0;
	}
	#p_01001_rango1_input, #p_01001_rango2_input{
		position:absolute;
		width:30px;
		margin:25px 0 0 0;
		border:0;
		display:none;
	}
	#p_01001_rango1_input, #p_01001_rango2_input:focus{
		border:1px;
		}
	#p_01001_rango2_input{
		margin:25px 0 0 <? echo $p_01001_w-30?>px;
	}
	
	/*ADICIONALES*/
	#p_01001_de_hora, #p_01001_a_hora{
		margin:0 0 0 0;
		width:90px;
		position:absolute;
	}
	#p_01001_de_hora:hover, #p_01001_a_hora:hover{
		border:1px solid #ccc;
	}
	#p_01001_a_hora{
		margin:0 0 0 <? echo $p_01001_w-90;?>px;
	}
	#p_01001_hora_rango1, #p_01001_hora_rango2{
		border:0;
		width:30px;
		direction:rtl;
	}
	#p_01001_minuto_rango1, #p_01001_minuto_rango2{
		direction:ltr;
		border:0;
		width:30px;
		margin-left: -5px;
	}
	
</style>

<script>
//ADICIONALES
p_01001_inputs_adicionales=""+
	'<div id="p_01001_a_hora">'+
	
	'	<input id="p_01001_hora_rango2"'+
	'			type="number"'+
	'			min="<? echo $p_01001_de_hora; ?>"'+
	'			max="<? echo $p_01001_a_hora; ?>"'+
	'			value="<? echo intval($p_01001_a_minutos*15/60); ?>"'+
	'			maxlength="2"'+
	'			onchange="p_01001_hora_to_rango(this.id)">:'+
	
	'	<input id="p_01001_minuto_rango2"'+
	'			type="number"'+
	'			value="<? echo $p_01001_a_minutos*15%60; ?>"'+
	'			step=15'+
	'			maxlength="2"'+
	'			onchange="p_01001_hora_to_rango(this.id)">'+
	
	'</div><div id="p_01001_de_hora">'+
	
	'	<input id="p_01001_hora_rango1"'+
	'			type="number"'+
	'			value="<? echo $p_01001_de_hora; ?>"'+
	'			min="<? echo $p_01001_de_hora; ?>"'+
	'			max="<? echo $p_01001_a_hora; ?>"'+
	'			onchange="p_01001_hora_to_rango(this.id)">:'+
	
	'	<input id="p_01001_minuto_rango1"'+
	'			type="number"'+
	'			value="<? echo $p_01001_de_minutos*15%60; ?>"'+
	'			step=15'+
	'			maxlength="2"'+
	'			onchange="p_01001_hora_to_rango(this.id)">'+
	
	'</div>';

//ONCHANGE DE INPUTS ADICIONALES
function p_01001_hora_to_rango(id){
	p_01001_e_de_hora=document.getElementById("p_01001_hora_rango1");
	p_01001_e_de_minuto=document.getElementById("p_01001_minuto_rango1");
	p_01001_e_a_hora=document.getElementById("p_01001_hora_rango2");
	p_01001_e_a_minuto=document.getElementById("p_01001_minuto_rango2");
	
	switch(id){
		case p_01001_e_de_hora.id:{
			if(isNaN(p_01001_e_de_hora.value))p_01001_e_de_hora.value=<? echo $p_01001_de_hora;?>;
			if(p_01001_e_de_hora.value<<? echo $p_01001_de_hora; ?>)p_01001_e_de_hora.value=<? echo $p_01001_de_hora; ?>;
			if(p_01001_e_de_hora.value><? echo $p_01001_a_hora; ?>)p_01001_e_de_hora.value=<? echo $p_01001_a_hora; ?>;
			document.getElementById('p_01001_rango1_input').value=(p_01001_e_de_hora.value*60+document.getElementById('p_01001_minuto_rango1').value*1)/15;
		break;}
		
		case p_01001_e_de_minuto.id:{
			if(isNaN(p_01001_e_de_minuto.value))p_01001_e_de_minuto.value=<? echo $p_01001_de_minutos%60;?>;
			p_01001_e_de_minuto.value=p_01001_e_de_minuto.value-p_01001_e_de_minuto.value%15;
			if(p_01001_e_de_minuto.value<0){
				p_01001_e_de_minuto.value=45;
				document.getElementById('p_01001_hora_rango1').value=document.getElementById('p_01001_hora_rango1').value*1-1;
			}
			if(p_01001_e_de_minuto.value>=60){
				p_01001_e_de_minuto.value=0;document.getElementById('p_01001_hora_rango1').value=document.getElementById('p_01001_hora_rango1').value*1+1;
			}
			document.getElementById('p_01001_rango1_input').value=(p_01001_e_de_minuto.value*1+document.getElementById('p_01001_hora_rango1').value*60)/15;
		break;}
		
		case p_01001_e_a_hora.id:{
			if(isNaN(p_01001_e_a_hora.value))p_01001_e_a_hora.value=<? echo $p_01001_a_hora;?>;
			if(p_01001_e_a_hora.value<<? echo $p_01001_de_hora; ?>)p_01001_e_a_hora.value=<? echo $p_01001_de_hora; ?>;
			if(p_01001_e_a_hora.value><? echo $p_01001_a_hora; ?>)p_01001_e_a_hora.value=<? echo $p_01001_a_hora; ?>;
			document.getElementById('p_01001_rango2_input').value=(p_01001_e_a_hora.value*60+document.getElementById('p_01001_minuto_rango2').value*1)/15;
		break;}
		
		case p_01001_e_a_minuto.id:{
			if(isNaN(p_01001_e_a_minuto.value))p_01001_e_a_minuto.value=<? echo $p_01001_a_minutos*15%60;?>;
			p_01001_e_a_minuto.value=p_01001_e_a_minuto.value-p_01001_e_a_minuto.value%15;
			if(p_01001_e_a_minuto.value<0){
				p_01001_e_a_minuto.value=45;document.getElementById('p_01001_hora_rango2').value=document.getElementById('p_01001_hora_rango2').value*1-1;
			}
			if(p_01001_e_a_minuto.value>=60){
				p_01001_e_a_minuto.value=0;document.getElementById('p_01001_hora_rango2').value=document.getElementById('p_01001_hora_rango2').value*1+1;
			}
			document.getElementById('p_01001_rango2_input').value=(p_01001_e_a_minuto.value*1+document.getElementById('p_01001_hora_rango2').value*60)/15;
		break;}
		
		default:{break;}
	}
	p_01001_input_adicional_actializar();
}

//ONCHANGE NORMALES AFECTANDO A ADICIONALES
function p_01001_rango_to_hora(value_min,value_max){
	document.getElementById("p_01001_hora_rango1").value=parseInt(value_min*15/60);
	document.getElementById("p_01001_minuto_rango1").value=value_min*15%60;
	document.getElementById("p_01001_hora_rango2").value=parseInt(value_max*15/60);
	document.getElementById("p_01001_minuto_rango2").value=value_max*15%60;
}

//PARA ACTUALIZAR VALORES DE LOS FALSOS inputs (adicionales)
function p_01001_input_adicional_actializar(){
	
	p_01001_e_de_hora=document.getElementById("p_01001_hora_rango1");
	p_01001_e_a_hora=document.getElementById("p_01001_hora_rango2");
	
	if(p_01001_e_de_hora.value<<? echo $p_01001_de_hora;?>)
		p_01001_e_de_hora.value=<? echo $p_01001_de_hora;?>;
	if(p_01001_e_de_hora.value><? echo $p_01001_a_hora;?>)
		p_01001_e_de_hora.value=<? echo $p_01001_a_hora;?>;
	if(p_01001_e_a_hora.value<<? echo $p_01001_de_hora;?>)
		p_01001_e_a_hora.value=<? echo $p_01001_de_hora;?>;
	if(p_01001_e_a_hora.value><? echo $p_01001_a_hora;?>)
		p_01001_e_a_hora.value=<? echo $p_01001_a_hora;?>;
	
		p_01001_doble_rango_en_movimiento('0', document.getElementById('p_01001_rango1_input').value, document.getElementById('p_01001_rango2_input').value, 'p_01001_rango1_input');
}
//////


p_01001_html_input_rango_doble=''+
	'<div id="p_01001_rango_doble_div" >'+
	'	<input id="p_01001_rango_doble" type="hidden" name="" value="[<? echo $p_01001_mini.",".$p_01001_maxi?>]">'+
	'		<div id="p_01001_linea"></div>'+
	'		<div id="p_01001_rango1"'+
	'			onmousedown="p_01001_doble_rango_mover(event,this.id);"'+
	'			ontouchstart="p_01001_doble_rango_mover(event,this.id)"'+
	'		style=""></div>'+
	
	'		<div id="p_01001_rango2"'+
	'			onmousedown="p_01001_doble_rango_mover(event, this.id);"'+
	'			ontouchstart="p_01001_doble_rango_mover(event,this.id)"'+
	'		style="margin:0 0 0 <? echo $p_01001_w-10; ?>px;"></div>'+
	
   '	<input id="p_01001_rango1_input" type="text" name="p_01001_rango_doble_min" value="<? echo $p_01001_mini?>" '+
	'		onChange="p_01001_doble_rango_en_movimiento(0,this.value,document.getElementById(\'p_01001_rango2_input\').value,\'mi\');" >'+
	'	<input id="p_01001_rango2_input" type="text" name="p_01001_rango_doble_max" value="<? echo $p_01001_maxi?>" '+
	'		onChange="'+
	'			p_01001_doble_rango_en_movimiento(0,document.getElementById(\'p_01001_rango1_input\').value,this.value,\'ma\');'+
	'			p_01001_rango_to_hora(this);'+
	'		">'+
		p_01001_inputs_adicionales+
	'</div>';

p_01001_cursor_pos_inicial=0;
p_01001_e_pos_inicial=0;
p_01001_doble_rango_peque="";
p_01001_doble_rango_gran="";

//AL CLICK DOWUN
function p_01001_doble_rango_mover(event, id){
	p_01001_e_moviendo=document.getElementById(id);
		
	document.addEventListener("mousemove", p_01001_doble_rango_en_movimiento, true); 
	document.addEventListener("mouseup", p_01001_doble_rango_fin_movimiento, true);
	document.addEventListener("touchmove", p_01001_doble_rango_en_movimiento, true); //tactil
	document.addEventListener("touchend", p_01001_doble_rango_fin_movimiento, true); //tactil
	event.preventDefault();
	
	p_01001_e_pos_inicial=p_01001_e_moviendo.offsetLeft-p_01001_e_moviendo.offsetWidth;
	
	if(event.type=="touchstart")
		p_01001_cursor_pos_inicial=event.targetTouches[0].pageX;
	else
		p_01001_cursor_pos_inicial=event.x;
}

//MOVIENDO
function p_01001_doble_rango_en_movimiento(event,mini,maxi,m){
	
	event.bubbles=false;
	
	p_01001_doble_rango_peque=document.getElementById("p_01001_rango1");
	p_01001_doble_rango_gran=document.getElementById("p_01001_rango2");
	
	if(event !=0){
		if(event.type=="touchmove")
			var mover=event.targetTouches[0].pageX-p_01001_cursor_pos_inicial+p_01001_e_pos_inicial;
		else
			var mover=event.x-p_01001_cursor_pos_inicial+p_01001_e_pos_inicial;
	}
	
	if(typeof mini!="undefined" && maxi!="undefined"){
			if(mini*1<<? echo $p_01001_mini.")mini=". $p_01001_mini;?>;
			if(maxi*1><? echo $p_01001_maxi.")maxi=". $p_01001_maxi;?>;
			if(mini*1><? echo $p_01001_maxi.")mini=". $p_01001_maxi;?>;
			if(maxi*1<<? echo $p_01001_mini.")maxi=". $p_01001_mini;?>;
			if(mini*1>maxi*1 && m=="ma")mini=maxi;
			if(mini*1>maxi*1 && m=="mi")maxi=mini;
			p_01001_doble_rango_peque.style.marginLeft=(mini-<? echo $p_01001_mini.")/".$relacion;?>+"px";
			p_01001_doble_rango_gran.style.marginLeft=(maxi-<? echo $p_01001_mini.")/".$relacion;?>+10+"px";
	}else{
		
		if(p_01001_doble_rango_peque.id==p_01001_e_moviendo.id){
			if((parseInt(p_01001_doble_rango_peque.style.marginLeft)+10)>=parseInt(p_01001_doble_rango_gran.style.marginLeft))
				p_01001_doble_rango_gran.style.marginLeft=(parseInt(p_01001_doble_rango_peque.style.marginLeft)+10)+"px";
			if(mover<0)mover=0;
			if(mover><? echo $p_01001_w-20;?>)mover=<? echo $p_01001_w-20;?>;
			
		}else{
			if((parseInt(p_01001_doble_rango_peque.style.marginLeft)+10)>=parseInt(p_01001_doble_rango_gran.style.marginLeft))
				p_01001_doble_rango_peque.style.marginLeft=parseInt(p_01001_doble_rango_gran.style.marginLeft)-10+"px";
			if(mover<10)mover=10;
			if(mover><? echo $p_01001_w-10;?>)mover=<? echo $p_01001_w-10;?>;
		}
		
	}
		
	
	var value_min=Math.round(parseInt(p_01001_doble_rango_peque.style.marginLeft)*<? echo $relacion?>)+<? echo $p_01001_mini?>;
	var value_max=Math.round((parseInt(p_01001_doble_rango_gran.style.marginLeft)-10)*<? echo $relacion?>)+<? echo $p_01001_mini?>;
	
	if(typeof value_max=="undefined"||isNaN(value_max))value_max=<? echo $p_01001_maxi;?>;
	if(typeof value_min=="undefined"||isNaN(value_min))value_min=<? echo $p_01001_mini;?>;
	
	document.getElementById("p_01001_rango1_input").value=value_min;
	document.getElementById("p_01001_rango2_input").value=value_max;
	document.getElementById("p_01001_rango_doble").value="["+value_min+"-"+value_max+"]";
		
	if(typeof p_01001_e_moviendo !="undefined")
		p_01001_e_moviendo.style.marginLeft=mover+"px";

	//ADICIONALES
	p_01001_rango_to_hora(value_min,value_max);
}

//FIN DE MOVIMIENTO
function p_01001_doble_rango_fin_movimiento(event){
	document.removeEventListener("mousemove", p_01001_doble_rango_en_movimiento, true);
	document.removeEventListener("mouseup", p_01001_doble_rango_fin_movimiento, true); 
	document.removeEventListener("touchmove", p_01001_doble_rango_en_movimiento, true); //tactil
	document.removeEventListener("touchend", p_01001_doble_rango_fin_movimiento, true); //tactil
}

</script>
