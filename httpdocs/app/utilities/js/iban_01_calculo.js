/*
Page ID: p_0010193
File: /utilities/js/iban_01_validate.js
*/
function calcularIBAN(ncuenta, cpais)
{
	if (cpais.length != 2)
		return "";
		
	else {
	 
		var aux;
		var csiguientes;
		var tmp;
		var csiguientes;
		 
		ncuenta = ncuenta + (cpais.charCodeAt(0) - 55).toString() + (cpais.charCodeAt(1) - 55).toString() + "00";tmp = parseInt(ncuenta.substring(0, 9), 10) % 97;
		
		if (tmp < 10)
			aux = "0";
		else
			aux = "";aux=aux + tmp.toString();ncuenta = ncuenta.substring(9);
		
		while (ncuenta!="")
		{
			if (parseInt(aux, 10) < 10)
				csiguientes = 8;
			else
				csiguientes = 7;
				
			if (ncuenta.length<csiguientes)
			{
				aux=aux + ncuenta;ncuenta="";
			}
			else
			{
				aux=aux + ncuenta.substring(0, csiguientes);ncuenta=ncuenta.substring(csiguientes);
			}
			
			tmp = parseInt(aux, 10) % 97;
			
			if (tmp < 10)
				aux = "0";
			else
				aux = "";
				
			aux=aux + tmp.toString();
		}
		
		tmp = 98 - parseInt(aux, 10);
		
		if (tmp<10)
			return cpais + "0" + tmp.toString()+ncuenta;
		else
			return cpais + tmp.toString()+ncuenta;
	}
}

/* SINTAX: calcularIBAN("\d{1-34}"(string), XX(string))

	ejemplo	: calcularIBAN("00491500042710151321","ES"); //return "ES1800491500042710151321"
	
	ejemplo	comprobacion: 
		var iban= "ES1800491500042710151321";
		if("ES1800491500042710151321" == calcularIBAN(iban.slice(4),iban.slice(0,2))==iban ); //return true

*/