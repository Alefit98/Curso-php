<?php

/* 10 - Exercício
Crie uma função chamada podeVotar que aceite um parâmetro $anoNascimento.  
A função deve retornar um valor booleano (true ou false).  
Será true se a pessoa tiver 16 anos ou mais, e false caso contrário.  

Dica: Você pode obter o ano atual com date('Y'). A idade será: ano atual - ano de nascimento.  

Após chamar a função, use uma estrutura if para imprimir
 "Pode votar" ou "Não pode votar" com base no retorno da função.*/

 function podeVotar($anoNascimento){
    $anoAtual = date("Y");// recebe o ano atual com a funcao date
    return $anoAtual - $anoNascimento >= 16;//se for >= 16 retorna true , < 16 retorna false
 }

 $anoNascimento = (int) readline("Digite o ano do seu nascimento: ");

  if (podeVotar($anoNascimento)){//se verdade
    echo "Pode votar." . PHP_EOL;
    }else{//se falso
    echo "Não pode votar." . PHP_EOL;
    }