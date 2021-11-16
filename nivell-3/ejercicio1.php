<?php

$cadena = "Hello World";
$sin_espacios = str_replace(' ', '', $cadena);
$array = str_split($sin_espacios);

var_dump($array);

?>