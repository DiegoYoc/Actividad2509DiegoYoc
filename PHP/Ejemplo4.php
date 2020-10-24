<?php  
	$palabra = $_POST['palabra'];
	$ca=0;
	$ce=0;
	$ci=0;
	$co=0;
	$cu=0;
	$Longitud = strlen($palabra);
	for ($i=0; $i < $Longitud; $i++){ 
		$subcadena = substr($palabra, $i, 1);
		if ($subcadena == "a" || $subcadena == "A" ){
			$ca +=1;
		}
		if ($subcadena == "e" || $subcadena == "E"){
			$ce +=1;
		}
		if ($subcadena == "i" || $subcadena == "I"){
			$ci +=1;
		}
		if ($subcadena == "o" || $subcadena == "O"){
			$co +=1;
		}
		if ($subcadena == "u" || $subcadena == "U"){
			$cu +=1;
		}
	}
	
	if (($ca > $ce) && ($ca > $ci) && ($ca > $co) && ($ca > $cu)){
		echo "La letra A se repite mas veces";
	}
	if (($ce > $ca) && ($ce > $ci) && ($ce > $co) && ($ce > $cu)){
		echo "La letra E se repite mas veces";
	}
	if (($ci > $ca) && ($ci > $ce) && ($ci > $co) && ($ci > $cu)){
		echo "La letra I se repite mas veces";
	}
	if (($co > $ca) && ($co > $ce) && ($co > $ci) && ($co > $cu)){
		echo "La letra O se repite mas veces";
	}
	if (($cu > $ca) && ($cu > $ce) && ($cu > $ci) && ($cu > $co) ){
		echo "La letra U se repite mas veces";
	}
	echo "<br><a href='../Ejemplo4.html'>Regresar</a>"

?>
