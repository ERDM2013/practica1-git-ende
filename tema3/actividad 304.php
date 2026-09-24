<?php

$pesoKg = 7.2;
$rolCliente = 'ESTANDAR'; //valores: 'ESTANDAR', 'PREMIUM', 'VIP'
$montoCompra = 80.00;
$costoEnvio = 0;
$precioFinal = 0;

$costoEnvio = match (true) {
    $pesoKg <= 2 => 3.99,
    $pesoKg  > 2 && $pesoKg <=5 => 6.50,
    $pesoKg > 5 => 9.99,
};


switch ($rolCliente) {
    case 'ESTANDAR':
        $precioFinal = $montoCompra + $costoEnvio;
        break;
    case 'PREMIUM':
        if ($montoCompra > 100) {
            $precioFinal = $montoCompra + 0;
        } else {
            $descuento = $costoEnvio * 0.50;
            $precioFinal = $montoCompra + $descuento;
        }
        break;
    case 'VIP':
        $precioFinal = $montoCompra + 0;
    default:
        echo "Tipo de cliente no valido";
}


echo "El tipo de cliente es: " . $rolCliente . " <br>";
echo "El precio del monto de la compra es: " . $montoCompra . " €<br>";
echo "El precio de los portes son: " . $costoEnvio . " €<br>";
echo "El precio final es: " . $precioFinal . " €<br>";


?>