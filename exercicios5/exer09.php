<?php

/* 9 - Crie um array associativo com nomes de alunos como chaves e suas notas como valores 
(exemplo: ['Ana' => 8, 'João' => 5, 'Maria' => 9]).Em seguida, exiba o nome de 
cada aluno e informe se ele foi "Aprovado" (nota >= 7) ou "Reprovado". */

$nomes = ["Ana" => 8, "João" => 5, "Maria" => 9];

foreach($nomes as $aluno => $nota){
    echo "Aluno: $aluno" . PHP_EOL;
    echo "nota: $nota" . PHP_EOL;

    if($nota >= 7){
        echo "Resultado: Aprovado" . PHP_EOL;
    }else{
        echo "Resultado: Reprovado" . PHP_EOL;
    }

    echo "===========" . PHP_EOL;
}