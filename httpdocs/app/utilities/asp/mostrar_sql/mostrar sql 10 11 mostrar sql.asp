<!--#include file="../../modularizacion/direccion pagina 01.asp"-->
<!--#include file="../../modularizacion/cabecera 00 01 00 00 02 -oxgestion- datos url.asp"-->
<!--#include file="../../modularizacion/cabecera 00 01 00 00 03 -general- otros datos de la pagina.asp"-->
<!--#include file="../../modularizacion/cabecera 00 05 00 00 01 -oxgestion- comprobar sesion.asp"-->
<!--#include file="../../modularizacion/cabecera 00 05 01 00 01 -oxgestion- dimensiones pagina.asp"-->
<!--#include file="../../modularizacion/cabecera 00 05 02 00 01 -oxgestion- verificar acceso.asp"-->
<!--#include file="../../modularizacion/cabecera 00 06 00 00 01 -oxgestion- volver.asp"-->
<!--#include file="../../modularizacion/informacion pagina 03 01 00 00 01 -general- informacion de retorno.asp"-->
<!--#include file="../../modularizacion/informacion pagina 03 99 00 00 01 -oxgestion- volver atras.asp"-->
<!--#include file="../../modularizacion/redireccionar pagina 01.asp"-->

<html>

<HEAD>

	<meta https-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<title>00749 codigo sql</title>
	<link rel="stylesheet" type="text/css" href="../oxgestion.css">
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

	'P�gina 00749
	PAGINACODIGO="00749"
	PAGINADESCRIPCION="Genera el c�digo sql para la tabla y campos seleccionados"
	
	DIRECCIONPAGINACODIGO=PAGINACODIGO
	CALL DIRECCIONPAGINA( DIRECCIONPAGINAIP, DIRECCIONPAGINACODIGO, DIRECCIONPAGINARUTA, DIRECCIONPAGINASERVIDOR, CONEXIONOFICINA, ANCHOEXPLORER, ANCHOFIREFOX, ANCHOSAFARI, ALTOEXPLORER, ALTOFIREFOX, ALTOSAFARI )
	PAGINA=DIRECCIONPAGINARUTA
	CONEXIONSERVER=DIRECCIONPAGINASERVIDOR
	CONEXIONINTERNA=CONEXIONOFICINA
	IP=DIRECCIONPAGINAIP
	
	CALL DATOSURL( SESIONID, ANCHO, ALTO, CALCULARDIMENSIONESPAGINA, CREARDATOSTEMPORALES, VOLVERGUARDAR, VOLVERPAGINA, VOLVERCONEXIONSERVER, VOLVERINFORMACION, VOLVEROBJETIVO, VOLVERDESTINOPAGINACODIGO, VOLVERDESTINOPAGINACODIGOBORRAR, VOLVERDESTINOPAGINAIFRAME, DATOSENLADIRECCION, REDIRECCIONAR, REDIRECCIONARPRIORITARIO, AYER )

	IF LEN(REQUEST.QUERYSTRING("conexion"))>0 THEN
		conexion=REQUEST.QUERYSTRING("conexion")
	ELSE
		conexion=""
	END IF
	if request.Form("conexion de la sentencia sql")<>"" then
		conexiondelasentenciasql=request.Form("conexion de la sentencia sql")
	else
		IF LEN(REQUEST.QUERYSTRING("conexiondelasentenciasql"))>0 THEN
			conexiondelasentenciasql=REQUEST.QUERYSTRING("conexiondelasentenciasql")
		ELSE
			conexiondelasentenciasql=""
		END IF
	end if
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
	if request.Form("SQL CON TODOS LOS CAMPOS")<>"" then
		mostrarcampos="TOTAL"
	else
		if request.Form("SQL CON CAMPOS SELECCIONADOS")<>"" then
			mostrarcampos="PARCIAL"
		else
			if len(request.querystring("mostrarcampos"))>0 then
				mostrarcampos=request.querystring("mostrarcampos")
			else
				mostrarcampos="TOTAL"
			end if
		end if
	end if
	if request.Form("OPCIONES")<>"" then
		OPCIONES=request.Form("OPCIONES")
	else
		if len(request.querystring("OPCIONES"))>0 then
			OPCIONES=request.querystring("OPCIONES")
		else
			OPCIONES=""
		end if
	end if

	CALL OTROSDATOSPAGINA( MINUTOSPARALACOMPROBACIONDELACCESO, COLORRESALTAR, COLORFILA1, COLORFILA2, COLORBORDE, CONEXIONSERVER, CONEXIONINTERNA )
	MINUTOSPARAVERIFICARCONTRASENYA=MINUTOSPARALACOMPROBACIONDELACCESO

	'0.1.- DATOS PAGINA ACTUAL -FIN	

	'0.3.- INFORMACION STRING PARA VERIFICAR PASSWORD -INICIO

	INFORMACIONREDIRECCION="?SESIONID="&SESIONID
		
	INFORMACIONTRASPASADA="&conexion="&conexion
	INFORMACIONTRASPASADA=INFORMACIONTRASPASADA & "&accion="&accion
	INFORMACIONTRASPASADA=INFORMACIONTRASPASADA & "&nombrecodigo="&nombrecodigo	
	INFORMACIONTRASPASADA=INFORMACIONTRASPASADA & "&tabla="&tabla
	INFORMACIONTRASPASADA=INFORMACIONTRASPASADA & "&mostrarcampos="&mostrarcampos
	INFORMACIONTRASPASADA=INFORMACIONTRASPASADA & "&OPCIONES="&OPCIONES
	
	INFORMACIONNOTRASPASADA="&CALCULARDIMENSIONESPAGINA="&CALCULARDIMENSIONESPAGINA
	INFORMACIONNOTRASPASADA=INFORMACIONNOTRASPASADA & "&NAVEGACIONDIRECCIONTIENEBARRADESPLAZAMIENTO="&NAVEGACIONDIRECCIONTIENEBARRADESPLAZAMIENTO
	INFORMACIONNOTRASPASADA=INFORMACIONNOTRASPASADA & "&VOLVERGUARDAR="&VOLVERGUARDAR
	INFORMACIONNOTRASPASADA=INFORMACIONNOTRASPASADA & "&VOLVERPAGINA="&VOLVERPAGINA
	INFORMACIONNOTRASPASADA=INFORMACIONNOTRASPASADA & "&VOLVERCONEXIONSERVER="&VOLVERCONEXIONSERVER
	INFORMACIONNOTRASPASADA=INFORMACIONNOTRASPASADA & "&VOLVERINFORMACION="&VOLVERINFORMACION
	INFORMACIONNOTRASPASADA=INFORMACIONNOTRASPASADA & "&VOLVEROBJETIVO="&VOLVEROBJETIVO
	INFORMACIONNOTRASPASADA=INFORMACIONNOTRASPASADA & "&VOLVERDESTINOPAGINACODIGO="&VOLVERDESTINOPAGINACODIGO
	INFORMACIONNOTRASPASADA=INFORMACIONNOTRASPASADA & "&VOLVERDESTINOPAGINACODIGOBORRAR="&VOLVERDESTINOPAGINACODIGOBORRAR
	INFORMACIONNOTRASPASADA=INFORMACIONNOTRASPASADA & "&VOLVERDESTINOPAGINAIFRAME="&VOLVERDESTINOPAGINAIFRAME

	'0.3.- INFORMACION STRING PARA VERIFICAR PASSWORD -FIN

