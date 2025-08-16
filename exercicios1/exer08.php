<?php

$imovel = 50000;
$imposto = $imovel * 0.05; // 5por cento
$parcela = ($imovel + $imposto) / 10;

echo "O valor do imóvel é R$$imovel e o valor da parcela é R$$parcela";