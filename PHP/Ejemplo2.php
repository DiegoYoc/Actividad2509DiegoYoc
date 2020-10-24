<?php  
	$V1 = $_POST['b'];
	$V2 = $_POST['v'];
	$V3 = $_POST['h'];
	
	$Resultado = (($V1+ $V2)/2) * $V3;
	echo "El área del trapecio es: ".$Resultado;
	
?>