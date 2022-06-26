const navbar = document.querySelector('#navbar');
const article = document.querySelector('#theArticle');

window.addEventListener('scroll', ()=>{
//   console.log(window.scrollY);


if(window.scrollY > article.offsetTop - navbar.offsetHeight - 20){
    navbar.classList.add('scrolled');
}else{
    navbar.classList.remove('scrolled');
}
});

//   console.log(navbar.offsetHeight);//navbarHeight;
//   console.log(navbar.offsetTop);// distance from the most top of page