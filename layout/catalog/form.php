<section class="section">
    <div class="container">

        <h1 class="title"><?=$title ?? ''?></h1>

        <?php if (! empty($errors)) {?>
            <div class="notification is-danger">
                <?php foreach ($errors as $error) {?>
                    <p><?=$error?></p>
                <?php }?>
            </div>
        <?php }?>

        <?php if ($success) {?>
            <div class="notification is-success">
                <?=$successMessage ?? 'Успешно'?>
            </div>
        <?php }?>

        <form action="" method="post">

            <input hidden name="id" value="<?=$product['id'] ?? ''?>">

            <div class="field">
                <label class="label">Название *</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Название товара"
                           name="name"
                           value="<?=htmlspecialchars($_POST['name'] ?? ($product['name'] ?? ''))?>"
                    >
                </div>
            </div>
            <div class="field">
                <label class="label">Краткое описание *</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Краткое описание"
                           name="preview"
                           value="<?=htmlspecialchars($_POST['preview'] ?? ($product['preview'] ?? ''))?>"
                    >
                </div>
            </div>

            <div class="field">
                <label class="label">Описание *</label>
                <div class="control">
                    <textarea class="textarea" placeholder="Введите описание товара"
                              name="description"
                    ><?=htmlspecialchars($_POST['description'] ?? ($product['description'] ?? ''))?></textarea>
                </div>
            </div>

            <div class="field">
                <label class="label">Рейтинг</label>
                <div class="control">
                    <div class="select">
                        <select name="rating">
                            <?php for ($i = 0; $i <= 5; $i++) {?>
                                <option <?=($_POST['rating'] ?? ($product['rating'] ?? 0)) == $i ? 'selected' : ''?> value="<?=$i?>"><?=$i?></option>
                            <?php }?>
                        </select>
                    </div>
                </div>
            </div>

            <div class="field">
                <div class="control">
                    <label class="checkbox">
                        <input type="checkbox" name="new" <?=isset($_POST['new']) || (empty($_POST) && ($product['new'] ?? false)) ? 'checked' : ''?>> Новинка
                    </label>
                </div>
            </div>

            <div class="field">
                <div class="control">
                    <label class="checkbox">
                        <input type="checkbox" name="sale" <?=isset($_POST['sale']) || (empty($_POST) && ($product['sale'] ?? false)) ? 'checked' : ''?>> Распродажа
                    </label>
                </div>
            </div>

            <div class="field">
                <div class="control">
                    <label class="checkbox">
                        <input type="checkbox" name="hit" <?=isset($_POST['hit']) || (empty($_POST) && ($product['hit'] ?? false)) ? 'checked' : ''?>> Хит продаж
                    </label>
                </div>
            </div>


            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link"><?=$buttonText ?? 'Добавить'?></button>
                </div>
            </div>

        </form>


    </div>
</section>