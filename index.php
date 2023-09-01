<?php
require_once 'config/connect.php';

$goods = mysqli_query($connect, "SELECT * FROM `goods`");
$goods = mysqli_fetch_all($goods);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>Товары</title>
</head>

<body class="container">

    <table class="table shadow">
        <tr>
            <th>id</th>
            <th>Название</th>
            <th>Описание</th>
            <th>Цена</th>
            <th>&#9998;</th>
            <th>&#10006;</th>
        </tr>
        <?php foreach ($goods as $item) { ?>
            <tr>
                <td><?= $item[0]; ?></td>
                <td><?= $item[1]; ?></td>
                <td><?= $item[2]; ?></td>
                <td><?= $item[3]; ?></td>
                <td><a href="update.php?id=<?= $item[0]; ?>" class="btn btn-primary">Обновить</a></td>
                <td><a href="vendor/delete.php?id=<?= $item[0]; ?>" class="btn btn-danger">Удалить</a></td>
            </tr>
        <?php } ?>
    </table>

    <h2>Добавить новый товар</h2>
    <form action="vendor/create.php" method="POST">
        <p>Название</p>
        <input type="text" name="title" class="form-control">
        <p>Описание</p>
        <textarea name="description" class="form-control"></textarea>
        <p>Цена</p>
        <input type="number" name="price" class="form-control">
        <button type="submit" class="btn btn-primary">Добавить</button>
    </form>

</body>

</html>