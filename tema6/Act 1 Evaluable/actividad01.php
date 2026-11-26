<?php

require_once "conexion.php";

if(isset($_POST['nombre']) || isset($_POST['email']) || isset($_POST['password'])){
    $nombre = $_POST['nombre'] ?? null;
    $email = $_POST['email'] ?? null;
    $contraseña= $_POST['contraseña'] ?? null;

    /* Insertar en tabla */
$sql = "INSERT nombre, email, contraseña IN TO usuarios WHERE nombre =:nombre, email=:email, contraseña=:contraseña";
$stmt = $conexion->prepare($sql);
$stmt -> execute();


/* Imprimir tabla con los datos de los usuarios */
$sql2 = "SELECT * FROM usuarios";
$stmt2 = $conexion->prepare($sql2);
$stmt2 -> execute();
$usuario = $stmt2->fetchObject();

if($usuario === false){
    echo "Usuario no encontrado";
}else{
    echo"
    <br><br>
    <table border='1'>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
            <th>EMAIL</th>
            <th>CONTRASEÑA</th>
        </tr>
        <tr>
            <td> " . htmlspecialchars($usuario->id) . "</td>
            <td> " . htmlspecialchars($usuario->nombre)."</td>
            <td> " . htmlspecialchars($usuario->email). "</td>
            <td> " . htmlspecialchars($usuario->contraseña)." </td>";  
}
"</body>
</html>";

}

if(isset($_GET['id'])){
    $valor = $_GET['id'] ?? null;
    $id = filter_var($valor, FILTER_VALIDATE_INT,[
    'options' => [
        'min_range' => 1
    ]
]);

/* Eliminar datos */
$sql3 = "DELETE FROM usuarios WHERE id=:id";
$stmt3 = $conexion->prepare($sql3);
$stmt3->execute([':id' => $id]);
$usuario = $stmt3->fetchColumn();

}

