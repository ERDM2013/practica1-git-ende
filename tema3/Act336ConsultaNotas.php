
<?php
/*Act336.html pide el nombre de un alumno. Act336ConsultaNotas.php tiene un array alumno => nota 
y se debe recorrer los nombres para encontrarlo. El array es el siguiente:

$alumnos = [

    'Ana'   => 9.5,

    'Luis'  => 4.2,

    'Marta' => 7.8,

    'Pedro' => 5.0,

    'Lucía' => 6.4,

];

La búsqueda no distingue mayúsculas de minúsculas ni espacios sobrantes. 
Muestra la nota y la calificación (menos de 5 Suspenso, de 5 a 6 Suficiente, 
de 6 a 7 Bien, de 7 a 9 Notable, 9 o más Sobresaliente). Si el alumno no existe, muestra un error.
*/
$alumnos = [
    'Ana'   => 9.5,
    'Luis'  => 4.2,
    'Marta' => 7.8,
    'Pedro' => 5.0,
    'Lucía' => 6.4,
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nombreRecibido = trim($_POST['nombre'] ?? '');

    $nombreEncontrado = '';
    $notaEncontrada = '';

    foreach ($alumnos as $nombre => $nota) {

        if (strtolower($nombreRecibido) === strtolower($nombre)) {
            $nombreEncontrado = $nombre;
            $notaEncontrada = $nota;
            break;
        }
    }

    if ($nombreEncontrado !== null) {

        switch (true) {
            case $notaEncontrada < 5:
                echo "<p>La nota de $nombreEncontrado es Suspenso</p>";
                break;
            case $notaEncontrada >= 5 && $notaEncontrada < 6:
                echo "<p>La nota de $nombreEncontrado es Suficiente</p>";
                break;
            case $notaEncontrada >= 6 && $notaEncontrada < 7:
                echo "<p>La nota de $nombreEncontrado es Bien</p>";
                break;
            case $notaEncontrada >= 7 && $notaEncontrada < 9:
                echo "<p>La nota de $nombreEncontrado es Notable</p>";
                break;
            case $notaEncontrada >= 9;
                echo "<p>La nota de $nombreEncontrado es Sobresaliente</p>";
                break;
            default:
                echo "<p>No hay nota para $nombreEncontrado</p>";
                break;
        }
    } else {
        echo "El alumno " . $nombreEncontrado . "no fue encontrado";
    }
}


?>