<?php 

function enmascararTarjeta($numeroTarjeta){

//primero limpiar el numero, no espacios, no simbolos, solo numeros

$numeroLimpio = preg_replace('/\D/', ' ', $numeroTarjeta);

// ponemos los asteriscos menos en los cuatro ultimos digitos

$asteriscos = str_repeat('*',strlen($numeroTarjeta) - 4);

// para que devuelva los 4 ultimos digitos de la cadena

return $asteriscos . substr($numeroLimpio, -4);

}

echo enmascararTarjeta('1234 5675 2589 2458');
echo "\n";
echo enmascararTarjeta('1111-2222-3333-4444');
echo "\n";
echo enmascararTarjeta('1111222233334444');



?>