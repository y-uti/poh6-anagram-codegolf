<?php
fgets(STDIN);
while ($w = chop(fgets(STDIN))) {
    $r = strrev($w);
    if ($buffer[$r]) {
        --$buffer[$r];
        $pairs[] = min($w, $r);
        unset($centers[$w]);
    } else {
        ++$buffer[$w];
        if ($r == $w) {
            $centers[$w] = 1;
        }
    }
}

sort($pairs);
$upper = implode($pairs);
$lower = strrev($upper);

ksort($centers);
$center = key($centers);

echo $upper . $center . $lower . "\n";
