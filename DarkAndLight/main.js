const button = document.querySelector('.button')
const banner =  document.querySelector('.banner')
const header = document.querySelector('.header')
const text =  document.querySelector('.text')
const logo =  document.querySelector('.logo')

button.addEventListener('click', switchToDark);

function switchToDark(){
    button.classList.toggle('toggled');
    banner.classList.toggle('toDark');
    header.classList.toggle('toDark');
    logo.classList.toggle('toLight');

    if(text.textContent === "LIGHT MODE ON!"){
        text.textContent = 'DARK MODE ON!';
    }else{
        text.textContent = 'LIGHT MODE ON!'
    }
}

