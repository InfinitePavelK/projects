<?php
session_start();
?>

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
                    <a href="login.php" class="link">ВОЙТИ</a>
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
    </header>
    <main>
        <div class="log-block">
            <h2>
                <a href="#" id="switch-to-login" class="selected">ВХОД</a>
                ИЛИ
                <a href="#" id="switch-to-register" class="">РЕГИСТРАЦИЯ</a>
            </h2>
            <form action="vendor/login.php" method="POST" class="login d-visible">
                <input class="phone" type="text" name="userphone" placeholder="Телефон">
                <input type="password" name="userpassword" placeholder="Пароль">
                <?= (isset($_SESSION['message'])) ? $_SESSION['message'] : ''?>
                <button type="submit">ОТПРАВИТЬ</button>
            </form>

            <form action="vendor/register.php" method="POST" class="register">
                <input class="phone" type="text" name="userphone" placeholder="Телефон">
                <input type="password" name="userpassword1" placeholder="Пароль">
                <input type="password" name="userpassword2" placeholder="Повторите пароль">
                <button type="submit">ОТПРАВИТЬ</button>
            </form>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.js" type="text/javascript"></script>
<script>
    document.getElementById('switch-to-login').onclick = function() {
        this.classList.add('selected');
        document.getElementById('switch-to-register').classList.remove('selected');
        document.getElementsByClassName('login')[0].classList.add('d-visible');
        document.getElementsByClassName('register')[0].classList.remove('d-visible');
    }
    document.getElementById('switch-to-register').onclick = function() {
        this.classList.add('selected');
        document.getElementById('switch-to-login').classList.remove('selected');
        document.getElementsByClassName('register')[0].classList.add('d-visible');
        document.getElementsByClassName('login')[0].classList.remove('d-visible');
    }
    $(".phone").mask("+7(999)999-99-99");
</script>
</body>
</html>