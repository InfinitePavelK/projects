<?php 
if (!isset($_GET['news-id'])){
    header('Location: /admin/news/');
}
require_once("../header.php");
checkUser();
$news = editNewsGetAssoc($_GET['news-id']);
?>
    <section class="no-scroll-body">
        <?php require_once("../sidemenu.php");?>
        <main>
            <section class="content news">
                <h1>РЕДАКТИРОВАНИЕ</h1>
                <div class="line"></div>
                <div class="create-news-block d-block">
                    <form action="../vendor/userfunctions.php" class="create-news" method="POST" enctype="multipart/form-data">
                        <div class="upload-image">
                            <h3>Изображение</h3>
                            <div class="image-prev">
                                <img src="<?= '/admin/img/upload/' . $news['imagename']?>" alt="" class="image-of-news">
                            </div>
                            <input type="file" name="news-image" id="news-image" accept="image/*">
                        </div>
                        <div class="news-title">
                            <h3>Заголовок</h3>
                            <input type="text" name="news-title" value="<?=$news['title']?>">
                        </div>
                        <div class="news-subtitle">
                            <h3>Подзаголовок</h3>
                            <input type="text" name="news-subtitle" value="<?=$news['subtitle']?>">
                        </div>
                        <div class="news-text">
                            <h3>Основной текст</h3>
                            <textarea name="news-text" cols="30" rows="15" wrap="on"><?=$news['text']?></textarea>
                        </div>
                        <input type="hidden" name="news-id" value="<?=$news['id']?>">
                        <button type="submit" class="create-news-form-button" name="editNewsButton">Редактировать новость</button>
                    </form>
                </div>
            </section>
        </main>
    </section>
    <script src="edit-news.js"></script>
<?php require_once("../footer.php")?>