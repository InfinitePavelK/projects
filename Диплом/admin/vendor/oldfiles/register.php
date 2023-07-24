<?php
    require_once 'connect.php';
    
    $userLogin = $_POST['userLogin'];
    $userSurname = $_POST['userSurname'];
    $userName = $_POST['userName'];
    $userPassword = $_POST['userPassword'];
    $userPhone = $_POST['userPhone'];
    $userEmail = $_POST['userEmail'];
    $userType = $_POST['userType'];

    $checkUser = mysqli_query($connect, "SELECT * FROM `users` WHERE `username` = '$userLogin'");
    if (mysqli_num_rows($checkUser) > 0) {
        $_SESSION['message-error'] = 'Имя пользователя уже занято.';            
        header('Location: /admin/users/');
    } else {
        $userPassword = md5($userPassword);
        $sqlInsert = "INSERT INTO `users` (`username`, `password`, `surname`, `name`, `phone`, `email`, `type`) VALUES ('$userLogin', '$userPassword', '$userSurname', '$userName', '$userPhone', '$userEmail', '$userType')";
        mysqli_query($connect, $sqlInsert);
        
        $checkUser = mysqli_query($connect, "SELECT * FROM `users` WHERE `username` = '$userLogin' AND `password` = '$password'");
        if (mysqli_num_rows($checkUser) > 0) {
            $_SESSION['message-success'] = 'Пользователь успешно добавлен.'; 
            header('Location: /admin/users/');
        } else {
            $_SESSION['message-error'] = 'Ошибка записи.';
            header('Location: /admin/users/');
        }
    } 

?>
