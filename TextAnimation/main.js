const container = document.querySelector('.container');
const job = ['Digital Artist.', 'Web Developer.', 'Student.', 'Introvert.'];
let jobIndex = 0;
let characterIndex = 0;

updateIndex();

function updateIndex(){
    characterIndex++;
    container.innerHTML = ` <h1>I am ${job[jobIndex].slice(0, 1) === 'I' ? 'an' : 'a'} ${job[jobIndex].slice(0, characterIndex)}</h1>`;

    if(characterIndex === job[jobIndex].length){
        jobIndex++;
        characterIndex = 0;   
    }

    if(jobIndex === job.length){
        jobIndex = 0;   
    }

    setTimeout(updateIndex, 200);
}