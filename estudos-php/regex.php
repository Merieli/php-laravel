<?php

// Expressão Regular: Um conjunto de caracteres utilizando uma sintaxe predefinida que pode ser aplicado a um texto ou string.

// `^` - Início da string
// `$` - Fim da string\
// `\w` - Qualquer caractere alfanumérico (letras)
// `\d` - Qualquer dígito (0-9)
// `[]` - aso digitar caracteres dentro dos colchetes irá buscar todas as ocorrências dos caracteres dentro dos colchetes
// `()` - Agrupamento de caracteres ou expressões

$telefones = ['(24) 99999 - 9999', '(22) 99999 - 9999', '(33) 2222 - 9999', '119999 - 99999', '234 9999999'];

// preg_match() - Verifica se a string corresponde à expressão regular

foreach ($telefones as $telefone) {
    $telefoneValido = preg_match(
        '/^\((\d{2})\)\s9?[\d]{4}.-.[\d]{4}$/', 
        $telefone,
        $matches // Variavél com o resultado da string e cada um dos grupos de captura
    );

    // var_dump($matches);
    
    if ($telefoneValido) {
        echo "Telefone válido-> ";

        // preg_replace() - Substitui todas as ocorrências de uma string por outra, utilizando expressões regulares. Por parâmetro, o primeiro é a expressão regular com o que se deseja substituir, o segundo é pelo que quero substituir e o terceiro é onde quero fazer a substituição
        echo preg_replace('/^\((\d{2})\)\s(9?[\d]{4}.-.[\d]{4})$/', '(XX) \2', $telefone) . PHP_EOL;
    } else {
        echo "Telefone inválido: $telefone" . PHP_EOL;
    }

}