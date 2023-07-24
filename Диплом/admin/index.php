<?php 
require_once("header.php");
session_start();
?>
    <section class="login-block">
        <div class="center-block">
            <img src="/admin/img/logo-dark.svg" alt="" class="logo">
            <form action="vendor/userfunctions.php" method="POST">
                <h1>Панель администратора</h1>
                <p>Введите данные для входа</p>
                <label for="userLogin">
                    Имя пользователя
                    <input type="text" name="userLogin">
                </label>
                <label for="userPassword">
                    Пароль
                    <input type="password" name="userPassword">
                </label>
                <button type="submit" name="logInUserButton">Войти</button>
            </form>
        </div>
    </section>
<?php require_once("footer.php")?>