<?php
$title = $title ?? '';
?>
<section class="section">
    <div class="container">

        <?php if (! empty($title)) {?>
            <div class="content">
                <h1 class="title"><?=$title?></h1>
            </div>
        <?php }?>

        <div class="columns <?=$listClass ?? ''?>">

            <?php foreach ($products as $product) {?>
                <div class="column <?=$itemsClass ?? ''?>">
                    <div class="card">
                        <figure class="image is-4by3">
                            <img src="<?=$product['image'] ?: 'https://bulma.io/images/placeholders/1280x960.png'?>" alt="<?=$product['name']?>">
                        </figure>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4"><?=$product['name']?></p>
                                </div>
                            </div>

                            <div class="content">
                               <?=$product['preview']?>
                                <hr>
                                <a href="/catalog/detail.php?id=<?=$product['id']?>">Подробнее</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
</section>