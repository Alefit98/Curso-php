<?php

function Somar($num1, $num2){//declara funcao
    $resultado = $num1 + $num2;
    echo"A soma de $num1 e $num2 é $resultado.";
}
//usuario entra com valores
$num1 = readline("Digite o primeiro número: ");
$num2 = readline("Digite o segundo número: ");

Somar($num1,$num2);//executa funcao