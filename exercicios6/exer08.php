<?php

/* 8 - Exercício
Crie uma função chamada calcularAreaQuadrado que aceite um parâmetro $lado.  
A função deve retornar a área do quadrado (lado * lado).  

Chame a função, guarde o resultado e imprima uma mensagem como:  
"A área de um quadrado de lado 5 é 25." */

function calcularAreaQuadrado($lado){
    return $lado * $lado;
}

$lado = (float) readline("Digite o valor do lado do quadrado: ");

$resultado = calcularAreaQuadrado($lado);

echo "A área de um quadrado de lado $lado é $resultado." . PHP_EOL;