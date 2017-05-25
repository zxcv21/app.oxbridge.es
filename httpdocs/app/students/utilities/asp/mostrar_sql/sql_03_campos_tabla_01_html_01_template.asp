<%response.Buffer=true%>

<!--#include virtual="/utilities/asp/mostrar_sql/conexion_asp.asp"-->

<!--https://sb.oxbridge.es/utilities/asp/mostrar_sql/sql_03_campos_tabla_01_html_01_template.asp-->

<html>

<HEAD>

	<meta https-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<title>00748 codigo sql</title>
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
	'0.1.- DATOS PAGINA ACTUAL -INICIO

	IF LEN(REQUEST.QUERYSTRING("conexion"))>0 THEN
		conexion=REQUEST.QUERYSTRING("conexion")
	ELSE
		conexion=""
	END IF
	tipo_bd=""
	bdd=""
	if len(conexion) > 0 then
		b_conexion=split(conexion," - ")
		tipo_bd=b_conexion(0)
		bdd=b_conexion(1)
	end if
	IF LEN(REQUEST.QUERYSTRING("conexiondelasentenciasql"))>0 THEN
		conexiondelasentenciasql=REQUEST.QUERYSTRING("conexiondelasentenciasql")
	ELSE
		conexiondelasentenciasql=""
	END IF
	if request.Form("select")<>"" then
		accion="select"
	else
		if request.Form("group")<>"" then
			accion="group"
		else
			if request.Form("update")<>"" then
				accion="update"
			else
				if request.Form("insert")<>"" then
					accion="insert"
				else
					if len(request.querystring("accion"))>0 then
						accion=request.querystring("accion")
					else
						accion=""
					end if
				end if
			end if
		end if
	end if
	if request.Form("nombre codigo")<>"" then
		nombrecodigo=request.Form("nombre codigo")
	else
		if len(request.querystring("nombrecodigo"))>0 then
			nombrecodigo=request.querystring("nombrecodigo")
		else
			nombrecodigo="codigo"
		end if
	end if
	if request.Form("tabla")<>"" then
		tabla=request.Form("tabla")
	else
		if len(request.querystring("tabla"))>0 then
			tabla=request.querystring("tabla")
		else
			tabla=""
		end if
	end if

	'0.1.- DATOS PAGINA ACTUAL -FIN	

%>
<!--0.- COMPROBAR SESION Y GUARDAR DATOS MASIVOS -FIN-->

<!--1.- GUARDAR DATOS EN TABLAS PARA AGILIZAR CALCULOS -INICIO-->
<!--1.- GUARDAR DATOS EN TABLAS PARA AGILIZAR CALCULOS -FIN-->

<!--2.- ACCESOS PAGINA -INICIO-->
<!--2.- ACCESOS PAGINA -FIN-->

