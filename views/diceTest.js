//Variables
let score = 0;
let highScore = 0;
let tag = document.getElementById("numbers");
let scoreDisplay = document.getElementById("score");
let highScoreDisplay = document.getElementById("highscore");


//Set Score Display to Empty String
scoreDisplay.innerText = "";

//Roll Dice Function
function rollDice(){

        //Setting Display Before Rolling
        console.log("Rolling Dice!");
        scoreDisplay.innerText = "Rolling Dice!";
        tag.classList.remove("text-danger");

        //Variables
        let die1 = Math.floor(Math.random()*6)+1;
        let die2 = Math.floor(Math.random()*6)+1;
        let total = die1 + die2;

        //Setting Display After Rolling
        console.log(`${die1}, ${die2} = ${total}`);
        tag.innerText = `${die1}, ${die2} = ${total}`;

        //Determine Win or Loose
        if(total === 7 || total === 11){

            console.log("You lose!");
            console.log("Final score: " + score);
            tag.classList.add("text-danger");
            scoreDisplay.innerText = 'Final Score: ' + score;
           // checkHighScore(score);
            score = 0;
        } else {

            score++;
            scoreDisplay.innerText = `Score: ${score}`;
            console.log(score);
        }
}

//Fold Function
function fold(){
    checkHighScore(score);
    scoreDisplay.innerText = "Score: 0";
    score=0;
}

//Check High Score Function
function checkHighScore(score) {

    if(score > highScore) {
        highScore = score;
        highScoreDisplay.innerText = "High Score: " + highScore;
    }
}