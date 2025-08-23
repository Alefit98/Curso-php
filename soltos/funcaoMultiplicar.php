<?php

function Multiplicar($num1,$num2,$num3){
    $resposta = $num1 * $num2 * $num3;
    echo"A resposta da multiplicação é $resposta";
}

$num1 = readline("Digite o primeiro número: ");
$num2 = readline("Digite o segundo número: ");
$num3 = readline("Digite o terceiro número: ");

Multiplicar($num1,$num2,$num3);