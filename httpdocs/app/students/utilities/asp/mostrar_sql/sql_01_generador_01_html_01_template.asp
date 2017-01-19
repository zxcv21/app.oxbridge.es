<%response.Buffer=true%>

<!--http://sb.oxbridge.es/utilities/asp/mostrar_sql/sql_01_generador_01_html_01_template.asp-->

<html>

<%p_0001556_pagina_id="0001556"%>

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta http-equiv="content-language" content="es" />
	<title>0001556 Generador sql</title>
	<link rel="stylesheet" type="text/css" href="http://sb.oxbridge.es/utilities/asp/mostrar_sql/oxgestion.css">

	<%Response.addHeader "pragma", "no-cache"
	Response.CacheControl = "Private"
	'Selecciona una de las tres opciones siguientes
	Response.Expires = -1441
	'Response.Expires = 0
	'Response.ExpiresAbsolute = #1/5/2000 12:12:12#%>

	<script language="javascript" src="http://sb.oxbridge.es/utilities/asp/mostrar_sql/dimensionar_divs_01_js_funciones.js"></script>

</head>

<body style="margin: 0px 0px 0px 0px">

<!--1.- Comprobar permisos de la página -inicio-->
<!--1.- Comprobar permisos de la página -fin-->

<!--2.- datos necesarios para la página -inicio-->
<!--2.- datos necesarios para la página -fin-->

<!--3.- calculos necesarios para la página -inicio-->
<!--3.- calculos necesarios para la página -fin-->

<!--4.- Verificar datos -inicio-->
<!--4.- Verificar datos -fin-->

<!--5.- Encabezado de página -inicio-->
<!--5.- Encabezado de página -fin-->

