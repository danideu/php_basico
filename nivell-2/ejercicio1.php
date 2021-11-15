<?php

$suma1 = suma(1,2);
echo "Suma1: " . $suma1 . "<br>";

$suma2 = suma(3,2);
echo "Suma2: " . $suma2 . "<br>";

$suma3 = suma(2,2);
echo "Suma3: " . $suma3 . "<br>";

function suma($a, $b){
    return ($a === $b) ? ($a + $b) * 2 : ($a + $b);
}

?>
