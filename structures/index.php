<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/src/core.php';

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
                'author' => 'Я',
            ],
            [
                'id' => 2,
                'author' => 'Не я',
            ],
        ]
    ]
];

//'Товар Нет отзывов'
//'Товар отзывы:'
//'автор отзыва 1: Я'

foreach ($products as $product) {

    $reviewStr = 'Нет отзывов';
    if (isset($product['reviews'])) {
        $reviewStr = 'отзывы:';
    }

    echo $product['name'] . ' ' . $reviewStr . '<br>';

    if (isset($product['reviews'])) {

        foreach ($product['reviews'] as $reviewNumber => $review) {

            $reviewNumber++;

            echo "автор отзыва $reviewNumber: {$review['author']}<br>";

        }

    }

}
