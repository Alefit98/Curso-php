<?php

echo("Responder as questões com (S) para sim e (N) para não! \n");

//recebe as entradas
$atendimento = readline("seu atendimento foi bom? ");
$qualidade = readline("A qualidade do produto atendeu as expectativas? ");

//converte as entradas para minusculo
$atendimento = strtolower(trim($atendimento));//trim retira espacos da string
$qualidade = strtolower(trim($qualidade));

//logica compara as 2 variaveis
if($atendimento == "s" && $qualidade == "s"){
    echo("Ótimo");//caso 2 true
}else if($atendimento == "s" || $qualidade == "s"){
    echo("Bom");//caso 1 true
}else{
    echo("Péssimo");//2 false
}