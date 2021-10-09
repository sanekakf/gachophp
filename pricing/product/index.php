<?php 
$name = $_GET['name'];
require "../../info.php";
$conn = new PDO($dsn);
$res = $conn->query("SELECT * FROM production WHERE name = '$name'");
$tovar = $res -> fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $tovar['name']?></title>
    <?php require "../../htmls/styles.php" ?>
</head>
<body>
<div class=" container py-3">
<?php require "../../htmls/header.php" ?>

<div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center  ">
    <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden rounded-3 border">
        <img class="" src="<?= $tovar['avatarUrl'] ?>" alt="Очень интересная картинка" width="450">
    </div>
    <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
        <h1 class="display-4 fw-bold lh-1"><?= $tovar['name'] ?></h1>
        <p class="lead"><?= $tovar['description'] ?></p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
            <?php if ($tovar['price'] != ''): ?>
            <a type="button" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold"
               href="../buy?name=<?=$tovar['name']?>">Купить <?= $tovar['price'] ?>$</a>
            <?php else: ?>
            <a type="button" class="btn btn-outline-success btn-lg px-4 me-md-2 fw-bold"
               href="../buy?name=<?=$tovar['name']?>">Бесплатно</a>
            <?php endif; ?>

        </div>
    </div>

</div>

<?php require "../../htmls/footer.php" ?>
</div>
</div></body>
</html>