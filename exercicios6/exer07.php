<?php

/* 7 - Crie uma função chamada obterMaior que aceite dois parâmetros, $a e $b.
A função deve retornar o maior entre os dois números. */

function obterMaior($a,$b){
    if($a > $b){//se a maior que b
        return $a;
    }
    return $b; //se nao, entao b é maior
}
$a = (float) readline("Digite o primeiro número: ");
$b = (float) readline("Digite o segundo número: ");

echo "O maior numero é: " . obterMaior($a,$b);