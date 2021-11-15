<?php

$secuencia = array(2,4,6,6,5,6,2);


function contarRepetidos($array, $valor) {
    $contadores = array_count_values($array);
    echo "Opción 2: El número " . $valor . " se repite " . $contadores[$valor] . " veces<br>";
}


contarRepetidos($secuencia, 6);

?>