<?php

require_once "../conexion.php";

$sql = "SELECT * FROM productos";
$stmt = $conexion->prepare($sql);
$stmt->execute();
$productos = $stmt->fetchAll(PDO::FETCH_ASSOC);


echo "


<!doctype html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport'
          content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Act1 20%</title>
</head>
<body>

<h1>Ejercicio 612 </h1>

<h2>Mostrar todos los productos</h2>

<table border='1'>
<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Ficha</th>
</tr>    
";
foreach ($productos as $producto) {
    $id = $producto['id'];
    echo "<tr>
    <td>{$id}</td>
    <td>{$producto['nombre']}</td>
    <td><a href='ficha.php?id=$id'>Ir a la ficha</a>
    </tr>  ";
}
echo "
</table>
</body>
</html>
"
?>

