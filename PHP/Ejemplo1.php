<?php  
	$n1 = $_POST['num1'];
	$n2 = $_POST['num2'];
	$n3 = $_POST['num3'];
	$n4 = $_POST['num4'];

	$Resultado = (($n1+$n2+$n3+$n4)/4);
	echo "El promedio de los 4 números es: ".$Resultado;
	echo "<br><a href='../Ejemplo1.html'>Regresar</a>"
	
?>