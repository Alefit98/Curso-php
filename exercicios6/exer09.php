<?php

/* 9 - Exercício
Crie uma função chamada converterRealParaDolar que aceite dois parâmetros:  
- $valorEmReal  
- $cotacaoDolar  

A função deve retornar o valor convertido para dólares.  
Considere uma cotação fixa (por exemplo, 5.0) para testar.  

Imprima o resultado de forma clara, como:  
"R$100,00 equivalem a $20.00 dólares."*/

function converterRealParaDolar ($valorEmReal, $cotacaoDolar){
    return $valorEmReal / $cotacaoDolar;
}

$valorEmReal = (float) readline("Quantos Reais deseja converter?  R$");
$cotacaoDolar = 5.46;//cotacao fixa 4/9/2025

//guarda resultado em uma variavel
$valorDolar = converterRealParaDolar($valorEmReal, $cotacaoDolar);

//formatar valores com pontuacao correta
$valorEmRealFormatado = number_format($valorEmReal, 2, ",", ".");
$valorDolarFormatado = number_format($valorDolar, 2, ".", ",");

echo "R$$valorEmRealFormatado equivalem a US$$valorDolarFormatado" . PHP_EOL;