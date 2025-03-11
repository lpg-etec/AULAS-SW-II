<?php
$arr = [4, 3, 5, 13, 31, 3, 3, 4, 5, 3];

$n = 0;
foreach ($arr as $n1) {
    $n += $n1;
}

echo $n;
?>