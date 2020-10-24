<?php
	$n1 = $_POST['num1'];
	$n2 = $_POST['num2'];
	$n3 = $_POST['num3'];
	$conjunto=array($n1,$n2,$n3);

foreach ($conjunto as $i => $value) {
    foreach ($conjunto as $j => $value) {        
        if ($conjunto[$i]>$conjunto[$j]) {
            $aux=$conjunto[$i];
            $conjunto[$i]=$conjunto[$j];
            $conjunto[$j]=$aux;           
        }   
    }    
}
echo  "número mayor=".$conjunto[0]." <br>";
echo  "número menor=".$conjunto[2]." <br>";
echo  "número medio=".$conjunto[1]." <br>";
echo "<br><a href='../Ejemplo3.html'>Regresar</a>"

?>