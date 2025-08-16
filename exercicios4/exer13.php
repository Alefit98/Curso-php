<?php

$produto = "Tenis Mizuno";
$quantidade = 4;//quant restante
$desconto = 30;//porcentagem de desconto

if($desconto >= 40 || $quantidade < 5){
    echo"Oferta Relâmpago, $produto com $desconto % de desconto" .PHP_EOL;
    echo"Restam apenas $quantidade unidades";
}else{
    echo"O $produto não está na promoção"; 
}