<?php
// 🔹 Simplificação de if que retorna true ou false

// Exemplo 1 – com if tradicional
function maiorQueDez($numero) {
    if ($numero > 10) {
        return true;
    } else {
        return false;
    }
}

// Exemplo 2 – versão simplificada <<<<<<<<<<<
function maiorQueDez($numero) {
    return $numero > 10;
}

// ------------------------------------------------------

// Exemplo 3 – idade para votar
function podeVotar($anoNascimento) {
    $anoAtual = date("Y");
    // retorna true se idade >= 16, false caso contrário
    return ($anoAtual - $anoNascimento) >= 16;
}

// Exemplo 4 – número par
function numeroPar($numero) {
    return $numero % 2 == 0; // true se for par, false se for ímpar
}

// Exemplo 5 – soma maior que 100
function somaMaiorQueCem($valor1, $valor2) {
    return ($valor1 + $valor2) > 100;
}

/* ✅ Observações:
- Sempre que a expressão dentro do return for uma condição que resulte em true ou false,
  não precisa usar if/else.
- Comparações podem ser: >, <, >=, <=, ==, !=
- Também pode usar operadores lógicos: && (E), || (OU), ! (NÃO)
*/