<?php

$email = 'meriéli@dev.com.br';

echo substr($email, 0, 7) . PHP_EOL; // merieli
echo substr($email, 8) . PHP_EOL;

//-----------------------------

// strpos() - retorna a posição da primeira ocorrência de uma substring
$positionOfArroba = strpos($email, '@');

// substr() - retorna uma parte de uma string
echo substr($email, 0, $positionOfArroba) . PHP_EOL; // merieli
echo substr($email, $positionOfArroba + 1) . PHP_EOL; // dev.com.br


// --------------------
// Atalho para buscar uma função na documentação do PHP: https://php.net/{nome_da_funcao}

$usuario = substr($email, 0, $positionOfArroba);

// strtoupper() - retorna a string com todas as letras maiúsculas, exceto caracteres acentuados e especiais que não estão na tabela ASCII
echo strtoupper($usuario) . PHP_EOL; // MERIéLI
// strtolower() - retorna a string com todas as letras minúsculas
echo strtolower($usuario) . PHP_EOL; // meriéli

// Extensão mbstring do PHP
// mb_strlen() - retorna o tamanho da string, e esse tamanho é em quantidade de caracteres
// mb_strtoupper() - retorna a string com todas as letras maiúsculas, exceto caracteres acentuados e especiais que não estão na tabela ASCII
// mb_strtolower() - retorna a string com todas as letras minúsculas

// Para visualizar as extensões PHP instaladas: `php -m`
// Para verificar arquivos `ini` carregados que são arquivos de configuração: `php --ini`
