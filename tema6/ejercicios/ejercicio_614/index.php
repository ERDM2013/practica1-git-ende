<?php

require '../conexion.php';


$accion = $_GET['accion'] ?? null;

if($accion === 'editar' || $accion === 'eliminar'){
    $id = $_GET['id'];
    $nuevoNombre = $_GET['nuevoNombre'] ?? null;
    if($accion == 'editar'){
        if($nuevoNombre){
            $sqlUPDATE = "UPDATE usuarios set nombre = :nombre where id = :id";
            $consulta = $conexion->prepare($sqlUPDATE);
            $consulta->execute([":nombre" => $nuevoNombre, ":id" => $id]);
        } else {
            $sqlUPDATE = "UPDATE usuarios set nombre = '' where id = :id";
            $consulta = $conexion->prepare($sqlUPDATE);
            $consulta->execute([":id" => $id]);
        }
    } else if($accion == 'eliminar'){
        $sqlDELETE = "DELETE FROM usuarios where id = :id";
        $consulta = $conexion->prepare($sqlDELETE);
        $consulta->execute([":id" => $id]);
    }
}



$sql = "SELECT * FROM usuarios";
$consulta = $conexion->prepare($sql);
$consulta->execute();
$usuarios = $consulta->fetchAll(PDO::FETCH_ASSOC);


echo "


<!doctype html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport'
          content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Act1 20%</title>
</head>
<body>

<h1>Ejercicio 611 - Evaluable</h1>
<a href='611.html'>Añadir Usuario</a>

<h2>Mostrar todos los usuarios</h2>

<table border='1'>
<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Email</th>
    <th>Editar</th>
</tr>    
";
foreach ($usuarios as $usuario) {
    $id = $usuario['id'];
    echo "<tr>
    <td>{$id}</td>
    <td>{$usuario['nombre']}</td>
    <td>{$usuario['email']}</td>
    <td><a href='?accion=editar&id=$id'>editar</a><a href='?accion=eliminar&id=$id'>eliminar</a></td>
    </tr>  ";
}
echo "
</table>
</body>
</html>
"
?>

