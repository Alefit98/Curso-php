<?php

/*
📌 Diferença entre os dois modos:

🔹 Modo "easy" (do enunciado):
- Usa if/elseif → só UMA condição é aplicada.
- Exemplo: se salário > 5000, já aplica 27,5% e ignora o resto.
- Serve pra treinar lógica básica.

🔹 Modo "realista" (com incentivos fiscais):
- Considera TODAS as condições possíveis.
- A pessoa pode ganhar > 5000, mas ainda assim pagar MENOS imposto
  se tiver gastos altos com saúde ou estudos.
- Aqui usamos array/lista de alíquotas e pegamos a menor (min()).

👉 Resumindo:
- Easy = escolhe apenas uma regra.
- Realista = escolhe a menor alíquota possível (incentivo).
*/

function calculaIR ($salarioAnual, $gastosMedicos, $gastosEstudos){

    $aliquotas = [];//array aliquotas possiveis

    //logica para determinar cota de imposto
    if ($salarioAnual > 5000){
        $aliquotas[] = 0.275;//atribui dentro do array 27,5%;
    }
    if($gastosMedicos >= ($salarioAnual * 0.2)){//maior que 20% do salario
        $aliquotas[] = 0.25;//25%
    }
    if($gastosEstudos >= ($salarioAnual * 0.15)){//maior que 15% do salario
        $aliquotas[] = 0.24;//24%
    }
    if (empty($aliquotas)){// se não entrou em nenhuma regra, isento
        return 0;
    }

    return min($aliquotas);//retorna menor valor no array
}
//entrada
$salarioAnual = (float) readline("Salário anual: ");
$gastosMedicos = (float) readline("Gastos com médicos anual: ");
$gastosEstudos = (float) readline("Gastos com estudos anual: ");

//inicia a funcao e var para guardar resposta
$aliquotaFinal = calculaIR($salarioAnual, $gastosMedicos, $gastosEstudos);
 
 //calculo imposto
$impostoFinal = $salarioAnual * $aliquotaFinal;

//comverte em reais
$impostoFinalConvertido = number_format($impostoFinal, 2, ",", ".");

//saida
if($aliquotaFinal > 0){
    echo "O sua aliquota é de " . ($aliquotaFinal * 100) . "% " . PHP_EOL;
    echo "O imposto total é de R$ " . $impostoFinalConvertido . PHP_EOL;
}else{
    echo "Você está isento de imposto" . PHP_EOL;
}