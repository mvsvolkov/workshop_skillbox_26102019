<?php

for ($i = 0; $i < 10; $i++) {
    if ($i % 2 == 0) {
        continue;
    }
    dump($i);
}

$j = 0;
while (true) {
    $j++;
    if ($j > 3) {
        break;
    }
    dump($j);
}
