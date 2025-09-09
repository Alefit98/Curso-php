<?php
//resumo do exercicio pelo chat GPT.

/* 14 - Crie um array de nomes. Use um laço de repetição e uma estrutura if para percorrer o array.
 Se o nome "Carlos" for encontrado, exiba a mensagem "Carlos está na lista!" e
 interrompa o laço com o comando break. */

$nomes = ["Alef","Adrielly","Rafaella","Carlos","João","Felipe","Mirela"];


// === Utilizando FOR ===
echo "=== Utilizando FOR ===" . PHP_EOL;

$total = count($nomes); // evita recalcular o tamanho do array a cada iteração
for ($i = 0; $i < $total; $i++) {
    if ($nomes[$i] === "Carlos") { // compara se o nome é exatamente "Carlos"
        echo "Carlos está na lista!" . PHP_EOL;
        break; // sai do laço ao encontrar
    }
}


// === Utilizando FOREACH ===
echo "=== Utilizando FOREACH ===" . PHP_EOL;

foreach ($nomes as $nomeUnico) {
    if ($nomeUnico === "Carlos") {
        echo "Carlos está na lista!" . PHP_EOL;
        break; // sai do laço
    }
}


// === Utilizando WHILE ===
echo "=== Utilizando WHILE ===" . PHP_EOL;

$i = 0;
while ($i < $total) {
    if ($nomes[$i] === "Carlos") {
        echo "Carlos está na lista!" . PHP_EOL;
        break;
    }
    $i++; // incrementa o índice
}


// === Utilizando função pronta (extra) ===
echo "=== Utilizando in_array() ===" . PHP_EOL;

if (in_array("Carlos", $nomes)) {
    echo "Carlos está na lista!" . PHP_EOL;
}
