<?php
/*
Crea dos arrays, un que inclogui 5 integers, i un altre que inclogui 3 integers.

Afegeix un valor més a l'array que conté 3 integers.
Mescla els dos arrays i imprimeix el tamany de l'array resultant per pantalla.
Ara imprimeix per pantalla l'array resultant valor a valor.
Consell: pot ser que les funcions var_dump () i / o print_r () et resultin útils per a visualitzar el contingut de les teves arrays.
*/

$array1 = [1,2,3,4,5];
$array2 = [6,7,8];

array_push($array2,9);


$array_final = array_merge($array1, $array2);
echo "El tamaño del array es: " . count($array_final) . "<br>";
echo "El valor final es: "; 
foreach($array_final as $valor){
    echo $valor;
}

?>