<?php
// Datos de conexión (en un proyecto real, en un archivo fuera de htdocs)

$config = [

    'host'    => '127.0.0.1',

    'puerto'  => 3306,

    'bd'      => 'tienda_pdo',

    'usuario' => 'root',   // XAMPP trae root sin contraseña: solo para clase

    'clave'   => '',

];

$dsn = "mysql:host={$config['host']};port={$config['puerto']};"

    . "dbname={$config['bd']};charset=utf8mb4";



$opciones = [

    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // error SQL = excepción

    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,     // filas con claves por nombre

    PDO::ATTR_EMULATE_PREPARES   => false,                  // preparadas nativas del servidor

];



try {

    $pdo = new PDO($dsn, $config['usuario'], $config['clave'], $opciones);
} catch (PDOException $e) {

    error_log($e->getMessage());                      // detalle al log

    exit("No se pudo conectar con la base de datos.\n"); // mensaje neutro

}

// El valor llegaría del formulario; en consola usamos uno por defecto

$categoria = $_GET['categoria'] ?? 'Periféricos';



// 1) prepare(): el servidor recibe la consulta con marcadores, sin datos

$stmt = $pdo->prepare(

    'SELECT nombre, precio FROM productos

     WHERE categoria = :categoria AND  precio >=:minimo and precio <= :maximo

     ORDER BY precio'

);

// --- NUEVO BLOQUE: INSERCIÓN PREPARADA ---
$stmtInsert = $pdo->prepare(
    'INSERT INTO productos (nombre, categoria, precio, stock) 
     VALUES (:nombre, :categoria, :precio, :stock)'
);

$stmtInsert->execute([
    'nombre'    => 'HDMI',
    'categoria' => 'Cables',
    'precio'    => 12.99,
    'stock'     => 10,
]);

echo "La última ID insertada es: " . $pdo->lastInsertId() . "\n\n";

/* ------------------------------ INSERTAR ELEMENTO EN LA TABLA SPIROS-------------------------------------------
$categoria =$_get['categoria'] ?? 'cables';

$sql = "INSERT INTO productos(nombre, categoria, precio, stock) VALUES( ?,?,?,?);
$stmt =$pdo->prepare($sql);
$stmt->execute(['hdmi', 'cables',10.5,20]);

echo $pdo ->lastInsertId();

----------------------------------------------------------------------------------------------------------------*/


// 2) execute(): los valores se envían por separado y nunca se mezclan con el SQL

$stmt->execute(['categoria' => $categoria, 'minimo' => 20, 'maximo' => 100]);

foreach ($stmt as $fila) {

    echo "{$fila['nombre']}: {$fila['precio']} €\n";
}



// 3) Intento clásico de inyección: se trata como un texto más, no como SQL

$stmt->execute(['categoria' => "' OR '1'='1", 'minimo' => 20, 'maximo' => 100000]);

echo 'Filas devueltas con la inyección: ' . count($stmt->fetchAll()) . "\n";
