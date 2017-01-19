<?php 



include($_SERVER['DOCUMENT_ROOT']."/back_end/bbdd/bbdd_01_conexiones_10.php");

$conexion=p_0010202_php_f_01_conexion_base_datos("msaccess","","","","sb_oxcenters");


$p_00000_alta=$_POST['p_0010172_f_alta'];
$p_00000_baja=$_POST['p_0010172_f_baja'];
$p_00000_frecuencia=$_POST['p_0010172_frecuencia'];
$p_00000_cae=$_POST['p_0010172_cae'];
$p_00000_empresa=$_POST['p_0010172_empresa_factura'];
$p_00000_matricula=$_POST['p_0010172_matricula'];
$p_00000_fecha_p_recibo=$_POST['p_0010172_f_primer_recibo'];
$p_00000_p_recibo_importe=$_POST['p_0010172_importe_primer_recibo'];
$p_00000_cuota_fecha=$_POST['p_0010172_f_cuota'];
$p_00000_cuota_importe=$_POST['p_0010172_importe_cuota'];

echo $p_00000_alta . "<br>";
echo $p_00000_baja . "<br>";
echo $p_00000_frecuencia . "<br>";
echo $p_00000_cae . "<br>";
echo $p_00000_empresa . "<br>";
echo $p_00000_matricula . "<br>";
echo $p_00000_fecha_p_recibo . "<br>";
echo $p_00000_p_recibo_importe . "<br>";
echo $p_00000_cuota_fecha . "<br>";
echo $p_00000_cuota_importe . "<br>";
	//Prueba de select con la tabla de *SEXO donde hay INSERTS
	/* 
	$sql="SELECT * FROM `*SEXO`";
	$resultado_query=odbc_exec($conexion,$sql);
	echo "Sexo || Abreviatura" . "</br>";
	while($fila = odbc_fetch_array($resultado_query))
	{
		echo $fila['SEXO'] . " " .$fila['abreviatura'] . "</br>";
	}
	*/
?>