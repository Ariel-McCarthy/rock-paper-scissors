<!DOCTYPE html>
<html>
    <head>
        <title>Rock Paper Scissors</title>
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <h1 class="bold">Rock Paper Scissors</h1>
            <p>To play: press <strong>s</strong> for scissors, <strong>r</strong> for rock, or <strong>p</strong> for paper</p>
        </div>
    
        <div class="container">
            <div class="row">
                <div class="col-6 sub_heading">
                    <h3>User Choice</h2>
                </div>
          
                <div class="col-6 sub_heading">
                    <h3>Computer Choice</h2>
                </div>
            </div>
    
            <div class="row">
                <div class="col-6 choice_image">
                    <img src="images/transparent.png" id="user_image">
                </div>
          
                <div class="col-6 choice_image">
                    <img src="images/transparent.png" id="computer_image">
                </div>
            </div>
    
            <div class="row">
                <div class="col-12 heading" id="result_box">
                    <h2>Result: <span id="winner_span">Nobody has won yet!</span></h3>
                </div>
            </div>
        </div>
    
        <div class="container major_section">
        
            <div class="row">
                <div class="col-4 sub_heading">
                    <h3>Wins</h3>
                </div>
          
                <div class="col-4 sub_heading">
                    <h3>Losses</h3>
                </div>
          
                <div class="col-4 sub_heading">
                    <h3>Ties</h3>
                </div>
            </div>
        
            <div class="row">
                <div class="col-4 tally">
                    <h4><span id="wins">0</span></h4>
                </div>
          
                <div class="col-4 tally">
                    <h4><span id="losses">0</span></h4>
                </div>
          
                <div class="col-4 tally">
                    <h4><span id="ties">0</span></h4>
                </div>
            </div>
        </div>
    
        <script type="text/javascript">
         
        var computerChoices = ["r", "p", "s"];
        var losses = 0;
        var ties = 0;
        var wins = 0;
        var result;
      
        // Run every time user presses a key (instead of clicking)
        document.onkeyup = function(event) 
        {
            var userChoice = event.key;
            var computerChoice = computerChoices[Math.floor(Math.random() * computerChoices.length)];
            
            // Check if valid key
            if ((userChoice == "r") || (userChoice == "p") || (userChoice == "s")) 
            {     
                if ((userChoice == "r") && (computerChoice == "s")) 
                {
                    wins++;
                    result = "win";
                } 
                else if ((userChoice == "s") && (computerChoice == "p")) 
                {
                    wins++;
                    result = "win";
                } 
                else if ((userChoice == "p") && (computerChoice == "r")) 
                {
                    wins++;
                    result = "win";
                } 
                else if (userChoice == computerChoice) 
                {
                    ties++;
                    result = "tie";
                } 
                else 
                {
                    losses++;
                    result = "loss";
                }
                
                
                if (userChoice === "r") 
                {
                    document.getElementById("user_image").src="img/rock.png"
                } 
                else if (userChoice === "s") 
                {
                    document.getElementById("user_image").src="img/scissors.png"
                } 
                else if (userChoice === "p") 
                {
                    document.getElementById("user_image").src="img/paper.png"
                }
                
                
                if (computerChoice === "r") 
                {
                    document.getElementById("computer_image").src="img/rock.png"
                } 
                else if (computerChoice === "s") 
                {
                    document.getElementById("computer_image").src="img/scissors.png"
                } 
                else if (computerChoice === "p") 
                {
                    document.getElementById("computer_image").src="img/paper.png"
                }
                
                
                if (result === "win") 
                {
                    document.getElementById("winner_span").innerHTML = "You win!"
                    document.getElementById("result_box").style.backgroundColor = "rgba(0,255,0,.5)";
                } 
                else if (result === "loss") 
                {
                    document.getElementById("winner_span").innerHTML = "Computer wins!"
                    document.getElementById("result_box").style.backgroundColor = "rgba(255,0,0,.5)";
                } 
                else 
                {
                    document.getElementById("winner_span").innerHTML = "Tie game!"
                    document.getElementById("result_box").style.backgroundColor = "rgba(255,255,0,0.5)";
                }
              
                document.getElementById("wins").innerHTML = wins;
                document.getElementById("losses").innerHTML = losses;
                document.getElementById("ties").innerHTML = ties;
            }
        }; 
        </script>
    </body>
</html>