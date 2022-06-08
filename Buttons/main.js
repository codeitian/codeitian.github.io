function changeDivBg1(){
    let one = document.querySelector('.one');
    if (one.style.backgroundColor === 'red'){
        one.style.backgroundColor = "orange";
    }else{
        one.style.backgroundColor = 'red';
    }
}

function changeDivBg2(){
    let two = document.querySelector('.two');
    two.classList.toggle('yellow');
    
    if(two.style.animationName === 'gradient'){
        two.style.animationName = 'non';
    }else{
        two.style.animationName = 'gradient';
    }
}

function changeDivBg3(){
    let three = document.querySelector('.three');

    if(three.style.animationName === 'non'){
        three.style.animationName = 'rotate';
    }else{
        three.style.animationName = 'non';
    }
}