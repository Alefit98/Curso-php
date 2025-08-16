<?php

$cep = trim(readline("Digite o cep: "));
$peso = (float)trim(readline("Digite o peso do produto: "));

// Pega apenas o primeiro dígito
$primeiroDigito = substr($cep, 0, 1); // substr(string, inicio, comprimento)

// Valida o cupom
if ($primeiroDigito === "0" && $peso < 5) {
    echo "Frete grátis válido!" . PHP_EOL;
} else {
    echo "Frete grátis inválido." . PHP_EOL;
}