<?php

$noite = true;//aqui vou controlar se é dia ou noite
$dia = !$noite; //dia é contrario de noite
$temp = (float)(trim(readline("Qual a temperatura? ")));

if($temp > 27 && $dia){
    echo"O ar-condicionado está ligado";
}else{
    echo"O ar-condicionado está desligado";
}