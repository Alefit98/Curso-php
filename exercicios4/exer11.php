<?php

$loginUsuario = true;//Usuário esta logado? => true
$contaSuspensa = false;//conta NÃO esta suspensa => false

if($loginUsuario && !$contaSuspensa) {
    echo "Comentário publicado!";
} else {
    echo "Comentário vetado";
}