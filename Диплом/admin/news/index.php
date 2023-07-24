<?php 
require_once("../header.php");
checkUser();
if($_SESSION['user']['userType'] == 'manager'){
    exit("<meta http-equiv='refresh' content='0; url= /admin/orders/'>");
}
$newsArray = getNews();
?>
    <section class="no-scroll-body">
        <?php require_once("../sidemenu.php");?>
        <main>
            <section class="content news">
                <h1>НОВОСТИ</h1>
                <div class="line"></div>
                <div class="news-main-buttons">
                    <button class="create-news-button">Создание новостей</button>
                    <button class="edit-news-button">Редактирование новостей</button>   
                </div>
                <div class="create-news-block">
                    <form action="../vendor/userfunctions.php" class="create-news" method="POST" enctype="multipart/form-data">
                        <div class="upload-image">
                            <h3>Изображение</h3>
                            <div class="image-prev">
                                <img src="/admin/img/default-image-news.png" alt="" class="image-of-news">
                            </div>
                            <input type="file" name="news-image" id="news-image" accept="image/*">
                        </div>
                        <div class="news-title">
                            <h3>Заголовок</h3>
                            <input type="text" name="news-title">
                        </div>
                        <div class="news-subtitle">
                            <h3>Подзаголовок</h3>
                            <input type="text" name="news-subtitle">
                        </div>
                        <div class="news-text">
                            <h3>Основной текст</h3>
                            <textarea name="news-text" cols="30" rows="15" wrap="on"></textarea>
                        </div>
                        <button type="submit" class="create-news-form-button" name="createNewsButton">Опубликовать новость</button>
                    </form>
                </div>
                <div class="edit-news-block">
                    <?foreach ($newsArray as $key => $value):?>
                    <div class="news-item">
                        <div class="news-left-block">
                            <div class="block-img">
                                <img src="<?= '../img/upload/' . $value['imageName'];?>" alt="" class="news-image">
                            </div>
                            <div class="news-text">
                                <h3><?=$value['title'];?></h3>
                                <p><?=$value['subtitle'];?></p>
                                <p class="date"><?=$value['date'];?></p>
                            </div>
                        </div>
                        <div class="news-right-block">
                            <a class="news-item-edit-button button" href="edit-news.php?news-id=<?=$key?>&action=edit">Редактировать новость</a>
                            <a class="news-item-delete-button button" href="/admin/vendor/userfunctions.php?news-id=<?=$key?>&action=delete">Удалить новость</a>
                        </div>
                    </div>
                    <?endforeach;?>
                </div>
            </section>
        </main>
    </section>
    <script src="main.js"></script>
<?php require_once("../footer.php")?>