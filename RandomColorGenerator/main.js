const containers = document.querySelector('.wrapper');

for(let i = 0; i < 30; i++){
    let newContainer = document.createElement('div');
    newContainer.classList.add('color-container');
    containers.appendChild(newContainer);
}

function randomColor(){
    const chars = '0123456789abcdef';
    const colorCodeLength = 6;
    let colorCode = '';
    
    for (let index = 0; index < colorCodeLength; index++) {
      const raNumber = Math.floor(Math.random()*chars.length);

      colorCode += chars.substring(raNumber, raNumber + 1);
    }
    
    return colorCode;
}

randomColor();

const colorContainers = document.querySelectorAll('.color-container');

function generateColors(){
    colorContainers.forEach( (colorContainer)=>{
        const newColor = randomColor();
        colorContainer.style.backgroundColor = `#${newColor}`;
        colorContainer.innerText = `#${newColor}`;
    })
}
generateColors();
