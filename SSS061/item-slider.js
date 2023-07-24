document.body.onclick = function(event) {
    event = event || window.event;
    let elem = event.target;
    let main_image = document.getElementsByClassName('item-max')[0];
    let div_list = document.querySelectorAll('.list-of-images .item-block');
    
    if (elem.classList.contains('item-min')){
        main_image.src = elem.src;

        div_list.forEach(elem_div => {
            elem_div.classList.remove('item-on-screen');
        });

        elem.parentNode.classList.add('item-on-screen');
    }
}