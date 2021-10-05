<?php 
try {
    setcookie('user', $user['login'], time() - 3600, "/");
    header('Location: /');
} catch (Exception $e){
    echo $e;
};
?>