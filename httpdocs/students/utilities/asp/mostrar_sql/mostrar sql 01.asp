<!--http://sb.oxbridge.es/utilities/asp/mostrar_sql/mostrar sql 01.asp-->

<html>

<HEAD>

	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<title>00679 código sql</title>
	<link rel="stylesheet" type="text/css" href="oxgestion.css">
	<%Response.addHeader "pragma", "no-cache"
	Response.CacheControl = "Private"
	' Selecciona una de las tres opciones siguientes
	Response.Expires = -1441
	'Response.Expires = 0
	'Response.ExpiresAbsolute = #1/5/2000 12:12:12#%>

</HEAD>

<body topmargin="0" bottommargin="0" leftmargin="0" rightmargin="0">

<!--1.- GUARDAR DATOS EN TABLAS PARA AGILIZAR CALCULOS -INICIO-->
<!--1.- GUARDAR DATOS EN TABLAS PARA AGILIZAR CALCULOS -FIN-->

<!--2.- ACCESOS PAGINA -INICIO-->
<!--2.- ACCESOS PAGINA -FIN-->

<!--3.- ABRIR CONSULTAS CON DATOS NECESARIOS PARA CUALQUIER PUNTO DE LA PAGINA -INICIO-->

	<%'3.1.- INFORMACION DE LA PAGINA Y DE RETORNO -INICIO
	'3.1.- INFORMACION DE LA PAGINA Y DE RETORNO -FIN%>

	<%'3.99.- VOLVER ATRAS -INICIO
	'3.99.- VOLVER ATRAS -INICIO%>

<!--3.- ABRIR CONSULTAS CON DATOS NECESARIOS PARA CUALQUIER PUNTO DE LA PAGINA -FIN-->

<!--4.- VERIFICAR DATOS -INICIO-->
<!--4.- VERIFICAR DATOS -FIN-->

<!--5.- ENCABEZADO PAGINA -INICIO-->
<!--5.- ENCABEZADO PAGINA -FIN-->

<!--5.- ENCABEZADO PAGINA -INICIO-->
<!--5.- ENCABEZADO PAGINA -FIN-->

<!--6.- MOSTRAR ERRORES O VERIFICACIONES -INICIO-->
<!--6.- MOSTRAR ERRORES O VERIFICACIONES -FIN-->

