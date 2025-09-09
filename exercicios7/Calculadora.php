<?php

/* 3 - Exercício
Crie uma classe chamada Calculadora com os atributos:  
- número1  
- número2  

Adicione métodos:  
- somar()  
- subtrair()  
- dividir()  
- multiplicar()*/

class Calculadora{

    //Atributos
    public $numero1;

    public $numero2;

    //metodos (retornando somente valores)
    public function __construct($numero1, $numero2){
        $this->numero1 = $numero1;
        $this->numero2 = $numero2;
    }

    public function somar(){
        return $this->numero1 + $this->numero2;
    }

    public function subtrair(){
       return $this->numero1 - $this->numero2;
    }

    public function multiplicar(){
        return $this->numero1 * $this->numero2; 
    }

    public function dividir(){
        if ($this->numero2 == 0){
            return null;
        } else{
            return $this->numero1 / $this->numero2;
        }
    }
}

function separador(){
    echo PHP_EOL . "====================" . PHP_EOL;
}

$calculadora = new Calculadora(5,0);



echo "Soma: " . $calculadora->somar();

separador();
echo "Subitração: " . $calculadora->subtrair();

separador();
echo "Multiplicação: " . $calculadora->multiplicar();

separador();
$divisao = $calculadora->dividir();//divisao recebe a funcao dividir
if ($divisao === null){
    echo "Impossível dividir por zero";
    }else{
        echo "Divisão: $divisao";
    }

separador();