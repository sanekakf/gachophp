<?php
//$avatar = $_FILES['avatar'];
//$type = $avatar['type'];
//if(($type != 'image/jpg') && ($type != 'image/png') && ($type != 'image/jpeg')){
//   header("Location: /error?id=155");
//}else{
//    echo "Всё верно";
//}
// Путь загрузки
$path = '../files/avatars/';

// Обработка запроса
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    // Загрузка файла и вывод сообщения
    if (!@copy($_FILES['avatar']['tmp_name'], $path . $_FILES['avatar']['name']))
        echo 'Что-то пошло не так';
    else
        echo 'Загрузка удачна';
}