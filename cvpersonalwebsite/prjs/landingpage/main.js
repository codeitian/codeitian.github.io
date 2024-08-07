// scroll to very top
window.scrollTo({ top: 0, behavior: 'smooth' });

//active section
let links =  document.querySelectorAll('nav span ul a');

function navigate(button){
    links.forEach(link => {
       link.className = "";
    });

    button.className = "active";
}

//scroll detection
let lastScrollTop = 0;
let navBar = document.getElementById('navBar');

window.addEventListener("scroll", function() {
  let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

  if (scrollTop > lastScrollTop) {
    navBar.style = "top:-500px";
  } else {
    navBar.style = "top:0;";
  }

  lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; // For Mobile or negative scrolling
}, false);

//setting active links when scrolling
const sec = document.querySelectorAll("section");
const act = document.querySelector(".active");

function activeMenu(){
    let secLength = sec.length;
    while(--secLength && window.scrollY + 300 < sec[secLength].offsetTop){}
    links.forEach(active => active.classList.remove('active'));
    links[secLength].classList.add('active');

}

activeMenu();
window.addEventListener('scroll', activeMenu);


//responsiveness

function toggleLinks(){
  let linkWrapper = document.querySelector('nav span ul');
  // linkWrapper.style = "left:0;";
  
  if(linkWrapper.style.left == "0px"){
    linkWrapper.style = "left:-200vw;";

    document.querySelector('.icon').name = "menu-outline";
  }else{
    linkWrapper.style = "left:0px;";
    document.querySelector('.icon').name = "close-outline";
  }
}

let menuBTn = document.querySelector('.menu');
menuBTn.addEventListener('click', toggleLinks);

window.addEventListener('resize', ()=>{
  document.querySelector('nav span ul').style = "left: -200vw;";
  document.querySelector('.icon').name = "menu-outline";
})
