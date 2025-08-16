<?php

$dia = trim(readline("Insira um número 1 - 7: "));

if($dia == "1"){
    echo"Domingo";
}else if($dia == "2"){
    echo"Segunda-feira";
}else if($dia == "3"){
    echo"Terça-feira";
}else if($dia == "4"){
    echo"Quarta-feira";
}else if($dia == "5"){
    echo"Quinta-feira";
}else if($dia == "6"){
    echo"Sexta-feira";
}else if($dia == "7"){
    echo"Sábado";
}else{
    echo"Digite um número válido";
}