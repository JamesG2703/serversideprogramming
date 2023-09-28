function start(){
	var userInput = prompt("Please enter a phrase", "type your phrase here"); //Prompt for the user to enter a phrase
	var str = "";
	var letter;
	
	length = userInput.length;
	phrase.innerHTML = "<h3>" + userInput.toUpperCase() + "</h3>"; //Phrase to be printed
	phrase = document.getElementById("phrase");
	
	for (i=0; i<length; i++){
		letter = userInput[i];
		
		if (letter == " ") {
			letter = "interval";
		}
		str += "<img src='semgif/"+ letter +".gif' ;/> ";
	}
	results.innerHTML = str; //Phrase to be printed in semaphore
	
}

var startBtn = document.getElementById("start");
startBtn.addEventListener('click', start, false);