<?php 

$extension = 'webp';

$resultado = match ($extension) {
    'jpg','jpeg', 'png', 'webp' => 'icon-media',
    'pdf', 'docx', 'txt' => 'icon-doc',
    'php', 'js', 'html', 'css' => 'icon-code',
    default  => 'icon-file',
};

echo $resultado;

?>