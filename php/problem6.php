<?php

$arr = range(1,100);

$squaring_sum = 0;
$sum_squaring = 0;

foreach ($arr as $val) {
    $squaring_sum += $val * $val;
    $sum_squaring += $val;
}
print ($sum_squaring * $sum_squaring) - $squaring_sum;
