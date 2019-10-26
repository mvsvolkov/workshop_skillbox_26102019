<?php

function getTop3Products()
{
    return array_slice(getProducts(), 0, 3);
}

function getProducts()
{
    if (isset($_SESSION['products'])) {
        return $_SESSION['products'];
    }

    $products = [
        [
            'id' => 1,
            'name' => 'Супер муж на час',
            'preview' => 'Сделает все, что вам нужно',
            'image' => '/images/homer.jpg',
            'description' => 'Качественное исполнения ваших дел',
            'rating' => 5,
            'sale' => true,
            'hit' => true,
            'new' => true,
        ],
        [
            'id' => 3,
            'name' => 'Товар 1',
            'preview' => 'Это самый класный "товар 1", который вы только могли бы купить',
            'image' => 'https://bulma.io/images/placeholders/1280x960.png',
            'description' => 'Это товар 1, длина 18 ширина 15, вес 3 тонны',
            'rating' => 4,
            'sale' => true,
            'hit' => false,
            'new' => false,
        ],
        [
            'id' => 2,
            'name' => 'Товар Два',
            'preview' => 'Это Товар два',
            'image' => 'https://bulma.io/images/placeholders/1280x960.png',
            'description' => 'Это товар 2',
            'rating' => 3,
            'sale' => false,
            'hit' => false,
            'new' => false,
        ],
    ];

    for ($i = 4; $i < 10; $i++) {
        $products[] = [
            'id' => $i,
            'name' => 'Товар ' . $i,
            'preview' => 'Это Товар ' . $i,
            'image' => 'https://bulma.io/images/placeholders/1280x960.png',
            'description' => 'Это товар ' . $i,
            'rating' => rand(0, 5),
            'sale' => (bool) rand(0, 1),
            'hit'  => (bool) rand(0, 1),
            'new'  => (bool) rand(0, 1),
        ];
    }

    $_SESSION['products'] = $products;

    return $products;
}

function getProduct($id)
{
    $products = getProducts();

    foreach ($products as $product) {
        if ($product['id'] == $id) {
            return $product;
        }
    }

    return [];
}


function createProduct($name, $preview, $image, $description, $rating, $sale, $hit, $new)
{
    $_SESSION['products'][] = [
        'id' => count(getProducts()) + 1,
        'name' => $name,
        'preview' => $preview,
        'image' => $image,
        'description' => $description,
        'rating' => $rating,
        'sale' => $sale,
        'hit'  => $hit,
        'new'  => $new,
    ];

    return true;
}

function updateProduct($id, $name, $preview, $image, $description, $rating, $sale, $hit, $new)
{
    foreach ($_SESSION['products'] as $key => $product) {
        if ($product['id'] == $id) {
            $_SESSION['products'][$key] = [
                'id' => $id,
                'name' => $name,
                'preview' => $preview,
                'image' => $image,
                'description' => $description,
                'rating' => $rating,
                'sale' => $sale,
                'hit'  => $hit,
                'new'  => $new,
            ];
            break;
        }

    }

    return true;
}