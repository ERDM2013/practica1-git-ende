<?php 

//creo la variable

$email = "usuario.desarollador@empresa.com";

// explode separa en este caso hasta el @ la variable $email.

$partes = explode("@", $email); 
// cada parte separada es un array, con lo cual cojo cada array para sacar la informacion. 
$usuario = $partes[0];
$dominio = $partes[1];

// imprimo
echo "usuario: " . $usuario. "<br>";
echo "dominio: " . $dominio. "<br>";


?>