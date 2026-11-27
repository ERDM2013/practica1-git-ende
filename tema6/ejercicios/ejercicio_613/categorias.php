<?php

require_once "../conexion.php";

$sql = "SELECT DISTINCT categoria FROM productos";
$stmt = $conexion->prepare($sql);
$stmt->execute();
$categorias = $stmt->fetchAll(PDO::FETCH_ASSOC);


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

<h1>Ejercicio 613 </h1>";

$categoria =isset($_GET['categorias']) ? $_GET['categorias'] : null;



if ($categoria){
    $sql = "SELECT * FROM productos WHERE categoria=:categoria";
    $stmt = $conexion -> prepare ($sql);
    $stmt->execute([':categoria' => $categoria]);
    $productos= $stmt->fetchAll(PDO::FETCH_ASSOC);

    if(empty($productos)){
        echo "No existe ningún producto con categoria " . $categoria . "<br>";
        echo "<a href='categorias.php'>Ir a categorias </a>";
        exit();
    }
    foreach($productos as $producto){
        $id= $producto['id'];
        $precioEspaniol = number_format($producto['precio'], 2, ","); 
        echo "<li><a href='../ejercicio_612/ficha.php?id=$id'>{$producto['nombre']} </a> -$precioEspaniol €<br>";
    }
      echo "<a href='categorias.php'>Ir a categorias </a>";
} else {
echo "
<h2>Mostrar todas las categorias</h2>

<table border='1'>
<tr>
    <th>Categoria</th>
</tr>    
";
foreach ($categorias as $categoria) {
    echo"
    <tr>
    <td><a href='categorias.php?categorias={$categoria['categoria']}'>{$categoria['categoria']}</a></td>
    </tr>  ";
}
echo "
</table>";
}

echo "

</body>
</html>
";



?>
