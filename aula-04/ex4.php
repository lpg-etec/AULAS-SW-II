<?php
$arr = [3, 5, 7, 10, 3, 3, 6, 4, 4, 8, 13, 5, 7, 3, 3];

$p = 0;
$i = 0;
foreach ($arr as $n) {
    if (fmod($n, 2) == 0) {
        $p += 1;
    } else {
        $i += 1;
    }
}

echo "Quantidade Par: $p<br>";
echo "Quantidade Ímpar: $i<br>";
?>