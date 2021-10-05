<?php 
$id = rand(0, 9999);
$login = $_POST['login'];
$pass = $_POST['password'];
require "../info.php";
$conn = new PDO($dsn);
$res = $conn->query("INSERT INTO users (id, login, password) VALUES($id, '$login', '$pass')");
setcookie("user", $login, time() + 3600, '/');
header("Location: /")
?>