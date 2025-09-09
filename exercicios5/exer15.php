<?php

/* 15 - Exercício
Crie um array de números de 1 a 10.
Use um laço para percorrer o array.

- Se o número for par, pule a iteração atual (usando o comando `continue`) e não o exiba.
- Exiba apenas os números ímpares. */

$numeros = [1,2,3,4,5,6,7,8,9,10];

foreach($numeros as $numeroUnico){
    if($numeroUnico %2 == 0){
        continue;//continua iteracao sem fazer nada
    }else{
        echo $numeroUnico . ", ";//mostra numero impar 
    }
}