<?php

$idade = trim(readline("Digite a sua idade: "));

if($idade < 12 || $idade > 60){
    echo("Entrada liberada.");
}else{
echo("Entrada Negada.");
    }