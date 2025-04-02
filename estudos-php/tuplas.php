<?php

// Tupla é um pequeno conjunto de elementos em que sua posição pode significar algo, essa estrutura de dados não é nativa do PHP, mas pode ser simulada utilizando arrays associativos ou classes.

$dados = ['Vinicius', 10, 24];

// list() - Permite atribuir valores de um array a variáveis individuais, utilizando a posição dos elementos do array. Essa função é útil para extrair valores de arrays de forma mais legível e organizada. O array a ser utilizado deve ficar a direita do operador de atribuição `=` e os nomes das variáveis com base na ordem dos indices do array devem ser os parametros da função list().
list($nome, $nota, $idade) = $dados;
var_dump($nome, $nota, $idade);

// A partir do PHP 7.1 é possível usar outra sintaxe que tem o mesmo resultado da list:
[$nome, $nota, $idade] = $dados;


$dadosExample = [
    'name' => 'Vinicius', 
    'note' => 10, 
    'age' => 24
];
// Também é possível informar os nomes das chaves do array associativo.
['name' => $nome, 'note' => $nota, 'age' => $idade] = $dadosExample;
var_dump($nome, $nota, $idade);

// extract() - Extrai variáveis de um array associativo, onde as chaves do array se tornam os nomes das variáveis. Não usar em valores não confiáveis "que vierem do usuário", porque pode criar variáveis que alteram o comportamento do programa. 
$dadosExample = [
    'test' => 'Bruno', 
    'temp' => 30, 
    'veloc' => 120
];
extract($dadosExample);
var_dump($test, $temp, $veloc);

// compact() - Cria um array associativo a partir de variáveis, onde os nomes das variáveis se tornam as chaves do array e os valores das variáveis se tornam os valores do array. Essa função é útil para criar arrays associativos de forma rápida e fácil. Os nomes das variáveis devem ser passados como strings.
var_dump(compact('test', 'temp', 'veloc'));
