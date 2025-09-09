<?php

/* Desafio
Crie uma função para cálculo de imposto de renda.  
A função deve receber como parâmetros:  
- Valor total do salário anual  
- Valor de gastos médicos  
- Valor de gastos com estudos  

Regras:  
- Caso a pessoa ganhe mais de 5.000,00 → calcular 27,5% de imposto.  
- Se tiver gastos de 20% do total com médico → calcular 25%.  
- Se tiver gastos de 15% com estudos → calcular 24%.  

Imprima as informações na tela.*/

//parâmetro por referência (&$aliquota) -> retorna a var isolada alem do return.
function calculaIR ($salarioAnual, $gastosMedicos, $gastosEstudos, &$aliquota){
    if ($salarioAnual > 5000){
        $aliquota = 0.275;//27,5%;
    }elseif($gastosMedicos >= ($salarioAnual * 0.2)){//maior que 20% do salario
        $aliquota = 0.25;//25%
    }elseif($gastosEstudos >= ($salarioAnual * 0.15)){//maior que 15% do salario
        $aliquota = 0.24;
    }

    return $salarioAnual * $aliquota;
}

$salarioAnual = (float) readline("Salário anual: ");
$gastosMedicos = (float) readline("Gastos com médicos anual: ");
$gastosEstudos = (float) readline("Gastos com estudos anual: ");

$aliquota = 0;//inicia a var aliquota

//recebe o valor do imposto
$totalImposto = calculaIR ($salarioAnual, $gastosMedicos, $gastosEstudos, $aliquota);

//formata para valores em real
$totalImpostoFormatado = number_format($totalImposto, 2, ",", ".");

//saidas
if ($aliquota > 0) {
    echo "Alíquota aplicada: " . ($aliquota * 100) . "%" . PHP_EOL;
    echo "Imposto total é: R$ $totalImpostoFormatado" . PHP_EOL;
} else {
    echo "Você está isento de imposto." . PHP_EOL;
}