<?php 

// $reputacion asignar un valor aleatorio de 0 a 100
$reputacion = random_int(0,100);
$mfaActivo = true;
$suspendido = false;

if($suspendido == true){
    echo "Permiso: 'ACCESO BLOQUEADO'";
}else{
    match($mfaActivo == true){
        $reputacion >= 80 => echo "Permiso: 'PUBLICACION_DIRECTA",
        
    };
}

?>