<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/layout/header.php';

$title = 'Workshop Qsoft + Skillbox - Интернет каталог';

//$title = $title . ' - ' . date('Y-m-d H:m:s');
$title .= ' ' . date('Y-m-d H:m:s');

?>
<section class="hero is-dark">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">
                <?= $title ?>
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

<?php
includeTemplate('catalog/items.php', [
    'products' => getTop3Products(),
    'title' => 'Топ товары'
]);
?>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/layout/footer.php';
