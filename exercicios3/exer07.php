<?php

//entrada Dados
$diaTrabalhados = trim(readline("Quantidade de dias trabalhados: "));
$salarioBruto = trim(readline("Salário Bruto: "));

// define 3 var com o mesmo valor
$planoSaude = $ticket = $bonus = $salarioBruto * 0.05; //5 % do salário bruto

//INSS (10% do salário bruto)
$inss = $salarioBruto * 0.10;

// Se trabalhou menos de 30 dias, SEM BONUS
if ($diaTrabalhados < 30) {
    $bonus = 0;
}
//Calculos 
$totalDesconto = $planoSaude + $ticket + $inss;//soma dos descontos

$salarioLiquido = $salarioBruto - $totalDesconto + $bonus;//soma liquido + bonus

//Saidaas
echo ("Seu Salário Bruto é: R$ $salarioBruto\n");
echo("Bônus de assiduidade: R$ $bonus\n");
echo("Descontos:\n");
echo ("  INSS: R$ $inss\n");
echo ("  Plano de Saúde: R$ $planoSaude\n");
echo ("  Ticket alimentação: R$ $ticket\n");
echo("Total de descontos: R$ $totalDesconto\n");
echo("Seu Salário Líquido é: R$ $salarioLiquido\n");