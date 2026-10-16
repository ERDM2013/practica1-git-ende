<?php

declare(strict_types=1);

class BankAccount
{
    public string $owner;
    private int $balance;
    private static string $nombre = "Caixa";


    function __construct(string $owner, int $initialbalance = 0)
    {
        $this->owner = $owner;
        $this->balance = $initialbalance;
    }

    function deposit(int $importe): void
    {
        if ($importe < 0) {
            echo "No se puede ingresar valores menores que 0 \n";
        } else {
            $this->balance += $importe;
        }
    }

    function withdraw(int $importe)
    {
        if ($importe > $this->balance) {
            echo "No se puede sacar mas dinero del que tienes \n";
        } else {
            $this->balance -= $importe;
        }
    }
    function transfer( BankAccount $cuenta2, int $importe){
        if($this->balance >= $importe){
            $cuenta2->deposit($importe);
            $this->balance -= $importe;
            echo "Se ha transferido " . $importe . " €\n";
        }else{
            echo("No tienes tanto dinero en la cuenta \n");
        }

    }

    function getBalance()
    {
        return $this->balance;
    }

    public static function nombreBanco(string $nuevoNombre)
    {
        self::$nombre = $nuevoNombre;
    }

    function __toString()
    {
        return "La cuenta de " . $this->owner . ", tiene un balance de: " . $this->balance . "€ " . self::$nombre . PHP_EOL;
    }
}

$edurne = new BankAccount("Edurne", 200);
echo $edurne;
$edurne->deposit(300);
echo $edurne;
$edurne->withdraw(100);
echo $edurne;
/* $edurne::nombreBanco("BBVA");
echo $edurne; */
/* $edurne->withdraw(500);
echo $edurne;
$edurne->deposit(-50);
echo $edurne; */
$ana = new BankAccount("Ana", 500);
$edurne->transfer($ana, 600);
echo $edurne;
echo $ana;
