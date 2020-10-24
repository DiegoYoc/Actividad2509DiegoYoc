<?php
$n1 = $_POST['num1'];
$n2 = $_POST['num2'];
$n3 = $_POST['num3'];
$n4 = $_POST['num4'];
$n5 = $_POST['num5'];
$n6 = $_POST['num6'];
$n7 = $_POST['num7'];
$n8 = $_POST['num8'];
$n9 = $_POST['num9'];
$n10 = $_POST['num10'];
$n11 = $_POST['num11'];
$n12 = $_POST['num12'];
$n13 = $_POST['num13'];
$n14 = $_POST['num14'];
$n15 = $_POST['num15'];
$n16 = $_POST['num16'];
$n17 = $_POST['num17'];
$n18 = $_POST['num18'];
$n19 = $_POST['num19'];
$n20 = $_POST['num20'];

$arreglo=array($n1,$n2,$n3,$n4,$n5,$n6,$n7,$n8,$n9,$n10,$n11,$n12,$n13,$n14,$n15,$n16,$n17,$n18,$n19,$n20);

foreach ($arreglo as $i => $value) {
    foreach ($arreglo as $j => $value) {        
        if ($arreglo[$i]>$arreglo[$j]) {
            $sustituir=$arreglo[$i];
            $arreglo[$i]=$arreglo[$j] ;
            $arreglo[$j]=$sustituir;       
        }   
    }    
}
echo "Numeros Ascendentes<br>";
for ($i=19; $i >=0 ; $i--) { 
    echo $arreglo[$i]."<br>";
}
echo "<br><br>Numeros descendente <br>";
foreach ($arreglo as $i => $value) {
    echo $arreglo[$i]."<br>";
}    
?>