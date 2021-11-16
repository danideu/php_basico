<?php

$secuencia = array(2,4,6,6,5,6,2);


function contarRepetidos($array, $valor) {
    if (in_array($valor, $array)) {
        $contadores = array_count_values($array);
        echo "Opción 2: El número " . $valor . " se repite " . $contadores[$valor] . " veces<br>";
    }else{
        echo "El valor " . $valor . " no existe en el array<br>";
    }
}


contarRepetidos($secuencia, 2);

?>