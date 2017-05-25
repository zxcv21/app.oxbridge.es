<%response.Buffer=true%>

<!--#include virtual="/utilities/asp/mostrar_sql/conexion_asp.asp"-->

<!--https://sb.oxbridge.es/utilities/asp/mostrar_sql/sql_02_listado_tablas_01_html_01_template.asp-->

<html>

<HEAD>

	<meta https-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<title>00680 mostrar tablas</title>
	<link rel="stylesheet" type="text/css" href="https://sb.oxbridge.es/utilities/asp/mostrar_sql/oxgestion.css">
	<%Response.addHeader "pragma", "no-cache"
	Response.CacheControl = "Private"
	' Selecciona una de las tres opciones siguientes
	Response.Expires = -1441
	'Response.Expires = 0
	'Response.ExpiresAbsolute = #1/5/2000 12:12:12#%>

</HEAD>

<body topmargin="0" bottommargin="0" leftmargin="0" rightmargin="0">

<!--0.- COMPROBAR SESION Y GUARDAR DATOS MASIVOS -INICIO-->
<%
	if request.Form("conexion")<>"" then
		conexion=request.Form("conexion")
	else
		IF LEN(REQUEST.QUERYSTRING("conexion"))>0 THEN
			conexion=REQUEST.QUERYSTRING("conexion")
		ELSE
			conexion=""
		END IF
	end if
	tipo_bd=""
	bdd=""
	if len(conexion) > 0 then
		b_conexion=split(conexion," - ")
		tipo_bd=b_conexion(0)
		bdd=b_conexion(1)
	end if
	if request.Form("conexion de la sentencia sql")<>"" then
		conexiondelasentenciasql=request.Form("conexion de la sentencia sql")
	else
		IF LEN(REQUEST.QUERYSTRING("conexiondelasentenciasql"))>0 THEN
			conexiondelasentenciasql=REQUEST.QUERYSTRING("conexiondelasentenciasql")
		ELSE
			conexiondelasentenciasql=""
		END IF
	end if
	if request.Form("filtro")<>"" then
		filtro=request.Form("filtro")
	else
		IF LEN(REQUEST.QUERYSTRING("filtro"))>0 THEN
			filtro=REQUEST.QUERYSTRING("filtro")
		ELSE
			filtro=""
		END IF
	end if

	'0.1.- DATOS PAGINA ACTUAL -FIN	

	'0.3.- INFORMACION STRING PARA VERIFICAR PASSWORD -INICIO

	INFORMACIONREDIRECCION="?SESIONID="&SESIONID
		
	INFORMACIONTRASPASADA="&conexion="&conexion
	INFORMACIONTRASPASADA=INFORMACIONTRASPASADA & "&conexiondelasentenciasql="&conexiondelasentenciasql
	INFORMACIONTRASPASADA=INFORMACIONTRASPASADA & "&filtro="&filtro
	%>
<!--0.- COMPROBAR SESION Y GUARDAR DATOS MASIVOS -FIN-->

<!--1.- GUARDAR DATOS EN TABLAS PARA AGILIZAR CALCULOS -INICIO-->
<!--1.- GUARDAR DATOS EN TABLAS PARA AGILIZAR CALCULOS -FIN-->

<!--2.- ACCESOS PAGINA -INICIO-->
<!--2.- ACCESOS PAGINA -FIN-->

<!--4.- VERIFICAR DATOS -INICIO-->
<!--4.- VERIFICAR DATOS -FIN-->

<!--5.- ENCABEZADO PAGINA -INICIO-->
<!--5.- ENCABEZADO PAGINA -FIN-->

<!--5.- ENCABEZADO PAGINA -INICIO-->
<!--5.- ENCABEZADO PAGINA -FIN-->

<!--6.- MOSTRAR ERRORES O VERIFICACIONES -INICIO-->
<!--6.- MOSTRAR ERRORES O VERIFICACIONES -FIN-->

