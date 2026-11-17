<?php

require __DIR__ . "/conexion.php";

$categoria = trim($_GET['cat']) ?? "" ;

$sql = "SELECT nombre, precio, stock FROM productos WHERE categoria = :cat ORDER BY nombre ASC";

$stmt = $conexion->prepare($sql) ;
$stmt->execute([':cat' => $categoria]);
$productos = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <table>
        <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th>Stock</th>
        </tr>
        <tr>
            <td></td>
        </tr>
    </table>
</body>
</html>