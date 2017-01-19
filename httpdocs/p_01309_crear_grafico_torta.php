<!--
-Pag ID: p_01309
-->

<style>

.p_01309_torta{
	position:relative;
	height:100%;
	width:100%;
	background:#f88;
    -moz-border-radius: 100%;
	-webkit-border-radius: 100%;
	border-radius:100%;
	overflow:hidden;
}
.p_01309_tapa{
	position:absolute;
	height:100%;
	width:100%;
	z-index:1;
}
.p_01309_porcentage{
	position:absolute;
	height:100%;
	width:100%;
}
.p_01309_mitad{
	height:100%;
	width:50%;
}
.p_01309_centro{
	height: 80%;
	width: 80%;
	position: absolute;
	left: 10%;
	top: 10%;
	background: #fff;
	z-index: 1;
	border-radius: 100%;
}

</style>


<script>

function p_01309_crear_torta(porcentage,color1,color2,id_ele,centroHueco){
	//definiciones
	var texto=porcentage+"%";
	if(porcentage>100)porcentage=100;
	if(porcentage<0)porcentage=0;
	porcentage=3.6*porcentage;//porcentage a degº
	var ele=document.getElementById(id_ele);
	
	if(typeof centroHueco=="undefined")centroHueco=false;
	
	var estilo_tapa="background:"+color2;
	var estilo_tapa_contenedor="";
	if(porcentage>180){
		estilo_tapa_contenedor='transform:rotate(180deg);';
		estilo_tapa='background:'+color1+';';
	}
	
	torta_html=''+
	'	<div id="p_01309_'+ele.id+'_torta" class="p_01309_torta" style="background:'+color2+';">'+
	'		<div id="p_01309_'+ele.id+'_tapa" style="'+estilo_tapa_contenedor+'" class="p_01309_tapa">'+
	'			<div class="p_01309_mitad" style="'+estilo_tapa+'"></div>'+
	'		</div>'+
	'		<div id="p_01309_'+ele.id+'_porcentage" class="p_01309_porcentage" style="transform:rotate('+porcentage+'deg)">'+
	'			<div class="p_01309_mitad" style="background:'+color1+';"></div>'+
	'		</div>';
	
	if(centroHueco){
		torta_html+=''+
		'	<div id="p_01309_'+ele.id+'_centro" class="p_01309_centro">'+
		'		<img style="height:100%;vertical-align: middle;">'+texto+
		'	</div>';
	}
	
	torta_html+=''+
	'	</div>'+
	'';
	
	ele.innerHTML=torta_html;
}

</script>

<!--

#c1{
    left:0;
    top:0;
    position:relative;
    height:100px;
    width:100px;
    background:#f88;
    border-radius:100%;
    overflow:hidden;
}
#por2{
    position:absolute;
    height:100%;
    width:100%;
    z-index:1;
    transform:rotate(180deg); 
}
#por1{
    position:absolute;
    transform:rotate(270deg);
    height:100%;
    width:100%;
}

#color1{
    background:#f00;
}
#color1_b{
    background:#f00;
}
.mitad{
    height:100%;
    width:50%;
}

-->