var userScore = 0;
var computerScore = 0;
const userScore_span = document.getElementById("user-score");
const computerScore_span = document.getElementById("computer-score");
const scoreBoard_div = document.querySelector(".score-board");
const result_p = document.querySelector(".result > p");
const rock_div = document.getElementById("rock");
const paper_div = document.getElementById("paper");
const scissors_div = document.getElementById("scissors");

function getComputerChoice(){
	const choices= ["rock", "paper", "scissors"]
	return choices[Math.floor(Math.random()*3)];
}

function win(userChoice, computerChoice){
	console.log("running win function");
	userScore++;
	userScore_span.innerHTML = userScore;
	result_p.innerHTML = userChoice.toUpperCase() + " BEATS " + computerChoice.toUpperCase() + ". YOU WIN!";
}

function lose(userChoice, computerChoice){
	console.log("running lose function");
	computerScore++;
	computerScore_span.innerHTML = computerScore;
	result_p.innerHTML = userChoice.toUpperCase() + " BEATS " + computerChoice.toUpperCase() + ". YOU LOSE!";
}

function draw(userChoice, computerChoice){
	console.log("running draw function");
	result_p.innerHTML = userChoice.toUpperCase() + " BEATS " + computerChoice.toUpperCase() + ". DRAW!";
}

function game(userChoice){
	//Debug log
	console.log("running game function");
	const computerChoice = getComputerChoice();
	switch(userChoice + computerChoice){
		case"rockscissors":
		case"paperrock":
		case"scissorspaper":
			win(userChoice, computerChoice);
			break;
		case"paperscissors":
		case"scissorrock":
		case"rockpaper":
			lose(userChoice, computerChoice);
			break;
		case"paperpaper":
		case"scissorsscissors":
		case"rockrock":
			draw(userChoice, computerChoice);
			break;
	}
}

function main(){

	rock_div.addEventListener('click', function(){
		console.log("clicked rock");
		game("rock");
	})
	
	paper_div.addEventListener('click', function(){
		console.log("clicked paper");
		game("paper");
	})

	scissors_div.addEventListener('click', function(){
		console.log("clicked scissors");
		game("scissors");
	})
}

//Running whole app
main();
