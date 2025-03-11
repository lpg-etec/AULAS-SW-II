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

$n1 = 0;
foreach ($arr as $n2) {
    if ($n2 > $n1) {
        $n1 = $n2;
    }
}

$m = $n / count($arr);
echo "Média: $m<br>";
echo "Maior nota: $n1<br>";
?>