const lFormContainer = document.querySelector('.login-form-container');
const sFormContainer = document.querySelector('.sign-up-form-container');
const showLForm = document.querySelector('#logInBtn');
const closeform = document.querySelectorAll('#closeform');
const showSForm = document.querySelector('#signUpBtn');

showLForm.addEventListener('click', () =>{
    lFormContainer.style.display = 'flex';
    document.querySelector('body').style.overflowY = "hidden";
});

showSForm.addEventListener('click', () =>{
    sFormContainer.style.display = 'flex';
    lFormContainer.style.display = 'none';
});

closeform.forEach(closeF => {
    closeF.addEventListener('click', () =>{
        if( lFormContainer.style.display == 'flex'){
            lFormContainer.style.display = 'none';
            document.querySelector('body').style.overflowY = "scroll";
        }else{
            sFormContainer.style.display = 'none';
            document.querySelector('body').style.overflowY = "scroll";
        }
    });
});

