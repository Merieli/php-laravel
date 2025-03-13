<?php

// ``<<<FINAL`` é uma forma de criar uma string multilinha
$string = <<<FINAL
Uma linha
Outra linha
etc
FINAL;

$teste = 'Um teste aqui';

// Para que o nowdoc não interprete as variáveis, é necessário usar aspas simples entre a primeira palavra `FINAL`
$string = <<<'FINAL'
Uma linha
Outra linha
etc $teste 
FINAL;

echo $string . PHP_EOL;


$conteudoEmail = 'Olá, Fulano(a)!';

function gerarEmail($conteudoEmail) {
    echo 'Estamos entrando em contato para {motivo}....'.$conteudoEmail.'';
}