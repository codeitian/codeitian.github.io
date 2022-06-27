const btn =document.querySelector('#btn');
const btnC =document.querySelector('#Cbtn');
const trailerC = document.querySelector('.trailer-container');
const video = document.querySelector('video');

btn.addEventListener('click', ()=>{
    trailerC.classList.remove('active');    
});

btnC.addEventListener('click', ()=>{
    trailerC.classList.add('active'); 
    video.pause();   
});

