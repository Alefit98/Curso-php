<?php

function ParOuImpar($num){
    if($num %2 == 0){
        echo "Par" . PHP_EOL;
    }else{
        echo "Impar" . PHP_EOL;
    }
}

$num = readline("Digite um numero: ");//Entrada dados

ParOuImpar($num);//Chama funcao