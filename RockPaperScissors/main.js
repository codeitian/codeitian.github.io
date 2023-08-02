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
        bestScore.style = "border: 1px solid #f00;";
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


    let displayIMG = document.querySelectorAll(".displayIMG");
    let light  = document.querySelector(".light");

    displayIMG.forEach(DI => {

        displayAI.src = "images/rock.png";
        displayHuman.src = "images/rock.png";
        DI.animation = "animation: top .5s linear 2;";
        DI.classList.remove('animated'); // Remove the class to stop the animation
        void DI.offsetWidth; // Trigger a reflow to force a restart (Optional, but can be useful to restart the animation)
        DI.classList.add('animated'); // Add the class to start the animation again
        light.style = " background-color:#ccc;";
    });


    setTimeout(() => {
        
//for player
    displayHuman.src = "images/"+chosen+".png";

    //for robot
        const choices = ["rock","paper","scissor"];
    
        const indexOfChoice =  Math.floor(Math.random() * 3);
        let AIchosen  = choices[indexOfChoice];
        displayAI.src = "images/"+AIchosen+".png";
    
    //processing the game
    
    if(chosen == "rock" && AIchosen == "rock"){
        light.style = "background-color: yellow; box-shadow: 0 0 10px rgb(244, 244, 188);";
    }else if(chosen == "rock" && AIchosen == "paper"){
        robot++;
        light.style = "background-color: red; box-shadow: 0 0 10px orangered;";
    }else if(chosen == "rock" && AIchosen == "scissor"){
        playerScore ++;
        light.style = " background-color: rgb(125, 201, 12); box-shadow: 0 0 10px greenyellow;";
    }else if(chosen == "paper" && AIchosen == "rock"){
        playerScore ++;
        light.style = " background-color: rgb(125, 201, 12); box-shadow: 0 0 10px greenyellow;";
    }else if(chosen == "paper" && AIchosen == "paper"){
        light.style = "background-color: yellow; box-shadow: 0 0 10px rgb(244, 244, 188);";
    }else if(chosen == "paper" && AIchosen == "scissor"){
        robot++;
         light.style = "background-color: red; box-shadow: 0 0 10px orangered;";
    }else if(chosen == "scissor" && AIchosen == "rock"){
        robot++;
         light.style = "background-color: red; box-shadow: 0 0 10px orangered;";
    }else if(chosen == "scissor" && AIchosen == "paper"){
        playerScore ++;
        light.style = " background-color: rgb(125, 201, 12); box-shadow: 0 0 10px greenyellow;";
    }else if(chosen == "scissor" && AIchosen == "scissor"){
        light.style = "background-color: yellow; box-shadow: 0 0 10px rgb(244, 244, 188);";
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
        window.location.href = "result.html?player="+  enteredName.textContent;
    }else if(bestScoreToBeat == robot){
        window.location.href = "result.html?player=robot";
    }else{
    
    }
      }, 1000); // Adjust the time according to your animation duration
}

function showRange(x){
    let rangeInfo = document.getElementById('rangeInfo');
    rangeInfo.textContent = "Set best score: "+ x.value;
}