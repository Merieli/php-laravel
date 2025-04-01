<?php

/**
 * Arrays em PHP são versáteis e genéricos, o que permite tratá-los como várias estruturas de dados:
 * - Listas
 * - Filas
 * - Pilhas
 * - Mapas
 */

// Definindo um array
$array = array(); // sintaxe antiga que também funciona
$array = [
    1 => 'um',
    2 => 'dois',
    3 => 'três',
]; // Em arrays associativos a chave dos arrays pode ser um inteiro ou uma string. Caso qualquer outro tipo seja utilizado, uma conversão vai acontecer e pode gerar comportamentos não esperados.
var_dump($array);


$arrayIncorrect = [
    1 => 'um',
    true => 'dois', // A chave true é convertida para 1
    1.3 => 'três', // A chave 1.3 é convertida para 1
]; // desse modo, o array terá apenas um elemento com a chave 1 e o valor 'três'

var_dump($arrayIncorrect); // A chave 1 é sobrescrita pelo valor 'três'

// Normalmente nas linguagens de programação cada array é reservado em memória contínua, sendo assim ao aumentar o tamanho do array, será necessário procurar outro espaço na memória que caiba o array inteiro, para ai sim copiar o array inteiro para esse novo espaço.
// Porém em PHP é diferente, tem-se um mapa na memória, chamado de "hash map" onde cada chave é um índice e o valor é o valor do array. Assim, ao adicionar um novo elemento, o PHP apenas adiciona a nova chave e seu valor, sem precisar copiar o array inteiro para outro espaço na memória. 

foreach ($array as $numberName) { // manipulando o array para exibir os valores
    echo $numberName . PHP_EOL;
}

$counter = 0;
foreach ($array as $index => $numberName) { // manipulando o array para exibir os valores e os índices
    $counter++;
    echo "[$index] = $numberName" . PHP_EOL;
}

// Para contar o array pode-se usar a função count() ou sizeof(), ambas funcionam da mesma forma e são as mesmas funções, apenas com nomes diferentes.
echo "Total de elementos: " . count($array) . PHP_EOL;
echo "Total de elementos: " . sizeof($array) . PHP_EOL;;


