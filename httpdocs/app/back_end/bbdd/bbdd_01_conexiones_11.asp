<%'pagina_id="0010205"

'1.- Traemos de la p�gina con el include "p_0010205_asp_f_01_tipo_bd", "p_0010205_asp_f_01_db".

function p_0010205_asp_f_01_conexion_base_datos( p_0010205_asp_f_01_tipo_bd, p_0010205_asp_f_01_host, p_0010205_asp_f_01_user, p_0010205_asp_f_01_pswd, p_0010205_asp_f_01_db, p_0010205_asp_f_01_conexion )

	if p_0010205_asp_f_01_tipo_bd = "msaccess" then
		p_0010205_asp_f_01_ruta="C:\Inetpub\vhosts\sb.oxbridge.es\httpsdocs\back_end\bbs\"&p_0010205_asp_f_01_db&".mdb"
		p_0010205_asp_f_01_conexion="DRIVER={Microsoft Access Driver (*.mdb)};DBQ="&p_0010205_asp_f_01_ruta&""
	end if

	if p_0010205_asp_f_01_tipo_bd = "mysql" then


	end if

end function%>