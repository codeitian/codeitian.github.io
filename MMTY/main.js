const nicknames = ['Jm'];
const messages = ['Salamat sa pagtry...hshshshshsh'];
const relations = ['friend.'];

let typedName = document.querySelector('#n-name');
let relation = document.querySelector('.tmym');
let text = document.querySelector('#text');
let messageBox = document.querySelector('#theMessage');
let okBtn = document.querySelector('#okBtn').addEventListener('click', ()=>{

  if(typedName.value ===''){
    alert('Please put your nickname. Make sure to uppercase the first letter.')
  }else if(typedName.value === nicknames[0]){
    messageBox.style.animation = 'height 2s';

    setInterval(myInt, 2000);
    function myInt(){relation.textContent = `To me you're a ${relations[0]}`;
    text.textContent = messages[0];
  }
  }else{
    return;
  }

});
