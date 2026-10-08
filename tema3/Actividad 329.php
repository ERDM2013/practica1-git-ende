<?php


/* 329. Contador de palabras. A partir de una frase larga guardada en una variable,
 divide el texto en palabras y construye un array asociativo donde cada clave sea una palabra (en minúsculas,
  sin signos de puntuación) y el valor sea el número de veces que aparece. Ordena el array de mayor a menor
   frecuencia y muestra por pantalla las 5 palabras más repetidas.  */


$frase = "No se yo si voy a aprobar aprobar aprobar el examen examen examen examen examen de mañana mañana.";

$array = [];


$palabras = explode(" ", $frase);

foreach ($palabras as $palabra) {
    $palabra = strtolower($palabra);
    if (isset($array[$palabra])) {
        $array[$palabra] += 1;
    } else {
        $array[$palabra] = 1;
    }
}

arsort($array);

print_r($array);

