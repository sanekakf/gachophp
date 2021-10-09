<?php 
if ($_GET['id'] != '') {
    $error_id = $_GET['id'];
} else {
    $error_id = '';
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error <?= $error_id ?></title>
    <?php require "../htmls/styles.php" ?>
</head>
<body>
<div class=" container py-3">
<?php require "../htmls/header.php" ?>
    
    <?php if ($error_id == '174'): ?>
        <div class="pt-5 text-center display-4 fw-bold">
            Вы ввели неверный Логин или Пароль
        </div>
    <?php elseif ($error_id == '175'): ?>
        <div class="pt-5 text-center display-4 fw-bold">
            Произошла ошибка на сервере
        </div>
    <?php elseif ($error_id == '407'): ?>
        <div class="pt-5 text-center display-4 fw-bold">
            Страница не найдена
        </div>
    <?php elseif ($error_id == '444'): ?>
        <div class="pt-5 text-center display-4 fw-bold">
            У вас нет этого предмета
        </div>
    <?php endif; ?>
    
<?php require "../htmls/footer.php" ?>
</div>
</body>
</html>