<?php

$arr = range(1,20);
rsort($arr);
for ($val = 20; ; $val++) {
    $clear_num = 0;
//    print "val: " . $val;
    foreach ( $arr as $i) {
        if ($val % $i !== 0) {
            break;
        }

        $clear_num++;
        if (count($arr) === $clear_num) {
            print "val: " . $val;
            print "\t OK\n";
            exit;
        }
    }
//    print "\t NG\n";
}

