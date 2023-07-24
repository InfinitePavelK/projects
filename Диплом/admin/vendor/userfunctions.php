<?php

function connectdb() {
    $connect = mysqli_connect('localhost', 'hunters55_csrksu', 'w*uh4ExW', 'hunters55_csrksu');
    mysqli_set_charset($connect, "utf8");
    if (!$connect) {
        die('connection error');
    }

    return $connect;
}

function checkUser() {
    if (!isset($_SESSION['user'])) {
        exit("<meta http-equiv='refresh' content='0; url= /admin/'>");
    }
}

if(isset($_POST['regNewOrderButton'])){
    regNewOrder();
}

if(isset($_POST['logOutUserButton'])){
    logOutUser();
}

if(isset($_POST['logInUserButton'])){
    logInUser();
}

if(isset($_POST['regNewUserButton'])){
    regNewUser();
}

if(isset($_POST['createNewsButton'])){
    createNews();
}

if(isset($_POST['editNewsButton'])){
    editNews();
}

if(isset($_GET['news-id']) && isset($_GET['action']) && $_GET['action'] == 'delete'){
    deleteNews();
}

if(isset($_GET['user']) && isset($_GET['action']) && $_GET['action'] == 'delete') {
    deleteUser();
}

if(isset($_GET['order-id']) && isset($_GET['action']) && $_GET['action'] == 'delete') {
    deleteOrder();
}

if(isset($_POST['user-update'])) {
    updateUser();
}

if(isset($_POST['order-update'])) {
    updateOrder();
}


function regNewUser() {
    $connect = connectdb();
    
    $userLogin = $_POST['userLogin'];
    $userSurname = $_POST['userSurname'];
    $userName = $_POST['userName'];
    $userPassword = $_POST['userPassword'];
    $userPhone = $_POST['userPhone'];
    $userEmail = $_POST['userEmail'];
    $userType = $_POST['userType'];

    $checkUser = mysqli_query($connect, "SELECT * FROM `users` WHERE `username` = '$userLogin'");
    if (mysqli_num_rows($checkUser) > 0) {
        die('Пользователь уже зарегистрирован');
    } else {
        $userPassword = md5($userPassword);
        $sqlInsert = "INSERT INTO `users` (`username`, `password`, `surname`, `name`, `phone`, `email`, `type`) VALUES ('$userLogin', '$userPassword', '$userSurname', '$userName', '$userPhone', '$userEmail', '$userType')";        
        $insertUser = mysqli_query($connect, $sqlInsert);
        $checkUser = mysqli_query($connect, "SELECT * FROM `users` WHERE `username` = '$userLogin' AND `password` = '$userPassword'");
        if (mysqli_num_rows($checkUser) > 0) {
            header("Location: /admin/users/");
        } else {
            die('Ошибка записи');
        }
    } 
}

function logInUser() {
    $connect = connectdb();

    $userLogin = $_POST['userLogin'];
    $userPassword = md5($_POST['userPassword']);
    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `username` = '$userLogin' AND `password` = '$userPassword'");
    if (mysqli_num_rows($check_user) > 0) {
        $user = mysqli_fetch_assoc($check_user);
        session_start();
        $_SESSION['user'] = [
            "userLogin" => $user['username'],
            "userType" => $user['type'],
        ];
        header("Location: /admin/users/");
    } else {
        
    }
}

function updateOrder() {
    $connect = connectdb();

    $orderId = $_POST['orderId'];
    $customerName = $_POST['customerName'];
    $customerSurname = $_POST['customerSurname'];
    $customerPhone = $_POST['customerPhone'];
    $customerEmail = $_POST['customerEmail'];
    $orderType = $_POST['orderType'];
    $orderComment = $_POST['orderComment'];
    $sql = "UPDATE `orders` SET `customer-name` = '$customerName', `customer-surname` = '$customerSurname', `customer-phone` = '$customerPhone', `customer-email` = '$customerEmail',`comment` = '$orderComment' ,`order-type` = '$orderType' WHERE `id` = '$orderId'";

    $sqlResult = mysqli_query($connect, $sql);
    if(!$sqlResult) {
        die('При обновлении данных заказа произошла ошибка');
    }
    header("Location: /admin/orders/");
}

