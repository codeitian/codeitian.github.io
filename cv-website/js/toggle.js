const hbutton = document.querySelector('.hbutton');
const navbarlinks  = document.querySelector('.navbarlinks');

hbutton.addEventListener('click', () => {

    if(navbarlinks.style.display == 'none'){
        navbarlinks.style.display = 'block';
        hbutton.className = "fa fa-times hbutton";
    }else{
        navbarlinks.style.display = 'none';
        hbutton.className = "fa fa-bars hbutton";
    }
});

const links =  document.querySelectorAll('.links');


links.forEach(link => {
    link.addEventListener('click', () => {
        if(navbarlinks.style.display == 'block'){
            navbarlinks.style.display = 'none';
            hbutton.className = "fa fa-bars hbutton";
        }else{
            navbarlinks.style.display = 'block';
            hbutton.className = "fa fa-times hbutton";
        }
    });
});

window.addEventListener('load', () =>{
    console.log('Webpage loaded 100%');
});
