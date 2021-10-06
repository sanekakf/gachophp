<?php 
$id = rand(0, 9999);
$login = $_POST['login'];
$pass = $_POST['password'];
require "../info.php";
$conn = new PDO($dsn);
$rs = $conn->query("SELECT * FROM users WHERE login = '$login'");
$s = $rs->fetchAll(PDO::FETCH_ASSOC);
if ($s){
    header("Location: /error/?id=174");
    exit();
}
else {
    $res = $conn->query("INSERT INTO users (id, login, password) VALUES($id, '$login', '$pass')");
    setcookie("user", $login, time() + 3600, '/');
    header("Location: /home");
}
?>
