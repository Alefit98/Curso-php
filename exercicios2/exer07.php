<?php

// Lê o código do cupom digitado pelo usuário
$cupom = readline("Digite o código do cupom de desconto: ");

// Verifica se o cupom digitado é exatamente "PROMO10"
if ($cupom === "PROMO10") {
    echo "Cupom de desconto aceito.";
} else {
    echo "Código do cupom inválido.";
}