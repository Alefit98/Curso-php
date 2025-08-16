<?php

$idade = trim(readline("digite sua idade: "));
$peso = trim(readline("digite seu peso: "));

if(($idade >=18 && $idade <=69) && $peso >= 50){
    echo"Pessoa está APTA a doar sangue";
}else{
    echo"Pessoa está INAPTA a doar sangue";
}