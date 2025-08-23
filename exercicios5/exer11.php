<?php

/* 11 – Crie um array com 10 números inteiros e uma variável para solicitar um
número ao usuário, caso o número solicitado esteja contido dentro dos
números do array, pare o laço de repetição. */

$numeros = [01,12,23,34,45,56,67,78,89,90];


while(true){

$numCerto = false;// variavel de controle 

$numDigitado = (int) readline("Digite um número: ");

    foreach($numeros as $numUnico){//percorre o array 1 numero por vez
        if($numDigitado === $numUnico){//compara com o numero digitado
            echo "Acertou o numero secreto" . PHP_EOL;
            $numCerto = true; // se sim, marca como encontrado
            break; // não precisa continuar o foreach
        }
    }
    if($numCerto){//caso numCerto for true
        break; // sai do while
    }else{
        echo "Tente novamente..." . PHP_EOL;//continua dentro do while
    } 
}