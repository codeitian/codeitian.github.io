const button = document.querySelector('.btn');

button.addEventListener('mouseover', (event) =>{
    const y  = (event.pageY  - button.offsetTop);
    const x =(event.pageX  - button.offsetLeft);

    button.style.setProperty("--xPos", x + "px")
    button.style.setProperty('--yPos', y + 'px')
});