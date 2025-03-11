<?php

// como verificar se uma string existe em outra
$frase = "Ola, meu nome é João";
$nome = "João";

if (str_contains($frase, $nome)) {
    echo "O nome $nome está na frase\n";
} else {
    echo "O nome $nome não está na frase\n";
}

echo PHP_EOL;
