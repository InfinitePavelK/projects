<?php
    $url = $_SERVER['REQUEST_URI'];
    $url = explode('?', $url);
    $url = $url[0];

    $path = explode("/", $url);
    $current = $path[count($path)-2];

    $allWaiting = getAllWaitingOrders();
    $allInProgress = getAllInProgressOrders();
?>
<section class="side-nav">
    <div class="content">
        <a href="/">
            <img src="/admin/img/logo-light.svg" class="logo" alt="" draggable="false">
        </a>
        <h3>Добро пожаловать, <?= $_SESSION['user']['userLogin'];?>!</h3>
        <p><?= getUserType($_SESSION['user']['userType']);?></p>
        <?if(($_SESSION['user']['userType'] == 'editor') || ($_SESSION['user']['userType'] == 'admin')):?>
        <a href="../news" class="link <?php if($current == "news"): ?>selected<?php endif;?>">
            <img src="/admin/img/news.svg" alt="">
            <p>Новости</p>
            <img src="/admin/img/right-arrow.svg" alt="" class="arrow">
        </a>
        <?endif;?>
        <?if(($_SESSION['user']['userType'] == 'manager') || ($_SESSION['user']['userType'] == 'admin')):?>
        <a href="../orders" class="link <?php if($current == "orders"): ?>selected<?php endif;?>">
            <img src="/admin/img/orders.svg" alt="">
            <p>Заказы</p>
            <p class="order warning"><?=$allWaiting?></p>
            <p class="order"><?=$allInProgress?></p>
            <img src="/admin/img/right-arrow.svg" alt="" class="arrow">
        </a>
        <?endif;?>
        <?if(($_SESSION['user']['userType'] == 'admin')):?>
        <a href="../users" class="link <?php if($current == "users"): ?>selected<?php endif;?>">
            <img src="/admin/img/users.svg" alt="">
            <p>Пользователи</p>
            <img src="/admin/img/right-arrow.svg" alt="" class="arrow">
        </a>
        <?endif;?>
        <form action="../vendor/userfunctions.php" class="logoutform" method="POST">
            <button type="submit" class="logout" name="logOutUserButton">
                Выйти из аккаунта
                <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 512 512" viewBox="0 0 512 512" width="288" height="288"><path d="M510.371,226.513c-1.088-2.603-2.645-4.971-4.629-6.955l-63.979-63.979c-8.341-8.32-21.824-8.32-30.165,0
				c-8.341,8.341-8.341,21.845,0,30.165l27.584,27.584H320.013c-11.797,0-21.333,9.557-21.333,21.333s9.536,21.333,21.333,21.333
				h119.168l-27.584,27.584c-8.341,8.341-8.341,21.845,0,30.165c4.16,4.181,9.621,6.251,15.083,6.251s10.923-2.069,15.083-6.251
				l63.979-63.979c1.984-1.963,3.541-4.331,4.629-6.955C512.525,237.606,512.525,231.718,510.371,226.513z" class="color000 svgShape"></path><path d="M362.68,298.667c-11.797,0-21.333,9.557-21.333,21.333v106.667h-85.333V85.333c0-9.408-6.187-17.728-15.211-20.437
				l-74.091-22.229h174.635v106.667c0,11.776,9.536,21.333,21.333,21.333s21.333-9.557,21.333-21.333v-128
				C384.013,9.557,374.477,0,362.68,0H21.347c-0.768,0-1.451,0.32-2.197,0.405c-1.003,0.107-1.92,0.277-2.88,0.512
				c-2.24,0.576-4.267,1.451-6.165,2.645c-0.469,0.299-1.045,0.32-1.493,0.661C8.44,4.352,8.376,4.587,8.205,4.715
				C5.88,6.549,3.939,8.789,2.531,11.456c-0.299,0.576-0.363,1.195-0.597,1.792c-0.683,1.621-1.429,3.2-1.685,4.992
				c-0.107,0.64,0.085,1.237,0.064,1.856c-0.021,0.427-0.299,0.811-0.299,1.237V448c0,10.176,7.189,18.923,17.152,20.907
				l213.333,42.667c1.387,0.299,2.795,0.427,4.181,0.427c4.885,0,9.685-1.685,13.525-4.843c4.928-4.053,7.808-10.091,7.808-16.491
				v-21.333H362.68c11.797,0,21.333-9.557,21.333-21.333V320C384.013,308.224,374.477,298.667,362.68,298.667z" class="color000 svgShape"></path></svg>
            </button>
        </form>
    </div>
</section>