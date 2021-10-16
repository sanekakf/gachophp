<?php 
if ($_COOKIE['user'] == ''){
    header('Location: /login');
    exit();
} else{
    $name = $_COOKIE['user'];
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gacho Contract</title>
    <?php require "../../htmls/styles.php";
     ?>
</head>
<body>
<div class=" container py-3">
<?php require "../../htmls/header.php" ?>
    
<form method="post" action="add.php">
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
        <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
        <h1 class="display-4 fw-bold lh-1">
            <div class="mb-3">
             <label for="exampleFormControlTextarea1" class="form-label">Имя</label>
                <input class="form-control" id="exampleFormControlTextarea1" name="name" >
            </div>
        </h1>
          <h2>
              <div class="row g-3">
                  <div>Описание</div>
                  <div class="col">
                      <textarea class="form-control" id="price" name="description" rows="2"></textarea>
                  </div>
              </div>
          </h2>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Пароль от контракта</label>
            <input type="password" class="form-control" name="password" id="exampleFormControlInput1" placeholder="12345">
        </div>
          <hr>
            <div class="row g-3">
                  <div>Ссылка на ваш сайт, сообщество и т.п.</div>
                  <div class="col">
                      <input type="text" class="form-control" id="url" placeholder="Необязательно" name="url">
                  </div>
              </div>
            <br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
          <input type="submit" class="btn btn-outline-dark btn-lg px-4 me-md-2 fw-bold" value="Создать">
        </div>
      </div>
    </div>

</form>
    
<?php require "../../htmls/footer.php" ?>
</div>
</body>
</html>