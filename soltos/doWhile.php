<?php

// ---------------- WHILE ----------------
echo "===== WHILE =====" . PHP_EOL;

$i = 10;
while ($i > 0) {
    echo $i . PHP_EOL;
    $i--;
}

echo PHP_EOL; // quebra de linha


// ---------------- FOR ----------------
echo "===== FOR =====" . PHP_EOL;

for ($i = 10; $i > 0; $i--) {
    echo $i . PHP_EOL;
}

echo PHP_EOL;


// ---------------- DO...WHILE ----------------
echo "===== DO...WHILE =====" . PHP_EOL;

$i = 10;
do {
    echo $i . PHP_EOL;
    $i--;
} while ($i > 0);

