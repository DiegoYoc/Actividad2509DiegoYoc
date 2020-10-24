<?php  
	$numero = $_POST['num'];

	$dec=bindec($numero);
	echo "El número decimal es ". $dec;
	echo "<br><a href='../Ejemplo5.html'>Regresar</a>"
	
?>