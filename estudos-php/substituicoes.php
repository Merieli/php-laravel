<?php

$text = 'Texto com qualquer coisa poxa e caramba';

// str_replace() - Substitui todas as ocorrências de uma string por outra. O primeiro parâmetro é o que quero buscar, o segundo é pelo que quero substituir e o terceiro é onde quero fazer a substituição
$replace = str_replace(['poxa', 'caramba'], '****', $text);

// Se quiser substituir por mais de uma string, é necessário passar um array e quando um item é omitido ele remove a palavra
$replace1 = str_replace(['poxa', 'caramba'], ['****'], $text);


echo $replace . PHP_EOL . $replace1 . PHP_EOL;


// strtr() - substitui os caracteres strings definidos por outros caracters strings, como uma tradução de caracteres.
$replace2 = strtr($text, 'poxa', '***@');

// Também é possível usar um array associativo, onde a chave é o que quero substituir e o valor é pelo que quero substituir
$replace3 = strtr($text, ['poxa' => 'p', 'caramba' => 'c']);

echo PHP_EOL. $replace2 . PHP_EOL . $replace3 . PHP_EOL;