
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
/* Crear carrito.php con un array de productos y precios(pan,leche,huevos) */
$carrito = [
    "pan" => 1, 
    "leche" => 1.5,
    "huevos" => 3
    ];

/* Con session_star(), guardar en $_SESSION['carrito'] las unidades: carrito.php?add=pan */
session_start();
$_SESSION['carrito'] =($_SESSION['pan'] ?? 0) + 1;

if(isset($get['add'])){
    $valor = $_GET['add'];
    $carrito = 
}
/* mostrar cada lina (unidades y subtotal) y el total con number_format() */