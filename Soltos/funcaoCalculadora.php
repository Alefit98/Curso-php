<?php

function Tabuada($num){
    for($i = 1; $i <=10; $i++){
        echo"número $num x $i = " . ($num * $i) .PHP_EOL;
    }
}
Tabuada(7);