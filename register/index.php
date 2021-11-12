<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gacho Reg</title>
    <?php require "../htmls/styles.php" ?>
</head>
<body>
<div class=" container py-3">
<?php require "../htmls/header.php" ?>

<div class="container   px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-md-10 mx-auto col-lg-5">
        <h1 >Регистрация нового Jabroni</h1>

        <form action="register.php" method="post" class=" container p-4 p-md-5 border rounded-3 bg-light">
          <div class="row">
            <div class="col">
              <div class=" form-floating mb-3">
                <input class="form-control" id="floatingInput" placeholder="login" name="login">
                <label for="floatingInput">-Логин</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="password" name="password">
                <label for="floatingPassword">-Пароль</label>
              </div>
            </div>
            <div class="col">
              <div class=" form-floating mb-3">
                <input class="form-control" id="floatingInput" placeholder="id" name="id">
                <label for="floatingInput">-Ваш дискорд Id</label>
                <small class="text-muted">Необяз. <a href="https://www.youtube.com/watch?v=ZTYSa799b7Q" class="text-danger">Как узнать ваш Id</a></small>

              </div>
            </div>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Let's Go</button>
        </form>
      </div>
    </div>
  </div>
    
<?php require "../htmls/footer.php" ?>
</div>
</body>
</html>