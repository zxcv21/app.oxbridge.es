<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1s" />
    <title>Editor de preguntas</title>
    
    
    <style>
		/*fuentes--------------------------*/
		@font-face {
			font-family: HelveticaNeue;
			letter-spacing:0.05em;
			src: url("./fonts/HelveticaNeue.woff");
		}
		@font-face {
			font-family: HelveticaNeueRoman;
			letter-spacing:0.05em;
			src: url("./fonts/HelveticaNeueRoman.woff");
		}
		
		body
		{
			max-width:800px;
			min-width:100px;
			margin:auto;
			padding:10px;
			font-family:HelveticaNeue;
		}
		.formulario
		{
			/*text-align:center;*/
		}
		.blod
		{
			font-family:HelveticaNeueRoman;
		}
		.invertido
		{
			background: #666;
			color: #fff;
			padding:5px;
		}
		table
		{
			text-align:center;
			width:100%
		}
		.td_input
		{
			width:100%;
		}
		
		textarea
		{
			width:100%;
		}
		
		#preguntas_asignadas
		{
			font-size:2em;
		}
		.align_r
		{
			text-align:right;
		}
		
		
	
    </style>
    
    <script>
		function resize_textarea(a)
		{
		  a.style.height = 'auto';
		  a.style.height = a.scrollHeight+'px';
		}
		
		function seleccionar_radius()
		{
			document.getElementById("r"+Math.floor((Math.random(new Date().getTime()) * 4) + 1)).click();
		}
    </script>

</head>

<body onload="seleccionar_radius();">
	
    
    
    <div id="info" class="invertido blod">
    	<h3>
        <center>
        	<h1>To Correct</h1>
            <img style="float:left;" src="http://app.oxbridge.es/app/images/antes.png">
            <span id="preguntas_asignadas">1 / 5</span> CCQ still asigned
            <img style="float:right;" src="http://app.oxbridge.es/app/images/despues.png">
        </center>
        <hr />
        Level: <span id="level">S1</span><br>
        Theme: <span id="tema">tema</span> - <span id="subtema">subtema</span><br>
        Title: Choose the RIGHT answer<br>
        </h3>
    </div>
    <br>
    
    <div id="form">
        <form class="formulario" method="post" action="">
            Question:<hr />
            <textarea name="pregunta" onkeyup="resize_textarea(this);" onkeydown="resize_textarea(this);" onkeypress="resize_textarea(this);" onchange="resize_textarea(this);" required></textarea><br><br>
            
            <div id="tf">
                ANSWERS:<hr />
                <table>
                    <tr>
                        <td>Right</td><td>Option</td>
                    </tr>
                    <tr>
                        <td><input id="r1" name="right" type="radio"></td><td><input class="td_input" name="titulo" placeholder="answer 1" required></td>
                    </tr>
                    <tr>
                        <td><input id="r2" name="right" type="radio"></td><td><input class="td_input" name="titulo" placeholder="answer 2" required></td>
                    </tr>
                    <tr>
                        <td><input id="r3" name="right" type="radio"></td><td><input class="td_input" name="titulo" placeholder="answer 3" required></td>
                    </tr>
                    <tr>
                        <td><input id="r4" name="right" type="radio"></td><td><input class="td_input" name="titulo" placeholder="answer 4" required></td>
                    </tr>
				</table>
                <br>
            </div>
            
            Explication:<hr />
            <textarea name="explicacion" onkeyup="resize_textarea(this);" onkeydown="resize_textarea(this);" onkeypress="resize_textarea(this);" onchange="resize_textarea(this);" required></textarea><br><br>
            
            <div class="align_r" ><input type="submit"></div>
            
        	<input type="hidden" name="" value="">
        	<input type="hidden" name="" value="">
        </form>
	</div>

</body>


</html>