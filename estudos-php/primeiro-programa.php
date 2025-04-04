<?php

//1 - Escreva um programa em PHP que remova os elementos duplicados de um array fornecido como entrada e exiba o array resultante. Por exemplo, se o array for [1, 2, 2, 3, 4, 4, 5], o programa deve exibir [1, 2, 3, 4, 5].

$list = [1, 2, 2, 3, 4, 4, 5];
$result = array_unique($list);

print_r($result);


//2 - Percorra um array de notas (cada uma de 0 a 10) e exiba a nota do aluno em questão com a informação se o aluno foi aprovado ou não.
//Se a nota for maior do que 6, o aluno foi aprovado. Caso contrário, foi reprovado.

$notes = [10, 4, 6, 9, 7, 3, 0];
foreach ($notes as $note) {
    if ($note > 6) {
        print_r(" Aluno aprovado! ---");
    } else {
        print_r(" Aluno reprovado! ---");
    }
}

//3 - Defina um array associativo que representa uma conta bancária (com titular e saldo) e exiba suas informações na tela.
$account = [
    "titular" => "Meriéli Manzano",
    "saldo" => 35000.45,
];

echo  "\n\n";
echo "Titular: " . $account["titular"] . ", Saldo: R$ " . $account["saldo"];


//4 - Crie um array contendo nomes de familiares seus e após sua criação adicione mais elementos ao array.
$familia = ["Maria", "Luana"];
$familia[] = "Carlos";
$familia[4] = "Marcelo";

print_r($familia);
