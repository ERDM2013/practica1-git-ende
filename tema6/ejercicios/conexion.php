<?php
$pdo = "mysql:host=127.0.0.1;port=3306;dbname=tienda_pdo;charset=utf8mb4";

$usuario = 'root';
$contraseña = '';

$opciones = [
    PDO:: ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO:: ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO:: ATTR_EMULATE_PREPARES => false
];

const MODO_DESARROLLO = true;

try{
    $conexion = new PDO($pdo,$usuario,$contraseña,$opciones);
}catch(PDOException $e){
    if(!MODO_DESARROLLO){
        echo"Servicio no disponible. Intentalo más tarde.";
    }else {
        echo $e->getMessage();
    }

    error_log($e->getMessage());
}