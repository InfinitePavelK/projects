<?php
    require_once("../header.php");
    require_once("../vendor/userfunctions.php");
    $news = getAllNews();
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
    <section class="list-news">
        <?foreach ($news as $onenews):?>
        <a href="/news/item.php?news-id=<?=$onenews['id']?>" class="news-list-link">
            <div class="news-item">
                <img src="/admin/img/upload/<?=$onenews['imagename']?>" alt="">
                <div class="list-news-text">
                    <h4><?=$onenews['title']?></h4>
                    <p><?=$onenews['subtitle']?></p>
                </div>
            </div>
        </a>
        <?endforeach;?>
    </section>
</main>
<?php
    require_once("../footer.php");
?>