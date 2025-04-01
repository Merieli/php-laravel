<?php

// gettype() - retorna o tipo de dado de uma variável
$variavel = [10, 20, 30];
echo gettype($variavel) . PHP_EOL; // integer

// is_array() - verifica se uma variável é um array
if (is_array($variavel)) {
    echo "A variável é um array\n";
}

// array_is_list() - verifica se um array é uma lista e se é numérico, ou seja, todas as chaves/índices são numeros, se começa com 0 e a partir daí é crescente sem pular chaves.
var_dump(array_is_list($variavel));
var_dump(array_is_list([
    'Verão' => 6,
    'Inverno' => 7,
]));
var_dump(array_is_list([
    'Verão',
    'Inverno',
]));
var_dump(array_is_list([
    0 => 'Teste',
    1 => 'Teste2',
]));

$notes = [
    'João' => '10',
    'Vinicius' => null,
    'Ana' => 9,
    'Maria' => 8,
    'Pedro' => 7,
];

// array_keys_exists() ou key_exists() - verifica se uma chave existe em um array e retorna true ou false.
echo 'João fez a prova?: ';
var_dump(array_key_exists('João', $notes)); // true


// isset() - verifica se uma variável está definida, existe e não é null
echo 'Vinícius fez a prova?: ';
var_dump(isset($notes['Vinicius']));
echo 'Ana fez a prova?: ';
var_dump(isset($notes['Ana']));

// in_array() - verifica se um valor existe em um array e retorna true ou false. É uma verificação que não garante o tipo e usa o operador de comparação `==` por baixo dos panos, ou seja, se o valor for 10 e o array tiver o valor '10', ele vai retornar true. Para fazer uma comparação estrita, ou seja, verificar o tipo e o valor, é necessário usar o terceiro parâmetro como true.
echo 'Alguém tirou 10? ';
var_dump(in_array(10, $notes)); // true
echo 'Alguém tirou 10? ';
var_dump(in_array(10, $notes, true)); // true

// array_search() - retorna a chave do valor desejado no array, se não encontrar retorna false
echo 'Quem tirou 10? ';
$aluno = array_search(10, $notes); 
var_dump($aluno);

echo 'Quem tirou 10? ';
$aluno = array_search(10, $notes, true); 
var_dump($aluno);

