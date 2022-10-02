const bigImgContainer = document.querySelector('.big-img-container');
const img = document.getElementById('big-img');
const closeContainer = document.querySelector('.close-img-container');

function openImage(pic){
    bigImgContainer.style.display = 'flex';
    img.src = pic;
    document.querySelector('body').style.overflowY = 'hidden';
}

closeContainer.addEventListener('click', () => {
    if(bigImgContainer.style.display == 'flex'){
        bigImgContainer.style.display = 'none';
        document.querySelector('body').style.overflowY = 'auto';
    }
});