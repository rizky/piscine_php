function moveToSelected(element) {
	if (element == "next") {
		var selected = document.querySelectorAll(".selected").nextElementSibling;
	} else if (element == "prev") {
		var selected = document.querySelectorAll(".selected").previousElementSibling;
	} else {
		var selected = element;
	}
	var next = selected.nextElementSibling;
	var prev = selected.previousElementSibling;
	var prevSecond = prev.previousElementSibling;
	var nextSecond = next.nextElementSibling;
	selected.className = '';
	selected.classList.add('selected');
	prev.className = '';
	$(prev).addClass("prev");
	next.className = '';
	$(next).addClass("next");
	$(nextSecond).removeClass().addClass("nextRightSecond");
	$(prevSecond).removeClass().addClass("prevLeftSecond");


	$(nextSecond).nextAll().removeClass().addClass('hideRight');
	$(prevSecond).prevAll().removeClass().addClass('hideLeft');
}
