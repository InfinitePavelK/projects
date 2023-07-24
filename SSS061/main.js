const charlink = document.getElementById('info-char-link');
const desclink = document.getElementById('info-desc-link');
const charblock = document.getElementById('info-char');
const descblock = document.getElementById('info-desc');


window.onload = function() {
    charblock.classList.add('on-screen');
    charlink.classList.add('on-screen');
}

$(function() {
    charlink.addEventListener('click', event => {
        charblock.classList.add('on-screen');
        descblock.classList.remove('on-screen');
        charlink.classList.add('on-screen');
        desclink.classList.remove('on-screen');
    });

    desclink.addEventListener('click', event => {
        descblock.classList.add('on-screen');
        charblock.classList.remove('on-screen');
        desclink.classList.add('on-screen');
        charlink.classList.remove('on-screen');
    });
});
