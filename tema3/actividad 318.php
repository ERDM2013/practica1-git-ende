<?php
/* 318. Generar un array de palabras. Recorrer el array y controlar cuántas palabras son palíndromas? 
Por ejemplo, si se deja el array [ana, adriana, oro, plata, oso, gato, radar,coche, reconocer, ruta]
 debería mostrar que hay 5 palabras palíndromas.
 */

$palabras = ['ana', 'adriana', 'oro', 'plata', 'oso', 'gato', 'radar', 'coche', 'reconocer', 'ruta'];
$contador = 0;

foreach ($palabras as $palabra) {
   
    $pos_inicial = 0;
    $pos_final = strlen($palabra) - 1;
    $esPalindroma = true;


    while ($pos_inicial < $pos_final) {

        if ($palabra[$pos_inicial] !== $palabra[$pos_final]) {
            $esPalindroma = false;
            break;
        }

        $pos_inicial++;
        $pos_final--;

       
    }

     if ($esPalindroma) {
            echo "\n La palabra " . $palabra . " es Palindroma" ;
            $contador++;
        } else {
            echo "\n La palabra " . $palabra . " no es Palindroma";
        }
    
    
}

echo "\n Total de palabras Palindromas: " . $contador;