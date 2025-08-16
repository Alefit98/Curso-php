<?php

$score = (int)trim(readline("Pontuação do Score (0-1000): "));
$salario = (float)trim(readline("Salário mensal: R$ "));
 
if($score > 600 || $salario >= 4000){
    echo"Crédito pré-aprovado.";
}else{
    echo"Crédito negado.";
}