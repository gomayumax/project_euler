<?php

$sosu_val = [
    2
];

// 今までの数字で割れる数は入れない
// 割れない数は入れる
for($val = 3; ; $val++){
    $is_sosu = false;
    foreach ($sosu_val as $sosu) {
        if ($val % $sosu === 0) {
            $is_sosu = false;
            break;
        }
        $is_sosu = true;
    }
    if ($is_sosu === true) {
        $sosu_val[] = $val;
        if (count($sosu_val) === 10001) {
            print $val;
            break;
        }
    }
}

