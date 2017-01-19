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

<%Set conn099=Server.CreateObject("ADODB.Connection")
conn099.open "paginas_web"%>

<!--0.- COMPROBAR SESION Y GUARDAR DATOS MASIVOS -INICIO-->
<%
	'0.1.- DATOS PAGINA ACTUAL -INICIO

	'Página 00735
	PAGINACODIGO="00735"
	PAGINADESCRIPCION="Muestra todas las páginas web que utilizan la tabla seleccionada"
	
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
	if request.Form("utiliza")<>"" then
		accion="utiliza"
	else
		if request.Form("modifica")<>"" then
			accion="modifica"
		else
			if len(request.querystring("accion"))>0 then
				accion=request.querystring("accion")
			else
				accion=""
			end if
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

	CALL OTROSDATOSPAGINA( MINUTOSPARALACOMPROBACIONDELACCESO, COLORRESALTAR, COLORFILA1, COLORFILA2, COLORBORDE, CONEXIONSERVER, CONEXIONINTERNA )
	MINUTOSPARAVERIFICARCONTRASENYA=MINUTOSPARALACOMPROBACIONDELACCESO

	'0.1.- DATOS PAGINA ACTUAL -FIN	

	'0.3.- INFORMACION STRING PARA VERIFICAR PASSWORD -INICIO

	INFORMACIONREDIRECCION="?SESIONID="&SESIONID
		
	INFORMACIONTRASPASADA="&conexion="&conexion
	INFORMACIONTRASPASADA=INFORMACIONTRASPASADA & "&accion="&accion
	INFORMACIONTRASPASADA=INFORMACIONTRASPASADA & "&tabla="&tabla
	
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

		'0.5.2.- VER SI HEMOS DE VERIFICAR LA CONTRASEÑA -INICIO

		ESNECESARIOVERIFICARACCESO="NO"

		IF MINUTOSPARAVERIFICARCONTRASENYA>0 AND ESNECESARIOVERIFICARACCESO="SI" THEN
			CALL VERIFICARACCESO( ESNECESARIOVERIFICARACCESO, MINUTOSPARAVERIFICARCONTRASENYA, SESIONID, SESIONFECHADIA, SESIONFECHAMES, SESIONFECHAANYO, SESIONHORARIOHORA, SESIONHORARIOMINUTO, CONEXIONSERVER, INFORMACIONTRASPASADA, INFORMACIONPAGINA, INFORMACIONNOTRASPASADA, PAGINA, IP, ANCHO, ALTO, REDIRECCION, REDIRECCIONAR, REDIRECCIONARPRIORITARIO, REDIRECCIONOBJETIVO )
		END IF

		'0.5.2.- VER SI HEMOS DE VERIFICAR LA CONTRASEÑA -FIN

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

<HEAD>

	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<title>00735 Páginas donde se utiliza la tabla</title>
	<link rel="stylesheet" type="text/css" href="../oxgestion.css">
	<%Response.addHeader "pragma", "no-cache"
	Response.CacheControl = "Private"
	' Selecciona una de las tres opciones siguientes
	Response.Expires = -1441
	'Response.Expires = 0
	'Response.ExpiresAbsolute = #1/5/2000 12:12:12#%>

	<style type="text/css">
        .saltopagina {
        page-break-before: always;
        }
    </style>
    
    <style type="text/css" media="print">
        .oculto {display:none}
    </style>

</HEAD>

<body topmargin="0" bottommargin="0" leftmargin="0" rightmargin="0">

<%IF REDIRECCIONARPRIORITARIO="NO" THEN%>

<!--1.- GUARDAR DATOS EN TABLAS PARA AGILIZAR CALCULOS -INICIO-->
<!--1.- GUARDAR DATOS EN TABLAS PARA AGILIZAR CALCULOS -FIN-->

<!--2.- ACCESOS PAGINA -INICIO-->
<!--2.- ACCESOS PAGINA -FIN-->

