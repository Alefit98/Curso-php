<?php

$ladoA = trim(readline("digite o valor A: "));
$ladoB = trim(readline("digite o valor B: "));
$ladoC = trim(readline("digite o valor C: "));

//verifica se a sooma de dois lados é maior que 
if(($ladoA + $ladoB > $ladoC) && ($ladoA + $ladoC > $ladoB) && ($ladoB + $ladoC > $ladoA)){
    echo"É possivel criar um triângulo ";
}else{
    echo"NÃO é possivel criar um triângulo ";
}