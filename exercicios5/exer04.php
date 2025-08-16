<?php

function Tabuada($num){
    for($i = 1; $i <=10; $i++){
        echo"$num x $i = " . ($num * $i) .PHP_EOL;
    }
}

$num = (int)(trim(readline("Digite um numero: ")));

Tabuada($num);