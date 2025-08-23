<?php

/* 7 - Utilize um laço para exibir o seguinte padrão:
*
**
***
****
***** */

// Array com os níveis de asteriscos
$asteriscos = ["*", "**", "***", "****", "*****"];

// ---------------- USANDO FOR ----------------
echo "Utilizando laço for" . PHP_EOL;

// Loop for percorre cada índice do array
for ($i = 0; $i < count($asteriscos); $i++) { 
    // count($asteriscos) retorna o número de elementos no array (5)
    echo $asteriscos[$i] . PHP_EOL; // Imprime o elemento atual do array
}

echo PHP_EOL; // Quebra de linha para separar os exemplos

// ---------------- USANDO FOREACH ----------------
echo "Utilizando foreach" . PHP_EOL;

// Foreach percorre diretamente cada elemento do array
foreach ($asteriscos as $asteriscoUnico) {
    // $asteriscoUnico recebe o valor de cada elemento do array
    echo $asteriscoUnico . PHP_EOL; // Imprime o valor atual
}