<!--7.- Html de la página -inicio-->

	<input type="hidden" value="0" id="p_0001556_input_ancho_navegador">
	<input type="hidden" value="0" id="p_0001556_input_alto_navegador">

	<input type="hidden" value="no" id="p_0001556_div_pagina_input_ancho_fijo">
	<input type="hidden" value="si" id="p_0001556_div_pagina_input_ancho_calcular">
	<input type="hidden" value="si" id="p_0001556_div_pagina_input_ancho_maximo_contenedor">
	<input type="hidden" value="0" id="p_0001556_div_pagina_input_ancho_maximo_pxs">
	<input type="hidden" value="0" id="p_0001556_div_pagina_input_ancho_minimo_pxs">
	<input type="hidden" value="no" id="p_0001556_div_pagina_input_alto_fijo">
	<input type="hidden" value="si" id="p_0001556_div_pagina_input_alto_calcular">
	<input type="hidden" value="si" id="p_0001556_div_pagina_input_alto_maximo_contenedor">
	<input type="hidden" value="0" id="p_0001556_div_pagina_input_alto_maximo_pxs">
	<input type="hidden" value="0" id="p_0001556_div_pagina_input_alto_minimo_pxs">
    <div align ="center" id="p_0001556_div_pagina" style="margin: 0px 0px 0px 0px; border-width: 0px 0px 0px 0px; padding: 0px 0px 0px 0px; border-style: solid; border-color: #000; overflow-x: hidden; overflow-y: hidden; height: 0px; width: 0px">
    
		<input type="hidden" value="0" id="p_0001556_div_cabecera_input_scroller_top">
		<input type="hidden" value="0" id="p_0001556_div_cabecera_input_scroller_left">
		<input type="hidden" value="no" id="p_0001556_div_cabecera_input_ancho_fijo">
		<input type="hidden" value="si" id="p_0001556_div_cabecera_input_ancho_calcular">
		<input type="hidden" value="si" id="p_0001556_div_cabecera_input_ancho_maximo_contenedor">
		<input type="hidden" value="0" id="p_0001556_div_cabecera_input_ancho_maximo_pxs">
		<input type="hidden" value="0" id="p_0001556_div_cabecera_input_ancho_minimo_pxs">
		<input type="hidden" value="si" id="p_0001556_div_cabecera_input_alto_fijo">
		<input type="hidden" value="si" id="p_0001556_div_cabecera_input_alto_calcular">
		<input type="hidden" value="no" id="p_0001556_div_cabecera_input_alto_maximo_contenedor">
		<input type="hidden" value="0" id="p_0001556_div_cabecera_input_alto_maximo_pxs">
		<input type="hidden" value="0" id="p_0001556_div_cabecera_input_alto_minimo_pxs">
		<div align ="left" id="p_0001556_div_cabecera" style="margin: 0px 0px 0px 0px; border-width: 0px 0px 0px 0px; padding: 5px 5px 5px 5px; border-style: solid; border-color: #000; overflow-x: hidden; overflow-y: hidden;" >
			<!--#include virtual="/utilities/asp/mostrar_sql/sql_01_generador_01_html_02_cabecera.asp"-->
		</div>

		<input type="hidden" value="0" id="p_0001556_div_contenido_input_scroller_top">
		<input type="hidden" value="0" id="p_0001556_div_contenido_input_scroller_left">
		<input type="hidden" value="no" id="p_0001556_div_contenido_input_ancho_fijo">
		<input type="hidden" value="si" id="p_0001556_div_contenido_input_ancho_calcular">
		<input type="hidden" value="si" id="p_0001556_div_contenido_input_ancho_maximo_contenedor">
		<input type="hidden" value="0" id="p_0001556_div_contenido_input_ancho_maximo_pxs">
		<input type="hidden" value="0" id="p_0001556_div_contenido_input_ancho_minimo_pxs">
		<input type="hidden" value="no" id="p_0001556_div_contenido_input_alto_fijo">
		<input type="hidden" value="si" id="p_0001556_div_contenido_input_alto_calcular">
		<input type="hidden" value="no" id="p_0001556_div_contenido_input_alto_maximo_contenedor">
		<input type="hidden" value="0" id="p_0001556_div_contenido_input_alto_maximo_pxs">
		<input type="hidden" value="0" id="p_0001556_div_contenido_input_alto_minimo_pxs">
		<div align ="left" id="p_0001556_div_contenido" style="margin: 0px 0px 0px 0px; border-width: 1px 1px 1px 1px; padding: 0px 0px 0px 0px; border-style: solid; border-color: #000; overflow-x: hidden; overflow-y: hidden">

            <input type="hidden" value="0" id="p_0001556_div_listado_tablas_input_scroller_top">
            <input type="hidden" value="0" id="p_0001556_div_listado_tablas_input_scroller_left">
            <input type="hidden" value="no" id="p_0001556_div_listado_tablas_input_ancho_fijo">
            <input type="hidden" value="si" id="p_0001556_div_listado_tablas_input_ancho_calcular">
            <input type="hidden" value="si" id="p_0001556_div_listado_tablas_input_ancho_maximo_contenedor">
            <input type="hidden" value="0" id="p_0001556_div_listado_tablas_input_ancho_maximo_pxs">
            <input type="hidden" value="0" id="p_0001556_div_listado_tablas_input_ancho_minimo_pxs">
            <input type="hidden" value="no" id="p_0001556_div_listado_tablas_input_alto_fijo">
            <input type="hidden" value="si" id="p_0001556_div_listado_tablas_input_alto_calcular">
            <input type="hidden" value="no" id="p_0001556_div_listado_tablas_input_alto_maximo_contenedor">
            <input type="hidden" value="0" id="p_0001556_div_listado_tablas_input_alto_maximo_pxs">
            <input type="hidden" value="0" id="p_0001556_div_listado_tablas_input_alto_minimo_pxs">
            <div align ="left" id="p_0001556_div_listado_tablas" style="margin: 0px 0px 0px 0px; border-width: 0px 0px 0px 0px; padding: 0px 0px 0px 0px; border-style: solid; border-color: #000; overflow-x: hidden; overflow-y: hidden; display: ">
				<iframe height="100%" width="100%" frameborder="0" name="p_0001556_iframe_listado_tablas" id="p_0001556_iframe_listado_tablas" scrolling="auto"></iframe>
            </div>

            <input type="hidden" value="0" id="p_0001556_div_tabla_seleccionada_input_scroller_top">
            <input type="hidden" value="0" id="p_0001556_div_tabla_seleccionada_input_scroller_left">
            <input type="hidden" value="no" id="p_0001556_div_tabla_seleccionada_input_ancho_fijo">
            <input type="hidden" value="si" id="p_0001556_div_tabla_seleccionada_input_ancho_calcular">
            <input type="hidden" value="si" id="p_0001556_div_tabla_seleccionada_input_ancho_maximo_contenedor">
            <input type="hidden" value="0" id="p_0001556_div_tabla_seleccionada_input_ancho_maximo_pxs">
            <input type="hidden" value="0" id="p_0001556_div_tabla_seleccionada_input_ancho_minimo_pxs">
            <input type="hidden" value="no" id="p_0001556_div_tabla_seleccionada_input_alto_fijo">
            <input type="hidden" value="si" id="p_0001556_div_tabla_seleccionada_input_alto_calcular">
            <input type="hidden" value="no" id="p_0001556_div_tabla_seleccionada_input_alto_maximo_contenedor">
            <input type="hidden" value="0" id="p_0001556_div_tabla_seleccionada_input_alto_maximo_pxs">
            <input type="hidden" value="0" id="p_0001556_div_tabla_seleccionada_input_alto_minimo_pxs">
            <div align ="left" id="p_0001556_div_tabla_seleccionada" style="margin: 0px 0px 0px 0px; border-width: 1px 0px 0px 0px; padding: 0px 0px 0px 0px; border-style: solid; border-color: #000; overflow-x: hidden; overflow-y: hidden; display: ">

                <input type="hidden" value="0" id="p_0001556_div_tabla_seleccionada_campos_input_scroller_top">
                <input type="hidden" value="0" id="p_0001556_div_tabla_seleccionada_campos_input_scroller_left">
                <input type="hidden" value="no" id="p_0001556_div_tabla_seleccionada_campos_input_ancho_fijo">
                <input type="hidden" value="si" id="p_0001556_div_tabla_seleccionada_campos_input_ancho_calcular">
                <input type="hidden" value="no" id="p_0001556_div_tabla_seleccionada_campos_input_ancho_maximo_contenedor">
                <input type="hidden" value="0" id="p_0001556_div_tabla_seleccionada_campos_input_ancho_maximo_pxs">
                <input type="hidden" value="0" id="p_0001556_div_tabla_seleccionada_campos_input_ancho_minimo_pxs">
                <input type="hidden" value="no" id="p_0001556_div_tabla_seleccionada_campos_input_alto_fijo">
                <input type="hidden" value="si" id="p_0001556_div_tabla_seleccionada_campos_input_alto_calcular">
                <input type="hidden" value="si" id="p_0001556_div_tabla_seleccionada_campos_input_alto_maximo_contenedor">
                <input type="hidden" value="0" id="p_0001556_div_tabla_seleccionada_campos_input_alto_maximo_pxs">
                <input type="hidden" value="0" id="p_0001556_div_tabla_seleccionada_campos_input_alto_minimo_pxs">
                <div align ="left" id="p_0001556_div_tabla_seleccionada_campos" style="margin: 0px 0px 0px 0px; border-width: 0px 0px 0px 0px; padding: 0px 0px 0px 0px; border-style: solid; border-color: #000; overflow-x: hidden; overflow-y: hidden; float: left; display: ">
					<iframe height="100%" width="100%" frameborder="0" name="p_0001556_iframe_tabla_seleccionada_campos" id="p_0001556_iframe_tabla_seleccionada_campos" scrolling="auto"></iframe>
                </div>

                <input type="hidden" value="0" id="p_0001556_div_codigo_sql_input_scroller_top">
                <input type="hidden" value="0" id="p_0001556_div_codigo_sql_input_scroller_left">
                <input type="hidden" value="no" id="p_0001556_div_codigo_sql_input_ancho_fijo">
                <input type="hidden" value="si" id="p_0001556_div_codigo_sql_input_ancho_calcular">
                <input type="hidden" value="no" id="p_0001556_div_codigo_sql_input_ancho_maximo_contenedor">
                <input type="hidden" value="0" id="p_0001556_div_codigo_sql_input_ancho_maximo_pxs">
                <input type="hidden" value="0" id="p_0001556_div_codigo_sql_input_ancho_minimo_pxs">
                <input type="hidden" value="no" id="p_0001556_div_codigo_sql_input_alto_fijo">
                <input type="hidden" value="si" id="p_0001556_div_codigo_sql_input_alto_calcular">
                <input type="hidden" value="si" id="p_0001556_div_codigo_sql_input_alto_maximo_contenedor">
                <input type="hidden" value="0" id="p_0001556_div_codigo_sql_input_alto_maximo_pxs">
                <input type="hidden" value="0" id="p_0001556_div_codigo_sql_input_alto_minimo_pxs">
                <div align ="left" id="p_0001556_div_codigo_sql" style="margin: 0px 0px 0px 0px; border-width: 0px 0px 0px 1px; padding: 0px 0px 0px 0px; border-style: solid; border-color: #000; overflow-x: hidden; overflow-y: hidden; float: left; display: ">
					<iframe height="100%" width="100%" frameborder="0" name="p_0001556_iframe_codigo_sql" id="p_0001556_iframe_codigo_sql" scrolling="auto"></iframe>
                </div>

            </div>

		</div>

	</div>

<!--7.- Html de la página -fin-->

<!--8.- Pie de página -inicio-->

<!--include virtual="/ox/estructura_web/codigo/material_clases/class_plan/class_plan_03_gestion_03_js_01_template_01_generales.asp"-->

<script type="text/javascript">

	function p_0001556_js_f_01_llamar_redimensionar_divs()
	{
		p_0001055_js_f_99_dimensionar_elementos( 'p_0001556_div_pagina', 'no', 'p_0001556_input_ancho_navegador', 'p_0001556_input_alto_navegador' );
	}
	setInterval(p_0001556_js_f_01_llamar_redimensionar_divs,100);
	
</script>

<!--8.- Pie de página -fin-->

<!--9.- redirigir -inicio-->
<!--9.- redirigir -fin-->

</body>

</html>