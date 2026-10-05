<?php 
/* Act337.html pide un código de producto y las unidades. Act337CatalogoIva.php tiene un array código => [nombre, precio].
 Productos: código => [nombre, precio sin IVA]
$productos = [
    'P001' => ['nombre' => 'Teclado', 'precio' => 24.90],
    'P002' => ['nombre' => 'Ratón',   'precio' => 12.50],
    'P003' => ['nombre' => 'Monitor', 'precio' => 149.99],
    'P004' => ['nombre' => 'Webcam',  'precio' => 39.00],
];
$iva = 21;
Valida que las unidades sean un entero mayor o igual que 1, busca el código y muestra en una tabla el nombre, 
el precio sin iva, el IVA del 21 % y el precio total.

*/
$productos = [
    'P001' => ['nombre' => 'Teclado', 'precio' => 24.90],
    'P002' => ['nombre' => 'Ratón',   'precio' => 12.50],
    'P003' => ['nombre' => 'Monitor', 'precio' => 149.99],
    'P004' => ['nombre' => 'Webcam',  'precio' => 39.00],
];

$totalSinIva = 0;
$iva = 21;
$total = 0;

if($_SERVER['REQUEST_METHOD'] === 'POST'){

$codigoUsuario = trim($_POST['codigo']) ?? '';

$inidades = trim($_POST['unidades']) >= 1 ?? '';

$encontrado=false;
foreach($productos as $codigo => $prod){
    if($codigoUsuario === strtolower($codigo)){
        $producto = $productos[$codigo];
        $encontrado= true;
        break;

    }

}

if($encontrado){

}

}




?>