IDIOMA="CASTELLANO"
SESIONUSUARIO=""
SESIONORIGEN=""
SESIONLOCALIZADORID=0
NAVEGADORNOMBRE=""
ANCHONAVEGADOR=0
NAVEGADORALTO=0

IF SESIONID>0 THEN
	
	'0.5.- ACTUALIZAR INFORMACION DE LA SESION -INICIO

	CALL COMPROBARSESION( SESIONID, IDIOMA, SESIONUSUARIO, SESIONORIGEN, SESIONLOCALIZADORID, NAVEGADORNOMBRE, ANCHONAVEGADOR, ALTONAVEGADOR, SESIONFECHADIA, SESIONFECHAMES, SESIONFECHAANYO, SESIONHORARIOHORA, SESIONHORARIOMINUTO, USUARIOWHOIS )
	
		'0.5.1.- CALCULAR DIMENSIONES DE LA PAGINA -INICIO

		CALL DIMENSIONESPAGINA( SESIONID, PAGINACODIGO, AYER, CALCULARDIMENSIONESPAGINA, NAVEGADORNOMBRE, ANCHO, ANCHONAVEGADOR, ANCHOEXPLORER, ANCHOFIREFOX, ANCHOSAFARI, ALTO, ALTOEXPLORER, ALTOFIREFOX, ALTOSAFARI )

		'0.5.1.- CALCULAR DIMENSIONES DE LA PAGINA -FIN

	INFORMACIONPAGINA="&NAVEGADORNOMBRE="&NAVEGADORNOMBRE
	INFORMACIONPAGINA=INFORMACIONPAGINA & "&ALTO="&ALTO
	INFORMACIONPAGINA=INFORMACIONPAGINA & "&ANCHONAVEGADOR="&ANCHONAVEGADOR
	INFORMACIONPAGINA=INFORMACIONPAGINA & "&ANCHO="&ANCHO

		'0.5.2.- VER SI HEMOS DE VERIFICAR LA CONTRASE�A -INICIO

		ESNECESARIOVERIFICARACCESO="NO"

		IF MINUTOSPARAVERIFICARCONTRASENYA>0 AND ESNECESARIOVERIFICARACCESO="SI" THEN
			CALL VERIFICARACCESO( ESNECESARIOVERIFICARACCESO, MINUTOSPARAVERIFICARCONTRASENYA, SESIONID, SESIONFECHADIA, SESIONFECHAMES, SESIONFECHAANYO, SESIONHORARIOHORA, SESIONHORARIOMINUTO, CONEXIONSERVER, INFORMACIONTRASPASADA, INFORMACIONPAGINA, INFORMACIONNOTRASPASADA, PAGINA, IP, ANCHO, ALTO, REDIRECCION, REDIRECCIONAR, REDIRECCIONARPRIORITARIO, REDIRECCIONOBJETIVO )
		END IF

		'0.5.2.- VER SI HEMOS DE VERIFICAR LA CONTRASE�A -FIN

	'0.5.- ACTUALIZAR INFORMACION DE LA SESION -FIN

	'0.4.- GUARDAR DATOS MASIVOS -INICIO
	'0.4.- GUARDAR DATOS MASIVOS -FIN

	'0.6.- GUARDAR INFORMACION VOLVER -INICIO

	CALL VOLVER( VOLVERDESTINOPAGINACODIGOBORRAR, SESIONID, VOLVERDESTINOPAGINACODIGO, VOLVERGUARDAR, VOLVERINFORMACION, PAGINACODIGO, VOLVERPAGINA, VOLVERCONEXIONSERVER, VOLVEROBJETIVO, VOLVERDESTINOPAGINAIFRAME, AYER )

	'0.6.- GUARDAR INFORMACION VOLVER -FIN

ELSE

	'0.7.- CREAR SESION DE OXGESTION -INICIO
	'0.7.- CREAR SESION DE OXGESTION -FIN

END IF
%>
<!--0.- COMPROBAR SESION Y GUARDAR DATOS MASIVOS -FIN-->

<%IF REDIRECCIONARPRIORITARIO="NO" THEN%>

<!--1.- GUARDAR DATOS EN TABLAS PARA AGILIZAR CALCULOS -INICIO-->
<!--1.- GUARDAR DATOS EN TABLAS PARA AGILIZAR CALCULOS -FIN-->

