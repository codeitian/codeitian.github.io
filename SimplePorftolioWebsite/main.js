window.addEventListener('load', () =>{
    document.querySelector('.loader').style.display = 'none';
});

let navbar = document.querySelector('#navbar');
let scrollUp = window.scrollY;

console.log(scrollUp);

window.addEventListener('scroll', ()=> {

    if(scrollUp < window.scrollY || window.scrollY == 0){
        navbar.classList.remove('scrolledUp');
    }else{
        navbar.classList.add('scrolledUp');
    }
    scrollUp = window.scrollY;

    console.log(scrollUp);
});

/////////////////////////////////////////////////////////////////////////////////

const link = document.querySelectorAll('nav ul li a');
const sec = document.querySelectorAll("section");
const act = document.querySelector(".active");

function activeMenu(){
    let Slen = sec.length;

    while(--Slen && window.scrollY + 300 < sec[Slen].offsetTop){}
    link.forEach(active => active.classList.remove('active'));
    link[Slen].classList.add('active');
}

activeMenu();
window.addEventListener('scroll', activeMenu);

/////////////////////////////////////////////////////////////////////////////////

let hburger = document.querySelector('.hburger-btn');
let hbars = document.querySelectorAll('.hbar')
let x = document.querySelector('.X');

hburger.addEventListener('click', ()=> {
  navbar.classList.toggle('toggled');
  hbars.forEach(hbar => hbar.classList.toggle('hide'));
  x.classList.toggle('showx');
})

/////////////////////////////////////////////////////////////////////////////////

let divHover = document.querySelector('#btnDownload');
let spanPs = document.querySelectorAll('#toAnimate');

console.log(spanPs);

divHover.addEventListener('mouseenter', () =>{
    spanPs.forEach(spanP => spanP.classList.add('animate'));
})

divHover.addEventListener('mouseleave', () =>{
    spanPs.forEach(spanP => spanP.classList.remove('animate'));
})