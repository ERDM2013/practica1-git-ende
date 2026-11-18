<?php

require __DIR__ . "/conexion.php";

$categoria = trim($_GET['cat']) ?? "";

$sql = "SELECT nombre, precio, stock FROM productos WHERE categoria = :cat ORDER BY nombre ASC";

$stmt = $conexion->prepare($sql);
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
    <form action="categoria.php" method="GET">
       <input type="text" placeholder="categoria" name="cat" value="<?= htmlspecialchars($categoria) ?>">
       <input type="submit" name="enviar"><br><br><br>
    </form>
    <?php if (count($productos)>0): ?>
        <table border='1'>
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Stock</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productos as $producto): ?>
                    <tr>
                        <td><?= htmlspecialchars($producto['nombre']) ?> </td>
                        <td><?= htmlspecialchars($producto['precio']) ?></td>
                        <td><?= htmlspecialchars($producto['stock']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No hay productos en esta categoria </p>
    <?php endif; ?>
</body>

</html>