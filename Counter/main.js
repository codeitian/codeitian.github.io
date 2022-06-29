const plus = document.querySelector('.increment');
const minus = document.querySelector('.decrement');
let counter = document.querySelector('.counter');
    counter.addEventListener('animationend', ()=>{
    counter.style.animation='';
})
let count = 0;

plus.addEventListener('click', ()=>{
    count++
    counter.style.animation = 'slideDown .4s forwards';
    counter.innerText = count;
})

minus.addEventListener('click', ()=>{
    count--
    counter.style.animation = 'slideUp .4s forwards';
    if(count < 0){
       count = 0;
       counter.style.animation = '';
    }

    counter.innerText = count;
})