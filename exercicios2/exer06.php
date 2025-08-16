<?php

$pontosTimeA = (int) readline("Pontuação Time A: ");
$pontosTimeB = (int) readline("Pontuação Time B: ");
 
if($pontosTimeA != $pontosTimeB){
    echo("O jogo não está empatado");
}else{
    echo("jogo empatado");
}