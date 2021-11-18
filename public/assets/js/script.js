
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
<<<<<<< HEAD
  
  var btnClose3 = document.getElementById('btnClose3');
  btnClose3.addEventListener('click',e=>{
    overlay3.style.display='none';
});

// Fenêtre pop-up carte moriarty affichant les indices dans texte indice sur la page Game
var btnPopup4 = document.getElementById('btnPopup4');
var overlay4 = document.getElementById('overlay4');
btnPopup4.addEventListener('click',e=>{
overlay4.style.display='block';
});

var btnClose4 = document.getElementById('btnClose4');
btnClose4.addEventListener('click',e=>{
    overlay4.style.display='none';
});

// Fenêtre pop-up carte Baker affichant les indices dans texte indice sur la page Game
var btnPopup5 = document.getElementById('btnPopup5');
var overlay5 = document.getElementById('overlay5');
btnPopup5.addEventListener('click',e=>{
overlay5.style.display='block';
});

var btnClose5 = document.getElementById('btnClose5');
btnClose5.addEventListener('click',e=>{
    overlay5.style.display='none';
});

// Fenêtre pop-up carte James affichant les indices dans texte indice sur la page Game 
var btnPopup6 = document.getElementById('btnPopup6');
var overlay6 = document.getElementById('overlay6');
btnPopup6.addEventListener('click',e=>{
overlay6.style.display='block';
});

var btnClose6 = document.getElementById('btnClose6');
btnClose6.addEventListener('click',e=>{
    overlay6.style.display='none';
});

// Fenêtre pop-up carte moriarty affichant les indices dans texte indice sur la page Police
var btnPopup7 = document.getElementById('btnPopup7');
var overlay7 = document.getElementById('overlay7');
btnPopup7.addEventListener('click',e=>{
overlay7.style.display='block';
});

var btnClose7 = document.getElementById('btnClose7');
btnClose7.addEventListener('click',e=>{
    overlay7.style.display='none';
});

// Fenêtre pop-up carte Baker affichant les indices dans texte indice sur la page Police
var btnPopup8 = document.getElementById('btnPopup8');
var overlay8 = document.getElementById('overlay8');
btnPopup8.addEventListener('click',e=>{
overlay8.style.display='block';
});

var btnClose8 = document.getElementById('btnClose8');
btnClose8.addEventListener('click',e=>{
    overlay8.style.display='none';
});

// Fenêtre pop-up carte James affichant les indices dans texte indice sur la page Police
var btnPopup9 = document.getElementById('btnPopup9');
var overlay9 = document.getElementById('overlay9');
btnPopup9.addEventListener('click',e=>{
overlay9.style.display='block';
=======

var btnClose3 = document.getElementById('btnClose3');
btnClose3.addEventListener('click', e => {
    overlay3.style.display = 'none';
>>>>>>> d739e1afebebc94f9cc3d4791efa861e3f2f501f
});

var btnClose9 = document.getElementById('btnClose9');
btnClose9.addEventListener('click',e=>{
    overlay9.style.display='none';
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
<<<<<<< HEAD

function reanswer(){
    document.getElementById('reponse').style.display = 'none';
}

=======
>>>>>>> d739e1afebebc94f9cc3d4791efa861e3f2f501f
