<?php

function CalculaIdade(){
    $anoNascimento = readline("Qual seu ano de nascimento: ");
    $anoAtual = 2025;
    echo"A sua idade é " .($anoAtual - $anoNascimento);
}
CalculaIdade();