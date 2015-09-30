<?php
while ($w = chop(fgets(STDIN))) {
    if ($w != ($r = strrev($w)) | $w > 0) {
        if ($buffer[$r] && ($pairs[] = min($w, $r)) || ++$buffer[$w]);
    } else {
        $center .= $w;
    }
}

sort($pairs);

echo $upper = join($pairs), $center, strrev($upper), "\n";
