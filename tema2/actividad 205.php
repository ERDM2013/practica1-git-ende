<?php 

$nombre = " jUaN cArLoS pErEz ";

function limpieza ($nombreSucio){
    // se quitan los espacios
    $sinEspacios = trim($nombreSucio);
    // quitas los espacios
    $sinEspaciosMin = strtolower($sinEspacios);
    //La primera letra en mayusculas
    $nombreLimpio = ucwords($sinEspaciosMin);
    // imprimo
    echo $nombreLimpio;
}

// llamo a la función

limpieza($nombre);


?>