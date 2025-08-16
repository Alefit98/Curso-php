<?php 

$temperaturaMotor = readline("Digite temperatura atual do motor ");

if($temperaturaMotor >= 90){
    echo("Alerta: Temperatura elevada!.");
}else{
    echo("Temperatura de trabalho estavel...");
}