<?php
require_once "conexion.php";

// fetch(): devuelve UNA fila en cada llamada y false cuando no quedan

$stmt = $pdo->query('SELECT id, nombre, precio FROM productos ORDER BY id LIMIT 10');

while ($fila = $stmt->fetch()) {

    echo "#{$fila['id']} {$fila['nombre']} ({$fila['precio']} €)\n";

}

var_dump($stmt->fetch()); // ya no quedan filas

 

// fetchAll(PDO::FETCH_ASSOC): todas las filas en un array de arrays asociativos

$sql = 'SELECT nombre, precio FROM productos ORDER BY id LIMIT 2';

$asociativas = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

print_r($asociativas);

 

// fetchAll(PDO::FETCH_NUM): mismas filas, pero con índices 0, 1, 2...

$numericas = $pdo->query($sql)->fetchAll(PDO::FETCH_NUM);

/* print_r($numericas); */
foreach ($numericas as [$nombre, $precio]) {

    echo "#{$nombre} ({$precio} €)\n";

}

echo "Primer producto: {$numericas[0][0]} a {$numericas[0][1]} €\n";

//fetchAll(PDO::FETCH_KEY_PAIR) con SELECT id, nombre FROM productos 

$numericas = $pdo->query($sql)->fetchAll(PDO::FETCH_KEY_PAIR);


