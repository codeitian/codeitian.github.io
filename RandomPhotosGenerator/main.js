const button = document.querySelector('.btn');
const container = document.querySelector('.container');

button.addEventListener('click', ()=>{
    for(i=0; i < 5; i++){
        let newImg = document.createElement('img');
            newImg.src = `https://picsum.photos/200?random=${Math.ceil(Math.random()*1000)}`;
        container.appendChild(newImg);
    }
});

