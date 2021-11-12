<?php 
require "../info.php";
$conn = new PDO($dsn);
$res = $conn->query("SELECT * FROM partners");
$partner = $res->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gacho Ships</title>
    <?php require "../htmls/styles.php" ?>
</head>
<body>
<div class=" container py-3">
<?php require "../htmls/header.php" ?>

    <div class="center display-4 fw-bold lh-1 mb-3" >Наши партнеры</div>

    <?php for ($i=0; $i < count($partner); $i++): ?>
    <div class="flex-lg-row-reverse align-items-center g-3 py-3">
        <div class="col-lg-6">
            <?php if($partner[$i]['url'] == ''): ?>
            <?php $link = $partner[$i]['name'] ?>
            <h1 class="display-4 fw-bold lh-1 mb-3"><?= $partner[$i]['name'] ?></h1>
            <?php else: ?>
            <a class="display-4 fw-bold lh-1 mb-3" href="<?= $partner[$i]['url'] ?>"><?= $partner[$i]['name'] ?></a>
            <?php endif; ?>
            <p class="lead"><span style="font-family: 'Roboto Mono', monospace;"> <?= $partner[$i]['description']?></span></p>
        </div>
    </div>
    <?php endfor; ?>
<?php require "../htmls/footer.php" ?>
</div>
</body>
</html>