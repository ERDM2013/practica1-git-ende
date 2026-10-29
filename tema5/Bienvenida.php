<?php

/* Cogemos la variable del formulario */
if(isset($_POST['nombre'])){
    $nombre = trim($_POST['nombre'] ?? "");

/* controlamos si llega */

if($nombre !== ''){
    setcookie('nombre', $nombre, [
        'expires'  => time() + 60 * 60 * 24 * 7, // 7 días
        'path'     => '/',
        'secure'   => false,  // true si usas HTTPS
        'httponly' => true,
        'samesite' => 'Lax',
    ]);
}
echo "Nombre cogido: $nombre";
header('Location: index.html',true, 303);
exit;

}

if(isset($_COOKIE['nombre'])){
    $nombre = $_COOKIE['nombre'];
    echo ("La cookie es: " . $nombre);
};
?>