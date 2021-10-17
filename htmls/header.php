<?php 
$db = "df043ppajn3au9";
$host = "ec2-54-170-163-224.eu-west-1.compute.amazonaws.com";
$username = "lfcjpjxpmcfqxi";
$password = "70ec9d90f402e4102fb1ea1d8699a2a0c232034016d6edacd6d681093a20772b";

$dsn = "pgsql:host=$host;port=5432;dbname=$db;user=$username;password=$password";
$conn = new PDO($dsn);
$username = $_COOKIE['user'];
$res = $conn->query("SELECT * FROM users WHERE login = '$username'");
$user = $res->fetch(PDO::FETCH_ASSOC);
?>
<header>
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
              <title>Gacho</title>
              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
              <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
          </svg>
        <span class="fs-4">Gacho</span>


      </a>

      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
          <div class="dropdown me-3 py-2">
            <a role="button" class="dropdown-toggle text-dark text-decoration-none" type="button" id="dp" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-info-circle" aria-hidden="true"></i>About Us
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><h6 class="dropdown-header">Gacho Help</h6></li>
                <li><a class="dropdown-item" href="/about"><i class="bi bi-question-lg"></i>О нас</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><h6 class="dropdown-header">Партнерства</h6></li>
                <li><a class="dropdown-item link-danger" href="/partnerships"><i class="bi bi-shield-fill-check"></i>Партнеры</a></li>
                <?php if ($user['admin']):?>
                <li><a class="dropdown-item link-info" href="/partnerships/add"><i class="bi bi-pencil"></i>Заключить контракт</a></li>
                  <?php endif; ?>
            </ul>
        </div>
        <a class="me-3 py-2 text-dark text-decoration-none" href="/pricing"><i class="bi bi-currency-dollar"></i>Цены на bondage</a>
      </nav>
        <?php if($_COOKIE['user'] != ''): ?>
          
        <div class="dropdown">
            <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://img.icons8.com/nolan/64/gachi.png" alt="I"/> <?= $user['login'] ?>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="/home">Домой в Gym</a></li>
                <li><a class="dropdown-item disabled"><i class="fa fa-address-card-o link-info" aria-hidden="true"></i> В разработке...</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="/logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Выйти из аккаунта</a></li>
            </ul>
        </div>
        <?php else: ?>
        <a class="btn btn-outline-primary" href="/login"><i class="fa fa-sign-in" aria-hidden="true"></i>Войти</a>
        <?php endif; ?>

    </div>

    
  </header>