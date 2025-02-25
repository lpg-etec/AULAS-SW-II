<?php
function soma($a) {
    $n = 0;
    foreach ($a as $n1) {
        $n += $n1;
    }
    return $n;
}

echo soma([3, 5, 10, 30, 5]);
?>