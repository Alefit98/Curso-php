<?php

$nome = readline("Informe seu nome: ");
$idade = readline("Infome sua idade: ");

if($idade < 0){//meno   r que zero ainda nao existe
echo"Você ainda nem nasceu kkk";
}else if($idade <= 12){// ate 12 crianca
    echo"$nome Você ainda é uma criança pois tem $idade anos. \n";
}else if($idade <= 17 ){// até 17 adolecente
    echo"$nome Você ainda é um adoleçente pois tem $idade anos. \n";
}else if ($idade <= 120){//Idade Maxima
    echo"$nome Você é um adulto pois já tem $idade anos. \n";
}else{//maior que 120
    echo"Idade Invalida";
}