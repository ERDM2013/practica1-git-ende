<?php
require_once '../conexion.php';

$nombre = $_POST['nombre'] ?? '';
$email = $_POST['email'] ?? '';
$pass = $_POST['pass'] ?? '';

$sql = "INSERT INTO usuarios (nombre, email, contra) VALUES (:nombre, :email, :pass);";
$consulta = $conexion->prepare($sql);
$consulta->execute([":nombre" => $nombre, ":email" => $email, ":pass" => $pass]);

header('location: index.php');
exit();
?>