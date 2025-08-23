<?php

function ParOuImpar($num){
    if($num % 2 == 0){
        echo"$num é par";
    }else{
        echo"$num é impar";
    }
}

$num = (int) trim(readline("Digite um número: "));
ParOuImpar($num);