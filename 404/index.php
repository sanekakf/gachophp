<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404</title>
    <?php require "../htmls/styles.php" ?>
</head>
<body>
<div class=" container py-3"
<?php require "../htmls/header.php" ?>

<div class="container fw-bold ms-5 ">
    <h1>Страница не найдена</h1>
    <br>
    <?php if ($_COOKIE['user'] == ''): ?>
    <a href="/" class="btn btn-primary">Вернуться на главную страницу</a>
    <?php else: ?>
    <a href="/home" class="btn btn-primary">Вернуться домой</a>
    <?php endif; ?>
</div>

<?php require "../htmls/footer.php" ?>
</body>
</html>