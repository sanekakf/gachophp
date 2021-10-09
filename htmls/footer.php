<?php 
$db = "df043ppajn3au9";
$host = "ec2-54-170-163-224.eu-west-1.compute.amazonaws.com";
$username = "lfcjpjxpmcfqxi";
$password = "70ec9d90f402e4102fb1ea1d8699a2a0c232034016d6edacd6d681093a20772b";

$dsn = "pgsql:host=$host;port=5432;dbname=$db;user=$username;password=$password";
$conn = new PDO($dsn);
if ($_COOKIE['user'] != ''){
  $login = $_COOKIE['user'];
  $res = $conn->query("SELECT admin FROM users WHERE login = '$login'");
  $admin = $res->fetchAll(PDO::FETCH_ASSOC);
  $admin = $admin[0]['admin'];
}
?>
<footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <img class="mb-2" src="https://pbs.twimg.com/media/De_eVaWWkAATtzN.jpg" alt="" width="150" height="100">
        <small class="d-block mb-3 text-muted">© 2017–2021</small>
      </div>
      <div class="col-6 col-md">
        <h5>Полезные ссылки</h5>
        <ul class="list-unstyled text-small">
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="https://discord.gg/yeWmqAMqa5"><i class="bi bi-discord"></i>Наш сервер в Discord</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none disabled">Приложение Gacho-Inc. (In progress..)</a></li>
        </ul>
      </div>
      <?php if ($admin): ?>
        <div class="col-6 col-md">
            <h5>Утилиты</h5>
            <ul class="list-unstyled list-small">
                <li class="mb1"><a class="link-secondary text-decoration-none" href="/partnerships/add">Заключить партнерства</a></li>
            </ul>
        </div>
        <?php endif; ?>
        <div class="col-6 col-md">
            <h5>Материальные контракты</h5>
            <ul class="list-unstyled list-small">
                <li class="mb1"><a class="link-secondary text-decoration-none" href="/partnerships/info"><i class="bi bi-file-earmark-code"></i>Форма Контракта</a></li>
            </ul>
        </div>
    </div>
  </footer>