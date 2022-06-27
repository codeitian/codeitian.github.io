let animals = ['cat', 'dog', 'pig', 'cow'];
const wrapper = document.querySelector('.wrapper');

animals.forEach((animal) =>{
    const btn = document.createElement('button');
    btn.classList.add('btn');
    btn.innerText = animal;
    btn.style.textTransform = 'capitalize';
    btn.style.backgroundImage = `url("animals/${animal}.png")`;
    wrapper.appendChild(btn);
   
    const audio = document.createElement('audio');
    audio.src = `sounds/${animal}.mp3`
    wrapper.appendChild(audio);

    btn.addEventListener('click', () =>{
        audio.play();
    })

    window.addEventListener('keydown', (e)=>{
       
        if(e.key === animal.slice(0, 1)){
            audio.play();
            btn.style.transform = 'scale(0.9)';
            btn.style.backgroundColor = 'yellow';
        };

        setTimeout(()=>{
            audio.pause();
            btn.style.transform = '';
            btn.style.backgroundColor = '';
        }, 3000);

    })
});
