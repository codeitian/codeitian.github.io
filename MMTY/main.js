const nicknames = ['Jesi', 'EsteeAC'];
const messages = [`Mishuuu ganda mo palagi. Take care always.`, `Hmm... I've had a crush on you and you know...`];
const relations = ['friend.'];

let typedName = document.querySelector('#n-name');
let relation = document.querySelector('.tmym');
let text = document.querySelector('#text');
let messageBox = document.querySelector('#theMessage');
let okBtn = document.querySelector('#okBtn').addEventListener('click', ()=>{

  if(typedName.value ===''){
    relation.textContent = '';
    text.textContent = '';
    alert('Please put your nickname. Make sure to uppercase the first letter.');
  }else if(typedName.value === nicknames[0]){
    messageBox.style.animation = 'height 2s'
    setTimeout(myInt, 2000);
    function myInt(){relation.textContent = `Hi, ${nicknames[0]}.`;
    text.textContent = messages[0];
  }}else if(typedName.value === nicknames[1]){
    messageBox.style.animation = 'height 2s'
    setTimeout(myInt, 2000);
    function myInt(){relation.textContent = `Hi, ${nicknames[1]}.`;
    text.textContent = messages[1];
  }}else{
    return;
  };

});
