<?php
function fac($n) {
    if ($n == 0 || $n == 1) {
        return 1;
    } else {
        return $n * fac($n - 1);
    }
}

echo fac(5);
?>