<?php
$estado = 'ENVIADO'; // Valores: PENDIENTE, ENVIADO, ENTREGADO, CANCELADO
$diasDesdeEnvio = 5;

$color = 'gray';
$mensaje = 'Estado desconocido.';
$notaAdicional = '';




if($estado = 'ENVIADO' && $diasDesdeEnvio = 2){
    return $notaAdicional 
}
// Renderizado de la etiqueta HTML
echo "<div style='padding: 10px; background-color: {$color}; color: white; border-radius: 5px;'>";
echo "<strong>Estado:</strong> {$mensaje}{$notaAdicional}";
echo "</div>";
?>