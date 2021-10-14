<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gacho-Inc.</title>
    <?php require "../htmls/styles.php" ?>
</head>
<body>
<div class="container py-3">
    <!-- HEADER -->
    <?php require "../htmls/header.php" ?>

    <div class="px-4 pt-5 my-5 text-center border-bottom">
        <h1 class="display-4 fw-bold">Приветствуем</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Мы - <span style="font-family:'Source Code Pro', monospace;">Gacho.Inc</span>, корпорация по изготовлению лучших товаров. Тысячи людей ходят в dungeon с нашими продуктами, ведь лучший латекс и возможность приобрести Gachi-цикл - только у нас!</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                <a href="/pricing" class="btn btn-danger btn-lg px-4 me-sm-3">Цены на товары</a>
                <a href="/about" class="btn btn-outline-info btn-lg px-4 me-sm-3">О нас</a>
            </div>
        </div>
        <div class="overflow-hidden" style="max-height: 30vh;">
            <div class="container px-5">
                <img src="https://i.ytimg.com/vi/w0-u_LgieRk/maxresdefault.jpg" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="700" loading="lazy">
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <?php require "../htmls/footer.php" ?>
</div>
</body>
</html>