<?php

// 12 – Calcule o dobro dos primeiros 10 números ímpares de 1 a 100.

$i = 1;// número inicial
$soma = 0;// soma total
$cont = 0;// contador de números ímpares

while($cont < 10){// repete até pegar os 10 primeiros ímpares
    if($i %2 != 0){//verificar se é impar
        $soma = $soma + $i; //soma o  numero ao resultado
        $cont++;// incrementa contador
    }
    $i++;//incrementa o numero fora do if para incrementar em qualquer caso
}

echo "A soma do dobro dos 10 primeiros numeros *impares* de 1 a 100 é: " . ($soma * 2);