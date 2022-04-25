const hbutton = document.getElementsByName('hbutton')[0]
const navbarlinks = document.querySelector('.navbarlinks')

hbutton.addEventListener('click', () => {
    navbarlinks.classList.toggle('show');
    hbutton.classList.toggle('toggled');
})

var fullImgBox = document.querySelector('#fullImgBox')
var fullImg = document.querySelector('#fullImg')

function openFullImg(pic){
    fullImgBox.style.display = 'flex';
    fullImg.src = pic;
}

function closeFullImg(){
    fullImgBox.style.display = 'none';
}