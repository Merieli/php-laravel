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


// Em php uma string é como se fosse um array, porém não é um array. Por isso é possível acessar uma letra com índice
$name = "Testesãáúíç";
echo $name[0] . PHP_EOL; // M

// A função strlen() retorna o tamanho da string, e esse tamanho é em bytes e não em quantidade de caracteres
echo strlen($name) . PHP_EOL; // 7

// Para retornar a quantidade de caracteres de uma string, é necessário usar a função mb_strlen()
echo mb_strlen($name) . PHP_EOL; // 5

// Converter para iso-8859-1
$convertida = mb_convert_encoding($name, 'iso-8859-1', 'utf-8');
echo $convertida . PHP_EOL; // ãáúíç

// Converter para um formato
$string = "um teste aqui";
echo mb_convert_case($string, MB_CASE_TITLE) . PHP_EOL; // Testesãáúíç
