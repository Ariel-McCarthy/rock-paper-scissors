var userChoice = null;
var computerChoice = null;
var table=document.getElementById("result");
var row=table.insertRow(table.rows.length);
var cell=row.insertCell(row.cells.length);
var img=document.createElement("img");

$(document).ready(function ()
{
     $('#rock').click(function()
     {
        userChoice = "rock";
        newComputerChoice();
        computResult();
    });
    $('#paper').click(function()
    {
        userChoice = "paper";
        newComputerChoice ();
        computResult();
    });
    $('#scissors').click(function()
    {
        userChoice = "scissors";
        newComputerChoice ();
        computResult();
    });
});

function newComputerChoice ()
{
    computerChoice = Math.floor(Math.random() * 3) + 1;

    if (computerChoice == 1)
    {
        computerChoice = "rock";
    }
    else if (computerChoice == 2)
    {
        computerChoice = "paper";
    }
    else 
    {
        computerChoice = "scissors";
    }
}
function computResult()
{
    var result; 
    if (userChoice == computerChoice)
    {
        result="Tie!";
    } 
    else if (userChoice == "rock" && computerChoice == "scissors")
    {
        result="You win!";
    } 
    else if (userChoice == "paper" && computerChoice == "rock")
    {
        result="You win!";
    } 
    else if (userChoice == "scissors" && computerChoice == "paper")
    {
        result="You win!";
    } 
    else if (computerChoice == "rock" && userChoice == "scissors")
    {
        result="Sorry, you lose.";
    } 
    else if (computerChoice == "paper" && userChoice == "rock")
    {
        result="Sorry, you lose.";
    } 
    else if (computerChoice == "scissors" && userChoice == "paper")
    {
        result="Sorry, you lose.";
    }

    img.src=document.getElementById(computerChoice).src;
    $(cell).append(img);
    cell=row.insertCell(row.cells.length);
    img=document.createElement("img");
    img.src=document.getElementById(userChoice).src;
    $(cell).append(img);
    cell=row.insertCell(row.cells.length);
    cell.innerHTML=result;
}