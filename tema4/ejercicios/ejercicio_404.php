<?php

class Empleado{
    protected string $nombre;
    protected float $salarioBase;

    public function __construct(string $nombre, float $salarioBase)
    {
        $this->nombre = $nombre;
        $this->salarioBase = $salarioBase;
    }

    public function getNombre():string{
        return $this->nombre;
    }

    public function calcularSalario():float{
        return $this->salarioBase;
    }

    public function __toString()
    {
        return $this->nombre . ": " . $this->calcularSalario();
    }

}

class Gerente extends Empleado{
    private const PLUS_POR_PERSONA = 120.00;
    private int $personasACargo;
    
    #[Override]
    public function __construct(string $nombre, float $salarioBase, int $personasACargo)
    {
         $this->personasACargo = $personasACargo;
        return parent::__construct($nombre, $salarioBase);
       
    }

    #[Override]
    public function calcularSalario(): float
    {
        $pluses = self::PLUS_POR_PERSONA * $this->personasACargo;
        $total = $this->salarioBase + $pluses;
        return $total;
    }

   
}

class Programador extends Empleado{
    private const PRECIO_HORA_EXTRA = 22.5;
    private int $horasExtra = 0;
    
    #[Override]
    public function __construct(string $nombre, float $salarioBase, int $horasExtra)
    {
        $this->horasExtra = $horasExtra;
        return parent::__construct($nombre, $salarioBase);
        
    }

    #[Override]
    public function calcularSalario(): float
    {
        $totalHoras = self::PRECIO_HORA_EXTRA * $this->horasExtra;
        
        return parent::calcularSalario() + $totalHoras;

    }
}

$rosaMolina = new Empleado("empleada",1650);
$andresVidal = new Gerente("gerente",2800,6);
$anaGomez = new Programador("programadora",2200,12);
$ivanTorres = new Programador("programador",2100,0);
$elenaCano = new Gerente("gerente",2600,3);

$empleados = [];
$empleados[]=$rosaMolina;
$empleados[]=$andresVidal;
$empleados[]=$anaGomez;
$empleados[]=$elenaCano;

$nominas = 0;
foreach($nominas as $nomina){
    $totalNominas = $totalNominas + $nomina;
}