const body = document.querySelector('body');

body.addEventListener('mousemove', (e)=>{
    // console.log('oX '+e.offsetX);
    // console.log('oY '+e.offsetY);
    // console.log('eX '+e.clientX);
    // console.log('eY '+e.clientY);
    const x = e.offsetX;
    const y = e.offsetY;

    const bubble = document.createElement('span');
    bubble.style.left = x+`px`;
    bubble.style.top = y+`px`;
    body.appendChild(bubble);

    const size = Math.random()*100;
    bubble.style.height = size+`px`;
    bubble.style.width = size+`px`;

    setTimeout(()=>{
        bubble.remove();
    }, 3000);
})

