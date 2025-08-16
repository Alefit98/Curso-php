<?php

$num = trim(readline("digite um numero: "));

if(($num % 2) == 0){// Verifica resto da divisão por 2 é igual a zero
    echo("$num é par");
    }else{
    echo("$num é impar");
    }