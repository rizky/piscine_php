var formAction = 0;

function form(event){
	event.preventDefault();
    var question = document.querySelector("#form input[type='text']").value;
    var reponse = document.getElementById("reponse");
    switch(formAction) {
        case 0:
            if (question.toLowerCase().indexOf("no") !== -1) {
				reponse.innerHTML = "Welcome back! Which menu do you want to access";
				formAction = 1;
            } else if (question.toLowerCase().indexOf("yes") !== -1 || question.toLowerCase().indexOf("oui") !== -1) {
				reponse.innerHTML = "Welcome to 42! Which menu do you want to access";
				formAction = 1;
            } else {
                reponse.innerHTML = "I don't understand, Are you new?";
			}
			break;
		case 1:
			if (question.toLowerCase().indexOf("advance") !== -1){
				selectImg(document.getElementById("advance")); goto('login');
			} else if (question.toLowerCase().indexOf("take") !== -1){
				selectImg(document.getElementById("take")); goto('action');
			} else if (question.toLowerCase().indexOf("look") !== -1){
				selectImg(document.getElementById("look")); goto('look');
			} else if (question.toLowerCase().indexOf("use") !== -1){
				selectImg(document.getElementById("use")); goto('help');
			} else if (question.toLowerCase().indexOf("speak") !== -1){
				selectImg(document.getElementById("speak")); toggleSpeak();
			} else if (question.toLowerCase().indexOf("book") !== -1){
				selectImg(document.getElementById("book")); goto('dont-panic');
			} else if (question.toLowerCase().indexOf("towel") !== -1){
				selectImg(document.getElementById("towel")); goto('piscine');
			} else if (question.toLowerCase().indexOf("brick") !== -1){
				selectImg(document.getElementById("brick")); goto('art');
			} else if (question.toLowerCase().indexOf("search") !== -1){
				selectImg(document.getElementById("search")); goto('bing');
			} 
    }
    document.querySelector("#form input[type='text']").value = " ";
}