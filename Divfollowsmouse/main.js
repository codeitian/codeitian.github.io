let cursor = document.getElementById('cursor');
let rec = document.querySelector('.rec');
let body = document.getElementsByTagName('body')[0];

document.addEventListener('mousemove', followMouse);

function followMouse(e){
    let x = e.clientX;
    let y = e.clientY;

    cursor.style.left = x + "px";
    cursor.style.top = y + "px";
    body.style.backgroundColor = "rgba( "+x+", "+y+", 175, 0.8)";
}

console.log(body);
