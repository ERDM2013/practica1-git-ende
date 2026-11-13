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