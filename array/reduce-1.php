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



//Exercício 2: Conte quantas pessoas têm mais de 25 anos de idade.



//Exercício 3: Encontre a pessoa com a maior quantia de dinheiro.



//Exercício 4: Gere um novo array que contenha apenas o nome e a idade das pessoas, combinados como uma string no formato "Nome: Idade".



//Exercício 5: Calcule a média de idade de todas as pessoas, e retorne a idade média arredondada para o número inteiro mais próximo.



?>