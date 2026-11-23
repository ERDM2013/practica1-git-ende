<?php
require_once "conexion.php";

$unidades = 10;

$sql = "SELECT COUNT(*) FROM productos WHERE stock = 0";

$stmt = $conexion->prepare($sql);
$stmt->execute();
$resultado = $stmt->fetchColumn();

echo "\n Agotados antes: " . $resultado;

$sql2 = "UPDATE productos set stock = $unidades WHERE stock = 0";
$stmt2 = $conexion->prepare($sql2);
$stmt2->execute();
$resultado2 = $stmt2->rowCount();

echo"\n Productos repuestos: " . $resultado2;

$stmt->execute();
$resultado = $stmt->fetchColumn();

echo"\n Agotados despues: " . $resultado;

