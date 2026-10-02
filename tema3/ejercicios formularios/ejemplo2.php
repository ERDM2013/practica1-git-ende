<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {

        echo "<p>Esta página procesa un formulario. Rellénalo en <a href=\"ejemplo2.html\">ejemplo2.html</a>.</p>\n";

        exit;

}

 

$nombre         = trim($_POST['nombre'] ?? '');

$turno          = $_POST['turno'] ?? 'sin elegir';

$acepto         = isset($_POST['acepto']);

$boletin        = isset($_POST['boletin']);

$lenguajes  = $_POST['lenguajes'] ?? [];

$curso          = $_POST['curso'] ?? '';

$comentario = $_POST['comentario'] ?? '';

 

if (!is_array($lenguajes)) {   // por si alguien manipula el envío

        $lenguajes = [];

}

 

echo "<p>Nombre: $nombre</p>\n";

echo "<p>Turno: $turno</p>\n";

echo '<p>Acepta las condiciones: ' . ($acepto ? 'sí' : 'no')

   . ' (valor recibido: ' . ($_POST['acepto'] ?? 'nada') . ")</p>\n";

echo '<p>Quiere novedades: ' . ($boletin ? 'sí' : 'no') . "</p>\n";

echo '<p>Lenguajes: ' . ($lenguajes ? implode(', ', $lenguajes) : 'ninguno') . "</p>\n";

echo "<p>Curso: $curso</p>\n";

echo '<p>Comentario: ' . nl2br($comentario) . "</p>\n";