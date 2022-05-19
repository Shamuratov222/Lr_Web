<?php
    $kol = $_POST['kol'];
    $tek = $_POST['tek'];
    $news = [];
    $link = mysqli_connect('localhost', 'a0670094_webtech', 'zebra145') or die('Ошибка! База данных не найдена!');
    $query = 'SELECT * FROM news LIMIT '.$tek.', '.$kol;
    mysqli_select_db($link,"a0670094_webtech") or die("Нет такой таблицы!");
    mysqli_query($link, 'SET NAMES utf8mb4'); 
    $result = mysqli_query($link, $query) or die("Ошибка! Таблица не найдена!");
    while ($row = $result->fetch_assoc()) {
        $news[] = $row;
    }
    echo json_encode($news, JSON_UNESCAPED_UNICODE);

?>