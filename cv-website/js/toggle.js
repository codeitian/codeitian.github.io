const hbutton = document.querySelector('.hbutton');
const navbarlinks  = document.querySelector('.navbarlinks');
const windowScreen = window.matchMedia("(max-width: 700px)");
const links =  document.querySelectorAll('.links');
const inputs =  document.querySelectorAll('.inputs');

window.addEventListener('load', () =>{
    console.log('Webpage loaded 100%');
});

document.getElementById('send-btn').addEventListener('click', (e) =>{
    e.preventDefault();
    alert("This form is not working yet.");
})

// THIS FUNCTION WILL RUN AT RUN TIME
myFunction() // Call listener function at run time

function myFunction() {
    if (windowScreen.matches) { // If media query matches //This script will run only if device screen width is less than 700px
        hbutton.style.display = 'flex';
        navbarlinks.style.display = 'none';
        if(navbarlinks.style.display == 'none'){
            navbarlinks.style.display = 'none';
            hbutton.className = "fa fa-bars hbutton";
        }else{
            navbarlinks.style.display = 'block';
            hbutton.className = "fa fa-times hbutton";
        }

        hbutton.addEventListener('click', () => {
            if(navbarlinks.style.display != 'block'){
                navbarlinks.style.display = 'block';
                hbutton.className = "fa fa-times hbutton";
            }else{
                navbarlinks.style.display = 'none';
                hbutton.className = "fa fa-bars hbutton";
            }
        });
        
        links.forEach(link => {
            link.addEventListener('click', () => {
                if(navbarlinks.style.display != 'none'){
                    navbarlinks.style.display = 'none';
                    hbutton.className = "fa fa-bars hbutton";
                }else{
                    navbarlinks.style.display = 'none'; 
                    hbutton.className = "fa fa-times hbutton";
                }

                console.log('clicked link');
            });
        });
    } else {   //This script will run only if device screen width is equal or greater than 700px

        navbarlinks.style.display = 'flex';
        hbutton.style.display = 'none';

        if(navbarlinks.style.display != 'flex'){
            navbarlinks.style.display = 'flex';
        }

        links.forEach(link => {
            link.addEventListener('click', () =>   {
                if(navbarlinks.style.display != 'flex'){
                    navbarlinks.style.display = 'flex';
                }else{
                    navbarlinks.style.display = 'flex';
                }
            });
        });
    }
  }
  
  // /////////////////////////////////////////////////////onresize of screen with
  window.addEventListener('resize', () => {
    if(windowScreen.matches){
        hbutton.style.display = 'flex';
        navbarlinks.style.display = 'none';
    }else{
        hbutton.style.display = 'none';
        navbarlinks.style.display = 'flex';
    }
    // window.location.reload();
    myFunction();
})




//   window.addEventListener('resize', () =>{
//     var w = window.outerWidth;
//     var h = window.outerHeight;
//     var txt = "Window size: width=" + w + ", height=" + h;
//     console.log(txt);  
// })//check for curren screen width

console.log(window.outerWidth);
console.log(window.outerHeight);