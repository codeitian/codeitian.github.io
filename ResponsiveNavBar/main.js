let hbutton = document.querySelector('.hbutton')
let navbarlinks = document.querySelector('.navbarlinks')

hbutton.addEventListener('click', ShowNav)

function ShowNav(){
  navbarlinks.classList.toggle('show');
  hbutton.classList.toggle('toggle');
}
