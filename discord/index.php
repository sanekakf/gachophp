<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>G-Discord</title>
    <?php require "../htmls/styles.php" ?>
</head>
<body>
<div class=" container py-3">
    <?php require "../htmls/header.php" ?>

    <div class="px-4 py-5 my-5 text-center border-bottom">
<!--        <img class="d-block mx-auto mb-4" src="https://pbs.twimg.com/media/De_eVaWWkAATtzN.jpg" alt="" width="165" height="110">-->
        <h1 class="display-5 fw-bold me-5">Discord</h1>
        <div class="col-lg-6 mx-auto">
            <?php if($_COOKIE['user'] == ''): ?>
                <p class="lead mb-4">Эй! Boy, не проходи мимо прекрасного место-проживания! Присоединяйся к нашему <a href="" class="btn btn-sm btn-success">Dungeon</a></p>
            <?php else: ?>
                <p class="lead mb-4">Эй! <?= $_COOKIE['user'] ?>, не проходи мимо прекрасного место-проживания! Присоединяйся к нашему <a href="" class="btn btn-sm btn-success">Dungeon</a></p>
            <?php endif; ?>
        </div>
    </div>
    <div class="px-4 py-5 text-center border-bottom">
        <h1>Отзывы</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4"><iframe src="https://discord.com/widget?id=878549296709001267&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe></p>
        </div>
    </div>
    <div class="px-4 py-5 text-center">
        <h2 class="display-4 fw-bold">Предложения</h2>
        <br>
        <a class="btn btn-outline-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
            Контактная информация
        </a>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title mycls" id="offcanvasExampleLabel">Dungeon master ответит вам в течении 10 минут</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div>
                    <h6>Discord</h6>
                    <p><span class="btn-outline-danger">Мистер Клоун#1485</span></p>
                    <br>
                    <h6>Вк</h6>
                    <p><a href='https://vk.com/mrclownin' class=" btn-link">Mr.Clown</a></p>
                </div>
            </div>
        </div>
    </div>

    <?php require "../htmls/footer.php" ?>
</div>
</body>
</html>