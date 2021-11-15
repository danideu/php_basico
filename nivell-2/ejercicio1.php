<?php

$a = 1;
$b = 2;

$suma1 = suma($a,$b);
echo "Suma1: " . $suma1 . "<br>";

$a = 3;
$b = 2;

$suma2 = suma($a,$b);
echo "Suma2: " . $suma2 . "<br>";

$a = 2;
$b = 2;

$suma3 = suma($a,$b);
echo "Suma3: " . $suma3 . "<br>";

function suma($a, $b){
    $sumar = $a + $b;
    if($a == $b){
        $sumar = $sumar * 2;
    }
    return $sumar;
}



?>
