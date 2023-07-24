<?php

    session_start();
    require_once 'connect.php';

    $login = $_POST['usernumber'];
    $password = md5($_POST['userpass']);

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `phone` = '$login' AND `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "phone" => $user['phone'],
            "value" => $user['value'],
            "name" => $user['name']
        ];
        
        $_SESSION['message'] = 'login ok';
        header('Location: ../profile.php');

    } else {
        $_SESSION['message'] = 'login error';
        header('Location: ../index.php');
    }
    ?>

<pre>
    <?php
    print_r($check_user);
    print_r($user);
    ?>
</pre>