<!--7.- LISTADO DE LAS TABLAS -INICIO-->

	<%MARGENIZQUIERDO=2
	MARGENDERECHO=2%>
	<%TABLA0700000001ANCHOTD01=45
	TABLA0700000001ANCHOTD02=300
	TABLA0700000001ANCHOTD03=150
	TABLA0700000001ANCHOTD04=50
	TABLA0700000001ANCHOTD05=60
	TABLA0700000001ANCHOTD06=50
	TABLA0700000001ANCHOTD07=60%>
    <%TABLA0700000001ANCHO=TABLA0700000001ANCHOTD01+TABLA0700000001ANCHOTD02+TABLA0700000001ANCHOTD03+TABLA0700000001ANCHOTD04+TABLA0700000001ANCHOTD05+TABLA0700000001ANCHOTD06+TABLA0700000001ANCHOTD07%>
	<table width="<%=TABLA0700000001ANCHO%>" cellpadding="0" cellspacing="0" style="table-layout: fixed">
		<TR>
			<td width="<%=TABLA0700000001ANCHOTD01%>PX" height="0" id="P00680T070000000001TR00TD01"></td>
			<td width="<%=TABLA0700000001ANCHOTD02%>PX" id="P00680T070000000001TR00TD02"></td>
			<td width="<%=TABLA0700000001ANCHOTD03%>PX" id="P00680T070000000001TR00TD03"></td>
			<td width="<%=TABLA0700000001ANCHOTD04%>PX" id="P00680T070000000001TR00TD04"></td>
			<td width="<%=TABLA0700000001ANCHOTD05%>PX" id="P00680T070000000001TR00TD05"></td>
			<td width="<%=TABLA0700000001ANCHOTD06%>PX" id="P00680T070000000001TR00TD06"></td>
			<td width="<%=TABLA0700000001ANCHOTD07%>PX" id="P00680T070000000001TR00TD07"></td>
		</TR>
		<TR>
			<td colspan="7">
				<font class="FUENTEGRANDECOLORINFORMATIVOBOLD">
					<%if IDIOMA="CATALAN" THEN%>
                        Llistat de les taules de "<%=conexion%>"
                    <%else%>
                        Listado de las tablas de "<%=conexion%>"
                    <%end if%>
					<%if len(filtro)>0 THEN%>
                    	<br>
						<%if IDIOMA="CATALAN" THEN%>
                            Nom�s es llistaran taules i consultes amb l'expressi� "<%=filtro%>"
                        <%else%>
                            S�lo se listar�n tablas y consultas con la expresi�n "<%=filtro%>"
                        <%end if%>
                    <%end if%>
				</font>
			</td>
		</TR>
		<%if len(conexion)=0 or isnull(conexion) then%>
			<tr>
				<td colspan="7">
					<font class="FUENTEGRANDECOLORINCORRECTOBOLD">
						<%if IDIOMA="CATALAN" THEN%>
							No has seleccionat cap odbc
						<%else%>
							No has seleccionado ning�n odbc
						<%end if%>
					</font>
				</td>
			</tr>
		<%else%>
            <tr>
				<%tdstyle="style="""
				tdstyle=tdstyle & "padding-left: 2px"
				tdstyle=tdstyle & "; padding-right: 2px"
				tdstyle=tdstyle & "; padding-top: 3px"
				tdstyle=tdstyle & "; padding-bottom: 3px"
				tdstyle=tdstyle & """"%>
				<td colspan="2" valign="bottom" <%=tdstyle%> class="BORDE01BSOLIDOCOLORBORDE01">
					<font class="FUENTEESTANDARCOLORNORMALBOLD">
						<%if IDIOMA="CATALAN" THEN%>
							Taula o consulta
						<%else%>
							Tabla o consulta
						<%end if%>
					</font>
				</td>
				<%tdstyle="style="""
				tdstyle=tdstyle & "padding-top: 3px"
				tdstyle=tdstyle & "; padding-bottom: 3px"
				tdstyle=tdstyle & """"%>
				<td align="center" valign="bottom" <%=tdstyle%> class="BORDE01BSOLIDOCOLORBORDE01">
					<font class="FUENTEESTANDARCOLORNORMALBOLD">
						<%if IDIOMA="CATALAN" THEN%>
							Nom pel codi
						<%else%>
							Nombre para el c�digo
						<%end if%>
					</font>
				</td>
				<%tdstyle="style="""
				tdstyle=tdstyle & "padding-top: 3px"
				tdstyle=tdstyle & "; padding-bottom: 3px"
				tdstyle=tdstyle & """"%>
				<td colspan="4" align="center" valign="bottom" <%=tdstyle%> class="BORDE01BSOLIDOCOLORBORDE01">
					<font class="FUENTEESTANDARCOLORNORMALBOLD">
						<%if IDIOMA="CATALAN" THEN%>
							Tipus de codi a generar
						<%else%>
							Tipo de c�digo a generar
						<%end if%>
					</font>
				</td>
			</tr>
			<%
			COLORFILA1="#ffffff"
			COLORFILA2="#cccccc"
			Set conn=Server.CreateObject("ADODB.Connection")
			call p_0000000_asp_f_01_conexion_base_datos( tipo_bd, "", "", "", bdd, p_0000000_asp_f_01_conexion )
			conn.open(p_0000000_asp_f_01_conexion)%>
			<%set LISTADOTABLASCONN = CreateObject("ADOX.Catalog")  
			LISTADOTABLASCONN.activeConnection = conn%>
			<%contadortablas=0%>
			<%for each TABLE in LISTADOTABLASCONN.TABLES%>
				<%if left(TABLE.name,4)<>"MSys" then%>
					<%mostrartabla="si"
					if len(filtro)>0 then
						mostrartabla="no"
						nombretabla=lcase(TABLE.name)
						textoaencontrar=lcase(filtro)
						If InStr(nombretabla,textoaencontrar)>0 then
							mostrartabla="si"
						End if
					end if%>
                    <%if mostrartabla="si" then%>
						<%contadortablas=contadortablas+1%>
                        <%IF contadortablas/2=INT(contadortablas/2) THEN
                            trbgcolor=COLORFILA1
                        ELSE
                            trbgcolor=COLORFILA2
                        END IF%>
                        <tr bgcolor="<%=trbgcolor%>">
                            <%PAGINAGENERARCODIGO="sb.oxbridge.es/utilities/asp/mostrar_sql/sql_03_campos_tabla_01_html_01_template.asp"
							IF LEN(PAGINAGENERARCODIGO)>0 THEN
                                IRGENERARCODIGO="https://"&PAGINAGENERARCODIGO
								IRGENERARCODIGO=IRGENERARCODIGO & "?conexion="&conexion
								IRGENERARCODIGO=IRGENERARCODIGO & "&conexiondelasentenciasql="&conexiondelasentenciasql
                            END IF%>
                            <form method="post" action="<%=IRGENERARCODIGO%>" target="p_0001556_iframe_tabla_seleccionada_campos">
								<td align="right" valign="top" style="padding-left: 2px; padding-right: 2px; padding-top: 3px; padding-bottom: 3px">
									<span class="FUENTEESTANDARCOLORNORMALBOLD">
										<%=contadortablas%>.-
									</span>
								</td>
								<td valign="top" style="padding-right: 2px; padding-top: 3px; padding-bottom: 3px">
									<span class="FUENTEESTANDARCOLORNORMALBOLD" style="word-break:break-all">
										<%=TABLE.name%>
										<input name="tabla" id="tabla" value="<%=TABLE.name%>" type="hidden">
									</span>
								</td>
								<td align="center" valign="top" style="padding-top: 3px; padding-bottom: 3px">
									<input name="nombre codigo" value="" type="text" class="INPUTFUENTEESTANDARCOLORNORMAL" maxlength="20" style="width: <%=TABLA0700000001ANCHOTD03-10%>px">
								</td>
								<td align="center" valign="top" style="padding-top: 3px; padding-bottom: 3px">
									<input name="select" id="select" value="select" type="submit" class="BOTONFUENTEPEQUENYACOLORNORMAL">
								</td>
								<td align="center" valign="top" style="padding-top: 3px; padding-bottom: 3px">
									<input name="group" id="group" value="group" type="submit" class="BOTONFUENTEPEQUENYACOLORNORMAL">
								</td>
								<td align="center" valign="top" style="padding-top: 3px; padding-bottom: 3px">
									<input name="update" id="update" value="update" type="submit" class="BOTONFUENTEPEQUENYACOLORNORMAL">
								</td>
								<td align="center" valign="top" style="padding-top: 3px; padding-bottom: 3px">
									<input name="insert" id="insert" value="insert" type="submit" class="BOTONFUENTEPEQUENYACOLORNORMAL">
								</td>
							</form>
                        </tr>
						<%if right(contadortablas,2) = "00" then
							response.Flush
						end if%>
					<%end if%>
				<%end if%>
			<%next%>
			<%set LISTADOTABLASCONN = nothing%>
			<%CONN.close
			set CONN=nothing%>
		<%end if%>
	</table>

<!--7.- LISTADO DE LAS TABLAS -FIN-->

<!--8.- PIE DE PAGINA -INICIO-->
<!--8.- PIE DE PAGINA -FIN-->

<!--9.- REDIRIGIR -INICIO-->
<!--9.- REDIRIGIR -FIN-->

</body>

</html>