<?php

// 1 - Exiba uma contagem de 10 a 1.

//exercicio feito com While
$i = 10;

while ($i > 0){
    echo $i .PHP_EOL;
    $i--;
}
echo"=======================" . PHP_EOL;// quebra de linha

//exercicio feito com for
for($i=10; $i > 0 ;$i--){
    echo $i . PHP_EOL;
}