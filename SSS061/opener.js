function openclosecatalog(elem) {
    if (elem.className == "selected") {
        elem.className = "";
        elem.nextSibling.nextSibling.className = "";
        if (parent.id != "top-catalog") {
            alldeselected();
        }
    } else {
        wayselected = [];
        alldeselected();
        wayselected[0] = elem;
        wayselected[1] = elem.nextSibling.nextSibling;
        parent = elem.parentElement.parentElement;
        if (parent.id != "top-catalog") {
            wayselected[2] = parent;
            wayselected[3] = parent.previousSibling.previousSibling;
        }
        for (let index = 0; index < wayselected.length; index++) {
            wayselected[index].className = "selected";
        }
    }
}

function alldeselected() {
    select = document.getElementsByClassName("selected");
    while (select.length > 0) {
        select[0].classList.remove('selected');
    }

}