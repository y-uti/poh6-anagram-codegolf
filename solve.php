<?php
fgets(STDIN);
while ($w = chop(fgets(STDIN))) {
    $r = strrev($w);
    if (array_key_exists($r, $buffer)) {
        if (--$buffer[$r] == 0) {
            unset($buffer[$r]);
        }
        $pairs[] = min($w, $r);
    } else {
        ++$buffer[$w];
    }
}

sort($pairs);
$upper = implode($pairs);
$lower = strrev($upper);

foreach ($buffer as $w => $c) {
    if ($w == strrev($w)) {
        $center = $center ? min($center, $w) : $w;
    }
}

echo $upper . $center . $lower . "\n";
