<?
/*
Pag ID: p_01451
FILE: p_01451_informacion_tripartita.php
*/
?>
<style>
#p_01451_tripartita
{
    position: absolute;
	top:0;
	right:0;
	bottom:0;
	left:0;
	padding: 20px 20px 20px 20px;
    background: rgba(0,0,0,0.7);
    z-index: 9999;
}
#p_01451_tripartita_fondo
{
    position: relative;
    /*tomas top: 10px;
    right: 10px;
    bottom: 10px;
    left: 10px;*/
    background: #fff;
    border-radius: 20px;
    border: solid 2px #2DCEE4;
    overflow: auto;
    /*tomas padding-top: 165px;*/
}
#p_01451_tripartita_menu
{
    min-width: 300px;
    height: 70px;
    /*tomas position: fixed;*/
    background: #fff;
    padding-bottom: 20px;
    /*tomas left: 12px;
    top: 110px;
    right: 12px;*/
	z-index:2;
}
.p_01451_menu_seccion
{
    float: left;
    min-width: 50px;
	margin: 1em 0.5em 0 0.5em;
	font-family:helveticaneueroman;
	font-size:16px;
    height: 2.5em;
    border-bottom: 8px solid #fff;
    cursor: pointer;
}
.p_01451_activo_seccion
{
    border-bottom: 8px solid #2DCEE4;
    color: #2DCEE4;
}
.p_01451_tripartita_seccion p
{
    margin-bottom: 0.5em;
}
#p_01451_tripartita_seccion_5 img
{
    float: left;
    padding: 0.5em;
    max-width: 90%;
}
#p_01451_tripartita_contenedor
{
    clear: both;
    text-align: justify;
	padding: 0px 20px 0px 20px;
    /*tomas padding: 2em;*/
}
.p_01451_tripartita_seccion
{
	font-size:16px;
}

