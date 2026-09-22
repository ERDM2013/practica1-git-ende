<?php 

function conversion ($listaString){

/*1.explode(",", $listaString) corta la cadena en trozos cada vez que encuentra una coma 
y retorna un array.*/

$arrayLista = explode(',',$listaString);


/*2.Mediante array_map(), aplicamos a cada elemento individual trim() 
(para quitar el espacio después de la coma) y strtoupper() (para convertirlo a mayúsculas).*/

$sinEspacios = array_map('trim', $arrayLista);
$elementosProcesados = array_map('strtoupper', $sinEspacios);


/*3.implode(" - ", $elementosProcesados) toma el array procesado y lo une de nuevo en un
 solo string utilizando " - " como delimitador*/

$arrayDefinitivo = implode(" - ", $elementosProcesados);

/*5.Imprimimos*/

return $arrayDefinitivo;


}

echo conversion("php, javascript, html, css, sql");

?>