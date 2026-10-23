<?php

 abstract class Producto{
    protected const IVA = 0.21;
    protected string $nombre;
    protected float $precioBase;

    public function __construct(string $nombre, float $precioBase)
    {
        $this->nombre = $nombre;
        $this->precioBase = $precioBase;
    }

    public function calcularPrecioFinal():float{

    $precioFinal=0;
    $iva = $this->precioBase * self::IVA;
    $precioFinal = $this->precioBase + $iva;
    return $precioFinal;

    }

    public function resumen(){
        echo("Nombre: " .$this->nombre . "\n Precio Base: "
        . $this->precioBase . "\n Precio con IVA: " . $this->calcularPrecioFinal() . "\n");
    }
}


class ProductoFisico extends Producto{
    private const ENVIO_MINIMO = 2.99;
    private const ENVIO_POR_KG = 1.20;
    private const ENVIO_GRATIS_DESDE = 50.0;
    private float $pesoKg;

    #[Override]
    public function __construct(string $nombre, float $precioBase, float $pesoKg)
    {
        return parent::__construct($nombre, $precioBase);
        $this->pesoKg = $pesoKg;
    }

    #[Override]
    public function calcularPrecioFinal(): float
    {   
        return parent::calcularPrecioFinal();


    }
}


class ProductoDigital extends Producto{
    private int $tamanoMb;

    #[Override]
    public function __construct(string $nombre, float $precioBase, int $tamañoMb)
    {
      
        return parent::__construct($nombre, $precioBase);
        $this->tamanoMb = $tamanoMb;
    }

    #[Override]
    public function calcularPrecioFinal(): float
    {
        return parent::calcularPrecioFinal();
    }

    #[Override]
    public function resumen()
    {
        return parent::resumen();
    }

}


