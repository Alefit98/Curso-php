<?php

/* = atribui valor
== igual
=== identico
!= diferente
> maior que
>= maior igual que
< menor que
<= menor igual que */

$idade = readline("Informe sua idade: ");//Entrada de dados no teclado

if ($idade >= 18){
echo"Você já pode tirar a habilitação";
}else{//só vai executar se a primeira expressão for falsa 
    echo "você ainda não pode tirar a habilitacão";
}