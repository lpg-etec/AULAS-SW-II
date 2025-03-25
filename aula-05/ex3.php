<?php
$a = json_decode(file_get_contents('./produtos.json'), true);

array_push($a, [
    "nome" => "Produto3",
    "preco" => 10,
    "quantidade" => 10
]);

print_r($a);

file_put_contents("./produtos.json", json_encode($a));
?>