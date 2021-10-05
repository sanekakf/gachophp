<?php 
if ($_COOKIE['user'] == ''){
    header("Location: /");
}
else {
    $user = $_COOKIE['user'];
    require "../info.php";
    $conn = new PDO($dsn);
    $result = $conn->query("SELECT * FROM users WHERE login = '$user'");
    $user = $result->fetch(PDO::FETCH_ASSOC);
};
$citats = array(
    'Устал после gym? Присаживайся и выпей чашечку cum!',
    'Задолбали fucking slaves? Болит рука? Сходи к Jabronies!',
    'Завтра снова в gym, а накопленного cum не хватает? <br> В  нашем магазине есть много cum по выгодным скидкам!',
    'Эти fucking slaves опять порвали твой bondage? Позови Шлёпу на помощь! Он точно отомстит!'
);
$best = array_rand($citats, 1)
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
      </div>
    </div>
  </div>    

<?php require "../htmls/footer.php" ?>
</div>
</body>
</html>