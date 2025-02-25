<?php
function par($n1) {
    if (fmod($n1/2, 1) == 0) {
        return "par";
    } else {
        return "impar";
    }
}

echo par(5);
?>