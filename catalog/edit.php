<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/layout/header.php';

$product = getProduct($_GET['id']);

$errors = [];
$success = false;
if (! empty($_POST)) {

    $name = trim($_POST['name']);
    $preview = trim($_POST['preview']);
    $description = trim($_POST['description']);

    if (empty($name)) {
        $errors[] = 'Не введено название';
    }

    if (empty($preview)) {
        $errors[] = 'Не введено краткое описание';
    }


    if (empty($description)) {
        $errors[] = 'Не введено описание товара';
    }

    if (empty($errors)) {
        updateProduct((int)$_POST['id'], $name, $preview, '', $description, (int)$_POST['rating'], isset($_POST['sale']), isset($_POST['hit']), isset($_POST['new']));
        $success = true;
    }
}

includeTemplate('catalog/form.php', [
    'product' => $product,
    'buttonText' => 'Обновить',
    'title' => 'Редактирование товара',
    'successMessage' => 'Товар успешно обновлен',
    'success' => $success,
    'errors' => $errors,
]);

require_once $_SERVER['DOCUMENT_ROOT'] . '/layout/footer.php';