function deleteOrder() {
    $connect = connectdb();

    $orderId = $_GET['order-id'];
    $sql = "DELETE FROM `orders` WHERE `id` = '$orderId'";
    $sqlResult = mysqli_query($connect, $sql);
    if(!$sqlResult){
        die('При удалении произошла ошибка');
    }
    header("Location: /admin/orders/");
}

function regNewOrder() {
    $connect = connectdb();

    $orderId = date("YmdHis");
    $customerName = $_POST['customerName'];
    $customerSurname = $_POST['customerSurname'];
    $customerPhone = $_POST['customerPhone'];
    $customerEmail = $_POST['customerEmail'];
    $orderType = $_POST['orderType'];
    $orderComment = $_POST['orderComment'];
    $sql = "INSERT INTO `orders` (`id`, `customer-name`, `customer-surname`, `customer-phone`, `customer-email`, `comment`, `order-type`) VALUES ('$orderId', '$customerName', '$customerSurname', '$customerPhone', '$customerEmail', '$orderComment', '$orderType')";

    $sqlResult = mysqli_query($connect, $sql);
    if(!$sqlResult) {
        die('При добавлении заказа произошла ошибка');
    }
    header("Location: /admin/orders/");
}

function getAllUsers() {
    $connect = connectdb();
    $result = mysqli_query($connect, "SELECT * FROM `users` ORDER BY FIELD(`type`, 'editor'), FIELD(`type`, 'manager')");
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $users;
}

function getAllOrders() {
    $connect = connectdb();
    $sqlResult = mysqli_query($connect, "SELECT * FROM `orders` ORDER BY FIELD(`order-type`, 'done'), FIELD(`order-type`, 'in-progress')");
    $orders = mysqli_fetch_all($sqlResult, MYSQLI_ASSOC);
    return $orders;
}

function getAllWaitingOrders() {
    $connect = connectdb();
    $sql = "SELECT * FROM `orders` WHERE `order-type` = 'waiting'";
    $sqlResult = mysqli_query($connect, $sql);
    if(!$sqlResult){
        die('При запросе произошла ошибка');
    }
    $rowsCount = mysqli_num_rows($sqlResult);
    return $rowsCount;
}

function getAllInProgressOrders() {
    $connect = connectdb();
    $sql = "SELECT * FROM `orders` WHERE `order-type` = 'in-progress'";
    $sqlResult = mysqli_query($connect, $sql);
    if(!$sqlResult){
        die('При запросе произошла ошибка');
    }
    $rowsCount = mysqli_num_rows($sqlResult);
    return $rowsCount;
}

function getUserType($type) {
    $userTypes = [
        "admin" => "Администратор",
        "manager" => "Менеджер",
        "editor" => "Редактор",
    ];

    return $userTypes[$type];
}

function getOrderType($type){
    $orderTypes = [
        "waiting" => "Ожидает звонка",
        "in-progress" => "В процессе",
        "done" => "Завершен",
    ];

    return $orderTypes[$type];
}

function logOutUser(){
    session_start();
    unset($_SESSION['user']);
    header('Location: /admin/');
}