<!--2.- ACCESOS PAGINA -INICIO-->
<!--2.- ACCESOS PAGINA -FIN-->

<!--3.- ABRIR CONSULTAS CON DATOS NECESARIOS PARA CUALQUIER PUNTO DE LA PAGINA -INICIO-->

	<%'3.1.- INFORMACION DE LA PAGINA Y DE RETORNO -INICIO

	CALL INFORMACIONPAGINAYDERETOTNO( INFORMACIONREDIRECCION, INFORMACIONTRASPASADA, INFORMACIONPAGINA, INFORMACIONRETORNO )
	
	if len(conexiondelasentenciasql)>0 then
		conexionconbasededatos=conexiondelasentenciasql
	else
		conexionconbasededatos="conexionconbasededatos"
	end if

	abrircodigoasp="&#60;&#37;"
	cerrarcodigoasp="&#37;&#62;"
	espacios4="&nbsp;&nbsp;&nbsp;&nbsp;"
	espacios8="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"
	espacios12="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"

	'3.1.- INFORMACION DE LA PAGINA Y DE RETORNO -FIN%>

	<%'3.3.- CAMPOS SELECCIONADOS -INICIO
	
	seleccionar=""
	filtrar=""
	ordenar=""

	if mostrarcampos="PARCIAL" then
		seleccionar=request.Form("SELECCIONAR")
		filtrar=request.Form("FILTRAR")
		ordenar=request.Form("ORDENAR")
	end if

	'3.3.- CAMPOS SELECCIONADOS -FIN%>

	<%'3.99.- VOLVER ATRAS -INICIO
	
	CALL VOLVERATRASFUNCION( SESIONID, CONEXIONINTERNA, PAGINACODIGO, VOLVERATRAS, VOLVERATRASIP, VOLVERATRASOBJETIVO, VOLVERATRASIFRAME, FORMULARIOVOLVERATRASTARGET )

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

