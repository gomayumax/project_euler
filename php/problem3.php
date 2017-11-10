<?php

$val = 600851475143;

for($i = 2; $val/$i >= 1; $i++) {
    if ($val % $i === 0 ) {
        $val = $val / $i;
        print 'soinsu: ' . $i . "\t";
        print 'val: ' . $val . "\n";
    }
}
