<?php

$senha = (readline("Digite a senha: "));
$senhaCorreta = "1234";

while($senha != $senhaCorreta){
    echo"Senha errada..." .PHP_EOL;
    $senha = (readline("Digite a senha novamente: "));
}
echo"Login efetuado";
