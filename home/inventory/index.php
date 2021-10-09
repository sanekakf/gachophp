<?php $name = $_GET["name"];?>
<?php 
if ($_COOKIE['user'] != '')
{
  require_once "../../func/func.php";
  fetchInv($_COOKIE['user'], $name);
}
else {
    header("Location: /login");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$name?></title>
    <?php require "../../htmls/styles.php" ?>
</head>
<body>
<div class=" container py-3">
    <?php require "../../htmls/header.php" ?>
    
    <?php if ($name=='Руководство по Dungeon'){
        require "../inventory/tales/dng.php";
    } elseif ($name == 'Cumпот Бараша') {
        require "../inventory/items/cum.php";
    } else {
        echo "<h1> В разработке </h1>";
    }

    ?>
    
    <?php require "../../htmls/footer.php" ?>
</div>
</body>
</html>