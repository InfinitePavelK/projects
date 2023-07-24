<?php

    session_start();
    require_once 'connect.php';
    
    $login = $_POST['usernumber'];
    $name = $_POST['username'];
    $password = $_POST['userpass1'];
    $password_confirm = $_POST['userpass2'];

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `phone` = '$login'");
    if (mysqli_num_rows($check_user) > 0) {
        $_SESSION['message'] = 'user exists';            
        header('Location: ../index.php');
    } else if ($password === $password_confirm) {    
        $password = md5($password);
        mysqli_query($connect, "INSERT INTO `users` (`id`, `phone`, `password`, `value`, `name`) VALUES (NULL, '$login', '$password', 50, '$name')");

        $_SESSION['message'] = 'reg ok';
        header('Location: ../index.php');


    } else {
        $_SESSION['message'] = 'password error';
        header('Location: ../register.php');
    }

?>
