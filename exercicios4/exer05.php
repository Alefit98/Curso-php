<?php

$formacao = trim(strtolower(readline("O candidato possui alguma formacao em Ciência da Computação ou areas correlatas? (S/N) ")));
$experiencia = (int) trim(readline("O candidato possui alguma Experiencia comprovada na área: (em anos) "));

if($formacao === "s" || $formacao === "sim" || $experiencia >= 4){
    echo"Está apto para entrevista";
}else{
echo"Está inapto para entrevista";
}