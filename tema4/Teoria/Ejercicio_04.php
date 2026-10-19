<?php

abstract class Instrumento
{
    protected string $nombre;

    function __construct(string $nombre)
    {
        $this->nombre = $nombre;
    }
    public abstract function tocar(): string;

    function presentar(): string
    {
        return $this->nombre . " " . $this->tocar();
    }
}


class Guitarra extends Instrumento
{
    
    protected int $cuerdas;

    #[Override]
    function __construct(string $nombre, int $cuerdas)
    {
       parent::__construct($nombre);
    $this->cuerdas = $cuerdas;
    }


    function tocar(): string
    {
        return ("Esta " . $this->nombre . " se toca con " . $this->cuerdas . " cuerdas. \n");
    }
}

class Piano extends Instrumento
{
    protected int $teclas;

    #[Override]
    function __construct(string $nombre, int $teclas)
    {
        parent::__construct($nombre);
        $this->teclas = $teclas;
    }


    function tocar(): string
    {

        return ("Esta " . $this->nombre . " se toca con " . $this->teclas . " cuerdas. \n");
    }
}

$guitarra1 = new Guitarra("guitarra", 5);
echo $guitarra1->tocar();

$piano1 = new Piano("piano" , 10);
echo $piano1->tocar();

$instrumentos = [];
$instrumentos[]= $guitarra1;
$instrumentos[]= $piano1;

foreach($instrumentos as $instrumento){
    echo $instrumento-> 
}

