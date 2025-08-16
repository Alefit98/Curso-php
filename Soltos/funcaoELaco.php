<?php

function SomaUm($num){
    return $num++;
}
for($i=0; $i<=10; $i++){
    echo SomaUm($i);
}