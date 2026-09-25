<?php 

// $reputacion asignar un valor aleatorio de 0 a 100
$reputacion = rand(0,100);
$mfaActivo = true;
$suspendido = false;
$resultado = '';
$admin = true;

echo $reputacion;

if($suspendido){
    $resultado = "Permiso: 'ACCESO BLOQUEADO'";
}else{
    $resultado = match(true){
       ( $mfaActivo && $reputacion >= 80) || $admin => "Permiso: 'PUBLICACION_DIRECTA'",
      ( $mfaActivo && $reputacion >=50 && $reputacion <= 79) ||(!$mfaActivo && $reputacion >= 80) => "Permiso:'PUBLICACION_CON_REVISION'",
        $mfaActivo && $reputacion <50 => "'Permiso: 'SOLO_LECTURA'", 
        default => "'Permiso: 'SOLO_LECTURA'"
    };
}

echo "La reputación es: " . $reputacion . "<br>";
echo $resultado;

?>