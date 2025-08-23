<?php

class Controle
{//escorpo

//declaração de atributos, sempre no começo da classe

public $altura;//propriedades ou atributos

public $largura;

private $valor;

    public function defineValores($altura,$largura,$valor)//Metodo
    {//define valores aos atributos
        $this->valor = $valor;
        $this->altura = $altura;
        $this->largura = $largura;
    }

    public function exibirValores()
    {
        echo "A altura é: $this->altura, e a largura é: $this->largura e o valor é: $this->valor";
    }
}

$controle = new Controle();//Instancia a classe
$controle-> defineValores(170,25,150);
$controle->exibirValores();