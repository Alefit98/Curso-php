<?php

/* 6 - Use um laço do-while para simular uma tela de login. O laço deve pedir uma
senha até que a senha "12345" seja inserida. */

$senhaDigitada = trim(readline("Digite a senha: "));
$senha = "12345";

while ($senhaDigitada != $senha){
    $senhaDigitada = trim(readline("Digite a senha: "));
}
echo "login Aceito". PHP_EOL;