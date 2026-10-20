<?php
include Exception;

class CuentaBancaria extends Exception{
    private string $titular;
    private string $iban;
    private float $saldo = 0;

function __construct(string $titular, String $iban, float $saldo = 0){
    $this->titular = $titular;
    $this->iban = $iban;
    $this->saldo = $saldo;
}

function ingresar($cantidad){
    try($cantidad>0){
        $this->saldo += $cantidad;
    }catch(InvalidArgumentException $e){
        echo("Numero negativo");

    }
    
}

function retirar($cantidad){
    $this->saldo -= $cantidad;
}




}