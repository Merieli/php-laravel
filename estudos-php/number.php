<?php

// O php contém a possibilidade de strings numéricas, que são strings que contém apenas números
// - Se começa com numeros e depois só tem espaço, o php entende como string numérica válida
// - Se começa com espaços e depois tem número, o php entende string numérica válida
// - Se começa com numeros e depois espaço e letras, o php informa que não é uma string numérica válida, mas vai tentar se virar
// - Se começa com qualquer coisa diferente de espaços e números o php informa que não é uma string numérica válida
// Qualquer string numérica convertida para um número é equivalente a 0
$anoNascimento = '1994';

$idade = 2024 - $anoNascimento;

echo "Idade: $idade\n";

// O if abaixo dará false e entrará no else, pois a variável $anoNascimento é uma string numérica e não um número inteiro
if ($anoNascimento === 1994) {
    echo "SIM\n";
} else {
    echo "NÃO\n";
}
