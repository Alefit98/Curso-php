<?php

/* 7 - Utilize um laço for para exibir o seguinte padrão:
*
**
***
****
***** */

$asteriscos = ["*","**","***","****","*****"];

echo "Ultilizando laço for" . PHP_EOL;

for($i=0; $i < count($asteriscos); $i++){//count conta elementos dentro do array
    echo $asteriscos[$i] . PHP_EOL;
}

echo "ultilizando foreach" .PHP_EOL;

foreach($asteriscos as $asteriscoUnico){//foreach percorre diretamente dentro do array
    echo $asteriscoUnico . PHP_EOL;
}