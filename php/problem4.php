<?php

$reverse_val = [];

for($val1 = 999; $val1 > 99; $val1--) {
    for($val2 = 999; $val2 > 99; $val2--) {
        $val = $val1 * $val2;

        $str = strval($val);
        if ($str === strrev($str)) {
            $reverse_val[] = $val;
        }
    }
}

rsort($reverse_val);
print 'result: ' . array_shift($reverse_val);
