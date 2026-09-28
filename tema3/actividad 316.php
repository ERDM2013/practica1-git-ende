<?php 

/* 315. Reescribe el ejercicio anterior haciendo uso sólo de do-while. */

$base= 2;

$exponente = 2;

$i = 0;
$resultado =1;

do{
$resultado = $resultado * $base;
    $i++;
}

while ($i<$exponente);

echo $resultado;

?>