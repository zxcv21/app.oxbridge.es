<!--0001557-->

<table cellpadding="0" cellspacing="0">
	<TR>
		<%TDSTYLE="STYLE="""
		TDSTYLE=TDSTYLE & "PADDING: 3PX"
		TDSTYLE=TDSTYLE & """"%>
		<TD valign="middle" height="35px" <%=TDSTYLE%>>
			<FONT class="FUENTEMUYGRANDECOLORINFORMATIVOBOLD">
				Generar c&oacute;digo sql
			</FONT>
		</TD>
	</TR>
	<TR>
		<%PAGINAMOSTRARTABLAS="sb.oxbridge.es/utilities/asp/mostrar_sql/sql_02_listado_tablas_01_html_01_template.asp"
		IF LEN(PAGINAMOSTRARTABLAS)>0 THEN
			IRMOSTRARTABLAS="http://"&PAGINAMOSTRARTABLAS
		END IF%>
		<form method="post" action="<%=IRMOSTRARTABLAS%>" target="p_0001556_iframe_listado_tablas">
			<%TDSTYLE="STYLE="""
			TDSTYLE=TDSTYLE & "PADDING: 3PX"
			TDSTYLE=TDSTYLE & """"%>
			<TD valign="middle" height="35px" <%=TDSTYLE%>>
				<FONT class="FUENTEESTANDARCOLORINFORMATIVOBOLD">
					Selecciona bdd&nbsp;
					<select name="conexion" id="conexion" class="FUENTEESTANDARCOLORNORMAL">
						<option value="" selected></option>
						<option value="msaccess - sb_oxcenters">access - sb_oxcenters</option>
						<option value="msaccess - sb_oxgestion">access - sb_oxgestion</option>
						<!--option value="mysql - oxgestion">mysql - oxgestion</option-->
					</select>
					&nbsp;&nbsp;
					Nombre conexi&oacute;n&nbsp;
					<input name="conexion de la sentencia sql" id="conexion de la sentencia sql" style="width: 100px" class="INPUTFUENTEESTANDARCOLORNORMAL">
					&nbsp;&nbsp;
					Filtro&nbsp;
					<input name="filtro" id="filtro" style="width: 200px" class="INPUTFUENTEESTANDARCOLORNORMAL">
					&nbsp;&nbsp;
					<%textobotonmostrartablas="Mostrar tablas"%>
					<INPUT value="<%=textobotonmostrartablas%>" type="submit" name="mostrar tablas" id="mostrar tablas" class="BOTONFUENTEESTANDARCOLORNORMAL">
				</FONT>
			</TD>
		</form>
	</TR>
</TABLE>
