<?php

$X = array (10, 20, 30, 40, 50);
var_dump($X);
echo "<br>";
unset($X[3]);

sort($X);

var_dump($X);

?>