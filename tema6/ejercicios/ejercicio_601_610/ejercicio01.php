<?php
require __DIR__ . '/conexion.php';

echo "Conectado con el driver: " . $conexion->getAttribute(PDO::ATTR_DRIVER_NAME) . "<br>";

if ($conexion->getAttribute(PDO::ATTR_DEFAULT_FETCH_MODE) === PDO::FETCH_ASSOC) {
    echo "Modo de extracción ASSOC activo: sí";
} else {
    echo "Modo de extracción ASSOC activo: no";
}
