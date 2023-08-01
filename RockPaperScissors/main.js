const startBtn = document.getElementById("startBtn");
const bestScore = document.getElementById("bestScore");
const bestScoreText = document.getElementById("bestScoreText");
const playerName = document.getElementById("playerName");
const startScreen = document.querySelector(".startScreen");
const bestScoreGoal = document.querySelector(".bestScoreGoal");
const enteredName = document.querySelector(".enteredName");
let bestScoreToBeat


 // Get the value of the "player" parameter from the URL
 const playerValue = new URLSearchParams(window.location.search).get('player');

 // Output "player" to the console
 console.log(playerValue);

function start(){
    if(bestScore.value < 1 || bestScore.value == "e"){
        bestScoreText.textContent = "Invalid Best Score. Must be at least 1";
        bestScoreText.style = "color:#f00";
        bestScore.focus();
    }else{
        startScreen.style = "display: none";
        bestScoreGoal.textContent = bestScore.value;
        bestScoreToBeat = parseInt(bestScore.value);
        console.log(bestScoreToBeat);

        if(playerName.value !== ""){
            enteredName.textContent = playerName.value;
        }else{
            enteredName.textContent = "Anonymogus";
        }
    }
}

const displayHuman = document.getElementById("displayHuman");
const displayAI = document.getElementById("displayAI");

let playerScore = 0;
let robot = 0;


function proceed(chosen){

//for player
    displayHuman.src = "images/"+chosen+".png";

//for robot
    const choices = ["rock","paper","scissor"];

    const indexOfChoice =  Math.floor(Math.random() * 3);
    let AIchosen  = choices[indexOfChoice];
    displayAI.src = "images/"+AIchosen+".png";

//processing the game

if(chosen == "rock" && AIchosen == "rock"){

}else if(chosen == "rock" && AIchosen == "paper"){
    robot++;
}else if(chosen == "rock" && AIchosen == "scissor"){
    playerScore ++;
}else if(chosen == "paper" && AIchosen == "rock"){
    playerScore ++;
}else if(chosen == "paper" && AIchosen == "paper"){

}else if(chosen == "paper" && AIchosen == "scissor"){
    robot++;
}else if(chosen == "scissor" && AIchosen == "rock"){
    robot++;
}else if(chosen == "scissor" && AIchosen == "paper"){
    playerScore ++;
}else if(chosen == "scissor" && AIchosen == "scissor"){

}else{
    window.alert("WARNING: SOMER ERROR OCCURED!");
}

const playerScoreText = document.querySelector(".playerScore");
const aiScoreText = document.querySelector(".aiScore");
    playerScoreText.textContent = playerScore;
    aiScoreText.textContent = robot;

const emojiHUMAN = document.getElementById("emojiHUMAN");
const emojiAI = document.getElementById("emojiAI");
if(playerScore > robot){
    emojiHUMAN.src = "images/okhuman.png";
    emojiAI.src = "images/sadai.png";
}else if(playerScore == robot){
    emojiHUMAN.src = "images/madhuman.png";
    emojiAI.src = "images/madai.png";
}else{
    emojiHUMAN.src = "images/sadhuman.png";
    emojiAI.src = "images/okai.png";
}

if(bestScoreToBeat == playerScore){
    window.alert("YOU WON!");
    window.location.href = "result.html?player="+  enteredName.textContent;
}else if(bestScoreToBeat == robot){
    window.alert("YOU LOSE!");
    window.location.href = "result.html?player=robot";
}else{

}

}