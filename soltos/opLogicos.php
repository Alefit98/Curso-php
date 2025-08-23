<?php

$nota1 = readline("Entre com a nota 1: ");
$nota2 = readline("Entre com a nota 2: ");
$nota3 = readline("Entre com a nota 3: ");
$frequencia = readline("Qual foi a frequencia 0% à 100%: ");

$media = ($nota1+$nota2+$nota3)/3;

if($media >= 7 && $frequencia >= 75){
    echo"Aluno aprovado, media: $media, Frequencia: $frequencia % ";
}else{
    echo"Aluno Reprovado, media: $media, Frequencia: $frequencia % ";
}