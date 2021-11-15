<?php

$text1 = "wxyz";
$text2 = "a";
$text3 = "ab";

function cambiarstring($mitexto){
    $salida = $mitexto;
    $ult_caracter = substr($mitexto, -1);
    $primer_caracter = substr($mitexto, 0, 1);
    $resto_caracteres = substr($mitexto, 1,-1);
    if(strlen($mitexto) > 1)
        $salida = $ult_caracter . $resto_caracteres . $primer_caracter;
    echo $salida  . "<br>";
}

cambiarstring($text1);
cambiarstring($text2);
cambiarstring($text3);




?>