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
