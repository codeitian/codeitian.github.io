const screenwidth = window.innerWidth;

window.addEventListener('resize', () => {
    let card = document.getElementById('sideCard');
    let cardIcon = document.getElementById('cardIcon');
    if(window.innerWidth <= 700){
        card.style.display = "none";
        cardIcon.name = "id-card-outline";
        card.style.background = "#333";
    }else{
        card.style.display = "flex";
        card.style.background = "background: linear-gradient(to bottom right, rgba(255,255,255,0.03), rgba(255,255,255,0.1)) ;";
    }
});