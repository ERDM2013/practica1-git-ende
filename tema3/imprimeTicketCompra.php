<?php

/* 334. preparaTicketCompra.php: Genera un formulario que permita al usuario introducir varios productos de una compra: 
    para cada producto se pide la cantidad, el nombre y el coste unitario (usa campos tipo array en el formulario,
    por ejemplo nombre[], cantidad[], coste[], con al menos 3 líneas de producto). Al enviar el formulario, 
    valida los datos en imprimeTicketCompra.php.

    imprimeTicketCompra.php: Recibe los datos del formulario. 
    Si algún campo de algún producto está vacío, muestra un único mensaje de error genérico 
    (el mismo texto para cualquier campo vacío, sin necesidad de indicar cuál) y no muestres la tabla. 
    Si todos los campos son correctos, muestra una tabla HTML con los productos (nombre, cantidad, precio unitario y subtotal), 
    y añade una fila final con el importe total de la compra. 
*/

// Lo primero es crear las varibles a partir de los arrays recogidos en el html





if ($_SERVER['REQUEST_METHOD'] !== 'POST') {

    $nombres = $_POST['nombre'] ?? [];
    $cantidades = $_POST['cantidad'] ?? [];
    $costes = $_POST['coste'] ?? [];

    $error = false;

    foreach($nombres as $clave=>$valor){
        if($normes[$clave] === '' || $cantidades[$clave] === '' || $costes [$clave]){
            error = true;
            break;
        }
    }





}






