var ft_list;
var cookie = [];

$(document).ready(function(){
    $('#new').click(newTodo);
    $('#ft_list div').click(deleteTodo);
	ft_list = $('#ft_list');
	var tmp = getCookie("todos");
    if (tmp) {
        cookie = JSON.parse(tmp);
        cookie.forEach(function (e) {
            addTodo(e);
        });
    }
});

function getCookie(name) {
	var value = "; " + document.cookie;
	var parts = value.split("; " + name + "=");
	if (parts.length == 2) return parts.pop().split(";").shift();
};

function saveToCookie(){
    var todo = ft_list.children();
    var newCookie = [];
    for (var i = 0; i < todo.length; i++)
        newCookie.unshift(todo[i].innerHTML);
	document.cookie= "todos=" + JSON.stringify(newCookie);
}

function newTodo(){
    var todo = prompt("What do you want to do?", '');
    if (todo !== '') {
        addTodo(todo)
	}
}

function addTodo(todo){
	ft_list.prepend($('<div>' + todo + '</div>').click(deleteTodo));
	saveToCookie();
}

function deleteTodo(){
	this.remove();
	saveToCookie();
}