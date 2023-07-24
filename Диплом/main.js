const newsList = document.getElementsByClassName('news-item');
const newsListLenght = newsList.length;
var currentNews = 0;
// window.onload = newsSliderOnClick();
window.onload = slider();

// function newsSliderOnClick() {
//     for (let index = 0; index < newsListLenght; index++) {
//         const el = newsList[index];
//         el.addEventListener('click', event => {
//             newsListSliderSelect(el);
//         });
//     };     
// }

function newsListSliderSelect (el) {
    for (let i = 0; i < newsListLenght; i++) {
        const element = newsList[i];
        element.classList.remove('select');
    }
    el.classList.add('select');
    newsSliderMain(el);
}

function newsSliderMain(el) {
    let mainNews = document.getElementsByClassName('main-news')[0];
    let mainNewsImage = mainNews.getElementsByTagName('img')[0];
    let mainNewsTitle = mainNews.getElementsByTagName('h3')[0];
    let mainNewsSubtitle = mainNews.getElementsByTagName('p')[0];

    let selectedNewsImage = el.getElementsByTagName('img')[0];
    let selectedNewsTitle = el.getElementsByTagName('h4')[0];
    let selectedNewsSubtitle = el.getElementsByTagName('p')[0];

    mainNewsImage.src = selectedNewsImage.src;
    mainNewsTitle.textContent = selectedNewsTitle.textContent;
    mainNewsSubtitle.textContent = selectedNewsSubtitle.textContent;

}

function slider() {
    newsSliderMain(newsList[currentNews]);
    newsListSliderSelect(newsList[currentNews]);
    currentNews++;
    if(currentNews >= newsListLenght){
        currentNews = 0;
    }
}

setInterval(slider, 5000)

var element = document.getElementById('customerPhone');
var maskOptions = {
    mask: '+{7}(000)000-00-00',
    lazy: false
} 
var mask = new IMask(element, maskOptions);

var element3 = document.getElementById('customerName');
var maskOptions3 = {    
    mask:function (value) {
        if(/[А-Я][а-я]*/.test(value))
            return true;
        return false;
    },
    lazy: false
} 
var mask3 = new IMask(element3, maskOptions3);


var inputCustomerName = false;
var inputCustomerPhone = false;
var inputCustomerEmail = false;

mask.on("accept", function() {
    let el = document.getElementById("customerPhone");
    el.style.borderColor = '#C33C54';
    deleteBtnName();
    mask.on("complete", function() {
        el.style.borderColor = '#1D4990';
        inputCustomerPhone = true;
        giveBtnName();
    });
});

mask3.on("accept", function() {
    let el2 = document.getElementById("customerName");
    el2.style.borderColor = '#C33C54';
    deleteBtnName();
    mask3.on("complete", function() {
        el2.style.borderColor = '#1D4990';
        inputCustomerName = true;
        giveBtnName();
    });
});

function deleteBtnName() {
    let btn = document.getElementById("buttonFormNewOrder");
    btn.name = '';
    btn.type = 'button';
}

function giveBtnName() {
    if (inputCustomerName && inputCustomerPhone && inputCustomerEmail){
        let btn = document.getElementById("buttonFormNewOrder");
        btn.name = 'newOrderFromSite';
        btn.type = 'submit';
    }
}

const EMAIL_REGEXP = /^(([^<>()[\].,;:\s@"]+(\.[^<>()[\].,;:\s@"]+)*)|(".+"))@(([^<>()[\].,;:\s@"]+\.)+[^<>()[\].,;:\s@"]{2,})$/iu;
const inputEmail = document.getElementById('customerEmail');

function isEmailValid(value) {
 	return EMAIL_REGEXP.test(value);
}

function onInput() {
	if (isEmailValid(inputEmail.value)) {
        inputCustomerEmail = true;
        giveBtnName();
		inputEmail.style.borderColor = '#1D4990';
	} else {
        inputCustomerEmail = false;
        deleteBtnName();
		inputEmail.style.borderColor = '#C33C54';
	}
}

inputEmail.addEventListener('input', onInput);

const burgerMenuButton = document.getElementById('burger-menu');
const burgerMenuLinks = document.getElementsByClassName('mobile-nav-links')[0];
var isOpen = false;

burgerMenuButton.addEventListener('click', event => {
    if(isOpen) {
        burgerMenuLinks.classList.remove('selected');
        isOpen = false;
    } else {
        burgerMenuLinks.classList.add('selected');
        isOpen = true;
    }
});