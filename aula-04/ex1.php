<?php
$pessoa = [
    "nome" => "Pessoa",
    "idade" => 15,
    "cidade" => "Ribeirão Pires",
    "profissao" => "Profissão"
];

$amigos = [
    "Nome1", "Nome2", "Nome3"
];

echo var_dump(array_merge([$pessoa["nome"]], $amigos));
?>