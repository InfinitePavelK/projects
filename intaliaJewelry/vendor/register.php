<?php

    session_start();
    require_once 'connect.php';
    
    $phone = $_POST['userphone'];
    $password = $_POST['userpassword1'];
    $checkpassword = $_POST['userpassword2'];

    if ($password == $checkpassword) {

        $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `phone` = '$phone'");
        if (mysqli_num_rows($check_user) > 0) {
            $_SESSION['message'] = 'User already exists';            
            header('Location: ../login.php');
        } else {    
            $password = md5($password);
            mysqli_query($connect, "INSERT INTO `users` (`phone`, `password`) VALUES ('$phone', '$password')");

            $_SESSION['message'] = 'Reg OK';
            
            $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `phone` = '$phone' AND `password` = '$password'");
            if (mysqli_num_rows($check_user) > 0) {

                $user = mysqli_fetch_assoc($check_user);

                $_SESSION['user'] = [
                    "id" => $user['id'],
                    "phone" => $user['phone']
                ];
                
                $_SESSION['message'] = 'login ok';
                header('Location: ../profile.php');

            } else {
                $_SESSION['message'] = 'Write error';
                header('Location: ../login.php');
            }
        } 
    } else {
        $_SESSION['message'] = 'Password mismatch';
    }

?>
