<?php

$numbers = range(1, 10);

function removeEvenNumbers(&$arr) {
    $arr = array_filter($arr, function ($num) {
        return $num % 2 !== 0;
    });
}

removeEvenNumbers($numbers);

print_r($numbers);

?>
