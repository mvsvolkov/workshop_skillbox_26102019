<?php


//dump($products);

$a = (bool) rand(0, 1);

if ($a) {
    echo 'Переменная a - истинна';
} else {
    echo 'Переменная a - содержит бесполезную ерунду';
}

$productsCount = rand(0, 10);

$lastNumber = $productsCount % 10;


if ($lastNumber == 1) {
    dump("на сайте {$productsCount} продукт");
} elseif (2 <= $lastNumber && $lastNumber <= 4) {
    dump("на сайте {$productsCount} продукта");
} else {
    dump("на сайте {$productsCount} продуктов");
}


