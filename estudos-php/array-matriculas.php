<?php

$alunos2025 = [
    'Vinicius',
    'João',
    'Ana',
    'Roberto',
    'Maria',
];

$newAlunos = [
    'Patricia',
    'Nico',
    'Kilderson',
    'Daiane'
];

// array_merge() - combina dois ou mais arrays, onde o primeiro array é usado como base e os próximos arrays são adicionados ao final do primeiro array sequencialmente. Essa função não preserva as chaves numéricas, e elas são reorganizadas de forma sequencial. Se as chaves forem definidas em string, são mantidas as do último array sobescrevendo as chaves anteriores. Retorna um novo array com os elementos combinados.
$alunos2026 = array_merge($alunos2025, $newAlunos);
var_dump($alunos2026);

// Outra forma de unir arrays é utilizando o operador de adição `+`, mas ele não reordena os índices e mantém os índices do primeiro array, ou seja, se houver chaves duplicadas, o valor do primeiro array será mantido e o valor do segundo array será ignorado, sendo assim se não for um array associativo os itens do segundo array cujos indices já existem no primeiro array serão ignorados.
$alunos2027 = $alunos2025 + $newAlunos;
var_dump($alunos2027);


// array_push() - adiciona um ou mais elementos ao final de um array. Retorna o número total de elementos do array após a adição. Essa função modifica o array original e não retorna um novo array.
array_push($alunos2025, 'Charlie', 'Bob');
var_dump($alunos2025);

// O operador `[]` também pode ser utilizado para adicionar elementos ao final de um array.
$alunos2025[] = 'Luiz';
var_dump($alunos2025);

// array_unshift() - adiciona um ou mais elementos ao início de um array. Retorna o número total de elementos do array após a adição. Essa função modifica o array original e não retorna um novo array.
array_unshift($alunos2025, 'Stephane', 'Rachel');
var_dump($alunos2025);

// array_shift() - remove o primeiro elemento de um array e reordena todos os índices. Retorna o valor do primeiro elemento removido. Essa função modifica o array original.
$primeiroAluno = array_shift($alunos2025);
var_dump($primeiroAluno);

// array_pop() - remove o último elemento de um array e reordena todos os índices. . Retorna o valor do último elemento removido. Essa função modifica o array original.
$ultimoAluno = array_pop($alunos2025);
var_dump($ultimoAluno);