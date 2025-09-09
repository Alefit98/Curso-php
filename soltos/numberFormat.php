<?php
// 📖 O que é o number_format()
// É uma função do PHP que serve para formatar números com a quantidade de casas decimais desejadas
// e definir os separadores de decimal e milhar.

// Sintaxe:
# number_format($numero, $casasDecimais, $separadorDecimal, $separadorMilhar);

// - $numero → o valor que você quer formatar.
// - $casasDecimais → quantas casas depois da vírgula/ponto.
// - $separadorDecimal → o símbolo que vai separar a parte inteira da parte decimal.
// - $separadorMilhar → o símbolo que vai separar milhares.

// 🛠️ Exemplos práticos

// Exemplo 1 – Valor simples (formato brasileiro)
echo number_format(1234.5, 2, ',', '.');
// Saída: 1.234,50
// Duas casas decimais.
// Vírgula como separador decimal.
// Ponto como separador de milhar.
// Esse é o formato que usamos no Brasil. 🇧🇷

// Exemplo 2 – Formato americano
echo number_format(1234.5, 2, '.', ',');
// Saída: 1,234.50
// Duas casas decimais.
// Ponto como separador decimal.
// Vírgula como separador de milhar.
// Esse é o formato usado nos EUA. 🇺🇸
