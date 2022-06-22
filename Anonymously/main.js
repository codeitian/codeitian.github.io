let typing = document.querySelector('#txtarea');
let label = document.querySelector('#labelM');
let pS = document.querySelector('.ps');

    typing.addEventListener('keydown', () => {
        if(typing.value !== ''){
            label.classList.add('animate');
            pS.style.opacity = '.7';
            return;
        }else{
            label.classList.remove('animate');
            pS.style.opacity = '0';
            return;
        };
    });
