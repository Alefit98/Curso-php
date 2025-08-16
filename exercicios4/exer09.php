<?php

$quantEstoque = 15;//estoque inicial
$descontinuado = false;//se NAO continua no "catalogo" => true

echo "Quantidade Estoque $quantEstoque" .PHP_EOL;
$quantVendida = (int)(trim(readline("Qant. produtos vendidos: ".PHP_EOL)));

$quantEstoque = $quantEstoque - $quantVendida;

if($quantEstoque < 10 && !$descontinuado){
    echo "Resta(m) apenas $quantEstoque unidade(s) deste produto no estoque";
} else {
    echo "Ok.Alterações processadas";
}