<?php
    require_once("header.php");
    require_once("vendor/userfunctions.php");
    $news = getFirstFourNews();
?>
    <header>
        <nav class="main-nav">
            <a href="/">
                <img src="/img/logo-light.svg" alt="" class="logo">
            </a>
            <div class="nav-links">
                <a href="#news" class="nav-link">НОВОСТИ</a>
                <a href="#about" class="nav-link">О НАС</a>
                <a href="#targets" class="nav-link">НАШИ ЦЕЛИ</a>
                <a href="#contacts" class="nav-link">ОСТАВИТЬ ЗАЯВКУ</a>
                <a href="#contacts" class="nav-link">КОНТАКТЫ</a>
            </div>
            <div class="mobile-button">
                <img src="/img/burger-menu.svg" alt="" id="burger-menu">
                <div class="mobile-nav-links">
                    <a href="#news" class="nav-link">НОВОСТИ</a>
                    <a href="#about" class="nav-link">О НАС</a>
                    <a href="#targets" class="nav-link">НАШИ ЦЕЛИ</a>
                    <a href="#contacts" class="nav-link">ОСТАВИТЬ ЗАЯВКУ</a>
                    <a href="#contacts" class="nav-link">КОНТАКТЫ</a>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="news" id="news">
            <h2>НОВОСТИ ЦЕНТРА</h2>
            <hr>
            <div class="news-block">
                <div class="main-news">
                    <img src="/img/test-news.png" alt="">
                    <div class="main-news-shadow">
                        <div class="main-news-text">
                            <h3>Команда КГУ была активным участником "Больших смыслов"</h3>
                            <p>С 19 по 22 октября делегация КГУ приняла участие во Всероссийском форуме «Большие смыслы-2021» на базе Всероссийского детского центра «Смена» под Анапой.</p>
                        </div>
                    </div>
                </div>
                <div class="list-news">
                    <?foreach ($news as $onenews): ?>
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
                    <a href="/news/" class="more-news">смотреть все новости....</a>
                </div>
            </div>
        </section>
        <section class="about" id="about">
            <h2>О ЦЕНТРЕ СТРАТЕГИЧЕСКИХ РАЗРАБОТОК КГУ</h2>
            <hr>
            <div class="text-about">
                <p>Центр стратегических разработок КГУ ― независимая внутренняя организация КГУ, разрабатывающая стратегии долгосрочного развития экономических решений для предприятий.</p>
                <p> В числе ключевых задач ЦСР — мониторинг и комплексный анализ показателей социально-экономического развития предприятия или проекта. Центр использует собственные информационно-аналитические инструменты, которыми управляют эксперты различных направлений компетенций, взаимодействует с федеральными и региональными органами власти, российскими и зарубежными компаниями, представителями экспертного сообщества и консультантами. Деятельность центра заключается в проведении стратегических исследований, формировании открытого диалога, выработке новых подходов и практик изменений в отраслях и организациях. ЦСР КГУ разрабатывает и внедряет инновационные решения для передовых организационных трансформаций.</p>
                <p>Мир живет в условиях неопределенности, трансформируется с невероятно высокой скоростью. Как подготовиться к неизбежным изменениям? Управлять изменениями при помощи новых инструментов, форматов, подходов? Как достойно принять вызовы будущего? Миссия центра — находить ответы на вызовы времени, предлагать стратегически важные решения, основываясь на результатах глубокой аналитики и лучшей практики. Запускать и сопровождать системные изменения в ключевых сферах развития экономики и общества.</p>
            </div>
        </section>
        <section class="targets" id="targets">
            <h2 class="center">Цели центра стратегических разработок</h2>
            <div class="targets">
                <div class="target">
                    <img src="/img/target1.svg" alt="">
                    <h4>Глубокая аналитика</h4>
                    <p>Исследование существующего уклада работы проекта и анализ его положительных и отрицательных качеств</p>
                </div>
                <div class="target">
                    <img src="/img/target2.svg" alt="">
                    <h4>Подбор подходов</h4>
                    <p>Как решить проблемы? Как сохранить преимущества текущего устоя проекта? Это ставится в качестве задачи</p>
                </div>
                <div class="target">
                    <img src="/img/target3.svg" alt="">
                    <h4>Анализ конкуретов</h4>
                    <p>Аналогичные задачи уже решались: важно понять, какие решения давали положительную динамику, а какие - нет</p>
                </div>
                <div class="target">
                    <img src="/img/target4.svg" alt="">
                    <h4>Интеграция разработки</h4>
                    <p>Внедрение разработанной стратегии в проект и отслеживание изменений, происходящих после интеграции</p>
                </div>
                <div class="target">
                    <img src="/img/target5.svg" alt="">
                    <h4>Составление плана</h4>
                    <p>Как действовать в дальнейшем? Мы дадим ответ - составленный план поможет эффективно продвигать стратегию</p>
                </div>
            </div>
        </section>
        <h2>Оставить заявку</h2>
        <hr>
        <section class="contacts" id="contacts">
            <div class="left-block">
                <img src="/img/logo-dark.svg" alt="" draggable="false">
                <form action="/vendor/userfunctions.php" method="post" id="formNewOrder">
                    <input type="text" id="customerName" name="customerName" placeholder="Ваше имя">
                    <input type="text" id="customerPhone" name="customerPhone" placeholder="Номер телефона" class="tel">
                    <input type="text" id="customerEmail" name="customerEmail" placeholder="Электронная почта">
                    <button type="button" name="" id="buttonFormNewOrder">Оставить заявку</button>
                </form>
            </div>
            <div class="right-block">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2128.453460851707!2d40.94114599684514!3d57.75970376110711!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46ad50207a7219df%3A0x83866824da0b8c8e!2z0KTQk9CR0J7Qo9CS0J4gItCa0L7RgdGC0YDQvtC80YHQutC-0Lkg0LPQvtGB0YPQtNCw0YDRgdGC0LLQtdC90L3Ri9C5INGD0L3QuNCy0LXRgNGB0LjRgtC10YIi!5e0!3m2!1sru!2sru!4v1654787333390!5m2!1sru!2sru" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
    </main>
    <script src="https://unpkg.com/imask"></script>
    <script src="main.js"></script>
<?php
    require_once("footer.php");
?>