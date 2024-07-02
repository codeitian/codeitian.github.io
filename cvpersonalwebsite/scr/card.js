function showPC(){
    let card = document.getElementById('sideCard');
    let cardIcon = document.getElementById('cardIcon');
    if(card.style.display == "none"){
        card.style.display = "flex";
        card.style.background = "#333";
        cardIcon.name = "close-outline";
    }else{
        card.style.display = "none";
        cardIcon.name = "id-card-outline";
        card.style.background = "background: linear-gradient(to bottom right, rgba(255,255,255,0.03), rgba(255,255,255,0.1)) ;";
    }
}