<?php

$idade = trim(readline("Digite sua  idade: "));

if($idade >=1 && $idade <8){
    echo"Categoria Infantil I";
}else if($idade >=8 && $idade <13){
    echo"Categoria Infantil II";
}else if($idade >=13 && $idade <16){
    echo"Categoria Adolecente";
}else if($idade >=16 && $idade <18){
    echo"Categoria Juvenil";
}else if($idade >=18 && $idade <60){
    echo"Categoria Adulto";
}else if($idade >60){
    echo"Categoria Terceira idade";
}