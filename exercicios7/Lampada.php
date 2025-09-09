<?php

/* 2 - Exercício
Crie uma classe chamada Lampada com os atributos:  
- cor  
- intensidade  
- ligada (booleano)  

Adicione métodos:  
- ligar()  
- desligar()  
- status() → que imprime se a lâmpada está ligada ou desligada.*/

class Lampada{
    //Atributos
    public $cor;

    public $intensidade;

    public $ligada;
    
    //Metodos
    public function __construct ($cor, $intensidade, $ligada = false){
        $this->cor = $cor;
        $this->intensidade = $intensidade;
        $this->ligada = $ligada;
    }

    public function ligar(){
        $this->ligada = true;
    }

    public function desligar(){
        $this->ligada = false;
    }

    public function status(){
        echo "A cor da lampada é $this->cor" . PHP_EOL;
        echo "A intensidade é $this->intensidade lumens" . PHP_EOL;

        //uso do operador ternário (? :) em vez de if/else torna o codigo mais compacto
        echo "Status: " . ($this->ligada ? "ligada" : "desligada") . PHP_EOL;

        /* if($this->ligada){
            echo "A lampada está ligada" . PHP_EOL;
        }else{
            echo "A lampada está desligada" . PHP_EOL;
        } */
    }
}

//Instancia a classe com valores ja que usei o "_construct()"
$lampada = new Lampada("azul", 500);


//saidas
$lampada->status();//exibe status

echo "====================" . PHP_EOL;

$lampada->ligar();
$lampada->status();//exibe status

echo "====================" . PHP_EOL;

$lampada->desligar();
$lampada->status();//exibe status

echo "====================" . PHP_EOL;