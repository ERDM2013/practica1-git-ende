<?php

function censurarContar ($frase, $censura){

// se reemplazan las palabras prohibidas
$fraseCensurada = str_ireplace($censura, '[CENSURADO]', $frase);

// se cuentan las palabaras que tiene la frase
$palabras = explode(' ', $fraseCensurada); // guarda en un array cada palabra que este separada por un espacio
$total = count($palabras); // cuenta las palabras

// se muestra el resultado
echo $fraseCensurada . "\n";
echo "Hay un total de: " . $total . " de palabras.";

}



$frase = 'Los foros de mierda, estan llenos de subnormales que van de listos.';
$prohibidas = ['mierda','subnormales' ];

censurarContar($frase, $prohibidas);

?>