<?php

echo "Você chegou à masmorra" . PHP_EOL;

$nivel = trim(readline("Qual é o seu nível? "));
$chave = trim(strtoupper(readline("Possui chave de pedra? ")));

if ($nivel >= 30 && ($chave === "SIM" || $chave === "S")) {
    echo "Pode passar, guerreiro";
} elseif ($nivel < 30) {
    echo "Você precisa estar pelo menos no nível 30 para entrar";
} else {
    echo "Você ainda não tem a chave de pedra";
}