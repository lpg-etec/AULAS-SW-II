<?php
function func() {
    $a = [];
    for ($i = 0; $i < 10; $i++) {
        array_push($a, rand(0, 10));
    }
    return $a;
}
echo var_dump(func());
?>