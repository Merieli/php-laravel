<?php

$notes = [10, 8, 9, 7];

// Ordenando o array
$orderedNotes = $notes;
// sort() - Ordena o array em ordem crescente, modificando a variável original passada para ele, e espera um parâmetro por referência.
sort($orderedNotes); // Ordena o array em ordem crescente, modificando a variável original passada para ele

echo 'Desordenado: ';
var_dump($notes);

echo 'Ordenado: ';
var_dump($orderedNotes);


// Array multidimensional
$array3d= [
    [
        'Aluno' => 'João',
        'nota' => 10
    ],
    [
        'Aluno' => 'Vinicius',
        'nota' => 6
    ],
    [
        'Aluno' => 'Ana',
        'nota' => 9
    ],
];

// usort() - Ordena o array multidimensional, modificando a variável original passada para ele, e espera um parâmetro por referência. O primeiro parâmetro é o array a ser ordenado e o segundo é uma função de comparação que deve retornar -1, 0 ou 1
function orderNotes01(array $note1, array $note2): int
{
    // Se a nota do primeiro aluno for igual a do segundo, retorna 0
    if ($note1['nota'] === $note2['nota']) {
        return 0;
    }
    // Se a nota do primeiro aluno for menor que a do segundo, retorna -1, se for maior, retorna 1
    return $note1['nota'] < $note2['nota'] ? -1 : 1;
}

// `<=>` - Operador spaceship "espacionave" que valida se o primeiro elemento antes do operado é menor que o segundo, se for retorna `-1`, se for igual retorna `0` e se for maior retorna `1`. Esse operador é utilizado para comparar dois valores e retornar um inteiro que indica a relação entre eles.
function orderNotes(array $note1, array $note2): int
{
    return $note1['nota'] <=> $note2['nota'];
}

// Para passar funções como parâmetro, é necessário usar o nome da função como uma string
usort($array3d, callback: 'orderNotes');
var_dump($array3d);

// Para modificar a ordem pode-se usar o rsort() que ordena o array em ordem decrescente, modificando a variável original passada para ele
$invertido = $notes;
var_dump(rsort($invertido));

// Em casos de um array associativo, cujas chaves sejam strings, podemos usar a função asort() que ordena o array em ordem crescente, mantendo a associação entre chaves e valores
$associativo = [
    'João' => 10,
    'Vinicius' => 6,
    'Ana' => 9,
];
$associativoOrdered = $associativo;
asort($associativoOrdered); // Ordena o array em ordem crescente, mantendo a associação entre chaves e valores
var_dump($associativoOrdered);

$associativoInverted = $associativo;
arsort($associativoInverted); // Ordena o array em ordem decrescente, mantendo a associação entre chaves e valores
var_dump($associativoInverted);

// ksort() - Ordena o array em ordem crescente utilizando as chaves para isso.
$associativoWithKey = $associativo;
ksort($associativoWithKey);
var_dump($associativoWithKey);

// krsort() - Ordena o array em ordem decrescente utilizando as chaves para isso.
$associativoWithKeyInverted = $associativo;
krsort($associativoWithKeyInverted);
var_dump($associativoWithKeyInverted);

// uksort() - Ordena o array em ordem crescente utilizando as chaves para isso, mas com uma função de comparação personalizada.