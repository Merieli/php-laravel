<?php
// Titular: Vinicius Dias
// Saldo atual: R$ 1000
// *********************
// 1. Consultar saldo atual
// 2. Sacar valor
// 3. Depositar valor
// 4. Sair

// Gostaríamos que você supervisionasse o controle do saldo de uma conta. Nesse sentido, é importante incluir informações como o titular da conta, embora por enquanto consideremos que apenas o titular e o saldo sejam suficientes. Além disso, algumas operações devem ser possíveis, como consultar o saldo atual, fazer saques, depósitos ou sair do programa.
// No primeiro caso mencionado, observamos a exibição de um menu, e então procedemos tentando fazer um saque. Inicialmente, nosso saldo é de R$ 1.000,00, e ao tentar sacar R$ 2.000,00. Digitamos "2" e recebemos a pergunta: "Qual valor deseja sacar?". Digitamos "2000" e recebemos uma mensagem de saldo insuficiente. Esta situação é ideal, pois indica que o sistema está funcionando corretamente.

$holder = "Meriéli Manzano";
$currentBalance = (float) 1_000.0; // o `_` é ignorado pelo PHP num dado de tipo numérico

function startBank($holder, $currentBalance)
{
    echo "***********************************\n";
    echo "Titular: $holder\n";
    echo "Saldo atual: R$ $currentBalance\n";
    echo "***********************************\n";
    echo "1. Consultar saldo atual\n";
    echo "2. Sacar valor\n";
    echo "3. Depositar valor\n";
    echo "4. Sair\n";
    echo "***********************************\n";
    echo "Digite um número: ";
    $numero = (float) fgets(STDIN); // tenta ler uma linha do arquivo apontado por STDIN (teclado)íÍ
    operationsAccount($holder, $numero, $currentBalance);
}

startBank($holder, $currentBalance);

function checkBalance($currentBalance)
{
    echo "==================================\n";
    echo "Saldo atual: R$ $currentBalance\n";
}


function withdrawValue($currentBalance)
{
    echo "==================================\n";
    echo "Qual valor deseja sacar? ";
    $value = (float) fgets(STDIN);

    $newValue = $currentBalance - $value;

    if ($newValue < 0) {
        echo "\nSaldo insuficiente\n";
    } else {
        $currentBalance = $currentBalance - $value;
        echo "\nSaque realizado com sucesso!\n";
    }

    return $currentBalance;
}


function depositValue($currentBalance)
{
    echo "==================================\n";
    echo "Qual valor deseja depositar? ";
    $value = (float) fgets(STDIN);

    if ($value <= 0) {
        echo "Depósito inválido\n";
    } else {
        $currentBalance = $currentBalance + $value;
        echo "Depósito realizado com sucesso\n";
    }

    return $currentBalance;
}

function pressEnterToContinue()
{
    echo "................................\n";
    echo "Pressione Enter para continuar\n";
    fgets(STDIN); // Pega a string digitada no teclado
}

function operationsAccount($holder, $numero, $currentBalance)
{
    $balance = $currentBalance;
    switch ($numero) {
        case 1:
            checkBalance($balance);
            break;
        case 2:
            $balance = withdrawValue($balance);
            break;
        case 3:
            $balance = depositValue($balance);
            break;
        case 4:
            echo "***********************************\n";
            echo "Saindo...\n";
            echo "***********************************\n";
            exit(0);
            break;
        default:
            echo "Opção inválida\n";
            break;
    }
    pressEnterToContinue();

    if ($numero != 4) {
        startBank($holder, $balance);
    }
}
