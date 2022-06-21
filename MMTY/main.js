window.addEventListener('load', () =>{
  document.querySelector('.loader').style.display = 'none';
});

const nicknames = ['Jesi', 'EsteeAC'];
const messages = [`Mishuuu ganda mo palagi. Take care always.`, `Hmm... I've had a crush on you and you know...`];
const relations = ['friend.'];

let typedName = document.querySelector('#n-name');
let relation = document.querySelector('.tmym');
let text = document.querySelector('#text');
let messageBox = document.querySelector('#theMessage');
    messageBox.addEventListener('animationend', () => {
      messageBox.style.animation = '';
    });
let infoMessage = document.querySelector('.info');

let okBtn = document.querySelector('#okBtn').addEventListener('click', ()=>{

  if(typedName.value === '' || nicknames.includes(typedName.value) === false){
    relation.textContent = '';
    text.textContent = '';
      infoMessage.style.display = 'flex';
    setTimeout(myMessage, 3500);
    function myMessage() {
      infoMessage.style.display = 'none';
    }
  }else if(typedName.value === nicknames[0]){
    messageBox.style.animation = 'height 2s';
    setTimeout(myInt, 2000);
    function myInt(){relation.textContent = `Hi, ${nicknames[0]}.`;
    text.textContent = messages[0];
    typedName.value = '';
  }}else if(typedName.value === nicknames[1]){
    messageBox.style.animation = 'height 2s';
    setTimeout(myInt, 2000);
    function myInt(){relation.textContent = `Hi, ${nicknames[1]}.`;
    text.textContent = messages[1];
    typedName.value = '';
  }}else{
    return;
  };

});
