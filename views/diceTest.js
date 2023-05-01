let score = 0;
    function rollDice(){



        console.log("Rolling Dice!");
        let die1 = Math.floor(Math.random()*6)+1;
        let die2 = Math.floor(Math.random()*6)+1;
        console.log(die1 + ", " + die2);
        if(die1 + die2 === 7 || die1 + die2 === 11){
            console.log("You lose!");
            console.log("Final score: " + score);
            score = 0;
        } else {
            score++;
            console.log(score);
        }


    }