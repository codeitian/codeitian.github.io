let c = document.querySelector('#comment')
    const t = document.querySelector('.text')


function agreed(){
    t.style.display = 'flex';
    c.textContent = 'Great! Imma do more. :)';
}

function disagreed(){
    t.style.display = 'flex';
    c.textContent = 'Hmm maybe sometimes...';
}