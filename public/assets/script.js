
document.querySelector(".test").addEventListener("click", e=>{
    document.querySelector(".listeQuestions").classList.remove("hidden")
})

var overlay = document.getElementById("bodypage");

document.querySelector(".test").addEventListener("click", closeModal);
function closeModal(){
    overlay=style.display="none";
}
    

$('.moriarty').click(function(){
    $('.listeQuestions').remove('hidden');
});

// 
// document.getElementById("bodypage").classList.add("hidden")