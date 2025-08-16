<?php

$tipoUsuario = trim(strtolower(readline("Digite tipo de usuario: (Aluno/Professor) ")));
$permissao = false;//VAR DA PERMISSAO

if($tipoUsuario === "aluno"){//logica CASO aluno
    $resposta = trim(strtolower(readline("Aluno Possui permissão especial: (S/N) ")));
        if($resposta === "sim" || $resposta === "s"){
            $permissao = true;
        }
}
//CASO PROFESSOR VAI DIRETO
if($tipoUsuario === "professor" || $permissao){
    echo "Emprestimo de livro concedido";
}else{
    echo "Emprestimo negado";
}