#p_01451_tripartita_cerrar
{
    position: absolute;
    top: 15px;
    right: 16px;
    height: 30px;
    width: 30px;
    background-image: url(http://app.oxbridge.es/app/images/close.png);
    background-repeat: no-repeat;
    background-size: 100%;
    cursor: pointer;
}
#p_01451_tripartita_head
{
    height: 62px;
    border-radius: 20px 20px 0 0;
    background: #fff;
    padding:3px 20px 10px 20px;
	z-index:2;
}
#p_01451_tripartita_6_progreso
{
    height: 200px;
    width: 200px;
    position: relative;
    font-size: 21px;
    text-align: center;
	margin:auto;
}
#p_01451_tripartita_6_leyenda
{
    position: absolute;
    left: 100%;
    text-align: left;
    width: 250px;
    font-size: 16px;
}
#p_01451_tripartita_6_start
{
    font-size: 0.5em;
    text-align: center;
	display: inline-block;
}
#p_01451_tripartita_seccion_3
{
	font-size:1em;
}

#p_01451_tripartita_seccion_3_menu
{
    display: inline-block;
    /*tomas position: fixed;*/
    /*tomas right: 12px;*/
    /*tomas left: 12px;*/
    background: #fff;
    /*tomas top: 185px;*/
}
.p_01451_tripartita_seccion_3_menu_titulo
{
    position: relative;
    width: 139px;
    height: 139px;
    font-size: 1em;
    text-align: center;
    font-family: helveticaneueroman;
    padding: 0px 0;
    margin: 0 20px;
    display: inline-block;
}
.p_01451_tripartita_seccion_titulo_full,
.p_01451_tripartita_seccion_titulo_empy
{
	position:absolute;
	left:0;
	widows:100%;
}
.p_01451_tripartita_seccion_titulo_full
{
	overflow:hidden;
	color:#fff;
	background:#000;
	width:50%;
}
.p_01451_tripartita_seccion_3_seccion_detalle
{
	padding:20px;
}
#p_01451_tripartita_seccion_3_seccion
{
    /*tomas margin-top: 200px;*/
}

#p_01451_tripartita_seccion_3_seccion_1
{
  /*  border-top: #ddf solid 20px;*/
}
#p_01451_tripartita_seccion_3_seccion_2
{
    border-top: #fdd solid 20px;
}
#p_01451_tripartita_seccion_3_seccion_3
{
    border-top: #dfd solid 20px;
}

.s12
{
	clear:both;
}

.p_01451_marcapaginas
{
    width: 18px;
    height: 23px;
    position: fixed;
    background: #f00;
    opacity: 0.5;
    left: 13px;
    transition: 0.5s;
	color: #f00;
    font-size: 0em;
	font-family:helveticaneueroman;
}


.p_01451_marcapaginas div
{
    height: 20px;
    width: 20px;
    position: absolute;
    right: -9px;
    background: #f00;
    transform: rotate(45deg);
    top: 1px;
}

.p_01451_marcapaginas:hover
{
    width: 500px;
    opacity: 1;
	color: #ccc;
    font-size: 1em;
}

.p_01451_start_smiles{

	font-size: 3em;
    /* padding: 1em 1em 0.7em 1em; */
    margin-top: 0.5em;
    background-color: #fff;
    color: #0087ae;
    border: solid 0.1em;
    border-radius: 0.3em;
    box-shadow: 0.1em 0.1em 0;
    display: inline-block;
    font-family: HelveticaNeueRoman;
    cursor: pointer;
    padding: 6px;
    z-index: 4;
}

</style>

<div id="p_01451_tripartita" style="display: none; height: 100%">
	<div id="p_01451_tripartita_fondo" style="height: calc(100% - 50px)">
		<div id="p_01451_tripartita_head" style="overflow: hidden; width: 800px ">
            <img src="http://app.oxbridge.es/app/images/tripartita_anagrama.jpg" style="height:100%;"/>
			<img src="http://app.oxbridge.es/app/images/FSE_anagrama.png" style="height:100%; margin-left: 20px"/>
		</div>
		<div id="p_01451_tripartita_menu">
			<div id="p_01451_menu_1" class="p_01451_menu_seccion p_01451_activo_seccion" onclick="p_01451_mostrar_seccion('p_01451_tripartita_seccion_1',this);"><? echo $TEXTOS[167][2]; ?></div>
			<div id="p_01451_menu_2" class="p_01451_menu_seccion" onclick="p_01451_mostrar_seccion('p_01451_tripartita_seccion_2',this);"><? echo $TEXTOS[168][2]; ?></div>
			<div id="p_01451_menu_3" class="p_01451_menu_seccion" onclick="p_01451_mostrar_seccion('p_01451_tripartita_seccion_3',this);"><? echo $TEXTOS[169][2]; ?></div>
			<div id="p_01451_menu_4" class="p_01451_menu_seccion" onclick="p_01451_mostrar_seccion('p_01451_tripartita_seccion_4',this);"><? echo $TEXTOS[170][2]; ?></div>
			<div id="p_01451_menu_5" class="p_01451_menu_seccion" onclick="p_01451_mostrar_seccion('p_01451_tripartita_seccion_5',this);"><? echo $TEXTOS[171][2]; ?></div>
			<div id="p_01451_menu_6" class="p_01451_menu_seccion" onclick="p_01451_mostrar_seccion('p_01451_tripartita_seccion_6',this);"><? echo $TEXTOS[172][2]; ?></div>
		</div>
		<div id="p_01451_tripartita_contenedor" style="height: calc(100% - 200px); overflow: auto">
			<div id="p_01451_tripartita_seccion_1" class="p_01451_tripartita_seccion"><? echo $TEXTOS[173][2];?></div>

			<div id="p_01451_tripartita_seccion_2" class="p_01451_tripartita_seccion" style="display:none;"><? echo $TEXTOS[183][2]; ?></div>

			<div id="p_01451_tripartita_seccion_3" align="center" class="p_01451_tripartita_seccion" style="display:none; height: 100%">

				<div id="p_01451_tripartita_seccion_3_menu" style="height: 180px">
					<div id="p_01451_tripartita_seccion_3_menu_1" onclick="p_01451_mostrar_seccion_3_menu_detalle('p_01451_tripartita_seccion_3_seccion_1');" class="p_01451_tripartita_seccion_3_menu_titulo"></div>
					<div id="p_01451_tripartita_seccion_3_menu_2" onclick="p_01451_mostrar_seccion_3_menu_detalle('p_01451_tripartita_seccion_3_seccion_2');" class="p_01451_tripartita_seccion_3_menu_titulo"></div>
					<div id="p_01451_tripartita_seccion_3_menu_3" onclick="p_01451_mostrar_seccion_3_menu_detalle('p_01451_tripartita_seccion_3_seccion_3');" class="p_01451_tripartita_seccion_3_menu_titulo"></div>
				</div>

				<div id="p_01451_tripartita_seccion_3_seccion" style="height: calc(100% - 200px); overflow: auto">
					<div id="p_01451_tripartita_seccion_3_seccion_1" class="p_01451_tripartita_seccion_3_seccion_detalle"></div>
					<div id="p_01451_tripartita_seccion_3_seccion_2" class="p_01451_tripartita_seccion_3_seccion_detalle" style="display:none;"></div>
					<div id="p_01451_tripartita_seccion_3_seccion_3" class="p_01451_tripartita_seccion_3_seccion_detalle" style="display:none;"></div>
				</div>

			</div>

			<div id="p_01451_tripartita_seccion_4" class="p_01451_tripartita_seccion" style="display:none;"><? echo $TEXTOS[184][2]; ?></div>

			<div id="p_01451_tripartita_seccion_5" class="p_01451_tripartita_seccion" style="display:none;">
				<div class="p_01451_marcapaginas" onclick="p_0010197_cookie('set','p_01451_tripartita_fondo_scroll_top',document.getElementById('p_01451_tripartita_fondo').scrollTop,30)">
					<span><? echo $TEXTOS[185][2]; ?></span>
					<div></div>
				</div>
				<div id="p_01451_tripartita_seccion_5_detalle" class="p_01451_tripartita_seccion_5_detalle"></div>
			</div>

			<div id="p_01451_tripartita_seccion_6" class="p_01451_tripartita_seccion" style="display:none; padding-top: 50px">
				<div id="p_01451_tripartita_6_progreso" onclick="p_01451_mostrar_seccion('p_01451_tripartita_seccion_3',document.getElementById('p_01451_menu_3'));"></div>
				<div style="width: 100%" align="center">
	                <div id="p_01451_tripartita_6_start" onclick="ocultar_mostrar('p_01451_tripartita'); p_01451_eliminar_duplicados(); mover_menu(true,'p_00987_menu_smile'); p_01171_boton_start();">
						<div class="p_01451_start_smiles" align="center">
							Start
							<img src="http://app.oxbridge.es/app/images/play.png" style="height:1em;">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="p_01451_tripartita_cerrar" onclick="ocultar_mostrar('p_01451_tripartita');p_01451_eliminar_duplicados();p_01000_animacion_porcentages_detalles(1);"></div>
</div>

<script>
function p_01451_mostrar_seccion(sec,ele)
{
	document.getElementById("p_01451_tripartita_fondo").scrollTop=0;

	for(i in document.getElementsByClassName("p_01451_tripartita_seccion"))
		if(document.getElementsByClassName("p_01451_tripartita_seccion")[i].nodeType==1)
			document.getElementsByClassName("p_01451_tripartita_seccion")[i].style.display="none";

	for(i in document.getElementsByClassName("p_01451_menu_seccion"))
		if(document.getElementsByClassName("p_01451_menu_seccion")[i].nodeType==1)
			document.getElementsByClassName("p_01451_menu_seccion")[i].className="p_01451_menu_seccion";

	ele.className="p_01451_menu_seccion p_01451_activo_seccion";
	document.getElementById(sec).style.display="";

	if(ele.id=="p_01451_menu_6")
	{
		p_01000_animacion_porcentages_detalles(0);
		document.getElementById("p_01451_tripartita_6_progreso").innerHTML=document.getElementById("p_00962_grafico_progreso").innerHTML.replace("onclick","none");
		document.getElementById("p_01451_tripartita_6_progreso").insertAdjacentHTML("beforeEnd",''+
			'<div id="p_01451_tripartita_6_leyenda">'+
			document.getElementById("p_00962_grafico_leyenda").innerHTML.replace("onclick","none")+
			'</div>'+
		'');
		document.getElementById("p_00962_grafico_progreso_vocabulario").setAttribute("style","border-radius: 100%; overflow: hidden;");
	}
	else if(ele.id=="p_01451_menu_3")
	{
		document.getElementById("p_01451_tripartita_seccion_3_seccion_1").innerHTML=document.getElementById("p_00962_grafico_progreso_detalle_vocabulario").innerHTML;
		document.getElementById("p_01451_tripartita_seccion_3_seccion_2").innerHTML=document.getElementById("p_00962_grafico_progreso_detalle_estructura").innerHTML;
		document.getElementById("p_01451_tripartita_seccion_3_seccion_3").innerHTML=document.getElementById("p_00962_grafico_progreso_detalle_trinity").innerHTML;

		document.getElementById('p_01451_tripartita_seccion_3_menu_1').innerHTML=document.getElementById('p_00962_grafico_progreso_vocabulario').innerHTML;
		document.getElementById('p_01451_tripartita_seccion_3_menu_2').innerHTML=document.getElementById('p_00962_grafico_progreso_estructura').innerHTML;
		document.getElementById('p_01451_tripartita_seccion_3_menu_3').innerHTML=document.getElementById('p_00962_grafico_progreso_tnt').innerHTML;

		if(personal_datos_info.trinity=="0")
		{
			document.getElementById('p_01451_tripartita_seccion_3_seccion_3').style.fontSize="3em";
		}
	}
	else if(ele.id=="p_01451_menu_5")
	{
		var paginas = {"s1":"S1","p2":"S2","p3":"S3","p4":"S4","p5":"S5"};

		document.getElementById("p_01451_tripartita_seccion_5_detalle").innerHTML="";
		ajax_load_page(
			"http://app.oxbridge.es/app/movil/FT/Manual "+paginas[personal_datos_info.nivel.toLowerCase()]+".php",
			"p_01451_tripartita_seccion_5_detalle",
			"",
			false,
			function(){
				if(p_0010197_cookie('get','p_01451_tripartita_fondo_scroll_top')!="undefined")
				{
					document.getElementById("p_01451_tripartita_fondo").scrollTop=p_0010197_cookie('get','p_01451_tripartita_fondo_scroll_top');
				}
			}
		);
	}
}


function p_01451_mostrar_seccion_3_menu_detalle(id)
{
	p_01451_tripartita_fondo.scrollTop=0;
	for(i in document.getElementsByClassName('p_01451_tripartita_seccion_3_seccion_detalle'))
	{
		if(document.getElementsByClassName('p_01451_tripartita_seccion_3_seccion_detalle')[i].nodeType=="1")
			document.getElementsByClassName('p_01451_tripartita_seccion_3_seccion_detalle')[i].style.display="none";
	}

	document.getElementById(id).style.display="";
}

function p_01451_eliminar_duplicados()
{
	document.getElementById("p_01451_tripartita_6_progreso").innerHTML = "" ;
	document.getElementById("p_01451_tripartita_seccion_3_seccion_1").innerHTML = "";
	document.getElementById("p_01451_tripartita_seccion_3_seccion_2").innerHTML = "";
	document.getElementById("p_01451_tripartita_seccion_3_seccion_3").innerHTML = "";
	document.getElementById('p_01451_tripartita_seccion_3_menu_1').innerHTML = "";
	document.getElementById('p_01451_tripartita_seccion_3_menu_2').innerHTML = "";
	document.getElementById('p_01451_tripartita_seccion_3_menu_3').innerHTML = "";
}

function p_01451_restaurar_circulos_progreso_tripartita_despues_eliminar_duplicados()
{
  p_01000_animacion_porcentages_detalles(0);
  document.getElementById("p_01451_tripartita_6_progreso").innerHTML=document.getElementById("p_00962_grafico_progreso").innerHTML.replace("onclick","none");
  document.getElementById("p_01451_tripartita_6_progreso").insertAdjacentHTML("beforeEnd",''+
    '<div id="p_01451_tripartita_6_leyenda">'+
    document.getElementById("p_00962_grafico_leyenda").innerHTML.replace("onclick","none")+
    '</div>'+
  '');
  document.getElementById("p_00962_grafico_progreso_vocabulario").setAttribute("style","border-radius: 100%; overflow: hidden;");
}
</script>
