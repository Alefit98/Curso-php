<?php

$conta = true;//Conta está ativa?
$login = 60;//Ultimo login a quantos dias

if(!$conta || $login > 90){
    echo "Usuário bloqueado";
} else {
    echo "Pode entrar";
}