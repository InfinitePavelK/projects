<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Cafe</title>
</head>

<body>
    <?php require_once('header.php');?>
    <main>
        <div class="content-dark">
            <div class="register">
                <form action="functions.php" method="POST" class="auth-reg">
                    <h2>РЕГИСТРАЦИЯ НОВОГО ПОЛЬЗОВАТЕЛЯ</h2>
                    <label for="usernumber">Введите номер телефона:</label>
                    <div>
                        <img src="images/input2.png" alt="">
                        <input type="text" id="usernumber" name="usernumber" class="phone" placeholder="+7(900) 000-00-00">
                    </div>
                    <label for="username">Введите Ваше имя:</label>
                    <div>
                        <img src="images/input2.png" alt="">
                        <input type="text" id="username" name="username" placeholder="Иван">
                    </div>
                    <label for="userpass1">Придумайте пароль:</label>
                    <div>
                        <img src="images/input1.png" alt="">
                        <input type="password" id="userpass1" name="userpass1" placeholder="·······">
                    </div>
                    <label for="userpass2">Повторите пароль:</label>
                    <div>
                        <img src="images/input1.png" alt="">
                        <input type="password" id="userpass2" name="userpass2" placeholder="·······">
                    </div>
                    <button name="register_button" type="submit">ЗАРЕГИСТРИРОВАТЬСЯ</button>
                </form>
            </div>
        </div>
    </main>
    <?php require_once('footer.php');?>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.js" type="text/javascript"></script>
    <script>
        $(".phone").mask("+7(999)999-99-99");
    </script>
</body>

</html>