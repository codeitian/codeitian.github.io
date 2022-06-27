const card = document.querySelector('.card');
const btn = document.querySelector('#btn');

btn.addEventListener('click', ()=>{
    card.classList.toggle('active');

    if( btn.textContent == 'Show Card'){
        btn.textContent = 'Hide Card';
    }else{
        btn.textContent = 'Show Card'
    }
   
});