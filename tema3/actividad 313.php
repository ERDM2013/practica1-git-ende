<?php 

$inicio= $_POST['inicio'];
$fin= $_POST['fin'];
$suma = 0;

for($i = $inicio; $i <= $fin; $i++ ){
    $suma += $i;
    echo $suma . " ";
}

echo " <p> El total es: " . $suma . "</p>";

?>