<?php

function ParOuImpar($num){
    if($num %2 == 0){
        echo "Par" . PHP_EOL;
    }else{
        echo "Impar" . PHP_EOL;
    }
}

for($i=0; $i <=10; $i++){
    echo "$i é ";
    ParOuImpar($i);//Chama funcao dentro do for
}