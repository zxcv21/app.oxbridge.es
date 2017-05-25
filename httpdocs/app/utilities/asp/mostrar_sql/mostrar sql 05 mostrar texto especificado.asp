<%response.Buffer= true%>

<html>

<%Set conn099=Server.CreateObject("ADODB.Connection")
conn099.open "paginas_web"%>

<HEAD>

	<meta https-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<link rel="stylesheet" type="text/css" href="../oxgestion.css">
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
<!--3.- ABRIR CONSULTAS CON DATOS NECESARIOS PARA CUALQUIER PUNTO DE LA PAGINA -FIN-->

<!--4.- VERIFICAR DATOS -INICIO-->
<!--4.- VERIFICAR DATOS -FIN-->

<!--5.- ENCABEZADO PAGINA -INICIO-->
<!--5.- ENCABEZADO PAGINA -FIN-->

<!--5.- ENCABEZADO PAGINA -INICIO-->
<!--5.- ENCABEZADO PAGINA -FIN-->

<!--6.- MOSTRAR ERRORES O VERIFICACIONES -INICIO-->
<!--6.- MOSTRAR ERRORES O VERIFICACIONES -FIN-->

<!--7.- GENERAR CODIGO SQL -INICIO-->

	<%EXPRESION="app.oxbridge.es"%>
	
	<%MARGENIZQUIERDO=2
	MARGENDERECHO=2
	TABLA0700000001ANCHO=800
	TABLA0700000001ALTO=600%>
	<%TABLASTYLE="STYLE="""
	TABLASTYLE=TABLASTYLE & "MARGIN-LEFT: "&MARGENIZQUIERDO&"PX"
	TABLASTYLE=TABLASTYLE & "; MARGIN-RIGHT: "&MARGENDERECHO&"PX"
	TABLASTYLE=TABLASTYLE & """"%>
	<table width="<%=TABLA0700000001ANCHO%>" align="center" cellpadding="0" cellspacing="0">
		<TR>
			<%TABLA0700000001ANCHOOCUPADO=0%>
			<%TABLA0700000001ANCHOTD01=30
			TABLA0700000001ANCHOOCUPADO=TABLA0700000001ANCHOOCUPADO+TABLA0700000001ANCHOTD01%>
			<%TABLA0700000001ANCHOTD03=400
			TABLA0700000001ANCHOOCUPADO=TABLA0700000001ANCHOOCUPADO+TABLA0700000001ANCHOTD03%>
			<%TABLA0700000001ANCHOTD02=TABLA0700000001ANCHO-TABLA0700000001ANCHOOCUPADO%>
			<td width="<%=TABLA0700000001ANCHOTD01%>PX" height="0" id="P00735T070000000001TR00TD01"></td>
			<td width="<%=TABLA0700000001ANCHOTD02%>PX" id="P00735T070000000001TR00TD02"></td>
			<td width="<%=TABLA0700000001ANCHOTD03%>PX" id="P00735T070000000001TR00TD03"></td>
		</TR>
		<TR>
            <%tdstyle="style="""
            tdstyle=tdstyle & "padding-top: 10px"
            tdstyle=tdstyle & "; padding-bottom: 10px"
            tdstyle=tdstyle & """"%>
			<td colspan="4" <%=tdstyle%>>
				<font class="FUENTEGRANDECOLORINFORMATIVOBOLD">
					P�ginas donde se utilitza la expresi�n "<%=EXPRESION%>"
				</font>
			</td>
            <%tdstyle="style="""
            tdstyle=tdstyle & "padding-top: 10px"
            tdstyle=tdstyle & "; padding-bottom: 10px"
            tdstyle=tdstyle & """"%>
            <TD colspan="2" align="right" <%=tdstyle%>>
                <input type="button" value="Imprimir" class="BOTONFUENTEESTANDARCOLORNORMAL" onClick="javascript:window.print();">
            </td>
		</TR>
        <tr>
            <%tdstyle="style="""
            tdstyle=tdstyle & "padding-left: 2px"
            tdstyle=tdstyle & "; padding-right: 2px"
            tdstyle=tdstyle & "; padding-top: 4px"
            tdstyle=tdstyle & "; padding-bottom: 4px"
            tdstyle=tdstyle & """"%>
            <td valign="bottom" class="BORDE01BSOLIDOCOLORBORDE01" <%=tdstyle%>>
                <font class="FUENTEESTANDARCOLORNORMALBOLD">&nbsp;
                	
                </font>
            </td>
            <%tdstyle="style="""
            tdstyle=tdstyle & "padding-left: 2px"
            tdstyle=tdstyle & "; padding-right: 2px"
            tdstyle=tdstyle & "; padding-top: 4px"
            tdstyle=tdstyle & "; padding-bottom: 4px"
            tdstyle=tdstyle & """"%>
            <td valign="bottom" class="BORDE01BSOLIDOCOLORBORDE01" <%=tdstyle%>>
                <font class="FUENTEESTANDARCOLORNORMALBOLD">
                    <%if IDIOMA="CATALAN" THEN%>
                        Ruta
                    <%else%>
                        Ruta
                    <%end if%>
                </font>
            </td>
            <%tdstyle="style="""
            tdstyle=tdstyle & "padding-left: 2px"
            tdstyle=tdstyle & "; padding-right: 2px"
            tdstyle=tdstyle & "; padding-top: 4px"
            tdstyle=tdstyle & "; padding-bottom: 4px"
            tdstyle=tdstyle & """"%>
            <td valign="bottom" class="BORDE01BSOLIDOCOLORBORDE01" <%=tdstyle%>>
                <font class="FUENTEESTANDARCOLORNORMALBOLD">
                    <%if IDIOMA="CATALAN" THEN%>
                        P�gina
                    <%else%>
                        P�gina
                    <%end if%>
                </font>
            </td>
       </tr>
		<%sql0700000001="select " 
        sql0700000001=sql0700000001 & " `CARPETA`"
        sql0700000001=sql0700000001 & " ,`FICHERO`"
        sql0700000001=sql0700000001 & " from"
        sql0700000001=sql0700000001 & " `acceso a) 40 10 codigo pagina web`"
        sql0700000001=sql0700000001 & " where"
		sql0700000001=sql0700000001 & " `CODIGO` like '%"&EXPRESION&"%'"
        sql0700000001=sql0700000001 & " and"
        sql0700000001=sql0700000001 & " `CARPETA` not like '%seguridad%'"
        sql0700000001=sql0700000001 & " and"
        sql0700000001=sql0700000001 & " `FICHERO` not like '%seguridad%'"
        sql0700000001=sql0700000001 & " order by"
        sql0700000001=sql0700000001 & " `CARPETA`"
        sql0700000001=sql0700000001 & " ,`FICHERO`"
        set rs0700000001=server.CreateObject("adodb.recordset") 
        rs0700000001.open sql0700000001, conn099%>
        <%if rs0700000001.bof=false and rs0700000001.eof=false then%>
			<%contadorpaginas=0%>
			<%rs0700000001.movefirst 
            do while not rs0700000001.eof%>
            	<%contadorpaginas=contadorpaginas+1%>
				<%IF contadorpaginas/2=INT(contadorpaginas/2) THEN
					trbgcolor=COLORFILA1
				ELSE
					trbgcolor=COLORFILA2
				END IF%>
				<tr bgcolor="<%=trbgcolor%>">
                    <%tdstyle="style="""
					tdstyle=tdstyle & "padding-left: 2px"
					tdstyle=tdstyle & "; padding-right: 2px"
					tdstyle=tdstyle & "; padding-top: 4px"
					tdstyle=tdstyle & "; padding-bottom: 4px"
                    tdstyle=tdstyle & """"%>
                    <td align="right" valign="top" <%=tdstyle%>>
                        <font class="FUENTEESTANDARCOLORNORMAL">
                            <%=contadorpaginas%>.-
                        </font>
                    </td>
                    <%tdstyle="style="""
					tdstyle=tdstyle & "padding-left: 2px"
					tdstyle=tdstyle & "; padding-right: 2px"
					tdstyle=tdstyle & "; padding-top: 4px"
					tdstyle=tdstyle & "; padding-bottom: 4px"
                    tdstyle=tdstyle & """"%>
                    <td valign="top" <%=tdstyle%>>
                        <font class="FUENTEESTANDARCOLORNORMAL">
                            <%=rs0700000001("CARPETA")%>
                        </font>
                    </td>
                    <%tdstyle="style="""
					tdstyle=tdstyle & "padding-left: 2px"
					tdstyle=tdstyle & "; padding-right: 2px"
					tdstyle=tdstyle & "; padding-top: 4px"
					tdstyle=tdstyle & "; padding-bottom: 4px"
                    tdstyle=tdstyle & """"%>
                    <td valign="top" <%=tdstyle%>>
                        <font class="FUENTEESTANDARCOLORNORMAL">
                            <%=rs0700000001("FICHERO")%>
                        </font>
                    </td>
               </tr>
            <%rs0700000001.movenext 
            loop%>
        <%end if%>
        <%rs0700000001.close 
        set rs0700000001=nothing%>
	</table>

<!--7.- GENERAR CODIGO SQL -FIN-->

<!--8.- PIE DE PAGINA -INICIO-->
<!--8.- PIE DE PAGINA -FIN-->

<!--9.- REDIRIGIR -INICIO-->
<!--9.- REDIRIGIR -FIN-->

<%'https://192.168.0.1/ox/oxgestion/proyectos/mostrar sql 05 mostrar texto especificado.asp%>

</body>

<%conn099.close
set conn099=nothing%>

</html>