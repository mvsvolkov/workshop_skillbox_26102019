<?php
ini_set('display_errors', true);
error_reporting(E_ALL);

require_once $_SERVER['DOCUMENT_ROOT'] . '/src/core.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WorkShop - Интернет магазин</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>
<body>
<nav class="navbar is-light" role="navigation" aria-label="main navigation">
    <div class="container">
        <div class="navbar-brand">

            <a class="navbar-item" href="/">
                <img src="/logo.png" width="32" height="32">
            </a>

            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="/">
                    Главная
                </a>
                <a class="navbar-item" href="https://skillbox.ru">
                    Skillbox.ru
                </a>

                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link" href="/news/">
                        Новости
                    </a>

                    <div class="navbar-dropdown">
                        <a class="navbar-item" href="/news/add.php">
                            <i class="fas fa-plus"></i> <span>Добавить</span>
                        </a>
                    </div>
                </div>

                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link" href="/catalog/">
                        Товары
                    </a>

                    <div class="navbar-dropdown">
                        <a class="navbar-item" href="/catalog/add.php">
                            <i class="fas fa-plus"></i> <span>Добавить</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</nav>
