<?php

class Empleado
{
    protected string $nombre;
    protected float $salarioBase;

    public function __construct(string $nombre, float $salarioBase)
    {
        $this->nombre = $nombre;
        $this->salarioBase = $salarioBase;
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function calcularSalario(): float
    {
        return $this->salarioBase;
    }

    public function __toString()
    {
        return $this->nombre . ": " . $this->calcularSalario();
    }
}

class Gerente extends Empleado
{
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

class Programador extends Empleado
{
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

class Director extends Gerente
{
    #[Override]
    function __construct(string $nombre, float $salarioBase, int $personasACargo)
    {
        return parent::__construct($nombre, $salarioBase, $personasACargo);
    }

    #[Override]
    function calcularSalario(): float
    {
        return parent::calcularSalario();
    }
}

$rosaMolina = new Empleado("empleada", 1650);
$andresVidal = new Gerente("gerente", 2800, 6);
$anaGomez = new Programador("programadora", 2200, 12);
$ivanTorres = new Programador("programador", 2100, 0);
$elenaCano = new Gerente("gerente", 2600, 3);

$empleados = [];
$empleados[] = $rosaMolina;
$empleados[] = $andresVidal;
$empleados[] = $anaGomez;
$empleados[] = $ivanTorres;
$empleados[] = $elenaCano;

/* $nominas; */
$totalNominas = 0;
foreach ($empleados as $nomina) {
    $totalNominas = $totalNominas + $nomina->calcularSalario();
}

echo "El total de la suma de las es: " . $totalNominas . "\n";



for ($j = 0; $j < count($empleados) - 1; $j++) {
    for ($i = 0; $i < count($empleados) - 1 - $j; $i++) {
        if ($empleados[$i]->calcularSalario() < $empleados[$i + 1]->calcularSalario()) {
            $aux = $empleados[$i + 1];
            $empleados[$i + 1] = $empleados[$i];
            $empleados[$i] = $aux;
        }
    }
}

$contadorGerente = 0;

foreach ($empleados as $empleado) {
    echo $empleado . "\n";
    if ($empleado instanceof gerente) {
        $contadorGerente++;
    }
}

echo "El total de gerentes es: " . $contadorGerente;


/* 6.- Por que heredan del empleado (el padre) ese metodo. */