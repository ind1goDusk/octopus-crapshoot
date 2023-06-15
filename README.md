# octopus-crapshoot
**Authors:** David Kurilla, Dahlia Adams, Muhammad Shahid


This program runs a browser-based game of crapshoot: a game
where you bet everything you've earned on one more throw of the dice.

The game simulates a pair of dice, giving the user a higher score 
the more the dice are rolled. But if the dice roll the number 7, the game
is lost and all the money earned along with it. 

when you click *Roll Dice*, the pair of dice generate a random number using the rollDice() function in
diceTest.js. if that number is 7 or 11, it triggers a fail state and clears your score.
when you click *Double Down*, it calls rollDice(true) which tells the function to award more points for success, 
but also adds the numbers 2 and 12 as potential failures. double risk, double reward. 

You can log in and register a new account by clicking on *account* on the navbar, which saves your username to 
the database. 



## Requirements:
* 1: spearates all database / business logic using MVC pattern
* 2: Routes all URLs and leverages a templating language using the Fat-Free framework.
* 3: Has a clearly defined database layer using PDO and prepared statements to prevent SQL injection. 
* 4: Data can be viewed and added. 
* 5: Has a history of commits from both team members to a Git repository. Commits are clearly commented.
* 6: Uses OOP, and utilizes multiple classes, including at least one inheritance relationship.
* 7: Contains full Docblocks for all PHP files and follows PEAR standards.
* 8: Has full validation on the server side through PHP.
* 9: All code is clean, clear, and well-commented. DRY (Don't Repeat Yourself) is practiced.
* 10: Submission shows adequate effort for a final project in a full-stack web development course.

Requirements 1-3 are all met. 

Data can be added and viewed using prepared statements in datalayer.php. It cannot be modified because we 
tried to impliment AJAX but unfortunately ran out of time

Our team has, at the time of writing this readme, 73 commits between our entire team.  

As seen by our UML diagram, OOP is used while utilizing multiple classes.

All of our functions are clearly documented throughout project.

Server-side validation is fully implemented in validations.php file.

DRY is practiced throughout program.

Adequate effort for a final project in a full-stack course was applied.

## UML Diagram
![UML Class Diagram](/images/uml_diagram.png "UML Diagram")


