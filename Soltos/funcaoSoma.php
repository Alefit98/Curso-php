<?php

function Soma(){
    $num1 = readline("Digite o primeiro número: ");
    $num2 = readline("Digite o segundo número: ");
    $resultado = $num1 + $num2;
    echo"A soma de $num1 e $num2 é $resultado.";
}

Soma();