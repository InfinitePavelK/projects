<?php

    $connect = mysqli_connect('localhost', 'root', '', 'intalia');
    mysqli_set_charset($connect, "utf8");
    if (!$connect) {
        die('connection error');
    }
?>