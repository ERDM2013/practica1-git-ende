<?php

require_once "conexion.php";

$sql = "SELECT categoria, COUNT(*) AS productos, SUM(stock) AS unidades FROM productos GROUP BY categoria ORDER BY categoria";
$stmt = $conexion->query($sql);
$stmt->execute();
$categorias =  $stmt->fetchAll(PDO::FETCH_ASSOC);


$sql2 = "SELECT SUM(precio * stock) AS total FROM productos";
$stmt2 = $conexion->query($sql2);
$stmt2->execute();
$resultado = $stmt2->fetch(PDO::FETCH_ASSOC);
$categoriasTotal= $resultado['total'];

echo "Categorias con productos: " . count($categorias) . "\n" ;
foreach ($categorias as $fila) {
    echo" {$fila['categoria']} {$fila['productos']} ({$fila['unidades']} uds)\n ";
}
echo "Valor total del inventario: " . $categoriasTotal;
