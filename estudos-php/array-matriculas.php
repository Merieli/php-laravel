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


