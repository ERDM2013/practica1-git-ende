<?php

require_once "conexion.php";


echo "<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>ficha</title>
</head>
<body>
    <form action='ficha.php' method='get'>
        <label>Introduce un id de producto</label>
        <input  type='number' name='id'>
        <button type='submit'>Enviar</button>
    </form>";
if(isset($_GET['id'])){
    $valor = $_GET['id'] ?? null;
    $id = filter_var($valor, FILTER_VALIDATE_INT,[
    'options' => [
        'min_range' => 1
    ]
]);

$sql = "SELECT * FROM productos WHERE id =:id";

$stmt = $conexion->prepare($sql);
$stmt -> execute([':id' => $id]);
$producto = $stmt->fetchObject();

if($producto === false){
    echo "Producto no encontrado";
}else{
    echo"
    <br><br>
    <table border='1'>
        <tr>
            <th>Ficha</th>
            <th>Categoria</th>
            <th>Precio con IVA</th>
            <th>Disponibilidad</th>
        </tr>
        <tr>
            <td> " . htmlspecialchars($producto->id) . ": " . htmlspecialchars($producto->nombre)."</td>
            <td> " . htmlspecialchars($producto->categoria). "</td>
            <td> " . htmlspecialchars(number_format($producto->precio*1.21, 2))." </td>
            <td>";
             if($producto->stock === 0){
       echo "\n AGOTADO"; 
    }else{
       echo "\n " . htmlspecialchars($producto->stock);
    } 
   
    
}
}else{
   echo'No hay productos.';
}
echo" 
</body>
</html>";
?>


