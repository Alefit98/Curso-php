<?php

/* 1 - Exercício
Crie uma classe chamada Moto com os seguintes atributos:  
- marca  
- modelo  
- ano  

Adicione um método chamado exibirInformacoes() que imprime os dados do carro.*/

class Moto{
    //Atributos => Dentro de moto
    public $marca;

    public $modelo;

    public $ano;

    //Metodos => define valores aos atributos
    public function defineValores($marca, $modelo, $ano){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    public function exibirInformacoes(){
        echo "A marca é: $this->marca" . PHP_EOL;
        echo "O modelo é: $this->modelo" . PHP_EOL;
        echo "O ano é: $this->ano" . PHP_EOL;
    }
}

$moto = new Moto();//Instancia a classe

$moto-> defineValores("Honda ", "CB500", 2023);

$moto->exibirInformacoes();