<!--3.- ABRIR CONSULTAS CON DATOS NECESARIOS PARA CUALQUIER PUNTO DE LA PAGINA -INICIO-->

	<%'3.1.- INFORMACION DE LA PAGINA Y DE RETORNO -INICIO

	CALL INFORMACIONPAGINAYDERETOTNO( INFORMACIONREDIRECCION, INFORMACIONTRASPASADA, INFORMACIONPAGINA, INFORMACIONRETORNO )
	
	'3.1.- INFORMACION DE LA PAGINA Y DE RETORNO -FIN%>

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

	<%MARGENIZQUIERDO=2
	MARGENDERECHO=2
	TABLA0700000001ANCHO=ANCHO-MARGENIZQUIERDO-MARGENDERECHO
	TABLA0700000001ALTO=ALTO-2%>
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
			<%TABLA0700000001ANCHOTD04=70
			TABLA0700000001ANCHOOCUPADO=TABLA0700000001ANCHOOCUPADO+TABLA0700000001ANCHOTD04%>
			<%TABLA0700000001ANCHOTD05=60
			TABLA0700000001ANCHOOCUPADO=TABLA0700000001ANCHOOCUPADO+TABLA0700000001ANCHOTD05%>
			<%TABLA0700000001ANCHOTD06=50
			TABLA0700000001ANCHOOCUPADO=TABLA0700000001ANCHOOCUPADO+TABLA0700000001ANCHOTD06%>
			<%TABLA0700000001ANCHOTD02=TABLA0700000001ANCHO-TABLA0700000001ANCHOOCUPADO%>
			<td width="<%=TABLA0700000001ANCHOTD01%>PX" height="0" id="P00735T070000000001TR00TD01"></td>
			<td width="<%=TABLA0700000001ANCHOTD02%>PX" id="P00735T070000000001TR00TD02"></td>
			<td width="<%=TABLA0700000001ANCHOTD03%>PX" id="P00735T070000000001TR00TD03"></td>
			<td width="<%=TABLA0700000001ANCHOTD04%>PX" id="P00735T070000000001TR00TD04"></td>
			<td width="<%=TABLA0700000001ANCHOTD05%>PX" id="P00735T070000000001TR00TD05"></td>
			<td width="<%=TABLA0700000001ANCHOTD06%>PX" id="P00735T070000000001TR00TD06"></td>
		</TR>
		<TR>
            <%tdstyle="style="""
            tdstyle=tdstyle & "padding-top: 10px"
            tdstyle=tdstyle & "; padding-bottom: 10px"
            tdstyle=tdstyle & """"%>
			<td colspan="4" <%=tdstyle%>>
				<font class="FUENTEGRANDECOLORINFORMATIVOBOLD">
					<%if IDIOMA="CATALAN" THEN%>
						<%if accion="utiliza" then%>
	                        Pàgines on s'utilitza la taula "<%=tabla%>"
						<%else%>
	                        Pàgines on es modifica el contingut de la taula "<%=tabla%>"
                        <%end if%>
					<%else%>
						<%if accion="utiliza" then%>
	                        Páginas donde se utilitza la tabla "<%=tabla%>"
						<%else%>
	                        Páginas donde se modifica el contenido de la tabla "<%=tabla%>"
                        <%end if%>
					<%end if%>
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
                <font class="FUENTEESTANDARCOLORNORMALBOLD">
                	&nbsp;
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
                        Pàgina
                    <%else%>
                        Página
                    <%end if%>
                </font>
            </td>
            <%tdstyle="style="""
            tdstyle=tdstyle & "padding-left: 2px"
            tdstyle=tdstyle & "; padding-right: 2px"
            tdstyle=tdstyle & "; padding-top: 4px"
            tdstyle=tdstyle & "; padding-bottom: 4px"
            tdstyle=tdstyle & """"%>
            <td align="center" valign="bottom" class="BORDE01BSOLIDOCOLORBORDE01" <%=tdstyle%>>
                <font class="FUENTEESTANDARCOLORNORMALBOLD">
                    <%if IDIOMA="CATALAN" THEN%>
                        Actualitza
                    <%else%>
                        Actualiza
                    <%end if%>
                </font>
            </td>
            <%tdstyle="style="""
            tdstyle=tdstyle & "padding-left: 2px"
            tdstyle=tdstyle & "; padding-right: 2px"
            tdstyle=tdstyle & "; padding-top: 4px"
            tdstyle=tdstyle & "; padding-bottom: 4px"
            tdstyle=tdstyle & """"%>
            <td align="center" valign="bottom" class="BORDE01BSOLIDOCOLORBORDE01" <%=tdstyle%>>
                <font class="FUENTEESTANDARCOLORNORMALBOLD">
                    <%if IDIOMA="CATALAN" THEN%>
                        Inserta
                    <%else%>
                        Inserta
                    <%end if%>
                </font>
            </td>
            <%tdstyle="style="""
            tdstyle=tdstyle & "padding-left: 2px"
            tdstyle=tdstyle & "; padding-right: 2px"
            tdstyle=tdstyle & "; padding-top: 4px"
            tdstyle=tdstyle & "; padding-bottom: 4px"
            tdstyle=tdstyle & """"%>
            <td align="center" valign="bottom" class="BORDE01BSOLIDOCOLORBORDE01" <%=tdstyle%>>
                <font class="FUENTEESTANDARCOLORNORMALBOLD">
                    <%if IDIOMA="CATALAN" THEN%>
                        Borra
                    <%else%>
                        Borra
                    <%end if%>
                </font>
            </td>
       </tr>
		<%sql0700000001="select " 
        sql0700000001=sql0700000001 & " `CARPETA`"
        sql0700000001=sql0700000001 & " ,`FICHERO`"
        sql0700000001=sql0700000001 & " , if ("
        sql0700000001=sql0700000001 & " 	`CODIGO` like '%update `"&tabla&"%'"
        sql0700000001=sql0700000001 & " 	or"
        sql0700000001=sql0700000001 & " 	`CODIGO` like '%update ["&tabla&"%'"
        sql0700000001=sql0700000001 & " 	,'SI'"
        sql0700000001=sql0700000001 & " 	,''"
        sql0700000001=sql0700000001 & " ) AS `ACTUALIZA`"
        sql0700000001=sql0700000001 & " , if ("
        sql0700000001=sql0700000001 & " 	`CODIGO` like '%insert into ["&tabla&"%'"
        sql0700000001=sql0700000001 & " 	or"
        sql0700000001=sql0700000001 & " 	`CODIGO` like '%insert into `"&tabla&"%'"
        sql0700000001=sql0700000001 & " 	,'SI'"
        sql0700000001=sql0700000001 & " 	,''"
        sql0700000001=sql0700000001 & " ) AS `INSERTA`"
        sql0700000001=sql0700000001 & " , if ("
        sql0700000001=sql0700000001 & " 	`CODIGO` like '%delete * from ["&tabla&"%'"
        sql0700000001=sql0700000001 & " 	or"
        sql0700000001=sql0700000001 & " 	`CODIGO` like '%delete * from `"&tabla&"%'"
        sql0700000001=sql0700000001 & " 	,'SI'"
        sql0700000001=sql0700000001 & " 	,''"
        sql0700000001=sql0700000001 & " ) AS `BORRA`"
        sql0700000001=sql0700000001 & " from"
        sql0700000001=sql0700000001 & " `acceso a) 40 10 codigo pagina web`"
        sql0700000001=sql0700000001 & " where"
		if accion="utiliza" then
			sql0700000001=sql0700000001 & " 	`CODIGO` like '%"&tabla&"%'"
		else
			sql0700000001=sql0700000001 & " ("
			sql0700000001=sql0700000001 & " 	`CODIGO` like '%update `"&tabla&"%'"
			sql0700000001=sql0700000001 & " 	or"
			sql0700000001=sql0700000001 & " 	`CODIGO` like '%update ["&tabla&"%'"
			sql0700000001=sql0700000001 & " 	or"
			sql0700000001=sql0700000001 & " 	`CODIGO` like '%insert into ["&tabla&"%'"
			sql0700000001=sql0700000001 & " 	or"
			sql0700000001=sql0700000001 & " 	`CODIGO` like '%insert into `"&tabla&"%'"
			sql0700000001=sql0700000001 & " 	or"
			sql0700000001=sql0700000001 & " 	`CODIGO` like '%delete * from ["&tabla&"%'"
			sql0700000001=sql0700000001 & " 	or"
			sql0700000001=sql0700000001 & " 	`CODIGO` like '%delete * from `"&tabla&"%'"
			sql0700000001=sql0700000001 & " )"
		end if
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
                    <%tdstyle="style="""
					tdstyle=tdstyle & "padding-left: 2px"
					tdstyle=tdstyle & "; padding-right: 2px"
					tdstyle=tdstyle & "; padding-top: 4px"
					tdstyle=tdstyle & "; padding-bottom: 4px"
                    tdstyle=tdstyle & """"%>
                    <td align="center" valign="top" <%=tdstyle%>>
                        <font class="FUENTEESTANDARCOLORNORMAL">
                            <%if len(rs0700000001("ACTUALIZA"))>0 then%>
								<%=rs0700000001("ACTUALIZA")%>
							<%else%>
                            	&nbsp;
                            <%end if%>
                        </font>
                    </td>
                    <%tdstyle="style="""
					tdstyle=tdstyle & "padding-left: 2px"
					tdstyle=tdstyle & "; padding-right: 2px"
					tdstyle=tdstyle & "; padding-top: 4px"
					tdstyle=tdstyle & "; padding-bottom: 4px"
                    tdstyle=tdstyle & """"%>
                    <td align="center" valign="top" <%=tdstyle%>>
                        <font class="FUENTEESTANDARCOLORNORMAL">
                            <%if len(rs0700000001("INSERTA"))>0 then%>
								<%=rs0700000001("INSERTA")%>
							<%else%>
                            	&nbsp;
                            <%end if%>
                        </font>
                    </td>
                    <%tdstyle="style="""
					tdstyle=tdstyle & "padding-left: 2px"
					tdstyle=tdstyle & "; padding-right: 2px"
					tdstyle=tdstyle & "; padding-top: 4px"
					tdstyle=tdstyle & "; padding-bottom: 4px"
                    tdstyle=tdstyle & """"%>
                    <td align="center" valign="top" <%=tdstyle%>>
                        <font class="FUENTEESTANDARCOLORNORMAL">
                            <%if len(rs0700000001("BORRA"))>0 then%>
								<%=rs0700000001("BORRA")%>
							<%else%>
                            	&nbsp;
                            <%end if%>
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

<%END IF%>

</body>

<%IF REDIRECCIONAR="SI" THEN
	CALL REDIRECCIONARPAGINA( REDIRECCION, REDIRECCIONIFRAME, REDIRECCIONOBJETIVO )
END IF%>

</html>