<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>INTALIA</title>
</head>
<body>
    <header>
        <div class="dark-block">
            <div class="mini-about">
                <div class="flex-block">
                    <p><svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.5 19.875C15.6777 19.875 19.875 15.6777 19.875 10.5C19.875 5.32233 15.6777 1.125 10.5 1.125C5.32233 1.125 1.125 5.32233 1.125 10.5C1.125 15.6777 5.32233 19.875 10.5 19.875Z" stroke="#83C2CB" stroke-width="2.08333" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M1.75 7.375H19.25" stroke="#83C2CB" stroke-width="2.08333" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M1.75 13.625H19.25" stroke="#83C2CB" stroke-width="2.08333" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M9.97915 1.125C8.22429 3.9371 7.29395 7.18528 7.29395 10.5C7.29395 13.8147 8.22429 17.0629 9.97915 19.875" stroke="#83C2CB" stroke-width="2.08333" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M11.0208 1.125C12.7757 3.9371 13.706 7.18528 13.706 10.5C13.706 13.8147 12.7757 17.0629 11.0208 19.875" stroke="#83C2CB" stroke-width="2.08333" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        КОСТРОМА</p>
                    <p>8 800 333 39 25</p>
                    <p>+7 (4942) 49 74 76</p>
                </div>
                <div class="flex-block">
                    <a href="" class="link">ДОСТАВКА И ОПЛАТА</a>
                    <a href="" class="link">НОВОСТИ</a>
                    <a href="" class="link">О КОМПАНИИ</a>
                </div>
            </div>
        </div>
        <div class="light-block">
            <nav>
                <div class="flex-block">
                    <a href="" class="link">КАТАЛОГ</a>
                    <a href="" class="link">КОЛЛЕКЦИИ</a>
                    <a href="" class="link">АКЦИИ</a>
                </div>
                <div class="flex-block">
                    <?php if (isset($_SESSION['user']['phone'])): ?>
                    <a href="profile.php" class="link">ПРОФИЛЬ</a>
                    <a href="profile.php" class="link">ЗАКАЗЫ</a>
                    <?php else: ?>
                    <a href="login.php" class="link">ВОЙТИ</a>
                    <?php endif; ?>
                    <a href="" class=""><svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.9167 3.30561C20.9861 1.39589 18.3056 -0.166614 15.1875 0.743108C13.6975 1.17348 12.3976 2.09643 11.5 3.36116C10.6024 2.09643 9.30247 1.17348 7.81251 0.743108C4.68751 -0.152725 2.0139 1.39589 1.08334 3.30561C-0.222213 5.97922 0.319454 8.98616 2.69445 12.2431C4.55557 14.7917 7.21529 17.3751 11.0764 20.3751C11.1984 20.4702 11.3487 20.5219 11.5035 20.5219C11.6582 20.5219 11.8085 20.4702 11.9306 20.3751C15.7847 17.382 18.4514 14.8195 20.3125 12.2431C22.6806 8.98616 23.2222 5.97922 21.9167 3.30561V3.30561Z" fill="#83C2CB"/>
                        </svg>
                        </a>
                    <a href="" class=""><svg width="23" height="20" viewBox="0 0 23 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M22.1445 18.166L20.7578 5.66596C20.7194 5.33016 20.5589 5.02019 20.3068 4.79509C20.0547 4.56998 19.7286 4.44547 19.3906 4.44525H15.9531C15.8098 3.36571 15.2792 2.37498 14.4601 1.65738C13.6409 0.939787 12.589 0.544189 11.5 0.544189C10.411 0.544189 9.35903 0.939787 8.53988 1.65738C7.72073 2.37498 7.19015 3.36571 7.04685 4.44525H3.60935C3.27136 4.44547 2.94526 4.56998 2.69315 4.79509C2.44103 5.02019 2.28051 5.33016 2.24216 5.66596L0.855443 18.166C0.836442 18.3563 0.857308 18.5485 0.916711 18.7303C0.976115 18.9122 1.07275 19.0796 1.20046 19.222C1.32817 19.3645 1.48415 19.4787 1.65846 19.5575C1.83277 19.6363 2.02159 19.6779 2.21287 19.6796H20.7871C20.9784 19.6779 21.1672 19.6363 21.3415 19.5575C21.5158 19.4787 21.6718 19.3645 21.7995 19.222C21.9272 19.0796 22.0238 18.9122 22.0832 18.7303C22.1426 18.5485 22.1635 18.3563 22.1445 18.166ZM11.5 1.71088C12.279 1.71202 13.033 1.98625 13.6307 2.48585C14.2284 2.98544 14.6321 3.67879 14.7715 4.44525H8.22849C8.36785 3.67879 8.77151 2.98544 9.36924 2.48585C9.96698 1.98625 10.7209 1.71202 11.5 1.71088ZM20.9336 18.4394C20.9151 18.4601 20.8925 18.4769 20.8673 18.4886C20.8422 18.5004 20.8149 18.5069 20.7871 18.5078H2.21287C2.18509 18.5069 2.15778 18.5004 2.1326 18.4886C2.10742 18.4769 2.08489 18.4601 2.06638 18.4394C2.04935 18.4194 2.03701 18.3959 2.03025 18.3706C2.02349 18.3452 2.02249 18.3187 2.02732 18.2929L3.41404 5.79291C3.4189 5.74457 3.4416 5.69977 3.47771 5.66726C3.51383 5.63476 3.56076 5.61689 3.60935 5.61713H7.00779V8.15619C7.00779 8.31159 7.06952 8.46063 7.1794 8.57051C7.28929 8.6804 7.43832 8.74213 7.59372 8.74213C7.74913 8.74213 7.89816 8.6804 8.00804 8.57051C8.11793 8.46063 8.17966 8.31159 8.17966 8.15619V5.61713H14.8203V8.15619C14.8203 8.31159 14.882 8.46063 14.9919 8.57051C15.1018 8.6804 15.2508 8.74213 15.4062 8.74213C15.5616 8.74213 15.7107 8.6804 15.8205 8.57051C15.9304 8.46063 15.9922 8.31159 15.9922 8.15619V5.61713H19.3906C19.4392 5.61689 19.4861 5.63476 19.5222 5.66726C19.5583 5.69977 19.5811 5.74457 19.5859 5.79291L20.9726 18.2929C20.9775 18.3187 20.9765 18.3452 20.9697 18.3706C20.9629 18.3959 20.9506 18.4194 20.9336 18.4394Z" fill="#83C2CB"/>
                        </svg>
                        </a>
                </div>
                <a href="index.php" class="logo">
                    <img src="img/logo.jpg" alt="">
                </a>
            </nav>
        </div>
        <div class="light-block banner">
            <img src="img/banner.png" alt="" draggable="false">
            <div class="text-block">
                <p>коллекция</p>
                <h1>BAMBOO</h1>
                <a href="" class="link-button">Смотреть</a>
            </div>
        </div>
    </header>
    <main>
        <div class="light-block">
            <div class="catalog">
                <div class="catalog-link">
                    <a href="" class="img-link">
                        <img src="img/catalog/ring.jpg" alt="">
                        <p class="p-in-link">КОЛЬЦА</p>
                    </a>
                </div>
                <div class="catalog-link">
                    <a href="" class="img-link">
                        <img src="img/catalog/earrings.jpg" alt="">
                        <p class="p-in-link">СЕРЬГИ</p>
                    </a>
                </div>
                <div class="catalog-link">
                    <a href="" class="img-link">
                        <img src="img/catalog/cross.jpg" alt="">
                        <p class="p-in-link">ПОДВЕСКИ</p>
                    </a>
                </div>
                <div class="catalog-link">
                    <a href="" class="img-link">
                        <img src="img/catalog/necklace.jpg" alt="">
                        <p class="p-in-link">КОЛЬЦА</p>
                    </a>
                </div>
                <div class="catalog-link">
                    <a href="" class="img-link">
                        <img src="img/catalog/bracelet.jpg" alt="">
                        <p class="p-in-link">БРАСЛЕТЫ</p>
                    </a>
                </div>
                <div class="catalog-link">
                    <a href="" class="img-link">
                        <img src="img/catalog/brooch.jpg" alt="">
                        <p class="p-in-link">БРОШИ</p>
                    </a>
                </div>
                <div class="catalog-link">
                    <a href="" class="img-link">
                        <img src="img/catalog/spoon.jpg" alt="">
                        <p class="p-in-link">ЛОЖКИ</p>
                    </a>
                </div>
                <div class="catalog-link">
                    <a href="" class="img-link">
                        <img src="img/catalog/souvenir.jpg" alt="">
                        <p class="p-in-link">СУВЕНИРЫ</p>
                    </a>
                </div>
            </div>
            <div class="best-sellers">
                <h2>БЕСТСЕЛЛЕРЫ</h2>
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <div class="d-flex w-100">
                            <div><img src="img/best-seller/best_ring.jpg" alt="">
                                <div class="text">
                                    <p class="price">47 900 ₽</p>
                                    <p class="name">Помолвочное кольцо из комбинированного золота с...</p>
                                </div>
                            </div>
                            <div><img src="img/best-seller/best_cross.jpg" alt="">
                                <div class="text">
                                    <p class="price">24 990 ₽</p>
                                    <p class="name">Крест из белого золота с фианитами</p>
                                </div>
                            </div>
                            <div><img src="img/best-seller/best_ring2.jpg" alt="">
                                <div class="text">
                                    <p class="price">29 990 ₽</p>
                                    <p class="name">Кольцо из белого золота с бриллиантом</p>
                                </div>
                            </div>
                            <div><img src="img/best-seller/best_watch.jpg" alt="">
                                <div class="text">
                                    <p class="price">7 990 ₽</p>
                                    <p class="name">Женские стальные прямоугольные часы</p>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="d-flex w-100">
                            <div><img src="img/best-seller/best_ring.jpg" alt="">
                                <div class="text">
                                    <p class="price">47 900 ₽</p>
                                    <p class="name">Помолвочное кольцо из комбинированного золота с...</p>
                                </div>
                            </div>
                            <div><img src="img/best-seller/best_cross.jpg" alt="">
                                <div class="text">
                                    <p class="price">24 990 ₽</p>
                                    <p class="name">Крест из белого золота с фианитами</p>
                                </div>
                            </div>
                            <div><img src="img/best-seller/best_ring2.jpg" alt="">
                                <div class="text">
                                    <p class="price">29 990 ₽</p>
                                    <p class="name">Кольцо из белого золота с бриллиантом</p>
                                </div>
                            </div>
                            <div><img src="img/best-seller/best_watch.jpg" alt="">
                                <div class="text">
                                    <p class="price">7 990 ₽</p>
                                    <p class="name">Женские стальные прямоугольные часы</p>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="d-flex w-100">
                            <div><img src="img/best-seller/best_ring.jpg" alt="">
                                <div class="text">
                                    <p class="price">47 900 ₽</p>
                                    <p class="name">Помолвочное кольцо из комбинированного золота с...</p>
                                </div>
                            </div>
                            <div><img src="img/best-seller/best_cross.jpg" alt="">
                                <div class="text">
                                    <p class="price">24 990 ₽</p>
                                    <p class="name">Крест из белого золота с фианитами</p>
                                </div>
                            </div>
                            <div><img src="img/best-seller/best_ring2.jpg" alt="">
                                <div class="text">
                                    <p class="price">29 990 ₽</p>
                                    <p class="name">Кольцо из белого золота с бриллиантом</p>
                                </div>
                            </div>
                            <div><img src="img/best-seller/best_watch.jpg" alt="">
                                <div class="text">
                                    <p class="price">7 990 ₽</p>
                                    <p class="name">Женские стальные прямоугольные часы</p>
                                </div>
                            </div>
                        </div>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
            <div class="news">
                <h2>НОВОСТИ</h2>
                <div class="d-flex">
                    <div class="new">
                        <p>ПРИГЛАШАЕМ НА ВЫСТАВКУ JUNWEX МОСКВА 2021</p>
                        <img src="img/news/new1.png" alt="">
                    </div>
                    <div class="new">
                        <p>ПРИГЛАШАЕМ НА ВЫСТАВКУ JUNWEX ПЕТЕРБУРГ 2021</p>
                        <img src="img/news/new2.png" alt="">
                    </div>
                </div>
            </div>
            <div class="about">
                <h2>INTALIA ЗАБОТИТСЯ</h2>
                <div class="d-flex">
                    <p>Бренд INTALIA постоянно совершенствует технологии производства. Каждая деталь создаётся с вниманием и заботой, начиная от художников и до мастеров-ювелиров.</p>
                    <a href="" class="link-button">О компании</a>
                </div>
            </div>
        </div>
        <hr>
    </main>
    <footer>
        <div class="footer-nav">
            <div>
                <p>Украшения</p>
                <a href="" class="link">Кольца</a>
                <a href="" class="link">Серьги</a>
                <a href="" class="link">Подвески</a>
                <a href="" class="link">Колье</a>
                <a href="" class="link">Браслеты</a>
                <a href="" class="link">Броши</a>
                <a href="" class="link">Ложки</a>
                <a href="" class="link">Сувениры</a>
            </div>
            <div>
                <p>Коллекции</p>
                <a href="" class="link">DELIGHT</a>
                <a href="" class="link">BAMBOO</a>
                <a href="" class="link">Смотреть все</a>
            </div>
            <div>
                <p>INTALIA</p>
                <a href="" class="link">О КОМПАНИИ</a>
                <a href="" class="link">ГДЕ КУПИТЬ?</a>
                <a href="" class="link">КОНТАКТЫ</a>
                <a href="" class="link">СОТРУДНИЧЕСТВО</a>
                <a href="" class="link">СТАТЬ АГЕНТОМ</a>
            </div>
            <div>
                <p>Информация</p>
                <a href="" class="link">АКЦИИ</a>
                <a href="" class="link">ГАРАНТИЯ</a>
                <a href="" class="link">ОБМЕН И ВОЗВРАТ</a>
                <a href="" class="link">ДОСТАВКА И ОПЛАТА </a>
                <a href="" class="link">ПОЛИТИКА</a>
                <a href="" class="link">ОПТОВЫМ ПОКУПАТЕЛЯМ</a>
                <a href="" class="link">КОПИРАЙТ</a>
            </div>
            <div>
                <p>СЛЕДИТЕ ЗА НОВОСТЯМИ INTALIA:</p>
                <div class="social">
                    <a href="">
                        <div class="round">
                            <img src="img/icons/instagram.png" alt="">
                        </div>
                    </a>
                    <a href="">
                        <div class="round">
                            <img src="img/icons/vk.png" alt="">
                        </div>
                    </a>
                    <a href="">
                        <div class="round">
                            <img src="img/icons/facebook.png" alt="">
                        </div>
                    </a>
                </div>
                <img class="logo" src="img/logo.jpg" alt="">
            </div>
        </div>
        <hr>
        <div class="footer-info">
            <div>
                <p>Бесплатно по России</p>
                <p>8 800 333 39 25</p>
            </div>
            <div>
                <p>По вопросам интернет-магазина:</p>
                <p>+7 (4942) 49 74 76</p>
                <p>im@intalia.ru</p>
            </div>
            <div>
                <p>По вопросам трудоустройства:</p>
                <p>+7 (4942) 49 74 02</p>
                <p>priemnaya@intalia.ru</p>
            </div>
            <div>
                <p>По вопросам сотрудничества:</p>
                <p>+7 (4942) 49 74 22</p>
                <p>ktv@intalia.ru</p>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
</body>
</html>