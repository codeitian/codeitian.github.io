let addbtn = document.querySelector('#add');
let cancelbtn = document.querySelector('#cancel');

setInterval(myTime, 1000);
function myTime(){
    const d = new Date();
    let text = d.toLocaleTimeString();
    document.querySelector(".time").textContent = text; 
}
myTime();


addbtn.addEventListener('click', () =>{

setInterval(myTime, 1000);
function myTime(){
    const d = new Date();
    let text = d.toLocaleTimeString();
    document.querySelector(".time").textContent = text; 
}
myTime();


let time = document.querySelector(".time").textContent;
let tasklist = document.querySelector('#tasks');
let task = document.querySelector('#tasktxt');



    if(task.value === ''){
    alert('PUT SOMETHING YOU IDIOT!!!!!!!!!!!!!!!!!!');
        return;
    }else{
    let newtask = document.createElement('li');
        newtask.className = 'list-task'
    let newP = document.createElement('p');
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

 
    let taskNo =  document.querySelector("#taskNo");
    const taskAdded = document.querySelectorAll(".list-task");
    let msg = document.querySelector("#randomText");
    taskNo.textContent = taskAdded.length;
    let sticker = document.querySelector("#thePic");

    if(taskAdded.length >= 10){
        taskNo.style.color = 'red';
        msg.textContent = 'That seems a lot, but you can do it!'
        sticker.src = `10tuzki.png`;
    }else if(taskAdded.length > 5){
        taskNo.style.color = 'orange';
        msg.textContent = 'You really got much things to do...'
        sticker.src = `6tuzki.png`;
    }else{
        taskNo.style.color = '#080820';
        msg.textContent = `Not much, it's all right.`
        sticker.src = `1tuzki.png`;
    }

    delBtn.addEventListener('click', () => {
        tasklist.removeChild(newtask);

        let taskNo =  document.querySelector("#taskNo");
        const taskAdded = document.querySelectorAll(".list-task");
        let msg = document.querySelector("#randomText");
        taskNo.textContent = taskAdded.length;
        let sticker = document.querySelector("#thePic");

        if(taskAdded.length >= 10){
            taskNo.style.color = 'red';
            sticker.src = `10tuzki.png`;
            msg.textContent = 'That seems a lot, but you can do it!'
        }else if(taskAdded.length > 5){
            taskNo.style.color = 'orange';
            msg.textContent = 'You really got much things to do...'
            sticker.src = `6tuzki.png`;
        }else if(taskAdded.length >= 1){
            taskNo.style.color = '#080820';
            msg.textContent = `Not much, it's all right.`
            sticker.src = `1tuzki.png`;
        }else{
            taskNo.style.color = '#080820';
            msg.textContent = `Seems like you got nothing left to do. YEY!`
            sticker.src = `0tuzki.png`;
        }
     });

    }
   return;
});

cancelbtn.addEventListener('click', () => {
   let task = document.querySelector('#tasktxt');
    task.value = '';
    return;
});

let leftBox = document.querySelector('.left');
let timeC = document.querySelector('.time-container');
let tasksC = document.querySelector('.tasks-container');
document.querySelector('#l-arrow').addEventListener('click',() => {
    leftBox.classList.toggle('hide');
    timeC.classList.toggle('hide');
    tasksC.classList.toggle('hide');
    timeC.style.animation = 'show 1.8s linear';
    tasksC.style.animation = 'show 1.8s linear';
    document.querySelector('.fa').classList.toggle('fa-chevron-right');
    document.querySelector('#l-arrow').classList.toggle('toggled');
});

function myDate(){
    let cd = new Date();
    let dateNow = cd.toLocaleDateString();
    document.querySelector("#cDate").textContent = dateNow; 
}
myDate();

