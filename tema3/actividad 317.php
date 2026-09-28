<?php 
/* 317. Genera un array aleatorio de 33 elementos con números comprendidos entre el 0 y 100 y calcula:

El mayor
El menor
La media */

$array = [];

for($i=0; $i<33; $i++){
    $array[] = rand(0,100);
}

print_r($array);
echo "El numero mayor es: " . max($array) . "\n";
echo "El numero menor es: " . min($array) . "\n";
echo "El numero medio es: " . array_sum($array) / count($array);





?>