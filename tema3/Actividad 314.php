 <?php 
 
 //314. A partir de una base y exponente, mediante la acumulación de productos, calcula la potencia utilizando la instrucción for.

$base= 2;

$exponente = 2;


$resultado =1;

for ($i =0;$i<$exponente;$i++){
    $resultado = $resultado * $base;
}

echo $base;
echo "\n";
echo $exponente;
echo "\n";
echo $resultado;

 ?>