const txtA = document.querySelector('#txtarea');
const total = document.querySelector('#tChar');
const remain = document.querySelector('#rChar');

txtA.addEventListener('keyup', ()=>{
    updateCounter();
})

updateCounter();

function updateCounter(){
    total.textContent = `Total Characters: ${txtA.value.length}`;

   let remainChar = txtA.getAttribute('maxlength') - txtA.value.length;

    remain.textContent = `Remaining: `+ remainChar;
}