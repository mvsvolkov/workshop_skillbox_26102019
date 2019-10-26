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

        <h1 class="title">Редактирование товара</h1>

        <div class="notification is-danger">
            <p>Не введено название</p>
            <p>Не введено краткое описание</p>
            <p>Не введено описание</p>
        </div>
        <div class="notification is-success">
            Товар успешно обновлен
        </div>

        <form action="" method="post">

            <input hidden name="id" value="">

            <div class="field">
                <label class="label">Название *</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Название товара" name="name" value="Товар 1">
                </div>
            </div>
            <div class="field">
                <label class="label">Краткое описание *</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Краткое описание" name="excerpt" value="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis mauris.">
                </div>
            </div>

            <div class="field">
                <label class="label">Описание *</label>
                <div class="control">
                    <textarea class="textarea" placeholder="Введите описание товара" name="body">Я самый лучшый товар</textarea>
                </div>
            </div>

            <div class="field">
                <label class="label">Важность</label>
                <div class="control">
                    <div class="select">
                        <select name="rating">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option selected value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="field">
                <div class="control">
                    <label class="checkbox">
                        <input type="checkbox" checked name="isNew"> Новинка
                    </label>
                </div>
            </div>

            <div class="field">
                <div class="control">
                    <label class="checkbox">
                        <input type="checkbox" checked name="isSale"> Распродажа
                    </label>
                </div>
            </div>

            <div class="field">
                <div class="control">
                    <label class="checkbox">
                        <input type="checkbox" name="isHit"> Хит продаж
                    </label>
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link">Обновить</button>
                </div>
            </div>

        </form>


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
