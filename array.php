<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/src/core.php';

$firstArrayOfStrings = [
    'Строка 1',
    'Строка 2',
    'Строка 3',
];

var_dump($firstArrayOfStrings);
var_dump($firstArrayOfStrings[2] . $firstArrayOfStrings[0]);

$secondArrayOfNumbers = [
    'first'  => 2,
    'second' => 3,
    'third'  => 4,
];

dump($secondArrayOfNumbers);

$product = [
    'id' => 1,
    'name' => 'Товар 1',
    'preview' => 'Это самый класный "товар 1", который вы только могли бы купить',
    'image' => 'https://bulma.io/images/placeholders/1280x960.png',
    'description' => 'Это товар 1, длина 18 ширина 15, вес 3 тонны',
];

dump($product['name']);
dump($product['id']);
dump($product['preview']);

$products = [
    [
        'id' => 1,
        'name' => 'Товар 1',
        'preview' => 'Это самый класный "товар 1", который вы только могли бы купить',
        'image' => 'https://bulma.io/images/placeholders/1280x960.png',
        'description' => 'Это товар 1, длина 18 ширина 15, вес 3 тонны',
    ],
    [
        'id' => 2,
        'name' => 'Товар Два',
        'preview' => 'Это Товар два',
        'image' => 'https://bulma.io/images/placeholders/1280x960.png',
        'description' => 'Это товар 2',
        'reviews' => [
            [
                'id' => 1,
                'author' => 'Я'
            ],
            [
                'id' => 2,
                'author' => 'Не я'
            ],
        ]
    ]
];
dump($products[1]['reviews'][1]['author']);