<?php 

$extension = 'png';

$resultado = match ($extension) {
    'jpg','jpeg', 'png', 'webp' => 'icon-media',
    'pdf', 'docx', 'txt' => 'icon-doc',
    
    default  => 'icon-file',
};

echo $resultado;

?>