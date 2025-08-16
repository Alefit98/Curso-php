<?php

$usuario = "alef";
$senha = "1234";

$usuarioInformado = readline("Digite usuário: ");
$senhaInformada = readline("Digite a senha: ");

if(($usuario === $usuarioInformado) &&($senha === $senhaInformada)){
    echo"acesso permitido";
}else{
    echo"acesso negado";
}