setInterval(myTime, 1000);
function myTime(){
    const d = new Date();
    let text = d.toLocaleTimeString();
    document.querySelector(".time").textContent = text; 
}
myTime();

let addbtn = document.querySelector('#add');
let cancelbtn = document.querySelector('#cancel');
let time = document.querySelector(".time").textContent
let tasklist = document.querySelector('#tasks');
let task = document.querySelector('#tasktxt');

addbtn.addEventListener('click', () =>{

    if(task.value === ''){
    alert('PUT SOMETHING YOU IDIOT!!!!!!!!!!!!!!!!!!');
        return;
    }else{
    let newtask = document.createElement('li');
    let newP =document.createElement('p');
    let delBtn = document.createElement('button');
        delBtn.className = 'delBtn';
    let X = document.createTextNode('X');
    let newSpan = document.createElement('span');
    let todo = document.createTextNode(task.value);
    let currentTime = document.createTextNode(time);

    newP.appendChild(todo);
    newSpan.appendChild(newP);
    newSpan.appendChild(currentTime);
    delBtn.appendChild(X);
    newSpan.appendChild(delBtn);
    newtask.appendChild(newP);
    newtask.appendChild(newSpan);
    document.querySelector('#tasks').appendChild(newtask);
    task.value = '';

    delBtn.addEventListener('click', () => {
        tasklist.removeChild(newtask);
     });
    }
   return;
});

cancelbtn.addEventListener('click', () => {
   let task = document.querySelector('#tasktxt');
    task.value = '';
    return;
});