function createNews() {
    $newsTitle = $_POST['news-title'];
    $newsSubtitle = $_POST['news-subtitle'];
    $newsText = $_POST['news-text'];
    if (isset($_FILES['news-image'])) {
        $newsImage = $_FILES['news-image'];     
        // Получаем нужные элементы массива "image"
        $fileTmpName = $newsImage['tmp_name'];
        $newsImageFormat = '.' . explode('.', $newsImage['name'])[1];
        $errorCode = $newsImage['error'];
        // Проверим на ошибки
        if ($errorCode !== UPLOAD_ERR_OK || !is_uploaded_file($fileTmpName)) {
            // Массив с названиями ошибок
            $errorMessages = [
                UPLOAD_ERR_INI_SIZE   => 'Размер файла превысил значение upload_max_filesize в конфигурации PHP.',
                UPLOAD_ERR_FORM_SIZE  => 'Размер загружаемого файла превысил значение MAX_FILE_SIZE в HTML-форме.',
                UPLOAD_ERR_PARTIAL    => 'Загружаемый файл был получен только частично.',
                UPLOAD_ERR_NO_FILE    => 'Файл не был загружен.',
                UPLOAD_ERR_NO_TMP_DIR => 'Отсутствует временная папка.',
                UPLOAD_ERR_CANT_WRITE => 'Не удалось записать файл на диск.',
                UPLOAD_ERR_EXTENSION  => 'PHP-расширение остановило загрузку файла.',
            ];
            // Зададим неизвестную ошибку
            $unknownMessage = 'При загрузке файла произошла неизвестная ошибка.';
            // Если в массиве нет кода ошибки, скажем, что ошибка неизвестна
            $outputMessage = isset($errorMessages[$errorCode]) ? $errorMessages[$errorCode] : $unknownMessage;
            // Выведем название ошибки
            die($outputMessage);
        } else {
            // Создадим ресурс FileInfo
            $fi = finfo_open(FILEINFO_MIME_TYPE);
            
            // Получим MIME-тип
            $mime = (string) finfo_file($fi, $fileTmpName);
            
            // Проверим ключевое слово image (image/jpeg, image/png и т. д.)
            if (strpos($mime, 'image') === false) die('Можно загружать только изображения.');

            $name = date("YHmids") . $newsImageFormat;
            $path = realpath('../img/upload');
            $path = $path . '/' . $name;
            if (!move_uploaded_file($fileTmpName, $path)) {
                die('При записи изображения на диск произошла ошибка.');
            }
            $currentdate = date("Y-m-d H:i:s");
            $connect = connectdb();
            $sqlInsert = "INSERT INTO `news` (`title`, `subtitle`, `text`, `imagename`, `date`) VALUES ('$newsTitle', '$newsSubtitle', '$newsText', '$name', '$currentdate')";        
            $insertNews = mysqli_query($connect, $sqlInsert);
            $checkNews = mysqli_query($connect, "SELECT * FROM `news` WHERE `title` = '$newsTitle'");
            if (mysqli_num_rows($checkNews) > 0) {
                $_SESSION['message-success'] = 'Новость добавлена.';
                header("Location: /admin/news/");
            } else {
                $_SESSION['message-error'] = 'Ошибка записи.';
            }
            
        }
    }
}

function getNews() {
    $connect = connectdb();
    $sqlGetNews = 'SELECT * FROM `news` ORDER BY id DESC';
    $getNewsArray = mysqli_query($connect, $sqlGetNews);
    $getNewsAssoc = mysqli_fetch_assoc($getNewsArray);
    $newsArray = array();
    while ($getNewsAssoc != null) {
        $newsArray[$getNewsAssoc['id']] = [
            'title' => $getNewsAssoc['title'],
            'subtitle' => $getNewsAssoc['subtitle'],
            'text' => $getNewsAssoc['text'],
            'imageName' => $getNewsAssoc['imagename'],
            'date' => $getNewsAssoc['date']
        ];
        $getNewsAssoc = mysqli_fetch_assoc($getNewsArray);
    }
    return $newsArray;
}

function editNewsGetAssoc($newsId) {
    $connect = connectdb();
    $sql = "SELECT * FROM `news` WHERE `id` = '$newsId'";
    $getNewsArray = mysqli_query($connect, $sql);
    $getNewsAssoc = mysqli_fetch_assoc($getNewsArray);
    return $getNewsAssoc;
}

