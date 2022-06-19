let loader = document.querySelector('#loader');
window.addEventListener('load', function(){
    loader.style.display = 'none';
    // loader.parentElement.removeChild(loader);
});


let button = document.querySelector('#btnAge').addEventListener('click', function(){
    let img = document.querySelector('#agePic');
        img.addEventListener('animationend', function(){
            img.style.animation = '';
        });
    let age  = document.querySelector('#textAge').value;
    let time = document.querySelector('#time');
        time.addEventListener('animationend', function(){
        time.style.animation = '';
        });
    let money = document.querySelector('#money');
        money.addEventListener('animationend', function(){
        money.style.animation = '';
        });
    let energy = document.querySelector('#energy');
        energy.addEventListener('animationend', function(){
        energy.style.animation = '';
        });
    let belong = document.querySelector('#ageIdentfied');
        belong.style.textTransform = "uppercase";
    const category = ['baby', 'kid', 'teenager', 'youngadult', 'adult', 'old'];

    if(age === ''){
        alert('Please type your age.');
        return;
    }

    if(age > 110){
        alert('Probably not existing anymore.');
        return;
    }else if(age >= 60){
        img.src = `${category[5]}.png`;
        img.style.animation = `fade 2s`;
        time.style.width = "20%";
        money.style.width = "75%";
        energy.style.width = "19%";
        belong.textContent  = `${category[5]}s`;
    }else if(age >= 27){
        img.src = `${category[4]}.png`;
        img.style.animation = `fade 2s`;
        time.style.width = "25%";
        money.style.width = "90%";
        energy.style.width = "50%";
        belong.textContent  = `${category[4]}s`;
    }else if(age >= 20){
        img.src = `${category[3]}.png`;
        img.style.animation = `fade 2s`;
        time.style.width = "70%";
        money.style.width = "49%";
        energy.style.width = "70%";
        belong.textContent  = `${category[3]}s`;
    }else if(age >= 13){
        img.src = `${category[2]}.png`;
        img.style.animation = `fade 2s`;
        time.style.width = "75%";
        money.style.width = "30%";
        energy.style.width = "80%";
        belong.textContent  = `${category[2]}s`
    }else if(age >= 3){
        img.src = `${category[1]}.png`;
        img.style.animation = `fade 2s`;
        time.style.width = "95%";
        money.style.width = "19%";
        energy.style.width = "85%";
        belong.textContent  = `${category[1]}s`
    }else{
        img.src = `${category[0]}.png`;
        img.style.animation = `fade 2s`;
        time.style.width = "99%";
        money.style.width = "0%";
        energy.style.width = "60%";
        belong.textContent  = `${category[0]}`
    }

    let bars = document.querySelectorAll('#infobar>div>span');
    bars.forEach(bar => {
        if (bar.style.width >= "50%"){
            bar.style.backgroundColor = "green";
            bar.style.animation = `width 1.5s ease-in-out`;
        }else if(bar.style.width >= "20%"){
            bar.style.backgroundColor = "orange";
            bar.style.animation = `width 1.5s ease-in-out`;
        }else{
            bar.style.backgroundColor = "red";
            bar.style.animation = `width 1.5s ease-in-out`;
        };

    });

});

