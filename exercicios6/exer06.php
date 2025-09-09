<?php
/* Exercício 6
Crie uma função chamada somar que aceite dois parâmetros, $num1 e $num2.
A função deve retornar a soma dos dois números.

Fora da função:
- Chame-a e armazene o resultado em uma variável.
- Depois, imprima essa variável.
*/

function somar($num1, $num2) {
    return $num1 + $num2;//retorna calculo
}
$num1 = (float) readline("Digite o primeiro número: ");
$num2 = (float) readline("Digite o segundo número: ");

$resultado = somar($num1, $num2);//variavel para guardar resultado da funcao somar

echo "A soma dos dois números é: $resultado" . PHP_EOL;
echo "===== Ctrl + C para sair =====" . PHP_EOL;