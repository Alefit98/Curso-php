<?php

class Pessoa
{
    public $nome;
    public $idade;
    public $rg;
    public $telefone;
    private $salario;
    
        public function defineValores($nome, $idade, $rg, $telefone,$salario){
            $this->nome = $nome;
            $this->idade = $idade;
            $this->rg = $rg;
            $this->telefone = $telefone;
            $this->salario = $salario; 
        }

        public function exibirValores(){
            echo "Seu nome é: $this->nome " . PHP_EOL;
            echo "Sua idade é: $this->idade " . PHP_EOL;
            echo "Seu Rg é: $this->rg " . PHP_EOL;
            echo "Seu telefone é: $this->telefone " . PHP_EOL;
            echo "Seu salário sem bonus é: $this->salario " .PHP_EOL;
        }

        public function exibirSalarioBonus(){
            $resultado = $this->salario + ($this->salario * 0.05);
            echo "O valor do salario com bonus é $resultado reais" . PHP_EOL;
        }

        public function exibePlanoSaude(){
            $planoSaude = $this->salario - ($this->salario * 0.07);
            echo "O desconto do plano de saude é R$" . ($this->salario - $planoSaude) . PHP_EOL; 
        }

}

$pessoa = new Pessoa();

$pessoa->defineValores("Alef", 26, "99.999...", "(18)99174-0388", 1500);

$pessoa->exibirValores();

$pessoa->exibirSalarioBonus();

$pessoa->exibePlanoSaude();