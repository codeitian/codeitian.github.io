// ===================================================Form-Container
let closeFormContainerBtn =  document.querySelectorAll('.close-form-container-button');
const loginBtn = document.querySelector('.login-button');
const loginFormContainer =  document.getElementById('login-form-container');
const signUpBtn = document.querySelector('.signup-link');
const signupFormContainer =  document.getElementById('signup-form-container');


loginBtn.addEventListener('click', ()=>{
    loginFormContainer.style.display = 'flex';
})

signUpBtn.addEventListener('click', ()=>{
    loginFormContainer.style.display = 'none';
    signupFormContainer.style.display = 'flex';
})

closeFormContainerBtn.forEach(button =>{
    button.addEventListener('click', () =>{
        if(loginFormContainer.style.display === 'flex'){
            loginFormContainer.style.display = 'none';
        }else if(signupFormContainer.style.display === 'flex'){
            signupFormContainer.style.display = 'none';
        }else{}
    })
})

// ===================================================Show-Password-Forms
const eyeSlash =  document.querySelector('#eye');
const pwInputLogin =  document.querySelector('#password-login')

eyeSlash.addEventListener('click', () =>{
    if(eyeSlash.className === "fa fa-eye-slash"){
        eyeSlash.className = "fa fa-eye";
        eyeSlash.style.color = "var(--red-orange)";
        pwInputLogin.type = "text";
        pwInputLogin.autofocus = true;
    }else{
        eyeSlash.className = "fa fa-eye-slash";
        pwInputLogin.type = "password";
        eyeSlash.style.color = "#888";
    }
})

const eyeSlash1 =  document.querySelector('#eye1');
const newPassword =  document.querySelector('#new-password')

eyeSlash1.addEventListener('click', () =>{
    if(eyeSlash1.className === "fa fa-eye-slash"){
        eyeSlash1.className = "fa fa-eye";
        eyeSlash1.style.color = "var(--red-orange)";
        newPassword.type = "text";
        newPassword.autofocus = true;
    }else{
        eyeSlash1.className = "fa fa-eye-slash";
        newPassword.type = "password";
        eyeSlash1.style.color = "#888";
    }
})

const eyeSlash2 =  document.querySelector('#eye2');
const retypedPassword =  document.querySelector('#retyped-password')

eyeSlash2.addEventListener('click', () =>{
    if(eyeSlash2.className === "fa fa-eye-slash"){
        eyeSlash2.className = "fa fa-eye";
        eyeSlash2.style.color = "var(--red-orange)";
        retypedPassword.type = "text";
        retypedPassword.autofocus = true;
    }else{
        eyeSlash2.className = "fa fa-eye-slash";
        retypedPassword.type = "password";
        eyeSlash2.style.color = "#888";
    }
})
