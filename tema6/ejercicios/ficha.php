<?php

require_once "conexion.php";

$valor = $_GET['id'] ?? null;


$id = filter_var($valor, FILTER_VALIDATE_INT,[
    'options' => [
        'min_range' => 1
    ]
]);

if($id === false){
    exit('Identificador no valido.');
}

$sql = "SELECT * FROM productos WHERE id =:id";

$stmt = $conexion->prepare($sql);
$stmt -> execute([':id' => $id]);
$producto = $stmt->fetchObject();

if($producto === false){
    echo "Producto no encontrado";
}else{
    echo "Ficha #" . htmlspecialchars($producto->id) . ": " . htmlspecialchars($producto->nombre) .
    "\n  Cateforia: " . htmlspecialchars($producto->categoria) .
    "\n  Precio con IVA (21%): " . htmlspecialchars(number_format($producto->precio*1.21, 2)) ;
    if($producto->stock === 0){
       echo "\n  Disponibilidad: AGOTADO"; 
    }else{
       echo "\n  Disponibilidad: " . htmlspecialchars($producto->stock);
    } 
}

