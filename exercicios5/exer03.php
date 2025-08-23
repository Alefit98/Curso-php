<?php

/* 3 - Utilize um laço while para calcular e exibir a soma de todos os números 
pares de 1 a 100. */

$i=1;
$soma = 0;

while($i <= 100){//repete ate o 100
    if($i %2 == 0){//compara se é par
        $soma = $soma + $i; //soma valor com o anterior 
    }
    $i++;//incrementa numero
}

echo "A soma de todos os numeros pares de 1 a 100 é: $soma ";

//(Versão simplificada) do chat GPT para comparacao

/* $i = 2;       // começa no primeiro número par
$soma = 0;

while ($i <= 100) {
    $soma += $i; // mesma coisa que $soma = $soma + $i
    $i += 2; // vai de 2 em 2 (só pega pares)
}

echo "A soma de todos os números pares de 1 a 100 é: $soma" . PHP_EOL;
 */