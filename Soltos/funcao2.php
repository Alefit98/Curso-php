<?php

function BoasVindas(){//declara funcao
    $nome = (readline("informe seu nome: "));
    $idade = (readline("Qual a sua idade? "));
    $cidade = (readline("Qual sua cidade? "));
    
    echo"Seja bem vindo(a) $nome, de $idade anos e mora na cidade de $cidade!";
}

BoasVindas();//chamada da funcao