<?php
while ($w = chop(fgets(STDIN))) {
    $w != ($r = strrev($w)) | $w > 0 ? $buffer[$r] ? $pairs[] = min($w, $r) : ++$buffer[$w] : $center .= $w;
}

sort($pairs);

echo $upper = join($pairs), $center, strrev($upper);