<!--7.- GENERAR CODIGO SQL -INICIO-->

	<%MARGENIZQUIERDO=0
	MARGENDERECHO=0
	TABLA0701000001ANCHO=ANCHO-MARGENIZQUIERDO-MARGENDERECHO
	TABLA0701000001ALTO=ALTO-2%>
	<%TABLASTYLE="STYLE="""
	TABLASTYLE=TABLASTYLE & "MARGIN-LEFT: "&MARGENIZQUIERDO&"PX"
	TABLASTYLE=TABLASTYLE & "; MARGIN-RIGHT: "&MARGENDERECHO&"PX"
	TABLASTYLE=TABLASTYLE & """"%>
	<table width="<%=TABLA0701000001ANCHO%>" align="center" cellpadding="0" cellspacing="0">
		<TR>
			<%TABLA0701000001ANCHOOCUPADO=0%>
			<%TABLA0701000001ANCHOTD01=TABLA0701000001ANCHO-TABLA0701000001ANCHOOCUPADO%>
			<td width="<%=TABLA0701000001ANCHOTD01%>PX" height="0" id="P00749T070100000001TR00TD01"></td>
		</TR>
		<TR>
			<%tdstyle="style="""
            tdstyle=tdstyle & "padding-left: 5px"
            tdstyle=tdstyle & "; padding-right: 2px"
            tdstyle=tdstyle & "; padding-top: 5px"
            tdstyle=tdstyle & "; padding-bottom: 3px"
            tdstyle=tdstyle & """"%>
			<td <%=tdstyle%>>
				<font class="FUENTEGRANDECOLORINFORMATIVOBOLD">
					<%if IDIOMA="CATALAN" THEN%>
						Sql generat per a l'odbc "<%=conexion%>"
						<br>
						taula o consulta: "<%=tabla%>"
					<%else%>
						Sql generado para el odbc "<%=conexion%>"
						<br>
						tabla o consulta: "<%=tabla%>"
					<%end if%>
				</font>
			</td>
		</TR>
		<%if mostrarcampos="PARCIAL" then%>
			<%if len(seleccionar)=0 or isnull(seleccionar) then%>
                <TR>
					<%tdstyle="style="""
                    tdstyle=tdstyle & "padding-left: 5px"
                    tdstyle=tdstyle & "; padding-right: 2px"
                    tdstyle=tdstyle & "; padding-top: 30px"
                    tdstyle=tdstyle & "; padding-bottom: 3px"
                    tdstyle=tdstyle & """"%>
                    <td <%=tdstyle%>>
                        <font class="FUENTEGRANDECOLORINCORRECTOBOLD">
                            <%if IDIOMA="CATALAN" THEN%>
                            	Has de seleccionar camps del quadre de l'esquerra o pr�mer el bot� "TODOS LOS CAMPOS"
                            <%else%>
                            	Has de seleccionar campos del cuadro de la izquierda o pulsar el bot�n "TODOS LOS CAMPOS"
                            <%end if%>
                        </font>
                    </td>
                </TR>
            <%else%>
				<!--7.1.- CODIGO SQL PARCIAL -INICIO-->
                <tr>
                    <%tdstyle="style="""
                    tdstyle=tdstyle & "padding-left: 5px"
                    tdstyle=tdstyle & "; padding-right: 2px"
                    tdstyle=tdstyle & "; padding-top: 15px"
                    tdstyle=tdstyle & "; padding-bottom: 3px"
                    tdstyle=tdstyle & """"%>
                    <td valign="top" <%=tdstyle%>>
                        <font class="FUENTEESTANDARCOLORNORMAL">
							<%'7.1.1- SENTENCIA SQL DE SELECT O GROUP -INICIO%>
                            <%if accion="select" or accion="group" then%>
								<%=abrircodigoasp%>Set conn<%=nombrecodigo%>=Server.CreateObject("ADODB.Connection")
                                <br>
								conn<%=nombrecodigo%>.open "<%=conexion%>"<%if OPCIONES="CORTAR CODIGO" then%><%=cerrarcodigoasp%><%end if%>
                                <br>
								<%PRIMERCAMPOMUESTRA=""%>
                                <%if OPCIONES="CREAR MUESTRA" then%>
                                    <%bucleseleccionar=split(seleccionar,", ")%>
									<%For bucle0701010001=0 To ubound(bucleseleccionar)%>
                                        <%if bucle0701010001=0 then
                                            PRIMERCAMPOMUESTRA=replace(bucleseleccionar(bucle0701010001)," ","_")
                                        end if%>
                                        <%if bucle0701010001=0 then%>
                                        	<%=abrircodigo%>
                                        <%end if%>
                                        <br>rs<%=nombrecodigo%>_<%=lcase(replace(bucleseleccionar(bucle0701010001)," ","_"))%>=""
                                    <%Next%>
                                    <br>
                                <%end if%>
                                <br>
                                <%if OPCIONES<>"CREAR MUESTRA" or isnull(OPCIONES) or len(OPCIONES)=0 then%>
                                    <%=abrircodigoasp%>
                                <%end if%>
                                sql<%=nombrecodigo%>="select "
								<%bucleseleccionar=split(seleccionar,", ")%>
								<%For bucle0701010002=0 To ubound(bucleseleccionar)%>
                                    <br>
                                    sql<%=nombrecodigo%>=sql<%=nombrecodigo%> & " <%IF bucle0701010002>0 THEN%>,<%END IF%><%="`"&tabla&"`."%>`<%=bucleseleccionar(bucle0701010002)%>`"
                                <%Next%>
                                <br>
                                sql<%=nombrecodigo%>=sql<%=nombrecodigo%> & " from"
                                <br>
                                sql<%=nombrecodigo%>=sql<%=nombrecodigo%> & " <%="`"&tabla&"`"%>"
                                <%if accion="group" then%>
                                    <br>
                                    sql<%=nombrecodigo%>=sql<%=nombrecodigo%> & " group by"
                                    <%For bucle0701010003=0 To ubound(bucleseleccionar)%>
                                        <br>
                                        sql<%=nombrecodigo%>=sql<%=nombrecodigo%> & " <%IF bucle0701010003>0 THEN%>,<%END IF%><%="`"&tabla&"`."%>`<%=bucleseleccionar(bucle0701010003)%>`"
                                    <%Next%>
                                <%end if%>
								<%if len(filtrar)>0 then%>
									<%buclefiltrar=split(filtrar,", ")%>
                                    <br>
                                    <%if accion="select" then%>
                                        sql<%=nombrecodigo%>=sql<%=nombrecodigo%> & " where"
                                    <%else%>
                                        sql<%=nombrecodigo%>=sql<%=nombrecodigo%> & " having"
                                    <%end if%>
									<%For bucle0701010004=0 To ubound(buclefiltrar)%>
										<%if bucle0701010004>0 then%>
                                            <br>
                                            sql<%=nombrecodigo%>=sql<%=nombrecodigo%> & " and"
										<%end if%>
                                        <br>
                                        sql<%=nombrecodigo%>=sql<%=nombrecodigo%> & " <%="`"&tabla&"`."%>`<%=buclefiltrar(bucle0701010004)%>`='" & valorpara("condicion<%=bucle0701010004+1%>") & "'"
									<%next%>
								<%end if%>
								<%if len(ordenar)>0 then%>
									<%bucleordenar=split(ordenar,", ")%>
                                    <br>
									sql<%=nombrecodigo%>=sql<%=nombrecodigo%> & " order by"
									<%For bucle0701010005=0 To ubound(bucleordenar)%>
                                        <br>
                                        sql<%=nombrecodigo%>=sql<%=nombrecodigo%> & " <%IF bucle0701010005>0 THEN%>,<%END IF%><%="`"&tabla&"`."%>`<%=bucleordenar(bucle0701010005)%>`"
									<%next%>
								<%end if%>
                                <BR>
                                set rs<%=nombrecodigo%>=server.CreateObject("adodb.recordset")
                                <BR>
                                rs<%=nombrecodigo%>.open sql<%=nombrecodigo%>,&nbsp;conn<%=nombrecodigo%><%if OPCIONES="CORTAR CODIGO" then%><%=cerrarcodigoasp%><%end if%>
                                <BR><BR>
                                <%if OPCIONES="CORTAR CODIGO" then%><%=abrircodigoasp%><%end if%>if rs<%=nombrecodigo%>.bof=false and rs<%=nombrecodigo%>.eof=false then<%if OPCIONES="CORTAR CODIGO" then%><%=cerrarcodigoasp%><%end if%>
                                <BR><BR>
                                    &nbsp;&nbsp;&nbsp;&nbsp;<%if OPCIONES="CORTAR CODIGO" then%><%=abrircodigoasp%><%end if%>rs<%=nombrecodigo%>.movefirst
                                    <BR>
                                    &nbsp;&nbsp;&nbsp;&nbsp;do while not rs<%=nombrecodigo%>.eof<%if OPCIONES="CORTAR CODIGO" then%><%=cerrarcodigoasp%><%end if%>
                                    <br>
                                    <%if OPCIONES="CREAR MUESTRA" then%>
                                        <br>
                                        <%=espacios8%>if len(rs<%=nombrecodigo&PRIMERCAMPOMUESTRA%>)>0 then
                                            <%bucleseleccionar=split(seleccionar,", ")%>
                                            <%For bucle0701010005=0 To ubound(bucleseleccionar)%>
                                                <br>
                                                <%=espacios12%>rs<%=nombrecodigo%>_<%=lcase(replace(bucleseleccionar(bucle0701010005)," ","_"))%>=rs<%=nombrecodigo%>_<%=lcase(replace(bucleseleccionar(bucle0701010005)," ","_"))%> & "$$$" & rs<%=nombrecodigo%>("<%=bucleseleccionar(bucle0701010005)%>")
                                            <%Next%>
                                        <br>
                                        <%=espacios8%>else
                                            <%bucleseleccionar=split(seleccionar,", ")%>
                                            <%For bucle0701010006=0 To ubound(bucleseleccionar)%>
                                                <br>
                                                <%=espacios12%>rs<%=nombrecodigo%>_<%=lcase(replace(bucleseleccionar(bucle0701010006)," ","_"))%>=rs<%=nombrecodigo%>("<%=bucleseleccionar(bucle0701010006)%>")
                                            <%Next%>
                                        <br>
                                        <%=espacios8%>end if
                                        <br>
                                    <%else%>
                                        <%bucleseleccionar=split(seleccionar,", ")%>
                                        <%For bucle0701010007=0 To ubound(bucleseleccionar)%>
                                            <br><%=espacios8%><%if OPCIONES="CORTAR CODIGO" then%><%=abrircodigoasp%>=<%end if%>rs<%=nombrecodigo%>("<%=bucleseleccionar(bucle0701010007)%>")<%if OPCIONES="CORTAR CODIGO" then%><%=cerrarcodigoasp%><%end if%>
                                        <%next%>
                                        <br>
                                    <%end if%>
                                    <BR>
                                    &nbsp;&nbsp;&nbsp;&nbsp;<%if OPCIONES="CORTAR CODIGO" then%><%=abrircodigoasp%><%end if%>rs<%=nombrecodigo%>.movenext
                                    <BR>
                                    &nbsp;&nbsp;&nbsp;&nbsp;loop<%if OPCIONES="CORTAR CODIGO" then%><%=cerrarcodigoasp%><%end if%>
                                <BR><BR>
                                <%if OPCIONES="CORTAR CODIGO" then%><%=abrircodigoasp%><%end if%>end if<%if OPCIONES="CORTAR CODIGO" then%><%=cerrarcodigoasp%><%end if%>
                                <BR><BR>
                                <%if OPCIONES="CORTAR CODIGO" then%><%=abrircodigoasp%><%end if%>rs<%=nombrecodigo%>.close
                                <BR>
                                set rs<%=nombrecodigo%>=nothing<%if OPCIONES="CORTAR CODIGO" then%><%=cerrarcodigoasp%><%end if%>
                                <br><br>
                                <%if OPCIONES="CORTAR CODIGO" then%><%=abrircodigoasp%><%end if%>conn<%=nombrecodigo%>.close
                                <br>
								Set conn<%=nombrecodigo%>=nothing<%=cerrarcodigoasp%>
                                <BR><BR>
                                <%if OPCIONES="CREAR MUESTRA" then%>
                                    <%=abrircodigoasp%>if len(rs<%=nombrecodigo&PRIMERCAMPOMUESTRA%>)>0 then<%=cerrarcodigoasp%>
                                    <%bucleseleccionar=split(seleccionar,", ")%>
                                    <%For bucle0701010008=0 To ubound(bucleseleccionar)%>
                                        <br><%=espacios4%><%if bucle0701010008=0 then%><%=abrircodigoasp%><%end if%>brs<%=nombrecodigo%>_<%=lcase(replace(bucleseleccionar(bucle0701010008)," ","_"))%>=split(rs<%=nombrecodigo%>_<%=lcase(replace(bucleseleccionar(bucle0701010008)," ","_"))%>,"$$$")<%if bucle0701010008=ubound(bucleseleccionar) then%><%=cerrarcodigoasp%><%end if%>
                                    <%Next%>
                                    <br><%=espacios4%><%=abrircodigoasp%>for buclepordeterminar=0 to ubound(brs<%=nombrecodigo&"_"&PRIMERCAMPOMUESTRA%>)<%=cerrarcodigoasp%>
                                        <%bucleseleccionar=split(seleccionar,", ")%>
                                        <%For bucle0701010009=0 To ubound(bucleseleccionar)%>
                                            <br><%=espacios8%><%=abrircodigoasp%>=brs<%=nombrecodigo%>_<%=lcase(replace(bucleseleccionar(bucle0701010009)," ","_"))%>(buclepordeterminar)<%=cerrarcodigoasp%>
                                        <%Next%>
                                    <br><%=espacios4%><%=abrircodigoasp%>next<%=cerrarcodigoasp%>
                                    <br><%=abrircodigoasp%>end if<%=cerrarcodigoasp%>
                                <%end if%>
                            <%end if%>
							<%'7.1.1- SENTENCIA SQL DE SELECT O GROUP -FIN%>
							<%'7.1.2- SENTENCIA SQL DE UPDATE INTO -INICIO%>
                            <%if accion="update" then%>
   								<%=abrircodigoasp%>Set conn<%=nombrecodigo%>=Server.CreateObject("ADODB.Connection")
                                <br>
								conn<%=nombrecodigo%>.open "<%=conexion%>"
								<br><br>
                                sql<%=nombrecodigo%>="update `<%=tabla%>` set "
								<%bucleseleccionar=split(seleccionar,", ")%>
								<%For bucle0701020001=0 To ubound(bucleseleccionar)%>
                                    <br>
                                    sql<%=nombrecodigo%>=sql<%=nombrecodigo%> & " <%IF bucle0701020001>0 THEN%>,<%END IF%>`<%=bucleseleccionar(bucle0701020001)%>`='" & valorpara("<%=bucleseleccionar(bucle0701020001)%>") & "'"
                                <%Next%>
								<%if len(filtrar)>0 then%>
									<%buclefiltrar=split(filtrar,", ")%>
                                    <br>
									sql<%=nombrecodigo%>=sql<%=nombrecodigo%> & " where"
									<%For bucle0701020002=0 To ubound(buclefiltrar)%>
										<%if bucle0701020002>0 then%>
                                            <br>
                                            sql<%=nombrecodigo%>=sql<%=nombrecodigo%> & " and"
										<%end if%>
                                        <br>
                                        sql<%=nombrecodigo%>=sql<%=nombrecodigo%> & " `<%=buclefiltrar(bucle0701020002)%>`='" & valorpara("condicion<%=bucle0701020002+1%>") & "'"
									<%next%>
								<%end if%>
                                <br>
                                conn<%=nombrecodigo%>.execute sql<%=nombrecodigo%>
                                <br><br>
                                conn<%=nombrecodigo%>.close
                                <br>
								Set conn<%=nombrecodigo%>=nothing<%=cerrarcodigoasp%>
                            <%end if%>
							<%'7.1.2- SENTENCIA SQL DE UPDATE INTO -FIN%>
							<%'7.1.3- SENTENCIA SQL DE INSERT INTO -INICIO%>
                            <%if accion="insert" then%>
								<%=abrircodigoasp%>Set conn<%=nombrecodigo%>=Server.CreateObject("ADODB.Connection")
                                <br>
								conn<%=nombrecodigo%>.open "<%=conexion%>"
                                <br><br>
                                sql<%=nombrecodigo%>="insert into `<%=tabla%>` ("
								<%bucleseleccionar=split(seleccionar,", ")%>
								<%For bucle0701030001=0 To ubound(bucleseleccionar)%>
                                    <br>
                                    sql<%=nombrecodigo%>=sql<%=nombrecodigo%> & "<%IF bucle0701030001>0 THEN%>,<%END IF%>`<%=bucleseleccionar(bucle0701030001)%>`"
                                <%Next%>
                                <br>
                                sql<%=nombrecodigo%>=sql<%=nombrecodigo%> & ") values ("
								<%For bucle0701030002=0 To ubound(bucleseleccionar)%>
                                    <br>
                                    sql<%=nombrecodigo%>=sql<%=nombrecodigo%> & "<%IF bucle0701030002>0 THEN%>,<%END IF%>'" & valorpara("<%=bucleseleccionar(bucle0701030002)%>") & "'"
                                <%Next%>
                                <br>
                                sql<%=nombrecodigo%>=sql<%=nombrecodigo%> & ")"
                                <br>
                                conn<%=nombrecodigo%>.execute sql<%=nombrecodigo%>
                                <br><br>
                                conn<%=nombrecodigo%>.close
                                <br>
								Set conn<%=nombrecodigo%>=nothing<%=cerrarcodigoasp%>
                            <%end if%>
							<%'7.1.3- SENTENCIA SQL DE INSERT INTO -FIN%>
                        </font>
                    </td>
                </tr>
				<!--7.1.- CODIGO SQL PARCIAL -FIN-->
			<%end if%>
		<%else%>
			<!--7.2.- CODIGO SQL TOTAL -INICIO-->
			<%Set conn=Server.CreateObject("ADODB.Connection")
            conn.open conexion%>
            <%SQL0702000001="SELECT * from `"&tabla&"`"
            SET RS0702000001=SERVER.CREATEOBJECT("ADODB.RECORDSET")
            RS0702000001.OPEN SQL0702000001, conn%>
            <tr>
                <%tdstyle="style="""
                tdstyle=tdstyle & "padding-left: 5px"
                tdstyle=tdstyle & "; padding-right: 2px"
                tdstyle=tdstyle & "; padding-top: 15px"
                tdstyle=tdstyle & "; padding-bottom: 3px"
                tdstyle=tdstyle & """"%>
                <td valign="top" <%=tdstyle%>>
                    <font class="FUENTEESTANDARCOLORNORMAL">
                        <%'7.2.1- SENTENCIA SQL DE SELECT O GROUP -INICIO%>
						<%if accion="select" or accion="group" then%>
							<%PRIMERCAMPOMUESTRA=""%>
							<%=abrircodigoasp%>Set conn<%=nombrecodigo%>=Server.CreateObject("ADODB.Connection")
                            <br>
                            conn<%=nombrecodigo%>.open "<%=conexion%>"<%if OPCIONES="CORTAR CODIGO" then%><%=cerrarcodigoasp%><%end if%>
                            <br>
							<%if OPCIONES="CREAR MUESTRA" then%>
								<%For bucle0702010001=0 To RS0702000001.Fields.Count -1%>
									<%if bucle0702010001=0 then
                                        PRIMERCAMPOMUESTRA=replace(RS0702000001.Fields(bucle0702010001).Name," ","_")
                                    end if%>
                                    <br>rs<%=nombrecodigo%>_<%=lcase(replace(RS0702000001.Fields(bucle0702010001).Name," ","_"))%>=""
                                <%Next%>
	                            <br>
							<%end if%>
                            <br>
                            <%if OPCIONES<>"CREAR MUESTRA" or isnull(OPCIONES) or len(OPCIONES)=0 then%>
	                            <%=abrircodigoasp%>
							<%end if%>
                            sql<%=nombrecodigo%>="select "
							<%For bucle0702010002=0 To RS0702000001.Fields.Count -1%>
                                <br>
                                sql<%=nombrecodigo%>=sql<%=nombrecodigo%> & " <%IF bucle0702010002>0 THEN%>,<%END IF%><%="`"&tabla&"`."%>`<%=RS0702000001.Fields(bucle0702010002).Name%>`"
                            <%Next%>
                            <br>
                            sql<%=nombrecodigo%>=sql<%=nombrecodigo%> & " from"
                            <br>
                            sql<%=nombrecodigo%>=sql<%=nombrecodigo%> & " <%="`"&tabla&"`"%>"
                            <%if accion="group" then%>
                                <br>
                                sql<%=nombrecodigo%>=sql<%=nombrecodigo%> & " group by"
                                <%For bucle0702010003=0 To RS0702000001.Fields.Count -1%>
                                    <br>
                                    sql<%=nombrecodigo%>=sql<%=nombrecodigo%> & " <%IF bucle0702010003>0 THEN%>,<%END IF%><%="`"&tabla&"`."%>`<%=RS0702000001.Fields(bucle0702010003).Name%>`"
                                <%Next%>
                            <%end if%>
                            <br>
                            <%if accion="select" then%>
                                sql<%=nombrecodigo%>=sql<%=nombrecodigo%> & " where"
                            <%else%>
                                sql<%=nombrecodigo%>=sql<%=nombrecodigo%> & " having"
                            <%end if%>
                            <br>
                            sql<%=nombrecodigo%>=sql<%=nombrecodigo%> & " <%="`"&tabla&"`."%>`campo condicion 1`='" & valorpara("condicion1") & "'"
                            <br>
                            sql<%=nombrecodigo%>=sql<%=nombrecodigo%> & " and"
                            <br>
                            sql<%=nombrecodigo%>=sql<%=nombrecodigo%> & " <%="`"&tabla&"`."%>`campo condicion 2`='" & valorpara("condicion2") & "'"
                            <br>
                            sql<%=nombrecodigo%>=sql<%=nombrecodigo%> & " order by"
                            <%For bucle0702010004=0 To RS0702000001.Fields.Count -1%>
                                <br>
                                sql<%=nombrecodigo%>=sql<%=nombrecodigo%> & " <%IF bucle0702010004>0 THEN%>,<%END IF%><%="`"&tabla&"`."%>`<%=RS0702000001.Fields(bucle0702010004).Name%>`"
                            <%Next%>
                            <BR>
                            set rs<%=nombrecodigo%>=server.CreateObject("adodb.recordset")
                            <BR>
                            rs<%=nombrecodigo%>.open sql<%=nombrecodigo%>,&nbsp;conn<%=nombrecodigo%><%if OPCIONES="CORTAR CODIGO" then%><%=cerrarcodigoasp%><%end if%>
                            <BR><BR>
                            <%if OPCIONES="CORTAR CODIGO" then%><%=abrircodigoasp%><%end if%>if rs<%=nombrecodigo%>.bof=false and rs<%=nombrecodigo%>.eof=false then<%if OPCIONES="CORTAR CODIGO" then%><%=cerrarcodigoasp%><%end if%>
                            <BR><BR>
                                <%=espacios4%><%if OPCIONES="CORTAR CODIGO" then%><%=abrircodigoasp%><%end if%>rs<%=nombrecodigo%>.movefirst
                                <BR>
                                <%=espacios4%>do while not rs<%=nombrecodigo%>.eof<%if OPCIONES="CORTAR CODIGO" then%><%=cerrarcodigoasp%><%end if%>
								<br>
								<%if OPCIONES="CREAR MUESTRA" then%>
                                    <br>
                                    <%=espacios8%>if len(rs<%=nombrecodigo&PRIMERCAMPOMUESTRA%>)>0 then
                                        <%For bucle0702010005=0 To RS0702000001.Fields.Count -1%>
                                            <br>
                                            <%=espacios12%>rs<%=nombrecodigo%>_<%=lcase(replace(RS0702000001.Fields(bucle0702010005).Name," ","_"))%>=rs<%=nombrecodigo%>_<%=lcase(replace(RS0702000001.Fields(bucle0702010005).Name," ","_"))%> & "$$$" & rs<%=nombrecodigo%>("<%=RS0702000001.Fields(bucle0702010005).Name%>")
                                        <%Next%>
                                    <br>
                                    <%=espacios8%>else
                                        <%For bucle0702010006=0 To RS0702000001.Fields.Count -1%>
                                            <br>
                                            <%=espacios12%>rs<%=nombrecodigo%>_<%=lcase(replace(RS0702000001.Fields(bucle0702010006).Name," ","_"))%>=rs<%=nombrecodigo%>("<%=RS0702000001.Fields(bucle0702010006).Name%>")
                                        <%Next%>
                                    <br>
                                    <%=espacios8%>end if
                                    <br>
                                <%else%>
									<%For bucle0702010007=0 To RS0702000001.Fields.Count -1%>
                                    	<br><%=espacios8%><%if OPCIONES="CORTAR CODIGO" then%><%=abrircodigoasp%>=<%end if%>rs<%=nombrecodigo%>("<%=RS0702000001.Fields(bucle0702010007).Name%>")<%if OPCIONES="CORTAR CODIGO" then%><%=cerrarcodigoasp%><%end if%>
                                    <%next%>
                                    <br>
								<%end if%>
                                <BR>
                                <%=espacios4%><%if OPCIONES="CORTAR CODIGO" then%><%=abrircodigoasp%><%end if%>rs<%=nombrecodigo%>.movenext
                                <BR>
                                <%=espacios4%>loop<%if OPCIONES="CORTAR CODIGO" then%><%=cerrarcodigoasp%><%end if%>
                            <BR><BR>
                            <%if OPCIONES="CORTAR CODIGO" then%><%=abrircodigoasp%><%end if%>end if<%if OPCIONES="CORTAR CODIGO" then%><%=cerrarcodigoasp%><%end if%>
                            <BR><BR>
                            <%if OPCIONES="CORTAR CODIGO" then%><%=abrircodigoasp%><%end if%>rs<%=nombrecodigo%>.close
                            <BR>
                            set rs<%=nombrecodigo%>=nothing<%if OPCIONES="CORTAR CODIGO" then%><%=cerrarcodigoasp%><%end if%>
                            <br><br>
                            <%if OPCIONES="CORTAR CODIGO" then%><%=abrircodigoasp%><%end if%>conn<%=nombrecodigo%>.close
                            <br>
                            Set conn<%=nombrecodigo%>=nothing<%=cerrarcodigoasp%>
							<%if OPCIONES="CREAR MUESTRA" then%>
								<br><br>
								<%=abrircodigoasp%>if len(rs<%=nombrecodigo&PRIMERCAMPOMUESTRA%>)>0 then<%=cerrarcodigoasp%>
								<%For bucle0702010008=0 To RS0702000001.Fields.Count -1%>
                                    <br><%=espacios4%><%if bucle0702010008=0 then%><%=abrircodigoasp%><%end if%>brs<%=nombrecodigo%>_<%=lcase(replace(RS0702000001.Fields(bucle0702010008).Name," ","_"))%>=split(rs<%=nombrecodigo%>_<%=lcase(replace(RS0702000001.Fields(bucle0702010008).Name," ","_"))%>,"$$$")<%if bucle0702010008=RS0702000001.Fields.Count -1 then%><%=cerrarcodigoasp%><%end if%>
                                <%Next%>
                                <br><%=espacios4%><%=abrircodigoasp%>for buclepordeterminar=0 to ubound(brs<%=nombrecodigo&PRIMERCAMPOMUESTRA%>)<%=cerrarcodigoasp%>
									<%For bucle0702010009=0 To RS0702000001.Fields.Count -1%>
                                        <br><%=espacios8%><%=abrircodigoasp%>=brs<%=nombrecodigo%>_<%=lcase(replace(RS0702000001.Fields(bucle0702010009).Name," ","_"))%>(buclepordeterminar)<%=cerrarcodigoasp%>
                                    <%Next%>
                                <br><%=espacios4%><%=abrircodigoasp%>next<%=cerrarcodigoasp%>
								<br><%=abrircodigoasp%>end if<%=cerrarcodigoasp%>
							<%end if%>
                        <%end if%>
						<%'7.2.1- SENTENCIA SQL DE SELECT O GROUP -FIN%>
						<%'7.2.2- SENTENCIA SQL DE UPDATE -INICIO%>
                        <%if accion="update" then%>
							<%=abrircodigoasp%>Set conn<%=nombrecodigo%>=Server.CreateObject("ADODB.Connection")
                            <br>
                            conn<%=nombrecodigo%>.open "<%=conexion%>"
                            <br><br>
                            sql<%=nombrecodigo%>="update `<%=tabla%>` set "
                            <%For bucle0702020001=0 To RS0702000001.Fields.Count -1%>
                                <br>
                                sql<%=nombrecodigo%>=sql<%=nombrecodigo%> & " <%IF bucle0702020001>0 THEN%>,<%END IF%>`<%=RS0702000001.Fields(bucle0702020001).Name%>`='" & valorpara("<%=RS0702000001.Fields(bucle0702020001).Name%>") & "'"
                            <%Next%>
                            <br>
                            sql<%=nombrecodigo%>=sql<%=nombrecodigo%> & " where"
                            <br>
                            sql<%=nombrecodigo%>=sql<%=nombrecodigo%> & " `campo condicion 1`='" & valorpara("condicion1") & "'"
                            <br>
                            sql<%=nombrecodigo%>=sql<%=nombrecodigo%> & " and"
                            <br>
                            sql<%=nombrecodigo%>=sql<%=nombrecodigo%> & " `campo condicion 2`='" & valorpara("condicion2") & "'"
                            <br>
                            conn<%=nombrecodigo%>.execute sql<%=nombrecodigo%>
                            <br><br>
                            conn<%=nombrecodigo%>.close
                            <br>
                            Set conn<%=nombrecodigo%>=nothing<%=cerrarcodigoasp%>
                        <%end if%>
						<%'7.2.2- SENTENCIA SQL DE UPDATE -FIN%>
						<%'7.2.3- SENTENCIA SQL DE INSERT INTO -INCIIO%>
                        <%if accion="insert" then%>
							<%=abrircodigoasp%>Set conn<%=nombrecodigo%>=Server.CreateObject("ADODB.Connection")
                            <br>
                            conn<%=nombrecodigo%>.open "<%=conexion%>"
                            <br><br>
                            sql<%=nombrecodigo%>="insert into `<%=tabla%>` ("
                            <%For bucle0702030001=0 To RS0702000001.Fields.Count -1%>
                                <br>
                                sql<%=nombrecodigo%>=sql<%=nombrecodigo%> & "<%IF bucle0702030001>0 THEN%>,<%END IF%>`<%=RS0702000001.Fields(bucle0702030001).Name%>`"
                            <%Next%>
                            <br>
                            sql<%=nombrecodigo%>=sql<%=nombrecodigo%> & ") values ("
                            <%For bucle0702030002=0 To RS0702000001.Fields.Count -1%>
                                <br>
                                sql<%=nombrecodigo%>=sql<%=nombrecodigo%> & "<%IF bucle0702030002>0 THEN%>,<%END IF%>'" & valorpara("<%=RS0702000001.Fields(bucle0702030002).Name%>") & "'"
                            <%Next%>
                            <br>
                            sql<%=nombrecodigo%>=sql<%=nombrecodigo%> & ")"
                            <br>
                            conn<%=nombrecodigo%>.execute sql<%=nombrecodigo%>
                            <br><br>
                            conn<%=nombrecodigo%>.close
                            <br>
                            Set conn<%=nombrecodigo%>=nothing<%=cerrarcodigoasp%>
                        <%end if%>
						<%'7.2.3- SENTENCIA SQL DE INSERT INTO -FIN%>
                    </font>
                </td>
			</tr>
            <%RS0702000001.close
            set RS0702000001=nothing%>
            <%CONN.close
            set CONN=nothing%>
			<!--7.2.- CODIGO SQL TOTAL -FIN-->
		<%end if%>
	</table>

<!--7.- GENERAR CODIGO SQL -FIN-->

<!--8.- PIE DE PAGINA -INICIO-->
<!--8.- PIE DE PAGINA -FIN-->

<!--9.- REDIRIGIR -INICIO-->
<!--9.- REDIRIGIR -FIN-->

<%END IF%>

</body>

<%IF REDIRECCIONAR="SI" THEN
	CALL REDIRECCIONARPAGINA( REDIRECCION, REDIRECCIONIFRAME, REDIRECCIONOBJETIVO )
END IF%>

</html>