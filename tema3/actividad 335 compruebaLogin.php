<?php

/* verificamos si los datos se han enviado por post */

if ($_SERVER["REQUEST_METHOD"] === "POST") {


    /* recogemos los datos introducidos*/

    $usuarioIntroducido = trim($_POST['usuario'] ?? '');
    $passwordIntroducida = trim($_POST['password'] ?? '');

    /* array asociativo usuario => contraseña */

    $usuarios = [
        "edurne" => "edurne",
        "josh" => "josh",
        "javier" => "javier"
    ];

    /* se validan los datos introducidos, para ver que son iguales que los del array asociativo */

    if (isset($usuarios[$usuarioIntroducido]) && $usuarios[$usuarioIntroducido] === $passwordIntroducida) {
        echo "¡Bienvenido " . $usuarioIntroducido . "!";
    } else {
        echo "Usuario o contraseña incorrectas";
    }
}

?>