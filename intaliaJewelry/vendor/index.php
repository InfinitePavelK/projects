<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>DIN LYKEE</title>
</head>
<body>
    <nav>
        <div class="navigation">
            <div class="logo">
                <a href="index.php">
                    <img src="images/logo.png" alt="" class="logo">
                </a>
            </div>
            <div class="nav-links">
                <a href="index.php#about-me" class="selected" id="l-about-me">ОБО МНЕ</a>
                <a href="index.php#deserts" class="" id="l-deserts">ДЕСЕРТЫ</a>
                <a href="index.php#courses" class="" id="l-courses">КУРСЫ</a>
                <a href="index.php#reviews" class="" id="l-reviews">ОТЗЫВЫ</a>
                <a href="index.php#social-media" class="" id="l-social-media">КОНТАКТЫ</a>
                <?php if (isset($_SESSION['user']['phone'])): ?>
                <a href="profile.php" class="auth">
                    <img src="images/brown-user.svg" alt="">
                </a>
                <a href="logout.php" class="auth">
                    <img src="images/logout.svg" alt="">
                </a>
                <?php else: ?>
                <a href="" class="auth" data-toggle="modal" data-target="#exampleModal">
                    <img src="images/brown-user.svg" alt="">
                </a>
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="images/logo.png" class="logo" alt="">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img src="images/cancel.svg" alt="">
                    </button>
                </div>
                <div class="modal-body">
                    <h4 class="v-main">ВОЙТИ В АККАУНТ</h4>
                    <h4 class="v-second">СОЗДАТЬ АККАУНТ</h4>
                    <div class="menu-change">
                        <nav v-bind:class="active" v-on:click.prevent>
                            <a href="#" class="l-main" v-on:click="makeActive('l-main')">АВТОРИЗАЦИЯ</a>
                            <a href="#" class="l-second" v-on:click="makeActive('l-second')">РЕГИСТРАЦИЯ</a>
                        </nav>
                    </div>
                    <div class="changed" v-on:click="hideTooltip">
                        <div class="v-main">
                            <form action="login.php" method="POST">
                                <input type="text" id="usernumber" name="usernumber" class="phone" placeholder="НОМЕР ТЕЛЕФОНА">
                                <input type="password" id="userpass" name="userpass" placeholder="ПАРОЛЬ">
                                <button type="submit">ВОЙТИ В АККАУНТ</button>
                            </form>
                        </div>
                        <div class="v-second">
                            <form action="register.php" method="POST">
                                <input type="text" id="usernumber" name="usernumber" class="phone" placeholder="НОМЕР ТЕЛЕФОНА">
                                <input type="password" id="userpass" name="userpass" placeholder="ПАРОЛЬ">
                                <button type="submit">СОЗДАТЬ АККАУНТ</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="dark">
        <div class="about-me" id="about-me">
            <div>
                <div class="line"></div>
                <h2>ПОЗВОЛЬТЕ ПРЕДСТАВИТЬСЯ</h2>
                <!-- <?= $SESSION['message'] ?> -->
                <div>
                    <p>Здравствуй! Меня зовут Анастасия! Я профессиональный кондитер. Пеку десерты с детства. За последнее время я прошла множество обучений у известных российских и иностранных шефов, у меня большое количество кондитерских сертификатов об обучении.</p>
                    <p>Кулинария для меня не просто рутинная работа, в первую очередь, это искусство. Я делаю каждый десерт уникальным. А главное: я ценю самый дорогой ресурс - время. Поэтому стараюсь организовать его так, чтобы за минимальный срок – получить качественный результат.</p>
                </div>
                <div class="line"></div>
                <h2>БЫТЬ КОНДИТЕРОМ ПРОСТО</h2>
                <div>
                    <p>Десерты может готовить каждый! Если ты всю жизнь мечтал воплощать свои кондитерские фантазии в красивых и главное вкусных десертах, то действуй. На моих курсах каждый сможет понять, как сделать изумительные эклеры и торты без особых хлопот.</p>
                </div>
            </div>
            <div>
                <img src="images/about-us-image.png" alt="">
            </div>
        </div>
    </section>
    
    <section class="light">
        <div class="deserts" id="deserts">
            <div class="first-text">
                <div class="line"></div>
                <h2>ДЕСЕРТЫ НА ЛЮБОЙ ВКУС</h2>
                <div>
                    <p>Нежные сливочные эклеры под сверкающей зеркальной глазурью или хрустящие пироженые Павола с нежным кремом и ягодной начинкой? Шоколадный макарон или клубника в шоколаде? А может... эскимо в молочком шоколаде со вкусом медовика? Или вкусный тортик с начинкой на выбор и собственным оригинальным дизайном?</p>
                    <p>Не так важно, что вы сейчас выберете. Любой из этих десертов, как и множество других, я могу приготовить в кратчайшие сроки для того, чтобы порадовать тебя сладким лакомством твоей мечты.</p>
                </div>
            </div>
            <div class="image"><img src="images/dessert-1.png" alt=""></div>
            <div class="image"><img src="images/dessert-2.png" alt=""></div>
            <div class="image"><img src="images/dessert-3.png" alt=""></div>
            <div class="image"><img src="images/dessert-4.png" alt=""></div>
            <div class="image"><img src="images/dessert-5.png" alt=""></div>
            <div class="text">
                <div class="line"></div>
                <h2>ОСОБЫЙ ПОДХОД</h2>
                <p>Грустно, когда не находишь то, что искал. Но не в случае DIN LYKKE! Любая начинка, любой десерт из ваших желаний может оказаться на вашем столе в ближайшее время: просто напиши мне и я попробую приготовить этот уникальный и вкуснейший десерт специально для тебя.</p>
            </div>
            <div class="image"><img src="images/dessert-6.png" alt=""></div>
            <div class="image"><img src="images/dessert-7.png" alt=""></div>
            <div class="image"><img src="images/dessert-8.png" alt=""></div>
            <div class="image"><img src="images/dessert-9.png" alt=""></div>
            <div class="image short"><img src="images/dessert-10.png" alt=""></div>
            <div class="image short"><img src="images/dessert-11.png" alt=""></div>
            <div class="image short"><img src="images/dessert-12.png" alt=""></div>
            <div class="image short"><img src="images/dessert-13.png" alt=""></div>
            <div class="fade-block"></div>
            <div class="bottom-button">
                <a href="#">ПОДРОБНЕЕ В INSTAGRAM <img src="images/white-instagram.svg" alt=""></a>
            </div>
        </div>
    </section>
    <section class="dark">
        <div class="courses" id="courses">
            <div>
                <div class="line"></div>
                <h2>ОНЛАЙН-КУРСЫ</h2>
                <div>
                    <p>Возможно всё - стоит только захотеть! Если вы мечтали начать готовить красивые, нежные и главное вкусные десерты, то я могу с этим помочь. Мне хочется, чтобы как можно больше людей умели готовить качественные и красивые десерты.  А что главное, так еще больше людей смогут насладиться их прекрасным вкусом!</p>
                    <p>Кулинария для меня не просто рутинная работа, в первую очередь, это искусство. Я делаю каждый десерт уникальным. А главное: я ценю самый дорогой ресурс - время. Поэтому стараюсь организовать его так, чтобы за минимальный срок – получить качественный результат.</p>
                    <p>Стоимость курсов, а также время их проведения уточняются отдельно. По завершению курса каждый участник получит сертификат о его прохождении в электронном формате.</p>
                </div>
                <div class="courses-button">
                    <a href="#" class="yout">ПРОБНЫЙ УРОК НА YOUTUBE <img src="images/brown-youtube.svg" alt=""></a>
                    <a href="#" class="inst">ПОДРОБНЕЕ В INSTAGRAM <img src="images/brown-instagram.svg" alt=""></a>
                </div>
            </div>
            <div>
                <img src="images/courses.png" alt="">
            </div>
            
        </div>
    </section>
    <section class="light">
        <div class="reviews" id='reviews'>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-flex">
                            <div class="review">
                                <img src="images/left-quote.png" alt="">
                                <p>Добрый вечер!) Наконец-то дошли руки написать отзыв!😅 Спасибо огромное за безумно вкусный шоколад! Заказывала маме на 29 ноября, она осталась довольна! Долго разглядывала конфетки, говорила о том, какая кропотливая работа и что автор этого произведения - настоящий мастер своего дела! Буду рекомендовать вас друзьям обязательно!:) Успехов и процветания в вашем деле! ❤❤❤</p>
                                <div class="review-user">
                                    <div>
                                        <div class="inst-color">
                                            <img src="images/review-user1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="line long"></div>
                                        <h2>Анастасия</h2>
                                        <p>@anastasiaaivanova</p>
                                    </div>
                                </div>
                            </div>
                            <div class="review">
                                <img src="images/left-quote.png" alt="">
                                <p>Девочки, это нечто! 😱 Ничего настолько же вкусного и красивого в жизни не встречал!!! Ваши десерты задают отличное настроение на весь день, могут порадовать любого, особенно такого сладкоежку, как я! 🎂🎂🎂 Буду заказывать еще, спасибо огромное!</p>
                                <div class="review-user">
                                    <div>
                                        <div class="inst-color">
                                            <img src="images/review-user2.jpg" alt="">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="line long"></div>
                                        <h2>Чарли</h2>
                                        <p>@charlychocolatefactory</p>
                                    </div>
                                </div>
                            </div>
                            <div class="review">
                                <img src="images/left-quote.png" alt="">
                                <p>Добрый вечер!) Наконец-то дошли руки написать отзыв!😅 Спасибо огромное за безумно вкусный шоколад! Заказывала маме на 29 ноября, она осталась довольна! Долго разглядывала конфетки, говорила о том, какая кропотливая работа и что автор этого произведения - настоящий мастер своего дела! Буду рекомендовать вас друзьям обязательно!:) Успехов и процветания в вашем деле! ❤❤❤</p>
                                <div class="review-user">
                                    <div>
                                        <div class="inst-color">
                                            <img src="images/review-user3.jpg" alt="">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="line long"></div>
                                        <h2>Лилия</h2>
                                        <p>@lilith1890</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex">
                            <div class="review">
                                <img src="images/left-quote.png" alt="">
                                <p>Добрый вечер!) Наконец-то дошли руки написать отзыв!😅 Спасибо огромное за безумно вкусный шоколад! Заказывала маме на 29 ноября, она осталась довольна! Долго разглядывала конфетки, говорила о том, какая кропотливая работа и что автор этого произведения - настоящий мастер своего дела! Буду рекомендовать вас друзьям обязательно!:) Успехов и процветания в вашем деле! ❤❤❤</p>
                                <div class="review-user">
                                    <div>
                                        <div class="inst-color">
                                            <img src="images/review-user1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="line long"></div>
                                        <h2>Анастасия</h2>
                                        <p>@anastasiaaivanova</p>
                                    </div>
                                </div>
                            </div>
                            <div class="review">
                                <img src="images/left-quote.png" alt="">
                                <p>Девочки, это нечто! 😱 Ничего настолько же вкусного и красивого в жизни не встречал!!! Ваши десерты задают отличное настроение на весь день, могут порадовать любого, особенно такого сладкоежку, как я! 🎂🎂🎂 Буду заказывать еще, спасибо огромное!</p>
                                <div class="review-user">
                                    <div>
                                        <div class="inst-color">
                                            <img src="images/review-user2.jpg" alt="">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="line long"></div>
                                        <h2>Чарли</h2>
                                        <p>@charliechocolatefactory</p>
                                    </div>
                                </div>
                            </div>
                            <div class="review">
                                <img src="images/left-quote.png" alt="">
                                <p>Случайно открыла для себя эту чудное место. Ура!!! 🤗 Осталась очень довольна обслуживанием, большим ассортиментом необходимых для меня товаров и удивлена доступным ценам! Заказывали эклеры и капкейки, получили подробную информацию о вариантах начинок и украшений десертов. То, насколько все было изумительно и вкусно словами передать невозможно! Рекомендую всем!!! 😍</p>
                                <div class="review-user">
                                    <div>
                                        <div class="inst-color">
                                            <img src="images/review-user3.jpg" alt="">
                                        </div>
                                    </div>
                                    <div>
                                        <div class="line long"></div>
                                        <h2>Лилия</h2>
                                        <p>@lilith1890</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <img src="images/left-arrow.png" alt="">
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <img src="images/right-arrow.png" alt="">
                  <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>
    <section class="dark">
        <div class="social-media" id="social-media">
            <div>
                <img src="images/social media.png" alt="">
            </div>
            <div>
                <div class="line"></div>
                <h2>СОЦИАЛЬНЫЕ СЕТИ</h2>

                <div>
                    <p>Найти DIN LYKKE можно во многих социальных медиа. За процессом приготовления десертов, интересными сюжетами работы кондитера можно наблюдать в Tik-Tok. Почитать отзывы довольных клиентов, насладиться внешним видом пироженых и тортов, а также сделать заказ можно в Instagram. Ознакомться с пробным уроком из курса можно на YouTube. Связаться со мной лично можно ВКонтакте, в WhatsApp или в Telegram.</p>
                </div>
                <div class='social-media-buttons'>
                    <div>
                        <a href="#">СТРАНИЦА В INSTAGRAM <img src="images/brown-instagram.svg" alt=""></a>
                        <a href="#" class="short"><img src="images/brown-vk.svg" alt=""></a>
                    </div>
                    <div>
                        <a href="#">СТРАНИЦА В TIKTOK <img src="images/brown-tiktok.svg" alt=""></a>
                        <a href="#" class="short"><img src="images/brown-whatsapp.svg" alt=""></a>
                    </div>
                    <div>
                        <a href="#">ПРОБНЫЙ УРОК НА YOUTUBE <img src="images/brown-youtube.svg" alt=""></a>
                        <a href="#" class="short"><img src="images/brown-telegram.svg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <img src="images/logo.png" alt="">
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.5/vue.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.js" type="text/javascript"></script>
<script>
        $(".phone").mask("+7(999)999-99-99");
        document.getElementsByClassName('v-main')[0].style.display = 'block';
        document.getElementsByClassName('v-second')[0].style.display = 'none';
        document.getElementsByClassName('v-main')[1].style.display = 'block';
        document.getElementsByClassName('v-second')[1].style.display = 'none';
        var demo = new Vue({
            el: '.menu-change',
            data: {
                active: 'l-main'
            },
            methods: {
                makeActive: function(item) {
                    this.active = item;
    
                    if (item == 'l-main') {
                        document.getElementsByClassName('v-main')[0].style.display = 'block';
                        document.getElementsByClassName('v-second')[0].style.display = 'none';
                        document.getElementsByClassName('v-main')[1].style.display = 'block';
                        document.getElementsByClassName('v-second')[1].style.display = 'none';
                    } else if (item == 'l-second') {
                        document.getElementsByClassName('v-main')[0].style.display = 'none';
                        document.getElementsByClassName('v-second')[0].style.display = 'block';
                        document.getElementsByClassName('v-main')[1].style.display = 'none';
                        document.getElementsByClassName('v-second')[1].style.display = 'block';
                    }
                }
            }
        });


        let nav = document.getElementsByClassName("nav-links");

