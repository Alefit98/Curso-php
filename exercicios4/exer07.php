<?php

$velocidadeVento = (float)trim(readline("Qual é a velocidade do vento? (em km/h) "));
$precipitacao = (float)trim(readline("Qual a precipitação? (em mm³) "));

if ($velocidadeVento > 60 && $precipitacao > 20){
    echo "Alerta laranja";
}else{
    echo "Sem alertas";
}