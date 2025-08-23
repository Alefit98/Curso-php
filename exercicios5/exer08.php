<?php

/* 8 - Crie um array com os nomes de todos os meses do ano. Exiba cada mês do
ano. */

$meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];

/* for ($i = 0; $i < count($meses); $i++){//utilizando FOR
    echo $meses[$i] . PHP_EOL;
} */

foreach($meses as $mesUnico){//Utilizando FOREACH
    echo $mesUnico . PHP_EOL;
}