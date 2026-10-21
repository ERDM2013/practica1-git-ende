<?php


class CuentaBancaria extends Exception
{
    private string $titular;
    private string $iban;
    private float $saldo = 0;
    static private int $cuentasBancarias = 0;

    function __construct(string $titular, String $iban, float $saldo = 0)
    {
        $this->titular = $titular;
        $this->iban = $iban;
        $this->saldo = $saldo;
        self::$cuentasBancarias++;
    }

    function ingresar($cantidad)
    {
        if ($cantidad < 0) {
            throw new InvalidArgumentException("No puedes ingresar una cantidad menor a 0€");
        } else {
            $this->saldo += $cantidad;
            echo "El titular $this->titular ha ingresado $cantidad €. Saldo: {$this->saldo} € \n";
        }
    }

    function retirar($cantidad)
    {
        if ($cantidad > $this->saldo) {
            throw new RuntimeException("Saldo insuficiente");
        } elseif ($cantidad < 0) {
            throw new InvalidArgumentException("No puedes retirar una cantidad menor a 0€");
        } else {
            $this->saldo -= $cantidad;
            echo "El titular $this->titular ha retirado $cantidad €. Saldo: {$this->saldo} € \n";
        }
    }

    static function getTotalCuentas (): int{
         return self::$cuentasBancarias;
    }
}


$edurne = new CuentaBancaria("edurne", "ES 2100", 300);
$Josh = new CuentaBancaria("josh", "ES 2200", 400);



try{
    $edurne->ingresar(20);
    $edurne->ingresar(200);
    $Josh->ingresar(50);
    $Josh->retirar(2000);
} catch (RuntimeException | InvalidArgumentException $e){
    echo $e->getMessage() . "\n";
}

echo CuentaBancaria::getTotalCuentas();
