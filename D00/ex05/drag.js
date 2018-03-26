window.onload = function(){ 
	dragElement(document.getElementById(("chat-section")));
};
function dragElement(elmnt) {
	var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
	elmnt.onmousedown = dragMouseDown;
  
	function dragMouseDown(e) {
	  e = e || window.event;
	  // get the mouse cursor position at startup:
	  pos3 = e.clientX;
	  pos4 = e.clientY;
	  document.onmouseup = closeDragElement;
	  // call a function whenever the cursor moves:
	  document.onmousemove = elementDrag;
	  console.log(pos3);
	  console.log(pos4);
	  console.log("--");
	}
  
	function elementDrag(e) {
	  e = e || window.event;
	  // calculate the new cursor position:
	  pos1 = pos3 - e.clientX;
	  pos2 = pos4 - e.clientY;
	  pos3 = e.clientX;
	  pos4 = e.clientY;
	  // set the element's new position:
	  elmnt.style.bottom = parseInt(elmnt.style.bottom, 10) + pos2 + "px";
	  elmnt.style.left = parseInt(elmnt.style.left, 10) - pos1 + "px";
	}
  
	function closeDragElement() {
	  /* stop moving when mouse button is released:*/
	  document.onmouseup = null;
	  document.onmousemove = null;
	}
}