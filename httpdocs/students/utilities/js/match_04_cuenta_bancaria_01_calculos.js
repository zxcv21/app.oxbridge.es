/*
Page ID: p_0010201
File: /utilities/js/match_04_cuenta_bancaria_01_calculos.js
*/
function p_0010201_js_f_01_validar_iban(p_0010201_cuenta_extranjera)
{
	
	p_0010201_cuenta_extranjera = p_0010201_cuenta_extranjera.replace(/ /g,'');
				
	var p_0010201_valor_iban_extranjera=p_0010201_cuenta_extranjera.substr(0,2);
				
	var p_0010201_numero_extranjero=p_0010201_cuenta_extranjera.substr(4,p_0010201_cuenta_extranjera.lenght)
				
	var numero_iban_extranjero=p_0010201_calcularIBAN(p_0010201_numero_extranjero,p_0010201_valor_iban_extranjera);
	
		return numero_iban_extranjero==p_0010201_cuenta_extranjera.substr(0,4) ? true : false;




}
function  p_0010201_calcularIBAN( p_0010201_ncuenta,  p_0010201_cpais)
{
	if ( p_0010201_cpais.length != 2)
		return "";
		
	else {
	 
		var  p_0010201_aux;
		var  p_0010201_csiguientes;
		var  p_0010201_tmp;
		var  p_0010201_csiguientes;
		 
		 p_0010201_ncuenta =  p_0010201_ncuenta + ( p_0010201_cpais.charCodeAt(0) - 55).toString() + ( p_0010201_cpais.charCodeAt(1) - 55).toString() + "00"; p_0010201_tmp = parseInt( p_0010201_ncuenta.substring(0, 9), 10) % 97;
		
		if ( p_0010201_tmp < 10)
			 p_0010201_aux = "0";
		else
			 p_0010201_aux = ""; p_0010201_aux= p_0010201_aux +  p_0010201_tmp.toString(); p_0010201_ncuenta =  p_0010201_ncuenta.substring(9);
		
		while ( p_0010201_ncuenta!="")
		{
			if (parseInt( p_0010201_aux, 10) < 10)
				 p_0010201_csiguientes = 8;
			else
				 p_0010201_csiguientes = 7;
				
			if ( p_0010201_ncuenta.length< p_0010201_csiguientes)
			{
				 p_0010201_aux= p_0010201_aux +  p_0010201_ncuenta; p_0010201_ncuenta="";
			}
			else
			{
				 p_0010201_aux= p_0010201_aux +  p_0010201_ncuenta.substring(0,  p_0010201_csiguientes); p_0010201_ncuenta= p_0010201_ncuenta.substring( p_0010201_csiguientes);
			}
			
			 p_0010201_tmp = parseInt( p_0010201_aux, 10) % 97;
			
			if ( p_0010201_tmp < 10)
				 p_0010201_aux = "0";
			else
				 p_0010201_aux = "";
				
			 p_0010201_aux= p_0010201_aux +  p_0010201_tmp.toString();
		}
		
		 p_0010201_tmp = 98 - parseInt( p_0010201_aux, 10);
		
		if ( p_0010201_tmp<10)
			return  p_0010201_cpais + "0" +  p_0010201_tmp.toString()+ p_0010201_ncuenta;
		else
			return  p_0010201_cpais +  p_0010201_tmp.toString()+ p_0010201_ncuenta;
	}
}

/* SINTAX: calcularIBAN("\d{1-34}"(string), XX(string))

	ejemplo	: calcularIBAN("00491500042710151321","ES"); //return "ES1800491500042710151321"
	
	ejemplo	comprobacion: 
		var iban= "ES1800491500042710151321";
		if("ES1800491500042710151321" == calcularIBAN(iban.slice(4),iban.slice(0,2))==iban ); //return true

*/
function p_0010201_js_f_06_validaCCC(val)
{
    var banco = val.substring(0,4);
    var sucursal = val.substring(4,8);
    var dc = val.substring(8,10);
    var cuenta=val.substring(10,20);
    var CCC = banco+sucursal+dc+cuenta;
    if (!/^[0-9]{20}$/.test(banco+sucursal+dc+cuenta)){
        return false;
    }
    else
    {
        valores = new Array(1, 2, 4, 8, 5, 10, 9, 7, 3, 6);
        control = 0;
        for (i=0; i<=9; i++)
        control += parseInt(cuenta.charAt(i)) * valores[i];
        control = 11 - (control % 11);
        if (control == 11) control = 0;
        else if (control == 10) control = 1;
        if(control!=parseInt(dc.charAt(1))) {
            return false;
        }
        control=0;
        var zbs="00"+banco+sucursal;
        for (i=0; i<=9; i++)
            control += parseInt(zbs.charAt(i)) * valores[i];
        control = 11 - (control % 11);
        if (control == 11) control = 0;
            else if (control == 10) control = 1;
        if(control!=parseInt(dc.charAt(0))) {
            return false;
        }
        return true;
    }
}
