<?php

$notasBimestre1 = [
    'Vinicius' => 6,
    'João' => 9,
    'Ana' => 8,
    'Roberto' => 7,
    'Maria' => 4,
];

$notasBimestre2 = [
    'Vinicius' => 7,
    'João' => 9,
    'Ana' => 9,
    'Maria' => 4,
];

// array_diff() - compara dois arrays e retorna os elementos do primeiro array cujos valores estão no primeiro array e não estão nos próximos arrays passados por parâmetro "Porque a função aceita múltiplos arrays para comparar". Não compara chaves, apenas valores, por isso ao ter valores duplicados, como por exemplo múltiplas notas 7 "exemplo acima" o Roberto apesar de não existir mais no segundo array, ele não é retornado na comparação, pois o valor 7 existe no segundo array.
$compare = array_diff($notasBimestre1, $notasBimestre2);
var_dump($compare);

// array_diff_key() - compara dois arrays e retorna os elementos do primeiro array cujos chaves estão no primeiro array e não estão nos próximos arrays passados por parâmetro "Porque a função aceita múltiplos arrays para comparar". Compara apenas as chaves.
$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);
var_dump('diff_key ->>', $alunosFaltantes);

// array_keys() - retorna apenas as chaves de um array. Ao especificar o segundo parâmetro como um valor desejado para filtrar, ele retorna apenas as chaves que possuem o valor desejado. O terceiro parâmetro é o modo estrito de comparação, onde 0 é igual, 1 é idêntico e 2 é estritamente idêntico. 
$alunos = array_keys($alunosFaltantes);
var_dump('Alunos ->>', $alunos);
var_dump('Alunos ->>', array_keys($alunosFaltantes, 8));

// array_values() - retorna apenas os valores de um array. Ao especificar o segundo parâmetro como um valor desejado para filtrar, ele retorna apenas os valores que possuem a chave desejada. O terceiro parâmetro é o modo estrito de comparação, onde 0 é igual, 1 é idêntico e 2 é estritamente idêntico.
$notas = array_values($alunosFaltantes);
var_dump('Notas ->>', $notas);

// array_combine() - combina dois arrays, onde o primeiro array é usado como chaves e o segundo array como valores. O primeiro array deve ter o mesmo número de elementos que o segundo array, caso contrário, a função retornará erro.
$names = array_keys($alunosFaltantes);
$notes = array_values($alunosFaltantes);
var_dump('combine ->>', array_combine($notes, $names));

// array_flip() - inverte as chaves e valores de um array, o que é valor vira chave e o que é chave vira valor.
var_dump('flip->>>',array_flip($alunosFaltantes));

$notasBimestre1 = [
    'Vinicius' => 6,
    'João' => 9,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
];

$notasBimestre2 = [
    'Vinicius' => 6,
    'João' => 9,
    'Ana' => 8,
    'Roberto' => 7,
    'Maria' => 4,
];

// array_diff_assoc() - compara dois arrays e retorna os elementos do primeiro array cujos valores e chaves estão no primeiro array e não estão nos próximos arrays passados por parâmetro "Porque a função aceita múltiplos arrays para comparar". Compara tanto as chaves quanto os valores.
$compare3 = array_diff_assoc($notasBimestre1, $notasBimestre2);
var_dump('diff_assoc ->>', $compare3);


