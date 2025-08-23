<?php

/* 4 – Use um uma estrutura while para criar um jogo simples, que irá repetir
pergunta adivinhe o número, quando a pessoa adivinhar o número o programa
deverá parar a execução. */

 $num= (int) trim(readline("adivinhe o número: "));

while($num != 25){
    $num= (int) trim(readline("adivinhe o número: "));
}
echo "Você venceu!!";