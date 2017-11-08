<?php

$val1 = 1;
$val2 = 2;
$sum_val = 0;

$result = $val2;

while ($sum_val < 4000000) {

    $sum_val =$val1 + $val2;
    if ($sum_val % 2 === 0) {
        $result += $sum_val;
    }

    $val1 = $val2;
    $val2 = $sum_val;
}
print $result;
