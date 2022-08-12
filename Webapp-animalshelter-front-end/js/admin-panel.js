// ===================================================Logging Out
let logOutBtn = document.querySelector('#logOutLink');
let logOutForm = document.querySelector('.logOut');
let noLogOut = document.querySelector('#no-btn');

logOutBtn.addEventListener('click', (e) =>{
    e.preventDefault();
    logOutForm.style.display = 'flex';
})

noLogOut.addEventListener('click', () =>{
    logOutForm.style.display = 'none';
})
