<?php 

	$pesoKg = 4.2;
	$rolCliente = 'PREMIUM'; //valores: 'ESTANDAR', 'PREMIUM', 'VIP'
	$montoCompra = 120.00;
    $costoEnvio = 0;
    $PrecioFinal = 0;

    switch($rolCliente){
        case 'ESTANDAR':
            $precioFinal = $montoCompra + $costoEnvio;
            break;
        case 'PREMIUM':
            if ($montoCompra > 100){
               $precioFinal = $montoCompra + 0;
            }else {
                $descuento = $costoEnvio * 0.50;
                $precioFinal = $montoCompra + $descuento;
             }
        case 'VIP':
            $precioFinal = $montoCompra + 0;

    }

    $costoEnvio = match (true) {
         $pesoKg <=2 => 3.99,
      $pesoKg  > 2 && $pesoKg <5 => 6.50,
    $pesoKg > 5 => 9.99,
    };

   echo " El tipo de cliente es: " . $rolCliente . "\n";
   echo "El precio del monto de la compra es: " . $montoCompra . "\n";
   echo "El precio de los portes son: " . $costoEnvio . "\n";
   echo "El precio final es: " . $precioFinal . "\n";


?>