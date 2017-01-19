/*
Page ID: p_0010196
File: /utilities/js/match_03_documento_identificacion_01_validar_03.js
*/
/*
http://www.planetacodigo.com/recortex/recorte/243

A - Sociedades Anónimas
B - Sociedades de responsabilidad limitada
C - Sociedades colectivas
D - Sociedades comanditarias
E - Comunidades de bienes
F - Sociedades cooperativas
G - Asociaciones y otros tipos no definidos
H - Comunidades de propietarios
J - Sociedades civiles, con o sin personalidad jurídica
K - Españoles menores de 14 años
L - Españoles residentes en el extranjero sin DNI
M - NIF que otorga la Agencia Tributaria a extranjeros que no tienen NIE
N - Entidades extranjeras
P - Corporaciones locales
Q - Organismos autónomos
R - Congregaciones e instituciones religiosas
S - Organos de la administración
U - Uniones Temporales de Empresas
V - Otros tipos no definidos en el resto de claves
W - Establecimientos permanentes de entidades no residentes en España
X - Extranjeros identificados por la Policía con un número de identidad de extranjero, NIE, asignado hasta el 15 de julio de 2008
Y - Extranjeros identificados por la Policía con un NIE, asignado desde el 16 de julio de 2008 (Orden INT/2058/2008, BOE del 15 de julio )
Z - Letra reservada para cuando se agoten los 'Y' para Extranjeros identificados por la Policía con un NIE

La ultima cifra es el dígito de control, que puede ser o bien un número o bien
una letra, en función del tipo de sociedad.
A las categorias P (Ayuntamientos) y X (Extranjeros) les corresponde una letra
en lugar de un número.

El dígito de control se calcula con las 7 cifras restantes del CIF (quitando la
primera y la ultima), con el siguiente algoritmo:

- CIF: A58818501
- Quitamos la primera y la ultima cifra:
	5881850
- Sumamos las cifras pares:
	Suma = 8 + 1 + 5 = 14
- Ahora sumamos cada cifra impar multiplicada por dos, y sumamos las cifras del
  resultado:
	5 * 2 = 10 ==> 1 + 0 = 1
	8 * 2 = 16 ==> 1 + 6 = 7
	8 * 2 = 16 ==> 1 + 6 = 7
	0 * 2 = 0 ==> 0
- y volvemos a sumar esos resultados a la suma anterior:
	Suma=Suma+1+7+7+0;
- Al final de este proceso, tenemos que Suma=29, pues bien, nos quedamos con la
  cifra de las unidades (9)
- Restamos esta cifra de las unidades de 10, dándonos un 1, que es el código de
  control para todos los tipos de sociedades exceptuando la X que se verifica
  como un DNI.
- Para las sociedades K, P, Q y S habria que sumar un 64 al digito de control que
  hemos calculado para hallar el ASCII de la letra de control:
	Chr(64+(10-(Suma mod 10)))
*/
 
/*
 * Tiene que recibir el cif sin espacios ni guiones
 */
function p_0010196_check_nif_cif_nie(cif) 
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
		  objeto_resultado.formato=false;
		 return [false,"FORMATO"];
	 }
	 //comprobacion de NIFs estandar
	
	 if (cif.match(/(^[0-9]{8}[A-Z]{1}$)/)){
	 
	  if ( num[8] == tabla.substr(cif.substr( 0, 8) % 23, 1)){
	  objeto_resultado.NIF=true;
	   return [true,"NIF"];
	  }else {
	   return [false,"NIF"];
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
			objeto_resultado.NIF=true;
			 return [true,"NIF"];
	  }else{
			return [false,"NIF"];
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
		  return [(control == control_digit),"CIF"];

		// Control must be a letter
		} else if ( letter.match( /[KPQS]/ ) ) {
		  return [(control == control_letter),"CIF"];

		// Can be either
		} else {
		  return [(control == control_digit || control == control_letter),"CIF"];
		}

  }
	
	
	 //comprobacion de NIEs
	 //T
	 if (cif.match(/^[T]{1}/ )){
	  if (num[8] == cif.match(/^[T]{1}[A-Z0-9]{8}$/)){
		objeto_resultado.NIE=true;	
		 
			return [true,"NIE"]; 
	  }else{
			return [false,"NIE"];  
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
	  return [false,"NIF"];
	}
	 
	if(dni.charAt(8) != letras[(dni.substring(0, 8))%23]) {
	  return [false,"NIF"];
	}
	
		return [true,"NIF"];
	
	
}
