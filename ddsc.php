<?php

$ds = ["ドド", "スコ"];
$e = "ドドスコスコスコドドスコスコスコドドスコスコスコ";
$a = [];

while (true) {
    $w = $ds[random_int(0, 1)];
    echo $w;
    $a[] = $w;
    
    if (implode("", $a) === $e) break;
    if (count($a) === 12) array_splice($a, 0, 1);
}

echo "ラブ注入♡" . PHP_EOL;