function getCoords(elem) {
    let box = elem.getBoundingClientRect();
    return box.right;
}

function setActive(id) {
    let srt = "l-"+arr[id].id;
    let temp = document.getElementById(srt);
    let current = document.getElementsByClassName("selected")[0];
    current.classList.remove("selected");
    temp.classList.add("selected");
}

function isScrolledIntoView(elem) {
    var docViewTop = $(window).scrollTop();

    var elemTop = $(elem).offset().top;

    return (elemTop >= docViewTop-elem.offsetHeight/2);
}

function isBottom() {
    let temp = $(document).height() - $(window).height();
    if ($(window).scrollTop() == temp) return true;
    else return false;
}

function isTop(){
    if ($(window).scrollTop() <50) return true;
    else return false;
}

function checkAndChange(){
    for (let i = 0; i < 5; i++) {
        let temp = arr[i];
        if (isBottom()) {
            setActive(5);
            break;
        }
        if (isTop()){
            setActive(0)
            break;
        }
        if (isScrolledIntoView(temp)) {
            setActive(i);
            break;
        }
    }
}

let arr = [
    document.getElementById('about-me'),
    document.getElementById('deserts'),
    document.getElementById('courses'),
    document.getElementById('reviews'),
    document.getElementById('social-media')
];

window.addEventListener('scroll', function() {
    checkAndChange();
});

checkAndChange();
    </script>
    
</body>
</html>