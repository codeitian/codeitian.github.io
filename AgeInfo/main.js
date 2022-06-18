let button = document.querySelector('#btnAge').addEventListener('click', function(){
    const category = ['kid', 'teenager', 'adult'];
    let img = document.querySelector('#agePic');
        img.addEventListener('animationend', function(){
            img.style.animation = '';
        })
    let age  = document.querySelector('#textAge').value;
    let time = document.querySelector('#time');
    let money = document.querySelector('#money');
    let energy = document.querySelector('#energy');
    let belong = document.querySelector('#ageIdentfied');

    if(age >= 20){
        img.src = `${category[2]}.png`;
        img.style.animation = `fade 2s`;
        time.style.width = "20%";
        money.style.width = "90%";
        energy.style.width = "50%";
        belong.textContent  = `You belong to ${category[2]}s`;
    }else if(age >= 13){
        img.src = `${category[1]}.png`;
        img.style.animation = `fade 2s`;
        time.style.width = "75%";
        money.style.width = "30%";
        energy.style.width = "70%";
        belong.textContent  = `You belong to ${category[1]}s`
    }else{
        img.src = `${category[0]}.png`;
        img.style.animation = `fade 2s`;
        time.style.width = "90%";
        money.style.width = "15%";
        energy.style.width = "80%";
        belong.textContent  = `You belong to ${category[0]}s`
    }

    let bars = document.querySelectorAll('#infobar>div>span');
});