<!--3.- ABRIR CONSULTAS CON DATOS NECESARIOS PARA CUALQUIER PUNTO DE LA PAGINA -INICIO-->

	<%'3.1.- INFORMACION DE LA PAGINA Y DE RETORNO -INICIO

	if len(conexiondelasentenciasql)>0 then
		conexionconbasededatos=conexiondelasentenciasql
	else
		conexionconbasededatos="conexionconbasededatos"
	end if

	'3.1.- INFORMACION DE LA PAGINA Y DE RETORNO -FIN%>

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

	<%TABLA0700000001MARGENIZQUIERDO=0
    TABLA0700000001MARGENDERECHO=0
    TABLA0700000001MARGENSUPERIOR=0
    TABLA0700000001MARGENINFERIOR=0
    TABLA0700000001ANCHO=ANCHO-TABLA0700000001MARGENIZQUIERDO+TABLA0700000001MARGENDERECHO
	TABLA0700000001ALTO=ALTO-TABLA0700000001MARGENSUPERIOR-TABLA0700000001MARGENINFERIOR%>
    <%TABLASTYLE="STYLE="""
    TABLASTYLE=TABLASTYLE & "MARGIN-LEFT: "&TABLA0700000001MARGENIZQUIERDO&"px"
    TABLASTYLE=TABLASTYLE & "; MARGIN-RIGHT: "&TABLA0700000001MARGENDERECHO&"px"
    TABLASTYLE=TABLASTYLE & "; MARGIN-TOP: "&TABLA0700000001MARGENSUPERIOR&"px"
    TABLASTYLE=TABLASTYLE & "; MARGIN-BOTTOM: "&TABLA0700000001MARGENINFERIOR&"px"
    TABLASTYLE=TABLASTYLE & """"%>
	<table width="<%=TABLA0700000001ANCHO%>" cellpadding="0" cellspacing="0">
		<TR>
            <%TABLA0700000001ANCHOOCUPADO=0
            TABLA0700000001ANCHOC2=80
            TABLA0700000001ANCHOOCUPADO=TABLA0700000001ANCHOOCUPADO+TABLA0700000001ANCHOC2
            TABLA0700000001ANCHOC3=80
            TABLA0700000001ANCHOOCUPADO=TABLA0700000001ANCHOOCUPADO+TABLA0700000001ANCHOC3
            TABLA0700000001ANCHOC4=80
            TABLA0700000001ANCHOOCUPADO=TABLA0700000001ANCHOOCUPADO+TABLA0700000001ANCHOC4
            TABLA0700000001ANCHOC1=TABLA0700000001ANCHO-TABLA0700000001ANCHOOCUPADO%>
			<td width="<%=TABLA0700000001ANCHOC1%>PX" height="0" id="P00748T070000000001TR00TD01"></td>
			<td width="<%=TABLA0700000001ANCHOC2%>PX" id="P00748T070000000001TR00TD02"></td>
			<td width="<%=TABLA0700000001ANCHOC3%>PX" id="P00748T070000000001TR00TD03"></td>
			<td width="<%=TABLA0700000001ANCHOC4%>PX" id="P00748T070000000001TR00TD04"></td>
		</TR>
		<%PAGINAGENERARCODIGO="sb.oxbridge.es/utilities/asp/mostrar_sql/sql_04_codigo_01_html_01_template.asp"
        IF LEN(PAGINAGENERARCODIGO)>0 THEN
            IRCODIGO="https://"&PAGINAGENERARCODIGO
            IRCODIGO=IRCODIGO & "?conexion="&conexion
            IRCODIGO=IRCODIGO & "&conexiondelasentenciasql="&conexiondelasentenciasql
            IRCODIGO=IRCODIGO & "&accion="&accion
            IRCODIGO=IRCODIGO & "&tabla="&tabla
        END IF%>
		<FORM method="post" action="<%=IRCODIGO%>" target="p_0001556_iframe_codigo_sql">
            <TR>
                <%TDSTYLE="style="""
                TDSTYLE=TDSTYLE & " padding: 5px"
                TDSTYLE=TDSTYLE & """"%>
                <td <%=TDSTYLE%>>
                    <font class="FUENTEGRANDECOLORINFORMATIVOBOLD">
                        <%if IDIOMA="CATALAN" THEN%>
                            Camps de la taula seleccionada (per a <%=accion%>):
                            <br>
                            Taula o consulta: "<%=tabla%>"
                        <%else%>
                            Campo de la tabla seleccionada (para <%=accion%>):
                            <br>
                            Tabla o consulta: "<%=tabla%>"
                        <%end if%>
                    </font>
                </td>
                <%TDSTYLE="style="""
                TDSTYLE=TDSTYLE & " padding: 5px"
                TDSTYLE=TDSTYLE & """"%>
                <td colspan="3" <%=TDSTYLE%> align="right" valign="top">
                    <input name="SQL CON TODOS LOS CAMPOS" id="SQL CON TODOS LOS CAMPOS" value="TODOS  LOS CAMPOS" type="submit" class="BOTONFUENTEESTANDARCOLORNORMAL">
                </td>
            </TR>
            <TR>
                <%TDSTYLE="style="""
                TDSTYLE=TDSTYLE & " padding: 5px"
                TDSTYLE=TDSTYLE & """"%>
                <td <%=TDSTYLE%>>
                    <font class="FUENTEGRANDECOLORINFORMATIVOBOLD">
                        <%if IDIOMA="CATALAN" THEN%>
                            Modificar nom de la consulta:&nbsp;
                        <%else%>
                            Modificar nombre de la consulta:&nbsp;
                        <%end if%>
						<input name="nombre codigo" value="<%=nombrecodigo%>" type="text" class="INPUTFUENTEESTANDARCOLORNORMAL" maxlength="20" style="width: 100px">
						<br>
						<%IF IDIOMA="CATALAN" THEN%>
							Modificar nom conexi�:&nbsp;
						<%ELSE%>
							Modificar nombre conexi�n:&nbsp;
						<%END IF%>
						<input name="conexion de la sentencia sql" value="<%=conexiondelasentenciasql%>" id="conexion de la sentencia sql" style="width: 100px" class="INPUTFUENTEESTANDARCOLORNORMAL">
                    </font>
                </td>
				<%TDSTYLE="style="""
                TDSTYLE=TDSTYLE & "padding: 5px"
                TDSTYLE=TDSTYLE & """"%>
                <td valign="top" align="right" colspan="3" <%=TDSTYLE%>>
                    <%if accion="group" or accion="select" then%>
                        <font class="FUENTEGRANDECOLORINFORMATIVOBOLD">
                            Opciones:&nbsp;
                            <select name="OPCIONES" class="INPUTFUENTEESTANDARCOLORNORMAL">
                                <option value="" selected></option>
                                <option value="CREAR MUESTRA">Crear muestra</option>
                                <option value="CORTAR CODIGO">Cortar c�digo</option>
                            </select>
                            <br>
                        </font>
					<%else%>
                    	<input name="OPCIONES" type="hidden" value="">
                    <%end if%>
                    <input name="SQL CON CAMPOS SELECCIONADOS" id="SQL CON CAMPOS SELECCIONADOS" value="CODIGO SQL" type="submit" class="BOTONFUENTEESTANDARCOLORNORMAL">
                </td>
            </TR>
            <TR>
                <%TDSTYLE="style="""
                TDSTYLE=TDSTYLE & "padding: 5px"
                TDSTYLE=TDSTYLE & """"%>
                <td valign="bottom" <%=TDSTYLE%> class="BORDE01BSOLIDOCOLORBORDE01">
                    <font class="FUENTEGRANDECOLORNORMALBOLD">
                        <%if IDIOMA="CATALAN" THEN%>
                            Camps
                        <%else%>
                            Campos
                        <%end if%>
                    </font>
                </td>
                <%TDSTYLE="style="""
                TDSTYLE=TDSTYLE & "padding: 2px"
                TDSTYLE=TDSTYLE & """"%>
                <td align="center" valign="bottom" <%=TDSTYLE%> class="BORDE01BSOLIDOCOLORBORDE01">
                    <font class="FUENTEGRANDECOLORNORMALBOLD">
                        <%if IDIOMA="CATALAN" THEN%>
                            Seleccionar
                        <%else%>
                            Seleccionar
                        <%end if%>
                    </font>
                </td>
                <%TDSTYLE="style="""
                TDSTYLE=TDSTYLE & "padding: 2px"
                TDSTYLE=TDSTYLE & """"%>
                <td align="center" valign="bottom" <%=TDSTYLE%> class="BORDE01BSOLIDOCOLORBORDE01">
                    <font class="FUENTEGRANDECOLORNORMALBOLD">
                        <%if accion<>"insert" then%>
                            <%if IDIOMA="CATALAN" THEN%>
                                Filtre
                            <%else%>
                                Filtro
                            <%end if%>
                        <%else%>
                            &nbsp;
                        <%end if%>
                    </font>
                </td>
                <%TDSTYLE="style="""
                TDSTYLE=TDSTYLE & "padding: 2px"
                TDSTYLE=TDSTYLE & """"%>
                <td align="center" valign="bottom" <%=TDSTYLE%> class="BORDE01BSOLIDOCOLORBORDE01">
                    <font class="FUENTEGRANDECOLORNORMALBOLD">
                        <%if accion="group" or accion="select" then%>
                            Order by
                        <%else%>
                            &nbsp;
                        <%end if%>
                    </font>
                </td>
            </TR>
            <%contadorcampos=0%>
            <%Set conn=Server.CreateObject("ADODB.Connection")
			call p_0000000_asp_f_01_conexion_base_datos( tipo_bd, "", "", "", bdd, p_0000000_asp_f_01_conexion )
			conn.open(p_0000000_asp_f_01_conexion)
            'conn.open conexion%>
            <%SQL0700000001="SELECT * from `"&tabla&"`"
            SET RS0700000001=SERVER.CREATEOBJECT("ADODB.RECORDSET")
            RS0700000001.OPEN SQL0700000001, conn%>
			<%For bucle0700000001=0 To RS0700000001.Fields.Count -1%>
                <%contadorcampos=contadorcampos+1%>
                <%IF contadorcampos/2=INT(contadorcampos/2) THEN
                    trbgcolor=COLORFILA1
                ELSE
                    trbgcolor=COLORFILA2
                END IF%>
                <TR bgcolor="<%=trbgcolor%>">
                    <%TDSTYLE="style="""
                    TDSTYLE=TDSTYLE & "padding: 5px"
                    TDSTYLE=TDSTYLE & """"%>
                    <td valign="top" <%=TDSTYLE%>>
                        <font class="FUENTEESTANDARCOLORNORMAL">
                            <%=RS0700000001.Fields(bucle0700000001).Name%>
                        </font>
                    </td>
                    <%TDSTYLE="style="""
                    TDSTYLE=TDSTYLE & "padding: 2px"
                    TDSTYLE=TDSTYLE & """"%>
                    <td align="center" valign="top" <%=TDSTYLE%>>
                        <input type="checkbox" name="SELECCIONAR" value="<%=RS0700000001.Fields(bucle0700000001).Name%>">
                    </td>
                    <%TDSTYLE="style="""
                    TDSTYLE=TDSTYLE & "padding: 2px"
                    TDSTYLE=TDSTYLE & """"%>
                    <td align="center" valign="top" <%=TDSTYLE%>>
						<%if accion<>"insert" then%>
                        	<input type="checkbox" name="FILTRAR" value="<%=RS0700000001.Fields(bucle0700000001).Name%>">
						<%end if%>
                    </td>
                    <%TDSTYLE="style="""
                    TDSTYLE=TDSTYLE & "padding: 2px"
                    TDSTYLE=TDSTYLE & """"%>
                    <td align="center" valign="top" <%=TDSTYLE%>>
                        <font class="FUENTEESTANDARCOLORNORMAL">
                            <%if accion="group" or accion="select" then%>
                                <input type="checkbox" name="ORDENAR" value="<%=RS0700000001.Fields(bucle0700000001).Name%>">
                            <%else%>
                                &nbsp;
                            <%end if%>
                        </font>
                    </td>
                </TR>
            <%Next%>
            <TR>
                <%TDSTYLE="style="""
                TDSTYLE=TDSTYLE & "padding: 10px"
                TDSTYLE=TDSTYLE & "; border-top: 1px solid #000000"
                TDSTYLE=TDSTYLE & """"%>
                <td align="right" colspan="4" <%=TDSTYLE%>>
					<input name="SQL CON CAMPOS SELECCIONADOS" id="SQL CON CAMPOS SELECCIONADOS" value="CODIGO SQL" type="submit" class="BOTONFUENTEESTANDARCOLORNORMAL">
                </td>
            </TR>
		</FORM>
        <%RS0700000001.close
        set RS0700000001=nothing%>
        <%CONN.close
        set CONN=nothing%>
	</table>

<!--7.- GENERAR CODIGO SQL -FIN-->

<!--8.- PIE DE PAGINA -INICIO-->
<!--8.- PIE DE PAGINA -FIN-->

<!--9.- REDIRIGIR -INICIO-->
<!--9.- REDIRIGIR -FIN-->

</body>

</html>