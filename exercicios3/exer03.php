<?php

$num1 = trim(readline("Digite o primeiro numero: "));//trim remove os espacos da entrada
$num2 = trim(readline("Digite o segundo numero: "));

if($num1 > $num2){
    echo("$num1 é o maior");
}else if($num2 > $num1){
    echo("$num2 é o maior");
}else{
    echo("$num1 e $num2 são iguais");
}