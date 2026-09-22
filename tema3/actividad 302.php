<?php 

$accion = 'registro';

switch($accion){
    case 'inicio':
        echo "Cargar portada.";
        break;
    case 'login':
    case 'registro':
        echo "Cargar formulario de acceso.";
        break;
    case 'editar_prefil':
    case 'guardar_perfil':
        echo "Módulo de gestión de switvhusuario.";
        break;
    default:
        echo "HTTP 404: Página no encontrada.";
}


?>