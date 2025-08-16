<?php

$nota1 = (float)(trim(readline("Entre com a nota 1: ")));
$nota2 = (float)(trim(readline("Entre com a nota 2: ")));
$nota3 = (float)(trim(readline("Entre com a nota 3: ")));
$faltas = (int)(trim(readline("Quantidade de faltas: ")));

$media = ($nota1+$nota2+$nota3)/3;

if($media >= 8.0 && $faltas < 15){
    echo"Aluno aprovado para bolsa de estudos.". PHP_EOL;
}else{
    echo"Aluno reprovado para bolsa de estudos.". PHP_EOL;
}

echo"Media: $media, Faltas: $faltas";//exibe media e faltas após resultado