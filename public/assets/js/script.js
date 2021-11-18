
// Fenêtre pop-up carte moriarty affichant les questions 
var btnPopup1 = document.getElementById('btnPopup1');
var overlay1 = document.getElementById('overlay1');
btnPopup1.addEventListener('click', e => {
    overlay1.style.display = 'block';
});


var btnClose1 = document.getElementById('btnClose1');
btnClose1.addEventListener('click', e => {
    overlay1.style.display = 'none';
});


// Fenêtre pop-up carte baker affichant les questions 
var btnPopup2 = document.getElementById('btnPopup2');
var overlay2 = document.getElementById('overlay2');
btnPopup2.addEventListener('click', e => {
    overlay2.style.display = 'block';
});

var btnClose2 = document.getElementById('btnClose2');
btnClose2.addEventListener('click', e => {
    overlay2.style.display = 'none';
});

// Fenêtre pop-up carte James affichant les questions 
var btnPopup3 = document.getElementById('btnPopup3');
var overlay3 = document.getElementById('overlay3');
btnPopup3.addEventListener('click', e => {
    overlay3.style.display = 'block';
});

var btnClose3 = document.getElementById('btnClose3');
btnClose3.addEventListener('click', e => {
    overlay3.style.display = 'none';
});







//reponses
function showContent() {
    element = document.getElementById("content");
    check = document.getElementById("check");
    if (check.checked) {
        element.style.display = 'block';
    }
    else {
        element.style.display = 'none';
    }
}
