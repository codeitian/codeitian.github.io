let taskList = document.querySelector('.taskList');
let add = document.querySelector('.addBtn');
let cancel = document.querySelector('.cancelBtn');

add.addEventListener('click', myTask);
cancel.addEventListener('click', cancelTask);

function myTask(e){
   e.preventDefault();
  let newTask = document.getElementById('addTask').value;

  if( newTask !== ''){
  let li = document.createElement('li');
  li.className = "task";

  li.appendChild(document.createTextNode(newTask));
  let deleteBtn = document.createElement("button");
  deleteBtn.className = "doneBtn";
  deleteBtn.appendChild(document.createTextNode('X'));

  li.appendChild(deleteBtn);
  taskList.appendChild(li);

//hide text after adding taskList
    if(taskList.hasChildNodes()){
      document.querySelector('.nothing').style.display = "none";
    }

//cleartextbox after adding task
  document.getElementById('addTask').value = '';

//delete task in LIST
    deleteBtn.addEventListener('click', function(){
      taskList.removeChild(li);
    })
  }else{
    alert('Please add a task first.');
  }
}

function cancelTask(){
  document.getElementById('addTask').value = '';
}
