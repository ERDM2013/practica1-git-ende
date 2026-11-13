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



// Comparación: misma consulta con una conexión SIN opciones y con opciones

$sinOpciones = new PDO($dsn, $config['usuario'], $config['clave']);

echo "Sin opciones (FETCH_BOTH por defecto):\n";

print_r($sinOpciones->query('SELECT id, nombre FROM productos WHERE id = 1')->fetch());

echo "Con FETCH_ASSOC:\n";

print_r($pdo->query('SELECT id, nombre FROM productos WHERE id = 1')->fetch());

echo "Prueba";

print_r($sinOpciones->query('SELECT id, nombre, stock FROM productos WHERE categoria = "Almacenamiento"')->fetch());



// ERRMODE_EXCEPTION: un fallo SQL se puede capturar con try-catch

try {

    print_r($pdo->query('SELECT * FROM tabla_que_no_existe'));
    print_r($pdo->getAttribute(PDO::ATTR_DRIVER_NAME));
    print_r($pdo->getAttribute(PDO::ATTR_SERVER_VERSION));
} catch (PDOException $e) {

    echo 'Excepción capturada. SQLSTATE: ' . $e->getCode() . "\n";
}
