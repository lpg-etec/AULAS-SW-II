<?php
$a = json_decode(file_get_contents('./produtos.json'), true);

$nome = "Produto3";

for ($i = 0; $i < count($a); $i++) {
    if ($a[$i]['nome'] == $nome) {
        echo "Removido: ".$a[$i]['nome']."<br>";
        unset($a[$i]);
        $a = array_values($a);
        break;
    }
}

file_put_contents("./produtos.json", json_encode($a));
?>