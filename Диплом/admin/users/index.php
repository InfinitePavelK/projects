<?php 
require_once("../header.php");
checkUser();
if($_SESSION['user']['userType'] == 'manager'){
    exit("<meta http-equiv='refresh' content='0; url= /admin/orders/'>");
}
if($_SESSION['user']['userType'] == 'editor'){
    exit("<meta http-equiv='refresh' content='0; url= /admin/news/'>");
}
$users = getAllUsers();
?>
    <section class="no-scroll-body">
        <?php require_once("../sidemenu.php");?>
        <main>
            <section class="content users">
                <div class="header">
                    <h1>ПОЛЬЗОВАТЕЛИ</h1>
                    <div class="line"></div>
                    <form action="../vendor/userfunctions.php" method="POST">
                        <h4>Новый пользователь</h4>
                        <div>
                            <input type="text" name="userLogin" placeholder="Имя пользователя">
                            <input type="text" name="userSurname" placeholder="Фамилия">
                            <input type="text" name="userName" placeholder="Имя">
                            <input type="password" name="userPassword" placeholder="Пароль">
                            <input type="text" name="userPhone" placeholder="Номер телефона">
                            <input type="text" name="userEmail" placeholder="Электронная почта">
                            <div class="smart-selector">
                                <div class="user-block-select arrow admin">
                                    <p class="user-select">Администратор</p>
                                    <img src="/admin/img/bottom-arrow.svg" alt="">
                                </div>
                                <input type="hidden" name="userType" value="admin">
                                <div class="selector">
                                    <p about="p-admin">Администратор</p>
                                    <p about="p-manager">Менеждер</p>
                                    <p about="p-editor">Редактор</p>
                                </div>
                            </div>
                            <button type="submit" name="regNewUserButton">Добавить</button>
                        </div>
                    </form>
                </div>
                <div class="users-table">
                    <div class="table-cell-names">
                        <p>Имя пользователя</p>
                        <p>Фамилия</p>
                        <p>Имя</p>
                        <p>Изменить пароль</p>
                        <p>Номер телефона</p>
                        <p>Электронная почта</p>
                        <p>Тип аккаунта</p>
                    </div>
                    <hr>
                    <div class="table">
                       <?php foreach ($users as $user): ?>                                
                            <form action="/admin/vendor/userfunctions.php" method="POST">
                                <input type='text' name='userLogin' placeholder='Имя пользователя' value="<?= $user['username']; ?>">
                                <input type='text' name='userSurname' placeholder='Фамилия' value="<?= $user['surname']; ?>">
                                <input type='text' name='userName' placeholder='Имя' value="<?= $user['name']; ?>">
                                <input type='text' name='userPassword' placeholder='Пароль' value="">
                                <input type='text' name='userPhone' placeholder='Номер телефона' value="<?= $user['phone']; ?>">
                                <input type='text' name='userEmail' placeholder='Электронная почта' value="<?= $user['email']; ?>">
                                <div class="smart-selector">
                                    <div class="user-block-select arrow <?= $user['type']; ?>">
                                        <p class="user-select"><?= getUserType($user['type']);?></p>
                                        <img src="/admin/img/bottom-arrow.svg" alt="">
                                    </div>
                                    <input type="hidden" name="userType" value="<?=$user['type'];?>">
                                    <div class="selector">
                                        <p about="p-admin">Администратор</p>
                                        <p about="p-manager">Менеждер</p>
                                        <p about="p-editor">Редактор</p>
                                    </div>
                                </div>
                                <div class='buttons'>
                                    <button type="submit" class="small-link" name="user-update"><img src="/admin/img/save.svg" alt=""></button>
                                    <a href="."><img src="/admin/img/round-arrow.svg" alt=""></a>
                                    <a href="/admin/vendor/userfunctions.php?user=<?= $user['username']; ?>&action=delete"><img src="/admin/img/dismiss.svg" alt=""></a>
                                </div>
                                </form>
                                <?php endforeach; ?>
                    </div>
                </div>
            </section>
        </main>
    </section>
    <script>
        var selectors = document.getElementsByClassName("smart-selector");
        for (let index = 0; index < selectors.length; index++) {
            const selector = selectors[index];
            let userselect = selector.getElementsByClassName("user-select")[0];
            let userblockselect = selector.getElementsByClassName("user-block-select")[0]
            let inputhidden = selector.getElementsByTagName("input")[0];
            let statuses = selector.getElementsByClassName("selector")[0].getElementsByTagName("p");

            for (let i = 0; i < statuses.length; i++) {
                const element = statuses[i];
                element.addEventListener('click', event => {
                    userselect.innerText = element.innerText;
                    inputhidden.value = (element.getAttribute('About')).substr(2);
                    userblockselect.classList.remove(userblockselect.classList.item(2));
                    userblockselect.classList.add((element.getAttribute('About')).substr(2));
                });
            }

        }
    </script>
<?php require_once("../footer.php")?>