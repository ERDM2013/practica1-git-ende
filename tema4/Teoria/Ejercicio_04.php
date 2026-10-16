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


    function tocar(): string
    {
        return ("Tiene " . $this->cuerdas . " cuerdas");
    }
}

class Piano extends Instrumento
{
    protected int $teclas;


    function tocar(): string
    {
        return ("Tiene " . $this->teclas . " teclas");
    }
}

$guitarra1 = new Guitarra("guitarra", 6);
