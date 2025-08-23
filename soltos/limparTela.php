<?php
// ==========================================================
// EXEMPLO 1 - Usando system()
// ==========================================================
// Esse método chama o comando do sistema operacional para
// limpar a tela do terminal.
// - No Windows, o comando é "cls"
// - No Linux / macOS, o comando é "clear"
// Você pode detectar o sistema operacional com PHP_OS_FAMILY e usar o comando certo:

if (PHP_OS_FAMILY === "Windows") {
    system("cls");
} else {
    system("clear");
}


// ==========================================================
// EXEMPLO 2 - Usando sequência ANSI
// ==========================================================
// Esse método usa caracteres de escape ANSI para "limpar"
// a tela e reposicionar o cursor no topo.
// ⚠️ Funciona em terminais que suportam ANSI (Linux, macOS
// e Windows modernos com suporte habilitado).

echo "\033[2J\033[;H"; // limpa a tela e posiciona o cursor no canto superior