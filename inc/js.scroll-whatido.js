$(document).ready(function() {

	let mainString = [
		"Develop web pages",
		"Help others",
		"Re-style web pages",
		"Develop web apps",
		"Manage servers",
		"Learn new things"
	];
	let mainCounter = 0;

	function mainFunction(){
		let counter = 1;
		let el = $('#whatido');
		let string = mainString[mainCounter];

		el.html(" ");
		mainCounter ++;
		if (mainCounter >= mainString.length){
			mainCounter = 0;
		}

		function addChar(){
			let newString = string.slice(0,counter);
			counter++;
			el.html('aljaz@aljaxus.eu~$ ' + newString);

			if (newString.length < string.length){
				setTimeout(function(){
					addChar();
				}, Math.floor(Math.random() * 250) + 90);
		    }
		}

		addChar();
	}

	setInterval(function(){
		mainFunction();
	}, 7000);
	mainFunction();

});
