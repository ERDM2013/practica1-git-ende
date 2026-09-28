<?php 

/* 315. Reescribe el ejercicio anterior haciendo uso sólo de while. */

$base= 2;

$exponente = 3;

$i = 0;
$resultado =1;

while ($i<$exponente){
    $resultado = $resultado * $base;
    $i++;
}

echo $resultado;

?>