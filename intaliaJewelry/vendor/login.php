<?php

    session_start();
    require_once 'connect.php';

    $phone = $_POST['userphone'];
    $password = md5($_POST['userpassword']);

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `phone` = '$phone' AND `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "phone" => $user['phone'],
            "name" => $user['name'],
            "surname" => $user['surname'],
            "city" => $user['city'],
            "email" => $user['email'],
        ];
        
        $_SESSION['message'] = 'login ok';
        header('Location: ../profile.php');

    } else {
        $_SESSION['message'] = 'login error';
        header('Location: ../login.php');
    }
    ?>

<pre>
    <?php
    print_r($check_user);
    print_r($user);
    ?>
</pre>
