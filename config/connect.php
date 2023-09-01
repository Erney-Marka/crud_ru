<?php
$connect = mysqli_connect('127.0.0.1', 'root', 'root', 'test_crud');  //соединение с базой данных
if(!$connect) {
    die('Error');
}