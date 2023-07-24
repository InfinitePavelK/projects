const editNewsButton = document.getElementsByClassName('edit-news-button')[0];
const createNewsButton = document.getElementsByClassName('create-news-button')[0];
const editNewsBlock = document.getElementsByClassName('edit-news-block')[0];
const createNewsBlock = document.getElementsByClassName('create-news-block')[0];

window.onload = function() {
    editNewsBlock.classList.add('selected');
    editNewsButton.classList.add('selected');
}

createNewsButton.addEventListener('click', event => {
    createNewsBlock.classList.add('selected');
    createNewsButton.classList.add('selected');
    editNewsBlock.classList.remove('selected');
    editNewsButton.classList.remove('selected');
});

editNewsButton.addEventListener('click', event => {
    createNewsBlock.classList.remove('selected');
    createNewsButton.classList.remove('selected');
    editNewsBlock.classList.add('selected');
    editNewsButton.classList.add('selected');
});

const inputImage = document.getElementById('news-image');
const imageOfNews = document.getElementsByClassName('image-of-news')[0];

inputImage.addEventListener('change', event => {
    let fileName = inputImage.value;
    let idxDot = fileName.lastIndexOf(".") + 1;
    let extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
    if (extFile=="jpg" || extFile=="jpeg" || extFile=="png"){
        const reader = new FileReader();
        reader.addEventListener('load', (event) => {
            imageOfNews.src = event.target.result;
        });
        reader.readAsDataURL(inputImage.files[0]);
    } else {
        alert("Можно добаить только файлы изображений! (jpg, jpeg, png)");
        inputImage.value = '';
        inputImage.type = 'text';
        inputImage.type = 'file';
    }   
});

