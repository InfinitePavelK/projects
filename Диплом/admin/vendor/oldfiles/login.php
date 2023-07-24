<?php
    session_start();
    require_once 'connect.php';

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
    ?>


