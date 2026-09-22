<?php
$estado = ''; // Valores: PENDIENTE, ENVIADO, ENTREGADO, CANCELADO
$diasDesdeEnvio = 5;

$color = 'gray';
$mensaje = 'Estado desconocido.';
$notaAdicional = '';

switch ($estado) {
    case 'PENDIENTE':
        $mensaje = 'Su pedido esta pendiente de ser procesado.';
        $color = 'orange';
        break;
    case 'ENVIADO':
        $mensaje = 'Su pedido esta de camino.';
        $color = 'yellow';
        break;
    case 'ENTREGADO':
        $mensaje = 'Su pedido ha sido entregado.';
        $color = 'green';
        break;
    case 'CANCELADO':
         $mensaje = 'Su pedido ha sido cancelado.';
        $color = 'red';
        break;
    default:
        $mensaje = 'Estado desconocido.';
        $color = 'grey';
        break;

}

if($estado = 'ENVIADO' && $diasDesdeEnvio > 3){
    echo "<script>alert('Han pasado mas de 3 dias')</script>";
}

// Renderizado de la etiqueta HTML
echo "<div style='padding: 10px; background-color: {$color}; color: white; border-radius: 5px;'>";
echo "<strong>Estado:</strong> {$mensaje}{$notaAdicional}";
echo "</div>";
