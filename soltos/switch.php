<?php

$dia = trim(readline("Insira um número 1 - 7: "));

switch($dia){
    case"1":
        echo"Domingo";
        break;
    case"2":
        echo"Segunda";
        break;
    case"3":
        echo"Terça";
        break;
    case"4":
        echo"Quarta";
        break;
    case"5":
        echo"Quinta";
        break;
    case"2":
        echo"Sexta";
        break;            
    case"2":
        echo"Sábado";
        break;            
    default:
        echo"Digite um dia valido";
        break;
    }            