<?php

function calculaNascimento($idade, $anoAtual){//declara funcao
   return $anoAtual - $idade; 
}

//entada de dados
$idade = trim(readline("Qual sua idade: "));
$anoAtual = trim(readline("Qual é o ano atual: "));

//saida / executa funcao
echo"A sua idade é " . calculaNascimento($idade, $anoAtual);