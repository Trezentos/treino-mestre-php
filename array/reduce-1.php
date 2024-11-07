<?php
require '../functions.php';

$pessoas = [
    [
        "nome" => "João",
        "sobre" => "Estudante de TI",
        "idade" => 20,
        "dinheiro" => 150.50
    ],
    [
        "nome" => "Maria",
        "sobre" => "Designer Gráfico",
        "idade" => 25,
        "dinheiro" => 200.00
    ],
    [
        "nome" => "Carlos",
        "sobre" => "Desenvolvedor Web",
        "idade" => 30,
        "dinheiro" => 350.75
    ],
    [
        "nome" => "Ana",
        "sobre" => "Professora de Inglês",
        "idade" => 28,
        "dinheiro" => 120.00
    ],
    [
        "nome" => "Felipe",
        "sobre" => "Engenheiro de Software",
        "idade" => 35,
        "dinheiro" => 500.25
    ]
];


imprimirTabela($pessoas);
//Exercício 1: Calcule a soma total do dinheiro de todas as pessoas no array.
$result = array_reduce($pessoas, function($tcarry, $tItem){

    return $tcarry + $tItem['dinheiro'];
});

imprimirResultado('Dinheiro de tudo junto: ', $result);


//Exercício 2: Conte quantas pessoas têm mais de 25 anos de idade.
$biggerThan25 = array_reduce($pessoas, function($tcarry, $titem){
    if ($titem['idade'] > 25) return $tcarry + 1;

}, 0);

imprimirResultado('Quantidade de pessoas maior que 25: ', $biggerThan25);



//Exercício 3: Encontre a pessoa com a maior quantia de dinheiro.
$monierGuy = array_reduce($pessoas, function($tCarry, $tItem){
    if ($tItem['dinheiro'] > $tCarry) return $tCarry = $tItem;
}, 0);

imprimirResultado("A pessoa mais rica é ".$monierGuy['nome']." com a grana de ", $monierGuy['dinheiro']);

//Exercício 4: Gere um novo array que contenha apenas o nome e a idade das pessoas, combinados como uma string no formato "Nome: Idade".
$newArray = array_reduce($pessoas, function($tCarry, $tItem){
    $tCarry[] =  $tItem['nome'].':'.$tItem['idade'];

    return $tCarry;
}, []);


var_dump($newArray);

//Exercício 5: Calcule a média de idade de todas as pessoas, e retorne a idade média arredondada para o número inteiro mais próximo.

$soma = array_reduce($pessoas, function($tCarry, $tItem){
    return $tCarry +  $tItem['dinheiro'];
}, 0) / count($pessoas);


var_dump($soma);

?>