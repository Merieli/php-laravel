<?php

$url = "https://alura.com.br";

// Para verificar se a string $url começa com "https://"
if (str_starts_with($url, "https://")) {
    echo "A URL começa com https://\n";
} else {
    echo "A URL não começa com https://\n";
}

echo PHP_EOL;

// Para verificar se a string $url termina com ".br"
if (str_ends_with($url, ".br")) {
    echo "É um domínio do Brasil";
} else {
    echo "Não é um domínio do Brasil";
}

echo PHP_EOL;
