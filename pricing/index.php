<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gacho Shop</title>
    <?php require "../htmls/styles.php" ?>
</head>
<body>
<div class=" container py-3"
<?php require "../htmls/header.php" ?>
    
    <?php
    require "../info.php";
    $conn = new PDO($dsn);
    $res = $conn->query("SELECT * FROM production WHERE category = 'tovar' ");
    $tovar = $res->fetchAll(PDO::FETCH_ASSOC);
    $res = $conn->query("SELECT * FROM production WHERE category = 'cars' ");
    $car = $res->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal">Наши товары</h1>
      <p class="fs-5 text-muted">Наша компания предоставляет лучшие товары по <span style="font-family: 'Roboto Mono', monospace;">Гачи</span> даже тогда, когда сам Billy пользовался нами. Гарантия качества обеспечена</p>
    </div>
    <main>
  <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
    <?php for($i=0; $i<count($tovar); $i++ ): ?>
    <div class="col">

        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal"><?= $tovar[$i]['name'] ?></h4>
          </div>
          <img src="<?= $tovar[$i]['avatarUrl']?>" class="card-img-top" alt="Start Bondage">
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$<?= $tovar[$i]['price']?><small class="text-muted fw-light">/<?= $tovar[$i]['long']?></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <?= $tovar[$i]['zametki'] ?>
            </ul>
            <a href='/pricing/product?name=<?= $tovar[$i]['name']?>' class="w-100 btn btn-lg btn-outline-primary">Купить</a>

          </div>
        </div>

      </div>
<?php endfor; ?>
  </div>
  <hr>
  <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal">Топ Машинки</h1>
    </div>
  <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
    <?php for($i=0; $i<count($car); $i++): ?>
    <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal"><?= $car[$i]['name']?></h4>
          </div>
          <img src="<?= $car[$i]['avatarUrl']?>" class="card-img-top" alt="Start Bondage">
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$<?= $car[$i]['price']?><small class="text-muted fw-light">/<?=$car[$i]['long']?></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <?= $car[$i]['zametki']?>
            </ul>
            <a href="/pricing/product?name=<?=$car[$i]['name']?>" class="w-100 btn btn-lg btn-outline-primary">Купить</a>

          </div>
        </div>

      </div>
<?php endfor; ?>
  </div>
</main>
    
<?php require "../htmls/footer.php" ?>
</div>
</body>
</html>