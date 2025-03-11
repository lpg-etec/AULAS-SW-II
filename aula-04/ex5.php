<?php
$arr = [
    "Nome1" => 10,
    "Nome2" => 3,
    "Nome3" => 4,
    "Nome4" => 7,
    "Nome5" => 9
];

$n = 0;
foreach ($arr as $n1) {
    $n += $n1;
}

$m = $n / count($arr);
echo "Média: $m";
?>