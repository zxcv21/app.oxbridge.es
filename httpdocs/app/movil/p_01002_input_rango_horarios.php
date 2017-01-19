<!--
id: p_01002 // aun no funciona prollecto a medias

onMouseDown:
	escuchar evento up:
   	cerrar eventos y dejar marcado
   escuchar evento move:
   	marcar hasta donde sobrepase(select)
   
-->

<? 
	//definicion de varibles
	$p_01002_dias_semana=array("L","M","X","J","V","S","D");
	
	$p_01002_de_hora= "8:00";
	$p_01002_a_hora= "21:30";
	
	$p_01002_de_minutos=explode(":",$p_01002_de_hora);
	$p_01002_de_minutos=($p_01002_de_minutos[0]*60)+($p_01002_de_minutos[1]*1);
	$p_01002_de_minutos=intval($p_01002_de_minutos/15);
	
	$p_01002_a_minutos=explode(":",$p_01002_a_hora);
	$p_01002_a_minutos=($p_01002_a_minutos[0]*60)+($a_minutos[1]*1);
	$p_01002_a_minutos=intval($p_01002_a_minutos/15);

	//definicion de input rango
	$p_01002_mini=$p_01002_de_minutos;
	$p_01002_maxi=$p_01002_a_minutos;
	$p_01002_w=200;
	$p_01002_relacion = ($p_01002_maxi-$p_01002_mini)/($p_01002_w-20);
?>

<style>
	.p_01002_semana{
		margin:200px 500px;
		}
	.p_01002_dia{
		float:left;
		width:22px;
		border-right:1px solid #ccc;
		}
	.p_01002_hora{
		float:left;
		height:3px;
		width:20px;
		background-color:#fff;
		}
		.p_01002_hora span{
			position:absolute;
			display:none;
			font-size:30px;
			background-color:#fff;
			margin:20px 0 0 0;
			}
		.p_01002_hora:hover > span{
			display:inline;
			}
			
</style>

<body>
	<div class="p_01002_semana">
	<?
   	for($p_01002_i=0;$p_01002_i < count($p_01002_dias_semana);$p_01002_i++){
			echo "<div class='p_01002_dia'>";
			for($p_01002_j=0;$p_01002_j < $p_01002_de_minutos;$p_01002_j++){
				$borde="";
				if($p_01002_j%4==0)$borde="style='border-top:1px solid #ccc;'";
				if(($p_01002_j+2)%4==0)$borde="style='border-top:1px solid #ddd;'";
				if($p_01002_j==$p_01002_de_minutos-1)$borde=$borde." style='border-bottom:1px solid #ccc;'";
				echo "<div id='$p_01002_i-$p_01002_j'".
					"class='p_01002_hora' $borde onMouseDown='P_01002_marcar_horario(this)'><span>$p_01002_i-$p_01002_j</span></div>";
			}
			echo "</div>";
		}
	?>
   </div>
   
</body>

<script>

//AL CLICK DOWUN
function P_01002_marcar_horario(e){
	document.addEventListener("mousemove", doble_rango_en_movimiento, true); 
	document.addEventListener("mouseup", doble_rango_fin_movimiento, true);
}

function doble_rango_mover(event, id){
	e_moviendo=document.getElementById(id);
		
	document.addEventListener("mousemove", doble_rango_en_movimiento, true); 
	document.addEventListener("mouseup", doble_rango_fin_movimiento, true);
	
	e_pos_inicial=e_moviendo.offsetLeft-e_moviendo.offsetWidth;
	cursor_pos_inicial=event.x;
}

//MOVIENDO
function doble_rango_en_movimiento(event,mini,maxi,m){
	
	if(typeof event !=0)
		var mover=event.x-cursor_pos_inicial+e_pos_inicial;
	
	if(typeof mini!="undefined" && maxi!="undefined"){
			if(mini*1<<? echo $mini.")mini=". $mini;?>;
			if(maxi*1><? echo $maxi.")maxi=". $maxi;?>;
			if(mini*1><? echo $maxi.")mini=". $maxi;?>;
			if(maxi*1<<? echo $mini.")maxi=". $mini;?>;
			if(mini*1>maxi*1 && m=="ma")mini=maxi;
			if(mini*1>maxi*1 && m=="mi")maxi=mini;
			doble_rango_peque.style.marginLeft=(mini-<? echo $mini.")/".$relacion;?>;
			doble_rango_gran.style.marginLeft=(maxi-<? echo $mini.")/".$relacion;?>+10;
	}else{
		
		if(doble_rango_peque.id==e_moviendo.id){
			if((parseInt(doble_rango_peque.style.marginLeft)+10)>=parseInt(doble_rango_gran.style.marginLeft))
				doble_rango_gran.style.marginLeft=(parseInt(doble_rango_peque.style.marginLeft)+10)+"px";
			if(mover<0)mover=0;
			if(mover><? echo $w-20;?>)mover=<? echo $w-20;?>;
			
		}else{
			if((parseInt(doble_rango_peque.style.marginLeft)+10)>=parseInt(doble_rango_gran.style.marginLeft))
				doble_rango_peque.style.marginLeft=parseInt(doble_rango_gran.style.marginLeft)-10+"px";
			if(mover<10)mover=10;
			if(mover><? echo $w-10;?>)mover=<? echo $w-10;?>;
		}
		
	}
	
	var value_min=Math.round(parseInt(doble_rango_peque.style.marginLeft)*<? echo $relacion?>)+<? echo $mini?>;
	var value_max=Math.round((parseInt(doble_rango_gran.style.marginLeft)-10)*<? echo $relacion?>)+<? echo $mini?>;
	
	if(typeof value_max=="undefined"||isNaN(value_max))value_max=<? echo $maxi;?>;
	if(typeof value_min=="undefined"||isNaN(value_min))value_min=<? echo $mini;?>;
	
	document.getElementById("rango1_input").value=value_min;
	document.getElementById("rango2_input").value=value_max;
	document.getElementById("rango_doble").value="["+value_min+"-"+value_max+"]";
	
	if(typeof e_moviendo !="undefined")
		e_moviendo.style.marginLeft=mover+"px";
}

//FIN DE MOVIMIENTO
function doble_rango_fin_movimiento(event){
		document.removeEventListener("mousemove", doble_rango_en_movimiento, true);
		document.removeEventListener("mouseup", doble_rango_fin_movimiento, true); 
}
</script>