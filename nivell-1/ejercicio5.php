<?php

$array1 = [1,2,3,4,5];
$array2 = [6,7,8];

array_push($array2,9);


$array_final = array_merge($array1, $array2);

echo "El valor final es: "; 
foreach($array_final as $valor){
    echo $valor;
}

?>