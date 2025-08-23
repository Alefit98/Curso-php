<?php

$quantidade = (int) (trim(readline("Quantas vezes: 1 - 10 ")));

$i = 1;

while($i <= $quantidade){
    echo"Bem vindo! $i" .PHP_EOL;
    $i++;
    if($i >10){
        break;
    }
}