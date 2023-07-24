<?php
    require_once("../header.php");
    require_once("../vendor/userfunctions.php");

    $newsItem = getNewsItem($_GET['news-id']);
?>
<header>
    <nav class="main-nav">
        <a href="/">
            <img src="/img/logo-light.svg" alt="" class="logo">
        </a>
        <div class="nav-links">
            <a href="/#news" class="nav-link">НОВОСТИ</a>
            <a href="/#about" class="nav-link">О НАС</a>
            <a href="/#targets" class="nav-link">НАШИ ЦЕЛИ</a>
            <a href="/#contacts" class="nav-link">ОСТАВИТЬ ЗАЯВКУ</a>
            <a href="/#contacts" class="nav-link">КОНТАКТЫ</a>
        </div>
    </nav>
</header>
<main>
    <section class="item">
        <div class="news-header">
            <img class="news-image" src="/admin/img/upload/<?=$newsItem['imagename']?>" alt="">
            <div class="text-shadow">
                <p class="date"><?=$newsItem['date']?></p>
                <h2><?=$newsItem['title']?></h2>
            </div>
        </div>
        <div class="news-text">
            <p><?=$newsItem['subtitle']?></p>
            <p class="text"><?=$newsItem['text']?></p>
        </div>
    </section>
</main>
<?php
    require_once("../footer.php");
?>