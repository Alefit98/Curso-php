<?php

$nomeUsuario = readline("Entre com o nome de usuario: ");

if($nomeUsuario != "convidado"){
    echo("nome de usuário é válido.");
}else{
    echo("nome de usuario invalido, tente um nome diferente.");
}