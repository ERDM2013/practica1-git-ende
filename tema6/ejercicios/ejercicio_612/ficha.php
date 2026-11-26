<?php 

require_once "../conexion.php";

$id =filter_var($_GET['id'], FILTER_VALIDATE_INT, [
     'options' => [
        'min_range' => 1
    ]
] ) ?? 'Identificador no valido';



