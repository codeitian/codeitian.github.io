const bImage = document.querySelector('#bg-image');

window.addEventListener('scroll',() =>{
    updateImage();
});

function updateImage(){
    bImage.style.opacity = 1 - window.pageYOffset / 900;
    bImage.style.backgroundSize = 500 - window.pageYOffset/2 + '%';
}