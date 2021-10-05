<?php 
$name = $_POST['name'];
$description = $_POST['description'];
$pass = $_POST['password'];
$url = $_POST['url'];

try{
require "../../info.php";
$conn = new PDO($dsn);
$res = $conn->query("INSERT INTO partners (name, description, password, url) VALUES('$name','$description', '$pass', '$url')");
if ($res){
    header("Location: /");
}
else{
    echo 'error';
}
} catch (Exception $e){
    echo $e;
}
// print_r($conn->query("SELECT * FROM partners")->fetchAll());
?>