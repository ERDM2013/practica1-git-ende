<?php 

$producto = "Galletas";
$precioUnitario = 5.00;
$cantidad = 2;
$aplicaDescuento = true;
$precioDescuento = 0;

$subtotal = $precioUnitario * $cantidad;

if($aplicaDescuento == true){
    $precioDescuento = $subtotal * 0.1 ;
}

$subtotal = $precioUnitario - $precioDescuento;
$iva= $subtotal * 0.21;
$precioFinal = $subtotal + $iva;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presupuesto</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <td>PRODUCTO</td>
                <td>PRECIO</td>
                <td>CANTIDAD</td>
                <td>DESCUENTO</td>
                <td>IVA</td>
                <td>TOTAL</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $producto; ?></td>
                <td><?= $precioUnitario; ?></td>
                <td><?= $cantidad; ?></td>
                <td><?= $precioDescuento; ?></td>
                <td><?= $iva; ?></td>
                <td><?= $precioFinal; ?></td>
            </tr>
        </tbody>
    </table>

    
</body>
</html>