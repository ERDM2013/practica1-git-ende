<?php
require_once '../conexion.php';

$nombre = $_POST['nombre'] ?? '';
$email = $_POST['email'] ?? '';
$pass = $_POST['pass'] ?? '';

if(empty($nombre) || empty($email) || empty($pass)){
    echo "Hay campos vacios";
}else {

$sql = "SELECT email FROM usuarios WHERE email =: email";
$consulta = $conexion->prepare($sql);
$consulta->execute([":email" => $email]);
$email= $consulta->fetchAll(PDO::FETCH_ASSOC);

if(count($email) >0){
    echo "Este email ya existe.";
}else {
$sql2 = "INSERT INTO usuarios (nombre, email, contra) VALUES (:nombre, :email, :pass)";
$consulta2 = $conexion->prepare($sql2);
$consulta2->execute([":nombre" => $nombre, ":email" => $email, ":pass" => $pass]);

header('location: index.php');
exit();
}
}





?>