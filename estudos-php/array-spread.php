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

// ... - o operador de spread, ele "espalha" os valores. 
// Ele pode ser utilizado para combinar arrays, adicionar elementos a um array ou passar argumentos para funções. O operador de spread é útil quando você deseja trabalhar com arrays de forma mais flexível e dinâmica. Tem o mesmo comportamento do array_merge(), mas permite também adicionar valores únicos e não só arrays.
$alunos2026 = [...$alunos2025, 'Carlos Vinicius', ...$newAlunos];
var_dump($alunos2026);

// O operador `...` pode fazer outras coisas em outros contextos
teste([], [], []);

function teste(array ...$alunos) {
    var_dump($alunos);
}

testeInverso(...[1, 2, 3]);
function testeInverso(int $a, int $b, int $c) {
}