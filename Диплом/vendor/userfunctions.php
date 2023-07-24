<?php

function connectdb() {
    $connect = mysqli_connect('localhost', 'hunters55_csrksu', 'w*uh4ExW', 'hunters55_csrksu');
    mysqli_set_charset($connect, "utf8");
    if (!$connect) {
        die('connection error');
    }

    return $connect;
}

if(isset($_POST['newOrderFromSite'])) {
    regNewOrderFromSite();
}

function regNewOrderFromSite() {
    $connect = connectdb();

    $orderId = date("YmdHis");
    $customerName = $_POST['customerName'];
    $customerSurname = '';
    $customerPhone = $_POST['customerPhone'];
    $customerEmail = $_POST['customerEmail'];
    $orderType = 'waiting';
    $sql = "INSERT INTO `orders` (`id`, `customer-name`, `customer-surname`, `customer-phone`, `customer-email`, `order-type`) VALUES ('$orderId', '$customerName', '$customerSurname', '$customerPhone', '$customerEmail', '$orderType')";

    $sqlResult = mysqli_query($connect, $sql);
    if(!$sqlResult) {
        die('При добавлении заказа произошла ошибка');
    }
    header("Location: /");
}

function getAllNews() {
    $connect = connectdb();
    $sql = "SELECT * FROM `news` ORDER BY id DESC";
    $sqlResult = mysqli_query($connect, $sql);
    if(!$sqlResult) {
        die('При выполнении запроса произошла ошибка');
    }
    $news = mysqli_fetch_all($sqlResult, MYSQLI_ASSOC);
    return $news;
}

function getFirstFourNews() {
    $connect = connectdb();
    $sql = "SELECT * FROM `news`ORDER BY id DESC LIMIT 4";
    $sqlResult = mysqli_query($connect, $sql);
    if(!$sqlResult) {
        die('При выполнении запроса произошла ошибка');
    }
    $news = mysqli_fetch_all($sqlResult, MYSQLI_ASSOC);
    return $news;
}

function getNewsItem($newsId) {
    $connect = connectdb();
    $sql = "SELECT * FROM `news` WHERE `id` = '$newsId'";
    $getNewsArray = mysqli_query($connect, $sql);
    if(!$getNewsArray){
        die('При выполнении запроса произошла ошибка');
    }
    $getNewsAssoc = mysqli_fetch_assoc($getNewsArray);
    return $getNewsAssoc;
}