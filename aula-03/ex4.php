<?php
function tabuada($n) {
    for ($i = 1; $i <= 10; $i++) {
        echo "$i * $n = ".$n*$i."<br>";
    }
}

echo tabuada(5);
?>