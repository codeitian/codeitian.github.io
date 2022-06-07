let imagePreview = document.querySelector('#preview')
let text = document.querySelector('#noPreview')
let bigIMG = document.querySelector('#display')

function enlargeImg(pic){
    imagePreview.src = pic;
    text.style.display = 'none';
    bigIMG.classList.toggle('fade');    
}
setInterval(() => {bigIMG.classList.remove('fade')}, 1300);