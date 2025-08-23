<?php

// 2 - Crie um script exiba a tabuada do 7 (de 7x1 a 7x10).

echo"=====WHILE=====" . PHP_EOL;

$i=1;

while($i <= 10){
    echo"7 x $i = " . (7 * $i) .PHP_EOL;
    $i++;
}

echo PHP_EOL;//quebra linha
echo"=====For=====" .PHP_EOL;

for($i=1; $i<=10; $i++){
    echo"7 x $i = " . (7 * $i) .PHP_EOL;    
}