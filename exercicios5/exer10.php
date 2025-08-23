<?php

/* 10 - Use um laço while para exibir os números ímpares de 1 a 50, pule o
números pares. */

$i = 1;

echo "Numeros impares de 1 à 50: ";

while($i < 50){
    if($i %2 != 0){
        echo "$i, ";
    }
    $i++;//incremento fora do if
}