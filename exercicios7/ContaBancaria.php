<?php

/* 5 - Exercício
Crie uma classe chamada ContaBancaria com os atributos:  
- titular  
- saldo  

Adicione métodos:  
- depositar($valor)  
- sacar($valor)  
- verSaldo()*/

class ContaBancaria{

    public $titular;
    public $saldo;

    public function __construct($titular, $saldo) {
        $this->titular = $titular;
        $this->saldo = $saldo;

    }


    public function depositar($valor){//usando um valor que entrou
        $this->saldo += $valor;//saldo = ele + valor
        echo "R$ $valor depositado com sucesso." . PHP_EOL;
    }

    public function sacar($valor){    
        if ($this->saldo >= $valor) {
            $this->saldo -= $valor;//saldo = ele - valor
            echo "Saque efetuado com sucesso." . PHP_EOL;
        } else {
            echo "Não há saldo suficiente na sua conta" . PHP_EOL;
        }
    }

    public function verSaldo(){
        echo "Titular: $this->titular " . PHP_EOL;
        echo "Saldo: $this->saldo " . PHP_EOL;
    }

}



$conta = new ContaBancaria ("Alef Souza", 0);

$valorDepositado = (float) trim(readline("Valor a ser depositado: "));
$conta->depositar($valorDepositado);//funcao depositar usando $valor depositado

$conta->verSaldo();

$valorSacar = (float) trim(readline("Valor do saque: "));
$conta->sacar($valorSacar);//funcao sacar

$conta->verSaldo();
