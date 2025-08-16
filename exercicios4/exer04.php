<?php

$idade = (int) trim(readline("Digite sua idade: "));
$cnh = (int) trim(readline("Tempo de CNH (em anos): "));

if($idade >= 25 && $cnh >= 3){
    echo"Aluguel permitido";
}elseif($idade < 25){
    echo"Aluguel negado. Idade mínima: 25 anos";
}else{
    echo"Aluguel negado. Tempo mínimo de CNH: 3 anos";
}