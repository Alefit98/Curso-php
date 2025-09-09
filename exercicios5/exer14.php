<?php

/* 14 - Crie um array de nomes. Use um laço de repetição e uma estrutura if para percorrer o array.
 Se o nome "Carlos" for encontrado, exiba a mensagem "Carlos está na lista!" e
 interrompa o laço com o comando break. */

$nomes = ["Alef","Adrielly","Rafaella","Carlos","João","Felipe","Mirela"];

echo "=== Utilizando FOR===" . PHP_EOL;

for($i=0; $i<count($nomes);$i++){//percorre a lista
    if($nomes[$i] === "Carlos"){//se carlos estiver presente entao
        echo "Carlos está na lista!" . PHP_EOL;
        break;//finaliza laço
    }
}

echo "=== Utilizando FOREACH===" . PHP_EOL;

foreach($nomes as $nomeUnico){
    if($nomeUnico === "Carlos"){//se carlos estiver presente entao
        echo "Carlos está na lista!" . PHP_EOL;
        break;//finaliza laço
    }
}

echo "=== Utilizando WHILE===" . PHP_EOL;

$i = 0;//reinicia  variavel $i
while($i < count($nomes)){
    if($nomes[$i] === "Carlos"){//se carlos estiver presente entao
        echo "Carlos está na lista!" . PHP_EOL;
        break;//finaliza laço
    }
    $i++;//incremento
}
