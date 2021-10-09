<?php
function fetchInv($login, $name){
    /**
     * $login -> Пользователь
     * $name -> Предмет поиска
     */
  $db = "df043ppajn3au9";
  $host = "ec2-54-170-163-224.eu-west-1.compute.amazonaws.com";
  $username = "lfcjpjxpmcfqxi";
  $password = "70ec9d90f402e4102fb1ea1d8699a2a0c232034016d6edacd6d681093a20772b";

  $dsn = "pgsql:host=$host;port=5432;dbname=$db;user=$username;password=$password";

  $conn = new PDO($dsn);
  $res = $conn->query("SELECT inv FROM users WHERE login = '$login'");
  $inv = $res->fetchAll(PDO::FETCH_ASSOC);
  $inv = $inv[0]['inv'];
  $search = array('{','}','"');
  $inv = str_replace($search, '', $inv);
  $inv = explode(',', $inv);
  for ($i = 0; $i < count($inv); $i++) {
      if (!in_array($name, $inv)){
          header("Location: /error?id=444");
          exit();
      }
  }
};