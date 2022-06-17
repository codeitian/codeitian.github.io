document.querySelector('body').addEventListener('mousemove', eyeball);


function eyeball(){
    'use strict';
    let eyew = document.querySelectorAll('.eyew');
    let iris = window.getComputedStyle(eyew, '::before');
    let head = document.querySelector('.head');

    iris.forEach(function(iris){
        
        let x = (iris.getBoundingClientRect().left) + (iris.clientWidth / 2);
        let y = (iris.getBoundingClientRect().top) + (iris.clientHeight / 2);

        let radian = Math.atan2(event.pageX - x, event.PageY- y);
        let rot = (radian * (180 / Math.PI) * -1) + 270;

        iris.style.transform = "rotate("+rot +"deg)";
        head.classList.toggle('red');
    })

    console.log(iris);
}
