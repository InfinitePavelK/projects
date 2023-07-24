<?php session_start();?>
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
<?php require_once('header.php')?>
    <main>
        <div class="content-dark">
            <div id="about-us" class="about-us">
                <div class="text">
                    <div class="first-text">
                        <h3>ОЩУТИ ТОТ САМЫЙ ВКУС <br> НАСТОЯЩЕГО КОФЕ
                        </h3>
                        <p>ЭТО НАСТОЯЩИЙ КОФЕ, ПРИГОТОВЛЕННЫЙ ИЗ ОТБОРНЫХ ЗЕРЕН АРАБИКИ КЛАССА SPECIALTY. ОБЖАРЕННЫЕ И ИЗМЕЛЬЧЕННЫЕ ЗДЕСЬ ЖЕ ЗЕРНА, ДАЮТ ТО САМОЕ НЕОБЫКНОВЕННОЕ СОЧЕТАНИЕ МЯГКОСТИ, НАСЫЩЕННОСТИ, ГОРЕЧИ И СЛАДОСТИ В ОДНОМ НАПИТКЕ.
                        </p>
                    </div>
                    <div class="second-text">
                        <h3>КОФЕ СО СВОЕЙ <br> ИСТОРИЕЙ
                        </h3>
                        <p>72° - ИДЕАЛЬНАЯ ТЕМПЕРАТУРА КОФЕ. ТАКАЯ ЖЕ ИДЕАЛЬНАЯ, КАК И ВСЕ, ЧТО ГОТОВЯТ В НАШЕЙ КОФЕЙНЕ «72°». БОЛЕЕ 10 ЛЕТ МЫ ОТТАЧИВАЛИ РЕЦЕПТЫ ВСЕХ НАПИТКОВ ДО СОВЕРШЕНСТВА. МОЖЕМ С УВЕРЕННОСТЬЮ ЗАЯВИТЬ, ЧТО НАШ КОФЕ - ЛУЧШЕЕ НАШЕ ТВОРЕНИЕ.
                        </p>
                    </div>
                </div>
                <div class="image">
                    <img id="parallax-1" src="images/Two_Flaoting_Cups_Mockup.png" alt="">
                </div>
            </div>
        </div>
        <div class="content-light">
            <div id="menu" class="menu">
                <h2>МЕНЮ КОФЕ</h2>
                <div class="coffee">
                    <div class="default-coffee">
                        <div class="coffee-unit">
                            <img src="images/1.png" alt="">
                            <div class="coffee-text">
                                <h5>ЭСПРЕССО</h5>
                                <p><small>S </small>69 Р <small>M </small>89 Р <small>L </small>99 Р</p>
                            </div>
                        </div>
                        <div class="coffee-unit">
                            <img src="images/2.png" alt="">
                            <div class="coffee-text">
                                <h5>АМЕРИКАНО</h5>
                                <p><small>S </small>79 Р <small>M </small>99 Р <small>L </small>109 Р</p>
                            </div>
                        </div>
                        <div class="coffee-unit">
                            <img src="images/3.png" alt="">
                            <div class="coffee-text">
                                <h5>КАПУЧИНО</h5>
                                <p><small>S </small>99 Р <small>M </small>109 Р <small>L </small> 119 Р</p>
                            </div>
                        </div>
                        <div class="coffee-unit">
                            <img src="images/4.png" alt="">
                            <div class="coffee-text">
                                <h5>ЛАТТЕ</h5>
                                <p><small>S </small>99 Р <small>M </small>109 Р <small>L </small> 119 Р</p>
                            </div>
                        </div>
                        <div class="coffee-unit">
                            <img src="images/5.png" alt="">
                            <div class="coffee-text">
                                <h5>РАФ-КОФЕ</h5>
                                <p><small>S </small>99 Р <small>M </small>109 Р <small>L </small> 119 Р</p>
                            </div>
                        </div>
                    </div>
                    <div class="default-coffee">
                        <div class="coffee-unit">
                            <img src="images/6.png" alt="">
                            <div class="coffee-text">
                                <h5>ФЛЭТ-УАЙТ</h5>
                                <p><small>S </small>109 Р <small>M </small>129 Р <small>L </small>139 Р</p>
                            </div>
                        </div>
                        <div class="coffee-unit">
                            <img src="images/7.png" alt="">
                            <div class="coffee-text">
                                <h5>МОККАЧИНО</h5>
                                <p><small>S </small>109 Р <small>M </small>129 Р <small>L </small>139 Р</p>
                            </div>
                        </div>
                        <div class="coffee-unit">
                            <img src="images/8.png" alt="">
                            <div class="coffee-text">
                                <h5>ФРАППЕ</h5>
                                <p><small>S </small>129 Р <small>M </small>149 Р <small>L </small> 159 Р</p>
                            </div>
                        </div>
                        <div class="coffee-unit">
                            <img src="images/9.png" alt="">
                            <div class="coffee-text">
                                <h5>ЧАЙ ЧЕРНЫЙ</h5>
                                <p><small>S </small>59 Р <small>M </small>79 Р <small>L </small> 89 Р</p>
                            </div>
                        </div>
                        <div class="coffee-unit">
                            <img src="images/10.png" alt="">
                            <div class="coffee-text">
                                <h5>ЧАЙ ЯГОДНЫЙ</h5>
                                <p><small>S </small>59 Р <small>M </small>79 Р <small>L </small> 89 Р</p>
                            </div>
                        </div>
                    </div>
                    <div class="season-coffee">
                        <div class="coffee-unit">
                            <img src="images/11.png" alt="">
                            <div class="coffee-text">
                                <h5>72-ФЛЭТ</h5>
                                <p class="small-text">Флэт, приготовленный по классическому рецепту кофейни с добавлением карамельного сиропа и корицы.</p>
                                <p><small>S </small>129 Р <small>M </small>149 Р <small>L </small>159 Р</p>
                            </div>
                        </div>
                        <div class="coffee-unit">
                            <img src="images/12.png" alt="">
                            <div class="coffee-text">
                                <h5>ДЫННЫЙ ЛАТТЕ</h5>
                                <p class="small-text">Латте с дынным сиропом. Подается слегка охлажденным с добавлением небольших кусочков свежей дыни.</p>
                                <p><small>S </small>149 Р <small>M </small>169 Р <small>L </small>179 Р</p>
                            </div>
                        </div>
                        <div class="coffee-unit">
                            <img src="images/13.png" alt="">
                            <div class="coffee-text">
                                <h5>МЕДОВЫЙ РАФ</h5>
                                <p class="small-text">Вкуснейший раф, в процессе приготовления которого используется молоко, смешанное с липовым медом.</p>
                                <p><small>S </small>149 Р <small>M </small>169 Р <small>L </small> 179 Р</p>
                            </div>
                        </div>
                        <div class="coffee-unit">
                            <img src="images/14.png" alt="">
                            <div class="coffee-text">
                                <h5>ВИШНЕВЫЙ МОККО</h5>
                                <p class="small-text">Нежный кофейно-молочный напиток с добавлением варенья из ягод вишни, а также вишневого сиропа.</p>
                                <p><small>S </small>159 Р <small>M </small>179 Р <small>L </small> 189 Р</p>
                            </div>
                        </div>
                        <div class="coffee-unit">
                            <img src="images/15.png" alt="">
                            <div class="coffee-text">
                                <h5>ЯГОДНЫЙ ФРАППЕ</h5>
                                <p class="small-text">Фраппе с добавлением смузи из сезонных лесных ягод. Подается со свежими ягодами и листьями мяты.</p>
                                <p><small>S </small>169 Р <small>M </small>199 Р <small>L </small> 209 Р</p>
                            </div>
                        </div>
                    </div>
                </div>
                <h3>ДОБАВЬ В НАПИТОК:</h3>
                <div class="add">
                    <div class="add-list">
                        <div class="add-unit">
                            <p>ТОПИНГ НА ВЫБОР</p>
                            <p>29 Р</p>
                        </div>
                        <div class="add-unit">
                            <p>СИРОП НА ВЫБОР</p>
                            <p>29 Р</p>
                        </div>
                        <div class="add-unit">
                            <p>ВЗБИТЫЕ СЛИВКИ</p>
                            <p>29 Р</p>
                        </div>
                        <div class="add-unit">
                            <p>АЛЬТЕРНАТИВНОЕ МОЛОКО</p>
                            <p>49 Р</p>
                        </div>
                    </div>
                    <div class="add-list">
                        <div class="add-unit">
                            <p>СЛИВКИ</p>
                            <p>29 Р</p>
                        </div>
                        <div class="add-unit">
                            <p>МОЛОКО</p>
                            <p>29 Р</p>
                        </div>
                        <div class="add-unit">
                            <p>МАРШМЕЛЛОУ</p>
                            <p>15 Р</p>
                        </div>
                        <div class="add-unit">
                            <p>МОРОЖЕННОЕ</p>
                            <p>59 Р</p>
                        </div>
                    </div>
                    <div class="add-list">
                        <div class="add-unit">
                            <p>ИЗМЕЛЬЧЕННЫЙ ФУНДУК</p>
                            <p>29 Р</p>
                        </div>
                        <div class="add-unit">
                            <p>ИЗМЕЛЬЧЕННЫЙ АРАХИС</p>
                            <p>29 Р</p>
                        </div>
                        <div class="add-unit">
                            <p>СУШЕННЫЙ АНАНАС</p>
                            <p>39 Р</p>
                        </div>
                        <div class="add-unit">
                            <p>КОРИЦА</p>
                            <p>15 Р</p>
                        </div>
                    </div>
                </div>
                <p>РАЗМЕРЫ НАПИТКОВ: S - 250 МЛ, M - 330 МЛ, L - 450 МЛ. СИРОПЫ, ТОПИНГИ И ДРУГИЕ ДОПОЛНИТЕЛЬНЫЕ ИНГРЕДИЕНТЫ НЕ ВХОДЯТ В СТОИМОСТЬ И ДОБАВЛЯЮТСЯ В СТОИМОСТЬ НАПИТКА ДОПОЛНИТЕЛЬНО. В ОДИН НАПИТОК МОЖНО ДОБАВИТЬ НЕСКОЛЬКО СИРОПОВ ИЛИ ДРУГИХ
                    ДОПОЛНИТЕЛЬНЫХ ИНГРИДИЕНТОВ. САХАР ДОБАВЛЯЕТСЯ БЕСПЛАТНО И НЕ УВЕЛИЧИВАЕТ СТОИМОСТЬ НАПИТКА. РАЗМЕРЫ ПОРЦИИ ДОБАВОК: ТОПИНГ, СИРОП - 20 МЛ, МОЛОКО, СЛИВКИ - 100 МЛ, ВЗБИТЫЕ СЛИВКИ - 10 ГР, МАРШМЭЛЛОУ - 20 ГР, МОРОЖЕННОЕ - 50 ГР, ИЗМЕЛЬЧЕННЫЙ
                    ФУНДУК, АРАХИС, СУШЕНЫЙ АНАНАС - 15 ГР, КОРИЦА - 2 ГР. АЛЬТЕРНАТИВНОЕ МОЛОКО ПОЛНОСТЬЮ ЗАМЕНЯЕТ МОЛОКО В ОПРЕДЕЛЕННОМ НАПИТКЕ, ЕГО КОЛИЧЕСТВО ЗАВИСИТ ОТ РАЗМЕРА И ВИДА НАПИТКА.</p>
            </div>
        </div>
        <div id="promo" class="slider">
            <div class="item">
                <img src="images/banner1.png">
            </div>
            <div class="item">
                <img src="images/banner2.png">
            </div>
            <div class="item">
                <img src="images/banner1.png">
            </div>
            <div class="item">
                <img src="images/banner2.png">
            </div>
            <a class="previous" onclick="previousSlide()">&#10094;</a>
            <a class="next" onclick="nextSlide()">&#10095;</a>
        </div>
        <div class="content-dark">
            <div id="bonus" class="bonus">
                <div class="text">
                    <h2>БОНУСНАЯ ПРОГРАММА</h2>
                    <p>КОПИ БАЛЛЫ С КАЖДОГО СТАКАНЧИКА! ЗА ЛЮБОЙ НАПИТОК НА ТВОЙ БОНУСНЫЙ СЧЕТ НАЧИСЛЯЕТСЯ 30 БОНУСОВ. БОНУСЫ МОЖНО ПОТРАТИТЬ НА ЛЮБОЙ НАПИТОК ИЗ МЕНЮ, ОПЛАТИВ ИМИ ДО 100 ПРОЦЕНТОВ СТОМОСТИ НАПИТКА. ПРОВЕРИТЬ КОЛИЧЕСТВО БОНУСОВ МОЖНО В ЛИЧНОМ
                        КАБИНЕТЕ.
                    </p>
                </div>
                <div class="form">
                    <?php if (isset($_SESSION['user']['name'])): ?>
                        <h2>Здравствуйте, <?= $_SESSION['user']['name'] ?>!</h2>
                        <div class="login">
                            <form action="functions.php" method="POST">
                                <a href="profile.php">ЛИЧНЫЙ КАБИНЕТ</a>
                                <button type="submit" name="loguot_button">ВЫЙТИ</button>
                            </form>
                        </div>
                    <?php else: ?>
                    <h2>ЛИЧНЫЙ КАБИНЕТ</h2>
                    <form class="auth-reg" action="functions.php" method="POST">
                        <div>
                            <img src="images/input2.png" alt="">
                            <input type="text" id="usernumber" name="usernumber" class="phone" placeholder="+7(900) 000-00-00">
                        </div>
                        <div>
                            <img src="images/input1.png" alt="">
                            <input type="password" id="userpass" name="userpass" placeholder="·······">
                        </div>
                        <a href="registerform.php">ЗАРЕГИСТРИРОВАТЬСЯ В БОНУСНОЙ ПРОГРАММЕ</a>
                        <button type="submit" name="LogIn_button">ВОЙТИ</button>
                    </form>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </main>
    <?php require_once('footer.php')?>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.js" type="text/javascript"></script>
    <script>
        //Точка под меню
        function getCoords(elem) {
            let box = elem.getBoundingClientRect();
            return box.right;
        }

        function returnLeft() {
            let right = document.getElementsByClassName("nav-links")[0];
            let current = document.getElementsByClassName("selected")[0];
            return getCoords(right) - getCoords(current) + current.getBoundingClientRect().width / 2;
        }

        function dotPos() {
            let dot = document.getElementsByClassName("dot")[0];
            dot.style.right = Math.round(returnLeft()) + "px";
        }

        function setActive(id) {
            let srt = 'menu' + id;
            let temp = document.getElementById(srt);
            let current = document.getElementsByClassName("selected")[0];
            current.classList.remove("selected");
            temp.classList.add("selected");
            dotPos();
        }

        function isScrolledIntoView(elem) {
            var docViewTop = $(window).scrollTop();

            var elemTop = $(elem).offset().top;

            return (elemTop >= docViewTop + 100);
        }

        function isBottom() {
            let temp = $(document).height() - $(window).height();
            if ($(window).scrollTop() == temp) return true;
            else return false;
        }

        let arr = [
            document.getElementById('about-us'),
            document.getElementById('menu'),
            document.getElementById('promo'),
            document.getElementById('bonus')
        ];
        window.addEventListener('scroll', function() {
            for (let i = 1; i <= 4; i++) {
                let temp = arr[i];
                if (isBottom()) {
                    setActive(4);
                    break;
                }
                if (isScrolledIntoView(temp)) {
                    setActive(i);
                    break;
                }
            }

        });

        setTimeout(() => {
            setActive(1);
        }, 100);
        // document.addEventListener("load", setActive(1));
        setInterval(nextSlide, 5000);
        //Слайдер
        let slideIndex = 1;
        showSlides(slideIndex);

        function nextSlide() {
            showSlides(slideIndex += 1);
        }

        function previousSlide() {
            showSlides(slideIndex -= 1);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let slides = document.getElementsByClassName("item");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (let slide of slides) {
                slide.classList.remove("slideOn");
                slide.classList.add("slideOff");
            }
            slides[slideIndex - 1].classList.remove("slideOff");
            slides[slideIndex - 1].classList.add("slideOn");
        }



        $(".phone").mask("+7(999)999-99-99");

        let c1 = document.getElementById("parallax-1");

        document.addEventListener("mousemove", function(e) {
            MoveBackground(e);
        });

        function MoveBackground(e) {
            let offsetX0 = (e.clientX / window.innerWidth * 2);
            let offsetY0 = (e.clientY / window.innerHeight * 1);

            c1.setAttribute("style", "transform: translate3d(" + offsetX0 + "em, " + offsetY0 + "em, 0);");
        }
    </script>

</body>

</html>