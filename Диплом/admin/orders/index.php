<?php 
require_once("../header.php");
checkUser();
if($_SESSION['user']['userType'] == 'editor'){
    exit("<meta http-equiv='refresh' content='0; url= /admin/news/'>");
}
$orders = getAllOrders();
?>
    <section class="no-scroll-body">
        <?php require_once("../sidemenu.php");?>
        <main>
            <section class="content orders">
                <div class="header">
                    <h1>ЗАКАЗЫ</h1>
                    <div class="line"></div>
                    <form action="/admin/vendor/userfunctions.php" method="POST">
                        <h4>Новый заказ</h4>
                        <div>
                            <input type="text" name="orderId" placeholder="Номер автоматический" disabled>
                            <input type="text" name="customerSurname" placeholder="Фамилия">
                            <input type="text" name="customerName" placeholder="Имя">
                            <input type="text" name="customerPhone" placeholder="Номер телефона">
                            <input type="text" name="customerEmail" placeholder="Электронная почта">
                            <input type="text" name="orderComment" placeholder="Комментарий">
                            <div class="smart-selector">
                                <div class="user-block-select arrow waiting">
                                    <p class="user-select">Ожидает звонка</p>
                                    <img src="/admin/img/bottom-arrow.svg" alt="">
                                </div>
                                <input type="hidden" name="orderType" value="waiting">
                                <div class="selector">
                                    <p about="p-waiting">Ожидает звонка</p>
                                    <p about="p-in-progress">В процессе</p>
                                    <p about="p-done">Завершен</p>
                                </div>
                            </div>
                            <button type="submit" name="regNewOrderButton">Добавить заказ</button>
                        </div>
                    </form>
                </div>
                <div class="users-table">
                    <div class="table-cell-names">
                        <p>Номер заказа</p>
                        <p>Фамилия</p>
                        <p>Имя</p>
                        <p>Номер телефона</p>
                        <p>Электронная почта</p>
                        <p>Комментарий</p>
                        <p>Тип аккаунта</p>
                    </div>
                    <hr>
                    <div class="table">
                        <?php foreach ($orders as $order): ?>                                
                        <form action="/admin/vendor/userfunctions.php" method="POST">
                            <input class="input-readonly" type="text" name="orderId" placeholder="Номер заказа" value="<?=$order['id']?>" readonly>
                            <input type="text" name="customerSurname" placeholder="Фамилия" value="<?=$order['customer-surname']?>">
                            <input type="text" name="customerName" placeholder="Имя" value="<?=$order['customer-name']?>">
                            <input type="text" name="customerPhone" placeholder="Номер телефона" value="<?=$order['customer-phone']?>">
                            <input type="text" name="customerEmail" placeholder="Электронная почта" value="<?=$order['customer-email']?>">
                            <input type="text" name="orderComment" placeholder="Комментарий" value="<?=$order['comment']?>">
                            <div class="smart-selector">
                                <div class="user-block-select arrow <?=$order['order-type'];?>">
                                    <p class="user-select"><?= getOrderType($order['order-type']);?></p>
                                    <img src="/admin/img/bottom-arrow.svg" alt="">
                                </div>
                                <input type="hidden" name="orderType" value="<?=$order['order-type'];?>">
                                <div class="selector">
                                    <p about="p-waiting">Ожидает звонка</p>
                                    <p about="p-in-progress">В процессе</p>
                                    <p about="p-done">Завершен</p>
                                </div>
                            </div>
                            <div class='buttons'>
                                <button type="submit" class="small-link" name="order-update"><img src="/admin/img/save.svg" alt=""></button>
                                <a href="."><img src="/admin/img/round-arrow.svg" alt=""></a>
                                <a href="/admin/vendor/userfunctions.php?order-id=<?= $order['id']; ?>&action=delete"><img src="/admin/img/dismiss.svg" alt=""></a>
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