<?php 

require_once "../conexion.php";

$id=isset($_GET['id']) ?? '';

$id =filter_var($id, FILTER_VALIDATE_INT, [
     'options' => [
        'min_range' => 1
    ]
] ) ?? '';

if($id === false){
    echo "Identificador no valido <br>";
    echo '<a href="index.php">Volver al indice</a>';
    exit();
}


$sql = "SELECT * FROM productos WHERE id=:id";
$stmt = $conexion -> prepare ($sql);
$stmt->execute([':id' => $id]);
$producto = $stmt->fetch(PDO::FETCH_OBJ);

if(empty($producto)){
    echo "No existe ningún producto con id " . $id;
}else{
    echo "Nombre: $producto->nombre <br>";
    echo "Categoria: $producto->categoria <br>";
    $precioEspaniol = number_format($producto->precio, 2, ","); 
    echo "Precio: $precioEspaniol <br>";
    if($producto->stock === 0){
        echo "Stock: AGOTADO";
    }else{
        echo "Stock: $producto->stock";
    }
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br><br>
    <a href="index.php">Volver al menú</a><br><br>
    <a href="../ejercicio_613/categorias.php">Volver a categorias</a>
</body>
</html>