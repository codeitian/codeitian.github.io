let scrollUp = window.scrollY;
const navBar = document.querySelector('.navbar')

window.addEventListener('scroll', ()=> {
    if(scrollUp < window.scrollY || window.scrollY == 0){
        navBar.classList.remove('scrolled');
        
    }else{
        navBar.classList.add('scrolled');
       
    }
    scrollUp = window.scrollY;
});

const link = document.querySelectorAll('nav ul li a');
const sec = document.querySelectorAll("section");
const act = document.querySelector(".active");

function activeMenu(){
    let len = sec.length;
    while(--len && window.scrollY + 300 < sec[len].offsetTop){}
    link.forEach(active => active.classList.remove('active'));
    link[len].classList.add('active');
}

activeMenu();
window.addEventListener('scroll', activeMenu);