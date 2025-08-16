<?php

$dia = trim(readline("Insira um número 1 - 7: "));

if($dia == "1" || $dia == "7"){
    echo"Final de Semana";
}else{
    echo"Dia útil";
}