function editNews() {
    $newsTitle = $_POST['news-title'];
    $newsSubtitle = $_POST['news-subtitle'];
    $newsText = $_POST['news-text'];
    $newsId = $_POST['news-id'];
    $currentdate = date("Y-m-d H:i:s");
    $connect = connectdb();
    if(isset($_FILES['news-image'])) {
        $newsImage = $_FILES['news-image'];     
        // Получаем нужные элементы массива "image"
        $fileTmpName = $newsImage['tmp_name'];
        $newsImageFormat = '.' . explode('.', $newsImage['name'])[1];
        $errorCode = $newsImage['error'];
        // Проверим на ошибки
        if ($errorCode !== UPLOAD_ERR_OK || !is_uploaded_file($fileTmpName)) {
            // Массив с названиями ошибок
            $errorMessages = [
                UPLOAD_ERR_INI_SIZE   => 'Размер файла превысил значение upload_max_filesize в конфигурации PHP.',
                UPLOAD_ERR_FORM_SIZE  => 'Размер загружаемого файла превысил значение MAX_FILE_SIZE в HTML-форме.',
                UPLOAD_ERR_PARTIAL    => 'Загружаемый файл был получен только частично.',
                UPLOAD_ERR_NO_FILE    => 'Файл не был загружен.',
                UPLOAD_ERR_NO_TMP_DIR => 'Отсутствует временная папка.',
                UPLOAD_ERR_CANT_WRITE => 'Не удалось записать файл на диск.',
                UPLOAD_ERR_EXTENSION  => 'PHP-расширение остановило загрузку файла.',
            ];
            // Зададим неизвестную ошибку
            $unknownMessage = 'При загрузке файла произошла неизвестная ошибка.';
            // Если в массиве нет кода ошибки, скажем, что ошибка неизвестна
            $outputMessage = isset($errorMessages[$errorCode]) ? $errorMessages[$errorCode] : $unknownMessage;
            // Выведем название ошибки
            die($outputMessage);
        } else {
            // Создадим ресурс FileInfo
            $fi = finfo_open(FILEINFO_MIME_TYPE);
            
            // Получим MIME-тип
            $mime = (string) finfo_file($fi, $fileTmpName);
            
            // Проверим ключевое слово image (image/jpeg, image/png и т. д.)
            if (strpos($mime, 'image') === false) die('Можно загружать только изображения.');

            $name = date("YHmids") . $newsImageFormat;
            $path = realpath('../img/upload');
            $path = $path . '/' . $name;
            if (!move_uploaded_file($fileTmpName, $path)) {
                die('При записи изображения на диск произошла ошибка.');
            }
            $sqlUpdate = "UPDATE `news` SET `title` = '$newsTitle', `subtitle` = '$newsSubtitle', `text` = '$newsText', `imagename` = '$name', `date` = '$currentdate' WHERE `id` = '$newsId'";
            $updateNews = mysqli_query($connect, $sqlUpdate);
            $checkNews = mysqli_query($connect, "SELECT * FROM `news` WHERE `title` = '$newsTitle'");
            if (mysqli_num_rows($checkNews) > 0) {
                $_SESSION['message-success'] = 'Новость обновлена.';
                header("Location: /admin/news/");
            } else {
                $_SESSION['message-error'] = 'Ошибка записи.';
            }
        }
    } else {
        $sqlUpdate = "UPDATE `news` SET `title` = '$newsTitle', `subtitle` = '$newsSubtitle', `text` = '$newsText', `date` = '$currentdate' WHERE `id` = '$newsId'";
        $updateNews = mysqli_query($connect, $sqlUpdate);
        $checkNews = mysqli_query($connect, "SELECT * FROM `news` WHERE `title` = '$newsTitle'");
        if (mysqli_num_rows($checkNews) > 0) {
            $_SESSION['message-success'] = 'Новость добавлена.';
            header("Location: /admin/news/");
        } else {
            $_SESSION['message-error'] = 'Ошибка записи.';
        }
    }
}

function deleteNews() {
    $newsId = $_GET['news-id'];

    $connect = connectdb();
    $sql = "DELETE FROM `news` WHERE `id` = '$newsId'";
    $deleteNews = mysqli_query($connect, $sql);
    if (!$deleteNews) {
        die('При удалении произошла ошибка');
    }
    header('Location: /admin/news/');
}

function deleteUser() {
    $userName = $_GET['user'];
    $connect = connectdb();
    $sql = "DELETE FROM `users` WHERE `username` = '$userName'";
    $sqlresult = mysqli_query($connect, $sql);
    if (!$sqlresult) {
        die('При удалении произошла ошибка');
    }
    header('Location: /admin/users/');
}

function updateUser() {
    $userLogin = $_POST['userLogin'];
    $userSurname = $_POST['userSurname'];
    $userName = $_POST['userName'];
    // $userPassword = md5($_POST['userPassword']);
    $userPhone = $_POST['userPhone'];
    $userEmail = $_POST['userEmail'];
    $userType = $_POST['userType'];


    $connect = connectdb();
    $sql = "UPDATE `users` SET `username` = '$userLogin', `surname` = '$userSurname', `name` = '$userName', `phone` = '$userPhone', `email` = '$userEmail', `type` = '$userType' WHERE `username` = '$userLogin'";
    $sqlresult = mysqli_query($connect, $sql);
    if(!$sqlresult) {
        die('При обновлении пользователя произошла ошибка.');
    }
    header('Location: /admin/users/');
}
?>