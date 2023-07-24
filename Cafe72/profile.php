<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
header('content-type: text/html; charset=utf-8');
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
            <div class="profile">
                <div class="about">
                    <h2>Здравствуйте, <?= $_SESSION['user']['name']?>!</h2>
                    <p>ЗДЕСЬ ВЫ МОЖЕТЕ УВИДЕТЬ СВОИ БОНУСЫ!</p>
                    <p><b>5%</b> ОТ КАЖДОЙ ПОКУПКИ В НАШЕЙ КОФЕЙНЕ ПЕРЕХОДЯТ В БОНУСЫ, КОТОРЫМИ МОЖНО ОПЛАТИТЬ ДО <b>100%</b> СТОИМОСТИ ТОВАРА, НА СЕЗОННОЕ КОФЕ - ДО <b>50%</b>. УЧАСТВУЙТЕ В РОЗЫГРЫШАХ И АКЦИЯХ, ЧТОБЫ ПОЛУЧИТЬ БОЛЬШЕ БАЛЛОВ.</p>
                    <form action="functions.php" method="POST">
                    <button type="submit" name="loguot_button">ВЫЙТИ</button></form>
                    <!-- <a href="logout.php">ВЫЙТИ</a> -->
                </div>
                <div class="points">
                    <h2><?= $_SESSION['user']['value']?> бонусов</h2>
                </div>
            </div>
        </div>
    </main>
    <?php require_once('footer.php');?>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.js" type="text/javascript"></script>
</body>

</html>