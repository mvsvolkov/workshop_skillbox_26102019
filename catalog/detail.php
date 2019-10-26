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


<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-one-third">

                <figure class="image is-4by3">
                    <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Товар 1">
                </figure>
            </div>
            <div class="column">
                <div class="content">
                    <h1 class="title">Товар 1</h1>
                </div>

                <a href="/catalog/edit.php?id=1">Редактировать</a>

                <div class="tags">
                    <span class="tag is-danger">Распродажа</span>
                    <span class="tag is-warning">Новинка</span>
                    <span class="tag is-success">Хит продаж</span>
                </div>

                <div>Рейтиг товара:
                    <span class="starts">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </span>
                </div>

                <div class="content has-text-grey">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Phasellus nec iaculis mauris.
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
                <p>Я самый лучшый товар</p>
            </div>
        </div>

        <hr>
        <a href="/catalog/">Вернуться в каталог</a>
    </div>
</section>

<footer class="footer">
    <div class="content has-text-centered">
        <p>
            <img class="is-32x32" src="/logo.png"> Сайт разработан на Вокркшопе в Skillbox + Qsoft в 2019
        </p>
    </div>
</footer>

<script>
    document.addEventListener('DOMContentLoaded', () => {

        // Get all "navbar-burger" elements
        const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

        // Check if there are any navbar burgers
        if ($navbarBurgers.length > 0) {

            // Add a click event on each of them
            $navbarBurgers.forEach( el => {
                el.addEventListener('click', () => {

                    // Get the target from the "data-target" attribute
                    const target = el.dataset.target;
                    const $target = document.getElementById(target);

                    // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                    el.classList.toggle('is-active');
                    $target.classList.toggle('is-active');

                });
            });
        }

    });
</script>
</body>
</html>
