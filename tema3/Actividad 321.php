<?php 
/* 321. Rellena un array bidimensional de 6 filas por 9 columnas con números aleatorios comprendidos entre 100 y 999 (ambos incluidos), 
sin que se repita ningún número. Después, muestra el contenido del array de la siguiente forma:

La columna que contiene el número máximo se muestra en azul.
La fila que contiene el número mínimo se muestra en verde.
El resto de números se muestran en negro.
Si una celda pertenece a la vez a la columna del máximo y a la fila del mínimo, debe mostrarse en azul (la columna del máximo tiene prioridad). */


$filas = 6;
$columnas = 9;
$array = [[]];


for($i=0; $i <$filas; $i++){
    for ($k=0; $k < $columnas ; $k++) { 
        $array[$i][$k] = rand(100,999);
        echo $array[$i][$k] . " , ";
    }

    echo "\n" ;
}


?>