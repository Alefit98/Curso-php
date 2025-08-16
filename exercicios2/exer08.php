<?php

// Lê a entrada do usuário pelo terminal e armazena na variável $valorInput
$valorInput = readline("Digite seu nome aqui: ");

// Remove espaços em branco do início e fim da string e verifica se está vazia
if (trim($valorInput) === '') {
    // Se o usuário apenas apertou ENTER ou digitou só espaços
    echo "Este campo não pode ficar em branco";
} else {
    // Se o usuário digitou algo válido (qualquer caractere diferente de espaço)
    echo "OK";
}