<?php

function parOuImpar($num){//funcao comeca com minusculo
    if($num % 2 == 0){
        echo"$num é par";
    }else{
        echo"$num é impar";
    }   
    echo PHP_EOL;
}
while(true){
$num = (int) trim(readline("Digite um número: "));//entra com dados
parOuImpar($num);//chama função
echo "====== ctrl+c p/ sair ======" .PHP_EOL;
}