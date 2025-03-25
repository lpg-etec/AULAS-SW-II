<?php
$a = [
    [
        "nome" => "Produto1",
        "preco" => 200,
        "quantidade" => 5
    ],
    [
        "nome" => "Produto2",
        "preco" => 3000,
        "quantidade" => 5
    ],
    [
        "nome" => "Produto3",
        "preco" => 5,
        "quantidade" => 100
    ]
];

file_put_contents("./produtos.json", json_encode($a));
?>