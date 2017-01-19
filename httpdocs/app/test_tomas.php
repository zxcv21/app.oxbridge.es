<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>

</head>
<body>
<div id="ordenadas" style="width:100%;" >

</div>
<div id="por_ordenadar" style="width:100%; margin-top: 30px" >
</div>
<script>

js_matriz= new Array();
js_matriz_ordenada= new Array();

js_matriz[js_matriz.length]=[1,"#E7112D"];
js_matriz[js_matriz.length]=[2,"#F5ADC1"];
js_matriz[js_matriz.length]=[3,"#F993C3"];
js_matriz[js_matriz.length]=[4,"#F3C9CA"];
js_matriz[js_matriz.length]=[5,"#F8E817"];
js_matriz[js_matriz.length]=[6,"#F4DA5F"];
js_matriz[js_matriz.length]=[7,"#F7E7A9"];
js_matriz[js_matriz.length]=[8,"#B5E8BF"];
js_matriz[js_matriz.length]=[9,"#CCE227"];
js_matriz[js_matriz.length]=[10,"#57AA1C"];
js_matriz[js_matriz.length]=[11,"#00997A"];
js_matriz[js_matriz.length]=[12,"#3044B5"];
js_matriz[js_matriz.length]=[13,"#002653"];
js_matriz[js_matriz.length]=[14,"#894FBF"];
js_matriz[js_matriz.length]=[15,"#5F605A"];
js_matriz[js_matriz.length]=[16,"#96938E"];
js_matriz[js_matriz.length]=[17,"#603411"];
js_matriz[js_matriz.length]=[18,"#266658"];
js_matriz[js_matriz.length]=[19,"#EDC788"];
js_matriz[js_matriz.length]=[20,"#AB711F"];
js_matriz[js_matriz.length]=[21,"#F1E8C7"];
js_matriz[js_matriz.length]=[22,"#DC682D"];
js_matriz[js_matriz.length]=[32,"#F59A27"];
js_matriz[js_matriz.length]=[24,"#FF5001"];
js_matriz[js_matriz.length]=[25,"#7F263C"];
js_matriz[js_matriz.length]=[26,"#D60270"];
js_matriz[js_matriz.length]=[27,"#52BEE2"];
js_matriz[js_matriz.length]=[28,"#9CC3E2"];

var js_html="";
var p_js_bucle_01=0;

for( p_js_bucle_01=0 ; p_js_bucle_01 < js_matriz.length ; p_js_bucle_01++ )
{

	js_html="<div style='height: 100px; width: 100px ;background-color:"+js_matriz[p_js_bucle_01][1]+"; float:left '>"+js_matriz[p_js_bucle_01][0]+"</div>";
	document.getElementById('por_ordenadar').insertAdjacentHTML('beforeend',js_html)

};

</script>
</div>
</body>
</html>