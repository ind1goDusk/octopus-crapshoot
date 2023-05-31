//Variables
let score = 0;
let highScore = 0;
let tag = document.getElementById("banner");
let scoreDisplay = document.getElementById("score");
let highScoreDisplay = document.getElementById("highscore");

var dice1 = document.getElementById("dice1");
var dice2 = document.getElementById("dice2");
var sides1 = dice1.getElementsByClassName("side");
var sides2 = dice2.getElementsByClassName("side");
var result = document.getElementById("result");



//Roll Dice Function
/*
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
*/


function rollDice(doubleDown) {
    //Set Score Display to Empty String
    tag.innerText = "";

    // Disable the button during the animation
    var button = document.querySelector("button");
    button.disabled = true;

    // Generate random numbers between 1 and 6 for the dice rolls
    var roll1 = Math.floor(Math.random() * 6) + 1;
    var roll2 = Math.floor(Math.random() * 6) + 1;

    // Update the text of the front sides with the rolled numbers
    sides1[0].innerText = roll1;
    sides2[0].innerText = roll2;

    // Restart the animation by cloning and replacing the dice elements
    var newDice1 = dice1.cloneNode(true);
    var newDice2 = dice2.cloneNode(true);
    dice1.parentNode.replaceChild(newDice1, dice1);
    dice2.parentNode.replaceChild(newDice2, dice2);

    // Update the references to the new dice elements
    dice1 = newDice1;
    dice2 = newDice2;
    sides1 = dice1.getElementsByClassName("side");
    sides2 = dice2.getElementsByClassName("side");

    // Wait for the animation to complete before displaying the results
    setTimeout(function() {
        // Re-enable the button
        button.disabled = false;

        // Update the result with the rolled numbers
        result.innerText = "Results: " + roll1 + " & " + roll2;

        //Determine Win or Loose
        let total = roll1+roll2;

        //check if player doubled down
        if(doubleDown){
            let badScores = new Set([2,7,11,12]);
            if(badScores.has(total)){
                tag.classList.add("text-danger");
                tag.innerText="You Lose!";
                scoreDisplay.innerText = 'Final Score: ' + score;
                score = 0;
            } else {
                score += total;
                scoreDisplay.innerText= `Score: ${score}`;

            }

        }
        //otherwise, roll regularly
        else if(total === 7 || total === 11){

            console.log("You lose!");
            console.log("Final score: " + score);
            tag.classList.add("text-danger");
            tag.innerText="You Lose!";
            scoreDisplay.innerText = 'Final Score: ' + score;
            score = 0;
        } else {

            score++;
            scoreDisplay.innerText = `Score: ${score}`;
            console.log(score);
        }


        //check if the player



    }, 2000); // Set the timeout to match the animation duration


}


function bet(wager, roll1, roll2){
    return roll1 === wager || roll2 === wager;
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