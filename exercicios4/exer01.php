<?php

$compra = (int)trim(readline("Valor total da compra: R$"));
$cliente = strtolower(trim(readline("É um cliente premium: ")));

if($compra > 250 && ($cliente == "s" || $cliente == "sim")){
    echo"Você conseguiu um desconto especial";
}else{
    echo"você não tem direito ao desconto especical";
}