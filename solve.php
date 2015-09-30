<?php
fgets(STDIN);
while ($w = chop(fgets(STDIN))) {
    $r = strrev($w);
    if ($buffer[$r] && $buffer[$r]-- && ($pairs[] = min($w, $r))
        || ++$buffer[$w] && $r == $w && $centers[$w] = 0) {
        unset($centers[$w]);
    }
}

sort($pairs);
ksort($centers);

echo $upper = join($pairs), key($centers), strrev($upper), "\n";
