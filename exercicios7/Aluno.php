<?php

/* 4 - Exercício
Crie uma classe chamada Aluno com os atributos:  
- nome  
- série  
- nota1  
- nota2  
- nota3  

Adicione um método calculaMedia() que retorna a média do aluno
e informa se ele passou (média ≥ 7) ou se foi reprovado (média < 7).*/

class Aluno {

    public $nome;
    public $serie;
    public $nota1;
    public $nota2;
    public $nota3;

    public function __construct ($nome, $serie, $nota1, $nota2, $nota3){
        $this->nome = $nome;
        $this->serie = $serie;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->nota3 = $nota3;  

    }
    
    public function calculaMedia(){
        return (($this->nota1 + $this->nota2 + $this->nota3)/3);

    }

    public function exibirResultado(){
        $media = $this->calculaMedia();

        echo "Aluno: $this->nome " . PHP_EOL;
        echo "Série: $this->serie ° Ano" . PHP_EOL;
        echo "Notas: $this->nota1 / $this->nota2 / $this->nota3" . PHP_EOL;
        echo "========== Resultado final ==========" . PHP_EOL;
        $mediaFormatada = number_format($media, 2, ",", ".");

        if ($media >= 7){
            echo "Aprovado, média final: $mediaFormatada" . PHP_EOL;
        }else{
        echo "Reprovado, média final: $mediaFormatada" . PHP_EOL;
        }
    }
}

$aluno = new Aluno ("Alef Souza", 8, 10, 4, 8);

$aluno->exibirResultado();


