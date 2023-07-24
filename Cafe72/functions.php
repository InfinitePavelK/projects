<?php

$connect = mysqli_connect('localhost', 'root', 'root', 'cafe');

function DBConnect() {
    mysqli_set_charset($GLOBALS['connect'], "utf8");
    if (!$GLOBALS['connect']) {
        die('connection error');
    }
}

if(isset($_POST['register_button']))
{
    UserReg();
}

function UserReg() {
    session_start();
    DBConnect();
    $login = $_POST['usernumber'];
    echo($login);
    $name = $_POST['username'];
    echo($name);
    $password = $_POST['userpass1'];
    echo($password);
    $password_confirm = $_POST['userpass2'];
    echo($password_confirm);

    $check_user = mysqli_query($GLOBALS['connect'], "SELECT * FROM `users` WHERE `phone` = '$login'");
    if (mysqli_num_rows($check_user) > 0) {
        $_SESSION['message'] = 'user exists';            
        header('Location: ../index.php');
    } else if ($password === $password_confirm) {    
        $password = md5($password);
        mysqli_query($GLOBALS['connect'], "INSERT INTO `users` (`id`, `phone`, `password`, `value`, `name`) VALUES (NULL, '$login', '$password', 50, '$name')");

        $_SESSION['message'] = 'reg ok';
        header('Location: ../index.php');


    } else {
        $_SESSION['message'] = 'password error';
        header('Location: ../register.php');
    }
}

if(isset($_POST['LogIn_button']))
{
    UserLogIn();
}

function UserLogIn() {
    session_start();
    DBConnect();

    $login = $_POST['usernumber'];
    $password = md5($_POST['userpass']);

    $check_user = mysqli_query($GLOBALS['connect'], "SELECT * FROM `users` WHERE `phone` = '$login' AND `password` = '$password'");
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
}

if(isset($_POST['loguot_button']))
{
    UserLogOut();
}

function UserLogOut() {
    session_start();
    unset($_SESSION['user']);
    header('Location: ../index.php');
}
?>