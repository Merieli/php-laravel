<?php

// strtr() - é uma função que substitui um conjunto de caracteres strings definidos por outros conjuntos de caracters strings. Ele substitui as palavras encontradas uma única vez, ou seja, não faz substituições recursivas.
$trans = ['hello' => 'hi', 'hi' => 'hello'];


echo strtr('hi all, I said hello', $trans) . PHP_EOL; // hello all, I said hi

// A diferença entre strtr() e str_replace() é que o strtr() substitui apenas uma vez, enquanto o str_replace() substitui todas as ocorrências.
echo str_replace(['hello', 'hi'], ['hi', 'hello'], 'hi all, I said hello') . PHP_EOL; // hello all, I said hello