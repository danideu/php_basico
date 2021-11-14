<?php

echo "<h1>Hello, World!</h1>";

$hello = "Hello, World!";
$hello_mayus = strtoupper($hello);
$hello_long = strlen($hello);
$hello_inv = strrev($hello);
$frase = "Aquest és el curs de PHP";


echo "El texto: " . $hello;
echo "<br>";
echo "El texto en mayusculas: " . $hello_mayus;
echo "<br>";
echo "Longitud del texto: " . $hello_long;
echo "<br>";
echo "Texto invertido: " . $hello_inv;
echo "<br>";
echo "Concatenación: " . $hello . " " . $frase;

?>