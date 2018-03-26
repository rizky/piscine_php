function selectImg(elem) {
    var img = document.getElementsByTagName('img');
    for (i = 0; i < img.length; i++) {
		img[i].classList.remove('selected')
    }
	elem.classList.add('selected');
}
function toggleSpeak() {
    var x = document.getElementsByClassName("chat-section")[0];
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
function goto(name){
	var contents = document.getElementsByClassName("content");
    for (i = 0; i < contents.length; i++) {
		contents[i].style.display = "none";
	}
	var x = document.getElementsByClassName(name)[0];
    x.style.display = "block";
}
window.onload = function () {
    var contents = document.getElementsByClassName("content");
    for (i = 0; i < contents.length; i++) {
		contents[i].style.display = "none";
	}
}