window.onload = () => {
    let cb = document.querySelector('.btn-container');
    let lp = document.querySelector('.loading');
    cb.style = "display:flex";
    lp.style = "display:none";
}


let page = 1;

let totalCard = document.querySelectorAll('.card').length;
let cards = document.querySelectorAll('.card');
let backBtn = document.getElementById('backBtn');
let nextBtn = document.getElementById('nextBtn');

function next(){
   
    page++;

    if(page > 0){
        backBtn.style = "display: flex";
    }else{
        backBtn.style = "display: none";
    }

    cards.forEach(card => {
        card.style = "display:  none";
    });
    document.getElementById(`card${page}`).style = "display: flex";

    if(page === totalCard){
        nextBtn.style = "display: none";
    }else{
        nextBtn.style = "display: flex";
    }

    console.log("cards: ", totalCard);
    console.log("page: ", page );
    
}

function back(){
    page--;

    if(page > 1){
        backBtn.style = "display: flex";
    }else{
        backBtn.style = "display: none";
    }

    cards.forEach(card => {
        card.style = "display:  none";
    });
    document.getElementById(`card${page}`).style = "display: flex";
    
    if(page === totalCard){
        nextBtn.style = "display: none";
    }else{
        nextBtn.style = "display: flex";
    }

    console.log("cards: ", totalCard);
    console.log("page: ", page );

}