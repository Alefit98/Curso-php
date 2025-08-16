<?php

$tipoCliente = strtolower(trim(readline("Tipo de cliente: ")));
$temConvite = strtolower(trim(readline("Tem convite? ")));

//logica do convite
if($temConvite == "sim" || $temConvite == "s"){
    $temConvite = true;
}else $temConvite =false;

//logica saida
if(($tipoCliente == "premium")||($temConvite == true)){
    echo"Entrada permitida";
}else{
    echo"Entrada negada";
}