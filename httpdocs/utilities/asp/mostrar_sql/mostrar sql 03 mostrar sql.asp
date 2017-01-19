<!--#include virtual="/Ox/estructura_web/modulos/asp/conexiones/bases_de_datos_01_mysql_02_numancia_oculta.asp"-->
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

<%if len(request.Form("p_bd_accesos"))>0 then
	p_bd_accesos=request.Form("p_bd_accesos")
else
	if len(request.QueryString("p_bd_accesos"))>0 then
		p_bd_accesos=request.QueryString("p_bd_accesos")
	else
		p_bd_accesos="access"
	end if
end if

Set p_conn_servidor_numancia_bd_accesos=Server.CreateObject("ADODB.Connection")
if p_bd_accesos="access" then
	p_conn_servidor_numancia_bd_accesos.open "accesos"
else
	call p_0000169_conexion_bd_mysql( "numancia", "accesos", "", p_conn_servidor_numancia_bd_accesos )
end if%>

<HEAD>

	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<title>00681 codigo sql</title>
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

	'P�gina 00681
	PAGINACODIGO="00681"
	PAGINADESCRIPCION="Genera el c�digo sql para la tabla y acci�n seleccionada"
	
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

	CALL OTROSDATOSPAGINA( MINUTOSPARALACOMPROBACIONDELACCESO, COLORRESALTAR, COLORFILA1, COLORFILA2, COLORBORDE, CONEXIONSERVER, CONEXIONINTERNA )
	MINUTOSPARAVERIFICARCONTRASENYA=MINUTOSPARALACOMPROBACIONDELACCESO

	'0.1.- DATOS PAGINA ACTUAL -FIN	

	'0.3.- INFORMACION STRING PARA VERIFICAR PASSWORD -INICIO

	INFORMACIONREDIRECCION="?SESIONID="&SESIONID
		
	INFORMACIONTRASPASADA="&conexion="&conexion
	INFORMACIONTRASPASADA=INFORMACIONTRASPASADA & "&accion="&accion
	INFORMACIONTRASPASADA=INFORMACIONTRASPASADA & "&nombrecodigo="&nombrecodigo	
	INFORMACIONTRASPASADA=INFORMACIONTRASPASADA & "&conexiondelasentenciasql="&conexiondelasentenciasql
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

		'CALL DIMENSIONESPAGINA( SESIONID, PAGINACODIGO, AYER, CALCULARDIMENSIONESPAGINA, NAVEGADORNOMBRE, ANCHO, ANCHONAVEGADOR, ANCHOEXPLORER, ANCHOFIREFOX, ANCHOSAFARI, ALTO, ALTOEXPLORER, ALTOFIREFOX, ALTOSAFARI )

		SQL0005010001="SELECT"
		SQL0005010001=SQL0005010001 & " `ANCHO`"
		SQL0005010001=SQL0005010001 & " ,`ALTO`"
		SQL0005010001=SQL0005010001 & " FROM"
		SQL0005010001=SQL0005010001 & " `SESION B) 10 10 DIMENSIONES PAGINAS`"
		SQL0005010001=SQL0005010001 & " WHERE"
		SQL0005010001=SQL0005010001 & " `SESION ID`=" & SESIONID & ""
		SQL0005010001=SQL0005010001 & " AND"
		SQL0005010001=SQL0005010001 & " `PAGINA CODIGO`='" & PAGINACODIGO & "'"
		SET RS0005010001=SERVER.CreateObject("ADODB.RECORDSET")
		RS0005010001.OPEN SQL0005010001, p_conn_servidor_numancia_bd_accesos
		
		IF RS0005010001.BOF=FALSE AND RS0005010001.EOF=FALSE THEN
			RS0005010001.MOVEFIRST
			ANCHO=RS0005010001("ANCHO")
			ALTO=RS0005010001("ALTO")
		END IF
		
		RS0005010001.CLOSE
		SET RS0005010001=NOTHING

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

	<%TABLA0700000001MARGENIZQUIERDO=0
    TABLA0700000001MARGENDERECHO=0
    TABLA0700000001MARGENSUPERIOR=0
    TABLA0700000001MARGENINFERIOR=0
    TABLA0700000001ANCHO=ANCHO-TABLA0700000001MARGENIZQUIERDO+TABLA0700000001MARGENDERECHO
	TABLA0700000001ALTO=ALTO-TABLA0700000001MARGENSUPERIOR-TABLA0700000001MARGENINFERIOR
    TABLA0700000001ANCHOOCUPADO=0
    TABLA0700000001ANCHOC1=int((TABLA0700000001ANCHO-TABLA0700000001ANCHOOCUPADO)/2)
    TABLA0700000001ANCHOOCUPADO=TABLA0700000001ANCHOOCUPADO+TABLA0700000001ANCHOC1
    TABLA0700000001ANCHOC2=TABLA0700000001ANCHO-TABLA0700000001ANCHOOCUPADO%>
    <%TABLASTYLE="STYLE="""
    TABLASTYLE=TABLASTYLE & "MARGIN-LEFT: "&TABLA0700000001MARGENIZQUIERDO&"px"
    TABLASTYLE=TABLASTYLE & "; MARGIN-RIGHT: "&TABLA0700000001MARGENDERECHO&"px"
    TABLASTYLE=TABLASTYLE & "; MARGIN-TOP: "&TABLA0700000001MARGENSUPERIOR&"px"
    TABLASTYLE=TABLASTYLE & "; MARGIN-BOTTOM: "&TABLA0700000001MARGENINFERIOR&"px"
    TABLASTYLE=TABLASTYLE & """"%>
    <table width="<%=TABLA0700000001ANCHO%>px" height="<%=TABLA0700000001ALTO%>px" cellpadding="0" cellspacing="0" <%=TABLASTYLE%>>
        <TR>
            <td width="<%=TABLA0700000001ANCHOC1%>px" height="0"></td>
            <td width="<%=TABLA0700000001ANCHOC2%>px"></td>
        </TR>
		<TR>
			<TD height="<%=TABLA0700000001ALTO%>px" valign="top" align="center" class="BORDE01RSOLIDOCOLORBORDE01" id="P00681T070000000001TR01TD01">
				<%DIRECCIONPAGINACODIGO="00748"
				CALL DIRECCIONPAGINA( DIRECCIONPAGINAIP, DIRECCIONPAGINACODIGO, DIRECCIONPAGINARUTA, DIRECCIONPAGINASERVIDOR, CONEXIONOFICINA, ANCHOEXPLORER, ANCHOFIREFOX, ANCHOSAFARI, ALTOEXPLORER, ALTOFIREFOX, ALTOSAFARI )
				PAGINA00748=DIRECCIONPAGINAIP&DIRECCIONPAGINARUTA
				IF LEN(PAGINA00748)>0 THEN
					IR00748="http://"&PAGINA00748
					IR00748=IR00748 & INFORMACIONREDIRECCION
					IR00748=IR00748 & INFORMACIONTRASPASADA
					IR00748=IR00748 & "&ANCHO="&TABLA0700000001ANCHOC1-20
				END IF%>
                <iframe src="<%=IR00748%>" height="<%=TABLA0700000001ALTO%>px" width="<%=TABLA0700000001ANCHOC1%>px" frameborder="0" name="PAGINA00681IFRAME01" scrolling="auto"></iframe>
			</TD>
			<TD valign="top" align="center" id="P00681T070000000001TR01TD02">
				<iframe height="100%" width="100%" frameborder="0" name="PAGINA00681IFRAME02" scrolling="auto"></iframe>
			</TD>
		</TR>
    </table>

<!--7.- GENERAR CODIGO SQL -FIN-->

<!--8.- PIE DE PAGINA -INICIO-->
<!--8.- PIE DE PAGINA -FIN-->

<!--9.- REDIRIGIR -INICIO-->
<!--9.- REDIRIGIR -FIN-->

<%END IF%>

<%p_conn_servidor_numancia_bd_accesos.close
set p_conn_servidor_numancia_bd_accesos=nothing%>

</body>

<%IF REDIRECCIONAR="SI" THEN
	CALL REDIRECCIONARPAGINA( REDIRECCION, REDIRECCIONIFRAME, REDIRECCIONOBJETIVO )
END IF%>

</html>