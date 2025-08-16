<?php

$numPessoas = readline("Quantidade de pessoas no elevador: ");

if($numPessoas <= 8 ){
echo("Elevador liberado.");
}else{
    echo("Carga máxima do elevador exedida!!");
}