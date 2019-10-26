<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/layout/header.php';

$product = getProduct((int)$_GET['id']);
?>
<section class="section">
    <div class="container">

        <?php if (empty($product)) {?>
            <div class="notification is-danger">
                <p>Товар не найден</p>
            </div>
        <?php } else {?>


            <div class="columns">
                <div class="column is-one-third">

                    <figure class="image is-4by3">
                        <img src="<?=$product['image'] ?: 'https://bulma.io/images/placeholders/1280x960.png'?>" alt="<?=$product['name']?>">
                    </figure>
                </div>
                <div class="column">
                    <div class="content">
                        <h1 class="title"><?=$product['name']?></h1>
                    </div>

                    <a href="/catalog/edit.php?id=<?=$product['id']?>">Редактировать</a>

                    <?php if ($product['sale'] || $product['hit'] || $product['new']) {?>
                        <div class="tags">
                            <?php if ($product['sale']) {?>
                                <span class="tag is-danger">Распродажа</span>
                            <?php }?>
                            <?php if ($product['hit']) {?>
                                <span class="tag is-warning">Новинка</span>
                            <?php }?>
                            <?php if ($product['new']) {?>
                                <span class="tag is-success">Хит продаж</span>
                            <?php }?>
                        </div>
                    <?php }?>

                    <div>Рейтиг товара:
                        <span class="starts">
                            <?php for ($i = 0; $i < 5; $i++) {?>
                                <i class="<?=$product['rating'] > $i ? 'fas' : 'far'?> fa-star"></i>
                            <?php }?>
                        </span>
                    </div>

                    <div class="content has-text-grey">
                        <?=$product['preview']?>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <?=$product['description']?>
                </div>
            </div>

        <?php } ?>

        <hr>
        <a href="/catalog/">Вернуться в каталог</a>
    </div>
</section>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/layout/footer.php';
