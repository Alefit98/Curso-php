<?php

/* 13 - Crie um array com nomes e outro com endereços correspondentes, exiba
o nome da pessoa e o endereço correspondente. */

$nomes = ["Alef","Adrielly","Rafaella"];
$endereco = ["Tokuji Tokunaga", "José Rogério", "Manoel Lopes Olmo"];

for($i=0; $i < count($nomes);$i++){
    echo $nomes[$i] . " mora em: " . $endereco[$i] . PHP_EOL;
}