<?php
    $mail = $_POST['email-at'];
    $im = $_POST['name-at'];
    $mess = $_POST['message-at'];
    $link = mysqli_connect('localhost', 'a0670094_webtech', 'zebra145', 'a0670094_webtech') or die('Ошибка! База данных не найдена!');
    $query = "INSERT INTO `zap` (`id`, `name`, `mail`, `message`) VALUES (NULL, '".$im."', '".$mail."', '".$mess."')";
    mysqli_query($link, 'SET NAMES utf8mb4'); 
    $result = mysqli_query($link, $query) or die("Ошибка! Не удалось отправить отзыв!");
    echo "Отправка выполнена успешно!";
?>