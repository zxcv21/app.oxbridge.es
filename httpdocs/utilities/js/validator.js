function prueba(){
var res="";
/*  res="<p>Resultado: </p>"+check_nif_cif_nie("65627981H");
 res+="<p>NIE </p>";
 res+="*"+check_nif_cif_nie("X2253885T")+"<br/>";
 res+="*"+check_nif_cif_nie("Y1842250X")+"<br/>";
 res+="*"+check_nif_cif_nie("Y5288674E")+"<br/>";
 res+="*"+check_nif_cif_nie("X8316733W")+"<br/>";
 res+="*"+check_nif_cif_nie("Y3264372L")+"<br/>"; */
 res+="<p>CIF </p>";
res+="*"+check_nif_cif_nie("B34363994")+"<br/>";
 res+="*"+check_nif_cif_nie("U66310335")+"<br/>";
 res+="*"+check_nif_cif_nie("Q7291103E")+"<br/>";
 res+="*"+check_nif_cif_nie("J6092234A")+"<br/>";
 res+="*"+check_nif_cif_nie("G20262549")+"<br/>";
 res+="*"+check_nif_cif_nie("A61218434")+"<br/>";
 res+="*"+check_nif_cif_nie("B46362406")+"<br/>";
 res+="*"+check_nif_cif_nie("A84535244")+"<br/>";
 res+="*"+check_nif_cif_nie("C25042987")+"<br/>"; 
 res+="*"+check_nif_cif_nie("D8679539J")+"<br/>";
 /********************************************/
  res+="<p>ERRONEOS </p>";
 res+="*"+check_nif_cif_nie("A64218434")+"<br/>";
 res+="*"+check_nif_cif_nie("B46352406")+"<br/>";
 res+="*"+check_nif_cif_nie("A83535244")+"<br/>";
 res+="*"+check_nif_cif_nie("C25542987")+"<br/>"; 
 res+="*"+check_nif_cif_nie("D8678739J")+"<br/>";

 
/*   res+="<p>NIF </p>";
 res+="*"+check_nif_cif_nie("05988707J")+"<br/>";
 res+="*"+check_nif_cif_nie("29571018X")+"<br/>";
 res+="*"+check_nif_cif_nie("46226405Q")+"<br/>";
 res+="*"+check_nif_cif_nie("86527146L")+"<br/>";
 res+="*"+check_nif_cif_nie("63123323F")+"<br/>"; */
	
	
	document.body.innerHTML=res;
}
function check_nif_cif_nie(cif) 
{

	 objeto_resultado = 
	 { 
		"formato" : true,
		"NIF" : false,
		"CIF" : false,
		"NIE" : false,
		
	 };
	 var num=[];
	 var tabla ="TRWAGMYFPDXBNJZSQVHLCKE";
	 cif = cif.toUpperCase();
	 var n;
	  
	 for (i = 0; i < 9; i ++){
		   num[i] = cif.substr(i, 1);
	 }
	 //si no tiene un formato valido devuelve error

	 if (!cif.match(/((^[A-Z]{1}[0-9]{7}[A-Z0-9]{1}$|^[T]{1}[A-Z0-9]{8}$)|^[0-9]{8}[A-Z]{1}$)/)){
		   return objeto_resultado.formato=false;
	 }
	 //comprobacion de NIFs estandar
	 
	 if (cif.match(/(^[0-9]{8}[A-Z]{1}$)/)){
	 
	  if ( num[8] == tabla.substr(cif.substr( 0, 8) % 23, 1)){
	   return objeto_resultado.NIF=true;
	  }else {
	   return false;
	  }
	 }
	 //algoritmo para comprobacion de codigos tipo CIF
	 var numero_intermedio=0;
	 var suma=0;
	  suma = parseInt(num[2]) + parseInt(num[4]) + parseInt(num[6]);
	 for (i = 1; i < 8; i += 2){
		 
		var numero_intermedio=(2*num[i]);
		var x=parseInt(numero_intermedio.toString().substr(1,1));
		
		if(isNaN(x))x=0;
		suma += parseInt(numero_intermedio.toString().substr(0,1)) + x;
	 }
	 n = 10 - suma.toString().substr(suma.length - 1, 1);
	 
	 //comprobacion de NIFs especiales (se calculan como CIFs)
	 if (cif.match('^[KLM]{1}')){
	  if (num[8] == String.fromCharCode(64+parseInt(n))){
			return objeto_resultado.NIF=true;
	  }else{
			return false;
	  }
	 }
	 //comprobacion de CIFs
	 if (cif.match( /^([ABCDEFGHJKLMNPQRSUVW])(\d{7})([0-9A-J])$/))
	 {
		   var match = cif.match( /^([ABCDEFGHJKLMNPQRSUVW])(\d{7})([0-9A-J])$/);
		   var letter  = match[1],
				number  = match[2],
				control = match[3];

			var even_sum = 0;
			var odd_sum = 0;
			var h;

		for ( var i = 0; i < number.length; i++) {
		  h = parseInt( number[i], 10 );

		  // Odd positions (Even index equals to odd position. i=0 equals first position)
		  if ( i % 2 === 0 ) {
			// Odd positions are multiplied first.
			h *= 2;

			// If the multiplication is bigger than 10 we need to adjust
			odd_sum += h < 10 ? h : h - 9;

		  // Even positions
		  // Just sum them
		  } else {
			even_sum += h;
		  }

		}

			var control_digit = (10 - (even_sum + odd_sum).toString().substr(-1) );
			var control_letter = 'JABCDEFGHIJABCDEFGHI'.substr( control_digit, 1 );

		// Control must be a digit
		if ( letter.match( /[ABEH]/ ) ) {
		  return control == control_digit;

		// Control must be a letter
		} else if ( letter.match( /[KPQS]/ ) ) {
		  return control == control_letter;

		// Can be either
		} else {
		  return control == control_digit || control == control_letter;
		}

  }
	
	
	 //comprobacion de NIEs
	 //T
	 if (cif.match(/^[T]{1}/ )){
	  if (num[8] == cif.match(/^[T]{1}[A-Z0-9]{8}$/)){
		objeto_resultado.NIE=true;	  
			return true;
	  }else{
	   return false;
	  }
	 }
	 //XYZ
		var array_letras=['X','Y','Z'];
		var	array_numeros=['0','1','2'];
	 if (cif.match('^[XYZ]{1}')){
		
		 // Change the initial letter for the corresponding number and validate as DNI
    var nie_prefix = cif.charAt( 0 );

    switch (nie_prefix) {
      case 'X': nie_prefix = 0; break;
      case 'Y': nie_prefix = 1; break;
      case 'Z': nie_prefix = 2; break;
    }

    return validar_dni( nie_prefix + cif.substr(1));

  }
		 
	 //si todavia no se ha verificado devuelve error
	 return objeto_resultado.formato=false;
}
function validar_dni(dni)
{

var letras = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X',
	'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T'];
 
	if( !(/^\d{8}[A-Z]$/.test(dni)) ) {
	  return false;
	}
	 
	if(dni.charAt(8) != letras[(dni.substring(0, 8))%23]) {
	  return false;
	}
	
		return true;
	
	
}



