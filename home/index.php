<?php 
if ($_COOKIE['user'] == ''){
    header("Location: /");
    exit();
}

$user = $_COOKIE['user'];
require "../info.php";
$conn = new PDO($dsn);
$result = $conn->query("SELECT * FROM users WHERE login = '$user'");
$user = $result->fetch(PDO::FETCH_ASSOC);
$inv = $user['inv'];
$search = array('{','}','"');
$inv = str_replace($search, '', $inv);
$inv = explode(',', $inv);

$citats = array(
    'Устал после gym? Присаживайся и выпей чашечку cum!',
    'Задолбали fucking slaves? Болит рука? Сходи к Jabronies!',
    'Завтра снова в gym, а накопленного cum не хватает? <br> В  нашем магазине есть много cum по выгодным скидкам!',
    'Эти fucking slaves опять порвали твой bondage? Позови Шлёпу на помощь! Он точно отомстит!'
);
$best = array_rand($citats, 1);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $user['login']?></title>
    <?php require "../htmls/styles.php" ?>
</head>
<body>
<div class=" container py-3"
<?php require "../htmls/header.php" ?>
    
<div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="https://steamuserimages-a.akamaihd.net/ugc/1290793614551278403/0A3A74BCB71732B048F52C5AF6D27B1D4EFEF757/" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="800" height="800" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Приветствуем тебя, <?= $user['login']?></h1>
        <p class="lead"><span style="font-family:'Pacifico', serif">Цитата дня:<br></span><span style="font-family: 'Roboto Mono', monospace;"><?= $citats[$best]?></span></p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <a href="/pricing" class="btn btn-danger btn-lg px-4 me-sm-3 disabled"><span style="font-family:'Source Code Pro', monospace;" title="В разработке...">$BUCKS$</span></a>
          <a href="/logout" class="btn btn-outline-secondary btn-lg px-4 me-sm-3">Выйти с аккаунта</a>
        </div>
          <hr>
          <h1>Ваш инвентарь :</h1>
          <?php if ($user['inv'] != '{}'): ?>

              <div class="row row-cols-1 row-cols-md-2 mb-2 text-center">
              <?php for ($i=0; $i<count($inv); $i++): ?>
                    <?php $res = $conn->query("SELECT * FROM production WHERE name = '$inv[$i]'");
                        $tovar = $res->fetch(PDO::FETCH_ASSOC);
                        ?>
                    <?php if($tovar): ?>
                  <div class="col">

                      <div class="card mb-4 rounded-3 shadow-sm">
                          <div class="card-header py-3">
                              <h4 class="my-0 fw-normal"><?=$tovar['name']?></h4>
                          </div>
                          <img src="<?= $tovar['avatarUrl']?>" class="card-img-top" alt="Start Bondage">
                          <div class="card-body">
                              <a href="/inventory/?name=<?= $tovar['name']?>" class="w-100 btn btn-lg btn-outline-primary">Посмотреть</a>

                          </div>
                      </div>

                  </div>
                  <?php endif; ?>
              <?php endfor; ?>
              </div>
          <?php else: ?>
          <a href="/pricing" class="btn btn-success">Приобретите что-нибудь</a>
          <?php endif; ?>
      </div>
    </div>
  </div>    

<?php require "../htmls/footer.php" ?>
</body>
</html>