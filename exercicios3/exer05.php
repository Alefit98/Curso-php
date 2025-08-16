<?php

$idade = trim(readline("Digite a sua idade: "));//trim remove esppacos
$ingresso = strtolower(trim(readline("Tem ingresso? ")));//strtolower converte em minusculo

if ($idade >= 18 && $ingresso == "sim"){
    echo("Entrada permitida");
}else{      
    echo("Entrada negada");
    }