<!--7.- PAGINA PRINCIPAL GENERAR CODIGO SQL -INICIO-->

	<%MARGENIZQUIERDO=6
	TABLA0700000001ANCHO=ANCHO-MARGENIZQUIERDO
	TABLA0700000001ALTO=ALTO-2%>
	<%TABLASTYLE="STYLE="""
	TABLASTYLE=TABLASTYLE & "MARGIN-LEFT: "&MARGENIZQUIERDO&"PX"
	TABLASTYLE=TABLASTYLE & """"%>
	<table width="<%=TABLA0700000001ANCHO%>" align="center" cellpadding="0" cellspacing="0">
		<TR>
			<%TABLA0700000001ANCHOOCUPADO=0%>
			<%TABLA0700000001ANCHOTD02=120
			TABLA0700000001ANCHOOCUPADO=TABLA0700000001ANCHOOCUPADO+TABLA0700000001ANCHOTD02%>
			<%TABLA0700000001ANCHOTD01=TABLA0700000001ANCHO-TABLA0700000001ANCHOOCUPADO%>
			<td width="<%=TABLA0700000001ANCHOTD01%>PX" height="0" id="P00679T070000000001TR00TD01"></td>
			<td width="<%=TABLA0700000001ANCHOTD02%>PX" id="P00679T070000000001TR00TD02"></td>
		</TR>
		<%TABLA0700000001ALTOOCUPADO=0
		TABLA0700000001ALTOTR01=35
		TABLA0700000001ALTOOCUPADO=TABLA0700000001ALTOOCUPADO+TABLA0700000001ALTOTR01
		TABLA0700000001ALTOTR02=35
		TABLA0700000001ALTOOCUPADO=TABLA0700000001ALTOOCUPADO+TABLA0700000001ALTOTR02
		TABLA0700000001ALTOTR03=INT((TABLA0700000001ALTO-TABLA0700000001ALTOOCUPADO)/2)
		TABLA0700000001ALTOOCUPADO=TABLA0700000001ALTOOCUPADO+TABLA0700000001ALTOTR03
		TABLA0700000001ALTOTR04=TABLA0700000001ALTO-TABLA0700000001ALTOOCUPADO%>
		<TR>
			<%TDSTYLE="STYLE="""
			TDSTYLE=TDSTYLE & "PADDING: 3PX"
			TDSTYLE=TDSTYLE & """"%>
			<TD valign="middle" height="<%=TABLA0700000001ALTOTR01%>PX" <%=TDSTYLE%>>
				<FONT class="FUENTEMUYGRANDECOLORINFORMATIVOBOLD">
					<%IF IDIOMA="CATALAN" THEN%>
						Generar codi sql
					<%ELSE%>
						Generar código sql
					<%END IF%>
				</FONT>
			</TD>
			<FORM method="post" action="<%=VOLVERATRAS%>" <%=FORMULARIOVOLVERATRASTARGET%>>
				<%TDSTYLE="STYLE="""
				TDSTYLE=TDSTYLE & "PADDING: 2PX"
				TDSTYLE=TDSTYLE & """"%>
				<td valign="middle" align="RIGHT" <%=TDSTYLE%> onmouseover='style.background="<%=COLORRESALTAR%>"' onmouseout='style.background="#FFFFFF"'>
					<%IF LEN(VOLVERATRAS)>0 THEN%>
						<%IF IDIOMA="CATALAN" THEN
							TEXTOBOTONVOLVER="Tornar"
						ELSE
							TEXTOBOTONVOLVER="Volver"
						END IF%>
						<input type="submit" value="<%=TEXTOBOTONVOLVER%>" class="BOTONFUENTEESTANDARCOLORNORMAL">
					<%ELSE%>
						<FONT class="FUENTEVACIO">&nbsp;
							
						</FONT>
					<%END IF%>
				</td>
			</FORM>
		</TR>
		<TR>
			<%DIRECCIONPAGINACODIGO="00680"
            'CALL DIRECCIONPAGINA( DIRECCIONPAGINAIP, DIRECCIONPAGINACODIGO, DIRECCIONPAGINARUTA, DIRECCIONPAGINASERVIDOR, CONEXIONOFICINA, ANCHOEXPLORER, ANCHOFIREFOX, ANCHOSAFARI, ALTOEXPLORER, ALTOFIREFOX, ALTOSAFARI )
            PAGINAMOSTRARTABLAS="sb.oxbridge.es/utilities/asp/mostrar_sql/mostrar sql 02 listar tablas.asp"
            IF LEN(PAGINAMOSTRARTABLAS)>0 THEN
                IRMOSTRARTABLAS="http://"&PAGINAMOSTRARTABLAS
            END IF%>
            <form method="post" action="<%=IRMOSTRARTABLAS%>" target="PAGINA00679IFRAME01">
				<%TDSTYLE="STYLE="""
				TDSTYLE=TDSTYLE & "PADDING: 3PX"
				TDSTYLE=TDSTYLE & """"%>
				<TD valign="middle" height="<%=TABLA0700000001ALTOTR02%>PX" <%=TDSTYLE%>>
					<FONT class="FUENTEESTANDARCOLORINFORMATIVOBOLD">
						<%IF IDIOMA="CATALAN" THEN%>
							Selecciona odbc&nbsp;
						<%ELSE%>
							Selecciona odbc&nbsp;
						<%END IF%>
						<select name="conexion" id="conexion" class="FUENTEESTANDARCOLORNORMAL">
							<option value="" selected></option>
							<option value="msaccess - sb_oxcenters">access - sb_oxcenters</option>
							<option value="msaccess - sb_oxgestion">access - sb_oxgestion</option>
							<!--option value="mysql - oxgestion">mysql - oxgestion</option-->
						</select>
						&nbsp;&nbsp;
						<%IF IDIOMA="CATALAN" THEN%>
							Nom conexió&nbsp;
						<%ELSE%>
							Nombre conexión&nbsp;
						<%END IF%>
						<input name="conexion de la sentencia sql" id="conexion de la sentencia sql" style="width: 100px" class="INPUTFUENTEESTANDARCOLORNORMAL">
						&nbsp;&nbsp;
						<%IF IDIOMA="CATALAN" THEN%>
							Filtre&nbsp;
						<%ELSE%>
							Filtro&nbsp;
						<%END IF%>
						<input name="filtro" id="filtro" style="width: 200px" class="INPUTFUENTEESTANDARCOLORNORMAL">
						&nbsp;&nbsp;
						<%IF IDIOMA="CATALAN" THEN
							textobotonmostrartablas="Mostrar taules"
						ELSE
							textobotonmostrartablas="Mostrar tablas"						
						END IF%>
						<INPUT value="<%=textobotonmostrartablas%>" type="submit" name="mostrar tablas" id="mostrar tablas" class="BOTONFUENTEESTANDARCOLORNORMAL">
					</FONT>
				</TD>
			</form>
		</TR>
		<TR>
			<TD colspan="2" valign="top" align="center" height="<%=TABLA0700000001ALTOTR03%>PX" class="BORDE01TBLRSOLIDOCOLORBORDE01" id="P00679T070000000001TR03TD01">
				<iframe height="100%" width="100%" frameborder="0" name="PAGINA00679IFRAME01" scrolling="auto"></iframe>
			</TD>
		</TR>
		<TR>
			<TD colspan="2" valign="top" height="<%=TABLA0700000001ALTOTR04%>PX" class="BORDE01BLRSOLIDOCOLORBORDE01" id="P00679T070000000001TR04TD01">
				<iframe height="<%=TABLA0700000001ALTOTR04%>px" width="<%=TABLA0700000001ANCHO-20%>px" frameborder="0" name="PAGINA00679IFRAME02" scrolling="auto"></iframe>
			</TD>
		</TR>
	</TABLE>


<!--7.- PAGINA PRINCIPAL GENERAR CODIGO SQL -FIN-->

<!--8.- PIE DE PAGINA -INICIO-->
<!--8.- PIE DE PAGINA -FIN-->

<!--9.- REDIRIGIR -INICIO-->
<!--9.- REDIRIGIR -FIN-->

</body>

</html>