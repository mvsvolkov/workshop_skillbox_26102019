<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/layout/header.php';

includeTemplate('/catalog/items.php', [
    'products' => getProducts(),
    'listClass' => 'is-multiline',
    'itemsClass' => 'is-one-quarter',
    'title' => 'Новости',
]);

require_once $_SERVER['DOCUMENT_ROOT'] . '/layout/footer.php';
