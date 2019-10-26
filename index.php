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


<section class="hero is-dark">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">
                Workshop Qsoft + Skillbox - Интернет каталог
            </h1>
            <h2 class="subtitle">
                Добро пожаловать на наш Интернет каталог
            </h2>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">

        <div class="content">
            <h1 class="title">Новости</h1>
        </div>

        <div class="columns">

            <div class="column">
                <div class="card">
                    <div class="card-content">
                        <div class="media">
                            <div class="media-content">
                                <p class="title is-4">Первая новость</p>
                            </div>
                        </div>

                        <div class="content">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Phasellus nec iaculis mauris.
                            <hr>
                            <time datetime="2016-1-1">15 сентября 2019</time>
                            <br>
                            <a href="/news/detail.php?id=1">Читать подробнее</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <div class="card-content">
                        <div class="media">
                            <div class="media-content">
                                <p class="title is-4">Новость 2</p>
                            </div>
                        </div>

                        <div class="content">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Phasellus nec iaculis mauris.
                            <hr>
                            <time datetime="2016-1-1">15 сентября 2019</time>
                            <br>
                            <a href="#">Читать подробнее</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <div class="card-content">
                        <div class="media">
                            <div class="media-content">
                                <p class="title is-4">Новость 3</p>
                            </div>
                        </div>

                        <div class="content">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Phasellus nec iaculis mauris.
                            <hr>
                            <time datetime="2016-1-1">15 сентября 2019</time>
                            <br>
                            <a href="#">Читать подробнее</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="section">
    <div class="container">

        <div class="content">
            <h1 class="title">Топ товары</h1>
        </div>

        <div class="columns">

            <div class="column">
                <div class="card">
                    <figure class="image is-4by3">
                        <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Товар 1">
                    </figure>
                    <div class="card-content">
                        <div class="media">
                            <div class="media-content">
                                <p class="title is-4">Товар 1</p>
                            </div>
                        </div>

                        <div class="content">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Phasellus nec iaculis mauris.
                            <hr>
                            <a href="/catalog/detail.php?id=1">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <figure class="image is-4by3">
                        <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Товар 2">
                    </figure>
                    <div class="card-content">
                        <div class="media">
                            <div class="media-content">
                                <p class="title is-4">Товар 2</p>
                            </div>
                        </div>

                        <div class="content">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Phasellus nec iaculis mauris.
                            <hr>
                            <a href="#">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <figure class="image is-4by3">
                        <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Товар 3">
                    </figure>
                    <div class="card-content">
                        <div class="media">
                            <div class="media-content">
                                <p class="title is-4">Товар 3</p>
                            </div>
                        </div>

                        <div class="content">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Phasellus nec iaculis mauris.
                            <hr>
                            <a href="#">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
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