const buttons = document.querySelectorAll('.button');
const contents = document.querySelectorAll('.content');
const tabs = document.querySelector('.tabs');

tabs.addEventListener('click', (e)=>{

    const id = e.target.dataset.id;

    if(id){
      buttons.forEach((btn)=>{
        btn.classList.remove('live');
      });
      e.target.classList.add('live');

      contents.forEach((content)=>{
        content.classList.remove('live');
      });

      const element = document.getElementById(id);

      console.log(element);
      element.classList.add('live');
    }
})