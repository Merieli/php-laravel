<?php

$email = 'merieli@dev.com.br';

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
