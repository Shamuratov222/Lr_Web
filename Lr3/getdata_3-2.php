<?php
    $feedback = [];
    $link = mysqli_connect('localhost', 'a0670094_webtech', 'zebra145', 'a0670094_webtech') or die('Ошибка! База данных не найдена!');
    $query = 'SELECT * FROM zap';
    mysqli_query($link, 'SET NAMES utf8mb4'); 
    $result = mysqli_query($link, $query) or die("Ошибка! Таблица не найдена!");
    while ($row = $result->fetch_assoc()) {
        $feedback[] = $row;
    }
    echo json_encode($feedback, JSON_UNESCAPED_UNICODE);
?>
