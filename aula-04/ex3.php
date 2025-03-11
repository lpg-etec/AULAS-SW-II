<?php
$arr = [6, 4, 2, 5, 14, 4, 4, 7];

$n1 = $arr[0];
$n2 = $arr[0];
for ($i = 1; $i < count($arr); $i++) {
    if ($arr[$i] > $n1) {
        $n1 = $arr[$i];
    }
    if ($arr[$i] < $n2) {
        $n2 = $arr[$i];
    }
}

echo "Maior: $n1<br>";
echo "Menor: $n2<br>";
?>