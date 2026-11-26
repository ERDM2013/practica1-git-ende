<?php
require __DIR__ . '/conexion.php';

$stmt = $conexion->query('SELECT * FROM productos ORDER BY precio desc');

foreach ($stmt as $p) {
    echo "{$p['nombre']} ({$p['categoria']}) " . number_format((float) $p['precio'], 2, ',', '.') . "€ {$p['stock']}\n";
}

$stmt2 = "SELECT COUNT(*) FROM productos";
$total = (int) $conexion->query($stmt2)->fetchColumn();
echo "Total de productos: " .  $total;
