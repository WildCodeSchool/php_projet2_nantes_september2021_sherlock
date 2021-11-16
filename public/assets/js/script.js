
// Fenêtre pop-up carte moriarty affichant les questions 
var btnPopup1 = document.getElementById('btnPopup 1');
var overlay1 = document.getElementById('overlay 1');
btnPopup1.addEventListener('click',openMoadl);
function openMoadl() {
overlay1.style.display='block';
}

var btnClose1 = document.getElementById('btnClose 1');
btnClose1.addEventListener('click',closeModal);
function closeModal() {
    overlay1.style.display='none';
    }

    // Fenêtre pop-up carte baker affichant les questions 
var btnPopup2 = document.getElementById('btnPopup 2');
var overlay2 = document.getElementById('overlay 2');
btnPopup2.addEventListener('click',openMoadl);
function openMoadl() {
overlay2.style.display='block';
}

var btnClose2 = document.getElementById('btnClose 2');
btnClose2.addEventListener('click',closeModal);
function closeModal() {
    overlay2.style.display='none';
    }

  // Fenêtre pop-up carte James affichant les questions 
  var btnPopup3 = document.getElementById('btnPopup 3');
  var overlay3 = document.getElementById('overlay 3');
  btnPopup3.addEventListener('click',openMoadl);
  function openMoadl() {
  overlay3.style.display='block';
  }
  
  var btnClose3 = document.getElementById('btnClose 3');
  btnClose3.addEventListener('click',closeModal);
  function closeModal() {
      overlay3.style.display='none';
      }
  