<?php
require_once 'config/connect.php';
$goods_id = $_GET['id'];
$good = mysqli_query($connect, "SELECT * FROM `goods` WHERE `id` = '$goods_id'");
$good = mysqli_fetch_assoc($good);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>Обновить товар</title>
</head>
<body class="container">
    
<h2>Обновить товар</h2>
<form action="vendor/update.php" method="POST">
    <input type="hidden" name="id" value="<?= $goods_id ?>" class="form-control">
    <p>Название</p>
    <input type="text" name="title" value="<?= $good['title'] ?>" class="form-control">
    <p>Описание</p>
    <textarea name="description" class="form-control"><?= $good['description'] ?></textarea>
    <p>Цена</p>
    <input type="number" name="price" value="<?= $good['price'] ?>" class="form-control">
    <button type="submit" class="btn btn-primary">Обновить</button>
</form>

</body>
</html>

