const body = document.body;
const root = document.documentElement;
const toggleBtn = document.getElementById('toggleBtn');
const star = document.querySelector('.star');

const setMode = (isDarkMode) => {
    console.log(isDarkMode);
    body.classList.toggle('dark-mode', isDarkMode);
    localStorage.setItem('mode', isDarkMode ? 'dark-mode' : '');
    root.style.setProperty('--bgcolor', isDarkMode ? '#1f1f1f' : '#ffffff');
    root.style.setProperty('--fontcolor', isDarkMode ? '#ffffff' : '#1f1f1f');
    star.style.setProperty('left', isDarkMode ? '74%' : '0px');
    star.style.setProperty('background-color', isDarkMode ? '#ccc' : '#f3f369');
    toggleBtn.classList.toggle('dark', isDarkMode)
};

toggleBtn.addEventListener('click', () => setMode(!body.classList.contains('dark-mode')));

setMode(localStorage.getItem('mode') === 'dark-mode');




// let toggleBtn = document.getElementById('toggleBtn');

// toggleBtn.addEventListener('click', toggleMode)

// function toggleMode() {
//     const body = document.body;
//     body.classList.toggle('dark-mode');

//     const isDarkMode = body.classList.contains('dark-mode');

//     localStorage.setItem('mode', isDarkMode ? 'dark-mode' : '');

//     if(isDarkMode){
//         document.documentElement.style.setProperty('--bgcolor', '#1f1f1f');
//         document.documentElement.style.setProperty('--fontcolor', '#ffffff');
//     }else{

//         document.documentElement.style.setProperty('--bgcolor', '#ffffff');
//         document.documentElement.style.setProperty('--fontcolor', '#1f1f1f');
//     }
// }

// // Check if a mode preference is stored in local storage
// const currentMode = localStorage.getItem('mode');
// if (currentMode) {
//     document.body.classList.add(currentMode);
//     document.documentElement.style.setProperty('--bgcolor', '#1f1f1f');
//     document.documentElement.style.setProperty('--fontcolor', '#ffffff');
// }else{
//     document.documentElement.style.setProperty('--bgcolor', '#ffffff');
//     document.documentElement.style.setProperty('--fontcolor', '#1f1f1f');
// }